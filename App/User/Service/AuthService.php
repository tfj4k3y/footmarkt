<?php


namespace App\User\Service;


use App\User\Model\Token;

class AuthService
{
    private $userService;

    /**
     * AuthService constructor.
     */
    public function __construct() {
        $this->userService = new UserService();
    }

    public function login($login, $password) {

        $isUserExists = $this->userService->isUserWithPasswordExists($login, $password);

        if ($isUserExists) {
            return new Token(JwtHelper::generateUserToken($login));
        }

        return null;
    }

}