<?php

namespace App\Controller;

use App\DTO\LowestPriceEnquiry;
use App\Entity\Promotion;
use App\Filter\PromotionFilterInterface;
use App\Repository\ProductRepository;
use App\Repository\PromotionRepository;
use App\Services\Serializer\DTOSerializer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class ProductsController extends AbstractController
{
 
  public function __construct(
    private ProductRepository $repository,
    private EntityManagerInterface $entityManager)
  {
    $this->repository=$repository;
  }
  #[Route('/products/{id}/lowestPrice', name: 'lowest_price', methods: 'POST')]
  public function lowestPrice(
    Request $request,
   int $id,
   DTOSerializer $serializer,
   PromotionFilterInterface $promotionFilter): Response
  {

    // deseralize data
    $lowestpriceEnquiry=$serializer->deserialize($request->getContent(),LowestPriceEnquiry::class,'json');
     

$product=$this->repository->find($id);


$lowestpriceEnquiry->setProduct($product);

$promotions=$this->entityManager->getRepository(Promotion::class)
->findValidForProduct(
  $product,date_create_immutable($lowestpriceEnquiry->getRequestDate())
);

dd($promotions);

$modifiedEnquiry=$promotionFilter->apply($lowestpriceEnquiry,...$promotions);
    

    $responseContent=$serializer->serialize($modifiedEnquiry,'json');
    return new Response($responseContent,200); 

  }
}
