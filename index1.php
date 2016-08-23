<?php

require_once('vendor/autoload.php');
use Feeder\Service\Feed;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = substr($uri, strpos($uri, 'index.php'));
$method = $_SERVER['REQUEST_METHOD'];

if ((preg_match('~^index.php/feed/(\w+)$~', $uri, $matches) || preg_match('~^index.php/feed/(\w+)/$~', $uri, $matches))
    && $method == 'GET') {

    $feed = new Feed();
    $feed->getXML($matches[1]);

} else {
    header('HTTP/1.1 404 Not Found');
    echo '{"error":404}';
}
