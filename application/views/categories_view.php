<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
   .cate div{
    width: 260px;
  height: 200px;
  padding: 70px;
  border: 1px solid none;
  box-sizing: border-box;
    margin-left:2%;
  
   
   }
   .cate div {
    background-image: linear-gradient(rgb(71 72 74 / 70%), rgba(4, 9, 30, 0.7)), url("/project1/project1/TB2K16/assets/images/1.jpg");
   background-size: cover;
    background-position: center;
    color: rgba(4, 9, 30, 0.7);
    height: auto;
    /* width: 100%; */
    position: relative;
   }

.cate div::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    /* width: 100%; */
    /* height: 100%; */
    z-index: 1;
}
</style>
</head>

<body>
<div class="category">
   <div class="container mt-4 ">
    <div class=" cate row">

    <div class="col-md-3">
    <button type="button" class=" cate btn btn-primary" style="border-radius:1px;">Men's Kick</button>
    </div>

    <div class="col-md-3">
    <button type="button" class=" cate btn btn-primary"style="border-radius:1px;" >I Watch and Airpods</button>
    </div>

    <div class="col-md-3">
    <button type="button" class=" cate btn btn-primary"style="border-radius:1px;" >Girls Watch</button>
    </div>

    <div class="col-md-3">
    <button type="button" class=" cate btn btn-primary" style="border-radius:1px;">Men's Watch</button>
    </div>

   </div>

   <div class=" cate row mt-4">

    <div class="col-md-3">
    <button type="button" class=" cate btn btn-primary" style="border-radius:1px;">Women's Kick</button>
    </div>

    <div class="col-md-3">
    <button type="button" class=" cate btn btn-primary" style="border-radius:1px;">Sunglass</button>
    </div>

    <div class="col-md-3">
    <button type="button" class=" cate btn btn-primary" style="border-radius:1px;">Couple Watches</button>
    </div>

    <div class="col-md-3">
    <button type="button" class=" cate btn btn-primary" style="border-radius:1px;">Perfume</button>
    </div>

   </div>
   </div>
   </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>