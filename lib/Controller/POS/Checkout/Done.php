<?php
/**
 * Checkout Done
 */

namespace App\Controller\POS\Checkout;

class Done extends \OpenTHC\Controller\Base
{
	function __invoke($REQ, $RES, $ARG)
	{
		$data = array(
			'Page' => array('title' => 'POS :: Checkout :: Done')
		);

		return $RES->write( $this->render('pos/checkout/done.php', $data) );
	}
}
