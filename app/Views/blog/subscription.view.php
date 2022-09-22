<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Subscriptions</title>
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
    <div class="container row">
        <div class="card m-1" style="width:25rem;">
            <img src="https://expresswriters.com/wp-content/uploads/2015/08/how-to-set-up-a-blog-email-subscription-inset.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Subscription Plan 1</h5>
                <p class="card-text">Some quick example text to build on the Subscription Plan 1 and make up the bulk of the card's content.</p>
                <a href="/get-price?plan=Silver" class="btn btn-primary">Get Pricing</a>
            </div>
        </div>
        <div class="card m-1" style="width:25rem;">
            <img src="https://expresswriters.com/wp-content/uploads/2015/08/how-to-set-up-a-blog-email-subscription-inset.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Subscription Plan 2</h5>
                <p class="card-text">Some quick example text to build on the Subscription Plan 1 and make up the bulk of the card's content.</p>
                <a href="/get-price?plan=Platinum" class="btn btn-primary">Get Pricing</a>
            </div>
        </div>
        <div class="card m-1" style="width:25rem;">
            <img src="https://expresswriters.com/wp-content/uploads/2015/08/how-to-set-up-a-blog-email-subscription-inset.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Subscription Plan 2</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/get-price?plan=Gold" class="btn btn-primary">Get Pricing</a>
            </div>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>