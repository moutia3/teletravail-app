<?php

namespace App\Repositories;

interface AuthRepositoryInterface
{
    public function register(array $data);
    public function login(array $credentials);
    public function logout($user);
    public function getUser($user);
}