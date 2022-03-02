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
            'nickname' => 'お肉大好き',
            'age' => '20~21歳',
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
            'nickname' => 'テニスサークル',
            'age' => '23~24歳',
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
            'nickname' => 'フットサルサークル',
            'age' => '21歳',
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
            'nickname' => 'お魚大好き',
            'age' => '24~26歳',
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
            'nickname' => '港区女子',
            'age' => '20歳',
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
            'nickname' => '渋谷女子',
            'age' => '22~23歳',
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
            'nickname' => '〇〇高校 サッカー部OB',
            'age' => '21~22歳',
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
            'nickname' => '筋トレ男子',
            'age' => '26歳',
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
            'nickname' => '〇〇専門学校',
            'age' => '20~21歳',
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
            'nickname' => '〇〇大学',
            'age' => '23歳',
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
            'nickname' => '人生の夏休み',
            'age' => '25~26歳',
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
            'nickname' => '総務部',
            'age' => '26歳',
            'gender' => '0',
            'occupation' => '4',
            'prefectures' => '23',
            'alcohol' => '4',
            'count' => '4',
            'introduction' => 'あああ。あああああああああ。',
        ]);
    }
}
