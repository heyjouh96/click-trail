<!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-style" id="mainNav">
    <a class="navbar-brand navbar-border" href="<?= base_url() ?>paginas/painel">ClickTrail</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav navi" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Painel">
          <a class="nav-link" href="<?= base_url() ?>paginas/painel">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Painel</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cadastrar Site">
          <a class="nav-link" href="<?= base_url() ?>paginas/cadastrarSite">
            <i class="fa fa-fw fa-plus"></i>
            <span class="nav-link-text">Cadastrar Site</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Configurações">
          <a class="nav-link" href="<?= base_url() ?>paginas/configurarConta">
            <i class="fa fa-fw fa-gears"></i>
            <span class="nav-link-text">Configurações</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Domínios">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Domínios</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <?php foreach($sites as $s){ ?> 
            <li class="nav-item">
              <a href="<?= base_url() ?>site/siteInfo/<?= $s->cd_site; ?>"><?= $s->nm_site ?></a>
            </li>
            <?php } ?>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ajuda">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-info-circle"></i>
            <span class="nav-link-text">Ajuda</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link">
            <i class="fa fa-fw fa-user-o"></i><?= $this->session->userdata('nome') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>usuario/logout">
            <i class="fa fa-fw fa-sign-out"></i>Sair</a>
        </li>
      </ul>
    </div>
  </nav>
  
  
