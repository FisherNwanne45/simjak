<?php
include('../resources/config.php');
        $result = $conn->query("SELECT * FROM site");
        if(!$result->num_rows > 0){ echo '<h2 style="text-align:center;">No Data Found</h2>'; }
        while($row = $result->fetch_assoc())
        {
      ?>
<!DOCTYPE html>
<html id="sitetop" lang="en-US" class="attop">


    <!-- Mirrored from <?php echo $row['url']; ?>/terms-of-use/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Dec 2024 23:46:55 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

    <head>
        <meta charset="UTF-8" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge, chome=1" />
        <script>
        var gform;
        gform || (document.addEventListener("gform_main_scripts_loaded", function() {
            gform.scriptsLoaded = !0
        }), document.addEventListener("gform/theme/scripts_loaded", function() {
            gform.themeScriptsLoaded = !0
        }), window.addEventListener("DOMContentLoaded", function() {
            gform.domLoaded = !0
        }), gform = {
            domLoaded: !1,
            scriptsLoaded: !1,
            themeScriptsLoaded: !1,
            isFormEditor: () => "function" == typeof InitializeEditor,
            callIfLoaded: function(o) {
                return !(!gform.domLoaded || !gform.scriptsLoaded || !gform.themeScriptsLoaded && !gform
                    .isFormEditor() || (gform.isFormEditor() && console.warn(
                        "The use of gform.initializeOnLoaded() is deprecated in the form editor context and will be removed in Gravity Forms 3.1."
                        ), o(), 0))
            },
            initializeOnLoaded: function(o) {
                gform.callIfLoaded(o) || (document.addEventListener("gform_main_scripts_loaded", () => {
                    gform.scriptsLoaded = !0, gform.callIfLoaded(o)
                }), document.addEventListener("gform/theme/scripts_loaded", () => {
                    gform.themeScriptsLoaded = !0, gform.callIfLoaded(o)
                }), window.addEventListener("DOMContentLoaded", () => {
                    gform.domLoaded = !0, gform.callIfLoaded(o)
                }))
            },
            hooks: {
                action: {},
                filter: {}
            },
            addAction: function(o, r, e, t) {
                gform.addHook("action", o, r, e, t)
            },
            addFilter: function(o, r, e, t) {
                gform.addHook("filter", o, r, e, t)
            },
            doAction: function(o) {
                gform.doHook("action", o, arguments)
            },
            applyFilters: function(o) {
                return gform.doHook("filter", o, arguments)
            },
            removeAction: function(o, r) {
                gform.removeHook("action", o, r)
            },
            removeFilter: function(o, r, e) {
                gform.removeHook("filter", o, r, e)
            },
            addHook: function(o, r, e, t, n) {
                null == gform.hooks[o][r] && (gform.hooks[o][r] = []);
                var d = gform.hooks[o][r];
                null == n && (n = r + "_" + d.length), gform.hooks[o][r].push({
                    tag: n,
                    callable: e,
                    priority: t = null == t ? 10 : t
                })
            },
            doHook: function(r, o, e) {
                var t;
                if (e = Array.prototype.slice.call(e, 1), null != gform.hooks[r][o] && ((o = gform.hooks[r][
                        o
                    ]).sort(function(o, r) {
                        return o.priority - r.priority
                    }), o.forEach(function(o) {
                        "function" != typeof(t = o.callable) && (t = window[t]), "action" == r ? t
                            .apply(null, e) : e[0] = t.apply(null, e)
                    })), "filter" == r) return e[0]
            },
            removeHook: function(o, r, t, n) {
                var e;
                null != gform.hooks[o][r] && (e = (e = gform.hooks[o][r]).filter(function(o, r, e) {
                    return !!(null != n && n != o.tag || null != t && t != o.priority)
                }), gform.hooks[o][r] = e)
            }
        });
        </script>


        <meta name="viewport" content="width=device-width,initial-scale=1">
        <style type="text/css">
        #gform_wrapper_1 .gform_footer {
            visibility: hidden;
            position: absolute;
            left: -100vw;
        }
        </style>
        <script type="rocketlazyloadscript">
            function submitGForm() {
    		document.addEventListener( "DOMContentLoaded", function( e ) {
	            if ( typeof jQuery !== "undefined" ) {
	                jQuery(document).on( "click", "#gform_1 button", function(e) {

	                    if( jQuery(this).data("isclicked" ) === true ) {
	                        e.preventDefault();
	                        return false;
	                    }
	                    
	                    jQuery(this).css("opacity", 0.2).data("isclicked", true);
	                });
	            }
	        });
    	}
    </script>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <style>
        img:is([sizes="auto"i], [sizes^="auto,"i]) {
            contain-intrinsic-size: 3000px 1500px
        }
        </style>
        <link rel="alternate" hreflang="en" href="index.php" />
        <link rel="alternate" hreflang="es" href="../es/terminos-de-uso/index.php" />
        <link rel="alternate" hreflang="x-default" href="index.php" />
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>


        <!-- This site is optimized with the Yoast SEO plugin v24.0 - https://yoast.com/wordpress/plugins/seo/ -->
        <title>Terms of Use | <?php echo $row['name']; ?></title>
        <link rel="preload" data-rocket-preload as="style"
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
            media="print" onload="this.media='all'" /><noscript>
            <link rel="stylesheet"
                href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" />
        </noscript>
        <link rel="preload" data-rocket-preload as="image"
            href="../wp-content/themes/sunloan-theme/assets/images/dot-3.webp" fetchpriority="high">
        <link rel="canonical" href="index.php" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Terms of Use | <?php echo $row['name']; ?>" />
        <meta property="og:description"
            content="Last Modified: July 7, 2022 Acceptance of the Terms of Use These terms of use are entered into by and between You and <?php echo $row['name']; ?>, including its affiliates (“Company,” “We,” or “Us”). The following terms and conditions (collectively, “Terms of Use”), govern your access to and use of <?php echo $row['url']; ?>, <?php echo $row['url']; ?>, and any related websites on..." />
        <meta property="og:url" content="index.php" />
        <meta property="og:site_name" content="<?php echo $row['name']; ?>" />
        <meta property="article:modified_time" content="2022-12-02T21:19:19+00:00" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:label1" content="Est. reading time" />
        <meta name="twitter:data1" content="20 minutes" />
        <script type="application/ld+json" class="yoast-schema-graph">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "WebPage",
                "@id": "<?php echo $row['url']; ?>terms-of-use/",
                "url": "<?php echo $row['url']; ?>terms-of-use/",
                "name": "Terms of Use | <?php echo $row['name']; ?>",
                "isPartOf": {
                    "@id": "<?php echo $row['url']; ?>#website"
                },
                "datePublished": "2022-05-23T19:52:43+00:00",
                "dateModified": "2022-12-02T21:19:19+00:00",
                "breadcrumb": {
                    "@id": "<?php echo $row['url']; ?>terms-of-use/#breadcrumb"
                },
                "inLanguage": "en-US",
                "potentialAction": [{
                    "@type": "ReadAction",
                    "target": ["<?php echo $row['url']; ?>terms-of-use/"]
                }]
            }, {
                "@type": "BreadcrumbList",
                "@id": "<?php echo $row['url']; ?>terms-of-use/#breadcrumb",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "<?php echo $row['url']; ?>"
                }, {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Terms of Use"
                }]
            }, {
                "@type": "WebSite",
                "@id": "<?php echo $row['url']; ?>#website",
                "url": "<?php echo $row['url']; ?>",
                "name": "<?php echo $row['name']; ?>",
                "description": "",
                "publisher": {
                    "@id": "<?php echo $row['url']; ?>#organization"
                },
                "potentialAction": [{
                    "@type": "SearchAction",
                    "target": {
                        "@type": "EntryPoint",
                        "urlTemplate": "<?php echo $row['url']; ?>?s={search_term_string}"
                    },
                    "query-input": {
                        "@type": "PropertyValueSpecification",
                        "valueRequired": true,
                        "valueName": "search_term_string"
                    }
                }],
                "inLanguage": "en-US"
            }, {
                "@type": "Organization",
                "@id": "<?php echo $row['url']; ?>#organization",
                "name": "<?php echo $row['name']; ?>",
                "url": "<?php echo $row['url']; ?>",
                "logo": {
                    "@type": "ImageObject",
                    "inLanguage": "en-US",
                    "@id": "<?php echo $row['url']; ?>#/schema/logo/image/",
                    "url": "<?php echo $row['url']; ?>/wp-content/uploads/2022/04/logo.png",
                    "contentUrl": "<?php echo $row['url']; ?>/wp-content/uploads/2022/04/logo.png",
                    "width": 1,
                    "height": 1,
                    "caption": "<?php echo $row['name']; ?>"
                },
                "image": {
                    "@id": "<?php echo $row['url']; ?>#/schema/logo/image/"
                }
            }]
        }
        </script>
        <!-- / Yoast SEO plugin. -->


        <link rel='dns-prefetch' href='http://www.google.com/' />
        <link href='https://fonts.gstatic.com/' crossorigin rel='preconnect' />
        <link rel="alternate" type="application/rss+xml" title="<?php echo $row['name']; ?> &raquo; Feed"
            href="../feed/index.php" />
        <script>
        var translations = ["Select an option", "Get directions", "More details"]
        </script>
        <style id='wp-block-library-inline-css'>
        :root {
            --wp-admin-theme-color: #007cba;
            --wp-admin-theme-color--rgb: 0, 124, 186;
            --wp-admin-theme-color-darker-10: #006ba1;
            --wp-admin-theme-color-darker-10--rgb: 0, 107, 161;
            --wp-admin-theme-color-darker-20: #005a87;
            --wp-admin-theme-color-darker-20--rgb: 0, 90, 135;
            --wp-admin-border-width-focus: 2px;
            --wp-block-synced-color: #7a00df;
            --wp-block-synced-color--rgb: 122, 0, 223;
            --wp-bound-block-color: var(--wp-block-synced-color)
        }

        @media (min-resolution:192dpi) {
            :root {
                --wp-admin-border-width-focus: 1.5px
            }
        }

        .wp-element-button {
            cursor: pointer
        }

        :root {
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 42px
        }

        :root .has-very-light-gray-background-color {
            background-color: #eee
        }

        :root .has-very-dark-gray-background-color {
            background-color: #313131
        }

        :root .has-very-light-gray-color {
            color: #eee
        }

        :root .has-very-dark-gray-color {
            color: #313131
        }

        :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
            background: linear-gradient(135deg, #00d084, #0693e3)
        }

        :root .has-purple-crush-gradient-background {
            background: linear-gradient(135deg, #34e2e4, #4721fb 50%, #ab1dfe)
        }

        :root .has-hazy-dawn-gradient-background {
            background: linear-gradient(135deg, #faaca8, #dad0ec)
        }

        :root .has-subdued-olive-gradient-background {
            background: linear-gradient(135deg, #fafae1, #67a671)
        }

        :root .has-atomic-cream-gradient-background {
            background: linear-gradient(135deg, #fdd79a, #004a59)
        }

        :root .has-nightshade-gradient-background {
            background: linear-gradient(135deg, #330968, #31cdcf)
        }

        :root .has-midnight-gradient-background {
            background: linear-gradient(135deg, #020381, #2874fc)
        }

        .has-regular-font-size {
            font-size: 1em
        }

        .has-larger-font-size {
            font-size: 2.625em
        }

        .has-normal-font-size {
            font-size: var(--wp--preset--font-size--normal)
        }

        .has-huge-font-size {
            font-size: var(--wp--preset--font-size--huge)
        }

        .has-text-align-center {
            text-align: center
        }

        .has-text-align-left {
            text-align: left
        }

        .has-text-align-right {
            text-align: right
        }

        #end-resizable-editor-section {
            display: none
        }

        .aligncenter {
            clear: both
        }

        .items-justified-left {
            justify-content: flex-start
        }

        .items-justified-center {
            justify-content: center
        }

        .items-justified-right {
            justify-content: flex-end
        }

        .items-justified-space-between {
            justify-content: space-between
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal !important
        }

        .screen-reader-text:focus {
            background-color: #ddd;
            clip: auto !important;
            clip-path: none;
            color: #444;
            display: block;
            font-size: 1em;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000
        }

        html :where(.has-border-color) {
            border-style: solid
        }

        html :where([style*=border-top-color]) {
            border-top-style: solid
        }

        html :where([style*=border-right-color]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-color]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-color]) {
            border-left-style: solid
        }

        html :where([style*=border-width]) {
            border-style: solid
        }

        html :where([style*=border-top-width]) {
            border-top-style: solid
        }

        html :where([style*=border-right-width]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-width]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-width]) {
            border-left-style: solid
        }

        html :where(img[class*=wp-image-]) {
            height: auto;
            max-width: 100%
        }

        :where(figure) {
            margin: 0 0 1em
        }

        html :where(.is-position-sticky) {
            --wp-admin--admin-bar--position-offset: var(--wp-admin--admin-bar--height, 0px)
        }

        @media screen and (max-width:600px) {
            html :where(.is-position-sticky) {
                --wp-admin--admin-bar--position-offset: 0px
            }
        }
        </style>
        <link data-minify="1" rel='stylesheet' id='wpml-blocks-css'
            href='../wp-content/cache/min/1/wp-content/plugins/sitepress-multilingual-cms/dist/css/blocks/styles8712.css?ver=1732739757'
            media='all' />
        <link data-minify="1" rel='stylesheet' id='wpsl-styles-css'
            href='../wp-content/cache/min/1/wp-content/plugins/wp-store-locator/css/styles.min8712.css?ver=1732739757'
            media='all' />
        <link rel='stylesheet' id='wpml-legacy-dropdown-0-css'
            href='../wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-dropdown/style.min68b3.css?ver=1'
            media='all' />
        <link rel='stylesheet' id='wpml-legacy-horizontal-list-0-css'
            href='../wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-list-horizontal/style.min68b3.css?ver=1'
            media='all' />
        <style id='wpml-legacy-horizontal-list-0-inline-css'>
        .wpml-ls-statics-footer a,
        .wpml-ls-statics-footer .wpml-ls-sub-menu a,
        .wpml-ls-statics-footer .wpml-ls-sub-menu a:link,
        .wpml-ls-statics-footer li:not(.wpml-ls-current-language) .wpml-ls-link,
        .wpml-ls-statics-footer li:not(.wpml-ls-current-language) .wpml-ls-link:link {
            color: #444444;
            background-color: #ffffff;
        }

        .wpml-ls-statics-footer a,
        .wpml-ls-statics-footer .wpml-ls-sub-menu a:hover,
        .wpml-ls-statics-footer .wpml-ls-sub-menu a:focus,
        .wpml-ls-statics-footer .wpml-ls-sub-menu a:link:hover,
        .wpml-ls-statics-footer .wpml-ls-sub-menu a:link:focus {
            color: #000000;
            background-color: #eeeeee;
        }

        .wpml-ls-statics-footer .wpml-ls-current-language>a {
            color: #444444;
            background-color: #ffffff;
        }

        .wpml-ls-statics-footer .wpml-ls-current-language:hover>a,
        .wpml-ls-statics-footer .wpml-ls-current-language>a:focus {
            color: #000000;
            background-color: #eeeeee;
        }
        </style>
        <link rel='stylesheet' id='bootstrap-css'
            href='../wp-content/themes/sunloan-theme/bootstrap-custom/make/bootstrap-cust.min234e.css?ver=1703019767'
            media='all' />
        <link data-minify="1" rel='stylesheet' id='styles-css'
            href='../wp-content/cache/min/1/wp-content/themes/sunloan-theme/dist/css/styles.min8712.css?ver=1732739757'
            media='all' />
        <link rel='stylesheet' id='select2-css'
            href='../wp-content/themes/sunloan-theme/assets/css/vendor/select2.min4819.css?ver=4.0.13' media='all' />
        <link data-minify="1" rel='stylesheet' id='tiny-slider-style-css'
            href='../wp-content/cache/min/1/wp-content/themes/sunloan-theme/assets/css/tiny-slider8712.css?ver=1732739757'
            media='all' />
        <link data-minify="1" rel='stylesheet' id='nice-select-style-css'
            href='../wp-content/cache/min/1/wp-content/themes/sunloan-theme/assets/css/nice-select8712.css?ver=1732739757'
            media='all' />
        <link data-minify="1" rel='stylesheet' id='gform_basic-css'
            href='../wp-content/cache/min/1/wp-content/plugins/gravityforms/assets/css/dist/basic.min8712.css?ver=1732739757'
            media='all' />
        <link rel='stylesheet' id='gform_theme_components-css'
            href='../wp-content/plugins/gravityforms/assets/css/dist/theme-components.minbf47.css?ver=2.9.1'
            media='all' />
        <link rel='stylesheet' id='gform_theme-css'
            href='../wp-content/plugins/gravityforms/assets/css/dist/theme.minbf47.css?ver=2.9.1' media='all' />
        <link rel='stylesheet' id='wp-block-paragraph-css'
            href='../wp-includes/blocks/paragraph/style.min9704.css?ver=6.7.1' media='all' />
        <link rel='stylesheet' id='wp-block-heading-css'
            href='../wp-includes/blocks/heading/style.min9704.css?ver=6.7.1' media='all' />
        <script id="wpml-cookie-js-extra">
        var wpml_cookies = {
            "wp-wpml_current_language": {
                "value": "en",
                "expires": 1,
                "path": "\/"
            }
        };
        var wpml_cookies = {
            "wp-wpml_current_language": {
                "value": "en",
                "expires": 1,
                "path": "\/"
            }
        };
        </script>
        <script data-minify="1"
            src="../wp-content/cache/min/1/wp-content/plugins/sitepress-multilingual-cms/res/js/cookies/language-cookie8712.js?ver=1732739757"
            id="wpml-cookie-js" defer data-wp-strategy="defer"></script>
        <script
            src="../wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-dropdown/script.min68b3.js?ver=1"
            id="wpml-legacy-dropdown-0-js" data-rocket-defer defer></script>
        <script data-cfasync="false"
            src="../wp-content/themes/sunloan-theme/assets/js/vendor/jquery-3.5.1.min9d52.js?ver=3.5.1" id="jquery-js">
        </script>
        <script defer='defer' src="../wp-content/plugins/gravityforms/js/jquery.json.minbf47.js?ver=2.9.1"
            id="gform_json-js"></script>
        <script id="gform_gravityforms-js-extra">
        var gform_i18n = {
            "datepicker": {
                "days": {
                    "monday": "Mo",
                    "tuesday": "Tu",
                    "wednesday": "We",
                    "thursday": "Th",
                    "friday": "Fr",
                    "saturday": "Sa",
                    "sunday": "Su"
                },
                "months": {
                    "january": "January",
                    "february": "February",
                    "march": "March",
                    "april": "April",
                    "may": "May",
                    "june": "June",
                    "july": "July",
                    "august": "August",
                    "september": "September",
                    "october": "October",
                    "november": "November",
                    "december": "December"
                },
                "firstDay": 1,
                "iconText": "Select date"
            }
        };
        var gf_legacy_multi = [];
        var gform_gravityforms = {
            "strings": {
                "invalid_file_extension": "This type of file is not allowed. Must be one of the following:",
                "delete_file": "Delete this file",
                "in_progress": "in progress",
                "file_exceeds_limit": "File exceeds size limit",
                "illegal_extension": "This type of file is not allowed.",
                "max_reached": "Maximum number of files reached",
                "unknown_error": "There was a problem while saving the file on the server",
                "currently_uploading": "Please wait for the uploading to complete",
                "cancel": "Cancel",
                "cancel_upload": "Cancel this upload",
                "cancelled": "Cancelled"
            },
            "vars": {
                "images_url": "<?php echo $row['url']; ?>/wp-content\/plugins\/gravityforms\/images"
            }
        };
        var gf_global = {
            "gf_currency_config": {
                "name": "U.S. Dollar",
                "symbol_left": "$",
                "symbol_right": "",
                "symbol_padding": "",
                "thousand_separator": ",",
                "decimal_separator": ".",
                "decimals": 2,
                "code": "USD"
            },
            "base_url": "<?php echo $row['url']; ?>/wp-content\/plugins\/gravityforms",
            "number_formats": [],
            "spinnerUrl": "<?php echo $row['url']; ?>/wp-content\/plugins\/gravityforms\/images\/spinner.svg",
            "version_hash": "82574fc9f3d4274ac72304f614e20208",
            "strings": {
                "newRowAdded": "New row added.",
                "rowRemoved": "Row removed",
                "formSaved": "The form has been saved.  The content contains the link to return and complete the form."
            }
        };
        </script>
        <script id="gform_gravityforms-js-before">

        </script>
        <script defer='defer' src="../wp-content/plugins/gravityforms/js/gravityforms.minbf47.js?ver=2.9.1"
            id="gform_gravityforms-js"></script>
        <script type="rocketlazyloadscript" defer='defer'
            data-rocket-src="https://www.google.com/recaptcha/api.js?hl=en&amp;ver=6.7.1#038;render=explicit"
            id="gform_recaptcha-js"></script>
        <script defer='defer'
            src="../wp-content/plugins/gravityforms/assets/js/dist/utils.min43b8.js?ver=501a987060f4426fb517400c73c7fc1e"
            id="gform_gravityforms_utils-js"></script>
        <link rel="https://api.w.org/" href="../wp-json/index.php" />
        <link rel="alternate" title="JSON" type="application/json" href="../wp-json/wp/v2/pages/2379.json" />
        <link rel='shortlink' href='../index0047.php?p=2379' />
        <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
            href="../wp-json/oembed/1.0/embedc458.json?url=<?php echo $row['url']; ?>terms-of-use%2F" />
        <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
            href="../wp-json/oembed/1.0/embeddb7e?url=<?php echo $row['url']; ?>terms-of-use%2F&amp;format=xml" />
        <meta name="generator" content="WPML ver:4.6.14 stt:1,2;" />
        <link rel="icon" href="../wp-content/uploads/2022/05/cropped-android-chrome-512x512-1-32x32.png"
            sizes="32x32" />
        <link rel="icon" href="../wp-content/uploads/2022/05/cropped-android-chrome-512x512-1-192x192.png"
            sizes="192x192" />
        <link rel="apple-touch-icon"
            href="../wp-content/uploads/2022/05/cropped-android-chrome-512x512-1-180x180.png" />
        <meta name="msapplication-TileImage"
            content="<?php echo $row['url']; ?>/wp-content/uploads/2022/05/cropped-android-chrome-512x512-1-270x270.png" />
        <noscript>
            <style id="rocket-lazyload-nojs-css">
            .rll-youtube-player,
            [data-lazy-src] {
                display: none !important;
            }
            </style>
        </noscript>
         
        <!-- Google Tag Manager -->
         
        <!-- End Google Tag Manager -->
        <!-- Start VWO Async SmartCode -->
        <link rel="preconnect" href="https://dev.visualwebsiteoptimizer.com/" />
        <script type='text/javascript' id='vwoCode'>
        window._vwo_code || (function() {
            var account_id = 876958,
                version = 2.1,
                settings_tolerance = 2000,
                hide_element = 'body',
                hide_element_style =
                'opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important',
                /* DO NOT EDIT BELOW THIS LINE */
                f = false,
                w = window,
                d = document,
                v = d.querySelector('#vwoCode'),
                cK = '_vwo_' + account_id + '_settings',
                cc = {};
            try {
                var c = JSON.parse(localStorage.getItem('_vwo_' + account_id + '_config'));
                cc = c && typeof c === 'object' ? c : {}
            } catch (e) {}
            var stT = cc.stT === 'session' ? w.sessionStorage : w.localStorage;
            code = {
                use_existing_jquery: function() {
                    return typeof use_existing_jquery !== 'undefined' ? use_existing_jquery : undefined
                },
                library_tolerance: function() {
                    return typeof library_tolerance !== 'undefined' ? library_tolerance : undefined
                },
                settings_tolerance: function() {
                    return cc.sT || settings_tolerance
                },
                hide_element_style: function() {
                    return '{' + (cc.hES || hide_element_style) + '}'
                },
                hide_element: function() {
                    if (performance.getEntriesByName('first-contentful-paint')[0]) {
                        return ''
                    }
                    return typeof cc.hE === 'string' ? cc.hE : hide_element
                },
                getVersion: function() {
                    return version
                },
                finish: function(e) {
                    if (!f) {
                        f = true;
                        var t = d.getElementById('_vis_opt_path_hides');
                        if (t) t.parentNode.removeChild(t);
                        if (e)(new Image).src = '../../dev.visualwebsiteoptimizer.com/ee5ba7.gif?a=' +
                            account_id + e
                    }
                },
                finished: function() {
                    return f
                },
                addScript: function(e) {
                    var t = d.createElement('script');
                    t.type = 'text/javascript';
                    if (e.src) {
                        t.src = e.src
                    } else {
                        t.text = e.text
                    }
                    d.getElementsByTagName('head')[0].appendChild(t)
                },
                load: function(e, t) {
                    var i = this.getSettings(),
                        n = d.createElement('script'),
                        r = this;
                    t = t || {};
                    if (i) {
                        n.textContent = i;
                        d.getElementsByTagName('head')[0].appendChild(n);
                        if (!w.VWO || VWO.caE) {
                            stT.removeItem(cK);
                            r.load(e)
                        }
                    } else {
                        var o = new XMLHttpRequest;
                        o.open('GET.php', e, true);
                        o.withCredentials = !t.dSC;
                        o.responseType = t.responseType || 'text';
                        o.onload = function() {
                            if (t.onloadCb) {
                                return t.onloadCb(o, e)
                            }
                            if (o.status === 200) {
                                _vwo_code.addScript({
                                    text: o.responseText
                                })
                            } else {
                                _vwo_code.finish('&e=loading_failure:' + e)
                            }
                        };
                        o.onerror = function() {
                            if (t.onerrorCb) {
                                return t.onerrorCb(e)
                            }
                            _vwo_code.finish('&e=loading_failure:' + e)
                        };
                        o.send()
                    }
                },
                getSettings: function() {
                    try {
                        var e = stT.getItem(cK);
                        if (!e) {
                            return
                        }
                        e = JSON.parse(e);
                        if (Date.now() > e.e) {
                            stT.removeItem(cK);
                            return
                        }
                        return e.s
                    } catch (e) {
                        return
                    }
                },
                init: function() {
                    if (d.URL.indexOf('__vwo_disable__') > -1) return;
                    var e = this.settings_tolerance();
                    w._vwo_settings_timer = setTimeout(function() {
                        _vwo_code.finish();
                        stT.removeItem(cK)
                    }, e);
                    var t;
                    if (this.hide_element() !== 'body') {
                        t = d.createElement('style');
                        var i = this.hide_element(),
                            n = i ? i + this.hide_element_style() : '',
                            r = d.getElementsByTagName('head')[0];
                        t.setAttribute('id', '_vis_opt_path_hides');
                        v && t.setAttribute('nonce', v.nonce);
                        t.setAttribute('type', 'text/css');
                        if (t.styleSheet) t.styleSheet.cssText = n;
                        else t.appendChild(d.createTextNode(n));
                        r.appendChild(t)
                    } else {
                        t = d.getElementsByTagName('head')[0];
                        var n = d.createElement('div');
                        n.style.cssText =
                            'z-index: 2147483647 !important;position: fixed !important;left: 0 !important;top: 0 !important;width: 100% !important;height: 100% !important;background: white !important;';
                        n.setAttribute('id', '_vis_opt_path_hides');
                        n.classList.add('_vis_hide_layer');
                        t.parentNode.insertBefore(n, t.nextSibling)
                    }
                    var o = 'https://dev.visualwebsiteoptimizer.com/j.php?a=' + account_id + '&u=' +
                        encodeURIComponent(d.URL) + '&vn=' + version;
                    if (w.location.search.indexOf('_vwo_xhr') !== -1) {
                        this.addScript({
                            src: o
                        })
                    } else {
                        this.load(o + '&x=true')
                    }
                }
            };
            w._vwo_code = code;
            code.init();
        })();
        </script>
        <!-- End VWO Async SmartCode -->
        <meta name="generator" content="WP Rocket 3.17.3.1"
            data-wpr-features="wpr_delay_js wpr_defer_js wpr_minify_js wpr_lazyload_iframes wpr_oci wpr_image_dimensions wpr_minify_css wpr_desktop" />
    </head>

    <body>
        <!-- Google Tag Manager (noscript) -->
         
        <!-- End Google Tag Manager (noscript) -->

        <header id="header-area" class="header-area headerFixed">
            <!-- Header Top Area Start -->
            <div class="header-top-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4 col-5">
                            <div class="header-top-left">
                                <p><a href="tel:8007865626" style="color:white;">
                                        <?php echo $row['phone']; ?>
                                    </a></p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-7">
                            <div class="header-top-right">
                                <div class="companyName ml-3">
                                    <script>
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({
                                            pageLanguage: 'da',
                                            includedLanguages: 'da,pt,ar,pl,fr,es,it,en,ko,zh-CN',
                                            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                        }, 'google_translate_element');
                                    }
                                    </script>
                                    <script
                                        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                                    </script>
                                    <div id="google_translate_element"></div>

                                    <style type="text/css">
                                    /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS BEGIN */
                                    .goog-te-menu-value {
                                        padding: 3px !important;
                                    }

                                    .goog-te-gadget-simple {
                                        background-color: #fff;
                                        border-left: 1px solid #d5d5d5;
                                        border-top: 1px solid #9b9b9b;
                                        border-bottom: 1px solid #e8e8e8;
                                        border-right: 1px solid #d5d5d5;
                                        font-size: 10pt;
                                        display: inline-block;
                                        padding-top: 1px;
                                        padding-bottom: 2px;
                                        border-radius: 10px;
                                        cursor: pointer;
                                        zoom: 1;
                                    }

                                    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value:hover {
                                        text-decoration: none;
                                    }

                                    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span {
                                        color: blue;
                                    }

                                    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:hover {
                                        color: blue;
                                    }




                                    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="border-left-color: rgb(187, 187, 187); border-left-width: 1px; border-left-style: solid;"] {
                                        display: none;
                                    }

                                    /* HIDE the google translate toolbar */
                                    .goog-te-banner-frame.skiptranslate {
                                        display: none !important;
                                    }

                                    body {
                                        top: 0px !important;
                                    }

                                    .skiptranslate iframe {
                                        visibility: hidden !important;
                                    }

                                    body {
                                        top: 0 !important;

                                    }

                                    /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS END */
                                    </style>
                                </div>

                                <div class="language_drop wpml-floating-language-switcher">
                                </div>

                                <ul>
                                    <li><span></span> </li>
                                    <li><a href="<?php echo $row['url']; ?>/track.php" target="_blank"> Loan
                                            Status</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            <div class="header-top-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4 col-5">
                            <div class="header-top-left">
                                <p><a href="tel:8007865626" style="color:white;"><?php echo $row['phone']; ?></a></p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-7">
                            <div class="header-top-right">

                                <div class="language_drop wpml-floating-language-switcher">

                                    <div class="wpml-ls-statics-shortcode_actions wpml-ls">
                                        <ul>

                                            <li itemscope="itemscope"
                                                itemtype="https://www.schema.org/SiteNavigationElement" tabindex="0"
                                                class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-en wpml-ls-current-language wpml-ls-first-item">
                                                <a href="#"
                                                    class="js-wpml-ls-item-toggle dropdown-toggle nav-link show wpml-ls-item-toggle">
                                                    <span class="wpml-ls-native">EN</span></a>

                                                <ul class="wpml-ls-sub-menu dropdown-menu">

                                                    <li itemscope="itemscope"
                                                        itemtype="https://www.schema.org/SiteNavigationElement"
                                                        class="menu-item dropdown nav-item wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-es wpml-ls-last-item">
                                                        <a href="../es/terminos-de-uso/index.php" class="wpml-ls-link">
                                                            <span class="wpml-ls-native" lang="es">ES</span></a>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <ul>
                                    <li><a href="<?php echo $row['url']; ?>/track.php" target="_blank"> Loan Status</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Top Area End -->

            <!-- Main Header Area Start -->
            <div class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2 col-3">
                            <div class="logo">
                                <a class="logo" href="../index.php" id="site-logo" title="<?php echo $row['name']; ?>" rel="home">
                                    <img width="154" height="46" src="../wp-content/uploads/2022/04/logo.png"
                                        class="attachment-full size-full" alt="<?php echo $row['name']; ?>" data-skip-lazy=""
                                        loading="eager" decoding="async" /> </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-10 col-9">
                            <div class="header-right">
                                <div class="mainmenu" id="mainmenu">
                                    <ul id="header-nav" class="m-0">
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement"
                                            class="menu-item nav-item additional-item">
                                            <a title="Contact Us" href="../contact/index.php" class="nav-link"></a>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement"
                                            class="menu-item dropdown nav-item additional-item"><a title="Language"
                                                href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false">Language<svg id="Layer_1" class="toggle-svg"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.24 19.87">
                                                    <defs>
                                                        <style>
                                                        .cls-1 {
                                                            fill: none;
                                                            stroke: #231f20;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 4.22px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path id="Path_8182" class="cls-1"
                                                        d="M2.99,15.55L14.23,4.32l11.23,11.23" />
                                                </svg></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="menu-item nav-item lang-item"><span
                                                        class="lang-link current">English<svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24"
                                                            style="width: 16px;height: 14px;margin-left: 3px;">
                                                            <path fill="#21409A"
                                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                                        </svg></span></li>
                                                <li class="menu-item nav-item lang-item"><a
                                                        href="../es/terminos-de-uso/index.php"
                                                        class="lang-link">Spanish</a></li>
                                            </ul>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1579"
                                            class="menu-item nav-item"><a title="About Us"
                                                href="../about/index.php" class="nav-link">About Us</a></li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2635"
                                            class="menu-item dropdown nav-item"><a title="Loans" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle" id="menu-item-dropdown-2635">Loans<svg
                                                    id="Layer_1" class="toggle-svg" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 28.24 19.87">
                                                    <defs>
                                                        <style>
                                                        .cls-1 {
                                                            fill: none;
                                                            stroke: #231f20;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 4.22px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path id="Path_8182" class="cls-1"
                                                        d="M2.99,15.55L14.23,4.32l11.23,11.23" />
                                                </svg></a>
                                            <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-2635"
                                                role="menu">
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-2435" class="menu-item nav-item"><a
                                                        title="Personal Installment Loans" href="../loans/index.php"
                                                        class="dropdown-item">Personal Installment Loans</a></li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-2951" class="menu-item nav-item"><a title="Capital Investment Fund"
                                                        href="../cap-inv/index.php" class="dropdown-item">Capital Investment Fund</a></li>

<li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-2951" class="menu-item nav-item"><a title="Venture Capital"
                                                        href="../venture/index.php" class="dropdown-item">Venture Capital</a></li>

<li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-2951" class="menu-item nav-item"><a title="Start up Loans"
                                                        href="../start-up/index.php" class="dropdown-item">Start up Loans</a></li>

<li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-2951" class="menu-item nav-item"><a title="Debt Refinance"
                                                        href="../debt/index.php" class="dropdown-item">Debt Refinance</a></li>
                                            </ul>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-3021"
                                            class="menu-item nav-item"><a title="testimonials" href="../testimonials/index.php"
                                                class="nav-link">Testimonials</a></li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-3079"
                                            class="menu-item nav-item"><a title="Contact Us" href="../ppi/index.php"
                                                class="nav-link">Loan Protection</a>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2910"
                                            class="menu-item nav-item"><a title="Contact Us"
                                                href="../contact/index.php" class="nav-link">Contact </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-btn">
                                    <a class="common-btn btn_red" href="<?php echo $row['apply']; ?>"
                                        target="_blank">Apply Now</a>
                                </div>
                                <div class="menu_bar" id="btn-menu-mobile">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Header Area End -->

        <!-- Main-Area Start -->
        <section id="page-content-container" class="is-page">
            </div>
            </div>
            <section id="block_ca97794cad2d29c8884db97746da3f18"
                class="block-hero-bar alignfull block-hero-bar has-font-color text-default">
                <div class="page-title-area bg_blue">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="page-title white left">
                                    <h1>Website Terms of Use</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img fetchpriority="high" width="1337" height="167" decoding="async"
                        src="../wp-content/themes/sunloan-theme/assets/images/dot-3.webp" alt="" class="dot_shape">
                </div>
            </section>



            <section id="contact-content"
                class="wp-block-group cs_section mx_800 is-content-justification-left is-layout-flex wp-container-core-group-is-layout-1 wp-block-group-is-layout-flex">
                <div
                    class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-1 wp-block-columns-is-layout-flex">
                    <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                        <p>Last Modified: July 7, 2022</p>



                        <h2 class="wp-block-heading">Acceptance of the Terms of Use</h2>



                        <p>These terms of use are entered into by and between You and <?php echo $row['name']; ?>,
                            including its affiliates (“Company,” “We,” or “<strong>Us</strong>”). The following terms
                            and conditions (collectively, “Terms of Use”), govern your access to and use of <a
                                href="../index.php"><?php echo $row['url']; ?></a>, <?php echo $row['url']; ?>, and any related websites on
                            which this Privacy Policy appears (all collectively our “<strong>Website</strong>”),
                            including any content, functionality and services offered on or through the Website, and any
                            other websites or online services where these Terms of Use are posted.</p>



                        <p>“<strong>You</strong>” and “<strong>Your</strong>” refer to you as an individual
                            person.&nbsp; If You are accessing the Site as an employee or representative of any other
                            person or entity including any automated service or program “<strong>You</strong>” includes
                            that person or entity and automated service or program.</p>



                        <p>Please read the Terms of Use carefully before you start to use the Website.&nbsp;<strong>By
                                using the Website, you accept and agree to be bound and abide by these Terms of Use and
                                our Privacy Policy, found at&nbsp;</strong><a
                                href="../privacy-policy/index.php"><strong><?php echo $row['url']; ?>privacy-policy/</strong></a><strong>,
                                incorporated herein by reference.</strong>&nbsp;If you do not want to agree to these
                            Terms of Use or the Privacy Policy, you must not access or use the Website.</p>



                        <p>By accessing and using our Website or services, You understand and agree that We may collect
                            and retain personal or other information about You and the device You use to access the
                            Website or service. We may collect personally identifiable information about You from Your
                            use of this Site. This information may include, name, street address, email address,
                            telephone numbers, the website You linked from and other personally identifiable
                            information.</p>



                        <p>This Website is offered and available to users who are 18 years of age or older and reside in
                            the  <?php echo $row['country']; ?> or any of its territories or possessions. By using this Website, you
                            represent and warrant that you are of legal age to form a binding contract with the Company
                            and meet all of the foregoing eligibility requirements. If you do not meet all of these
                            requirements, you must not access or use the Website.&nbsp; If We learn that We have been
                            provided with personally identifiable information of anyone under the age 18 We will delete
                            that information from our systems.</p>



                        <h2 class="wp-block-heading">Changes to the Terms of Use</h2>



                        <p>We may revise and update these Terms of Use from time to time, without notice, in our sole
                            discretion. All changes are effective immediately when we post them.</p>



                        <p>Your continued use of the Website following the posting of revised Terms of Use means that
                            you accept and agree to the changes. You are expected to check this page each time You
                            access the Website so you are aware of any changes, as they are binding on you.</p>



                        <h2 class="wp-block-heading">Accessing the Website and Account Security</h2>



                        <p>You are granted a limited license to use the Website. This license imposes on You an
                            obligation of appropriate use and conduct. This license is for temporary, personal,
                            non-commercial viewing and use of the Website. It is not a transfer of title.</p>



                        <p>You may use this Website for obtaining information about us, our products and services, to
                            transact business with us, apply for a loan, make payments, seek employment opportunities,
                            or other tasks directly related to the purpose of this Website.</p>



                        <p>Any commercial use of the Website or its content beyond the specific use licensed in this
                            Terms of Service are prohibited. The only exception is that You obtain prior written
                            authorization from Us. See the Notifications section below for how to contact Us.</p>



                        <p>In addition, <?php echo $row['name']; ?> reserves the right to terminate any or all offerings
                            accessible through the Website without prior notice. Furthermore, by offering information,
                            products, or services via this Website, no solicitation is made by Us to any person to use
                            that information, products, or services in a jurisdiction where providing that information,
                            products, or services is prohibited by law.</p>



                        <p>We reserve the right to withdraw or amend this Website, and any service or material we
                            provide on the Website, in our sole discretion without notice. We will not be liable if for
                            any reason all or any part of the Website is unavailable at any time or for any period. From
                            time to time, we may restrict access to some parts of the Website, or the entire Website, to
                            users, including registered users.&nbsp; In the event We terminate Your access, any
                            contractual transactions You have entered into with Us shall remain in full force and
                            effect.&nbsp;</p>



                        <p>You are responsible for:</p>



                        <ul class="wp-block-list">
                            <li>Making all arrangements necessary for you to have access to the Website;</li>



                            <li>Ensuring that all persons who access the Website through your internet connection are
                                aware of these Terms of Use and comply with them;</li>



                            <li>Monitoring, controlling access to, and maintaining the strict confidentiality of your
                                access credentials;</li>



                            <li>Not allowing another person to use your access credentials; and</li>



                            <li>Any charges or damages that may be incurred because of your failure to maintain the
                                strict confidentiality of your access credentials.</li>
                        </ul>



                        <p><?php echo $row['name']; ?> is not responsible for any harm relating to the theft of access credentials
                            resulting from Your actions, Your disclosure of access credentials, or Your decision to
                            allow another person or entity to access and use the Website using your access credentials.
                            You agree that You are solely responsible for maintaining the security of the devices you
                            use to access the Website.</p>



                        <p>You must immediately notify <?php echo $row['name']; ?> regarding any unauthorized use of
                            Your account or access credentials or any other concerns that You have about the misuse or
                            security of your account by emailing:&nbsp;<a href="../cdn-cgi/l/email-protection.php"
                                class="__cf_email__"
                                data-cfemail="c6a5a9a8b2a7a5b286a4b4b3a8a2a7a1a3aba1b2e8a5a9ab"> <?php echo $row['email']; ?></a>.&nbsp;Until
                            <?php echo $row['name']; ?> receives this notification from You, You may be held liable for
                            any harm resulting from the improper use of Your device or access credentials.</p>



                        <p>To access the Website or some of the resources it offers, you may be asked to provide certain
                            registration details or other information. It is a condition of your use of the Website that
                            all the information you provide on the Website is correct, current, and complete. You agree
                            that all information you provide to register with this Website or otherwise, including, but
                            not limited to, through the use of any interactive features on the Website, is governed by
                            our&nbsp;<a href="../privacy-policy/index.php">Privacy Policy</a>, and you consent to all
                            actions we take with respect to your information consistent with our Privacy Policy.</p>



                        <p>If you choose, or are provided with, a username, password, or any other piece of information
                            as part of our security procedures, you must treat such information as confidential, and you
                            must not disclose it to any other person or entity. You also acknowledge that your account
                            is personal to you and agree not to provide any other person with access to this Website or
                            portions of it using your username, password, or other security information. You agree to
                            notify us immediately of any unauthorized access to or use of your username or password or
                            any other breach of security. You also agree to ensure that you exit from your account at
                            the end of each session. You should use caution when accessing your account from a public or
                            shared computer so that others are not able to view or record your password or other
                            personal information.</p>



                        <p>We have the right to disable any username, password, or other identifier, whether chosen by
                            you or provided by us, at any time in our sole discretion for any or no reason, including
                            if, in our opinion, you have violated any provision of these Terms of Use.</p>



                        <p>This license shall terminate if You violate any of the Terms of Service. Use may be
                            terminated by <?php echo $row['name']; ?> at any time. Upon terminating Your viewing
                            privileges or upon the termination of this license, You must destroy any downloaded
                            materials in Your possession whether in electronic or printed format.</p>



                        <p>To the extent that any such interference or violation of these Terms of Service constitutes a
                            violation of criminal or civil law, <?php echo $row['name']; ?> fully reserves the right to
                            seek appropriate redress under applicable law.</p>



                        <h2 class="wp-block-heading">Intellectual Property Rights</h2>



                        <p>The Website and its entire contents, features and functionality (including but not limited to
                            all information, software, text, displays, images, video and audio, and the design,
                            selection, and arrangement thereof), are owned by the Company, its licensors or other
                            providers of such material and are protected by  <?php echo $row['country']; ?> and international copyright,
                            trademark, patent, trade secret and other intellectual property or proprietary rights laws.
                        </p>



                        <p>These Terms of Use permit you to use the Website for your personal, non-commercial use only.
                            You must not reproduce, distribute, modify, create derivative works of, publicly display,
                            publicly perform, republish, download, store or transmit any of the material on our Website,
                            except as follows:</p>



                        <ul class="wp-block-list">
                            <li>Your computer may temporarily store copies of such materials in RAM incidental to your
                                accessing and viewing those materials.</li>



                            <li>You may store files that are automatically cached by your Web browser for display
                                enhancement purposes.</li>



                            <li>You may print one copy of a reasonable number of pages of the Website for your own
                                personal, non-commercial use and not for further reproduction, publication, or
                                distribution.</li>



                            <li>If we provide desktop or other applications for download, you may download a single copy
                                to your computer or mobile device solely for your own personal, non-commercial use,
                                provided you agree to be bound by our end user license agreement for such applications.
                            </li>



                            <li>If we provide the Website with certain content, you may take such actions as are enabled
                                by such features.</li>
                        </ul>



                        <p>You must not:</p>



                        <ul class="wp-block-list">
                            <li>Modify copies of any materials from this site.</li>



                            <li>Use any illustrations, photographs, video or audio sequences or any graphics separately
                                from the accompanying text.</li>



                            <li>Delete or alter any copyright, trademark, or other proprietary rights notices from
                                copies of materials from this site.</li>
                        </ul>



                        <p>You must not access or use for any commercial purposes any part of the Website or any
                            services or materials available through the Website.</p>



                        <p>If you print, copy, modify, download, or otherwise use or provide any other person with
                            access to any part of the Website in breach of the Terms of Use, your right to use the
                            Website will cease immediately and you must, at our option, return or destroy any copies of
                            the materials you have made. No right, title, or interest in or to the Website or any
                            content on the Website is transferred to you, and all rights not expressly granted are
                            reserved by the Company. Any use of the Website not expressly permitted by these Terms of
                            Use is a breach of these Terms of Use and may violate copyright, trademark, and other laws.
                        </p>



                        <h2 class="wp-block-heading">Trademarks</h2>



                        <p>The Company names <?php echo $row['name']; ?> and Brundage Management Company, the Company
                            logos and all related names, logos, product and service names, designs and slogans are
                            trademarks of the Company or its affiliates or licensors. You must not use such marks
                            without the prior written permission of the Company.</p>



                        <h2 class="wp-block-heading">Prohibited Uses</h2>



                        <p>You may use the Website only for lawful purposes and in accordance with these Terms of Use.
                            You agree not to use the Website:</p>



                        <ul class="wp-block-list">
                            <li>In any way that violates any applicable federal, state, local or international law or
                                regulation (including, without limitation, any laws regarding the export of data or
                                software to and from the US or other countries).</li>



                            <li>To exploit, harm or attempt to exploit or harm minors in any way by exposing them to
                                inappropriate content, asking for personally identifiable information or otherwise.</li>



                            <li>To transmit, or procure the sending of, any advertising or promotional material without
                                our prior written consent, including any “junk mail,” “chain letter,” “spam,” or any
                                other similar solicitation.</li>



                            <li>To impersonate or attempt to impersonate the Company, a Company employee, another user
                                or any other person or entity (including, without limitation, by using e-mail addresses
                                associated with any of the foregoing).</li>



                            <li>To interfere with any other User’s access or use of the Website or use or attempt to
                                obtain access to another User’s account or personal information or create a false
                                identity to access the Website;</li>



                            <li>To make any unsolicited offers or advertisements to another User of the Website, or
                                attempting to collect any data from a third party or another user of the Website without
                                their consent</li>



                            <li>To make unauthorized use of passwords, or misuse of any information or material posted
                                on this Website is strictly prohibited</li>



                            <li>To engage in any other conduct that restricts or inhibits anyone’s use or enjoyment of
                                the Website, or which, as determined by us, may harm the Company or users of the
                                Website, or expose them to liability.</li>
                        </ul>



                        <p>Additionally, you agree not to:</p>



                        <ul class="wp-block-list">
                            <li>Use the Website in any manner that could disable, overburden, damage, or impair the site
                                or interfere with any other party’s use of the Website, including their ability to
                                engage in real time activities through the Website.</li>



                            <li>Use any robot, spider or other automatic device, process or means to access the Website
                                for any purpose, including monitoring or copying any of the material on the Website.
                            </li>



                            <li>Use any manual process to monitor or copy any of the material on the Website, or for any
                                other purpose not expressly authorized in these Terms of Use, without our prior written
                                consent.</li>



                            <li>Use any device, software or routine that interferes with the proper working of the
                                Website.</li>



                            <li>Introduce any viruses, trojan horses, worms, logic bombs or other material which is
                                malicious or technologically harmful.</li>



                            <li>Attempt to gain unauthorized access to, interfere with, damage, or disrupt any parts of
                                the Website, the server on which the Website is stored, or any server, computer or
                                database connected to the Website.</li>



                            <li>Attack the Website via a denial-of-service attack or a distributed denial-of-service
                                attack.</li>



                            <li>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Otherwise attempt to interfere with the proper working
                                of the Website.</li>
                        </ul>



                        <h2 class="wp-block-heading">Reliance on Information Posted</h2>



                        <p>The information presented on or through the Website is made available solely for general
                            information purposes. We do not warrant the accuracy, completeness, or usefulness of this
                            information. Any reliance you place on such information is strictly at your own risk. We
                            disclaim all liability and responsibility arising from any reliance placed on such materials
                            by You or any other visitor to the Website, or by anyone who may be informed of any of its
                            contents.</p>



                        <h2 class="wp-block-heading">Changes to the Website</h2>



                        <p>We may update the content on this Website from time to time, but its content is not
                            necessarily complete or up to date. Any of the material on the Website may be out of date at
                            any given time, and we are under no obligation to update such material.</p>



                        <h2 class="wp-block-heading">Information About You and Your Visits to the Website</h2>



                        <p>All information we collect on this Website is subject to our&nbsp;<a
                                href="../privacy-policy/index.php">Privacy Policy</a>. By using the Website, you consent
                            to all actions taken by us with respect to your information in compliance with the Privacy
                            Policy.</p>



                        <h2 class="wp-block-heading">Linking to the Website and Social Media Features</h2>



                        <p>You may link to our homepage, provided you do so in a way that is fair and legal and does not
                            damage our reputation or take advantage of it, but you must not establish a link in such a
                            way as to suggest any form of association, approval, or endorsement on our part</p>



                        <p>This Website may provide certain social media features that enable you to:</p>



                        <ul class="wp-block-list">
                            <li>Link from your own or certain third-party websites to certain content on this Website.
                            </li>



                            <li>Send e-mails or other communications with certain content, or links to certain content,
                                on this Website.</li>



                            <li>Cause limited portions of content on this Website to be displayed or appear to be
                                displayed on your own or certain third-party websites.</li>
                        </ul>



                        <p>You may use these features solely as they are provided by us and solely with respect to the
                            content they are displayed with. Subject to the foregoing, you must not:</p>



                        <ul class="wp-block-list">
                            <li>Establish a link from any website that is not owned by you.</li>



                            <li>Cause the Website or portions of it to be displayed, or appear to be displayed by, for
                                example, framing, deep linking or in-line linking, on any other site.</li>



                            <li>Link to any part of the Website other than the homepage.</li>



                            <li>Otherwise take any action with respect to the materials on this Website that is
                                inconsistent with any other provision of these Terms of Use.</li>
                        </ul>



                        <p>The website from which you are linking, or on which you make certain content accessible, must
                            comply in all respects with the Content Standards set out in these Terms of Use.</p>



                        <p>You agree to cooperate with us in causing any unauthorized framing or linking immediately to
                            cease. We reserve the right to withdraw linking permission without notice.</p>



                        <p>We may disable all or any social media features and any links at any time without notice in
                            our discretion.</p>



                        <h2 class="wp-block-heading">Geographic Restrictions</h2>



                        <p>The owner of the Website is based in the  <?php echo $row['country']; ?> in the  <?php echo $row['country']; ?>. We provide this
                            Website for use only by persons located in the  <?php echo $row['country']; ?>. We make no claims that the
                            Website or any of its content is accessible or appropriate outside of the  <?php echo $row['country']; ?>.
                            Access to the Website may not be legal by certain persons or in certain countries. If you
                            access the Website from outside the  <?php echo $row['country']; ?>, you do so on your own initiative and are
                            responsible for compliance with local laws.</p>



                        <h2 class="wp-block-heading">Disclaimer of Warranties and Liability</h2>



                        <p>Your Use of This Site Is At Your Sole Risk; No Warranty; Limitation on Liability</p>



                        <p><?php echo $row['name']; ?>’s goal is to provide accurate and timely information on this Site. However, there
                            may be inadvertent, technical, or factual inaccuracies, or typographical errors. For these
                            reasons <?php echo $row['name']; ?> cannot warrant the accuracy, completeness, or timeliness
                            of the information, text, graphics, links, or other items on this Site. We make no
                            representation or warranty that the content, products, services, or operation of the Site
                            will be uninterrupted or error free.</p>



                        <p>You understand that we cannot and do not guarantee or warrant that files available for
                            downloading from the internet or the Website will be free of viruses or other destructive
                            code. You are responsible for implementing sufficient procedures and checkpoints to satisfy
                            your particular requirements for anti-virus protection and accuracy of data input and
                            output, and for maintaining a means external to our site for any reconstruction of any lost
                            data. WE WILL NOT BE LIABLE FOR ANY LOSS OR DAMAGE CAUSED BY A DISTRIBUTED DENIAL-OF-SERVICE
                            ATTACK, VIRUSES OR OTHER TECHNOLOGICALLY HARMFUL MATERIAL THAT MAY INFECT YOUR COMPUTER
                            EQUIPMENT, COMPUTER PROGRAMS, DATA OR OTHER PROPRIETARY MATERIAL DUE TO YOUR USE OF THE
                            WEBSITE OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE OR TO YOUR DOWNLOADING OF ANY
                            MATERIAL POSTED ON IT, OR ON ANY WEBSITE LINKED TO IT.</p>



                        <p>YOUR USE OF THE WEBSITE, ITS CONTENT AND ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE
                            IS AT YOUR OWN RISK. THE WEBSITE, ITS CONTENT AND ANY SERVICES OR ITEMS OBTAINED THROUGH THE
                            WEBSITE ARE PROVIDED ON AN “AS IS” AND “AS AVAILABLE” BASIS, WITHOUT ANY WARRANTIES OF ANY
                            KIND, EITHER EXPRESS OR IMPLIED. NEITHER THE COMPANY NOR ANY PERSON ASSOCIATED WITH THE
                            COMPANY MAKES ANY WARRANTY OR REPRESENTATION WITH RESPECT TO THE COMPLETENESS, SECURITY,
                            RELIABILITY, QUALITY, ACCURACY OR AVAILABILITY OF THE WEBSITE. WITHOUT LIMITING THE
                            FOREGOING, NEITHER THE COMPANY NOR ANYONE ASSOCIATED WITH THE COMPANY REPRESENTS OR WARRANTS
                            THAT THE WEBSITE, ITS CONTENT OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE WILL BE
                            ACCURATE, RELIABLE, ERROR-FREE OR UNINTERRUPTED, THAT DEFECTS WILL BE CORRECTED, THAT OUR
                            SITE OR THE SERVER THAT MAKES IT AVAILABLE ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS
                            OR THAT THE WEBSITE OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE WILL OTHERWISE
                            MEET YOUR NEEDS OR EXPECTATIONS.</p>



                        <p>THE COMPANY HEREBY DISCLAIMS ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED,
                            STATUTORY OR OTHERWISE, INCLUDING BUT NOT LIMITED TO ANY WARRANTIES OF MERCHANTABILITY,
                            NON-INFRINGEMENT AND FITNESS FOR PARTICULAR PURPOSE.</p>



                        <p>THE FOREGOING DOES NOT AFFECT ANY WARRANTIES WHICH CANNOT BE EXCLUDED OR LIMITED UNDER
                            APPLICABLE LAW.</p>



                        <h2 class="wp-block-heading">Limitation on Liability</h2>



                        <p>TO THE FULLEST EXTENT PROVIDED BY LAW, IN NO EVENT WILL THE COMPANY, ITS AFFILIATES OR THEIR
                            LICENSORS, SERVICE PROVIDERS, EMPLOYEES, AGENTS, OFFICERS OR DIRECTORS BE LIABLE FOR DAMAGES
                            OF ANY KIND, UNDER ANY LEGAL THEORY, ARISING OUT OF OR IN CONNECTION WITH YOUR USE, OR
                            INABILITY TO USE, THE WEBSITE, ANY WEBSITES LINKED TO IT, ANY CONTENT ON THE WEBSITE OR SUCH
                            OTHER WEBSITES OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE OR SUCH OTHER WEBSITES,
                            INCLUDING ANY DIRECT, INDIRECT, SPECIAL, INCIDENTAL, CONSEQUENTIAL OR PUNITIVE DAMAGES,
                            INCLUDING BUT NOT LIMITED TO, PERSONAL INJURY, PAIN AND SUFFERING, EMOTIONAL DISTRESS, LOSS
                            OF REVENUE, LOSS OF PROFITS, LOSS OF BUSINESS OR ANTICIPATED SAVINGS, LOSS OF USE, LOSS OF
                            GOODWILL, LOSS OF DATA, AND WHETHER CAUSED BY TORT (INCLUDING NEGLIGENCE), BREACH OF
                            CONTRACT OR OTHERWISE, EVEN IF FORESEEABLE.</p>



                        <p>THE FOREGOING DOES NOT AFFECT ANY LIABILITY WHICH CANNOT BE EXCLUDED OR LIMITED UNDER
                            APPLICABLE LAW.</p>



                        <h2 class="wp-block-heading">Indemnification</h2>



                        <p>You agree to defend, indemnify and hold harmless the Company, its affiliates, licensors and
                            service providers, and its and their respective officers, directors, employees, contractors,
                            agents, licensors, suppliers, successors and assigns from and against any claims,
                            liabilities, damages, judgments, awards, losses, costs, expenses or fees (including
                            attorneys’ fees) arising out of or relating to your violation of these Terms of Use or your
                            use of the Website, including, but not limited to, your User Contributions, any use of the
                            Website’s content, services and products other than as expressly authorized in these Terms
                            of Use, or your use of any information obtained from the Website.</p>



                        <h2 class="wp-block-heading">Governing Law and Jurisdiction</h2>



                        <p>All matters relating to the Website and these Terms of Use, and any dispute or claim arising
                            therefrom or related thereto (in each case, including non-contractual disputes or claims),
                            shall be governed by and construed in accordance with the internal laws of the State of
                            Texas without giving effect to any choice or conflict of law provision or rule (whether of
                            the  <?php echo $row['country']; ?> or any other jurisdiction).</p>



                        <p>Any legal suit, action or proceeding arising out of, or related to, these Terms of Use or the
                            Website shall be instituted exclusively in the federal courts of the  <?php echo $row['country']; ?> or the
                            courts of the  <?php echo $row['country']; ?>, in each case located in the City of San Antonio and County of
                            Bexar County. You waive any and all objections to the exercise of jurisdiction over You by
                            such courts and to venue in such courts.</p>



                        <h2 class="wp-block-heading">Arbitration</h2>



                        <p>You shall submit any disputes arising from these Terms of Use or use of the Website,
                            including disputes arising from or concerning their interpretation, violation, invalidity,
                            non-performance, or termination, to final and binding arbitration under the Rules of
                            Arbitration of the American Arbitration Association applying <?php echo $row['country']; ?>.</p>



                        <p>You may bring an arbitration claim only on your own behalf, but not on behalf of any other
                            person, or any class of people. Only claims for money damages may be submitted to
                            arbitration. You may not combine a claim that is subject to arbitration under these Terms of
                            Service with a claim that is not eligible for arbitration under these Terms of Service.</p>



                        <p>The arbitrator will decide whether a dispute can be arbitrated. The judgment of the
                            arbitrator will be binding and executable in any civil court.</p>



                        <p>You will not have to pay more to initiate mediation or arbitration than it would cost to file
                            a lawsuit in a general jurisdiction court in the county where you live. Subject to
                            applicable law and AAA rules, We may advance a portion of your applicable costs.</p>



                        <p>IF YOU ACT PROMPTLY, YOU MAY REJECT THIS ARBITRATION PROVISION. If you do so, neither you nor
                            we can require the other to participate in an arbitration proceeding. To reject this
                            provision, you must notify us in writing within 15 days of the date that you first utilize
                            Our website. Send Your rejection notice to:</p>



                        <p><?php echo $row['name']; ?><br>Attn: Compliance Department<br><?php echo $row['addr']; ?><br>
                        </p>



                        <p>You must include your name, address, the URL of this arbitration provision, and a clear
                            statement that you wish to opt-out of this arbitration provision in these terms and
                            conditions. In the event of any dispute concerning whether you have provided a timely notice
                            of rejection, You must produce a signed receipt for mailing the rejection notice. In the
                            absence of the signed receipt, our received date stamp on the rejection notice shall be
                            conclusive evidence of the date of receipt. These instructions constitute the only method
                            that you can use to exercise your right to reject this arbitration requirement.</p>



                        <h2 class="wp-block-heading">Limitation on Time to File Claims</h2>



                        <p>ANY CAUSE OF ACTION OR CLAIM YOU MAY HAVE ARISING OUT OF OR RELATING TO THESE TERMS OF USE OR
                            THE WEBSITE MUST BE COMMENCED WITHIN ONE (1) YEAR AFTER THE CAUSE OF ACTION ACCRUES;
                            OTHERWISE, SUCH CAUSE OF ACTION OR CLAIM IS PERMANENTLY BARRED.</p>



                        <h2 class="wp-block-heading">Waiver and Severability</h2>



                        <p>No waiver of by the Company of any term or condition set forth in these Terms of Use shall be
                            deemed a further or continuing waiver of such term or condition or a waiver of any other
                            term or condition, and any failure of the Company to assert a right or provision under these
                            Terms of Use shall not constitute a waiver of such right or provision.</p>



                        <p>If any provision of these Terms of Use is held by a court or other tribunal of competent
                            jurisdiction to be invalid, illegal, or unenforceable for any reason, such provision shall
                            be eliminated or limited to the minimum extent such that the remaining provisions of the
                            Terms of Use will continue in full force and effect.</p>



                        <h2 class="wp-block-heading">Entire Agreement</h2>



                        <p>The Terms of Use and our Privacy Policy constitute the sole and entire agreement between You
                            and <?php echo $row['name']; ?>, with respect to the Website and supersede all prior and
                            contemporaneous understandings, agreements, representations, and warranties, both written
                            and oral, with respect to the Website.</p>



                        <h2 class="wp-block-heading">Your Comments and Concerns</h2>



                        <p>General Provisions</p>



                        <p>The Terms of Service will be binding on, inure to the benefit of, and be enforceable against
                            the parties and their respective successors and assigns. Neither the course of conduct
                            between the parties nor trade practice shall act to modify any provision of the Terms of
                            Service. All rights not expressly granted herein are hereby reserved. Headings are for
                            reference purposes only and in no way define, limit, construe or describe the scope or
                            extent of such Section.</p>



                        <p>This website is operated by <?php echo $row['name']; ?>, <?php echo $row['addr']; ?>, San Antonio,
                            TX&nbsp; 78201.</p>



                        <p>All other requests for technical support and other communications relating to the Website
                            should be directed to:  <?php echo $row['phone']; ?>.</p>
                    </div>
                </div>
            </section>

        </section>
        <!-- Main Area End -->

        <!-- Footer Area Start -->
        <footer class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-top">
                            <div class="row footer-menu">

                                <div class="logo_cs">
                                    <div class="footer-logo">
                                        <a class="logo" href="../index.php" id="site-logo" title="<?php echo $row['name']; ?>"
                                            rel="home">
                                            <img width="104" height="31"
                                                src="../wp-content/uploads/2022/04/footer-logo.png"
                                                class="attachment-full size-full" alt="<?php echo $row['name']; ?>"
                                                data-skip-lazy="" loading="eager" decoding="async" /> </a>
                                    </div>

                                    <div class="footer-phone">
                                        <p>
                                            <a href="tel:8007865626"
                                                style="color:white;"><?php echo $row['phone']; ?></a>
                                        </p>
                                    </div>
                                </div>

                                <div class="sosial_cs">
                                    <div class="social-icon">
                                        <ul>
                                            <li><a target="_blank" href="https://www.facebook.com/"><img
                                                        width="27" height="27"
                                                        src="../wp-content/uploads/2022/05/5282541_fb_social_media_facebook_facebook_logo_social_network_icon.svg"
                                                        class="attachment-full size-full" alt="<?php echo $row['name']; ?>"
                                                        data-skip-lazy="" loading="eager" decoding="async" /></a></li>
                                            <li><a target="_blank" href="https://www.instagram.com "><img
                                                        width="27" height="27"
                                                        src="../wp-content/uploads/2022/05/5282544_camera_instagram_social_media_social_network_instagram_logo_icon.svg"
                                                        class="attachment-full size-full" alt="<?php echo $row['name']; ?>"
                                                        data-skip-lazy="" loading="eager" decoding="async" /></a></li>
                                            <li><a target="_blank"
                                                    href="https://www.linkedin.com"><img
                                                        width="26" height="27"
                                                        src="../wp-content/uploads/2022/05/5282542_linkedin_network_social_network_linkedin_logo_icon.svg"
                                                        class="attachment-full size-full" alt="<?php echo $row['name']; ?>"
                                                        data-skip-lazy="" loading="eager" decoding="async" /></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="widget footer-nav footer-widget-1 widget_nav_menu nav_menu-2">
                                    <h4 class="footer-nav-title">COMPANY</h4>
                                    <div class="menu-footer-column-1-container">
                                        <ul id="menu-footer-column-1" class="menu">
                                            <li id="menu-item-2993" class="menu-item"><a
                                                    href="../about/index.php">About</a></li>
                                            <li id="menu-item-2994" class="menu-item"><a
                                                    href="../careers/index.php">Careers</a></li>
                                            <li id="menu-item-2992" class="menu-item"><a
                                                    href="../contact/index.php">Contact Us</a></li>
                                            <li id="menu-item-3011" class="menu-item"><a
                                                    href="../ #"> </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget footer-nav footer-widget-2 widget_nav_menu nav_menu-3">
                                    <h4 class="footer-nav-title">LEGAL</h4>
                                    <div class="menu-footer-column-2-container">
                                        <ul id="menu-footer-column-2" class="menu">
                                            <li id="menu-item-2998" class="menu-item current-menu-item"><a
                                                    href="index.php" aria-current="page">Terms of Use</a></li>
                                            <li id="menu-item-2997" class="menu-item"><a
                                                    href="../privacy-policy/index.php">Privacy Policy</a></li>
                                            <li id="menu-item-2996" class="menu-item"><a
                                                    href="../ #"> </a>
                                            </li>
                                            <li id="menu-item-3550" class="menu-item"><a
                                                    href="../ #"> </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget footer-nav footer-widget-3 widget_nav_menu nav_menu-4">
                                    <h4 class="footer-nav-title">QUICK LINKS</h4>
                                    <div class="menu-footer-column-3-container">
                                        <ul id="menu-footer-column-3" class="menu">
                                            <li id="menu-item-2999" class="menu-item"><a
                                                    href="../loans/index.php">Loans</a></li>
                                            <li id="menu-item-3027" class="menu-item"><a href="../testimonials/index.php">Loan Payment Protection  Services</a></li>
                                             
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <hr class="footer-hr">
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-8 col-8 copyright-container">
                                <div class="copyright">
                                    <p>&copy; Copyright
                                        2024 <?php echo $row['name']; ?>. All rights reserved.   </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-4">
                                <div class="brand-logo">
                                    <img width="191" height="40" src="../wp-content/uploads/2022/04/footer-logo.png"
                                        class="attachment-full size-full" alt="<?php echo $row['name']; ?>" data-skip-lazy=""
                                        loading="eager" decoding="async" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->


        <div class="wpml-ls-statics-footer wpml-ls wpml-ls-legacy-list-horizontal">
            <ul>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                    class="menu-item dropdown nav-item wpml-ls-slot-footer wpml-ls-item wpml-ls-item-en wpml-ls-current-language wpml-ls-first-item wpml-ls-item-legacy-list-horizontal">
                    <a href="index.php" class="wpml-ls-link">
                        <img width="18" height="12" class="wpml-ls-flag"
                            src="../wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png" alt="" /><span
                            class="wpml-ls-native">EN</span></a>
                </li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                    class="menu-item dropdown nav-item wpml-ls-slot-footer wpml-ls-item wpml-ls-item-es wpml-ls-last-item wpml-ls-item-legacy-list-horizontal">
                    <a href="../es/terminos-de-uso/index.php" class="wpml-ls-link">
                        <img width="18" height="12" class="wpml-ls-flag"
                            src="../wp-content/plugins/sitepress-multilingual-cms/res/flags/es.png" alt="" /><span
                            class="wpml-ls-native" lang="es">ES</span><span class="wpml-ls-display"><span
                                class="wpml-ls-bracket"> (</span>ES<span class="wpml-ls-bracket">)</span></span></a>
                </li>
            </ul>
        </div>
        <link rel='stylesheet' id='block_hero_bar-css'
            href='../wp-content/themes/sunloan-theme/dist/css/block_specific/block-hero-bar/block-style.mind848.css?ver=1685555157'
            media='all' />
        <style id='wp-block-list-inline-css'>
        ol,
        ul {
            box-sizing: border-box
        }

        :root :where(.wp-block-list.has-background) {
            padding: 1.25em 2.375em
        }
        </style>
        <style id='wp-block-columns-inline-css'>
        .wp-block-columns {
            align-items: normal !important;
            box-sizing: border-box;
            display: flex;
            flex-wrap: wrap !important
        }

        @media (min-width:782px) {
            .wp-block-columns {
                flex-wrap: nowrap !important
            }
        }

        .wp-block-columns.are-vertically-aligned-top {
            align-items: flex-start
        }

        .wp-block-columns.are-vertically-aligned-center {
            align-items: center
        }

        .wp-block-columns.are-vertically-aligned-bottom {
            align-items: flex-end
        }

        @media (max-width:781px) {
            .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
                flex-basis: 100% !important
            }
        }

        @media (min-width:782px) {
            .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
                flex-basis: 0;
                flex-grow: 1
            }

            .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column[style*=flex-basis] {
                flex-grow: 0
            }
        }

        .wp-block-columns.is-not-stacked-on-mobile {
            flex-wrap: nowrap !important
        }

        .wp-block-columns.is-not-stacked-on-mobile>.wp-block-column {
            flex-basis: 0;
            flex-grow: 1
        }

        .wp-block-columns.is-not-stacked-on-mobile>.wp-block-column[style*=flex-basis] {
            flex-grow: 0
        }

        :where(.wp-block-columns) {
            margin-bottom: 1.75em
        }

        :where(.wp-block-columns.has-background) {
            padding: 1.25em 2.375em
        }

        .wp-block-column {
            flex-grow: 1;
            min-width: 0;
            overflow-wrap: break-word;
            word-break: break-word
        }

        .wp-block-column.is-vertically-aligned-top {
            align-self: flex-start
        }

        .wp-block-column.is-vertically-aligned-center {
            align-self: center
        }

        .wp-block-column.is-vertically-aligned-bottom {
            align-self: flex-end
        }

        .wp-block-column.is-vertically-aligned-stretch {
            align-self: stretch
        }

        .wp-block-column.is-vertically-aligned-bottom,
        .wp-block-column.is-vertically-aligned-center,
        .wp-block-column.is-vertically-aligned-top {
            width: 100%
        }
        </style>
        <style id='wp-block-group-inline-css'>
        .wp-block-group {
            box-sizing: border-box
        }

        :where(.wp-block-group.wp-block-group-is-layout-constrained) {
            position: relative
        }
        </style>
        <style id='global-styles-inline-css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #FFFFFF;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--blue: #094074;
            --wp--preset--color--alice-blue: #F0F7FF;
            --wp--preset--color--yellow: #FDB800;
            --wp--preset--color--grandis: #FFD571;
            --wp--preset--color--trinidad: #C94825;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 50px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :root {
            --wp--style--global--content-size: 1027px;
            --wp--style--global--wide-size: 1320px;
        }

        :where(body) {
            margin: 0;
        }

        .wp-site-blocks>.alignleft {
            float: left;
            margin-right: 2em;
        }

        .wp-site-blocks>.alignright {
            float: right;
            margin-left: 2em;
        }

        .wp-site-blocks>.aligncenter {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }

        :where(.wp-site-blocks)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :where(.wp-site-blocks)> :first-child {
            margin-block-start: 0;
        }

        :where(.wp-site-blocks)> :last-child {
            margin-block-end: 0;
        }

        :root {
            --wp--style--block-gap: 24px;
        }

        :root :where(.is-layout-flow)> :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-flow)> :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-flow)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained)> :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-constrained)> :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :root :where(.is-layout-flex) {
            gap: 24px;
        }

        :root :where(.is-layout-grid) {
            gap: 24px;
        }

        .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        body {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        a:where(:not(.wp-element-button)) {
            text-decoration: underline;
        }

        :root :where(.wp-element-button, .wp-block-button__link) {
            background-color: #32373c;
            border-width: 0;
            color: #fff;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            text-decoration: none;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-blue-color {
            color: var(--wp--preset--color--blue) !important;
        }

        .has-alice-blue-color {
            color: var(--wp--preset--color--alice-blue) !important;
        }

        .has-yellow-color {
            color: var(--wp--preset--color--yellow) !important;
        }

        .has-grandis-color {
            color: var(--wp--preset--color--grandis) !important;
        }

        .has-trinidad-color {
            color: var(--wp--preset--color--trinidad) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-blue-background-color {
            background-color: var(--wp--preset--color--blue) !important;
        }

        .has-alice-blue-background-color {
            background-color: var(--wp--preset--color--alice-blue) !important;
        }

        .has-yellow-background-color {
            background-color: var(--wp--preset--color--yellow) !important;
        }

        .has-grandis-background-color {
            background-color: var(--wp--preset--color--grandis) !important;
        }

        .has-trinidad-background-color {
            background-color: var(--wp--preset--color--trinidad) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-blue-border-color {
            border-color: var(--wp--preset--color--blue) !important;
        }

        .has-alice-blue-border-color {
            border-color: var(--wp--preset--color--alice-blue) !important;
        }

        .has-yellow-border-color {
            border-color: var(--wp--preset--color--yellow) !important;
        }

        .has-grandis-border-color {
            border-color: var(--wp--preset--color--grandis) !important;
        }

        .has-trinidad-border-color {
            border-color: var(--wp--preset--color--trinidad) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .has-normal-font-size {
            font-size: var(--wp--preset--font-size--normal) !important;
        }

        .has-huge-font-size {
            font-size: var(--wp--preset--font-size--huge) !important;
        }
        </style>
        <style id='core-block-supports-inline-css'>
        .wp-container-core-columns-is-layout-1 {
            flex-wrap: nowrap;
        }

        .wp-container-core-group-is-layout-1 {
            justify-content: flex-start;
        }
        </style>
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script id="gravity-ad-tracking-js-extra">
        var GATHelper = {
            "choices": ["utm_source", "utm_medium", "utm_campaign", "utm_term", "gclid", "utm_content", "fbclid",
                "MSCLKID"
            ],
            "inputsSchema": {
                "": {
                    "label": "MSCLKID",
                    "key": 7,
                    "slug": "MSCLKID"
                }
            },
            "domain": "<?php echo $row['url']; ?>",
            "dataExpiration": "15",
            "cookiesOnSubdomain": "1"
        };
        </script>
        <script async='async'
            src="../wp-content/plugins/gravity-ad-tracking/dist/js/gravity-ad-tracking-cookies.minede7.js?ver=1716465507"
            id="gravity-ad-tracking-js"></script>
        <script data-cfasync="false"
            src="../wp-content/themes/sunloan-theme/assets/js/vendor/popper-2.9.2.minab7d.js?ver=2.9.2"
            id="popper-js-js" data-rocket-defer defer></script>
        <script data-cfasync="false"
            src="../wp-content/themes/sunloan-theme/assets/js/vendor/bootstrap-5.1.0.min0e7d.js?ver=5.1.0"
            id="bootstrap-js" data-rocket-defer defer></script>
        <script src="../wp-content/themes/sunloan-theme/assets/js/vendor/select2-4.0.13.min4819.js?ver=4.0.13"
            id="select2-js" data-rocket-defer defer></script>
        <script data-minify="1"
            src="../wp-content/cache/min/1/wp-content/themes/sunloan-theme/dist/js/scripts-bundle8712.js?ver=1732739757"
            id="scripts-js" data-rocket-defer defer></script>
        <script id="gforms_recaptcha_recaptcha-js-extra">
        var gforms_recaptcha_recaptcha_strings = {
            "site_key": "6LckNjggAAAAAKtgNNfVvtOBlZsT-VAKQz8SPP_A",
            "ajaxurl": "<?php echo $row['url']; ?>/wp-admin\/admin-ajax.php",
            "nonce": "a2928c1bc6"
        };
        </script>
        <script
            src="../../www.google.com/recaptcha/api9291.js?render=6LckNjggAAAAAKtgNNfVvtOBlZsT-VAKQz8SPP_A&amp;ver=1.6.0"
            id="gforms_recaptcha_recaptcha-js"></script>
        <script id="gforms_recaptcha_recaptcha-js-after">
        (function($) {
            grecaptcha.ready(function() {
                $('.grecaptcha-badge').css('visibility', 'hidden');
            });
        })(jQuery);
        </script>
        <script src="../wp-content/themes/sunloan-theme/assets/js/vendor/nice-select-wpml.min8216.js?ver=1669908414"
            id="nice-select-js" data-rocket-defer defer></script>
        <script data-minify="1"
            src="../wp-content/cache/min/1/wp-content/themes/sunloan-theme/assets/js/Popper8712.js?ver=1732739757"
            id="popper-js" data-rocket-defer defer></script>
        <script data-minify="1"
            src="../wp-content/cache/min/1/wp-content/themes/sunloan-theme/assets/js/gravityforms-niceselect-conditional-fix8712.js?ver=1732739757"
            id="niceselectfix-js"></script>
        <script data-minify="1"
            src="../wp-content/cache/min/1/wp-content/themes/sunloan-theme/assets/js/job-script8712.js?ver=1732739757"
            id="job-script-js" data-rocket-defer defer></script>
        <script src="../wp-includes/js/dist/dom-ready.min5346.js?ver=f77871ff7694fffea381" id="wp-dom-ready-js"
            data-rocket-defer defer></script>
        <script src="../wp-includes/js/dist/hooks.min4fdd.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
        <script src="../wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
        <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        </script>
        <script src="../wp-includes/js/dist/a11y.min3f73.js?ver=3156534cc54473497e14" id="wp-a11y-js" data-rocket-defer
            defer></script>
        <script defer='defer' src="../wp-content/plugins/gravityforms/js/jquery.maskedinput.minbf47.js?ver=2.9.1"
            id="gform_masked_input-js"></script>
        <script defer='defer' src="../wp-content/plugins/gravityforms/js/placeholders.jquery.minbf47.js?ver=2.9.1"
            id="gform_placeholder-js"></script>
        <script defer='defer'
            src="../wp-content/plugins/gravityforms/assets/js/dist/vendor-theme.minf8d2.js?ver=ddd2702ee024d421149a5e61416f1ff5"
            id="gform_gravityforms_theme_vendors-js"></script>
        <script id="gform_gravityforms_theme-js-extra">
        var gform_theme_config = {
            "common": {
                "form": {
                    "honeypot": {
                        "version_hash": "82574fc9f3d4274ac72304f614e20208"
                    },
                    "ajax": {
                        "ajaxurl": "<?php echo $row['url']; ?>/wp-admin\/admin-ajax.php",
                        "ajax_submission_nonce": "40e73a0b4a",
                        "i18n": {
                            "step_announcement": "Step %1$s of %2$s, %3$s",
                            "unknown_error": "There was an unknown error processing your request. Please try again."
                        }
                    }
                }
            },
            "hmr_dev": "",
            "public_path": "<?php echo $row['url']; ?>/wp-content\/plugins\/gravityforms\/assets\/js\/dist\/",
            "config_nonce": "8b82c0230d"
        };
        </script>
        <script defer='defer'
            src="../wp-content/plugins/gravityforms/assets/js/dist/scripts-theme.minaef3.js?ver=434d0c7a9798b432de24db888073c55f"
            id="gform_gravityforms_theme-js"></script>
        <script src="../wp-content/plugins/gravityformsrecaptcha/js/frontend.minaff7.js?ver=1.6.0"
            id="gforms_recaptcha_frontend-js" data-rocket-defer defer></script>
        <script>
        window.lazyLoadOptions = {
            elements_selector: "iframe[data-lazy-src]",
            data_src: "lazy-src",
            data_srcset: "lazy-srcset",
            data_sizes: "lazy-sizes",
            class_loading: "lazyloading",
            class_loaded: "lazyloaded",
            threshold: 300,
            callback_loaded: function(element) {
                if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
                    if (element.classList.contains("lazyloaded")) {
                        if (typeof window.jQuery != "undefined") {
                            if (jQuery.fn.fitVids) {
                                jQuery(element).parent().fitVids()
                            }
                        }
                    }
                }
            }
        };
        window.addEventListener('LazyLoad::Initialized', function(e) {
            var lazyLoadInstance = e.detail.instance;
            if (window.MutationObserver) {
                var observer = new MutationObserver(function(mutations) {
                    var image_count = 0;
                    var iframe_count = 0;
                    var rocketlazy_count = 0;
                    mutations.forEach(function(mutation) {
                        for (var i = 0; i < mutation.addedNodes.length; i++) {
                            if (typeof mutation.addedNodes[i].getElementsByTagName !==
                                'function') {
                                continue
                            }
                            if (typeof mutation.addedNodes[i].getElementsByClassName !==
                                'function') {
                                continue
                            }
                            images = mutation.addedNodes[i].getElementsByTagName('img');
                            is_image = mutation.addedNodes[i].tagName == "IMG";
                            iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                            is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                            rocket_lazy = mutation.addedNodes[i].getElementsByClassName(
                                'rocket-lazyload');
                            image_count += images.length;
                            iframe_count += iframes.length;
                            rocketlazy_count += rocket_lazy.length;
                            if (is_image) {
                                image_count += 1
                            }
                            if (is_iframe) {
                                iframe_count += 1
                            }
                        }
                    });
                    if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
                        lazyLoadInstance.update()
                    }
                });
                var b = document.getElementsByTagName("body")[0];
                var config = {
                    childList: !0,
                    subtree: !0
                };
                observer.observe(b, config)
            }
        }, !1)
        </script>
        <script data-no-minify="1" async
            src="../wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script>
        <script>
  document.addEventListener("DOMContentLoaded", function () {
    // Select all links with the 'nav-link dropdown-toggle' class
    const dropdownLinks = document.querySelectorAll(".nav-link.dropdown-toggle");

    dropdownLinks.forEach(function (link) {
      link.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default link behavior

        // Find the corresponding dropdown menu next to the clicked link
        const dropdownMenu = link.nextElementSibling;

        // Close all open dropdowns first
        document.querySelectorAll(".nav-link.dropdown-toggle").forEach(function (otherLink) {
          otherLink.classList.remove("show");
          const otherDropdown = otherLink.nextElementSibling;
          if (otherDropdown && otherDropdown.classList.contains("dropdown-menu")) {
            otherDropdown.classList.remove("show");
            otherDropdown.removeAttribute("style");
            otherDropdown.removeAttribute("data-popper-placement");
          }
        });

        // Toggle 'show' class on the clicked link and its dropdown menu
        link.classList.toggle("show");

        if (dropdownMenu && dropdownMenu.classList.contains("dropdown-menu")) {
          if (dropdownMenu.classList.contains("show")) {
            // If already shown, hide it
            dropdownMenu.classList.remove("show");
            dropdownMenu.removeAttribute("style");
            dropdownMenu.removeAttribute("data-popper-placement");
          } else {
            // Show the dropdown menu
            dropdownMenu.classList.add("show");
            dropdownMenu.setAttribute("style", "position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 34px);");
            dropdownMenu.setAttribute("data-popper-placement", "bottom-start");
          }
        }
      });
    });
  });
</script>
<?php echo $row['tawk']; ?>
    </body>

    <?php } ?>


    <!-- Mirrored from <?php echo $row['url']; ?>/terms-of-use/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Dec 2024 23:47:00 GMT -->

</html>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me -->