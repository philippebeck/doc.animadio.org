<?php

namespace App\Controller;

use Pam\Model\Factory\ModelFactory;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class HelpersController
 * @package App\Controller
 */
class HelpersController extends BaseController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function defaultMethod()
    {
        $helpersClassesList = ModelFactory::getModel("Helpers")->listHelpersClasses();
        $helpersClasses     = $this->getClasses($helpersClassesList);

        return $this->render("main/helpers.twig", [
            "fontClasses"   => $helpersClasses[1],
            "transClasses"  => $helpersClasses[2],
            "alignClasses"  => $helpersClasses[3],
            "decoClasses"   => $helpersClasses[4],
            "shatexClasses" => $helpersClasses[5],
            "shaboxClasses" => $helpersClasses[6],
            "cursorClasses" => $helpersClasses[7]
        ]);
    }
}
