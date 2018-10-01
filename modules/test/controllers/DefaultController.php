<?php
namespace app\modules\test\controllers;

use app\assets\CountdownAsset;
use app\assets\MagnificPopupAsset;
use app\assets\OwlCarouselAsset;
use app\assets\SliderRevolutionAsset;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        CountdownAsset::register($this->view);
        OwlCarouselAsset::register($this->view);
        return $this->render('index');
    }

    public function actionCart(){
        return $this->render('cart');
    }
    public function actionNotFound(){
        return $this->render('not-found');
    }

    public function actionCheckout(){
        return $this->render('checkout');
    }
    public function actionComingSoon(){
        CountdownAsset::register($this->view);
        return $this->render('coming-soon');
    }

    public function actionContact(){
        return $this->render('contact');
    }

    public function actionLogin(){
        return $this->render('login');
    }

    public function actionSearch(){
        return $this->render('search');
    }

    public function actionStore(){
        //store-2
        CountdownAsset::register($this->view);
        SliderRevolutionAsset::register($this->view);
        return $this->render('store');
    }

    public function actionStoreProduct(){
        SliderRevolutionAsset::register($this->view);
        MagnificPopupAsset::register($this->view);
        OwlCarouselAsset::register($this->view);
        return $this->render('store-product');
    }

    public function actionUserMessages(){
        MagnificPopupAsset::register($this->view);
        return $this->render('user-messages');
    }

    public function actionUserMessagesCompose(){
        MagnificPopupAsset::register($this->view);
        return $this->render('user-messages-compose');
    }
    public function actionUserProfile(){
        MagnificPopupAsset::register($this->view);
        return $this->render('user-profile');
    }

    public function actionUserSettings(){
        MagnificPopupAsset::register($this->view);
        return $this->render('user-settings');
    }

}
