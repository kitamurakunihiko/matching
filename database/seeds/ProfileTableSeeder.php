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
            'nickname' => '服好き',
            'age' => '25~26歳',
            'gender' => '1',
            'occupation' => '4',
            'prefectures' => '13',
            'alcohol' => '1',
            'count' => '2',
            'introduction' => "プロフィール見てくれてありがとうー服好きの3人組です👕\n人数は3対3が希望ですが、後1人なら増やせそうです！\nよろしくお願いします！",
        ]);
        
        Profile::create([
            'user_id' => '2',
            'name' => 'User2',
            'nickname' => 'キャンパー🔥',
            'age' => '22歳',
            'gender' => '1',
            'occupation' => '2',
            'prefectures' => '13',
            'alcohol' => '2',
            'count' => '1',
            'introduction' => "プロフィールを見てくれてありがとうございます！\nキャンプが大好きな2人組です🔥キャンプばっかりしていて出会いがないので登録しました笑笑\n\nよろしくお願いいたします！",
        ]);
        
        Profile::create([
            'user_id' => '3',
            'name' => 'User3',
            'nickname' => '高学歴',
            'age' => '25歳',
            'gender' => '1',
            'occupation' => '4',
            'prefectures' => '13',
            'alcohol' => '3',
            'count' => '3',
            'introduction' => "プロフィールを見てくれてありがとうございます🙇‍♂️高学歴だけが取り柄の4人組です📚笑笑\n出会いの場がなく登録しました、よろしくお願いいたします！",
        ]);
        
        Profile::create([
            'user_id' => '4',
            'name' => 'User4',
            'nickname' => 'お酒大好き🍻',
            'age' => '22歳',
            'gender' => '0',
            'occupation' => '2',
            'prefectures' => '13',
            'alcohol' => '1',
            'count' => '1',
            'introduction' => "プロフィールを見てくれてありがと！お酒が大好きな大学生です🍻\nワイワイ騒ぎながらお酒を飲むのが好きなので、登録しました！\nよろしくお願いします！",
        ]);
        
        Profile::create([
            'user_id' => '5',
            'name' => 'User5',
            'nickname' => '着物好き女子',
            'age' => '24歳',
            'gender' => '0',
            'occupation' => '4',
            'prefectures' => '13',
            'alcohol' => '3',
            'count' => '3',
            'introduction' => "プロフィールを見てくれてありがとうございます！着物好きの4人組です👘\n卒業式で着物を着てから好きになり、時々旅行へ出掛けています！\n楽しくワイワイしたいです、よろしくお願いします！",
        ]);
        
        Profile::create([
            'user_id' => '6',
            'name' => 'User6',
            'nickname' => 'バンド女子',
            'age' => '20歳',
            'gender' => '0',
            'occupation' => '1',
            'prefectures' => '13',
            'alcohol' => '2',
            'count' => '2',
            'introduction' => "各々バンドを組んでいる音楽好きの3人組です🎸\n今は名古屋の音楽関係の専門学校に通いながら、バンド活動をしています！\nよろしくお願いします！🥁",
        ]);
        
        Profile::create([
            'user_id' => '7',
            'name' => 'User7',
            'nickname' => '呑み友🍻',
            'age' => '20~21歳',
            'gender' => '1',
            'occupation' => '2',
            'prefectures' => '23',
            'alcohol' => '1',
            'count' => '3',
            'introduction' => "プロフィールを見てくれてありがとう！同じ大学の飲み友です🍶\n毎日のように呑んでいるので、一緒に呑める相手を探しに登録しました！よろしくお願いします！",
        ]);
        
        Profile::create([
            'user_id' => '8',
            'name' => 'User8',
            'nickname' => '筋トレ',
            'age' => '26歳',
            'gender' => '1',
            'occupation' => '4',
            'prefectures' => '23',
            'alcohol' => '4',
            'count' => '2',
            'introduction' => "筋トレ大好き3人組です！💪\n社会人になり筋トレを始めたら、ガッツリハマってしまいました笑笑\n筋トレばかりして出会いがないので登録しました、よろしくお願いします！",
        ]);
        
        Profile::create([
            'user_id' => '9',
            'name' => 'User9',
            'nickname' => 'ウーバーイーツ',
            'age' => '23~24歳',
            'gender' => '1',
            'occupation' => '3',
            'prefectures' => '23',
            'alcohol' => '4',
            'count' => '1',
            'introduction' => "ウーバーイーツで生計を立ててる2人組です🚲\nいろんな人と出会いたいと思い登録しました！よろしくお願いします！",
        ]);
        
        Profile::create([
            'user_id' => '10',
            'name' => 'User10',
            'nickname' => '旅行大好き',
            'age' => '20歳',
            'gender' => '0',
            'occupation' => '2',
            'prefectures' => '23',
            'alcohol' => '3',
            'count' => '2',
            'introduction' => "同じ大学の旅行大好き3人組です🚅\n国内旅行を時間があればしています！卒業旅行はヨーロッパを回りたいと思っています🏰\nよろしくお願いします！",
        ]);
        
        Profile::create([
            'user_id' => '11',
            'name' => 'User11',
            'nickname' => 'カメラ女子',
            'age' => '25~26歳',
            'gender' => '0',
            'occupation' => '4',
            'prefectures' => '23',
            'alcohol' => '2',
            'count' => '1',
            'introduction' => "趣味で写真を撮っている2人組です📷出会いがなく登録しました！よろしくお願いします！🖼",
        ]);
        
        Profile::create([
            'user_id' => '12',
            'name' => 'User12',
            'nickname' => 'お肉大好き',
            'age' => '23歳',
            'gender' => '0',
            'occupation' => '4',
            'prefectures' => '23',
            'alcohol' => '4',
            'count' => '3',
            'introduction' => "プロフィールを見てくれてありがとう！\nお肉が好きでよく4人で食べに行ってます🍖ワイワイしながらお肉を食べたいです！\nよろしくお願いします🔥",
        ]);
    }
}
