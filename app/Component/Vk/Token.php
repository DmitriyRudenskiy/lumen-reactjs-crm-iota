<?php
namespace App\Component\Vk;

class Token
{
    /**
     * @var int
     */
    private $userId;

    /**
     * @var string
     */
    private $accessToken;

    public function __construct(array $data)
    {
        if (!empty($data['user_id'])) {
            $this->userId = $data['user_id'];
        }

        if (!empty($data['access_token'])) {
            $this->accessToken = $data['access_token'];
        }
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return ($this->getUserId() !== null && $this->getAccessToken() !== null);
    }
}