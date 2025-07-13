<?php

namespace Domain\User\ViewModels;


use App\Models\User;
use Support\Traits\Makeable;

class UserViewModel
{
    use Makeable;

    public function user($id)
    {
        return User::query()
            ->where('published', 1)
            ->where('id', $id)
            ->first();
    }


}
