<?php

	namespace Hasokeyk\Ticimax;

	class TicimaxHelpers{

		public function check_request_params($this_class, $request_params){
			$missing_params = [];
			foreach($request_params as $method_name){
				$new_method_name = 'get_'.$method_name;
				if (!method_exists($this_class, $new_method_name) || empty($this_class->$new_method_name())) {
					$missing_params[] = $new_method_name;
				}
			}

			if(!empty($missing_params)){
				$missing_params_string = implode(', ', $missing_params);
				trigger_error("This information is mandatory. Please set this information.: ".$missing_params_string, E_USER_WARNING);
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