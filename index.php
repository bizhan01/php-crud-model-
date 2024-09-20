<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container well">
      <div class="panel panel-primary">
        <div class="panel panel-heading">
          <center><h1>Add New Record</h1></center>
        </div>

         <?php
            if(isset($_SESSION['success']))
              { ?>
               <div class="alert alert-success">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
                 <center>
                 <h2>Success Message :)</h2>
                   <h4>
                     <?php
                      if($_SESSION['success']==true)
                      {
                        echo "معلومات موفقانه ذخیره شده";
                      }
                      session_destroy();
                      ?>
                  </h4>
                </center>
                </div>
             <?php  }?>

        &nbsp &nbsp <a href="list.php"><button type="button" name="button" class="btn btn-primary">Records List</button></a>
        <div class="panel panel-body">
          <form action="insert.php" method="POST">
            <div class="form-group">
              <label for="">First Name</label>
              <input type="text" class="form-control" name="name" value="" required>
            </div>
            <div class="form-group">
              <label for="">Last Name</label>
              <input type="text" class="form-control" name="lastName" value="" required>
            </div>
            <div class="form-group">
              <label for="">E-mail Address</label>
              <input type="email" class="form-control" name="email" value="" required>
            </div>
            <div class="form-group">
              <input type="submit" name="submit" value="SAVE" class="btn btn-success">
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
