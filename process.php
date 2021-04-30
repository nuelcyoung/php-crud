<?php
ob_start();
require_once("connection.php");
require_once("functions.php");
$error=array();
if(isset($_POST['login'])){
    $email = htmlspecialchar($_POST['email']);
    $password = htmlspecialchar($_POST['password']);
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
    $first_name =   $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_name = $_POST['user_name'];
    $dob =  $_POST['dob'];
    $password = $_POST['password'];
    //Data array to save
    $data_array=[
        'first_name' =>$first_name,
        'last_name' =>$last_name,
        'user_name' =>$user_name,
        'dob'=>$dob,
        'password'=>$password
    ];
//     $myfile = fopen("files/user.json", "w");
// fwrite($myfile, json_encode($data_array));
// fclose($myfile);
    file_put_contents("files/user.json",json_encode($data_array));
    echo $first_name . $last_name . $dob . $user_name . $password;
    
}
?>