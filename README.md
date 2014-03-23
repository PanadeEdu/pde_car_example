# PanadeEdu Car Example
### Tutorial Video
https://www.youtube.com/watch?v=qw8oI4nzjew

### Beschreibung
Diese Extension wurde im Tutorial mit Hilfe des Extensionmanagers erstellt.
Sie besteht aus einer Controller Action Kombination, welche ein einfaches Datenbank Objekt (Model)
verwendet um Werte aus Frontendformularen zu schreiben, zu lesen, zu editieren und zu löschen. 

Die Extension zeigt dabei wie eine einfache Datenbank kommunikation erfolgt.
So kann man die Anwendung an eigene Bedürfnisse anpassen und bekommt einen Überblick,
welche grundlegenden Funktionen einem bei einem Model und Repository zur Verfügung steht.

Das Model ist immer die Blaupause für das Objekt, in diesem Beispiel "Car".
Das Repository beinhaltet funktionen, die wir auf ein Model Objekt anwenden können.
So übergeben wir der Funktion "add" beispielsweise ein Car Model Objekt, welches wir zuvor befüllt haben. 

### Installation
1. Extension Verzeichniss in "typo3conf/ext/" ablegen.
2. In "TYPO3 Backend -> Extension Manager" die Extension Installieren. 
3. Im Root Template der Seite, das Static Template einbinden. Root Template -> Edit -> Include
4. Plugin auf gewünschter Seite einbinden.

### Erweiterungs Vorschlag
- Ihr könnt die Ausgabe der Datenbankinhalte im View verändern.
- Ihr könnt Die Datenbank und das Model versuchen um ein weiteres Feld zu erweitern. 
  dazu muss man folgende Dateien anfassen: Classes/Model/Car.php, ext_tables.sql, ext_tables.php, Configuration/TCA/Car.php !!! Und Datenbank Updaten im Install tool!!!
- Ihr könnt die Ausgaben Teilen und nach namen suchen, indem ihr anstelle von "findAll()" beispielsweise "findByName($name)" sucht.
