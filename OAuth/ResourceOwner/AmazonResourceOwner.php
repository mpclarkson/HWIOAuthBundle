<?php

/*
 * This file is part of the HWIOAuthBundle package.
 *
 * (c) Hardware.Info <opensource@hardware.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HWI\Bundle\OAuthBundle\OAuth\ResourceOwner;

/**
 * AmazonResourceOwner
 *
 * @author Fabian Kiss <fabian.kiss@ymc.ch>
 */
class AmazonResourceOwner extends GenericOAuth2ResourceOwner
{
    /**
     * {@inheritDoc}
     */
    protected $options = array(
        'authorization_url' => 'https://www.amazon.com/ap/oa',
        'access_token_url'  => 'https://www.amazon.com/auth/o2/token',
        'infos_url'         => 'https://api.amazon.com/user/profile',

        'scope'             => 'profile',
    );

    /**
     * {@inheritDoc}
     */
    protected $paths = array(
        'identifier' => 'user_id',
        'nickname'   => 'name',
        'realname'   => 'name',
        'email'      => 'email',
    );
}
