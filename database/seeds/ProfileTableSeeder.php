<?php

use Illuminate\Database\Seeder;
use App\Profile;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // for ($i = 1; $i <= 12; $i++) {
        //     DB::table('profiles')->insert([
        //         'user_id' => $i,
        //         'name' => 'User'.$i,
        //         'nickname' => 'User'.$i,
        //     ]);
        // }
        // $posts = factory(App\Profile::class, 40)->create();
        Profile::create([
            'user_id' => '1',
            'name' => 'User1',
            'nickname' => 'User1',
            'age' => '20',
            'gender' => '1',
            'occupation' => '1',
            'prefectures' => '13',
            'alcohol' => '1',
            'count' => '1',
            'introduction' => 'あああ。あああああああああ。',
        ]);
        
        Profile::create([
            'user_id' => '2',
            'name' => 'User2',
            'nickname' => 'User2',
            'age' => '23~24',
            'gender' => '1',
            'occupation' => '2',
            'prefectures' => '13',
            'alcohol' => '2',
            'count' => '2',
            'introduction' => 'あああ。あああああああああ。',
        ]);
        
        Profile::create([
            'user_id' => '3',
            'name' => 'User3',
            'nickname' => 'User3',
            'age' => '21',
            'gender' => '1',
            'occupation' => '3',
            'prefectures' => '13',
            'alcohol' => '3',
            'count' => '3',
            'introduction' => 'あああ。あああああああああ。',
        ]);
        
        Profile::create([
            'user_id' => '4',
            'name' => 'User4',
            'nickname' => 'User4',
            'age' => '24~26',
            'gender' => '0',
            'occupation' => '4',
            'prefectures' => '13',
            'alcohol' => '4',
            'count' => '4',
            'introduction' => 'あああ。あああああああああ。',
        ]);
        
        Profile::create([
            'user_id' => '5',
            'name' => 'User5',
            'nickname' => 'User5',
            'age' => '20',
            'gender' => '0',
            'occupation' => '1',
            'prefectures' => '13',
            'alcohol' => '1',
            'count' => '1',
            'introduction' => 'あああ。あああああああああ。',
        ]);
        
        Profile::create([
            'user_id' => '6',
            'name' => 'User6',
            'nickname' => 'User6',
            'age' => '22~23',
            'gender' => '0',
            'occupation' => '2',
            'prefectures' => '13',
            'alcohol' => '2',
            'count' => '2',
            'introduction' => 'あああ。あああああああああ。',
        ]);
        
        Profile::create([
            'user_id' => '7',
            'name' => 'User7',
            'nickname' => 'User7',
            'age' => '21~22',
            'gender' => '1',
            'occupation' => '3',
            'prefectures' => '23',
            'alcohol' => '3',
            'count' => '3',
            'introduction' => 'あああ。あああああああああ。',
        ]);
        
        Profile::create([
            'user_id' => '8',
            'name' => 'User8',
            'nickname' => 'User8',
            'age' => '26',
            'gender' => '1',
            'occupation' => '4',
            'prefectures' => '23',
            'alcohol' => '4',
            'count' => '4',
            'introduction' => 'あああ。あああああああああ。',
        ]);
        
        Profile::create([
            'user_id' => '9',
            'name' => 'User9',
            'nickname' => 'User9',
            'age' => '20~21',
            'gender' => '1',
            'occupation' => '1',
            'prefectures' => '23',
            'alcohol' => '1',
            'count' => '1',
            'introduction' => 'あああ。あああああああああ。',
        ]);
        
        Profile::create([
            'user_id' => '10',
            'name' => 'User10',
            'nickname' => 'User10',
            'age' => '23',
            'gender' => '0',
            'occupation' => '2',
            'prefectures' => '23',
            'alcohol' => '2',
            'count' => '2',
            'introduction' => 'あああ。あああああああああ。',
        ]);
        
        Profile::create([
            'user_id' => '11',
            'name' => 'User11',
            'nickname' => 'User11',
            'age' => '25~26',
            'gender' => '0',
            'occupation' => '3',
            'prefectures' => '23',
            'alcohol' => '3',
            'count' => '3',
            'introduction' => 'あああ。あああああああああ。',
        ]);
        
        Profile::create([
            'user_id' => '12',
            'name' => 'User12',
            'nickname' => 'User12',
            'age' => '26',
            'gender' => '0',
            'occupation' => '4',
            'prefectures' => '23',
            'alcohol' => '4',
            'count' => '4',
            'introduction' => 'あああ。あああああああああ。',
        ]);
    }
}
