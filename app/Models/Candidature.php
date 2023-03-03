<?php

namespace App\Models;

use App\Models\Source;
use App\Models\Advancement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidature extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lien',
        'enterprise_id',
        'user_id',
        'source_id',
        'advancement_id'


    ];
    public function source()
    {
        return $this->belongsTo(Source::class);
    }
    public function advancement()
    {
        return $this->belongsTo(Advancement::class);
    }
    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class);
    }
}
