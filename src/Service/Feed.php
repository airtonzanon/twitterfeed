<?php

namespace Feeder\Service;

use Feeder\Service\AuthTwitter;

class Feed{

	private $response;


	public function __construct(){

		header('Content-Type: text/xml; charset=utf-8');
		date_default_timezone_set('UTC');

	}

	public function getData($search){
		$auth = new AuthTwitter();
		//$auth = $auth->conn();

		$params = array(
		    'q' => $search,
		    'count' => 10
		);

		$this->response = $auth->conn()->get('search/tweets', $params);
	}

	public function getXML($search){
		$this->getData($search);

		$x = 0;

		echo '<?xml version="1.0" encoding="utf-8"?>';
		echo '<feed xmlns="http://www.w3.org/2005/Atom">';
		echo '<title>Twitter Feed for '. $search .'</title>';
		echo '<link href="http://192.168.1.231/twitter"/>';
		echo '<updated>2003-12-13T18:30:02Z</updated>';
		echo '<author>';
		echo '<name>Twitter Feed</name>';
		echo '</author>';
		echo '<id>http://www.twitter.com</id>';
		foreach($this->response as $data){
		    echo '<entry>';
		    echo '<title> Tweet about ' . $search . ' by ' . $data[$x][user][name] . '</title>';
		    echo '<id>http://www.twitter.com</id>';
		    echo '<updated>2003-12-13T18:30:02Z</updated>';
		    echo '<summary>' . $data[$x][text] . '</summary>';
		    echo '</entry>';
		    $x++;
		}
		echo '</feed>';
	}

}