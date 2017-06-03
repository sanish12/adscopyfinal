<?php

namespace App;



class Subcategory extends Model
{
    public function category(){
      $this->belongsTo(Subcategory::class);
    }
}
