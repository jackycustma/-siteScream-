
  
  <h1 class="text-center">Mande uma Mensagem</h1>
  
  <form action="obrigado" name="FormularioEnvia" method="POST">
    <div class="row g-3">
      <div class="col-sm-4">
        <label>Nome</label>
        <input type="text" name="Nome" class="form-control" required>
      </div>
      <div class="col-sm-4">
        <label>Sobrenome</label>
        <input type="text" name="Sobrenome" class="form-control" required>
      </div>
      <div class="col-4">
        <label>E-mail</label>
        <input type="email" name="Email" class="form-control" required>
      </div>

      <div class="col-12">
        <label>Mensagem</label>
        <input type="text" name="Mensagem" class="form-control" required>
      </div>
      <div class="col-12">
        <button type="submit" name="FormularioEnvia" class="btn d-grid gap-2 col-4 mx-auto">Enviar</button>
 
      </div>
    </div>
  </form>

