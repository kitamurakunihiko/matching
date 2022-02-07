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
        //
        for ($i = 1; $i <= 12; $i++) {
            DB::table('users')->insert([
                'name' => 'User'.$i,
                'email' => 'User'.$i.'@mailaddress.com',
                'password' => bcrypt('aaaaa'),
            ]);
        }
        // $users = factory(App\User::class, 40)->create();
    }
}
