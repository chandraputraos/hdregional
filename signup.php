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
                <a class="navbar-brand"  rel="tooltip"
                    title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
                    Home Credit Indonesia
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                        <form name="signupForm" class="form-horizontal" role="form">
                            <div class="card-header text-center">
                                <h4 align="center">Sign Up <small>It's free and always will be.</small></h3>

                            </div>
                            <div class="card-body">
                                <div class="input-group no-border input-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="now-ui-icons users_circle-08"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control input-lg" placeholder="User Name..."
                                        id="display_name" ng-model="signup.user_name" focus>
                                </div>
                                <div class="input-group no-border input-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="now-ui-icons users_single-02"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control input-lg" placeholder="Name..."
                                        name="user_namalengkap" ng-model="signup.user_namalengkap" >
                                </div>
                                <div class="input-group no-border input-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="now-ui-icons tech_controller-modern"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control input-sm" placeholder="Team..."
                                        ng-model="signup.user_team">
                                </div>
                                <div class="input-group no-border input-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="now-ui-icons ui-1_email-85"></i>
                                        </span>
                                    </div>
                                    <input type="email"  class="form-control input-sm" placeholder="Email..."
                                        name="user_email" ng-model="signup.user_email" focus>
                                    <span ng-show="signupForm.user_email.$error.user_email" class="help-inline">Invalid
                                        email address</span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="input-group no-border input-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="now-ui-icons objects_key-25"></i>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control input-sm"
                                                placeholder="Password..." name="user_password"
                                                ng-model="signup.user_password" required>
                                            <span class="errorMessage"
                                                data-ng-show="signupForm.user_password.$dirty && signupForm.user_password.$invalid">
                                                Enter Password.</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="input-group no-border input-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="now-ui-icons objects_key-25"></i>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control input-sm" name="confPassword"
                                                placeholder="Repeat..." ng-model="signup.confPassword"
                                                password-match="signup.user_password" required>
                                            <span class="errorMessage"
                                                data-ng-show="signupForm.confPassword.$dirty && signupForm.confPassword.$error.required">Enter
                                                confirm password</span>

                                            <span style="color:#F00" class="errorMessage"
                                                data-ng-show="signupForm.confPassword.$dirty && signupForm.confPassword.$error.passwordNoMatch && !signupForm.confPassword.$error.required"><i>Passwords
                                                do not match, please retype..</i></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                               <div class="row">


                    <div class="col-xs-12 col-md-6">
                        <a href="#/login" class="btn btn-success btn-round btn-lg btn-block">Log In</a></div>
                		<div class="col-xs-12 col-md-6">
                        <button type="submit" class="btn btn-info btn-block btn-round btn-lg" ng-click="signUp(signup)" data-ng-disabled="signupForm.$invalid">Save
                        </button>
                    </div>
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
                        <a href="http://10.56.45.133/hdreg">
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


