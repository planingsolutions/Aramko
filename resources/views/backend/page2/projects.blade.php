@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.Home.Main Section'))

@section('breadcrumb-links')
@include('backend.page2.includes.breadcrumb-links')
@endsection
@include('sweetalert::alert')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.Home.Job Forms') }} <small class="text-muted">{{ __('labels.backend.access.Home.Mainsectionf.active') }}</small>
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
                    <table id="Main_section" class="table" style="width:100%;">
                        <thead>

                            <tr>
                                <th>{{__('translation.Name')}}</th>
                                <th>{{__('translation.Email')}}</th>
                                <th>{{__('translation.Phone')}}</th>
                                <th>{{__('translation.Address')}}</th>
                                <th>{{__('translation.Age')}}</th>
                                <th>{{__('translation.Educational qualification')}}</th>
                                <th>{{__('translation.Graduation Year')}}</th>
                                <th>{{__('translation.years of experience')}}</th>
                                <th>{{__('forms.Main.Label.Field')}}</th>
                                <th>{{__('translation.Upload Your C.V')}}</th>

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
        ajax: "{{ url('admin/Jobforms') }}",
        columns: [
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'phoneNumber', name: 'phoneNumber' },
            { data: 'address', name: 'address' },
            { data: 'age', name: 'age' },
            { data: 'EQ', name: 'EQ' },
            { data: 'GY', name: 'GY' },
            { data: 'YOE', name: 'YOE' },
            { data: 'field', name: 'field' },
            { data: 'cv', name: 'cv' },
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



// Delete Function
function deleteFunc(id){
    if (confirm("Delete Record?") == true) {
    var id = id;
    // ajax
    $.ajax({
    type:"POST",
    url: "{{ url('admin/destroyJobforms') }}",
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
            url: "{{ url('admin/storetProjects')}}",
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
        url: "{{ url('admin/createtProjects')}}",
        data: formData,
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