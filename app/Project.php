<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function items()
    {
        return $this->belongsToMany('App\Item', 'project_items')->withPivot('quantity');
    }
}
