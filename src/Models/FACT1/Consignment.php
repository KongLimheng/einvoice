<?php 

namespace Invoiceninja\Einvoice\Models\FACT1;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\AllowanceChargeType\ExtraAllowanceCharge;
use Invoiceninja\Einvoice\Models\FACT1\AllowanceChargeType\FreightAllowanceCharge;
use Invoiceninja\Einvoice\Models\FACT1\ConsignmentType\ChildConsignment;
use Invoiceninja\Einvoice\Models\FACT1\ContractType\TransportContract;
use Invoiceninja\Einvoice\Models\FACT1\CountryType\FinalDestinationCountry;
use Invoiceninja\Einvoice\Models\FACT1\CountryType\OriginalDepartureCountry;
use Invoiceninja\Einvoice\Models\FACT1\CountryType\TransitCountry;
use Invoiceninja\Einvoice\Models\FACT1\CustomsDeclarationType\CustomsDeclaration;
use Invoiceninja\Einvoice\Models\FACT1\DeliveryTermsType\DeliveryTerms;
use Invoiceninja\Einvoice\Models\FACT1\LocationType\FirstArrivalPortLocation;
use Invoiceninja\Einvoice\Models\FACT1\LocationType\LastExitPortLocation;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\BillOfLadingHolderParty;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\CarrierParty;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\ConsigneeParty;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\ConsignorParty;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\ExporterParty;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\FinalDeliveryParty;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\FreightForwarderParty;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\HazardousItemNotificationParty;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\ImporterParty;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\InsuranceParty;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\LogisticsOperatorParty;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\MortgageHolderParty;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\NotifyParty;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\OriginalDespatchParty;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\PerformingCarrierParty;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\SubstituteCarrierParty;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\TransportAdvisorParty;
use Invoiceninja\Einvoice\Models\FACT1\PaymentTermsType\CollectPaymentTerms;
use Invoiceninja\Einvoice\Models\FACT1\PaymentTermsType\DisbursementPaymentTerms;
use Invoiceninja\Einvoice\Models\FACT1\PaymentTermsType\PaymentTerms;
use Invoiceninja\Einvoice\Models\FACT1\PaymentTermsType\PrepaidPaymentTerms;
use Invoiceninja\Einvoice\Models\FACT1\ShipmentStageType\MainCarriageShipmentStage;
use Invoiceninja\Einvoice\Models\FACT1\ShipmentStageType\OnCarriageShipmentStage;
use Invoiceninja\Einvoice\Models\FACT1\ShipmentStageType\PreCarriageShipmentStage;
use Invoiceninja\Einvoice\Models\FACT1\ShipmentType\ConsolidatedShipment;
use Invoiceninja\Einvoice\Models\FACT1\StatusType\Status;
use Invoiceninja\Einvoice\Models\FACT1\TransportEventType\PlannedDeliveryTransportEvent;
use Invoiceninja\Einvoice\Models\FACT1\TransportEventType\PlannedPickupTransportEvent;
use Invoiceninja\Einvoice\Models\FACT1\TransportEventType\RequestedDeliveryTransportEvent;
use Invoiceninja\Einvoice\Models\FACT1\TransportEventType\RequestedPickupTransportEvent;
use Invoiceninja\Einvoice\Models\FACT1\TransportEventType\TransportEvent;
use Invoiceninja\Einvoice\Models\FACT1\TransportHandlingUnitType\TransportHandlingUnit;
use Invoiceninja\Einvoice\Models\FACT1\TransportationServiceType\FinalDeliveryTransportationService;
use Invoiceninja\Einvoice\Models\FACT1\TransportationServiceType\OriginalDespatchTransportationService;
use Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class Consignment extends Data
{
	#[Required]
	public string $ID;
	public string|Optional $CarrierAssignedID;
	public string|Optional $ConsigneeAssignedID;
	public string|Optional $ConsignorAssignedID;
	public string|Optional $FreightForwarderAssignedID;
	public string|Optional $BrokerAssignedID;
	public string|Optional $ContractedCarrierAssignedID;
	public string|Optional $PerformingCarrierAssignedID;

	#[DataCollectionOf('string')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public string|Optional $SummaryDescription;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $TotalInvoiceAmount;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $DeclaredCustomsValueAmount;

	#[DataCollectionOf('string')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public string|Optional $TariffDescription;
	public string|Optional $TariffCode;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $InsurancePremiumAmount;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $GrossWeightMeasure;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $NetWeightMeasure;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $NetNetWeightMeasure;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $ChargeableWeightMeasure;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $GrossVolumeMeasure;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $NetVolumeMeasure;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $LoadingLengthMeasure;

	#[DataCollectionOf('string')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public string|Optional $Remarks;
	public bool|Optional $HazardousRiskIndicator;
	public bool|Optional $AnimalFoodIndicator;
	public bool|Optional $HumanFoodIndicator;
	public bool|Optional $LivestockIndicator;
	public bool|Optional $BulkCargoIndicator;
	public bool|Optional $ContainerizedIndicator;
	public bool|Optional $GeneralCargoIndicator;
	public bool|Optional $SpecialSecurityIndicator;
	public bool|Optional $ThirdPartyPayerIndicator;

	#[DataCollectionOf('string')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public string|Optional $CarrierServiceInstructions;

	#[DataCollectionOf('string')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public string|Optional $CustomsClearanceServiceInstructions;

	#[DataCollectionOf('string')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public string|Optional $ForwarderServiceInstructions;

	#[DataCollectionOf('string')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public string|Optional $SpecialServiceInstructions;
	public string|Optional $SequenceID;
	public string|Optional $ShippingPriorityLevelCode;
	public string|Optional $HandlingCode;

	#[DataCollectionOf('string')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public string|Optional $HandlingInstructions;

	#[DataCollectionOf('string')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public string|Optional $Information;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $TotalGoodsItemQuantity;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $TotalTransportHandlingUnitQuantity;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $InsuranceValueAmount;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $DeclaredForCarriageValueAmount;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $DeclaredStatisticsValueAmount;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $FreeOnBoardValueAmount;

	#[DataCollectionOf('string')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public string|Optional $SpecialInstructions;
	public bool|Optional $SplitConsignmentIndicator;

	#[DataCollectionOf('string')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public string|Optional $DeliveryInstructions;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $ConsignmentQuantity;
	public bool|Optional $ConsolidatableIndicator;

	#[DataCollectionOf('string')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public string|Optional $HaulageInstructions;
	public string|Optional $LoadingSequenceID;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $ChildConsignmentQuantity;

	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $TotalPackagesQuantity;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FACT1\ShipmentType\ConsolidatedShipment')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public ConsolidatedShipment|Optional $ConsolidatedShipment;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FACT1\CustomsDeclarationType\CustomsDeclaration')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public CustomsDeclaration|Optional $CustomsDeclaration;
	public RequestedPickupTransportEvent|Optional $RequestedPickupTransportEvent;
	public RequestedDeliveryTransportEvent|Optional $RequestedDeliveryTransportEvent;
	public PlannedPickupTransportEvent|Optional $PlannedPickupTransportEvent;
	public PlannedDeliveryTransportEvent|Optional $PlannedDeliveryTransportEvent;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FACT1\StatusType\Status')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public Status|Optional $Status;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FACT1\ConsignmentType\ChildConsignment')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public ChildConsignment|Optional $ChildConsignment;
	public ConsigneeParty|Optional $ConsigneeParty;
	public ExporterParty|Optional $ExporterParty;
	public ConsignorParty|Optional $ConsignorParty;
	public ImporterParty|Optional $ImporterParty;
	public CarrierParty|Optional $CarrierParty;
	public FreightForwarderParty|Optional $FreightForwarderParty;
	public NotifyParty|Optional $NotifyParty;
	public OriginalDespatchParty|Optional $OriginalDespatchParty;
	public FinalDeliveryParty|Optional $FinalDeliveryParty;
	public PerformingCarrierParty|Optional $PerformingCarrierParty;
	public SubstituteCarrierParty|Optional $SubstituteCarrierParty;
	public LogisticsOperatorParty|Optional $LogisticsOperatorParty;
	public TransportAdvisorParty|Optional $TransportAdvisorParty;
	public HazardousItemNotificationParty|Optional $HazardousItemNotificationParty;
	public InsuranceParty|Optional $InsuranceParty;
	public MortgageHolderParty|Optional $MortgageHolderParty;
	public BillOfLadingHolderParty|Optional $BillOfLadingHolderParty;
	public OriginalDepartureCountry|Optional $OriginalDepartureCountry;
	public FinalDestinationCountry|Optional $FinalDestinationCountry;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FACT1\CountryType\TransitCountry')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public TransitCountry|Optional $TransitCountry;
	public TransportContract|Optional $TransportContract;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FACT1\TransportEventType\TransportEvent')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public TransportEvent|Optional $TransportEvent;
	public OriginalDespatchTransportationService|Optional $OriginalDespatchTransportationService;
	public FinalDeliveryTransportationService|Optional $FinalDeliveryTransportationService;
	public DeliveryTerms|Optional $DeliveryTerms;
	public PaymentTerms|Optional $PaymentTerms;
	public CollectPaymentTerms|Optional $CollectPaymentTerms;
	public DisbursementPaymentTerms|Optional $DisbursementPaymentTerms;
	public PrepaidPaymentTerms|Optional $PrepaidPaymentTerms;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FACT1\AllowanceChargeType\FreightAllowanceCharge')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public FreightAllowanceCharge|Optional $FreightAllowanceCharge;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FACT1\AllowanceChargeType\ExtraAllowanceCharge')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public ExtraAllowanceCharge|Optional $ExtraAllowanceCharge;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FACT1\ShipmentStageType\MainCarriageShipmentStage')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public MainCarriageShipmentStage|Optional $MainCarriageShipmentStage;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FACT1\ShipmentStageType\PreCarriageShipmentStage')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public PreCarriageShipmentStage|Optional $PreCarriageShipmentStage;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FACT1\ShipmentStageType\OnCarriageShipmentStage')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public OnCarriageShipmentStage|Optional $OnCarriageShipmentStage;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FACT1\TransportHandlingUnitType\TransportHandlingUnit')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public TransportHandlingUnit|Optional $TransportHandlingUnit;
	public FirstArrivalPortLocation|Optional $FirstArrivalPortLocation;
	public LastExitPortLocation|Optional $LastExitPortLocation;
}
