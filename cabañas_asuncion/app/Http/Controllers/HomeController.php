<?php

namespace App\Http\Controllers;
use App\Remate;
use App\Contact;
use App\NewsLetter;
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
        $remates = Remate::orderBy('created_at','desc')->paginate(20);
        $contacts = Contact::orderBy('created_at','desc')->paginate(20);
        $subscriptors = NewsLetter::orderBy('created_at','desc')->paginate(20);
        $title = 'Mi cuenta';
        return view('home', compact('remates', 'title','contacts','subscriptors'));        
    }
}
