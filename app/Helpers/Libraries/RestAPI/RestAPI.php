<?php

namespace App\Helpers\Libraries\RestAPI;

use App\Services\SimpleHasher;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class RestAPI
{
    /** @var mixed|string token used for auth */
    public mixed $_restToken;

    /** @var string URI rest server end point */
    public string $_remoteHost = 'https://rest.bison.ca';

    /** @var string default session name for token storage */
    public string $_defaultTokenSessionName = 'restApiToken';

    /** @var string storage for token */
    public string $sessionTokenName;

    /** @var mixed|int unix time of when the token will expire */
    public $expireTime;

    /** @var string default version number */
    public string $version = 'v2';

    public $_session;

    /** @var string service that is making the request */
    private string $_service;

    private $_maxByte = 20971520; //20 MB

    /** @var array response codes for reply/errors */
    private $_responseCodes;

    /**
     * @throws Exception
     */
    public function __construct(?string $token = null, ?string $remoteHost = null)
    {
        $this->_session = session() ?? false;
        $this->_service = $_SERVER['SERVER_NAME'] ?? config('app.name');
        $this->setTokenSessionName($this->_defaultTokenSessionName);

        if (! empty($remoteHost)) {
            $this->setRemoteHost($remoteHost);
        }

        if (! empty($token)) {
            $this->setToken($token);
        } else {
            if ($this->_service == config('app.name')) {
                $this->setToken(config('bison.rest_token'));
            } elseif (Auth::check()) {
                throw new Exception('This file process requires the user to be login or a token to be provided.');
            } else {
                if (! $this->getUserSessionToken()) {
                    if (! $this->setUsersSessionToken()) {
                        throw new Exception('Unable to set users token.');
                    }
                }
            }
        }
    }

    /**
     * setTokenSessionName sets session name of the token which store the token for connecting to restAPI
     */
    public function setTokenSessionName(string $tokenName): void
    {
        $this->sessionTokenName = $tokenName;
    }

    /**
     * setRemoteHost sets the restAPI to connect/request files from
     */
    public function setRemoteHost(string $remoteHost): void
    {
        $this->_remoteHost = $remoteHost;
    }

    /**
     * setToken set the token to connect to the restAPI
     */
    public function setToken(string $token): void
    {
        $this->_restToken = $token;
        $this->expireTime = null;
    }

    public function getUserSessionToken(): mixed
    {
        if (! empty($this->_session)) {
            if ($this->_session->has($this->sessionTokenName)) {
                $tokenData = $this->_session->get($this->sessionTokenName);
                if (isset($tokenData['accessTokenExpireOn']) && strtotime($tokenData['accessTokenExpireOn']) > time()
                    && isset($tokenData['accessToken']) && ! empty($tokenData['accessToken'])) {
                    $this->expireTime = strtotime($tokenData['accessTokenExpireOn']);
                    $this->_restToken = $tokenData['accessToken'];

                    return $this->_restToken;
                } else {
                    $this->_session->destroySession($this->sessionTokenName);
                }
            }
        }

        return false;
    }

    public function setUsersSessionToken(): bool
    {
        if (! empty($this->_session)) {
            $this->_restToken = null;
            $this->_session->destroySession($this->sessionTokenName);

            if (Auth::check()) {
                return false;
            }

            $response = Http::post($this->_remoteHost . '/v2/generateToken',
                [
                    'username' => Auth::user()->email,
                    'password' => SimpleHasher::class->decrypt(Auth::user()->getAuthPassword()),
                    'service' => $this->_service,
                ]
            );

            if ($response->status() !== 200) {
                return false;
            }

            $jsonData = json_decode($response->json(), true);
            if (empty($jsonData['data']['accessToken'])) {
                return false;
            }

            $this->_session->set($this->sessionTokenName, $jsonData['data']);

            $this->_restToken = $jsonData['data']['accessToken'];
            $this->expireTime = strtotime($jsonData['data']['accessTokenExpireOn']);

            return true;
        }

        return false;
    }
}
