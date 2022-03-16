<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\ProfileImage;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    //
    
    public function add()
    {
        return view('admin.profile.create',);
    } 
    
    
    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules, ProfileImage::$rules);
        $profile = new Profile;
        
        $form = $request->except('image[]');
        $form_images = $request->file('image');
        
        unset($form['_token']);
        unset($form['image']);
        
        $profile->fill($form);
        $profile->user_id = Auth::id();
        $profile->save();
        
        if (isset($form_images)) {
            foreach ($form_images as $form_image) {
              $profile_image = new ProfileImage;
              // $path = $form_image->store('public/image');
              $path = Storage::disk('s3')->putFile('/',$form_image,'public');
              $profile_image->image_path = Storage::disk('s3')->url($path);
              $profile_image->profile_id = $profile->id;
              $profile_image->save();
            }  
        } else {
              $error[] = "画像が1つも設定されていません。";
          return redirect()->back()->withInput()->withErrors($error);
        }
        
        return redirect("admin/top1");
    }
        
    
    public function edit(Request $request)
    {
      // $occupations = Occupation::all();
      $profile = Auth::user()->profile;
      
        if (empty($profile)) {
          return view('admin.profile.create');    
        } else {
          return view('admin.profile.edit', ['profile' => $profile]);
        }
    }
    
    
    public function update(Request $request)
    {
      
      $this->validate($request, Profile::$rules, ProfileImage::$rules);
      
      $profile = Profile::find($request->id);
      
      $profile_form = $request->except('image');
      $profile_images_form = $request->file('image');
       
      unset($profile_form['_token']);
      // unset($profile_form['image']);
      // dump($profile_form);
      // return; 
      $profile->fill($profile_form);
      $profile->save();
      
      //profileからprofileimageを取得->そのレコードを削除。
      Auth::user()->profile->profile_images()->delete();
      //新しい投稿フォームを保存  
      if (isset($profile_images_form)) {
          foreach ($profile_images_form as $profile_image_form) {
            $profile_image = new ProfileImage;
            $path = Storage::disk('s3')->putFile('/',$profile_image_form,'public');
            $profile_image->image_path = Storage::disk('s3')->url($path);
            $profile_image->profile_id = $profile->id;
            $profile_image->save();
          }  
      } else {
            $error[] = "画像が1つも設定されていません。";
            
        return redirect()->back()->withInput()->withErrors($error);
      }
      
      return redirect("admin/top1");
    }
    
    
    public function delete(Request $request)
    {
      // 該当するNews Modelを取得
      $news = News::find($request->id);
      // 削除する
      $news->delete();
      return redirect('admin/news/');
    }
    
    
}