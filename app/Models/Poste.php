<?php

namespace App\Models;

use App\Models\Diplome;
use App\Models\Enterprise;
use App\Models\Experience;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poste extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','experience_id','diplome_id','enterprise_id'];

    public function enterprise()
    {
        return $this->belongsTo((Enterprise::class));
    }

    public function experience()
    {
        return $this->belongsTo((Experience::class));
    }
    public function diplome()
    {
        return $this->belongsTo((Diplome::class));
    }
}
