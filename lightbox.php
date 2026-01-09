<?php
// Lightbox extension, https://github.com/schulle4u/yellow-lightbox

class YellowLightbox {
    const VERSION = "0.9.5";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("lightboxNav", "auto");
    }
    
    // Handle page content element
    public function onParseContentElement($page, $name, $text, $attributes, $type) {
        $output = null;
        if ($name=="lightbox" && ($type=="block" || $type=="inline")) {
            list($src, $label, $mode, $group, $width, $height) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($label)) $label = $this->yellow->language->getTextHtml("imageDefaultAlt");
            if (is_string_empty($mode)) $mode = "image";
            if (is_string_empty($width)) $width = "100%";
            if (is_string_empty($height)) $height = $width;
            $output = "<div class=\"".htmlspecialchars($name)."-init\">\n";
            switch ($mode) {
                case "image": 
                    if (!preg_match("/^\w+:/", $src)) {
                        $url = $this->yellow->lookup->normaliseUrl(
                            $this->yellow->system->get("coreServerScheme"),
                            $this->yellow->system->get("coreServerAddress"),
                            $this->yellow->system->get("coreServerBase"), $src);
                    } else {
                        $url = $this->yellow->lookup->normaliseUrl("", "", "", $src);
                    }
                    $output .= "<a href=\"".htmlspecialchars($url)."\" class=\"lightbox\" data-group=\"".htmlspecialchars($group)."\"><img src=\"".htmlspecialchars($url)."\" alt=\"".htmlspecialchars($label)."\" width=\"".htmlspecialchars($width)."\" height=\"".htmlspecialchars($height)."\" /></a>\n"; break;
                case "html": $output .= "<a href=\"#".htmlspecialchars($src)."\" data-type=\"html\" data-group=\"".htmlspecialchars($group)."\" class=\"lightbox\">".htmlspecialchars($label)."</a>\n"; break;
                case "iframe": $output .= "<a href=\"".htmlspecialchars($this->yellow->lookup->normaliseUrl("", "", "", $src))."\" data-type=\"iframe\" data-group=\"".htmlspecialchars($group)."\" data-width=\"".htmlspecialchars($width)."\" data-height=\"".htmlspecialchars($height)."\" class=\"lightbox\">".htmlspecialchars($label)."</a>\n"; break;
                case "youtube": $output .= "<a href=\"https://www.youtube.com/watch?v=".rawurlencode($src)."\" data-type=\"youtube\" data-id=\"".htmlspecialchars($src)."\" data-group=\"".htmlspecialchars($group)."\" data-width=\"".htmlspecialchars($width)."\" data-height=\"".htmlspecialchars($height)."\" class=\"lightbox\">".htmlspecialchars($label)."</a>"; break;
            }
            $output .= "</div>\n";
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $assetLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreAssetLocation");
            $output = "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$assetLocation}lightbox-tobii.min.css\" />\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$assetLocation}lightbox-tobii.min.js\"></script>\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$assetLocation}lightbox.js\"></script>\n";
        }
        if ($name=="footer") {
            $output = "<div id=\"lightboxConfig\"";
            $output .= " data-lightbox-nav=\"".htmlspecialchars($this->yellow->system->get("lightboxNav"))."\"";
            $output .= " data-lightbox-previous-label=\"".$this->yellow->language->getTextHtml("corePaginationPrevious")."\"";
            $output .= " data-lightbox-next-label=\"".$this->yellow->language->getTextHtml("corePaginationNext")."\"";
            $output .= " data-lightbox-close-label=\"".$this->yellow->language->getTextHtml("editOkButton")."\"";
            $output .= "></div>\n";
        }
        return $output;
    }
}
