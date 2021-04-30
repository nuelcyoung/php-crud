<?php
require_once("layout/header.php");
require_once("functions.php");
require_once("courseprocess.php");
$query = " SELECT * FROM users WHERE id = '{$_SESSION['user']}'";
	$run_query = mysqli_query($connection, $query);
	if(mysqli_num_rows($run_query) == 1){
		while($result = mysqli_fetch_assoc($run_query)){
			$user_id = $result['id'];
			$user_fullname = ucwords($result['fullname']);
		}
	}
	?>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>-->
            </ul>
          </div>
        </nav>
		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
			  <a href="addcourse.php" class="btn btn-sm btn-outline-secondary">Add course</a>
              </div>
            </div>
          </div>
<div class="container">
<h1>Welcome <?php echo $user_fullname;?></h1>
        <p class="lead">you can perform CRUD Operations here</p>
		<div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th width="10%">#</th>
                  <th>Course</th>
				  <th width="20%">Action</th>
                </tr>
              </thead>
              <tbody>
			  <?php
			  $i=1;
			  $coursename = array();
			  $query1="SELECT c.coursename,c.id FROM `users` as u INNER JOIN course as c  ON c.user_id = u.id WHERE u.id='$user_id'";
			  $run_query1 = $connection->query($query1);
			  while($result1 = $run_query1->fetch_assoc()) { ?>
                <tr>
					<td> <?php echo $i++; ?></td>
					<td><?php echo $result1['coursename']; ?></td>
					  <td><a href="editcourse.php?id=<?php echo $result1['id']; ?>" class="btn btn-xs btn-primary">Edit</a>|<a href="deletecourse.php?id=<?php echo $result1['id']; ?>" class="btn btn-xs btn-danger">Delete</a></td>
                </tr>
				<?php } ?>
				</tbody>
            </table>
		</div>
</div>
</main>
</div>
    </div
<?php require_once("layout/footer.php");?>
</body>