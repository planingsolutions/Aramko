<?php

namespace App\Http\Responses\Backend\MainHome;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\Contents
     */
    protected $contents;
    protected $id;

    

    /**
     * @param \App\Models\Contents $contents
     */
    public function __construct($contents)
    {
        $this->contents = $contents;
    }

    /**
     * toReponse.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {
        return view('backend.Home.edit')
            ->with('contents', $this->contents);
            
    }
}
