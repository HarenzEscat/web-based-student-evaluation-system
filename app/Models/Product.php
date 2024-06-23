<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function saveProducts($data){
        return $this->create($data);
    }
    protected $fillables = ['ProductName','Description', 'Price', 'QuantityInStock'];
    protected $table = 'products';
    public function getProducts(){
        return $this->all();
    }
    public function deleteProducts($id){
        $products = $this->find($id);
        $products->delete();
    }
    public function updateProducts($id){
        return $this->find($id);
    }
    public function updatedProducts($data, $id){
        $products = $this->find($id);
        $products->update($data);
    }
}