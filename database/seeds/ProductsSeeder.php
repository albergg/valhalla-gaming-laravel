<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create ([
            'name' => 'AM4 - Gigabyte GA-A320M-S2H',
            'price' => '2500',
            'brand' => 'Asus',
            'category' => 'Motherboard',
        ]);

        factory (Product::class, 99)->create();
    }
}
