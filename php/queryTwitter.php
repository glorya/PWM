<?php
require_once('TwitterAPIExchange.php');

$hashtag = $_GET["q"];

$settings = array(
    'oauth_access_token' => "3385740927-VNNRfS0NwxYGlPRz8rxg5ZsjrgPo3TbpcRyOtnH",
    'oauth_access_token_secret' => "MhSl6JDzivT0iFu0FWNcMc2rzzyahtRZZCGm4MX8Er4eZ",
    'consumer_key' => "0fSkzlwtQdVY7MeH2vQGlkv3n",
    'consumer_secret' => "AMlGHlzfFzcP12cJXCSLwi1eMjw51lkoHYT4hyPas9P73O1Zgh"
);

$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=#'.$hashtag.' AND -filter:retweets AND -filter:replies&lang=en&count=20&tweet_mode=extended';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
     ->buildOauth($url, $requestMethod)
     ->performRequest();

echo $response;
?>