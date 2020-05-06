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
     * @var array
     */
    private $allAnimaClasses = array();

    /**
     * @var array
     */
    private $allDisplayClasses = array();

    /**
     * @var array
     */
    private $allPositionClasses = array();

    /**
     * @var array
     */
    private $allBgClasses  = array();

    /**
     * @var array
     */
    private $allColorClasses = array();

    /**
     * StatesController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $allStatesClasses = ModelFactory::getModel('Class')->listClasses(3);

        foreach ($allStatesClasses as $statesClass) {
            $this->getClass($statesClass);
        }
    }

    /**
     * @param array $class
     */
    private function getClass(array $class)
    {
        switch ($class['source']) {
            case 'anima': $this->allAnimaClasses[] = $class;
                break;
            case 'display': $this->allDisplayClasses[] = $class;
                break;
            case 'position': $this->allPositionClasses[] = $class;
                break;
            case 'bg': $this->allBgClasses[] = $class;
                break;
            case 'color': $this->allColorClasses[] = $class;
                break;
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
        return $this->render('main/states.twig', [
            'allAnimaClasses'       => $this->allAnimaClasses,
            'allDisplayClasses'     => $this->allDisplayClasses,
            'allPositionClasses'    => $this->allPositionClasses,
            'allBgClasses'          => $this->allBgClasses,
            'allColorClasses'       => $this->allColorClasses
        ]);
    }
}
