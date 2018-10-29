<?php
include_once './controllers/VideoController.php';

$videoController = new VideoController();
$videoList = $videoController->getVideoList();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="3ds interactive">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="bambilitaz">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Video List</title>
    <style>
    .videoWrapper {
      position: relative;
      padding-bottom: 56.25%; /* 16:9 */
      padding-top: 25px;
      height: 0;
    }
    .videoWrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  </style>
  </head>
  <body>
    <div class="container">
      <div class="video-container m-4 bg-light rounded">
        <h3 class="bg-dark px-4 py-2 text-white rounded-top">Video Search Result</h3>
        <div class="p-4">
          <div class="row">
          <?php
            foreach($videoList as $video) {
          ?>
              <div class="video-card col-4 thumbnail">
                <div class="videoWrapper">
                  <iframe width="560" height="349" src="http://www.youtube.com/embed/<?=$video->id?>?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="bg-white p-2">
                  <h6><?=$video->title?></h6>
                  <p><small><?=$video->description?></small></p>
                </div>
              </div>
          <?php
            }
          ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>