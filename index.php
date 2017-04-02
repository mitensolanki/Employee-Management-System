<?php
include('conn.php');
         $search = $_POST['search'];
         if(isset($_POST['searchquery'])){
         $sql = "select * from emp_details where FirstName like '%$search%'";
         }
         else{
         $sql = "select * from emp_details";
         }
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
    </ul><br>

   <form class="form-horizontal" action="" method="post">
    <div class="form-group">
      <div class="col-sm-3"> 
         <input type="text" name="search" class="form-control"required>
      </div>

      <div class="col-sm-3">
           <input type="submit" name="searchquery" class="btn btn-sm btn-primary" value="Search">
      </div>
     </div>
   </form>

  </div>
</nav>

                                      <!-- Employee Details -->

<div class="container">
  <h2>Employee Details</h2><br><br>

  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Id</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Contact No</th>
        <th>City</th>
        <th>Position</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php
         $result = mysql_query($sql);
         $number = 1;
         while($fet = mysql_fetch_array($result)) {
            echo"<td>".$number."</td>";
            echo"<td>".$fet['EmpId']."</td>";
            echo"<td>".$fet['FirstName']."</td>";
            echo"<td>".$fet['LastName']."</td>";
            echo"<td>".$fet['Gender']."</td>";
            echo"<td>".$fet['Email']."</td>";
            echo"<td>".$fet['ContactNo']."</td>";
            echo"<td>".$fet['Address']."</td>";
            echo"<td>".$fet['Position']."</td>";
            echo '<td>
                  <a href="edit.php?id='.$fet['EmpId'].'" class="btn btn-primary btn-sm" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                  <a href="delete.php?id='.$fet['EmpId'].'" onclick="return confirm(\'Are you sure you want to delete '.$fet['FirstName'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                  </td>';
            echo"</tr>";
         $number++;
           }
        ?>

    </tbody>
  </table>
</div>


</body>
</html>