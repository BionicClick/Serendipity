<?php # $Id$

/**
 *  @version $Revision$
 *  @author Kostas CoSTa Brzezinski <costa@kofeina.net>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_SPARTACUS_NAME', 'Spartacus');
@define('PLUGIN_EVENT_SPARTACUS_DESC', '[S]erendipity [P]lugin [A]ccess [R]epository [T]ool [A]nd [C]ustomization/[U]nification [S]ystem - pozwala na pobieranie wtyczek z repoztori�w sieciowych');
@define('PLUGIN_EVENT_SPARTACUS_FETCH', 'Kliknij tutaj by pobra� %s z Sieciowego Repozytorium Serendipity');
@define('PLUGIN_EVENT_SPARTACUS_FETCHERROR', 'URL %s nie m�g� by� otwarty. By� mo�e serwer Serendipity lub SourceFroge.net aktualnie nie dzia�a - w takim przypadku przepraszamy i prosimy spr�bowac ponownie p�niej.');
@define('PLUGIN_EVENT_SPARTACUS_FETCHING', 'Pr�ba otwarcia URLa %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_URL', 'Pobrano %s bajt�w z powy�szego URLa. Zapisuj� plik jako %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_CACHE', 'Pobrano %s bajt�w z ju� istniej�cego pliku na Twoim serwerze. Zapisuj� plik jako %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_DONE', 'Pobieranie danych zako�czone sukcesem.');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_XML', 'Lokalizacja pliku/mirrora (metadane XML)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_FILES', 'Lokalizacja pliku/mirrora (pliki)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_DESC', 'Wybierz lokalizacj�, z kt�rej b�d� pobierane dane. NIE zmieniaj tej warto�ci o ile dobrze nie wiesz, co robisz i o ile serwer jest dost�pny.	Opcja istnieje g��wnie dla kompatybilno�ci z przysz�ymi wersjami wtyczki.');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN', 'W�a�ciciel pobranych plik�w');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN_DESC', 'Tu mo�esz poda� w�a�ciciela (jak np. "nobody") plik�w pobieranych i zapisywanych przez Spartacusa. Pozostawienie pustego pola nie spowoduje zmian uprawnie� do plik�w.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD', 'Upraweniania pobieranych plik�w');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DESC', 'Tu mo�esz wprowadzi� �semkowe warto�ci (jak "0777") uprawnie� dost�pu do plik�w pobranych przez Spartacusa. Je�li nic nie ustawisz - przyj�ta zostanie domy�lna maska systemu. Zwr�� uwag� na to, by wprowadzone uprawnienia umo�liwia�y czytanie i zapisywanie plik�w przez u�ytkownika serwera www. W przeciwnym wypadku Spartacus/Serendipiy nie b�dzie m�g� nadpisa� istniej�cych plik�w. Uwaga, nie wszystkie serwery zezwalaj� na takie operacje.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR', 'Uprawnienia pobieranych katalog�w');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR_DESC', 'Tu mo�esz wprowadzi� �semkowe warto�ci (jak "0777") uprawnie� dost�pu do katalog�w pobranych przez Spartacusa. Je�li nic nie ustawisz - przyj�ta zostanie domy�lna maska systemu. Zwr�� uwag� na to, by wprowadzone uprawnienia umo�liwia�y czytanie i zapisywanie katalog�w przez u�ytkownika serwera www. W przeciwnym wypadku Spartacus/Serendipiy nie b�dzie m�g� nadpisa� istniej�cych katalog�w. Uwaga, nie wszystkie serwery zezwalaj� na takie operacje.');

?>
