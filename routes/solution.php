<?php

use App\Solution\Gold;
use App\Solution\Logger;
use App\Solution\Silver;
use App\Solution\BlogPost;
use App\Solution\Platinum;
use App\Solution\VideoPlayer;
use App\Solution\MailerService;
use App\Solution\OGGVideoPlayer;
use App\Solution\Output\HtmlOutput;
use App\Solution\Output\JsonOutput;
use App\Solution\SubscriptionPrice;
use App\Solution\Database\Connection;


$router->get('/',function ()
{
    return view('index');
});
$router->get('/about',function ()
{
    return view('about');
});

$router->get('/blogs', function($request) {
  return (new BlogPost(new Connection))->getAll(new HtmlOutput);
});

$router->get('/api/blogs', function($request) {
  return (new BlogPost(new Connection))->getAll(new JsonOutput);
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
    $package = "App\\Solution\\{$package}";
    $price = $subscriptionPrice->getSubscriptionPrice(new $package);
    $_SESSION['success'] = "Subscription Price for ".request('plan')." plan is $price.";
    redirect('subscriptions');
});




