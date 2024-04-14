<?php

namespace App\Controller;

use App\Controller\DTO\LowestPriceEnquiry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class ProductsController extends AbstractController
{
  #[Route('/products/{id}/lowestPrice', name: 'lowest_price', methods: 'POST')]
  public function lowestPrice(Request $request, int $id,SerializerInterface $serializer): JsonResponse
  {
    if ($request->headers->has('force_fail')) {
      return new JsonResponse([
        ['error' => 'Promotion engine Failuer message']
      ],$request->headers->has('force_fail'));
    }

    // deseralize data
    $lowestpriceEnquiry=$serializer->deserialize($request->getContent(),LowestPriceEnquiry::class,'json');
    $lowestpriceEnquiry->setPrice(100);
    $lowestpriceEnquiry->setDiscountedPrice(50);
    $lowestpriceEnquiry->setPromotionId(3);
    $lowestpriceEnquiry->setPromotionName('Black Friday half price sale');
   return  new JsonResponse($lowestpriceEnquiry,200);  

   
    // return new JsonResponse([
    //   "quantity" => 5,
    //   "request_location" => "UK",
    //   "voucher_code" => "0U812",
    //   "request_date" => 2024 - 04 - 13,
    //   "product_id" => $id,
    //   "price"=>100,
    //   "discount_price"=>50,
    //   "promotion_id"=>3,
    //   "promotion_name"=>'Black Friday half price sale'
    // ], 200);
  }
}
