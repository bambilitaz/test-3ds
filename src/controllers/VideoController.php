<?php
include_once './models/video.php';
class VideoController
{
    function getVideoList()
    {
        $url = 'https://s3-ap-southeast-1.amazonaws.com/ysetter/media/video-search.json';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);

        $obj = json_decode($result);

        $videoList = array();
        
        foreach($obj->items as $v) {
            $id = $v->id->videoId;
            $title = $v->snippet->title;
            $description = $v->snippet->description;
            $thumbnails = $v->snippet->thumbnails;

            $video = new Video($id, $title, $description, $thumbnails);
            $videoList[] = $video;
        }

        return $videoList;
    }
}

?>