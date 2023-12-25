<?php

namespace App\Http\Controllers;

use App\Exports\MessageExport;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Poster;
use App\Models\Register;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
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
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function registerDetails()
    {
        $data = Register::orderBy('created_at','DESC')->paginate(15);
        // return "test";
        return view('admin.registerdata')->with(['datas'=>$data]);
    }

    public function exportMessages() 
    {
        return Excel::download(new MessageExport, 'messages.xlsx');
    }

    public function viewRegData($id)
    {
        $regData = Register::where('id',$id)->first();
        return view('admin.viewdata')->with(['regData'=>$regData]);
    }

    public function viewCourse()
    {

        return view('admin.courses');
    }

    public function viewPoster()
    {  
        $posters = Poster::where('p_active_yn','=','y')->get(); 
        return view('admin.posters')->with(['posters'=>$posters]);
    }

    public function deletePoster($id)
    {
        $result = DB::table('posters')
            ->where('id', $id)
            ->update([
                'p_active_yn' => 'n'
            ]);

        return Redirect::back();
    }

    public function addCourse()
    {
        return view('admin.addcourse');
    }

    public function addPoster()
    {
        return view('admin.addposter');
    }



    public function storeCourse(Request $request)
    {

        $title_image  = $request->hasFile('title_image') ? $request->file('title_image')->store('public/title_images') : "";
        $detailed_image = $request->hasFile('detailed_image') ? $request->file('detailed_image')->store('public/detailed_images') : "";
        $faculty_image = $request->hasFile('faculty_image') ? $request->file('faculty_image')->store('public/faculty_images') : "";


        $c = new Course();
        $c->c_title = $request->title;
        $c->c_type = $request->type;
        $c->c_duration = $request->duration;
        $c->c_fee = $request->fee;
        $c->c_faculty = $request->faculty;
        $c->c_faculty_qualification = $request->faculty_qualification; 
        $c->c_description = $request->desc;
        $c->c_certification_details = $request->cert_det;
        $c->c_skill_level = $request->skill_level;
        $c->c_language = $request->language;
        $c->c_assessments = $request->assessment;
        $c->c_certificate = $request->cert;
        $c->c_title_image = $title_image != "" ? str_replace("public/", "", $title_image) : "noimage";
        $c->c_detailed_image = $detailed_image != "" ? str_replace("public/", "", $detailed_image) : "noimage";
        $c->c_faculty_image = $faculty_image != "" ? str_replace("public/", "", $faculty_image) : "noimage";
        $c->save();


        return Redirect::back();
    }


    public function storePoster(Request $request)
    {
        $poster_image  = $request->hasFile('poster_image') ? $request->file('poster_image')->store('public/poster_images') : "";

        $p = new Poster();
        $p->p_title = $request->title;
        $p->p_desc = $request->desc;
        $p->p_image = $poster_image != "" ? str_replace("public/", "", $poster_image) : "noimage";
        $p->p_target_url = $request->target_url;
        $p->save();

        return redirect('/admin/posters');
    }

    public function viewTestimonials()
    {

        $datas = Testimonial::where('t_del_yn','=','n')->get();
        
        return view('admin.testimonials')->with(['datas'=>$datas]);
    }

    public function addTestimonials()
    {
        return view('admin.addtestimonials');
    }

    public function storeTestimonials(Request $request)
    {
        $face_image  = $request->hasFile('face_image') ? $request->file('face_image')->store('public/testimonial_images') : "";

        $t = new Testimonial();
        $t->t_name = $request->name;
        $t->t_student_parent = $request->student_parent;
        $t->t_image = $face_image != "" ? str_replace("public/", "", $face_image) : "noimage";
        $t->t_review = $request->statement;
        $t->save();

        return redirect('/admin/testimonials');
    }

    public function deleteTestimonial($id)
    {
        $result = DB::table('testimonials')
            ->where('id', $id)
            ->update([
                't_del_yn' => 'y'
            ]);

        return Redirect::back();
    }

}
