<?php

namespace Feeder\Service;

use TwitterOAuth\Auth\SingleUserAuth,
TwitterOAuth\Serializer\ArraySerializer;

class AuthTwitter{

	private $credentials = array();

	public function __construct(){
		$this->credentials = array(
		    'consumer_key' => 's1utiEdlGwdv23HalLOJR3npg',
		    'consumer_secret' => 'iYROCvBH5qCuwWTJ8g9wcpkGBAb97oxBBR2lh8Lu9zRHxR42KO'
		);
	}

	public function conn(){
		return new SingleUserAuth($this->credentials, new ArraySerializer());
	}

}