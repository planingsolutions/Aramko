<?php

namespace App\Http\Controllers\Front\servicess;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Models\Projects;

class ProjectOneController extends Controller
{
     /**
    * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
    *
    * @return ViewResponse
    */
    public function showfuelstations(MainsectionRequest $request)
    {
            $query=Projects::select('id','Tittle','Images','Location','updated_at')->where('section_id', 20);
            if(request()->ajax()) {
                return datatables()->of($query)
                ->addColumn('actions', 'Button.projectone-action')
                ->rawColumns(['actions'])
                ->addIndexColumn()
                ->make(true);
            }
            return view('backend.Page3.ProjectOne');  
    }

    
   public function createFs(Request $request)
   {
     
            $this->validate($request, [

                'Images' => 'required',
                'Images.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
            
            ]);
       if ($request->hasFile('Images'))
       {
           foreach($request->file('Images') as $image)
           {
            $name = time().rand(1,100).'.'.$image->extension();
            $image->move(public_path('img'), $name); 
            $Images[]=$name;
                
            }
            $contents   =   Projects::Create(
                [
                    'section_id'=>'20',
                    'Tittle' => ['ar'=>$request->Tittle , 'en'=>$request->Tittle], 
                    'Paragraph1' =>['ar'=>$request->Description1 , 'en'=>$request->Description1],
                    'Paragraphh'=>['ar'=>$request->Description2 , 'en'=>$request->Description2],
                    'Location'=>['ar'=>$request->Location , 'en'=>$request->Location],

                    'PO'=>['ar'=>$request->PO , 'en'=>$request->PO],
                    'Consultant'=>['ar'=>$request->Consultant , 'en'=>$request->Consultant],
                    'GeneralC'=>['ar'=>$request->GeneralC , 'en'=>$request->GeneralC],
                    'Subconstractor'=>['ar'=>$request->Subconstractor , 'en'=>$request->Subconstractor],

                    'Images' => $Images
                ]);    
       }  
       else{
           $contents   =   Projects::Create(
               [
                'section_id'=>'20',
                'Tittle' => ['ar'=>$request->Tittle , 'en'=>$request->Tittle], 
                'Paragraph1' =>['ar'=>$request->Description1 , 'en'=>$request->Description1],
                'Paragraphh'=>['ar'=>$request->Description2 , 'en'=>$request->Description2],
                'Location'=>['ar'=>$request->Location , 'en'=>$request->Location],
                'PO'=>['ar'=>$request->PO , 'en'=>$request->PO],
                'Consultant'=>['ar'=>$request->Consultant , 'en'=>$request->Consultant],
                'GeneralC'=>['ar'=>$request->GeneralC , 'en'=>$request->GeneralC],
                'Subconstractor'=>['ar'=>$request->Subconstractor , 'en'=>$request->Subconstractor],
                'Images' => '',
               ]);           
           }
           $contents->save();
       return redirect()->back()->with(['success' => 'User deleted successfully !']);

   }
    
   public function storefuelstations(Request $request)
   { 
       $ContentsId = $request->id;
       if ($request->hasFile('Images'))
       {
        foreach($request->file('Images') as $image)
        {
            $name = time().rand(1,100).'.'.$image->extension();
            $image->move(public_path('img'), $name); 
            $Images[]=$name;
            $contents   =   Projects::find($ContentsId);
            $contents->Tittle=$request->Tittle;
            $contents->Paragraph1=$request->Description1;
            $contents->Paragraphh=$request->Description2;
            $contents->PO=$request->PO;
            $contents->Consultant=$request->Consultant;
            $contents->GeneralC=$request->GeneralC;
            $contents->Subconstractor=$request->Subconstractor;
            $contents->Location=$request->Location;
            $contents->Images=$Images;

        }
       }
       else{
           $contents= Projects::find($ContentsId);
           $arr = Projects::select('Images')->where('id' ,$ContentsId )->get();
           $val=$arr[0];

            $contents->Tittle=$request->Tittle;
            $contents->Paragraph1=$request->Description1;
            $contents->Paragraphh=$request->Description2;
            $contents->PO=$request->PO;
            $contents->Consultant=$request->Consultant;
            $contents->GeneralC=$request->GeneralC;
            $contents->Subconstractor=$request->Subconstractor;
            $contents->Location=$request->Location;
            $contents->Images=$val['Images'];
        }
       $contents->save(); 

       return redirect()->back()->with(['flash_success' => __('alerts.backend.blog-category.created')]);

   }

   public function editfuelstations(Request $request)
   {   
       $where = array('id' => $request->id);
       $company  = Projects::find($where)->first();
     
       return Response()->json($company);
   }

  
   public function destroyfuelstations(Request $request)
   {
       $contents = Projects::where('id',$request->id)->delete();
     
       return Response()->json($contents);
   }   
}
