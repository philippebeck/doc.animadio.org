<?php

namespace App\Controller;

use Pam\Controller\MainController;
use Pam\Model\Factory\ModelFactory;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class StatesController
 * @package App\Controller
 */
class StatesController extends MainController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function defaultMethod()
    {
        $statesClasses = $this->getArrayElements(ModelFactory::getModel("States")->listStatesClasses(), "source");

        return $this->render("main/states.twig", [
            "animaClasses"      => $statesClasses[1],
            "displayClasses"    => $statesClasses[2],
            "positionClasses"   => $statesClasses[3],
            "bgClasses"         => $statesClasses[4],
            "colorClasses"      => $statesClasses[5]
        ]);
    }
}
