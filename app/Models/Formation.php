<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    public function dateformations(){
        return $this->belongsTo(DateFormation::class, 'date_formation_id', 'id');
    }

    public function domains(){
        return $this->belongsTo(Domain::class, 'domain_id', 'id');
    }
}
