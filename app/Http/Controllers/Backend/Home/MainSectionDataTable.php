<?php

namespace App\Http\Controllers\Backend\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Home\MainsectionRequest;
use App\Repositories\Backend\MainsectionRepo;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Contents;


class MainSectionDataTable extends Controller
{
    //
        /**
     * @var \App\Repositories\Backend\MainsectionRepo
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Home\MainsectionRepo $repository
     */
    public function __construct(MainsectionRepo $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Home\MainsectionRequest $request
     *
     * @return mixed
     */
    public function __invoke(MainsectionRequest $request)
    {



        return Datatables::of($this->repository->getForDataTable())
        ->filterColumn('id', function ($query, $keyword) {
            if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                $query->where('content.id', 1);
            }
        })
        ->addColumn('actions', function ($contents) {
            return $contents->action_buttons;
        })
        ->escapeColumns(['id'])
        ->make(true);
    }
}
