<?php

namespace OAuth2\ServerBundle\Controller;

use OAuth2\Server;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserInfoController extends Controller
{
    /**
     * @Route("/UserInfo", name="_user_info")
     */
    public function userInfoAction()
    {
        /** @var Server $server */
        $server = $this->get('oauth2.server');

        return $server->handleUserInfoRequest($this->get('oauth2.request'), $this->get('oauth2.response'));
    }
}
