@extends('layouts.dashboard')
@section('page_head')
<!-- form css-->
<link href="{{asset('assets/css/formStyles.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('page_title')
  Nouveau élève en primaire
@endsection
@section('content')
<div class="page-content">
  <div class="container-fluid">
    <div class="row">          
        <!-- start page title -->
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Nouveau Elève en Primaire</h4>
            </div>
        </div>
<section class="content">
  <div class="container-fluid">
   <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="fkI0OU145xyaAmIsJXc7T47g8UKIc39hNquzZMNY">    <input type="hidden" name="_method" value="POST">    <div class="box-body no-pad">
     <div class="col-md-12">
      <div class="card">
         <div class="box-header p-3">
            <h3 class="box-title text-white">
              <i class="fa fa-graduation-cap"></i>
               Formulaire d'enregistrement
            </h3>
         </div>  
    <div class="row padd">
       <!-- Left side elements -->
        <div class="col-md-6">
           <h3 class="box-title"> 
            <i class="fa fa-info" aria-hidden="true">              
            </i>&nbsp;Détails Personnel
           </h3>         
        <div class="col-md-12 line_box">
            <!-- PROFILE PICTURE -->
          <div class="row" style="margin-left: 35%;">
              <div class="col-sm-4 col-sm-offset-1">
                <div class="picture-container">
                  <div class="picture">
                      <img src="{{asset('assets/images/users/user.png')}}" class="picture-src" id="wizardPicturePreview" title="">
                      <input type="file" id="wizard-picture" name="avatar" class="form-control">
                  </div>
                  <h6>Photo</h6>
                </div>
              </div>
          </div>
          <!--/ PROFILE PICTURE --> 
                 <!-- Put inputs here -->
        <div class="row">
          <div class="form-group col-md-6">
            <label for="Name">Nom(s)</label>
            <span class="red">*</span>
            <input type="text" class="form-control " name="surname" placeholder="Nom de l'Elève" value="">
          </div>
          <div class="form-group col-md-6">
            <label for="Name">Prénom(s)</label>
            <span class="red">*</span>
            <input type="text" class="form-control " name="name" placeholder="Prénom de l'Elève" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="Name">Date de Naissance</label>
            <span class="red">*</span>
            <input type="date" class="form-control " name="dob" placeholder="Date de Naissance" value="">
          </div>
          <div class="form-group col-md-6">
            <label for="Name">Sexe</label>
            <span class="red">*</span>
            <select name="sexe" class="form-control ">
              <option value="" hidden>Choisir le sexe</option>
              <option value="Masculin">Masculin</option>
              <option value="Féminin">Féminin</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="Name">Adresse Actuelle</label>
            <span class="red">*</span>
            <input type="text" class="form-control " name="address" placeholder="Adresse Actuelle" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="Name">Ville</label>
            <span class="red">*</span>
            <input type="text" class="form-control " name="town" placeholder="Ville" value="">
          </div>
          <div class="form-group col-md-6">
            <label for="Name">Quartier</label>
            <span class="red">*</span>
            <input type="text" class="form-control " name="neighborhood" placeholder="Quartier" value="">
          </div>
        </div>  
        </div>         
       </div><!-- end Left side elements -->
            <!-- right side elements -->
     <div class="col-md-6">
           <h3 class="box-title"> 
              <i class="fa fa-building" aria-hidden="true">               
              </i>&nbsp;Ecole Détails 
            </h3>
       <div class="line_box">
                              <!-- Put inputs here --> 
        <div class="row">
          <div class="form-group col-md-6">
            <label for="Name">Numéro d'Elève</label>
            <span class="red">*</span>
            <input type="text" class="form-control numbers" readonly="readonly" name="stNum">
          </div>
          <div class="form-group col-md-6">
            <label for="Name">Classe</label>
            <span class="red">*</span>
            <select name="cla_code" class="form-control ">
              <option value="" hidden>Choisir la Classe</option>
              <option value="P1">P1</option>
              <option value="P2">P2</option>
              <option value="P3">P3</option>
              <option value="CPU">CPU</option>
              <option value="CE1">CE1</option>
              <option value="CE2">CE2</option>
              <option value="CM1">CM1</option> 
              <option value="CM2">CM2</option>            
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 has-feedback s-pad">
            <label for="Name">Date d'enregistrement</label>
            <span class="red">*</span>
            <input type="text" class="form-control" readonly="readonly" name="djoin">
          </div>
        </div>
     </div>
     <br>
       <h3 class="box-title"> 
              <i class="fa fa-user" aria-hidden="true">               
              </i>&nbsp; Parent Détails
       </h3>
      <div class="line_box">
      <!-- Put inputs here --> 
      <div class="row">                     
      <div class="form-group col-md-6">
            <label for="Name">Nom(s)</label>
            <span class="red">*</span>
            <input type="text" class="form-control " name="parent_surname" placeholder="Nom du parent" value="">
          </div>
          <div class="form-group col-md-6">
            <label for="Name">Prénom(s)</label>
            <span class="red">*</span>
            <input type="text" class="form-control " name="parent_name" placeholder="Prénom du parent" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="Name">Sexe</label>
            <span class="red">*</span>
            <select name="parent_genre" class="form-control ">
              <option value="" hidden>Choisir le sexe</option>
              <option value="Masculin">Masculin</option>
              <option value="Feminin">Feminin</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="Name">Statut</label>
            <span class="red">*</span>
            <select name="parent_status" class="form-control ">
              <option value="" hidden>Choisir le statut</option>
              <option value="Marie">Marie</option>
              <option value="Célibataire">Célibataire</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="Name">Adresse Actuelle</label>
            <span class="red">*</span>
            <input type="text" class="form-control " name="parent_address" placeholder="Adresse Actuelle" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="Name">Ville</label>
            <span class="red">*</span>
            <input type="text" class="form-control " name="parent_town" placeholder="Ville" value="">
          </div>
          <div class="form-group col-md-6">
            <label for="Name">Quartier</label>
            <span class="red">*</span>
            <input type="text" class="form-control " name="parent_area" placeholder="Quartier" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="Name">Telephone</label>
            <span class="red">*</span>
            <input type="number" class="form-control numbers " name="parent_phone" placeholder="Numero de telephone" value="">
          </div>
          <div class="form-group col-md-6">
            <label for="Name">Email</label>
            <span class="red">*</span>
            <input type="email" class="form-control " name="parent_email" placeholder="Addresse Electronique" value="">
          </div>
        </div> 
        <div class="row">
          <div class="form-group col-md-6">
            <label for="Name">Relation</label>
            <span class="red">*</span>
            <input type="text" class="form-control " name="relationship" placeholder="Relation avec l'Elève" value="">
          </div>
          <div class="form-group col-md-6">
            <label for="Name">Profession</label>
            <span class="red">*</span>
            <input type="text" class="form-control " name="profession" placeholder="Profession" value="">
          </div>
        </div>
    
     </div>
   </div><!-- end right side elements -->
  </div>
  <div class="box-footer right">
     <button type="submit" class="btn btn-primary">Ajouter</button>&nbsp;&nbsp;
     <a href="http://127.0.0.1:8000/primarystudents" class="btn btn-info">Retour</a>
  </div>
</div>
</div>
</div>
</form>
</div>
</section>
    </div>
</div>
@endsection
@section('page_scripts')
<script type="text/javascript">
   // Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    }); 
   //Function to show image before upload

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection