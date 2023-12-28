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
    <div class="row">          
        <!-- start page title -->
        
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Elèves au Primaire</h4>
            </div>
        </div>
       
        <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xxl">
                                
                            </div><!--end col-->
                            <div class="col-xxl col-sm-6">
                                <div>
                                </div>
                            </div><!--end col-->
                            <div class="col-xxl col-sm-6">
                              <label for="filter">Filter par classe</label>
                              <select name="filter" id="" class="form-control">
                                 <option value="all">
                                    <span class="fa fa-excel-file"></span>
                                     Tous
                                 </option>
                               </select> 
                            </div><!--end col-->
                            <div class="col-xxl-2 col-sm-6">
                                <label for="export">Exportations</label>
                                
                               <select name="export" id="" class="form-control">
                                 <option value="" hidden>
                                    Choisir 
                                 </option>
                                 <option value="excel">
                                    Exporter en excel
                                 </option>
                                 <option value="pdf">
                                    Exporter en pdf
                                 </option>
                                 <option value="print">
                                    Imprimer la liste
                                 </option>
                               </select>
                         
                            </div><!--end col-->
                            <div class="col-xxl-auto col-sm-6">
                                <label for="new">Enregistrer</label>
                               <a href="students/registration" name="new" class="form-control btn btn-success"> 
                                    <span class="fa fa-plus"></span>
                                    Nouveau élève
                                </a>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div>
            </div><!--end col-->
        </div>



         <div class="card row p-3">
            <table id="dataTable" class="table table-bordered table-striped dataTable dtr-inline">
                <thead>
                    <tr>
                        <th>#No</th>
                        <th>Photo</th>
                        <th>Numéro</th>
                        <th>Nom(s)</th>
                        <th>Prénom(s)</th>
                        <th>Genre</th>
                        <th>Classe</th>
                        <th>Naissance</th>
                        <th>Statut</th>
                        <th>Options</th>
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
            {data: 'photo', name: 'photo', orderable: false, searchable: false},
            {data: 'stNumber', name: 'stNumber'},
            {data: 'stSurname', name: 'stSurname'},
            {data: 'stName', name: 'stName'},
            {data: 'stGender', name: 'stGender'},
            {data: 'stClaCode', name: 'stClaCode'},
            {data: 'stDob', name: 'stDob'},
            {data: 'stStatus', name: 'stStatus'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
      
  });
</script>
@endsection