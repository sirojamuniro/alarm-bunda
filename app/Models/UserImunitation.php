<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserImunitation extends Model
{
    use HasFactory;

    protected $table = 'user_imunitations';

    protected $guarded = ['id'];
}
