<?php

namespace App\Http\Controllers;

use App\Models\booktb;
use App\Models\food;
use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Foods;

use App\Models\booktbs;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.user",compact("data"));
    }
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function FoodMenu()
    {

        return view("admin.FoodMenu");
    }
    public function booktb()
    {

        return view("admin.booktb");
    }
    public function upload(Request $request)
    {
        $data= new food;
        $image =$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();

          $request->image->move('foodimage2',$imagename ) ;
          $data->image=$imagename;

          $data->title=$request->title;
          $data->price=$request->price;
          $data->description=$request->description;
          $data->save();
          return redirect()->back();


    }
    public function upload2(Request $request)
    {
        $data =new booktb;

        $data->day=$request->day;
        $data->hour=$request->hour;
        $data->name=$request->name;
        $data->phone=$request->phone;
        $data->persons=$request->persons;
        $data->save();
        return redirect()->back();


    }
}
