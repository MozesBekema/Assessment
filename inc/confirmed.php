<?php

	INSERT INTO `assessment`.`beoordeling`

		(`wp_id`, `accounts_id`, `beoordeling`, leerling_id`)

	VALUES (':wpid', ':aid', '2', '4');



  $wp = $conn->prepare("
		SELECT
			CONCAT(kt_id, '.', wp_num, ' ', wp_name) as wpnaam, id
		FROM `wp`
		WHERE kt_id = :kt_id
		ORDER BY id

	");
    $wp->execute(array('kt_id' => $_POST['kerntaken']));




?>
