<?php

namespace App\Models\filier;

use App\Models\groupe\Groupe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filier extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'filier_id',
    ];

    public function groupe()
    {
        return $this->hasMany(Groupe::class);
    }
}
