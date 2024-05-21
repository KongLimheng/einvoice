<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\FinancialAccountType;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\BranchType\FinancialInstitutionBranch;
use Invoiceninja\Einvoice\Models\FACT1\CountryType\Country;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class PayeeFinancialAccount extends Data
{
	public string|Optional $ID;

	#[Max(200)]
	public string|Optional $Name;
	public string|Optional $AliasName;
	public string|Optional $AccountTypeCode;
	public string|Optional $AccountFormatCode;
	public string|Optional $CurrencyCode;

	/** @param array<PaymentNote> $PaymentNote */
	public array|Optional $PaymentNote;
	public FinancialInstitutionBranch|Optional $FinancialInstitutionBranch;
	public Country|Optional $Country;
}
