<?php 
//echo   print_r($post);
// print_r(base_url("/project1/project1/TB2K16/assets/images/1.jpg"));die; ?>
<?php require 'header_view.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop section </title>
       <!------------ ***************************css file************************************ ---------------->
    <link href="<?=base_url("assets/css/style.css")?> " rel="stylesheet">
    <link href="<?=base_url("assets/css/bootstrap.min.css")?> " rel="stylesheet">
  <style>
body {
    margin: 0;
    font-family: Roboto,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: .8125rem;
    font-weight: 400;
    line-height: 1.5385;
    color: #333;
    text-align: left;
    /* background-color: #2196F3; */
}

.mt-50{

    margin-top: 50px;
}

.mb-50{

    margin-bottom: 50px;
}



.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .1875rem;
}

.card-img-actions {
    position: relative;
}
.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
    text-align: center;
}

.card-img{

    width: 350px;
}

.star{
        color: yellow;
}

.bg-cart {
    background-color:green;
    color:#fff;
    
}

.bg-cart:hover {
    
    /* color:#fff; */
}
.bg-cart a{
    color:#fff;
}

.bg-buy {
    background-color:green;
    color:#fff;
    padding-right: 29px;
}
.bg-buy:hover {
    
    color:#fff;
}

a{

    text-decoration: none !important;
}
</style>
        

</head>


<body>
    <!---------------------------------------------**********************---------------------------------------------->
    <br><br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12" style="background-color:#D3D3D3;">
                <h4  class="abc"style="text-align:center; font-size: 18px;">Showing results of 25 products </h4>
               
            </div>
        </div>
    </div>
     <!-- -------------------------******************************** Product List section********------------------------------------------------ -->
            <div class="container d-flex justify-content-center mt-50 mb-50">
                <?php if(!empty($post)){ ?>
                <div class="row">
                    <?php foreach($post as $key=>$obj){
							?>
           <div class="col-md-4 mt-1">
            
                
                            <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            
                                                <img src="<?php echo base_url('/assets/images/'.$obj->product_img_1);?>" class="card-img img-fluid" width="96" height="350" alt="">
                                              
                                           
                                        </div>
                                    </div>

                                    <div class="card-body bg-white text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-2">
                                                <a href="#" class="text-default mb-2" data-abc="true"><?php echo $obj->product_name.'' ?></a>
                                            </h6>

                                           
                                        </div>

                                        <h6 class="mb-0 font-weight-semibold"><?php echo $obj->discount_price.'' ?>   <strike><?php echo $obj->product_price.'' ?></strike></h6> 

                                       

                                        <a href="https://wa.me/918800355388">  <button type="button" class="btn bg-cart mt-4" ><i class="fa-brands fa-whatsapp"></i>   Inquiry On Whatsapp</button></a>

                                        
                                    </div>
                                </div>

                                  
                            
                             
           </div>
           <?php }?>   

        </div>
        <!-- --------------------******************1 category**************************----------------------------- -->
        <?php }else {?>
<br><br>
         
          
          <img src="/project1/project1/TB2K16/assets/images/pro1.jpg" class="img-fluid" alt="Responsive image" style="width:100%;">
       <?php } ?>
        
    </div>

 
   

    <?php //require 'footer_view.php';
?>
</body>
</html>