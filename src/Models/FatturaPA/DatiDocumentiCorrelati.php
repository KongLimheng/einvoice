<?php 

namespace Invoiceninja\Einvoice\Models\FatturaPA;

use Symfony\Component\Serializer\Attribute\Context;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;

class DatiDocumentiCorrelati
{
	/** @var integer */
	public int $RiferimentoNumeroLinea;

	/** @var string */
	#[Length(min: 1, max: 20)]
	#[Regex('/[\x{0020}-\x{007E}\x{00A0}-\x{00FF}]{1,20}/u')]
	public string $IdDocumento;

	/** @var DateTime */
	#[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d'])]
	public \DateTime $Data;

	/** @var string */
	#[Length(min: 1, max: 20)]
	#[Regex('/[\x{0020}-\x{007E}\x{00A0}-\x{00FF}]{1,20}/u')]
	public string $NumItem;

	/** @var string */
	#[Length(min: 1, max: 100)]
	#[Regex('/[\x{0020}-\x{007E}\x{00A0}-\x{00FF}]{1,100}/u')]
	public string $CodiceCommessaConvenzione;

	/** @var string */
	#[Length(min: 1, max: 15)]
	#[Regex('/[\x{0020}-\x{007E}\x{00A0}-\x{00FF}]{1,15}/u')]
	public string $CodiceCUP;

	/** @var string */
	#[Length(min: 1, max: 15)]
	#[Regex('/[\x{0020}-\x{007E}\x{00A0}-\x{00FF}]{1,15}/u')]
	public string $CodiceCIG;
}
