<?php

namespace App\Controller;

use Pam\Controller\MainController;
use Pam\Model\Factory\ModelFactory;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class BoxController
 * @package App\Controller
 */
class BoxController extends MainController
{
    /**
     * @var array
     */
    private $allContainerClasses = array();

    /**
     * @var array
     */
    private $allMarginClasses = array();

    /**
     * @var array
     */
    private $allBorderClasses  = array();

    /**
     * @var array
     */
    private $allPaddingClasses = array();

    /**
     * @var array
     */
    private $allHeightClasses = array();

    /**
     * @var array
     */
    private $allWidthClasses  = array();

    /**
     * BoxController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $allBoxClasses = ModelFactory::getModel('Class')->listClasses(1);

        foreach ($allBoxClasses as $boxClass) {
            $this->getClass($boxClass);
        }
    }

    /**
     * @param array $class
     */
    private function getClass(array $class)
    {
        switch ($class['source']) {
            case 'container': $this->allContainerClasses[] = $class;
                break;
            case 'mar': $this->allMarginClasses[] = $class;
                break;
            case 'bord': $this->allBorderClasses[] = $class;
                break;
            case 'pad': $this->allPaddingClasses[] = $class;
                break;
            case 'height': $this->allHeightClasses[] = $class;
                break;
            case 'width': $this->allWidthClasses[] = $class;
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
        return $this->render('main/box.twig', [
            'allContainerClasses'   => $this->allContainerClasses,
            'allMarginClasses'      => $this->allMarginClasses,
            'allBorderClasses'      => $this->allBorderClasses,
            'allPaddingClasses'     => $this->allPaddingClasses,
            'allHeightClasses'      => $this->allHeightClasses,
            'allWidthClasses'       => $this->allWidthClasses
        ]);
    }
}
