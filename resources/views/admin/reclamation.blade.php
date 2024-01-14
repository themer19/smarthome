@extends('layouts.Sideuser')
@section('content')
    <div class="pagetitle">
      <h1>Reclamation</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class=" active">Reclamation</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   <section class="section" >
    <div class="row align-items-top">
    
        <div class="col-lg-3">
              <!-- Card with an image on top -->
              <div class="card" >
                <div class="card-body">
                  <h5 class="card-title"></h5>
                </div>
                <div class="card-footer">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" >more ...</a>      
                </div>
              </div><!-- End Card with an image on top -->
        </div>

<!-- Modal -->
<div class="modal fade"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">description</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      </div>
    </div>
  </div>
</div>
   
   </div>



</div>


@endsection