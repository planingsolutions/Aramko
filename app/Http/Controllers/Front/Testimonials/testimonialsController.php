<?php

namespace App\Http\Controllers\Front\Testimonials;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Models\Contents;

class testimonialsController extends Controller
{
     /**
    * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
    *
    * @return ViewResponse
    */
    public function showtestimonials(MainsectionRequest $request)
    {
            $query=Contents::select('id','Images','updated_at')->where('section_id', 8);
            if(request()->ajax()) {
                return datatables()->of($query)
                ->addColumn('actions', 'Button.testimonials-action')
                ->rawColumns(['actions'])
                ->addIndexColumn()
                ->make(true);
            }
            return view('backend.Page3.testimonials');  
    }


   public function createtestimonials(Request $request)
   {
       //
       
       $this->validate($request, [

           'Images' => 'required',
           'Images.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        
       ]);

       if ($request->hasFile('Images'))
       {


           foreach($request->file('Images') as $i =>$image)
           {

               $text =time().".".$image->clientExtension();
               $image ->storeAs('img/',$text);
               $Images[]= $text;
           }
           $contents   =   Contents::Create(
               [
                   'section_id'=>'8',
                   'Tittle' => ['ar'=>$request->name , 'en'=>$request->name], 
                   'Paragraph1' =>['ar'=>$request->jobTittle , 'en'=>$request->jobTittle],
                   'Paragraph2'=>['ar'=>$request->opinion , 'en'=>$request->opinion],
                   'Paragraph3'=>'',
                   'vedios'=>'',
                   'Images' => $Images
                ]);     
       }  
       else{
           $contents   =   Contents::Create(
               [
                   'section_id'=>'8',
                   'Tittle' => ['ar'=>$request->name , 'en'=>$request->name], 
                   'Paragraph1' =>['ar'=>$request->jobTittle , 'en'=>$request->jobTittle],
                   'Paragraph2'=>['ar'=>$request->opinion , 'en'=>$request->opinion],
                   'Paragraph3'=>'',
                   'vedios'=>'',
                   'Images' => '',
               ]);           
           }
           $contents->save();
       return redirect()->back()->with(['success' => 'User deleted successfully !']);

   }

   public function storetestimonials(Request $request)
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
           $contents->Tittle=$request->name;
           $contents->Paragraph1=$request->jobTittle;
           $contents->Paragraph2=$request->opinion;

           $contents->Images=$Images;         
       }
       else{
           $contents= Contents::find($ContentsId);
           $arr = Contents::select('Images')->where('id' ,$ContentsId )->get();
           $val=$arr[0];
           $contents->Tittle=$request->name;
           $contents->Paragraph1=$request->jobTittle;
           $contents->Paragraph2=$request->opinion;
           $contents->Images=$val['Images'];
           
       }
       $contents->save(); 

       return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

   }

   public function edittestimonials(Request $request)
   {   
       $where = array('id' => $request->id);
       $company  = Contents::find($where)->first();
     
       return Response()->json($company);
   }

  
   public function destroytestimonials(Request $request)
   {
       $contents = contents::where('id',$request->id)->delete();
     
       return Response()->json($contents);
   }


}
