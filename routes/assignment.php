<?php

use App\Assignment\BlogPost;
use App\Assignment\VideoPlayer;
use App\Assignment\MailerService;
use App\Assignment\Logger;
use App\Assignment\OGGVideoPlayer;
use App\Assignment\SubscriptionPrice;
use App\Assignment\Database\Connection;
use App\Assignment\Gold;
use App\Assignment\Silver;
use App\Assignment\Platinum;


$router->get('/',function ()
{
    return view('index');
});
$router->get('/about',function ()
{
    return view('about');
});

$router->get('/blogs', function($request) {
  return (new BlogPost(new Connection))->getHtmlList();
});

$router->get('/api/blogs', function($request) {
  return (new BlogPost(new Connection))->getJsonList();
});

$router->get('/send-mail',function($request) {
    $mailer = (new MailerService(new Logger))->sendEmail();
    $message = $mailer ? 'Mail Sent!' : 'There are some problem. Please try after some time';
    $_SESSION['success'] = $message;
    redirect('blogs');
});

$router->get('/play-video',function($request) {
    return (new OGGVideoPlayer)->play('video.mp4');
    //Other Examples
    // return (new OGGVideoPlayer)->play('video.avi');
    // return (new VideoPlayer)->play('video.avi');
});

$router->get('/subscriptions',function($request) {
  return view('blog/subscription');
});

$router->get('/get-price',function($request) {
    $subscriptionPrice = new SubscriptionPrice;
    $package = request('plan');
    $package = "App\\Assignment\\{$package}";
    $price = $subscriptionPrice->getSubscriptionPrice(new $package);
    $_SESSION['success'] = "Subscription Price for ".request('plan')." plan is $price.";
    redirect('subscriptions');
});




