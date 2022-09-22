<?php

use App\Assignment\Invoice;
use App\Assignment\BlogPost;
use App\Assignment\FuelPrice;
use App\Assignment\PetrolCar;
use App\Assignment\CreditNote;
use App\Assignment\VideoPlayer;
use App\Assignment\Model\Author;
use App\Assignment\MailerService;
use App\Assignment\AviVideoPlayer;
use App\Assignment\CngCar;
use App\Assignment\DatabaseLogger;
use App\Assignment\DieselCar;

$router->get('/', function($request) {
    return <<<HTML
    <center>
      <h1>Solid Principle</h1>
    </center>
  HTML;
});

$router->get('/blog', function($request) {
    $blog = new BlogPost(new Author);
    return $blog->getHtml();
});

$router->get('/api/blog', function($request) {
  $blog = new BlogPost(new Author);
  return $blog->getJson();
});

$router->get('/send-mail',function($request) {
  $mailer = new MailerService(new DatabaseLogger);
  return $mailer->sendEmail();
});

$router->get('/get-price',function($request) {
    $fuelPrice = new FuelPrice;
    return $fuelPrice->getFuelPrice(new PetrolCar);

    //Other examples
    // return $fuelPrice->getFuelPrice(new CngCar);
    // return $fuelPrice->getFuelPrice(new DieselCar);
});
$router->get('/get-invoice',function($request) {
  $data = new Invoice;
  return $data->getPDF();
});

$router->get('/get-credit-note',function($request) {
  $data = new CreditNote;
  return $data->getCSV();
});

$router->get('/play-video',function($request) {
    $player = new VideoPlayer;
    return $player->play('video.mp4');
});

$router->get('/play-avi-video',function($request) {
  $player = new AviVideoPlayer;

  // return $player->play('video.avi');

  //Throw Error => mp4 doesn't support
  return $player->play('video.mp4');
});




