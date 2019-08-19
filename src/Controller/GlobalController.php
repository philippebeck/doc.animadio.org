<?php

namespace App\Controller;

use Pam\Controller\Controller;
use Pam\Model\ModelFactory;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class GlobalController
 * @package App\Controller
 */
class GlobalController extends Controller
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
     * @param Environment $twig
     */
    public function __construct(Environment $twig)
    {
        parent::__construct($twig);
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
    public function IndexAction()
    {
        return $this->render('global.twig', [
            'allBoxClasses'         => $this->allBoxClasses,
            'allHelpersClasses'     => $this->allHelpersClasses
        ]);
    }
}
