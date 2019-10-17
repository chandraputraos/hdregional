
<link href="assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="dropdown button-dropdown">
        <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
          <span class="button-bar"></span>
          <span class="button-bar"></span>
          <span class="button-bar"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-header">Dropdown header</a>
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">One more separated link</a>
        </div>
      </div>
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://homecredit.co.id" rel="tooltip"
          title="IT Operation Center" data-placement="bottom" target="_blank">
          Home Credit Indonesia
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation"
        data-nav-image="assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/chandraputraos/itoc-tbs.git">Github</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://helpdesk.homecredit.co.id/servicedesk/customer/portals">Have an issue?</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(assets/img/login.jpg)"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form class="form" method="" action="">
              <div class="card-header text-center">
                <h3>IT HELPDESK REGIONAL</h3>
                <div class="logo-container">
                  <img src="img/hci-small.png" alt="">
                </div>
              </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control input-lg" placeholder="Email or User Name ..." name="user_email"
                    ng-model="login.user_email" required focus>
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control input-lg" placeholder="Password..."
                    ng-model="login.user_password" required>
                </div>
              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn-danger btn-primary btn-round btn-lg btn-block"
                  ng-click="sa_login(login)" data-ng-disabled="login_app.$invalid">Enter...!</button>
                <div class="pull-left">
                  <h6>
                    <a href="#/signup" class="link">Create Account</a>
                  </h6>
                </div>
                <div class="pull-right">
                  <h6>
                    <a href="#/login" class="link">Need Help?</a>
                  </h6>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class=" container ">
      <nav>
        <ul>
          <li>
            <a href="#">
              Creative Tim
            </a>
          </li>


        </ul>
      </nav>
      <div class="copyright" id="copyright">
                &copy;
                <script>
                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                </script>Dev by
                <a href="http://10.56.45.133/hdreg/" target="_blank">IT Operation Center</a> Home Credit
                <a  target="_blank">Indonesia</a>.
            </div>
    </div>
  </footer>
  </div>
</body>