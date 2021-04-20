<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
 <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : ">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
			<h3><img src="https://as2.ftcdn.net/jpg/01/32/11/13/500_F_132111352_vAiorf4ahmta4ZtPU9GCe8u9d1gXR3sC.jpg" width="100px" height="100px">
                  Welcome To MFC BANK !!
			<img src="https://as2.ftcdn.net/jpg/01/32/11/13/500_F_132111352_vAiorf4ahmta4ZtPU9GCe8u9d1gXR3sC.jpg" width="100px" height="100px"></h3>
                  <h1><br>Where you know your banker and your banker knows you. <br></h1>
                </div>
              </div>
              
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.png" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #2785C4;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.png" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
            </div>
      </div>

      <footer class="text-center mt-5 py-2">
	<footer id="footer" class="coloured-section">
  <p>FIND US ON SOCIAL MEDIA</p>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <i class="social-icon fa fa-facebook-square"aria-hidden></i>
    <i class="social-icon fa fa-instagram" aria-hidden="true"></i>
	<i class="social-icon fa fa-twitter" aria-hidden="true"></i>
    <i class="social-icon fa fa-linkedin" aria-hidden="true"></i>
        <p>&copy 2021. Made by <b>HARSH PATIL</b> <br> Harsh Patil Creation</p>
      </footer>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>