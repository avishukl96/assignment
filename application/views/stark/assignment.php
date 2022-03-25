<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stark Assignments</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
   
<h2 class="text-center">Stark Assignment</h2>
<br>
<a class="btn btn-primary pull-right" href="<?php echo site_url('stark/add/'); ?>">Add Details</a><br>
 <table class="table table-condensed">
    <thead>
      <tr>
        <th>Name</th>
        <th>Salary</th>
        <th>Department</th>
        <th>Hobbies</th>
        <th>Gender</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     
        <?php  foreach ($Records as $key => $value) { ?>
              <tr>
                <td><?php echo $value['name']; ?></td>
                 <td><?php echo $value['salary'];?></td>
                 <td><?php echo $value['department'];?></td>
                 <td><?php echo $value['hobbies'];?></td>
                 <td><?php echo $value['gender'];?></td>
                 <td><a href="<?php echo site_url('stark/edit/'.$value["id"]); ?>" class="btn btn-primary">Edit</a> &nbsp; 
                    <a href="<?php echo site_url('stark/delete/'.$value["id"]); ?>" class="btn btn-danger">Delete</a>
                 </td>
              </tr>
        <?php } ?> 
      </tbody>
    </table>




     
     <br><br>

     <h1>2nd Highest salary</h1>
     <h2> <?php     echo $second_highest['salary']; ?></h2>
     

       <h1>5th Highest salary</h1>
     <h2><?php echo $fifth_highest['salary']; ?></h2>
     

            <h1>Avg</h1>
          

  <table class="table table-condensed">
    <thead>
      <tr>

         <th>Name</th>
        <th>Salary</th>
      </tr>
    </thead>
    <tbody>
          <?php  foreach ($avg as $key => $value) { ?>
              <tr>
                <td><?php echo $value['department']; ?></td>
                 <td><?php echo $value['salary'];?></td>
                 
               
              </tr>
        <?php } ?> 
     
    </tbody>
  </table>



  </div>


</body>
</html>
