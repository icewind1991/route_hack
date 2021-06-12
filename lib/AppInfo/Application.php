<?php
namespace OCA\RouteHack\AppInfo;

use OC\AppFramework\Routing\RouteParser;
use OCP\AppFramework\App;

class Application extends App {
	public function __construct(array $urlParams = []) {
		parent::__construct('route_hack', $urlParams);
	}
}
