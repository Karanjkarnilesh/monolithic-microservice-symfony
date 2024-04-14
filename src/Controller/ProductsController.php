<?php

namespace App\Controller;

use App\DTO\LowestPriceEnquiry;
use App\Filter\PromotionFilterInterface;
use App\Services\Serializer\DTOSerializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class ProductsController extends AbstractController
{
  #[Route('/products/{id}/lowestPrice', name: 'lowest_price', methods: 'POST')]
  public function lowestPrice(
    Request $request,
   int $id,
   DTOSerializer $serializer,
   PromotionFilterInterface $promotionFilter): Response
  {

  
  
    // deseralize data
    $lowestpriceEnquiry=$serializer->deserialize($request->getContent(),LowestPriceEnquiry::class,'json');
    
    $modifiedEnquiry=$promotionFilter->apply($lowestpriceEnquiry);
    
    
   

    $responseContent=$serializer->serialize($modifiedEnquiry,'json');
    return new Response($responseContent,200); 

  }
}
