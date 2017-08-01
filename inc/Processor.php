<?php
/**
 * Processor class
 */

namespace HugoPoi\Notification\Store;
use underDEV\Notification\Settings;

class Processor {

	public function __construct() {

		if ( Settings::get()->get_setting( 'storing/general/enable' ) ) {
			add_filter( 'notification/notify/message', array( $this, 'store_notification' ) );
		}

	}

	public function store_notification( $message ) {

    global $logger;
    $logger->addInfo("Notification occur !!!!");
		return $message;

	}

}
