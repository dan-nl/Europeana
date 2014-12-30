<?php
namespace Europeana\Api\Response\Objects;
use Europeana\Api\Response\ObjectAbstract;


class DcCoverage extends ObjectAbstract {

	/**
	 * @var array
	 * A collection of definitions for the referring object
	 */
	public $def;

	public function __construct( array $properties ) {
		$this->init();
		$this->populate( $properties );
	}

	public function init() {
		parent::init();
		$this->def = array();
	}

}