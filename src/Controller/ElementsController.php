<?php

namespace App\Controller;

use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Pam\Controller\Controller;

/**
 * Class ElementsController
 * @package App\Controller
 */
class ElementsController extends Controller
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function IndexAction()
    {
        return $this->render('elements.twig');
    }
}
