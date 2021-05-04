<?php
require_once("layout/header.php");
require_once("courseprocess.php");
$id = $_GET['id'];
$query="select coursename from course where id='$id'";
$run_query1 = $connection->query($query);
while($result1 = $run_query1->fetch_array()) {
    $coursename=$result1['coursename'];
}
?>

<body>
<div class="container-fluid">
<div class="col-sm-6 col-md-4 col-md-offset-4 text-center">
<?php echo display_error();?>
<h1>Add Course</h1>
    <form class='form-signin' action='' method='post'>
      <input type="hidden" name="id" value="<?php echo $id;?>">
      <label for="inputCourse" class="sr-only">Course name</label>
      <input type="text" name="coursename" value="<?php echo $coursename;?>" id="inputCourse" class="form-control" placeholder="Course name">
      <input type="submit" name="edit_course" value="Add" class="btn btn-lg btn-primary btn-block" />
    </form>
    </div>
    </div>
    </body>