
<!-- INICIO -->
<script type="text/javascript">
    angular.module('load',[]).controller('first', function($scope){
        $scope.mensagem = "O Homem Lanterna, O Execrável C9";
        
    });
</script>
<div id="inicio">
    <div id="header">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="<?= base_url() ?>paginas/login">Login</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="<?= base_url() ?>paginas/cadastro">Cadastro</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    	<svg viewBox="0 0 960 300">
                            <symbol id="s-text">
                        		<text text-anchor="middle" x="50%" y="80%">Click-trail </text>
                        	</symbol>
                        
                        	<g class = "g-ants">
                        		<use xlink:href="#s-text" class="text-copy"></use>
                        		<use xlink:href="#s-text" class="text-copy"></use>
                        		<use xlink:href="#s-text" class="text-copy"></use>
                        		<use xlink:href="#s-text" class="text-copy"></use>
                        		<use xlink:href="#s-text" class="text-copy"></use>
                        	</g>
                        </svg>
                        <h2>O Plugin <span class="text">contabilizador de cliques</span> que você 
                        pode confiar. 
                        </h2>
                        <p class="mt-4 lead">
                            ClickTrail é um plugin gratuito,
                            que permite a contagem de cliques que determinada sessão 
                            de seu site obteve.
                            {{mensagem}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    

    
<!--INFO PLUGIN-->
<div class="container-fluid bg-danger" transform: translateY(-13.3333px);opacity: 0.92;>
    <div id="info" class="text-center">
        <h2>Sobre o ClickTrail</h2>
        <p class="lead text-light">
            Veja as vantagens que você terá ao instalar o Click-Trail em seu site.
        </p>
        <div class="row featurette edit">
            <div class="row d-md-flex mt-4 text-center">
                    <div class="col-sm-3 mt-2">
                        <div class=" border-none wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                            <div class="card-block">
                                <i class="fa fa-hand-pointer-o dp36 icon-box"></i>
                                <h5 class="card-title pt-5">Conte seus clicks</h5>
                                <p class="card-text">Com o click-trail, você pode contabilizar a quantidade de cliques que um determinado link do seu site possui.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mt-2">
                        <div class=" border-none wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                            <div class="card-block">
                                <i class="fa fa-bar-chart fa-3 dp36 icon-box" aria-hidden="true"></i>
                                <h5 class="card-title pt-5">Dados Contabilizados</h5>
                                <p class="card-text">Você poderá conferir seus dados com gráficos atualizados e gráficos mensais, contabilizando seus cliques de forma detalhada.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mt-2">
                        <div class=" border-none wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                            <div class="card-block">
                                <i class="fa fa-tachometer fa-4 dp36 icon-box" aria-hidden="true"></i>
                                <h5 class="card-title pt-5">Tenha seu Painel</h5>
                                <p class="card-text">Após se cadastrar, você pode ter acesso ao seu painel e verificar seus sites registrados, cliques, etc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mt-2">
                        <div class=" border-none wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                            <div class="card-block">
                                <i class="fa fa-user-plus dp36 icon-box" aria-hidden="true"></i>
                                <h5 class="card-title pt-5">Casdastro de Diversos Domínios</h5>
                                <p class="card-text">Com o click-trail, você pode cadastrar um ou mais domínios com sua conta.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<!--DOWNLOAD-->
<div class="container-fluid">
    <div id="download">
        <h2 class="text-center">Baixe e comece hoje mesmo!</h2>
        <p class="lead text-center">Para baixar o plugin, basta você registrar um domínio e clicar no card,</p>
        <p class="lead text-center">depois é só baixar e instalar para começar a usar.</p>
        
        <div class="row featurette edit">
            <div class="text-center fadeIn">
              <img  class="img-edit" src="<?= base_url() ?>assets/img/landing-office(1).png">
              
              
            </div>
        </div>
    </div>
</div>

    


<!--SOBRE NÓS-->
<div class="container-fluid text-center bg-danger">
    <div id="about-us">
        <h2>Desenvolvedores</h2>
        <p class="lead text-light">Nosso time tem dois desenvolvedores</p>
        <div class="container bg-danger">
                <div class="row d-md-flex mt-4 text-center">
                    <div class="col-sm-6 mt-2 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <div class="border-none">
                            <div class="card-block">
                                <img src="<?= base_url() ?>assets/img/GusFoto.jpg" alt="Male" class="img-team img-fluid rounded-circle">
                                <h5 class="card-title pt-4">Gustavo Oliveira</h5>
                                <p class="card-text text-light">Front-End Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1 mt-2 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <div class="border-none">
                            <div class="card-block">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-2 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <div class="border-none">
                            <div class="card-block">
                                <img src="<?= base_url() ?>assets/img/JohnFoto.jpg" alt="Male" class="img-team img-fluid rounded-circle">
                                <h5 class="card-title pt-4">Jonathan Araújo</h5>
                                <p class="card-text text-light">Back-End Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    

</div>
