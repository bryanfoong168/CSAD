<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include 'server.php';?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="starStyle.css.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
        <link rel="stylesheet" href="Comment.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>

body {
            overflow-y:scroll;
  height: 100%;
  /* max-height: 600px; */
 
  background-color: hsla(200,40%,30%,.4);
  background-image:   
    url('https://78.media.tumblr.com/cae86e76225a25b17332dfc9cf8b1121/tumblr_p7n8kqHMuD1uy4lhuo1_540.png'), 
    url('https://78.media.tumblr.com/66445d34fe560351d474af69ef3f2fb0/tumblr_p7n908E1Jb1uy4lhuo1_1280.png'),
    url('https://78.media.tumblr.com/8cd0a12b7d9d5ba2c7d26f42c25de99f/tumblr_p7n8kqHMuD1uy4lhuo2_1280.png'),
    url('https://78.media.tumblr.com/5ecb41b654f4e8878f59445b948ede50/tumblr_p7n8on19cV1uy4lhuo1_1280.png'),
    url('https://78.media.tumblr.com/28bd9a2522fbf8981d680317ccbf4282/tumblr_p7n8kqHMuD1uy4lhuo3_1280.png');
  background-repeat: repeat-x;
  background-position: 
    0 20%,
    0 100%,
    0 50%,
    0 100%,
    0 0;
  background-size: 
    2500px,
    800px,
    500px 200px,
    1000px,
    400px 260px;
  animation: 50s para infinite linear;
  }

@keyframes para {
  100% {
    background-position: 
      -5000px 20%,
      -800px 95%,
      500px 50%,
      1000px 100%,
      400px 0;
    }
  }

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
  color: white;
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
  background: #fff;
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
        .checked {
  color: orange;
}


        .videoContainer{
            display: flex;
            margin: auto;
        }
        #player{
            position: inherit;
            margin-left: auto;
            margin-right: auto;
        }
        #comment{
            visibility: hidden;
        }
    </style>
    
    <style>
        .starContainer{
            display: flex;
            margin: auto;
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
    
    <style>
        
.container {
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 5px;
  padding: 16px;
  margin: 16px 0
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

.container span {
  font-size: 20px;
  margin-right: 15px;
}

@media (max-width: 500px) {
  .container {
      text-align: center;
  }
  .container img {
      margin: auto;
      float: none;
      display: block;
  }
}
</style>
    <body>

    <div class="header">
  <a href="index.php" class="logo" style="padding: 0px; margin-left:10px; font-family: Arial, Helvetica, sans-serif;"><img src="images/barbell64px.png" alt="logo" style="height: 40px; width: 40px;"> Lifestyle Assistant</a>
  <div class="header-right">
    <a class="active" href="index.php">Home</a>
    <a href="videoGallery.php">Videos</a>
  </div>
</div>
        <?php
        
        $video_id = $_GET["name"];
        
$arr_video_ids = array(
    'https://www.youtube.com/embed/tgbNymZ7vqY',
);
 
function getYouTubeThumbnailImage($video_id) {
    return "http://i3.ytimg.com/vi/$video_id/hqdefault.jpg";
}
 
function extractVideoID($url){
    $regExp = "/^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/";
    preg_match($regExp, $url, $video);
    return $video[7];
}
            $sql = mysqli_query($db, "SELECT comments FROM `videos` WHERE video_id = '$video_id'");

            
?>
        
        


        <?php foreach ($arr_video_ids as $video) { ?>
            <?php
            #$video_id = extractVideoID($video);
            $video_thumbnail = getYouTubeThumbnailImage($video_id);
            
            ?>
        <div style="display: flex; margin: auto; font-size:36px; color: black;">
            <p style="position: inherit;margin-left: auto;margin-right: auto;">Please leave a review at the end of this video</p>
        </div>
            <div class="videoContainer">
                
                <div id="player">
                    
                </div>
                    <script src="http://www.youtube.com/player_api"></script>
                    <script>
                        
                        // create youtube player
                        var player;
                        function onYouTubePlayerAPIReady() {
                            player = new YT.Player('player', {
                              height: '480',
                              width: '720',
                              videoId: '<?php echo $video_id?>', <!-- video id should be here. last component from video URL -->
                              events: {
                                'onReady': onPlayerReady,
                                'onStateChange': onPlayerStateChange
                              }
                            });
                        }

                        // autoplay video
                        function onPlayerReady(event) {
                            event.target.playVideo();
                        }

                        // when video ends
                        function onPlayerStateChange(event) {        
                            if(event.data === 0) {            
                                doSomeAction();
                            }
                        }
                        function doSomeAction(){
                            document.getElementById("comment").style.visibility = "visible";
                        }
                    </script>
                        <br>
                    
            </div>
        <div style="display: flex; margin: auto;">
        <div class="container" id="comment" style="position: inherit; margin-left: auto;margin-right: auto;">
                <h2>Leave Us a Comment</h2>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" >
                    <input style="display:none;" type="text" name="name" value="<?php echo $video_id ?>">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="starContainer">
                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5"/>
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" required/>
                            <label for="star1" title="text">1 star</label>
                        </div>
                    </div>
                    <textarea name="comments" placeholder='Add Your Comment' required></textarea>
                    
                    <div class="btn">
                        <input type="submit" value='Comment' name="save" target="none" onclick="location.href='videoGallery.php'">
                    </div>
                </form>
            </div>
        </div>
            <script src='plugin.js'></script>
            
        <?php } ?>
                        <p class="commentsContainer" style="border: none; background-color: #eee;">Comment Section</p>

            <?php
            while($row = mysqli_fetch_array($sql)) {
                 
                echo '<br>';
            
            ?>
             <div class="videoContainer" style="align-items: center;margin-left: auto;
    margin-right: auto; ">
                
                 <div class="commentsContainer" style="background-color: #eee;">
                    <p><?php echo $row['comments']; ?></p>
                </div>
            </div>
            <!-- Spacing -->
            <div><br></div>
            <?php } ?>

            <!-- footer-->
<footer class="footer">
  <div class="footer-left">
  <a href="index.php" class="logo" style="padding: 0px; margin-left:10px;"><img src="images/barbell64px.png" alt="logo" style="height: 40px; width: 40px;"></a>

    <p class="footer-company">
    Lifestyle Assistant @ 2021
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
      <p><a href="mailto:support@company.com" style="
        color: inherit !important;
          text-decoration: none !important;
          font-size: inherit !important;
          font-family: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;">support@gmail.com</a></p>
    </div>
  </div>
  <div class="footer-right">
      <p class="footer-company-about" style="text-align: center;">
      <span>About the website</span>
      Designed to help elderly get some exercise done in the convenience of their home.
    </p>

    
  </div>
</footer>
<!-- //footer-->
            
            
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
