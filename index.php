<?php

/**
 * TwitterOAuth - https://github.com/ricardoper/TwitterOAuth
 * PHP library to communicate with Twitter OAuth API version 1.1
 *
 * @author Ricardo Pereira <github@ricardopereira.es>
 * @copyright 2014
 */
header('Content-Type: text/xml; charset=utf-8');

require __DIR__ . '/vendor/autoload.php';

use TwitterOAuth\Auth\SingleUserAuth;

/**
 * Serializer Namespace
 */
use TwitterOAuth\Serializer\ArraySerializer;


date_default_timezone_set('UTC');


/**
 * Array with the OAuth tokens provided by Twitter
 *   - consumer_key        Twitter API key
 *   - consumer_secret     Twitter API secret
 *   - oauth_token         Twitter Access token         * Optional For GET Calls
 *   - oauth_token_secret  Twitter Access token secret  * Optional For GET Calls
 */
$credentials = array(
    'consumer_key' => 's1utiEdlGwdv23HalLOJR3npg',
    'consumer_secret' => 'iYROCvBH5qCuwWTJ8g9wcpkGBAb97oxBBR2lh8Lu9zRHxR42KO'
);

/**
 * Instantiate SingleUser
 *
 * For different output formats you can set one of available serializers
 * (Array, Json, Object, Text or a custom one)
 */
$auth = new SingleUserAuth($credentials, new ArraySerializer());


/**
 * Returns a collection of the most recent Tweets posted by the user
 * https://dev.twitter.com/docs/api/1.1/get/statuses/user_timeline
 */
$params = array(
    'q' => $_GET['q'],
    'count' => 10
);

/**
 * Send a GET call with set parameters
 */
$response = $auth->get('search/tweets', $params);

//echo '<pre>'; print_r($auth->getHeaders()); echo '</pre>';
//echo '<hr>';
$x = 0;

echo '<?xml version="1.0" encoding="utf-8"?>';
echo '<feed xmlns="http://www.w3.org/2005/Atom">';
echo '<title>Twitter Feed for '. $_GET["q"] .'</title>';
echo '<link href="http://192.168.1.231/twitter"/>';
echo '<updated>2003-12-13T18:30:02Z</updated>';
echo '<author>';
echo '<name>Twitter Feed</name>';
echo '</author>';
echo '<id>http://www.twitter.com</id>';
while($x < 10){
    echo '<entry>';
    echo '<title> Tweet about ' . $_GET["q"] . ' by ' . $response[statuses][$x][user][name] . '</title>';
    echo '<id>http://www.twitter.com</id>';
    echo '<updated>2003-12-13T18:30:02Z</updated>';
    echo '<summary>' . $response[statuses][$x][text] . '</summary>';
    echo '</entry>';
    $x++;
}
echo '</feed>';


//echo '<pre>'; print_r($response); echo '<pre>';
