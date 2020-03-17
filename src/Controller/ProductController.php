<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    /**
     * @Route("/ecommerce", name="all_product")
     */
    public function index(ProductRepository $productRepository)
    {
        return $this->render('product/product.html.twig', [
            'controller_name' => 'ProductController',
            'products' => $productRepository->findAll()
            
        ]);
    }
}
