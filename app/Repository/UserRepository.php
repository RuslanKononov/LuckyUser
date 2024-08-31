<?php

declare(strict_types=1);

namespace App\Repository;

use App\DTO\UserRegistration\CreateUserDTO;
use App\Models\User;
use App\Models\UserPage;
use Symfony\Component\Uid\Uuid;

class UserRepository
{
    public function createUser(CreateUserDTO $createUserDTO): void
    {
        $user = new User();

        $user->uuid = Uuid::fromRfc4122($createUserDTO->uuid);
        $user->username = $createUserDTO->username;
        $user->phonenumber = $createUserDTO->phoneNumber;

        $userPage = new UserPage();
        $userPage->uuid = Uuid::v6();
        $userPage->link = $createUserDTO->pageLink;
        $userPage->valid_until = now()->modify(sprintf('+%d days', config('services.link.ttl')));

        $user->save();
        $user->page()->save($userPage);
    }

    public function getUserByUserUuid(string $uuid): User
    {
        return User::find(Uuid::fromRfc4122($uuid));
    }
}
