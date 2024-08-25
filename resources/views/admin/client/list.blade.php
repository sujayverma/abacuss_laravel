@extends('layouts.dashboard')
@section('admin')

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">All Client </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12 text-center">
                        <a href="{{ route('create.client') }}" class="btn waves-effect waves-light btn-primary">Add Client</a>
                        </div>
                        <div class="table-responsive m-t-40">
                            <div id="ct-Table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="dataTables_length" id="ct-Table-1_length"><label>Show 
                                    <select name="ct-Table-1_length" id="show_data" aria-controls="ct-Table-1" class="form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label>
                                </div>
                                <div id="ct-Table-1_filter" class="dataTables_filter"><label>Search:<input type="search" id="search" class="form-control form-control-sm" placeholder="" aria-controls="ct-Table-1"></label></div>
                                <div id="ajax_table_box">
                                    <div class="d-flex justify-content-center align-items-center p-5">
                                        <div class="spinner-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>

<script>
    $.get('{{ route('ajax_client') }}', function(data){
       $('#ajax_table_box').html(data);
   });
   function paginate(no){
        var show_data = $('#show_data').val();
        var search = $('#search').val();
        $('#ajax_table_box').html('<div class="d-flex justify-content-center align-items-center p-5"> <div class="spinner-border"></div></div>');
        $.get('{{ route('ajax_client') }}?page='+no+'&show_data='+show_data+'&search='+search, function(data){
            $('#ajax_table_box').html(data);
        });
    }
    $('.dataTables_wrapper').on('input' ,function(){
        var show_data = $('#show_data').val();
        var search = $('#search').val();
        var current_url = $('#current_url').val();
        $('#ajax_table_box').html('<div class="d-flex justify-content-center align-items-center p-5"> <div class="spinner-border"></div></div>');
        $.get('{{ route('ajax_client') }}?show_data='+show_data+'&search='+search, function(data){
            $('#ajax_table_box').html(data);
        });
    });
</script>

@endsection