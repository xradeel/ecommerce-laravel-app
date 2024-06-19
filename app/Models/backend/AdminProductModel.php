<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProductModel extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primary_key = 'id';

    public function category()
    {
        return $this->belongsTo(AdminCategoryModel::class, 'category_id');
    }
}
