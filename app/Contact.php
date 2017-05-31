<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'tel',
        'email',
        'company_name',
        'company_address'
    ];

    public function projects()
    {
        $this->hasMany('App\Project');
    }
}
