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
            switch ($boxClass['source']) {
                case 'container': $this->allContainerClasses[] = $boxClass;
                    break;
                case 'margin': $this->allMarginClasses[] = $boxClass;
                    break;
                case 'border': $this->allBorderClasses[] = $boxClass;
                    break;
                case 'padding': $this->allPaddingClasses[] = $boxClass;
                    break;
                case 'height': $this->allHeightClasses[] = $boxClass;
                    break;
                case 'width': $this->allWidthClasses[] = $boxClass;
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
