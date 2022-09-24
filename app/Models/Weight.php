<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    use HasFactory;

    protected $table = 'weights';

    protected $guarded = ['id'];

    public function month()
    {
    	return $this->belongsTo(Month::class, 'month_id', 'id');
    }
}
