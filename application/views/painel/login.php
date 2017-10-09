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
    
    <!-- CADASTRO - MENSAGEM DE ERRO -->
    <?php if($this->session->flashdata('falhaCadastro')){ ?>
        <div class="alert alert-warning alert-dismissible show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <?= $this->session->flashdata('falhaCadastro'); ?>
        </div>
    <?php } ?>
    
    <!-- CADASTRO - MENSAGEM DE SUCESSO -->
    <?php if($this->session->flashdata('sucesCadastro')){ ?>
        <div class="alert alert-success alert-dismissible show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <?= $this->session->flashdata('sucesCadastro'); ?>
        </div>
    <?php } ?>
    
    
    
    
    
    <h1>Área de Usuários</h1>
    
    <!-- LOGIN -->
    <h2>Fazer Login</h2>
    <form action="<?= base_url() ?>painel/logar" method="post" name="login">
        
        <label for="email">E-mail</label>
        <input type="text" name="email" placeholder="Digite seu e-mail"> <br>
        
        <label for="senha">Senha</label>
        <input type="password" name="senha" placeholder="Digite sua senha"> <br>
        
        <input type="submit" value="Fazer Login">
        
    </form>
    
    <!-- CADASTRO -->
    <h2>Fazer Cadastro</h2>
    <form action="<?= base_url() ?>painel/cadastrar" method="post" name="cadastro">
        
        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="Digite seu nome"> <br>
        
        <label for="nome">Sobrenome</label>
        <input type="text" name="sbnome" placeholder="Digite seu sobrenome"> <br>
        
        <label for="email">E-mail</label>
        <input type="text" name="email" placeholder="Digite seu e-mail"> <br>
        
        <label for="senha1">Senha</label>
        <input type="password" name="senha1" placeholder="Digite sua senha"> <br>
        
        <label for="senha2">Confirmar Senha</label>
        <input type="password" name="senha2" placeholder="Digite sua senha novamente"> <br>
        
        <input type="submit" value="Fazer Login">
        
    </form>
    
</div>    



