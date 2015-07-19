<?php session_start(); 

 include("../db/db.php");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    
    

    $query="select * from puestos";
    $stmt = sqlsrv_query( $conn, $query);

    $query1="select * from empleados";
    $stmt1 = sqlsrv_query( $conn, $query1);

  $query2="select * from aspirante";
    $stmt2 = sqlsrv_query( $conn, $query2);

    
 




?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="../css/jquery.datetimepicker.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

             <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="dash.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pencil fa-fw"></i> Cursos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>    
                                    <a href="new_course.php">Nuevo Curso</a>
                                </li>
                                <li>
                                    <a href="view_course.php">Modificar Curso</a>
                                </li>
                                <li>
                                    <a href="assign_course.php">Asignar curso</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Reclutamiento <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="new_applicant.php">Nuevo Aspirante</a>
                                </li>
                                <li>
                                    <a href="view_applicant.php">Ver/editar aspirante</a>
                                </li>
                                <li>
                                    <a href="book_date.php">Agendar Cita</a>
                                </li>

                            </ul>
                        </li>
                      
                        <li>
                            <a href="#"><i class="fa fa-money fa-fw"></i> Compensaciones <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="new_compensation.php">Nueva Compensación</a>
                                </li>
                                <li>
                                    <a href="assign_compensation.php">Asignar compensación</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa  fa-book fa-fw"></i> Nomina<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="new_employe.php">Nuevo Empleado</a>
                                </li>
                                <li>
                                    <a href="view_employee.php">Ver/editar empleado</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cita</h1>
                            <div class="form-group" >
                            <form class="form-group"method="POST" action="book_date.php">
                                        <div class="form-group">
                                            <label>Aspirante</label>
                                            <select class="form-control" name="aspirante">
                                            <?php while($row2 = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_ASSOC)){
                                                    echo "<option value='".$row2['id_aspirante']."'>"
                                                    .$row2['nombre']."</option>";
                                                }       ?>
                                                
                                            
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Puesto</label>
                                            <select class="form-control" name="puesto"  >
                                                <?php while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
                                                    echo "<option value='".$row['id_puesto']."'>"
                                                    .$row['nombre']."</option>";
                                                }       ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <div class='input-group '>
                                                <input type='text' class="form-control" id="datetimepicker" name="f"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>

                                            <div class="form-group">
                                            <label>Entrevistador</label>
                                            <select class="form-control" name="empleado">
                                                <?php while($row1 = sqlsrv_fetch_array( $stmt1, SQLSRV_FETCH_ASSOC)){
                                                    echo "<option value='".$row1['num_empleado']."'>"
                                                    .$row1['nombre']."</option>";
                                                }       ?>
                                            </select>
                                            <div class="form-group">
                                            <label>¿Acepetado?</label>
                                            <select class="form-control" name="aceptado">
                                            
                                                    <option value="1">Si</option>
                                                    <option value="0">NO</option>
                                             </select>
                                             <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                                </form>
                                        </div>

                                     </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
     <script src="../bower_components/bootstrap/dist/js/bootstrap.js"></script>
     <script src="../js/jquery.js"></script>
     <script src="../js/jquery.datetimepicker.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
<script type="text/javascript">
       $('#datetimepicker').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
startDate:  '2015/01/01'
});
$('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});

$('.some_class').datetimepicker();

$('#default_datetimepicker').datetimepicker({
    formatTime:'H:i',
    formatDate:'d.m.Y',
    //defaultDate:'8.12.1986', // it's my birthday
    defaultDate:'+03.01.1970', // it's my birthday
    defaultTime:'10:00',
    timepickerScrollbar:false
});

        </script>
</body>

</html>


<?php
if(!isset($_POST['aspirante'])){

}
else{
$aspirante =$_POST['aspirante'];
$puesto= $_POST['puesto'];
$fecha= $_POST['f'];
$empleado= $_POST['empleado'];
$acepetado= $_POST['aceptado'];

    

    $query3 = "insert into entrevista values ('$aspirante','$puesto','$fecha','$empleado','$acepetado')";

     $stmt3=executeQuery( $query3);   
if( $stmt3 === false ) {
         die( print_r( sqlsrv_errors(), true));
    }

   if ($stmt1){ ?>  <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                               Guardado exitoso.
                            </div>
 <?php

}
}

