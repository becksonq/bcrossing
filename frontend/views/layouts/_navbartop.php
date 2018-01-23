<?php
/**
 * File: _navbartop.php
 * Email: becksonq@gmail.com
 * Date: 23.01.2018
 * Time: 21:25
 */

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

NavBar::begin( [
    'brandLabel' => Yii::$app->name,
    'brandUrl'   => Yii::$app->homeUrl,
    'options'    => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],
] );
$menuItems = [
    [ 'label' => '<i class="fa fa-home" aria-hidden="true"></i>' . 'Главная', 'url' => [ '/site/index' ] ],
    //    [ 'label' => 'О нас', 'url' => [ '/site/about' ] ],
    [ 'label' => '<i class="fa fa-address-book" aria-hidden="true"></i>' . 'Контакты', 'url' => [ '/site/contact' ] ],
];
if ( Yii::$app->user->isGuest ) {
    $menuItems[] = [ 'label' => '<i class="fa fa-user-plus" aria-hidden="true"></i>' . 'Регистрация', 'url' => [ '/user/registration/register' ] ];
    $menuItems[] = [
        'label' => '<i class="fa fa-sign-in" aria-hidden="true"></i>' . 'Вход',
        'url'   => [ '/user/security/login' ]
    ];
}
else {
    $menuItems[] = [ 'label' => '<i class="fa fa-user" aria-hidden="true"></i>' . 'Профиль', 'url' => [ '/user/settings/adverts' ] ];
    $menuItems[] = '<li>'
        . Html::beginForm( [ '/user/security/logout' ], 'post' )
        . Html::submitButton(
            '<i class="fa fa-sign-out" aria-hidden="true"></i>' . 'Выход (' . Yii::$app->user->identity->username . ')',
            [ 'class' => 'btn btn-link logout' ]
        )
        . Html::endForm()
        . '</li>';
}
echo Nav::widget( [
    'options'      => [ 'class' => 'navbar-nav navbar-right' ],
    'encodeLabels' => false,
    'items'        => $menuItems,
] );
NavBar::end();