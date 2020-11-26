<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Practice Lab-1</title>
  </head>
  <body>
    <?php
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'practicelab1.mysql.database.azure.com', 'pxpleng@practicelab1', 'Pleng2545', 'itf', 3306);
    if (mysqli_connect_errno($conn))
    {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }
    $res = mysqli_query($conn, 'SELECT * FROM guestbook');
    ?>
        <div class="container">
            <div class="row">
                <table class="col-lg-9 col-md-9 col-sm-12">
                    <table class="table-responsive"></table>
                    <table class="table table-striped table-dark ">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">Name</th>
                                <th class="text-center" scope="col">Comment</th>
                                <th class="text-center" scope="col">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($Result = mysqli_fetch_array($res)) {
                            
                            ?>
                            <tr>
                                <td><?php echo $Result['Name'];?></td>
                                <td><?php echo $Result['Comment'];?></td>
                                <td><?php echo $Result['Link'];?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </table>
        </div>
        </div>
<?php
mysqli_close($conn);
?>
</body>
</html>
