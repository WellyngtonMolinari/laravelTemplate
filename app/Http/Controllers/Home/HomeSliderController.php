<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carousel; // Import the Carousel model
use App\Models\HomeSlide;
use Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HomeSliderController extends Controller
{
     public function HomeSlider(){

        $homeslide = HomeSlide::find(1);
        return view('admin.home_slide.home_slide_all',compact('homeslide'));

     } // End Method 



     public function UpdateSlider(Request $request)
    {
        $slide_id = $request->id;

        // Check if "Não adicionar" is selected
        if ($request->home_slide === 'no_image') {
            // Unlink the previous image if it exists
            $homeslide = HomeSlide::findOrFail($slide_id);
            if (!empty($homeslide->home_slide)) {
                unlink(public_path($homeslide->home_slide));
            }

            // Update the database with a placeholder value (e.g., "nothing")
            $homeslide->update([
                'home_slide' => 'nothing', // Update this value as needed
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
            ]);

            $notification = [
                'message' => 'Sessão Principal Atualizada',
                'alert-type' => 'success',
            ];
        } else {
            if ($request->file('home_slide')) {
                $image = $request->file('home_slide');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

                Image::make($image)->resize(636, 852)->save('upload/home_slide/' . $name_gen);
                $save_url = 'upload/home_slide/' . $name_gen;
            } else {
                $save_url = null; // Set this to null if "Não adicionar" is not selected
            }

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
                'message' => 'Adicionado com Sucesso!',
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
     
             Image::make($image)->resize(1920, 1080)->save('upload/carousel/' . $name_gen);
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

        Image::make($image)->resize(1920, 1080)->save('upload/carousel/' . $name_gen);
        $save_url = 'upload/carousel/' . $name_gen;

        Carousel::create([
            'carousel_img' => $save_url,
            'created_at' => now()
        ]);
    }

        $notification = [
            'message' => 'Imagens adicionadas!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.carousel')->with($notification);
    }



     public function AllCarousel(){

        $allCarousel = Carousel::all();
        return view('admin.home_slide.all_carousel',compact('allCarousel'));

     }// End Method 

     public function AddCarousel(){

        $allCarousel = Carousel::all();
        return view('admin.home_slide.add_carousel',compact('allCarousel'));

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
     
             Image::make($image)->resize(1920, 1080)->save('upload/carousel/' . $name_gen);
             $save_url = 'upload/carousel/' . $name_gen;
     
             $carousel = Carousel::findOrFail($carousel_img_id);
             
             // Delete the old carousel image
             if (File::exists(public_path($carousel->carousel_img))) {
                 File::delete(public_path($carousel->carousel_img));
             }
     
             $carousel->update([
                 'carousel_img' => $save_url,
             ]);
     
             $notification = array(
                 'message' => 'Carrossel Atualizado!',
                 'alert-type' => 'success',
             );
     
             return redirect()->route('all.carousel')->with($notification);
         }
     }



     public function DeleteCarousel($id){

        $carousel = Carousel::findOrFail($id);
        $img = $carousel->carousel_img;
        unlink($img);

        Carousel::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Carrossel Deletado!', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

       

     }// End Method 




}
 