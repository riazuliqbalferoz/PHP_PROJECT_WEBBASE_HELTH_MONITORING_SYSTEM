<?php
session_start();


include_once('include/header.php');
include_once('include/admin-sidebar.php');

?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-user-md"></i> Search document</h1>
      
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Document</li>
      
    </ul>
  </div>

  <div class="row">
    
    <div class="col-md-6 m-auto">
      <div class="tile">
       
        <div class="tile-body">
          <form action="view_user_information.php" method="post" class="form-horizontal" enctype="multipart/form-data">

           

         
        
         
        
          
          
          <div class="form-group btn-container">
             <input type="text" name="email" id="" class="form-control"  autocomplete="Write User Mail Here :" placeholder="search ">
            
          </div>
            
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit" name="submit" value="search"><i class="fa fa-search "></i>Search User Document</button>
          </div>

        
            
        </form>
      </div>
    </div>
    
  </div>


<?php

include('include/conn.php');
include_once('sql.php');

if(isset($_POST['submit'])){

  $email = $_POST['email'];


 



$result1 = mysqli_query($conn,"SELECT * FROM users Where email like'%$email%'");


if (mysqli_num_rows($result1) > 0) {
  
?>



<main class="app-content">
  
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>

          <tr>


					<td>Name</td>
                    <td>Mobile</td>
					<td>Email</td>
					<td>Address</td>
                    <td>Gender</td>
					<th align="center">Action</th>

          </tr>
              </thead>
              <tbody>
                <?php
					$i=0;
					while($row = mysqli_fetch_array($result1)) {
					?>
					                
				<tr>
                 
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["mobile"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                 
                  <td align="center">
                  <a href="delete.php ?id= <?php echo $row["email"]; ?>" class="btn btn-DENGER">EDIT</a>
                    <a href="delete.php ?id= <?php echo $row["email"]; ?>" class="btn btn-success">DELETE</a>
                  </td>
                </tr>
                <?php
					$i++;
					}
				 ?>
              </tbody>
            </table>

<?php
	}
	else{
	echo "No result found";
	}
?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
 
}
?>