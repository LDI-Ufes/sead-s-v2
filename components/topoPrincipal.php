<div id="topoPrincipal">
    <section class="caixa">
      <?php include __DIR__ . '/../svg/sead.svg' ?>
        <nav id="menuPrincipal">
            <button id="menuHamburguer" onclick="myFunction()"><i class="fas fa-bars"></i></button>
            <ul id="itensMenu">
                <li><a href="/sitiosead">Início</a></li>
                <li class="temSubnivel">
                  <a href="">Ensino</a>
                  <ul class="menuSuspenso">
                    <li><a href="">Como é a EaD na Ufes?</a></li>
                    <li><a href="">A Secretaria</a></li>
                    <li><a href="">Contatos</a></li>
                  </ul>
                </li>
                <li><a href="/sitiosead/editais">Editais</a></li>
                <li><a href="">Cursos</a></li>
                <li><a href="/sitiosead/polos">Polos</a></li>            
                <li><a href="/sitiosead/blog">Notícias</a></li>
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