<?php

namespace App\Controller;

use Pam\Controller\MainController;
use Pam\Model\Factory\ModelFactory;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class HelpersController
 * @package App\Controller
 */
class HelpersController extends MainController
{
    /**
     * @var array
     */
    private $allFontClasses = array();

    /**
     * @var array
     */
    private $allAlignClasses = array();

    /**
     * @var array
     */
    private $allDecoClasses  = array();

    /**
     * @var array
     */
    private $allShatexClasses  = array();

    /**
     * @var array
     */
    private $allShaboxClasses = array();

    /**
     * @var array
     */
    private $allCursorClasses = array();

    /**
     * BoxController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $allHelpersClasses = ModelFactory::getModel('Class')->listClasses(4);

        foreach ($allHelpersClasses as $helpersClass) {
            $this->getClass($helpersClass);
        }
    }

    /**
     * @param array $class
     */
    private function getClass(array $class)
    {
        switch ($class['source']) {
            case 'font': $this->allFontClasses[] = $class;
                break;
            case 'align': $this->allAlignClasses[] = $class;
                break;
            case 'deco': $this->allDecoClasses[] = $class;
                break;
            case 'shatex': $this->allShatexClasses[] = $class;
                break;
            case 'shabox': $this->allShaboxClasses[] = $class;
                break;
            case 'cursor': $this->allCursorClasses[] = $class;
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
        return $this->render('main/helpers.twig', [
            'allFontClasses'    => $this->allFontClasses,
            'allAlignClasses'   => $this->allAlignClasses,
            'allDecoClasses'    => $this->allDecoClasses,
            'allShatexClasses'  => $this->allShatexClasses,
            'allShaboxClasses'  => $this->allShaboxClasses,
            'allCursorClasses'  => $this->allCursorClasses
        ]);
    }
}
