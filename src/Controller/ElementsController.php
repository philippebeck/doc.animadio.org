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
    private $allTableClasses = array();

    /**
     * StatesController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $allElementsClasses = ModelFactory::getModel('Class')->listClasses(3);

        foreach ($allElementsClasses as $elementsClass) {
            $this->getClass($elementsClass);
        }
    }

    /**
     * @param array $class
     */
    private function getClass(array $class)
    {
        switch ($class['source']) {
            case 'btn': $this->allBtnClasses[] = $class;
                break;
            case 'card': $this->allCardClasses[] = $class;
                break;
            case 'foot': $this->allFootClasses[] = $class;
                break;
            case 'form': $this->allFormClasses[] = $class;
                break;
            case 'gallery': $this->allGalleryClasses[] = $class;
                break;
            case 'menu': $this->allMenuClasses[] = $class;
                break;
            case 'navbar': $this->allNavbarClasses[] = $class;
                break;
            case 'table': $this->allTableClasses[] = $class;
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
        return $this->render('main/elements.twig', [
            'allBtnClasses'         => $this->allBtnClasses,
            'allCardClasses'        => $this->allCardClasses,
            'allFootClasses'        => $this->allFootClasses,
            'allFormClasses'        => $this->allFormClasses,
            'allGalleryClasses'     => $this->allGalleryClasses,
            'allMenuClasses'        => $this->allMenuClasses,
            'allNavbarClasses'      => $this->allNavbarClasses,
            'allTableClasses'       => $this->allTableClasses
        ]);
    }
}
