<?php require_once('logics/dbconnection.php');
$querystudent = mysqli_query($conn, "SELECT * FROM registrationdetails WHERE no='".$_GET['id']."'");
while($fetctregistrationdetails = mysqli_fetch_array($querystudent))
{
    $fullname = $fetctregistrationdetails['fullname'];
}
?>


<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>


<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>
	
	<div class="sidebar">
		<?php require_once('includes/sidebar.php')?>
	</div>
	<div class="main-content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4>Edit Student <?php echo $fullname?> </h4>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
		
	</div>
	
	<?php require_once('includes/scripts.php')?>
	
</body>
</html>