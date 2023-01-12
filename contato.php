<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fernando Bohlhalter</title>

    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/5ec57145d8.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BhuTuka+Expanded+One&family=Raleway:wght@100;500&family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet"></head>
<body>

    <section class="header">
        <a href="index.php" class="logo">FB</a>

        <div class="menu-desktop">
            <a href="portifolio.php">Portifólio</a>
            <a href="index.php#sobre-mim">Sobre mim</a>
            <a>Contato</a>
        </div>

        <div class="menu-mobile-icon"><i class="fa-solid fa-bars"></i></div>
    </section>

    <div class="menu-mobile-container">
        <div>
            <a href="portifolio.php">Portifólio</a>
            <a href="index.php#sobre-mim">Sobre mim</a>
            <a>Contato</a>
        </div>
    </div>

    <section class="main-contato">
        <h1>Redes sociais</h1>
        <div class="redes-sociais">
            <a target="_blank" href="https://www.instagram.com/bohaswebdesign/"><i style="color:#DD2A7B;" class="fa-brands fa-instagram"></i></a>
            <a target="_blank" href="https://www.linkedin.com/in/fernando-canos-4b9ab118a/"><i style="color:#0E76A8;" class="fa-brands fa-linkedin"></i></a>
            <a target="_blank" href=""><i style="color:#1DB954;" class="fa-brands fa-spotify"></i></a>
        </div>
        <div class="center">            
            <div>
                <h1>Quer entrar em contato?</h1>
                <div class="contato-form">
                    <form>
                        <input placeholder="Nome" type="text">
                        <input placeholder="E-mail" type="text">
                        <input placeholder="Telefone" type="text">
                        <textarea placeholder="Fale mais sobre sua necessidade..."></textarea>
                        <input type="submit" value="Enviar formulário">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div style="margin-bottom: 100px;"class="clear"></div>

    <section class="footer">
        <div class="footer-content">
            <div class="footer-text">
                <a href="portifolio.php">Portifólio</a>
                <a href="index.php#sobre-mim">Sobre mim</a>
                <a>Contato</a>
            </div>
            <div class="separator"></div>
            <div class="footer-socialmedia">
                <a target="_blank" href="https://www.instagram.com/bohaswebdesign/"><i  class="fa-brands fa-instagram"></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/fernando-canos-4b9ab118a/"><i  class="fa-brands fa-linkedin"></i></a>
                <a href=""><i class="fa-brands fa-spotify"></i></a>
            </div>
        </div>
    </section>



<script src="js/Jquery.js"></script>
<script>
	//Menu responsivo
	
	$('.menu-mobile-icon i').click(function(){
		$('.menu-mobile-container').slideToggle();

	})
</script>
</body>
</html>