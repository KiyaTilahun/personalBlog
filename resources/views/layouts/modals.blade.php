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
          <form>
            <div class="form-group">
              <label for="title">Título</label>
              <input type="text" class="form-control" />
            </div>
            <div class="form-group">
              <label for="category">Categoria</label>
              <select class="form-control">
                <option value="">Desenvolvimento Web</option>
                <option value="">Desenvolvimento Mobile</option>
                <option value="">Desenvolvimento Desktop</option>
                <option value="">Negócios</option>
                <option value="">Marketing</option>
              </select>
            </div>
            <div class="form-group">
              <label for="image">Subir Imagem</label>
              <div class="custom-file">
                <input type="file" id="image" class="custom-file-input" placeholder="enviar" />
                <label for="image" class="custom-file-label">Escolher Arquivo</label>
              </div>
              <small class="text-muted">Tamanho máximo de 3mb</small>
            </div>
            <div class="form-group">
              <label for="content">Conteúdo</label>
              <textarea name="addPostEditor" class="form-control"></textarea>
            </div>
          </form>
        </div>

        <div class="modal-footer">
          <button class="btn btn-primary" data-dismiss="modal">Salvar Publicação</button>
        </div>
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
          <form>
            <div class="form-group">
              <label for="category">Nome da Categoria</label>
              <input type="text" class="form-control" />
            </div>
          </form>
        </div>

        <div class="modal-footer">
          <button class="btn btn-success" data-dismiss="modal">Salvar Categoria</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ADD USER MODAL -->
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
  </div>