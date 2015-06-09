<!DOCTYPE html>
<html lang="en">

    <?php include "head.php"; ?>

    <body>
        <?php include "menu.php"; ?>
        <!-- Header Carousel -->
        <!-- Page Content -->
        <div class="container">

            <!-- Marketing Icons Section -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="text-align: center"class="page-header">
                        Proyecto Gestion Tecnologica
                    </h1>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-check"></i>CLUSTER</h4>
                        </div>
                        <div class="panel-body">
                            <p style="text-align: justify">Un clúster industrial (o simplemente clúster) es un concepto nacido a principios de la década de los 90 como herramienta para el análisis de aquellos factores que permiten a una industria específica incorporar nuevos eslabones en su cadena productiva, los factores que determinan el uso de nuevas tecnologías en sus procesos, y los factores determinantes de la generación de actividades de aglomeración.1 Estas ideas provienen del trabajo pionero de Michael Porter y colaboradores,n 1 quienes analizan la adquisición —por parte de concentraciones territoriales de empresas— de ventajas comparativas en ciertos sectores del comercio manufacturero mundial.2

En este contexto, Porter define «clúster» como concentraciones de empresas e instituciones interconectadas en un campo particular para la competencia,3 pudiéndose observar en el mundo gran variedad de clústeres en industrias como la automotriz, tecnologías de la información, turismo, servicios de negocios, minería, petróleo y gas, productos agrícolas, transporte, productos manufactureros y logística, entre otros.</p>
                            <a href="#" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-gift"></i> Historia</h4>
                        </div>
                        <div class="panel-body">
                            <p style="text-align: justify">El origen del término y del uso de este tipo de tecnología es desconocido pero se puede considerar que comenzó a finales de los años cincuenta y principios de los sesenta.

La base formal de la ingeniería informática cree que la metodología de proveer un medio de hacer trabajos paralelos de cualquier tipo fue inventado posiblemente por Gene Amdahl de IBM, que en 1967 publicó lo que ha llegado a ser considerado como el "white paper" inicial de procesamiento paralelo: la Ley de Amdahl que describe matemáticamente el aceleramiento que se puede esperar paralelizando cualquier otra serie de tareas realizadas en una arquitectura paralela.

Este artículo define la base para la ingeniería de la computación tanto multiprocesador y computación clúster, en donde el principal papel diferenciador es si las comunicaciones interprocesador cuentan con el apoyo «dentro» de la computadora (por ejemplo, en una configuración personalizada para el bus o la red de las comunicaciones internas) o «fuera» del ordenador en una red «commodity».</p>
                            <a href="http://suseos.weebly.com/uploads/1/8/7/0/18707470/23-_cluster.pdf" target="_blank"class="btn btn-default">Leer mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-compass"></i> HADOOP</h4>
                        </div>
                        <div class="panel-body">
                            <p style="text-align: justify">Hadoop consiste básicamente en el Hadoop Common, que proporciona acceso a los sistemas de archivos soportados por Hadoop. El paquete de software The Hadoop Common contiene los archivos .jar y los scripts necesarios para hacer correr Hadoop. El paquete también proporciona código fuente, documentación, y una sección de contribución que incluye proyectos de la Comunidad Hadoop.

Una funcionalidad clave es que para la programación efectiva de trabajo, cada sistema de archivos debe conocer y proporcionar su ubicación: el nombre del rack (más precisamente, del switch) donde está el nodo trabajador. Las aplicaciones Hadoop pueden usar esta información para ejecutar trabajo en el nodo donde están los datos y, en su defecto, en el mismo rack/switch, reduciendo así el tráfico de red troncal (backbone traffic). El sistema de archivos HDFS usa esto cuando replica datos, para intentar conservar copias diferentes de los datos en racks diferentes. El objetivo es reducir el impacto de un corte de energía de rack o de fallo de interruptor de modo que incluso si se producen estos eventos, los datos todavía puedan ser legibles.8

Un clúster típico Hadoop incluye un nodo maestro y múltiples nodos esclavo</p>
                            <a href="http://wiki.apache.org/hadoop/" target="_blank" class="btn btn-default">Leer mas</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- Footer -->
        <?php include "menu.php"; ?>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>

    </body>

</html>
