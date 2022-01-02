<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\ProfileImage;

class ProfileController extends Controller
{
    //
    
    public function add()
    {
        
        return view('admin.profile.create');
    } 
    
    
    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules, ProfileImage::$rules);
        $profile = new Profile;
        $profile_image = new ProfileImage;
        $form = $request->except('image[]');
        $form_images = $request->file('image');
        
        unset($form['_token']);
        unset($form['image']);
        
        $profile->fill($form);
        $profile->save();
        // dump($form_images);
        // return;
        // $images = $form_image['image[]'];
        
        if (isset($form_images)) {
            foreach ($form_images as $form_image) {
              $path = $form_image->store('public/image');
              $profile_image->image_path = basename($path);
              $profile_image->profile_id = $profile->id;
              $profile_image->save();
            }  
        } else {
              $profile_image->image_path = false;
        }
        
        if (count($form_images) == 0) {
          $error[] = "画像が1つも設定されていません。";
          return redirect()->back()->withInput()->withErrors($error);
        }
        
        
        return redirect('admin/top');
    }
        
    
    public function edit(Request $request)
    {
        
      // $profile = Profile::find($request->id);
      //   if (empty($profile)) {
      //     abort(404);    
      //   }
      // return view('admin.profile.edit', ['profile_form' => $profile], ['profile_image_form' => $profile_image]);
    }
    
    public function update(Request $request)
    {
      // $this->validate($request, Profile::$rules, ProfileImage::$rules);
      // $profile = Profile::find($request->id);
      // $profile_form = $request->except('image[]');
      // $profile_image = ProfileImage::find($request->profile_id);
      // $profile_image_form = $request->file('image');
    }
}