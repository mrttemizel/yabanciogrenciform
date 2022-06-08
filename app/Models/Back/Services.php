<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    public function getServicesCategori(){
        return $this->hasOne(ServicesCatergori::class,'id','servicesCategori_id');
    }


    protected $guarded = [];
}
