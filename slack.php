<?php
require 'vendor/autoload.php';
use \GuzzleHttp\Client;

class Slack
{
    private $config;

    public function __construct()
    {
        $this->config = parse_ini_file('./app.ini');
    }

    public function request()
    {

        // slackに送るリクエスト
        $data = [
            'channel' => $this->config['Channel'],
            'username'=> 'test-bot',
            'text' => 'test'
        ];

        $jsonData = json_encode($data);

        $client = new Client();
        // curlのオプション
        $options = [
            'body' => $jsonData,
            'verify' => false,
            'headers' => ['application/json']
        ];
            
        $response = $client->request('POST', $this->config['WebHookUrl'], $options);
        echo $response->getStatusCode();
        die();
    }
}

$app = new Slack();
$app->request();
