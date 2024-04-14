<?php
namespace App\Filter;


use App\DTO\PromotionEnquiryInterface;
interface PromotionFilterInterface 
//extends LowestPriceFilter
//
{
    public function apply(PromotionEnquiryInterface $enquiry): PromotionEnquiryInterface;
    
}

?>