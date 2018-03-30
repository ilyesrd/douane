<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="images/logo.gif" />

    <title>Admin | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <script src="../vendors/jquery/dist/jquery.min.js"></script>

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/0.2.0/Chart.min.js" type="text/javascript"></script>

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "declaration";
$link = mysqli_connect($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?> 
        

    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title">
                            <img src="images/logo.gif" style="    
                            width: 29px;
                            height: 29px;
                            border-radius: 50%;">
                            <span>Douane Algérie</span>
                        </a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="images/img.jpg" class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Bienvenue,</span>
                            <h2>M. Kaddour Bentahar</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Directions Régionales</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <a>
                                        <i class="fa fa-edit"></i> Alger Port
                                        <span class="fa fa-chevron-down"></span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <i class="fa fa-edit"></i> Alger Extérieur
                                        <span class="fa fa-chevron-down"></span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <i class="fa fa-edit"></i> Constantine
                                        <span class="fa fa-chevron-down"></span>
                                    </a>
                                    <ul class="nav child_menu">
                                        <li>
                                            <a href="general_elements.html">Constantine</a>
                                        </li>
                                        <li>
                                            <a href="media_gallery.html">Skikda</a>
                                        </li>
                                        <li>
                                            <a href="typography.html">Batna</a>
                                        </li>
                                        <li>
                                            <a href="icons.html">Biskra</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i class="fa fa-edit"></i> Oran
                                        <span class="fa fa-chevron-down"></span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <i class="fa fa-edit"></i> Blida
                                        <span class="fa fa-chevron-down"></span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <i class="fa fa-edit"></i>Telemcen
                                        <span class="fa fa-chevron-down"></span>
                                    </a>
                                    <ul class="nav child_menu">
                                        <li>
                                            <a href="fixed_sidebar.html">Tlemcen</a>
                                        </li>
                                        <li>
                                            <a href="fixed_footer.html">Maghnia</a>
                                        </li>
                                        <li>
                                            <a href="fixed_footer.html">Ghazaouet</a>
                                        </li>
                                        <li>
                                            <a href="fixed_footer.html">Sidi Bel Abbès</a>
                                        </li>
                                        <li>
                                            <a href="fixed_footer.html">Aïn Témouchent</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i class="fa fa-edit"></i>Sétif
                                        <span class="fa fa-chevron-down"></span>
                                    </a>
                                    <ul class="nav child_menu">
                                        <li>
                                            <a href="fixed_sidebar.html">Sétif</a>
                                        </li>
                                        <li>
                                            <a href="fixed_footer.html">Béjaia</a>
                                        </li>
                                        <li>
                                            <a href="fixed_sidebar.html">Jijel</a>
                                        </li>
                                        <li>
                                            <a href="fixed_footer.html">Bordj Bou Arreridj</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i class="fa fa-edit"></i>Annaba
                                        <span class="fa fa-chevron-down"></span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <i class="fa fa-edit"></i>Tébessa
                                        <span class="fa fa-chevron-down"></span>
                                    </a>
                                    <ul class="nav child_menu">
                                        <li>
                                            <a href="fixed_sidebar.html">Tébessa</a>
                                        </li>
                                        <li>
                                            <a href="fixed_footer.html">Bir El Ater</a>
                                        </li>
                                        <li>
                                            <a href="fixed_footer.html">Oum El Bouaghi</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i class="fa fa-edit"></i>Illizi
                                        <span class="fa fa-chevron-down"></span>
                                    </a>
                                    <ul class="nav child_menu">
                                        <li>
                                            <a href="fixed_sidebar.html">In Aménas</a>
                                        </li>
                                        <li>
                                            <a href="fixed_footer.html">Djanet</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i class="fa fa-edit"></i>Tamanrasset
                                        <span class="fa fa-chevron-down"></span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <i class="fa fa-edit"></i>Bechar
                                        <span class="fa fa-chevron-down"></span>
                                    </a>
                                    <ul class="nav child_menu">
                                        <li>
                                            <a href="fixed_sidebar.html">Bechar</a>
                                        </li>
                                        <li>
                                            <a href="fixed_footer.html">Nâama</a>
                                        </li>
                                        <li>
                                            <a href="fixed_sidebar.html">Adrar </a>
                                        </li>
                                        <li>
                                            <a href="fixed_footer.html">Tindouf </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i class="fa fa-edit"></i>Ouargla
                                        <span class="fa fa-chevron-down"></span>
                                    </a>
                                    <ul class="nav child_menu">
                                        <li>
                                            <a href="fixed_sidebar.html">Ouargla</a>
                                        </li>
                                        <li>
                                            <a href="fixed_footer.html">Hassi Messaoud</a>
                                        </li>
                                        <li>
                                            <a href="fixed_sidebar.html">Laghouat</a>
                                        </li>
                                        <li>
                                            <a href="fixed_footer.html">Ghardaïa</a>
                                        </li>
                                        <li>
                                            <a href="fixed_sidebar.html">El Oued</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                       


                    </div>
                    <!-- /sidebar menu -->

                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">M. Bentahar
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li>
                                        <a href="javascript:;"> Profile</a>
                                    </li>
                                    <li>
                                        <a href="login.html">
                                            <i class="fa fa-sign-out pull-right"></i> Se Déconnecter</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="badge bg-red">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        <a>
                                            <span class="image">
                                                <img src="images/img.jpg" alt="Profile Image" />
                                            </span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                                <img src="images/img.jpg" alt="Profile Image" />
                                            </span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                                <img src="images/img.jpg" alt="Profile Image" />
                                            </span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                                <img src="images/img.jpg" alt="Profile Image" />
                                            </span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main" style="padding-bottom: 20px; height: 100%;">
                

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="row x_title">
                                <div class="col-md-6">
                                    <h3>Statistique
                                        <small>General</small>
                                    </h3>
                                </div>
                                <div class="col-md-6">
                                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span>December 30, 2014 - January 28, 2015</span>
                                        <b class="caret"></b>
                                    </div>
                                </div>
                            </div>
                            <div class="x_content">
                                
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Voyageur</th>
                                            <th>N° Passeport</th>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>Valeur</th>
                                            <th>Poids</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php 
                                            // Attempt Select query execution
                                            $sql = "SELECT v.n_passport, v.nom, v.prenom, v.nationalite, i.val_chiffre,i.val_lettre, vd.date_voyage FROM voyageur AS v 
                                                    JOIN formulaire AS f ON v.n_passport = f.n_passport 
                                                    JOIN importations AS i ON i.id_formulaire = f.id_formulaire 
                                                    JOIN voyage AS vd ON vd.n_voyage = f.n_voyage ";
                                            if($result = mysqli_query($link, $sql)){
                                                if(mysqli_num_rows($result) > 0){
                                                    while($row = mysqli_fetch_array($result)){
                                                        
                                                        if($row['nationalite'] == "algerienne"){
                                                            $type = "resident";
                                                        } else{
                                                            $type = "etranger";
                                                        }
                                                        echo "<tr>";
                                                            echo "<td>". $row['nom'].' '.$row['prenom'] ."</td>";
                                                            echo "<td>". $row['n_passport']."</td>";
                                                            echo "<td>". $type ."</td>";
                                                            echo "<td>". $row['date_voyage']."</td>";
                                                            echo "<td>". $row['val_chiffre']."</td>";
                                                            echo "<td>". $row['val_lettre']."</td>";
                                                        echo "</tr>";
                                        
                                                    }
                                                    // Free result set
                                                    mysqli_free_result($result);
                                                } else{
                                                    echo "No records matching your query were found.";
                                                }
                                            } else{
                                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="dashboard_graph">

                            <div class="col-md-9 col-sm-9 col-xs-12">
                                
                                <canvas id="myChart" width="800" height="350"></canvas>
                                <script>
                                $(document).ready(function(){
                                    $.ajax({
                                        url: "custom.php",
                                        method: "GET",
                                        success: function(data) {
                                            //console.log(data);

                                            var valeur = [0,0,0,0,0,0,0,0,0,0,0,0];

                                            for(var i in data) {
                                                
                                                var m = data[i].date_voyage.split('-');
                                                switch(m[1])
                                                    {
                                                    case "01":
                                                        valeur[0]=valeur[0]+parseFloat(data[i].val_chiffre);
                                                        break;
                                                    case "02":
                                                        valeur[1]=valeur[1]+parseFloat(data[i].val_chiffre);
                                                        break;
                                                    case "03":
                                                        valeur[2]=valeur[2]+parseFloat(data[i].val_chiffre);
                                                        break;
                                                    case "04":
                                                        valeur[3]=valeur[3]+parseFloat(data[i].val_chiffre);
                                                        break;
                                                    case "05":
                                                        valeur[4]=valeur[4]+parseFloat(data[i].val_chiffre);
                                                        break;
                                                    case "06":
                                                        valeur[5]=valeur[5]+parseFloat(data[i].val_chiffre);
                                                        break;
                                                    case "07":
                                                        valeur[6]=valeur[6]+parseFloat(data[i].val_chiffre);
                                                        break;
                                                    case "08":
                                                        valeur[7]=valeur[7]+parseFloat(data[i].val_chiffre);
                                                        break;
                                                    case "09":
                                                        valeur[8]=valeur[8]+parseFloat(data[i].val_chiffre);
                                                        break;
                                                    case "10":
                                                        valeur[9]=valeur[9]+parseFloat(data[i].val_chiffre);
                                                        break;
                                                    case "11":
                                                        valeur[10]=valeur[10]+parseFloat(data[i].val_chiffre);
                                                        break;
                                                    case "12":
                                                        valeur[11]=valeur[11]+parseFloat(data[i].val_chiffre);
                                                        break;
                                                    }    
                                            }
                                            console.log(valeur);

                                            var data = {
                                                labels: ["January", "February", "March", "April", "May", "June", "July","August", "Octobre", "November", "December"],
                                                datasets: [
                                                    {
                                                        label: "Sodium intake",
                                                        fillColor: "rgba(220,220,220,0.2)",
                                                        strokeColor: "rgba(220,220,220,1)",
                                                        pointColor: "rgba(220,220,220,1)",
                                                        pointStrokeColor: "#fff",
                                                        pointHighlightFill: "#fff",
                                                        pointHighlightStroke: "rgba(220,220,220,1)",
                                                        data: valeur
                                                    }
                                                ]
                                            };
                                            
                                            var ctx = new Chart(document.getElementById("myChart").getContext("2d"),{
                                                type : 'line',
                                                data : data
                                            });
                                        }
                                    })
                                });
                                </script>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2> Bureaux de douane</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <div class="">
                                            <ul class="to_do">
                                                <li>
                                                    <p>
                                                        <input type="checkbox" class="flat"> Bureau de Constantine </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <input type="checkbox" class="flat"> Bureau de l’Aéroport Mohamed Boudiaf</p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <input type="checkbox" class="flat"> Bureau de Skikdacontentieux</p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <input type="checkbox" class="flat"> Bureau de Skikda El Djadid</p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <input type="checkbox" class="flat"> Bureau de Batna</p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <input type="checkbox" class="flat"> Bureau de Biskra</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
                <br />

                <div class="clearfix"></div>

                
                <!-- /page content -->

                
            </div>
            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Douane Algérienne
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>

        <?php
            // Close connection
            mysqli_close($link);
        ?>

        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="../vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- gauge.js -->
        <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="../vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="../vendors/skycons/skycons.js"></script>
        <!-- Flot -->
        <script src="../vendors/Flot/jquery.flot.js"></script>
        <script src="../vendors/Flot/jquery.flot.pie.js"></script>
        <script src="../vendors/Flot/jquery.flot.time.js"></script>
        <script src="../vendors/Flot/jquery.flot.stack.js"></script>
        <script src="../vendors/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="../vendors/DateJS/build/date.js"></script>
        <!-- JQVMap -->
        <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
        <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="../vendors/moment/min/moment.min.js"></script>
        <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.js"></script>

</body>

</html>