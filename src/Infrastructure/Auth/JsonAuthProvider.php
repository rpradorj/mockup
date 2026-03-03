<?php
declare(strict_types=1);

namespace App\Infrastructure\Auth;

use PradoSystems\Auth\Contracts\AuthProviderInterface;
use PradoSystems\Auth\Contracts\UserRepositoryInterface;
use PradoSystems\Auth\DTOs\AuthData;
use PradoSystems\Auth\Exceptions\AuthException;
use PradoSystems\Auth\Support\NativePasswordHasher;
use PradoSystems\Auth\Contracts\UserInterface;

class JsonAuthProvider implements AuthProviderInterface
{
    public function __construct(
        private UserRepositoryInterface $repository,
        private NativePasswordHasher $hasher
    ) {}

    public function attempt(string $email, string $password): ?UserInterface
    {
        $user = $this->repository->findByEmail($email);

        if (!$user || !$this->hasher->verify($password, $user->getPassword())) {
            return null;
        }

        return $user;
    }

    /**
     * AJUSTADO: Agora recebe o objeto User conforme a Interface exige
     */
    public function login(UserInterface $user): string
    {
        // O usuário já chegou aqui validado pelo Action/Attempt
        $token = bin2hex(random_bytes(32));

        $_SESSION['user_token'] = $token;
        $_SESSION['user_id'] = $user->getId();
        $_SESSION['user_email'] = $user->getEmail();
        $_SESSION['user_name'] = $user->getName();

        return $token;
    }

    public function logout(string $sessionToken): void
    {
        unset($_SESSION['user_token'], $_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name']);
    }
}
