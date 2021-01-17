<?php

	$component = array (
		'setting' => 'component/setting/setting.php',
		'router' => 'component/router/router.php',
	);



	//Функция проверяет все имеющиеся в списке рессурсы и инклудит их
	function componentConnectAll() {
		global $component;
		foreach ($component as $componentKey => $componentItem) {
			if (file_exists($componentItem)) {
				require_once $componentItem;
			} else {
				echo 'Компонент ' . $componentKey . ' не нейден!';
			}
		}
	}


	//Функция проверяет и инклудит только список переданных компонентов
	function componentConnect() {

	}

?>