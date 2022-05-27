<?php

namespace App\Http\Controllers\Front\page3\about;
use App\Http\Controllers\Controller;
use App\Http\Responses\ViewResponse;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Http\Requests\Backend\Home\UpdateMain;
use App\Models\Contents;
use App\Http\Responses\RedirectResponse;
use Illuminate\Http\Request;
class sectionOneController extends Controller
{
     /**
    * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
    *
    * @return ViewResponse
    */
   public function showsec1(MainsectionRequest $request)
   {
       $query=Contents::select('id','Images','Tittle','Paragraph1','updated_at')->where('section_id', 11);
       if(request()->ajax()) {
           return datatables()->of($query)
           ->addColumn('actions', 'ButtonPage3.aboutone-action')
           ->rawColumns(['actions'])
           ->addIndexColumn()
           ->make(true);
       }
       return view('backend.page2.aboutsec1');  
   }




   public function storesec1(Request $request)
   {

    $ContentsId = $request->id;
    if ($request->hasFile('Images'))
    {
        foreach($request->file('Images') as $image)
        {
            $text =time().".".$image->clientExtension();
            $image ->storeAs('img/',$text);
            $Images[]= $text;
        }
        $contents   =   Contents::find($ContentsId);
        $contents->Tittle=$request->Paragraph1;
        $contents->Paragraph1=$request->Paragraph2;
        $contents->Images=$Images;         
    }
    else{
        $contents= Contents::find($ContentsId);
        $arr = Contents::select('Images')->where('id' ,$ContentsId )->get();
        $val=$arr[0];
        $contents->Tittle=$request->Paragraph1;
        $contents->Paragraph1=$request->Paragraph2;
        $contents->Images=$val['Images'];
        
    }
    $contents->save(); 

    return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

   }

   public function editsec1(Request $request)
   {   
       $where = array('id' => $request->id);
       $company  = Contents::find($where)->first();
     
       return Response()->json($company);
   }

  
   public function destroysec1(Request $request)
   {
       $contents = contents::where('id',$request->id)->delete();
     
       return Response()->json($contents);
   }

}
