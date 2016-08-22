<?
session_start();
session_destroy();
?>

<?php include __DIR__.'/header.php'; ?>

<section>
    <article>
        <h1>Has salido correctamente</h1>
    </article>
</section>
<section>
    <article>
        <a href="../index.php" class="btn btn-success">Entrar</a>
    </article>
</section>

<?php include __DIR__.'/footer.php'; ?>
