<?php

namespace App\Http\Controllers\Front\Furniture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Models\Contents;
use App\Models\images;


class FurnitureController extends Controller
{
    /**
    * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
    *
    * @return ViewResponse
    */
    public function showfurniture(MainsectionRequest $request)
    {
            $query=images::select('id','images','updated_at')->where('section_id', 9);
            if(request()->ajax()) {
                return datatables()->of($query)
                ->addColumn('actions', 'Button.furniture-action')
                ->rawColumns(['actions'])
                ->addIndexColumn()
                ->make(true);
            }
            return view('backend.Page3.furniture');  
    }


    public function createfurniture(Request $request)
    {
        $this->validate($request, [

            'Images' => 'required',
            'Images.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
         
        ]);
        if ($request->hasFile('Images'))
        {
            $image=$request->File('Images');
            $name = time().rand(1,100).'.'.$image->extension();
            $image->move(public_path('img'), $name);
            $contents=images::Create(
                [
                    'section_id'=>'9',
                    'images' => $name,
                    'id'=>'',
                ]);  
        }
        $contents->save(); 
        return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);
    }

   public function storefurniture(Request $request)
   { 
       $ContentsId = $request->id;

       if ($request->hasFile('Images'))
       {
            $image=$request->File('Images');
            $name = time().rand(1,100).'.'.$image->extension();
            $image->move(public_path('img'), $name);  
           
           $contents   =   images::find($ContentsId);
           $contents->images=$name;         
       }
       else{
           $contents= images::find($ContentsId);
           $arr = images::select('images')->where('id' ,$ContentsId )->get();
           $val=$arr[0];
           $contents->images=$val['images'];
           
       }
       $contents->save(); 

       return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

   }

   public function editfurniture(Request $request)
   {   
       $where = array('id' => $request->id);
       $company  = images::find($where)->first();
     
       return Response()->json($company);
   }

  
   public function destroyfurniture(Request $request)
   {
       $contents = images::where('id',$request->id)->delete();
     
       return Response()->json($contents);
   }
}
