<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class seller extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    public function cars()
    {
<<<<<<< HEAD
        return $this->hasMany(Car::class); //pour chaque vendeur il y a plusieurs voiture
=======
        return $this->hasMany(Car::class) ; //pour chaque vendeur il y a plusieurs voiture
>>>>>>> 4fdc44b684fe96799f8e9349a674cca95193b8fc
    }

}
