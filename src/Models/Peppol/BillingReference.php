<?php 

namespace InvoiceNinja\EInvoice\Models\Peppol;

use DateTime;
use InvoiceNinja\EInvoice\Models\Peppol\BillingReferenceLineType\BillingReferenceLine;
use InvoiceNinja\EInvoice\Models\Peppol\DocumentReferenceType\AdditionalDocumentReference;
use InvoiceNinja\EInvoice\Models\Peppol\DocumentReferenceType\CreditNoteDocumentReference;
use InvoiceNinja\EInvoice\Models\Peppol\DocumentReferenceType\DebitNoteDocumentReference;
use InvoiceNinja\EInvoice\Models\Peppol\DocumentReferenceType\InvoiceDocumentReference;
use InvoiceNinja\EInvoice\Models\Peppol\DocumentReferenceType\ReminderDocumentReference;
use InvoiceNinja\EInvoice\Models\Peppol\DocumentReferenceType\SelfBilledCreditNoteDocumentReference;
use InvoiceNinja\EInvoice\Models\Peppol\DocumentReferenceType\SelfBilledInvoiceDocumentReference;
use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Attribute\SerializedName;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Validator\Constraints\Date;

class BillingReference
{
	/** @var InvoiceDocumentReference */
	#[SerializedName('cac:InvoiceDocumentReference')]
	public $InvoiceDocumentReference;

	/** @var SelfBilledInvoiceDocumentReference */
	#[SerializedName('cac:SelfBilledInvoiceDocumentReference')]
	public $SelfBilledInvoiceDocumentReference;

	/** @var CreditNoteDocumentReference */
	#[SerializedName('cac:CreditNoteDocumentReference')]
	public $CreditNoteDocumentReference;

	/** @var SelfBilledCreditNoteDocumentReference */
	#[SerializedName('cac:SelfBilledCreditNoteDocumentReference')]
	public $SelfBilledCreditNoteDocumentReference;

	/** @var DebitNoteDocumentReference */
	#[SerializedName('cac:DebitNoteDocumentReference')]
	public $DebitNoteDocumentReference;

	/** @var ReminderDocumentReference */
	#[SerializedName('cac:ReminderDocumentReference')]
	public $ReminderDocumentReference;

	/** @var AdditionalDocumentReference */
	#[SerializedName('cac:AdditionalDocumentReference')]
	public $AdditionalDocumentReference;

	/** @var BillingReferenceLine[] */
	#[SerializedName('cac:BillingReferenceLine')]
	public array $BillingReferenceLine;
}
