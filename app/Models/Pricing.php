<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    public function pricingAddons(){
        return $this->hasMany(PricingAddon::class, 'price_id', 'id')->orderBy('sort');
    }

}
