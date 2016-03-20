<?php
	/*groups*/	
	static $rs_header = "Header"; //header
	static $rs_services = "Services"; //services
	static $rs_callout = "Callout"; //contact callout
	static $rs_news = "Lasted news"; //Latest news
	static $rs_footer = "Footer"; //footer

	/*names*/
	static $rs_header_subtitle = "Subtitle";
	
	static $rs_services_title = "Services title";
	static $rs_services_area = "Services area";
	static $rs_services_one_title = "Service 1";
	static $rs_services_one_area = "Service area 1";	
	static $rs_services_two_title = "Service 2";
	static $rs_services_two_area = "Service area 2";
	static $rs_services_three_title = "Service 3";
	static $rs_services_three_area = "Service area 3";

	/*strings*/
	static $rs_header_subtitle_s = "header_subtitle";

	static $rs_services_title_s = "Services";
	static $rs_services_area_s = "Services area";
	static $rs_services_one_title_s = "Services 1";
	static $rs_services_one_area_s = "Services area 1";	
	static $rs_services_two_title_s = "Services 2";
	static $rs_services_two_area_s = "Services area 2";
	static $rs_services_three_title_s = "Services 3";
	static $rs_services_three_area_s = "Services area 3";


	/*register strings*/
	if(function_exists('pll_register_string')){
		pll_register_string($rs_header_subtitle, $rs_header_subtitle_s, $rs_header); 

		pll_register_string($rs_services_title, $rs_services_title_s, $rs_services); 
		pll_register_string($rs_services_area, $rs_services_area_s, $rs_services); 
		pll_register_string($rs_services_one_title, $rs_services_one_title_s, $rs_services); 
		pll_register_string($rs_services_one_area, $rs_services_one_area_s, $rs_services);
		pll_register_string($rs_services_two_title, $rs_services_two_title_s, $rs_services); 
		pll_register_string($rs_services_two_area, $rs_services_two_area_s, $rs_services);
		pll_register_string($rs_services_three_title, $rs_services_three_title_s, $rs_services); 
		pll_register_string($rs_services_three_area, $rs_services_three_area_s, $rs_services);
	}
?>
