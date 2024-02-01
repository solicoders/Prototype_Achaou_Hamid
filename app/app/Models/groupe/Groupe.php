<?php

namespace App\Models\groupe;

use App\Models\filier\Filier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
    ];

    public function filier()
    {
        return $this->belongsTo(Filier::class);
    }
}
