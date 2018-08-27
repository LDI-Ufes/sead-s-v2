<div id="topoBlog">
    <section class="caixa">
      <?php include __DIR__ . '/../svg/nossoBLOG.svg' ?>
        <nav id="menuPrincipal">
            <button id="menuHamburguer" onclick="myFunction()">Portal Sead</button>
            <ul id="itensMenu">
                <li class="temSubnivel">
                  <a href="">Portal Sead</a>
                  <ul class="menuSuspenso">
                    <li><a href="/sitiosead">Início</a></li>
                    <li><a href="">Ensino</a></li>
                    <li><a href="">Editais</a></li>
                    <li><a href="">Cursos</a></li>
                    <li><a href="">Polos</a></li>            
                    <li><a href="/sitiosead/blog">Notícias</a></li>
                  </ul>
                </li>               
            </ul>
            <button id="busca"><i class="fas fa-search"></i></button>
        </nav>
    </section>
</div>

<script>
    function myFunction() {
        var element = document.getElementById("itensMenu");
        element.classList.toggle("menuSuspenso");
    }
</script>