<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IPD | ACADEMY</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="icon" href="../public/img/logo_ip2.png">
  

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">    
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">

  </head>
  <body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">

     <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>IPD</b>  </span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>IPD ACADEMY</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../public/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">TEAM KURAMA</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                     ESTADIO NACIONAL LIMA - PERU
                      <small>www.HACKATHON.COM</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">       
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            <li>
              <a href="#">
                <i class="fa fa-tasks"></i> <span>Escritorio</span>
              </a>
            </li> 
             <li>
              <a href="complejo.php">
                <i class="fa fa-tasks"></i> <span>Complejo</span>
              </a>
            </li>             
           <li>
              <a href="persona.php">
                <i class="fa fa-tasks"></i> <span>Persona</span>
              </a>
            </li> 
            
             <li>
              <a href="disciplina.php">
                <i class="fa fa-tasks"></i> <span>Disciplina</span>
              </a>
            </li> 
            
            <li>
              <a href="especialista.php">
                <i class="fa fa-tasks"></i> <span>Especialista</span>
              </a>
            </li> 
              <li>
              <a href="horario.php">
                <i class="fa fa-tasks"></i> <span>Horario</span>
              </a>
            </li>   
                <li>
              <a href="inscripcion.php">
                <i class="fa fa-tasks"></i> <span>Inscripcion</span>
              </a>
            </li>                    
             <li>
              <a href="test.php">
                <i class="fa fa-tasks"></i> <span>Test</span>
              </a>
            </li>   
            <li>
              <a href="competicion.php">
                <i class="fa fa-tasks"></i> <span>Competicion</span>
              </a>
            </li>

             <li>
              <a href="talento.php">
                <i class="fa fa-tasks"></i> <span>Talento</span>
              </a>
            </li>

 <?php
    if($_SESSION['Acceso']==1){
      echo '<li class="treeview">
          <a href="#">
          <i class="fa fa-laptop"></i>
            <span>Acceso</span>
          <i class="fa fa-angle-left pull-right"></i>
         </a>
        <ul class ="treeview-menu">
            <li><a href="permiso.php"><i class="fa fa-circle-o"></i>Permiso</a></li>
            <li><a href="usuario.php"><i class="fa fa-circle-o"></i>Usuario</a></li>

       </ul>
    }
    </li>';
  }
    ?>

               
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
