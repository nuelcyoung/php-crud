<?php
require_once("connection.php");
require_once("functions.php");
$error=array();
if(isset($_POST['add_course'])){
    $user_id=$_SESSION['user'];
    $coursename = htmlspecialchars($_POST['coursename']);
    
    if(empty($coursename)){
        array_push($error, "Course name is Required");
    }
        if(empty($error)){
            //Data array to save
            $data_array=[
                'coursename' =>$coursename,
                'user_id'=>$user_id
            ];
            //implode arrays the insert
                    $columns = implode(", ",array_keys($data_array));
                $escaped_values = array_map(array($connection, 'real_escape_string'),array_values($data_array));
                $values  = implode("', '", $escaped_values);
                $sql = "INSERT INTO course($columns) VALUES ('$values')";
                $run_query = mysqli_query($connection, $sql);
							if($run_query == true){
                                array_push($error, "Added Successfully");
								die(header('Location: dashboard.php'));
							}else{
                                array_push($error, "Error adding Course");
							    }

        }
}

?>