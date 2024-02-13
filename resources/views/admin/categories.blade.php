
@extends('layouts.dashboard')
@section('body')
    


<header id="main-header" class="text-white bg-success py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fas fa-folder"></i> Categorias</h1>
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
            <input type="text" class="form-control" placeholder="Pesquisar Categorias..." />
            <div class="input-group-append">
              <button class="btn btn-success">Pesquisar</button>
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
              <h4>Nossas Categorias</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Título</th>
                  <th>Data</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                
                @foreach ($categories as $category)
                    
              
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{$category->name}}</td>
                  <td>{{$category->created_at->format('Y-m-d H:i:s')}}</td>
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
@endsection
