 <?php

  function myWelcomeMessage($name, $age, $class)
  {
    echo "Welcome $name! <br/> We are very happy you are here<br/>";
    echo "The you provided  is $age <br/> ";
    echo "You are in $class <br/>";
  }
  myWelcomeMessage("Oluwadamilola", "12", "SSS2");

  function myTryArray($content)
  {
    return "The content. <br/> The properties of the is {$content['prop1']}";
  }
  $formatted = myTryArray(['prop1' => 'additon']);
  echo $formatted;
  if (isset($_POST['SUBMIT'])) {

    if (empty($_POST['email'])) {
      echo 'AN email is required';
    } else {
      if (!filter($email, FILTER_VALIDATE_EMAIL)) {
        $error['email='] = 'Email mustt be valid';
      }
    }

    echo $_POST['surname'];
    echo $_POST['names'];
    echo $_POST['email'];
  }

  $errors = array(['email' => "", 'names' => ""]);

  // errror

  ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
 </head>

 <body>
   <div class="row">
     <div class="card">
       <div class="col-md-6">
         <form action="sample.php" method="POST">
           <div class="card-header ">
             <h4>Submit Your Details</h4>
           </div>
           <div class="card-body">

             <div class="form-group">
               <label for="">Surname</label><br />
               <input type="text" name="surname" class="form-control" placeholder="Surname"><br />
             </div>


             <div class="form-group">
               <label for="">Other Name</label><br />
               <input type="text" name="names" class="form-control" placeholder="Other Name"><br />
             </div>

             <div class="form-group">
               <label for="">Email Address</label><br />
               <input type="email" name="email" class="form-control" placeholder="opeoluwad@gmail.com"><br />
             </div>

             <div class="form-group">
               <label for="">Password</label><br />
               <input type="password" class="form-control" name="password" placeholder="*******"><br />
             </div>
           </div>

           <div class="card-footer md-4">
             <div style="float:center">
               <div class="form-group">
                 <button type="submit" name="SUBMIT" class="btn btn-primary btn-block">Submit</button>
               </div>
             </div>
           </div>
         </form>
       </div>
     </div>
   </div>
   <div class="card">
     <div class="col-md-6">
       <div class="card-header">
         <h4>Cart</h4>
       </div>
       <div class="card-body">
         p
       </div>
     </div>
   </div>
   </div>

   <script src="js/bootstrap.bundle.min.js"></script>
 </body>

 </html>