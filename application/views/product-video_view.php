<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products viedo</title>
    <link href="<?=base_url("assets/css/bootstrap.min.css")?> " rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    /* *{
        margin:0;
        padding:0;
    } */
    body{
        background-color:#2e8d86; 
    }
    .video-sec{
        /* background-color:#2e8d86; */
        /* width:100%; */
        margin:80px auto;
        text-align:center;
    }
    .video-sec h1{
padding:60px;
/* color:#fff; */
color: #000;

font-size:44px;
    }
</style>
<body>
    <div class="video-sec">
    <div class="container">
<h1>VIDEO GALLERY</h1>

<div class="row">
<?php foreach ($youTube as $row) {
  
     ?>
    <div class="col-12">
    <!-- <iframe width="1010" height="480" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
    <iframe width="100%" height="345" src="<?php echo $row->url?>">
</iframe> 
</div>
    <?php }?>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>