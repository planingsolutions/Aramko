<?php

namespace App\Http\Controllers\Front\page3;

use App\Http\Controllers\Controller;
use App\Http\Responses\ViewResponse;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Models\Contents;
use App\Models\images;
use App\Models\Jobss;
use Illuminate\Http\Request;
class ProjectController extends Controller
{
    //
    //
    /**
    * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
    *
    * @return ViewResponse
    */
    public function showJobforms()
    {
        $query=Jobss::select('id','name','email','phoneNumber','address','age','EQ','GY','YOE','field','cv');
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'ButtonPage3.project-action')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.page2.projects');  
    }

   

   public function storeJobforms(Request $request)
   { 
       if ($request->hasFile('cv'))
        {
            $file1=$request->file('cv');

            $name1 = time().rand(1,100).'.'.$file1->extension();

            $file1->move(public_path('img'), $name1); 
            
            $contents   =  Jobss::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'phoneNumber'=>$request->phone,
                'address'=>$request->Address,
                'age'=>$request->Age,
                'EQ'=>$request->EQ,
                'GY'=>$request->GY,
                'YOE'=>$request->YOE,
                'field'=>$request->cars,
                'cv'=>$request->cv,
            ]);
            $contents->save(); 
        }  
       else{
        $contents   =  Jobss::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phoneNumber'=>$request->phone,
            'address'=>$request->Address,
            'age'=>$request->Age,
            'EQ'=>$request->EQ,
            'GY'=>$request->GY,
            'YOE'=>$request->YOE,
            'field'=>$request->cars,
            'cv'=>$request->cv,
        ]);
        $contents->save();       
       }

       

       return redirect()->back()->with(['success' => ' سيتم التواصل معكم للرد علي استفسارتكم']);

   }

  
   public function destroyProjects(Request $request)
   {
       $contents = Jobss::where('id',$request->id)->delete();
     
       return Response()->json($contents);
   }

}
