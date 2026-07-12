<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class CabinetTest extends TestCase
{
    /**
     * Часть миграций проекта завязана на продовые данные и падает на чистой
     * sqlite (в частности "excursions"), поэтому вместо RefreshDatabase
     * поднимаем только таблицы, необходимые для проверки логина/кабинета.
     */
    protected function setUp(): void
    {
        parent::setUp();

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('phone')->nullable();
            $table->string('avatar')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        // Общий layout (шапка/подвал/баннер) обращается к этим таблицам
        // напрямую, поэтому они нужны, чтобы страница кабинета отрендерилась целиком.
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('published')->default(1);
            $table->integer('sorting')->default(999);
            $table->text('submenu')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });

        Schema::create('menu_bottoms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('published')->default(1);
            $table->integer('sorting')->default(999);
            $table->text('submenu')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });

        Schema::create('current_informations', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('text')->nullable();
            $table->text('text2')->nullable();
            $table->text('params')->nullable();
            $table->timestamps();
        });
    }

    public function test_guest_is_redirected_to_login(): void
    {
        $response = $this->get(route('cabinet_user'));

        $response->assertRedirect(route('login'));
    }

    public function test_authenticated_user_sees_their_data(): void
    {
        $user = User::factory()->create([
            'name' => 'Иван Иванов',
            'email' => 'ivan@example.com',
            'phone' => '+79990000000',
        ]);

        $response = $this->actingAs($user)->get(route('cabinet_user'));

        $response->assertOk();
        $response->assertSee('Иван Иванов');
        $response->assertSee('ivan@example.com');
        $response->assertSee('+79990000000');
        $response->assertSee(route('logout'), false);
    }

    public function test_user_can_logout(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user);
        $this->assertAuthenticated();

        $response = $this->post(route('logout'));

        $response->assertRedirect(route('login'));
        $this->assertGuest();
    }

    public function test_guest_cannot_logout(): void
    {
        $response = $this->post(route('logout'));

        $response->assertRedirect(route('login'));
    }
}
