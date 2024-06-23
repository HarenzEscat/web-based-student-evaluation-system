<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('products')->insert([
        //     'ID'=>1,
        //     'ProductName'=>'lotion',
        //     'Description'=>'sticky',
        //     'Price'=>150,
        //     'QuantityInStock'=>15
        // ]);
        // DB::table('supplier')->insert([
        //     'SupplierId'=>2,
        //     'SupplierName'=>'juan',
        //     'ContactNo'=>69123,
        //     'Address'=>'bataan'
        // ]);
        // DB::table('category')->insert([
        //     'SuplierID'=>3,
        //     'Supplier_Name'=>'juan',
        // ]);
        // DB::table('order')->insert([
        //     'OrderID'=>4,
        //     'OrderDate'=>'December',
        //     'TotalAmount'=>100,
        //     'Status'=>'Out of stock'
        // ]);
        // DB::table('customer')->insert([
        //     'CustomerID'=>5,
        //     'FirstName'=>'Juan',
        //     'LastName'=>'Dela Cruz',
        //     'Email'=>'juan@mail.com',
        //     'Phone'=>69123
        // ]);
        // DB::table('orderdetail')->insert([
        //     'OrderDetailID'=>6,
        //     'OrderID'=>4,
        //     'ProductID'=>1,
        //     'Quantity'=>600,
        //     'Subtotal'=>1000
        // ]);
    }
}