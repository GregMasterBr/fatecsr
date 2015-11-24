function disableselect(e){
return false
}
function reEnable()
{return true
}
//if IE4+
document.onselectstart=new Function ("return false")
//if NS6
if
(window.sidebar){
document.onmousedown=disableselect
document.onclick=reEnable
}

function keypresed(){document.onkeydown=keypresed;document.onmousedown=click;}
/*
//Bloqueador de Tecla CTRL 

function checartecla (evt)
{if (evt.keyCode == &#39;17&#39;)
{alert(&quot;ATENÇÃO: Plágio é crime! Não copie e publique o que não é seu como se fosse.&quot;)
return false}
return true}


//Bloqueador de Selecao de texto e imagem-->
<script language='JavaScript'>
function bloquear(e){return false}
function desbloquear(){return true}
document.onselectstart=new Function (&quot;return false&quot;)
if (window.sidebar){document.onmousedown=bloquear
document.onclick=desbloquear}


//Bloqueador de Botão Direito -->
function clique() {if (event.button==2||event.button==3) {oncontextmenu=&#39;return false&#39;;}}
document.onmousedown=clique
document.oncontextmenu = new Function(&quot;return false;&quot;)
*/