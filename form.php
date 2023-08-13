<?php
include('validate.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Form Validation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--bootstrap4 library linked-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!--custom style-->
  <style type="text/css">
   .registration-form{
      background: #f7f7f7;
      padding: 20px;
      border: 1px solid orange;
      margin: 50px 0px;
    }
    .err-msg{
      color:red;
    }
    .registration-form form{
      border: 1px solid #e8e8e8;
      padding: 10px;
      background: #f3f3f3;
    }
  </style>
</head>
<body>
<div class="container-fluid">
 <div class="row">
   <div class="col-sm-4">
   </div>
   <div class="col-sm-4">
    <div class="registration-form">
      <h4 class="text-center">Create a New Account</h4>
      
<p class="text-success text-center"><?php echo $valid; ?></p> <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
           <label for="name">Name:</label>
           <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo $set_name;?>">
           <p class="err-msg">
    <?php if($fnameErr!=1){ echo $fnameErr; }?>
           </p>
        </div>
        <div class="form-group">
            <label for="phoneNumber">Phone Number:</label>
            <input type="text" class="form-control" placeholder="Enter Phone Number" name="phoneNumber" value="<?php echo $set_phoneNumber;?>">
            <p class="err-msg"> 
    <?php if($pNumberErr!=1){ echo $pNumberErr; } ?>
            </p>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $set_email;?>">
            <p class="err-msg">
    <?php if($emailErr!=1){ echo $emailErr; } ?>
            </p>
         </div>
         <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject" value="<?php echo $set_subject;?>">
            <p class="err-msg">
    <?php if($subErr!=1){ echo $subErr; } ?>
            </p>
         </div>
         <div class="form-group">
            <label for="message">Message:</label>
            <input type="text" class="form-control" id="message" placeholder="Enter message" name="message" value="<?php echo $set_message;?>">
            <p class="err-msg">
    <?php if($msgErr!=1){ echo $msgErr; } ?>
            </p>
         </div>
      <button type="submit" class="btn btn-danger" value="Submit" name="submit">Submit</button>
      </form>
    </div>
   </div>
   <div class="col-sm-4">
   </div>
 </div>
</div>
</body>
</html>
<?php
include('sql.php');
include('sendmail.php');
?>