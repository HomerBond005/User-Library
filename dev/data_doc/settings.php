<?php
/**
* In dieser Datei werden alle Einstellungen der User Library gespeichert.
* @filesource
* @package userlib
*/

namespace settings;

/**
* Server, auf dem die Datenbank liegt.
*/
const DB_server = "localhost";
/**
* Die Datenbank, die die User Library zum Speichern von Daten nutzen soll.
*/
const DB_database = "localhost";
/**
* Der Nutzer, mit dem sich die User Library auf der Datenbank einloggt.
*/
const DB_user = "root";
/**
* Das Passwort, das die User Library zum Einloggen auf der Datenbank benutzen soll.
*/
const DB_password = "root";
/**
* Das Pr�fix, das vor die Tabellen der User Library gestellt wird.
*/
const DB_prefix = "site_";

/**
* Soll ein Login m�glich sein?
*/
const login_enabled = true;
/**
* Soll ein Registrieren mit {@link User::register()} m�glich sein?
* Ein Registrieren mit {@link User::create()} ist weiterhin m�glich.
*/
const register_enabled = true;
/**
* Ben�tigen neue Benutzer eine Best�tigung durch die Funktion {@link User::approve()}?
*/
const need_approval = false;
/**
* Wie lang soll der Salt sein, der f�r die Verschl�sselung von Passw�rtern verwendet wird?
*/
const length_salt = 20;
/**
* Wie lang soll der Aktivierungscode sein, der in der Email durch {@link User::register()} verschickt wird?
*/
const length_activationcode = 20;
/**
* Von welcher Email Adresse sollen Emails verschickt werden?
*/
const send_mailaddress = "noreply@localhost";

#After how many seconds will a user be kicked?
/**
* Nach wie vielen Sekunden wird ein Benutzer automatisch ausgeloggt?
*/
const autologouttime = 2000;
/**
* Wie viele fehlerhafte Loginversuche darf ein Benutzer machen, ohne das sein Account gesperrt wird?
*/
const maxloginattempts = 5;
/**
* F�r wie lange wird ein Account gesperrt, nachdem zu viele fehlerhafte Loginversuche vorgenommen wurden.
*/
const loginblocktime = 60;
/**
* Sollen Securesessions eingeschaltet sein?
* Bei einer Securesession darf die IP-Adresse eines Benutzers w�hrend einer Sitzung nicht wechseln.
* Securesessions werden f�r die meisten Webseiten nicht empfohlen, weil zum Beispiel Handys mit mobilen Internet h�ufig die IP-Adresse wechseln.
* Bei lange dauernden Sitzungen kann es durch die Knappheit von IP-Adressen auch sein, das �ber Kabel/WLAN verbundene Computer/Handys ihre �ffentliche IP-Adresse wechseln.
*/
const securesessions = false;
?>