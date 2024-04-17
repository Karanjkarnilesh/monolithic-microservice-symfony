<?php
namespace App\Filter;


use App\DTO\PromotionEnquiryInterface;
use App\Filter\LowestPriceFilter;
interface PromotionFilterInterface 
{
    public function apply(PromotionEnquiryInterface $enquiry): PromotionEnquiryInterface;
    
}

?>