<?php 

namespace Invoiceninja\Einvoice\Models\FatturaPA\DatiGeneraliType;

use Carbon\Carbon;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiDDTType\DatiDDT;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiDocumentiCorrelatiType\DatiContratto;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiDocumentiCorrelatiType\DatiConvenzione;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiDocumentiCorrelatiType\DatiFattureCollegate;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiDocumentiCorrelatiType\DatiOrdineAcquisto;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiDocumentiCorrelatiType\DatiRicezione;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiGeneraliDocumentoType\DatiGeneraliDocumento;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiSALType\DatiSAL;
use Invoiceninja\Einvoice\Models\FatturaPA\DatiTrasportoType\DatiTrasporto;
use Invoiceninja\Einvoice\Models\FatturaPA\FatturaPrincipaleType\FatturaPrincipale;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class DatiGenerali extends Data
{
	#[Required]
	public DatiGeneraliDocumento $DatiGeneraliDocumento;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FatturaPA\DatiDocumentiCorrelatiType\DatiOrdineAcquisto')]
	public DatiOrdineAcquisto|Optional $DatiOrdineAcquisto;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FatturaPA\DatiDocumentiCorrelatiType\DatiContratto')]
	public DatiContratto|Optional $DatiContratto;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FatturaPA\DatiDocumentiCorrelatiType\DatiConvenzione')]
	public DatiConvenzione|Optional $DatiConvenzione;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FatturaPA\DatiDocumentiCorrelatiType\DatiRicezione')]
	public DatiRicezione|Optional $DatiRicezione;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FatturaPA\DatiDocumentiCorrelatiType\DatiFattureCollegate')]
	public DatiFattureCollegate|Optional $DatiFattureCollegate;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FatturaPA\DatiSALType\DatiSAL')]
	public DatiSAL|Optional $DatiSAL;

	#[DataCollectionOf('Invoiceninja\Einvoice\Models\FatturaPA\DatiDDTType\DatiDDT')]
	public DatiDDT|Optional $DatiDDT;
	public DatiTrasporto|Optional $DatiTrasporto;
	public FatturaPrincipale|Optional $FatturaPrincipale;
}
