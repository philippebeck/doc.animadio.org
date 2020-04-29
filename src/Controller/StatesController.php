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
    private $allBgClasses  = array();

    /**
     * @var array
     */
    private $allColorClasses = array();

    /**
     * @var array
     */
    private $allDisplayClasses = array();

    /**
     * @var array
     */
    private $allPositionClasses = array();

    /**
     * StatesController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $allStatesClasses = ModelFactory::getModel('Class')->listClasses(4);

        foreach ($allStatesClasses as $statesClass) {
            switch ($statesClass['source']) {
                case 'anima': $this->allAnimaClasses[] = $statesClass;
                    break;
                case 'bg': $this->allBgClasses[] = $statesClass;
                    break;
                case 'color': $this->allColorClasses[] = $statesClass;
                    break;
                case 'display': $this->allDisplayClasses[] = $statesClass;
                    break;
                case 'position': $this->allPositionClasses[] = $statesClass;
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
        return $this->render('states.twig', [
            'allAnimaClasses'       => $this->allAnimaClasses,
            'allBgClasses'          => $this->allBgClasses,
            'allColorClasses'       => $this->allColorClasses,
            'allDisplayClasses'     => $this->allDisplayClasses,
            'allPositionClasses'    => $this->allPositionClasses
        ]);
    }
}
