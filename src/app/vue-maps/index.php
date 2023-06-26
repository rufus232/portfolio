<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Free responsive business website template</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
      integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
      crossorigin=""/>
      <!-- CUSTOM STYLE -->      
      <link rel="stylesheet" href="css/template-style.css">
      <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,700,800&amp;subset=latin-ext" rel="stylesheet">  
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>

      <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
      integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
      crossorigin="" defer></script>
      <script type="text/Javascript" src="js/script.js" defer></script>
   </head>

   <!--
    You can change the color scheme of the page. Just change the class of the <body> tag. 
    You can use this class: "primary-color-white", "primary-color-red", "primary-color-orange", "primary-color-blue", "primary-color-aqua", "primary-color-dark" 
    -->
    
    <!--
    Each element is able to have its own background or text color. Just change the class of the element.  
    You can use this class: 
    "background-white", "background-red", "background-orange", "background-blue", "background-aqua", "background-primary" 
    "text-white", "text-red", "text-orange", "text-blue", "text-aqua", "text-primary"
    -->

   <body class="size-1520 primary-color-red background-dark">
      <!-- HEADER -->
      <header class="grid">
        <!-- Top Navigation -->
        <nav class="s-12 grid background-none background-primary-hightlight">
           <!-- logo -->
           <a href="index.php" class="m-12 l-3 padding-2x logo">
              <img src="img/logo.svg">
           </a>
           <div class="top-nav s-12 l-9"> 
              <ul class="top-ul right chevron">
                <li><a href="index.php">Home</a></li>
                <li><a href="admin.php">Admin</a></li>
              </ul>
           </div>
        </nav>
      </header>
	 <!-- MAIN -->
      <main role="main">
        <!-- TOP SECTION -->
        <section class="grid">
          <!-- Main Carousel -->
          <div class="s-12 margin-bottom carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-hide-arrows background-dark">
          	<div class="item background-image" style="background-image:url(img/carousel-01.jpg)">
              <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">We are Web design Heroes</p>
              <p class="text-padding text-size-20 text-dark text-uppercase background-white">Con nonummy sem integer interdum volutpat dis eget eligendi aliquip dolorum magnam.</p>
            </div>
          	<div class="item background-image" style="background-image:url(img/carousel-02.jpg)">
              <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">Inspired by Technologies</p>
              <p class="text-padding text-size-20 text-dark text-uppercase background-white">Con nonummy sem integer interdum volutpat dis eget eligendi aliquip dolorum magnam.</p>
            </div>
            <div class="item background-image" style="background-image:url(img/carousel-03.jpg)">
              <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">CSS and HTML is our Playground</p>
              <p class="text-padding text-size-20 text-dark text-uppercase background-white">Con nonummy sem integer interdum volutpat dis eget eligendi aliquip dolorum magnam.</p>
            </div>
          </div>  
        </section>
        <form action="" method="POST">
          
          <input placeholder="✈️ Choisissez un Point de Depart" class="input-search" type="text" >
          <input placeholder="🛬 Choisissez une Destination " class="input-search2" type="text" >
          
          <button type="submit" class="form-send">Valider</button>
        </form>

      
      <!-- MAIN -->
      <main role="main">

          <!-- Main Carousel -->
          <div id="map" class="leaflet-container">

          </div>  
          <!-- <div id="map" style="width: 100%; height: 800px"></div> -->
        
        <!-- SECTION 1 --> 
        <section class="grid margin text-center">
          <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-red">
            <i class="icon-sli-equalizer text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Unlimited Color Variants</h3>
          </a>
          <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-blue">
            <i class="icon-sli-layers text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Many Reusable Elements</h3>
          </a>
          
          <!-- Image-->
          <img class="m-12 l-6 l-row-2 margin-bottom" src="img/img-06.jpg">
          
          <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-orange">
            <i class="icon-sli-diamond text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Responsive Layoute</h3>
          </a>
          <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-aqua">
            <i class="icon-sli-share text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Clean Modern Code</h3>
          </a>
        </section>
                 <!-- SECTION 2 -->
        <section class="grid section margin-bottom background-dark">
          <h2 class="s-12 l-6 center text-thin text-size-30 text-white text-uppercase margin-bottom-30">Responsive <b>Parallax Background</b></h2>
          <p class="s-12 l-6 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </section>
        
        <!-- SECTION 3 --> 
        <section class="grid margin">
          <!-- Image-->
          <img class="s-12 m-6 margin-bottom" src="img/img-01.jpg">
        
          <div class="s-12 m-6 padding-2x margin-bottom background-blue">
            <h2 class="text-strong text-size-50 text-line-height-1">Nonummy nibh euismod tincidunt ut laoreet<br> massa nec orci accusamus auctor aute</h2>
            <ul>
              <li>Sed diam nonummy nibh euismod tincidunt ut laoreet</li> 
              <li>Dolore magna aliquam erat volutpat</li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</li>
              <li>Sed diam nonummy nibh euismod tincidunt ut laoreet</li>
              <li>Dolore magna aliquam erat volutpat</li>
            </ul>
          </div>
        </section>
        
        <!-- SECTION 4 -->
        <h2 class="s-12 text-white text-thin text-size-30 text-white text-uppercase margin-top-bottom-40 center text-center">Top <b>References</b></h2>
        <section class="grid margin">
          <a class="s-12 m-6 margin-bottom" href="gallery.php">
            <img class="full-img" src="img/portfolio/thumb-01.jpg" alt=""/>
          </a>	
          <a class="s-12 m-6 margin-bottom" href="gallery.php">
            <img class="full-img" src="img/portfolio/thumb-02.jpg" alt=""/>
          </a>	
          <a class="s-12 m-6 margin-bottom" href="gallery.php">
            <img class="full-img" src="img/portfolio/thumb-03.jpg" alt=""/>
          </a>	
          <a class="s-12 m-6 margin-bottom" href="gallery.php">
            <img class="full-img" src="img/portfolio/thumb-04.jpg" alt=""/>
          </a>	
        </section>
        
        <!-- SECTION 5 -->
        <section class="grid margin text-center">
          <div class="m-12 l-4 padding-2x background-dark margin-bottom text-right">
            <h3 class="text-strong text-size-25 text-uppercase margin-bottom-10">Let's keep in touch</h3>
            <p>Deleniti pertinacia eu est, te his soluta quaestio pericula illum vulputate lobortis facilisis.</p>
          </div>
          <a href="/" class="s-12 m-6 l-2 padding vertical-center margin-bottom facebook hover-zoom">
             <i class="icon-sli-social-facebook text-size-60 text-white center"></i>
          </a>
          <a href="/" class="s-12 m-6 l-2 padding vertical-center margin-bottom twitter hover-zoom">
            <i class="icon-sli-social-twitter text-size-60 text-white center"></i>
          </a>
          <a href="/" class="s-12 m-6 l-2 padding vertical-center margin-bottom youtube hover-zoom">
            <i class="icon-sli-social-youtube text-size-60 text-white center"></i>
          </a>
          <a href="/" class="s-12 m-6 l-2 padding vertical-center margin-bottom linkedin hover-zoom">
            <i class="icon-sli-social-linkedin text-size-60 text-white center"></i>
          </a>
        </section>
                
      </main>
      
       
      <!-- FOOTER -->
      <footer class="grid">
        <!-- Footer - top -->
        <!-- Image-->
        <div class="s-12 l-3 m-row-3 margin-bottom background-image" style="background-image:url(img/img-04.jpg)"></div>
        
        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
           <h2 class="text-strong text-uppercase">Who We Are?</h2>
           <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
        </div>
        
        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
           <h2 class="text-strong text-uppercase">Where We Are?</h2>
           <img class="full-img" src="img/map.svg" alt=""/>
        </div>
        
        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
           <h2 class="text-strong text-uppercase">Contact Us</h2>
           <p><b class="text-primary margin-right-10">P</b> 0800 4521 800 50</p>
           <p><b class="text-primary margin-right-10">M</b> <a class="text-primary-hover" href="mailto:contact@sampledomain.com">contact@sampledomain.com</a></p>
           <p><b class="text-primary margin-right-10">M</b> <a class="text-primary-hover" href="mailto:office@sampledomain.com">office@sampledomain.com</a></p>
        </div>
        <div id="map" style="width: 800px; height: 400px"></div>
        
        <!-- Footer - bottom -->
        <div class="s-12 text-center margin-bottom">
          <p class="text-size-12">Copyright 2019, Vision Design - graphic zoo</p>
          <p class="text-size-12">All images have been purchased from Bigstock. Do not use the images in your website.</p>
          <p><a class="text-size-12 text-primary-hover" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a></p>
        </div>
      </footer>
  <!------------------------------DEBUT PHP----------------------------------->
   <?php  

try {
$db = new PDO('mysql:host=localhost;dbname=maps', 'root', 'root');
} catch (PDOException $e) {
    die("Erreur !: " . $e->getMessage());
}

if(isset($_POST["connexion"])){
    $fichierJson = $_POST["connexion"];
    $data = json_decode($fichierJson, true);

    foreach ($data as $key => $value) {
        if($data[$key] == "undefined") 
            $data[$key] = null;
    }

    $numero = $data['numero'];
    $rue = $data['rue'];
    $ville = $data['ville'];
    $codePostal = $data['codePostal'];
    $latitude = $data['latitude'];
    $longitude = $data['longitude'];

    $check = $db->prepare("SELECT * FROM `coordonnees` WHERE `latitude` = '$latitude' and `longitude` = '$longitude'");
    $check->execute();

    if ($check->rowCount() == 0){
        $stmt = $db->prepare("INSERT INTO `coordonnees`(`numero`, `rue`, `ville`, `codepostale`, `latitude`, `longitude`) VALUES ('$numero','$rue','$ville','$codePostal','$latitude','$longitude')");
        $stmt->execute();
    }
}

if(isset($_POST["connexion2"])){
    $fichierJson = $_POST["connexion2"];
    $data = json_decode($fichierJson, true);

    foreach ($data as $key => $value) {
        if($data[$key] == "undefined") 
            $data[$key] = null;
    }

    $numero = $data['numero'];
    $rue = $data['rue'];
    $ville = $data['ville'];
    $codePostal = $data['codePostal'];
    $latitude = $data['latitude'];
    $longitude = $data['longitude'];

    $check = $db->prepare("SELECT * FROM `coordonnees` WHERE `latitude` = '$latitude' and `longitude` = '$longitude'");
    $check->execute();

    if ($check->rowCount() == 0){
        $stmt = $db->prepare("INSERT INTO `coordonnees`(`numero`, `rue`, `ville`, `codepostale`, `latitude`, `longitude`) VALUES ('$numero','$rue','$ville','$codePostal','$latitude','$longitude')");
        $stmt->execute();
    }
}
?>

     
       
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script>
   </body>
</html>