<?php
// require_once ROOTPATH . 'vendor/autoload.php';

namespace App\Controllers;

use Google\Client;

class AuthController extends BaseController
{
    public function signinPage()
    {
        return view('signin');
    }

    private $googleClient;

    public function __construct()
    {
        $this->googleClient = new Client(); 
        $this->googleClient->setClientId(getenv('GOOGLE_CLIENT_ID'));
        $this->googleClient->setClientSecret(getenv('GOOGLE_CLIENT_SECRET'));
        $this->googleClient->setRedirectUri(base_url('auth/google'));
        $this->googleClient->addScope('email');
        $this->googleClient->addScope('profile');
    }

    public function googleSignIn()
    {
        $authUrl = $this->googleClient->createAuthUrl();
        return redirect()->to($authUrl);
    }

    public function handleGoogleCallback()
    {
        $code = $this->request->getVar('code');

        if ($code) {
            $token = $this->googleClient->fetchAccessTokenWithAuthCode($code);
            $this->googleClient->setAccessToken($token);

            $oauth2 = new \Google\Service\Oauth2($this->googleClient);
            $userInfo = $oauth2->userinfo->get();

            // Example: Save user info to session or database
            session()->set('user', [
                'id' => $userInfo->id,
                'name' => $userInfo->name,
                'email' => $userInfo->email,
                'picture' => $userInfo->picture,
            ]);

            return redirect()->to('/employer'); // Redirect to a dashboard or home page
        }

        return redirect()->to('/signin'); // Redirect back to sign-in on failure
    }
}
