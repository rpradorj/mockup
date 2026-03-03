<?php
declare(strict_types=1);

namespace App\Factories;

use App\Models\User;
use PradoSystems\Auth\Contracts\UserFactoryInterface;
use PradoSystems\Auth\Contracts\UserInterface;
use PradoSystems\Auth\DTOs\AuthData;
use PradoSystems\Auth\Support\NativePasswordHasher;

class UserFactory implements UserFactoryInterface
{
    public function __construct(
        private NativePasswordHasher $hasher
    ) {}

    public function create(AuthData $data): UserInterface
    {
        // Aplicamos o hash na senha ANTES de criar o objeto User
        $hashedPassword = $this->hasher->hash($data->password);

        return new User(
            id: uniqid('u_'),
            name: $data->meta['name'] ?? 'Usuário',
            email: $data->email,
            password: $hashedPassword, // Agora salva o HASH no JSON
            verified: true
        );
    }
}
