<?php

namespace Invoiceninja\Einvoice\Models\Peppol;

use Invoiceninja\Einvoice\Models\Normalizers\DecimalPrecision;
use Invoiceninja\Einvoice\Models\Peppol\AllowanceChargeType\AllowanceCharge;
use Invoiceninja\Einvoice\Models\Peppol\AmountType\Amount;
use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Attribute\SerializedName;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Valid;

class BillingReferenceLine
{
    /** @var string */
    #[SerializedName('cbc:ID')]
    public string $ID;

    /** @var Amount */
    #[SerializedName('cbc:Amount')]
    public $Amount;

    /** @var AllowanceCharge[] */
    #[SerializedName('cac:AllowanceCharge')]
    public array $AllowanceCharge;
}
