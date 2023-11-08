<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function store(Request $request){
        //dd($request->all());
        $filename='';
        if($request->hasFile('image')){
            $filename=$request->getSchemeAndHttpHost().'/images/'.time().'.'.$request->image->extension();
            $request->image->move(public_path('/images/'),$filename);
        }
        $data=new book();
        $data->BookImage=$filename;
        $data->BookTitle=$request->title;
        $data->BookAuthor=$request->author;
        $data->BookGenre=$request->genre;
        $data->BookYear=$request->year;
        $data->save();
        return redirect()->back()->with('message','Book Upload Successed');

    }

}
