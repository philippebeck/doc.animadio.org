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
        $allHelpersClasses = ModelFactory::getModel('Class')->listClasses(5);

        foreach ($allHelpersClasses as $helpersClass) {
            switch ($helpersClass['source']) {
                case 'font': $this->allFontClasses[] = $helpersClass;
                    break;
                case 'align': $this->allAlignClasses[] = $helpersClass;
                    break;
                case 'deco': $this->allDecoClasses[] = $helpersClass;
                    break;
                case 'shatex': $this->allShatexClasses[] = $helpersClass;
                    break;
                case 'shabox': $this->allShaboxClasses[] = $helpersClass;
                    break;
                case 'cursor': $this->allCursorClasses[] = $helpersClass;
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
        return $this->render('helpers.twig', [
            'allFontClasses'    => $this->allFontClasses,
            'allAlignClasses'   => $this->allAlignClasses,
            'allDecoClasses'    => $this->allDecoClasses,
            'allShatexClasses'  => $this->allShatexClasses,
            'allShaboxClasses'  => $this->allShaboxClasses,
            'allCursorClasses'  => $this->allCursorClasses
        ]);
    }
}
