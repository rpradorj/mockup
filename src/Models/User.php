<?php
declare(strict_types=1);

namespace App\Models;

use PradoSystems\Auth\Contracts\UserInterface;

class User implements UserInterface
{
    public function __construct(
        private readonly string|int $id,
        private readonly string $name,
        private readonly string $email,
        private readonly string $password,
        private readonly bool $verified = true
    ) {}

    public function getId(): string|int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getEmail(): string { return $this->email; }
    public function getPassword(): string { return $this->password; }
    public function isEmailVerified(): bool { return $this->verified; }
}
