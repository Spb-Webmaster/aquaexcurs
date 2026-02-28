<?php

namespace Domain\Excursion\ViewModels;


use App\Models\Excursion;
use App\Models\ExcursionOrder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ExcursionViewModel
{
    use Makeable;

    public function excursions():Collection  | null
    {

           if(auth()->check()) {
               /** если есть авторизация, то показываем тестовые экскурсии */
               return Excursion::query()
                   ->where('published', 1)
                   ->orderBy('sorting', 'desc')
                   ->get();
           } else {
               /** если нет авторизации, то тестовые экскурсии не показываем */
               return Excursion::query()
                   ->where('published', 1)
                   ->where('test', 0)
                   ->orderBy('sorting', 'desc')
                   ->get();
           }

    }

    public function excursion($slug = null):Model  | null
    {

        $q =  Excursion::query();

        if($slug) {
            $q->where('slug', $slug);
        }

        if(auth()->check()) {
            /** если есть авторизация, то показываем тестовые экскурсии */
            $q->where('test', 1);
        } else {
            /** если нет авторизации, то тестовые экскурсии не показываем */
            $q->where('test', 0);
        }

        $q->where('published', 1);

        return $q->first();

    }

    public function excursionId($id):Model  | null
    {

        return  Excursion::query()->where('id', $id)
            ->where('published', 1)->firstOrFail();

    }

    /**
     * @param $excursion_id
     * @param $limit
     * @return int|null
     * Функция для публикации реально оставшихся мест в билетах
     */
    public function saveTicketLimit($excursion_id, $limit):?int
    {
        $excursion = Excursion::find($excursion_id);
        $result = (int)$excursion->count_ticket - (int)$limit;
        // Проверяем, что результат положителен и является целым числом
        if ($result > 0 && is_int($result)) {
            $excursion->real_ticket = $result;
        } else {
            $excursion->price_hide = 0; // выключим продажи
            $excursion->real_ticket = 0; // продали больше, чем нужно
        }
        $excursion->save();
        return $result;

    }


}
