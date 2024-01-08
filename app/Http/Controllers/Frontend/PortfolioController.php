<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;


class PortfolioController extends Controller
{
    public function PortfolioSetting(){
        $data['PortfolioData'] = Portfolio::all();
        return view('backend.portfolio.index',$data);
    }
    public function PortfolioUpdate(Request $request,$id){
        $data = Portfolio::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/portfolio_image/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/portfolio_image'),$filename);
            $data['image'] = $filename;
        }

        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/portfolio_image/'.$data->photo));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('upload/portfolio_image'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Portfolio image Update Successfully',
            'alert-type' => 'success'
        );
            return redirect()->back()->with($notification);
    }
}
