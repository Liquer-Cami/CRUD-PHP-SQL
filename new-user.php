<h1>Novo Usuário</h1>
<form action="?page=save" method="POST">
    <input type="hidden" name="action" value="create">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome"
        class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" 
        class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" 
        class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" 
        class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" 
        class="btn btn-primary">Enviar</button>
    </div>
</form>