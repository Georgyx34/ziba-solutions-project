<html>
<head>
    <title>Administrators page</title>
     <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
    <body>
      <?php require_once 'process.php'; ?>
      <div class="row justify-content-center">
      <form action="process.php" method="post">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control"
          value="Enter your name">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control"value="Enter your email">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="save">save</button>
        </div>
      </form>
    </body>
</html>