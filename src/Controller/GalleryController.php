<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace Controller;

use Model\Picture;
use Model\PictureManager;

/**
 * Class GalleryController
 *
 */
class GalleryController extends AbstractController
{
    /**
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function index()
    {
        $pictureManager = new PictureManager($this->getPdo());
        $pictures = $pictureManager->selectAll('id', 'DESC');

        return $this->twig->render('Gallery/index.html.twig', ['pictures' => $pictures]);
    }
}
