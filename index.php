<?php include __DIR__.'/resources/header.php'; ?>

    <section>
        <article class="user">
            <div>
                <i class="fa fa-user fa-5x"></i>
            </div>
            <form action="resources/enter.php" method="POST">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Usuario" name="user">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Contraseña" name="password">
                </div>
                <button type="submit" class="btn btn-info">Enviar</button>
            </form>
        </article>
    </section>

    <?php if($_GET["errorusuario"]=="si") { ?>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <section>
                    <article>
                        <div class="alert alert-danger" role="alert">
                            <strong>ERROR</strong> El usuario o la contraseña no son correctos, inténtalo de nuevo.
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
    <?php } ?>



<?php include __DIR__.'/resources/footer.php'; ?>