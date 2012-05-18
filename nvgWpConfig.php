<?php

require_once('lang/texts.php');

/**
 * Classe responsável por controlar o plugin
 */
class NvgWp{

//private static $wpdb;
private static $info;

/**
 * Função de inicialização
 */
function inicializar(){
  //Mapear objeto para manipular o banco 
  // global $wpdb;
  // NvgWp::$wpdb = $wpdb;
  /** Com $wpdb você manipula o banco de dados agora ele esta referenciado em uma variavel estática da classe.
   * Para utiliza-la agora não precisa declarar global $wpdb em todas funções, basta usar a estica da classe. 
   * Ex.: NvgWp::$wpdb->
   * Esta variavel não está sendo usado no momento, pois na v1.0 o id é amazenado na tablea options padrão do Wp. Para futuras versões basta descomentar a linhas que possuem $wpdb
   */

  //Mapear infos relevantes para plugin
  NvgWp::$info['plugin_fpath']= dirname(__FILE__);


  //Chama a função para imprimir a tag no head
  add_action( 'wp_head', array('nvgWp','echoNavegg'));

  //Chama a função para criar página de administração
  add_action( 'admin_menu', array('nvgWp','createAdmNvg'));

  //Colocar Mensagem de erro se não estiver cadastrado ID_NAVEGG
  if(NvgWp::getIdNvg() == '' && !isset($_POST['idNvg']))//Verifica se não é post! E imprimie
     add_action( 'admin_notices', array('nvgWp','echoMsgNotId' ));
  else if (NvgWp::getIdNvg() == '' &&  isset($_POST['idNvg']) && !NvgWp::idIsNum($_POST['idNvg']) )  
     add_action( 'admin_notices', array('nvgWp','echoMsgNotId' ));
}

/**
 * Função de instalação
 */
function instalar(){
    //Verifica se esta inicializado se não estiver, inicializa;
    if ( is_null(NvgWp::$info) ) NvgWp::inicializar();
    
    //Criar dados do banco
    NvgWp::createIdNvg();
}

/**
 * Função de desinstalação
 */
function desinstalar(){
  //Deleta dados do banco
   NvgWp::deleteIdNvg();
  
}



//Páginas


/**
 * Cria página de adm
 */
function createAdmNvg(){

 add_menu_page('Navegg - Optimeze. Results.','Navegg',10,'nvg-admin',array('NvgWp','admInit'),plugins_url( '/contents/favicon.ico', __FILE__ ));

 /* Exmplo com submenu para outra funcionalidade...
  add_submenu_page('nvg-admin','Navegg - Optimeze. Results. - Painel ','Painel','manage_options','nvg-adm-rel',array('NvgWp','admInit'));*/

}

/**
 * Faz o include da pagina inicial do administrador, que é chamado quando
 * o usuário clica no menu NAVEGG
 */
function admInit(){ 
  if( isset( $_POST['idNvg']) ){

	if(NvgWp::idIsNum($_POST['idNvg'])){            
	
	   if(! NvgWp::idIsDiference($_POST['idNvg'])){
	        $msgPost['class'] = 'updtFail';    
  	 	$msgPost['msg'] = getTextNvg('nvgMsgAdmIdAlt_4');
	   }
	   else	   try{
		  	$uptStatus =NvgWp::setIdNvg(str_replace(" ","",$_POST['idNvg']));           
		
		   	 if($uptStatus){           
		   	 	$msgPost['class'] = 'updtSucess';
			  	$msgPost['msg'] = getTextNvg('nvgMsgAdmIdAlt_1');
		  	 }else
			   throw new Exception($uptStatus);

		   }catch (Exception $e) {
			 $msgPost['class'] = 'updtFail';    
		  	 $msgPost['msg'] = getTextNvg('nvgMsgAdmIdAlt_3');
		   }

        }else{
           $msgPost['class'] = 'updtFail';    
	   $msgPost['msg'] = getTextNvg('nvgMsgAdmIdAlt_2');
	}

       
  }

  require_once('contents/cssInit.php');
  require_once('nvgWpInit.php');

}

/**
 * Verifica se o ID digitado é um número e retirando os espaços em branco
 **/
function idIsNum($id){
   if(is_numeric( str_replace(" ","",$id)))
   	return true;
   else
   	return false;
}
/**
 * Verifica se o ID que esta tentando salvar é diferente do que esta salvo
 **/
function idIsDiference($id){
   if($_POST['idNvg'] == NvgWp::getIdNvg())
      return false;
   else
      return true;
}


/**
 * Exemplo de como ficaria com submenu para outra funcionalidade
 *
 */
/*
function admPainel(){
 echo 'Implementar um painel navegg para Wp';
}
*/





//Manipular dados


/**
 * Cria ID Navegg
 */
function createIdNvg(){
 //Cria na table Options do wordpress o campo ID_NAVEGG com valor vazio caso nao tenha ainda
  if(NvgWp::getIdNvg() == '')
     add_option('ID_NAVEGG');
}

/**
 * Deleta ID Navegg
 */
function deleteIdNvg(){
     delete_option('ID_NAVEGG');
}

/** 
 * Pega ID Navegg
 */
function getIdNvg(){
   return get_option('ID_NAVEGG'); 
}

/**
 * Atualiza ID Naveg
*/
function setIdNvg($id){
   if(update_option('ID_NAVEGG',$id))
      return true;
   else
      return false;
}




//Impressões



/**
 * Imprime Tag Js Navegg
 */
function echoNavegg() { 
    
   if(NvgWp::getIdNvg() != '')
        echo '<script id="navegg" type="text/javascript" src="http://navdmp.com/lt.js?'.NvgWp::getIdNvg().'"></script>'."\n";

}

/**
 * Aviso que o site ainda não está sendo analisado, pois falta cadastrar o ID
 */
function echoMsgNotId(){	
    echo '<div id="nvgMsgAdmNotId" class="updated fade">
           <p>'.getTextNvg('nvgMsgAdmNotId_1').' <a href="admin.php?page=nvg-admin">'.getTextNvg('nvgMsgAdmNotId_2').'</a> '.getTextNvg('nvgMsgAdmNotId_3').'</p>
          </div>';

//	echo 'teste';	  
}



//EndClass
}

?>
