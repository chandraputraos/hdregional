<?php
$app->get('/session', function()
{
    $data_base              = new dataRoot();
    $session                = $data_base->getSession();
    $response["user_id"]    = $session['user_id'];
    $response["user_email"] = $session['user_email'];
    $response["user_name"]  = $session['user_name'];
	$response["user_team"]  = $session['user_team'];
	$response["user_namalengkap"]  = $session['user_namalengkap'];
	$response["user_role"]  = $session['user_role'];
	

	
    response_out(200, $session);
});
$app->post('/login', function() use ($app)
{
    require_once 'password_hashing.php';
    $data_result = json_decode($app->request->getBody());
    verify_parameters(array(
        'user_email',
        'user_password'
    ), $data_result->customer);
    $response      = array();
    $data_base     = new dataRoot();
    $user_password = $data_result->customer->user_password;
    $user_email    = $data_result->customer->user_email;
    $user          = $data_base->getOneRecord("select user_id, user_name, user_namalengkap, user_password, user_email,user_team, user_role ,created from user_data where user_name='$user_email' or user_email='$user_email'");
    if ($user != NULL) {
        if (password_hashing::compare_password($user['user_password'], $user_password)) {
            $response['status']     = "success";
            $response['message']    = 'You have successfully logged in.';
            $response['user_name']  = $user['user_name'];
            $response['user_id']    = $user['user_id'];
            $response['user_email'] = $user['user_email'];
			$response["user_team"]  = $user['user_team'];
			$response["user_namalengkap"]  = $user['user_namalengkap'];
			$response["user_role"]  = $user['user_role'];
			 
            $response['createdAt']  = $user['created'];
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['user_id']    = $user['user_id'];
            $_SESSION['user_email'] = $user['user_email'];
            $_SESSION['user_name']  = $user['user_name'];
			 $_SESSION['user_team']  = $user['user_team'];
			 $_SESSION['user_namalengkap']  = $user['user_namalengkap'];
			 $_SESSION['user_role']  = $user['user_role'];
	
			
        } else {
            $response['status']  = "error";
            $response['message'] = 'Login Failed Due to Incorrect Credentials...';
        }
    } else {
        $response['status']  = "error";
        $response['message'] = 'No such user exists..';
    }
    response_out(200, $response);
});
$app->post('/signUp', function() use ($app)
{
    $response    = array();
    $data_result = json_decode($app->request->getBody());
    verify_parameters(array(
        'user_email',
        'user_name',
        'user_password'
    ), $data_result->customer);
    require_once 'password_hashing.php';
    $data_base     = new dataRoot();
    $user_namalengkap  = $data_result->customer->user_namalengkap;
    $user_name     = $data_result->customer->user_name;
    $user_email    = $data_result->customer->user_email;
    $user_team  = $data_result->customer->user_team;
	 $user_password = $data_result->customer->user_password;
	
	
    
    $isUserExists  = $data_base->getOneRecord("select 1 from user_data where user_namalengkap='$user_namalengkap' or user_email='$user_email'");
    if (!$isUserExists) {
        $data_result->customer->user_password = password_hashing::hash($user_password);
        $tabble_name                          = "user_data";
        $column_names                         = array(
            'user_namalengkap',
            'user_name',
            'user_email',
            'user_password',
            'user_team',
			
		
			
			
        );
        $result = $data_base->insertIntoTable($data_result->customer, $column_names, $tabble_name);
        if ($result != NULL) {
            $response["status"]  = "success";
            $response["message"] = "Your account has been created successfully...";
            $response["user_id"] = $result;
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['user_id']    = $response["user_id"];
            $_SESSION['user_namalengkap'] = $user_namalengkap;
            $_SESSION['user_name']  = $user_name;
            $_SESSION['user_email'] = $user_email;
			$_SESSION['user_team'] = $user_team;
			
			
            response_out(200, $response);
        } else {
            $response["status"]  = "error";
            $response["message"] = "Failed to create account. Please try again...";
            response_out(201, $response);
        }
    } else {
        $response["status"]  = "error";
        $response["message"] = "The email address or Team you have entered is already registered...";
        response_out(201, $response);
    }
});
$app->get('/logout', function()
{
    $data_base           = new dataRoot();
    $session             = $data_base->destroySession();
    $response["status"]  = "info";
    $response["message"] = "You have successfully logged out!";
    response_out(200, $response);
});
?>