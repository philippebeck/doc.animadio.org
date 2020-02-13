<?php

namespace App\Controller;

use Pam\Controller\MainController;
use Pam\Model\Factory\ModelFactory;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class GlobalController
 * @package App\Controller
 */
class GlobalController extends MainController
{
    /**
     * @var array
     */
    private $allBoxClasses = array();

    /**
     * @var array
     */
    private $allHelpersClasses  = array();

    /**
     * StatesController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $allGlobalClasses = ModelFactory::getModel('Class')->listClasses(1);

        foreach ($allGlobalClasses as $globalClass) {
            switch ($globalClass['source']) {
                case 'box': $this->allBoxClasses[] = $globalClass;
                    break;
                case 'helpers': $this->allHelpersClasses[] = $globalClass;
                    break;
            }
        }
    }

    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function defaultMethod()
    {
        return $this->render('global.twig', [
            'allBoxClasses'         => $this->allBoxClasses,
            'allHelpersClasses'     => $this->allHelpersClasses
        ]);
    }
}
