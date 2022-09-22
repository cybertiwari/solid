<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Blog</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">SOLID</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blogs">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/subscriptions">Subscriptions</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    if (isset($_SESSION['success'])) {
    ?>
        <div class="alert alert-success" role="alert">
            <?=$_SESSION['success']?>
        </div>
    <?php
    }
    unset($_SESSION['success']);
    ?>
    
    <div class="row m-5">
        <div class="col-4">
            <div class="list-group" id="myList" role="tablist">
            <?php
            foreach ($blogs as $key => $value) {
            ?>
                <a class="list-group-item list-group-item-action <?=$key == 0 ? 'active': ''?>" id="list-<?=$key?>" data-toggle="list" href="#list-tab-<?=$key?>" role="tab" aria-controls="home-<?=$key?>"><?=$value['title']?></a>
            <?php
            }
            ?>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
            <?php
            foreach ($blogs as $key => $value) {
            ?>
            <div class="tab-pane fade <?=$key == 0 ? 'show active': ''?>" id="list-tab-<?=$key?>" role="tabpanel" aria-labelledby="list-tab-<?=$key?>">
                <?=$value['content']?>
                <div class="mt-2">
                    <button class="btn btn-primary">View</button>
                    <a class="btn btn-primary" href="/send-mail">Send Mail</a>
                    <a class="btn btn-primary" href="/play-video">Play Video</a>
                </div>
            </div>
            <?php
            }
            ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#myList a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>
  </body>
</html>