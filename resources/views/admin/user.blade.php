
@extends('layouts.dashboard')
@section('body')
    <!-- HEADER -->
    <header id="main-header" class="text-white bg-warning py-2">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1><i class="fas fa-users"></i> Usuários</h1>
            </div>
          </div>
        </div>
      </header>
    
      <!-- SEARCH -->
      <section id="search" class="bg-light mb-4 py-4">
        <div class="container">
          <div class="row">
            <div class="col-md-6 ml-auto">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Pesquisar Usuários..." />
                <div class="input-group-append">
                  <button class="btn btn-warning">Pesquisar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
      <!-- CATEGORIES -->
      <main id="categories">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-header">
                  <h4>Nossos Usuários</h4>
                </div>
                <table class="table table-striped">
                  <thead class="thead-dark">
                    <tr>
                      <th>#</th>
                      <th>Nome</th>
                      <th>Email</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                    
              
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>
                        <a href="#" class="btn btn-secondary">
                          <i class="fas fa-angle-double-right"></i> Mais Detalhes
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>  


<!-- FOOTER -->
@endsection





