# Lösungsansatz: Benutzerdaten suchen

## 1. Zielsetzung
Ziel des Projekts ist die Entwicklung einer webbasierten Filter- und Anzeige-Funktion für Benutzerdaten.  
Die Anwendung soll es ermöglichen, Benutzerdaten in einer Tabelle anzuzeigen und nach Namen oder E-Mail-Adressen zu filtern.  
Zusätzlich wird eine Detailseite bereitgestellt, auf der alle Informationen zu einem ausgewählten Benutzer dargestellt werden.

---

## 2. Technische Umsetzung

### 2.1 Programmiersprache und Frameworks
- **Programmiersprache:** PHP, HTML, CSS, JavaScript
- **Framework:** Bootstrap für das Responsive Design
- **Datenquelle:** Benutzerinformationen werden zunächst aus einem PHP-Array geladen (später aus einer Datenbank)

---

### 2.2 Aufbau der Anwendung
Die Anwendung besteht aus mehreren Dateien:

1. **index.php** – Hauptseite mit der Benutzerübersicht und Suchfunktion
2. **details.php** – Detailseite zur Anzeige einzelner Benutzerdaten
3. **data.php** – Enthält Funktionen zur Datenbereitstellung
4. **style.css** – Eigene CSS-Anpassungen (optional)

---

## 3. Funktionsbeschreibung

### 3.1 Datenbereitstellung
Die Benutzerdaten werden über folgende PHP-Funktionen bereitgestellt:

- `getAllData()` – liefert alle Benutzerdaten zurück
- `getDataPerId($id)` – liefert die Daten eines Benutzers anhand seiner ID
- `getFilteredData($filter)` – filtert die Benutzerdaten nach Name oder E-Mail

Diese Struktur ermöglicht später eine einfache Umstellung auf eine Datenbankanbindung.

---

### 3.2 Filterfunktion
- Über ein **Eingabefeld** kann der Benutzer nach Vorname, Nachname oder E-Mail suchen.
- Die Suche erfolgt **teilweise**, d. h. auch Teilbegriffe werden erkannt.
- Über den Button **„Suchen“** wird die Tabelle entsprechend gefiltert.
- Mit **„Leeren“** wird der Filter zurückgesetzt und alle Benutzer angezeigt.
- Falls keine Treffer gefunden werden, erscheint eine **Fehlermeldung**.

---

### 3.3 Tabellenansicht
- Die wichtigsten Benutzerdaten (Name, E-Mail, Geburtsdatum) werden in einer HTML-Tabelle dargestellt.
- Der Name besteht aus Vor- und Nachname in einer Spalte.
- Jede Zeile enthält einen **Link** auf die Detailseite (`details.php?id=...`).
- Das Geburtsdatum wird im Format **DD.MM.YYYY** angezeigt.
- Die Zeilen werden **abwechselnd farblich hinterlegt**, um die Lesbarkeit zu verbessern.
- Das Layout ist **responsive** dank Bootstrap.

---

### 3.4 Detailseite
- Auf der Detailseite werden alle Informationen eines Benutzers angezeigt (Name, Geburtsdatum, E-Mail, Telefonnummer, Straße).
- Ein **Zurück-Link** führt zur Übersichtsseite zurück.
- Die Daten werden über die Funktion `getDataPerId($id)` geladen.

---

## 4. Gestaltung und Benutzerfreundlichkeit
- Das Design orientiert sich an den vorgegebenen Mockups.
- Bootstrap sorgt für ein ansprechendes und konsistentes Erscheinungsbild.
- Die Anwendung ist sowohl auf Desktop- als auch Mobilgeräten gut bedienbar.
- Die Benutzerführung ist klar und intuitiv (Suche, Zurück-Link, Fehlermeldung bei leeren Ergebnissen).

---

## 5. Erweiterungsmöglichkeiten
- Anbindung an eine echte Datenbank (z. B. MySQL)
- Paginierung bei vielen Datensätzen
- AJAX-basierte Live-Suche
- Möglichkeit zum Bearbeiten oder Löschen von Benutzern
