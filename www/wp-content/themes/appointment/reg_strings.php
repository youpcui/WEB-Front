<?php
	/*groups*/	
	static $rs_header = "Header"; //header
	static $rs_services = "Services"; //services
	static $rs_callout = "Callout"; //contact callout
	static $rs_news = "Lasted news"; //latest news
	static $rs_footer = "Footer"; //footer
	static $rs_button = "Content button"; //centent
	static $rs_single = "Single"; //single
	static $rs_comment = "Comment"; //comment template
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

	static $rs_callout_title = "Callout title";
	static $rs_callout_area = "Callout area";

	static $rs_news_title = "News title";
	static $rs_news_area = "News area";
	static $rs_news_by = "By";

	static $rs_button_readmore = "Read More";
	static $rs_button_sendmsg = "Send Message";

	static $rs_single_aboutauthor = "About Author";

	static $rs_comment_reply = "Reply";

	static $rs_footer_copyright = "Copyright";
	static $rs_footer_developed = "Developed";

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

	static $rs_callout_title_s = "Callout title";
	static $rs_callout_area_s = "Callout area";

	static $rs_news_title_s = "News title";
	static $rs_news_area_s = "News area";
	static $rs_news_by_s = "By";

	static $rs_button_readmore_s = "Read More";
	static $rs_button_sendmsg_s = "Send Message";
	
	static $rs_single_aboutauthor_s = "About the Author";

	static $rs_comment_reply_s = "Leave a reply";

	static $rs_footer_copyright_s = "Some Rights Reserved";
	static $rs_footer_developed_s = "Developed by";

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

		pll_register_string($rs_callout_title, $rs_callout_title_s, $rs_callout); 
		pll_register_string($rs_callout_area, $rs_callout_area_s, $rs_callout);

		pll_register_string($rs_news_title, $rs_news_title_s, $rs_news); 
		pll_register_string($rs_news_area, $rs_news_area_s, $rs_news);
		pll_register_string($rs_news_by, $rs_news_by_s, $rs_news);

		pll_register_string($rs_button_readmore, $rs_button_readmore_s, $rs_button);
		pll_register_string($rs_button_sendmsg, $rs_button_sendmsg_s, $rs_button);

		pll_register_string($rs_single_aboutauthor, $rs_single_aboutauthor_s, $rs_single);

		pll_register_string($rs_comment_reply, $rs_comment_reply_s, $rs_comment);

		pll_register_string($rs_footer_copyright, $rs_footer_copyright_s, $rs_footer);
		pll_register_string($rs_footer_developed, $rs_footer_developed_s, $rs_footer);
	}
?>
