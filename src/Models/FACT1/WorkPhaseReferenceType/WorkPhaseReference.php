<?php 

namespace Invoiceninja\Einvoice\Models\FACT1\WorkPhaseReferenceType;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FACT1\DocumentReferenceType\WorkOrderDocumentReference;
use Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer;

class WorkPhaseReference extends Data
{
	public string|Optional $ID;
	public string|Optional $WorkPhaseCode;

	#[DataCollectionOf('string')]
	#[WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public string|Optional $WorkPhase;
	public string|Optional $ProgressPercent;

	#[WithTransformer('Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer', format: 'Y-m-d')]
	public Carbon|Optional $StartDate;

	#[WithTransformer('Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer', format: 'Y-m-d')]
	public Carbon|Optional $EndDate;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FACT1\DocumentReferenceType\WorkOrderDocumentReference')]
	#[WithTransformer('Invoiceninja\Einvoice\Models\Transformers\DataCollectionTransformer')]
	public WorkOrderDocumentReference|Optional $WorkOrderDocumentReference;
}
