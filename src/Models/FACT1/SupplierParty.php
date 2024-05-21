<?php 

namespace Invoiceninja\Einvoice\Models\FACT1;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\ContactType\AccountingContact;
use Invoiceninja\Einvoice\Models\FACT1\ContactType\DespatchContact;
use Invoiceninja\Einvoice\Models\FACT1\ContactType\SellerContact;
use Invoiceninja\Einvoice\Models\FACT1\PartyType\Party;
use Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class SupplierParty extends Data
{
	public string|Optional $CustomerAssignedAccountID;

	#[DataCollectionOf('string')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public string|Optional $AdditionalAccountID;
	public string|Optional $DataSendingCapability;
	public Party|Optional $Party;
	public DespatchContact|Optional $DespatchContact;
	public AccountingContact|Optional $AccountingContact;
	public SellerContact|Optional $SellerContact;
}
