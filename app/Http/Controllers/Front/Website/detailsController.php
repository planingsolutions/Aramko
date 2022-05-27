<?php

namespace App\Http\Controllers\Front\Website;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Models\Footers;


class detailsController extends Controller
{
    //
    /**
    * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
    *
    * @return ViewResponse
    */
    public function showWebsitedetails(MainsectionRequest $request)
    {
            $query=Footers::select('id','Images','Tittle','address','phone');;
            if(request()->ajax()) {
                return datatables()->of($query)
                ->addColumn('actions', 'Button.details-action')
                ->rawColumns(['actions'])
                ->addIndexColumn()
                ->make(true);
            }
            return view('backend.Page3.websiteindex');  
    }


   
   public function storeWebsitedetails(Request $request)
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
           $contents   =   Footers::find($ContentsId);
           $contents->Tittle=$request->Tittle;
           $contents->address=$request->address;
           $contents->phone=$request->phone;
           $contents->Images=$Images;         
       }
       else{
           $contents= Footers::find($ContentsId);
           $arr = Footers::select('Images')->where('id' ,$ContentsId )->get();
           $val=$arr[0];
           $contents->Tittle=$request->Tittle;
           $contents->address=$request->address;
           $contents->phone=$request->phone;
           $contents->Images=$val['Images'];
           
       }
       $contents->save(); 

       return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

   }

   public function editWebsitedetails(Request $request)
   {   
       $where = array('id' => $request->id);
       $company  = Footers::find($where)->first();
     
       return Response()->json($company);
   }

  
   public function destroyWebsitedetails(Request $request)
   {
       $contents = Footers::where('id',$request->id)->delete();
     
       return Response()->json($contents);
   }
}
