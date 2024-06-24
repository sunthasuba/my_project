<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $allowedFields = ['product_name', 'unit_price', 'unit_type', 'stock_level', 'category_id', 'created_at', 'updated_at'];
}
