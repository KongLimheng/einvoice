<?php 

namespace Invoiceninja\Einvoice\Models\FACT1;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\BranchType\FinancialInstitutionBranch;
use Invoiceninja\Einvoice\Models\FACT1\CountryType\Country;
use Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class FinancialAccount extends Data
{
	public string|Optional $ID;
	public string|Optional $Name;
	public string|Optional $AliasName;
	public string|Optional $AccountTypeCode;
	public string|Optional $AccountFormatCode;
	public string|Optional $CurrencyCode;

	#[DataCollectionOf('string')]
	#[\Spatie\LaravelData\Attributes\WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public string|Optional $PaymentNote;
	public FinancialInstitutionBranch|Optional $FinancialInstitutionBranch;
	public Country|Optional $Country;
}
