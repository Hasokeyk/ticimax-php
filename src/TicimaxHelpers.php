<?php

	namespace Hasokeyk\Ticimax;

	class TicimaxHelpers{

		public function check_request_params($this_class, $request_params){
			$missing_params = [];

			if(isset($this_class->product_id) and !empty($this_class->product_id) and $this_class->product_id > 0){
				return true;
			}

			foreach($request_params as $method_name){
				$new_method_name = 'get_'.$method_name;
				$old_method_name = 'set_'.$method_name;

				if(method_exists($this_class, $new_method_name)){
					if(is_null($this_class->$new_method_name())){
						$missing_params[] = $old_method_name;
					}
					else if(is_array($this_class->$new_method_name()) and $this_class->$new_method_name() == null){
						$missing_params[] = $old_method_name;
					}
					else if(empty($this_class->$new_method_name())){
						$missing_params[] = $old_method_name;
					}
				}
			}

			if(!empty($missing_params)){
				$missing_params_string = implode(', ', $missing_params);
				trigger_error("Bu parametreler zorunludur. Lütfen set ediniz : ".$missing_params_string, E_USER_WARNING);
				return false;
			}

			return true;
		}

		public function string_to_seo_title($string){
			return mb_convert_case($string, MB_CASE_TITLE, "UTF-8");
		}

		public function string_to_seo_url($string){
			return mb_convert_case($string, MB_CASE_LOWER, "UTF-8");
		}

	}