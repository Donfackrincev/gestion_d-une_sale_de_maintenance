@extends('layouts.app')
@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter un nouveau client</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('client')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input type="text" class="form-control" name="nom"  placeholder="Enter le nom du client">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Prenom</label>
                    <input type="text" class="form-control" name="prenom"  placeholder="Enter le prenom du client">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Prenom</label>
                    <input type="email" class="form-control" name="email"  placeholder="Enter l'adresse email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Numero</label>
                    <input type="number" class="form-control" name="numero" placeholder="Entrer le numero de telephone">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            @endsection
