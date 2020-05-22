<?php

namespace App\Controller;

use Pam\Model\Factory\ModelFactory;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class StatesController
 * @package App\Controller
 */
class StatesController extends BaseController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function defaultMethod()
    {
        $statesClassesList  = ModelFactory::getModel('States')->listStatesClasses();
        $statesClasses      = $this->getClasses($statesClassesList);

        return $this->render('main/states.twig', [
            'animaClasses'      => $statesClasses[1],
            'displayClasses'    => $statesClasses[2],
            'positionClasses'   => $statesClasses[3],
            'bgClasses'         => $statesClasses[4],
            'colorClasses'      => $statesClasses[5]
        ]);
    }
}
