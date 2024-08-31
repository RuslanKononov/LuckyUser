<?php

namespace App\Http\Controllers;

use App\Domain\UserRegistration\UserRegistrationDomain;
use App\Http\Controllers\Factory\UserRegistrationFactory;
use Illuminate\Http\Request;

class UserRegistrationController extends Controller
{
    public function __construct(
        private readonly UserRegistrationDomain $domain,
        private readonly UserRegistrationFactory $factory,
    ){
    }

    public function index()
    {
        return view('auth.registration');
    }

    public function executeRegistration(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'phonenumber' => 'required|string|min:9',
        ]);

        $userRegistrationResponse = $this->domain->registerUser(
            $this->factory->requestToUserRegistrationDomainRequest($request)
        );

        return redirect()->route('pageA', ['pageLink' => $userRegistrationResponse->pageLink])
            ->with('status', 'User Registration Successful');
    }
}
