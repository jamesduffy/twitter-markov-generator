<?php

$app['debug'] = true;

$app->match('/install', function(){
    return 'Install';
});

$app->get('/twitterauth', function() use ($app) {
    $twitter = new Abraham\TwitterOAuth\TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);

    $request_token = $twitter->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));

    $_SESSION['oauth_token']        = $request_token['oauth_token'];
    $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

    $url = $twitter->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));

    return $app->redirect($url);
});

$app->get('/twittercallback', function(){

});

$app->get('/', function(){
    return require __DIR__.'/views/frontend.php';
});
