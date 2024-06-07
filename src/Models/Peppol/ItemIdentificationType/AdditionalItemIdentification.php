<?php

namespace Invoiceninja\Einvoice\Models\Peppol\ItemIdentificationType;

use DateTime;
use DateTimeInterface;
use Invoiceninja\Einvoice\Models\Normalizers\DecimalPrecision;
use Invoiceninja\Einvoice\Models\Peppol\DimensionType\MeasurementDimension;
use Invoiceninja\Einvoice\Models\Peppol\PartyType\IssuerParty;
use Invoiceninja\Einvoice\Models\Peppol\PhysicalAttributeType\PhysicalAttribute;
use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Attribute\SerializedName;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Valid;

class AdditionalItemIdentification
{
    /** @var string */
    #[SerializedName('cbc:ID')]
    public string $ID;

    /** @var string */
    #[SerializedName('cbc:ExtendedID')]
    public string $ExtendedID;

    /** @var string */
    #[SerializedName('cbc:BarcodeSymbologyID')]
    public string $BarcodeSymbologyID;

    /** @var PhysicalAttribute[] */
    #[SerializedName('cac:PhysicalAttribute')]
    public array $PhysicalAttribute;

    /** @var MeasurementDimension[] */
    #[SerializedName('cac:MeasurementDimension')]
    public array $MeasurementDimension;

    /** @var IssuerParty */
    #[SerializedName('cac:IssuerParty')]
    public $IssuerParty;
}
