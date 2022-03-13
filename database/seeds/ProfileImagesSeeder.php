<?php

use Illuminate\Database\Seeder;
use App\ProfileImage;

class ProfileImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ProfileImage::create([
            'profile_id' => '1',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A72_%E7%A6%8F%E5%A5%BD%E3%81%8D.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '1',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A73_%E6%9C%8D%E5%A5%BD%E3%81%8D.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '1',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A71_%E6%9C%8D%E5%A5%BD%E3%81%8D.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '2',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A71_%E3%82%AD%E3%83%A3%E3%83%B3%E3%83%95%E3%82%9A.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '2',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A72_%E3%82%AD%E3%83%A3%E3%83%B3%E3%83%95%E3%82%9A.webp',
        ]);
        
        ProfileImage::create([
            'profile_id' => '3',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A71_%E9%AB%98%E5%AD%A6%E6%AD%B4.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '3',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A72_%E9%AB%98%E5%AD%A6%E6%AD%B4.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '3',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A73_%E9%AB%98%E5%AD%A6%E6%AD%B4.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '3',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A74_%E9%AB%98%E5%AD%A6%E6%AD%B4.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '4',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A71_%E9%85%92.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '4',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A72_%E9%85%92.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '5',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A72_%E7%9D%80%E7%89%A9.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '5',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A73_%E7%9D%80%E7%89%A9.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '5',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A71_%E7%9D%80%E7%89%A9.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '5',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A74_%E7%9D%80%E7%89%A9.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '6',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A71_%E6%A5%BD%E5%99%A8.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '6',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A72_%E6%A5%BD%E5%99%A8.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '6',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A73_%E6%A5%BD%E5%99%A8.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '7',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A73_%E5%91%91%E3%81%BF%E5%8F%8B.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '7',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A72_%E5%91%91%E3%81%BF%E5%8F%8B.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '7',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A71_%E5%91%91%E3%81%BF%E5%8F%8B.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '7',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A74_%E5%91%91%E3%81%BF%E5%8F%8B.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '8',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A72_%E7%AD%8B%E3%83%88%E3%83%AC.jpeg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '8',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A71_%E7%AD%8B%E3%83%88%E3%83%AC.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '8',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A73_%E7%AD%8B%E3%83%88%E3%83%AC.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '9',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A72_%E3%82%A6%E3%83%BC%E3%83%8F%E3%82%99%E3%83%BC.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '9',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E7%94%B7%E6%80%A71_%E3%82%A6%E3%83%BC%E3%83%8F%E3%82%99%E3%83%BC.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '10',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A71_%E6%97%85%E8%A1%8C.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '10',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A72_%E6%97%85%E8%A1%8C.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '10',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A7+3_%E6%97%85%E8%A1%8C.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '11',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A71_%E3%82%AB%E3%83%A1%E3%83%A9.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '11',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A72_%E3%82%AB%E3%83%A1%E3%83%A9.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '12',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A71_%E8%82%89.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '12',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A72_%E8%82%89.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '12',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A73_%E8%82%89.jpg',
        ]);
        
        ProfileImage::create([
            'profile_id' => '12',
            'image_path' => 'https://myaws-bucket-1.s3.ap-northeast-1.amazonaws.com/%E5%A5%B3%E6%80%A74_%E8%82%89.jpg',
        ]);
        
    }
}
