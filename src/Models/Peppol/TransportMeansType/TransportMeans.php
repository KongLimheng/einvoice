<?php

namespace Invoiceninja\Einvoice\Models\Peppol\TransportMeansType;

use DateTime;
use DateTimeInterface;
use Invoiceninja\Einvoice\Models\Normalizers\DecimalPrecision;
use Invoiceninja\Einvoice\Models\Peppol\AirTransportType\AirTransport;
use Invoiceninja\Einvoice\Models\Peppol\DimensionType\MeasurementDimension;
use Invoiceninja\Einvoice\Models\Peppol\MaritimeTransportType\MaritimeTransport;
use Invoiceninja\Einvoice\Models\Peppol\PartyType\OwnerParty;
use Invoiceninja\Einvoice\Models\Peppol\RailTransportType\RailTransport;
use Invoiceninja\Einvoice\Models\Peppol\RoadTransportType\RoadTransport;
use Invoiceninja\Einvoice\Models\Peppol\StowageType\Stowage;
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

class TransportMeans
{
    /** @var string */
    #[SerializedName('cbc:JourneyID')]
    public string $JourneyID;

    /** @var string */
    #[SerializedName('cbc:RegistrationNationalityID')]
    public string $RegistrationNationalityID;

    /** @var string */
    #[SerializedName('cbc:RegistrationNationality')]
    public string $RegistrationNationality;

    /** @var string */
    #[SerializedName('cbc:DirectionCode')]
    public string $DirectionCode;

    /** @var string */
    #[SerializedName('cbc:TransportMeansTypeCode')]
    public string $TransportMeansTypeCode;

    /** @var string */
    #[SerializedName('cbc:TradeServiceCode')]
    public string $TradeServiceCode;

    /** @var Stowage */
    #[SerializedName('cac:Stowage')]
    public $Stowage;

    /** @var AirTransport */
    #[SerializedName('cac:AirTransport')]
    public $AirTransport;

    /** @var RoadTransport */
    #[SerializedName('cac:RoadTransport')]
    public $RoadTransport;

    /** @var RailTransport */
    #[SerializedName('cac:RailTransport')]
    public $RailTransport;

    /** @var MaritimeTransport */
    #[SerializedName('cac:MaritimeTransport')]
    public $MaritimeTransport;

    /** @var OwnerParty */
    #[SerializedName('cac:OwnerParty')]
    public $OwnerParty;

    /** @var MeasurementDimension[] */
    #[SerializedName('cac:MeasurementDimension')]
    public array $MeasurementDimension;
}
