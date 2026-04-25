# Contao Article Badges

Die Erweiterung für [Contao CMS](https://contao.org/) ersetzt in der Artikelansicht die Spalteninformation, z.B. `[Kopfzeile]`, mit farbigen Badges.

Die Badge für die `[Hauptspalte]` wird durch die Erweiterung standardmäßig nicht angezeigt, sodass man schneller sehen kann, wo Artikel in verschiedenen Sektionen bzw. Slots eingesetzt werden. Die Sektionen bzw. Slots `subheader` und `prefooter`sind zusätzlich zu den Üblichen `header`, `main`, `left`, `right` und `footer` bereits vordefiniert.

Funktioniert sowohl für Standardlayouts als auch für moderne Twig-Layouts mit Slots.

## Installation

Contao Bundle mit Composer installieren:

```
composer require de-es/contao-article-badges
```

## Konfiguration

Die Konfiguration kann in der Datei `config/config.yaml` angepasst werden:

```
contao_article_badges:
    # Hauptspalte anzeigen
    show_main: true
```
