<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\BillingReferenceLineType;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\AllowanceChargeType\AllowanceCharge;
use Invoiceninja\Einvoice\Models\Transformers\FloatTransformer;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class BillingReferenceLine extends Data
{
	#[Required]
	public ?string $ID;

	#[WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $Amount;

	/** @param array<AllowanceCharge> $AllowanceCharge */
	public array|Optional $AllowanceCharge;
}
