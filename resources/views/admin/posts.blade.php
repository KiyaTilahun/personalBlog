
@extends('layouts.dashboard')
@section('body')
    

<header id="main-header" class="text-white bg-primary py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fas fa-pencil-alt"></i> Posts</h1>
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
            <input type="text" class="form-control" placeholder="Pesquisar Posts..." />
            <div class="input-group-append">
              <button class="btn btn-primary">Pesquisar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- POSTS -->
  <main id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Nossos Posts</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Título</th>
                  <th>Categoria</th>
                  <th>Data</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Post Um</td>
                  <td>Desenvolvimento Web</td>
                  <td>10 de julho de 2020</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Mais Detalhes
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Post Dois</td>
                  <td>Desenvolvimento Mobile</td>
                  <td>5 de julho de 2020</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Mais Detalhes
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Post Três</td>
                  <td>Desenvolvimento Desktop</td>
                  <td>30 de junho de 2020</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Mais Detalhes
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Post Quatro</td>
                  <td>Negócios</td>
                  <td>22 de junho de 2020</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Mais Detalhes
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Post Cinco</td>
                  <td>Marketing</td>
                  <td>16 de junho de 2020</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Mais Detalhes
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Post Seis</td>
                  <td>Desenvolvimento Web</td>
                  <td>4 de junho de 2020</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Mais Detalhes
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Post Sete</td>
                  <td>Desenvolvimento Mobile</td>
                  <td>30 de maio de 2020</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Mais Detalhes
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>

            <!-- PAGINATION -->
            <nav class="ml-4">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a href="#" class="page-link">Anterior</a>
                </li>
                <li class="page-item active">
                  <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">Próxima</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection
