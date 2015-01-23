<?php

$app['debug'] = true;

$app->match('/install', function(){
    return 'Install';
});

$app->get('/build/{username}', function($username) use ($app) {
    $twitter = new Abraham\TwitterOAuth\TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);

    $statuses = $twitter->get('statuses/user_timeline', ['screen_name'=>$username, 'count'=>'200', 'exclude_replies'=>'true', 'include_rts'=>'false']);

    $text_sample = '';

    foreach ($statuses as $status) {
        $text_sample .= $status->text.PHP_EOL;
    }

    $chain = new MarkovPHP\WordChain($text_sample, 1);

    $data = [
            'image'         => $statuses['0']->user->profile_image_url,
            'username'      => $statuses['0']->user->screen_name,
            'name'          => $statuses['0']->user->name,
            'random_tweet'  => $chain->generate(10)
        ];

    return $app->json($data);
});

$app->get('/', function(){
    return require __DIR__.'/views/frontend.php';
});
