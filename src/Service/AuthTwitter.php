<?php

namespace Feeder\Service;

use TwitterOAuth\Auth\SingleUserAuth,
    TwitterOAuth\Serializer\ArraySerializer;

class AuthTwitter
{

    public function conn($credentials)
    {
        return new SingleUserAuth($credentials, new ArraySerializer());
    }

}