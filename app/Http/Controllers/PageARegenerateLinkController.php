<?php

namespace App\Http\Controllers;

use App\Domain\PageARegenerateLink\PageARegenerateLinkDomain;
use App\Http\Controllers\Factory\PageARegenerateLinkFactory;
use Illuminate\Http\Request;

class PageARegenerateLinkController extends Controller
{
    public function __construct(
        private readonly PageARegenerateLinkDomain $domain,
        private readonly PageARegenerateLinkFactory $factory,
    ){
    }

    public function index(Request $request)
    {
        $pageARegenerateLinkResponse = $this->domain->regenerate(
            $this->factory->createPageARegenerateLinkDomainRequest($request)
        );

        return redirect()->route('pageA', ['pageLink' => $pageARegenerateLinkResponse->newPageLink])
            ->with('status', 'Link regenerated');
    }
}
