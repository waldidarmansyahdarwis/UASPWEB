<?php
require 'function.php';
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SMA MERDEKA</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
            <h3>SMA MERDEKA</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Menu</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu"> 
                        <li>
                            <a href="mastersiswa.php">Siswa</a>
                        </li>
                        <li>
                            <a href="mastermapel.php">Mata Pelajaran</a>
                        </li>
                        <li>
                            <a href="masterguru.php">Guru</a>
                        </li>  
                    </ul>
                <li>
                <a href="logout.php">Logout</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>
            <div class="card mb-4">
                            <div class="card-header">
                                <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Tambah Guru </button>
                            </div>
            <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%"> 
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Guru</th>
                                            <th>Id</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   
                                    <?php
                                            $ambildataguru = mysqli_query($conn, "select * from guru");
                                            $i = 1;
                                            while($data=mysqli_fetch_array($ambildataguru)){
                                                $Nama = $data['Nama'];
                                                $id = $data['id'];

                                    ?>
                                        <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$Nama;?></td>
                                                <td><?=$id;?></td>
                                       
                                        </tr>

                                    <?php

                                            }

                                    ?>
                                    </tbody>
                                </table>
            </div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script>
    $(document).ready(function){
        $('#example').DataTable();
    });
    </script>

</body>
       <!-- The Modal -->
       <div class="modal fade" id="myModal">
        <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Tambah Guru</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
        
            <!-- Modal body -->
            <form method = "post">
                <div class="modal-body">
                <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                <br>
                <input type="text" name="id" placeholder="Id" class="form-control" required>
                <br>
                <button type="submit" class="btn btn-primary" name="addnewguru">submit</button>
                </div>
            </form>
            
        </div>
        </div>
    </div>
</html>