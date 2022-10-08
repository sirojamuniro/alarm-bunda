<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imunitation extends Model
{
    use HasFactory;

    protected $table = 'imunitations';

    protected $guarded = ['id'];

    public function detailImunitation()
    {
        return$this->belongsToMany(Symptoms::class, 'detail_imunitations', 'imunitation_id', 'sympton_id');
    }
}
