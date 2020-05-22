<?php

namespace App\Controller;

use Pam\Model\Factory\ModelFactory;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class GridController
 * @package App\Controller
 */
class GridController extends BaseController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function defaultMethod()
    {
        $gridClassesList    = ModelFactory::getModel('Grid')->listGridClasses();
        $gridClasses        = $this->getClasses($gridClassesList);

        return $this->render('main/grid.twig', [
            'gridClasses'   => $gridClasses[1],
            'flexClasses'   => $gridClasses[2],
            'placeClasses'  => $gridClasses[3]
        ]);
    }
}
