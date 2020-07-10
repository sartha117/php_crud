<!DOCTYPE html>
<html lang="en">

  <head>    
    <title>PHP CRUD</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" > </script>
  </head>

  <body>
  <?php require_once 'process.php'; ?>
  <div class="row justify-content-center">
    <form action="process.php" method="POST">
        <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="enter your name">
        </div>
        <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" class="form-control" value="enter your location">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary" name="save">save</button>
        </div>


    </form>
    </div>
    </body>
    
</html>