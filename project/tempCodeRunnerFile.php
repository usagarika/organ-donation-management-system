<?php
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Organ Donation</title>
    
</head>

<body>
<div style="font-family: 'Poppins', sans-serif; font-weight:400">
        <header class="sticky-top">
            <nav class="navbar navbar-expand-sm  justify-content-between" style="background-color: #212529;">
                <a href="logged_in.php?EMAIL=<?php echo $user?>" class="navbar-brand" style="font-weight:700; color:White;">
                   Home
                </a>
                <a  class="navbar-brand" style="font-weight:700;color:White;">
                   ORGAN DONATION
                </a>
                <a class="btn btn-warning" href="index.php" role="button">Log out</a>

            </nav>
        </header>

        <div class="head">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-4 m-auto">
                        <h3 class="text-left" style="font-size:30px;font-family: 'Poppins', sans-serif; font-weight:700; color:azure;">Donation Record</h3>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-4 m-auto pt-4 pt-sm-0">
                        <div class="su-inner-banner-img"><img alt="image" class="img-fluid" style="padding: 25px 0px 25px;" src="images/02.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner -->