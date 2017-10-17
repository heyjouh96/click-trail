


<div class="container-fluid">      

    <h1>Painel</h1>
    
    <p> <?= $usuario->nm_Usuario; ?> </p>  
    
    <p> <a href="<?= base_url() ?>cadastro/cadastrarSite">Cadastrar novo Site</a> </p>
    <p> <a href="<?= base_url() ?>login/logout">Sair</a> </p>
    
    <hr>
    
    <h2>Domínios</h2>
    
    <!-- mostra os sites cadastrados pelo usuário -->
    <?php foreach($sites as $s){ ?>
        
        <p> <a href="<?= base_url() ?>painel/siteInfo/<?= $s->cd_Site; ?>"> <?= $s->ds_Dominio; ?> </a></p>
    
    <?php } ?>    
</div>