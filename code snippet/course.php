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
        <link rel="stylesheet" type="text/css" href="starStyle.css.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
        <link rel="stylesheet" href="Comment.css">
    </head>
    <style>
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
    <body>
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
?>
        
        


        <?php foreach ($arr_video_ids as $video) { ?>
            <?php
            #$video_id = extractVideoID($video);
            $video_thumbnail = getYouTubeThumbnailImage($video_id);
            ?>
        
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
        
        <div class="container" id="comment">
                <h2>Leave Us a Comment</h2>
                <form>
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
                    <textarea placeholder='Add Your Comment' required></textarea>
                    
                    <div class="btn">
                        <input type="submit" value='Comment' target="none">
                        
                    </div>
                </form>
            </div>
        
            <script src='plugin.js'></script>
            
        <?php } ?>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
