<?php

namespace App\Http\Controllers\Front\page3;

use App\Http\Controllers\Controller;
use App\Http\Responses\ViewResponse;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Http\Requests\Backend\Home\UpdateMain;
use App\Models\Contents;
use App\Http\Responses\RedirectResponse;
use Illuminate\Http\Request;

class MainSectionController extends Controller
{
    /**
     * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
     *
     * @return ViewResponse
     */
    public function show(MainsectionRequest $request)
    {
        $query=Contents::select('id','Images','Tittle','updated_at')->where('section_id', 10);
        if(request()->ajax()) {
            return datatables()->of($query)
            ->addColumn('actions', 'ButtonPage3.main-action')
            ->rawColumns(['actions'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.Page2.index');  
    }


    public function storeMain(Request $request)
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
