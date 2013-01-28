<?php
/**
 * LayoutVarsReserve.php
 * @author kohei hieda
 *
 */
class LayoutVarsReserveHelper extends AppHelper {

	public function __construct(View $View, $settings = array()) {
		parent::__construct($View, $settings);
		$this->_View = $View;
		$this->reserveViewVars();
	}

	private function reserveViewVars() {
		foreach ($this->_View->viewVars as $key=>$value) {
			$this->{$key} = $value;
		}
	}

}