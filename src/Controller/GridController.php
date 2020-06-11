<?php

namespace App\Controller;

use Pam\Controller\MainController;
use Pam\Model\Factory\ModelFactory;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class GridController
 * @package App\Controller
 */
class GridController extends MainController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function defaultMethod()
    {
        $gridClasses = $this->getArrayElements(ModelFactory::getModel("Grid")->listGridClasses(), "source");

        return $this->render("main/grid.twig", [
            "gridClasses"   => $gridClasses[1],
            //"flexClasses"   => $gridClasses[2],
            "placeClasses"  => $gridClasses[3]
        ]);
    }
}
