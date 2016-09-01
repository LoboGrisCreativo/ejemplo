<?php include "../sec.php"; ?>
<?php include "../header.php"; ?>

<div class="container bbdd">
    <div class="row">
        <section>
            <article>
                <div id="datain">
                    <h1 class="text-xs-center">Ficha</h1>
                    <hr>
                    <div class="row">
                        <h4 class="col-xs-12">Datos Personales</h4>
                    </div>
                    <form id="form-datain" name="form" method="post" action="">
                        <div class="row">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 col-md-2 col-lg-1 col-form-label">Nombre:</label>
                                <div class="col-sm-10 col-md-4 col-lg-5">
                                    <input type="text" id="inputName" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputLastName" class="col-sm-2 col-md-2 col-lg-1 col-form-label">Apellido:</label>
                                <div class="col-sm-10 col-md-4 col-lg-5">
                                    <input type="text" id="inputLastName" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="inputDate" class="col-sm-4 col-md-2 col-lg-2 col-form-label">Fecha Nacimiento:</label>
                                <div class="col-sm-8 col-md-3 col-lg-3">
                                    <input type="date" id="inputDate" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputBornin" class="col-sm-4 col-md-2 col-lg-2 col-form-label">Lugar Nacimiento:</label>
                                <div class="col-sm-6 col-md-3 col-lg-3">
                                    <input type="text" id="inputBornin" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                        <select class="form-control" id="selectnation">
                                            <option>AUS</option>
                                            <option>AND</option>
                                            <option>BAH</option>
                                            <option>CAM</option>
                                            <option>USA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="selectnationality" class="col-sm-3 col-md-2 col-lg-2">Nacionalidad:</label>
                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                        <select class="form-control" id="selectnationality">
                                            <option>AUS</option>
                                            <option>AND</option>
                                            <option>BAH</option>
                                            <option>CAM</option>
                                            <option>USA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="inputHeight" class="col-sm-2 col-md-2 col-lg-1 col-form-label">Altura:</label>
                                <div class="col-sm-10 col-md-4 col-lg-3">
                                    <input type="number" id="inputHeight" step="0.01" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPos" class="col-sm-2 col-md-2 col-lg-1 col-form-label">Posición:</label>
                                <div class="col-sm-3 col-md-4 col-lg-3">
                                    <select class="form-control" id="inputPos">
                                        <option>Base</option>
                                        <option>Escolta</option>
                                        <option>Alero</option>
                                        <option>Ala-Pívot</option>
                                        <option>Pívot</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputInt" class="col-sm-3 col-md-2 col-lg-2 col-form-label">Internacional:</label>
                                <div class="col-sm-3 col-md-4 col-lg-2">
                                    <input type="number" id="inputInt" class="form-control">
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row m-t-3 m-b-2">
                            <h4 class="col-xs-4">Equipos</h4>
                            <div class="col-xs-4 pull-right">
                                <div class="pull-right">
                                    <button class="btn btn-outline-primary btn-sm" id="Add">Añadir</button>
                                    <button class="btn btn-outline-danger  btn-sm" id="Del">Borrar</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 teams" id="team1">
                                <label for="inputTeam1" class="col-xs-2 col-form-label">Equipo:</label>
                                <div class="col-xs-10">
                                    <select class="form-control" id="inputTeam1" name="inputTeam[]">
                                        <option>Real Madrid</option>
                                        <option>Barcelona</option>
                                        <option>Estudiantes</option>
                                        <option>Cai Zaragoza</option>
                                        <option>New York Knicks</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row m-t-3 m-b-2">
                            <h4 class="col-xs-4">Estadísticas</h4>
                            <div class="col-xs-4 pull-right">
                                <div class="pull-right">
                                    <button class="btn btn-outline-primary btn-sm" id="AddEsta">Añadir</button>
                                    <button class="btn btn-outline-danger  btn-sm" id="DelEsta">Borrar</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 esta" id="esta1">
                                <label for="inputTeam1" class="col-xs-2 col-form-label">Equipo:</label>
                                <div class="col-xs-10">
                                    <select class="form-control" id="inputTeam1" name="inputTeam[]">
                                        <option>Real Madrid</option>
                                        <option>Barcelona</option>
                                        <option>Estudiantes</option>
                                        <option>Cai Zaragoza</option>
                                        <option>New York Knicks</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

                    <button type="submit" class="btn btn-info">Enviar</button>
                    <a href="../salir.php" class="btn btn-danger">Salir</a>

            </article>
        </section>
        <section class="ejemplo">

        </section>
    </div>
</div>

<?php include "../footer.php"; ?>