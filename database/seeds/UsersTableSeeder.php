<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'pasha',
            'email' => 'pornhub@gmail.com',
            'password' => bcrypt('zcwEN0qpMJMw9utzL036Xedlc1gz9zH/LNS8Co=oufL'),
        ]);
    }
}
