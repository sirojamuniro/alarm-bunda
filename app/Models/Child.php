<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $table = 'children';

    protected $guarded = ['id'];

    public function sibling()
    {
    	return $this->hasMany(Sibling::class, 'child_id', 'id');
    }

    public function userChild()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
