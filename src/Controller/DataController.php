<?php

namespace App\Controller;

use App\Services\MarkdownHelper;
use App\Services\MarkDownInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DataController extends Controller
{
    /**
     * @Route("/data", name="data")
     * @param MarkDownInterface $markdownHelper
     * @return Response
     */
    public function index(MarkDownInterface $markdownHelper)
    {
        // replace this line with your own code!
        return $this->render('base.html.twig');
    }
}
