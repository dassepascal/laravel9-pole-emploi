<?php

namespace App\Models;

use App\Models\Source;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidature extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lien',
        'enterprise',
        'user_id',
       'source_id'

    ];
    public function source()
    {
        return $this->belongsTo(Source::class);
    }

}
