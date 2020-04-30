<?php

namespace App\Controller;

use Pam\Controller\MainController;
use Pam\Model\Factory\ModelFactory;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class GridController
 * @package App\Controller
 */
class GridController extends MainController
{
    /**
     * @var array
     */
    private $allGridClasses = array();

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
         */
        public function __construct()
    {
        parent::__construct();
        $allGridClasses = ModelFactory::getModel('Class')->listClasses(2);

        foreach ($allGridClasses as $gridClass) {
            switch ($gridClass['source']) {
                case 'grid': $this->allGridClasses[] = $gridClass;
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
        public function defaultMethod()
    {
        return $this->render('main/grid.twig', [
            'allGridClasses'    => $this->allGridClasses,
            'allFlexClasses'    => $this->allFlexClasses,
            'allPlaceClasses'   => $this->allPlaceClasses
        ]);
    }
}
