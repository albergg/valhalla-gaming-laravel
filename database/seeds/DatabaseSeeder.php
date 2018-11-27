<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'products',
            'users',
            // 'nombre_de_otra_tabla',
        ]);
  
        // Ejecutar los seeders:
        $this->call(ProductsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(CategorySeeder::class);

        $products = \App\Product::all();
        $categories = \App\Category::all();
        $brands = \App\Brand::all();
        $users = \App\User::all();

        // foreach ($products as $product) {
        //     $product->brand()->sync($brands->random(3));
        // }

        for ($i = 0; $i < count($products); $i++) {
			$cat = $categories[rand(0,14)];
			$bra = $brands[rand(0,13)];
			$cat->products()->save($products[$i]);
            $bra->products()->save($products[$i]);
            $products[$i]->user()->associate($users[rand(0,29)])->save();
        }
        	
    }

    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}