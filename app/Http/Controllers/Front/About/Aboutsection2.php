<?php

namespace App\Http\Controllers\Front\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Models\Contents;
use App\Models\Lists;



class Aboutsection2 extends Controller
{
      /**
     * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
     *
     * @return ViewResponse
     */
    public function showMain()
    {
        $query=Contents::select('id','Images','Tittle','Paragraph1','updated_at')->where('section_id', 4);
        if(request()->ajax()) {
           return datatables()->of($query)
           ->addColumn('actions', 'Button.sec1-action')
           ->rawColumns(['actions'])
           ->addIndexColumn()
           ->make(true);
       }
        return view('backend.Page3.secmainindex');  
    }

    public function storeMain(Request $request)
    { 
        $ContentsId = $request->id;
        $Images=[];
        if ($request->hasFile('Images'))
        {
            foreach($request->file('Images') as $image)
            {
                $name = time().rand(1,100).'.'.$image->extension();
                $image->move(public_path('img'), $name); 
                $Images[]=$name;
            }
            $contents   =   Contents::find($ContentsId);
            $contents->Tittle=$request->Paragraph1;
            $contents->Paragraph1=$request->Paragraph2;

            
            $contents->Images=$Images;         
        }
        else{
            $contents= Contents::find($ContentsId);
            $arr = Contents::select('Images')->where('id' , $ContentsId)->get();
            $val=$arr[0];
            $contents->Tittle=$request->Paragraph1;
            $contents->Paragraph1=$request->Paragraph2;      
            $contents->Images=$val['Images'];
            
        }
        $contents->save(); 

        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

    }

    public function editMain(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
        return Response()->json($company);
    }

   
    public function destroyMain(Request $request)
    {
        $contents = contents::where('id',$request->id)->delete();
      
        return Response()->json($contents);
    }



// lists //////////////////////////////////////////
    public function showlist()
    {
        $query=Lists::select('id','list','updated_at');
       if(request()->ajax()) {
           return datatables()->of($query)
           ->addColumn('actions', 'Button.seclist-action')
           ->rawColumns(['actions'])
           ->addIndexColumn()
           ->make(true);
       }
        return view('backend.Page3.sectionlists');  
    }


    public function storelist(Request $request)
    { 
        $ContentsId = $request->id;
        
            $contents= Lists::find($ContentsId);
            $contents->list=$request->list;
            $contents->save(); 
        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

    }

    public function editlist(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Lists::find($where)->first();
      
        return Response()->json($company);
    }

   
    public function destroylist(Request $request)
    {
        $contents = Lists::where('id',$request->id)->delete();
      
        return Response()->json($contents);
    }
    
}
