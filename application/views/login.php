<div class="container">
    
    <!-- LOGIN - MENSAGEM DE ERRO -->
    <?php if($this->session->flashdata('falhaLogin')){ ?>
        <div class="alert alert-warning alert-dismissible show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <?= $this->session->flashdata('falhaLogin'); ?>
        </div>
    <?php } ?>
    
    
    <h1>Área de Usuários</h1>
    
    <!-- LOGIN -->
    <h2>Fazer Login</h2>
    <form action="<?= base_url() ?>login/logar" method="post" name="login">
        
        <label for="email">E-mail</label>
        <input type="text" name="email" placeholder="Digite seu e-mail"> <br>
        
        <label for="senha">Senha</label>
        <input type="password" name="senha" placeholder="Digite sua senha"> <br>
        
        <input type="submit" value="Fazer Login">
        
    </form>

</div>    



