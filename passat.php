<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Volkwagen - Bình Dương</title>
  <link href="./images/logo-volksgawen.png" rel="shortcut icon" type="image/x-icon">
  <meta name="description" content="Volkswagen Bình Dương tự hào là nhà phân phối chính hãng xe Volkswagen tại Bình Dương. Hãy đến với VW Bình Dương để được hài lòng. 090.734.33.71" />
  <meta name="keywords" content="volkswagen,volkswagen Bình Dương,vw,duy,Duy" />
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <link rel="canonical" href="https://demo.colorlib.com/blaskan/">
  <script
  src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>

  <!-- Bootstrap 4.5.3 -->
  <link rel="stylesheet" id="bootstrap-css" href="./css/bootstrap.min.css" type="text/css" media="all">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet" id="bootstrap-css" href="./css/font-awesome.min.css" type="text/css" media="all">
  <link rel="stylesheet" id="bootstrap-css" href="./css/themes.css" type="text/css" media="all">
  <link rel="stylesheet" id="bootstrap-css" href="./css/styles.css" type="text/css" media="all">
</head>

<body>
  <?php include 'header.php';?>
  <main>
    <?php
      $contentPassat = file_get_contents("./json/passat.json", true);


      echo $contentPassat;
      echo "<h2 class='text-center text-color-red'>".$contentPassat["name"]."</h2>";
      echo "<h3 class='text-center'>".$contentPassat["subName"]."</h3>";

    ?>
    <h2 class="text-center text-color-red">PASSAT BLUEMOTION</h2>
    <div class="container-lg">
      <div class="cover-product">
        <img class="product-image" src="./images/passat.jpg" alt="PASSAT BLUEMOTION" width="100%" />
      </div>
      <ul class="menu-product">
        <li><a href="#tong-quan">Tổng Quan</a></li>  
      </ul>
      <div class="main-product">
        <div id="tong-quan" class="block-product">
          <h3 class="title-block">TỔNG QUAN</h3>
          <div class="content-block"></div>
        </div>
      </div>
    </div>
  </main>
  <?php include 'footer.php';?>
</body>
<?php include 'configScript.php';?>
</html>