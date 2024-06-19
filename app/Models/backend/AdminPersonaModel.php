<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPersonaModel extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $primary_key = 'id';
}
