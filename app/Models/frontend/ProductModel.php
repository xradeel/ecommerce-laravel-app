<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'discount',
        'short_description',
        'long_description',
        'size',
        'color',
        'featured',
        'popular',
        'availability',
        'thumbnail1',
        'thumbnail2',
        'accesstoken',
    ];

    public function images()
    {
        return $this->hasMany(ProductImagesModel::class, 'product_id', 'id');
    }
}
