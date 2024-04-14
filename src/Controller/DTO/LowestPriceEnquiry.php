<?php

namespace App\Controller\DTO;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;



class LowestPriceEnquiry implements PromotionEnquiryInterface
{
    private ?int $productId;
    private ?int $quantity;
    private ?string $requestLocation;
    private ?string $voucherCode;
    private ?string $requestData;
    private ?int $price;
    private ?int $discountedPrice;
    private ?int $promotionId;
    private ?string $promotionName;

    /**
     * @return int|null
     */

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @return int|null $productId
     */

    public function setProductId(int $productId): ?int
    {
        return $this->productId = $productId;
    }

    /**
     * @return int|null 
     */

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @return int|null $quantity
     */

    public function setQuantity(int $quantity): ?int
    {
        return $this->quantity = $quantity;
    }

    /**
     * @return string|null 
     */

    public function getRequestLocation(): ?string
    {
        return $this->requestLocation;
    }

    /**
     * @return string|null $requestLocation
     */

    public function setRequestLocation(string $requestLocation): ?string
    {
        return $this->requestLocation = $requestLocation;
    }

    /**
     * @return string|null 
     */

    public function getVoucherCode(): ?string
    {
        return $this->voucherCode;
    }



    /**
     * @return string|null $voucherCode
     */

    public function setVoucherCode(string $voucherCode): ?string
    {
        return $this->voucherCode = $voucherCode;
    }



    /**
     * @return string|null 
     */

    public function getRequestData(): ?string
    {
        return $this->requestData;
    }


    /**
     * @return string|null $requestData
     */

    public function setRequestData(string $requestData): ?string
    {
        return $this->requestData = $requestData;
    }



    /**
     * @return int|null 
     */

    public function getPrice(): ?int
    {
        return $this->price;
    }




    /**
     * @return int|null $price
     */

    public function setprice(int $price): ?int
    {
        return $this->price = $price;
    }




    /**
     * @return int|null 
     */

    public function getDiscountedPrice(): ?int
    {
        return $this->discountedPrice;
    }




    /**
     * @return int|null $discountprice
     */

    public function setDiscountedPrice(int $discountedPrice): ?int
    {
        return $this->discountedPrice = $discountedPrice;
    }



    /**
     * @return int|null 
     */

    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }




    /**
     * @return int|null $promotionId
     */

    public function setPromotionId(int $promotionId): ?int
    {
        return $this->promotionId = $promotionId;
    }





    /**
     * @return string|null 
     */

    public function getPromotionName(): ?string
    {
        return $this->promotionName;
    }




    /**
     * @return string|null $promotionName
     */

    public function setPromotionName(string $promotionName): ?string
    {
        return $this->requestData = $promotionName;
    }


    public function jsonSerialize()
    {
return get_object_vars($this);        
    }
}
