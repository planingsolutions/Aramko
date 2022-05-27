<?php

namespace App\Http\Controllers\Front\page3\servicess;

use App\Http\Controllers\Controller;
use App\Http\Responses\ViewResponse;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Models\Contents;
use Illuminate\Http\Request;

class servOneController extends Controller
{
    //

     /**
     * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
     *
     * @return ViewResponse
     */
    public function showserv1(MainsectionRequest $request)
    {
        $query=Contents::select('id','Images','Tittle','updated_at')->where('section_id', 14);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'ButtonPage3.servicesone-action')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.page2.servicessec1');  
    }



    public function storemainsection(Request $request)
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
            $contents->Images=$Images;         
        }
        else{
            $contents= Contents::find($ContentsId);
            $arr = Contents::select('Images')->where('id' , $ContentsId)->get();
            $val=$arr[0];
            $contents->Tittle=$request->Tittle;
            $contents->Images=$val['Images'];
            
        }
        $contents->save(); 

        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

    }

    public function edittmainsection(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
      
        return Response()->json($company);
    }

   
    public function destroymainsection(Request $request)
    {
        $contents = contents::where('id',$request->id)->delete();
      
        return Response()->json($contents);
    }


}
