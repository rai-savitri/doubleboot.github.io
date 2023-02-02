 <!DOCTYPE html>

 <?php //print_r($category);die; ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Navbar</title>
	<link href="<?=base_url("assets/css/bootstrap.min.css")?> " rel="stylesheet">
  <link href="<?=base_url("assets/css/style.css")?> " rel="stylesheet">
  <!-- -------------------------------------**********************font awesome*********************---------------------------------- -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- ------------------------------------***************************************------------------------------------------- -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <!-- ----******************* carousel min.css cdn*****************-------------------- -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!------------------- **********************default min.css***********-------------------------- -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- ---------------------***************************navigation cdn*******************--------------------- -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>
<body> 
 <!-- -------------------------*************************navbar*******************--------------------- -->
 <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="#"><img src="/project1/project1/TB2K16/assets/images/db_logo.png" alt=""></a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">Double Boot</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="<?=base_url('/index.php/Product_controller/')?>">HOME</a></li>
          <li>
            <a href="<?=base_url('/index.php/Category_controller/')?>">ALL CATEGORIES</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <?php 
             // $category =$db->query("select * from category")->result();
              //  print_r($category);die;
              
              foreach($category as $obj){ ?>
              <li><a href="<?php echo base_url("index.php/shop/"). $obj->category_id; ?>"><?php echo $obj->category_name; ?></a></li>
              
              <?php } ?>
             
             
            </ul>

            <ul class="htmlCss-sub-menu sub-menu">
             
            <!-- <li><a href="#">Web Design</a></li> -->
              
              
              <li><a href="<?php echo base_url("index.php/Product_controller/shop/1")?>"><?php echo "Watches"; ?></a></li>
              <li><a href="<?php echo base_url("index.php/Product_controller/shop/2")?>"><?php echo "Men's Kick"; ?></a></li>
             
             
             
            </ul>
          </li>

         
          <!-- <li>
            <a href="#">JAVASCRIPT</a>
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="#">Dynamic Clock</a></li>
              <li><a href="#">Form Validation</a></li>
              <li><a href="#">Card Slider</a></li>
              <li><a href="#">Complete Website</a></li>
            </ul>
          </li> -->
          <li><a href="<?=base_url('/index.php/Product_controller/shop/')?>">ALL PRODUCTS</a></li>
          <!-- <li><a href="#">CONTACT US</a></li> -->
        </ul>
      </div>
      <div class="search-box">
        <i class='bx bx-search'></i>
        <div class="input-box">
          <input type="text" placeholder="Search...">
        </div>
      
      </div>
      <div class="media-icon" >
        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook media-icon" style="color:black; padding:2px; font-size:23px;"></i></a>
        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram" style="color:black; padding:2px; font-size:23px;"></i></a>
        <a href="https://twitter.com/"><i class="fa-brands fa-square-twitter" style="color:black; padding:2px; font-size:23px;"></i></a>
      <a href="https://www.youtube.com/">  <i class="fa-brands fa-youtube" style="color:black; padding:2px; font-size:23px;"></i></a>
</div>

    </div>
  </nav>





<!-- ---------------------------***********************bootstrap js ****************************** ---------------------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- ------------------********************product section cdn**********************---------------- -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script>"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"</script>

<script>
// -----------------------***********************navbar*************************--------------------------

// search-box open close js code
let navbar = document.querySelector(".navbar");
let searchBox = document.querySelector(".search-box .bx-search");
// let searchBoxCancel = document.querySelector(".search-box .bx-x");

searchBox.addEventListener("click", ()=>{
  navbar.classList.toggle("showInput");
  if(navbar.classList.contains("showInput")){
    searchBox.classList.replace("bx-search" ,"bx-x");
  }else {
    searchBox.classList.replace("bx-x" ,"bx-search");
  }
});

// sidebar open close js code
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.onclick = function() {
navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
navLinks.style.left = "-100%";
}


// sidebar submenu open close js code
let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.onclick = function() {
 navLinks.classList.toggle("show1");
}
let moreArrow = document.querySelector(".more-arrow");
moreArrow.onclick = function() {
 navLinks.classList.toggle("show2");
}
let jsArrow = document.querySelector(".js-arrow");
jsArrow.onclick = function() {
 navLinks.classList.toggle("show3");
}

  </script>

</body>
</html>