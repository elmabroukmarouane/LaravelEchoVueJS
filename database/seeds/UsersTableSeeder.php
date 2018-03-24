<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 10) as $index)
        {
            User::create(array(
                'name' => 'John' . $index,
                'email' => 'email' . $index . '@mail.com',
                'password' => bcrypt('123456')
            ));
        }
    }
}
