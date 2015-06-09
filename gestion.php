<!DOCTYPE html>
<html lang="en">

    <?php include "head.php"; ?>

    <body>
        <?php include "menu.php"; ?>
        <hr>
        <div class="container">
            <form action="cargar_archivos.php" method="post" name ="cargar" enctype="multipart/form-data">
                <div style="padding-left: 25%"class="col-xs-8">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="panel-heading">Subir Archivo</div>
                            </div>

                            <div class="form-group">
                                <input type="file" name="archivo" id="archivo"/><br />

                            </div>
                                <div class="form-group" style="text-align: center">
                                    <a href="#" class="btn btn-primary" role="button" onClick="cargar.submit()">Subir Archivo</a>
                                </div>
                        </div>

                    </div>
                </div>
            </form>

               
    </div>
        <!-- Footer -->
        <?php include "foter.php"; ?>
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <script src="js/funciones.js"></script>

    </body>

</html>
