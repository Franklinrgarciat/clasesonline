<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('app/css.php'); ?>
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <?php include('header.php'); ?>
                <!-- /.navbar-top-links -->

                <?php include('menu-sidebar.php'); ?>
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <?php echo $contenido; ?>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <?php include('app/scripts.php'); ?>

    </body>
</html>
