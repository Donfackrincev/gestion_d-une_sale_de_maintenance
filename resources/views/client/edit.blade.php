@extends('layouts.app')
@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modifier un client</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('client/' . $client->id)}}" method="POST">
              {{method_field('PATCH')}}
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input type="text" value="{{$client->nom}}" class="form-control" name="nom"  placeholder="Enter le nom du client">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Prenom</label>
                    <input type="text" value="{{$client->prenom}}" class="form-control" name="prenom"  placeholder="Enter le prenom du client">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" value="{{$client->email}}" class="form-control" name="email"  placeholder="Enter l'adresse email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Numero</label>
                    <input type="number" value="{{$client->numero}}" class="form-control" name="numero" placeholder="Entrer le numero de telephone">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            @endsection
