<?php
namespace Europeana\Api\Response\Objects;
use Europeana\Api\Response\ObjectAbstract;


class EdmRights extends ObjectAbstract {

	/**
	 * @var array
	 * A collection of definitions for the referring object
	 */
	public $def;

	public function __construct( array $properties ) {
		$this->init();
		$this->populate( $properties );
	}

	public function ini() {
		parent::init();
		$this->def = array();
	}

}