<?php
	$conn = mysqli_connect('practicelab1.mysql.database.azure.com', 'pxpleng@practicelab1', 'Pleng2545', 'itf');

	$id = $_GET['ID'];

	$sql = 'SELECT * FROM guestbook WHERE ID = '.$id.'';
	$query = mysqli_query($conn, $sql);
	if(!$query) {
		header('Location: index.php');
	}
	else {
		$data = mysqli_fetch_assoc($query);
	}
?>
<!DOCTYPE html>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12"><h1 class="text-monospace">EDIT</h1></div>
            </div>
            <form action="update.php" method="post">
                <input type="text" name="id" value="<?php echo $data['ID']; ?>" class="form-control d-none" required>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $data['Name']; ?>" class="form-control border-info" required>
                </div>
                <div class="form-group">
                    <label>Comment</label>
                    <textarea name="comment" class="form-control border-info" rows="5" required><?php echo $data['Comment']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Link</label>
                    <input type="text" name="link" value="<?php echo $data['Link']; ?>" class="form-control border-info">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-sm btn-success my-3 font-weight-bold">SAVE</button>
                    <a class="btn btn-sm btn-danger my-3" href="index.php">CANCEL</a>
                </div>
            </form>
        </div>
    </body>
</html>