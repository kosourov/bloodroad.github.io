<?php defined('INDEX') OR die('Прямой доступ к странице запрещён!');

$Word = array();
	if($Lang=='Eng'){
		$Word['Opening'] = 'Открытие серверов через';
		$Word['GoToGame'] = 'Перейти к игре';
		$Word['Admin'] = 'Admins';
		$Word['TechAdmin'] = 'TechAdmin';
		$Word['GameAdmin'] = 'GameAdmin';
		$Word['Online'] = 'Online';
		$Word['NumServer'] = 'Servers';
		$Word['ComingSoon'] = 'Coming Soon...';
		$Word['AllOnline'] = 'All Online';
		$Word['StartDate'] = 'Start Date';
		$Word['StatusServer'] = ['В разработке','Выключен','ЗБТ','ОБТ','Технические работы','Включен'];
	}
	if($Lang=='Rus'){
		$Word['Opening'] = 'Открытие серверов через';
		$Word['GoToGame'] = 'Перейти к игре';
		$Word['Admin'] = 'Админ';
		$Word['TechAdmin'] = 'Тех.Админ';
		$Word['GameAdmin'] = 'Гейм.Админ';
		$Word['Online'] = 'Онлайн';
		$Word['NumServer'] = 'Сервера';
		$Word['ComingSoon'] = 'Скоро...';
		$Word['AllOnline'] = 'Общий онлайн';
		$Word['StartDate'] = 'Запуск';
		$Word['StatusServer'] = ['В разработке','Выключен','ЗбТ','ОБТ','Технические работы','Включен'];
	}
?>
