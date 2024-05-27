<?php 

namespace Invoiceninja\Einvoice\Models\FACT1;

use Invoiceninja\Einvoice\Models\FACT1\ItemLocationQuantityType\OriginalItemLocationQuantity;
use Invoiceninja\Einvoice\Models\FACT1\PriceType\AlternativeConditionPrice;
use Invoiceninja\Einvoice\Models\Normalizers\DecimalPrecision;
use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Attribute\SerializedName;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Valid;

class PricingReference
{
	/** @var OriginalItemLocationQuantity */
	#[SerializedName('cac:OriginalItemLocationQuantity')]
	public $OriginalItemLocationQuantity;

	/** @var AlternativeConditionPrice[] */
	#[SerializedName('cac:AlternativeConditionPrice')]
	public array $AlternativeConditionPrice = [];
}
