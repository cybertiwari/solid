<?php

$router->get('/profile', function($request) {
    return <<<HTML
    <h1>Profile</h1>
  HTML;
});