<?php 

namespace Invoiceninja\Einvoice\Models\FatturaPA;

use Carbon\Carbon;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class IscrizioneREA extends Data
{
	public string $Ufficio;
	public string $NumeroREA;
	public float|Optional $CapitaleSociale;
	public string|Optional $SocioUnico;
	public array $SocioUnico_array = ['SU' => 'socio unico', 'SM' => 'più soci'];
	public string $StatoLiquidazione;
	public array $StatoLiquidazione_array = ['LS' => 'in liquidazione', 'LN' => 'non in liquidazione'];
}
