<?php include('config/constants.php'); ?>



<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <!-- Link our CSS file -->
 <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
 <!-- <link rel=" stylesheet" type="text/css" href="../css/style.css"> -->
 <title>eben's kitchen</title>

 <style>
 .nav-items {
  color: #b6efdd !important;
  text-decoration: none;
 }

 .food-menu-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
 }
 </style>
</head>

<body class=" bg-dark text-white">
 <!-- Navbar Section Starts Here -->
 <section class="navbar">
  <div class="container">
   <div class="logo">
    <a href="#" title="Logo">
     <img src="images/logott.png" alt="Restaurant Logo" class="img-responsive">
    </a>
   </div>

   <div class="menu text-right pull-right">
    <ul class="d-flex align-items-center">
     <li>
      <a class=" nav-items mr-2" href="<?php echo SITEURL; ?>">Home</a>
     </li>
     <li>
      <a class="nav-items mr-2" href="<?php echo SITEURL; ?>categories.php">Categories</a>
     </li>
     <li>
      <a class="nav-items mr-2" href="<?php echo SITEURL; ?>foods.php">Foods</a>
     </li>
     <li>
      <a class="nav-items" href="#">Contact</a>
     </li>
    </ul>
   </div>

   <div class="clearfix"></div>
  </div>
 </section>

 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
</body>

</html>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <!-- Important to make website responsive -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
<!-- <title>Online Food Order System</title> -->

<!-- Link our CSS file -->
<!-- <link rel="stylesheet" href="css/style.css">
</head> -->

<!-- <body className=" bg-dark text-white"> -->

<!-- Navbar Section Ends Here -->