@extends('layouts.dashboard')
@section('page_head')
@include('layouts.datatable.datatablestyles')

   
@endsection
@section('page_title')
  Elèves au Primaire
@endsection
@section('content')
<div class="page-content">
    <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Elèves au Primaire</h4>
                    </div>
                </div>
            </div>

         <div class="card row p-3">
            <table id="dataTable" class="table table-bordered table-striped dataTable dtr-inline">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Assignee</th>
                
                    </tr>
                </thead>
                <tbody>

   
      
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('page_scripts')
<!-- DataTables -->
@include('layouts.datatable.datatablescripts')
<script type="text/javascript">
  $(function () {
      
    var table = $('#dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('primary.students.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'stName', name: 'stName'},
            {data: 'stSurname', name: 'stSurname'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
      
  });
</script>
@endsection