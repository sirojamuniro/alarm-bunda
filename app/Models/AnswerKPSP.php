<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerKPSP extends Model
{
    use HasFactory;

    protected $table = 'answer_kpsp';

    protected $guarded = ['id'];
}
