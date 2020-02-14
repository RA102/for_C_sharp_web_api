<?php



namespace app\controllers;

use yii\base\ErrorException;
use yii\httpclient\Client;
use yii\httpclient\Exception;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;

class TrainingTimeController extends Controller
{

    public function actionIndex()
    {
        try {

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
        } catch (\Exception $exception) {
            throw new Exception('Сервер не доступен', $exception->getCode());
        }


        $content = json_decode($response->getContent());
        if($response->isOk){
            return $this->render('index', [
                'content' => $content,
            ]);
        }
    }

    public function actionCreate()
    {
        $request = Yii::$app->request;
        if ($request->isPost) {
            
        }
        try {

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
        } catch (\Exception $exception) {
            throw new Exception('Сервер не доступен', $exception->getCode());
        }

        $content = json_decode($response->getContent());


    }

}