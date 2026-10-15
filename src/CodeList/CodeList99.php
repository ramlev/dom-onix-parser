<?php

namespace Dso\Onix\CodeList;

/**
 * ONIX Code List 99
 *
 * Used with <ProductFormFeatureValue> <b335>See List 79
 *
 * @see https://ns.editeur.org/onix/en/99
 */
class CodeList99 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 99 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/99
	 */
	protected static $en = [
		'26' => 'Pigskin',
		'27' => 'Goatskin',
		'02' => 'Calfskin',
		'13' => 'Cowhide',
		'30' => 'Lambskin',
		'04' => 'Morocco',
		'14' => 'Eelskin',
		'03' => 'French Morocco',
		'09' => 'Ostraleg',
		'01' => 'Berkshire leather',
		'18' => 'Softhide leather',
		'12' => 'Bonded leather',
		'05' => 'Bonded buffalo grain',
		'06' => 'Bonded calf grain',
		'07' => 'Bonded Cordova',
		'08' => 'Bonded eelskin',
		'10' => 'Bonded ostrich',
		'11' => 'Bonded reptile grain',
		'25' => 'Imitation leather',
		'16' => 'Leatherflex',
		'15' => 'Kivar',
		'24' => 'Guaflex / Skivertex',
		'31' => 'Cloth',
		'17' => 'Moleskin',
		'20' => 'Velvet',
		'29' => 'Padded or quilted fabric',
		'23' => 'Géltex / Wibalin',
		'19' => 'Metal',
		'21' => 'Mother-of-pearl',
		'22' => 'Papyrus',
		'28' => 'Rubber',
	];

	/**
	 * Code List 99 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/99
	 */
	protected static $es = [
		'26' => 'Piel de cerdo',
		'27' => 'Piel de cabra',
		'02' => 'Piel de becerro',
		'13' => 'Piel de vaca',
		'30' => 'Piel de cordero',
		'04' => 'Marroquí',
		'14' => 'Piel de anguila',
		'03' => 'Marroquí francés',
		'09' => 'Ostraleg',
		'01' => 'Piel de Berkshire',
		'18' => 'Cuero fino («Softhide leather»)',
		'12' => 'Piel reconstituida',
		'05' => 'Imitación piel – Piel de búfalo',
		'06' => 'Imitación piel – Piel de becerro',
		'07' => 'Cordobán reconstituido',
		'08' => 'Imitación piel – Piel de anguila',
		'10' => 'Avestruz reconstituido',
		'11' => 'Imitación piel – Piel de serpiente',
		'25' => 'Imitación piel',
		'16' => '«Leatherflex»',
		'15' => '«Kivar»',
		'24' => 'Guaflex / Skivertex',
		'31' => 'Tela',
		'17' => 'Moleskin',
		'20' => 'Terciopelo',
		'29' => 'Tela acolchada o con relleno',
		'23' => 'Géltex / Wibalin',
		'19' => 'Metal',
		'21' => 'Nácar',
		'22' => 'Papiro',
		'28' => 'Caucho',
	];

	/**
	 * Code List 99 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/99
	 */
	protected static $de = [
		'26' => 'Pigskin',
		'27' => 'Goatskin',
		'02' => 'Calfskin',
		'13' => 'Cowhide',
		'30' => 'Lambskin',
		'04' => 'Morocco',
		'14' => 'Eelskin',
		'03' => 'French Morocco',
		'09' => 'Ostraleg',
		'01' => 'Berkshire leather',
		'18' => 'Softhide leather',
		'12' => 'Bonded leather',
		'05' => 'Bonded buffalo grain',
		'06' => 'Bonded calf grain',
		'07' => 'Bonded Cordova',
		'08' => 'Bonded eelskin',
		'10' => 'Bonded ostrich',
		'11' => 'Bonded reptile grain',
		'25' => 'Imitation leather',
		'16' => 'Leatherflex',
		'15' => 'Kivar',
		'24' => 'Guaflex / Skivertex',
		'31' => 'Cloth',
		'17' => 'Moleskin',
		'20' => 'Velvet',
		'29' => 'Padded or quilted fabric',
		'23' => 'Géltex / Wibalin',
		'19' => 'Metal',
		'21' => 'Mother-of-pearl',
		'22' => 'Papyrus',
		'28' => 'Rubber',
	];

	/**
	 * Code List 99 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/99
	 */
	protected static $fr = [
		'26' => 'Cuir de porc',
		'27' => 'Cuir de chèvre',
		'02' => 'Vélin',
		'13' => 'Cuir de vache',
		'30' => 'Lambskin',
		'04' => 'Maroquin',
		'14' => 'Peau d’anguille',
		'03' => 'Maroquin Français',
		'09' => 'Croute d’Ostra',
		'01' => 'Cuir Berkshire',
		'18' => 'Cuir Softhide',
		'12' => 'Croute de cuir',
		'05' => 'Croute de buffle',
		'06' => 'Croute de veau',
		'07' => 'Croute de cuir de Cordoue',
		'08' => 'Croute d’anguille',
		'10' => 'Croute d’autruche',
		'11' => 'Croute de reptile',
		'25' => 'Imitation cuir',
		'16' => 'Leatherflex',
		'15' => 'Kivar',
		'24' => 'Guaflex / Skivertex',
		'31' => 'Cloth',
		'17' => 'Moleskine',
		'20' => 'Velours',
		'29' => 'Tissu rembourré ou matelassé',
		'23' => 'Géltex / Wibalin',
		'19' => 'Métal',
		'21' => 'Nacre',
		'22' => 'Papyrus',
		'28' => 'Caoutchouc',
	];

	/**
	 * Code List 99 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/99
	 */
	protected static $it = [
		'26' => 'Pelle di maiale',
		'27' => 'Pelle di capra',
		'02' => 'Pelle di vitello',
		'13' => 'Pelle di mucca',
		'30' => 'Lambskin',
		'04' => 'Marocchino',
		'14' => 'Pelle di anguilla',
		'03' => 'Marocchino francese',
		'09' => 'Rigenerato di pelle di vitello Ostraleg',
		'01' => 'Pelle del Berkshire',
		'18' => 'Cuoio leggero',
		'12' => 'Rigenerato di fibre di cuoio',
		'05' => 'Rigenerato di pelle di bufalo',
		'06' => 'Rigenerato di pelle di vitello',
		'07' => 'Rigenerato di pelle di Cordova',
		'08' => 'Rigenerato di pelle di anguilla',
		'10' => 'Rigenerato di pelle di struzzo',
		'11' => 'Rigenerato di pelle di serpente',
		'25' => 'Similpelle',
		'16' => 'Leatherflex',
		'15' => 'Kivar',
		'24' => 'Guaflex/Skivertex',
		'31' => 'Cloth',
		'17' => 'Moleskin',
		'20' => 'Velluto',
		'29' => 'Tessuto imbottito o trapuntato',
		'23' => 'Géltex/Wibalin',
		'19' => 'Metallo',
		'21' => 'Madreperla',
		'22' => 'Papiro',
		'28' => 'Gomma',
	];

	/**
	 * Code List 99 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/99
	 */
	protected static $nb = [
		'26' => 'Pigskin',
		'27' => 'Goatskin',
		'02' => 'Calfskin',
		'13' => 'Cowhide',
		'30' => 'Lambskin',
		'04' => 'Morocco',
		'14' => 'Eelskin',
		'03' => 'French Morocco',
		'09' => 'Bonded Ostraleg',
		'01' => 'Berkshire leather',
		'18' => 'Softhide leather',
		'12' => 'Bonded leather',
		'05' => 'Bonded buffalo grain',
		'06' => 'Bonded calf grain',
		'07' => 'Bonded Cordova',
		'08' => 'Bonded eelskin',
		'10' => 'Bonded ostrich',
		'11' => 'Bonded reptile grain',
		'25' => 'Imitation leather',
		'16' => 'Leatherflex',
		'15' => 'Kivar',
		'24' => 'Guaflex / Skivertex',
		'31' => 'Cloth',
		'17' => 'Moleskin',
		'20' => 'Velvet',
		'29' => 'Padded or quilted fabric',
		'23' => 'Géltex / Wibalin',
		'19' => 'Metal',
		'21' => 'Mother-of-pearl',
		'22' => 'Papyrus',
		'28' => 'Rubber',
	];

	/**
	 * Code List 99 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/99
	 */
	protected static $tr = [
		'26' => 'Domuz derisi',
		'27' => 'Keçi derisi',
		'02' => 'Dana derisi',
		'13' => 'Sığır derisi',
		'30' => 'Lambskin',
		'04' => 'Maroken',
		'14' => 'Yılan derisi',
		'03' => 'Fransız Maroken',
		'09' => 'Karma Ostraleg',
		'01' => 'Berkshire derisi',
		'18' => 'Softhide deri',
		'12' => 'Karma deri',
		'05' => 'Karma sırça bufalo',
		'06' => 'Karma sırça dana',
		'07' => 'Karma Cordova',
		'08' => 'Karma yılan derisi',
		'10' => 'Karma devekuşu',
		'11' => 'Karma sırça sürüngen',
		'25' => 'Suni deri',
		'16' => 'Leatherflex',
		'15' => 'Kivar',
		'24' => 'Guaflex',
		'31' => 'Cloth',
		'17' => 'Köstebek derisi',
		'20' => 'Kadife',
		'29' => 'Padded or quilted fabric',
		'23' => 'Géltex',
		'19' => 'Metal',
		'21' => 'Sedef',
		'22' => 'Papirüs',
		'28' => 'Rubber',
	];
}
