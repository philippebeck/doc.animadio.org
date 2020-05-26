<?php

namespace App\Controller;

use Pam\Model\Factory\ModelFactory;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class BoxController
 * @package App\Controller
 */
class BoxController extends BaseController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function defaultMethod()
    {
        $boxClassList   = ModelFactory::getModel("Box")->listBoxClasses();
        $boxClasses     = $this->getClasses($boxClassList);

        return $this->render("main/box.twig", [
            "containerClasses"   => $boxClasses[1],
            "marginClasses"      => $boxClasses[2],
            "borderClasses"      => $boxClasses[3],
            "paddingClasses"     => $boxClasses[4],
            "heightClasses"      => $boxClasses[5],
            "widthClasses"       => $boxClasses[6]
        ]);
    }
}
