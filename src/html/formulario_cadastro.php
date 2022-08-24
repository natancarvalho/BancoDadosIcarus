<!DOCTYPE html>
<html>
  <head>
    <title>Cadastrar Usuário</title>
    <?php 
       require "../funcoes/funcoes.php";
       exibirHead();

        echo "</head>";

        echo "<body>";
        require "../html/navbar_cadastro.php";
        echo "<br>";
?>

<div class="container">
<form id="formExemplo" data-toggle="validator" role="form" action="../funcoes/cadastrar_usuario.php" method="post">
  <div class="form-row">
    <div class="col-md-4 mb-3 form-group">
      <label for="validationCustom01">Nome</label>
      <input type="text" name="nome" class="form-control" id="validationCustom01" placeholder="Nome" required>
      <div class="help-block with-errors"></div>
      <div class="valid-feedback">
        Tudo certo!
      </div>
      <div class="invalid-feedback">
        Por favor, informe seu nome.
      </div>
    </div>
    <div class="col-md-4 mb-3 form-group">
      <label for="validationCustom02">Sobrenome</label>
      <input type="text" name="sobrenome" class="form-control" id="validationCustom02" placeholder="Sobrenome" required>
      <div class="help-block with-errors"></div>
      <div class="valid-feedback">
        Tudo certo!
      </div>
      <div class="invalid-feedback">
        Por favor, informe seu sobrenome.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-5 mb-3 form-group">
      <label for="inputEmail" class="control-label">Email</label>	    
      <input id="inputEmail" name="email" class="form-control" placeholder="Digite seu E-mail" type="email" data-error="Por favor, informe um e-mail válido." required>	    
      <div class="help-block with-errors"></div>
    </div>
    <div class="col-md-4 mb-3 form-group">
      <label for="validationCustom02">Área</label>
      <input type="text" name="area" class="form-control" id="validationCustom02" placeholder="Área da equipe" required>
      <div class="help-block with-errors"></div>
    </div>
    <div class="col-md-4 mb-3 form-group">
      <label for="validationCustom02">Microárea</label>
      <input type="text" name="microarea" class="form-control" id="validationCustom02" placeholder="Microárea da equipe" required>
      <div class="help-block with-errors"></div>
    </div>
    <div class="col-md-3 mb-3 form-group">
      <label for="inputPassword" class="control-label">Senha</label>	    
      <input type="password" name="senha" class="form-control" id="inputPassword" placeholder="Digite sua Senha..." data-minlength="6" required>	    
      <span class="help-block">Mínimo de seis (6) digitos</span>
    </div>
    <div class="col-md-3 mb-3 form-group">
    <label for="inputConfirm" class="control-label">Confirme a Senha</label>	    
    <input type="password" class="form-control" id="inputConfirm" placeholder="Confirme sua Senha..." data-match="#inputPassword" data-match-error="Atenção! As senhas não estão iguais." required>	    
    <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="form-group">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>
</div>

<script src="../../js/validator.min.js"></script>
</body>
</html>