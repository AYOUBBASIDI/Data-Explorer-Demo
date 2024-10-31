<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Order;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        User::insert([
            ['name' => 'John Doe', 'email' => 'john@example.com', 'password' => bcrypt('password123')],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'password' => bcrypt('password123')],
            ['name' => 'Alice Johnson', 'email' => 'alice@example.com', 'password' => bcrypt('password123')],
        ]);

        // Insert products
        Product::insert([
            ['name' => 'Laptop', 'price' => 999.99, 'stock' => 10],
            ['name' => 'Smartphone', 'price' => 499.99, 'stock' => 25],
            ['name' => 'Headphones', 'price' => 49.99, 'stock' => 100],
        ]);

        // Insert orders
        Order::insert([
            ['user_id' => 1, 'product_id' => 1, 'quantity' => 1, 'total_price' => 999.99],
            ['user_id' => 2, 'product_id' => 2, 'quantity' => 2, 'total_price' => 999.98],
            ['user_id' => 3, 'product_id' => 3, 'quantity' => 5, 'total_price' => 249.95],
        ]);
                
        
    }
}
