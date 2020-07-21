<html lang="pt-br">

<?php include('config.php') ?>

<head>
    <!-- Título do site -->
    <title><?php echo $titulo; ?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS stylesheet -->
    <link rel="stylesheet" href="style.css?v=1.0.5" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



    <script type="text/javascript">
        function openNav() {
            document.getElementById("trigger").style.marginLeft = "250px";
            document.getElementById("trigger").style.opacity = "0";
            document.getElementById("mySidenav").style.width = "300px";
            document.getElementById("main").style.marginLeft = "300px";
        }

        function closeNav() {
            document.getElementById("trigger").style.marginLeft = "0";
            document.getElementById("trigger").style.opacity = "1";
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>

</head>



<body>
    <center>
        <!-- Menu Principal -->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn margin-bottom" style="padding: 10px;" onclick="closeNav()">&times;</a>
            <nav class="menu_principal">
                <ul>
                    <li>
                        <a href="#home">Início</a>
                    </li>
                    <li>
                        <a href="#section1"><?php echo $section_1 ?></a>
                    </li>
                    <li>
                        <a href="#section2"><?php echo $section_2 ?></a>
                    </li>
                    <li>
                        <a href="#section3"><?php echo $section_3 ?></a>
                    </li>
                </ul>
            </nav>
        </div>
        <a href="#menu" id="trigger" onclick="openNav()">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </a>


        <div class="cor_fundo" style="background-color: <?php echo $cor_de_fundo ?>;"></div>


        <!-- Página Inicial (HOME) -->
        <section id="home" class="container-fluid d-flex flex-wrap align-content-center">

            <!-- Título -->
            <div class="container">
                <h1><?php echo $nome ?></h1>
            </div>

            <!-- Imagem destaque -->
            <div class="container">
                <div class="perfil-img">
                    <img src="/img/perfil.jpg" width="100%">
                </div>
            </div>


            <!-- Frase na home -->
            <div class="container">
                <p class="frase"><?php echo '"' . $frase . '"' ?></p>
            </div>

            <!-- Links menu -->
            <div class="container">
                <ul class="menu">
                    <li>
                        <a href="<?php echo $link_1 ?>" target="_blank"><?php echo $link_1_title ?></a>
                    </li>
                    <li>
                        <a href="<?php echo $link_2 ?>" target="_blank"><?php echo $link_2_title ?></a>
                    </li>
                    <li>
                        <a href="<?php echo $link_3 ?>" target="_blank"><?php echo $link_3_title ?></a>
                    </li>
                    <li>
                        <a href="<?php echo $link_4 ?>" target="_blank"><?php echo $link_4_title ?></a>
                    </li>
                </ul>
            </div>

        </section>


        <!-- Section 1 -->
        <section id="section1" class="container-fluid d-flex flex-wrap">
            <div class="row-fluid title">
                <h1><?php echo $section_1 ?></h1>
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-around">
                    <img class="section_img col-md-5" src="/img/section1.jpg">
                    <div class="section_txtbox col-md-6">
                        <p><?php echo $s1_p1 ?></p>
                        <p><?php echo $s1_p2 ?></p>
                        <p><?php echo $s1_p3 ?></p>
                    </div>
                </div>
            </div>

        </section>


        <!-- Section 2 -->
        <section id="section2" class="container-fluid d-flex flex-wrap">
            <div class="row-fluid title">
                <h1><?php echo $section_2 ?></h1>
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-around">
                    <img class="section_img col-md-5" src="/img/section2.jpg">
                    <div class="section_txtbox col-md-6">
                        <p><?php echo $s2_p1 ?></p>
                        <p><?php echo $s2_p2 ?></p>
                        <p><?php echo $s2_p3 ?></p>
                    </div>
                </div>
            </div>

        </section>


        <!-- Section 3 -->
        <section id="section3" class="container-fluid d-flex flex-wrap">
            <div class="row-fluid title">
                <h1><?php echo $section_3 ?></h1>
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-around">
                    <!-- <div class="section_boximg col-md-5">
                        <img class="section_img" src="/img/section3.jpg">
                    </div> -->
                    <div class="section_txtbox col-md-6">
                        <p><?php echo $s3_p1 ?></p>
                        <p><?php echo $s3_p2 ?></p>
                        <p><?php echo $s3_p3 ?></p>
                    </div>
                </div>
            </div>

        </section>



        <?php $gabramos = '<a href="https://github.com/gaoliver" target="_blank">Gabriel Ramos</a>' ?>



        <div class="footer"><?php echo date('Y') . " | " . "Desenvolvido por " . $gabramos; ?></div>
    </center>
</body>

</html>