<a href="javascript:void(0)" class="btn btn-primary btn-danger btn-sm"  data-trans-button-cancel="{{trans('buttons.general.cancel')}}"
                    data-trans-button-confirm="{{trans('buttons.general.crud.delete')}}"
                    data-trans-title="{{trans('strings.backend.general.are_you_sure')}}" id="delete-compnay" onClick="deleteFunc('{{ $id }}')" data-toggle="tooltip" data-original-title="Delete">
                        <i data-toggle="tooltip" data-placement="top" title="{{trans('buttons.general.crud.delete')}}" class="fa fa-trash"></i>
                </a>
