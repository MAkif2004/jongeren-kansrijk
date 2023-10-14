<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Medewerker extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'medewerkers';
}
