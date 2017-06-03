<?php

namespace App;



class category extends Model
{
  public function subcat()
{
  return $this->hasMany(Subcategory::class);
}
}
