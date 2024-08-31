<?php

namespace App\Http\Controllers;

use App\Domain\PageADeactivateLink\PageADeactivateLinkDomain;
use App\Http\Controllers\Factory\PageADeactivateLinkFactory;
use Illuminate\Http\Request;

class PageADeactivateLinkController extends Controller
{
    public function __construct(
        private readonly PageADeactivateLinkDomain $domain,
        private readonly PageADeactivateLinkFactory $factory,
    ){
    }

    public function index(Request $request)
    {
        $this->domain->deactivateLink(
            $this->factory->createPageADeactivateLinkDomainRequest($request)
        );

        return redirect()->route('register-user')
            ->with('status', 'Link was successfully deactivated.');
    }
}
