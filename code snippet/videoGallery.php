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
