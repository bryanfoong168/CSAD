<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>

    <style>
        /* footer */
.footer{
  background: #666;
  width: 100%;
  box-sizing: border-box;
  text-align: left;
  font-size: 16px;
  font-weight: 500;
  padding: 55px 50px;
}

.footer .footer-left,
.footer .footer-center,
.footer .footer-right {
  display: inline-block;
  vertical-align: top;
}

.footer .footer-left {
width: 35%;
}

.footer h3 {
  color: #fff;
  font-size: 36px;
  font-family: 'Raleway', sans-serif;
  margin: 0;
}

.footer h3 span {
  color: lightseagreen;
}

.footer .footer-company {
  color: #222;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
  text-align: left;
  font-family: 'Raleway', sans-serif;
}

.footer .footer-center {
  width: 35%;
}

.footer .footer-center i {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  text-align: center;
  line-height: 36px;
  margin: 10px 15px;
  vertical-align: middle;
  background: #33383b;
  font-size: 22px;
}

.footer .footer-center i.fa-envelope {
  font-size: 18px;
  line-height: 34px;
}

.footer .footer-center p{
  display: inline-block;
  color: #fff;
  font-weight: normal;
  vertical-align: middle;
  margin: 0;
  font-family: 'Raleway', sans-serif;
  font-size: 14px;
}

.footer .footer-center p a {
  color: lightseagreen;
  text-decoration: none;
}

.footer .footer-center p span {
  display: block;
  font-weight: normal;
  font-size: 14px;
  line-height: 2;
}

.footer .footer-links a:before {
  content: " | ";
  font-weight: normal;
  font-size: 20px;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
  left: 0;
}

.footer .footer-links .link1:before{
  content: none;
}

.footer .footer-right {
  width: 20%;
}

.footer .footer-company-about{
  line-height: 20px;
  color: #92999f;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
  font-family: 'Raleway', sans-serif;
}

.footer .footer-company-about span {
  display: block;
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 20px;
  font-family: 'Raleway', sans-serif;
}

.footer .footer-social {
  margin-top: 25px;
}

.footer .footer-social a{
  display: inline-block;
  width: 36px;
  height: 36px;
  background: #33383b;
  border-radius: 2px;
  font-size: 20px;
  line-height: 36px;
  color: #fff;
  text-align: center;
  margin-right: 3px;
  margin-bottom: 5px;
}
        .header {
  overflow: hidden;
  background-color: #666;
  padding: 20px 10px;
  color:white;
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  margin-right: 10px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {

 
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
        body{
            background:#D3D3D3;
            overflow-y:scroll;
        }
        .checked {
  color: orange;
}
        .rate {
    position: inherit;
            margin-left: auto;
            margin-right: auto;
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
    </style>
    
    <body>
        <?php
        
$arr_video_ids = array(
    'https://www.youtube.com/watch?v=Pzv_lUp3iOQ',
    'https://www.youtube.com/watch?v=zRtU8dpTEXg',
    'https://www.youtube.com/watch?v=EfSfLyeREMc',
    'https://www.youtube.com/watch?v=C-nypyy4pLg',
    'https://www.youtube.com/watch?v=OJpMT3odXtQ',
    'https://www.youtube.com/watch?v=WBnzOyBVwdg',
);
    
 
function getYouTubeThumbnailImage($video_id) {
    return "http://i3.ytimg.com/vi/$video_id/hqdefault.jpg";
}
 
function extractVideoID($url){
    $regExp = "/^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/";
    preg_match($regExp, $url, $video);
    return $video[7];
}

?>
        


<div class="header">
  <a href="#default" class="logo" style="padding: 0px; margin-left:10px;"><img src="images/barbell64px.png" alt="logo" style="height: 40px; width: 40px;"> Lifestyle Assistant</a>
  <div class="header-right">
    <a class="active" href="index.html">Home</a>
    <a href="videoGallery.php">Videos</a>
  </div>
</div>
        
        
       
<div class="container">

    <h3 class="text-center">My Video Gallery</h3>
    <div class="row">
        <?php foreach ($arr_video_ids as $video) { ?>
            <?php
            $db = mysqli_connect('localhost', 'root', '', 'database');
            $video_id = extractVideoID($video);
            $video_thumbnail = getYouTubeThumbnailImage($video_id);
            $avg = mysqli_query($db, "SELECT ROUND(AVG(likes) ,0) AS 'average' FROM videos WHERE video_id = '$video_id'");

            $row = mysqli_fetch_assoc($avg); 

            $average = $row['average'];
            
            $checked5 = "";
            $checked4 = "";
            $checked3 = "";
            $checked2 = "";
            $checked1 = "";
            switch($average){
                case 5:
                    $checked5 = "checked";
                    
                case 4:
                    $checked4 = "checked";
                case 3:
                    $checked3 = "checked";
                case 2:
                    $checked2 = "checked";
                case 1:
                    $checked1 = "checked";
            }
            
            
            ?>
            
            <div class="col-md-4">
                <div class="pb-2">
                    <form action="course.php" method="get">
                        <input style="display:none;" type="text" name="name" value="<?php echo $video_id ?>">
                        <input type="image" src="<?php echo $video_thumbnail; ?>" class="img-thumbnail" alt="Submit" name="name">
                    </form>
                    
                    <div class="rate">
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <span class="fa fa-star <?php echo $checked1?>"></span>
                            <span class="fa fa-star <?php echo $checked2?>"></span>
                            <span class="fa fa-star <?php echo $checked3?>"></span>
                            <span class="fa fa-star <?php echo $checked4?>"></span>
                            <span class="fa fa-star <?php echo $checked5?>"></span>
                      </div>
                </div>
            </div>
        
        <?php } ?>
    </div>
</div>
        <script>
            
        </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>
        
       
<div class="container">
<div class="header">
  <a href="#default" class="logo" style="padding: 0px; margin-left:10px;"><img src="images/barbell64px.png" alt="logo" style="height: 40px; width: 40px;"> Lifestyle Assistant</a>
  <div class="header-right">
    <a class="active" href="index.html">Home</a>
    <a href="videoGallery.php">Videos</a>
  </div>
</div>
    <h3 class="text-center">My Video Gallery</h3>
    <div class="row">
        <?php foreach ($arr_video_ids as $video) { ?>
            <?php
            $db = mysqli_connect('localhost', 'root', '', 'database');
            $video_id = extractVideoID($video);
            $video_thumbnail = getYouTubeThumbnailImage($video_id);
            $avg = mysqli_query($db, "SELECT ROUND(AVG(likes) ,0) AS 'average' FROM videos WHERE video_id = '$video_id'");

            $row = mysqli_fetch_assoc($avg); 

            $average = $row['average'];
            
            $checked5 = "";
            $checked4 = "";
            $checked3 = "";
            $checked2 = "";
            $checked1 = "";
            switch($average){
                case 5:
                    $checked5 = "checked";
                    
                case 4:
                    $checked4 = "checked";
                case 3:
                    $checked3 = "checked";
                case 2:
                    $checked2 = "checked";
                case 1:
                    $checked1 = "checked";
            }
            
            
            ?>
            
            <div class="col-md-4">
                <div class="pb-2">
                    <form action="course.php" method="get">
                        <input style="display:none;" type="text" name="name" value="<?php echo $video_id ?>">
                        <input type="image" src="<?php echo $video_thumbnail; ?>" class="img-thumbnail" alt="Submit" name="name">
                    </form>
                    
                    <div class="rate">
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <span class="fa fa-star <?php echo $checked1?>"></span>
                            <span class="fa fa-star <?php echo $checked2?>"></span>
                            <span class="fa fa-star <?php echo $checked3?>"></span>
                            <span class="fa fa-star <?php echo $checked4?>"></span>
                            <span class="fa fa-star <?php echo $checked5?>"></span>
                      </div>
                </div>
            </div>
        
        <?php } ?>
    </div>
</div>
<!-- footer-->
<footer class="footer">
  <div class="footer-left">
    <h3>Best<span>Platform</span></h3>

    <p class="footer-company">
      Company Name @ 2021
    </p>
  </div>
  <div class="footer-center">
    <div>
      <i class="fa fa-map-marker"></i>
      <p><span>500 Dover Road</span> Singapore 139651</p>
    </div>

    <div>
      <i class="fa fa-phone"></i>
      <p>+65 9111 1111</p>
    </div>

    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="mailto:support@company.com">support@gmail.com</a></p>
    </div>
  </div>
  <div class="footer-right">
    <p class="footer-company-about">
      <span>About the website</span>
      Designed to help elderly get some exercise done in the convience of their home.
    </p>

    
  </div>
</footer>
<!-- //footer-->
        <script>
            
        </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>
