<!DOCTYPE html>
<html lang="en">
    
 <head>
  <title>Final Project</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/fp.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">       
    
 </head>
    
    
 <body>
  <header>
      
    <h1><a href="template.html"><img src="images/pumpkinpatch.png"></a></h1>
      
    <nav class="topnav" id="myTopnav">
         
     <a href="template.html">Home</a>
     <a href="pricing.html">Pricing</a>
     <a href="reviews.html">Reviews</a>
     <a href="products.html">Products we use</a>
     <a href="contactform.php" class="active">Contact</a>
     <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        
         
    </nav>
  </header>
     
   <div class="wrapper">
       
    <main class="wrapper">
        <center><h2 class="subheader">We look forward to hearing from you!</h2></center>
        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "srmckibbon@live.com";  //place your/your client's email address here
        $toName = "Mari"; //place your client's name here
        $website = "Mari's Little Pumpkin Patch";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
       
      
      
     <footer>
      <p><small>&copy; 2021 by <a href="contactform.php">Mari's Little Pumpkin Patch</a>, All Rights 
          Reserved ~ <a href="https://validator.w3.org/check/referer" target="_blank">Valid 
          HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer"
                        target="_blank">Valid CSS</a></small></p>
         

         
         <a href="#" class="fa fa-facebook"></a>
         <a href="#" class="fa fa-twitter"></a>
         <a href="#" class="fa fa-instagram"></a>
     </footer>  
    </main>
   </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>