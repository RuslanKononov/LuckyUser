<?php

declare(strict_types=1);

namespace App\Repository;

use App\Models\UserPage;

class UserPageRepository
{
    public function getValidUserPageByPageLink(string $pageLink): UserPage
    {
        return UserPage::where([
            ['link', '=', $pageLink],
            ['valid_until', '>', now()]
            ])->first();
    }

    public function setNewPageLink(string $oldPageLink, string $newPageLink): void
    {
        UserPage::where('link', $oldPageLink)->update([
            'link' => $newPageLink,
            'valid_until' => now()->modify(sprintf('+%d days', config('services.link.ttl'))),
        ]);
    }

    public function deactivateLink(string $pageLink): void
    {
        UserPage::where('link', $pageLink)->update([
            'valid_until' => now(),
        ]);
    }
}
