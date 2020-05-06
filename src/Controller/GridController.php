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
            $this->getClass($gridClass);
        }
    }

    /**
     * @param array $class
     */
    public function getClass(array $class)
    {
        switch ($class['source']) {
            case 'grid': $this->allGridClasses[] = $class;
                break;
            case 'flex': $this->allFlexClasses[] = $class;
                break;
            case 'place': $this->allPlaceClasses[] = $class;
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
        return $this->render('main/grid.twig', [
            'allGridClasses'    => $this->allGridClasses,
            'allFlexClasses'    => $this->allFlexClasses,
            'allPlaceClasses'   => $this->allPlaceClasses
        ]);
    }
}
