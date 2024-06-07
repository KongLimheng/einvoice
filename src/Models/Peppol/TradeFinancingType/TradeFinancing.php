<?php 

namespace InvoiceNinja\EInvoice\Models\Peppol\TradeFinancingType;

use DateTime;
use DateTimeInterface;
use InvoiceNinja\EInvoice\Models\Normalizers\DecimalPrecision;
use InvoiceNinja\EInvoice\Models\Peppol\ClauseType\Clause;
use InvoiceNinja\EInvoice\Models\Peppol\DocumentReferenceType\ContractDocumentReference;
use InvoiceNinja\EInvoice\Models\Peppol\DocumentReferenceType\DocumentReference;
use InvoiceNinja\EInvoice\Models\Peppol\FinancialAccountType\FinancingFinancialAccount;
use InvoiceNinja\EInvoice\Models\Peppol\PartyType\FinancingParty;
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

class TradeFinancing
{
	/** @var string */
	#[SerializedName('cbc:ID')]
	public string $ID;

	/** @var string */
	#[SerializedName('cbc:FinancingInstrumentCode')]
	public string $FinancingInstrumentCode;

	/** @var ContractDocumentReference */
	#[SerializedName('cac:ContractDocumentReference')]
	public $ContractDocumentReference;

	/** @var DocumentReference[] */
	#[SerializedName('cac:DocumentReference')]
	public array $DocumentReference;

	/** @var FinancingParty */
	#[NotNull]
	#[NotBlank]
	#[Valid]
	#[SerializedName('cac:FinancingParty')]
	public $FinancingParty;

	/** @var FinancingFinancialAccount */
	#[SerializedName('cac:FinancingFinancialAccount')]
	public $FinancingFinancialAccount;

	/** @var Clause[] */
	#[SerializedName('cac:Clause')]
	public array $Clause;
}
