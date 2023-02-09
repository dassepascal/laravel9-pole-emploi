<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    use HasFactory;
    protected $fillable = ['name','activity', 'phone','address','site'];
    // public function postes()
    // {
    //     return $this->hasMany(Poste::class);
    // }
}
