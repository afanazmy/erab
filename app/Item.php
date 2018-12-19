<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    public function projects()
    {
        return $this->belongsToMany('App\Project', 'project_items')->withPivot('quantity');
    }
}
