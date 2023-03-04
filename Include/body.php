<div>
	<?php

	$current_page = 'home.php';
	if ( isset( $_GET['page'] ) && '' != $_GET['page'] ) {
		switch ( $_GET['page'] ) {
			case 'home':
				$current_page = 'home.php';

				break;

			case 'trade':
				$current_page = 'trade.php';

				break;

			case 'inventory':
				$current_page = 'inventory.php';

				break;

			case 'contact':
				$current_page = 'contact.php';

				break;

			default:
				$current_page = 'home.php';

				break;
		}
	}

	require './pages/' . $current_page;

	?>
</div>
