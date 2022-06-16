<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    public function getBolum(){
        return $this->hasOne(YukselLisansBolumler::class,'id','bolum_id');
    }


    protected $guarded = [];
}
