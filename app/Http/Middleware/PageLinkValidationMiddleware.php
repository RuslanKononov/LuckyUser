<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Domain\PageAValidation\PageAValidationDomain;
use App\Http\Middleware\Factory\PageAValidationMiddlewareFactory;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PageLinkValidationMiddleware
{
    public function __construct(
        private readonly PageAValidationDomain $pageAValidationDomain,
        private readonly PageAValidationMiddlewareFactory $factory,
    ){
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            $response = $this->pageAValidationDomain->validate(
                $this->factory->createPageAValidationDomainRequest($request)
            );

            // Add new properties of request
            $request->request->add([
                'userUuid' => $response->userUuid,
                'pageLink' => $response->pageLink,
                'validUntil' => $response->validUntil,
            ]);
        } catch (\Throwable $exception) {
            abort(404);
        }

        return $next($request);
    }
}
