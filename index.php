﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rogue Nerd</title>
<link rel="stylesheet" href="css/estilo.css" media="all" />
<link rel="stylesheet" href="css/reset.css" media="all"  />
<link rel="shortcut icon" href="favicon.ico" />


<!-- barra de navegação -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   $('.ancora_menu').click(function(){
      var alvo = $(this).attr('href').split('#').pop();
      $('html, body').animate({scrollTop: $('#'+alvo).offset().top }, 1000);
      return false;
   });
});
</script>
<script type="text/javascript" src="js/nav-left.js"></script>


</head>

<body>
<div class="menulateral">
	<div class="nav_left">
	<ul>
    	<li>
        	<a href="#home" class="ancora_menu">
            <img src="imgs/controle/home.png" alt="" title="" />
            </a>
        	<div class="sub_nav_left">
            	<a href="#home" class="ancora_menu">Homepage</a>
            </div><!--sub_nav_left-->
        </li>
        
        <li>
        	<a href="#detonados" class="ancora_menu">
            <img src="imgs/controle/joystick.png" alt="" title="" />
            </a>
        	<div class="sub_nav_left">
            	<a href="#detonados" class="ancora_menu">Detonados</a>
            </div><!--sub_nav_left-->
       	</li>
        
        <li>
        	<a href="#contato" class="ancora_menu">
            <img src="imgs/controle/novoenvelope1.png" alt="" title="" />
            </a>
        	<div class="sub_nav_left">
            	<a href="#contato" class="ancora_menu">Contato</a>
            </div><!--sub_nav_left-->
        </li>
    </ul>
</div><!-- nav left -->
</div><!-- menu lateral -->

<div id="home">
 <div id="topocentro">
 	<h1 id="logo">
 		<a href="#">
        <img src="imgs/home/logonovo.png" alt="Rogue Nerd" title="Rogue Nerd" width="633" height="192" />
        </a>
 	</h1><!--logo-->
    
    <nav id="menu">
    	<ul>
        	<li><a href="#home" class="ancora_menu">Home</a></li>
            <li><a href="#detonados" class="ancora_menu">Detonados</a></li>
            <li><a href="#contato" class="ancora_menu">Contato</a></li>
        </ul>
    
    </nav><!--menu-->
    
    <div id="sombra"></div><!--sombra-->
    
    
 
 </div><!--topocentral-->
</div><!--topo-->

<div id="homecontent">
	<h1 id="apresenta">- BEM VINDO AO ROGUE NERD</h1><!--apresenta -->
	<p id="paragrafohome">Confira os últimos vídeos lançados no canal:</p><!--paragrafohome-->
</div><!-- homecontent -->

<!--slider-->
    <figure>
    <span class="trs next" style="background:url(imgs/home/setarighthover.png)"></span>
    <span class="trs prev" style="background:url(imgs/home/setalefthover.png)"></span>
     
    <div id="slider">
    <a href="#" class="trs"><img src="imgs/home/bannernovo.png" alt="Rogue vs LoL" /></a>
    <a href="#" class="trs"><img src="imgs/home/agariobanner.png" alt="Guerra das Bolas" /></a>
    </div>
     
    <figcaption></figcaption>
    </figure>
<!--fimslider-->

<!-- java -->

    <script type="text/javascript">
    function setaImagem(){
    var settings = {
    primeiraImg: function(){
    elemento = document.querySelector("#slider a:first-child");
    elemento.classList.add("ativo");
    this.legenda(elemento);
    },
     
    slide: function(){
    elemento = document.querySelector(".ativo");
     
    if(elemento.nextElementSibling){
    elemento.nextElementSibling.classList.add("ativo");
    settings.legenda(elemento.nextElementSibling);
    elemento.classList.remove("ativo");
    }else{
    elemento.classList.remove("ativo");
    settings.primeiraImg();
    }
     
    },
     
    proximo: function(){
    clearInterval(intervalo);
    elemento = document.querySelector(".ativo");
     
    if(elemento.nextElementSibling){
    elemento.nextElementSibling.classList.add("ativo");
    settings.legenda(elemento.nextElementSibling);
    elemento.classList.remove("ativo");
    }else{
    elemento.classList.remove("ativo");
    settings.primeiraImg();
    }
    intervalo = setInterval(settings.slide,4000);
    },
     
    anterior: function(){
    clearInterval(intervalo);
    elemento = document.querySelector(".ativo");
     
    if(elemento.previousElementSibling){
    elemento.previousElementSibling.classList.add("ativo");
    settings.legenda(elemento.previousElementSibling);
    elemento.classList.remove("ativo");
    }else{
    elemento.classList.remove("ativo");	
    elemento = document.querySelector("a:last-child");
    elemento.classList.add("ativo");
    this.legenda(elemento);
    }
    intervalo = setInterval(settings.slide,4000);
    },
     
    legenda: function(obj){
    var legenda = obj.querySelector("img").getAttribute("alt");
    document.querySelector("figcaption").innerHTML = legenda;
    }
     
    }
     
    //chama o slide
    settings.primeiraImg();
     
    //chama a legenda
    settings.legenda(elemento);
     
    //chama o slide à um determinado tempo
    var intervalo = setInterval(settings.slide,4000);
    document.querySelector(".next").addEventListener("click",settings.proximo,false);
    document.querySelector(".prev").addEventListener("click",settings.anterior,false);
    }
     
    window.addEventListener("load",setaImagem,false);
    </script>
<!-- java -->

<div id="detonados">
	<div id="detonadoscentro">
    	<h1>- CONFIRA A ALA DE DETONADOS DO ROGUE NERD</h1>
        <h2 id="detonadolink"><a href="#"><img src="imgs/detonados/detonado.png" alt="Detonados" title="Detonados" width="607" height="333" /></a></h2>
        
        <div id="lista1">
        	<ul>
            	<a href="#"><li>- Jogo 1</li></a>
                <a href="#"><li>- Jogo 2</li></a>
                <a href="#"><li>- Jogo 3</li></a>
                <a href="#"><li>- Jogo 4</li></a>
           </ul>
        
        </div><!--lista1 -->
        
        <div id="lista2">
        	<ul>
            	<a href="#"><li>- Jogo 5</li></a>
                <a href="#"><li>- Jogo 6</li></a>
                <a href="#"><li>- Jogo 7</li></a>
                <a href="#"><li>- Jogo 8</li></a>
           </ul>
        
        </div><!--lista2 -->
        
        <div id="lista3">
        	<ul>
            	<a href="#"><li>- Jogo 9</li></a>
                <a href="#"><li>- Jogo 10</li></a>
                <a href="#"><li>- Jogo 11</li></a>
                <a href="#"><li>- Jogo 12</li></a>
           </ul>
        
        </div><!--lista3 -->
        
    </div><!--centro-->
</div><!--detonados-->

<div id="contato">
	<div id="contatocentraliza">
    	<h1>- FALE COM O ROGUE NERD</h1>
        <p>Sugestões de novos jogos? novas ideias? novos quadros?</p>
        <h2>Fale diretamente para o Rogue Nerd!</h2>
        
        <form action="" method="post" id="formrogue" enctype="multipart/form-data">
        	<div id="row_left">
            	<label>Nome:</label>
        		<input type="text" class="input_contato" name="nome" required="required" />
            
            	<label>E-mail:</label>
            	<input type="email" class="input_contato" name="email" required="required" />
            	
           	 	<label>Assunto:</label>
        		<input type="text" class="input_contato" name="assunto" required="required" />
            
            	<label>Mensagem:</label>
            	<textarea name="mensagem" required="required"></textarea>
            <br />
            	<input type="submit" value="Enviar Mensagem" name="enviar" class="btn_contato" />
            	<input type="reset" value="Limpar Mensagem" name="limpar" class="btn_contato" />
            </div><!--rowleft-->
        </form>
        
        <div id="row_right"></div><!--rowright-->
        <div id="up"></div>
    </div><!--contatocentraliza-->
</div><!--contato-->


<div id="rodape">
	<div id="rodapecentro">
		<div id="mario"></div>
        <div id="facebook"><a href="https://www.facebook.com/roguenerdbr"></a></div>
        <div id="facebooklink"><a href="https://www.facebook.com/roguenerdbr"><p>Facebook.com/roguenerdbr</p></a></div>
        <div id="youtube"><a href="https://www.youtube.com/roguenerdbr"></a></div>
        <div id="youtubelink"><a href="https://www.youtube.com/channel/UCfr80ZY_Ks0I5AJig5bbITA"><p>Youtube.com/RogueNerd</p></a></div>
        <div id="creditos"><p>Powered By: Elton S. Silva - ©2015</p></div>
        <div id="crash"></div>
    </div><!--rodapecentro-->    
</div><!--rodape-->


<!-- php -->

<!-- <?php 
if(isset($_POST['enviar'])) {
				
			
			$nome 		= utf8_decode($_POST['nome']);
			$email 		= utf8_decode($_POST['email']);
			$assunto 	= utf8_decode($_POST['assunto']);
			$mensagem 	= utf8_decode($_POST['mensagem']);
			$assuntoemail = 'Mensagem enviada pelo site Rogue Nerd';
			
			$subject = '=?UTF-8?b?'.base64_encode($assuntoemail).'?=';
			$headers = "From: $email\r\n";
			$headers .= "Reply-To: $email\r\n";
			$headers .= "Content-type:text/html; charset=iso-8859-1";
			
			/*Dados enviados para o email cadastrado para receber o formulário*/
			
			$corpo = '<b>Mensagem Enviada:</b><br>';
			$corpo .= '<b>Nome: </b>' .	$nome . '<br>';
			$corpo .= '<b>Email do Remetente:</b>' . $email . '<br>';
			$corpo .= '<b>Assunto: </b>' .	$assunto . '<br>';
			$corpo .= '<b>Mensagem: </b><br>' .	$mensagem . '<br>';
			
			$email_to = 'elton.tell@hotmail.com'; //seu email aqui.
		
			$status = mail($email_to, $subject, $corpo, $headers);	//envia email	
			
			if($status) {
				echo"<script> alert('Mensagem enviada com sucesso.'); </script>"; //verifica se enviou com sucesso
			}
			else {
				echo "<script> alert('Falha ao enviar a mensagem. Tente novamente mais tarde.') </script>"; //em caso de falha
			}
			echo "<script> window.location.href = 'index.php'; </script>"; //endereço do seu site
			}
?>
-->
</body>
</html>
