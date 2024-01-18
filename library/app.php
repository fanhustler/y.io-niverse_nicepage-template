<?php

/**
 * Theme settings
 *
 * @param array $settings
 * @return array
 */
function theme_app_settings($settings) {
    return json_decode(<<<JSON
    {
    "colorScheme": {
        "bodyColors": [
            "#111111",
            "#ffffff"
        ],
        "bgColor": "#231f20",
        "colors": [
            "#0cbcf5",
            "#054a71",
            "#0172b2",
            "#86dbf6",
            "#d6dfe2"
        ],
        "customColors": [
            {
                "color": "#d2e537",
                "status": 0,
                "transparency": 1,
                "index": 0
            },
            {
                "color": "#ff00dd",
                "status": 0,
                "transparency": 1
            },
            {
                "color": "#000000",
                "status": 0,
                "transparency": 1
            },
            {
                "color": "#bbce1b",
                "status": 0,
                "transparency": 1
            },
            {
                "color": "#231f20",
                "status": 0,
                "transparency": 1,
                "index": 4
            }
        ],
        "shadingContrast": "body-alt-color",
        "whiteContrast": "body-color",
        "bgContrast": "body-alt-color",
        "name": "u10"
    },
    "fontScheme": {
        "name": "TitilliumWeb-Roboto",
        "isDefault": true,
        "fonts": {
            "heading": "Titillium Web, sans-serif",
            "text": "Roboto, sans-serif",
            "accent": "Arial, sans-serif",
            "headingTitle": "Titillium Web",
            "textTitle": "Roboto",
            "rank": 10
        }
    },
    "typography": {
        "name": "custom-page-typography-2",
        "title": {
            "font-weight": "700",
            "text-transform": "capitalize",
            "line-height": "1_1",
            "font-size": 6,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "subtitle": {
            "text-transform": "capitalize",
            "line-height": 1.4,
            "font-size": 2.25,
            "margin-top": 20,
            "margin-bottom": 20,
            "font-weight": "700",
            "font-style": "",
            "text-decoration": "",
            "letter-spacing": "",
            "text-color": "",
            "border-color": "",
            "border-style": "",
            "color": "",
            "border": "",
            "button-shape": "",
            "border-radius": "",
            "underline": "",
            "gradient": "",
            "list-icon-src": "",
            "list-icon-spacing": "0.3",
            "list-icon-size": "0.8",
            "font": ""
        },
        "h1": {
            "font-weight": "700",
            "text-transform": "capitalize",
            "line-height": "1_1",
            "font-size": 3.75,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "h2": {
            "text-transform": "capitalize",
            "line-height": "1_2",
            "font-size": 3.75,
            "margin-top": 20,
            "margin-bottom": 20,
            "font-weight": "700",
            "font-style": "",
            "text-decoration": "",
            "letter-spacing": "",
            "text-color": "",
            "border-color": "",
            "border-style": "",
            "color": "",
            "border": "",
            "button-shape": "",
            "border-radius": "",
            "underline": "",
            "gradient": "",
            "list-icon-src": "",
            "list-icon-spacing": "0.3",
            "list-icon-size": "0.8",
            "font": "",
            "SM": {
                "font-size": 3,
                "font-weight": "700",
                "font-style": "",
                "text-decoration": "",
                "text-transform": "capitalize",
                "line-height": "1_2",
                "letter-spacing": "",
                "text-color": "",
                "border-color": "",
                "border-style": "",
                "color": "",
                "border": "",
                "button-shape": "",
                "border-radius": "",
                "underline": "",
                "gradient": "",
                "list-icon-src": "",
                "list-icon-spacing": "0.3",
                "list-icon-size": "0.8"
            },
            "XS": {
                "font-size": 2.25,
                "font-weight": "700",
                "font-style": "",
                "text-decoration": "",
                "text-transform": "capitalize",
                "line-height": "1_2",
                "letter-spacing": "",
                "text-color": "",
                "border-color": "",
                "border-style": "",
                "color": "",
                "border": "",
                "button-shape": "",
                "border-radius": "",
                "underline": "",
                "gradient": "",
                "list-icon-src": "",
                "list-icon-spacing": "0.3",
                "list-icon-size": "0.8"
            }
        },
        "h3": {
            "font-weight": "700",
            "text-transform": "capitalize",
            "line-height": "1_2",
            "font-size": 1.875,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "h4": {
            "font-weight": "700",
            "text-transform": "capitalize",
            "line-height": "1_2",
            "font-size": 1.5,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "h5": {
            "font-weight": "700",
            "text-transform": "capitalize",
            "line-height": "1_2",
            "font-size": 1.25,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "h6": {
            "text-transform": "uppercase",
            "line-height": "1_2",
            "font-size": false,
            "margin-top": 20,
            "margin-bottom": 20,
            "bold": false,
            "letter-spacing": 1
        },
        "largeText": {
            "bold": false,
            "line-height": "1_6",
            "font-size": 1.25,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "text": {
            "line-height": "1_6",
            "font-size": 1.875,
            "margin-top": 20,
            "margin-bottom": 20,
            "font-weight": "",
            "font-style": "",
            "text-decoration": "",
            "text-transform": "",
            "letter-spacing": "",
            "text-color": "",
            "border-color": "",
            "border-style": "",
            "color": "",
            "border": "",
            "button-shape": "",
            "border-radius": "",
            "underline": "",
            "gradient": "",
            "list-icon-src": "",
            "list-icon-spacing": "0.3",
            "list-icon-size": "0.8",
            "font": ""
        },
        "smallText": {
            "bold": false,
            "line-height": "1_6",
            "font-size": 0.875,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "link": {},
        "button": {
            "letter-spacing": 1,
            "font-size": 0.875,
            "line-height": "1_4",
            "color": "palette-1-base",
            "margin-top": 20,
            "margin-bottom": 20,
            "button-shape": "rectangle",
            "border-radius": 0,
            "text-transform": "uppercase",
            "font-weight": "500",
            "border-top-style": "solid",
            "border-left-style": "solid",
            "border-right-style": "solid",
            "border-bottom-style": "solid",
            "borders": "top right bottom left",
            "border-color": "grey-75",
            "border": 2,
            "hover-border-color": "custom-color-2"
        },
        "blockquote": {
            "font-style": "italic",
            "line-height": "1_6",
            "font-size": 1.25,
            "indent": 20,
            "border": 4,
            "border-color": "palette-1-base",
            "margin-top": 20,
            "margin-bottom": 20
        },
        "metadata": {
            "font-size": 0.75,
            "line-height": "1_4",
            "margin-top": 20,
            "margin-bottom": 20
        },
        "list": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "orderedlist": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "postContent": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "htmlBaseSize": 16,
        "theme": {
            "gradient": "",
            "image": "",
            "sheet-width-xl": 1140,
            "sheet-width-lg": 940,
            "sheet-width-md": 720,
            "sheet-width-sm": 540,
            "sheet-width-xs": 340,
            "background-image": "url(\"images/default-image.jpg\")",
            "background-size": "cover",
            "background-position": "50% 50%",
            "background-repeat": "no-repeat",
            "background-attachment": "fixed"
        },
        "hyperlink": {
            "text-color": "palette-1-base"
        },
        "form-input": {
            "border": 1,
            "border-color": "grey-30",
            "borders": "top right bottom left",
            "color": "white",
            "text-color": "black"
        }
    }
}
JSON
, true);
}
add_filter('np_theme_settings', 'theme_app_settings');

function theme_analytics() {
?>
    <?php $GLOBALS['googleAnalyticsMarker'] = false; ?>
<?php
}
add_action('wp_head', 'theme_analytics', 0);


function theme_intlTelInputMeta() {
    $GLOBALS['meta_tel_input'] = true; ?>
    <meta data-intl-tel-input-cdn-path="<?php echo get_template_directory_uri(); ?>/intlTelInput/" />
    <?php
}
add_action('wp_head', 'theme_intlTelInputMeta', 0);

function theme_favicon() {
    $custom_favicon_id = get_theme_mod('custom_favicon');
    @list($favicon_src, ,) = wp_get_attachment_image_src($custom_favicon_id, 'full');
    if (!$favicon_src) {
        $favicon_src = "";
        if ($favicon_src) {
            $favicon_src = get_template_directory_uri() . '/images/' . $favicon_src;
        }
    }

    if ($favicon_src) {
        echo "<link rel=\"icon\" href=\"$favicon_src\">";
    }
}
add_action('wp_head', 'theme_favicon');

function theme_gtm_header() {
    ?>
    <?php $GLOBALS['gtmMarker'] = false; ?>
    <?php
}
add_action('wp_head', 'theme_gtm_header', 0);

function theme_gtm_body() {
    ob_start(); ?>
    
    <?php $gtmCodeNoScript = ob_get_clean(); ?>
    <script>
        jQuery(document).ready(function () {
            jQuery(document).find('body').prepend(`<?php echo $gtmCodeNoScript; ?>`)
        });
    </script>
    <?php
}
add_action('wp_footer', 'theme_gtm_body');