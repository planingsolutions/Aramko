<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Responses\ViewResponse;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Http\Requests\Backend\Home\UpdateMain;
use App\Models\Contents;
use App\Http\Responses\RedirectResponse;
use Illuminate\Http\Request;

class PageThreeController extends Controller
{
   
    /**
     * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
     *
     * @return ViewResponse
     */
    public function index(MainsectionRequest $request)
    {
        $query=Contents::select('id','Images','Tittle','Paragraph1')->where('section_id', 1);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'Button.main-action')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.Page3.index');  
    }


    
    public function store(Request $request)
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
            $contents->Tittle=$request->Tittle;

            $contents->Paragraph1=$request->Paragraph1;
            $contents->Images=$Images;         
        }
        else{
            $contents= Contents::find($ContentsId);
            $arr = Contents::select('Images')->where('id' , $ContentsId)->get();
            $val=$arr[0];
            $contents->Tittle=$request->Tittle;

            $contents->Paragraph1=$request->component;
            $contents->Images=$val['Images'];
            
        }
        $contents->save(); 
        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);
        
    }

    public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = Contents::find($where)->first();
      
        return Response()->json($company);
    }

   
    public function destroy(Request $request)
    {
        $contents = contents::where('id',$request->id)->delete();
      
        return Response()->json($contents);
    }




    

}
