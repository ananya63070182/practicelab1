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
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-12"><h1 class="text-monospace">DATA</h1>
                        </div>
                    </div>
                    <table class="table-responsive"></table>
                    <table class="table table-bordered table-dark" style="width: 900;">
                        <thead>
                            <tr>
                                <div><a href="form.php" class="btn btn-info btn-sm font-weight-bold">ADD</a></div>
                                <th class="text-center" style="width: 200px;">Name</th>
                                <th class="text-center" style="width: 200px;">Comment</th>
                                <th class="text-center" style="width: 300px;">Link</th>
                                <th class="text-center" style="width: 200px;">Action</th>
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
                                <td class="text-center"><button type="button" href="edit.php?ID=<?php echo $Result['ID'];?>" class="text-center btn btn-sm btn-success">EDIT</button><button type="button" href="delete.php?ID=<?php echo $Result['ID'];?>" class="text-center btn btn-sm btn-danger">DEL</button></td>
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
