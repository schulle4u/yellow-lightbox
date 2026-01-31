# Lightbox 0.9.5

Eine Lightbox für verschiedene Medientypen. Entwickelt von Steffen Schultz.

<p align="center"><img src="screenshot.png" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/schulle4u/yellow-lightbox/archive/refs/heads/main.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man eine Lightbox verwendet

Erstelle eine `[lightbox]`-Abkürzung.
 
Die folgenden Argumente sind verfügbar, alle Argumente sind optional:

`src` = Eine Datei, URL oder ID für die unterstützten Lightbox-Modi.  
`label` = Beschriftung oder Alternativtext für den Link zum Öffnen der Lightbox.  
`mode` = Ein unterstützter Lightbox-Modus, `image`, `html`, `iframe` oder `youtube`  
`group` = Die Gruppe für das Medien-Element.  
`width` and `height` = Abmessungen des Elements, falls zutreffend.

## Beispiele

Ein Vorschaubild mit der Lightbox öffnen und der Gruppe Yellow zuordnen: 

    [lightbox /media/images/photo.jpg Beispiel image yellow 50%]

Einen traditionellen Markdown-Bild-Link zum Öffnen der Lightbox erstellen:

    [[image photo.jpg Beispiel - 50%]](/media/images/photo.jpg){.lightbox}

Ein Youtube-Video abspielen:

    [lightbox fhs55HEl-Gc "Play video" youtube]

Eine Website in einem Iframe öffnen:

    [lightbox https://www.wikipedia.org "Open Wikipedia" iframe - 100%]

Inhaltsdatei mit HTML-Lightbox:

```
---
Title: Example
---
[lightbox selector "Open HTML" html]

<div style="display:none;" markdown=1>

! {#selector}
! This is an example markdown block.  
! [image photo.jpg "You can embed an image too"]

</div>
```

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`LightboxNav` = Zeige Navigationsschaltflächen in der Lightbox, true, false oder auto  

## Danksagung

Diese Erweiterung enthält [Tobii 3.1.2 von Midzer](https://github.com/midzer/tobii). Vielen Dank für die gute Arbeit!!

Hast du Fragen? [Hilfe finden](https://datenstrom.se/de/yellow/help/).
