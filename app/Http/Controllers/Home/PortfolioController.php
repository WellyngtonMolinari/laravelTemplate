<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\MultiImage;
use Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    public function AllPortfolio(){

        $portfolio = Portfolio::latest()->get();
        return view('admin.protfolio.protfolio_all',compact('portfolio'));
    } // End Method


    public function AddPortfolio(){
        return view('admin.protfolio.protfolio_add');
    } // End Method


    public function StorePortfolio(Request $request)
    {
    // Store portfolio data
    $portfolio = Portfolio::create([
        'portfolio_name' => $request->input('portfolio_name'),
        'portfolio_title' => $request->input('portfolio_title'),
        'category' => $request->input('category'),
        'portfolio_description' => $request->input('portfolio_description'),
        'portfolio_image' => $request->file('portfolio_image') ? $this->uploadImage($request->file('portfolio_image')) : null,
    ]);

    // Store multiple images
    $multiImages = $request->file('multi_img');
    foreach ($multiImages as $multiImage) {
        $multiImageName = $this->uploadImage($multiImage, 'upload/multi/');
        MultiImage::create([
            'portfolio_id' => $portfolio->id,
            'multi_image' => $multiImageName,
            'created_at' => now(),
        ]);
    }

    $notification = [
        'message' => 'Portfolio and Multi Images Inserted Successfully',
        'alert-type' => 'success'
    ];

    return redirect()->route('all.portfolio')->with($notification);
    }

    private function uploadImage($image, $folder = 'upload/')
    {
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save($folder . $name_gen);
        return $folder . $name_gen;
    }



    public function EditPortfolio($id){

        $portfolio = Portfolio::findOrFail($id);
        return view('admin.protfolio.protfolio_edit',compact('portfolio'));
    }// End Method


   public function UpdatePortfolio(Request $request){

        $portfolio_id = $request->id;

        if ($request->file('portfolio_image')) {
            $image = $request->file('portfolio_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(1020,519)->save('upload/portfolio/'.$name_gen);
            $save_url = 'upload/portfolio/'.$name_gen;

            Portfolio::findOrFail($portfolio_id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'category' => $request->category,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_image' => $save_url,

            ]); 
            $notification = array(
            'message' => 'Portfolio Updated with Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.portfolio')->with($notification);

        } else{

            Portfolio::findOrFail($portfolio_id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'category' => $request->category,
                'portfolio_description' => $request->portfolio_description,
                 

            ]); 
            $notification = array(
            'message' => 'Portfolio Updated without Image Successfully', 
            'alert-type' => 'success'
        );

       return redirect()->route('all.portfolio')->with($notification);

        } // end Else

     } // End Method 


     public function DeletePortfolio($id){

        $portfolio = Portfolio::findOrFail($id);
        $img = $portfolio->portfolio_image;
        unlink($img);

        Portfolio::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Portfolio Image Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);       

     }// End Method 


     public function PortfolioDetails($id){

        $portfolio = Portfolio::findOrFail($id);
        return view('frontend.protfolio_details',compact('portfolio'));
     } // End Method 


     public function HomePortfolio(){

      $portfolio = Portfolio::latest()->get();
      return view('frontend.portfolio',compact('portfolio'));
     } // End Method 


      


     public function StoreMultiImage(Request $request)
    {
    $portfolio_id = $request->input('portfolio_id');
    $images = $request->file('multi_img');

    foreach ($images as $image) {
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

        Image::make($image)->resize(220, 220)->save('upload/multi/' . $name_gen);
        $save_url = 'upload/multi/' . $name_gen;

        MultiImage::create([
            'portfolio_id' => $portfolio_id,
            'multi_image' => $save_url,
            'created_at' => now()
        ]);
    }

        $notification = [
            'message' => 'Multi Images Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.multi.image')->with($notification);
    }



     public function AllMultiImage(){

        $allMultiImage = MultiImage::all();
        return view('admin.protfolio.all_multiimage',compact('allMultiImage'));

     }// End Method 


     public function EditMultiImage($id){

        $multiImage = MultiImage::findOrFail($id);
        return view('admin.protfolio.edit_multi_image',compact('multiImage'));

     }// End Method 


     public function UpdateMultiImage(Request $request){

           $multi_image_id = $request->id;

        if ($request->file('multi_image')) {
            $image = $request->file('multi_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(220,220)->save('upload/multi/'.$name_gen);
            $save_url = 'upload/multi/'.$name_gen;

            MultiImage::findOrFail($multi_image_id)->update([
                 
                'multi_image' => $save_url,

            ]); 

            $notification = array(
            'message' => 'Multi Image Updated Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.multi.image')->with($notification);

        }

     }// End Method 


     public function DeleteMultiImage($id){

        $multi = MultiImage::findOrFail($id);
        $img = $multi->multi_image;
        unlink($img);

        MultiImage::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Multi Image Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

       

     }// End Method 

}
