<?php
include('conn.php');
?>

<html>
<head>
  <title>Employee Management</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Employee Management</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="add.php">Add Employee</a></li>
    </ul>
  </div>
</nav>

                                      <!-- ADD PHP SCRIPT -->
<?php
 if(isset($_POST['submit'])){
    $empid = $_POST['empid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $address = $_POST['address'];
    $position = $_POST['position'];

    $condition = "select * from emp_details where EmpId = '$empid'";
    $result = mysql_query($condition);
    $rows = mysql_num_rows($result);
    if($rows == 0){
          $query = "insert into emp_details(EmpId, FirstName, LastName,Gender, Email, ContactNo, Address, Position)
          values('$empid','$fname','$lname','$gender','$email','$tel','$address','$position')";
          mysql_query($query);
          echo"<script>alert('Employee added');
                window.location='add.php'
	        </script>";
          }
    else{
    
          echo "<script>alert('Employee already exist');
         	window.location='add.php'
	        </script>";
         }
    }
?>

                            <!-- Add Form -->
                            

<form class="form-horizontal" action="" method="post">
  <div class="form-group">
    <label class="col-sm-3 control-label">Employee Id</label>
      <div class="col-sm-2">
         <input type="text" name="empid"class="form-control"required>
      </div>
  </div>

  <div class="form-group">
     <label class="col-sm-3 control-label">First Name</label>
        <div class="col-sm-4">
          <input type="text" name="fname" class="form-control"required>
        </div>
  </div>
				
  <div class="form-group">
      <label class="col-sm-3 control-label">Last Name</label>
        <div class="col-sm-4">
          <input type="text" name="lname"class="form-control"required>
        </div>
  </div>

  <div class="form-group">
      <label class="col-sm-3 control-label">Gender</label>
        <div class="col-sm-2">
            <select name="gender" class="form-control" required>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
        </div>
  </div>

  <div class="form-group">
      <label class="col-sm-3 control-label">Email</label>
         <div class="col-sm-4">
            <input type="email" name="email"class="form-control"required>
         </div>
  </div>

  <div class="form-group">
       <label class="col-sm-3 control-label">Contact No.</label>
          <div class="col-sm-3">
               <input type="number" name="tel" class="form-control"required>
          </div>
  </div>
				
  <div class="form-group">
      <label class="col-sm-3 control-label">City</label>
        <div class="col-sm-3">
            <input type = "text" name="address" class="form-control" required>
        </div>
  </div>

  <div class="form-group">
      <label class="col-sm-3 control-label">Position</label>
        <div class="col-sm-2">
            <select name="position" class="form-control" required>
              <option value="Developer">Developer</option>
              <option value="Manager">Manager</option>
              <option value="Supervisor">Supervisor</option>
            </select>
        </div>
  </div>

  <div class="form-group">
     <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
             <input type="submit" name="submit" class="btn btn-sm btn-primary" value="Submit">
        </div>
  </div>
</form>


</body>
</html>