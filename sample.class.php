<?php
class CoreClass {
	/**
	 * Constructor
	 */
	public function __construct() {
	}

	/**
	 * Initialize
	 * @return bool
	 */
	function __init() {
		return parent::__init(); // TODO: Change the autogenerated stub
	}


	/**
	 * Constructor
	 */
	function CoreClass() {
		parent::CoreClass(); // TODO: Change the autogenerated stub
	}

	/**
	 * Get singleton instance
	 * @return CoreClass
	 */
	function getInstance() {
		return parent::getInstance(); // TODO: Change the autogenerated stub
	}

	/**
	 * Apply module hook filters
	 * @param $name
	 * @param $data
	 * @return mixed
	 */
	function apply_filters($name, $data) {
		return parent::apply_filters($name, $data); // TODO: Change the autogenerated stub
	}

	/**
	 * Do module hook actions
	 * @param $name
	 * @return bool
	 */
	function do_action($name) {
		return parent::do_action($name); // TODO: Change the autogenerated stub
	}

	/**
	 * Add module hook action
	 * @param $name
	 * @param $action
	 * @return bool
	 */
	function add_action($name, $action) {
		return parent::add_action($name, $action); // TODO: Change the autogenerated stub
	}

	/**
	 * Add module hook filter
	 * @param $name
	 * @param $filter
	 * @return bool
	 */
	function add_filter($name, $filter) {
		return parent::add_filter($name, $filter); // TODO: Change the autogenerated stub
	}

	/**
	 * Add Ajax request
	 * @param $name
	 * @param $request
	 * @param bool $public
	 * @return bool
	 */
	function add_request($name, $request, $public = true) {
		return parent::add_request($name, $request, $public); // TODO: Change the autogenerated stub
	}

	/**
	 * Check if element already exists if exists it will be updated on Save else it will be inserted
	 * @param null $what
	 * @param bool $undelete
	 * @return bool
	 */
	function exists($what = NULL, $undelete = FALSE) {
		return parent::exists($what, $undelete); // TODO: Change the autogenerated stub
	}

	/**
	 * Prepare retrieve conditions
	 * @param null $what
	 * @param null $operators
	 * @return array
	 */
	function prepare($what = NULL, $operators = NULL) {
		return parent::prepare($what, $operators); // TODO: Change the autogenerated stub
	}


	/**
	 * Retrieve element
	 * @param null $what
	 * @param bool $encode
	 * @param null $onlyFields
	 * @param null $orderBy
	 * @param bool $returnAsArray
	 * @param null $operators
	 * @param bool $dump
	 * @return array|mixed
	 */
	function retrieve($what = NULL, $encode = false, $onlyFields = NULL, $orderBy = NULL, $returnAsArray = false, $operators = NULL, $dump = false) {
		return parent::retrieve($what, $encode, $onlyFields, $orderBy, $returnAsArray, $operators, $dump); // TODO: Change the autogenerated stub
	}

	/**
	 * Return an object of the table row UPPERCASE // Come Domenico comanda
	 * @param $what
	 * @param null $operators
	 * @return array
	 */
	function fetch($what, $operators = NULL) {
		return parent::fetch($what, $operators); // TODO: Change the autogenerated stub
	}

}
