<?php
        function clrString($s){
		$separator = array('_','-',' ');
		return str_replace($separator,"", $s);
	}


	$nvgLanguage = 'en';
	$nvgTexts= array();
	
	if(strnatcasecmp(clrString(get_bloginfo('language')),'ptBR') == 0 || strnatcasecmp(clrString(get_bloginfo('language')),'br') == 0 )
        	$nvgLanguage = 'br';
	
       switch ($nvgLanguage){

	    case 'br':
		require_once('textsPT_BR.php');
	    break; 
 		
	    default:	
		require_once('textsEN.php');
	    break;
		
	}//endSwitch

	function getTextNvg($term){
		//Para pegar identificar array não local da função
		global $nvgTexts;

		if(array_key_exists($term, $nvgTexts))
		    return $nvgTexts[$term];
		else
		    return '!'.$term;		
	}
?>
