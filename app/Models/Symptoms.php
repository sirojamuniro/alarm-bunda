<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symptoms extends Model
{
    use HasFactory;

    protected $table = 'symptoms';

    protected $guarded = ['id'];

    public function detailImunitation()
    {
       return $this->belongsToMany(Imunitation::class, 'detail_imunitations', 'sympton_id', 'imunitation_id');
    }
}
