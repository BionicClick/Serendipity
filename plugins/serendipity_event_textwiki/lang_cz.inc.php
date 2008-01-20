<?php # $Id: lang_cz.inc.php 1381 2007-12-14 23:30:00 VladaAjgl $

/**
 *  @version $Revision: 1381 $
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_TEXTWIKI_NAME',                           'Markup: Wiki');
@define('PLUGIN_EVENT_TEXTWIKI_DESC',                           'P�ev�d� zna�ky Text_Wiki do HTML');
@define('PLUGIN_EVENT_TEXTWIKI_TRANSFORM',                      'Pou�it� zna�ek <a href="http://c2.com/cgi/wiki">Wiki</a> je povoleno');

@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_PREFILETER',           'P�ev�d� r�zn� zp�soby ukon�en� ��dky (Unix/DOS) na jednotn� form�t a p�id�v� na konec ��dky znak "\"" Standardn� zapnuto. Nedoporu�uje se vyp�nat.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_DELIMITER',            'P�ev�d� vnit�n� odd�lova� Text_Wiki "\xFF" (255), aby p�ede�lo konflikt�m p�i p�ev�d�n� textu. Standardn� zapnuto. Nedoporu�uje se vyp�nat.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_CODE',                 'Ozna�uje text mezi <code> a </code> jako k�d programovac�ho jazyku. Pou�it�m <code type=".."> m��ete zapnout zv�raz�ov�n� k�du (nap�. PHP). Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_PHPCODE',              'Text uzav�en� mezi tagy <php> a </php> ozna�uje a zv�raz�uje jako PHP k�d a p�id�v� zahajuj�c� PHP tagy. Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_HTML',                 'Dovoluje pou��t pln� HTML k�d mezi tagy <html> a </html>. Pozor, jako tento k�d je mo�n� vlo�it i JavaScript! Pokud pou��v�te tuto volbu, vypn�te zna�kov�n� koment���. Standardn� vypnuto. Nedoporu�uje se zap�nat.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_RAW',                  'Text mezi `` a `` nebude p�ev�d�n podle ��dn�ho z pravidel. Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_INCLUDE',              'Dovoluje vlo�it PHP skript pomoc� syntaxe [[include /cesta/ke/skriptum/script.php]]. V�stup skriptu je zpracov�n pomoc� zna�kovac�ch pravidel. Pozor, povolen� t�to volby p�edstavuje bezpe�nostn� riziko! Pokud pou��v�te tuto volbu, vypn�te zna�kov�n� koment���! Standardn� vypnuto. Nedoporu�uje se zap�nat.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_INCLUDE_DESC_BASE',         'Z�kladn� adres�� Va�ich skript�. Standardn� nastaveno na  "/cesta/ke/skriptum/". Pokud toto pol��ko ponech�te pr�zdn�, mus�te pou��vat absolutn� cesty.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_HEADING',              '��dky za��naj�c� znakem "+" jsou p�evedeny na nadpisy (+ = <h1>, ++++++ = <h6>). Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_HORIZ',                '---- je p�evedeno na vodorovnou ��ru (<hr>). Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_BREAK',                'Znak "_" na konci ��dku znamen� vynucen� od��dkov�n�. Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_BLOCKQUOTE',           'Umo��uje pou�it� emailov� citace ("> ", ">> ",...). Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_LIST',                 'Umo��uje pou��vat seznamy ("* " = odr�kovan�, "# " = ��slovan�). Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_DEFLIST',              'Umo��uje vytv��et seznamy definic. Syntaxe: ": Term�n : Definice". Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_TABLE',                'Dovoluje vytv��et tabulky. Pouze pro �pln� ��dky. Syntaxe: "|| Pol��ko 1 || Pol��ko 2 || Pol��ko 3 ||". Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_EMBED',                'Dovoluje vlo�it PHP k�d pomoc� syntaxe [[embed /cesta/ke/skriptum/script.php]]. V�stup skriptu nen� zpracov�n pomoc� zna�kovac�ch pravidel. Pozor, povolen� t�to volby p�edstavuje bezpe�nostn� riziko! Pokud pou��v�te tuto volbu, vypn�te zna�kov�n� koment���! Standardn� vypnuto. Nedoporu�uje se zap�nat.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_EMBED_DESC_BASE',           'Z�kladn� adres�� Va�ich skript�. Standardn� nastaveno na  "/cesta/ke/skriptum/". Pokud toto pol��ko ponech�te pr�zdn�, mus�te pou��vat absolutn� cesty.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_IMAGE',                'Umo��uje vkl�dat obr�zky. ([[image  /cesta/k/obrazkum/obrazek.pripona [HTML atributy] ]] nebo [[image  /cesta/k/obrazku/obrazek.pripona  [link="NazevStranky"] [HTML atributy] ]] pro vkl�d�n� obr�zk� s odkazy). Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_IMAGE_DESC_BASE',           'Z�kladn� adres�� Va�ich obr�zk�. Standardn� nastaveno na  "/cesta/k/obrazkum/". Pokud toto pol��ko ponech�te pr�zdn�, mus�te pou��vat absolutn� cesty.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_PHPLOOKUP',            'Vytv��� odkazy na funkci do manu�lu PHP pomoc� [[php jmeno-funkce]]. Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_TOC',                  'Vytv��� obsah z nadpis� pomoc�  [[toc]] (Table Of Contents). Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_NEWLINE',              'P�ev�d� znaky od��dkov�n� na zalomen� ��dku (<br />). Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_CENTER',               '��dky za��naj�c� "= " jsou vyst�ed�ny. Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_PARAGRAPH',            'Dv� nov� ��dky jsou p�evedeny na nov� odstavec (<p></p>). Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_URL',                  'P�ev�d� http://priklad.cz na odkaz, [http://priklad.cz] na pozn�mky pod �arou a [http://priklad.cz P��klad] na odkaz s popisem. Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_URL_DESC_TARGET',           'Definuje c�l pro odkazy. Standardn� nastaveno na "_blank".');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_FREELINK',             'Dovoluje pou�it� nestandardn�ch wiki odkaz� pomoc� "((Nestandardn� wiki link))" and "((Nestandardn� wiki link|Popis))". Standardn� vypnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_FREELINK_DESC_PAGES',       'Freelink = voln� odkaz mus� zn�t, kter� str�nky existuj� a kter� maj� b�t ozna�eny jako "nov�". Tato volba ur�ije soubor (m�stn� nebo vzd�len�) kter� obsahuje na ka�d� ��dce jedno jm�no souboru. Pokud se jedn� o vzd�len� soubor, bude po jistou dobu cachov�n.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_FREELINK_DESC_VIEWURL',     'Tato URL adresa je ur�ena pro prohl�en� freelink�. V adrese mus�te zadat �et�zec "%s" na m�st�, kde bude nahrazen jm�nem odkazu (freelinku).');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_FREELINK_DESC_NEWURL',      'Tato URL adresa ur�uje str�nku, kter� je zodpov�dn� za vytv��en� nov�ch freelink�. V adrese mus�te zadat �et�zec "%s" na m�st�, kde bude nahrazen jm�nem odkazu (freelinku).');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_FREELINK_DESC_NEWTEXT',     'Tento text bude p�id�n k nezn�m�m freelink�m (voln�m odkaz�m) jako odkaz k vytvo�en� nov� str�nky. Standardn� nastaveno na "?".');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_FREELINK_DESC_CACHETIME',   'Pokud zad�te vzd�lenou URL adresu pro zobrazov�n� Va�ich freelink�, bude tento soubor cachov�n po dobu, definovanou v sekund�ch zde. Standardn� nastavena 1 hodina = 3600 sekund.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_INTERWIKI',            'Umo��uje pou��v�n� odkaz� do wikip�di� MeatBall, Advogato a Wiki pou�it�m form�tu JmenoWiki:JmenoStranky nebo [JmenoWiki:JmenoStranky Popisek]. Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_INTERWIKI_DESC_TARGET',     '');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_WIKILINK',             'Umo��uje pou��v�n� standardn�ch WikiWords (WikiSlova = slova se dv�ma velk�mi p�smeny) jako wiki odkaz�. Standardn� vypnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_WIKILINK_DESC_PAGES',       'WikiLink = voln� odkaz mus� zn�t, kter� str�nky existuj� a kter� maj� b�t ozna�eny jako "nov�". Tato volba ur�ije soubor (m�stn� nebo vzd�len�) kter� obsahuje na ka�d� ��dce jedno jm�no souboru. Pokud se jedn� o vzd�len� soubor, bude po jistou dobu cachov�n.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_WIKILINK_DESC_VIEWURL',     'Tato URL adresa je ur�ena pro prohl�en� WikiLink�. V adrese mus�te zadat �et�zec "%s" na m�st�, kde bude nahrazen jm�nem odkazu (WikiLinku).');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_WIKILINK_DESC_NEWURL',      'Tato URL adresa ur�uje str�nku, kter� je zodpov�dn� za vytv��en� nov�ch WikiLink�. V adrese mus�te zadat �et�zec "%s" na m�st�, kde bude nahrazen jm�nem odkazu (WikiLinku).');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_WIKILINK_DESC_NEWTEXT',     'Tento text bude p�id�n k nezn�m�m WikiLink�m jako odkaz k vytvo�en� nov� str�nky. Standardn� nastaveno na "?".');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_WIKILINK_DESC_CACHETIME',   'Pokud zad�te vzd�lenou URL adresu pro zobrazov�n� Va�ich WikiLink�, bude tento soubor cachov�n po dobu, definovanou v sekund�ch zde. Standardn� nastavena 1 hodina = 3600 sekund.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_COLORTEXT',            'Obarvovat text pomoc� ##barva|text##. Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_STRONG',               '**Text** je ozna�en jako siln�. Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_BOLD',                 '\'\'\'Text\'\'\' je zobrazen tu�n�. Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_EMPHASIS',             '//Text// je zobrazen jako zd�razn�n�. Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_ITALIC',               '\'\'Text\'\' je zobrazen kurz�vou. Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_TT',                   '{{Text}} je zobrazen fontem s pevnou ���kou znaku (monotype). Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_SUPERSCRIPT',          '^^Text^^ je zobrazen jako horn� index. Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_REVISE',               'Umo��uje zna�kov�n� textu jako revize. Pou�it�: "@@---smazat tento text+++vlo�it m�sto n�j tento text@@". Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_TIGHTEN',              'Vyhled�v� v�ce ne� t�i od��dkov�n� za sebou a p�ev�d� je na dv� nov� ��dky (odstavec). Standardn� zapnuto.');
@define('PLUGIN_EVENT_TEXTWIKI_RULE_DESC_ENTITIES',             'P�ev�d� HTML entity na bezpe�n� sekvence znak�. Standardn� zapnuto.');

?>
