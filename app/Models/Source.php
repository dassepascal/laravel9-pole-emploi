<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use HasFactory;
    protected $fillable = [
        'label_source',
    ];
    public function candidatures()
    {
        return $this->hasMany(Candidature::class);
    }
}
