<?php

namespace App\Models;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DateFormation extends Model
{
    use HasFactory;

    public function formations(){
        return $this->hasMany(Formation::class);
    }
}
