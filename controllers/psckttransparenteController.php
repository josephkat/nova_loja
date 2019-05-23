<?php
class psckttransparenteController extends Controller {

	private $user;

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$store = new Store();
		$products = new Products();
		
		$dados = $store->getTemplate();


		$this->loadTemplate('cart_psckttransparente', $dados);
	}
}
?>