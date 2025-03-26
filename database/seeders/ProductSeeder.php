<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Query builder
        // DB::table('products')->insert([
        //     [
        //         'name'       => 'Oversized Hoodies Vintage',
        //         'stock'      => 10,
        //         'price'      => 150000,
        //         'image'      => 'image.jpg',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name'       => 'Baggy Cargo Pants',
        //         'stock'      => 5,
        //         'price'      => 175000,
        //         'image'      => 'image.jpg',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name'       => 'Golf Cap',
        //         'stock'      => 10,
        //         'price'      => 50000,
        //         'image'      => 'image.jpg',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);

        // Eloquent ORM
        Product::create([
            'name'       => 'Backpack',
            'stock'      => 7,
            'price'      => 250000,
            'image'      => 'image.jpg',
        ]);
    }
}
