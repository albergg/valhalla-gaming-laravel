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
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam magni reprehenderit optio doloremque minima adipisci! Commodi eaque provident nemo id, quasi eveniet ratione rerum? Laudantium placeat itaque dignissimos adipisci ex?'
        ]);

        factory (Product::class, 30)->create();
    }
}
