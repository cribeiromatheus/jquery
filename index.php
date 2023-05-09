<!DOCTYPE html>
<html lang="en">

<head>
<?php
 include_once "./cabecalho.php";
?>
    <title>Sublima Arts</title>
</head>

<body>
<?php
    include_once "./nav.php";
?>

<div id="connta" class="container mx-auto">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./assets/images/banner-bg.jpg" class="d-block w-100" alt="Imagem 1">
      </div>
      <div class="carousel-item">
        <img src="./assets/images/caar (1).jpg" class="d-block w-100" alt="Imagem 2">
      </div>
      <div class="carousel-item">
        <img src="./assets/images/caar (4).jpg" class="d-block w-100" alt="Imagem 3">
      </div>
    </div>
    <button class="carousel-control-prev align-middle" type="button">
    </button>
    <div class="carousel-indicators d-flex justify-content-center mt-3">
      <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  </div>
</div>



    <div id="featured" class="featured-items">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Destaques</h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="featured-item">
                            <img src="assets/images/item-01.jpg" alt="Item 1">
                            <h4>Carro 1</h4>
                            <h6>R$ 200.000,00</h6>
                            <a href="single-product.html">
                                Comprar
                            </a>
                        </div>
                        <div class="featured-item">
                            <img src="assets/images/item-02.jpg" alt="Item 2">
                            <h4>Carro 2</h4>
                            <h6>R$ 8.000,00</h6>
                            <a href="single-product.html">
                                Comprar
                            </a>
                        </div>
                        <div class="featured-item">
                            <img src="assets/images/item-03.jpg" alt="Item 3">
                            <h4>Carro 3</h4>
                            <h6>R$ 90.000,00</h6>
                            <a href="single-product.html">
                                Comprar
                            </a>
                        </div>
                        <div class="featured-item">
                            <img src="assets/images/item-04.jpg" alt="Item 4">
                            <h4>Carro 4</h4>
                            <h6>R$ 120.000,00</h6>
                            <a href="single-product.html">
                                Comprar
                            </a>
                        </div>
                        <div class="featured-item">
                            <img src="assets/images/item-05.jpg" alt="Item 5">
                            <h4>Carro 5</h4>
                            <h6>R$ 80.000,00</h6>
                            <a href="single-product.html">
                                Comprar
                            </a>
                        </div>
                        <div class="featured-item">
                            <img src="assets/images/item-06.jpg" alt="Item 6">
                            <h4>Carro 6</h4>
                            <h6>R$ 300.000,00</h6>
                            <a href="single-product.html">
                                Comprar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="featured" class="featured-items">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Promoção</h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="featured-item">
                            <img src="assets/images/caar (1).jpg" alt="Item 1">
                            <h4>Carro 1</h4>
                            <h6>R$ 200.000,00</h6>
                            <a href="single-product.html">
                                Comprar
                            </a>
                        </div>
                        <div class="featured-item">
                            <img src="assets/images/caar (2).jpg" alt="Item 2">
                            <h4>Carro 2</h4>
                            <h6>R$ 8.000,00</h6>
                            <a href="single-product.html">
                                Comprar
                            </a>
                        </div>
                        <div class="featured-item">
                            <img src="assets/images/caar (3).jpg" alt="Item 3">
                            <h4>Carro 3</h4>
                            <h6>R$ 90.000,00</h6>
                            <a href="single-product.html">
                                Comprar
                            </a>
                        </div>
                        <div class="featured-item">
                            <img src="assets/images/caar (4).jpg" alt="Item 4">
                            <h4>Carro 4</h4>
                            <h6>R$ 120.000,00</h6>
                            <a href="single-product.html">
                                Comprar
                            </a>
                        </div>
                        <div class="featured-item">
                            <img src="assets/images/caar (5).jpg" alt="Item 5">
                            <h4>Carro 5</h4>
                            <h6>R$ 80.000,00</h6>
                            <a href="single-product.html">
                                Comprar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bgcolor2">
        <div class="row" id="email2">
            <div class="col" align="center">
                <form action="#" method="post" id="noticias">
                    <div>
                        <label id="emaillabel" for="email-form" class="form-label">
                            Gostaria de receber um email com promoções?
                        </label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="nome-form" id="nome-form" placeholder="Nome">
                    </div>
                    <div class="col-md-3">
                        <input type="email" class="form-control" name="email-form" id="email-form"
                            aria-describedby="emailHelpId" placeholder="seu@email.com">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="form-cpf" class="form-control" id="form-cpf" placeholder="CPF xxx.xxx.xxx-xx">
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <button id="submbutton" class="btn btn-sm btn-light" type="submit">Quero receber</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <img id="logo-inc" width="200px" src="assets/images/header-logo.png" alt="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Ajuda</a></li>
                            <li><a href="#">Politica de Privacidade</a></li>
                            <li><a href="#">Como funciona ?</a></li>
                            <li><a href="#">Entre em contato</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-text">
                        <p>CarswebStore &copy; Todos os direitos reservados
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="contato" class="visually-hidden">
                        <form action="" class="form">
                            <div class="mb-3">
                                <label for="form-name" class="form-label">Nome: </label>
                                <input type="text" name="form-name" id="form-name" class="form-control" placeholder="Digite seu nome"
                                    aria-describedby="helpNome" required>
                            </div>
                            <div class="mb-3 required">
                                    <label for="form-email" class="form-label">Email: </label>
                                <input type="email" name="form-email" id="form-email" class="form-control"
                                    placeholder="Digite seu email" aria-describedby="helpEmail" required>
                            </div>
                            <div class="mb-3 required">
                                <label for="cpf-form" class="form-label">CPF: </label>
                                <input type="text" name="cpf-form" id="cpf-form" class="form-control" placeholder="xxx.xxx.xxx-xx" aria-describedby="helpCPF" required>
                            </div>
                            <div class="mb-3 required">
                                <label for="date-form" class="form-label">Data do requerimento: </label>
                                <input type="text" name="date-form" id="datetest" class="form-control" placeholder="00/00/0000" aria-describedby="helpdate" required>
                            </div>
                            <div class="mb-3 required">
                                <label for="cep-form" class="form-label">CEP: </label>
                                <input type="text" name="cep-form" id="cep-form" class="form-control" placeholder="00000-000" aria-describedby="helpcep" required>
                            </div>
                            <div class="mb-3 required">
                                <label for=" pay-form" class="form-label">Pagamento: </label>
                                <input type="text" name="pay-form" id="pay-form" class="form-control" aria-describedby="helpcep" required>
                            </div>
                            <div class="mb-3 required">
                                <label for=" pay-form2" class="form-label">Pagamento2: </label>
                                <input type="text" name="pay-form2" id="pay-form2" class="form-control" aria-describedby="helpcep" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
            * Formulário
        -->
    
 

    <div id="sobre" class="visually-hidden">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores alias esse tenetur quaerat, quibusdam quae
            necessitatibus suscipit nostrum harum error quia enim sunt pariatur qui perspiciatis nihil in? Maiores,
            adipisci.</p>
    </div>




    <script src="./vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="./vendor/owl/js/owl.js"></script>
    <script src="./vendor/jquery/dist/jquery.mask.min.js"></script>
    <script src="./vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="./js/custom.js"></script>
    <script src="./js/slider.js"></script>
</body>

</html>