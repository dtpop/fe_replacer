REDAXO-AddOn: fe_replacer
=========================

Das AddOn erlaubt freie Replacements per Regex im Frontend über den Extensionpoint OUTPUT_FIlTER.

In dieser Vorversion lassen sich in den Einstellungen Such- und Ersetzmuster festlegen. Jedes Muster wird dann auf den gesamten Inhalt angewendet.



Anwendung
---------

Der Replacer kann zum Einsatz kommen, wenn auf der gesamten Website eine Ersetzung gebraucht wird.


Beispiel
--------

Für G00gle Analytics sollen Klicks auf E-Mail-Links (href="mailto:...") getrackt werden.

Suchmuster:

<a href="mailto:

Ersetzung:

<a onclick="gtag('event', 'click', {send_to: 'AW-123456789/u1AbCDeFgHiJkLmNopQR', event_category: 'Mailto Link', event_action: 'Email Click', event_label:'Email'})" href="mailto:

Ergebnis:

<a onclick="gtag('event', 'click', {send_to: 'AW-123456789/u1AbCDeFgHiJkLmNopQR', event_category: 'Mailto Link', event_action: 'Email Click', event_label:'Email'})" href="mailto:info@example.com">