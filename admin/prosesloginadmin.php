<?php

session_start();
include 'koneksi.php'; ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php 
             if (isset($_POST['loginadmin']))
             {
              $ambil = $koneksi->query("SELECT *  FROM admin WHERE username='$_POST[username]'
                AND password = '$_POST[password]'");
              $usernameyangcocok = $ambil->num_rows;
              if ($usernameyangcocok==1)
             {
              $_SESSION['admin']=$ambil->fetch_assoc();
              echo "<div class='alert alert-info'>Anda Berhasil Login</div>";
              echo "<meta http-equiv='refresh' content='1;url=index.php'>";
             }
             else
             {
              echo "<div class='alert alert-danger'>Anda Gagal Login</div>";
              echo "<meta http-equiv='refresh' content='1;url=loginadmin.php'>";
             }   
             }
             ?>
<!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->