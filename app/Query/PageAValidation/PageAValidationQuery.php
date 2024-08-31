<?php

declare(strict_types=1);

namespace App\Query\PageAValidation;

use App\DTO\PageAValidation\UserDTO;
use App\Query\PageAValidation\Exception\PageLinkValidationQueryException;
use App\Query\PageAValidation\Factory\PageAValidationQueryFactory;
use App\Repository\UserPageRepository;
use App\UseCase\PageAValidation\PageAValidationQueryInterface;

class PageAValidationQuery implements PageAValidationQueryInterface
{
    public function __construct(
        private readonly UserPageRepository $userPageRepository,
        private readonly PageAValidationQueryFactory $factory,
    ){
    }

    public function getValidUserDTOByPageLink(string $pageLink): UserDTO
    {
        try {
            return $this->factory->makeUserDTOFromUserPage(
                $this->userPageRepository->getValidUserPageByPageLink($pageLink)
            );
        } catch (\Throwable) {
            throw new PageLinkValidationQueryException('Link of page was not found or not valid');
        }
    }
}
