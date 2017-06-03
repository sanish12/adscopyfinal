<?php

namespace App;



class SellerProfile extends Model
{
  public function seller(){
    return $this->BelongsTo(seller::class);
  }
}
