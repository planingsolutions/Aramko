<?php

namespace App\Http\Controllers\Front\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Models\Contents;


class Aboutsection3 extends Controller
{     /**
    * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
    *
    * @return ViewResponse
    */
    public function showsec3(MainsectionRequest $request)
    {
        $query=Contents::select('id','Images','Tittle','updated_at')->where('section_id', 6);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'Button.sec3-action')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.Page3.sec3index');  
    }




    public function storesec3(Request $request)
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
            $contents->Tittle=$request->paragraph1;
            $contents->Images=$Images;         
        }
        else{
            $contents= Contents::find($ContentsId);
            $arr = Contents::select('Images')->where('id' ,$ContentsId )->get();
            $val=$arr[0];
            $contents->Tittle=$request->paragraph1;

            $contents->Images=$val['Images'];
            
        }
        $contents->save(); 

        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

    }

    public function editsec3(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
        
        return Response()->json($company);
    }

    public function destroysec3(Request $request)
    {
        $contents = contents::where('id',$request->id)->delete();
        
        return Response()->json($contents);
    }

    
}
