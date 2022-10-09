<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserImunitation extends Model
{
    use HasFactory;

    protected $table = 'user_imunitations';

    protected $guarded = ['id'];

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }
    // public function symptom()
    // {
    // 	return $this->belongsTo(Symptoms::class, 'sympton_id', 'id');
    // }

    public function imunitationParent()
    {
    	return $this->belongsTo(Imunitation::class, 'imunitation_id', 'id');
    }

    public function userSymptom()
    {
    	return $this->hasMany(UserSymptom::class, 'user_imunitation_id', 'id');
    }
}
