<?php
namespace App\Component;


class Sms
{
    private $soap;

    private $login;

    private $password;

    const SOURCE = 'Autodeviz';

    const WSDL = 'https://sms4b.ru/ws/sms.asmx?wsdl';

    public function __construct()
    {
        if (env('SMS_LOGIN') === null || env('SMS_PASSWORD') === null) {
            throw new \RuntimeException();
        }

        $this->login = env('SMS_LOGIN');
        $this->password = env('SMS_PASSWORD');

        $this->soap = new \SoapClient(self::WSDL, ['soap_version' => SOAP_1_2]);
    }

    public function send($phone, $message)
    {
        $sendData = [
            "Login" => $this->login,
            "Password" => $this->password,
            "Source" => self::SOURCE,
            "Phone" => 7 . $phone,
            "Text" => $message
        ];

        $result = $this->soap->__call('SendSMS',[$sendData]);

        if (is_object($result) && !empty($result->SendSMSResult)) {
            return $result->SendSMSResult;
        }

        return serialize($result);
    }
}