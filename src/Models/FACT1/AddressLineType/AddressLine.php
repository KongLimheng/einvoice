<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\AddressLineType;

use Carbon\Carbon;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class AddressLine extends Data
{
	#[Required]
	#[Max(100)]
	public ?string $Line;
}
