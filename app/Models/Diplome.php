<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    use HasFactory;
    protected $fillable = ['diplome'];
    public function postes()
    {
        return $this->hasMany(Poste::class);
    }
}
