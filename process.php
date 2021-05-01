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
        $query = "SELECT * FROM users WHERE email = '$email'";
        $run_query = mysqli_query($connection, $query);
        if($run_query==true){
            session_start();
            while($result = mysqli_fetch_assoc($run_query)){
                //check if password is correct
                $passwordcorrect = password_verify($password, $result["password"]);
                if($passwordcorrect==true){
                    $user_id = $result["id"];
                    $_SESSION["user"] = $user_id;
                    die(header("Location: dashboard.php"));
                }else{
                    array_push($error,"Please check if your Email Password is correct");
                }
                
            }
        }else{
            array_push($error,"Login Failed please check if your Email or Password is correct");
        }
    }
}
if(isset($_POST['forgot'])){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    if(empty($email)){
        array_push($error, "Email is Required");
    }
    if(empty($password)){
        array_push($error, "Password is Required");
    }
    if(empty($error)){
        $query = "SELECT * FROM users WHERE email = '$email'";
        $run_query = mysqli_query($connection, $query);
        if(mysqli_num_rows($run_query)==1){
                //check if password is correct
                $passwordhash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $data_array=[
                    'password' =>$passwordhash,
                ];
                //implode arrays the insert
                        $columns = implode(", ",array_keys($data_array));
                    $escaped_values = array_map(array($connection, 'real_escape_string'),array_values($data_array));
                    $values  = implode("', '", $escaped_values);
                    $sql = "UPDATE users SET $columns='$values' where email='$email'";
                    $run_query = mysqli_query($connection, $sql);
                                if($run_query == true){
                                    array_push($error, "Password Successfully updated");
                                    die(header('Location: index.php'));
                                }else{
                                    array_push($error, "Error updating password");
                                    }
        }else{
            array_push($error,"Email does not exist");
        }
    }
}

if(isset($_POST['register'])){
    $email = htmlspecialchars($_POST['email']);
    $fullname = htmlspecialchars($_POST['fullname']);
    $password = $_POST['password'];
    
    if(empty($email)){
        array_push($error, "Email is Required");
    }
    if(empty($password)){
        array_push($error, "Password is Required");
    }
    if(empty($fullname)){
        array_push($error, "Fullname is Required");
    }
        if(empty($error)){
            $hashedpassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            //Data array to save
            $data_array=[
                'email' =>$email,
                'password' =>$hashedpassword,
                'fullname' =>$fullname,
            ];
            //implode arrays the insert
                    $columns = implode(", ",array_keys($data_array));
                $escaped_values = array_map(array($connection, 'real_escape_string'),array_values($data_array));
                $values  = implode("', '", $escaped_values);
                $sql = "INSERT INTO users($columns) VALUES ('$values')";
                $run_query = mysqli_query($connection, $sql);
							if($run_query == true){
                                array_push($error, "Registered Successfully");
								die(header('Location: index.php'));
							}else{
                                array_push($error, "Registered Successfully");
							    }

        }
}
?>