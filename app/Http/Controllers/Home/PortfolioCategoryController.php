<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortfolioCategory;

class PortfolioCategoryController extends Controller
{
    public function AllPortfolioCategory(){

        $portfoliocategory = PortfolioCategory::latest()->get();
        return view('admin.portfolio_category.portfolio_category_all', compact('portfoliocategory'));

    } // End Method


    public function AddPortfolioCategory(){

        return view('admin.portfolio_category.portfolio_category_add');
    } // End Method


    public function StorePortfolioCategory(Request $request){
  
         
        PortfolioCategory::insert([
                'portfolio_category' => $request->portfolio_category,               

            ]); 

            $notification = array(
            'message' => 'Categoria Adicionada com sucesso!', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.portfolio.category')->with($notification);


    } // End Method


    public function EditPortfolioCategory($id){

        $portfoliocategory = PortfolioCategory::findOrFail($id);
        return view('admin.portfolio_category.portfolio_category_edit',compact('portfoliocategory'));

    } // End Method


    public function UpdatePortfolioCategory(Request $request,$id){

        PortfolioCategory::findOrFail($id)->update([
                'portfolio_category' => $request->portfolio_category,               

            ]); 

            $notification = array(
            'message' => 'Categoria Atualizada!', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.portfolio.category')->with($notification);

    } // End Method

    public function DeletePortfolioCategory($id){

        PortfolioCategory::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Categoria Deletada!', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);       

    } // End Method    


}