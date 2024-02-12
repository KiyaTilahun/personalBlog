
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
                <tr>
                  <td>1</td>
                  <td>Desenvolvimento Web</td>
                  <td>10 de julho de 2020</td>
                  <td>
                    <a href="#" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Mais Detalhes
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Desenvolvimento Mobile</td>
                  <td>5 de julho de 2020</td>
                  <td>
                    <a href="#" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Mais Detalhes
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Desenvolvimento Desktop</td>
                  <td>30 de junho de 2020</td>
                  <td>
                    <a href="#" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Mais Detalhes
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Negócios</td>
                  <td>22 de junho de 2020</td>
                  <td>
                    <a href="#" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Mais Detalhes
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Marketing</td>
                  <td>16 de junho de 2020</td>
                  <td>
                    <a href="#" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Mais Detalhes
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
