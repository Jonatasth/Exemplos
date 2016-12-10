<?php 
include ('header.php');
?>
      <SECTION>
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <img class="img-responsive" src="img/maestro.png"/>
            </div>
          </div>
          <div class="row"><h1 class="col-lg-6 col-lg-offset-3">Acesso</h1>
          </div>
          <div class="row">
            <div>

              <?php
                if (isset($_GET['mensagem']) and !empty($_GET['mensagem'])) {
                	echo $_GET['mensagem'];
                }
                ?>

              <form action="autenticacao.php" method="post" class="col-lg-6 col-lg-offset-3">
               <div class="form-group">
                <label for="usuario">Usuário</label>
       	        <input class="form-control" name="usuario" id="usuario" type="text">
               </div>
               <div class="form-group">
         	      <label for="senha">Senha</label>
         	      <input class="form-control" name="senha" id="senha"type="password"/>
               </div>
               <input name="entrar" type="submit" class="btn btn-default">
              </form>      
            </div>
          </div>
        </div>
      </SECTION>
<?php 
include ('footer.php');
?>
   