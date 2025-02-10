<?php

	namespace Hasokeyk\Ticimax\Categories;

	use SoapFault;
	use Hasokeyk\Ticimax\TicimaxRequest;

	class TicimaxCategories{

		public $api_url = "/Servis/UrunServis.svc?singleWsdl";

		private $ticimax_request;

		function __construct(TicimaxRequest $ticimax_request){
			$this->ticimax_request = $ticimax_request;
		}

		public function get_categories(){
			$client = $this->ticimax_request->soap_client($this->api_url);
			try{
				$response = $client->__soapCall("SelectKategori", [
					[
						'UyeKodu'    => $this->ticimax_request->key,
						'kategoriID' => 0
					]
				]);
				return [
					'status'   => 'success',
					'data'     => $response->SelectKategoriResult->Kategori ?? null,
					'request'  => $client->__getLastRequest(),
					'response' => $client->__getLastResponse(),
				];
			}catch(SoapFault $e){
				return [
					'status'   => 'danger',
					'message'  => $e->getMessage(),
					'request'  => $client->__getLastRequest(),
					'response' => $client->__getLastResponse(),
				];
			}
		}

		public function get_category($category_id){
			$client = $this->ticimax_request->soap_client($this->api_url);
			try{
				$response = $client->__soapCall("SelectKategori", [
					[
						'UyeKodu'    => $this->ticimax_request->key,
						'kategoriID' => $category_id
					]
				]);
				return [
					'status'   => 'success',
					'data'     => $response->SelectKategoriResult->Kategori ?? null,
					'request'  => $client->__getLastRequest(),
					'response' => $client->__getLastResponse(),
				];
			}catch(SoapFault $e){
				return [
					'status'   => 'danger',
					'message'  => $e->getMessage(),
					'request'  => $client->__getLastRequest(),
					'response' => $client->__getLastResponse(),
				];
			}
		}

		public function create_category(TicimaxCategoryModel $ticimax_category_model){
			$client = $this->ticimax_request->soap_client($this->api_url);
			try{
				$ticimax_category = $ticimax_category_model->to_array();

				if(isset($ticimax_category['ID']) and $ticimax_category['ID'] != 0){
					return [
						'status'  => 'danger',
						'message' => 'Yeni kategori oluşturmak için kategori ID 0 girilmeli'
					];
				}

				$ticimax_category['ID'] = 0;

				$response = $client->__soapCall("SaveKategori", [
					[
						'UyeKodu'  => $this->ticimax_request->key,
						'kategori' => $ticimax_category
					]
				]);
				return [
					'status'   => 'success',
					'data'     => $response->SaveKategoriResult ?? null,
					'request'  => $client->__getLastRequest(),
					'response' => $client->__getLastResponse(),
				];
			}catch(SoapFault $e){
				return [
					'status'   => 'danger',
					'message'  => $e->getMessage(),
					'request'  => $client->__getLastRequest(),
					'response' => $client->__getLastResponse(),
				];
			}
		}

		public function update_category(TicimaxCategoryModel $ticimax_category_model){
			$client = $this->ticimax_request->soap_client($this->api_url);
			try{
				$ticimax_category = $ticimax_category_model->to_array();
				if(isset($ticimax_category['ID']) and $ticimax_category['ID'] == 0){
					return [
						'status'  => 'danger',
						'message' => 'Kategori güncellerken kategori ID 0 girilemez '
					];
				}

				$response = $client->__soapCall("SaveKategori", [
					[
						'UyeKodu'  => $this->ticimax_request->key,
						'kategori' => $ticimax_category
					]
				]);
				return [
					'status'   => 'success',
					'data'     => $response->SaveKategoriResult ?? null,
					'request'  => $client->__getLastRequest(),
					'response' => $client->__getLastResponse(),
				];
			}catch(SoapFault $e){
				return [
					'status'   => 'danger',
					'message'  => $e->getMessage(),
					'request'  => $client->__getLastRequest(),
					'response' => $client->__getLastResponse(),
				];
			}
		}

		public function del_category($category_id): array{
			$client = $this->ticimax_request->soap_client($this->api_url);
			try{
				$response = $client->__soapCall("DeleteKategori", [
					[
						'UyeKodu'    => $this->ticimax_request->key,
						'KategoriID' => $category_id
					]
				]);
				return [
					'status'   => 'success',
					'data'     => $response->DeleteKategoriResult ?? null,
					'request'  => $client->__getLastRequest(),
					'response' => $client->__getLastResponse(),
				];
			}catch(SoapFault $e){
				return [
					'status'   => 'danger',
					'message'  => $e->getMessage(),
					'request'  => $client->__getLastRequest(),
					'response' => $client->__getLastResponse(),
				];
			}
		}

	}