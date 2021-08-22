<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integration extends Model
{
    use HasFactory;
    public function integrationSection(){
        return $this->hasMany(IntegrationSection::class, 'integration_id', 'id')->take(2);
    }
    public function integrationCard(){
        return $this->hasMany(IntegrationCard::class, 'integration_id', 'id')->take(4);
    }
}
