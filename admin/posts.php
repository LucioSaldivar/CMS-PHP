<?php include "includes/admin_header.php" ?>

    <div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php" ?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to the Admin Page
                        <small>Infinri</small>
                    </h1>

                    <?php
                        if(isset($_GET['source'])){
                            $source = $_GET['source'];
                        }

                        switch (){
                            case '34':
                                echo "nice";
                                break;
                            case '100':
                                echo "nice 100";
                                break;
                            case '200':
                                echo "nice 200";
                                break;
                            default:

                                break;
                        }



                    ?>


                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
<?php include "includes/admin_footer.php"; ?>