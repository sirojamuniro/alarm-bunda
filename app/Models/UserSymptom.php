<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSymptom extends Model
{
    use HasFactory;

    protected $table = 'user_symptoms';

    protected $guarded = ['id'];

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function symptom()
    {
    	return $this->belongsTo(Symptoms::class, 'sympton_id', 'id');
    }

    public function userImunitation()
    {
    	return $this->belongsTo(UserImunitation::class, 'user_imunitation_id', 'id');
    }


}
