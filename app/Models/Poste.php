<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poste extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','experience_id','diplome','enterprise_id'];

    public function enterprise()
    {
        return $this->belongsTo((Enterprise::class));
    }

    public function experience()
    {
        return $this->belongsTo((Experience::class));
    }
}
