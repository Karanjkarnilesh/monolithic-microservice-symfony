<?php

namespace App\DTO;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;



class LowestPriceEnquiry implements PromotionEnquiryInterface
{
    private ?Product $product;
    private ?int $quantity;
    private ?string $requestLocation;
    private ?string $voucherCode;
    private ?string $requestDate;
    private ?int $price;
    private ?int $discountedPrice;
    private ?int $promotionId;
    private ?string $promotionName;

    /**
     * @return Product|null
     */

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    /**
     * @return Product|null $product
     */

    public function setProduct(Product $product): Product
    {
        return $this->product = $product;
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

    public function getRequestDate(): ?string
    {
        return $this->requestDate;
    }


    /**
     * @return string|null $requestDate
     */

    public function setRequestDate(string $requestDate): ?string
    {
        return $this->requestDate = $requestDate;
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
