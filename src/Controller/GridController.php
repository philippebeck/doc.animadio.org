<?php

namespace App\Controller;

use Pam\Controller\Controller;
use Pam\Model\ModelFactory;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class GridController
 * @package App\Controller
 */
class GridController extends Controller
{
    /**
     * @var array
     */
    private $allFluidClasses = array();

    /**
     * @var array
     */
    private $allFlexClasses = array();

    /**
     * @var array
     */
    private $allPlaceClasses  = array();

        /**
         * StatesController constructor.
         * @param Environment $twig
         */
        public function __construct(Environment $twig)
    {
        parent::__construct($twig);
        $allGridClasses = ModelFactory::getModel('Class')->listClasses(2);

        foreach ($allGridClasses as $gridClass) {
            switch ($gridClass['source']) {
                case 'fluid': $this->allFluidClasses[] = $gridClass;
                    break;
                case 'flex': $this->allFlexClasses[] = $gridClass;
                    break;
                case 'place': $this->allPlaceClasses[] = $gridClass;
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
        return $this->render('grid.twig', [
            'allFluidClasses'   => $this->allFluidClasses,
            'allFlexClasses'    => $this->allFlexClasses,
            'allPlaceClasses'   => $this->allPlaceClasses
        ]);
    }
}
