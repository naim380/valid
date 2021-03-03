<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class seller extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    public function cars() {
        return $this->hasMany(Car::class); //pour chaque vendeur il y a plusieurs voiture
    }




}
