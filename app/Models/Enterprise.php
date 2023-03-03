<?php

namespace App\Models;

use App\Models\Candidature;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enterprise extends Model
{
    use HasFactory;
    protected $fillable = ['name','activity', 'phone','address','site'];
    public function postes()
    {
        return $this->hasMany(Poste::class);
    }
    public function candidatures()
    {
        return $this->hasMany(Candidature::class);
    }
}
