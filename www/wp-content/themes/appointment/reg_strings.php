<?php
	/*groups*/	
	static $rs_header = "Header"; //header
	static $rs_services = "Services"; //services
	static $rs_callout = "Callout"; //contact callout
	static $rs_news = "Lasted news"; //Latest news
	static $rs_footer = "Footer"; //footer

	/*names*/
	static $rs_header_subtitle = "Subtitle";
	
	static $rs_services_title;
	static $rs_services_area;
	static $rs_services_col_title_1;
	static $rs_services_col_area_1;	
	static $rs_services_col_title_2;
	static $rs_services_col_area_2;
	static $rs_services_col_title_3;
	static $rs_services_col_area_3;

	/*strings*/
	static $rs_header_subtitle_s = "header_subtitle";



	/*register strings*/
	if(function_exists('pll_register_string')){
		pll_register_string($rs_header_subtitle, $rs_header_subtitle_s, $rs_header);
		
	}
?>
