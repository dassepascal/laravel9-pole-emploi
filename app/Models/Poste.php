<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','experience','diplome','enterprise_id'];

    public function enterprise()
    {
        return $this->belongsTo((Enterprise::class));
    }

}
