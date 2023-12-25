<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Poster;
use App\Models\Register;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $posters = Poster::where('p_active_yn','=','y')->get();
        $testimonials = Testimonial::where('t_del_yn','=','n')->get();
        // $courses = Course::get();
        // return $posters;
        return view('home')->with(['posters'=>$posters,'testimonials'=>$testimonials]);
    }

    public function showCourses()
    {
        return view('courses');
    }

    public function showAbout()
    {
        return view('about');
    }

    public function showTeam()
    {
        return view('team');
    }

    public function showGallery()
    {
        return view('gallery');
    }

    public function showEnquiry()
    {
        return view('enquiry');
    }

    public function message()
    {
        return view('registration');
    }

    public function expert()
    {
        return view('expert');
    }

    public function easeoflearning()
    {
        return view('easeoflearning');
    }
    public function facilitiesforgrowth()
    {
        return view('facilitiesforgrowth');
    }

    public function registerData(Request $request)
    {

        $r = new Register();
        $r->r_name = $request->name;
        $r->r_email = $request->email;
        $r->r_phone = $request->phone;
        $r->r_message = $request->message;
        $r->save();

        return redirect('/');
    }
}
