<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountKPSP extends Model
{
    use HasFactory;

    protected $table = 'count_kpsp';

    protected $guarded = ['id'];
}
