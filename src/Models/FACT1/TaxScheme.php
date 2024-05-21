<?php 

namespace Invoiceninja\Einvoice\Models\FACT1;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\AddressType\JurisdictionRegionAddress;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class TaxScheme extends Data
{
	public string|Optional $ID;
	public string|Optional $Name;
	public string|Optional $TaxTypeCode;
	public string|Optional $CurrencyCode;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FACT1\AddressType\JurisdictionRegionAddress')]
	public JurisdictionRegionAddress|Optional $JurisdictionRegionAddress;
}
