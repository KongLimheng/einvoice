<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\DeliveryUnitType;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\Transformers\FloatTransformer;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class MinimumDeliveryUnit extends Data
{
	#[Required]
	#[WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public ?float $BatchQuantity;

	#[WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float|Optional $ConsumerUnitQuantity;
	public bool|Optional $HazardousRiskIndicator;
}
