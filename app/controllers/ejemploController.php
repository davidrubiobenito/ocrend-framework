<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 17/09/2017
 * Time: 11:38
 */

namespace app\controllers;

use app\models as Model;
use Ocrend\Kernel\Router\IRouter;
use Ocrend\Kernel\Controllers\Controllers;
use Ocrend\Kernel\Controllers\IControllers;

class ejemploController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router);
        echo 'Soy un controlador de ejemplo';
    }

}