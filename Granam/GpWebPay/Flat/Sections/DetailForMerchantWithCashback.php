<?php
declare(strict_types=1); // on PHP 7+ are standard PHP methods strict to types of given parameters

namespace Granam\GpWebPay\Flat\Sections;

class DetailForMerchantWithCashback extends MultiLineFlatSection
{
    const DETAIL_FOR_MERCHANT_WITH_CASHBACK = '26'; // in czech "věta detailního oddílu pro obchodníka s cashback rozšířením"
}