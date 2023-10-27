<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jongere extends Model
{

    protected $table = 'jongeren';

    public function activiteit()
    {
        return $this->belongsTo(Activiteit::class);
    }
    public function instituut()
    {
        return $this->belongsTo(Instituut::class);
    }

    use HasFactory;
}
