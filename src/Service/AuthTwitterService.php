<?php

namespace Feeder\Service;

use TwitterOAuth\Auth\SingleUserAuth,
    TwitterOAuth\Serializer\ArraySerializer;

class AuthTwitterService
{

    public function conn($credentials)
    {
        return new SingleUserAuth($credentials, new ArraySerializer());
    }

}