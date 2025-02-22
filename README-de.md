<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Lightbox 0.9.1

Eine Lightbox für verschiedene Medientypen. 

<p align="center"><img src="SCREENSHOT.png" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/schulle4u/yellow-lightbox/archive/refs/heads/main.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man eine Lightbox verwendet

Erstelle eine `[lightbox]`-Abkürzung.
 
Die folgenden Argumente sind verfügbar, alle Argumente sind optional:

`src` = Eine Datei, URL oder ID für die unterstützten Lightbox-Modi.  
`mode` = Ein unterstützter Lightbox-Modus, `image`, `html`, `iframe` oder `youtube`  
`label` = Beschriftung oder Alternativtext für den Link zum Öffnen der Lightbox.  
`group` = Die Gruppe für das Medien-Element.  
`width` and `height` = Abmessungen des Elements, falls zutreffend.

## Beispiele

Ein Vorschaubild mit der Lightbox öffnen und der Gruppe Yellow zuordnen: 

    [lightbox /media/images/photo.jpg image Beispiel yellow 50%]

Einen traditionellen Markdown-Bild-Link zum Öffnen der Lightbox erstellen:

    [[image photo.jpg Beispiel - 50%]](/media/images/photo.jpg){.lightbox}

Ein Youtube-Video abspielen:

    [lightbox fhs55HEl-Gc youtube "Play video"]

Eine Website in einem Iframe öffnen:

    [lightbox https://www.wikipedia.org iframe "Open Wikipedia" - 100%]

Inhaltsdatei mit HTML-Lightbox:

```
---
Title: Example
---
[lightbox selector html "Open HTML"]

<div style="display:none;" markdown=1>

! {#selector}
! This is an example markdown block.  
! [image photo.jpg "You can embed an image too"]

</div>
```

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`LightboxNav` = Zeige Navigationsschaltflächen in der Lightbox, true, false oder auto  
`LightboxAutoplay` = Videos und Audios beim Öffnen der Lightbox automatisch abspielen, true oder false

## Danksagung

Diese Erweiterung enthält [Tobii v2.7.3 von Midzer](https://github.com/midzer/tobii). Vielen Dank für die gute Arbeit!!

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
