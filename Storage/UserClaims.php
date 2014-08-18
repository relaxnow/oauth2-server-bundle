<?php

namespace OAuth2\ServerBundle\Storage;

use Doctrine\ORM\EntityManager;
use OAuth2\OpenID\Storage\UserClaimsInterface;

class UserClaims implements UserClaimsInterface
{
    /**
     * Return claims about the provided user id.
     *
     * Groups of claims are returned based on the requested scopes. No group
     * is required, and no claim is required.
     *
     * @param $user_id
     * The id of the user for which claims should be returned.
     * @param $scope
     * The requested scope.
     * Scopes with matching claims: profile, email, address, phone.
     *
     * @return
     * An array in the claim => value format.
     *
     * @see http://openid.net/specs/openid-connect-core-1_0.html#ScopeClaims
     */
    public function getUserClaims($user_id, $scope)
    {
        return [
            'demo' => 'demo',
            'email' => 'boy@ibuildings.nl',
        ];
    }

}