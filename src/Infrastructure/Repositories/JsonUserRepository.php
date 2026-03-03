<?php
declare(strict_types=1);

namespace App\Infrastructure\Repositories;

use App\Models\User;
use PradoSystems\Auth\Contracts\UserRepositoryInterface;
use PradoSystems\Auth\Contracts\UserInterface;

class JsonUserRepository implements UserRepositoryInterface
{
    public function __construct(private string $filePath) {}

    // ESTE É O MÉTODO QUE ESTAVA FALTANDO:
    public function findById(string|int $id): ?UserInterface
    {
        $users = $this->loadAll();
        foreach ($users as $user) {
            if ($user->getId() === $id) {
                return $user;
            }
        }
        return null;
    }

    public function findByEmail(string $email): ?UserInterface
    {
        $users = $this->loadAll();
        return $users[$email] ?? null;
    }

    public function save(UserInterface $user): void
    {
        $users = $this->loadAll();
        $users[$user->getEmail()] = $user;
        $this->persist($users);
    }

    private function loadAll(): array
    {
        if (!file_exists($this->filePath)) return [];

        $data = json_decode(file_get_contents($this->filePath), true) ?: [];
        $users = [];
        foreach ($data as $u) {
            $users[$u['email']] = new User($u['id'], $u['name'], $u['email'], $u['password'], $u['verified']);
        }
        return $users;
    }

    private function persist(array $users): void
    {
        $data = array_map(fn($u) => [
            'id' => $u->getId(),
            'name' => $u->getName(),
            'email' => $u->getEmail(),
            'password' => $u->getPassword(),
            'verified' => $u->isEmailVerified()
        ], $users);

        file_put_contents($this->filePath, json_encode(array_values($data), JSON_PRETTY_PRINT));
    }
}
