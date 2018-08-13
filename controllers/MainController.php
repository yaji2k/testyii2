<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\User;
use app\models\Statemant;
use Yii;

class MainController extends Controller
{

    public function actionIndex()
    {
        $users = User::find()->all();
        return $this->render('index', ['users' => $users]);
    }

    public function actionRequest()
    {
        if (Yii::$app->request->post()) {
            $model = new Statemant();
            if ($model->load(Yii::$app->request->post())) {
                if ($model->save()) {
                    Yii::$app->session->setFlash('success', 'Заявление принято!');
                    return $this->refresh();
                } else {
                    Yii::$app->session->setFlash('error', 'Ошибка данные не приняты!');
                }
            }
        }
        if (Yii::$app->request->isAjax) {
            $name = Yii::$app->request->get('r');
            $result = User::find()->where(['profile_name' => $name])->all();
            return json_encode(['name' => $result[0]->name, 'profile' => $result[0]->profile_name]);
        }
        $model = new Statemant();
        $users = User::find()->all();
        return $this->render('request', ['users' => $users, 'model' => $model]);
    }

    public function actionProfile($id)
    {
        $model = new Statemant();
        $user = User::find()->where(['profile_name' => $id])->all();
        if ($model->load(Yii::$app->request->post())) {
            $model->recipient = $user[0]->profile_name;
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Заявление принято!');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка данные не приняты!');
            }
        }
        if (count($user) != 0) {
            return $this->render('profile', ['user' => $user, 'model' => $model]);
        } else {
            Yii::$app->session->setFlash('error', 'Страница не найдена!');
            return $this->render('profile');
        }
    }
}
