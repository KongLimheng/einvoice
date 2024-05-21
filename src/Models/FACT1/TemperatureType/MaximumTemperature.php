<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\TemperatureType;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\Transformers\FloatTransformer;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class MaximumTemperature extends Data
{
	#[Required]
	public string $AttributeID;

	#[Required]
	#[WithTransformer('Invoiceninja\Einvoice\Models\Transformers\FloatTransformer')]
	public float $Measure;

	#[DataCollectionOf('Description')]
	public string|Optional $Description;
}
