<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralCategory extends Model {

  protected $table = 'general_categories';

    protected $fillable = [
      'title', 'description', 'image_url'
    ];

    public function general_items() {
      return $this->hasMany('App\GeneralItem', 'category_id');
    }
}
