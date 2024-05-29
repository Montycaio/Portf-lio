<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inverno Mais Quentinho</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
    <img src="/img/logo.svg.svg" alt="Bootstrap" width="50px" height="50px">
    </a>
            <a class="navbar-brand" href="index.php"><span>Inverno Mais Quentinho</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="?page=novo">Seja Doador</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=listar">Listar de Doadores</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

<div class="container">
    <div class="row">
        <div class="col mt-5">
        <?php
            include("config.php");
            switch(@$_REQUEST["page"]){
            case "novo":
                include("novo-usuario.php");
            break;
            case "listar":
                include("listar-usuario.php");
            break;
            case "salvar":
              include("salvar-usuario.php");
              break;
            case "editar":
              include("editar-usuario.php");
              break;
            default:
                print "<h1>Bem vindo!</h1>";
        }
    ?>
        </div>
    </div>
</div>

<div class="container">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/invernoa.gif" class="d-block w-100" alt="Animacao com texto inverno quentinho com boneco de neve e com efeito de neve caindo por cima" width="400px" height="500px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Um projeto incrivel</h5>
        <p>Ajudando pessoas</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/eniaca.gif" class="d-block w-100" alt="Animacao com texto escrito Parceria Eniac" width="400px" height="500px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Parceria</h5>
        <p>Centro Universitário ENIAC</p>
      </div>
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<br>

<div class="container">

<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
      <h4>Motivo do Projeto</h4>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
      Anualmente, inúmeras pessoas enfrentam desafios ao adquirir <code>VESTUÁRIO</code> e <code>COBERTORES</code> durante a estação de <code>INVERNO</code>. Paralelamente, há milhares de indivíduos dispostos a <code>DOAR</code> roupas e cobertores, porém, devido à escassez de comunicação, esses recursos não chegam às famílias necessitadas.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        <h4>Motivos para ser Doador</h4>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
      <div class="accordion-body">
      <strong>Solidariedade e Empatia:</strong> Ao doar <code>ROUPAS</code> e <code>COBERTORES</code>, você está demonstrando empatia e solidariedade com aqueles que enfrentam dificuldades durante o inverno. Sua contribuição pode fazer a diferença na vida de alguém.<br><br>
        <strong>Proteção contra o Frio Intenso:</strong> Durante os meses mais frios, as temperaturas podem cair drasticamente, especialmente em regiões mais ao sul. Doar agasalhos e cobertores ajuda a proteger as pessoas do frio extremo e evita problemas como hipotermia. <br><br>
        <strong>Redução do Sofrimento:</strong> Muitas pessoas em situação de rua ou comunidades carentes não têm acesso a roupas quentes. Sua doação pode aliviar o sofrimento dessas pessoas, proporcionando-lhes conforto e calor. <br><br>
        <strong>Desapego e Utilização Eficiente:</strong> Doar roupas é um ato de desapego. Em vez de manter peças que você não usa mais, você pode entregá-las a alguém que realmente precisa. Isso também evita o desperdício. <br><br>
        <strong>Apoio a Instituições e Projetos Sociais:</strong> Existem várias organizações e projetos que arrecadam roupas e cobertores para distribuição. Ao doar, você está apoiando essas iniciativas e contribuindo para o bem-estar da comunidade..
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        <h4>Seja um Doador</h4>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
        Para ser um <strong><a href="?page=novo">doador</a></strong> basta preencher o <strong><a href="?page=novo">formulário</a></strong>  para nossa que nossa equipe entre em contato marcando o dia para coletar sua doação.<br><br>
        <strong>Atendemos de Segunda a Sexta - 08:00 às 18:00 </strong>
        <strong>( Sábado - 08:00 às 12:00 ) </strong>
      </div>
    </div>
  </div>
</div>

</div>


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>