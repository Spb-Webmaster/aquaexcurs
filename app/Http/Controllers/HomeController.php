<?php

namespace App\Http\Controllers;

use Domain\ExcursionOrder\ViewModels\ExcursionOrderViewModels;
use Illuminate\Contracts\View\View;


class HomeController extends Controller
{
    public function index():View
    {
        //flash()->info('Hello');
        if(auth()->check()) {
            $user = auth()->user();
        } else {
            $user = false;
        }

     /*  $o =  ExcursionOrderViewModels::make()->orderId(276);
        $formatedDateTime = $o->created_at->format('d-m-Y--H-i');*/



       return view('home', [
           'user' => $user,
           ]
       );
    }


}
