<?php

use Symfony\Component\HttpFoundation\Response;

$app['debug'] = true;

$app->match('/install', function(){
    return 'Install';
});

$app->get('/build/{username}', function($username) use ($app) {
    $twitter = new Abraham\TwitterOAuth\TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);

    $statuses_1 = $twitter->get('statuses/user_timeline', ['screen_name'=>$username, 'count'=>'200', 'exclude_replies'=>'true', 'include_rts'=>'false']);
    $statuses_2 = $twitter->get('statuses/user_timeline', ['max_id'=>$statuses_1[(count($statuses_1)-1)]->id, 'screen_name'=>$username, 'count'=>'200', 'exclude_replies'=>'true', 'include_rts'=>'false']);

    $statuses = array_merge($statuses_1, $statuses_2);

    if ($twitter->lastHttpCode() == 200) {
        $text_sample = '';

        foreach ($statuses as $status) {
            $filtered_text = preg_replace('/https?:\/\/t\.co\/[[:alnum:]]+/', '', $status->text);
            $text_sample .= $filtered_text.PHP_EOL;
        }

        $chain = new MarkovPHP\WordChain($text_sample, 1);

        $data = [
                'image'         => $statuses['0']->user->profile_image_url,
                'username'      => $statuses['0']->user->screen_name,
                'name'          => $statuses['0']->user->name,
                'random_tweet'  => $chain->generate(rand(3, 20))
            ];

        return $app->json($data);
    } else {
        return $app->json($statuses);
    }
});

$app->get('/', function(){
    return require __DIR__.'/views/frontend.php';
});
