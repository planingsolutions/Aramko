<?php

namespace App\Http\Controllers\Front\page3\servicess;

use App\Http\Controllers\Controller;
use App\Http\Responses\ViewResponse;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Models\Contents;
use Illuminate\Http\Request;

class servTwoController extends Controller
{

    /**
     * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
     *
     * @return ViewResponse
     */
    public function showserv2(MainsectionRequest $request)
    {
        $query=Contents::select('id','Tittle','Paragraph1','updated_at')->where('section_id', 15);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'ButtonPage3.servicesstwo-action')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.page2.servicesssec2');  
    }

    public function storedetails(Request $request)
    { 
        $ContentsId = $request->id;
      
            $contents   =   Contents::find($ContentsId);
            $contents->Tittle=$request->Tittle;
            $contents->Paragraph1=$request->Paragraph1;

        
        $contents->save(); 

        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

    }

    public function editservdetails(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
      
        return Response()->json($company);
    }

   
    public function destroydetails(Request $request)
    {
        $contents = contents::where('id',$request->id)->delete();
      
        return Response()->json($contents);
    }


}
