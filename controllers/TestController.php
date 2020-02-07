<?php


namespace app\controllers;

use yii\httpclient\Client;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        $client = new Client([
            'baseUrl' => 'https://localhost:44387/api/',
            'requestConfig' => [
                'format' => Client::FORMAT_JSON,
            ],
            'responseConfig' => [
                'format' => Client::FORMAT_JSON,
            ]
        ]);
        $response = $client->createRequest()
            ->setMethod('get')
            ->setUrl('TimingTrainings/')
            ->send();

        $content = json_decode($response->getContent());
        if($response->isOk){
            return $this->render('index', [
                'content' => $content,
            ]);
        }



    }

}