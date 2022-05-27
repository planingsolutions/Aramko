<?php

namespace App\Http\Controllers\Front\page3\servicess;

use App\Http\Controllers\Controller;
use App\Http\Responses\ViewResponse;
use App\Models\Contents;
use Illuminate\Http\Request;
class servThreeController extends Controller
{
    //
    /**
    * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
    *
    * @return ViewResponse
    */
    public function showserv3()
    {
        $query=Contents::select('id','Images','Paragraph1','updated_at')->where('section_id', 17);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'ButtonPage3.servicessthree-action')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.page2.servicesssec3');  
    }

   public function storeserv(Request $request)
   { 
       $ContentsId = $request->id;
       $Images=[];
       if ($request->hasFile('images'))
       {
           foreach($request->file('images') as $image)
           {
               $name = time().rand(1,100).'.'.$image->extension();
               $image->move(public_path('img'), $name); 
               $Images[]=$name;
           }
           $contents   =   Contents::find($ContentsId);
           $contents->Paragraph1=$request->Paragraph1;
           $contents->Images=$Images;         
       }
       else{
           $contents= Contents::find($ContentsId);
           $arr = Contents::select('Images')->where('id' , $ContentsId)->get();
           $val=$arr[0];
           $contents->Paragraph1=$request->Paragraph1;
           $contents->Images=$val['Images'];
           
       }
       $contents->save(); 

       return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

   }

   public function editserv(Request $request)
   {   
       $where = array('id' => $request->id);
       $company  = Contents::find($where)->first();
     
       return Response()->json($company);
   }

  
   public function destroyserv(Request $request)
   {
       $contents = contents::where('id',$request->id)->delete();
     
       return Response()->json($contents);
   }


}
