
<?php
function display_error() {
	global $error;
	if (count($error) > 0){
        echo '<div class="alert alert-danger">
        <strong>';
			foreach ($error as $error){
				echo $error .'<br>';
			}
		echo '</strong></div>';
		
	}
}
?>