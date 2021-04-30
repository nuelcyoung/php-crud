<?php
require_once("layout/header.php");
require_once("courseprocess.php");
?>
<body>
<div class="container-fluid">
<div class="col-sm-6 col-md-4 col-md-offset-4 text-center">
<?php echo display_error();?>
<h1>Add Course</h1>
    <form class='form-signin' action='' method='post'>
      <label for="inputCourse" class="sr-only">Course name</label>
      <input type="text" name="coursename" id="inputCourse" class="form-control" placeholder="Course name">
      <input type="submit" name="add_course" value="Add" class="btn btn-lg btn-primary btn-block" />
    </form>
    </div>
    </div>
    </body>