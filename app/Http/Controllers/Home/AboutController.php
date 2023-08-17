<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\MultiImage;
use Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File; // Import the File facade

class AboutController extends Controller
{
    public function AboutPage(){
 
        $aboutpage = About::find(1);
        return view('admin.about_page.about_page_all',compact('aboutpage'));

     } // End Method 



     public function UpdateAbout(Request $request){

        $about_id = $request->id;
    
        $old_about = About::findOrFail($about_id);
    
        if ($request->file('about_image')) {
            // Delete the old image file
            if (File::exists(public_path($old_about->about_image))) {
                File::delete(public_path($old_about->about_image));
            }
    
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(400,400)->save('upload/home_about/'.$name_gen);
            $save_url = 'upload/home_about/'.$name_gen;
    
            $old_about->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'about_image' => $save_url,
            ]); 
        } else {
            $old_about->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
            ]);
        }
    
        $notification = array(
            'message' => 'Atualizado com Sucesso', 
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }
    


     public function HomeAbout(){

        $aboutpage = About::find(1);
        return view('frontend.about_page',compact('aboutpage'));

     }// End Method 


    


}
 