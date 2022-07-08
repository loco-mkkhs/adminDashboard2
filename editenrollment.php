<?php require_once('logics/dbconnection.php');
$querystudent = mysqli_query($conn, "SELECT * FROM registrationdetails WHERE no='".$_GET['id']."'");
while($fetctregistrationdetails = mysqli_fetch_array($querystudent))
{
    $fullname = $fetctregistrationdetails['fullname'];
    $phonenumber = $fetctregistrationdetails['phonenumber'];
    $emailaddress = $fetctregistrationdetails['emailaddress'];
    $gender = $fetctregistrationdetails['gender'];
    $course = $fetctregistrationdetails['course'];
}

// updating user records
if(isset($_POST['updaterecords']))
{
    // fetch form data
    $id= $_POST['no'];
    $fullname= $_POST['fullname'];
    $phonenumber= $_POST['phonenumber'];
    $email= $_POST['emailaddress'];
    $gender= $_POST['gender'];
    $course= $_POST['course'];
    // perform the sql query

    $updaterecords = mysqli_query ($conn,"UPDATE registrationdetails set fullname='$fullname',phonenumber='$phonenumber',emailaddress='$email',gender='$gender',course='$course' WHERE no='".$_GET['id']."' ");

    if($updaterecords)
    {
        $message="Records were updated successfully";
    }
    else{
        $message="Error occured whiel updating user details";
    }


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
                        <div class="card-body">
                            <form action="editenrollment.php" method="POST"></form>
                                <div class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="Full Name:" class="form label">Full Name:</label>
                                        <input type="text" name="fullname" value="<?php echo $fullname?>" class="form-control">

                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="Phone Number" class="form-label">Phone Number:</label>
                                        <input type="tel" name="phonenumber" value="<?php echo $phonenumber?>"  class="form-control">

                                    </div>
                                </div>
                                <div class="row">
                                    
                                    
                                    <div class="mb-3 col-lg-6">
                                        <label for="Email" class="form-label">Email:</label>
                                        <input type="email" name="emailaddress" value="<?php echo $emailaddress?>"  class="form-control">

                                        

                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="" class="form label">Gender:</label>
                                        <select class="form-control" name="gender">
                                           <option><?php echo $gender?></option>
                                           <option value="">MALE</option>
                                           <option value="female">FEMALE</option>
                                        </select>

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="mb-3 col-lg-12">
                                        <label for="" class="form label">Course Name:</label>
                                        <select class="form-control" name="course">
                                            <option><?php echo $course?></option>
                                            <option value="Software Development">Software Development</option>
                                            <option value="Cyber Security">Cyber Security</option>
                                            <option value="Robotics">Robotics</option>
                                            <option value="Web Development">Web Development</option>
                                            <option value="Data Science">Data Science</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-lg-6">
                                        <button type="submit" name="updaterecords" class="btn btn-primary">Update records</button>
                                    </div>
                                </div>
                                <br>
                            </form>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>		
	</div>	
	<?php require_once('includes/scripts.php')?>	
</body>
</html>