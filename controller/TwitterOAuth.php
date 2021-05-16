<?php
require "../vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;


// * Setting access tokens and API keys
$consumerKey       = "9SDK1ujsdWieD8SJUE9Y3JK8A";
$consumerSecret    = "U9SHSJwOS8jsHWEbSD72ckB4jSBeimDd32JSHOP8SJW3XNCmv2";
$accessToken       = "8475324536-iret8h9WISeKmDWFMMNE1YjXca8sxKsd4KsSainZ";
$accessTokenSecret = "PSDH9YjisD1FZJWNuqK8SISKQ1FqzhiCzkHtrTsjd3kS";

//twitter acc 
$twitterID = 'codexworldblog';

//number of tweets
$tweetNum = 10;

$twitterConnection = new TwitterOAuth($consumerKey,$consumerSecret,$accessToken,$accessTokenSecret);

//getting user timeline feed

$feedData = $twitterConnection->get('statuses/user_timeline',
    array(
        'screen_name'     => $twitterID,
        'count'           => $tweetNum,
        'exclude_replies' => false
    )
);