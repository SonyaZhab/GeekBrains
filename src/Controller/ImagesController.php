<?php

namespace App\Controller;

use App\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImagesController extends AbstractController
{
    /**
     * @Route("/images", name="images")
     */
    public function index(): Response
    {
        $manager = $this->getDoctrine()->getManager();
        $repository = $manager->getRepository(Image::class);
        $images = $repository->findAll();

        // echo '<pre>';
        // var_dump($images);
        // echo '</pre>';
        // die();

        return $this->render('images/index.html.twig', [
            'images' => $images,
        ]);
    }
}