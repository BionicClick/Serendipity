<?php # $Id$

@define('PLUGIN_EVENT_SPARTACUS_NAME', 'Spartacus');
@define('PLUGIN_EVENT_SPARTACUS_DESC', '[S]erendipity [P]lugin [A]ccess [R]epository [T]ool [A]nd [C]ustomization/[U]nification [S]ystem - Installiert Plugins direkt aus dem Netz.');
@define('PLUGIN_EVENT_SPARTACUS_FETCH', 'Hier klicken um ein neues %s aus dem Netz zu installieren.');
@define('PLUGIN_EVENT_SPARTACUS_FETCHERROR', 'Die URL %s konnte nicht ge�ffnet werden. M�glicherweise existieren Server- oder Netzwerkprobleme.');
@define('PLUGIN_EVENT_SPARTACUS_FETCHING', 'Versuche URL %s zu �ffnen...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_URL', '%s bytes von obiger URL geladen. Speichere Inhalt als %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_CACHE', '%s bytes von bereits bestehender Datei geladen. Speichere Inhalt als %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_DONE', 'Daten erfolgreich geladen.');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_XML', 'Datei/Mirror Speicherort (XML-Metadaten)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_FILES', 'Datei/Mirror Speicherort (Downloads)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_DESC', 'W�hlen Sie den Download-Server. �ndern Sie diesen Wert nur, wenn Sie wissen, was Sie tun und ein Server nicht mehr reagiert. Diese Option ist haupts�chlich f�r zuk�nftige Server reserviert.');

@define('PLUGIN_EVENT_SPARTACUS_CHOWN', 'Eigent�mer der heruntergeladenen Dateien');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN_DESC', 'Hier kann der FTP/Shell-Benutzer (z.B. "nobody") angegeben werden, der f�r von Spartacus heruntergeladene Dateien verwendet wird. Falls leer wird keien �nderung des Eigent�mers vorgenommen.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD', 'Zugriffsrechte der heruntergeladenen Dateien');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DESC', 'Hier kann der Oktagonale Dateimodus (z.B: "0777") f�r von Spartacus heruntergeladene Dateien angegeben werden. Falls dieser Wert leergelassen wird, verwendet Serendipity die Standardmaske des Systems. Nicht alle Server unterst�tzen eine �nderung dieser Dateirechte. Stellen Sie unbedingt sicher, dass die von Ihnen gew�hlten Rechte das Lesen und Schreiben des Webserver-Benutzers weiterhin erlauben - sonst k�nnte Serendipity/Spartacus keine bestehenden Dateien �berschreiben.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR', 'Zugriffsrechte der heruntergeladenen Verzeichnisse');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR_DESC', 'Hier kann der Oktagonale Dateimodus (z.B: "0777") f�r von Spartacus heruntergeladene Verzeichnisse angegeben werden. Falls dieser Wert leergelassen wird, verwendet Serendipity die Standardmaske des Systems. Nicht alle Server unterst�tzen eine �nderung dieser Verzeichnisrechte. Stellen Sie unbedingt sicher, dass die von Ihnen gew�hlten Rechte das Lesen und Schreiben des Webserver-Benutzers weiterhin erlauben - sonst k�nnte Serendipity/Spartacus keine bestehenden Dateien �berschreiben.');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_SIDEBAR', 'Neue Versionen von Seitenleisten-Plugins');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_EVENT', 'Neue Versionen von Ereignis-Plugins');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_HINT', 'Hinweis: Sie k�nnen mehrere Plugins auf einmal installieren, wenn Sie den Link zum jeweiligen Plugin mit der mittleren Maustaste anklicken, so dass Ihr Browser diesen Link in einem neuen Fenster/Tab �ffnet. Bitte beachten Sie, dass das automatische Aktualisieren aller plugins zu Netwerkproblemen und defekten Dateien f�hren k�nnte. Daher ist diese Funktionalit�t absichtlich derzeit nicht implementiert.');

@define('PLUGIN_EVENT_SPARTACUS_REPOSITORY_ERROR', '<br />(Der Mirror-Speicherort antwortet mit Fehler %s.)<br />');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHCHECK', '<P>Die Daten des Spartacus-Speicherorts konnte nicht empfangen werden. Pr�fe Verf�gbarkeit der Quelle...</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHERROR', '<P>Die Pr�fung der Verf�gbarkeit einer Spartacus-Quelle konnte nicht durchgef�hrt werden (HTTP-Code %s). Bitte probieren Sie es sp�ter wieder.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHLINK', '<P><a target="_blank" href="%s">Klicken Sie hier um die Spartacus-Verf�gbarkeitspr�fung  anzusehen</a> und dessen Erreichbarkeit zu �berpr�fen.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHBLOCKED', '<P>SPARTACUS konnte keine Test-Verbindung zu Google herstellen (Fehler %d: %s).<br />Ihr Server blockiert vermutlich ausgehende Verbindungen. SPARTACUS kann so nicht ausgef�hrt werden, da so auf keine der SPARTACUS-Quellen zugegriffen werden kann. <b>Bitte kontaktieren Sie ihren Web-Provider und bitten ihn, ausgehende HTTP-Verbindungen zuzulassen.</b></P><P>Plugins k�nnen nach wie vor auch lokal installiert werden. Laden Sie dazu einfach ein Plugin von <a href="http://spartacus.s9y.org">der SPARTACUS Webseite</a> runter, entpacken es und laden es in ihr Serendipity "plugin"-Verzeichnis hoch.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHDOWN', '<P>SPARTACUS konnte eine Teste-Verbindung zu Google herstellen, aber nicht zum Spartacus-Speicherort. M�glicherweise blockiert ihr Server ausgehende Verbindungen, oder die Spartacus-Quelle ist nicht erreichbar. Kontaktieren Sie bitte ihren Web-Provider um sicherzustellen, dass ausgehende HTTP-Verbindungen m�glich sind. <b>Sie k�nnen SPARTACUS erst nutzen, wenn ihr Server auf die Spartacus-Speicherorte zugreifen kann.</b></P>');
