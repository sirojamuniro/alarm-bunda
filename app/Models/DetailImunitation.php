<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailImunitation extends Model
{
    use HasFactory;

    protected $table = 'detail_imunitations';

    protected $guarded = ['id'];
}
