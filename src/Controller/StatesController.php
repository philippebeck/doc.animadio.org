<?php

namespace App\Controller;

use Pam\Controller\Controller;
use Pam\Model\ModelFactory;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class StatesController
 * @package App\Controller
 */
class StatesController extends Controller
{
    /**
     * @var array
     */
    private $allStatesClasses = array();

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
    private $allBordClasses = array();

    /**
     * @var array
     */
    private $allColorClasses = array();

    /**
     * @var array
     */
    private $allDecoClasses = array();

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
    private $allShaboxClasses = array();

    /**
     * @var array
     */
    private $allShatexClasses = array();

    /**
     * StatesController constructor.
     * @param Environment $twig
     */
    public function __construct(Environment $twig)
    {
        parent::__construct($twig);
        $this->allStatesClasses = ModelFactory::getModel('Class')->listClasses(4);

        foreach ($this->allStatesClasses as $statesClass) {
            $source = $statesClass['source'];

            switch ($source) {
                case 'anima': $this->allAnimaClasses[] = $statesClass;
                    break;
                case 'bg': $this->allBgClasses[] = $statesClass;
                    break;
                case 'bord': $allBordClasses[] = $statesClass;
                    break;
                case 'color': $this->allColorClasses[] = $statesClass;
                    break;
                case 'deco': $this->allDecoClasses[] = $statesClass;
                    break;
                case 'display': $this->allDisplayClasses[] = $statesClass;
                    break;
                case 'position': $this->allPositionClasses[] = $statesClass;
                    break;
                case 'shabox': $this->allShaboxClasses[] = $statesClass;
                    break;
                case 'shatex': $this->allShatexClasses[] = $statesClass;
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
        return $this->render('states.twig', [
            'allAnimaClasses'       => $this->allAnimaClasses,
            'allBgClasses'          => $this->allBgClasses,
            'allBordClasses'        => $this->allBordClasses,
            'allColorClasses'       => $this->allColorClasses,
            'allDecoClasses'        => $this->allDecoClasses,
            'allDisplayClasses'     => $this->allDisplayClasses,
            'allPositionClasses'    => $this->allPositionClasses,
            'allShaboxClasses'      => $this->allShaboxClasses,
            'allShatexClasses'      => $this->allShatexClasses,
        ]);
    }
}
