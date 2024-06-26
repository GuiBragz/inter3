


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinicor - homepage</title>
    <link rel="stylesheet" href="csshome.css">
    <link rel="icon" href="images/favicon.ico.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
</head>
<body>
                            <?php include_once './back-end/alteradornavebar.php';  
                            alteradornavebar(); ?>
    <form action="">
        <div>
            <img src="images/slide_background_home.png" alt="" class="imagemfundo">
        </div>
        <div class="slide">
            <p class="texto"><b>Sua saúde<br>vem em<br>primeiro<br>lugar,<br>sempre!</b></p>
            <div class="imgSlide"></div>
            <hr class="linha">
        </div>
        <div>
            <a href="sobre_nos.html"><input type="button" value="Sobre Nós" class="botao"></a>
        </div>
        <div class = ecm>
            <a href="especialidades.html" target="_top" class="abaixohome">
                <img src="images/icon/item 1 pbaixo home.png" alt="Especialidades" class="especialidades">
            </a>
            <a href="convenios.html">
                <img src="images/icon/item 2 pbaixo home.png" alt="Convenios" class="convenios">
            </a>
            <a href="back-end/listamedicos.php">
                <img src="images/icon/item 3 pbaixo home.png" alt="Medicos" class="medicos">
            </a>
        </div>
        <div class="redes">
            <b>NOSSAS REDES <i class="bi bi-caret-right-fill"></i></b>
            <a href="https://www.instagram.com/clinicorcarpina/" class="rede"><i class="bi bi-instagram"></i></a>
            <a href="https://api.whatsapp.com/send/?phone=5581982510616&text&type=phone_number&app_absent=0" class="rede"><i class="bi bi-whatsapp"></i></a>
            <a href="https://www.facebook.com/clinicorcarpina/?locale=pt_BR" class="rede"><i class="bi bi-facebook"></i></a>
        </div>

        <div>
            <div class="info">
                <p><i class="bi bi-geo-alt-fill"></i></i><b>Endereço:</b> <br> Av. Pres. Getúlio Vargas, 556 - São José, Carpina - PE, 55810-000</p>
                <p><i class="bi bi-envelope-fill"></i><b>Email:</b> <br> clinicorpe@bol.com.br</p>
                <p><i class="bi bi-telephone-fill"></i><b>Telefone:</b> <br> (81) 9.3622-8450</p>
            </div>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15809.927450304784!2d-35.2501134!3d-7.8445292!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7aba04d8a65bb8d%3A0x8edf2409fe505ece!2sClinicor!5e0!3m2!1spt-BR!2sbr!4v1712876564143!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>    
        </div>

    </form>

    <b><p class="deadsec">ESTE SITE FOI DESENVOLVIDO PELA <a href="Cards Grupo/first-page.html">DEADSEC</a> - 2024</p></b>
    <script src="mudarhome.js"></script>
    <script src="back-end/escolhernavebar.js"></script>
    
    </div>
<script>
    // Função para fazer uma requisição AJAX
    function fazerRequisicao() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Atualiza o conteúdo da div com o resultado da requisição
                document.getElementById("resultado").innerHTML = this.responseText;
            }
        };
        // Faz a requisição para o arquivo PHP
        xhttp.open("GET", "alteradornavebar.php", true);
        xhttp.send();
    }
    
    // Chama a função quando a página é carregada
    window.onload = fazerRequisicao;

</script>
</body>
</html>