<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['brand','model','year','maxSpeed','isAutomatic','engine','numberOfDoors'];
    public static function search($take,$skip){
        $query = self::query();

        if($take != null && $skip != null){
            $query->take($take)->skip($skip);
        }
        return $query->get();
    }
}
