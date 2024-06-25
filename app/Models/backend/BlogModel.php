<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $primary_key = 'id';
}
