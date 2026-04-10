<?php
/* Демо для портфолио: без внешних HTTP-запросов и прод-идентификаторов */
$title = 'Демо: юридический форум';
$unit = 'demo';
$type = 'legalforum';
$land = 'legal_forum_demo';
$graccount = '';
$grcampaign = '';
$grtag = '';
$quote_id = '';
$link = '';
$es_list_id = 'DEMO';
$es_message_id = 'DEMO';

$program = 'Legal Forum (demo)';
$date = '25&nbsp;ноября 2021';
$location = '';

$phone = '+7 (000) 000-00-00';
$email = 'demo@example.com';

$partner_array = [];
if (isset($partner_array[$partner])) {
	$value = $partner_array[$partner];
	$phone = $value['phone'];
	$email = $value['email'];
}

switch ($version) {

	case 'online':
	$version = 'online';
	$location = 'онлайн-участие';
	break;

	case 'offline':
	$version = 'offline';
	$location = 'Конференц-зал (демо), Москва';
	break;

}

$phone_link = preg_replace('/[^\d\+]/m', '', $phone);
