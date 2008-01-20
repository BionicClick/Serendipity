<?php # $Id: lang_cz.inc.php 1381 2007-12-19 23:55:00 VladaAjgl $

/**
 *  @version $Revision: 1381 $
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_XHTMLCLEANUP_NAME', 'Oprava nej�ast�j��ch XHTML chyb');
@define('PLUGIN_EVENT_XHTMLCLEANUP_DESC', 'Plugin opravuje nejb�n�j�� chyby XHTML jazyka. Pom�h� tak udr�et v�sledn� k�d XHTML kompatibiln� podle standard�.');
@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML', 'K�dovat zpracovan� XML data?');
@define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML_DESC', 'Tento plugin pou��v� XML parsov�n� pro zaji�t�n� validity XHTML k�du. Toto parsov�n� m��e zp�sobit, �e budou validn� entity (znaky) p�evedeny na "unsescaped" entity (XHTML k�dy). Proto plugin v�echny entity znovu k�duje po zpracov�n� textu. Vypn�te tuto volbu, pokud pozorujete dvojit� rek�dov�n�!');
@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8', '�i�t�n� UTF-8 znak�?');
@define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8_DESC', 'Pokud je zapnuto, HTML entity zp�soben� p�eveden�m znak� v k�dov�n� Unicode UTF-8 budou spr�vn� p�evedeny nazp�t na znaky UTF-8 a nebudou zak�dov�ny do podivn�ch znak� v zobrazen� str�nky.');

?>
