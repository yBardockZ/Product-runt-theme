<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Danki Code - Tema</title>
</head>
<body>

    <section class="topo">
        <div class="center">
            <header>
                <div class="logo"><img src="images/logo.png" alt="logo"></div>
            </header>
            <ul class="menu-desktop">
                <li><a href="">Início</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Contato</a></li>
            </ul>
            <div class="menu-mobile">
                <i class="fa-solid fa-align-right"></i>
                <ul>
                    <li><a href="">Início</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </div>
            <div class="clear"></div>
            <br>
            <br>
            <div class="w50 time-descricao">
                <h2>Melhore a comunicação com seu cliente e time.</h2>
                <p>Consultoria especializada em startups empresas, principalmente, pessoas.</p>
                <a target="_blank" href="https://dankicode.com">VER DEMONSTRAÇÃO</a>
            </div>
            <div class="w50 time-imagem">
                <img src="images/ilustracao.png">
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <div class="circle"><i class="fa-solid fa-angle-down"></i></div>

    <section class="clientes-slider">
        <div class="center">
            <div class="slider-container">
                <img src="images/marcas/amazon.png" alt="">
                <img src="images/marcas/costco.png" alt="">
                <img src="images/marcas/dominos.png" alt="">
                <img src="images/marcas/uber.png" alt="">
                <img src="images/marcas/walmart.png" alt="">
            </div>
        </div>
    </section>

    <section class="diferenciais">
        <div class="center">
            <h2>Contribuímos de ponta a ponta</h2>

            <div class="icons-diferenciais">
                <div class="box-single-diferenciais">
                    <img src="images/ilustracao-01.png" alt="">
                    <h3>Ambiente Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com o seu propósito, cada palavra conta.</p>
                </div>

                <div class="box-single-diferenciais">
                    <img src="images/ilustracao-02.png" alt="">
                    <h3>Sites e Intranets</h3>
                    <p>Um diálogo que só acontece quando ambas as partes falam e escutam, garanta que seu público te entende.</p>
                </div>

                <div class="box-single-diferenciais">
                    <img src="images/ilustracao-03.png" alt="">
                    <h3>Comunicação one-To-one</h3>
                    <p>O digital veio pra ficar, sem dúvidas, 
                        mas uma comunicação integrada de verdade exige clareza nas decisões</p>
                </div>

            </div>
        </div>
    </section>

    <section class="sobre-time">
        <div class="center">
            <div class="w50 time-descricao-2">
                <div class="titulo-com-mancha">
                    <h2>Um time experiente, <br>comunicador e coeso.</h2>
                </div>
                <p>A Product Runt acredita que marcas fortes são construídas a partir 
                    de transformações importantes e positivas na vida dos consumidores.
                    Exatamente como uma conversa que ganha forma, a ideia vira flâmula.
                    <br>
                    <br>
                    Comunicar bem, de forma coerente e clara não é algo fácil 
                    e estamos aqui para ajudar você e seu time. Você escolhe, 
                    remoto ou presencial, para seu cliente ou seu público interno, você determina como vamos te ajudar.
                </p>
            </div>

            <div class="w50 img-time">
                <img src="images/ilustracao-04.png" alt="">
            </div>

            <div class="clear"></div>
        </div>

    </section>
    
<script src="js/jquery.js"></script>
<script src="js/slick.min.js"></script>
<script type="text/javascript">
     $('section.clientes-slider .slider-container').slick({
         dots: true,
         arrows:false,
         infinite: false,
         speed:1000,
         slidesToShow: 4,
         autoplay: true,
         centerMode:false,
         autoplaySpeed: 3000,
         pauseOnHover:false,
         responsive: 
        [
            {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
                    }
            }
        ]
        });
</script>
<script>
    $('.menu-mobile i').click(function() {
        $('.menu-mobile').find('ul').slideToggle();
    })
</script>
</body>
</html>