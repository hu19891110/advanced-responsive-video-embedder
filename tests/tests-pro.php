<?php

/**
 * @group scripts
 */
class Tests_Pro extends WP_UnitTestCase {

	/**
	 * Test if all the file hooks are working.
	 *
	 * @since 2.3.6
	 */
	public function test_installed() {

		$this->assertTrue( is_file( '/tmp/arve-pro/arve-pro.php' ) );
		$this->assertTrue( function_exists( 'arve_pro_init' ) );
		$this->assertTrue( version_compare( ARVE_PRO_VERSION, ARVE_PRO_VERSION_REQUIRED, '>=' ) );
	}
}
