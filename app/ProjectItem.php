<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectItem extends Model
{
  protected $guarded = ['created_at', 'updated_at'];

  public function project()
  {
    return $this->belongsTo('App\Project');
  }

  public function item()
  {
    return $this->belongsTo('App\Item');
  }

}
