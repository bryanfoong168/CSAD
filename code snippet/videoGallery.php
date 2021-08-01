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
<script>

</script>
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
            
            $video_id = extractVideoID($video);
            $video_thumbnail = getYouTubeThumbnailImage($video_id);
            ?>
            <div class="col-md-4">
                <div class="pb-2">
                    <form id="myform" name="myform" method="get" action="course.php">
                        <a href="javascript:void()" onclick="submitform()">
                            <img src="<?php echo $video_thumbnail; ?>" class="img-thumbnail" />
                        </a>
                    </form>
                    
                </div>
            </div>
        
        <?php } ?>
    </div>
</div>
        <script>
            function submitform() {   
                var video_id = 50;
                document.getElementById('myform').submit();
            }
        </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>
