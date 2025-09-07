<?php

	namespace Hasokeyk\Ticimax\Products;

	use Hasokeyk\Ticimax\TicimaxHelpers;

	class TicimaxProductModel{

		public  $product_id                = 0;
		public  $product_name              = '';
		public  $product_description       = '';
		public  $product_is_active         = true;
		public  $product_category_id       = 0;
		public  $product_categories_ids    = [];
		public  $product_show_list         = true;
		public  $product_brand_id          = 0;
		public  $product_supplier_id       = 0;
		public  $product_variations        = [];
		public  $product_highlighting      = true;
		public  $product_images            = [];
		public  $product_unit_name         = null;
		public  $product_1_custom_variable = null;
		public  $product_2_custom_variable = null;
		public  $product_3_custom_variable = null;
		public  $product_4_custom_variable = null;
		public  $product_5_custom_variable = null;
		public  $product_seo_url           = null;
		public  $product_seo_redirect_url  = null;
		private $product_settings_class    = null;

		private $request_params = [
			'product_name',
			'product_is_active',
			'product_category_id',
			'product_brand_id',
			'product_variations',
			'product_unit_name',
		];

		private $ticimax_helper;

		function __construct(){
			$this->ticimax_helper         = new TicimaxHelpers();
			$this->product_settings_class = new TicimaxProductSettingsModel();
		}

		public function get_product_id(){
			return $this->product_id;
		}

		public function set_product_id($product_id): void{
			$this->product_id = $product_id;
		}

		public function get_product_name(){
			return $this->product_name;
		}

		public function set_product_name($product_name): void{
			$this->product_settings_class->set_urun_adi_guncelle();
			$this->product_name = $product_name;
		}

		public function get_product_description(){
			return $this->product_description;
		}

		public function set_product_description($product_description): void{
			$this->product_settings_class->set_aciklama_guncelle();
			$this->product_description = $product_description;
		}

		public function get_product_is_active(){
			return $this->product_is_active;
		}

		public function set_product_is_active($product_is_active): void{
			$this->product_is_active = $product_is_active;
		}

		public function get_product_category_id(){
			return $this->product_category_id;
		}

		public function set_product_category_id($product_category_id): void{
			$this->product_category_id = $product_category_id;
		}

		public function get_product_categories_ids(): array{
			return $this->product_categories_ids;
		}

		public function set_product_categories_ids(array $product_categories_ids): void{
			$this->product_categories_ids = $product_categories_ids;
		}

		public function get_product_show_list(){
			return $this->product_show_list;
		}

		public function set_product_show_list($product_show_list): void{
			$this->product_show_list = $product_show_list;
		}

		public function get_product_brand_id(){
			return $this->product_brand_id;
		}

		public function set_product_brand_id($product_brand_id): void{
			$this->product_brand_id = $product_brand_id;
		}

		public function get_product_supplier_id(){
			return $this->product_supplier_id;
		}

		public function set_product_supplier_id($product_supplier_id): void{
			$this->product_supplier_id = $product_supplier_id;
		}

		public function get_product_variations(){
			return $this->product_variations;
		}

		public function set_product_variations(TicimaxProductVariationModel $product_variations){
			$get_array = $product_variations->to_array();
			if(is_array($get_array)){
				return $this->product_variations[] = $get_array;
			}
			else{
				return [];
			}
		}

		public function get_product_highlighting(){
			return $this->product_highlighting;
		}

		public function set_product_highlighting($product_highlighting): void{
			$this->product_highlighting = $product_highlighting;
		}

		public function get_product_images(){
			return $this->product_images;
		}

		public function set_product_images($product_images): void{
			$this->product_images = $product_images;
		}

		public function get_product_unit_name(){
			return $this->product_unit_name;
		}

		public function set_product_unit_name($product_unit_name): void{
			$this->product_unit_name = $product_unit_name;
		}

		public function get_product_1_custom_variable(){
			return $this->product_1_custom_variable;
		}

		public function set_product_1_custom_variable($product_1_custom_variable): void{
			$this->product_1_custom_variable = $product_1_custom_variable;
		}

		public function get_product_2_custom_variable(){
			return $this->product_2_custom_variable;
		}

		public function set_product_2_custom_variable($product_2_custom_variable): void{
			$this->product_2_custom_variable = $product_2_custom_variable;
		}

		public function get_product_3_custom_variable(){
			return $this->product_3_custom_variable;
		}

		public function set_product_3_custom_variable($product_3_custom_variable): void{
			$this->product_3_custom_variable = $product_3_custom_variable;
		}

		public function get_product_4_custom_variable(){
			return $this->product_4_custom_variable;
		}

		public function set_product_4_custom_variable($product_4_custom_variable): void{
			$this->product_4_custom_variable = $product_4_custom_variable;
		}

		public function get_product_5_custom_variable(){
			return $this->product_5_custom_variable;
		}

		public function set_product_5_custom_variable($product_5_custom_variable): void{
			$this->product_5_custom_variable = $product_5_custom_variable;
		}

		public function get_product_seo_url(){
			return $this->product_seo_url;
		}

		public function set_seo_url($product_seo_url): void{
			$this->product_settings_class->set_urun_adresini_elle_olustur();
			$this->product_seo_url = $product_seo_url;
		}

		public function set_seo_redirect_url($product_seo_url): void{
			$this->product_seo_redirect_url = $product_seo_url;
		}

		public function to_array(){
			$check = $this->ticimax_helper->check_request_params($this, $this->request_params);
			if(!$check){
				return false;
			}

			$product_array = [
				'ID'                => $this->product_id,
				'UrunAdi'           => $this->product_name,
				'Aktif'             => $this->product_is_active,
				'MarkaID'           => $this->product_brand_id,
				'TedarikciID'       => $this->product_supplier_id,
				'AnaKategoriID'     => $this->product_category_id,
				'Kategoriler'       => $this->product_categories_ids,
				'ListedeGoster'     => $this->product_show_list,
				'Resimler'          => $this->product_images,
				'SatisBirimi'       => $this->product_unit_name,
				'Vitrin'            => $this->product_highlighting,
				'OzelAlan1'         => $this->product_1_custom_variable,
				'OzelAlan2'         => $this->product_2_custom_variable,
				'OzelAlan3'         => $this->product_3_custom_variable,
				'OzelAlan4'         => $this->product_4_custom_variable,
				'OzelAlan5'         => $this->product_5_custom_variable,
				'UrunSayfaAdresi'   => $this->product_seo_url,
				'Adres'             => $this->product_seo_url,
			];

			if(is_array($this->product_variations)){
				$product_array['Varyasyonlar']['Varyasyon'] = $this->product_variations;
			}

			return $product_array;
		}

		public function get_product_class(): array{
			return [
				'product'          => $this->to_array(),
				'product_settings' => $this->product_settings_class->to_array(),
			];
		}

	}