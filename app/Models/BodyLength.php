<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyLength extends Model
{
    use HasFactory;

    protected $table = 'body_lengths';

    protected $guarded = ['id'];

    public function month()
    {
    	return $this->belongsTo(Month::class, 'month_id', 'id');
    }

}
