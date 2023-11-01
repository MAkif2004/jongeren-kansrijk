<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituut extends Model
{
    use HasFactory;

    protected $table = 'instituten';

    protected $guarded = [];

    public function jongere()
    {
        return $this->hasMany(Jongere::class);
    }
}
