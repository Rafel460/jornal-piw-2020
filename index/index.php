<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias DaHora</title>
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Barlow|Merriweather|Poppins|Questrial|Sen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body onload="escondido(false)">

    <div class="cabeçario">
        <div class="cabecario_titulo">
            <img src="../assets/Jornal Dahora.png" alt="titulo_jornal" id="imagem-jornal">
            <br>
            <br>
        </div>
        <div class="caixa_menu">
            <ul>
                <!-- Implementar as páginas -->
                <li class="lista-menu"><a href="./menu/quem_somos/quem_somos.php" class="menu menu-item 1">Quem somos?</a></li>
                <li class="lista-menu"> <a href="./menu/fontes/fontes.php" class="menu menu-item 3">Fontes Utilizadas</a></li>
                <li class="lista-menu"><a href="./menu/fazer_parte/fazer_parte.php" class="menu menu-item 2">Desejo fazer parte da equipe</a></li>
                <li class="lista-menu"><a href="./menu/sobre/sobre.php" class="menu menu-item_4">Sobre</a></li>
            </ul>
        </div>
    </div>
    <br>
    <div class="conteudo">
            <div class="direita">
                <h2 id="titulo-direita">Sobre o Coronavírus</h2>
                <ul>
                    <li class="listadireita elemento-1"><i class="material-icons" style="font-size: 15px;">arrow_forward</i><a href="./sintomas/sintomas.php" class="elementodireita elemento-1">Quais são os sintomas?</a></li> <br>
                    <li class="listadireita elemento-1"><i class="material-icons" style="font-size: 15px;">arrow_forward</i><a href="./prevencao/prevencao.php" class="elementodireita elemento-2">Como posso me previnir?</a></li> <br>
                    <li class="listadireita elemento-1"><i class="material-icons" style="font-size: 15px;">arrow_forward</i><a href="./pqficar/pqficar.php" class="elementodireita elemento-3">Por que devo ficar em casa?</a></li> <br>
                </ul>
                <img src="../assets/virus.gif" alt="coronavirus ilustrativo" id="virus">
            </div>
                <br>
            <div class="esquerda">
                <h1 id="tituloesquerda">Noticia principal aqui!</h1> <img src="https://s2.glbimg.com/GxaAHD24dT0jEnE69fQZYW2O-AE=/0x0:1000x563/540x304/smart/filters:max_age(3600)/https://i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/e/m/hqTsGAT766y7PR0xVXrw/selo-gif-brasil-casos-2703.jpg" alt="corona" id="imagemcorona2">
                    <div class="textoesquerda"><p class="elemento-texto-esquerda texto">As secretarias estaduais de Saúde divulgaram, até 7h40 de sexta-feira(27), 2,989 casos confirmados do <b class="elemento-texto-esquerda negrito">novo coronavírus </b>no Brasil, com 77 mortos, 58 deles em São Paulo, de acordo com a secretaria de Saúde do estado.</p>
                    <ul class="listadeopcoes">
                        <li class="elemento-lista-esquerda elemento1"><a href="./noticia-inteira.php" class="opcoes-esquerda opcao1">Ver Noticia Inteira</a></li>
                        <li class="elemento-lista-esquerda elemento2"><a href="https://g1.globo.com/bemestar/coronavirus/noticia/2020/03/27/casos-de-coronavirus-no-brasil-em-27-de-marco.ghtml" class="opcoes-esquerda opcao2">Fonte</a></li>
                        <li class="elemento-lista-esquerda elemento3"><a href="#" class="opcoes-esquerda opcao3" onclick="escondido(true)">Compartilhar</a></li>
                    </ul>
                </div>
            </div>
            <div class="inferior">
            </div>
    </div>
    <div class="vaipfv">
        <div class="compartilhamento">
        <h2 id="titulo-compartilhamento">Compartilhar noticia</h2>
        <p id="texto-compartilhamento">Escolha o site em que quer compartilhar a Notícia:</p>
        <ul class="lista-icones">
            <div id="imagens-icon">

                
            <li class="icones icone1"><img id="Facebook" src="../assets/facebook.png" alt="facebook" onclick="mostrarAlerta()" onmouseover="this.src='../assets/facebook-out.png'" onmouseout="this.src='../assets/facebook.png'"></li>
            <li class="icones icone2"><img id="Twitter" src="../assets/twitter.png" alt="twitter" onclick="mostrarAlerta()" onmouseover="this.src='../assets/twitter-out.png'" onmouseout="this.src='../assets/twitter.png'"></li>
            <li class="icones icone3"><img id="Whatsapp" src="../assets/whatsapp.png" alt="whatsapp" onclick="mostrarAlerta()" onmouseover="this.src='../assets/whatsapp-out.png'" onmouseout="this.src='../assets/whatsapp.png'"></li>
            <li class="icones icone4"><img id="Reddit" src="../assets/reddit.png" alt="reddit" onclick="mostrarAlerta()" onmouseover="this.src='../assets/reddit-out.png'" onmouseout="this.src='../assets/reddit.png'"></li>
            </div>
        </ul> <br>
        <a id="botao-cancelar" href="" onclick="escondido(false)">Cancelar</a>
        </div>
        
        
    </div>
</body>
</html>