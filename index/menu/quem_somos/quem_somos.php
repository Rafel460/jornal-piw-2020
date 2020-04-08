<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../index.css">
    <link rel="stylesheet" href="./quem_somos.css">
    <link rel="stylesheet" href="../../noticia-inteira.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow|Merriweather|Poppins|Questrial|Sen&display=swap" rel="stylesheet">
    <script src="./quem_somos.js"></script>
    <title>Document</title>
</head>
<body onload="teste()">
<div class="cabeçario">
        <div class="cabecario_titulo">
            <img src="../../../assets/Jornal Dahora.png" alt="titulo_jornal" id="imagem-jornal" onclick="entra(this.src)">
            <br>
            <br>
        </div>
        <div class="caixa_menu">
            <ul>
            <!-- Criar as telas daqui -->
                <li class="lista-menu"><a href="#" class="menu menu-item-1" onclick="alert('Você já está nessa pagina');">Quem somos?</a></li>
                <li class="lista-menu"> <a href="../fontes/fontes.php" class="menu menu-item 3" onclick="mostrarAlerta()">Fontes Utilizadas</a></li>
                <li class="lista-menu"><a href="../fazer_parte/fazer_parte.php" class="menu menu-item 2" onclick="mostrarAlerta()">Desejo fazer parte da equipe</a></li>
                <li class="lista-menu"><a href="../sobre/sobre.php" class="menu menu-item 4">Sobre</a></li>
            </ul>
        </div>
    </div>
        <br>
        <div class="quem-sou">
            <h2 id="quem-sou-titulo">Quem somos? (Ou seria quem sou?)</h2>
            <div class="quem-sou-p">
                <p  class="texto-sobre-mim">Olá, eu sou Rafael Monteiro Zancanaro, e desenvolvi esse site nas Linguagens de 
                    Marcação de Hipertexto (HTML), de estilo em cascatas (CSS) e de programação (JavaScript)
                </p>
                <p class="texto-sobre-mim">
                    Estou no Quarto Ano do Curso técnico em Informática do Instituto Federal do Paraná, Campus de Paranavaí
                </p>
                <div class="div-listinha">
                    <ul id="listinha">
                    <li class="icones icone1"><img id="Twitter" src="../../../assets/twitter.png" alt="twitter" onclick="entra(this.src)" onmouseover="this.src='../../../assets/twitter-out.png'" onmouseout="this.src='../../../assets/twitter.png'"></li>
                    <li class="icones icone2"><img src="../../../assets/github.png" alt="github" onmouseover="this.src='../../../assets/github-out.png'" onmouseout="this.src='../../../assets/github.png'" onclick="entra(this.src)"></li>
                    <li></li>
                </ul></div>
            </div>
            <div class="imagem-eu-div"><img src="../../../assets/eu.jpg" alt="Imagem de mim" id="imagem-eu"></div>

        </div>
</body>
</html>