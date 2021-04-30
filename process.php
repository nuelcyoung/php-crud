<?php
ob_start();
require_once("connection.php");
require_once("functions.php");
$error=array();
if(isset($_POST['login'])){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    if(empty($email)){
        array_push($error, "Email is Required");
    }
    if(empty($password)){
        array_push($error, "Password is Required");
    }
    if(empty($error)){
        $query = 'SELECT * FROM users WHERE email = "$email" AND password = "$password"';
        $run_query = mysqli_query($connection, $query);
        if(mysqli_num_rows($run_query) == 1){
            session_start();
            while($result = mysqli_fetch_assoc($run_query)){
                $user_id = $result['id'];
                $_SESSION['user'] = $user_id;
                die(header('Location: dashboard.php'));
            }
        }else{
            array_push($error,"Login Failed please check if your Email or Password is correct");
        }
    }
}
if(isset($_POST['forgot'])){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $myfile = file_get_contents("files/user.json"); 
    $json = json_decode($myfile, true);

    foreach ($json as &$val) {
        if($val['user_name'] == $user_name){
            $val['password'] = $password;
        }
            echo "Updated ". $user_name;
    }
    file_put_contents("files/user.json",json_encode($json));
}

if(isset($_POST['register'])){
    $email =   htmlspecialchars($_POST['email']);
    $fullname = htmlspecialchars($_POST['fullname']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //Data array to save
    $data_array=[
        'email' =>$email,
        'password' =>$password,
        'fullname' =>$fullname,
    ];
    $columns = implode(", ",array_keys($data));
$escaped_values = array_map(array($con, 'real_escape_string'),array_values($data));
$values  = implode("', '", $escaped_values);
$sql = "INSERT INTO `users`($columns) VALUES ('$values')";
$run_query = mysqli_query($connection, $query);
							if($run_query == true){
                                array_push($error, "Registered Successfully");
								die(header('Location: index.php'));
							}else{
                                array_push($error, "Registered Successfully");
							}

    
}
?>