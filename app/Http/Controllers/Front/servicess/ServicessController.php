<?php

namespace App\Http\Controllers\Front\servicess;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Models\Contents;
class ServicessController extends Controller
{
     /**
    * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
    *
    * @return ViewResponse
    */
    public function showservicess(MainsectionRequest $request)
    {
            $query=Contents::select('id','Images','Tittle','Paragraph1','updated_at')->where('section_id', 7);
            if(request()->ajax()) {
                return datatables()->of($query)
                ->addColumn('actions', 'Button.servicess-action')
                ->rawColumns(['actions'])
                ->addIndexColumn()
                ->make(true);
            }
            return view('backend.Page3.servicess');  
    }



   public function storeserv(Request $request)
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
           $contents->Tittle=$request->Tittle;
           $contents->Paragraph1=$request->Paragraph2;
           $contents->Images=$Images;         
       }
       else{
           $contents= Contents::find($ContentsId);
           $arr = Contents::select('Images')->where('id' ,$ContentsId )->get();
           $val=$arr[0];
           $contents->Tittle=$request->Tittle;
           $contents->Paragraph1=$request->Paragraph2;
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
