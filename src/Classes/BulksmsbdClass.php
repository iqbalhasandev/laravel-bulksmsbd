<?php

namespace iqbalhasandev\bulksmsbd\Classes;

use GuzzleHttp\Client;


class BulksmsbdClass
{
    /*
     * API Response Code
     * 1000 = Invalid user or Password
     * 1002 = empty Number
     * 1003 = Invalid message or empty message
     * 1004 = Number should be 13 Digit
     * 1005 = Invalid number
     * 1006 = insufficient Balance
     * 1009 = Inactive Account
     * 1010 = Max number limit exceeded
     * 1101 = Success
     */

    /**
     * If sms sent true return else throws Exception
     * @param $numbers
     * @param $message
     * @return bool
     * @throws \Exception
     */
    public function send($numbers, $message)
    {

        $username = config('bulksmsbd.username');
        $password = config('bulksmsbd.password');

        if ($username == '' || $password == '') {
            throw  new \Exception("Password Or User Name dose not match !", 1000);
        }

        $client = new Client();

        if (is_array($numbers)) {
            $numbers = implode(',', $numbers);
        } else {
            $numbers = $numbers;
        }

        $data = array(
            'username' => "$username",
            'password' => "$password",
            'number' => $numbers,
            'message' => "$message"
        );
        $response = $client->post('http://66.45.237.70/api.php', [
            'form_params' => $data
        ]);

        switch ((string)$response->getBody()) {
            case  1000:
                throw new \Exception('Invalid user or Password', 1000);
                break;
            case  1002:
                throw new \Exception('Empty Number', 1002);
                break;
            case  1003:
                throw new \Exception('Invalid message or empty message', 1003);
                break;
            case  1004:
                throw new \Exception('Number should be 13 Digit', 1004);
                break;
            case  1005:
                throw new \Exception('Invalid number', 1005);
                break;
            case  1006:
                throw new \Exception('insufficient Balance', 1006);
                break;
            case  1009:
                throw new \Exception('Inactive Account', 1009);
                break;
            case  1010:
                throw new \Exception('Max number limit exceeded', 1010);
                break;
            case  1101:
                return true;
                break;
        }

        throw  new \Exception('Unknown', -1);
    }
}
