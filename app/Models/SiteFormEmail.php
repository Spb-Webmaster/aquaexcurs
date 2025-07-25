<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteFormEmail extends Model
{
    protected $table = 'site_form_emails';

    protected $fillable = [

        'params',
];


    protected $casts = [
        'params' => 'collection',
    ];

}
