<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","kopioncak");
// jika tidak ada session user admin (belum login)
if (!isset($_SESSION["admin"]) OR empty($_SESSION["admin"]))
{
    header("location:loginadmin.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>admin | Kopi Oncak</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Kopi Oncak</a> 
            </div>
            <div style="color: white;
                padding: 15px 50px 5px 50px;
                float: right;
                font-size: 16px;"> Tanggal : 
                <span id="tanggalwaktu"></span> 
                <script>
                    var dt = new Date();
                    document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleDateString();
                </script> &nbsp; <a href="index.php?page=logout" class="btn btn-danger square-btn-adjust">Logout</a>
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <?php
                // mendapatkan id_pelanggan yang telah login
                $id_admin = $_SESSION["admin"]["id_admin"];
                 $data = mysqli_query($koneksi,"SELECT * FROM admin WHERE id_admin='$id_admin'");
                while($d = mysqli_fetch_array($data)){?>
                    
                    <?php } ?>
					</li>
				
					
                    <li>
                        <a  onClick="location.href='index.php'" style="cursor: pointer;"><i class="fa fa-home fa-3x"></i> HOME</a>
                    </li>

                    <li>
                        <a onClick="location.href='index.php?page=dataproduk'" style="cursor: pointer;"><i class="fa fa-coffee fa-3x"></i> DATA PRODUK ONCAK</a>
                    </li>

                    <li>
                        <a onClick="location.href='index.php?page=dataforum'" style="cursor: pointer;"><i class="fa fa-users fa-3x"></i> FORUM KOMUNITAS KOPI</a>
                    </li>
                    
                    <li>
                        <a onClick="location.href='index.php?page=logout'" style="cursor: pointer;"><i class="fa fa-share fa-3x"></i> LOGOUT</a>
                    </li>	

                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                 <?php
                        if (isset($_GET['page']))
                        { 
                        if ($_GET['page']=="dataproduk")
                        {
                        include 'page/dataproduk/dataproduk.php';
                        }
                        if ($_GET['page']=="detaildataproduk")
                        {
                        include 'page/dataproduk/detaildataproduk.php';
                        }
                        elseif($_GET['page']=="tambahdataproduk")
                        {
                        include 'page/dataproduk/tambahdataproduk.php';
                        }
                        elseif($_GET['page']=="prosestambahdataproduk")
                        {
                        include 'page/dataproduk/prosestambahdataproduk.php';
                        }
                        elseif($_GET['page']=="ubahdataproduk")
                        {
                        include 'page/dataproduk/ubahdataproduk.php';
                        }
                        elseif($_GET['page']=="prosesubahdataproduk")
                        {
                        include 'page/dataproduk/prosesubahdataproduk.php';
                        }
                        elseif($_GET['page']=="hapusdataproduk")
                        {
                        include 'page/dataproduk/hapusdataproduk.php';
                        }
                        elseif($_GET['page']=="dataforum")
                        {
                        include 'page/dataforum/dataforum.php';
                        }
                        elseif($_GET['page']=="balasforum")
                        {
                        include 'page/dataforum/balasforum.php';
                        }
                        elseif($_GET['page']=="prosesbalasforum")
                        {
                        include 'page/dataforum/prosesbalasforum.php';
                        }
                        elseif($_GET['page']=="hapusdataforum")
                        {
                        include 'page/dataforum/hapusdataforum.php';
                        }
                        elseif ($_GET['page']=="loginadmin")
                        {
                        include 'loginadmin.php';
                        }  
                        elseif ($_GET['page']=="logout")
                        {
                        include 'logout.php';
                        }
                        
                    }
                    else
                    {
                            include 'page/dashboardadmin/dashboardadmin.php';
                    }    
                    ?>
      
                          
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    
    
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
