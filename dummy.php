<?php
$_server="localhost";
$username="root";
$password="";
$database="zalego";
$conn=mysqli_connect($_server,$username,$password,$database);

$sql=mysqli_query($conn, "SELECT * FROM registrationdetails");
while ($fetchRecords=mysqli_fetch_array($sql)){
    echo $fetchRecords ['fullname'].$fetchRecords ['phonenumber'].$fetchRecords['emailaddress'].$fetchRecords['gender'].$fetchRecords['course']. '<br>';
}

?>





<tr>
									<td>1</td>
									<td>Sheila Wambui</td>
									<td>0789456732</td>
									<td>sheilawambui23@gmail.com</td>
									<td>Female</td>
									<td>web development</td>
									<td>20th August 2022</td>
									<td>
										<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
										<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Collins Muthie</td>
									<td>0775890456</td>
									<td>muthiecollins453@gmail.com</td>
									<td>Male</td>
									<td>web development</td>
									<td>24th August 2022</td>
									<td>
										<a href="#" class="btn btn-primary btn-sm">
											<i class="fa fa-edit"></i>
										</a>
										<a href="#" class="btn btn-info btn-sm">
											<i class="fa fa-eye"></i>
										</a>
										<a href="#" class="btn btn-danger btn-sm">
											<i class="fa fa-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Agnes Wanjiku</td>
									<td>0789456732</td>
									<td>agneswanjiku43@gmail.com</td>
									<td>Female</td>
									<td>web development</td>
									<td>20th August 2022</td>
									<td>
										<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
										<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Davis Mutuku</td>
									<td>0789456732</td>
									<td>davismutuku903@gmail.com</td>
									<td>Male</td>
									<td>Cyber Security</td>
									<td>20th August 2022</td>
									<td>
										<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
										<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Sheila Wambui</td>
									<td>0789456732</td>
									<td>sheilawambui23@gmail.com</td>
									<td>Female</td>
									<td>web development</td>
									<td>20th August 2022</td>
									<td>
										<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
										<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
									</td>
								</tr>