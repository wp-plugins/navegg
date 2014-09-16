<?php
    function clrString($s){
		$separator = array('_','-',' ');
		return str_replace($separator,"", $s);
	}


	//$nvgLanguage = 'en';
	$nvgTexts= array();
	if($_COOKIE["idioma_nvg"])
		$_SESSION["idioma_nvg"] = $_COOKIE["idioma_nvg"];
	else if(!$_SESSION["idioma_nvg"] ){
		
		if(strnatcasecmp(clrString(get_bloginfo('language')),'ptBR') == 0 || strnatcasecmp(clrString(get_bloginfo('language')),'br') == 0 ){
			$_SESSION["idioma_nvg"] = 'br';
		}
		else if(strnatcasecmp(clrString(get_bloginfo('language')),'esES') == 0){
			$_SESSION["idioma_nvg"] = 'es';
		}
		else{
			$_SESSION["idioma_nvg"] = 'en';
		}
	}
	
	//if(isset($_SESSION["idioma_nvg"])){
	if(($_SESSION["idioma_nvg"]) == 'br'){
		require_once('textsPT_BR.php');
	}
	else if(($_SESSION["idioma_nvg"]) == 'es'){
		require_once('textsES.php');
	}
	else{
		require_once('textsEN.php');
	}
	
	//else{		require_once('textsEN.php');	}
	
		function getTextNvg($term){
			//Para pegar identificar array não local da função
			global $nvgTexts;
	
			if(array_key_exists($term, $nvgTexts))
			    return $nvgTexts[$term];
			else
			    return '!'.$term;		
		}
	
	
	
/*
	 
  switch ($nvgLanguage){
	
		    case 'br':
			require_once('textsPT_BR.php');
		    break; 
			
			case 'es':
			require_once('textsES.php');
		    break; 
	 		
		    default:	
			require_once('textsEN.php');
		    break;
	 }//endSwitch
*/
?>


