<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carousel; // Import the Carousel model
use App\Models\HomeSlide;
use Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeSliderController extends Controller
{
     public function HomeSlider(){

        $homeslide = HomeSlide::find(1);
        return view('admin.home_slide.home_slide_all',compact('homeslide'));

     } // End Method 



     public function UpdateSlider(Request $request)
     {
         $slide_id = $request->id;
     
         if ($request->file('home_slide')) {
             $image = $request->file('home_slide');
             $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
     
             Image::make($image)->resize(636, 852)->save('upload/home_slide/' . $name_gen);
             $save_url = 'upload/home_slide/' . $name_gen;
     
             HomeSlide::findOrFail($slide_id)->update([
                 'title' => $request->title,
                 'short_title' => $request->short_title,
                 'video_url' => $request->video_url,
                 'home_slide' => $save_url,
             ]);
     
                $carouselImages = $request->file('carousel_img');
            if ($carouselImages) {
                $this->storeCarouselImages($carouselImages);
            }

            $notification = [
                'message' => 'Home Slide Updated with Image and Carousel Successfully',
                'alert-type' => 'success',
            ];

         } else {
             HomeSlide::findOrFail($slide_id)->update([
                 'title' => $request->title,
                 'short_title' => $request->short_title,
                 'video_url' => $request->video_url,
             ]);
     
             $notification = [
                 'message' => 'Home Slide Updated without Image Successfully',
                 'alert-type' => 'success',
             ];
         }
     
         return redirect()->back()->with($notification);
     }
     
     private function storeCarouselImages($images)
     {
        // if (!is_array($images)) {
        //     return; // No images to process
        // }

         foreach ($images as $image) {
             $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
     
             Image::make($image)->resize(220, 220)->save('upload/carousel/' . $name_gen);
             $save_url = 'upload/carousel/' . $name_gen;
     
             Carousel::create([
                 'carousel_img' => $save_url,
                 'created_at' => now(),
             ]);
         }
     }


     public function StoreCarousel(Request $request)
    {
    $images = $request->file('carousel_img');

    foreach ($images as $image) {
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

        Image::make($image)->resize(220, 220)->save('upload/carousel/' . $name_gen);
        $save_url = 'upload/carousel/' . $name_gen;

        Carousel::create([
            'carousel_img' => $save_url,
            'created_at' => now()
        ]);
    }

        $notification = [
            'message' => 'Carousel Images Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.carousel')->with($notification);
    }



     public function AllCarousel(){

        $allCarousel = Carousel::all();
        return view('admin.home_slide.all_carousel',compact('allCarousel'));

     }// End Method 


     public function EditCarousel($id){

        $allCarousel = Carousel::findOrFail($id);
        return view('admin.home_slide.edit_carousel',compact('allCarousel'));

     }// End Method 


     public function UpdateCarousel(Request $request)
    {
        $carousel_img_id = $request->id;

        if ($request->file('carousel_img')) {
            $image = $request->file('carousel_img');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(220, 220)->save('upload/carousel/' . $name_gen);
            $save_url = 'upload/carousel/' . $name_gen;

            $carousel = Carousel::findOrFail($carousel_img_id); // Corrected variable name
            $carousel->update([
                'carousel_img' => $save_url,
            ]);

            $notification = array(
                'message' => 'Carousel Updated Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('all.carousel')->with($notification);
        }
    }



     public function DeleteCarousel($id){

        $carousel_img = Carousel::findOrFail($id);
        $img = $carousel->carousel_img;
        unlink($img);

        Carousel::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Carousel Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

       

     }// End Method 




}
 