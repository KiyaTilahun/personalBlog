<div id="addPostModal" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-white bg-primary">
          <h5 class="modal-title">Adicionar Post</h5>
          <button class="close" data-dismiss="modal">
            <span class="text-white">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form method="POST" action="{{route('posts.store')}}">
            @csrf
            <div class="form-group">
              <label for="title">Título</label>
              <input type="text" class="form-control" value="{{old('title')}}" />
            </div>
            <select class="form-control" name="role_id">
              @if($categories->count() > 0)
             @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
             @endForeach
             @else
              No Record Found
               @endif   
           </select>
            <div class="form-group">
              <label for="image">Subir Imagem</label>
              <div class="custom-file">
                <input type="file" id="image" class="custom-file-input" placeholder="enviar" />
                <label for="image" class="custom-file-label">Escolher Arquivo</label>
              </div>
              <small class="text-muted">Tamanho máximo de 3mb</small>
            </div>
            <div class="form-group">
              <label for="body">Conteúdo</label>
              <textarea name="addPostEditor" class="form-control" >{{ old('body') }}</textarea>
            </div>
          
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" data-dismiss="modal">Salvar Publicação</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  <!-- ADD CATEGORY MODAL -->
  <div id="addCategoryModal" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-white bg-success">
          <h5 class="modal-title">Adicionar Categoria</h5>
          <button class="close" data-dismiss="modal">
            <span class="text-white">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="category">Category name</label>
              <input type="text" class="form-control" name="name" id="category" />
            </div>
          
        </div>

        <div class="modal-footer">
          <button type="submit"  class="btn btn-success" >Save Category</button>

        </div>
      </form>
      </div>
    </div>
  </div>

  <!-- ADD USER MODAL -->
   {{-- <div id="addUserModal" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h5 class="modal-title">Adicionar Usuário</h5>
          <button class="close" data-dismiss="modal">
            <span class="text-white">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="name">Nome</label>
              <input type="text" class="form-control" />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" />
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" class="form-control" />
            </div>
            <div class="form-group">
              <label for="password2">Confirmar Senha</label>
              <input type="password" class="form-control" />
            </div>
          </form>
        </div>

        <div class="modal-footer">
          <button class="btn btn-warning" data-dismiss="modal">Salvar Usuário</button>
        </div>
      </div>
    </div>
  </div>  --}}

  



   <div id="addUserModal" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h5 class="modal-title">Adicionar Usuário</h5>
          <button class="close" data-dismiss="modal">
            <span class="text-white">&times;</span>
          </button>
        </div>
  <div class="modal-body">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>