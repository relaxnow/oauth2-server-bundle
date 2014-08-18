<?php

namespace OAuth2\ServerBundle\Storage;

use Doctrine\ORM\EntityManager;
use OAuth2\Storage\PublicKeyInterface;

class PublicKey implements PublicKeyInterface
{
    public function getPublicKey($client_id = null)
    {
        return 'drupal';
    }

    public function getPrivateKey($client_id = null)
    {
        return 'drupal';
    }

    public function getEncryptionAlgorithm($client_id = null)
    {
        return 'HS256';
    }
}