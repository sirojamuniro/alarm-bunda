<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sibling extends Model
{
    use HasFactory;

    protected $table = 'siblings';

    protected $guarded = ['id'];

    public function child()
    {
    	return $this->belongsTo(Child::class, 'user_id', 'id');
    }

}
