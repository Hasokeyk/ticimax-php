<?php

	namespace Hasokeyk\Ticimax\Products;

	use Hasokeyk\Ticimax\TicimaxHelpers;

	class TicimaxProductVariationModel{

		private $product_variation_id             = null;
		private $product_variation_is_active      = true;
		private $product_variation_money_unit_id  = 1;
		private $product_variation_sale_price     = 0;
		private $product_variation_stock_quantity = null;
		private $product_variation_stock_code     = '';
		private $product_variation_barcode        = '';
		private $product_variation_images         = [];
		private $product_variation_supplier_code  = 0;

		private $request_params = [
			'product_variation_money_unit_id',
			'product_variation_sale_price',
			'product_variation_stock_code',
			'product_variation_stock_quantity',
			'product_variation_supplier_code',
		];

		private $ticimax_helper;

		function __construct(){
			$this->ticimax_helper         = new TicimaxHelpers();
		}

		public function get_product_variation_id(){
			return $this->product_variation_id;
		}

		public function set_product_variation_id($product_variation_id):void{
			$this->product_variation_id = $product_variation_id;
		}

		public function get_product_variation_is_active(){
			return $this->product_variation_is_active;
		}

		public function set_product_variation_is_active($product_variation_is_active):void{
			$this->product_variation_is_active = $product_variation_is_active;
		}

		public function get_product_variation_money_unit_id(){
			return $this->product_variation_money_unit_id;
		}

		public function set_product_variation_money_unit_id($product_variation_money_unit_id):void{
			$this->product_variation_money_unit_id = $product_variation_money_unit_id;
		}

		public function get_product_variation_sale_price(){
			return $this->product_variation_sale_price;
		}

		public function set_product_variation_sale_price($product_variation_sale_price):void{
			$this->product_variation_sale_price = $product_variation_sale_price;
		}

		public function get_product_variation_stock_quantity(){
			return $this->product_variation_stock_quantity;
		}

		public function set_product_variation_stock_quantity($product_variation_stock_quantity):void{
			$this->product_variation_stock_quantity = $product_variation_stock_quantity;
		}

		public function get_product_variation_stock_code(){
			return $this->product_variation_stock_code;
		}

		public function set_product_variation_stock_code($product_variation_stock_code):void{
			$this->product_variation_stock_code = $product_variation_stock_code;
		}

		public function get_product_variation_barcode(){
			return $this->product_variation_barcode;
		}

		public function set_product_variation_barcode($product_variation_barcode):void{
			$this->product_variation_barcode = $product_variation_barcode;
		}

		public function get_product_variation_images(){
			return $this->product_variation_images;
		}

		public function set_product_variation_images($product_variation_images):void{
			$this->product_variation_images = $product_variation_images;
		}

		public function get_product_variation_supplier_code(){
			return $this->product_variation_supplier_code;
		}

		public function set_product_variation_supplier_code($product_variation_supplier_code):void{
			$this->product_variation_supplier_code = $product_variation_supplier_code;
		}

		public function to_array(){
			$check = $this->ticimax_helper->check_request_params($this, $this->request_params);
			if(!$check){
				return false;
			}

			return [
				'ID'            => $this->product_variation_id ?? 0,
				'Aktif'         => $this->product_variation_is_active ?? true,
				'ParaBirimiID'  => $this->product_variation_money_unit_id,
				'StokAdedi'     => $this->product_variation_stock_quantity,
				'StokKodu'      => $this->product_variation_stock_code,
				'SatisFiyati'   => $this->product_variation_sale_price,
				'Barkod'        => $this->product_variation_barcode,
				'TedarikciKodu' => $this->product_variation_supplier_code,
				'Resimler'      => $this->product_variation_images,
			];
		}

	}