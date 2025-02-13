<?php
    $EMAIL = $_REQUEST['EMAIL'];
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Organ Donation Sytem</title>
  <!-- Icon needed -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
</head>

<body>

  <header>
   <a href="#" class="brand">Organ Donation</a>
                                          
      <div class="navigation-items">
        <a href="#">Home</a>
        <a href="#">Our Vision</a>
        <a href="available_to_donate.php?EMAIL=<?php echo $EMAIL?>">Donate Organ</a>
        <a href="FAQ.php">FAQ's</a>
        <a href="#">Contact</a>
      </div>
    
  </header>

  <section class="home">
  
  <img class="image-slide active" src="https://www.kokilabenhospital.com/blog/wp-content/uploads/2020/08/World-Organ-Donation-Day-Blog-.png" alt="Image Description">

    <div class="content active">
       <h1 style="color: black">Welcome! <br>Feel Free to Donate</h1>
     
       <div class="center">
          <div class="btn-1">
            <a href="index.php"><span>Log Out</span></a>
          </div>
       </div>

    </div>
   
    <div class="media-icons">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
    </div>

  <style>
  /*Login And Sign Up Button Style Start*/
    /*Login And Sign Up Button Style Start*/
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #FFF5EE; /* Light peach background */
}

a {
    text-decoration: none;
    color: inherit;
}

/* Header Styles */
header {
    background-color: #333; /* Dark background for header */
    padding: 15px 0;
    text-align: center;
}

.brand {
    color: red;
    font-size: 24px;
    font-weight: bold;
}

.navigation-items {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navigation-items a {
    color: yellow;
    padding: 10px 15px;
    transition: color 0.3s;
}

.navigation-items a:hover {
    color: yellow;
}

/* Home Section Styles */
.home {
    position: relative;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.image-slide {
    position: absolute;
    top:-12%;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: contain; /* Adjusted for image */
}


.content {
    z-index: 1;
    color: #fff;
    position: absolute;
    top: 55%;
    left: 15%; /* Adjust this value as needed */
    transform: translate(-50%, -50%);
}

.content h1 {
    font-size: 3em;
    bottom: -80px; 
    margin-bottom: 10px;
}

.center {
    display: left;
    justify-content: left;
}
.btn-1 {
    position: absolute;
    /* Adjust this value as needed */
    left: 30%;
    transform: translateX(-50%);
}

.btn-1 a {
    padding: 10px 20px;
    background-color: #ff4500;
    color: #fff;
    border: 2px solid #ff4500;
    border-radius: 5px;
    font-size: 1.2em;
    text-transform: uppercase;
    transition: all 0.3s;
}

.btn-1 a:hover {
    background-color: transparent;
    color: #ff4500;
}

/* Media Icons */


    /*Login And Sign Up Button Style End*/

    </style>
    </section>


<section>

    <section class="container">
      <div class="card">
        <div class="card-image card-1"> </div>  
        
        <div class="card-text card_1">
        
          <h2>Request for Organ</h2>
          <div class="value"><a href="organ_requests.php?EMAIL=<?php echo $EMAIL?> ">Request</a></div>


        </div>
      </div>
       <!-- card 2 starts -->

      <div class="card">
        <div class="card-image card-2"></div>
         <div class="card-text card_2">
          <h2>Donate A Organ</h2>
          <div class="value"><a href="available_to_donate.php?EMAIL=<?php echo $EMAIL?>  ">Donate</a></div>
         </div>
        </div>
      </div>

      <!-- card  3 starts-->
      
      <div class="card">
        <div class="card-image card-3"></div>
         <div class="card-text card_3">
          <h2>Donation Record</h2>
          <div class="value"><a href="donation_record.php?EMAIL=<?php echo $EMAIL?>  ">Record</a></div>
         </div>
        </div>
      </div>
</section>


<style>

/* Media Icons */
.media-icons {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
}

.media-icons a {
    margin: 0 10px;
    color: #fff;
    font-size: 1.5em;
}

/* Container Styles */
.container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 50px;
}

.card {
    background-color: #fff;
    height: 460px;
    width: 270px;
    margin: 20px;
    border-radius: 15px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.3s;
    overflow: hidden;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.2);
}

.card-image {
    height: 220px;
    background-size: cover;
    border-radius: 15px 15px 0 0;
}

.card-text {
    padding: 20px;
    text-align: center;
}

.card-text h2 {
    font-size: 1.5em;
    margin-top: 0;
    margin-bottom: 10px;
}

.card a {
    display: inline-block;
    background-color: #ff4500;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s;
}

.card a:hover {
    background-color: #333;
}

/* Card Specific Background Images */
.card-1 {
    background-image: url("images/request.jpg");
}

.card-2 {
    background-image: url("images/donation.jpg");
}

.card-3 {
    background-image: url("images/02.jpg");
}
 
    </style>
  </section>

 


</body>

</html>