<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imunitation extends Model
{
    use HasFactory;

    protected $table = 'imunitations';

    protected $guarded = ['id'];
}
