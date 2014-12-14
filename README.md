[Sie können wahlweise diese Aufgabe oder die Aufgabe 3b bearbeiten]
Erstellen Sie einen Weihnachtsmann-Wunschzettel (alternativ Christkind-Wunschzettel oder alternativ Geburtstags-Wunschzettel). 

Erstellt werden soll EINE einzige PHP-Datei mit dem Namen index.php. 

Beim ersten Aufruf der Datei index.php können bis zu 3 Wünsche eingegeben werden. Wird mindestens ein Feld ohne Sonderzeichen ausgefüllt, dann wird die zweite Seite aufgerufen, auf der Sie die Lieferangaben eingeben können. Nur wenn alle Felder sinnvoll ausgefüllt sind, wird die 3. Seite aufgerufen. Ansonsten erfolgt eine Fehlermeldung und die 2. Seite wird erneut aufgerufen. 

Das Layout dient nur als Beispiel und muss nicht originalgetreu eingehalten werden.


Beim abschicken des Formulars wird immer dasselbe PHP-Script erneut aufgerufen, aber eine neue HTML-Seite zum Client geschickt. Das PHP-Script muss bei der 2. Seite die Eingaben mittels regulären Ausdrücken auf Richtigkeit überprüfen (z.B. Postleitzahlen 5stellig) und in allen Eingabefeldern sind Sonderzeichen nicht zulässig! 

Der Sourcecode ist strukturiert aufzubauen (kein Cut-and-Paste) und mit sinnvollen Kommentaren zu versehen. Alle HTML-Tags sind in Funktionen auszulagern, die durch das PHP-Programm aufgerufen werden

Checken Sie Ihren Quelltext in git ein, und geben Sie hier in Moodle den URL Ihres Repositories an.

Hinweis: Das PHP-Programm kann verschiedene HTML-Seiten zum Client übertragen, indem der Status ermittelt wird und dieser Status in einer if-elseif-else-Anweisung zu verschiedenen Zuständen führt. So kann ein PHP-Programm drei verschiedene HTML- Seiten für den Client erzeugen.
