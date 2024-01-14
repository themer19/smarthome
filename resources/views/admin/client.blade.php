@extends('layouts.sidebar')
@section('content')
<div class="pagetitle">
      <h1>Client</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Client </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
                 
                  <table class="table table-striped">
                      <tr>
                            <TH>Id</TH>
                            <TH>Nom</TH>
                           <TH>email</TH>
                          <TH>action</TH>
                          <TH></TH>
                      </tr>
               
                      @foreach ($Cli as $row)
                          <tr>
                              <td>{{$row->id}}</td>
                              <td>{{$row->name}}</td>
                              <td>{{$row->email}}</td>
                             
                              <td><form action="{{url('deletecli/'.$row->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                  </form>
                              </td>
                          </tr>
                 
                          @endforeach     
@endsection