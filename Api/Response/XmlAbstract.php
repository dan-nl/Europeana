<?php
namespace Europeana\Api\Response;


abstract class XmlAbstract extends ResponseAbstract {

	/**
	 * @var {bool|\SimpleXMLElement}
	 */
	protected $xml;


	/**
	 * @param {\W3C\Http\Response} $Response
	 * @param {string} $wskey
	 */
	public function __construct( $Response, $wskey = '' ) {
		$this->init();
		$this->populate( $Response, $wskey );

		if ( $this->http_info['http_code'] !== 200 ) {
			$this->throwRequestError();
		}
	}

	protected function init() {
		parent::init();
		$this->xml = null;
	}

	/**
	 * @param {\W3C\Http\Response} $Response
	 * @param {string} $wskey
	 */
	protected function populate( $Response, $wskey = '' ) {
		parent::populate( $Response, $wskey );
		$this->validate();
	}

	public function validate() {
		parent::validate();
	}

}