<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contents;
use App\Models\Footers;
use App\Models\images;
use App\Models\Lists;
use App\Models\Sections;
use App\Models\Projects;



use View;


use Illuminate\Http\Request;

class MainPageController extends Controller
{

    public function index(){
        $socialmedia=Footers::select('facebook','whatsapp','instgram','twitter','Images','Tittle')->get();
        $mainsection=Contents::select('Images','Tittle','Paragraph1')->where('section_id', 1)->get();
        $about_1=Contents::select('id','Images','Tittle','Paragraph1','updated_at')->where('section_id', 3)->where('id',115)->get();
        $about_2=Contents::select('id','Images','Tittle','Paragraph1','updated_at')->where('section_id', 3)->where('id',116)->get();
        $about_3=Contents::select('id','Images','Tittle','Paragraph1','updated_at')->where('section_id', 3)->where('id',117)->get();
        $about_sec2=Contents::select('id','Images','Tittle','Paragraph1','updated_at')->where('section_id', 4)->get();
        $about_sec3=Contents::select('id','Images','Tittle')->where('section_id', 6)->get();
        $servicess=Contents::select('id','Images','Tittle','Paragraph1','Paragraphh')->where('section_id', 7)->get();
        $ProjectMain=Contents::select('id','Images','Tittle')->where('section_id', 10)->get();
        $featuredProject=Contents::select('id','Images','Tittle','Paragraph1','Paragraphh')->where('section_id', 11)->get();
        $website=Footers::select('Images','Tittle','address','phone')->get();
        $images = images::select('images')->where('section_id', 9)->get();


        return view('Frontweb.page3',compact('mainsection','about_1','about_2','about_3','about_sec2','about_sec3','servicess','ProjectMain','featuredProject','socialmedia','website','images'));
    }
    public function AllProjects()
    {
        $allfilter=Projects::select('id','Tittle','Images','Paragraph1','Paragraphh','Location')->whereBetween('section_id',[20, 24])->inRandomOrder()->limit(8)->get();

        $project1=Projects::select('projects.id','Projects.Tittle','Projects.Images','Projects.Paragraph1','Projects.Paragraphh','Projects.Location', 'sections.filter','sections.ID')
        ->join('sections', 'sections.ID', '=', 'Projects.section_id')
        ->where('section_id', 20)->get();
        $project2=Projects::select('Projects.id','Projects.Tittle','Projects.Images','Projects.Paragraph1','Projects.Paragraphh','Projects.Location', 'sections.filter','sections.ID')
        ->join('sections', 'sections.ID', '=', 'Projects.section_id')
        ->where('section_id', 21)->get();
        $project3=Projects::select('Projects.id','Projects.Tittle','Projects.Images','Projects.Paragraph1','Projects.Paragraphh','Projects.Location', 'sections.filter','sections.ID')
        ->join('sections', 'sections.ID', '=', 'Projects.section_id')
        ->where('section_id', 22)->get();
        $project4=Projects::select('Projects.id','Projects.Tittle','Projects.Images','Projects.Paragraph1','Projects.Paragraphh','Projects.Location', 'sections.filter','sections.ID')
        ->join('sections', 'sections.ID', '=', 'Projects.section_id')
        ->where('section_id', 24)->get();
        $socialmedia=Footers::select('facebook','whatsapp','instgram','twitter','Images','Tittle')->get();
        $website=Footers::select('Images','Tittle','address','phone')->get();
        $images = images::select('images')->where('section_id', 9)->get();


        return view('Frontweb.page2',compact('project1','allfilter','project2','project3','project4','socialmedia','website','images'));
    
    }

    public function desprojects($id)
    {
        $idd=$id;
        $data= Projects::select('id','Tittle','Images','Paragraph1','Paragraphh','PO','Consultant','GeneralC','Subconstractor')->where('id',$idd)->get();
        $socialmedia=Footers::select('facebook','whatsapp','instgram','twitter','Images','Tittle')->get();

        $website=Footers::select('Images','Tittle','address','phone')->get();

        $images = images::select('images')->where('section_id', 9)->get();


        return view('Frontweb.page1',compact('data','socialmedia','website','images'));
    }
    public function jobsform()
    {
        $socialmedia=Footers::select('facebook','whatsapp','instgram','twitter','Images','Tittle')->get();

        $website=Footers::select('Images','Tittle','address','phone')->get();

        $images = images::select('images')->where('section_id', 9)->get();
        return view('Frontweb.page4',compact('socialmedia','website','images'));
    }


    
}
