<?php

namespace App\Controller;

use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Pam\Controller\Controller;

/**
 * Class GlobalController
 * @package App\Controller
 */
class GlobalController extends Controller
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function IndexAction()
    {
        return $this->render('doc/global.twig');
    }
}
