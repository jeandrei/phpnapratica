<h2><?php echo getInfo("titulo");?></h2>
<p><?php echo getInfo("descricao");?></p>
<hr>
<h2>Pesquisar</h2>
<form action="busca" method="GET">
    <input type="text" name="busca" placeholder="Busca">
    <button>Pesquisar</button>
</form>

<hr>
<h2>Lista de Produtos</h2>
<ul>
    <?php foreach($produtos as $produto): ?>
        <li><? echo $produto['titulo'] ." - ". $produto['descricao'] . " - ". "R$" . number_format($produto['valor'],2,",",".");?></li>
    <?php endforeach; ?>
</ul>