<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserKPSP extends Model
{
    use HasFactory;

    protected $table = 'user_kpsp';

    protected $guarded = ['id'];
}
