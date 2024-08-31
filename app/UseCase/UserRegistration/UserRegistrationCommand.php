<?php

declare(strict_types=1);

namespace App\UseCase\UserRegistration;

use App\Domain\UserRegistration\UserRegistrationRequest;
use App\Domain\UserRegistration\UserRegistrationResponse;
use App\Service\LinkGenerationService\LinkGenerationServiceInterface;
use App\UseCase\UserRegistration\Factory\RegisterUserFactory;

class UserRegistrationCommand
{
    public function __construct(
        private readonly UserRegistrationPersistenceInterface $userRegistrationPersistence,
        private readonly UserRegistrationQueryInterface $userRegistrationQuery,
        private readonly RegisterUserFactory $factory,
        private readonly LinkGenerationServiceInterface $linkGenerationService,
    ){
    }

    public function execute(UserRegistrationRequest $request): UserRegistrationResponse
    {
        $pageLink = $this->linkGenerationService->generate();
        $this->userRegistrationPersistence->persist($this->factory->makeCreateUserDTO($request, $pageLink));

        return $this->factory->makeUserRegistrationResponse(
            $this->userRegistrationQuery->getUserDTO($request->uuid)
        );
    }
}
