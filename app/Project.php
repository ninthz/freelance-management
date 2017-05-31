<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'contact_id',
        'name',
        'status',
        'started_at',
        'deadline_at',
        'finished_at'
    ];

    public function contact()
    {
        return $this->belongsTo('App\Project');
    }
}
