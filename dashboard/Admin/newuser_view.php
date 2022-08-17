<?php
// Set sessions
if (!isset($_SESSION)) {
  session_start();
}
if (!isset($_SESSION['loggedin']) || ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'employee')) {
  header('Location: ../Login/index.php');
  die();
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Add User</title>
  <meta charset="utf-8">
  <title>Admin </title>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">



  <style>
    #insert {}


    fieldset.scheduler-border {
      border: 1px groove #ddd !important;
      padding: 0 1.4em 1.4em 1.4em !important;
      margin: 100 0 1.5em 0 !important;
      margin-left: 50px;
      margin-right: 350px;
      -webkit-box-shadow: 0px 0px 0px 0px #000;
      box-shadow: 0px 0px 0px 0px #000;
    }

    #txt {
      border-radius: 6px;
    }

    #cal {


      height: 600px;
      width: 100%;
    }

    legend.scheduler-border {
      font-size: 1.2em !important;
      font-weight: bold !important;
      text-align: left !important;
      width: auto;
      padding: 0 10px;
      border-bottom: none;
    }

    #drop1 {
      margin-top: -20px;
      margin-left: 450px;
      margin-bottom: 20px;
    }

    #drop2 {
      margin-top: -20px;
      margin-left: 450px;
      margin-bottom: 20px;
    }

    label {
      margin-left: 5px;
      margin-top: 0px;
    }

    #datepicker {
      width: 180px;
      margin: -20px 20px 20px 450px;
    }

    #datepicker>span:hover {
      cursor: pointer;
    }

    label {
      margin-left: 5px;
    }

    #datepicker2 {
      width: 180px;
      margin: -20px 20px 20px 450px;
    }

    #datepicker2>span:hover {
      cursor: pointer;
    }

    #label1 {
      margin-top: -10px;
    }

    #btn {
      color: black;
      border-radius: 6px;
      font-size: 1.3em;
      display: block;
      left: -60px;
      margin-top: 35px;
      width: 100%;
    }
  </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="newuser.php" class="logo">

        <span class="logo-mini"><b>A</b>LT</span>

        <span class="logo-lg"><b>Admin</b></span>
      </a>

      <nav class="navbar navbar-static-top">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="../server/logout.php"><span class="hidden-xs">Sign out</span></a>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="main-sidebar">

      <section class="sidebar">

        <div class="user-panel">
          <div class="pull-left image">
            <br />
          </div>
          <div class="pull-left info">

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
          <li class="treeview">
            <ul class="treeview-menu">
              <li><a href="generalS.php"><i class="fa fa-circle-o"></i>Home Page</a></li>
            </ul>
          </li>

          <li>
            <a href="generalS2.php">
              <i class="fa fa-group"></i> <span>Blood Bank</span>

            </a>
          </li>

          <li>
            <a href="../hospital/generalS2.php">
              <i class="fa fa-group"></i> <span>Hospital Section</span>

            </a>
          </li>
          <?php
          if ($_SESSION['role'] === 'employee')
            echo '	 <li>
          <div id=zero style="display:none"></div>
          <a href=# target=_self onClick="show()" class=left>
            <i class="fa fa-group"></i> <span>New User</span>
          </a>
        </li>
        ';
          if ($_SESSION['role'] === 'admin')
            echo '	 	<li>
		<div id=zero style="display:none"></div>
          <a href="newuser_view.php" class=left>
            <i class="fa fa-group"></i> <span>New User</span>
          </a>
        </li>
        '
          ?>
          <li>
            <a href="Appointment.php">
              <i class="fa fa-group"></i> <span>Appointments</span>
            </a>
          </li>
          <li>
            <a href="../Admin/donatenow.php">
              <i class="fa fa-group"></i> <span>Donate Now</span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          New User
        </h1>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div id="Calender" class="col-md-12 col-sm-12">
            <div class="box box-primary">
              <!-- form started -->
              <form method="post" id="cal" action="newuser.php" style="display: block;">
                <div class="container-fluid">
                  <div class="row clearfix" style="margin-top: 15px;">
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label> Account name</label>
                        <input autocomplete="off" type="text" id="txt" placeholder="name" name="name" class="form-control" required />
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label> New User</label>
                        <input autocomplete="off" type="text" id="txt" placeholder="Username" name="username" class="form-control" required />
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label> Role </label>
                        <select id="txt" placeholder="Role" name="role" class="form-control" required>
                          <option value="admin">Admin</option>
                          <option value="lab">Laboratory</option>
                          <option value="employee">Employee</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                      <label> Password</label>
                      <div>
                        <input type='password' id="txt" placeholder="password" name="password" class="form-control" required />
                      </div>
                    </div>
                    <?php if (isset($_SESSION['status'])) {
                      echo '<h5 style="    color: red;
    text-align: center;
    top: 22px;
    position: relative;">' . $_SESSION['status'] . '</h5>';
                      unset($_SESSION['status']);
                    } ?>
                    <div class="col-md-12 col-sm-12">
                      <input type="Submit" name="submit" id="btn" class="btn btn-danger" value="Save">
                    </div>
                  </div>
                </div>
              </form>
              <!-- form ended -->
            </div>
          </div>
        </div>
    </div>
    </section>
  </div>
  <div class="control-sidebar-bg"></div>
  </div>
  <script src="../bower_components/jquery/dist/jquery.min.js"></script>
  <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
  <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="../bower_components/fastclick/lib/fastclick.js"></script>
  <script src="../dist/js/adminlte.min.js"></script>
  <script src="../dist/js/demo.js"></script>
  <script src="../bower_components/moment/moment.js"></script>
  <script src="../bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
</body>

</html>