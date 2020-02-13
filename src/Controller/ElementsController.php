<?php

namespace App\Controller;

use Pam\Controller\MainController;
use Pam\Model\Factory\ModelFactory;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class ElementsController
 * @package App\Controller
 */
class ElementsController extends MainController
{
    /**
     * @var array
     */
    private $allBtnClasses = array();

    /**
     * @var array
     */
    private $allCardClasses  = array();

    /**
     * @var array
     */
    private $allFootClasses = array();

    /**
     * @var array
     */
    private $allFormClasses = array();

    /**
     * @var array
     */
    private $allGalleryClasses = array();

    /**
     * @var array
     */
    private $allMenuClasses = array();

    /**
     * @var array
     */
    private $allNavbarClasses = array();

    /**
     * @var array
     */
    private $allSliderClasses = array();

    /**
     * @var array
     */
    private $allTableClasses = array();

    /**
     * StatesController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $allElementsClasses = ModelFactory::getModel('Class')->listClasses(3);

        foreach ($allElementsClasses as $elementsClass) {
            switch ($elementsClass['source']) {
                case 'btn': $this->allBtnClasses[] = $elementsClass;
                    break;
                case 'card': $this->allCardClasses[] = $elementsClass;
                    break;
                case 'foot': $this->allFootClasses[] = $elementsClass;
                    break;
                case 'form': $this->allFormClasses[] = $elementsClass;
                    break;
                case 'gallery': $this->allGalleryClasses[] = $elementsClass;
                    break;
                case 'menu': $this->allMenuClasses[] = $elementsClass;
                    break;
                case 'navbar': $this->allNavbarClasses[] = $elementsClass;
                    break;
                case 'slider': $this->allSliderClasses[] = $elementsClass;
                    break;
                case 'table': $this->allTableClasses[] = $elementsClass;
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
        return $this->render('elements.twig', [
            'allBtnClasses'         => $this->allBtnClasses,
            'allCardClasses'        => $this->allCardClasses,
            'allFootClasses'        => $this->allFootClasses,
            'allFormClasses'        => $this->allFormClasses,
            'allGalleryClasses'     => $this->allGalleryClasses,
            'allMenuClasses'        => $this->allMenuClasses,
            'allNavbarClasses'      => $this->allNavbarClasses,
            'allSliderClasses'      => $this->allSliderClasses,
            'allTableClasses'       => $this->allTableClasses
        ]);
    }
}
