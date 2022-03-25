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
 <h2>Add Details</h2>
  <form action="<?php echo site_url('stark/insert/');?>" id="add_form" method="post">

    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>

     <div class="form-group">
      <label for="email">Salary:</label>
      <input type="text" class="form-control" id="salary" placeholder="Enter Salary" name="salary">
    </div>

      <div class="form-group">
        <label for="sel1">Department:</label>
        <select class="form-control" id="dept_id" name="dept_id">
         <?php foreach ($department as $key => $value) {  ?>
              <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?> </option>
          <?php } ?>
        </select>
      </div>

       <div class="form-group">
              <label for="email">hobbies:</label>&nbsp;
                <input type="checkbox"  name="hobbies[]" value="Reading" > &nbsp;<label>Reading</label> &nbsp;
                <input type="checkbox"  name="hobbies[]" value="Cricket" >&nbsp;<label>Cricket</label> &nbsp;
                <input type="checkbox"  name="hobbies[]" value="Surfing" >&nbsp;<label>Surfing</label> &nbsp;
                <input type="checkbox"  name="hobbies[]" value="Watching movies" >&nbsp;<label>Watching movies</label>
      </div>
      <select class="form-control" id="gender" name="gender">
              <option id="M">Male </option>
              <option id="F">Female </option>
      </select>
      <br>
     
      <button id="form_submit" type="submit" class="btn btn-default">Submit</button>
  </form>



 
  </div>
  <style>
    .error{color: red;}
  </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

  <script type="text/javascript">
    $(document).on('click','#form_submit',function(e){
      //e.preventDefault();
    })

$(document).ready(function(){
    $('#add_form').validate({
            rules: {
               // parent_id: "required",
                name: "required",
                dept_id: "required",
                salary: {
                      required: true,
                      digits: true
                    }
                  
                 
            },
            messages: {
               //  parent_id: "required",
                name: "required",
                dept_id: "required",
                 salary: {
                      required:'required',
                      digits: 'Only Numbers are allowed'
                    }
                 
            },
            submitHandler: function(form) {
               // form.preventDefault()
              form.submit();

                /* var formData = $('#structure_form').serialize();
                //console.log(formData);return false;
                $.ajax({
                    type : 'POST',
                    url : "<?php echo site_url('indexs/setData'); ?>",
                    data : formData,
                    dataType: "Json",
                     success: function (response) {   

                        $('.alert').hide().show();
                        $('#stru-parent').html(' ').html(response['parent_option']);

                            $('#structure_form').trigger("reset");
                            $('.note-editable').text('');
                           // console.log(response);
                             $('#nestable1').html(' ').html(response['setData']);
                          
                            },

                })*/

                console.log('form');return false;
              //  form.submit();
            }
    
            // any other options and/or rules
        });
});

    
  </script>


</body>
</html>
