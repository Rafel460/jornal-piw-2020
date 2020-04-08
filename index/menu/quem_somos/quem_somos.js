function teste(){
    document.querySelector('.menu-item-1').style = "background-color: white; color: black;";
}
function entra(link){

  var valor = link;
    if(valor == 'http://localhost/coronga-vairas/assets/github-out.png'){
        window.open('https://github.com/Rafel460');
    } else if(valor == 'http://localhost/coronga-vairas/assets/twitter-out.png'){
        window.open('https://twitter.com/Rafao_Rafoso')
    }else{
        window.location.href = "../../index.php"
    }

}