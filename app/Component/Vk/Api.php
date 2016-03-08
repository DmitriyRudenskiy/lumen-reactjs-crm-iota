<?php
namespace App\Component\Vk;

class Api
{
    /**
     * ID приложения
     *
     * @var string
     */
    private $clientId;

    /**
     * Защищённый ключ
     *
     * @var string
     */
    private $clientSecret;

    /**
     * Адрес сайта
     *
     * @var string
     */
    private $redirectUri;

    const URL_AUTH = 'http://oauth.vk.com';

    public function __construct()
    {
        if (env('VKONTAKTE_KEY') === null
            || env('VKONTAKTE_SECRET') === null
            || env('VKONTAKTE_URL') === null
        ) {
            throw new \RuntimeException();
        }

        $this->clientId = env('VKONTAKTE_KEY');
        $this->clientSecret = env('VKONTAKTE_SECRET');
        $this->redirectUri = env('VKONTAKTE_URL');

    }

    /**
     * Получаем url для авторизации
     * @return string
     */
    public function getUrl()
    {
        $params = [
            'client_id' => $this->clientId,
            'redirect_uri' => $this->redirectUri,
            'response_type' => 'code'
        ];

        return self::URL_AUTH . '/authorize?' . urldecode(http_build_query($params));
    }

    public function getUserId($code)
    {
        $params = [
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'code' => $code,
            'redirect_uri' => $this->redirectUri,
        ];

        $url = 'https://oauth.vk.com/access_token?' . urldecode(http_build_query($params));

        $content = @file_get_contents($url);

        if (empty($content)) {
            // TODO: логирование
            return null;
        }

        $token = json_decode($content, true);

        if (empty($token)) {
            // TODO: логирование
            return null;
        }

        return new Token($token);
    }

    /**
     * @param Token $token
     * @return Profile|null
     */
    public function getProfile(Token $token)
    {
        $profile = new Profile();

        $params = array(
            'uids' => $token->getUserId(),
            'fields' => $profile->getFields(),
            'access_token' => $token->getAccessToken()
        );

        $url = 'https://api.vk.com/method/users.get?' . urldecode(http_build_query($params));

        $content = @file_get_contents($url);

        if (empty($content)) {
            // TODO: логирование
            return null;
        }

        $userInfo = json_decode($content, true);

        if (empty($userInfo['response'][0]['uid'])) {
            // TODO: логирование
            return null;
        }

        $profile->init($userInfo['response'][0]);

        return $profile;
    }
}