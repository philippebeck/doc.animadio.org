<?php

namespace App\Controller;

use Pam\Controller\Controller;
use Pam\Model\ModelFactory;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class ElementsController
 * @package App\Controller
 */
class ElementsController extends Controller
{
    /**
     * @var array
     */
    private $allElementsClasses = array();

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
     * @param Environment $twig
     */
    public function __construct(Environment $twig)
    {
        parent::__construct($twig);
        $this->allElementsClasses = ModelFactory::getModel('Class')->listClasses(3);

        foreach ($this->allElementsClasses as $elementsClass) {
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
    public function IndexAction()
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
