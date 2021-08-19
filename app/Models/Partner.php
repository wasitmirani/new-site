<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    public function partnerSection(){
        return $this->hasMany(PartnerSection::class, 'partner_id', 'id');
    }
    public function partnerCard(){
        return $this->hasMany(PartnerCard::class, 'partner_id', 'id')->orderBy('sort');
    }
    public function partnerFutures(){
        return $this->hasMany(PartnerFuture::class, 'partner_id', 'id')->orderBy('sort');
    }
}
