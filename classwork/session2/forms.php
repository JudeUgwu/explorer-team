<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="forms.css">
  <title>HTML5 FORMS</title>
  <style>
    .text-danger{
      color:red;
    }
  </style>
</head>
<body>
  
   <div class="wrapper">
       <h1>Working with HTML5 Forms</h1>
       <form  action="processing.php" method="POST">
           <div class="form-row">
             <label for="fullname">Fullname</label>
             <input name="fullname"   class="form-control"   type="text" id="fullname" placeholder="Enter Fullname">
             <span class="text-danger" id="error_fullname"></span>
           </div>
           <div class="form-row">
             <label for="email">Email</label>
             <input name="email"  class="form-control"    type="email" id="email" placeholder="Enter email">
             <span class="text-danger" id="error_email"></span>
           </div>
           <div class="form-row">
             <label for="password">Password</label>
             <input name="password"  class="form-control"   type="password" id="password" placeholder="Enter password"> 
             <span class="text-danger" id="error_password"></span>
            
             <input type="hidden" name="country" value="nigeria">
           <div class="form-row">
             <input name="register" type="submit" value="Register">
           </div>

       </form>
         
   </div>

   <script src="form.js"></script>
</body>
</html>