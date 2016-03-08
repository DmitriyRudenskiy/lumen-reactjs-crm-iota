<?php
namespace App\Component\Vk;


class Profile
{
    /**
     * @var
     */
    private $id;

    /**
     * @var
     */
    private $login;

    /**
     * @var
     */
    private $photo;

    /**
     * @var
     */
    private $firstName;

    /**
     * @var
     */
    private $lastName;

    public function getFields()
    {
        return 'uid,first_name,last_name,screen_name,city,photo_50,mobile_phone';
    }

    public function init(array $data)
    {

        if (!empty($data["uid"])) {
            $this->id = (int)$data["uid"];
        }

        if (!empty($data["first_name"])) {
            $this->firstName = $data["first_name"];
        }

        if (!empty($data["last_name"])) {
            $this->lastName = $data["last_name"];
        }

        if (!empty($data["screen_name"])) {
            $this->login = $data["screen_name"];
        }

        if (!empty($data["photo_50"])) {
            $this->photo = $data["photo_50"];
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }
}