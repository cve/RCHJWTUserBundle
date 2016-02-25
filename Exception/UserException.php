<?php

/**
 * This file is part of the RCHJWTUserBundle package.
 *
 * Robin Chalas <robin.chalas@gmail.com>
 *
 * For more informations about license, please see the LICENSE
 * file distributed in this source code.
 */
namespace RCH\JWTUserBundle\Exception;

/**
 * AlreadyExistingUserException is thrown when a user is persisted with
 * an identifier that already exists in database.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class UserException extends \RuntimeException
{
    private $statusCode;

    /**
     * Constructor.
     *
     * @param int             $statusCode
     * @param string|null     $message
     * @param \Exception|null $previous
     */
    public function __construct($statusCode = 500, $message = null, \Exception $previous = null, $code = 0)
    {
        $this->statusCode = $statusCode;

        parent::__construct($message, $code, $previous);
    }

    /**
     * Get statusCode.
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
}