<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $action = book::where('BookGenre','=','Action')->get();
        $thilr = book::where('BookGenre','=','Thriller')->get();
        return view('home.home',compact('action','thilr'));
    }
    public function book(){
        $book = book::all();
        return view('home.allBook',compact('book'));
    }
    public function loop(){

        $action = book::where('BookGenre','=','Action')->get();
        $thilr = book::where('BookGenre','=','Thriller')->get();


       return view('home.book',compact('action','thilr'));
    }
}
