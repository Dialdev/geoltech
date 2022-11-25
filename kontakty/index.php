<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
$APPLICATION->SetPageProperty("description", "Контакты");
?><div class="center">
	<div class="content" itemscope="" itemtype="http://schema.org/Organization">
		<p class="contacts-item">
		</p>
		<p>
		</p>
		<p>
		</p>
		<p>
 <b>Наш адрес: </b>Калуга, ул. Маршала Жукова, д. 23А, помещение 7
		</p>
		<p>
 <b>Телефонный номер: </b><a href="tel:+74842278782">+7 (4842) 278-782</a>
		</p>
		<p>
			 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +7 (910) 608-39-86
		</p>
		<p>
 <b>e-mail: </b><a href="mailto:gtproject-40@mail.ru" itemprop="email">gtproject-40@mail.ru</a>
		</p>
		<p>
 <b>График работы:</b> пн.-пт. с 08.00 по 17.00
		</p>
 <br>
 <br>
 <br>
		<p>
		</p>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"",
	Array(
		"CONTROLS" => array("ZOOM","MINIMAP","TYPECONTROL","SCALELINE"),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:54.515928307738406;s:10:\"yandex_lon\";d:36.28056278604856;s:12:\"yandex_scale\";i:16;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:36.28275585153755;s:3:\"LAT\";d:54.51680844564175;s:4:\"TEXT\";s:78:\"Калуга, ул. Маршала Жукова, д.23А, помещение 7\";}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array("ENABLE_DRAGGING")
	)
);?>
		<p>
		</p>
		 <?/*
			 <iframe width="100%" height="366"
			src="https://api-maps.yandex.ru/frame/v1/-/C6EcnXo4/?scroll=false"
                        frameborder="0"></iframe>
		*/?>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>