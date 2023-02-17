<?php
/* Defaults */
$title = 'Школа бизнеса Синергия | Юридический форум | Synergy legal Forum';
$unit = 'sbs';
$type = 'legalforum';
$land = 'legal_forum';
$graccount = '';
$grcampaign = '';
$grtag = '';
$quote_id = '';
$link = '';
$es_list_id = 1325;
$es_message_id = 7382;

$program = 'Synergy legal Forum';
$date = '25&nbsp;ноября 2021';
$location = '';

$phone = '+7 (495) 787-87-67';
$email = '';

$GTMID = '';


/* Франчайзи-партнеры */
$partner_array = json_decode(file_get_contents("https://franch.sbs.edu.ru/global__FR-partners.json"), true);
if (isset($partner_array[$partner])) {
	$value  = $partner_array[$partner];
	$phone = $value["phone"];
	$email = $value["email"];
}


/* Версии */
switch ($version) {
	
	case 'online':
	$version = 'online';
	$location = 'онлайн-участие';
	break;

	case 'offline':
	$version = 'offline';
	$location = 'Holiday Inn Лесная';
	break;

} // $version

switch ($partner) {
	
	case 'franchising_krasnoyarsk':
		$GTMID = 'P2WBJT6';
	break;

} // $partner


/* Postprocess */
$phone_link = preg_replace('/[^\\d\\+]/m', '', $phone);

$action = implode(array(
	'https://syn.su/lander.php?r=land/index',
	'&unit=', $unit,
	'&type=', $type,
	'&land=', $land,
	'&version=', $version,
	'&partner=', $partner,
	'&graccount=', $graccount,
	'&grcampaign=', $grcampaign,
	'&grtag=', $grtag,
	'&quote_id=', $quote_id,
	'&es_list_id=', $es_list_id,
	'&es_message_id=', $es_message_id,
	'&link=', urlencode($link),
));
