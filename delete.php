<?php
	$conn = mysqli_connect('practicelab1.mysql.database.azure.com', 'pxpleng@practicelab1', 'Pleng2545', 'itf');
	$sql = 'DELETE FROM guestbook WHERE ID = '.$_GET['ID'].'';
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Practice Lab-1</title>
    </head>
    <body class="bg-dark py-5">
        <div class="container text-dark">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <div class="card shadow">
                            <h2 align="center">
                            <?php
                                if(mysqli_query($conn, $sql)) {
                                    echo "DELETE COMPLETED";
                                }
                                else {
                                    echo "DELETE FAILED";
                                }
                            ?>
                            </h2>
                            <p align="center" class="mt-4 mb-0"><a href="index.php" class="btn btn-sm btn-info">BACK</a></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
