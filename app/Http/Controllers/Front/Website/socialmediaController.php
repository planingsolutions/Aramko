<?php

namespace App\Http\Controllers\Front\Website;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Models\Footers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class socialmediaController extends Controller
{
    //

    //
    /**
    * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
    *
    * @return ViewResponse
    */
    public function showSocialMedia(MainsectionRequest $request)
    {
            $query=Footers::select('id','facebook','whatsapp','instgram','twitter','updated_at');
            if(request()->ajax()) {
                return datatables()->of($query)
                ->addColumn('actions', 'Button.socialmedia-action')
                ->rawColumns(['actions'])
                ->addIndexColumn()
                ->make(true);
            }
            return view('backend.Page3.socialindex');  
    }


  
   public function storeSocialMedia(Request $request)
   { 
       $ContentsId = $request->id;
       $contents= Footers::find($ContentsId);
       $contents->facebook=$request->facebook;
       $contents->instgram=$request->instagram;
       $contents->twitter=$request->twitter;
       $contents->whatsapp=$request->whatsapp;
       $contents->save(); 

       return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

   }

   public function editSocialMedia(Request $request)
   {   
       $where = array('id' => $request->id);
       $company  = Footers::find($where)->first();
     
       return Response()->json($company);
   }

  
   public function destroySocialMedia(Request $request)
   {
       $contents = Footers::where('id',$request->id)->delete();
     
       return Response()->json($contents);
   }
}
