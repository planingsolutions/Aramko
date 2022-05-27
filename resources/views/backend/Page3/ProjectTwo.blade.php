@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.Home.Main Section'))

@section('breadcrumb-links')
@include('backend.Page3.includes.breadcrumb-P1')
@endsection
@include('sweetalert::alert')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                @lang('labels.backend.access.Home.industrial facilities') <small class="text-muted">{{ __('labels.backend.access.Home.Mainsectionf.active') }}</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->
       
        <div class="row mt-4">
            <div class="col">
            @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
                <div class="table-responsive">
                    <table id="Main_section" class="table">
                        <thead>
                            <tr>
                                <th>{{ trans('labels.backend.access.Home.aboutsec1.PrjectName') }}</th>
                                <th>{{ trans('labels.backend.access.Home.aboutsec1.OtherImages') }}</th>
                                <th>{{ trans('labels.backend.access.Home.aboutsec1.Location') }}</th>
                                <th>{{ trans('labels.backend.access.Home.Mainsectionf.table.updated_at') }}</th>
                                <th>{{ trans('labels.general.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody> 
                        </tbody>
                    </table>
                </div>
            </div>
            <!--col-->
            <!-- Model Form -->

            <div class="modal fade" id="company-modal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="CompanyModal">{{trans('forms.Main.FormName')}}</h4>
            </div>
            <div class="modal-body">
            <form action="javascript:void(0)" id="CompanyForm" name="CompanyForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id">

<!-- Tittle -->
                <div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.aboutsec1.PrjectName') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Tittle" name="Tittle" placeholder="{{trans('forms.Main.Placeholder.Tittle')}}" maxlength="255" required>
                    </div>
                   
                </div> 

<!-- Other Images -->
<div class="form-group">
                    <label for="Images" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.aboutsec1.OtherImages') }}</label>
                    <div class="col-sm-12">
                        <input type="file" accept="image/*" class="form-control" id="Images" name="Images[]" placeholder="{{trans('forms.Main.Placeholder.Images')}}" maxlength="255" style="height: calc(2.5em + 0.75rem + -4px);" multiple>
                    </div>
                </div>  
<!-- Location -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.aboutsec1.Location') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Location" name="Location" placeholder="{{trans('forms.Main.Placeholder.Tittle')}}" maxlength="255" required>
                    </div>
                   
                </div> 
<!-- Description1 -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.aboutsec1.Description1') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Description1" name="Description1" placeholder="{{trans('forms.Main.Placeholder.Tittle')}}" maxlength="255" required>
                    </div>
                   
                </div> 
<!-- Description2 -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.aboutsec1.Description2') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Description2" name="Description2" placeholder="{{trans('forms.Main.Placeholder.Tittle')}}" maxlength="255" required>
                    </div>
                   
                </div> 
<!-- Consultant -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{__('translation.Consultant')}}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Consultant" name="Consultant" placeholder="{{trans('forms.Main.Placeholder.Tittle')}}" maxlength="255" required>
                    </div>
                   
                </div> 
<!-- General Constractor -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{__('translation.General Constractor')}}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="GeneralC" name="GeneralC" placeholder="{{trans('forms.Main.Placeholder.Tittle')}}" maxlength="255" required>
                    </div>
                   
                </div> 
<!-- Subconstractor -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{__('translation.Subconstractor')}}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Subconstractor" name="Subconstractor" placeholder="{{trans('forms.Main.Placeholder.Tittle')}}" maxlength="255" required>
                    </div>
                   
                </div> 

<!-- save Button -->
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary saveChange" id="btn-save" >{{trans('forms.Main.Label.saveButton')}}
                </button>
                </div>
        </form>
    </div>
<div class="modal-footer">
</div>
</div>
</div>
</div>

<div class="modal fade" id="company-create" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="CompanyModalcreate">{{trans('forms.Main.FormName')}}</h4>
            </div>
            <div class="modal-body">
            <form action="javascript:void(0)" id="CompanyFormCreate" name="CompanyFormCreate" class="form-horizontal" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id">

<!-- Tittle -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.aboutsec1.PrjectName') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Tittle" name="Tittle" placeholder="{{trans('forms.Main.Placeholder.Tittle')}}" maxlength="255" required>
                    </div>
                   
                </div> 

<!-- Other Images -->
<div class="form-group">
                    <label for="Images" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.aboutsec1.OtherImages') }}</label>
                    <div class="col-sm-12">
                        <input type="file" accept="image/*" class="form-control" id="Images" name="Images[]" placeholder="{{trans('forms.Main.Placeholder.Images')}}" maxlength="255" style="height: calc(2.5em + 0.75rem + -4px);" multiple>
                    </div>
                </div>  
<!-- Location -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.aboutsec1.Location') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Location" name="Location" placeholder="{{trans('forms.Main.Placeholder.Tittle')}}" maxlength="255" required>
                    </div>
                   
                </div> 
<!-- Description1 -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.aboutsec1.Description1') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Description1" name="Description1" placeholder="{{trans('forms.Main.Placeholder.Tittle')}}" maxlength="255" required>
                    </div>
                   
                </div> 
<!-- Description2 -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{ trans('labels.backend.access.Home.aboutsec1.Description2') }}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Description2" name="Description2" placeholder="{{trans('forms.Main.Placeholder.Tittle')}}" maxlength="255" required>
                    </div>
                   
                </div> 
<!-- Consultant -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{__('translation.Consultant')}}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Consultant" name="Consultant" placeholder="{{trans('forms.Main.Placeholder.Tittle')}}" maxlength="255" required>
                    </div>
                   
                </div> 
<!-- General Constractor -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{__('translation.General Constractor')}}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="GeneralC" name="GeneralC" placeholder="{{trans('forms.Main.Placeholder.Tittle')}}" maxlength="255" required>
                    </div>
                   
                </div> 
<!-- Subconstractor -->
<div class="form-group">
                    <label for="Tittle" class="col-sm-12 control-label">{{__('translation.Subconstractor')}}</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Subconstractor" name="Subconstractor" placeholder="{{trans('forms.Main.Placeholder.Tittle')}}" maxlength="255" required>
                    </div>
                   
                </div> 

<!-- save Button -->
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" value="{{csrf_token()}}" class="btn btn-primary saveChange" id="btn-ss">{{trans('forms.Main.Label.saveButton')}}
                </button>
                </div>
        </form>
    </div>
<div class="modal-footer">
</div>
</div>
</div>
</div>


        </div>
        <!--row-->

    </div>
    <!--card-body-->
</div>
<!--card-->
@endsection

@section('pagescript')
<script>
    var lang='{{ config('app.locale') }}';
  $('#Main_section').DataTable({
        processing: false,
        serverSide: true,
        ajax: "{{ route('admin.industrialfacilities') }}",
        columns: [
            { data: 'Tittle.'+lang, name: 'Tittle' },
          
       { data: 'Images', name: 'Images' , "render": function ( data, type, row, meta ) {
           
           var imaa=[];
               $.each(data, function(i,v) {
               imaa[i]= v;
           });
               return "<img src=\"{{asset('public/img/')}}/" +imaa[0]+"\" height=\"20\"/>" +" "+ "<img src=\"{{asset('public/img/')}}/" +imaa[1]+"\" height=\"20\"/>"+"  "+"<img src=\"{{asset('public/img/')}}/" +imaa[2]+"\" height=\"20\"/>"+" "+"<img src=\"{{asset('public/img/')}}/" +imaa[3]+"\" height=\"20\"/>"+" "+"<img src=\"{{asset('public/img/')}}/" +imaa[4]+"\" height=\"20\"/>";            
           
       }},
        { data: 'Location.'+lang, name: 'Location' },

        { data: 'updated_at', name: 'updated_at' },
        { data: 'actions', name: 'actions', searchable: false, sortable: false }

        ],
        order: [
            [3, "asc"]
        ],
        "language": {
            
            "url":'//cdn.datatables.net/plug-ins/1.11.5/i18n/'+lang+'.json',
           
    },
        searchDelay: 500,
        "createdRow": function(row, data, dataIndex) {
            FTX.Utils.dtAnchorToForm(row);
}});
// add
function add(){
        $('#CompanyFormCreate').trigger("reset");
        $('#CompanyModalcreate').html("{{trans('forms.Main.CreateName')}}");
        $('#company-create').modal('show');
        $('#id').val('');
        }  
// Edit-function
    function editFunc(id){

        $.ajax({
            type:"POST",
            url: "{{url('admin/Edit-industrialfacilities')}}",
            data:{id:id},
            dataType:'json',
            success:function(res)
            {
                
                $('#company-modal').modal('show');
                $('#id').val(res.id);
                $('#Tittle').val(res.Tittle.lang);
                $('#Images').val(res.Images)
                $('#Location').val(res.Location.lang);
                $('#Description1').val(res.Paragraph1.lang);
                $('#Description2').val(res.Paragraphh.lang);
                $('#PO').val(res.PO.lang);
                $('#Consultant').val(res.Consultant.lang);
                $('#GeneralC').val(res.GeneralC.lang);
                $('#Subconstractor').val(res.Subconstractor.lang);
            }
});
} 

// Delete Function
function deleteFunc(id){
    if (confirm("Delete Record?") == true) {
    var id = id;
    // ajax
    $.ajax({
    type:"POST",
    url: "{{ url('admin/Delete-industrialfacilities') }}",
    data: { id: id },
    dataType: 'json',
    success: function(res){
    var oTable = $('#Main_section').dataTable();
    oTable.fnDraw(false);
    }
    });
    }
}
// submit Button Function
    $('#CompanyForm').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
            type:'POST',
            url: "{{ url('admin/Store-industrialfacilities')}}",
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: (data) => {
            $("#company-modal").modal('hide');
            var oTable = $('#Main_section').dataTable();
            oTable.fnDraw(false);
            $("#btn-save").html('Submit');
            $("#btn-save"). attr("disabled", false);
            },
            error: function(data){
            console.log(data);
        }
});
});
$('#CompanyFormCreate').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
        type:'POST',
        url: "{{url('admin/Create-industrialfacilities')}}",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
        $("#company-create").modal('hide');
        var oTable = $('#Main_section').dataTable();
        oTable.fnDraw(false);
        $("#btn-ss").html('Submit');
        $("#btn-ss"). attr("disabled", false);
        },
        error: function(data){
        console.log(data);
    }
});

 
// Show Delete Alert 
$(document).ready(function() {
            $(document).on('click', '#delete_id', function(e) {
                var id = $(this).data('id');
                SwalDelete(id);
                e.preventDefault();
            });
        });

        function SwalDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "It will be deleted permanently!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                                url: 'office_info_delete.php',
                                type: 'POST',
                                data: 'id=' + id,
                                dataType: 'json'
                            })
                            .done(function(response) {
                                Swal.fire('Deleted!', 'Your file has been deleted.', 'success')
                            })
                            .fail(function() {
                                Swal.fire('Oops...', 'Something went wrong with ajax !', 'error')
                            });
                    });
                },
            });
        }
    
    });

</script>
@stop