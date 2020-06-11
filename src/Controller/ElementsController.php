<?php

namespace App\Controller;

use Pam\Controller\MainController;
use Pam\Model\Factory\ModelFactory;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class ElementsController
 * @package App\Controller
 */
class ElementsController extends MainController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function defaultMethod()
    {
        $elementsClasses = $this->getArrayElements(ModelFactory::getModel("Elements")->listData(), "source");

        return $this->render("main/elements.twig", [
            "btnClasses"   => $elementsClasses[1],
            "cardClasses"  => $elementsClasses[2]
        ]);
    }
}
