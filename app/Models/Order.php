<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function formationsusers(){
        return $this->belongsTo(FormationUser::class, 'formation_user_id', 'id');
    }

    public function payments(){
        return $this->belongsTo(Payment::class, 'payment_id', 'id');
    }

    public function states(){
        return $this->belongsTo(State::class, 'state_id', 'id');
    }
}
