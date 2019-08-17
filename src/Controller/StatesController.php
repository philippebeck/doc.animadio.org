<?php

namespace App\Controller;

use Pam\Controller\Controller;
use Pam\Model\ModelFactory;
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
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function IndexAction()
    {
        $allStatesClasses = ModelFactory::getModel('Class')->listClasses(4);

        $allAnimaClasses    = array();
        $allBgClasses       = array();
        $allBordClasses     = array();
        $allColorClasses    = array();
        $allDecoClasses     = array();
        $allDisplayClasses  = array();
        $allFlowClasses     = array();
        $allPositionClasses = array();
        $allShaboxClasses   = array();
        $allShatexClasses   = array();

        foreach ($allStatesClasses as $statesClass) {
            $source = $statesClass['source'];

            switch ($source) {
                case 'anima':
                    $allAnimaClasses[] = $statesClass;
                    break;
                case 'bg':
                    $allBgClasses[] = $statesClass;
                    break;
                case 'bord':
                    $allBordClasses[] = $statesClass;
                    break;
                case 'color':
                    $allColorClasses[] = $statesClass;
                    break;
                case 'deco':
                    $allDecoClasses[] = $statesClass;
                    break;
                case 'display':
                    $allDisplayClasses[] = $statesClass;
                    break;
                case 'flow':
                    $allFlowClasses[] = $statesClass;
                    break;
                case 'position':
                    $allPositionClasses[] = $statesClass;
                    break;
                case 'shabox':
                    $allShaboxClasses[] = $statesClass;
                    break;
                case 'shatex':
                    $allShatexClasses[] = $statesClass;
                    break;
            }
        }

        return $this->render('states.twig', [
            'allAnimaClasses'       => $allAnimaClasses,
            'allBgClasses'          => $allBgClasses,
            'allBordClasses'        => $allBordClasses,
            'allColorClasses'       => $allColorClasses,
            'allDecoClasses'        => $allDecoClasses,
            'allDisplayClasses'     => $allDisplayClasses,
            'allFlowClasses'        => $allFlowClasses,
            'allPositionClasses'    => $allPositionClasses,
            'allShaboxClasses'      => $allShaboxClasses,
            'allShatexClasses'      => $allShatexClasses,
        ]);
    }
}
