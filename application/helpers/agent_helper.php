<?php 
	define("AGENT_IE9", 	"ie9");
	define("AGENT_IE8", 	"ie8");
	define("AGENT_IE7", 	"ie7");
	define("AGENT_WEBKIT", 	"webkit");
	define("AGENT_GECKO", 	"gecko");
	define("AGENT_PRESTO",	"presto");

	function browser_agent() {
		$agent = $_SERVER["HTTP_USER_AGENT"];
		if (strstr($agent, "MSIE 9.0"))
			return AGENT_IE9;
		else if (strstr($agent, "MSIE 8.0"))
			return AGENT_IE8;
		else if (strstr($agent, "MSIE 7.0"))
			return AGENT_IE7;
		else if (strstr($agent, "WebKit"))
			return AGENT_WEBKIT;
		else if (strstr($agent, "Gecko"))
			return AGENT_GECKO;
		else if (strstr($agent, "Presto"))
			return AGENT_PRESTO;
			
		return "";
	}
?>

