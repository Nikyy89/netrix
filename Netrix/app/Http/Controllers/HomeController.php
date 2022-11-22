<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }
    /*


// Show all Active Collab 5 and up account that this user has access to.
print_r($authenticator->getAccounts());

// Show user details (first name, last name and avatar URL).
print_r($authenticator->getUser());

// Issue a token for account #123456789.
$token = $authenticator->issueToken(123456789);

// Did we get it?
if ($token instanceof \ActiveCollab\SDK\TokenInterface) {
print $token->getUrl() . "\n";
print $token->getToken() . "\n";
} else {
    print "Invalid response\n";
    die();
}
     */
}
