<?php

namespace App\Controller;

use App\Entity\Images;
use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{product_id}", name="")
     * @param ManagerRegisty $managerRegistry
     * @return Reponse
     */
    public function getProduct($product_id, ManagerRegistry $managerRegistry): Response
    {
        $manager = $managerRegistry -> getRepository(Product::class);
        $product = $manager -> find($product_id);
        foreach($product -> getImages() as $image)
        {
            echo '<pre>';
            var_dump($image);
            echo '</pre>';
        };
        die();
    }

    public function insertProduct(ManagerRegistry $managerRegistry)
    {
        $manager = $managerRegistry -> getManager();
        $image1 = new Images();
        $image1 -> setPath('/images/photo3');
        $image2 = new Images();
        $image2 -> setPath('/images/photo4');

        $product = new Product();
        $product -> setTitle('Title');
        $product-> setDescription('Description');
        $product -> setPrice(123);

        $image1 -> setProduct($product);
        $image2 -> setProduct($product);

        $product -> addImage($image1);
        $product -> addImage($image2);

        $manager -> persist($product);
        $manager -> persist($image1);
        $manager -> persist($image2);

        $manager -> flush();

    }

}
