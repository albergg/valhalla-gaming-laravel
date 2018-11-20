<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::Create([
            'name' => 'Albert',
            'username' => 'aaa',
            'email' => 'alb@prueba.com',
            'password' => bcrypt('prueba'),
            'country' => 'Argentina',
            'avatar' =>'' ,
        ]);

        factory (User::class, 30)->create();
    }
}
