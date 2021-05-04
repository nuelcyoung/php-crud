<?php
require_once("connection.php");
require_once("functions.php");
$error=array();
//Insert Query
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
                    $_SESSION["error"]='Added Successfully';
                    die(header('Location: dashboard.php'));
                }else{
                    $_SESSION["error"] = 'Error Adding Course';
                    }


        }
}
//Edit Query
if(isset($_POST['edit_course'])){
    $user_id=$_SESSION['user'];
    $coursename = htmlspecialchars($_POST['coursename']);
    $id=$_POST['id'];
    if(empty($coursename)){
        array_push($error, "Course name is Required");
    }
        if(empty($error)){
            //Data array to save
            $data_array=[
                'coursename' =>$coursename,
            ];
            //implode arrays the insert
                    $columns = implode(", ",array_keys($data_array));
                $escaped_values = array_map(array($connection, 'real_escape_string'),array_values($data_array));
                $values  = implode("', '", $escaped_values);
                $sql = "UPDATE course SET $columns='$values' where id='$id'";
                $run_query = mysqli_query($connection, $sql);
							if($run_query == true){
                                $_SESSION["error"]='Added Successfully';
								die(header('Location: dashboard.php'));
							}else{
                                $_SESSION["error"] = 'Error updating Course';
							    }

        }
}
//Delete Query
if(isset($_GET['delete'])){
    $id = $_GET['id'];
    $query="delete from course where id='$id'";
    $run_query = $connection->query($query);
    if($run_query == true){
        $_SESSION["error"]='Deleted Successfully';
        die(header('Location: dashboard.php'));
    }else{
        $_SESSION["error"] = 'Error Deleting Course';
        }


}

?>