<?php # $Id: lang_cs.inc.php 1381 2007-11-23 15:30:00Z VladaAjgl $

/**
 *  @version $Revision: 1381 $
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  Translated on 2007/11/23
 */

@define('PLUGIN_EVENT_SPARTACUS_NAME',                  'Spartacus');
@define('PLUGIN_EVENT_SPARTACUS_DESC',                  '[S]erendipity [P]lugin [A]ccess [R]epository [T]ool [A]nd [C]ustomization/[U]nification [S]ystem - Umo��uje st�hnout a instalovat roz�i�uj�c� moduly (pluginy) z internetu');
@define('PLUGIN_EVENT_SPARTACUS_FETCH',                 'Klikn�te zde pro st�hnut� nov�ch %s z internetov� online datab�ze - Serendipity Online Repository');
@define('PLUGIN_EVENT_SPARTACUS_FETCHERROR',            'URL %s nelze otev��t. Server Serendipity nebo SourceForge.net mo�n� neb�� - omlouv�me se, zkuste to pozd�ji.');
@define('PLUGIN_EVENT_SPARTACUS_FETCHING',              'Pokus o otev�en� URL %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_URL',     'P�ijato %s byt� z v��e uveden� URL. Ukl�d�n� souboru jako %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_CACHE',   'P�ijato %s byt� z ji� existuj�c�ho souboru na Va�em serveru. Ukl�d�n� souboru jako %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_DONE',          'Data �sp�n� sta�ena.');
@define('PLUGIN_EVENT_SPARTACUS_REPOSITORY_ERROR',      '<br />(On-line �lo�i�t� vr�tilo chybu %s.)<br />');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHCHECK',           '<p>Nebylo mo�no z�skat data z on-line �lo�i�t� modulu Spartacus. Zkou�ka dostupnosti �lo�i�t� na adrese %s.</p>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHERROR',           '<p>Diagnstick� str�nka modulu Spartacus vr�tilo chybu (HTTP k�d %s). To m��e znamenat, �e je dignostick� str�nka mimo provoz. Zkuste to pros�m pozd�ji.</p>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHLINK',            '<p><a target="_blank" href="%s">Klikn�te zde pro zobrazen� diagnstick� str�nky modulu Spartacus</a> a zjist�te, zda odpov�d�.</p>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHBLOCKED',         '<p>SPARTACUS se ne�sp�n� pokusil p�ipojit ke Googlu (chyba %d: %s).<br />V� server blokuje odchoz� spojen�. SPARTACUS nebude fungovat, proto�e nem��e kontaktovat on-line �lo�i�t�. <b>Spojte se s poskytovatelem Va�eho serveru a vy��dejte si u n�j povolen� odchoz�ch spojen�.</b></p><p>Roz�i�uj�c� moduly mohou b�t p�esto st�le instalov�ny z va�ich adres��� na serveru. Jednodu�e st�hn�te modul z n�sleduj�c� adresy <a href="http://spartacus.s9y.org">Webov� �lo�i�t� modlu Spartacus</a>, rozbalte ho do adres��e "/plugins/"</p>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHDOWN',            '<p>Modulu SPARTACUS se poda�ilo spojit s Googlem, ale nem��e se spojit s on-line �lo�i�t�m modulu SPARTACUS. Je mo�n�, �e V� server blokuje n�kter� odchoz� spojen�, nebo je on-line �lo�i�t� mimo provoz. Spojte se se sv�m poskytovatelem webov�ho serveru, abyste se ujistili, �e nem�te blokov�na odchoz� spojen�. <b>SPARTACUS nebude fungovat, proto�e nem��e kontaktovat on-line �lo�i�t�.</b></p>');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_XML',            'Um�st�n� soubor�/(mirror server) (XML metadata)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_FILES',          'Um�st�n� soubor�/(mirror server)  (soubory)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_DESC',           'Vyberte, odkud stahovat. NEM��TE tuto hodnotu, pokud opravdu dob�e nev�te, co d�l�te a jestli server orpavdu funguje. Tato volba je p��stupn� pro teprve pl�novan� funkce.');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN',                 'Vlastn�k stahovan�ch soubor�');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN_DESC',            'Zde m��ete zadat (FTP/Shell) vlastn�ka soubor� (jako nap�. "nobody") sta�en�ch pomoc� Spartacus pluginu. Pokud je nevypln�n�, nejsou prov�d�ny ��dn� zm�ny vlastn�ka.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD',                 'P��stupov� pr�va sta�en�ch soubor�.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DESC',            'Zde m��ete zadat hodnotu p��stupov�ch pr�v v osmi�kov� soustav� (jako "0777") pro soubory (FTP/Shell) sta�en� pomoc� pluginy Spartacus. Pokud je pole ponech�no pr�zdn�, bude pou�ito standardn� syst�mov� nastaven�. Pamatujte, �e ne v�echny webov� servery umo��uj� zm�nu pr�v. Nap�. servery ��c� v safe_mode m�du. M�jte na pam�ti, �e pr�va mus� umo�nit webov�mu u�ivateli, pod kter�m b�� PHP, pr�va �ten� a z�pisu souboru. Jinak nebude modul Spartacus schopen p�epsat star� soubory.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR',             'P��stupov� pr�va sta�en�ch adres���');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR_DESC',        'Zde m��ete zadat hodnotu p��stupov�ch pr�v v osmi�kov� soustav� (jako "0777") pro adres��e (FTP/Shell) sta�en� pomoc� pluginy Spartacus. Pokud je pole ponech�no pr�zdn�, bude pou�ito standardn� syst�mov� nastaven�. Pamatujte, �e ne v�echny webov� servery umo��uj� zm�nu pr�v. Nap�. servery ��c� v safe_mode m�du. M�jte na pam�ti, �e pr�va mus� umo�nit webov�mu u�ivateli, pod kter�m b�� PHP, pr�va �ten� a z�pisu souboru. Jinak nebude modul Spartacus schopen vytvo�it nov� adres��e.');

@define('PLUGIN_EVENT_SPARTACUS_CHECK_SIDEBAR',         'Vyhledat nov� pluginy pro postrann� sloupec.');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_EVENT',           'Vyhledat nov� pluginy ud�lost�.');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_HINT',            'Rada: M��ete upgradovat v�ce roz�i�uj�c�ch modul� najednou na odkaz "upgrade" prost�edn�m tla��tkem my�i. Upgrade se otev�e v nov�m okn�/nov� z�lo�ce. Pamatujte, �e automatick� aktualizace v�ech roz�i�uj�c�ch modul� je �asov� n�ro�n� operace a m��e v�st k p�ekro�en� nastaven�ch �asov�ch limit� na serveru a z toho d�vodu k ne�pln� sta�en�m soubor�m. Proto tato funk�nost nen� z�m�rn� snadno p��stupn�.');

@define('PLUGIN_EVENT_SPARTACUS_TRYCURL',               'Pokus o pou�it� knihovny cURL jako z�lo�n�ho �e�en�...');
@define('PLUGIN_EVENT_SPARTACUS_CURLFAIL',              'Knihovna cURL taky nefunguje :-/ ...');
@define('PLUGIN_EVENT_SPARTACUS_HEALTFIREWALLED',       'Nebylo mo�n� st�hnout soubory z on-line �lo�i�t� modulu SPARTACUS, nicm�n� se povedlo spojit se s �lo�i�t�m. To znamen�, �e V� poskytovatel nejsp�e pou��v� obsahov� filtr a neumo��uje st�hovat p�es web *.php soubory. Bu� mus�te Va�eho poskytovatele po��dat o vypnut� p��su�n�ch omezen� (jako mod_security nebo jin� "reverse proxy"), nebo stahujte pluginy ru�n�.');

@define('PLUGIN_EVENT_SPARTACUS_ENABLE_PLUGINS',        'Povolit stahov�n� roz�i�uj�c�ch modul� pomoc� modulu SPARTACUS?');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_THEMES',         'Povolit stahov�n� �ablon pomoc� modulu SPARTACUS?');

@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_CONNECT',     'Chyba FTP: Nepoda�ilo se p�ipojit k FTP.');
@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_MKDIR',       'Chyba FTP: Adres�� (%s) nelze vytvo�it');
@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_CHMOD',       'Chyba FTP: Nelze nastavit pr�va u adres��e (%s).');
@define('PLUGIN_EVENT_SPARTACUS_FTP_SUCCESS',           'FTP: Adres�� (%s) byl �sp�n� vytvo�en.');

@define('PLUGIN_EVENT_SPARTACUS_FTP_USE',               'Pou��t vytv��en� adres��� p�es FTP?');
@define('PLUGIN_EVENT_SPARTACUS_FTP_USE_DESC',          'Pokud V�m b�� PHP v "safe_mode", mus�te se pod��dit jist�m omezen�m. Tato omezen� maj� zjednodue�en� �e�eno za v�sledek, �e pokud vytvo��te adres�� obvyklou cestou, nelze do n�j zapisovat. Ale pokud vytv���te adres�� pomoc� FTP ��tu, pak toto omezen� neplat�. Pokud m�te zapnut� safe_mode, je vytv��en� adres��� p�es FTP prakticky jedinou cestou, jak m�t mo�nost �sp�n� pou��vat SPARTACUS a upload soubor�.');
@define('PLUGIN_EVENT_SPARTACUS_FTP_SERVER',            'Adresa FTP serveru');
@define('PLUGIN_EVENT_SPARTACUS_FTP_USERNAME',          'U�ivatelsk� jm�no k FTP');
@define('PLUGIN_EVENT_SPARTACUS_FTP_PASS',              'Heslo k FTP');
@define('PLUGIN_EVENT_SPARTACUS_FTP_BASEDIR',           'FTP cesta k adres��i Serendipity');
@define('PLUGIN_EVENT_SPARTACUS_FTP_BASEDIR_DESC',      'Pokud se k serveru p�ipojujete p�es FTP, nemus�te se nutn� p�ipojit do adres��e Serendipity. Zde tedy mus�te specifikovat cestu k adres��i Srendipity od adres��e, do kter�ho se FTP p�ihla�uje.');
