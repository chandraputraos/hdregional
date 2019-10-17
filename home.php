<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-red navbar-light border-bottom">
            <div class="container">
                <a  class="navbar-brand">
                    <img src="img/hci-ban.png" alt="HCID-Logo" class="brand-image img-circle elevation-4" style="opacity: .8">
                    <span class="brand-text font-weight-light">DASHBOARD</span>
                </a>



                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#/home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#/report" class="nav-link">Report</a>
                    </li>

                    <li class="nav-item d-none d-sm-inline-block" ng-if="user_role == 'Admin'">
                        <a href="#/data" class="nav-link">Summary</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block" ng-if="user_role == 'Admin'">
                        <a href="#/adminuser" class="nav-link">Admin</a>
                    </li>

                </ul>

                <!-- SEARCH FORM -->

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Messages Dropdown Menu -->



                    <li class="nav-item dropdown user-menu">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img src="img/avatar04.png" class="user-image img-circle elevation-2" alt="User Image">
                            <span class="d-none d-md-inline">{{user_namalengkap}}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <!-- User image -->
                            <li class="user-header bg-primary">
                                <img src="img/hci-small.png" class="img-circle elevation-2" alt="User Image">

                                <p>
                                    {{user_namalengkap}} - {{user_team}}
                                    <small>{{user_role}}</small>
                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <!--<a href="#" class="btn btn-default btn-flat">Profile</a>-->
                                <button type="button" ng-click="logout();" class="btn btn-primary float-right">Logout
                        </button>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    
        <div class="row">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Status Device</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" ng-controller="hdrApp">
                <table class="table table-bordered">
                  <tr >
                    <th style="width: 10px">#</th>
                    <th>Office</th>
                    <th>Internet</th>
                    <th>Yealink</th>
                   
                    <th>Printer</th>
                    
                    <th>Print MCF</th>
                    <th>AC</th>
                    <th>UPS</th>
                    <th>Rack</th>
                    <th>Kebersihan</th>
					<th>Timestamp</th>
                  
                  </tr>
                  <tr ng-repeat="data in reports">
                    <td>{{$index+1}}</td>
                    <td>{{data.office}}</td>
                    <td><span class="badge" ng-class="{'bg-danger': data.status_internet == 'NOT OK'}">{{data.status_internet}}</span></td>                   
                    <td><span class="badge"  ng-class="{'bg-danger': data.status_yealink == 'NOT OK'}">{{data.status_yealink}}</span></td>
                    <td><span class="badge"  ng-class="{'bg-danger': data.status_printer == 'NOT OK'}">{{data.status_printer}}</span></td>
                    <td><span class="badge"  ng-class="{'bg-danger': data.status_printer_mcf == 'NOT OK'}">{{data.status_printer_mcf}}</span></td>
                   
                    <td><span class="badge"  ng-class="{'bg-danger': data.status_ac == 'NOT OK'}">{{data.status_ac}}</span></td>
                    <td><span class="badge"  ng-class="{'bg-danger': data.status_ups == 'NOT OK'}">{{data.status_ups}}</span></td>
                    <td><span class="badge"  ng-class="{'bg-danger': data.status_rack == 'NOT OK'}">{{data.status_rack}}</span></td>
                    <td><span class="badge"  ng-class="{'bg-danger': data.kebersihan == 'NOT OK'}">{{data.kebersihan}}</span></td>
					 <td><span class="badge bg-default" >{{data.tanggal}}</span></td>
                  </tr>
                 
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
     
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
    version 1.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="">IT Helpdesk Regional</a>.</strong> Home Credit Indonesia.
  </footer>
</div>
<!-- ./wrapper -->
</body>