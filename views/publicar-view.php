<link rel="stylesheet" href="../css/base.css">
<link rel="stylesheet" href="../css/filtros.css">
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/header.css">
<link rel="stylesheet" href="../css/historia.css">
<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="../css/noticias.css">
<link rel="stylesheet" href="../css/paginacao.css">
<link rel="stylesheet" href="../css/publicar.css">
<link rel="stylesheet" href="../css/slider.css">
<link rel="stylesheet" href="../css/tags.css">

<script src="../script/script.js" defer></script>

<form id="form-noticia">

    <!-- Título -->
    <div class="campo">
        <input type="text" id="titulo-noticia" required placeholder="Título da Notícia">
    </div>

    <!-- Texto -->
    <div class="campo">
        <textarea id="texto-noticia" required placeholder="Texto da Notícia"></textarea>
    </div>

    <!-- Tags selecionadas (preview global) -->
    <div class="campo">
        <label>Selecione a Categoria:</label>
    </div>

    <!-- ABAS DE CATEGORIA -->
    <div class="abas-categoria">
        <nav class="abas-nav" role="tablist">
        <button type="button" class="aba-btn aba-ativa" data-aba="f1" role="tab"><?= $categorias["f1"]?></button>
        <button type="button" class="aba-btn" data-aba="f2" role="tab"><?= $categorias["f2"]?></button>
        <button type="button" class="aba-btn" data-aba="f3" role="tab"><?= $categorias["f3"]?></button>
        <button type="button" class="aba-btn" data-aba="f4" role="tab"><?= $categorias["f4"]?></button>
        <button type="button" class="aba-btn" data-aba="f1academy" role="tab"><?= $categorias["f1academy"]?></button>
        <button type="button" class="aba-btn" data-aba="fe" role="tab"><?= $categorias["fe"]?></button>
        <button type="button" class="aba-btn" data-aba="indy" role="tab"><?= $categorias["indy"]?></button>
            <!--
            <button type="button" class="aba-btn aba-ativa" data-aba="f1"        role="tab">Fórmula 1</button>
            <button type="button" class="aba-btn"           data-aba="f2"        role="tab">Fórmula 2</button>
            <button type="button" class="aba-btn"           data-aba="f3"        role="tab">Fórmula 3</button>
            <button type="button" class="aba-btn"           data-aba="f4"        role="tab">Fórmula 4</button>
            <button type="button" class="aba-btn"           data-aba="f1academy" role="tab">F1 Academy</button>
            <button type="button" class="aba-btn"           data-aba="fe"        role="tab">Fórmula E</button>
            <button type="button" class="aba-btn"           data-aba="indy"      role="tab">IndyCar</button>
            -->
        </nav>
    </div>  
    <button type="submit" class="botao-enviar">Publicar Notícia</button>
</form>