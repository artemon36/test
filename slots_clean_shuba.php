<?php

require_once __DIR__ . '/src/helpers.php';

require_once __DIR__ . '/_nuxt/php/items.php';

$user = currentUser();
?>

<html lang="ru-ru" data-n-head="%7B%22lang%22:%7B%22ssr%22:%22ru-ru%22%7D%7D" class="dark-mode" data-theme="dark"
    m_init="2270459202410171636">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-param" content="_csrf-bork">
    <meta name="csrf-token"
        content="H8yDP_AmcDQ9Dom0rqCXqjzpdYTJO9u1dTpyUWujg0B3rc1Jk2wCAXZW4uLi7c7uaI4ssoRjjIcEVEELAO_mMg==">
    <title>Корзина - Ручная чистка шубы</title>
    <meta name="description" content="">
    <meta name="h1" content="Ваш заказ">
    <meta name="breadcrumbs" content="Корзина/Ручная чистка шубы">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:type" content="website">
    <meta name="robots" content="noyaca">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="application-name" content="MandoMemori">
    <meta name="yandex-verification" content="d3ebfaa2646b2239">
    <meta name="format-detection" content="telephone=89161829272">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#3a3330">
    <link rel="canonical" href="https://www.bork.ru/eShop/basket/">
    <meta name="msapplication-TileColor" content="#ef6f2e">
    <meta name="theme-color" content="#3a3330">
    <meta name="msapplication-navbutton-color" content="#3a3330">
    <meta name="apple-mobile-web-app-status-bar-style" content="#3a3330">
    <link rel="preload" href="//st.bork.ru/images/preloader/square2.svg" as="image">
    <script type="text/javascript" async="" defer="" src="https://api.mindbox.ru/scripts/v1/tracker.js"></script>
    <script type="text/javascript" async="" defer="" src="https://static.criteo.net/js/ld/ld.js"></script>
    <script async="" src="//cdn.rutarget.ru/static/tag/tag.js"></script>
    <script async="" src="//tags.soloway.ru/DSPCounter.min.js"></script>
    <script type="text/javascript" async="" id="topmailru-code" src="https://top-fwz1.mail.ru/js/code.js"></script>
    <script charset="UTF-8" async=""
        src="https://cloud.roistat.com/api/site/1.0/181f738ce2964285fcbdc13fd79a9ce0/init?referrer=https%3A%2F%2Fwww.bork.ru%2FeShop%2Fbasket%2F"></script>
    <script type="text/javascript" async="" id="tmr-code" src="https://top-fwz1.mail.ru/js/code.js"></script>
    <script async="" src="https://websdk.appsflyer.com?st=banners,pba&amp;"></script>
    <script async="" src="https://mc.yandex.ru/metrika/tag.js"></script>
    <script type="text/javascript" async=""
        src="https://www.googletagmanager.com/gtag/js?id=G-VSGN531FB0&amp;l=dataLayer&amp;cx=c"></script>
    <script type="text/javascript" async=""
        src="https://www.googletagmanager.com/gtag/js?id=G-P39GETZV8Y&amp;l=dataLayer&amp;cx=c"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-WKX8ZL"></script>
    <script>
        (function (w) {
            w.is_webview = false;
            const pageConfig = w.PAGE_CONFIG = w.PAGE_CONFIG || {};
            pageConfig.isProduction = true;
            pageConfig.isPurchaseUpsaleEnabled = false;
            pageConfig.isExperimentalFeaturesEnabled = true;
            pageConfig.isNewSearch = true;
            pageConfig.isMobileApp = false;
            pageConfig.isMobileAppIOS = false;
            pageConfig.isOneRetailApp = false;
            pageConfig.mobileAppVersion = null;
            pageConfig.gtmContainerId = "GTM-WKX8ZL";
            pageConfig.locale = "ru";
            pageConfig.menu = {};
            pageConfig.menu.profile = { "menu": { "groups": [{ "title": "\u0414\u043e\u043c", "elements": [{ "title": "\u0414\u043e\u043c", "description": null, "url": "\/profile\/home\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u0420\u0435\u0446\u0435\u043f\u0442\u044b \u0431\u043b\u044e\u0434", "description": null, "url": "\/recipes\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }] }, { "title": "\u0421\u0435\u0440\u0432\u0438\u0441", "elements": [{ "title": "\u0421\u0435\u0440\u0432\u0438\u0441\u043d\u044b\u0435 \u0446\u0435\u043d\u0442\u0440\u044b", "description": null, "url": "\/support\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u0421\u043b\u0443\u0436\u0431\u0430 \u0437\u0430\u0431\u043e\u0442\u044b", "description": null, "url": "\/support\/hotline\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u0417\u0430\u043f\u0447\u0430\u0441\u0442\u0438", "description": null, "url": "\/support\/parts\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u0418\u043d\u0441\u0442\u0440\u0443\u043a\u0446\u0438\u0438", "description": null, "url": "\/support\/instructions\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u0421\u0435\u0440\u0442\u0438\u0444\u0438\u043a\u0430\u0442\u044b \u0441\u043e\u043e\u0442\u0432\u0435\u0442\u0441\u0442\u0432\u0438\u044f", "description": null, "url": "\/support\/certificates\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }] }, { "title": "\u0418\u043d\u0444\u043e\u0440\u043c\u0430\u0446\u0438\u044f", "elements": [{ "title": "\u0411\u0443\u0442\u0438\u043a\u0438", "description": null, "url": "\/support\/pickup\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u041e\u0444\u0438\u0446\u0438\u0430\u043b\u044c\u043d\u044b\u0435 \u0434\u0438\u043b\u0435\u0440\u044b", "description": null, "url": "\/support\/dealers\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u041e \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0438", "description": null, "url": "\/about\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u041a\u0430\u0440\u044c\u0435\u0440\u0430 \u0432 BORK", "description": null, "url": "\/about\/career\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }, { "title": "\u041a\u043e\u043d\u0442\u0430\u043a\u0442\u044b", "description": null, "url": "\/support\/contacts\/", "logo": null, "additional": null, "linkType": null, "showInMobile": false, "internalAction": null }] }] } };
            pageConfig.isCatalogV2Enabled = true;
            pageConfig.currentCity = { "name": "\u041c\u043e\u0441\u043a\u0432\u0430", "prefix": "\u0433", "latitude": "55.755814", "longitude": "37.617635" };
        })(window);
    </script>


    <meta data-n-head="ssr" charset="utf-8">
    <meta data-n-head="ssr" name="viewport" content="width=device-width, initial-scale=1">
    <meta data-n-head="ssr" name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta data-n-head="ssr" name="google-site-verification" content="VXEoKSTw5NC5h4JqxJuqH8y_9oM941-MSdzcTGhKHHk">
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="/favicon.ico">
    <script data-n-head="ssr">
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            userCountry: "RU",
            userCity: "Москва",
            pageType: "cart",
            userID: "",
            breadCrumbs: "Корзина/Ручная чистка шубы",
            categoryId: "",
            categoryName: "",
            experiment_id: "w01;w03;w08;w05",
            variant_id: "w01_1;w03_0;w08_0;w05_2"
        });
    </script>
    <script
        data-n-head="ssr">(function (w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', 'GTM-WKX8ZL');</script>
    <link rel="preload" href="_nuxtcss/4ddc158568262aa32ef2.css" as="style">
    <link rel="preload" href="_nuxtfonts/3e057c2.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="_nuxtfonts/5494bd1.woff" as="font" type="font/woff" crossorigin="">
    <link rel="preload" href="_nuxtfonts/0a89762.ttf" as="font" type="font/ttf" crossorigin="">
    <link rel="preload" href="_nuxtfonts/961b9bb.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="_nuxtfonts/d23ec6a.woff" as="font" type="font/woff" crossorigin="">
    <link rel="preload" href="_nuxtfonts/8c6a28a.ttf" as="font" type="font/ttf" crossorigin="">
    <link rel="preload" href="_nuxtfonts/b144424.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="_nuxtfonts/5e4ee03.woff" as="font" type="font/woff" crossorigin="">
    <link rel="preload" href="_nuxtfonts/a991b62.ttf" as="font" type="font/ttf" crossorigin="">
    <link rel="preload" href="_nuxtfonts/8076a37.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="_nuxtfonts/088bf40.woff" as="font" type="font/woff" crossorigin="">
    <link rel="preload" href="_nuxtfonts/306f7cc.ttf" as="font" type="font/ttf" crossorigin="">
    <link rel="preload" href="_nuxtfonts/5cb2e83.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="_nuxtfonts/01b2833.woff" as="font" type="font/woff" crossorigin="">
    <link rel="preload" href="_nuxtfonts/ebdfae3.ttf" as="font" type="font/ttf" crossorigin="">
    <link rel="preload" href="_nuxtfonts/40eacb1.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="_nuxtfonts/1c20fc1.woff" as="font" type="font/woff" crossorigin="">
    <link rel="preload" href="_nuxtfonts/f71fd2e.ttf" as="font" type="font/ttf" crossorigin="">
    <link rel="preload" href="_nuxtfonts/e773852.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="_nuxtfonts/1f9c5c9.woff" as="font" type="font/woff" crossorigin="">
    <link rel="preload" href="_nuxtfonts/7b9cc13.ttf" as="font" type="font/ttf" crossorigin="">
    <link rel="preload" href="_nuxtfonts/530e06d.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="_nuxtfonts/09e768e.woff" as="font" type="font/woff" crossorigin="">
    <link rel="preload" href="_nuxtfonts/0d8421e.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="_nuxtfonts/b0462af.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="_nuxtfonts/eec6383.woff" as="font" type="font/woff" crossorigin="">
    <link rel="preload" href="_nuxtfonts/d59df5a.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="_nuxtfonts/0247694.woff" as="font" type="font/woff" crossorigin="">
    <link rel="preload" href="_nuxtfonts/751c19b.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="_nuxtfonts/1c5a4d4.woff" as="font" type="font/woff" crossorigin="">
    <link rel="preload" href="_nuxtfonts/6cd35ed.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="_nuxtfonts/313f7da.woff" as="font" type="font/woff" crossorigin="">
    <link rel="preload" href="_nuxtfonts/4520188.ttf" as="font" type="font/ttf" crossorigin="">
    <link rel="preload" href="_nuxtfonts/d062825.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="_nuxtfonts/543ca8a.woff" as="font" type="font/woff" crossorigin="">
    <link rel="preload" href="_nuxtfonts/ebbea77.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="_nuxtfonts/0244c6d.woff" as="font" type="font/woff" crossorigin="">
    <link rel="stylesheet" href="_nuxt/css/4ddc158568262aa32ef2.css">
    <link rel="stylesheet" href="_nuxt/css/cf374063f108112cac05.css">
    <link rel="stylesheet" href="_nuxt/css/main_structure.css">
    <style
        data-vue-ssr-id="fba676fc:0 5dffd371:0 5dffd371:1 5dffd371:2 0c85cff0:0 187b41cc:0 130d8e1f:0 f09ab4a2:0 12835226:0 5a2399b2:0 66145620:0 757b473a:0 30cb7041:0 5226c6c0:0 80328a14:0 4d1c6bfc:0 d72591b0:0 31cdfea8:0 c1f5888a:0 2d20de80:0 b55357b4:0 b1e358b4:0 e14a63e4:0 0873dabc:0 1be28328:0 9a6d5ffe:0 1d97ae0a:0 4899cd98:0 826e6752:0 0c86b186:0 53030d9e:0 110fc6e9:0">
        /*! normalize.css v5.0.0 | MIT License | github.com/necolas/normalize.css */
        html {
            font-family: sans-serif;
            line-height: 1.15;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        article,
        aside,
        footer,
        header,
        nav,
        section {
            display: block
        }

        h1 {
            margin: .67em 0;
            font-size: 2em
        }

        figcaption,
        figure,
        main {
            display: block
        }

        figure {
            margin: 1em 40px
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible
        }

        pre {
            font-size: 1em;
            font-family: monospace, monospace
        }

        a {
            background-color: transparent;
            -webkit-text-decoration-skip: objects
        }

        a:active,
        a:hover {
            outline-width: 0
        }

        abbr[title] {
            text-decoration: underline;
            text-decoration: underline dotted;
            border-bottom: none
        }

        b,
        strong {
            font-weight: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        samp {
            font-size: 1em;
            font-family: monospace, monospace
        }

        dfn {
            font-style: italic
        }

        mark {
            color: #000;
            background-color: #ff0
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline
        }

        sub {
            bottom: -0.25em
        }

        sup {
            top: -0.5em
        }

        audio,
        video {
            display: inline-block
        }

        audio:not([controls]) {
            display: none;
            height: 0
        }

        img {
            border-style: none
        }

        svg:not(:root) {
            overflow: hidden
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            margin: 0;
            font-size: 100%;
            font-family: sans-serif;
            line-height: 1.15
        }

        button,
        input {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        button,
        html [type=button],
        [type=reset],
        [type=submit] {
            -webkit-appearance: button
        }

        button::-moz-focus-inner,
        [type=button]::-moz-focus-inner,
        [type=reset]::-moz-focus-inner,
        [type=submit]::-moz-focus-inner {
            padding: 0;
            border-style: none
        }

        button:-moz-focusring,
        [type=button]:-moz-focusring,
        [type=reset]:-moz-focusring,
        [type=submit]:-moz-focusring {
            outline: 1px dotted ButtonText
        }

        fieldset {
            margin: 0 2px;
            padding: .35em .625em .75em;
            border: 1px solid silver
        }

        legend {
            display: table;
            box-sizing: border-box;
            max-width: 100%;
            padding: 0;
            color: inherit;
            white-space: normal
        }

        progress {
            display: inline-block;
            vertical-align: baseline
        }

        textarea {
            overflow: auto
        }

        [type=checkbox],
        [type=radio] {
            box-sizing: border-box;
            padding: 0
        }

        [type=number]::-webkit-inner-spin-button,
        [type=number]::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            outline-offset: -2px;
            -webkit-appearance: textfield
        }

        [type=search]::-webkit-search-cancel-button,
        [type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button
        }

        details,
        menu {
            display: block
        }

        summary {
            display: list-item
        }

        canvas {
            display: inline-block
        }

        template {
            display: none
        }

        [hidden] {
            display: none
        }

        @font-face {
            font-weight: 700;
            font-family: bork;
            font-style: normal;
            src: url(_nuxtfonts/3e057c2.woff2) format("woff2"), url(_nuxtfonts/5494bd1.woff) format("woff"), url(_nuxtfonts/0a89762.ttf) format("truetype"), url(_nuxtimg/80e320b.svg) format("svg")
        }

        @font-face {
            font-weight: 400;
            font-family: bork;
            font-style: normal;
            src: url(_nuxtfonts/961b9bb.woff2) format("woff2"), url(_nuxtfonts/d23ec6a.woff) format("woff"), url(_nuxtfonts/8c6a28a.ttf) format("truetype"), url(_nuxtimg/3c9e458.svg) format("svg")
        }

        @font-face {
            font-weight: 400;
            font-family: Akzidenz-Ext;
            font-style: normal;
            src: url(_nuxtfonts/b144424.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff"), url(_nuxtfonts/a991b62.ttf) format("truetype"), url(_nuxtimg/3c14077.svg) format("svg")
        }

        @font-face {
            font-weight: 500;
            font-family: Akzidenz;
            font-style: normal;
            src: url(_nuxtfonts/8076a37.woff2) format("woff2"), url(_nuxtfonts/088bf40.woff) format("woff"), url(_nuxtfonts/306f7cc.ttf) format("truetype"), url(_nuxtimg/3ba81b5.svg) format("svg")
        }

        @font-face {
            font-weight: 400;
            font-family: Akzidenz;
            font-style: normal;
            src: url(_nuxtfonts/5cb2e83.woff2) format("woff2"), url(_nuxtfonts/01b2833.woff) format("woff"), url(_nuxtfonts/ebdfae3.ttf) format("truetype"), url(_nuxtimg/0a4b2f3.svg) format("svg")
        }

        @font-face {
            font-weight: 300;
            font-family: Akzidenz;
            font-style: normal;
            src: url(_nuxtfonts/40eacb1.woff2) format("woff2"), url(_nuxtfonts/1c20fc1.woff) format("woff"), url(_nuxtfonts/f71fd2e.ttf) format("truetype"), url(_nuxtimg/de02af0.svg) format("svg")
        }

        @font-face {
            font-weight: 400;
            font-family: ALSRubl;
            font-style: normal;
            src: url(_nuxtfonts/e773852.woff2) format("woff2"), url(_nuxtfonts/1f9c5c9.woff) format("woff"), url(_nuxtfonts/7b9cc13.ttf) format("truetype"), url(_nuxtimg/9ee5f06.svg) format("svg")
        }

        .overflow-hidden {
            overflow: hidden
        }

        html,
        body {
            position: relative;
            box-sizing: border-box;
            width: 100%;
            min-width: var(--min-width);
            margin: 0;
            color: var(--body-font-title-color);
            font-family: var(--mando-beta);
            background-color: var(--body-bg-color)
        }

        html.open-modal,
        body.open-modal {
            z-index: 0;
            overflow-y: hidden !important
        }

        html.open-modal--fixed,
        body.open-modal--fixed {
            position: fixed;
            -ms-scroll-chaining: none;
            overscroll-behavior: none
        }

        [class*=__label],
        [class*=field-group],
        [class~=subscribe__form-inner] {
            border-radius: var(--border-radius-fields)
        }

        [class*=__label] select+label::before,
        [class*=__label] textarea+label::before,
        [class*=__label] input[type=text]+label::before,
        [class*=__label] input[type=email]+label::before,
        [class*=__label] input[type=password]+label::before,
        [class*=__label] input[type=tel]+label::before,
        [class*=__label] input[type=number]+label::before,
        [class*=field-group] select+label::before,
        [class*=field-group] textarea+label::before,
        [class*=field-group] input[type=text]+label::before,
        [class*=field-group] input[type=email]+label::before,
        [class*=field-group] input[type=password]+label::before,
        [class*=field-group] input[type=tel]+label::before,
        [class*=field-group] input[type=number]+label::before,
        [class~=subscribe__form-inner] select+label::before,
        [class~=subscribe__form-inner] textarea+label::before,
        [class~=subscribe__form-inner] input[type=text]+label::before,
        [class~=subscribe__form-inner] input[type=email]+label::before,
        [class~=subscribe__form-inner] input[type=password]+label::before,
        [class~=subscribe__form-inner] input[type=tel]+label::before,
        [class~=subscribe__form-inner] input[type=number]+label::before {
            display: none !important
        }

        [class*=__label] select+label::after,
        [class*=__label] textarea+label::after,
        [class*=__label] input[type=text]+label::after,
        [class*=__label] input[type=email]+label::after,
        [class*=__label] input[type=password]+label::after,
        [class*=__label] input[type=tel]+label::after,
        [class*=__label] input[type=number]+label::after,
        [class*=field-group] select+label::after,
        [class*=field-group] textarea+label::after,
        [class*=field-group] input[type=text]+label::after,
        [class*=field-group] input[type=email]+label::after,
        [class*=field-group] input[type=password]+label::after,
        [class*=field-group] input[type=tel]+label::after,
        [class*=field-group] input[type=number]+label::after,
        [class~=subscribe__form-inner] select+label::after,
        [class~=subscribe__form-inner] textarea+label::after,
        [class~=subscribe__form-inner] input[type=text]+label::after,
        [class~=subscribe__form-inner] input[type=email]+label::after,
        [class~=subscribe__form-inner] input[type=password]+label::after,
        [class~=subscribe__form-inner] input[type=tel]+label::after,
        [class~=subscribe__form-inner] input[type=number]+label::after {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 50px;
            background-image: url(data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAICAgICAgICAgIDAgICAwQDAgIDBAUEBAQEBAUGBQUFBQUFBgYHBwgHBwYJCQoKCQkMDAwMDAwMDAwMDAwMDAz/2wBDAQMDAwUEBQkGBgkNCwkLDQ8ODg4ODw8MDAwMDA8PDAwMDAwMDwwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAz/wgARCAACAAEDAREAAhEBAxEB/8QAFAABAAAAAAAAAAAAAAAAAAAABv/EABQBAQAAAAAAAAAAAAAAAAAAAAf/2gAMAwEAAhADEAAAAUhYz//EABQQAQAAAAAAAAAAAAAAAAAAAAD/2gAIAQEAAQUCf//EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAIAQMBAT8Bf//EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAIAQIBAT8Bf//EABQQAQAAAAAAAAAAAAAAAAAAAAD/2gAIAQEABj8Cf//EABQQAQAAAAAAAAAAAAAAAAAAAAD/2gAIAQEAAT8hf//aAAwDAQACAAMAAAAQP//EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAIAQMBAT8Qf//EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAIAQIBAT8Qf//EABQQAQAAAAAAAAAAAAAAAAAAAAD/2gAIAQEAAT8Qf//Z);
            background-repeat: repeat-x;
            background-position: bottom center;
            border-radius: var(--border-radius-fields);
            transition: width .3s ease-out;
            content: "";
            pointer-events: none
        }

        @media(max-width: 767px) {

            [class*=__label] select+label::after,
            [class*=__label] textarea+label::after,
            [class*=__label] input[type=text]+label::after,
            [class*=__label] input[type=email]+label::after,
            [class*=__label] input[type=password]+label::after,
            [class*=__label] input[type=tel]+label::after,
            [class*=__label] input[type=number]+label::after,
            [class*=field-group] select+label::after,
            [class*=field-group] textarea+label::after,
            [class*=field-group] input[type=text]+label::after,
            [class*=field-group] input[type=email]+label::after,
            [class*=field-group] input[type=password]+label::after,
            [class*=field-group] input[type=tel]+label::after,
            [class*=field-group] input[type=number]+label::after,
            [class~=subscribe__form-inner] select+label::after,
            [class~=subscribe__form-inner] textarea+label::after,
            [class~=subscribe__form-inner] input[type=text]+label::after,
            [class~=subscribe__form-inner] input[type=email]+label::after,
            [class~=subscribe__form-inner] input[type=password]+label::after,
            [class~=subscribe__form-inner] input[type=tel]+label::after,
            [class~=subscribe__form-inner] input[type=number]+label::after {
                height: 40px
            }
        }

        [class*=__label] select:focus+label::after,
        [class*=__label] select:active+label::after,
        [class*=__label] textarea:focus+label::after,
        [class*=__label] textarea:active+label::after,
        [class*=__label] input[type=text]:focus+label::after,
        [class*=__label] input[type=text]:active+label::after,
        [class*=__label] input[type=email]:focus+label::after,
        [class*=__label] input[type=email]:active+label::after,
        [class*=__label] input[type=password]:focus+label::after,
        [class*=__label] input[type=password]:active+label::after,
        [class*=__label] input[type=tel]:focus+label::after,
        [class*=__label] input[type=tel]:active+label::after,
        [class*=__label] input[type=number]:focus+label::after,
        [class*=__label] input[type=number]:active+label::after,
        [class*=field-group] select:focus+label::after,
        [class*=field-group] select:active+label::after,
        [class*=field-group] textarea:focus+label::after,
        [class*=field-group] textarea:active+label::after,
        [class*=field-group] input[type=text]:focus+label::after,
        [class*=field-group] input[type=text]:active+label::after,
        [class*=field-group] input[type=email]:focus+label::after,
        [class*=field-group] input[type=email]:active+label::after,
        [class*=field-group] input[type=password]:focus+label::after,
        [class*=field-group] input[type=password]:active+label::after,
        [class*=field-group] input[type=tel]:focus+label::after,
        [class*=field-group] input[type=tel]:active+label::after,
        [class*=field-group] input[type=number]:focus+label::after,
        [class*=field-group] input[type=number]:active+label::after,
        [class~=subscribe__form-inner] select:focus+label::after,
        [class~=subscribe__form-inner] select:active+label::after,
        [class~=subscribe__form-inner] textarea:focus+label::after,
        [class~=subscribe__form-inner] textarea:active+label::after,
        [class~=subscribe__form-inner] input[type=text]:focus+label::after,
        [class~=subscribe__form-inner] input[type=text]:active+label::after,
        [class~=subscribe__form-inner] input[type=email]:focus+label::after,
        [class~=subscribe__form-inner] input[type=email]:active+label::after,
        [class~=subscribe__form-inner] input[type=password]:focus+label::after,
        [class~=subscribe__form-inner] input[type=password]:active+label::after,
        [class~=subscribe__form-inner] input[type=tel]:focus+label::after,
        [class~=subscribe__form-inner] input[type=tel]:active+label::after,
        [class~=subscribe__form-inner] input[type=number]:focus+label::after,
        [class~=subscribe__form-inner] input[type=number]:active+label::after {
            width: 100%
        }

        [class*=__label] select[disabled]+label::after,
        [class*=__label] select[readonly]+label::after,
        [class*=__label] textarea[disabled]+label::after,
        [class*=__label] textarea[readonly]+label::after,
        [class*=__label] input[type=text][disabled]+label::after,
        [class*=__label] input[type=text][readonly]+label::after,
        [class*=__label] input[type=email][disabled]+label::after,
        [class*=__label] input[type=email][readonly]+label::after,
        [class*=__label] input[type=password][disabled]+label::after,
        [class*=__label] input[type=password][readonly]+label::after,
        [class*=__label] input[type=tel][disabled]+label::after,
        [class*=__label] input[type=tel][readonly]+label::after,
        [class*=__label] input[type=number][disabled]+label::after,
        [class*=__label] input[type=number][readonly]+label::after,
        [class*=field-group] select[disabled]+label::after,
        [class*=field-group] select[readonly]+label::after,
        [class*=field-group] textarea[disabled]+label::after,
        [class*=field-group] textarea[readonly]+label::after,
        [class*=field-group] input[type=text][disabled]+label::after,
        [class*=field-group] input[type=text][readonly]+label::after,
        [class*=field-group] input[type=email][disabled]+label::after,
        [class*=field-group] input[type=email][readonly]+label::after,
        [class*=field-group] input[type=password][disabled]+label::after,
        [class*=field-group] input[type=password][readonly]+label::after,
        [class*=field-group] input[type=tel][disabled]+label::after,
        [class*=field-group] input[type=tel][readonly]+label::after,
        [class*=field-group] input[type=number][disabled]+label::after,
        [class*=field-group] input[type=number][readonly]+label::after,
        [class~=subscribe__form-inner] select[disabled]+label::after,
        [class~=subscribe__form-inner] select[readonly]+label::after,
        [class~=subscribe__form-inner] textarea[disabled]+label::after,
        [class~=subscribe__form-inner] textarea[readonly]+label::after,
        [class~=subscribe__form-inner] input[type=text][disabled]+label::after,
        [class~=subscribe__form-inner] input[type=text][readonly]+label::after,
        [class~=subscribe__form-inner] input[type=email][disabled]+label::after,
        [class~=subscribe__form-inner] input[type=email][readonly]+label::after,
        [class~=subscribe__form-inner] input[type=password][disabled]+label::after,
        [class~=subscribe__form-inner] input[type=password][readonly]+label::after,
        [class~=subscribe__form-inner] input[type=tel][disabled]+label::after,
        [class~=subscribe__form-inner] input[type=tel][readonly]+label::after,
        [class~=subscribe__form-inner] input[type=number][disabled]+label::after,
        [class~=subscribe__form-inner] input[type=number][readonly]+label::after {
            display: none !important
        }

        [class*=__label][class~=active],
        [class*=field-group][class~=active],
        [class~=subscribe__form-inner][class~=active] {
            overflow: visible
        }

        [class*=field-delivery-delivery_date],
        [class*=field-delivery-delivery_time] {
            overflow: visible
        }

        input[type=text],
        input[type=email],
        input[type=password],
        input[type=tel],
        input[type=number] {
            border-radius: var(--border-radius-fields)
        }

        textarea {
            border-radius: var(--border-radius-fields)
        }

        [class*=symbol-rub] {
            display: inline-block;
            vertical-align: baseline
        }

        @-webkit-keyframes preloader {
            0% {
                transform: rotateX(0) rotateY(0)
            }

            25% {
                transform: rotateX(180deg) rotateY(0)
            }

            50% {
                transform: rotateX(180deg) rotateY(180deg)
            }

            75% {
                transform: rotateX(360deg) rotateY(180deg)
            }

            100% {
                transform: rotateX(360deg) rotateY(360deg)
            }
        }

        @keyframes preloader {
            0% {
                transform: rotateX(0) rotateY(0)
            }

            25% {
                transform: rotateX(180deg) rotateY(0)
            }

            50% {
                transform: rotateX(180deg) rotateY(180deg)
            }

            75% {
                transform: rotateX(360deg) rotateY(180deg)
            }

            100% {
                transform: rotateX(360deg) rotateY(360deg)
            }
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
            -webkit-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%
        }

        html:not([class~=loaded]) {
            height: 100%
        }

        body {
            height: 100%;
            position: relative;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        body[class~=ios] {
            cursor: pointer
        }

        template {
            display: initial
        }

        figure {
            margin: 0
        }

        a {
            text-decoration: none;
            outline: 0
        }

        p,
        h1,
        h2,
        h3,
        h4 {
            margin: 0
        }

        img {
            vertical-align: top;
            image-rendering: -webkit-optimize-contrast;
            image-rendering: crisp-edges;
            -ms-interpolation-mode: nearest-neighbor
        }

        button {
            display: block;
            padding: 0;
            background-color: transparent;
            border: 0;
            border-radius: 0;
            outline: 0;
            box-shadow: none;
            cursor: pointer
        }

        input {
            display: block;
            background-color: transparent;
            border: 0;
            outline: 0;
            box-shadow: none
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            margin: 0;
            -webkit-appearance: none
        }

        input[type=number] {
            -moz-appearance: textfield
        }

        .root {
            position: relative;
            height: 100%
        }

        [class~=preload] *:not([class~=intro-slider__animate]):not([class~=owl-stage]):not([class~=intro-slider__template-img]):not([class~=force-animate]):not(img) {
            transition: none !important
        }

        .page-content {
            position: relative;
            height: auto
        }

        [data-hash] {
            display: none
        }

        a[href^="tel:"] {
            color: inherit;
            white-space: nowrap
        }

        @media(max-width: 767px) {
            a[href^="tel:"] {
                color: var(--orange)
            }

            a[href^="tel:"][class] {
                color: inherit
            }

            a[href^="tel:"]:hover {
                color: var(--dark-orange)
            }
        }

        [class$=price]:empty,
        [class~=currency]:empty {
            display: none
        }

        input::-ms-clear {
            display: none
        }

        [class~=owl-carousel] [class~=owl-stage-outer] {
            position: relative;
            z-index: 1;
            width: 100%;
            overflow: hidden
        }

        [class~=owl-item] {
            transform: translateZ(0)
        }

        [class~=model-prefix] {
            padding-right: 3px
        }

        [class~=lazyload] {
            opacity: 0
        }

        [class~=lazyloading] {
            opacity: 0
        }

        [class~=lazyloaded] {
            opacity: 1
        }

        body[class~=no-object-fit] [class~=object-fit-container] {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover
        }

        body[class~=no-object-fit] [class~=object-fit-container][class~=object-fit-container--contain] {
            background-size: contain
        }

        body[class~=no-object-fit] [class~=object-fit-container] img {
            display: none
        }

        @media(min-width: 980px) {
            [class~=lg-hidden] {
                display: none
            }
        }

        @media(max-width: 979px)and (min-width: 768px) {
            [class~=md-hidden] {
                display: none
            }
        }

        @media(max-width: 767px) {
            [class~=xs-hidden] {
                display: none
            }
        }

        [class~=js-hidden] {
            display: none !important
        }

        [src*="pixel.gif"] {
            display: none
        }

        a.active-link {
            color: var(--orange)
        }

        a.active-link:hover {
            color: var(--dark-orange)
        }

        [class~=grecaptcha-badge] {
            display: none !important
        }

        .catalog-v2-wrapper {
            min-height: 1000px
        }

        @media(min-width: 320px)and (max-width: 375px) {
            .catalog-v2-wrapper {
                padding-left: 16px;
                padding-right: 16px
            }
        }

        @media(max-width: 767px) {
            .catalog-v2-wrapper {
                min-height: 800px
            }
        }

        .el-fade-in-enter,
        .el-fade-in-leave-active,
        .el-fade-in-linear-enter,
        .el-fade-in-linear-leave,
        .el-fade-in-linear-leave-active,
        .fade-in-linear-enter,
        .fade-in-linear-leave,
        .fade-in-linear-leave-active {
            opacity: 0
        }

        .fade-in-linear-enter-active,
        .fade-in-linear-leave-active {
            -webkit-transition: opacity .2s linear;
            transition: opacity .2s linear
        }

        .el-fade-in-linear-enter-active,
        .el-fade-in-linear-leave-active {
            -webkit-transition: opacity .2s linear;
            transition: opacity .2s linear
        }

        .el-fade-in-enter-active,
        .el-fade-in-leave-active {
            -webkit-transition: all .3s cubic-bezier(.55, 0, .1, 1);
            transition: all .3s cubic-bezier(.55, 0, .1, 1)
        }

        .el-zoom-in-center-enter-active,
        .el-zoom-in-center-leave-active {
            -webkit-transition: all .3s cubic-bezier(.55, 0, .1, 1);
            transition: all .3s cubic-bezier(.55, 0, .1, 1)
        }

        .el-zoom-in-center-enter,
        .el-zoom-in-center-leave-active {
            opacity: 0;
            -webkit-transform: scaleX(0);
            transform: scaleX(0)
        }

        .el-zoom-in-top-enter-active,
        .el-zoom-in-top-leave-active {
            opacity: 1;
            -webkit-transform: scaleY(1);
            transform: scaleY(1);
            -webkit-transition: opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            transition: opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            transition: transform .3s cubic-bezier(.23, 1, .32, 1), opacity .3s cubic-bezier(.23, 1, .32, 1);
            transition: transform .3s cubic-bezier(.23, 1, .32, 1), opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            -webkit-transform-origin: center top;
            transform-origin: center top
        }

        .el-zoom-in-top-enter,
        .el-zoom-in-top-leave-active {
            opacity: 0;
            -webkit-transform: scaleY(0);
            transform: scaleY(0)
        }

        .el-zoom-in-bottom-enter-active,
        .el-zoom-in-bottom-leave-active {
            opacity: 1;
            -webkit-transform: scaleY(1);
            transform: scaleY(1);
            -webkit-transition: opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            transition: opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            transition: transform .3s cubic-bezier(.23, 1, .32, 1), opacity .3s cubic-bezier(.23, 1, .32, 1);
            transition: transform .3s cubic-bezier(.23, 1, .32, 1), opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom
        }

        .el-zoom-in-bottom-enter,
        .el-zoom-in-bottom-leave-active {
            opacity: 0;
            -webkit-transform: scaleY(0);
            transform: scaleY(0)
        }

        .el-zoom-in-left-enter-active,
        .el-zoom-in-left-leave-active {
            opacity: 1;
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            -webkit-transition: opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            transition: opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            transition: transform .3s cubic-bezier(.23, 1, .32, 1), opacity .3s cubic-bezier(.23, 1, .32, 1);
            transition: transform .3s cubic-bezier(.23, 1, .32, 1), opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            -webkit-transform-origin: top left;
            transform-origin: top left
        }

        .el-zoom-in-left-enter,
        .el-zoom-in-left-leave-active {
            opacity: 0;
            -webkit-transform: scale(.45, .45);
            transform: scale(.45, .45)
        }

        .collapse-transition {
            -webkit-transition: .3s height ease-in-out, .3s padding-top ease-in-out, .3s padding-bottom ease-in-out;
            transition: .3s height ease-in-out, .3s padding-top ease-in-out, .3s padding-bottom ease-in-out
        }

        .horizontal-collapse-transition {
            -webkit-transition: .3s width ease-in-out, .3s padding-left ease-in-out, .3s padding-right ease-in-out;
            transition: .3s width ease-in-out, .3s padding-left ease-in-out, .3s padding-right ease-in-out
        }

        .el-list-enter-active,
        .el-list-leave-active {
            -webkit-transition: all 1s;
            transition: all 1s
        }

        .el-list-enter,
        .el-list-leave-active {
            opacity: 0;
            -webkit-transform: translateY(-30px);
            transform: translateY(-30px)
        }

        .el-opacity-transition {
            -webkit-transition: opacity .3s cubic-bezier(.55, 0, .1, 1);
            transition: opacity .3s cubic-bezier(.55, 0, .1, 1)
        }

        @font-face {
            font-family: element-icons;
            src: url(_nuxtfonts/313f7da.woff) format("woff"), url(_nuxtfonts/4520188.ttf) format("truetype");
            font-weight: 400;
            font-display: "auto";
            font-style: normal
        }

        [class*=" el-icon-"],
        [class^=el-icon-] {
            font-family: element-icons !important;
            speak: none;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            vertical-align: baseline;
            display: inline-block;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .el-icon-ice-cream-round:before {
            content: "\e6a0"
        }

        .el-icon-ice-cream-square:before {
            content: "\e6a3"
        }

        .el-icon-lollipop:before {
            content: "\e6a4"
        }

        .el-icon-potato-strips:before {
            content: "\e6a5"
        }

        .el-icon-milk-tea:before {
            content: "\e6a6"
        }

        .el-icon-ice-drink:before {
            content: "\e6a7"
        }

        .el-icon-ice-tea:before {
            content: "\e6a9"
        }

        .el-icon-coffee:before {
            content: "\e6aa"
        }

        .el-icon-orange:before {
            content: "\e6ab"
        }

        .el-icon-pear:before {
            content: "\e6ac"
        }

        .el-icon-apple:before {
            content: "\e6ad"
        }

        .el-icon-cherry:before {
            content: "\e6ae"
        }

        .el-icon-watermelon:before {
            content: "\e6af"
        }

        .el-icon-grape:before {
            content: "\e6b0"
        }

        .el-icon-refrigerator:before {
            content: "\e6b1"
        }

        .el-icon-goblet-square-full:before {
            content: "\e6b2"
        }

        .el-icon-goblet-square:before {
            content: "\e6b3"
        }

        .el-icon-goblet-full:before {
            content: "\e6b4"
        }

        .el-icon-goblet:before {
            content: "\e6b5"
        }

        .el-icon-cold-drink:before {
            content: "\e6b6"
        }

        .el-icon-coffee-cup:before {
            content: "\e6b8"
        }

        .el-icon-water-cup:before {
            content: "\e6b9"
        }

        .el-icon-hot-water:before {
            content: "\e6ba"
        }

        .el-icon-ice-cream:before {
            content: "\e6bb"
        }

        .el-icon-dessert:before {
            content: "\e6bc"
        }

        .el-icon-sugar:before {
            content: "\e6bd"
        }

        .el-icon-tableware:before {
            content: "\e6be"
        }

        .el-icon-burger:before {
            content: "\e6bf"
        }

        .el-icon-knife-fork:before {
            content: "\e6c1"
        }

        .el-icon-fork-spoon:before {
            content: "\e6c2"
        }

        .el-icon-chicken:before {
            content: "\e6c3"
        }

        .el-icon-food:before {
            content: "\e6c4"
        }

        .el-icon-dish-1:before {
            content: "\e6c5"
        }

        .el-icon-dish:before {
            content: "\e6c6"
        }

        .el-icon-moon-night:before {
            content: "\e6ee"
        }

        .el-icon-moon:before {
            content: "\e6f0"
        }

        .el-icon-cloudy-and-sunny:before {
            content: "\e6f1"
        }

        .el-icon-partly-cloudy:before {
            content: "\e6f2"
        }

        .el-icon-cloudy:before {
            content: "\e6f3"
        }

        .el-icon-sunny:before {
            content: "\e6f6"
        }

        .el-icon-sunset:before {
            content: "\e6f7"
        }

        .el-icon-sunrise-1:before {
            content: "\e6f8"
        }

        .el-icon-sunrise:before {
            content: "\e6f9"
        }

        .el-icon-heavy-rain:before {
            content: "\e6fa"
        }

        .el-icon-lightning:before {
            content: "\e6fb"
        }

        .el-icon-light-rain:before {
            content: "\e6fc"
        }

        .el-icon-wind-power:before {
            content: "\e6fd"
        }

        .el-icon-baseball:before {
            content: "\e712"
        }

        .el-icon-soccer:before {
            content: "\e713"
        }

        .el-icon-football:before {
            content: "\e715"
        }

        .el-icon-basketball:before {
            content: "\e716"
        }

        .el-icon-ship:before {
            content: "\e73f"
        }

        .el-icon-truck:before {
            content: "\e740"
        }

        .el-icon-bicycle:before {
            content: "\e741"
        }

        .el-icon-mobile-phone:before {
            content: "\e6d3"
        }

        .el-icon-service:before {
            content: "\e6d4"
        }

        .el-icon-key:before {
            content: "\e6e2"
        }

        .el-icon-unlock:before {
            content: "\e6e4"
        }

        .el-icon-lock:before {
            content: "\e6e5"
        }

        .el-icon-watch:before {
            content: "\e6fe"
        }

        .el-icon-watch-1:before {
            content: "\e6ff"
        }

        .el-icon-timer:before {
            content: "\e702"
        }

        .el-icon-alarm-clock:before {
            content: "\e703"
        }

        .el-icon-map-location:before {
            content: "\e704"
        }

        .el-icon-delete-location:before {
            content: "\e705"
        }

        .el-icon-add-location:before {
            content: "\e706"
        }

        .el-icon-location-information:before {
            content: "\e707"
        }

        .el-icon-location-outline:before {
            content: "\e708"
        }

        .el-icon-location:before {
            content: "\e79e"
        }

        .el-icon-place:before {
            content: "\e709"
        }

        .el-icon-discover:before {
            content: "\e70a"
        }

        .el-icon-first-aid-kit:before {
            content: "\e70b"
        }

        .el-icon-trophy-1:before {
            content: "\e70c"
        }

        .el-icon-trophy:before {
            content: "\e70d"
        }

        .el-icon-medal:before {
            content: "\e70e"
        }

        .el-icon-medal-1:before {
            content: "\e70f"
        }

        .el-icon-stopwatch:before {
            content: "\e710"
        }

        .el-icon-mic:before {
            content: "\e711"
        }

        .el-icon-copy-document:before {
            content: "\e718"
        }

        .el-icon-full-screen:before {
            content: "\e719"
        }

        .el-icon-switch-button:before {
            content: "\e71b"
        }

        .el-icon-aim:before {
            content: "\e71c"
        }

        .el-icon-crop:before {
            content: "\e71d"
        }

        .el-icon-odometer:before {
            content: "\e71e"
        }

        .el-icon-time:before {
            content: "\e71f"
        }

        .el-icon-bangzhu:before {
            content: "\e724"
        }

        .el-icon-close-notification:before {
            content: "\e726"
        }

        .el-icon-microphone:before {
            content: "\e727"
        }

        .el-icon-turn-off-microphone:before {
            content: "\e728"
        }

        .el-icon-position:before {
            content: "\e729"
        }

        .el-icon-postcard:before {
            content: "\e72a"
        }

        .el-icon-message:before {
            content: "\e72b"
        }

        .el-icon-chat-line-square:before {
            content: "\e72d"
        }

        .el-icon-chat-dot-square:before {
            content: "\e72e"
        }

        .el-icon-chat-dot-round:before {
            content: "\e72f"
        }

        .el-icon-chat-square:before {
            content: "\e730"
        }

        .el-icon-chat-line-round:before {
            content: "\e731"
        }

        .el-icon-chat-round:before {
            content: "\e732"
        }

        .el-icon-set-up:before {
            content: "\e733"
        }

        .el-icon-turn-off:before {
            content: "\e734"
        }

        .el-icon-open:before {
            content: "\e735"
        }

        .el-icon-connection:before {
            content: "\e736"
        }

        .el-icon-link:before {
            content: "\e737"
        }

        .el-icon-cpu:before {
            content: "\e738"
        }

        .el-icon-thumb:before {
            content: "\e739"
        }

        .el-icon-female:before {
            content: "\e73a"
        }

        .el-icon-male:before {
            content: "\e73b"
        }

        .el-icon-guide:before {
            content: "\e73c"
        }

        .el-icon-news:before {
            content: "\e73e"
        }

        .el-icon-price-tag:before {
            content: "\e744"
        }

        .el-icon-discount:before {
            content: "\e745"
        }

        .el-icon-wallet:before {
            content: "\e747"
        }

        .el-icon-coin:before {
            content: "\e748"
        }

        .el-icon-money:before {
            content: "\e749"
        }

        .el-icon-bank-card:before {
            content: "\e74a"
        }

        .el-icon-box:before {
            content: "\e74b"
        }

        .el-icon-present:before {
            content: "\e74c"
        }

        .el-icon-sell:before {
            content: "\e6d5"
        }

        .el-icon-sold-out:before {
            content: "\e6d6"
        }

        .el-icon-shopping-bag-2:before {
            content: "\e74d"
        }

        .el-icon-shopping-bag-1:before {
            content: "\e74e"
        }

        .el-icon-shopping-cart-2:before {
            content: "\e74f"
        }

        .el-icon-shopping-cart-1:before {
            content: "\e750"
        }

        .el-icon-shopping-cart-full:before {
            content: "\e751"
        }

        .el-icon-smoking:before {
            content: "\e752"
        }

        .el-icon-no-smoking:before {
            content: "\e753"
        }

        .el-icon-house:before {
            content: "\e754"
        }

        .el-icon-table-lamp:before {
            content: "\e755"
        }

        .el-icon-school:before {
            content: "\e756"
        }

        .el-icon-office-building:before {
            content: "\e757"
        }

        .el-icon-toilet-paper:before {
            content: "\e758"
        }

        .el-icon-notebook-2:before {
            content: "\e759"
        }

        .el-icon-notebook-1:before {
            content: "\e75a"
        }

        .el-icon-files:before {
            content: "\e75b"
        }

        .el-icon-collection:before {
            content: "\e75c"
        }

        .el-icon-receiving:before {
            content: "\e75d"
        }

        .el-icon-suitcase-1:before {
            content: "\e760"
        }

        .el-icon-suitcase:before {
            content: "\e761"
        }

        .el-icon-film:before {
            content: "\e763"
        }

        .el-icon-collection-tag:before {
            content: "\e765"
        }

        .el-icon-data-analysis:before {
            content: "\e766"
        }

        .el-icon-pie-chart:before {
            content: "\e767"
        }

        .el-icon-data-board:before {
            content: "\e768"
        }

        .el-icon-data-line:before {
            content: "\e76d"
        }

        .el-icon-reading:before {
            content: "\e769"
        }

        .el-icon-magic-stick:before {
            content: "\e76a"
        }

        .el-icon-coordinate:before {
            content: "\e76b"
        }

        .el-icon-mouse:before {
            content: "\e76c"
        }

        .el-icon-brush:before {
            content: "\e76e"
        }

        .el-icon-headset:before {
            content: "\e76f"
        }

        .el-icon-umbrella:before {
            content: "\e770"
        }

        .el-icon-scissors:before {
            content: "\e771"
        }

        .el-icon-mobile:before {
            content: "\e773"
        }

        .el-icon-attract:before {
            content: "\e774"
        }

        .el-icon-monitor:before {
            content: "\e775"
        }

        .el-icon-search:before {
            content: "\e778"
        }

        .el-icon-takeaway-box:before {
            content: "\e77a"
        }

        .el-icon-paperclip:before {
            content: "\e77d"
        }

        .el-icon-printer:before {
            content: "\e77e"
        }

        .el-icon-document-add:before {
            content: "\e782"
        }

        .el-icon-document:before {
            content: "\e785"
        }

        .el-icon-document-checked:before {
            content: "\e786"
        }

        .el-icon-document-copy:before {
            content: "\e787"
        }

        .el-icon-document-delete:before {
            content: "\e788"
        }

        .el-icon-document-remove:before {
            content: "\e789"
        }

        .el-icon-tickets:before {
            content: "\e78b"
        }

        .el-icon-folder-checked:before {
            content: "\e77f"
        }

        .el-icon-folder-delete:before {
            content: "\e780"
        }

        .el-icon-folder-remove:before {
            content: "\e781"
        }

        .el-icon-folder-add:before {
            content: "\e783"
        }

        .el-icon-folder-opened:before {
            content: "\e784"
        }

        .el-icon-folder:before {
            content: "\e78a"
        }

        .el-icon-edit-outline:before {
            content: "\e764"
        }

        .el-icon-edit:before {
            content: "\e78c"
        }

        .el-icon-date:before {
            content: "\e78e"
        }

        .el-icon-c-scale-to-original:before {
            content: "\e7c6"
        }

        .el-icon-view:before {
            content: "\e6ce"
        }

        .el-icon-loading:before {
            content: "\e6cf"
        }

        .el-icon-rank:before {
            content: "\e6d1"
        }

        .el-icon-sort-down:before {
            content: "\e7c4"
        }

        .el-icon-sort-up:before {
            content: "\e7c5"
        }

        .el-icon-sort:before {
            content: "\e6d2"
        }

        .el-icon-finished:before {
            content: "\e6cd"
        }

        .el-icon-refresh-left:before {
            content: "\e6c7"
        }

        .el-icon-refresh-right:before {
            content: "\e6c8"
        }

        .el-icon-refresh:before {
            content: "\e6d0"
        }

        .el-icon-video-play:before {
            content: "\e7c0"
        }

        .el-icon-video-pause:before {
            content: "\e7c1"
        }

        .el-icon-d-arrow-right:before {
            content: "\e6dc"
        }

        .el-icon-d-arrow-left:before {
            content: "\e6dd"
        }

        .el-icon-arrow-up:before {
            content: "\e6e1"
        }

        .el-icon-arrow-down:before {
            content: "\e6df"
        }

        .el-icon-arrow-right:before {
            content: "\e6e0"
        }

        .el-icon-arrow-left:before {
            content: "\e6de"
        }

        .el-icon-top-right:before {
            content: "\e6e7"
        }

        .el-icon-top-left:before {
            content: "\e6e8"
        }

        .el-icon-top:before {
            content: "\e6e6"
        }

        .el-icon-bottom:before {
            content: "\e6eb"
        }

        .el-icon-right:before {
            content: "\e6e9"
        }

        .el-icon-back:before {
            content: "\e6ea"
        }

        .el-icon-bottom-right:before {
            content: "\e6ec"
        }

        .el-icon-bottom-left:before {
            content: "\e6ed"
        }

        .el-icon-caret-top:before {
            content: "\e78f"
        }

        .el-icon-caret-bottom:before {
            content: "\e790"
        }

        .el-icon-caret-right:before {
            content: "\e791"
        }

        .el-icon-caret-left:before {
            content: "\e792"
        }

        .el-icon-d-caret:before {
            content: "\e79a"
        }

        .el-icon-share:before {
            content: "\e793"
        }

        .el-icon-menu:before {
            content: "\e798"
        }

        .el-icon-s-grid:before {
            content: "\e7a6"
        }

        .el-icon-s-check:before {
            content: "\e7a7"
        }

        .el-icon-s-data:before {
            content: "\e7a8"
        }

        .el-icon-s-opportunity:before {
            content: "\e7aa"
        }

        .el-icon-s-custom:before {
            content: "\e7ab"
        }

        .el-icon-s-claim:before {
            content: "\e7ad"
        }

        .el-icon-s-finance:before {
            content: "\e7ae"
        }

        .el-icon-s-comment:before {
            content: "\e7af"
        }

        .el-icon-s-flag:before {
            content: "\e7b0"
        }

        .el-icon-s-marketing:before {
            content: "\e7b1"
        }

        .el-icon-s-shop:before {
            content: "\e7b4"
        }

        .el-icon-s-open:before {
            content: "\e7b5"
        }

        .el-icon-s-management:before {
            content: "\e7b6"
        }

        .el-icon-s-ticket:before {
            content: "\e7b7"
        }

        .el-icon-s-release:before {
            content: "\e7b8"
        }

        .el-icon-s-home:before {
            content: "\e7b9"
        }

        .el-icon-s-promotion:before {
            content: "\e7ba"
        }

        .el-icon-s-operation:before {
            content: "\e7bb"
        }

        .el-icon-s-unfold:before {
            content: "\e7bc"
        }

        .el-icon-s-fold:before {
            content: "\e7a9"
        }

        .el-icon-s-platform:before {
            content: "\e7bd"
        }

        .el-icon-s-order:before {
            content: "\e7be"
        }

        .el-icon-s-cooperation:before {
            content: "\e7bf"
        }

        .el-icon-bell:before {
            content: "\e725"
        }

        .el-icon-message-solid:before {
            content: "\e799"
        }

        .el-icon-video-camera:before {
            content: "\e772"
        }

        .el-icon-video-camera-solid:before {
            content: "\e796"
        }

        .el-icon-camera:before {
            content: "\e779"
        }

        .el-icon-camera-solid:before {
            content: "\e79b"
        }

        .el-icon-download:before {
            content: "\e77c"
        }

        .el-icon-upload2:before {
            content: "\e77b"
        }

        .el-icon-upload:before {
            content: "\e7c3"
        }

        .el-icon-picture-outline-round:before {
            content: "\e75f"
        }

        .el-icon-picture-outline:before {
            content: "\e75e"
        }

        .el-icon-picture:before {
            content: "\e79f"
        }

        .el-icon-close:before {
            content: "\e6db"
        }

        .el-icon-check:before {
            content: "\e6da"
        }

        .el-icon-plus:before {
            content: "\e6d9"
        }

        .el-icon-minus:before {
            content: "\e6d8"
        }

        .el-icon-help:before {
            content: "\e73d"
        }

        .el-icon-s-help:before {
            content: "\e7b3"
        }

        .el-icon-circle-close:before {
            content: "\e78d"
        }

        .el-icon-circle-check:before {
            content: "\e720"
        }

        .el-icon-circle-plus-outline:before {
            content: "\e723"
        }

        .el-icon-remove-outline:before {
            content: "\e722"
        }

        .el-icon-zoom-out:before {
            content: "\e776"
        }

        .el-icon-zoom-in:before {
            content: "\e777"
        }

        .el-icon-error:before {
            content: "\e79d"
        }

        .el-icon-success:before {
            content: "\e79c"
        }

        .el-icon-circle-plus:before {
            content: "\e7a0"
        }

        .el-icon-remove:before {
            content: "\e7a2"
        }

        .el-icon-info:before {
            content: "\e7a1"
        }

        .el-icon-question:before {
            content: "\e7a4"
        }

        .el-icon-warning-outline:before {
            content: "\e6c9"
        }

        .el-icon-warning:before {
            content: "\e7a3"
        }

        .el-icon-goods:before {
            content: "\e7c2"
        }

        .el-icon-s-goods:before {
            content: "\e7b2"
        }

        .el-icon-star-off:before {
            content: "\e717"
        }

        .el-icon-star-on:before {
            content: "\e797"
        }

        .el-icon-more-outline:before {
            content: "\e6cc"
        }

        .el-icon-more:before {
            content: "\e794"
        }

        .el-icon-phone-outline:before {
            content: "\e6cb"
        }

        .el-icon-phone:before {
            content: "\e795"
        }

        .el-icon-user:before {
            content: "\e6e3"
        }

        .el-icon-user-solid:before {
            content: "\e7a5"
        }

        .el-icon-setting:before {
            content: "\e6ca"
        }

        .el-icon-s-tools:before {
            content: "\e7ac"
        }

        .el-icon-delete:before {
            content: "\e6d7"
        }

        .el-icon-delete-solid:before {
            content: "\e7c9"
        }

        .el-icon-eleme:before {
            content: "\e7c7"
        }

        .el-icon-platform-eleme:before {
            content: "\e7ca"
        }

        .el-icon-loading {
            -webkit-animation: rotating 2s linear infinite;
            animation: rotating 2s linear infinite
        }

        .el-icon--right {
            margin-left: 5px
        }

        .el-icon--left {
            margin-right: 5px
        }

        @-webkit-keyframes rotating {
            0% {
                -webkit-transform: rotateZ(0);
                transform: rotateZ(0)
            }

            100% {
                -webkit-transform: rotateZ(360deg);
                transform: rotateZ(360deg)
            }
        }

        @keyframes rotating {
            0% {
                -webkit-transform: rotateZ(0);
                transform: rotateZ(0)
            }

            100% {
                -webkit-transform: rotateZ(360deg);
                transform: rotateZ(360deg)
            }
        }

        .el-loading-parent--relative {
            position: relative !important
        }

        .el-loading-parent--hidden {
            overflow: hidden !important
        }

        .el-loading-mask {
            position: absolute;
            z-index: 2000;
            background-color: rgba(255, 255, 255, .9);
            margin: 0;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            -webkit-transition: opacity .3s;
            transition: opacity .3s
        }

        .el-loading-mask.is-fullscreen {
            position: fixed
        }

        .el-loading-mask.is-fullscreen .el-loading-spinner {
            margin-top: -25px
        }

        .el-loading-mask.is-fullscreen .el-loading-spinner .circular {
            height: 50px;
            width: 50px
        }

        .el-loading-spinner {
            top: 50%;
            margin-top: -21px;
            width: 100%;
            text-align: center;
            position: absolute
        }

        .el-loading-spinner .el-loading-text {
            color: #409EFF;
            margin: 3px 0;
            font-size: 14px
        }

        .el-loading-spinner .circular {
            height: 42px;
            width: 42px;
            -webkit-animation: loading-rotate 2s linear infinite;
            animation: loading-rotate 2s linear infinite
        }

        .el-loading-spinner .path {
            -webkit-animation: loading-dash 1.5s ease-in-out infinite;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-dasharray: 90, 150;
            stroke-dashoffset: 0;
            stroke-width: 2;
            stroke: #409EFF;
            stroke-linecap: round
        }

        .el-loading-spinner i {
            color: #409EFF
        }

        .el-loading-fade-enter,
        .el-loading-fade-leave-active {
            opacity: 0
        }

        @-webkit-keyframes loading-rotate {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes loading-rotate {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @-webkit-keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0
            }

            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -40px
            }

            100% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -120px
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0
            }

            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -40px
            }

            100% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -120px
            }
        }

        .el-loading-mask {
            overflow: hidden;
            background-color: #3a3330 !important;
            border-radius: 12px;
            transition: none
        }

        .el-loading-spinner {
            position: relative;
            margin-top: auto;
            opacity: 1;
            transition: opacity .3s
        }

        .el-loading-spinner::before {
            position: absolute;
            top: -50%;
            right: -50%;
            bottom: -50%;
            left: -50%;
            z-index: 100;
            display: inline-block;
            width: 95px;
            height: 95px;
            margin: auto;
            background-image: url("//st.bork.ru/images/preloader/square2.svg");
            background-repeat: no-repeat;
            background-position: left center;
            background-size: auto 100%;
            animation: preloader-square 1s steps(11) infinite;
            content: ""
        }

        .el-loading-spinner * {
            display: none
        }

        @keyframes preloader-square {
            100% {
                background-position-x: calc(95px * 11 * -1)
            }
        }

        .el-loading-fade-leave-active {
            transition: opacity .3s
        }

        .el-loading-fade-leave-active .el-loading-spinner {
            display: none
        }

        [class*=el-loading-parent]>:not(.el-loading-mask) {
            opacity: 0
        }

        .wrapper {
            position: relative;
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content
        }

        .wrapper.banner-shown .header-modern,
        .wrapper.banner-shown .header-modern__menu,
        .wrapper.banner-shown .location-confirm {
            top: 60px
        }

        .wrapper.banner-shown .page-content {
            margin-top: 60px
        }

        .wrapper.banner-shown .boutique-list {
            margin-top: 120px
        }

        .wrapper.banner-shown .title {
            margin-top: 130px
        }

        .wrapper.banner-shown .contact {
            padding-top: 69px
        }

        .wrapper.manual-page .page-content {
            position: relative;
            top: 50px;
            margin-bottom: 50px
        }

        .poll-page {
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content;
            padding: 20vh 0
        }

        .noresults {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 60vh;
            text-align: center
        }

        @media(max-width: 767px) {
            .noresults {
                margin-top: 54px
            }
        }

        .noresults__title {
            margin: 0 0 23px 0;
            font-weight: 500;
            font-size: 22px;
            font-family: "Akzidenz-Ext", Helvetica, Arial, sans-serif;
            line-height: 25px
        }

        @media(max-width: 767px) {
            .noresults__title {
                margin: 0 0 10px 0;
                font-size: 16px
            }
        }

        .noresults__description {
            margin: 0;
            font-weight: 400;
            font-size: 16px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            line-height: 25px
        }

        @media(max-width: 767px) {
            .noresults__description {
                font-size: 14px
            }
        }

        .title {
            padding-top: 162px;
            color: #fff;
            font-weight: 300;
            font-size: 28px;
            font-family: "bork", Helvetica, Arial, sans-serif;
            line-height: 1.25;
            text-align: center
        }

        @media(max-width: 767px) {
            .title {
                margin-bottom: 27px;
                padding: 0 13px;
                padding-top: 70px;
                font-size: 18px;
                line-height: 25px
            }
        }

        .support-service__tel {
            display: block;
            clear: both;
            margin-top: 40px;
            margin-bottom: 58px;
            color: #fff;
            font-weight: 300;
            font-size: 21px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            line-height: 35px;
            letter-spacing: -0.2px;
            text-align: center
        }

        @media(max-width: 767px) {
            .support-service__tel {
                display: none !important
            }
        }

        .content {
            margin-right: -30px;
            margin-bottom: -30px;
            padding: 30px 0;
            overflow: hidden
        }

        .content>div:empty {
            display: none
        }

        .content--no-margin-r {
            margin-right: 0
        }

        @media(max-width: 767px) {
            .content {
                margin-right: 0;
                padding: 21px 0
            }
        }

        .header-catalog {
            display: flex;
            flex-direction: column;
            height: 100%;
            padding: 10px;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover
        }

        @media(--mobile) {
            .header-catalog {
                overflow: visible
            }
        }

        .header-catalog__back {
            position: relative;
            flex: 0 0 50px;
            width: 50px;
            height: 50px;
            color: transparent;
            font-size: 0
        }

        .header-catalog__back::before {
            position: absolute;
            top: -50%;
            right: -50%;
            bottom: -50%;
            left: -50%;
            width: 10px;
            height: 10px;
            margin: auto;
            border-top: 1px solid #fff;
            border-right: 1px solid #fff;
            transform: rotate(-135deg);
            content: ""
        }

        .header-catalog__header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-right: 35px
        }

        .header-catalog__search {
            position: relative;
            margin: 10px
        }

        .header-catalog__search-label {
            display: none
        }

        .header-catalog__search-input {
            display: block;
            width: 100%;
            height: 47px;
            padding: 10px 20px;
            color: #fff;
            font-size: 14px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, .3);
            border-radius: 23px !important;
            transition: background-color .3s, color .3s
        }

        .header-catalog__search-input::-moz-placeholder {
            font-size: 13px;
            text-transform: uppercase
        }

        .header-catalog__search-input:-ms-input-placeholder {
            font-size: 13px;
            text-transform: uppercase
        }

        .header-catalog__search-input::placeholder {
            font-size: 13px;
            text-transform: uppercase
        }

        .header-catalog__search-input:focus {
            color: #000;
            background-color: #fff
        }

        +.header-catalog__search-input:focus__search-button {
            background-image: url("data:image/svg+xml, %3Csvg width='21' height='21' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg opacity='.6' stroke='%23000' stroke-width='2'%3E%3Cpath clip-rule='evenodd' d='M8.69 16.381A7.69 7.69 0 1 0 8.69 1a7.69 7.69 0 0 0 0 15.381z'/%3E%3Cpath d='M20 20l-5.429-5.428'/%3E%3C/g%3E%3C/svg%3E")
        }

        .header-catalog__search-button {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 65px;
            color: transparent;
            font-size: 0;
            background-image: url("data:image/svg+xml, %3Csvg width='21' height='21' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg opacity='.6' stroke='%23fff' stroke-width='2'%3E%3Cpath clip-rule='evenodd' d='M8.69 16.381A7.69 7.69 0 1 0 8.69 1a7.69 7.69 0 0 0 0 15.381z'/%3E%3Cpath d='M20 20l-5.429-5.428'/%3E%3C/g%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 20px
        }

        .header-catalog__inner {
            overflow-y: auto
        }

        .header-catalog__inner::-webkit-scrollbar {
            width: 5px;
            height: 50px
        }

        .header-catalog__inner::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, .1);
            border-radius: 3px
        }

        .header-catalog__inner::-webkit-scrollbar-track {
            background: #3a3330
        }

        .header-catalog__categories {
            margin: 10px 10px 20px;
            padding: 0 20px;
            list-style-type: none
        }

        .header-catalog__category:not(:last-child) {
            border-bottom: 5px rgba(255, 255, 255, .3)
        }

        .header-catalog__category-link {
            display: block;
            padding: 15px 0;
            color: #fff;
            font-size: 18px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            letter-spacing: .04em;
            text-transform: uppercase
        }

        @media(hover: hover) {
            .header-catalog__category-link:hover+.header-catalog__category-picture {
                opacity: 1
            }
        }

        .header-catalog__category-picture {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: -1;
            opacity: 0;
            transition: opacity .3s;
            background-color: #2e2826
        }

        .header-catalog__category-picture-active {
            opacity: 1;
            z-index: -2
        }

        .header-catalog__category-img {
            position: absolute;
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center
        }

        .header-catalog__pages {
            margin: 10px;
            padding: 0 20px;
            list-style-type: none
        }

        .header-catalog__page-link {
            display: block;
            padding: 10px 0;
            color: rgba(255, 255, 255, .5);
            font-size: 13px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            letter-spacing: .04em;
            text-transform: uppercase
        }

        .header-catalog__page-link:hover {
            color: #fff;
            transition: color .2s ease
        }

        .header-catalog__profile--hidden {
            display: none
        }

        .mando-monolith-layout {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            min-height: 100dvh;
            font-family: bork, Helvetica, Arial, sans-serif;
            background-color: var(--body-bg-color)
        }

        body {
            margin: 0;
            padding: 0
        }

        .mando-poll-page {
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content;
            padding: 20vh 0
        }

        .mando-noresults {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 60vh;
            text-align: center
        }

        @media screen and (max-width: 479px) {
            .mando-noresults {
                margin-top: 54px
            }
        }

        .mando-noresults__title {
            margin: 0 0 23px 0;
            font-weight: 500;
            font-size: 22px;
            font-family: var(--akzidenz-Ext);
            line-height: 25px
        }

        @media screen and (max-width: 479px) {
            .mando-noresults__title {
                margin: 0 0 10px 0;
                font-size: 16px
            }
        }

        .mando-noresults__description {
            margin: 0;
            font-weight: 400;
            font-size: 16px;
            font-family: var(--akzidenz-Md);
            line-height: 25px
        }

        @media screen and (max-width: 479px) {
            .mando-noresults__description {
                font-size: 14px
            }
        }

        .mando-monolith-layout__purchase {
            color: #fff
        }

        .mando-monolith-layout__wrapper {
            position: relative;
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content
        }

        .mando-monolith-layout__wrapper.mando-banner-shown .mando-header-modern,
        .mando-monolith-layout__wrapper.mando-banner-shown .mando-header-modern__menu,
        .mando-monolith-layout__wrapper.mando-banner-shown .mando-location-confirm {
            top: 60px
        }

        .mando-monolith-layout__wrapper.mando-banner-shown .mando-page-content {
            margin-top: 60px
        }

        .mando-monolith-layout__wrapper.mando-banner-shown .mando-boutique-list {
            margin-top: 120px
        }

        .mando-monolith-layout__wrapper.mando-banner-shown .mando-title {
            margin-top: 130px
        }

        .mando-monolith-layout__wrapper.mando-banner-shown .mando-contact {
            padding-top: 69px
        }

        .mando-monolith-layout__wrapper.mando-manual-page .mando-page-content {
            position: relative;
            top: 50px;
            margin-bottom: 50px
        }

        .page-loader-shown {
            overflow: hidden
        }

        .page-loader {
            position: fixed;
            height: 100vh;
            width: 100vw;
            z-index: 99999;
            overflow: hidden;
            background-color: #3a3330;
            transition: transform 0s linear .5s, opacity .3s linear;
            content: "";
            top: 0
        }

        .page-loader::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 999999;
            width: 67px;
            height: 56px;
            margin: auto;
            background-image: url("data:image/svg+xml,%3Csvg width='69' height='57' viewBox='0 0 69 57' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.29136 22.5136H7.8596C8.31191 22.5136 8.60689 22.2177 8.60689 21.7639V16.1604C8.60689 13.3191 11.3011 10.4779 13.9755 10.4779H54.093C56.7675 10.4779 59.4616 13.3191 59.4616 16.1604V21.7639C59.4616 22.2177 59.7566 22.5136 60.2089 22.5136H66.7771C67.2294 22.5136 67.5244 22.2177 67.5244 21.7639V15.2528C67.5244 7.99188 61.7035 2.36865 54.3289 2.36865H13.7592C6.36503 2.36865 0.563741 8.05107 0.563741 15.3119V21.7441C0.563741 22.1979 0.858716 22.4939 1.31102 22.4939' fill='%232E2826'/%3E%3Cpath d='M0.544075 35.2201V41.9483C0.544075 49.1302 6.44369 54.8916 13.7396 54.8916H54.3093C61.7035 54.8916 67.5048 49.1302 67.5048 41.9483V35.2201C67.5048 34.7663 67.2098 34.4704 66.7575 34.4704H60.1892C59.7369 34.4704 59.442 34.7663 59.442 35.2201V41.1393C59.442 43.9805 56.7478 46.8218 54.0733 46.8218H13.9559C11.2617 46.8218 8.58722 43.9805 8.58722 41.1393V35.2201C8.58722 34.7663 8.29224 34.4704 7.83994 34.4704H1.2717C0.819395 34.4704 0.524414 34.7663 0.524414 35.2201' fill='%232E2826'/%3E%3C/svg%3E%0A");
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            transition: transform 0s linear .5s, opacity .3s linear;
            -webkit-animation: preloader backwards infinite 3s;
            animation: preloader backwards infinite 3s;
            content: ""
        }

        @-webkit-keyframes preloader {
            0% {
                transform: rotateX(0) rotateY(0)
            }

            25% {
                transform: rotateX(180deg) rotateY(0)
            }

            50% {
                transform: rotateX(180deg) rotateY(180deg)
            }

            75% {
                transform: rotateX(360deg) rotateY(180deg)
            }

            100% {
                transform: rotateX(360deg) rotateY(360deg)
            }
        }

        @keyframes preloader {
            0% {
                transform: rotateX(0) rotateY(0)
            }

            25% {
                transform: rotateX(180deg) rotateY(0)
            }

            50% {
                transform: rotateX(180deg) rotateY(180deg)
            }

            75% {
                transform: rotateX(360deg) rotateY(180deg)
            }

            100% {
                transform: rotateX(360deg) rotateY(360deg)
            }
        }

        .v-enter-active,
        .v-leave-active {
            transition: opacity .5s ease
        }

        .v-enter-from,
        .v-leave-to {
            opacity: 0
        }

        .mando-notification {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            display: flex;
            flex-flow: row nowrap;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            height: 60px;
            padding: 0 20px;
            color: #fff;
            background: #26211e;
            -webkit-animation: mando-slide-in .5s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
            animation: mando-slide-in .5s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
            box-sizing: border-box
        }

        @-webkit-keyframes mando-slide-in {
            0% {
                transform: translateY(-60px)
            }

            100% {
                transform: translateY(0)
            }
        }

        @keyframes mando-slide-in {
            0% {
                transform: translateY(-60px)
            }

            100% {
                transform: translateY(0)
            }
        }

        .mando-notification__content {
            flex-grow: 1;
            padding: 5px;
            font-size: 18px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            text-align: center;
            border-radius: 2px
        }

        .mando-search {
            display: flex;
            flex-direction: column;
            align-items: center;
            box-sizing: border-box;
            width: 100%;
            margin-top: 40px;
            padding: 0 30px;
            -webkit-animation: mando-fadeIn;
            animation: mando-fadeIn
        }

        @-webkit-keyframes mando-fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes mando-fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @media screen and (max-width: 979px) {
            .mando-search {
                height: -webkit-fit-content;
                height: -moz-fit-content;
                height: fit-content;
                padding: 0;
                margin-top: 0;
                height: 100%
            }
        }

        @media screen and (max-width: 767px) {
            .mando-search {
                height: -webkit-fit-content;
                height: -moz-fit-content;
                height: fit-content;
                padding-bottom: 30px;
                min-height: 100vh
            }
        }

        .mando-search__close {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 10
        }

        .mando-search__content-wrapper {
            position: fixed;
            top: -50px;
            transition: all .3s ease-out;
            height: 50px;
            width: 850px;
            background-color: #3a3330;
            border-radius: 28px 28px 12px 12px;
            overflow: hidden
        }

        @media screen and (max-width: 979px) {
            .mando-search__content-wrapper {
                position: static;
                top: auto;
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                border-radius: 0;
                max-height: none;
                height: 100%;
                overflow: visible
            }
        }

        @media screen and (max-width: 767px) {
            .mando-search__content-wrapper {
                width: 100%;
                height: auto
            }
        }

        .mando-search__content-wrapper--no-suggestions {
            background-color: transparent
        }

        .mando-search__content-wrapper--visible {
            top: 50px;
            height: 621px
        }

        @media screen and (max-width: 979px) {
            .mando-search__content-wrapper--visible {
                max-height: none;
                height: 100%
            }
        }

        .mando-search__container {
            width: 850px
        }

        @media screen and (max-width: 979px) {
            .mando-search__container {
                width: 640px;
                margin-top: 10px
            }
        }

        @media screen and (max-width: 767px) {
            .mando-search__container {
                width: 100%
            }
        }

        .mando-search__body--loading {
            margin-top: -45px
        }

        .mando-search__search-header {
            margin-bottom: 10px;
            transition: all .3s ease-out
        }

        @media screen and (max-width: 479px) {
            .mando-search__search-header {
                margin-bottom: 18px;
                padding: 0 16px
            }
        }

        @media screen and (max-width: 979px) {
            .mando-search__search-header {
                position: relative;
                top: -80px
            }
        }

        @media screen and (max-width: 979px) {
            .mando-search__search-header--visible {
                padding-top: 10px;
                top: 0
            }
        }

        .mando-search__skeleton {
            padding: 25px 30px 30px
        }

        @media screen and (max-width: 979px) {
            .mando-search__skeleton {
                padding: 0 16px
            }
        }

        .mando-search__search-dialog .el-dialog {
            overflow: visible
        }

        @media screen and (max-width: 979px) {
            .mando-search__search-dialog .el-dialog {
                height: 100%
            }
        }

        @media screen and (max-width: 979px) {
            .mando-search__search-dialog .el-dialog__body {
                height: 100%
            }
        }

        .search-fade-out-enter,
        .search-fade-out-leave-to {
            opacity: 0
        }

        .search-fade-out-enter-active,
        .search-fade-out-leave-active {
            transition: all 300ms ease-out
        }

        .v-modal-enter {
            animation: v-modal-in .2s ease
        }

        .v-modal-leave {
            animation: v-modal-out .2s ease forwards
        }

        @keyframes v-modal-in {
            0% {
                opacity: 0
            }
        }

        @keyframes v-modal-out {
            100% {
                opacity: 0
            }
        }

        .v-modal {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: .5;
            background: #000
        }

        .el-popup-parent--hidden {
            overflow: hidden
        }

        @font-face {
            font-family: "element-icons";
            src: url(_nuxtfonts/313f7da.woff) format("woff"), url(_nuxtfonts/4520188.ttf) format("truetype");
            font-weight: normal;
            font-display: "auto";
            font-style: normal
        }

        [class^=el-icon-],
        [class*=" el-icon-"] {
            font-family: "element-icons" !important;
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            vertical-align: baseline;
            display: inline-block;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .el-icon-ice-cream-round:before {
            content: ""
        }

        .el-icon-ice-cream-square:before {
            content: ""
        }

        .el-icon-lollipop:before {
            content: ""
        }

        .el-icon-potato-strips:before {
            content: ""
        }

        .el-icon-milk-tea:before {
            content: ""
        }

        .el-icon-ice-drink:before {
            content: ""
        }

        .el-icon-ice-tea:before {
            content: ""
        }

        .el-icon-coffee:before {
            content: ""
        }

        .el-icon-orange:before {
            content: ""
        }

        .el-icon-pear:before {
            content: ""
        }

        .el-icon-apple:before {
            content: ""
        }

        .el-icon-cherry:before {
            content: ""
        }

        .el-icon-watermelon:before {
            content: ""
        }

        .el-icon-grape:before {
            content: ""
        }

        .el-icon-refrigerator:before {
            content: ""
        }

        .el-icon-goblet-square-full:before {
            content: ""
        }

        .el-icon-goblet-square:before {
            content: ""
        }

        .el-icon-goblet-full:before {
            content: ""
        }

        .el-icon-goblet:before {
            content: ""
        }

        .el-icon-cold-drink:before {
            content: ""
        }

        .el-icon-coffee-cup:before {
            content: ""
        }

        .el-icon-water-cup:before {
            content: ""
        }

        .el-icon-hot-water:before {
            content: ""
        }

        .el-icon-ice-cream:before {
            content: ""
        }

        .el-icon-dessert:before {
            content: ""
        }

        .el-icon-sugar:before {
            content: ""
        }

        .el-icon-tableware:before {
            content: ""
        }

        .el-icon-burger:before {
            content: ""
        }

        .el-icon-knife-fork:before {
            content: ""
        }

        .el-icon-fork-spoon:before {
            content: ""
        }

        .el-icon-chicken:before {
            content: ""
        }

        .el-icon-food:before {
            content: ""
        }

        .el-icon-dish-1:before {
            content: ""
        }

        .el-icon-dish:before {
            content: ""
        }

        .el-icon-moon-night:before {
            content: ""
        }

        .el-icon-moon:before {
            content: ""
        }

        .el-icon-cloudy-and-sunny:before {
            content: ""
        }

        .el-icon-partly-cloudy:before {
            content: ""
        }

        .el-icon-cloudy:before {
            content: ""
        }

        .el-icon-sunny:before {
            content: ""
        }

        .el-icon-sunset:before {
            content: ""
        }

        .el-icon-sunrise-1:before {
            content: ""
        }

        .el-icon-sunrise:before {
            content: ""
        }

        .el-icon-heavy-rain:before {
            content: ""
        }

        .el-icon-lightning:before {
            content: ""
        }

        .el-icon-light-rain:before {
            content: ""
        }

        .el-icon-wind-power:before {
            content: ""
        }

        .el-icon-baseball:before {
            content: ""
        }

        .el-icon-soccer:before {
            content: ""
        }

        .el-icon-football:before {
            content: ""
        }

        .el-icon-basketball:before {
            content: ""
        }

        .el-icon-ship:before {
            content: ""
        }

        .el-icon-truck:before {
            content: ""
        }

        .el-icon-bicycle:before {
            content: ""
        }

        .el-icon-mobile-phone:before {
            content: ""
        }

        .el-icon-service:before {
            content: ""
        }

        .el-icon-key:before {
            content: ""
        }

        .el-icon-unlock:before {
            content: ""
        }

        .el-icon-lock:before {
            content: ""
        }

        .el-icon-watch:before {
            content: ""
        }

        .el-icon-watch-1:before {
            content: ""
        }

        .el-icon-timer:before {
            content: ""
        }

        .el-icon-alarm-clock:before {
            content: ""
        }

        .el-icon-map-location:before {
            content: ""
        }

        .el-icon-delete-location:before {
            content: ""
        }

        .el-icon-add-location:before {
            content: ""
        }

        .el-icon-location-information:before {
            content: ""
        }

        .el-icon-location-outline:before {
            content: ""
        }

        .el-icon-location:before {
            content: ""
        }

        .el-icon-place:before {
            content: ""
        }

        .el-icon-discover:before {
            content: ""
        }

        .el-icon-first-aid-kit:before {
            content: ""
        }

        .el-icon-trophy-1:before {
            content: ""
        }

        .el-icon-trophy:before {
            content: ""
        }

        .el-icon-medal:before {
            content: ""
        }

        .el-icon-medal-1:before {
            content: ""
        }

        .el-icon-stopwatch:before {
            content: ""
        }

        .el-icon-mic:before {
            content: ""
        }

        .el-icon-copy-document:before {
            content: ""
        }

        .el-icon-full-screen:before {
            content: ""
        }

        .el-icon-switch-button:before {
            content: ""
        }

        .el-icon-aim:before {
            content: ""
        }

        .el-icon-crop:before {
            content: ""
        }

        .el-icon-odometer:before {
            content: ""
        }

        .el-icon-time:before {
            content: ""
        }

        .el-icon-bangzhu:before {
            content: ""
        }

        .el-icon-close-notification:before {
            content: ""
        }

        .el-icon-microphone:before {
            content: ""
        }

        .el-icon-turn-off-microphone:before {
            content: ""
        }

        .el-icon-position:before {
            content: ""
        }

        .el-icon-postcard:before {
            content: ""
        }

        .el-icon-message:before {
            content: ""
        }

        .el-icon-chat-line-square:before {
            content: ""
        }

        .el-icon-chat-dot-square:before {
            content: ""
        }

        .el-icon-chat-dot-round:before {
            content: ""
        }

        .el-icon-chat-square:before {
            content: ""
        }

        .el-icon-chat-line-round:before {
            content: ""
        }

        .el-icon-chat-round:before {
            content: ""
        }

        .el-icon-set-up:before {
            content: ""
        }

        .el-icon-turn-off:before {
            content: ""
        }

        .el-icon-open:before {
            content: ""
        }

        .el-icon-connection:before {
            content: ""
        }

        .el-icon-link:before {
            content: ""
        }

        .el-icon-cpu:before {
            content: ""
        }

        .el-icon-thumb:before {
            content: ""
        }

        .el-icon-female:before {
            content: ""
        }

        .el-icon-male:before {
            content: ""
        }

        .el-icon-guide:before {
            content: ""
        }

        .el-icon-news:before {
            content: ""
        }

        .el-icon-price-tag:before {
            content: ""
        }

        .el-icon-discount:before {
            content: ""
        }

        .el-icon-wallet:before {
            content: ""
        }

        .el-icon-coin:before {
            content: ""
        }

        .el-icon-money:before {
            content: ""
        }

        .el-icon-bank-card:before {
            content: ""
        }

        .el-icon-box:before {
            content: ""
        }

        .el-icon-present:before {
            content: ""
        }

        .el-icon-sell:before {
            content: ""
        }

        .el-icon-sold-out:before {
            content: ""
        }

        .el-icon-shopping-bag-2:before {
            content: ""
        }

        .el-icon-shopping-bag-1:before {
            content: ""
        }

        .el-icon-shopping-cart-2:before {
            content: ""
        }

        .el-icon-shopping-cart-1:before {
            content: ""
        }

        .el-icon-shopping-cart-full:before {
            content: ""
        }

        .el-icon-smoking:before {
            content: ""
        }

        .el-icon-no-smoking:before {
            content: ""
        }

        .el-icon-house:before {
            content: ""
        }

        .el-icon-table-lamp:before {
            content: ""
        }

        .el-icon-school:before {
            content: ""
        }

        .el-icon-office-building:before {
            content: ""
        }

        .el-icon-toilet-paper:before {
            content: ""
        }

        .el-icon-notebook-2:before {
            content: ""
        }

        .el-icon-notebook-1:before {
            content: ""
        }

        .el-icon-files:before {
            content: ""
        }

        .el-icon-collection:before {
            content: ""
        }

        .el-icon-receiving:before {
            content: ""
        }

        .el-icon-suitcase-1:before {
            content: ""
        }

        .el-icon-suitcase:before {
            content: ""
        }

        .el-icon-film:before {
            content: ""
        }

        .el-icon-collection-tag:before {
            content: ""
        }

        .el-icon-data-analysis:before {
            content: ""
        }

        .el-icon-pie-chart:before {
            content: ""
        }

        .el-icon-data-board:before {
            content: ""
        }

        .el-icon-data-line:before {
            content: ""
        }

        .el-icon-reading:before {
            content: ""
        }

        .el-icon-magic-stick:before {
            content: ""
        }

        .el-icon-coordinate:before {
            content: ""
        }

        .el-icon-mouse:before {
            content: ""
        }

        .el-icon-brush:before {
            content: ""
        }

        .el-icon-headset:before {
            content: ""
        }

        .el-icon-umbrella:before {
            content: ""
        }

        .el-icon-scissors:before {
            content: ""
        }

        .el-icon-mobile:before {
            content: ""
        }

        .el-icon-attract:before {
            content: ""
        }

        .el-icon-monitor:before {
            content: ""
        }

        .el-icon-search:before {
            content: ""
        }

        .el-icon-takeaway-box:before {
            content: ""
        }

        .el-icon-paperclip:before {
            content: ""
        }

        .el-icon-printer:before {
            content: ""
        }

        .el-icon-document-add:before {
            content: ""
        }

        .el-icon-document:before {
            content: ""
        }

        .el-icon-document-checked:before {
            content: ""
        }

        .el-icon-document-copy:before {
            content: ""
        }

        .el-icon-document-delete:before {
            content: ""
        }

        .el-icon-document-remove:before {
            content: ""
        }

        .el-icon-tickets:before {
            content: ""
        }

        .el-icon-folder-checked:before {
            content: ""
        }

        .el-icon-folder-delete:before {
            content: ""
        }

        .el-icon-folder-remove:before {
            content: ""
        }

        .el-icon-folder-add:before {
            content: ""
        }

        .el-icon-folder-opened:before {
            content: ""
        }

        .el-icon-folder:before {
            content: ""
        }

        .el-icon-edit-outline:before {
            content: ""
        }

        .el-icon-edit:before {
            content: ""
        }

        .el-icon-date:before {
            content: ""
        }

        .el-icon-c-scale-to-original:before {
            content: ""
        }

        .el-icon-view:before {
            content: ""
        }

        .el-icon-loading:before {
            content: ""
        }

        .el-icon-rank:before {
            content: ""
        }

        .el-icon-sort-down:before {
            content: ""
        }

        .el-icon-sort-up:before {
            content: ""
        }

        .el-icon-sort:before {
            content: ""
        }

        .el-icon-finished:before {
            content: ""
        }

        .el-icon-refresh-left:before {
            content: ""
        }

        .el-icon-refresh-right:before {
            content: ""
        }

        .el-icon-refresh:before {
            content: ""
        }

        .el-icon-video-play:before {
            content: ""
        }

        .el-icon-video-pause:before {
            content: ""
        }

        .el-icon-d-arrow-right:before {
            content: ""
        }

        .el-icon-d-arrow-left:before {
            content: ""
        }

        .el-icon-arrow-up:before {
            content: ""
        }

        .el-icon-arrow-down:before {
            content: ""
        }

        .el-icon-arrow-right:before {
            content: ""
        }

        .el-icon-arrow-left:before {
            content: ""
        }

        .el-icon-top-right:before {
            content: ""
        }

        .el-icon-top-left:before {
            content: ""
        }

        .el-icon-top:before {
            content: ""
        }

        .el-icon-bottom:before {
            content: ""
        }

        .el-icon-right:before {
            content: ""
        }

        .el-icon-back:before {
            content: ""
        }

        .el-icon-bottom-right:before {
            content: ""
        }

        .el-icon-bottom-left:before {
            content: ""
        }

        .el-icon-caret-top:before {
            content: ""
        }

        .el-icon-caret-bottom:before {
            content: ""
        }

        .el-icon-caret-right:before {
            content: ""
        }

        .el-icon-caret-left:before {
            content: ""
        }

        .el-icon-d-caret:before {
            content: ""
        }

        .el-icon-share:before {
            content: ""
        }

        .el-icon-menu:before {
            content: ""
        }

        .el-icon-s-grid:before {
            content: ""
        }

        .el-icon-s-check:before {
            content: ""
        }

        .el-icon-s-data:before {
            content: ""
        }

        .el-icon-s-opportunity:before {
            content: ""
        }

        .el-icon-s-custom:before {
            content: ""
        }

        .el-icon-s-claim:before {
            content: ""
        }

        .el-icon-s-finance:before {
            content: ""
        }

        .el-icon-s-comment:before {
            content: ""
        }

        .el-icon-s-flag:before {
            content: ""
        }

        .el-icon-s-marketing:before {
            content: ""
        }

        .el-icon-s-shop:before {
            content: ""
        }

        .el-icon-s-open:before {
            content: ""
        }

        .el-icon-s-management:before {
            content: ""
        }

        .el-icon-s-ticket:before {
            content: ""
        }

        .el-icon-s-release:before {
            content: ""
        }

        .el-icon-s-home:before {
            content: ""
        }

        .el-icon-s-promotion:before {
            content: ""
        }

        .el-icon-s-operation:before {
            content: ""
        }

        .el-icon-s-unfold:before {
            content: ""
        }

        .el-icon-s-fold:before {
            content: ""
        }

        .el-icon-s-platform:before {
            content: ""
        }

        .el-icon-s-order:before {
            content: ""
        }

        .el-icon-s-cooperation:before {
            content: ""
        }

        .el-icon-bell:before {
            content: ""
        }

        .el-icon-message-solid:before {
            content: ""
        }

        .el-icon-video-camera:before {
            content: ""
        }

        .el-icon-video-camera-solid:before {
            content: ""
        }

        .el-icon-camera:before {
            content: ""
        }

        .el-icon-camera-solid:before {
            content: ""
        }

        .el-icon-download:before {
            content: ""
        }

        .el-icon-upload2:before {
            content: ""
        }

        .el-icon-upload:before {
            content: ""
        }

        .el-icon-picture-outline-round:before {
            content: ""
        }

        .el-icon-picture-outline:before {
            content: ""
        }

        .el-icon-picture:before {
            content: ""
        }

        .el-icon-close:before {
            content: ""
        }

        .el-icon-check:before {
            content: ""
        }

        .el-icon-plus:before {
            content: ""
        }

        .el-icon-minus:before {
            content: ""
        }

        .el-icon-help:before {
            content: ""
        }

        .el-icon-s-help:before {
            content: ""
        }

        .el-icon-circle-close:before {
            content: ""
        }

        .el-icon-circle-check:before {
            content: ""
        }

        .el-icon-circle-plus-outline:before {
            content: ""
        }

        .el-icon-remove-outline:before {
            content: ""
        }

        .el-icon-zoom-out:before {
            content: ""
        }

        .el-icon-zoom-in:before {
            content: ""
        }

        .el-icon-error:before {
            content: ""
        }

        .el-icon-success:before {
            content: ""
        }

        .el-icon-circle-plus:before {
            content: ""
        }

        .el-icon-remove:before {
            content: ""
        }

        .el-icon-info:before {
            content: ""
        }

        .el-icon-question:before {
            content: ""
        }

        .el-icon-warning-outline:before {
            content: ""
        }

        .el-icon-warning:before {
            content: ""
        }

        .el-icon-goods:before {
            content: ""
        }

        .el-icon-s-goods:before {
            content: ""
        }

        .el-icon-star-off:before {
            content: ""
        }

        .el-icon-star-on:before {
            content: ""
        }

        .el-icon-more-outline:before {
            content: ""
        }

        .el-icon-more:before {
            content: ""
        }

        .el-icon-phone-outline:before {
            content: ""
        }

        .el-icon-phone:before {
            content: ""
        }

        .el-icon-user:before {
            content: ""
        }

        .el-icon-user-solid:before {
            content: ""
        }

        .el-icon-setting:before {
            content: ""
        }

        .el-icon-s-tools:before {
            content: ""
        }

        .el-icon-delete:before {
            content: ""
        }

        .el-icon-delete-solid:before {
            content: ""
        }

        .el-icon-eleme:before {
            content: ""
        }

        .el-icon-platform-eleme:before {
            content: ""
        }

        .el-icon-loading {
            animation: rotating 2s linear infinite
        }

        .el-icon--right {
            margin-left: 5px
        }

        .el-icon--left {
            margin-right: 5px
        }

        @keyframes rotating {
            0% {
                transform: rotateZ(0deg)
            }

            100% {
                transform: rotateZ(360deg)
            }
        }

        .el-dialog {
            position: relative;
            box-sizing: border-box;
            margin: 0 auto 50px;
            background-color: #3a3330;
            border-radius: 12px
        }

        .el-dialog.is-fullscreen {
            max-width: none;
            margin: 0 !important;
            border-radius: 0;
            box-shadow: none
        }

        .el-dialog__wrapper {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: 0;
            padding: 10px;
            overflow: auto
        }

        .el-dialog__wrapper.is-fullscreen {
            padding: 0
        }

        @media screen and (max-width: 767px) {
            .el-dialog__wrapper.is-fullscreen {
                background: #3a3330
            }
        }

        .el-dialog__wrapper.is-blurred {
            -webkit-backdrop-filter: blur(12px);
            backdrop-filter: blur(12px)
        }

        .el-dialog__wrapper.is-blurred .el-dialog {
            background-color: transparent
        }

        .el-dialog__header {
            padding: 0
        }

        .el-dialog__headerbtn {
            display: none
        }

        .el-dialog--center {
            text-align: center
        }

        .el-dialog--center .el-dialog__body {
            text-align: initial
        }

        .el-dialog--center .el-dialog__footer {
            text-align: inherit
        }

        .is-move-animate.dialog-fade-enter-active {
            -webkit-animation-name: dialog-move-in, dialog-fade-in;
            animation-name: dialog-move-in, dialog-fade-in;
            -webkit-animation-duration: .3s;
            animation-duration: .3s;
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out
        }

        .is-move-animate.dialog-fade-leave-active {
            -webkit-animation-name: dialog-move-out, dialog-fade-out;
            animation-name: dialog-move-out, dialog-fade-out;
            -webkit-animation-duration: .3s;
            animation-duration: .3s;
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out
        }

        .dialog-fade-enter-active {
            -webkit-animation: dialog-fade-in .5s ease-out;
            animation: dialog-fade-in .5s ease-out
        }

        .dialog-fade-leave-active {
            -webkit-animation: dialog-fade-out .3s ease-out;
            animation: dialog-fade-out .3s ease-out
        }

        @-webkit-keyframes dialog-fade-in {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes dialog-fade-in {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes dialog-fade-out {
            0% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        @keyframes dialog-fade-out {
            0% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        @-webkit-keyframes dialog-move-in {
            0% {
                transform: translate3d(0, -20px, 0)
            }

            100% {
                transform: translate3d(0, 0, 0)
            }
        }

        @keyframes dialog-move-in {
            0% {
                transform: translate3d(0, -20px, 0)
            }

            100% {
                transform: translate3d(0, 0, 0)
            }
        }

        @-webkit-keyframes dialog-move-out {
            0% {
                transform: translate3d(0, 0, 0)
            }

            100% {
                transform: translate3d(0, -20px, 0)
            }
        }

        @keyframes dialog-move-out {
            0% {
                transform: translate3d(0, 0, 0)
            }

            100% {
                transform: translate3d(0, -20px, 0)
            }
        }

        .ui-dialog {
            position: relative
        }

        .ui-dialog__close {
            position: absolute;
            top: 15px;
            right: 15px;
            opacity: .5
        }

        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-refurbished-product {
            display: flex;
            flex-direction: column
        }

        .mando-refurbished-product__body {
            padding: 30px
        }

        .mando-refurbished-product__title {
            font-weight: 400;
            font-size: 16px;
            font-family: "akzidenz-extended", sans-serif;
            line-height: 22px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            color: #fff
        }

        .mando-refurbished-product__separator {
            margin: 18px 0 24px
        }

        .mando-refurbished-product__footer {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 74px;
            margin-top: 24px;
            background-color: rgba(0, 0, 0, .5);
            border-radius: 0 0 12px 12px
        }

        .mando-header-modern {
            display: block;
            position: fixed;
            height: 60px;
            background-color: var(--header-bg-color);
            top: auto;
            width: 100%;
            left: 0;
            z-index: 999;
            transition: all 200ms ease;
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px)
        }

        .mando-header-modern--transparent {
            -webkit-backdrop-filter: none;
            backdrop-filter: none;
            background-color: unset;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0) 100%)
        }

        .mando-header-modern--upper-layer {
            z-index: 2001
        }

        @media screen and (min-width: 1321px) {
            .mando-header-modern {
                height: 122px
            }

            .mando-header-modern--horizontal-menu-disabled {
                height: 60px
            }

        }

        .mando-header-modern--invisible-horizontal-menu {
            height: 60px !important;
        }

        .mando-header-modern--invisible-horizontal-menu {
            height: 60px
        }

        .mando-header-modern--has-hover .mando-header-modern__top,
        .mando-header-modern--has-hover .mando-header-modern__horizontal-menu {
            background: var(--header-bg-hover-color)
        }

        .mando-header-modern--is-hidden {
            height: 0
        }

        .mando-header-modern__lock-overlay {
            display: block;
            position: fixed;
            height: 60px;
            background-color: transparent;
            top: auto;
            width: 100%;
            left: 0;
            z-index: 1000
        }

        .mando-header-modern__top {
            position: fixed;
            top: auto;
            right: 0;
            left: 0;
            z-index: 999;
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-width: 320px;
            height: 60px
        }

        .mando-header-modern__top--absolute {
            position: absolute
        }

        @media screen and (max-width: 768px) {
            .mando-header-modern__top {
                height: 60px
            }
        }

        .mando-header-modern__menu {
            opacity: 0;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .5);
            transition: opacity .3s ease;
            height: 100vh;
            height: 100dvh;
            z-index: 999
        }

        .mando-header-modern__menu--opened {
            opacity: 1
        }

        .mando-header-modern__menu--closed {
            display: none
        }

        .mando-header-modern__menu-catalog {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 400px;
            height: 100vh;
            height: 100dvh;
            transform: translateX(-100%);
            transition: transform .3s ease
        }

        .mando-header-modern__menu-catalog--opened {
            transform: translateX(0)
        }

        .mando-header-modern__menu-catalog--closed {
            display: none
        }

        @media screen and (max-width: 768px) {
            .mando-header-modern__menu-catalog {
                width: 100%
            }
        }

        .mando-header-modern__menu-personal {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 430px;
            height: 100vh;
            height: 100dvh;
            background-color: #2e2826;
            transform: translateX(100%);
            transition: transform .3s ease
        }

        .mando-header-modern__menu-personal--opened {
            transform: translateX(0)
        }

        .mando-header-modern__menu-personal--closed {
            display: none
        }

        @media screen and (max-width: 768px) {
            .mando-header-modern__menu-personal {
                width: 100%
            }
        }

        .mando-header-modern__product {
            display: inline-flex;
            margin-right: 24px
        }

        .mando-header-modern__product-breadcrumbs {
            position: absolute;
            top: 100%;
            right: 0;
            left: 0;
            margin: 0;
            padding: 5px 24px;
            opacity: 1;
            transition: all .2s
        }

        @media screen and (max-width: 768px) {
            .mando-header-modern__product-breadcrumbs {
                padding: 5px 12px
            }
        }

        @media screen and (min-width: 1321px) {
            .mando-header-modern__product-breadcrumbs {
                top: 122px
            }

            .mando-header-modern__product-breadcrumbs--no-menu {
                top: 100%
            }
        }

        .mando-header-modern__product-breadcrumb {
            position: relative;
            display: inline-block;
            padding: 0 0 0 13px;
            color: var(--breadcrumbs-font-color);
            font-size: 15px;
            font-family: "Akzidenz-Ext", Helvetica, Arial, sans-serif
        }

        .mando-header-modern__product-breadcrumb::before {
            position: absolute;
            top: -50%;
            bottom: -50%;
            left: 0;
            display: block;
            width: 8px;
            height: 8px;
            margin: auto;
            border-top: 1px solid var(--breadcrumbs-font-color);
            border-right: 1px solid var(--breadcrumbs-font-color);
            transform: rotate(225deg);
            content: ""
        }

        .mando-header-modern__product-details {
            display: flex;
            align-items: center;
            opacity: 0;
            transition: opacity .2s;
            pointer-events: none
        }

        .mando-header-modern__product-details--visible {
            opacity: 1;
            pointer-events: auto
        }

        @media screen and (max-width: 979px) {
            .mando-header-modern__product-details {
                position: absolute;
                top: calc(100% - 1px);
                right: 0;
                left: 0;
                z-index: -1;
                height: var(--header-product-height);
                margin: 0;
                padding: 5px 22px;
                background-color: rgba(46, 40, 38, .7);
                -webkit-backdrop-filter: saturate(180%) blur(10px)
            }
        }

        @media screen and (max-width: 1320px) {
            .mando-header-modern__product-info {
                display: flex;
                flex: 1 0;
                justify-content: space-between;
                align-items: center
            }
        }

        .mando-header-modern__product-name {
            color: rgba(255, 255, 255, .5);
            font-size: 12px;
            font-family: "bork", Helvetica, Arial, sans-serif
        }

        .mando-header-modern__product-price {
            color: #fff;
            font-size: 17px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif
        }

        @media screen and (max-width: 1320px) {
            .mando-header-modern__product-price {
                font-size: 15px
            }
        }

        .mando-header-modern__product-buy {
            margin-left: 12px
        }

        .mando-header-modern__product-buy :not([class~=button]),
        .mando-header-modern__product-buy [class~=button--analogue] {
            display: none
        }

        .mando-header-modern__product-button {
            position: relative;
            display: block;
            width: 35px;
            height: 35px;
            padding: 0;
            color: transparent;
            font-size: 0;
            background-color: #ef6f2e;
            background-image: url("data:image/svg+xml, %3Csvg xmlns='http://www.w3.org/2000/svg' width='17' height='18' fill='none'%3E%3Cpath d='M4 8c0-9.3 9-9.3 9 0' stroke='%23fff' stroke-linecap='round'/%3E%3Cpath d='M.5 5c0-.3.2-.5.5-.5h15c.3 0 0.5.2.5.5v12c0 0.3-.2.5-.5.5H1a.5.5 0 0 1-.5-.5V5zM8.5 15V8M5 11.5h7' stroke='%23fff'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center 5px;
            border-radius: 50%
        }

        .mando-header-modern__product-button[class~=remove] {
            display: none
        }

        .mando-header-modern__product-button[class~=active] {
            background-image: url("data:image/svg+xml, %3Csvg xmlns='http://www.w3.org/2000/svg' width='13' height='10'%3E%3Cpath fill-rule='evenodd' fill='%23FFF' d='M5.25 9.9L.6 5.24l.9-.92 3.64 3.63L11.4.1l1 0.8-7.15 9z'/%3E%3C/svg%3E");
            background-position: center
        }

        @media screen and (max-width: 1320px) {
            .mando-header-modern__product-button {
                width: 29px;
                height: 29px;
                background-image: url("data:image/svg+xml, %3Csvg xmlns='http://www.w3.org/2000/svg' width='17' height='18' fill='none'%3E%3Cpath d='M4 8c0-9.3 9-9.3 9 0' stroke='%23fff' stroke-linecap='round'/%3E%3Cpath d='M.5 5c0-.3.2-.5.5-.5h15c.3 0 0.5.2.5.5v12c0 0.3-.2.5-.5.5H1a.5.5 0 0 1-.5-.5V5zM8.5 15V8M5 11.5h7' stroke='%23fff'/%3E%3C/svg%3E");
                background-position: center 3px
            }
        }

        @media screen and (max-width: 480px) {
            .mando-header-modern__product-button-full {
                position: relative;
                display: block;
                width: 29px;
                height: 29px;
                padding: 0;
                color: transparent;
                font-size: 0;
                background-color: #ef6f2e;
                background-image: url("data:image/svg+xml, %3Csvg xmlns='http://www.w3.org/2000/svg' width='17' height='18' fill='none'%3E%3Cpath d='M4 8c0-9.3 9-9.3 9 0' stroke='%23fff' stroke-linecap='round'/%3E%3Cpath d='M.5 5c0-.3.2-.5.5-.5h15c.3 0 0.5.2.5.5v12c0 0.3-.2.5-.5.5H1a.5.5 0 0 1-.5-.5V5zM8.5 15V8M5 11.5h7' stroke='%23fff'/%3E%3C/svg%3E");
                background-repeat: no-repeat;
                background-position: center 3px;
                border-radius: 50%
            }
        }

        @media screen and (max-width: 1320px) {
            .mando-header-modern__product-button-full {
                padding: 0 15px
            }
        }

        .mando-header-modern__horizontal-menu {
            display: none
        }

        @media screen and (min-width: 1321px) {
            .mando-header-modern__horizontal-menu {
                display: block;
                position: absolute;
                width: 100%;
                z-index: 99;
                margin-top: 60px;
                transition: all 200ms ease, background-color 0ms ease
            }
        }

        .mando-header-modern__exit>button {
            margin: 0 auto 20px auto !important;
            padding: 0 !important;
            color: #fff !important;
            font-weight: 400 !important;
            font-size: 13px !important;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif !important;
            text-align: left !important;
            text-transform: uppercase !important;
            border: none !important;
            opacity: .6 !important;
            transition: opacity .3s !important
        }

        .mando-header-modern__exit>button:hover {
            opacity: 1 !important
        }

        .mando-header-modern__exit>button--hidden {
            display: none
        }

        .mando-header-navbar {
            position: relative;
            display: flex;
            justify-content: space-between;
            padding: 0 12px;
            background: transparent;
            width: 100%;
            box-sizing: border-box
        }

        @media screen and (min-width: 768px) {
            .mando-header-navbar {
                padding: 0 8px
            }
        }

        .mando-header-navbar--extended {
            padding: 0 8px
        }

        @media screen and (min-width: 376px) {
            .mando-header-navbar--extended {
                padding: 0 12px
            }
        }

        @media screen and (min-width: 768px) {
            .mando-header-navbar--extended {
                padding: 0 12px
            }
        }

        .mando-header-navbar::before {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            height: 1px;
            background: var(--dividing-line-header);
            content: ""
        }

        .mando-header-navbar__logo {
            position: absolute;
            left: 50%;
            transform: translate(-50%, 0)
        }

        .mando-header-navbar-icon-list {
            display: flex;
            margin: 0;
            padding: 0
        }

        .mando-header-navbar-icon-list__item {
            list-style-type: none
        }

        @media screen and (min-width: 768px) {
            .mando-header-navbar-icon-list__item {
                opacity: .8
            }
        }

        .mando-header-navbar-icon-list__item:hover {
            opacity: 1
        }

        @media screen and (min-width: 768px) {
            .mando-header-navbar-icon-list__item--margin--left {
                margin-left: 32px
            }
        }

        @media screen and (min-width: 768px) {
            .mando-header-navbar-icon-list__item--margin--right {
                margin-right: 32px
            }
        }

        .mando-header-navbar-icon-list__item--disable-hover {
            pointer-events: none
        }

        .mando-header-navbar-icon-list__item--old-display {
            margin-left: 0;
            margin-right: 0
        }

        .mando-header-navbar-icon-list__icon-wrap {
            display: flex;
            align-items: center;
            height: 60px;
            padding: 0 10px;
            cursor: pointer;
            box-sizing: content-box;
            background-color: transparent;
            border: 0;
            outline: 0;
            box-shadow: none
        }

        .mando-header-navbar-icon-list__icon {
            display: block;
            height: 20px;
            width: 20px;
            background-color: var(--header-font-color);
            cursor: pointer;
            background-repeat: no-repeat;
            background-position: center
        }

        .mando-header-navbar-icon-list__icon--view--catalog {
            -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='none' viewBox='0 0 22 22'%3E%3Cpath stroke='currentColor' d='M3.5 21a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM11 21a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM18.5 21a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM3.5 13.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM11 13.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM18.5 13.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM3.5 6a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM11 6a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM18.5 6a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z'/%3E%3C/svg%3E");
            mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='none' viewBox='0 0 22 22'%3E%3Cpath stroke='currentColor' d='M3.5 21a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM11 21a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM18.5 21a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM3.5 13.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM11 13.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM18.5 13.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM3.5 6a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM11 6a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM18.5 6a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z'/%3E%3C/svg%3E")
        }

        .mando-header-navbar-icon-list__icon--view--geo {
            -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='none'%3E%3Cpath stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' d='M9.997 19.286a9.286 9.286 0 1 0 0-18.571 9.286 9.286 0 0 0 0 18.571Z'/%3E%3Cpath stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' d='M.71 10h18.572m-5.714 0a16.028 16.028 0 0 1-3.571 9.286 16.029 16.029 0 0 1-3.572-9.285A16.029 16.029 0 0 1 9.997.715 16.028 16.028 0 0 1 13.568 10Z'/%3E%3C/svg%3E");
            mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='none'%3E%3Cpath stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' d='M9.997 19.286a9.286 9.286 0 1 0 0-18.571 9.286 9.286 0 0 0 0 18.571Z'/%3E%3Cpath stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' d='M.71 10h18.572m-5.714 0a16.028 16.028 0 0 1-3.571 9.286 16.029 16.029 0 0 1-3.572-9.285A16.029 16.029 0 0 1 9.997.715 16.028 16.028 0 0 1 13.568 10Z'/%3E%3C/svg%3E")
        }

        .mando-header-navbar-icon-list__icon--view--search {
            -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='none'%3E%3Cpath stroke='currentColor' d='M9 16A7 7 0 1 0 9 2a7 7 0 0 0 0 14Z' clip-rule='evenodd'/%3E%3Cpath stroke='currentColor' stroke-linecap='round' d='m19 19-5-5'/%3E%3C/svg%3E");
            mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='none'%3E%3Cpath stroke='currentColor' d='M9 16A7 7 0 1 0 9 2a7 7 0 0 0 0 14Z' clip-rule='evenodd'/%3E%3Cpath stroke='currentColor' stroke-linecap='round' d='m19 19-5-5'/%3E%3C/svg%3E")
        }

        .mando-header-navbar-icon-list__icon--view--boutique {
            -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='none'%3E%3Cpath stroke='currentColor' d='M2.563 8.214c0 2.04.874 4.079 2.1 5.497L10 19.12l5.337-5.409c1.225-1.418 2.1-3.458 2.1-5.497C17.438 3.958 14.113.5 10 .5 5.885.5 2.561 3.958 2.561 8.214Z' clip-rule='evenodd'/%3E%3Cpath stroke='currentColor' d='M10.064 10.368c1.26 0 2.283-1.035 2.283-2.313 0-1.277-1.022-2.313-2.283-2.313-1.26 0-2.283 1.036-2.283 2.313 0 1.278 1.022 2.313 2.283 2.313Z' clip-rule='evenodd'/%3E%3C/svg%3E");
            mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='none'%3E%3Cpath stroke='currentColor' d='M2.563 8.214c0 2.04.874 4.079 2.1 5.497L10 19.12l5.337-5.409c1.225-1.418 2.1-3.458 2.1-5.497C17.438 3.958 14.113.5 10 .5 5.885.5 2.561 3.958 2.561 8.214Z' clip-rule='evenodd'/%3E%3Cpath stroke='currentColor' d='M10.064 10.368c1.26 0 2.283-1.035 2.283-2.313 0-1.277-1.022-2.313-2.283-2.313-1.26 0-2.283 1.036-2.283 2.313 0 1.278 1.022 2.313 2.283 2.313Z' clip-rule='evenodd'/%3E%3C/svg%3E")
        }

        .mando-header-navbar-icon-list__icon--view--hamburger {
            -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='none'%3E%3Crect width='20' height='1.5' y='1.75' fill='%23fff' rx='.75'/%3E%3Crect width='20' height='1.5' y='9.25' fill='%23fff' rx='.75'/%3E%3Crect width='20' height='1.5' y='16.75' fill='%23fff' rx='.75'/%3E%3C/svg%3E");
            mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='none'%3E%3Crect width='20' height='1.5' y='1.75' fill='%23fff' rx='.75'/%3E%3Crect width='20' height='1.5' y='9.25' fill='%23fff' rx='.75'/%3E%3Crect width='20' height='1.5' y='16.75' fill='%23fff' rx='.75'/%3E%3C/svg%3E")
        }

        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-header-navbar-phone {
            font-weight: 400;
            font-size: 16px;
            font-family: "akzidenz-extended", sans-serif;
            line-height: 22px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            display: flex;
            align-items: center;
            height: 60px;
            padding: 0 10px;
            cursor: pointer;
            box-sizing: content-box;
            color: var(--header-font-color);
            line-height: 18.4px;
            text-decoration: none
        }

        .mando-header-navbar-phone--fullPhone {
            padding: 0
        }

        .mando-header-navbar-phone__icon {
            display: block;
            height: 20px;
            width: 20px;
            background-color: var(--header-font-color);
            cursor: pointer;
            background-repeat: no-repeat;
            background-position: center;
            -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='none'%3E%3Cpath stroke='currentColor' d='M3.464.5c-.33 0-.648.13-.883.364L1.037 2.406c-.455.45-.602 1.108-.512 1.923.106.951.53 2.104 1.256 3.436 1.205 2.208 2.977 4.429 4.203 5.653l.615.614c1.226 1.224 3.45 2.985 5.667 4.187 1.546.838 2.851 1.277 3.846 1.281.612 0 1.128-.155 1.48-.546l1.545-1.543c.239-.247.363-.57.363-.89 0-.312-.118-.62-.358-.851l-2.784-2.775a1.202 1.202 0 0 0-.873-.367c-.318 0-.638.119-.874.362l-.927.925c-.141.134-.49.284-1.166.085-.342-.101-.778-.28-1.257-.539a9.883 9.883 0 0 1-2.28-1.709l-.613-.612a10.198 10.198 0 0 1-1.907-2.68 5.011 5.011 0 0 1-.371-.999c-.174-.727.055-.978.115-1.04l.926-2.678L4.347.863A1.252 1.252 0 0 0 3.464.5Z' clip-rule='evenodd'/%3E%3C/svg%3E");
            mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='none'%3E%3Cpath stroke='currentColor' d='M3.464.5c-.33 0-.648.13-.883.364L1.037 2.406c-.455.45-.602 1.108-.512 1.923.106.951.53 2.104 1.256 3.436 1.205 2.208 2.977 4.429 4.203 5.653l.615.614c1.226 1.224 3.45 2.985 5.667 4.187 1.546.838 2.851 1.277 3.846 1.281.612 0 1.128-.155 1.48-.546l1.545-1.543c.239-.247.363-.57.363-.89 0-.312-.118-.62-.358-.851l-2.784-2.775a1.202 1.202 0 0 0-.873-.367c-.318 0-.638.119-.874.362l-.927.925c-.141.134-.49.284-1.166.085-.342-.101-.778-.28-1.257-.539a9.883 9.883 0 0 1-2.28-1.709l-.613-.612a10.198 10.198 0 0 1-1.907-2.68 5.011 5.011 0 0 1-.371-.999c-.174-.727.055-.978.115-1.04l.926-2.678L4.347.863A1.252 1.252 0 0 0 3.464.5Z' clip-rule='evenodd'/%3E%3C/svg%3E")
        }

        .mando-header-navbar-logo {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0;
            height: 60px
        }

        .mando-header-navbar-logo__link {
            color: var(--header-font-color)
        }

        .mando-header-navbar-logo__link--disabled {
            pointer-events: none
        }

        .mando-header-navbar-logo__icon {
            color: var(--header-font-color);
            width: 100px;
            height: 18px;
            display: block
        }

        @media screen and (min-width: 1320px) {
            .mando-header-navbar-logo__icon {
                width: 112px;
                height: 20px
            }
        }

        .mando-header-navbar-logo__icon--short-logo {
            display: none
        }

        @media screen and (min-width: 360px) {
            .mando-header-navbar-logo__icon--short-logo {
                display: block
            }
        }

        .mando-header-navbar-logo__short-logo {
            display: block;
            height: 20px;
            width: 20px;
            background-color: var(--header-font-color);
            cursor: pointer;
            background-repeat: no-repeat;
            background-position: center;
            width: 26px;
            height: 22px;
            -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='26' height='22' fill='none'%3E%3Cpath fill='currentColor' d='M1.12 8.787h2.384c.164 0 .271-.107.271-.27V6.488c0-1.028.978-2.055 1.949-2.055h14.56c.971 0 1.949 1.027 1.949 2.055v2.027c0 .164.107.271.271.271h2.384c.164 0 .271-.107.271-.27V6.16c0-2.627-2.112-4.661-4.789-4.661H5.645C2.962 1.5.856 3.556.856 6.182V8.51c0 .164.107.271.271.271M.849 13.384v2.434c0 2.598 2.141 4.682 4.79 4.682h14.724c2.684 0 4.79-2.084 4.79-4.682v-2.434c0-.164-.108-.271-.272-.271h-2.384c-.164 0-.271.107-.271.27v2.142c0 1.028-.978 2.056-1.949 2.056H5.717c-.978 0-1.949-1.028-1.949-2.056v-2.141c0-.164-.107-.271-.271-.271H1.113c-.164 0-.271.107-.271.27'/%3E%3C/svg%3E");
            mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='26' height='22' fill='none'%3E%3Cpath fill='currentColor' d='M1.12 8.787h2.384c.164 0 .271-.107.271-.27V6.488c0-1.028.978-2.055 1.949-2.055h14.56c.971 0 1.949 1.027 1.949 2.055v2.027c0 .164.107.271.271.271h2.384c.164 0 .271-.107.271-.27V6.16c0-2.627-2.112-4.661-4.789-4.661H5.645C2.962 1.5.856 3.556.856 6.182V8.51c0 .164.107.271.271.271M.849 13.384v2.434c0 2.598 2.141 4.682 4.79 4.682h14.724c2.684 0 4.79-2.084 4.79-4.682v-2.434c0-.164-.108-.271-.272-.271h-2.384c-.164 0-.271.107-.271.27v2.142c0 1.028-.978 2.056-1.949 2.056H5.717c-.978 0-1.949-1.028-1.949-2.056v-2.141c0-.164-.107-.271-.271-.271H1.113c-.164 0-.271.107-.271.27'/%3E%3C/svg%3E");
            display: none
        }

        .mando-header-navbar-logo__short-logo--is-shown {
            display: block
        }

        @media screen and (min-width: 360px) {
            .mando-header-navbar-logo__short-logo--is-shown {
                display: none
            }
        }

        .mando-header-navbar-basket {
            display: flex;
            align-items: center;
            height: 60px;
            padding: 0 10px;
            cursor: pointer;
            box-sizing: content-box
        }

        .mando-header-navbar-basket--disabled {
            pointer-events: none
        }

        .mando-header-navbar-basket__icon {
            height: 22px;
            width: 20px;
            background-image: var(--icon-basket)
        }

        .mando-header-navbar-basket__icon--empty {
            display: block;
            height: 20px;
            width: 20px;
            background-color: var(--header-font-color);
            cursor: pointer;
            background-repeat: no-repeat;
            background-position: center;
            height: 22px;
            -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='22' fill='none'%3E%3Cg stroke='currentColor'%3E%3Cpath stroke-linecap='round' d='M5 11C5-2.333 15-2.333 15 11'/%3E%3Cpath d='M.5 7.93c0-.244.19-.407.475-.407h18.05c.285 0 .475.163.475.407v12.187c0 .244-.19.406-.475.406H.975a.519.519 0 0 1-.336-.119.38.38 0 0 1-.139-.287V7.93Z' clip-rule='evenodd'/%3E%3C/g%3E%3C/svg%3E");
            mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='22' fill='none'%3E%3Cg stroke='currentColor'%3E%3Cpath stroke-linecap='round' d='M5 11C5-2.333 15-2.333 15 11'/%3E%3Cpath d='M.5 7.93c0-.244.19-.407.475-.407h18.05c.285 0 .475.163.475.407v12.187c0 .244-.19.406-.475.406H.975a.519.519 0 0 1-.336-.119.38.38 0 0 1-.139-.287V7.93Z' clip-rule='evenodd'/%3E%3C/g%3E%3C/svg%3E")
        }

        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-header-navbar-personal-account {
            display: flex;
            align-items: center;
            height: 60px;
            padding: 0 10px;
            cursor: pointer;
            box-sizing: content-box;
            cursor: pointer
        }

        .mando-header-navbar-personal-account--authorized {
            padding: 0 3px
        }

        .mando-header-navbar-personal-account__abbreviation {
            font-weight: 400;
            font-size: 16px;
            font-family: "Akzidenz", "helvetica", sans-serif;
            line-height: 24px;
            letter-spacing: .4px;
            font-size: 10px;
            line-height: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            padding: 0;
            color: var(--header-font-color);
            background-color: transparent;
            border: 1px solid var(--header-font-color);
            border-radius: 50%;
            outline: 0;
            box-shadow: none;
            cursor: pointer
        }

        .mando-header-navbar-personal-account__icon {
            display: block;
            height: 20px;
            width: 20px;
            background-color: var(--header-font-color);
            cursor: pointer;
            background-repeat: no-repeat;
            background-position: center;
            height: 22px;
            -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='22' fill='none'%3E%3Cpath stroke='currentColor' d='M10 21h7.162c2.397 0 1.829-1.58 1.649-2.33a9.819 9.819 0 0 0-1.932-3.942 9.154 9.154 0 0 0-3.403-2.608c-1.07-.47-1.345.56-3.477.56-2.065 0-2.444-1.02-3.533-.54a9.176 9.176 0 0 0-3.51 2.78 9.861 9.861 0 0 0-1.872 4.19C.97 19.7.667 21 2.742 21H10Zm0-11c1.13 0 2.215-.474 3.014-1.318A4.63 4.63 0 0 0 14.263 5.5a4.63 4.63 0 0 0-1.249-3.182A4.153 4.153 0 0 0 10 1c-1.13 0-2.215.474-3.014 1.318A4.63 4.63 0 0 0 5.736 5.5a4.63 4.63 0 0 0 1.249 3.182A4.153 4.153 0 0 0 9.999 10Z' clip-rule='evenodd'/%3E%3C/svg%3E");
            mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='22' fill='none'%3E%3Cpath stroke='currentColor' d='M10 21h7.162c2.397 0 1.829-1.58 1.649-2.33a9.819 9.819 0 0 0-1.932-3.942 9.154 9.154 0 0 0-3.403-2.608c-1.07-.47-1.345.56-3.477.56-2.065 0-2.444-1.02-3.533-.54a9.176 9.176 0 0 0-3.51 2.78 9.861 9.861 0 0 0-1.872 4.19C.97 19.7.667 21 2.742 21H10Zm0-11c1.13 0 2.215-.474 3.014-1.318A4.63 4.63 0 0 0 14.263 5.5a4.63 4.63 0 0 0-1.249-3.182A4.153 4.153 0 0 0 10 1c-1.13 0-2.215.474-3.014 1.318A4.63 4.63 0 0 0 5.736 5.5a4.63 4.63 0 0 0 1.249 3.182A4.153 4.153 0 0 0 9.999 10Z' clip-rule='evenodd'/%3E%3C/svg%3E")
        }

        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-side-menu-qr {
            margin: 0 24px
        }

        .mando-side-menu-qr__title {
            font-weight: 400;
            font-size: 18px;
            font-family: "helvetica", sans-serif;
            line-height: 23px;
            letter-spacing: 1px;
            -webkit-font-smoothing: antialiased;
            margin: 24.5px 0 16px;
            color: #fff
        }

        @media screen and (max-width: 479px) {
            .mando-side-menu-qr__title {
                display: none
            }
        }

        .mando-side-menu-qr__qr {
            margin: 0 0 24.5px
        }

        @media screen and (max-width: 479px) {
            .mando-side-menu-qr__qr {
                margin-top: 24.5px
            }
        }

        .ui-separator {
            height: 0;
            max-height: 0;
            border-color: var(--ui-components-separator-color, #fff);
            border-style: solid;
            border-width: 1px 0 0 0
        }

        .ui-separator--view--dark {
            opacity: .1
        }

        .ui-separator--view--light {
            opacity: .3
        }

        .ui-separator--view--default {
            opacity: .5
        }

        .mando-right-menu {
            display: flex;
            flex-direction: column;
            height: 100%;
            padding: 10px;
            overflow: hidden;
            background-color: #000;
            background-image: url("//st.bork.ru/images/newProductPage/header/personal/bg-personal.jpg");
            background-repeat: no-repeat;
            background-position: top center;
            background-size: cover
        }

        .mando-right-menu--location .mando-right-menu__main {
            transform: translateY(-100%);
            opacity: 0
        }

        .mando-right-menu--location .mando-right-menu__location-wrapper {
            transform: translateY(0);
            opacity: 1;
            pointer-events: auto
        }

        .mando-right-menu__navigation {
            display: flex;
            align-items: center;
            margin: 0 0 0 35px
        }

        .mando-right-menu__back {
            position: relative;
            width: 50px;
            height: 50px;
            margin: 0 0 0 auto;
            color: transparent;
            font-size: 0
        }

        .mando-right-menu__back::before {
            position: absolute;
            top: -50%;
            right: -50%;
            bottom: -50%;
            left: -50%;
            width: 10px;
            height: 10px;
            margin: auto;
            border-top: 1px solid #fff;
            border-right: 1px solid #fff;
            transform: rotate(45deg);
            content: ""
        }

        .mando-right-menu__inner {
            position: relative;
            display: flex;
            justify-content: center;
            width: 100%;
            height: 100%;
            overflow: hidden
        }

        .mando-right-menu__main {
            width: 100%;
            margin: 0 35px;
            overflow-x: hidden;
            overflow-y: auto;
            transform: translateY(0);
            opacity: 1;
            transition: opacity .4s, transform .4s ease-in-out
        }

        .mando-right-menu__main::-webkit-scrollbar {
            width: 5px;
            height: 50px
        }

        .mando-right-menu__main::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, .1);
            border-radius: 3px
        }

        .mando-right-menu__main::-webkit-scrollbar-track {
            background: #3a3330
        }

        .mando-right-menu__form {
            width: 100%;
            margin: 100px auto 0;
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .mando-right-menu__info {
            padding: 30px 0 0 0
        }

        .mando-right-menu__name {
            position: relative;
            padding: 0 0 0 30px;
            font-size: 13px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            letter-spacing: .05em;
            text-transform: uppercase;
            color: #fff
        }

        .mando-right-menu__name::before {
            position: absolute;
            top: -4px;
            left: 0;
            display: inline-block;
            width: 19px;
            height: 20px;
            margin: auto;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='21' height='22' fill='none'%3E%3Cg stroke='%23fff' clip-rule='evenodd' %3E%3Cpath d='M10.5 21h7.56c2.53 0 1.93-1.58 1.74-2.33a9.62 9.62 0 0 0-5.63-6.55c-1.13-.47-1.42.56-3.67.56-2.18 0-2.58-1.02-3.73-.54a9.62 9.62 0 0 0-5.68 6.97C.97 19.7.65 21 2.84 21h7.66zM10.5 10a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9z'/%3E%3C/g%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            content: ""
        }

        .mando-right-menu__location {
            position: relative;
            display: flex;
            max-width: 280px;
            margin: 0 0 5px 35px;
            padding: 25px 0 30px 30px;
            color: rgba(255, 255, 255, .6);
            font-size: 16px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            transition: color .3s
        }

        .mando-right-menu__location:hover {
            color: #fff
        }

        .mando-right-menu__location::before {
            position: absolute;
            top: 20px;
            left: 0;
            width: 19px;
            height: 24px;
            margin: auto;
            background-image: url("data:image/svg+xml,%3Csvg width='17' height='21' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 8.714c0 2.0393.875 4.0787 2.1 5.4973L8.4375 19.62l5.3375-5.4087c1.225-1.4186 2.1-3.458 2.1-5.4973C15.875 4.458 12.55 1 8.4375 1S1 4.458 1 8.714z' stroke='%23fff'/%3E%3Cpath clip-rule='evenodd' d='M8.5 10.8675c1.2607 0 2.2826-1.0356 2.2826-2.313 0-1.2775-1.022-2.3131-2.2826-2.3131-1.2607 0-2.2826 1.0356-2.2826 2.313 0 1.2775 1.022 2.313 2.2826 2.313z' stroke='%23fff'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            content: ""
        }

        .mando-right-menu__location::after {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: #fff;
            opacity: .1;
            content: ""
        }

        .mando-right-menu__location-wrapper {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            display: flex;
            min-height: 350px;
            max-height: 550px;
            overflow-y: auto;
            transform: translateY(100%);
            opacity: 0;
            transition: opacity .4s, transform .4s ease-in-out;
            pointer-events: none
        }

        .mando-right-menu__header-location {
            margin: auto
        }

        .mando-right-menu__categories {
            margin: 80px 0;
            padding: 0;
            list-style-type: none
        }

        .mando-right-menu__category-link {
            display: block;
            padding: 15px 0;
            color: #fff;
            font-size: 18px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            letter-spacing: .04em;
            text-transform: uppercase;
            opacity: .8;
            transition: opacity .3s
        }

        .mando-right-menu__category-link:hover {
            opacity: 1
        }

        .mando-right-menu__exit {
            margin: 0 auto 20px auto;
            padding: 0;
            color: #fff;
            font-weight: 400;
            font-size: 13px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            text-align: left;
            text-transform: uppercase;
            border: none;
            opacity: .6;
            transition: opacity .3s;
            margin-bottom: 85px
        }

        .mando-right-menu__exit:hover {
            opacity: 1
        }

        .mando-right-menu__exit--hidden {
            display: none
        }

        .mando-right-menu__employee-category {
            position: relative;
            margin-top: 24px;
            padding: 0;
            list-style-type: none
        }

        .mando-right-menu__employee-category:before {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: #fff;
            opacity: .1;
            content: ""
        }

        .mando-right-menu__employee-category--item {
            display: none;
            cursor: pointer;
            position: relative;
            padding-top: 30px
        }

        .mando-right-menu__employee-category--item:not(:empty) {
            display: block
        }

        .mando-right-menu__employee-category--item:before {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: #fff;
            opacity: .1;
            content: ""
        }

        .mando-right-menu__exit--with-tab-bar {
            margin-bottom: 85px !important
        }

        .mando-right-menu__exit>button {
            margin: 0 auto 20px auto !important;
            padding: 0 !important;
            color: #fff !important;
            font-weight: 400 !important;
            font-size: 13px !important;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif !important;
            text-align: left !important;
            text-transform: uppercase !important;
            border: none !important;
            opacity: .6 !important;
            transition: opacity .3s !important
        }

        .mando-right-menu__exit>button:hover {
            opacity: 1 !important
        }

        .mando-right-menu__exit>button--hidden {
            display: none
        }

        .mando-right-menu__header-location {
            margin: auto
        }

        .mando-language {
            display: inline-flex
        }

        .mando-language__item {
            position: relative;
            border: none;
            background: none;
            display: inline-block;
            padding-bottom: 5px;
            color: rgba(255, 255, 255, .6);
            font-size: 15px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            transition: color .3s
        }

        .mando-language__item:hover {
            color: #fff
        }

        .mando-language__item:not(:last-child) {
            margin: 0 30px 0 0
        }

        .mando-language__item:not(:last-child)::after {
            position: absolute;
            top: 0;
            right: -16px;
            bottom: 0;
            display: block;
            width: 1px;
            background-color: #fff;
            opacity: .4;
            content: ""
        }

        .mando-language__item--active {
            color: #fff
        }

        .mando-language__item--active::before {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            display: block;
            height: 1px;
            background-color: #fff;
            opacity: .6;
            content: ""
        }

        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-authorization {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 250px
        }

        .mando-authorization__title {
            color: #fff;
            font-weight: 400;
            font-size: 18px;
            font-family: "helvetica", sans-serif;
            line-height: 23px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased
        }

        .mando-authorization__phone-word {
            margin-top: 24px
        }

        .mando-authorization__phone {
            margin-top: 40px
        }

        .mando-authorization__phone [data-test=ui-input-append] {
            color: red
        }

        .mando-authorization__code {
            margin-top: 20px
        }

        .mando-authorization__timer {
            margin: 20px -10px 0;
            color: #9d9390;
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased
        }

        .mando-authorization__action {
            margin-top: 12px;
            color: #f37021 !important;
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased
        }

        .mando-authorization__consent {
            margin-top: 12px;
            color: #fff;
            text-align: center;
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased
        }

        .mando-authorization__consent-link {
            color: #f37021;
            text-decoration: none
        }

        .mando-authorization__sms-details-modal {
            padding: 20px
        }

        .mando-authorization__sms-details-title {
            color: #fff;
            font-weight: 400;
            font-size: 18px;
            font-family: "akzidenz-extended", sans-serif;
            line-height: 26px;
            letter-spacing: .4px;
            -webkit-font-smoothing: antialiased;
            text-align: center;
            margin-bottom: 16px
        }

        .mando-authorization__sms-details-text {
            color: #9d9390;
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            margin: 0
        }

        .mando-authorization__sms-details-text+.mando-authorization__sms-details-text {
            margin-top: 8px
        }

        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-tab {
            position: relative;
            display: inline-block;
            color: rgba(255, 255, 255, .5);
            cursor: pointer
        }

        .ui-tab::after,
        .ui-tab::before {
            display: block;
            width: 100%;
            height: 2px;
            background-color: rgba(255, 255, 255, .5)
        }

        .ui-tab--view--default::before,
        .ui-tab--view--default::after {
            content: none
        }

        .ui-tab--view--underline::after {
            margin-top: 5px;
            content: ""
        }

        .ui-tab--view--overline::before {
            margin-bottom: 5px;
            content: ""
        }

        .ui-tab--view--single-line {
            text-align: center
        }

        .ui-tab--view--single-line::after {
            margin-top: 5px;
            content: ""
        }

        .ui-tab--view--button {
            padding: 9px 18px 7px;
            color: #fff;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 8px
        }

        .ui-tab--view--pill {
            padding: 8px 12px 6px;
            color: #fff;
            border: 1px solid #9d9390;
            border-radius: 46px
        }

        .ui-tab--view--pill.ui-tab--active {
            background-color: #f37021
        }

        .ui-tab--active {
            color: #fff;
            border-color: #f37021
        }

        .ui-tab--active::after,
        .ui-tab--active::before {
            background-color: #f37021
        }

        .ui-tab--size--xl {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased
        }

        .ui-tab--size--s {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased
        }

        .ui-tab--size--upper {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 19px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased
        }

        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-input {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            width: 100%;
            max-width: 303px;
            height: 50px
        }

        .ui-input * {
            box-sizing: border-box
        }

        .ui-input__error {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            margin-top: 3px;
            padding: 0 16px;
            color: #fff
        }

        .ui-input__append {
            display: flex;
            align-items: center;
            margin-right: 16px
        }

        @media screen and (max-width: 768px) {
            .ui-input__append {
                margin-right: 10px
            }
        }

        .ui-input__append--external-content {
            margin-right: 0;
            padding: 10px
        }

        .ui-input__search-icons {
            display: inline-flex;
            align-items: center;
            justify-content: space-between
        }

        .ui-input__search-icons--wide {
            width: 55px
        }

        .ui-input__inner {
            position: relative;
            display: flex;
            height: 100%;
            overflow: hidden;
            border-radius: 8px;
            transform: translate3d(0, 0, 0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .ui-input__inner--external-content {
            overflow: visible;
            transform: none
        }

        .ui-input__content {
            width: 100%;
            padding: 0 16px;
            line-height: 1.5;
            background-color: transparent;
            border: none
        }

        .ui-input__content:focus {
            outline: none
        }

        .ui-input__content--text-centered {
            text-align: center
        }

        .ui-input__focus-marker {
            position: absolute;
            bottom: 0;
            left: -100%;
            z-index: 1;
            display: block;
            width: 100%;
            height: 3px;
            background-color: #f37021;
            content: ""
        }

        .ui-input--view--default .ui-input__inner {
            background-color: #2e2826;
            border-radius: 8px
        }

        .ui-input--view--default .ui-input__inner--focused {
            background-color: #fff
        }

        .ui-input--view--default .ui-input__content {
            color: #fff
        }

        .ui-input--view--default .ui-input__content::-moz-placeholder {
            color: rgba(255, 255, 255, .5)
        }

        .ui-input--view--default .ui-input__content:-ms-input-placeholder {
            color: rgba(255, 255, 255, .5)
        }

        .ui-input--view--default .ui-input__content::placeholder {
            color: rgba(255, 255, 255, .5)
        }

        .ui-input--view--default .ui-input__content--focused {
            color: #000
        }

        .ui-input--view--alt .ui-input__inner {
            background-color: #fff;
            border-radius: 8px
        }

        .ui-input--view--alt .ui-input__content {
            color: #000
        }

        .ui-input--view--alt .ui-input__content::-moz-placeholder {
            color: rgba(0, 0, 0, .5)
        }

        .ui-input--view--alt .ui-input__content:-ms-input-placeholder {
            color: rgba(0, 0, 0, .5)
        }

        .ui-input--view--alt .ui-input__content::placeholder {
            color: rgba(0, 0, 0, .5)
        }

        .ui-input--view--search .ui-input__content {
            color: #fff
        }

        .ui-input--view--search .ui-input__content::-moz-placeholder {
            color: #fff
        }

        .ui-input--view--search .ui-input__content:-ms-input-placeholder {
            color: #fff
        }

        .ui-input--view--search .ui-input__content::placeholder {
            color: #fff
        }

        .ui-input--view--search .ui-input__content--focused {
            color: #000
        }

        .ui-input--view--search .ui-input__content--focused::-moz-placeholder {
            color: rgba(0, 0, 0, .5)
        }

        .ui-input--view--search .ui-input__content--focused:-ms-input-placeholder {
            color: rgba(0, 0, 0, .5)
        }

        .ui-input--view--search .ui-input__content--focused::placeholder {
            color: rgba(0, 0, 0, .5)
        }

        .ui-input--view--search .ui-input__inner {
            background-color: transparent;
            border: 1px solid #fff;
            border-radius: 25px;
            opacity: .5
        }

        .ui-input--view--search .ui-input__inner--focused {
            background-color: #fff;
            opacity: 1
        }

        .ui-input--view--search .ui-input__focus-marker {
            display: none
        }

        .ui-input--is-expanded {
            max-width: none
        }

        .ui-modern-dialog {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            box-sizing: border-box;
            margin: 0;
            padding: 10px;
            overflow: auto
        }

        .ui-modern-dialog .el-dialog {
            position: relative;
            box-sizing: border-box;
            margin: 0 auto 50px;
            border-radius: 20px
        }

        .ui-modern-dialog .el-dialog .el-dialog__wrapper.dialog-fade-enter-active {
            -webkit-animation: dialog-fade-in .3s;
            animation: dialog-fade-in .3s
        }

        .ui-modern-dialog .el-dialog .el-dialog__wrapper.dialog-fade-leave-active {
            -webkit-animation: dialog-fade-out .3s;
            animation: dialog-fade-out .3s
        }

        .ui-modern-dialog .el-dialog .el-dialog__header {
            padding: 0
        }

        .ui-modern-dialog .el-dialog .el-dialog__headerbtn {
            display: none
        }

        .ui-modern-dialog .el-dialog--center {
            text-align: center
        }

        .ui-modern-dialog .el-dialog--center .el-dialog__body {
            text-align: initial
        }

        .ui-modern-dialog .el-dialog--center .el-dialog__footer {
            text-align: inherit
        }

        .ui-modern-dialog .el-dialog.is-fullscreen {
            max-width: none;
            margin: 0 !important;
            border-radius: 0;
            box-shadow: none
        }

        @-webkit-keyframes ui-dialog-fade-in {
            0% {
                transform: translate3d(0, -20px, 0);
                opacity: 0
            }

            100% {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }

        @keyframes ui-dialog-fade-in {
            0% {
                transform: translate3d(0, -20px, 0);
                opacity: 0
            }

            100% {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }

        @-webkit-keyframes ui-dialog-fade-out {
            0% {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }

            100% {
                transform: translate3d(0, -20px, 0);
                opacity: 0
            }
        }

        @keyframes ui-dialog-fade-out {
            0% {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }

            100% {
                transform: translate3d(0, -20px, 0);
                opacity: 0
            }
        }

        @-webkit-keyframes ui-dialog-mobile-pinned-fade-in {
            0% {
                transform: translate3d(0, 20px, 0);
                opacity: 0
            }

            100% {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }

        @keyframes ui-dialog-mobile-pinned-fade-in {
            0% {
                transform: translate3d(0, 20px, 0);
                opacity: 0
            }

            100% {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }

        @-webkit-keyframes ui-dialog-mobile-pinned-fade-out {
            0% {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }

            100% {
                transform: translate3d(0, 20px, 0);
                opacity: 0
            }
        }

        @keyframes ui-dialog-mobile-pinned-fade-out {
            0% {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }

            100% {
                transform: translate3d(0, 20px, 0);
                opacity: 0
            }
        }

        .ui-modern-dialog--is-mobile-pinned {
            padding: 10px 0 0 0
        }

        .ui-modern-dialog--is-mobile-pinned[class~=dialog-fade-enter-active] {
            -webkit-animation: ui-dialog-mobile-pinned-fade-in .3s;
            animation: ui-dialog-mobile-pinned-fade-in .3s
        }

        .ui-modern-dialog--is-mobile-pinned[class~=dialog-fade-leave-active] {
            -webkit-animation: ui-dialog-mobile-pinned-fade-out .3s;
            animation: ui-dialog-mobile-pinned-fade-out .3s
        }

        .ui-modern-dialog--is-mobile-pinned .el-dialog {
            position: absolute;
            bottom: 0;
            margin-bottom: 0;
            border-radius: 20px 20px 0 0
        }

        .ui-modern-dialog--centered {
            display: flex;
            height: 100%
        }

        .ui-modern-dialog--centered .el-dialog {
            margin: auto !important
        }

        .ui-modern-dialog--centered.ui-modern-dialog--is-mobile-pinned .el-dialog {
            position: relative;
            margin-bottom: 0 !important
        }

        .ui-modern-dialog--is-fullscreen {
            padding: 0
        }

        @media screen and (max-width: 768px) {
            .ui-modern-dialog--is-fullscreen {
                background: #3a3330
            }
        }

        .ui-modern-dialog--background--default .el-dialog {
            background-color: #3a3330
        }

        .ui-modern-dialog--background--alt .el-dialog {
            background-color: #2e2826
        }

        .ui-modern-dialog--background--light .el-dialog {
            background-color: #c4bcb7
        }

        .ui-modern-dialog__close {
            position: absolute;
            top: 29px;
            right: 24px;
            z-index: 1;
            opacity: .5
        }

        @media screen and (max-width: 768px) {
            .ui-modern-dialog__close {
                top: 15px;
                right: 15px
            }
        }

        .mando-header-location {
            display: block;
            box-sizing: border-box;
            width: 100%;
            padding: 0 30px;
            color: #fff;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif
        }

        .mando-header-location__form {
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .mando-header-location__field {
            position: relative
        }

        .mando-header-location__input-wrapper {
            position: relative;
            width: 100%
        }

        .mando-header-location__input {
            display: block;
            box-sizing: border-box;
            width: 100%;
            padding: 12px 15px 12px 8px;
            color: transparent;
            color: #fff;
            font-weight: 400;
            font-size: 14px;
            font-size: 16px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            letter-spacing: .03em;
            background-color: transparent;
            border: 1px solid transparent;
            border-bottom: none;
            border-bottom: 1px solid rgba(255, 255, 255, .1);
            border-radius: 12px 12px 0 0;
            outline: 0;
            box-shadow: none
        }

        .mando-header-location__input:focus {
            color: #fff;
            border: 1px solid rgba(255, 255, 255, .1)
        }

        @media screen and (min-width: 768px) {
            .mando-header-location__input {
                padding: 12px 30px;
                font-size: 16px
            }
        }

        .mando-header-location__input2 {
            width: 300px;
            padding: 6px 0 4px 10px;
            color: transparent;
            font-size: 13px;
            background: #f6f6f6;
            border: 1px solid #cecece;
            border-radius: 8px;
            outline: none
        }

        .mando-header-location__label {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1px;
            font-size: 0;
            background: rgba(255, 255, 255, .1);
            transition: background .2s ease-in
        }

        .mando-header-location__button {
            height: 40px;
            margin-top: 35px;
            padding: 3px 20px;
            color: #fff;
            font-weight: 400;
            font-size: 11px;
            line-height: 25px;
            letter-spacing: .1em;
            white-space: nowrap;
            text-align: center;
            text-transform: uppercase;
            background-color: transparent;
            border: solid 1px #ef6f2e;
            border-radius: 18px;
            outline: 0;
            box-shadow: none;
            cursor: pointer;
            transition: opacity .3s ease 0s, background-color .3s ease 0s, border .3s ease 0s
        }

        .mando-header-location__button:hover {
            background-color: #ef6f2e
        }

        .mando-header-location__button--disable {
            border: solid 1px rgba(255, 255, 255, .1)
        }

        .mando-header-location__button--disable:hover {
            background-color: transparent;
            border: solid 1px #fff
        }

        .mando-header-location__boutique-wrap {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 60px
        }

        .mando-header-location__boutique {
            margin-bottom: 20px
        }

        .mando-header-location__list-wrapper {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 2;
            box-sizing: border-box;
            width: 100%;
            overflow: hidden;
            background-color: #3a3330;
            border: none;
            border-radius: 0 0 12px 12px;
            transition: opacity .3s ease
        }

        .mando-header-location__list-wrapper--active {
            border: 1px solid rgba(255, 255, 255, .1)
        }

        .mando-header-location__list {
            max-height: calc(40px * 5);
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            overflow-y: auto;
            color: #fff;
            border-top: none
        }

        .mando-header-location__list::-webkit-scrollbar {
            width: 5px;
            height: 50px
        }

        .mando-header-location__list::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, .1);
            border-radius: 3px
        }

        .mando-header-location__list::-webkit-scrollbar-track {
            background: #3a3330
        }

        .mando-header-location__list-item {
            height: 40px;
            padding: 0 30px;
            overflow: hidden;
            line-height: 40px;
            white-space: nowrap;
            text-overflow: ellipsis;
            list-style: none;
            background-color: #3a3330;
            cursor: pointer;
            transition: background-color .3s ease
        }

        .mando-header-location__list-item:hover {
            background-color: rgba(255, 255, 255, .1)
        }

        .mando-header-location__foreign-country {
            margin-top: 20px
        }

        .purchase-basket-page {
            position: relative;
            padding: calc(60px + 40px) 0 30px;
            background-color: #2e2826
        }

        @media screen and (max-width: 767px) {
            .purchase-basket-page {
                position: relative;
                padding: calc(60px + 40px) 0 30px;
                background-color: #2e2826;
            }

            .purchase-basket-page--is-app {
                min-height: 100vh
            }
        }

        .purchase-basket-page__wrapper {
            padding: 50px 0 100px
        }

        @media screen and (max-width: 767px) {
            .purchase-basket-page__wrapper {
                padding: 30px 20px 50px
            }
        }

        .footer {
            padding-top: 80px;
            background-color: var(--footer-bg-color);
            width: 100%
        }

        .footer nav {
            order: 2;
            display: flex;
            justify-content: space-evenly;
            grid-column-gap: 130px
        }

        @media(max-width: 1320px)and (min-width: 980px) {
            .footer nav {
                grid-column-gap: 0
            }
        }

        @media(max-width: 979px)and (min-width: 768px) {
            .footer nav {
                grid-column-gap: 0
            }
        }

        @media(max-width: 767px) {
            .footer nav {
                grid-column-gap: 0;
                padding-top: 40px;
                display: block
            }
        }

        @media(min-width: 768px)and (max-width: 1320px) {
            .footer--cart {
                padding-bottom: 55px
            }
        }

        @media(max-width: 767px) {
            .footer--cart {
                padding-bottom: 95px
            }
        }

        @media(max-width: 767px) {
            .footer {
                padding-top: 20px
            }
        }

        @media(max-width: 767px) {
            .footer__padding--big {
                padding-bottom: 120px
            }
        }

        .footer__column {
            display: inline-block;
            vertical-align: top
        }

        @media(max-width: 1320px)and (min-width: 980px) {
            .footer__column {
                width: 172px
            }

            .footer__column:not(:nth-child(5)) {
                margin-right: 30px
            }

            .footer__column:nth-child(5) {
                width: 152px
            }
        }

        @media(max-width: 979px)and (min-width: 768px) {
            .footer__column {
                width: 172px
            }

            .footer__column:not(:nth-child(5)) {
                margin-right: 0
            }

            .footer__column:nth-child(1) {
                width: 245px
            }

            .footer__column:nth-child(2) {
                width: 213px
            }

            .footer__column:nth-child(4) {
                width: 250px;
                padding-top: 63px
            }

            .footer__column:nth-child(5) {
                width: 152px;
                padding-top: 63px
            }
        }

        @media(max-width: 767px) {
            .footer__column {
                width: 100%;
                height: 45px;
                padding: 0;
                overflow: hidden;
                border-bottom: 1px solid var(--footer-mobile-item-border-color);
                transition: height .3s ease
            }
        }

        .footer__column-list {
            padding: 0;
            list-style-type: none
        }

        @media(max-width: 767px) {
            .footer__column-item:last-child {
                margin-bottom: 20px
            }
        }

        .footer__column[data-emergence_=visible] {
            opacity: 1
        }

        .footer__column-content-wrapper {
            padding-bottom: 5px
        }

        .footer__title {
            display: block;
            padding-bottom: 5px;
            color: var(--footer-font-color);
            font-weight: 400;
            font-size: 19px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            line-height: 35px;
            letter-spacing: .5px;
            transition: opacity .3s ease;
            will-change: opacity
        }

        .footer__title:hover {
            opacity: .8
        }

        @media(max-width: 767px) {
            .footer__title {
                position: relative;
                display: block;
                padding: 13px 0;
                font-size: 14px;
                line-height: 19px;
                cursor: pointer;
                pointer-events: all
            }

            .footer__title::after {
                position: absolute;
                top: 18px;
                right: 0;
                width: 13px;
                height: 9px;
                margin-bottom: 5px;
                background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMi45IiBoZWlnaHQ9IjguOSI+PHBhdGggc3Ryb2tlPSIjNzM3MzczIiBzdHJva2Utd2lkdGg9IjEuMyIgZmlsbD0ibm9uZSIgZD0iTTExLjYgMS42bC01LjQgNi01LjUtNiIvPjwvc3ZnPg==");
                content: ""
            }
        }

        .footer__column-arrow {
            position: absolute;
            top: 17px;
            right: 0;
            margin-right: 15px
        }

        .footer__footer-item {
            display: inline-block;
            padding: 6px 0;
            color: #9d9390;
            font-weight: var(--footer-font-weight);
            font-size: 16px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            line-height: 1.4;
            letter-spacing: .4px;
            vertical-align: middle;
            transition: color .3s ease
        }

        .footer__footer-item:hover {
            color: var(--footer-font-color)
        }

        @media(max-width: 767px) {
            .footer__footer-item {
                padding: 6px 20px;
                font-size: 14px
            }
        }

        .footer__pictured-items-container {
            order: 1;
            padding: 0 0 40px;
            font-size: 0;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%
        }

        @media(max-width: 767px) {
            .footer__pictured-items-container {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 12px;
                padding: 24px 0 0
            }
        }

        .footer__label {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: center;
            opacity: 1;
            transition: opacity .3s ease-in;
            will-change: opacity
        }

        .footer__label--hidden {
            opacity: 0
        }

        @media(max-width: 767px) {
            .footer__label {
                flex-direction: column
            }
        }

        .footer__info {
            width: 840px;
            margin: 0 auto;
            margin-bottom: 22px;
            padding-top: 53px;
            font-weight: 200;
            font-size: 16px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            line-height: 1.56;
            letter-spacing: .4px;
            text-align: center
        }

        @media(max-width: 979px) {
            .footer__info {
                width: 100%
            }
        }

        @media(max-width: 767px) {
            .footer__info {
                padding: 35px 15px 0;
                font-size: 14px;
                line-height: 20px
            }
        }

        .footer__share-icons-wrapper {
            display: flex;
            justify-content: center;
            position: relative;
            width: 190px;
            margin: 0 auto
        }

        .footer__share-icons {
            order: 4;
            padding-top: 50px;
            text-align: center
        }

        .footer__share-icons a:not(:last-child) {
            margin-right: 38px
        }

        .footer__share-icon {
            display: block;
            width: 20px;
            height: 20px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .footer__share-icon--telegram {
            background-image: var(--icon-telegram)
        }

        .footer__share-icon--facebook {
            background-image: var(--icon-facebook)
        }

        .footer__share-icon--instagram {
            background-image: var(--icon-instagram)
        }

        .footer__share-icon--youtube {
            background-image: var(--icon-youtube)
        }

        .footer__share-icon--vk {
            background-image: var(--icon-vkontakte)
        }

        .footer__statement {
            order: 5;
            padding-top: 34px;
            padding-bottom: 10px;
            color: #9d9390;
            font-weight: var(--footer-font-weight);
            font-size: 16px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            line-height: 1.25;
            letter-spacing: .4px;
            text-align: center
        }

        @media(max-width: 767px) {
            .footer__statement {
                font-size: 14px;
                letter-spacing: -0.4px
            }
        }

        @media(max-width: 767px) {
            .footer__copyright {
                display: inline-block;
                width: 100%;
                margin-bottom: 9px;
                padding: 0 15px
            }
        }

        .footer__terms {
            color: #9d9390;
            transition: color .3s ease;
            will-change: color
        }

        .footer__terms:hover {
            color: var(--footer-font-color)
        }

        .footer__seo {
            position: relative;
            order: 3;
            width: 850px;
            margin: 0 auto;
            padding-top: 40px;
            color: #9d9390;
            font-weight: var(--footer-font-weight);
            font-size: 16px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            line-height: 1.25;
            letter-spacing: .4px;
            will-change: height
        }

        .footer__seo-content {
            display: none;
            width: 100% !important;
            padding-top: 30px
        }

        @media(max-width: 767px) {
            .footer__seo-content {
                padding: 0
            }
        }

        .footer__seo-has-qr {
            width: 100%
        }

        .footer__seo h1,
        .footer__seo h2,
        .footer__seo h3,
        .footer__seo h4,
        .footer__seo-header-more {
            color: #9d9390
        }

        .footer__seo h1,
        .footer__seo-header-more {
            margin: 0;
            font-weight: 500;
            font-size: 22px;
            font-family: "Akzidenz-Ext", Helvetica, Arial, sans-serif;
            letter-spacing: .1px
        }

        @media(max-width: 767px) {

            .footer__seo h1,
            .footer__seo-header-more {
                font-size: 16px;
                margin: .67em
            }
        }

        .footer__seo-header-more--has-qr {
            text-align: left;
            margin-bottom: 18px !important
        }

        @media(max-width: 767px) {
            .footer__seo-header-more--has-qr {
                text-align: center
            }
        }

        .footer__seo-header-more[data-active=false] {
            pointer-events: auto;
            text-align: center
        }

        .footer__seo-header-more[data-active=false] svg {
            display: none
        }

        .footer__seo h2 {
            margin: .67em;
            font-weight: 400;
            font-size: 22px;
            letter-spacing: .1px;
            text-align: center
        }

        @media(max-width: 767px) {
            .footer__seo h2 {
                font-size: 16px
            }
        }

        .footer__seo h3,
        .footer__seo h4 {
            margin-bottom: 1.3em;
            font-weight: 400;
            text-align: center
        }

        .footer__seo a:not([class]) {
            color: #ef6f2e
        }

        .footer__seo a:not([class]):hover {
            color: #e95800
        }

        @media(max-width: 979px) {
            .footer__seo {
                width: 100%
            }
        }

        @media(max-width: 767px) {
            .footer__seo {
                font-size: 14px;
                letter-spacing: -0.4px
            }
        }

        .footer__seo-text-additional ul {
            width: 630px
        }

        @media(max-width: 979px) {
            .footer__seo-text-additional ul {
                width: 100%
            }
        }

        .footer__seo-wrap {
            transition: height .3s ease-in 0s;
            will-change: height
        }

        .footer__seo-description {
            display: flex
        }

        .footer__seo-description-centered {
            justify-content: center
        }

        @media(max-width: 767px) {
            .footer__seo-description {
                flex-direction: column
            }
        }

        @media(max-width: 767px) {
            .footer__seo-wrapper {
                text-align: center
            }
        }

        .footer__seo-text {
            padding-bottom: 1.25em
        }

        .footer__seo-header-more {
            position: relative;
            cursor: pointer;
            transition: color .3s ease;
            will-change: color
        }

        .footer__seo-header-more:hover {
            color: var(--footer-font-color)
        }

        .footer__seo-header-more svg {
            margin-bottom: 2px;
            margin-left: 13px
        }

        .footer__seo-header-more svg path {
            fill: currentcolor
        }

        .footer__seo-header-more--collapse svg {
            margin-bottom: 5px;
            transform: rotate(180deg)
        }

        @media(max-width: 767px) {
            .footer__seo-header-more svg {
                margin-bottom: 0
            }

            .footer__seo-header-more--collapse svg {
                margin-bottom: 2px
            }
        }

        .footer__subscribe {
            margin-bottom: 40px
        }

        @media(max-width: 767px) {
            .footer__subscribe {
                margin-bottom: 0
            }
        }

        .footer__webpay {
            margin-top: 40px
        }

        .footer-pictured-item {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 158px;
            height: 85px;
            overflow: hidden;
            background: rgba(49, 42, 40, .4);
            background: var(--footer-pictured-item-bg);
            border-radius: 12px;
            cursor: pointer;
            transition: opacity .1s ease-in-out
        }

        .footer-pictured-item:first-child .footer-pictured-item__pictured-items-icon {
            background-image: var(--icon-boutiques)
        }

        .footer-pictured-item:nth-of-type(2) .footer-pictured-item__pictured-items-icon {
            background-image: var(--icon-telephone)
        }

        .footer-pictured-item:nth-of-type(3) .footer-pictured-item__pictured-items-icon {
            background-image: var(--icon-service)
        }

        .footer-pictured-item:nth-of-type(4) .footer-pictured-item__pictured-items-icon {
            background-image: var(--icon-recipes)
        }

        .footer-pictured-item:not(:last-child) {
            margin-right: 30px
        }

        .footer-pictured-item:hover {
            background: rgba(0, 0, 0, .2)
        }

        @media(max-width: 767px) {
            .footer-pictured-item {
                width: 100%;
                height: 108px;
                margin: 0
            }

            .footer-pictured-item:not(:last-child) {
                margin-right: 0
            }
        }

        .footer-pictured-item__pictured-items-title {
            bottom: 22px;
            display: block;
            margin-top: 14px;
            color: var(--footer-pictured-font-color);
            font-weight: 500;
            font-size: 10px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            line-height: 9px;
            letter-spacing: 1.54px;
            text-align: center;
            text-transform: uppercase
        }

        @media(max-width: 767px) {
            .footer-pictured-item__pictured-items-title {
                bottom: 24px;
                width: 100%;
                padding: 0 10px;
                font-size: 13px;
                line-height: 20px
            }

            .footer-pictured-item__pictured-items-title::after {
                display: none
            }
        }

        .footer-pictured-item__pictured-items-icon {
            display: block;
            width: 36px;
            height: 36px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }
    </style>
    <script type="text/javascript" async="" src="//st.hybrid.ai/txsp.js"></script>
    <style type="text/css">
        @font-face {
            font-weight: 700;
            font-family: "bork";
            font-style: normal;
            src: url(/dist/jquery-components/3e057c2206a963d868a98ad77a0abf87.woff2) format("woff2"), url(/dist/jquery-components/5494bd1dded707451973b3e1b712fcf7.woff) format("woff"), url(/dist/jquery-components/0a8976262d7ccc63c5ef0c0d31a8cf12.ttf) format("truetype"), url(/dist/jquery-components/80e320bc2b0a4a994bd2e47f22412403.svg) format("svg")
        }

        @font-face {
            font-weight: 400;
            font-family: "bork";
            font-style: normal;
            src: url(/dist/jquery-components/961b9bba5025c2579ed6eb35eef65f4b.woff2) format("woff2"), url(/dist/jquery-components/d23ec6aa0bc50a1178b9e159298759c0.woff) format("woff"), url(/dist/jquery-components/8c6a28ade95056a973d352f84bbd5956.ttf) format("truetype"), url(/dist/jquery-components/3c9e45893f53d373d121b91c7c6d79d5.svg) format("svg")
        }

        @font-face {
            font-weight: 400;
            font-family: "Akzidenz-Ext";
            font-style: normal;
            src: url(/dist/jquery-components/b144424a86c4da37b8ec7b91ffd91f66.woff2) format("woff2"), url(/dist/jquery-components/5e4ee0389a6b45aaddc07af2b8518432.woff) format("woff"), url(/dist/jquery-components/a991b62ba505fde898bae3549529d7df.ttf) format("truetype"), url(/dist/jquery-components/3c140771689b2d8e7c9b376bb1f5ae7b.svg) format("svg")
        }

        @font-face {
            font-weight: 500;
            font-family: "Akzidenz";
            font-style: normal;
            src: url(/dist/jquery-components/8076a37b78c62e8c40ef1394e5b6620a.woff2) format("woff2"), url(/dist/jquery-components/088bf401b205a1406e96012590f18ae0.woff) format("woff"), url(/dist/jquery-components/306f7cc930ddf5ec860a70d0ac170a4f.ttf) format("truetype"), url(/dist/jquery-components/3ba81b52aafe93f978b235a1e7f6ae82.svg) format("svg")
        }

        @font-face {
            font-weight: 400;
            font-family: "Akzidenz";
            font-style: normal;
            src: url(/dist/jquery-components/5cb2e833119799f037a35eef37db2a40.woff2) format("woff2"), url(/dist/jquery-components/01b2833bcce2a7f1fa515fd10931902d.woff) format("woff"), url(/dist/jquery-components/ebdfae3a5848b69db5d8217e40dbc244.ttf) format("truetype"), url(/dist/jquery-components/0a4b2f3f0dbf727f063e231a009fec26.svg) format("svg")
        }

        @font-face {
            font-weight: 300;
            font-family: "Akzidenz";
            font-style: normal;
            src: url(/dist/jquery-components/40eacb137e513b29a2371580d457ded2.woff2) format("woff2"), url(/dist/jquery-components/1c20fc1874af744cc0743e507e424944.woff) format("woff"), url(/dist/jquery-components/f71fd2efd014753c4c090741d5ca1399.ttf) format("truetype"), url(/dist/jquery-components/de02af060799dbcab5bd6307bbd0dd72.svg) format("svg")
        }

        @font-face {
            font-weight: 400;
            font-family: "ALSRubl";
            font-style: normal;
            src: url(/dist/jquery-components/e773852e035faac7cd57aa34e241496b.woff2) format("woff2"), url(/dist/jquery-components/1f9c5c9093d608c147d3387008d8c06f.woff) format("woff"), url(/dist/jquery-components/7b9cc1308fc23ffd853f8ab898b26f5f.ttf) format("truetype"), url(/dist/jquery-components/9ee5f0608d2bd9b9a4e79a644a8af05a.svg) format("svg")
        }
    </style>
    <style type="text/css">
        :root {
            --header-bg-color: rgba(46, 40, 38, 0.8);
            --header-bg-hover-color: #3a3330;
            --header-font-color: #fff;
            --body-font-title-color: #fff;
            --body-font-desc-color: #fff;
            --body-bg-color: #3a3330;
            --footer-bg-color: #3a3330;
            --footer-font-color: #fff;
            --footer-font-weight: 200;
            --footer-mobile-item-border-color: rgba(255, 255, 255, 0.1);
            --input-font-color: #fff;
            --input-bg: #2e2826;
            --input-placeholder: #9d9390;
            --footer-pictured-item-bg: rgba(49, 42, 40, 0.4);
            --footer-pictured-item-hover-bg: rgba(0, 0, 0, 0.2);
            --footer-pictured-font-color: #fff;
            --horizontal-menu-font-color: #fff;
            --horizontal-menu-font-hover-color: #fff;
            --horizontal-menu-font-not-hover-color: #9d9390;
            --horizontal-menu-submenu-font-color: #876f67;
            --header-icon-color: #fff;
            --personal-account-icon-bg: transparent;
            --personal-account-icon-border: #fff;
            --icon-chevron-right: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4LjkiIGhlaWdodD0iMTIuOSI+PHBhdGggc3Ryb2tlPSIjRkZGIiBzdHJva2Utd2lkdGg9IjEuMyIgZmlsbD0ibm9uZSIgZD0iTTIgLjdsNS42IDUuNUwyIDExLjYiLz48L3N2Zz4=");
            --icon-boutiques: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0NSIgaGVpZ2h0PSI1NSI+PHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBmaWxsPSIjRkZGIiBkPSJNMzguNiAzOWwtMTYgMTZMNi4zIDM4LjhjLTMuOC00LTYuNC0xMC02LjQtMTZDMCAxMCAxMCAwIDIyLjMgMFM0NSAxMC4yIDQ1IDIyLjdjMCA2LTIuNiAxMi02LjQgMTYuMnptLTE2LTM3QzExIDIgMiAxMS40IDIgMjIuNyAyIDI4IDQuMiAzMy41IDcuOCAzNy41bDE0LjcgMTQuN0wzNyAzNy41YzMuOC00IDYtOS41IDYtMTQuOEM0MyAxMS40IDMzLjggMiAyMi41IDJ6bTAgMjdDMTkgMjkgMTYgMjYgMTYgMjIuNWMwLTMuNiAzLTYuNSA2LjUtNi41IDMuNiAwIDYuNSAzIDYuNSA2LjUgMCAzLjYtMyA2LjUtNi41IDYuNXptMC0xMUMyMCAxOCAxOCAyMCAxOCAyMi41czIgNC41IDQuNSA0LjUgNC41LTIgNC41LTQuNS0yLTQuNS00LjUtNC41eiIvPjwvc3ZnPg==");
            --icon-telephone: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0NyIgaGVpZ2h0PSI0NiI+PHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBmaWxsPSIjRkZGIiBkPSJNMzcuNyA0NS45OGMtMi40OCAwLTUuNjQtMS4wMi05LjM4LTMuMDUtNS4xNS0yLjgtMTAuMzItNi45LTEzLjE3LTkuNzVsLTEuNC0xLjRjLTIuODUtMi44NS02Ljk3LTguMDItOS43Ny0xMy4xNi0zLjQ4LTYuNC00LTExLjEtMS41LTEzLjU4TDYgMS41MmMxLjU1LTEuNTUgNC4wOC0xLjU1IDUuNjMgMGw2LjM0IDYuMzRjMS41NiAxLjU1IDEuNTYgNC4wNyAwIDUuNjJsLTIuMSAyLjFjLS4xNS4xNi0uMjMgMS4yMi44IDMuMzYuOTYgMi4wMiAyLjUgNC4xOCA0LjEyIDUuOGwxLjQgMS40YzMuOCAzLjg0IDguNSA1LjUgOS4xIDQuOTNsMi4xLTIuMWMxLjUyLTEuNTYgNC4xLTEuNTYgNS42IDBsNi4zMyA2LjMyYzEuNTUgMS41IDEuNTUgNCAwIDUuNmwtMy41IDMuNWMtMSAxLjEtMi40NCAxLjYtNC4yIDEuNnpNOC44MiAyLjM1Yy0uNSAwLTEuMDIuMi0xLjQuNThMMy44OCA2LjQ1QzIuMSA4LjIzIDIuNzUgMTIuMiA1LjcyIDE3LjY3YzIuNyA0Ljk3IDYuNjggOS45NiA5LjQyIDEyLjdsMS40IDEuNGMyLjc1IDIuNzQgNy43NSA2LjcgMTIuNzMgOS40IDUuNDYgMi45OCA5LjQ1IDMuNjMgMTEuMjMgMS44NWwzLjUzLTMuNWMuNzgtLjguNzgtMi4wNSAwLTIuODNsLTYuMzMtNi40Yy0uOC0uOC0yLjEtLjgtMi44NyAwbC0yLjEgMi4xYy0xLjI4IDEuMjMtMy43Ny40My01LjYzLS40LTIuMi0xLjEtNC42LTIuOC02LjM0LTQuNWwtMS40Mi0xLjQ3Yy0xLjc3LTEuNzUtMy40NS00LjEyLTQuNS02LjMzLS45LTEuODYtMS43LTQuMzUtLjQzLTUuNmwyLjEtMi4xYy44LS43Ny44LTIuMDMgMC0yLjhsLTYuMy02LjNjLS40LS40LS45LS42LTEuNC0uNnoiLz48L3N2Zz4=");
            --icon-service: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MyIgaGVpZ2h0PSI1MyI+PHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBmaWxsPSIjRkZGIiBkPSJNNDguMjYgMjQuOThjLTIuNjcgMi42NS02LjIzIDQuMS0xMC4wMiA0LjEtMS40LjAyLTIuOC0uMi00LjE1LS42bC0yMS40IDIyLjFjLTEuNSAxLjUtMy41IDIuMzctNS42IDIuMzctMiAwLTMuOC0uNzMtNS4xLTIuMDctMS4zLTEuMzYtMi0zLjE4LTItNS4xMyAwLTIuMDMuOS00LjAyIDIuNC01LjQ0bDIyLjItMjEuMmMtMS41LTQuOS0uMi0xMC4zIDMuNTItMTRDMzAuODYgMi40IDM0LjQgMSAzOC4yIDFjMi4wMiAwIDMuOTcuNCA1LjggMS4yMy42LjI2IDEuMDMuOCAxLjE1IDEuNDUuMTIuNjgtLjEgMS4zLS41NSAxLjhsLTYuNSA2LjQ2Yy0uNi42OC0xIDEuNi0xIDIuNTcgMCAxIC40IDEuOSAxLjA3IDIuNi43LjcgMS42IDEuMSAyLjYgMS4xczEuOS0uMzMgMi42LTEuMDJsNS41Mi01LjVjLjQtLjM3LjktLjU3IDEuNC0uNTcuMiAwIC40LjA0LjYuMS43LjIgMS4yLjggMS4zIDEuNTUuOCA0LjU0LS42NiA5LjItMy45MyAxMi40NHptMS45Ni0xMi4xbC01LjUzIDUuNWMtMS4xIDEuMS0yLjYgMS42NC00IDEuNjQtMS41IDAtMi45LS41NS00LTEuNjQtMi4yLTIuMi0yLjItNS43NyAwLTcuOTVsNi41LTYuNDZjLTEuNi0uNy0zLjMtMS4wNS01LTEuMDUtMy4xIDAtNi4yIDEuMTctOC42IDMuNTMtMy42IDMuNi00LjUgOC45Mi0yLjYgMTMuMzMtLjMuMTctLjYuMzYtLjkuNjJMMy44IDQxLjc0Yy0yLjI0IDIuMTMtMi4zOCA1LjY0LS4yNyA3Ljc0IDEuMDcgMSAyLjQgMS41IDMuNyAxLjUgMS41IDAgMy0uNiA0LjEtMS43N0wzMi44IDI3Yy4yNS0uMjYuNDUtLjU2LjYyLS44NiAxLjU0LjY2IDMuMiAxIDQuODQgMSAzLjEyIDAgNi4yMy0xLjIgOC42LTMuNTUgMi45My0yLjkgNC4wNS03IDMuMzgtMTAuN3pNNy40OCA0Ny44MmgtLjFjLS41NC0uMDMtMS4wMy0uMjYtMS4zOC0uNjYtLjM2LS40LS41NC0uOS0uNTItMS40Mi4wMy0uNTMuMjYtMS4wMi42Ni0xLjM4LjQtLjM1LjktLjUyIDEuNDMtLjUgMS4xLjA1IDEuOTUuOTggMS45IDIuMDctLjAzLjUzLS4yNiAxLjAyLS42NiAxLjM4LS4zLjQtLjguNi0xLjMuNnoiLz48L3N2Zz4=");
            --icon-recipes: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MiIgaGVpZ2h0PSI0MyI+PHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBmaWxsPSIjRkZGIiBkPSJNMCA0M3YtMmg2MnYySDB6bTMwLTMyLjVWOGMtMS43LS42LTMtMi0zLTQgMC0yLjIgMS44LTQgNC00czQgMS44IDQgNGMwIDItMS4zIDMuNC0zIDR2Mi41YzE1LjQuNCAyNy44IDEzIDI3LjggMjguNWgtNTdjMC0xNS4zIDEyLTI3LjggMjcuMi0yOC41ek0zMyA0YzAtMS0xLTItMi0ycy0yIDEtMiAyIDEgMiAyIDIgMi0xIDItMnptLTEuOCA4LjVDMTcuMiAxMi41IDYgMjMuMyA1IDM3aDUzYy0xLTEzLjctMTIuNi0yNC41LTI2LjUtMjQuNXoiLz48L3N2Zz4=");
            --icon-telegram: url("data:image/svg+xml,%3Csvg width='16' height='16' viewBox='0 0 20 17' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M15.1822 16.8604C16.3804 17.3767 16.8297 16.2949 16.8297 16.2949L20 0.609469C19.975 -0.447701 18.5272 0.191518 18.5272 0.191518L0.778531 7.05083C0.778531 7.05083 -0.0702092 7.34585 0.00467962 7.86214C0.0795685 8.37844 0.753568 8.62429 0.753568 8.62429L5.22194 10.0994C5.22194 10.0994 6.56993 14.451 6.84453 15.2869C7.09416 16.0982 7.31882 16.1228 7.31882 16.1228C7.56845 16.2212 7.79312 16.0491 7.79312 16.0491L10.6888 13.4676L15.1822 16.8604ZM16.3628 3.16903C16.3628 3.16903 17.0109 2.78871 16.985 3.16903C16.985 3.16903 17.0886 3.21975 16.7516 3.57472C16.4406 3.87898 9.1043 10.3192 8.11922 11.1813C8.04145 11.232 7.9896 11.3081 7.9896 11.4095L7.70445 13.7929C7.6526 14.0464 7.3156 14.0718 7.23783 13.8436L6.01944 9.93887C5.9676 9.78674 6.01944 9.60926 6.17498 9.50784L16.3628 3.16903Z' fill='white'/%3E%3C/svg%3E ");
            --icon-facebook: url("data:image/svg+xml,%3Csvg version='1.0' xmlns='http://www.w3.org/2000/svg' width='18px' height='18px' viewBox='0 0 130.000000 130.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,130.000000) scale(0.100000,-0.100000)' fill='%23fff' stroke='none'%3E%3Cpath d='M491 1234 c-192 -52 -354 -207 -418 -399 -22 -67 -26 -98 -26 -190 0 -93 4 -122 27 -188 54 -161 163 -286 311 -357 44 -22 99 -42 123 -46 l42 -7 0 217 0 216 -75 0 -75 0 0 85 0 85 75 0 75 0 0 91 c0 116 14 164 65 214 48 49 98 65 196 65 122 0 120 1 117 -89 l-3 -76 -60 -3 c-89 -5 -105 -23 -105 -124 l0 -78 80 0 c91 0 86 7 69 -101 l-12 -69 -68 0 -69 0 0 -215 c0 -248 -8 -233 104 -191 201 76 346 246 386 454 19 93 8 231 -23 322 -66 186 -226 334 -417 385 -71 19 -248 18 -319 -1z'/%3E%3C/g%3E%3C/svg%3E ");
            --icon-instagram: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18px' height='18px' viewbox='0 0 18 18'%3E%3Cpath fill-rule='evenodd' fill='rgb(255, 255, 255)' d='M17.947 12.711C17.904 13.67 17.749 14.323 17.526 14.895 17.297 15.488 16.99 15.989 16.49 16.49 15.989 16.99 15.488 17.298 14.896 17.529 14.321 17.75 13.669 17.902 12.712 17.946 11.751 17.99 11.445 18 9.001 18 6.557 18 6.251 17.99 5.289 17.946 4.33 17.902 3.676 17.75 3.104 17.529 2.513 17.298 2.013 16.99 1.511 16.49 1.009 15.989.704 15.488.473 14.895.249 14.323.099 13.67.055 12.711.009 11.751-.001 11.445-.001 9-.001 6.556.009 6.249.055 5.29.099 4.332.249 3.677.473 3.104.704 2.513 1.009 2.011 1.511 1.511 2.013 1.011 2.513.702 3.104.473 3.676.251 4.33.098 5.289.054 6.251.011 6.557 0 9.001 0 11.445 0 11.751.011 12.712.054 13.669.098 14.321.251 14.896.473 15.488.702 15.989 1.011 16.49 1.511 16.99 2.011 17.297 2.513 17.526 3.104 17.749 3.677 17.904 4.332 17.947 5.29 17.989 6.249 17.999 6.556 17.999 9 17.999 11.445 17.989 11.751 17.947 12.711ZM15.955 5.549C15.915 4.716 15.776 4.263 15.658 3.963 15.505 3.563 15.319 3.279 15.02 2.981 14.721 2.681 14.437 2.496 14.038 2.341 13.737 2.224 13.285 2.085 12.453 2.047 11.551 2.006 11.281 1.997 9.001 1.997 6.72 1.997 6.45 2.006 5.549 2.047 4.716 2.085 4.262 2.224 3.963 2.341 3.563 2.496 3.28 2.681 2.981 2.981 2.68 3.279 2.496 3.563 2.34 3.963 2.224 4.263 2.084 4.716 2.048 5.549 2.006 6.448 1.996 6.719 1.996 9 1.996 11.281 2.006 11.552 2.048 12.452 2.084 13.286 2.224 13.737 2.34 14.038 2.496 14.437 2.68 14.721 2.981 15.02 3.28 15.319 3.563 15.505 3.963 15.66 4.262 15.777 4.716 15.916 5.549 15.953 6.45 15.995 6.718 16.004 9.001 16.004 11.281 16.004 11.551 15.995 12.453 15.953 13.285 15.916 13.737 15.777 14.038 15.66 14.437 15.505 14.721 15.319 15.02 15.02 15.319 14.721 15.505 14.437 15.658 14.038 15.776 13.737 15.915 13.286 15.955 12.452 15.995 11.552 16.003 11.281 16.003 9 16.003 6.719 15.995 6.448 15.955 5.549ZM13.504 5.731C12.815 5.731 12.256 5.166 12.256 4.471 12.256 3.775 12.815 3.211 13.504 3.211 14.191 3.211 14.75 3.775 14.75 4.471 14.75 5.166 14.191 5.731 13.504 5.731ZM9.001 12.997C6.792 12.997 5.004 11.208 5.004 9 5.004 6.793 6.792 5.003 9.001 5.003 11.207 5.003 12.997 6.793 12.997 9 12.997 11.208 11.207 12.997 9.001 12.997ZM9.001 7C7.896 7 6.999 7.896 6.999 9 6.999 10.105 7.896 11.001 9.001 11.001 10.106 11.001 11.002 10.105 11.002 9 11.002 7.896 10.106 7 9.001 7Z'%3E%3C/path%3E%3C/svg%3E ");
            --icon-youtube: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18px' height='15px' viewbox='0 0 18 15'%3E%3Cpath fill-rule='evenodd' fill='rgb(255, 255, 255)' d='M14.718 1.11C12.01.919 5.987.919 3.283 1.11.358 1.316.013 3.148-.01 7.965.013 12.777.354 14.616 3.283 14.824 5.987 15.014 12.01 15.014 14.718 14.824 17.64 14.616 17.987 12.785 18.009 7.965 17.987 3.156 17.646 1.316 14.718 1.11ZM7 10.984 7 4.985 12.5 7.985 7 10.984Z'%3E%3C/path%3E%3C/svg%3E");
            --icon-vkontakte: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='21px' height='12px' viewbox='0 0 21 12'%3E%3Cpath fill-rule='evenodd' fill='%23fff' d='M9.87 11.956 11.071 11.956C11.071 11.956 11.432 11.916 11.617 11.716 11.787 11.533 11.782 11.19 11.782 11.19 11.782 11.19 11.758 9.577 12.505 9.339 13.24 9.106 14.188 10.898 15.191 11.587 15.948 12.108 16.524 11.994 16.524 11.994L19.205 11.956C19.205 11.956 20.606 11.869 19.941 10.766 19.886 10.675 19.554 9.949 17.949 8.456 16.266 6.895 16.494 7.147 18.517 4.446 19.751 2.8 20.243 1.795 20.088 1.365 19.942.955 19.036 1.063 19.036 1.063L16.018 1.082C16.018 1.082 15.793 1.051 15.627 1.151 15.466 1.247 15.361 1.475 15.361 1.475 15.361 1.475 14.883 2.748 14.246 3.831 12.904 6.117 12.366 6.237 12.146 6.095 11.635 5.765 11.762 4.767 11.762 4.058 11.762 1.843 12.099.921 11.111.681 10.781.602 10.541.549 9.7.541 8.624.529 7.715.544 7.198.798 6.854.966 6.59 1.341 6.751 1.362 6.952 1.389 7.403 1.484 7.642 1.811 7.951 2.232 7.939 3.178 7.939 3.178 7.939 3.178 8.116 5.785 7.526 6.109 7.118 6.331 6.561 5.878 5.362 3.805 4.75 2.742 4.285 1.568 4.285 1.568 4.285 1.568 4.195 1.349 4.036 1.232 3.843 1.089 3.574 1.045 3.574 1.045L.707 1.063C.707 1.063.275 1.075.117 1.263-.023 1.429.106 1.775.106 1.775.106 1.775 2.35 7.034 4.891 9.685 7.223 12.116 9.87 11.956 9.87 11.956L9.87 11.956Z'%3E%3C/path%3E%3C/svg%3E");
            --dividing-line-header: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0) 100%);
            --footer-breadcrumbs-bg-color: #2e2826;
            --footer-breadcrumbs-font-color: #fff;
            --breadcrumbs-font-color: #9d9390;
            --product-review-bg-color: #3a3330;
            --product-main-gallery-bg-color: #2e2826;
            --product-specification-bg-color: url("//st.bork.ru/images/characteristics_bg_2.jpg");
            --product-specification-font-color: #2e2826;
            --product-specification-border-color: rgba(255, 255, 255, 0.1);
            --product-specification-expand-btn-color: #8f8480;
            --dividing-line-footer: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0) 100%);
            --product-award-bg-color: #211b19;
            --product-preview-bg-color: #3a3330;
            --product-preview-icon-color: #fff;
            --product-preview-mobile-icon-color: #fff;
            --product-preview-features-color: #9d9390;
            --product-preview-desktop-features-bg: linear-gradient(180deg, #2E2826 0%, #2B2523 100%);
            --product-preview-desktop-gradient: linear-gradient(180deg, #3A3330 0%, #352E2C 100%);
            --product-preview-mobile-gradient: linear-gradient(180deg, rgba(58, 51, 48, 0.8) 0%, #3A3330 100%);
            --floating-buy-button-bg-color: rgba(0, 0, 0, 0.8);
            --icon-ar: url("data:image/svg+xml,%3Csvg width='92' height='84' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath d='M55.7968 25.9515l26.4064-15.2457 9 15.5884L64.866 41.5l26.3372 15.2058-9 15.5884-26.4064-15.2457V84h-18V57.1284l-28 16.1658-9-15.5884L28.866 41.5.7968 25.2942l9-15.5884 28 16.1658V0h18v25.9515z' id='a'/%3E%3C/defs%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23FFF' fill-rule='nonzero'%3E%3Cpath d='M55.9666 34.2032c.7162-.4163 1.6343-.1733 2.0507.5429.4163.7162.1733 1.6343-.5429 2.0507l-10.3205 6c-.7162.4163-1.6343.1733-2.0507-.5429-.4164-.7162-.1733-1.6343.5429-2.0507l10.3205-6zM76.9666 22.2032c.7162-.4163 1.6343-.1733 2.0507.5429.4163.7162.1733 1.6343-.5429 2.0507l-10.3205 6c-.7162.4163-1.6343.1733-2.0507-.5429-.4164-.7162-.1733-1.6343.5429-2.0507l10.3205-6zM24.9666 52.2032c.7162-.4163 1.6343-.1733 2.0507.5429.4163.7162.1733 1.6343-.5429 2.0507l-10.3205 6c-.7162.4163-1.6343.1733-2.0507-.5429-.4164-.7162-.1733-1.6343.5429-2.0507l10.3205-6z'/%3E%3Cpath d='M44.9 41.5c0-.8284.6716-1.5 1.5-1.5s1.5.6716 1.5 1.5v10c0 .8284-.6716 1.5-1.5 1.5s-1.5-.6716-1.5-1.5v-10zM44.9 68.5c0-.8284.6716-1.5 1.5-1.5s1.5.6716 1.5 1.5v10c0 .8284-.6716 1.5-1.5 1.5s-1.5-.6716-1.5-1.5v-10zM44.9 4.5c0-.8284.6716-1.5 1.5-1.5s1.5.6716 1.5 1.5v10c0 .8284-.6716 1.5-1.5 1.5s-1.5-.6716-1.5-1.5v-10z'/%3E%3Cpath d='M36.2998 37.455c-.7193-.4111-.969-1.3274-.558-2.0467.411-.7192 1.3274-.969 2.0466-.558l9.356 5.3474c.7192.411.969 1.3274.5579 2.0466-.411.7193-1.3274.969-2.0466.558l-9.356-5.3474zM14.2998 24.455c-.7193-.4111-.969-1.3274-.558-2.0467.411-.7192 1.3274-.969 2.0466-.558l9.356 5.3474c.7192.411.969 1.3274.5579 2.0466-.411.7193-1.3274.969-2.0466.558l-9.356-5.3474zM68.2998 55.455c-.7193-.4111-.969-1.3274-.558-2.0467.411-.7192 1.3274-.969 2.0466-.558l9.356 5.3474c.7192.411.969 1.3274.5579 2.0466-.411.7193-1.3274.969-2.0466.558l-9.356-5.3474z'/%3E%3C/g%3E%3Cg fill='%23FFF' fill-rule='nonzero' opacity='.5032'%3E%3Cpath d='M46 3h1v77h-1z'/%3E%3Cpath d='M12.6404 22.6238l.4992-.8664 67.1931 38.71-.4992.8666z'/%3E%3Cpath d='M13.1357 61.3261l-.4996-.8663 67.2253-38.763.4995.8663z'/%3E%3C/g%3E%3Cpath d='M46.5 3.5774L13.658 22.5387v37.9226L46.5 79.4226l32.842-18.9613V22.5387L46.5 3.5774zm33.842 18.384v39.0773L46.5 80.5774 12.658 61.0387V21.9613L46.5 2.4226l33.842 19.5387z' fill-opacity='.5' fill='%23FFF' fill-rule='nonzero'/%3E%3Cmask id='b' fill='%23fff'%3E%3Cuse xlink:href='%23a'/%3E%3C/mask%3E%3Cpath d='M46.5 4.732L14.658 23.116v36.768L46.5 78.268l31.842-18.384V23.116L46.5 4.732zm34.842 16.652v40.232L46.5 81.732 11.658 61.616V21.384L46.5 1.268l34.842 20.116z' fill='%23FFF' fill-rule='nonzero' mask='url(%23b)'/%3E%3C/g%3E%3C/svg%3E");
            --icon-arrow-top: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 8'%3E%3Cpath fill='%23FFFFFF' d='M6 0l6 6.7-1 .8-5-5.6-5 5.6-1-.8z'/%3E%3C/svg%3E");
            --icon-valid: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='none'%3E%3Cpath fill='%23fff' d='M16.795 5.2a.714.714 0 0 0-.99 0l-8.386 8.156-3.224-3.135a.714.714 0 0 0-.99 0 .668.668 0 0 0 0 .963L6.924 14.8a.714.714 0 0 0 .99 0l8.881-8.639a.668.668 0 0 0 0-.963Z'/%3E%3C/svg%3E");
            --interior-qr-code-dialog-bg-color: #3a3330;
            --product-special-offer-bg-color: #2e2826;
            --product-special-offer-font-color: #fff;
            --product-special-offer-conditions-font-color: #9d9390;
            --tab-bar-container: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='351' height='77' fill='none'%3E%3Cg filter='url(%23a)'%3E%3Cpath fill='%23000' fill-opacity='.25' d='M0 22C0 9.85 9.85 0 22 0h307c12.15 0 22 9.85 22 22v33c0 12.15-9.85 22-22 22H22C9.85 77 0 67.15 0 55V22Z'/%3E%3C/g%3E%3Cdefs%3E%3Cfilter id='a' width='387' height='113' x='-18' y='-18' color-interpolation-filters='sRGB' filterUnits='userSpaceOnUse'%3E%3CfeFlood flood-opacity='0' result='BackgroundImageFix'/%3E%3CfeGaussianBlur in='BackgroundImageFix' stdDeviation='9'/%3E%3CfeComposite in2='SourceAlpha' operator='in' result='effect1_backgroundBlur_9766_22526'/%3E%3CfeBlend in='SourceGraphic' in2='effect1_backgroundBlur_9766_22526' result='shape'/%3E%3C/filter%3E%3C/defs%3E%3C/svg%3E");
            --tab-bar-gradient: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000 100%);
            --tab-bar-main-button-wrapper-color: #9d9390;
            --tab-bar-button-title-color: #9d9390;
            --tab-bar-button-title-active-color: #fff;
            --search-animation-duration: 200ms;
            --product-delivery-bg-color: #2e2826;
            --product-delivery-text-color: #9d9390;
            --product-delivery-value-color: #fff;
            --product-delivery-hint-bg-color: #3a3330;
            --product-delivery-hint-color: #e2dad8;
            --product-delivery-divider-color: rgba(255, 255, 255, 0.1);
            --product-delivery-modal-title-color: #fff;
            --product-delivery-modal-text-color: #9d9390;
            --product-delivery-info-icon: url("data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20viewBox%3D%220%200%2016%2017%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20stroke%3D%22%239D9390%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-width%3D%22.8%22%20d%3D%22M.4%208.5C.4%204.32%203.82.9%208%20.9s7.6%203.42%207.6%207.6-3.42%207.6-7.6%207.6S.4%2012.68.4%208.5z%22%2F%3E%3Cpath%20stroke%3D%22%239D9390%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-width%3D%221.2%22%20d%3D%22M8%2011.7v-4%22%2F%3E%3Cpath%20stroke%3D%22%239D9390%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-width%3D%221.6%22%20d%3D%22M8.004%205.3h-.009%22%2F%3E%3C%2Fsvg%3E");
            --hotline-number-color: #fff;
            --icon-basket: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='22' fill='none'%3E%3Cpath stroke='%23fff' stroke-linecap='round' d='M5 11C5-2.333 15-2.333 15 11'/%3E%3Cpath stroke='%23fff' d='M.5 7.93c0-.244.19-.407.475-.407h18.05c.285 0 .475.163.475.407v12.187c0 .244-.19.406-.475.406H.975a.519.519 0 0 1-.336-.119.38.38 0 0 1-.139-.287V7.93Z' clip-rule='evenodd'/%3E%3Cpath fill='%23F37021' fill-rule='evenodd' d='M10 18a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z' clip-rule='evenodd'/%3E%3C/svg%3E");
            --ui-components-separator-color: #fff;
            --product-availability-modal-primary: #fff;
            --product-availability-modal-secondary: #9d9390;
            --product-availability-modal-accent: #2e2826;
            --product-availability-modal-bg-body: #3a3330;
            --product-availability-modal-bg-footer: #1F1A19;
            --product-availability-modal-divider: rgba(255, 255, 255, 0.1);
            --product-ar-bg: linear-gradient(0deg, #282220 0%, #000000 100%)
        }

        [data-theme=light] {
            --header-bg-color: rgba(226, 218, 216, 0.4);
            --header-bg-hover-color: #e2dad8;
            --header-font-color: #2e2826;
            --body-font-title-color: #382f2c;
            --body-font-desc-color: #746762;
            --body-bg-color: #e6e0de;
            --footer-bg-color: #efebea;
            --footer-font-color: #2e2826;
            --footer-font-weight: 400;
            --footer-mobile-item-border-color: rgba(0, 0, 0, 0.1);
            --input-font-color: #382f2c;
            --input-bg: #e6e0de;
            --input-placeholder: #3a3330;
            --footer-pictured-item-bg: #e6e0de;
            --footer-pictured-item-hover-bg: #cfc8c4;
            --footer-pictured-font-color: #746762;
            --horizontal-menu-font-color: #2e2826;
            --horizontal-menu-font-hover-color: #2b2524;
            --horizontal-menu-font-not-hover-color: #9d9390;
            --horizontal-menu-submenu-font-color: #9d9390;
            --header-icon-color: #2e2826;
            --personal-account-icon-bg: #3a3330;
            --personal-account-icon-border: transparent;
            --icon-chevron-right: url("data:image/svg+xml,%3Csvg width='8' height='13' viewBox='0 0 8 13' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.2002 1.10999L6.8002 6.49998L1.2002 11.792' stroke='%233A3330' stroke-width='1.3'/%3E%3C/svg%3E%0A");
            --icon-boutiques: url("data:image/svg+xml,%3Csvg width='26' height='32' viewBox='0 0 26 32' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.9719 22.3693L13.1104 31.2308L4.0827 22.2585C1.97809 20.0431 0.538086 16.7201 0.538086 13.397C0.593471 6.30775 6.13193 0.769287 12.9442 0.769287C19.7565 0.769287 25.5165 6.41852 25.5165 13.3416C25.5165 16.6647 24.0765 19.9878 21.9719 22.3139V22.3693ZM13.1104 1.87698C6.68578 1.87698 1.70116 7.08313 1.70116 13.3416C1.70116 16.277 2.91962 19.3231 4.91347 21.5385L13.055 29.6801L21.0858 21.5385C23.1904 19.3231 24.4089 16.277 24.4089 13.3416C24.4089 7.08313 19.3135 1.87698 13.055 1.87698H13.1104ZM13.1104 16.8308C11.1165 16.8308 9.45501 15.1693 9.45501 13.2308C9.45501 11.237 11.1165 9.63083 13.055 9.63083C15.0489 9.63083 16.655 11.2924 16.655 13.2308C16.655 15.2247 14.9935 16.8308 13.055 16.8308H13.1104ZM13.1104 10.7385C11.6704 10.7385 10.5627 11.8462 10.5627 13.2308C10.5627 14.6154 11.6704 15.7231 13.055 15.7231C14.4396 15.7231 15.5473 14.6154 15.5473 13.2308C15.5473 11.8462 14.4396 10.7385 13.055 10.7385H13.1104Z' fill='%23746762'/%3E%3C/svg%3E%0A");
            --icon-telephone: url("data:image/svg+xml,%3Csvg width='26' height='26' viewBox='0 0 26 26' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M20.7572 25.6401C19.3836 25.6401 17.6335 25.0751 15.5621 23.9508C12.7098 22.4001 9.84639 20.1293 8.26793 18.5508L7.49254 17.7754C5.91408 16.197 3.63223 13.3336 2.08146 10.4868C0.154081 6.94221 -0.133918 4.33913 1.2507 2.96559L3.20023 1.01605C3.61437 0.603773 4.17495 0.372314 4.75931 0.372314C5.34367 0.372314 5.90428 0.603773 6.31839 1.01605L9.82977 4.52744C10.0351 4.7313 10.198 4.97376 10.3092 5.24086C10.4204 5.50796 10.4777 5.79441 10.4777 6.08374C10.4777 6.37307 10.4204 6.65952 10.3092 6.92664C10.198 7.19371 10.0351 7.43618 9.82977 7.64005L8.6667 8.80313C8.58362 8.89174 8.53931 9.47882 9.10977 10.6641C9.64146 11.7828 10.4944 12.9791 11.3916 13.8764L12.167 14.6517C14.2716 16.7785 16.8747 17.6979 17.207 17.3822L18.3701 16.2191C19.2119 15.3551 20.6408 15.3551 21.4716 16.2191L24.9775 19.7194C25.8359 20.5502 25.8359 21.9348 24.9775 22.821L23.039 24.7594C22.4852 25.3687 21.6876 25.6456 20.7128 25.6456L20.7572 25.6401ZM4.76208 1.47574C4.48516 1.47574 4.19716 1.58651 3.9867 1.79697L2.02608 3.74651C1.04023 4.73236 1.40023 6.93113 3.04516 9.96067C4.54054 12.7133 6.74485 15.477 8.26239 16.9945L9.03777 17.7699C10.5608 19.2874 13.3301 21.4807 16.0882 22.9761C19.1122 24.6265 21.3221 24.9865 22.3079 24.0007L24.263 22.0622C24.695 21.6191 24.695 20.9268 24.263 20.4948L20.7572 16.9502C20.3141 16.5071 19.5941 16.5071 19.1676 16.9502L18.0045 18.1133C17.2956 18.7945 15.9165 18.3514 14.8864 17.8917C13.6679 17.2825 12.3387 16.341 11.375 15.3994L10.5885 14.5853C9.60823 13.6161 8.67777 12.3034 8.09623 11.0794C7.59777 10.0493 7.1547 8.67021 7.85808 7.9779L9.02116 6.81482C9.46423 6.38836 9.46423 5.69051 9.02116 5.26405L5.53193 1.77482C5.31039 1.55328 5.03346 1.44251 4.75654 1.44251L4.76208 1.47574Z' fill='%23746762'/%3E%3C/svg%3E%0A");
            --icon-service: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M27.2234 13.9089C25.7446 15.3766 23.7729 16.1797 21.6739 16.1797C20.8985 16.1908 20.1231 16.0689 19.3754 15.8474L7.5231 28.0874C6.69233 28.9181 5.58464 29.4 4.42157 29.4C3.31387 29.4 2.31695 28.9957 1.59695 28.2535C0.87695 27.5003 0.489258 26.4923 0.489258 25.4123C0.489258 24.288 0.987719 23.1858 1.81849 22.3994L14.1139 10.6578C13.2831 7.94399 14.0031 4.95322 16.0634 2.90399C17.5865 1.40307 19.5471 0.627686 21.6517 0.627686C22.7705 0.627686 23.8505 0.849224 24.864 1.30892C25.1963 1.45292 25.4345 1.75199 25.5009 2.11199C25.5674 2.48861 25.4456 2.83199 25.1963 3.10892L21.5963 6.68676C21.264 7.06338 21.0425 7.57292 21.0425 8.11015C21.0425 8.66399 21.264 9.16246 21.6351 9.55015C22.0228 9.93784 22.5213 10.1594 23.0751 10.1594C23.6289 10.1594 24.1274 9.97661 24.5151 9.59446L27.5723 6.5483C27.7939 6.34338 28.0708 6.23261 28.3477 6.23261C28.4585 6.23261 28.5693 6.25476 28.68 6.28799C29.0677 6.39876 29.3446 6.73107 29.4 7.14646C29.8431 9.66092 29.0345 12.2418 27.2234 14.0363V13.9089ZM28.3089 7.20738L25.2462 10.2535C24.6369 10.8628 23.8062 11.1618 23.0308 11.1618C22.2 11.1618 21.4246 10.8572 20.8154 10.2535C19.5969 9.03507 19.5969 7.05784 20.8154 5.85046L24.4154 2.27261C23.5293 1.88492 22.5877 1.69107 21.6462 1.69107C19.9293 1.69107 18.2123 2.33907 16.8831 3.64615C14.8893 5.63999 14.3908 8.58646 15.4431 11.0289C15.2769 11.1231 15.1108 11.2283 14.9446 11.3723L2.59941 23.1914C1.3588 24.3711 1.28126 26.3151 2.44987 27.4781C3.04249 28.032 3.7791 28.3089 4.4991 28.3089C5.32987 28.3089 6.16064 27.9766 6.76987 27.3286L18.6609 15.0277C18.7994 14.8837 18.9102 14.7175 19.0043 14.5514C19.8573 14.9169 20.7766 15.1052 21.6849 15.1052C23.4129 15.1052 25.1354 14.4406 26.448 13.1391C28.0708 11.5329 28.6911 9.26215 28.32 7.21292L28.3089 7.20738ZM4.63757 26.5588H4.58218C4.2831 26.5421 4.01172 26.4148 3.81787 26.1932C3.61849 25.9717 3.5188 25.6948 3.52987 25.4068C3.54649 25.1132 3.67387 24.8418 3.89541 24.6425C4.11695 24.4486 4.39387 24.3545 4.68741 24.3655C5.29664 24.3932 5.76741 24.9083 5.73972 25.512C5.7231 25.8055 5.59572 26.0769 5.37418 26.2763C5.20803 26.4978 4.9311 26.6086 4.65418 26.6086L4.63757 26.5588Z' fill='%23746762'/%3E%3C/svg%3E ");
            --icon-recipes: url("data:image/svg+xml,%3Csvg width='36' height='24' viewBox='0 0 36 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M0.830078 23.9077V22.8H35.1685V23.9077H0.830078ZM17.4455 5.90767V4.52305C16.5039 4.19075 15.7839 3.41536 15.7839 2.30767C15.7839 1.08921 16.7808 0.0922852 17.9993 0.0922852C19.2178 0.0922852 20.2147 1.08921 20.2147 2.30767C20.2147 3.41536 19.4947 4.19075 18.5532 4.52305V5.90767C27.0824 6.12921 33.9501 13.1077 33.9501 21.6923H2.38085C2.38085 13.2184 9.027 6.29536 17.4455 5.90767ZM19.107 2.30767C19.107 1.75382 18.5532 1.19998 17.9993 1.19998C17.4455 1.19998 16.8916 1.75382 16.8916 2.30767C16.8916 2.86152 17.4455 3.41536 17.9993 3.41536C18.5532 3.41536 19.107 2.86152 19.107 2.30767ZM18.1101 7.01536C10.3562 7.01536 4.15316 12.9969 3.59931 20.5846H32.9532C32.3993 12.9969 25.9747 7.01536 18.2762 7.01536H18.1101Z' fill='%23746762'/%3E%3C/svg%3E ");
            --icon-telegram: url("data:image/svg+xml,%3Csvg width='20' height='17' viewBox='0 0 20 17' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M15.1822 16.8604C16.3804 17.3767 16.8297 16.2949 16.8297 16.2949L20 0.609469C19.975 -0.447701 18.5272 0.191518 18.5272 0.191518L0.778531 7.05083C0.778531 7.05083 -0.0702092 7.34585 0.00467962 7.86214C0.0795685 8.37844 0.753568 8.62429 0.753568 8.62429L5.22194 10.0994C5.22194 10.0994 6.56993 14.451 6.84453 15.2869C7.09416 16.0982 7.31882 16.1228 7.31882 16.1228C7.56845 16.2212 7.79312 16.0491 7.79312 16.0491L10.6888 13.4676L15.1822 16.8604ZM16.3628 3.16903C16.3628 3.16903 17.0109 2.78871 16.985 3.16903C16.985 3.16903 17.0886 3.21975 16.7516 3.57472C16.4406 3.87898 9.1043 10.3192 8.11922 11.1813C8.04145 11.232 7.9896 11.3081 7.9896 11.4095L7.70445 13.7929C7.6526 14.0464 7.3156 14.0718 7.23783 13.8436L6.01944 9.93887C5.9676 9.78674 6.01944 9.60926 6.17498 9.50784L16.3628 3.16903Z' fill='%239D9390'/%3E%3C/svg%3E ");
            --icon-facebook: url("data:image/svg+xml,%3Csvg width='18' height='18' viewBox='0 0 18 18' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M6.73669 0.757419C4.06128 1.488 1.8039 3.66568 0.9121 6.3632C0.605542 7.30453 0.549805 7.74006 0.549805 9.03263C0.549805 10.3392 0.605542 10.7467 0.926034 11.6739C1.67849 13.9359 3.19735 15.6921 5.25964 16.6896C5.87276 16.9987 6.63915 17.2797 6.97358 17.3359L7.55882 17.4343V11.3508H5.46866V8.96238H7.55882V7.68387C7.55882 6.05411 7.7539 5.37973 8.46456 4.67725C9.13341 3.98882 9.83013 3.76403 11.1957 3.76403C12.8957 3.76403 12.8678 3.74998 12.826 5.01444L12.7842 6.08221L11.9482 6.12436C10.708 6.19461 10.4851 6.4475 10.4851 7.86651V8.96238H11.5998C12.8678 8.96238 12.7982 8.86403 12.5613 10.3814L12.3941 11.3508H10.4851V14.3715C10.4851 17.8558 10.3736 17.645 11.9342 17.0549C14.7351 15.9872 16.7555 13.5987 17.3129 10.6764C17.5777 9.36981 17.4244 7.43097 16.9924 6.15246C16.0728 3.53924 13.8432 1.4599 11.1818 0.743369C10.1924 0.476427 7.72603 0.490477 6.73669 0.757419Z' fill='%233A3330'/%3E%3C/svg%3E%0A");
            --icon-instagram: url("data:image/svg+xml,%3Csvg width='18' height='18' viewBox='0 0 18 18' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.948 12.711C17.905 13.67 17.75 14.323 17.527 14.895C17.3022 15.4959 16.9486 16.0403 16.491 16.49C15.99 16.99 15.489 17.298 14.897 17.529C14.322 17.75 13.67 17.902 12.713 17.946C11.752 17.99 11.446 18 9.002 18C6.558 18 6.252 17.99 5.29 17.946C4.331 17.902 3.677 17.75 3.105 17.529C2.50533 17.3015 1.96192 16.9471 1.512 16.49C1.05384 16.0404 0.699565 15.496 0.474 14.895C0.25 14.323 0.1 13.67 0.056 12.711C0.01 11.751 0 11.445 0 9C0 6.556 0.01 6.249 0.056 5.29C0.1 4.332 0.25 3.677 0.474 3.104C0.699852 2.50374 1.05411 1.96006 1.512 1.511C1.96141 1.05354 2.50499 0.699341 3.105 0.473C3.677 0.251 4.331 0.098 5.29 0.054C6.252 0.011 6.558 0 9.002 0C11.446 0 11.752 0.011 12.713 0.054C13.67 0.098 14.322 0.251 14.897 0.473C15.4976 0.698839 16.0416 1.05309 16.491 1.511C16.991 2.011 17.298 2.513 17.527 3.104C17.75 3.677 17.905 4.332 17.948 5.29C17.99 6.249 18 6.556 18 9C18 11.445 17.99 11.751 17.948 12.711ZM15.956 5.549C15.916 4.716 15.777 4.263 15.659 3.963C15.5237 3.59143 15.3055 3.25558 15.021 2.981C14.7459 2.69662 14.4102 2.47787 14.039 2.341C13.738 2.224 13.286 2.085 12.454 2.047C11.552 2.006 11.282 1.997 9.002 1.997C6.721 1.997 6.451 2.006 5.55 2.047C4.717 2.085 4.263 2.224 3.964 2.341C3.564 2.496 3.281 2.681 2.982 2.981C2.69688 3.2557 2.47773 3.59144 2.341 3.963C2.225 4.263 2.085 4.716 2.049 5.549C2.007 6.448 1.997 6.719 1.997 9C1.997 11.281 2.007 11.552 2.049 12.452C2.085 13.286 2.225 13.737 2.341 14.038C2.497 14.437 2.681 14.721 2.982 15.02C3.281 15.319 3.564 15.505 3.964 15.66C4.263 15.777 4.717 15.916 5.55 15.953C6.451 15.995 6.719 16.004 9.002 16.004C11.282 16.004 11.552 15.995 12.454 15.953C13.286 15.916 13.738 15.777 14.039 15.66C14.438 15.505 14.722 15.319 15.021 15.02C15.32 14.721 15.506 14.437 15.659 14.038C15.777 13.737 15.916 13.286 15.956 12.452C15.996 11.552 16.004 11.281 16.004 9C16.004 6.719 15.996 6.448 15.956 5.549ZM13.505 5.731C13.1725 5.72915 12.8543 5.59542 12.6203 5.35918C12.3863 5.12294 12.2557 4.8035 12.257 4.471C12.257 3.775 12.816 3.211 13.505 3.211C14.192 3.211 14.751 3.775 14.751 4.471C14.751 5.166 14.192 5.731 13.505 5.731ZM9.002 12.997C8.47704 12.9971 7.95721 12.8937 7.47218 12.6929C6.98716 12.4921 6.54644 12.1977 6.17519 11.8265C5.42542 11.0769 5.00413 10.0602 5.004 9C5.00387 7.9398 5.4249 6.92296 6.17449 6.17319C6.92407 5.42342 7.9408 5.00213 9.001 5.002C10.0612 5.002 11.078 5.42316 11.8277 6.17284C12.5773 6.92252 12.9985 7.9393 12.9985 8.9995C12.9985 10.0597 12.5773 11.0765 11.8277 11.8262C11.078 12.5758 10.0612 12.997 9.001 12.997H9.002ZM9.002 7C8.47138 7 7.96247 7.21065 7.58708 7.58566C7.21169 7.96068 7.00053 8.46938 7 9C7.01169 9.52308 7.2277 10.0208 7.60178 10.3866C7.97586 10.7524 8.47828 10.9573 9.0015 10.9573C9.52472 10.9573 10.0271 10.7524 10.4012 10.3866C10.7753 10.0208 10.9913 9.52308 11.003 9C11.003 8.73727 10.9512 8.47712 10.8507 8.2344C10.7501 7.99169 10.6027 7.77116 10.4169 7.58543C10.231 7.3997 10.0104 7.2524 9.76767 7.15195C9.52491 7.0515 9.26473 6.99987 9.002 7Z' fill='%233A3330'/%3E%3C/svg%3E%0A");
            --icon-youtube: url("data:image/svg+xml,%3Csvg width='19' height='14' viewBox='0 0 19 14' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M14.728 0.14325C12.02 -0.04775 5.997 -0.04775 3.293 0.14325C0.368 0.34925 0.023 2.18125 0 6.99825C0.023 11.8102 0.364 13.6493 3.293 13.8573C5.997 14.0472 12.02 14.0472 14.728 13.8573C17.65 13.6493 17.997 11.8183 18.019 6.99825C17.997 2.18925 17.656 0.34925 14.728 0.14325ZM7.01 10.0173V4.01825L12.51 7.01825L7.01 10.0173Z' fill='%239D9390'/%3E%3C/svg%3E ");
            --icon-vkontakte: url("data:image/svg+xml,%3Csvg width='21' height='12' viewBox='0 0 21 12' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M9.81821 11.6178H11.0192C11.0192 11.6178 11.3802 11.5778 11.5652 11.3778C11.7352 11.1948 11.7302 10.8518 11.7302 10.8518C11.7302 10.8518 11.7062 9.23882 12.4532 9.00082C13.1882 8.76782 14.1362 10.5598 15.1392 11.2488C15.8962 11.7698 16.4722 11.6558 16.4722 11.6558L19.1532 11.6178C19.1532 11.6178 20.5542 11.5308 19.8892 10.4278C19.8342 10.3368 19.5022 9.61082 17.8972 8.11782C16.2142 6.55682 16.4422 6.80882 18.4652 4.10782C19.6992 2.46182 20.1912 1.45682 20.0362 1.02682C19.8902 0.616823 18.9842 0.724823 18.9842 0.724823L15.9662 0.743823C15.9662 0.743823 15.7412 0.712823 15.5752 0.812823C15.4142 0.908823 15.3092 1.13682 15.3092 1.13682C15.3092 1.13682 14.8312 2.40982 14.1942 3.49282C12.8522 5.77882 12.3142 5.89882 12.0942 5.75682C11.5832 5.42682 11.7102 4.42882 11.7102 3.71982C11.7102 1.50482 12.0472 0.582823 11.0592 0.342823C10.7292 0.263823 10.4892 0.210823 9.64821 0.202823C8.57221 0.190823 7.66321 0.205823 7.14621 0.459823C6.80221 0.627823 6.53821 1.00282 6.69921 1.02382C6.90021 1.05082 7.35121 1.14582 7.59021 1.47282C7.89921 1.89382 7.88721 2.83982 7.88721 2.83982C7.88721 2.83982 8.06421 5.44682 7.47421 5.77082C7.06621 5.99282 6.50921 5.53982 5.31021 3.46682C4.69821 2.40382 4.23321 1.22982 4.23321 1.22982C4.23321 1.22982 4.14321 1.01082 3.98421 0.893823C3.79121 0.750823 3.52221 0.706823 3.52221 0.706823L0.655208 0.724823C0.655208 0.724823 0.223208 0.736823 0.065208 0.924823C-0.074792 1.09082 0.054208 1.43682 0.054208 1.43682C0.054208 1.43682 2.29821 6.69582 4.83921 9.34682C7.17121 11.7778 9.81821 11.6178 9.81821 11.6178Z' fill='%239D9390'/%3E%3C/svg%3E ");
            --dividing-line-header: linear-gradient(to right, rgba(157, 147, 144, 0) 0%, rgba(157, 147, 144, 1) 50%, rgba(255, 255, 255, 0) 100%);
            --footer-breadcrumbs-bg-color: #e2dad8;
            --footer-breadcrumbs-font-color: #746762;
            --breadcrumbs-font-color: #2e2826;
            --product-review-bg-color: #e6e0de;
            --product-main-gallery-bg-color: #cfc8c4;
            --product-specification-bg-color: #cfc8c4;
            --product-specification-font-color: #2e2826;
            --product-specification-border-color: #b2a49f;
            --product-specification-expand-btn-color: #f37021;
            --dividing-line-footer: linear-gradient(to right, rgba(135, 111, 103, 0) 0%, rgba(135, 111, 103, 1) 50%, rgba(255, 255, 255, 0) 100%);
            --product-award-bg-color: #c4bcb7;
            --product-preview-bg-color: #e6e0de;
            --product-preview-icon-color: #382f2c;
            --product-preview-mobile-icon-color: #746762;
            --product-preview-features-color: #746762;
            --product-preview-desktop-features-bg: linear-gradient(180deg, rgba(196, 188, 183, 0) 0%, #C4BCB7 100%);
            --product-preview-desktop-gradient: linear-gradient(180deg, #E6E0DE 0%, #DBD4D1 100%);
            --product-preview-mobile-gradient: linear-gradient(180deg, rgba(230, 224, 222, 0.80) 0%, #E6E0DE 100%);
            --floating-buy-button-bg-color: rgba(255, 255, 255, 0.8);
            --icon-ar: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='none'%3E%3Cg clip-path='url(%23a)'%3E%3Cpath fill='%23382F2C' d='M31.118 20.695a.905.905 0 0 1 1.222.323.876.876 0 0 1-.322 1.207l-6.162 3.54a.903.903 0 0 1-1.225-.321.877.877 0 0 1 .325-1.21l6.162-3.539Zm12.54-7.077a.906.906 0 0 1 .677-.088c.23.06.425.208.544.41a.875.875 0 0 1-.322 1.208l-6.162 3.539a.905.905 0 0 1-1.225-.32.879.879 0 0 1 .325-1.21l6.162-3.539Zm-31.05 17.694a.906.906 0 0 1 1.222.322.875.875 0 0 1-.322 1.207l-6.162 3.54a.905.905 0 0 1-1.225-.321.875.875 0 0 1 .325-1.21l6.162-3.538Z'/%3E%3Cpath fill='%23382F2C' d='M24 25c0-.238.105-.466.293-.634.188-.168.442-.262.707-.262.265 0 .52.094.707.262A.852.852 0 0 1 26 25v5.974a.852.852 0 0 1-.293.634 1.062 1.062 0 0 1-.707.262c-.265 0-.52-.094-.707-.262a.852.852 0 0 1-.293-.634V25Zm0 16.13c0-.238.105-.466.293-.634.188-.168.442-.262.707-.262.265 0 .52.094.707.262a.852.852 0 0 1 .293.634v5.974a.852.852 0 0 1-.293.634A1.062 1.062 0 0 1 25 48c-.265 0-.52-.094-.707-.262a.852.852 0 0 1-.293-.634V41.13Zm0-38.234c0-.238.105-.465.293-.634C24.48 2.094 24.735 2 25 2c.265 0 .52.094.707.262a.851.851 0 0 1 .293.634V8.87a.851.851 0 0 1-.293.634 1.062 1.062 0 0 1-.707.262c-.265 0-.52-.094-.707-.262A.851.851 0 0 1 24 8.87V2.896Z'/%3E%3Cpath fill='%23382F2C' d='M18.88 22.441a.878.878 0 0 1-.328-1.196.881.881 0 0 1 1.204-.327l5.501 3.128a.878.878 0 0 1 .31 1.186.882.882 0 0 1-1.185.336l-5.501-3.127ZM5.946 14.84a.878.878 0 0 1-.329-1.197.882.882 0 0 1 1.204-.326l5.5 3.127a.877.877 0 0 1 .311 1.186.882.882 0 0 1-1.185.337l-5.501-3.127Zm31.752 18.129a.878.878 0 0 1-.328-1.197.882.882 0 0 1 1.203-.327l5.502 3.128a.878.878 0 0 1 .31 1.186.881.881 0 0 1-1.185.337l-5.502-3.127Z'/%3E%3Cg fill='%23382F2C' opacity='.503'%3E%3Cpath d='M24.705 2h.594v46h-.594V2Z' opacity='.503'/%3E%3Cpath d='m4.882 13.723.297-.517L45.105 36.33l-.297.518L4.882 13.724Z' opacity='.503'/%3E%3Cpath d='m5.177 36.844-.297-.517 39.945-23.158.297.518L5.177 36.844Z' opacity='.503'/%3E%3C/g%3E%3Cpath fill='%23382F2C' d='M25 2.194 5.591 13.598v22.804L25 47.806l19.409-11.404V13.598L25 2.194ZM45 13.25v23.5L25 48.5 5 36.75v-23.5L25 1.5l20 11.75Z'/%3E%3Cmask id='b' width='54' height='50' x='-2' y='1' maskUnits='userSpaceOnUse' style='mask-type:alpha'%3E%3Cpath fill='%23fff' d='m30.852 16.447 15.772-9.074L52 16.65l-15.731 9.051L52 34.754l-5.376 9.278-15.772-9.075V51H20.101V35.005L3.376 44.627l-5.375-9.278 16.765-9.647L-2 16.056l5.376-9.279L20.1 16.4V1h10.751v15.447h.001Z'/%3E%3C/mask%3E%3Cg mask='url(%23b)'%3E%3Cpath fill='%23382F2C' d='M25.4 3.066 6.665 14.033v21.934L25.4 46.934l18.735-10.967V14.033L25.4 3.066ZM45.9 13v24L25.4 49 4.9 37V13L25.4 1l20.5 12Z'/%3E%3C/g%3E%3C/g%3E%3Cdefs%3E%3CclipPath id='a'%3E%3Cpath fill='%23fff' d='M4.5 1h41v48h-41z'/%3E%3C/clipPath%3E%3C/defs%3E%3C/svg%3E");
            --icon-arrow-top: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 8'%3E%3Cpath fill='%233a3330' d='M6 0l6 6.7-1 .8-5-5.6-5 5.6-1-.8z'/%3E%3C/svg%3E");
            --icon-valid: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='none'%3E%3Cpath fill='%23382f2c' d='M16.795 5.2a.714.714 0 0 0-.99 0l-8.386 8.156-3.224-3.135a.714.714 0 0 0-.99 0 .668.668 0 0 0 0 .963L6.924 14.8a.714.714 0 0 0 .99 0l8.881-8.639a.668.668 0 0 0 0-.963Z'/%3E%3C/svg%3E");
            --interior-qr-code-dialog-bg-color: #e6e0de;
            --product-special-offer-bg-color: #cfc8c4;
            --product-special-offer-font-color: #382f2c;
            --product-special-offer-conditions-font-color: #9d9390;
            --product-delivery-bg-color: #cfc8c4;
            --product-delivery-text-color: #746762;
            --product-delivery-value-color: #382f2c;
            --product-delivery-hint-bg-color: #c4bcb7;
            --product-delivery-hint-color: #382f2c;
            --product-delivery-divider-color: rgba(0, 0, 0, 0.1);
            --product-delivery-modal-title-color: #382f2c;
            --product-delivery-modal-text-color: #746762;
            --product-delivery-info-icon: url("data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20viewBox%3D%220%200%2016%2017%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20stroke%3D%22%23382F2C%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-width%3D%22.8%22%20d%3D%22M.4%208.5C.4%204.32%203.82.9%208%20.9s7.6%203.42%207.6%207.6-3.42%207.6-7.6%207.6S.4%2012.68.4%208.5z%22%2F%3E%3Cpath%20stroke%3D%22%23382F2C%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-width%3D%221.2%22%20d%3D%22M8%2011.7v-4%22%2F%3E%3Cpath%20stroke%3D%22%23382F2C%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-width%3D%221.6%22%20d%3D%22M8.004%205.3h-.009%22%2F%3E%3C%2Fsvg%3E");
            --hotline-number-color: #3a3330;
            --icon-basket: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='22' fill='none'%3E%3Cpath stroke='%232e2826' stroke-linecap='round' d='M5 11C5-2.333 15-2.333 15 11'/%3E%3Cpath stroke='%232e2826' d='M.5 7.93c0-.244.19-.407.475-.407h18.05c.285 0 .475.163.475.407v12.187c0 .244-.19.406-.475.406H.975a.519.519 0 0 1-.336-.119.38.38 0 0 1-.139-.287V7.93Z' clip-rule='evenodd'/%3E%3Cpath fill='%23F37021' fill-rule='evenodd' d='M10 18a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z' clip-rule='evenodd'/%3E%3C/svg%3E");
            --tab-bar-container: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='351' height='77' fill='none'%3E%3Cg filter='url(%23a)'%3E%3Cpath fill='%23C4BCB7' fill-opacity='.8' d='M0 22C0 9.85 9.85 0 22 0h307c12.15 0 22 9.85 22 22v33c0 12.15-9.85 22-22 22H22C9.85 77 0 67.15 0 55V22Z'/%3E%3C/g%3E%3Cdefs%3E%3Cfilter id='a' width='387' height='113' x='-18' y='-18' color-interpolation-filters='sRGB' filterUnits='userSpaceOnUse'%3E%3CfeFlood flood-opacity='0' result='BackgroundImageFix'/%3E%3CfeGaussianBlur in='BackgroundImageFix' stdDeviation='9'/%3E%3CfeComposite in2='SourceAlpha' operator='in' result='effect1_backgroundBlur_9766_22528'/%3E%3CfeBlend in='SourceGraphic' in2='effect1_backgroundBlur_9766_22528' result='shape'/%3E%3C/filter%3E%3C/defs%3E%3C/svg%3E");
            --tab-bar-gradient: linear-gradient(180deg, rgba(230, 224, 222, 0) 0%, #e6e0de 100%);
            --tab-bar-main-button-wrapper-color: #e2dad8;
            --tab-bar-button-title-color: #746762;
            --tab-bar-button-title-active-color: #3a3330;
            --ui-components-separator-color: #000;
            --product-availability-modal-primary: #382f2c;
            --product-availability-modal-secondary: #746762;
            --product-availability-modal-accent: #b2a49f;
            --product-availability-modal-bg-body: #e6e0de;
            --product-availability-modal-bg-footer: #cfc8c4;
            --product-availability-modal-divider: var(--product-availability-modal-accent);
            --product-ar-bg: linear-gradient(0deg, #EFEBEA 0%, #FFFFFF 100%)
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(/dist/jquery-components/530e06d4557f064123442e840be06350.woff2) format("woff2"), url(/dist/jquery-components/09e768ea2f6db3256ea4d678c7284723.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(/dist/jquery-components/0d8421e4b229ca3ea212c69d11c98940.woff2) format("woff2"), url(/dist/jquery-components/5e4ee0389a6b45aaddc07af2b8518432.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(/dist/jquery-components/b0462af7da71a0bae0091ddb449b98d5.woff2) format("woff2"), url(/dist/jquery-components/eec638311e8f3c36f3d4929464b0406e.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(/dist/jquery-components/d59df5a538d671a54c795a8f738d0b84.woff2) format("woff2"), url(/dist/jquery-components/0247694e510ebe67cce1c8bb53d6560f.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(/dist/jquery-components/751c19bd96c1fdbe6c883c418a18a550.woff2) format("woff2"), url(/dist/jquery-components/1c5a4d413294b14b36e02367a5cd480f.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(/dist/jquery-components/6cd35edfbc0d7a41713109d9162a0ffc.woff2) format("woff2")
        }

        .qPL7v-LD {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            text-decoration: none;
            outline: none;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .K0HzcaQk {
            height: 50px;
            padding: 0 30px;
            border-radius: 25px
        }

        .nRTctF8w {
            height: 40px;
            padding: 13px 30px 10px;
            border-radius: 50px
        }

        .ZEgJ2CcQ {
            height: 25px;
            padding: 0 30px;
            border-radius: 12px
        }

        .jUP0m5JL {
            padding: 0
        }

        .oqXEz3hf {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #fff;
            background-color: #f37021;
            border: 1px solid transparent
        }

        .oqXEz3hf:hover,
        .oqXEz3hf:focus,
        .oqXEz3hf.W0OTrltM {
            color: #fff;
            background-color: #f69459;
            border: 1px solid transparent
        }

        .oqXEz3hf.nrYJ6g8S {
            color: transparent;
            background: #f37021 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        .oqXEz3hf.D9Y3gjSN {
            color: rgba(255, 255, 255, .3);
            background-color: #704229;
            border: 1px solid transparent;
            cursor: not-allowed;
            pointer-events: none
        }

        .r2L14qCJ {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #fff;
            background-color: transparent;
            border: 1px solid #f37021
        }

        .r2L14qCJ:hover,
        .r2L14qCJ:focus,
        .r2L14qCJ.W0OTrltM {
            color: #fff;
            background-color: #f69459;
            border: 1px solid transparent
        }

        .r2L14qCJ.nrYJ6g8S {
            color: transparent;
            background: #f37021 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        .r2L14qCJ.D9Y3gjSN {
            background-color: transparent;
            border: 1px solid rgba(243, 112, 33, .3);
            cursor: not-allowed;
            pointer-events: none
        }

        .YcpfywSp {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #000;
            background-color: #fff;
            border: 1px solid transparent
        }

        .YcpfywSp:hover,
        .YcpfywSp:focus,
        .YcpfywSp.W0OTrltM {
            color: #000;
            background-color: rgba(255, 255, 255, .65);
            border: 1px solid transparent
        }

        .YcpfywSp.nrYJ6g8S {
            color: transparent;
            background: #000 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        .YcpfywSp.D9Y3gjSN {
            background-color: #fff;
            border: 1px solid transparent;
            cursor: not-allowed;
            opacity: .3;
            pointer-events: none
        }

        ._6Aosk9bd {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #fff;
            background-color: transparent;
            border: 1px solid #fff
        }

        ._6Aosk9bd:hover,
        ._6Aosk9bd:focus,
        ._6Aosk9bd.W0OTrltM {
            color: #fff;
            background-color: #f69459;
            border: 1px solid transparent
        }

        ._6Aosk9bd.nrYJ6g8S {
            color: transparent;
            background: #f37021 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        ._6Aosk9bd.D9Y3gjSN {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, .3);
            cursor: not-allowed;
            pointer-events: none
        }

        ._2MekyhBz {
            color: inherit;
            background-color: transparent;
            border: 0
        }

        .i6bp\+295 {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #9d9390;
            background-color: transparent;
            border: none
        }

        .i6bp\+295.D9Y3gjSN {
            cursor: not-allowed;
            opacity: .5;
            pointer-events: none
        }

        .wbiy5m8I {
            width: 100%
        }

        .WtnjIMc1 {
            display: inline-flex;
            margin-right: 10px
        }

        .a0X2LDqc {
            display: inline-flex;
            margin-left: 10px
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(/dist/jquery-components/530e06d4557f064123442e840be06350.woff2) format("woff2"), url(/dist/jquery-components/09e768ea2f6db3256ea4d678c7284723.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(/dist/jquery-components/0d8421e4b229ca3ea212c69d11c98940.woff2) format("woff2"), url(/dist/jquery-components/5e4ee0389a6b45aaddc07af2b8518432.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(/dist/jquery-components/b0462af7da71a0bae0091ddb449b98d5.woff2) format("woff2"), url(/dist/jquery-components/eec638311e8f3c36f3d4929464b0406e.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(/dist/jquery-components/d59df5a538d671a54c795a8f738d0b84.woff2) format("woff2"), url(/dist/jquery-components/0247694e510ebe67cce1c8bb53d6560f.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(/dist/jquery-components/751c19bd96c1fdbe6c883c418a18a550.woff2) format("woff2"), url(/dist/jquery-components/1c5a4d413294b14b36e02367a5cd480f.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(/dist/jquery-components/6cd35edfbc0d7a41713109d9162a0ffc.woff2) format("woff2")
        }

        .nGxxpsFQ {
            width: 100%
        }

        .aJvtYua9 {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            margin-bottom: 16px;
            color: var(--horizontal-menu-submenu-font-color);
            letter-spacing: 1px;
            text-transform: uppercase
        }

        .tupUMafz {
            display: flex;
            flex-direction: column;
            align-items: flex-start
        }

        .mj4pKU\+s {
            max-height: 546px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-template-rows: repeat(auto-fit, minmax(39px, 1fr));
            grid-auto-flow: column;
            -moz-column-gap: 20px;
            column-gap: 20px
        }

        @media screen and (min-width: 1600px) {
            .mj4pKU\+s {
                -moz-column-gap: 80px;
                column-gap: 80px
            }
        }

        ._8ZHV4Ou7 {
            display: flex;
            margin-bottom: 16px
        }

        ._8ZHV4Ou7:last-child {
            margin-bottom: 0
        }

        .fF7d7Y5e {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: var(--horizontal-menu-font-color);
            letter-spacing: .1px;
            text-transform: none;
            text-decoration: none
        }

        .fF7d7Y5e:last-child {
            margin-bottom: 0
        }

        .fF7d7Y5e::after {
            display: block;
            width: 0%;
            height: 1px;
            background-color: #f37021;
            transition: width .5s;
            content: ""
        }

        .fF7d7Y5e:hover::after {
            width: 100%
        }
    </style>
    <style type="text/css">
        .OYDa7qOT:not(:last-child) {
            margin-bottom: 60px
        }
    </style>
    <style type="text/css">
        .g9KouMZO {
            display: flex;
            justify-content: center;
            width: 100%;
            min-height: 649px;
            background: var(--header-bg-hover-color)
        }

        .bCgTH0W- {
            min-height: 548px
        }

        ._2w2LAcb6 {
            display: flex;
            justify-content: center;
            padding-top: 24px;
            padding-bottom: 45px;
            width: 1280px
        }

        .vxqr3s4J {
            width: 500px;
            height: 445px;
            -o-object-fit: cover;
            object-fit: cover;
            border-radius: 10px;
            margin-left: 80px
        }

        ._0Y7TQoyf {
            display: flex;
            margin: 0;
            padding: 0
        }

        .LuO4wPm0>li:not(:last-child) {
            margin-right: 80px
        }

        .XbVfojaW>li:not(:last-child) {
            margin-right: 20px
        }

        @media screen and (min-width: 1600px) {
            .XbVfojaW>li:not(:last-child) {
                margin-right: 80px
            }
        }

        .XbVfojaW>li:last-child {
            width: 200px
        }

        .wm0GOsOj {
            color: #fff;
            list-style-type: none
        }

        ._5cOQ8to1 {
            width: 260px
        }

        .FVOpZxdA {
            width: 250px
        }

        .hKsS2rtS {
            width: 520px
        }

        @media screen and (min-width: 1600px) {
            .hKsS2rtS {
                width: 580px
            }
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(/dist/jquery-components/530e06d4557f064123442e840be06350.woff2) format("woff2"), url(/dist/jquery-components/09e768ea2f6db3256ea4d678c7284723.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(/dist/jquery-components/0d8421e4b229ca3ea212c69d11c98940.woff2) format("woff2"), url(/dist/jquery-components/5e4ee0389a6b45aaddc07af2b8518432.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(/dist/jquery-components/b0462af7da71a0bae0091ddb449b98d5.woff2) format("woff2"), url(/dist/jquery-components/eec638311e8f3c36f3d4929464b0406e.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(/dist/jquery-components/d59df5a538d671a54c795a8f738d0b84.woff2) format("woff2"), url(/dist/jquery-components/0247694e510ebe67cce1c8bb53d6560f.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(/dist/jquery-components/751c19bd96c1fdbe6c883c418a18a550.woff2) format("woff2"), url(/dist/jquery-components/1c5a4d413294b14b36e02367a5cd480f.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(/dist/jquery-components/6cd35edfbc0d7a41713109d9162a0ffc.woff2) format("woff2")
        }

        .kHHqd-k1 {
            width: 100%;
            background-color: inherit
        }

        .RdSkY4Np {
            position: relative;
            display: flex;
            justify-content: center;
            z-index: 20;
            background-color: inherit
        }

        .iyylU38R {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1320px;
            margin: 0;
            padding: 0 20px;
            letter-spacing: 1.3px;
            transition: all .5s
        }

        .Skkbom1s .WIRq1uRd {
            color: #9d9390
        }

        .izKD-eXe {
            text-transform: uppercase;
            cursor: pointer
        }

        .izKD-eXe:first-child {
            padding-left: 0
        }

        .HeGeqKvO .WIRq1uRd {
            color: var(--horizontal-menu-font-hover-color)
        }

        .WIRq1uRd {
            display: block;
            margin-top: 4px;
            color: #fff;
            text-decoration: none;
            list-style-type: none;
            display: block;
            color: var(--horizontal-menu-font-color);
            padding: 0 14px;
            margin: 20px 0 19px 0
        }

        .WIRq1uRd::after {
            position: relative;
            bottom: -4px;
            display: block;
            height: 1px;
            background-color: #f37021;
            transition: width .5s;
            content: "";
            right: 0;
            width: 0
        }

        .QgAsUV\+v::after {
            position: relative;
            bottom: -4px;
            display: block;
            height: 1px;
            background-color: #f37021;
            transition: width .5s;
            content: "";
            left: 0;
            width: 100%
        }

        ._5KPoFMMo {
            transition: all 350ms ease-out, opacity 0s;
            transform: translateY(calc(-100% - 124px));
            position: absolute;
            left: 0;
            top: 100%;
            right: 0;
            z-index: 10;
            background-color: var(--header-bg-hover-color)
        }

        .PuPpKwnN {
            transform: translateY(0)
        }

        .qeeD9sS3 {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, .6);
            -webkit-backdrop-filter: blur(30px);
            backdrop-filter: blur(30px)
        }
    </style>
    <style type="text/css">
        .dropdown-menu-enter {
            transform: translateY(-20px);
            opacity: 0
        }

        .dropdown-menu-leave-to {
            opacity: 0
        }

        .dropdown-menu-enter-active,
        .dropdown-menu-leave-active {
            transition: transform 200ms ease-out, opacity 200ms ease-in
        }

        .menu-background-enter,
        .menu-background-leave-to {
            opacity: 0
        }

        .menu-background-enter-active,
        .menu-background-leave-active {
            transition: all 350ms ease-out
        }
    </style>
    <style type="text/css">
        #digi-feedback.digi-feedback {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            position: relative;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 24px rgba(128, 149, 255, .16);
            padding: 24px;
            margin: 20px 0;
            height: 92px
        }

        #digi-feedback .digi-feedback__logo {
            display: none;
            width: 87px;
            height: 16px;
            background-repeat: no-repeat;
            background-image: url(https://cdn.diginetica.net/digi-emodzi/Frame.svg)
        }

        #digi-feedback .digi-feedback__text {
            color: #0d0943;
            font-size: 20px;
            line-height: 20px;
            font-weight: 600;
            margin-right: 24px
        }

        #digi-feedback .digi-feedback__emoji-list {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            margin-right: 36px
        }

        #digi-feedback .digi-feedback__emoji-item {
            display: -webkit-flex;
            display: flex;
            position: relative;
            border-radius: 30px;
            border: 2px solid transparent;
            padding: 3px
        }

        #digi-feedback .digi-feedback__emoji-item:not(:last-child) {
            margin-right: 8px
        }

        #digi-feedback .digi-feedback__emoji-item:hover {
            border-color: #6e85f5
        }

        #digi-feedback .digi-feedback__emoji-item:hover .digi-feedback__emoji-tooltip {
            display: -webkit-flex;
            display: flex
        }

        #digi-feedback .digi-feedback__emoji-tooltip {
            position: absolute;
            left: -14px;
            top: -40px;
            background: rgba(0, 0, 0, .6);
            border-radius: 1px;
            padding: 6px;
            display: none;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            width: 70px;
            z-index: 1
        }

        #digi-feedback .digi-feedback__emoji-tooltip:after {
            content: "";
            display: block;
            position: absolute;
            top: 100%;
            width: 10px;
            height: 9px;
            border: 5px solid transparent;
            border-top: 9px solid rgba(0, 0, 0, .6);
            box-sizing: border-box
        }

        #digi-feedback .digi-feedback__emoji-tooltip-text {
            font-size: 14px;
            color: #fff;
            font-weight: 500
        }

        #digi-feedback .digi-feedback__emoji-button {
            width: 36px;
            height: 36px;
            background-repeat: no-repeat;
            background-position: 50%;
            background-size: auto
        }

        #digi-feedback .digi-feedback__emoji-button.terrible {
            background-image: url(https://cdn.diginetica.net/digi-emodzi/Property%201=1.svg)
        }

        #digi-feedback .digi-feedback__emoji-button.bad {
            background-image: url(https://cdn.diginetica.net/digi-emodzi/Property%201=2.svg)
        }

        #digi-feedback .digi-feedback__emoji-button.average {
            background-image: url(https://cdn.diginetica.net/digi-emodzi/Property%201=3.svg)
        }

        #digi-feedback .digi-feedback__emoji-button.good {
            background-image: url(https://cdn.diginetica.net/digi-emodzi/Property%201=4.svg)
        }

        #digi-feedback .digi-feedback__emoji-button.excellent {
            background-image: url(https://cdn.diginetica.net/digi-emodzi/Group%202.svg)
        }

        #digi-feedback .digi-feedback__heart {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            width: 60px;
            height: 60px
        }

        #digi-feedback .digi-feedback__heart-icon {
            width: 60px;
            height: 60px;
            background-repeat: no-repeat;
            background-position: 50%;
            background-size: contain;
            background-image: url(https://cdn.diginetica.net/digi-emodzi/mdi_heart.svg)
        }

        #digi-feedback .digi-feedback__button-wrapper {
            position: absolute;
            right: 24px
        }

        #digi-feedback .digi-feedback__close-button {
            width: 20px;
            height: 20px;
            background-repeat: no-repeat;
            background-position: 50%;
            background-size: auto;
            background-image: url(https://cdn.diginetica.net/digi-emodzi/Vector.svg)
        }

        #digi-shield.digi_mobile #digi-feedback.digi-feedback {
            margin: 16px 0;
            -webkit-flex-direction: column;
            flex-direction: column;
            height: unset
        }

        #digi-shield.digi_mobile #digi-feedback .digi-feedback__logo {
            margin-top: 16px;
            -webkit-order: 3;
            order: 3
        }

        #digi-shield.digi_mobile #digi-feedback .digi-feedback__text {
            max-width: 246px;
            font-size: 16px;
            line-height: 18px;
            text-align: center;
            -webkit-order: 1;
            order: 1;
            margin-right: 0
        }

        #digi-shield.digi_mobile #digi-feedback .digi-feedback__emoji-list {
            margin-top: 16px;
            margin-right: 0;
            width: 100%;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-order: 2;
            order: 2
        }

        #digi-shield.digi_mobile #digi-feedback .digi-feedback__emoji-item:not(:last-child) {
            margin-right: 16px
        }

        #digi-shield.digi_mobile #digi-feedback .digi-feedback__heart {
            width: 48px;
            height: 48px;
            margin-bottom: 16px
        }

        #digi-shield.digi_mobile #digi-feedback .digi-feedback__button-wrapper {
            position: absolute;
            top: 20px;
            right: 20px
        }
    </style>
    <script type="text/javascript" async=""
        src="https://dss.hybrid.ai/Pixel/TrackTp?pid=629624524d506e83c0402cc7&amp;foadh=&amp;gapl=&amp;cs=&amp;pcs=&amp;vcs="></script>
    <style type="text/css">
        .phone-form--recovery {
            padding-top: 20px
        }

        .phone-form__wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 12px
        }

        .phone-form__progress {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            color: transparent;
            font-size: 0;
            background-color: #ef6f2e
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(/dist/jquery-components/530e06d4557f064123442e840be06350.woff2) format("woff2"), url(/dist/jquery-components/09e768ea2f6db3256ea4d678c7284723.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(/dist/jquery-components/0d8421e4b229ca3ea212c69d11c98940.woff2) format("woff2"), url(/dist/jquery-components/5e4ee0389a6b45aaddc07af2b8518432.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(/dist/jquery-components/b0462af7da71a0bae0091ddb449b98d5.woff2) format("woff2"), url(/dist/jquery-components/eec638311e8f3c36f3d4929464b0406e.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(/dist/jquery-components/d59df5a538d671a54c795a8f738d0b84.woff2) format("woff2"), url(/dist/jquery-components/0247694e510ebe67cce1c8bb53d6560f.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(/dist/jquery-components/751c19bd96c1fdbe6c883c418a18a550.woff2) format("woff2"), url(/dist/jquery-components/1c5a4d413294b14b36e02367a5cd480f.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(/dist/jquery-components/6cd35edfbc0d7a41713109d9162a0ffc.woff2) format("woff2")
        }

        .qPL7v-LD {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            text-decoration: none;
            outline: none;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .K0HzcaQk {
            height: 50px;
            padding: 0 30px;
            border-radius: 25px
        }

        .nRTctF8w {
            height: 40px;
            padding: 13px 30px 10px;
            border-radius: 50px
        }

        .ZEgJ2CcQ {
            height: 25px;
            padding: 0 30px;
            border-radius: 12px
        }

        .jUP0m5JL {
            padding: 0
        }

        .oqXEz3hf {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #fff;
            background-color: #f37021;
            border: 1px solid transparent
        }

        .oqXEz3hf:hover,
        .oqXEz3hf:focus,
        .oqXEz3hf.W0OTrltM {
            color: #fff;
            background-color: #f69459;
            border: 1px solid transparent
        }

        .oqXEz3hf.nrYJ6g8S {
            color: transparent;
            background: #f37021 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        .oqXEz3hf.D9Y3gjSN {
            color: rgba(255, 255, 255, .3);
            background-color: #704229;
            border: 1px solid transparent;
            cursor: not-allowed;
            pointer-events: none
        }

        .r2L14qCJ {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #fff;
            background-color: transparent;
            border: 1px solid #f37021
        }

        .r2L14qCJ:hover,
        .r2L14qCJ:focus,
        .r2L14qCJ.W0OTrltM {
            color: #fff;
            background-color: #f69459;
            border: 1px solid transparent
        }

        .r2L14qCJ.nrYJ6g8S {
            color: transparent;
            background: #f37021 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        .r2L14qCJ.D9Y3gjSN {
            background-color: transparent;
            border: 1px solid rgba(243, 112, 33, .3);
            cursor: not-allowed;
            pointer-events: none
        }

        .YcpfywSp {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #000;
            background-color: #fff;
            border: 1px solid transparent
        }

        .YcpfywSp:hover,
        .YcpfywSp:focus,
        .YcpfywSp.W0OTrltM {
            color: #000;
            background-color: rgba(255, 255, 255, .65);
            border: 1px solid transparent
        }

        .YcpfywSp.nrYJ6g8S {
            color: transparent;
            background: #000 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        .YcpfywSp.D9Y3gjSN {
            background-color: #fff;
            border: 1px solid transparent;
            cursor: not-allowed;
            opacity: .3;
            pointer-events: none
        }

        ._6Aosk9bd {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #fff;
            background-color: transparent;
            border: 1px solid #fff
        }

        ._6Aosk9bd:hover,
        ._6Aosk9bd:focus,
        ._6Aosk9bd.W0OTrltM {
            color: #fff;
            background-color: #f69459;
            border: 1px solid transparent
        }

        ._6Aosk9bd.nrYJ6g8S {
            color: transparent;
            background: #f37021 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        ._6Aosk9bd.D9Y3gjSN {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, .3);
            cursor: not-allowed;
            pointer-events: none
        }

        ._2MekyhBz {
            color: inherit;
            background-color: transparent;
            border: 0
        }

        .i6bp\+295 {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #9d9390;
            background-color: transparent;
            border: none
        }

        .i6bp\+295.D9Y3gjSN {
            cursor: not-allowed;
            opacity: .5;
            pointer-events: none
        }

        .wbiy5m8I {
            width: 100%
        }

        .WtnjIMc1 {
            display: inline-flex;
            margin-right: 10px
        }

        .a0X2LDqc {
            display: inline-flex;
            margin-left: 10px
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(/dist/jquery-components/530e06d4557f064123442e840be06350.woff2) format("woff2"), url(/dist/jquery-components/09e768ea2f6db3256ea4d678c7284723.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(/dist/jquery-components/0d8421e4b229ca3ea212c69d11c98940.woff2) format("woff2"), url(/dist/jquery-components/5e4ee0389a6b45aaddc07af2b8518432.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(/dist/jquery-components/b0462af7da71a0bae0091ddb449b98d5.woff2) format("woff2"), url(/dist/jquery-components/eec638311e8f3c36f3d4929464b0406e.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(/dist/jquery-components/d59df5a538d671a54c795a8f738d0b84.woff2) format("woff2"), url(/dist/jquery-components/0247694e510ebe67cce1c8bb53d6560f.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(/dist/jquery-components/751c19bd96c1fdbe6c883c418a18a550.woff2) format("woff2"), url(/dist/jquery-components/1c5a4d413294b14b36e02367a5cd480f.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(/dist/jquery-components/6cd35edfbc0d7a41713109d9162a0ffc.woff2) format("woff2")
        }

        .nGxxpsFQ {
            width: 100%
        }

        .aJvtYua9 {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            margin-bottom: 16px;
            color: var(--horizontal-menu-submenu-font-color);
            letter-spacing: 1px;
            text-transform: uppercase
        }

        .tupUMafz {
            display: flex;
            flex-direction: column;
            align-items: flex-start
        }

        .mj4pKU\+s {
            max-height: 546px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-template-rows: repeat(auto-fit, minmax(39px, 1fr));
            grid-auto-flow: column;
            -moz-column-gap: 20px;
            column-gap: 20px
        }

        @media screen and (min-width: 1600px) {
            .mj4pKU\+s {
                -moz-column-gap: 80px;
                column-gap: 80px
            }
        }

        ._8ZHV4Ou7 {
            display: flex;
            margin-bottom: 16px
        }

        ._8ZHV4Ou7:last-child {
            margin-bottom: 0
        }

        .fF7d7Y5e {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: var(--horizontal-menu-font-color);
            letter-spacing: .1px;
            text-transform: none;
            text-decoration: none
        }

        .fF7d7Y5e:last-child {
            margin-bottom: 0
        }

        .fF7d7Y5e::after {
            display: block;
            width: 0%;
            height: 1px;
            background-color: #f37021;
            transition: width .5s;
            content: ""
        }

        .fF7d7Y5e:hover::after {
            width: 100%
        }
    </style>
    <style type="text/css">
        .OYDa7qOT:not(:last-child) {
            margin-bottom: 60px
        }
    </style>
    <style type="text/css">
        .g9KouMZO {
            display: flex;
            justify-content: center;
            width: 100%;
            min-height: 649px;
            background: var(--header-bg-hover-color)
        }

        .bCgTH0W- {
            min-height: 548px
        }

        ._2w2LAcb6 {
            display: flex;
            justify-content: center;
            padding-top: 24px;
            padding-bottom: 45px;
            width: 1280px
        }

        .vxqr3s4J {
            width: 500px;
            height: 445px;
            -o-object-fit: cover;
            object-fit: cover;
            border-radius: 10px;
            margin-left: 80px
        }

        ._0Y7TQoyf {
            display: flex;
            margin: 0;
            padding: 0
        }

        .LuO4wPm0>li:not(:last-child) {
            margin-right: 80px
        }

        .XbVfojaW>li:not(:last-child) {
            margin-right: 20px
        }

        @media screen and (min-width: 1600px) {
            .XbVfojaW>li:not(:last-child) {
                margin-right: 80px
            }
        }

        .XbVfojaW>li:last-child {
            width: 200px
        }

        .wm0GOsOj {
            color: #fff;
            list-style-type: none
        }

        ._5cOQ8to1 {
            width: 260px
        }

        .FVOpZxdA {
            width: 250px
        }

        .hKsS2rtS {
            width: 520px
        }

        @media screen and (min-width: 1600px) {
            .hKsS2rtS {
                width: 580px
            }
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(/dist/jquery-components/530e06d4557f064123442e840be06350.woff2) format("woff2"), url(/dist/jquery-components/09e768ea2f6db3256ea4d678c7284723.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(/dist/jquery-components/0d8421e4b229ca3ea212c69d11c98940.woff2) format("woff2"), url(/dist/jquery-components/5e4ee0389a6b45aaddc07af2b8518432.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(/dist/jquery-components/b0462af7da71a0bae0091ddb449b98d5.woff2) format("woff2"), url(/dist/jquery-components/eec638311e8f3c36f3d4929464b0406e.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(/dist/jquery-components/d59df5a538d671a54c795a8f738d0b84.woff2) format("woff2"), url(/dist/jquery-components/0247694e510ebe67cce1c8bb53d6560f.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(/dist/jquery-components/751c19bd96c1fdbe6c883c418a18a550.woff2) format("woff2"), url(/dist/jquery-components/1c5a4d413294b14b36e02367a5cd480f.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(/dist/jquery-components/6cd35edfbc0d7a41713109d9162a0ffc.woff2) format("woff2")
        }

        .kHHqd-k1 {
            width: 100%;
            background-color: inherit
        }

        .RdSkY4Np {
            position: relative;
            display: flex;
            justify-content: center;
            z-index: 20;
            background-color: inherit
        }

        .iyylU38R {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1320px;
            margin: 0;
            padding: 0 20px;
            letter-spacing: 1.3px;
            transition: all .5s
        }

        .Skkbom1s .WIRq1uRd {
            color: #9d9390
        }

        .izKD-eXe {
            text-transform: uppercase;
            cursor: pointer
        }

        .izKD-eXe:first-child {
            padding-left: 0
        }

        .HeGeqKvO .WIRq1uRd {
            color: var(--horizontal-menu-font-hover-color)
        }

        .WIRq1uRd {
            display: block;
            margin-top: 4px;
            color: #fff;
            text-decoration: none;
            list-style-type: none;
            display: block;
            color: var(--horizontal-menu-font-color);
            padding: 0 14px;
            margin: 20px 0 19px 0
        }

        .WIRq1uRd::after {
            position: relative;
            bottom: -4px;
            display: block;
            height: 1px;
            background-color: #f37021;
            transition: width .5s;
            content: "";
            right: 0;
            width: 0
        }

        .QgAsUV\+v::after {
            position: relative;
            bottom: -4px;
            display: block;
            height: 1px;
            background-color: #f37021;
            transition: width .5s;
            content: "";
            left: 0;
            width: 100%
        }

        ._5KPoFMMo {
            transition: all 350ms ease-out, opacity 0s;
            transform: translateY(calc(-100% - 124px));
            position: absolute;
            left: 0;
            top: 100%;
            right: 0;
            z-index: 10;
            background-color: var(--header-bg-hover-color)
        }

        .PuPpKwnN {
            transform: translateY(0)
        }

        .qeeD9sS3 {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, .6);
            -webkit-backdrop-filter: blur(30px);
            backdrop-filter: blur(30px)
        }
    </style>
    <style type="text/css">
        .dropdown-menu-enter {
            transform: translateY(-20px);
            opacity: 0
        }

        .dropdown-menu-leave-to {
            opacity: 0
        }

        .dropdown-menu-enter-active,
        .dropdown-menu-leave-active {
            transition: transform 200ms ease-out, opacity 200ms ease-in
        }

        .menu-background-enter,
        .menu-background-leave-to {
            opacity: 0
        }

        .menu-background-enter-active,
        .menu-background-leave-active {
            transition: all 350ms ease-out
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(/dist/jquery-components/530e06d4557f064123442e840be06350.woff2) format("woff2"), url(/dist/jquery-components/09e768ea2f6db3256ea4d678c7284723.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(/dist/jquery-components/0d8421e4b229ca3ea212c69d11c98940.woff2) format("woff2"), url(/dist/jquery-components/5e4ee0389a6b45aaddc07af2b8518432.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(/dist/jquery-components/b0462af7da71a0bae0091ddb449b98d5.woff2) format("woff2"), url(/dist/jquery-components/eec638311e8f3c36f3d4929464b0406e.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(/dist/jquery-components/d59df5a538d671a54c795a8f738d0b84.woff2) format("woff2"), url(/dist/jquery-components/0247694e510ebe67cce1c8bb53d6560f.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(/dist/jquery-components/751c19bd96c1fdbe6c883c418a18a550.woff2) format("woff2"), url(/dist/jquery-components/1c5a4d413294b14b36e02367a5cd480f.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(/dist/jquery-components/6cd35edfbc0d7a41713109d9162a0ffc.woff2) format("woff2")
        }

        .qPL7v-LD {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            text-decoration: none;
            outline: none;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .K0HzcaQk {
            height: 50px;
            padding: 0 30px;
            border-radius: 25px
        }

        .nRTctF8w {
            height: 40px;
            padding: 13px 30px 10px;
            border-radius: 50px
        }

        .ZEgJ2CcQ {
            height: 25px;
            padding: 0 30px;
            border-radius: 12px
        }

        .jUP0m5JL {
            padding: 0
        }

        .oqXEz3hf {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #fff;
            background-color: #f37021;
            border: 1px solid transparent
        }

        .oqXEz3hf:hover,
        .oqXEz3hf:focus,
        .oqXEz3hf.W0OTrltM {
            color: #fff;
            background-color: #f69459;
            border: 1px solid transparent
        }

        .oqXEz3hf.nrYJ6g8S {
            color: transparent;
            background: #f37021 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        .oqXEz3hf.D9Y3gjSN {
            color: rgba(255, 255, 255, .3);
            background-color: #704229;
            border: 1px solid transparent;
            cursor: not-allowed;
            pointer-events: none
        }

        .r2L14qCJ {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #fff;
            background-color: transparent;
            border: 1px solid #f37021
        }

        .r2L14qCJ:hover,
        .r2L14qCJ:focus,
        .r2L14qCJ.W0OTrltM {
            color: #fff;
            background-color: #f69459;
            border: 1px solid transparent
        }

        .r2L14qCJ.nrYJ6g8S {
            color: transparent;
            background: #f37021 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        .r2L14qCJ.D9Y3gjSN {
            background-color: transparent;
            border: 1px solid rgba(243, 112, 33, .3);
            cursor: not-allowed;
            pointer-events: none
        }

        .YcpfywSp {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #000;
            background-color: #fff;
            border: 1px solid transparent
        }

        .YcpfywSp:hover,
        .YcpfywSp:focus,
        .YcpfywSp.W0OTrltM {
            color: #000;
            background-color: rgba(255, 255, 255, .65);
            border: 1px solid transparent
        }

        .YcpfywSp.nrYJ6g8S {
            color: transparent;
            background: #000 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        .YcpfywSp.D9Y3gjSN {
            background-color: #fff;
            border: 1px solid transparent;
            cursor: not-allowed;
            opacity: .3;
            pointer-events: none
        }

        ._6Aosk9bd {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #fff;
            background-color: transparent;
            border: 1px solid #fff
        }

        ._6Aosk9bd:hover,
        ._6Aosk9bd:focus,
        ._6Aosk9bd.W0OTrltM {
            color: #fff;
            background-color: #f69459;
            border: 1px solid transparent
        }

        ._6Aosk9bd.nrYJ6g8S {
            color: transparent;
            background: #f37021 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        ._6Aosk9bd.D9Y3gjSN {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, .3);
            cursor: not-allowed;
            pointer-events: none
        }

        ._2MekyhBz {
            color: inherit;
            background-color: transparent;
            border: 0
        }

        .i6bp\+295 {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #9d9390;
            background-color: transparent;
            border: none
        }

        .i6bp\+295.D9Y3gjSN {
            cursor: not-allowed;
            opacity: .5;
            pointer-events: none
        }

        .wbiy5m8I {
            width: 100%
        }

        .WtnjIMc1 {
            display: inline-flex;
            margin-right: 10px
        }

        .a0X2LDqc {
            display: inline-flex;
            margin-left: 10px
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(/dist/jquery-components/530e06d4557f064123442e840be06350.woff2) format("woff2"), url(/dist/jquery-components/09e768ea2f6db3256ea4d678c7284723.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(/dist/jquery-components/0d8421e4b229ca3ea212c69d11c98940.woff2) format("woff2"), url(/dist/jquery-components/5e4ee0389a6b45aaddc07af2b8518432.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(/dist/jquery-components/b0462af7da71a0bae0091ddb449b98d5.woff2) format("woff2"), url(/dist/jquery-components/eec638311e8f3c36f3d4929464b0406e.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(/dist/jquery-components/d59df5a538d671a54c795a8f738d0b84.woff2) format("woff2"), url(/dist/jquery-components/0247694e510ebe67cce1c8bb53d6560f.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(/dist/jquery-components/751c19bd96c1fdbe6c883c418a18a550.woff2) format("woff2"), url(/dist/jquery-components/1c5a4d413294b14b36e02367a5cd480f.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(/dist/jquery-components/6cd35edfbc0d7a41713109d9162a0ffc.woff2) format("woff2")
        }

        .nGxxpsFQ {
            width: 100%
        }

        .aJvtYua9 {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            margin-bottom: 16px;
            color: var(--horizontal-menu-submenu-font-color);
            letter-spacing: 1px;
            text-transform: uppercase
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .tupUMafz {
            display: flex;
            flex-direction: column;
            align-items: flex-start
        }

        .mj4pKU\+s {
            max-height: 546px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-template-rows: repeat(auto-fit, minmax(39px, 1fr));
            grid-auto-flow: column;
            -moz-column-gap: 20px;
            column-gap: 20px
        }

        @media screen and (min-width: 1600px) {
            .mj4pKU\+s {
                -moz-column-gap: 80px;
                column-gap: 80px
            }
        }

        ._8ZHV4Ou7 {
            display: flex;
            margin-bottom: 16px
        }

        ._8ZHV4Ou7:last-child {
            margin-bottom: 0
        }

        .fF7d7Y5e {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: var(--horizontal-menu-font-color);
            letter-spacing: .1px;
            text-transform: none;
            text-decoration: none
        }

        .fF7d7Y5e:last-child {
            margin-bottom: 0
        }

        .fF7d7Y5e::after {
            display: block;
            width: 0%;
            height: 1px;
            background-color: #f37021;
            transition: width .5s;
            content: ""
        }

        .fF7d7Y5e:hover::after {
            width: 100%
        }
    </style>
    <style type="text/css">
        .OYDa7qOT:not(:last-child) {
            margin-bottom: 60px
        }
    </style>
    <style type="text/css">
        .g9KouMZO {
            display: flex;
            justify-content: center;
            width: 100%;
            min-height: 649px;
            background: var(--header-bg-hover-color)
        }

        .bCgTH0W- {
            min-height: 548px
        }

        ._2w2LAcb6 {
            display: flex;
            justify-content: center;
            padding-top: 24px;
            padding-bottom: 45px;
            width: 1280px
        }

        .vxqr3s4J {
            width: 500px;
            height: 445px;
            -o-object-fit: cover;
            object-fit: cover;
            border-radius: 10px;
            margin-left: 80px
        }

        ._0Y7TQoyf {
            display: flex;
            margin: 0;
            padding: 0
        }

        .LuO4wPm0>li:not(:last-child) {
            margin-right: 80px
        }

        .XbVfojaW>li:not(:last-child) {
            margin-right: 20px
        }

        @media screen and (min-width: 1600px) {
            .XbVfojaW>li:not(:last-child) {
                margin-right: 80px
            }
        }

        .XbVfojaW>li:last-child {
            width: 200px
        }

        .wm0GOsOj {
            color: #fff;
            list-style-type: none
        }

        ._5cOQ8to1 {
            width: 260px
        }

        .FVOpZxdA {
            width: 250px
        }

        .hKsS2rtS {
            width: 520px
        }

        @media screen and (min-width: 1600px) {
            .hKsS2rtS {
                width: 580px
            }
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(/dist/jquery-components/530e06d4557f064123442e840be06350.woff2) format("woff2"), url(/dist/jquery-components/09e768ea2f6db3256ea4d678c7284723.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(/dist/jquery-components/0d8421e4b229ca3ea212c69d11c98940.woff2) format("woff2"), url(/dist/jquery-components/5e4ee0389a6b45aaddc07af2b8518432.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(/dist/jquery-components/b0462af7da71a0bae0091ddb449b98d5.woff2) format("woff2"), url(/dist/jquery-components/eec638311e8f3c36f3d4929464b0406e.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(/dist/jquery-components/d59df5a538d671a54c795a8f738d0b84.woff2) format("woff2"), url(/dist/jquery-components/0247694e510ebe67cce1c8bb53d6560f.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(/dist/jquery-components/751c19bd96c1fdbe6c883c418a18a550.woff2) format("woff2"), url(/dist/jquery-components/1c5a4d413294b14b36e02367a5cd480f.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(/dist/jquery-components/6cd35edfbc0d7a41713109d9162a0ffc.woff2) format("woff2")
        }

        .kHHqd-k1 {
            width: 100%;
            background-color: inherit
        }

        .RdSkY4Np {
            position: relative;
            display: flex;
            justify-content: center;
            z-index: 20;
            background-color: inherit
        }

        .iyylU38R {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1320px;
            margin: 0;
            padding: 0 20px;
            letter-spacing: 1.3px;
            transition: all .5s
        }

        .Skkbom1s .WIRq1uRd {
            color: #9d9390
        }

        .izKD-eXe {
            text-transform: uppercase;
            cursor: pointer
        }

        .izKD-eXe:first-child {
            padding-left: 0
        }

        .HeGeqKvO .WIRq1uRd {
            color: var(--horizontal-menu-font-hover-color)
        }

        .WIRq1uRd {
            display: block;
            margin-top: 4px;
            color: #fff;
            text-decoration: none;
            list-style-type: none;
            display: block;
            color: var(--horizontal-menu-font-color);
            padding: 0 14px;
            margin: 20px 0 19px 0
        }

        .WIRq1uRd::after {
            position: relative;
            bottom: -4px;
            display: block;
            height: 1px;
            background-color: #f37021;
            transition: width .5s;
            content: "";
            right: 0;
            width: 0
        }

        .QgAsUV\+v::after {
            position: relative;
            bottom: -4px;
            display: block;
            height: 1px;
            background-color: #f37021;
            transition: width .5s;
            content: "";
            left: 0;
            width: 100%
        }

        ._5KPoFMMo {
            transition: all 350ms ease-out, opacity 0s;
            transform: translateY(calc(-100% - 124px));
            position: absolute;
            left: 0;
            top: 100%;
            right: 0;
            z-index: 10;
            background-color: var(--header-bg-hover-color)
        }

        .PuPpKwnN {
            transform: translateY(0)
        }

        .qeeD9sS3 {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, .6);
            -webkit-backdrop-filter: blur(30px);
            backdrop-filter: blur(30px)
        }
    </style>
    <style type="text/css">
        .dropdown-menu-enter {
            transform: translateY(-20px);
            opacity: 0
        }

        .dropdown-menu-leave-to {
            opacity: 0
        }

        .dropdown-menu-enter-active,
        .dropdown-menu-leave-active {
            transition: transform 200ms ease-out, opacity 200ms ease-in
        }

        .menu-background-enter,
        .menu-background-leave-to {
            opacity: 0
        }

        .menu-background-enter-active,
        .menu-background-leave-active {
            transition: all 350ms ease-out
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(/dist/jquery-components/530e06d4557f064123442e840be06350.woff2) format("woff2"), url(/dist/jquery-components/09e768ea2f6db3256ea4d678c7284723.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(/dist/jquery-components/0d8421e4b229ca3ea212c69d11c98940.woff2) format("woff2"), url(/dist/jquery-components/5e4ee0389a6b45aaddc07af2b8518432.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(/dist/jquery-components/b0462af7da71a0bae0091ddb449b98d5.woff2) format("woff2"), url(/dist/jquery-components/eec638311e8f3c36f3d4929464b0406e.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(/dist/jquery-components/d59df5a538d671a54c795a8f738d0b84.woff2) format("woff2"), url(/dist/jquery-components/0247694e510ebe67cce1c8bb53d6560f.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(/dist/jquery-components/751c19bd96c1fdbe6c883c418a18a550.woff2) format("woff2"), url(/dist/jquery-components/1c5a4d413294b14b36e02367a5cd480f.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(/dist/jquery-components/6cd35edfbc0d7a41713109d9162a0ffc.woff2) format("woff2")
        }

        .qPL7v-LD {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            text-decoration: none;
            outline: none;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .K0HzcaQk {
            height: 50px;
            padding: 0 30px;
            border-radius: 25px
        }

        .nRTctF8w {
            height: 40px;
            padding: 13px 30px 10px;
            border-radius: 50px
        }

        .ZEgJ2CcQ {
            height: 25px;
            padding: 0 30px;
            border-radius: 12px
        }

        .jUP0m5JL {
            padding: 0
        }

        .oqXEz3hf {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #fff;
            background-color: #f37021;
            border: 1px solid transparent
        }

        .oqXEz3hf:hover,
        .oqXEz3hf:focus,
        .oqXEz3hf.W0OTrltM {
            color: #fff;
            background-color: #f69459;
            border: 1px solid transparent
        }

        .oqXEz3hf.nrYJ6g8S {
            color: transparent;
            background: #f37021 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        .oqXEz3hf.D9Y3gjSN {
            color: rgba(255, 255, 255, .3);
            background-color: #704229;
            border: 1px solid transparent;
            cursor: not-allowed;
            pointer-events: none
        }

        .r2L14qCJ {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #fff;
            background-color: transparent;
            border: 1px solid #f37021
        }

        .r2L14qCJ:hover,
        .r2L14qCJ:focus,
        .r2L14qCJ.W0OTrltM {
            color: #fff;
            background-color: #f69459;
            border: 1px solid transparent
        }

        .r2L14qCJ.nrYJ6g8S {
            color: transparent;
            background: #f37021 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        .r2L14qCJ.D9Y3gjSN {
            background-color: transparent;
            border: 1px solid rgba(243, 112, 33, .3);
            cursor: not-allowed;
            pointer-events: none
        }

        .YcpfywSp {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #000;
            background-color: #fff;
            border: 1px solid transparent
        }

        @media screen and (min-width: 1321px) {
            .mando-header-modern {
                height: 60px !important;
            }
        }

        .YcpfywSp:hover,
        .YcpfywSp:focus,
        .YcpfywSp.W0OTrltM {
            color: #000;
            background-color: rgba(255, 255, 255, .65);
            border: 1px solid transparent
        }

        .YcpfywSp.nrYJ6g8S {
            color: transparent;
            background: #000 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        .YcpfywSp.D9Y3gjSN {
            background-color: #fff;
            border: 1px solid transparent;
            cursor: not-allowed;
            opacity: .3;
            pointer-events: none
        }

        ._6Aosk9bd {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #fff;
            background-color: transparent;
            border: 1px solid #fff
        }

        ._6Aosk9bd:hover,
        ._6Aosk9bd:focus,
        ._6Aosk9bd.W0OTrltM {
            color: #fff;
            background-color: #f69459;
            border: 1px solid transparent
        }

        ._6Aosk9bd.nrYJ6g8S {
            color: transparent;
            background: #f37021 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        ._6Aosk9bd.D9Y3gjSN {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, .3);
            cursor: not-allowed;
            pointer-events: none
        }

        ._2MekyhBz {
            color: inherit;
            background-color: transparent;
            border: 0
        }

        .i6bp\+295 {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #9d9390;
            background-color: transparent;
            border: none
        }

        .i6bp\+295.D9Y3gjSN {
            cursor: not-allowed;
            opacity: .5;
            pointer-events: none
        }

        .wbiy5m8I {
            width: 100%
        }

        .WtnjIMc1 {
            display: inline-flex;
            margin-right: 10px
        }

        .a0X2LDqc {
            display: inline-flex;
            margin-left: 10px
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-submenu {
            width: 100%
        }

        .mando-submenu__title {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            margin-bottom: 16px;
            color: var(--horizontal-menu-submenu-font-color);
            letter-spacing: 1px;
            text-transform: uppercase
        }

        .mando-submenu__menu-list {
            display: flex;
            flex-direction: column;
            align-items: flex-start
        }

        .mando-submenu__menu-list--wide {
            max-height: 546px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-template-rows: repeat(auto-fit, minmax(39px, 1fr));
            grid-auto-flow: column;
            -moz-column-gap: 20px;
            column-gap: 20px
        }

        @media screen and (min-width: 1600px) {
            .mando-submenu__menu-list--wide {
                -moz-column-gap: 80px;
                column-gap: 80px
            }
        }

        .mando-submenu__item-wrap {
            display: flex;
            margin-bottom: 16px
        }

        .mando-submenu__item-wrap:last-child {
            margin-bottom: 0
        }

        .mando-submenu__item {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: var(--horizontal-menu-font-color);
            letter-spacing: .1px;
            text-transform: none;
            text-decoration: none
        }

        .mando-submenu__item:last-child {
            margin-bottom: 0
        }

        .mando-submenu__item::after {
            display: block;
            width: 0%;
            height: 1px;
            background-color: #f37021;
            transition: width .5s;
            content: ""
        }

        .mando-submenu__item:hover::after {
            width: 100%
        }
    </style>
    <style type="text/css">
        .mando-double-submenu__submenu:not(:last-child) {
            margin-bottom: 60px
        }
    </style>
    <style type="text/css">
        .mando-dropdown-menu {
            display: flex;
            justify-content: center;
            width: 100%;
            min-height: 649px;
            background: var(--header-bg-hover-color)
        }

        .mando-dropdown-menu--old-version {
            min-height: 548px
        }

        .mando-dropdown-menu__wrapper {
            display: flex;
            justify-content: center;
            padding-top: 24px;
            padding-bottom: 45px;
            width: 1280px
        }

        .mando-dropdown-menu__img {
            width: 500px;
            height: 445px;
            -o-object-fit: cover;
            object-fit: cover;
            border-radius: 10px;
            margin-left: 80px
        }

        .mando-dropdown-menu__list {
            display: flex;
            margin: 0;
            padding: 0
        }

        .mando-dropdown-menu__list--view--standard>li:not(:last-child) {
            margin-right: 80px
        }

        .mando-dropdown-menu__list--view--compressed>li:not(:last-child) {
            margin-right: 20px
        }

        @media screen and (min-width: 1600px) {
            .mando-dropdown-menu__list--view--compressed>li:not(:last-child) {
                margin-right: 80px
            }
        }

        .mando-dropdown-menu__list--view--compressed>li:last-child {
            width: 200px
        }

        .mando-dropdown-menu__item {
            color: #fff;
            list-style-type: none
        }

        .mando-dropdown-menu__item--view--standard {
            width: 260px
        }

        .mando-dropdown-menu__item--view--compressed {
            width: 250px
        }

        .mando-dropdown-menu__item--wide {
            width: 520px
        }

        @media screen and (min-width: 1600px) {
            .mando-dropdown-menu__item--wide {
                width: 580px
            }
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-horizontal-menu {
            width: 100%;
            background-color: inherit
        }

        .mando-horizontal-menu__wrap {
            position: relative;
            display: flex;
            justify-content: center;
            z-index: 20;
            background-color: inherit
        }

        .mando-horizontal-menu__menu {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1320px;
            margin: 0;
            padding: 0 20px;
            letter-spacing: 1.3px;
            transition: all .5s
        }

        .mando-horizontal-menu__menu--active .mando-horizontal-menu__menu-title {
            color: #9d9390
        }

        .mando-horizontal-menu__menu-item {
            text-transform: uppercase;
            cursor: pointer
        }

        .mando-horizontal-menu__menu-item:first-child {
            padding-left: 0
        }

        .mando-horizontal-menu__menu-item--active .mando-horizontal-menu__menu-title {
            color: var(--horizontal-menu-font-hover-color)
        }

        .mando-horizontal-menu__menu-title {
            display: block;
            margin-top: 4px;
            color: #fff;
            text-decoration: none;
            list-style-type: none;
            display: block;
            color: var(--horizontal-menu-font-color);
            padding: 0 14px;
            margin: 20px 0 19px 0
        }

        .mando-horizontal-menu__menu-title::after {
            position: relative;
            bottom: -4px;
            display: block;
            height: 1px;
            background-color: #f37021;
            transition: width .5s;
            content: "";
            right: 0;
            width: 0
        }

        .mando-horizontal-menu__menu-title--active::after {
            position: relative;
            bottom: -4px;
            display: block;
            height: 1px;
            background-color: #f37021;
            transition: width .5s;
            content: "";
            left: 0;
            width: 100%
        }

        .mando-horizontal-menu__dropdown-menu {
            transition: all 350ms ease-out, opacity 0s;
            transform: translateY(calc(-100% - 124px));
            position: absolute;
            left: 0;
            top: 100%;
            right: 0;
            z-index: 10;
            background-color: var(--header-bg-hover-color)
        }

        .mando-horizontal-menu__dropdown-menu--focus {
            transform: translateY(0)
        }

        .mando-horizontal-menu__background {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, .6);
            -webkit-backdrop-filter: blur(30px);
            backdrop-filter: blur(30px)
        }
    </style>
    <style type="text/css">
        .dropdown-menu-enter {
            transform: translateY(-20px);
            opacity: 0
        }

        .dropdown-menu-leave-to {
            opacity: 0
        }

        .dropdown-menu-enter-active,
        .dropdown-menu-leave-active {
            transition: transform 200ms ease-out, opacity 200ms ease-in
        }

        .menu-background-enter,
        .menu-background-leave-to {
            opacity: 0
        }

        .menu-background-enter-active,
        .menu-background-leave-active {
            transition: all 350ms ease-out
        }
    </style>
    <style type="text/css">
        .ui-icon-magnifier-alt {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-magnifier-alt {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cg stroke='%23000' fill='none' fill-rule='evenodd'%3E%3Cpath d='M8.5 16a7.5 7.5 0 100-15 7.5 7.5 0 000 15h0zM19 19l-5-5'/%3E%3C/g%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        .ui-icon-close-other {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-close-other {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M18.3334 10C18.3334 14.5833 14.5834 18.3333 10 18.3333C5.41669 18.3333 1.66669 14.5833 1.66669 10C1.66669 5.41667 5.41669 1.66667 10 1.66667C14.5834 1.66667 18.3334 5.41667 18.3334 10ZM8.17197 7.11137C7.87908 6.81848 7.40421 6.81848 7.11131 7.11137C6.81842 7.40427 6.81843 7.87914 7.11132 8.17203L8.93933 10L7.11133 11.828C6.81843 12.1209 6.81843 12.5958 7.11132 12.8887C7.40421 13.1816 7.87909 13.1816 8.17198 12.8887L9.99999 11.0607L11.828 12.8887C12.1209 13.1816 12.5958 13.1816 12.8887 12.8887C13.1816 12.5958 13.1816 12.1209 12.8887 11.828L11.0607 10L12.8887 8.17204C13.1816 7.87914 13.1816 7.40427 12.8887 7.11138C12.5958 6.81848 12.1209 6.81848 11.828 7.11137L9.99999 8.93937L8.17197 7.11137Z' fill='%23AAAAAA'/%3E %3C/svg%3E")
        }
    </style>
    <style type="text/css">
        .ui-icon-magnifier {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-magnifier {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cg stroke='%23FFF' fill='none' fill-rule='evenodd'%3E%3Cpath d='M8.5 16a7.5 7.5 0 100-15 7.5 7.5 0 000 15h0zM19 19l-5-5'/%3E%3C/g%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            text-decoration: none;
            outline: none;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .ui-button--size--xl {
            height: 50px;
            padding: 0 30px;
            border-radius: 25px
        }

        .ui-button--size--m {
            height: 40px;
            padding: 13px 30px 10px;
            border-radius: 50px
        }

        .ui-button--size--s {
            height: 25px;
            padding: 0 30px;
            border-radius: 12px
        }

        .ui-button--size--by-content {
            padding: 0
        }

        .ui-button--view--action {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #fff;
            background-color: #f37021;
            border: 1px solid transparent
        }

        .ui-button--view--action:hover,
        .ui-button--view--action:focus,
        .ui-button--view--action.ui-is-hovered {
            color: #fff;
            background-color: #f69459;
            border: 1px solid transparent
        }

        .ui-button--view--action.ui-is-loading {
            color: transparent;
            background: #f37021 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        .ui-button--view--action.ui-is-disabled {
            color: rgba(255, 255, 255, .3);
            background-color: #704229;
            border: 1px solid transparent;
            cursor: not-allowed;
            pointer-events: none
        }

        .ui-button--view--extra {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #fff;
            background-color: transparent;
            border: 1px solid #f37021
        }

        .ui-button--view--extra:hover,
        .ui-button--view--extra:focus,
        .ui-button--view--extra.ui-is-hovered {
            color: #fff;
            background-color: #f69459;
            border: 1px solid transparent
        }

        .ui-button--view--extra.ui-is-loading {
            color: transparent;
            background: #f37021 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        .ui-button--view--extra.ui-is-disabled {
            background-color: transparent;
            border: 1px solid rgba(243, 112, 33, .3);
            cursor: not-allowed;
            pointer-events: none
        }

        .ui-button--view--payment {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #000;
            background-color: #fff;
            border: 1px solid transparent
        }

        .ui-button--view--payment:hover,
        .ui-button--view--payment:focus,
        .ui-button--view--payment.ui-is-hovered {
            color: #000;
            background-color: rgba(255, 255, 255, .65);
            border: 1px solid transparent
        }

        .ui-button--view--payment.ui-is-loading {
            color: transparent;
            background: #000 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        .ui-button--view--payment.ui-is-disabled {
            background-color: #fff;
            border: 1px solid transparent;
            cursor: not-allowed;
            opacity: .3;
            pointer-events: none
        }

        .ui-button--view--default {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #fff;
            background-color: transparent;
            border: 1px solid #fff
        }

        .ui-button--view--default:hover,
        .ui-button--view--default:focus,
        .ui-button--view--default.ui-is-hovered {
            color: #fff;
            background-color: #f69459;
            border: 1px solid transparent
        }

        .ui-button--view--default.ui-is-loading {
            color: transparent;
            background: #f37021 url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m7.41 1.85 2.35 4.06a.85.85 0 1 1-1.48.85L5.94 2.7a.85.85 0 0 1 1.47-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m3.2 5.44 4.06 2.34a.85.85 0 1 1-.85 1.48L2.35 6.9a.85.85 0 0 1 .85-1.47Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.08333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.16 10.65h5.07c.36 0 .66.3.66.65v.4c0 .36-.3.65-.66.65H1.16a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.16666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M7.57 14.06a.85.85 0 0 1-.3 1.16L3.2 17.56a.85.85 0 0 1-.85-1.47l4.06-2.35c.4-.23.93-.1 1.16.32Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.25s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.44 15.93c.41.23.55.75.32 1.16L7.4 21.15a.85.85 0 1 1-1.47-.85l2.34-4.06a.85.85 0 0 1 1.16-.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.3333333333333333s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 16.61h.4c.36 0 .65.3.65.66v5.07c0 .37-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66v-5.07c0-.36.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.4166666666666667s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m15.72 16.24 2.34 4.06a.85.85 0 1 1-1.47.85l-2.35-4.06a.85.85 0 1 1 1.48-.85Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='m17.59 13.74 4.06 2.35a.85.85 0 1 1-.85 1.47l-4.06-2.34a.85.85 0 1 1 .85-1.48Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.5833333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.77 10.65h5.07c.37 0 .66.3.66.65v.4c0 .36-.3.65-.66.65h-5.07a.66.66 0 0 1-.66-.65v-.4c0-.36.3-.65.66-.65Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.6666666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M21.96 5.75a.85.85 0 0 1-.31 1.16l-4.06 2.35a.85.85 0 1 1-.85-1.48l4.06-2.34c.4-.24.92-.1 1.16.31Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.75s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.75 1.54c.4.24.55.76.31 1.16l-2.34 4.06a.85.85 0 1 1-1.48-.85l2.35-4.06a.85.85 0 0 1 1.16-.3Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.8333333333333334s' repeatCount='indefinite'/%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.8 0h.4c.36 0 .65.3.65.66v5.07c0 .36-.3.66-.65.66h-.4a.66.66 0 0 1-.65-.66V.66c0-.37.3-.66.65-.66Z' fill='%23fff'%3E%3Canimate attributeName='opacity' values='1;0' keyTimes='0;1' dur='1s' begin='-0.9166666666666666s' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E") no-repeat center/auto 23px;
            border: 1px solid transparent;
            cursor: default
        }

        .ui-button--view--default.ui-is-disabled {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, .3);
            cursor: not-allowed;
            pointer-events: none
        }

        .ui-button--view--simple {
            color: inherit;
            background-color: transparent;
            border: 0
        }

        .ui-button--view--borderless {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            white-space: nowrap;
            text-align: center;
            transition: .3s background-color, .3s border-color, .3s color;
            color: #9d9390;
            background-color: transparent;
            border: none
        }

        .ui-button--view--borderless.ui-is-disabled {
            cursor: not-allowed;
            opacity: .5;
            pointer-events: none
        }

        .ui-button--is-expanded {
            width: 100%
        }

        .ui-button__icon-left {
            display: inline-flex;
            margin-right: 10px
        }

        .ui-button__icon-right {
            display: inline-flex;
            margin-left: 10px
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-search-input {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            width: 100%;
            max-width: 303px;
            height: 50px
        }

        .ui-search-input * {
            box-sizing: border-box
        }

        .ui-search-input input[type=search]::-webkit-search-decoration,
        .ui-search-input input[type=search]::-webkit-search-cancel-button,
        .ui-search-input input[type=search]::-webkit-search-results-button,
        .ui-search-input input[type=search]::-webkit-search-results-decoration {
            display: none
        }

        .ui-search-input--is-expanded {
            max-width: none
        }

        .ui-search-input__prepended-icon {
            display: flex;
            align-items: center;
            padding: 16px
        }

        .ui-search-input__append {
            display: flex;
            align-items: center
        }

        .ui-search-input__appended-icon {
            display: flex;
            padding: 16px
        }

        .ui-search-input__inner {
            position: relative;
            display: flex;
            height: 100%;
            overflow: hidden;
            background-color: #fff;
            border: none;
            border-radius: 25px;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .ui-search-input__content {
            width: 100%;
            height: 100%;
            padding: 0 16px 0 30px;
            color: #000;
            background-color: transparent;
            border: none
        }

        .ui-search-input__content:focus {
            outline: none
        }

        .ui-search-input__content::-moz-placeholder {
            color: rgba(0, 0, 0, .5)
        }

        .ui-search-input__content:-ms-input-placeholder {
            color: rgba(0, 0, 0, .5)
        }

        .ui-search-input__content::placeholder {
            color: rgba(0, 0, 0, .5)
        }

        .ui-search-input__content--mobile {
            padding: 0
        }

        .ui-search-input__content--focused {
            color: #000
        }

        .ui-search-input__content--focused::-moz-placeholder {
            color: #fff
        }

        .ui-search-input__content--focused:-ms-input-placeholder {
            color: #fff
        }

        .ui-search-input__content--focused::placeholder {
            color: #fff
        }

        .ui-search-input__form {
            display: contents
        }

        .ui-search-input__search-button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 130px;
            height: 100%;
            background-color: #f37021;
            border-radius: 25px;
            cursor: pointer
        }

        .ui-search-input__button-label {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 19px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            margin-left: 5px;
            color: #fff
        }

        .ui-search-input__clear-button {
            margin-top: auto;
            margin-bottom: auto
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-search-header {
            z-index: 5;
            display: flex;
            justify-content: center;
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content
        }

        @media screen and (max-width: 479px) {
            .mando-search-header {
                flex-direction: column;
                align-items: flex-start;
                justify-content: flex-start;
                width: 100%
            }
        }

        .mando-search-header__input-wrapper {
            display: flex;
            width: 850px
        }

        @media screen and (max-width: 479px) {
            .mando-search-header__input-wrapper {
                position: relative;
                align-items: stretch;
                justify-content: space-between;
                width: 100%
            }
        }

        .mando-search-header__back {
            font-weight: 400;
            font-size: 11px;
            font-family: "helvetica", sans-serif;
            line-height: 14px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            display: block;
            margin-left: 16px;
            color: #fff;
            width: 60px;
            min-width: 60px
        }

        @media screen and (min-width: 980px) {
            .mando-search-header__back {
                display: none
            }
        }

        .mando-search-header__input {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased
        }

        .mando-search-header__item {
            padding-top: 12px
        }
    </style>
    <style type="text/css">
        .ui-icon-close {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-close {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M15.28 16.03L10 10.75l-5.28 5.28-.75-.75L9.25 10 3.97 4.72l.75-.75L10 9.25l5.28-5.28.75.75L10.75 10l5.28 5.28z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-search-history {
            display: flex;
            flex-direction: column
        }

        .mando-search-history__entry {
            display: flex;
            justify-content: space-between;
            padding-left: 0;
            color: #9d9390
        }

        .mando-search-history__item-inner {
            display: flex;
            align-items: center;
            height: 40px;
            color: rgba(255, 255, 255, .5);
            cursor: pointer;
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased
        }

        .mando-search-history__item-inner:hover {
            color: #ff8f57;
            transition: .3s all ease-in-out
        }

        .mando-search-history__remove {
            opacity: .5
        }
    </style>
    <style type="text/css">
        .ui-product-color {
            display: inline-block;
            min-width: 10px;
            min-height: 10px
        }

        .ui-product-color__img {
            display: block;
            width: 10px;
            height: 10px;
            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 2px
        }
    </style>
    <style type="text/css">
        .ui-icon-add-to-cart-accent {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-add-to-cart-accent {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 20a10 10 0 100-20 10 10 0 000 20z' fill='%23F37021'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M16 10.4h-5.6V16h-.8v-5.6H4v-.8h5.6V4h.8v5.6H16v.8z' fill='%23fff'/%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        .ui-icon-check-accent {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-check-accent {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M16.8 5.2a.71.71 0 00-1 0l-8.38 8.16-3.23-3.14a.71.71 0 00-.98 0 .67.67 0 000 .96l3.71 3.62c.28.27.72.27 1 0l8.87-8.64a.67.67 0 000-.96z' fill='%23EF6F2E' fill-rule='nonzero'/%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        .ui-icon-heart-alt {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-heart-alt {
            width: 19px;
            height: 17px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='19' height='17' viewBox='0 0 24 18' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Cpath d='M5.646 1.008c.859.012 1.65.256 2.376.725.448.29.812.678 1.183 1.057.07.071.143.14.208.216.063.075.107.066.173-.002.29-.295.575-.597.88-.874a4.254 4.254 0 0 1 2.018-1.025c1.015-.213 1.998-.107 2.925.366 1.217.62 2.031 1.603 2.415 2.947.19.667.224 1.348.112 2.031A4.641 4.641 0 0 1 16.648 9c-1.4 1.433-2.795 2.87-4.194 4.305-.95.975-1.904 1.947-2.857 2.92-.1.102-.103.1-.201 0L5.94 12.688c-.966-.99-1.931-1.98-2.893-2.972-.348-.36-.705-.712-1.026-1.094-.46-.549-.748-1.193-.906-1.9a4.719 4.719 0 0 1-.03-1.942 4.603 4.603 0 0 1 1.087-2.216c.453-.511.982-.914 1.603-1.185a4.27 4.27 0 0 1 1.778-.371h.092' stroke='white'/%3E %3C/svg%3E")
        }
    </style>
    <style type="text/css">
        @keyframes ui-shine {
            to {
                background-position-x: -300%
            }
        }

        .ui-image {
            display: grid;
            grid-template-rows: 1fr;
            grid-template-columns: 1fr
        }

        .ui-image__image {
            grid-row: 1;
            grid-column: 1;
            width: 100%;
            height: 100%;
            transition: .5s opacity ease-in-out
        }

        .ui-image__sceleton {
            background: linear-gradient(110deg, #494143 8%, #5f5457 25%, #494143 48%) #494143;
            background-size: 300% 200%;
            animation: ui-shine 3s linear infinite;
            grid-row: 1;
            grid-column: 1;
            width: 100%;
            height: 100%;
            transition: .5s opacity ease-in-out
        }
    </style>
    <style type="text/css">
        .ui-price {
            position: relative;
            display: inline-block;
            font-size: 1em;
            white-space: nowrap
        }

        .ui-price--line-through {
            overflow: hidden
        }

        .ui-price--line-through::before {
            position: absolute;
            top: 0;
            left: 0;
            color: inherit;
            content: "────────────────────────────────────────────────────"
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-product-tile {
            display: flex;
            flex-direction: column;
            height: 100%
        }

        @-webkit-keyframes ui-shine {
            to {
                background-position-x: -300%
            }
        }

        @keyframes ui-shine {
            to {
                background-position-x: -300%
            }
        }

        .ui-product-tile__header {
            position: relative
        }

        .ui-product-tile__status {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            position: absolute;
            top: 12px;
            left: 12px;
            z-index: 1;
            color: #f69459;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .ui-product-tile__add-to-wishlist {
            position: absolute;
            top: 0;
            z-index: 1;
            padding: 15px;
            color: inherit;
            background-color: transparent;
            border: 0;
            cursor: pointer;
            left: 0
        }

        .ui-product-tile__add-to-cart {
            position: absolute;
            top: 0;
            z-index: 1;
            padding: 15px;
            color: inherit;
            background-color: transparent;
            border: 0;
            cursor: pointer;
            right: 0
        }

        .ui-product-tile__image-wrapper {
            position: relative;
            display: block;
            background-color: rgba(0, 0, 0, .3);
            border-radius: 12px
        }

        .ui-product-tile__image {
            position: absolute;
            -o-object-fit: contain;
            object-fit: contain
        }

        .ui-product-tile__name {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            display: -webkit-box;
            margin: 6px 0 4px;
            overflow: hidden;
            color: #fff;
            text-decoration: none;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical
        }

        .ui-product-tile__price {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            margin-top: auto;
            color: rgba(255, 255, 255, .5)
        }

        .ui-product-tile--view--carousel-xs {
            width: 138px
        }

        .ui-product-tile--view--carousel-xs .ui-product-tile__image-wrapper {
            width: 100%;
            height: 146px
        }

        .ui-product-tile--view--carousel-xs .ui-product-tile__skeleton-image-wrapper {
            width: 100%;
            height: 146px
        }

        .ui-product-tile--view--carousel-xs .ui-product-tile__image {
            top: calc(50% - 102px / 2 + 5px);
            left: calc(50% - 102px / 2);
            width: 102px;
            height: 102px
        }

        .ui-product-tile--view--carousel-xl {
            width: 156px
        }

        .ui-product-tile--view--carousel-xl .ui-product-tile__image-wrapper {
            width: 100%;
            height: 156px
        }

        .ui-product-tile--view--carousel-xl .ui-product-tile__skeleton-image-wrapper {
            width: 100%;
            height: 156px
        }

        .ui-product-tile--view--carousel-xl .ui-product-tile__image {
            top: calc(50% - 113px / 2 + 5px);
            left: calc(50% - 113px / 2);
            width: 113px;
            height: 113px
        }

        .ui-product-tile__description {
            display: flex;
            flex-direction: column;
            align-content: space-between;
            height: 100%
        }

        .ui-product-tile__colors {
            display: flex;
            min-height: 10px;
            margin-top: 10px
        }

        .ui-product-tile__colors-item:not(:last-child) {
            margin-right: 8px
        }

        .ui-product-tile__skeleton-image-wrapper {
            position: relative;
            display: block;
            background-color: rgba(0, 0, 0, .3);
            border-radius: 12px
        }

        .ui-product-tile__skeleton-image {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(110deg, #494143 8%, #5f5457 25%, #494143 48%) #494143;
            background-size: 300% 200%;
            border-radius: 12px;
            -webkit-animation: ui-shine 3s linear infinite;
            animation: ui-shine 3s linear infinite
        }

        .ui-product-tile__skeleton-lines-wrapper {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 9px
        }

        .ui-product-tile__skeleton-line {
            height: 10px;
            background: linear-gradient(110deg, #494143 8%, #5f5457 25%, #494143 48%) #494143;
            background-size: 300% 200%;
            border-radius: 12px;
            -webkit-animation: ui-shine 3s linear infinite;
            animation: ui-shine 3s linear infinite
        }

        .ui-product-tile__skeleton-line--size--l {
            width: 100%
        }

        .ui-product-tile__skeleton-line--size--m {
            width: 90px
        }

        .ui-product-tile__skeleton-line--size--s {
            width: 65px
        }
    </style>
    <style type="text/css">
        /**
 * Swiper 5.4.5
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * http://swiperjs.com
 *
 * Copyright 2014-2020 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: June 16, 2020
 */

        @font-face {
            font-family: 'swiper-icons';
            src: url("data:application/font-woff;charset=utf-8;base64, d09GRgABAAAAAAZgABAAAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAGRAAAABoAAAAci6qHkUdERUYAAAWgAAAAIwAAACQAYABXR1BPUwAABhQAAAAuAAAANuAY7+xHU1VCAAAFxAAAAFAAAABm2fPczU9TLzIAAAHcAAAASgAAAGBP9V5RY21hcAAAAkQAAACIAAABYt6F0cBjdnQgAAACzAAAAAQAAAAEABEBRGdhc3AAAAWYAAAACAAAAAj//wADZ2x5ZgAAAywAAADMAAAD2MHtryVoZWFkAAABbAAAADAAAAA2E2+eoWhoZWEAAAGcAAAAHwAAACQC9gDzaG10eAAAAigAAAAZAAAArgJkABFsb2NhAAAC0AAAAFoAAABaFQAUGG1heHAAAAG8AAAAHwAAACAAcABAbmFtZQAAA/gAAAE5AAACXvFdBwlwb3N0AAAFNAAAAGIAAACE5s74hXjaY2BkYGAAYpf5Hu/j+W2+MnAzMYDAzaX6QjD6/4//Bxj5GA8AuRwMYGkAPywL13jaY2BkYGA88P8Agx4j+/8fQDYfA1AEBWgDAIB2BOoAeNpjYGRgYNBh4GdgYgABEMnIABJzYNADCQAACWgAsQB42mNgYfzCOIGBlYGB0YcxjYGBwR1Kf2WQZGhhYGBiYGVmgAFGBiQQkOaawtDAoMBQxXjg/wEGPcYDDA4wNUA2CCgwsAAAO4EL6gAAeNpj2M0gyAACqxgGNWBkZ2D4/wMA+xkDdgAAAHjaY2BgYGaAYBkGRgYQiAHyGMF8FgYHIM3DwMHABGQrMOgyWDLEM1T9/w8UBfEMgLzE////P/5//f/V/xv+r4eaAAeMbAxwIUYmIMHEgKYAYjUcsDAwsLKxc3BycfPw8jEQA/gZBASFhEVExcQlJKWkZWTl5BUUlZRVVNXUNTQZBgMAAMR+E+gAEQFEAAAAKgAqACoANAA+AEgAUgBcAGYAcAB6AIQAjgCYAKIArAC2AMAAygDUAN4A6ADyAPwBBgEQARoBJAEuATgBQgFMAVYBYAFqAXQBfgGIAZIBnAGmAbIBzgHsAAB42u2NMQ6CUAyGW568x9AneYYgm4MJbhKFaExIOAVX8ApewSt4Bic4AfeAid3VOBixDxfPYEza5O+Xfi04YADggiUIULCuEJK8VhO4bSvpdnktHI5QCYtdi2sl8ZnXaHlqUrNKzdKcT8cjlq+rwZSvIVczNiezsfnP/uznmfPFBNODM2K7MTQ45YEAZqGP81AmGGcF3iPqOop0r1SPTaTbVkfUe4HXj97wYE+yNwWYxwWu4v1ugWHgo3S1XdZEVqWM7ET0cfnLGxWfkgR42o2PvWrDMBSFj/IHLaF0zKjRgdiVMwScNRAoWUoH78Y2icB/yIY09An6AH2Bdu/UB+yxopYshQiEvnvu0dURgDt8QeC8PDw7Fpji3fEA4z/PEJ6YOB5hKh4dj3EvXhxPqH/SKUY3rJ7srZ4FZnh1PMAtPhwP6fl2PMJMPDgeQ4rY8YT6Gzao0eAEA409DuggmTnFnOcSCiEiLMgxCiTI6Cq5DZUd3Qmp10vO0LaLTd2cjN4fOumlc7lUYbSQcZFkutRG7g6JKZKy0RmdLY680CDnEJ+UMkpFFe1RN7nxdVpXrC4aTtnaurOnYercZg2YVmLN/d/gczfEimrE/fs/bOuq29Zmn8tloORaXgZgGa78yO9/cnXm2BpaGvq25Dv9S4E9+5SIc9PqupJKhYFSSl47+Qcr1mYNAAAAeNptw0cKwkAAAMDZJA8Q7OUJvkLsPfZ6zFVERPy8qHh2YER+3i/BP83vIBLLySsoKimrqKqpa2hp6+jq6RsYGhmbmJqZSy0sraxtbO3sHRydnEMU4uR6yx7JJXveP7WrDycAAAAAAAH//wACeNpjYGRgYOABYhkgZgJCZgZNBkYGLQZtIJsFLMYAAAw3ALgAeNolizEKgDAQBCchRbC2sFER0YD6qVQiBCv/H9ezGI6Z5XBAw8CBK/m5iQQVauVbXLnOrMZv2oLdKFa8Pjuru2hJzGabmOSLzNMzvutpB3N42mNgZGBg4GKQYzBhYMxJLMlj4GBgAYow/P/PAJJhLM6sSoWKfWCAAwDAjgbRAAB42mNgYGBkAIIbCZo5IPrmUn0hGA0AO8EFTQAA") format("woff");
            font-weight: 400;
            font-style: normal;
        }

        :root {
            --swiper-theme-color: #007aff;
        }

        .swiper-container {
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            list-style: none;
            padding: 0;
            /* Fix of Webkit flickering */
            z-index: 1;
        }

        .swiper-container-vertical>.swiper-wrapper {
            flex-direction: column;
        }

        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: flex;
            transition-property: transform;
            box-sizing: content-box;
        }

        .swiper-container-android .swiper-slide,
        .swiper-wrapper {
            transform: translate3d(0px, 0, 0);
        }

        .swiper-container-multirow>.swiper-wrapper {
            flex-wrap: wrap;
        }

        .swiper-container-multirow-column>.swiper-wrapper {
            flex-wrap: wrap;
            flex-direction: column;
        }

        .swiper-container-free-mode>.swiper-wrapper {
            transition-timing-function: ease-out;
            margin: 0 auto;
        }

        .swiper-slide {
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative;
            transition-property: transform;
        }

        .swiper-slide-invisible-blank {
            visibility: hidden;
        }

        /* Auto Height */
        .swiper-container-autoheight,
        .swiper-container-autoheight .swiper-slide {
            height: auto;
        }

        .swiper-container-autoheight .swiper-wrapper {
            align-items: flex-start;
            transition-property: transform, height;
        }

        /* 3D Effects */
        .swiper-container-3d {
            perspective: 1200px;
        }

        .swiper-container-3d .swiper-wrapper,
        .swiper-container-3d .swiper-slide,
        .swiper-container-3d .swiper-slide-shadow-left,
        .swiper-container-3d .swiper-slide-shadow-right,
        .swiper-container-3d .swiper-slide-shadow-top,
        .swiper-container-3d .swiper-slide-shadow-bottom,
        .swiper-container-3d .swiper-cube-shadow {
            transform-style: preserve-3d;
        }

        .swiper-container-3d .swiper-slide-shadow-left,
        .swiper-container-3d .swiper-slide-shadow-right,
        .swiper-container-3d .swiper-slide-shadow-top,
        .swiper-container-3d .swiper-slide-shadow-bottom {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 10;
        }

        .swiper-container-3d .swiper-slide-shadow-left {
            background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-3d .swiper-slide-shadow-right {
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-3d .swiper-slide-shadow-top {
            background-image: linear-gradient(to top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-3d .swiper-slide-shadow-bottom {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        /* CSS Mode */
        .swiper-container-css-mode>.swiper-wrapper {
            overflow: auto;
            scrollbar-width: none;
            /* For Firefox */
            -ms-overflow-style: none;
            /* For Internet Explorer and Edge */
        }

        .swiper-container-css-mode>.swiper-wrapper::-webkit-scrollbar {
            display: none;
        }

        .swiper-container-css-mode>.swiper-wrapper>.swiper-slide {
            scroll-snap-align: start start;
        }

        .swiper-container-horizontal.swiper-container-css-mode>.swiper-wrapper {
            scroll-snap-type: x mandatory;
        }

        .swiper-container-vertical.swiper-container-css-mode>.swiper-wrapper {
            scroll-snap-type: y mandatory;
        }

        :root {
            --swiper-navigation-size: 44px;
            /*
  --swiper-navigation-color: var(--swiper-theme-color);
  */
        }

        .swiper-button-prev,
        .swiper-button-next {
            position: absolute;
            top: 50%;
            width: calc(var(--swiper-navigation-size) / 44 * 27);
            height: var(--swiper-navigation-size);
            margin-top: calc(-1 * var(--swiper-navigation-size) / 2);
            z-index: 10;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--swiper-navigation-color, var(--swiper-theme-color));
        }

        .swiper-button-prev.swiper-button-disabled,
        .swiper-button-next.swiper-button-disabled {
            opacity: 0.35;
            cursor: auto;
            pointer-events: none;
        }

        .swiper-button-prev:after,
        .swiper-button-next:after {
            font-family: swiper-icons;
            font-size: var(--swiper-navigation-size);
            text-transform: none !important;
            letter-spacing: 0;
            text-transform: none;
            font-variant: initial;
            line-height: 1;
        }

        .swiper-button-prev,
        .swiper-container-rtl .swiper-button-next {
            left: 10px;
            right: auto;
        }

        .swiper-button-prev:after,
        .swiper-container-rtl .swiper-button-next:after {
            content: 'prev';
        }

        .swiper-button-next,
        .swiper-container-rtl .swiper-button-prev {
            right: 10px;
            left: auto;
        }

        .swiper-button-next:after,
        .swiper-container-rtl .swiper-button-prev:after {
            content: 'next';
        }

        .swiper-button-prev.swiper-button-white,
        .swiper-button-next.swiper-button-white {
            --swiper-navigation-color: #ffffff;
        }

        .swiper-button-prev.swiper-button-black,
        .swiper-button-next.swiper-button-black {
            --swiper-navigation-color: #000000;
        }

        .swiper-button-lock {
            display: none;
        }

        :root {
            /*
  --swiper-pagination-color: var(--swiper-theme-color);
  */
        }

        .swiper-pagination {
            position: absolute;
            text-align: center;
            transition: 300ms opacity;
            transform: translate3d(0, 0, 0);
            z-index: 10;
        }

        .swiper-pagination.swiper-pagination-hidden {
            opacity: 0;
        }

        /* Common Styles */
        .swiper-pagination-fraction,
        .swiper-pagination-custom,
        .swiper-container-horizontal>.swiper-pagination-bullets {
            bottom: 10px;
            left: 0;
            width: 100%;
        }

        /* Bullets */
        .swiper-pagination-bullets-dynamic {
            overflow: hidden;
            font-size: 0;
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            transform: scale(0.33);
            position: relative;
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active {
            transform: scale(1);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
            transform: scale(1);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
            transform: scale(0.66);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev {
            transform: scale(0.33);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
            transform: scale(0.66);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next {
            transform: scale(0.33);
        }

        .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            display: inline-block;
            border-radius: 100%;
            background: #000;
            opacity: 0.2;
        }

        button.swiper-pagination-bullet {
            border: none;
            margin: 0;
            padding: 0;
            box-shadow: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .swiper-pagination-clickable .swiper-pagination-bullet {
            cursor: pointer;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            background: var(--swiper-pagination-color, var(--swiper-theme-color));
        }

        .swiper-container-vertical>.swiper-pagination-bullets {
            right: 10px;
            top: 50%;
            transform: translate3d(0px, -50%, 0);
        }

        .swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 6px 0;
            display: block;
        }

        .swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
            top: 50%;
            transform: translateY(-50%);
            width: 8px;
        }

        .swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            display: inline-block;
            transition: 200ms transform, 200ms top;
        }

        .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 4px;
        }

        .swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
        }

        .swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            transition: 200ms transform, 200ms left;
        }

        .swiper-container-horizontal.swiper-container-rtl>.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            transition: 200ms transform, 200ms right;
        }

        /* Progress */
        .swiper-pagination-progressbar {
            background: rgba(0, 0, 0, 0.25);
            position: absolute;
        }

        .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            background: var(--swiper-pagination-color, var(--swiper-theme-color));
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            transform: scale(0);
            transform-origin: left top;
        }

        .swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            transform-origin: right top;
        }

        .swiper-container-horizontal>.swiper-pagination-progressbar,
        .swiper-container-vertical>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
            width: 100%;
            height: 4px;
            left: 0;
            top: 0;
        }

        .swiper-container-vertical>.swiper-pagination-progressbar,
        .swiper-container-horizontal>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
            width: 4px;
            height: 100%;
            left: 0;
            top: 0;
        }

        .swiper-pagination-white {
            --swiper-pagination-color: #ffffff;
        }

        .swiper-pagination-black {
            --swiper-pagination-color: #000000;
        }

        .swiper-pagination-lock {
            display: none;
        }

        /* Scrollbar */
        .swiper-scrollbar {
            border-radius: 10px;
            position: relative;
            -ms-touch-action: none;
            background: rgba(0, 0, 0, 0.1);
        }

        .swiper-container-horizontal>.swiper-scrollbar {
            position: absolute;
            left: 1%;
            bottom: 3px;
            z-index: 50;
            height: 5px;
            width: 98%;
        }

        .swiper-container-vertical>.swiper-scrollbar {
            position: absolute;
            right: 3px;
            top: 1%;
            z-index: 50;
            width: 5px;
            height: 98%;
        }

        .swiper-scrollbar-drag {
            height: 100%;
            width: 100%;
            position: relative;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            left: 0;
            top: 0;
        }

        .swiper-scrollbar-cursor-drag {
            cursor: move;
        }

        .swiper-scrollbar-lock {
            display: none;
        }

        .swiper-zoom-container {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .swiper-zoom-container>img,
        .swiper-zoom-container>svg,
        .swiper-zoom-container>canvas {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .swiper-slide-zoomed {
            cursor: move;
        }

        /* Preloader */
        :root {
            /*
  --swiper-preloader-color: var(--swiper-theme-color);
  */
        }

        .swiper-lazy-preloader {
            width: 42px;
            height: 42px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -21px;
            margin-top: -21px;
            z-index: 10;
            transform-origin: 50%;
            animation: swiper-preloader-spin 1s infinite linear;
            box-sizing: border-box;
            border: 4px solid var(--swiper-preloader-color, var(--swiper-theme-color));
            border-radius: 50%;
            border-top-color: transparent;
        }

        .swiper-lazy-preloader-white {
            --swiper-preloader-color: #fff;
        }

        .swiper-lazy-preloader-black {
            --swiper-preloader-color: #000;
        }

        @keyframes swiper-preloader-spin {
            100% {
                transform: rotate(360deg);
            }
        }

        /* a11y */
        .swiper-container .swiper-notification {
            position: absolute;
            left: 0;
            top: 0;
            pointer-events: none;
            opacity: 0;
            z-index: -1000;
        }

        .swiper-container-fade.swiper-container-free-mode .swiper-slide {
            transition-timing-function: ease-out;
        }

        .swiper-container-fade .swiper-slide {
            pointer-events: none;
            transition-property: opacity;
        }

        .swiper-container-fade .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-fade .swiper-slide-active,
        .swiper-container-fade .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-cube {
            overflow: visible;
        }

        .swiper-container-cube .swiper-slide {
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1;
            visibility: hidden;
            transform-origin: 0 0;
            width: 100%;
            height: 100%;
        }

        .swiper-container-cube .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-cube.swiper-container-rtl .swiper-slide {
            transform-origin: 100% 0;
        }

        .swiper-container-cube .swiper-slide-active,
        .swiper-container-cube .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-cube .swiper-slide-active,
        .swiper-container-cube .swiper-slide-next,
        .swiper-container-cube .swiper-slide-prev,
        .swiper-container-cube .swiper-slide-next+.swiper-slide {
            pointer-events: auto;
            visibility: visible;
        }

        .swiper-container-cube .swiper-slide-shadow-top,
        .swiper-container-cube .swiper-slide-shadow-bottom,
        .swiper-container-cube .swiper-slide-shadow-left,
        .swiper-container-cube .swiper-slide-shadow-right {
            z-index: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .swiper-container-cube .swiper-cube-shadow {
            position: absolute;
            left: 0;
            bottom: 0px;
            width: 100%;
            height: 100%;
            background: #000;
            opacity: 0.6;
            -webkit-filter: blur(50px);
            filter: blur(50px);
            z-index: 0;
        }

        .swiper-container-flip {
            overflow: visible;
        }

        .swiper-container-flip .swiper-slide {
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1;
        }

        .swiper-container-flip .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-flip .swiper-slide-active,
        .swiper-container-flip .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-flip .swiper-slide-shadow-top,
        .swiper-container-flip .swiper-slide-shadow-bottom,
        .swiper-container-flip .swiper-slide-shadow-left,
        .swiper-container-flip .swiper-slide-shadow-right {
            z-index: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }
    </style>
    <style type="text/css"></style>
    <style type="text/css">
        .purchase-base-carousel[data-v-0a0df3bc] {
            position: relative;
            z-index: 1;
            overflow: hidden
        }

        .purchase-base-carousel__slides[data-v-0a0df3bc] {
            overflow: visible
        }

        .purchase-base-carousel__slide[data-v-0a0df3bc] {
            position: relative;
            width: auto;
            height: auto
        }

        @media screen and (max-width: 980px) {
            .purchase-base-carousel__slide .purchase-info[data-v-0a0df3bc] {
                opacity: 1;
                transition: opacity .5s
            }
        }
    </style>
    <style type="text/css">
        .purchase-product-carousel {
            position: relative;
            z-index: 1;
            overflow: hidden
        }

        .purchase-product-carousel__slider {
            position: relative;
            width: auto;
            margin-right: 12px
        }

        @media screen and (max-width: 980px) {
            .purchase-product-carousel__slider .purchase-info {
                opacity: 1;
                transition: opacity .5s
            }
        }

        @media screen and (max-width: 768px) {
            .purchase-product-carousel__slider {
                margin-right: 17px
            }
        }

        @media screen and (max-width: 768px) {
            .purchase-product-carousel__slider--view--fullscreen {
                margin-right: 0
            }
        }

        .purchase-product-carousel__slider--view--fullscreen .purchase-product-carousel__tile--is-last {
            margin: 0 16px
        }

        .purchase-product-carousel__tile--view--fullscreen {
            margin: 0 0 0 16px
        }
    </style>
    <style type="text/css">
        .mando-category-panel {
            margin: 50px 0;
            font-size: 16px;
            font-family: "Akzidenz-Ext", Helvetica, Arial, sans-serif;
            text-align: center
        }

        .mando-category-panel__wrapper {
            width: 200px
        }

        .mando-category-panel__list {
            display: flex;
            flex-direction: row;
            justify-content: center;
            max-width: 960px;
            margin: auto
        }

        .mando-category-panel__link {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #fff
        }

        .mando-category-panel__item {
            display: inline-flex;
            flex-flow: column nowrap;
            align-items: center;
            font-size: 16px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif
        }

        .mando-category-panel__icon {
            width: 40px;
            height: 40px;
            margin-bottom: 20px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        @keyframes mando-fade-in {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes mando-fade-out {
            0% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        .mando-search-products {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            border-left: 1px solid rgba(255, 255, 255, .1)
        }

        @media screen and (max-width: 979px) {
            .mando-search-products {
                display: block;
                padding-top: 6px;
                border-top: 1px solid rgba(255, 255, 255, .1);
                border-left: none
            }
        }

        .mando-search-products__products-wrapper {
            display: grid;
            grid-gap: 22px 45px;
            grid-template-columns: 138px 138px;
            align-content: space-between
        }

        .mando-search-products__product {
            display: flex;
            justify-content: center
        }

        .mando-search-products__product--fade-in {
            animation: mando-fade-in 200ms cubic-bezier(0.39, 0.575, 0.565, 1) forwards
        }

        .mando-search-products__product--fade-out {
            animation: mando-fade-out 200ms cubic-bezier(0.39, 0.575, 0.565, 1) forwards
        }

        .mando-search-products__carousel {
            margin-top: 20px;
            padding-left: 36px
        }

        .mando-search-products__carousel--fade-in {
            animation: mando-fade-in 200ms cubic-bezier(0.39, 0.575, 0.565, 1) forwards
        }

        .mando-search-products__carousel--fade-out {
            animation: mando-fade-out 200ms cubic-bezier(0.39, 0.575, 0.565, 1) forwards
        }

        @media screen and (max-width: 479px) {
            .mando-search-products__carousel {
                padding-left: 0
            }
        }

        .mando-search-products__divider {
            transform: rotate(90deg)
        }

        .mando-search-products__title {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 19px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            margin: 10px 0 5px 16px;
            color: #fff;
            opacity: .5
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        @keyframes mando-fade-in {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes mando-fade-out {
            0% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        .mando-search-categories {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            width: 100%
        }

        .mando-search-categories__title {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 19px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            margin-bottom: 5px;
            color: #fff;
            opacity: .5
        }

        .mando-search-categories__item {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            height: 40px;
            padding-left: 0;
            color: #fff;
            cursor: pointer
        }

        .mando-search-categories__item--fade-in {
            animation: mando-fade-in 200ms cubic-bezier(0.39, 0.575, 0.565, 1) forwards
        }

        .mando-search-categories__item--fade-out {
            animation: mando-fade-out 200ms cubic-bezier(0.39, 0.575, 0.565, 1) forwards
        }

        .mando-search-categories__item:hover {
            color: #ff8f57;
            transition: .3s all ease-in-out
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        @keyframes mando-fade-in {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes mando-fade-out {
            0% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        .mando-search-results {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            width: 100%
        }

        @media screen and (max-width: 479px) {
            .mando-search-results {
                align-self: flex-start
            }
        }

        .mando-search-results__item {
            width: 100%
        }

        .mando-search-results__item--fade-in {
            animation: mando-fade-in 200ms cubic-bezier(0.39, 0.575, 0.565, 1) forwards
        }

        .mando-search-results__item--fade-out {
            animation: mando-fade-out 200ms cubic-bezier(0.39, 0.575, 0.565, 1) forwards
        }

        .mando-search-results__item-inner {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            height: 40px;
            color: rgba(255, 255, 255, .5);
            cursor: pointer;
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased
        }

        .mando-search-results__item-inner:hover {
            color: #ff8f57;
            transition: .3s all ease-in-out
        }

        .mando-search-results__item-inner:hover span {
            color: #ff8f57;
            transition: .3s all ease-in-out
        }

        .mando-search-results__item-text span {
            color: #fff
        }

        .mando-search-results__separator {
            padding-bottom: 12px
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-search-body {
            display: grid;
            grid-column-gap: 20px;
            grid-template-columns: 55% 45%;
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content;
            min-height: 300px;
            padding: 25px 30px 30px
        }

        .mando-search-body [class=v-cloak] {
            display: none
        }

        @media screen and (max-width: 979px) {
            .mando-search-body {
                display: block;
                padding: 0
            }
        }

        .mando-search-body__wrapper {
            display: block
        }

        @media screen and (max-width: 767px) {
            .mando-search-body__wrapper {
                padding: 0 16px
            }
        }

        .mando-search-body__empty {
            margin-bottom: 16px;
            padding: 16px 0;
            border-bottom: 1px solid rgba(255, 255, 255, .1)
        }

        .mando-search-body__empty-text {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 19px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            color: #fff;
            opacity: 1
        }

        .mando-search-body__empty-text:not(:first-of-type) {
            margin-top: 12px
        }

        .mando-search-body__empty-text--faded {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            text-transform: unset;
            opacity: .5
        }

        .mando-search-body__item {
            margin-bottom: 16px;
            padding-bottom: 6px;
            border-bottom: 1px solid rgba(255, 255, 255, .1)
        }

        .mando-search-body__item:last-of-type {
            margin-bottom: 0;
            border-bottom: none
        }

        .mando-search-body__item--border-hidden {
            margin-bottom: 0;
            border-bottom: none
        }
    </style>
    <style type="text/css">
        .mando-search-skeleton {
            display: grid;
            grid-column-gap: 20px;
            grid-template-columns: 55% 45%;
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content;
            min-height: 300px
        }

        .mando-search-skeleton * {
            box-sizing: border-box
        }

        @media screen and (max-width: 979px) {
            .mando-search-skeleton {
                display: flex;
                flex-direction: column;
                margin-top: 10px;
                gap: 27px
            }
        }

        .mando-search-skeleton__lines-wrapper {
            width: 302px;
            display: flex;
            flex-direction: column;
            gap: 45px
        }

        .mando-search-skeleton__lines {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            width: 100%;
            gap: 24px
        }

        @media screen and (max-width: 479px) {
            .mando-search-skeleton__lines {
                align-self: flex-start
            }
        }

        .mando-search-skeleton__tiles-wrapper {
            display: flex;
            align-items: flex-start;
            justify-content: center
        }

        @media screen and (max-width: 979px) {
            .mando-search-skeleton__tiles-wrapper {
                display: block;
                padding-top: 6px
            }
        }

        .mando-search-skeleton__tiles-inner {
            display: grid;
            grid-gap: 22px 45px;
            grid-template-columns: 138px 138px;
            align-content: space-between
        }

        .mando-search-skeleton__tile {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            gap: 16px;
            width: 138px;
            height: 205px
        }

        @media screen and (max-width: 979px) {
            .mando-search-skeleton__tile {
                width: 156px;
                height: 219px
            }
        }

        .mando-search-skeleton__tile-img {
            background-image: linear-gradient(to right, #67615f, #625c5a, #5d5755, #595251, #544d4c, #544d4c, #544d4c, #544d4c, #595251, #5d5755, #625c5a, #67615f);
            background-size: 200%;
            background-position-x: 200%;
            -webkit-animation: mando-skeleton 6s linear infinite;
            animation: mando-skeleton 6s linear infinite;
            border-radius: 12px;
            width: 100%;
            height: 146px;
            background-color: #4e4746
        }

        @media screen and (max-width: 979px) {
            .mando-search-skeleton__tile-img {
                height: 156px
            }
        }

        .mando-search-skeleton__line {
            background-image: linear-gradient(to right, #67615f, #625c5a, #5d5755, #595251, #544d4c, #544d4c, #544d4c, #544d4c, #595251, #5d5755, #625c5a, #67615f);
            background-size: 200%;
            background-position-x: 200%;
            -webkit-animation: mando-skeleton 6s linear infinite;
            animation: mando-skeleton 6s linear infinite;
            border-radius: 12px;
            height: 10px;
            background-color: #4e4746
        }

        @-webkit-keyframes mando-skeleton {
            to {
                background-position-x: -200%
            }
        }

        @keyframes mando-skeleton {
            to {
                background-position-x: -200%
            }
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-check {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            position: relative;
            display: inline-flex;
            align-items: center;
            color: #fff;
            outline: none;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .ui-check::before,
        .ui-check::after {
            box-sizing: content-box
        }

        .ui-check--disabled {
            cursor: default;
            opacity: .5
        }

        .ui-check--view--default::before {
            position: relative;
            display: flex;
            flex-shrink: 0;
            width: 1.25em;
            height: 1.25em;
            border: 1px solid rgba(255, 255, 255, .4);
            border-radius: .1875em;
            cursor: pointer;
            transition: background .15s ease-out;
            content: ""
        }

        .ui-check--view--default::after {
            position: relative;
            display: flex;
            width: 1.25em;
            height: 1.25em;
            margin-right: -1.25em;
            background: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M16.8 5.2a.71.71 0 00-1 0l-8.38 8.16-3.23-3.14a.71.71 0 00-.98 0 .67.67 0 000 .96l3.71 3.62c.28.27.72.27 1 0l8.87-8.64a.67.67 0 000-.96z' fill='%23EF6F2E' fill-rule='nonzero'/%3E%3C/svg%3E") no-repeat center/contain;
            transform: scale(0) translateX(calc(-1.25em - 1px));
            transform-origin: calc(-1.25em / 2) center;
            transition: transform .15s ease-out;
            content: ""
        }

        .ui-check--view--default.ui-is-checked::after {
            transform: scale(1) translateX(calc(-1.25em - 1px));
            transform-origin: calc(-1.25em / 2) center
        }

        .ui-check--view--switch::before {
            position: relative;
            display: flex;
            flex-shrink: 0;
            width: 3.31em;
            height: 2em;
            background: #000;
            border-radius: 1em;
            cursor: pointer;
            transition: background .15s ease-out;
            content: ""
        }

        .ui-check--view--switch::after {
            position: relative;
            display: flex;
            width: 1.5em;
            height: 1.5em;
            margin-right: -1.5em;
            background: rgba(224, 220, 218, .3);
            border-radius: 50%;
            transform: translateX(calc(-3.31em + 0.33em));
            transition: transform .15s ease-out, background .15s ease-out;
            content: ""
        }

        .ui-check--view--switch.ui-is-checked::after {
            background: #f37021;
            transform: translateX(calc(-1.5em - 0.3em))
        }

        .ui-check--view--switch.ui-is-checked .ui-check__icon {
            opacity: 1
        }

        .ui-check--view--switch .ui-check__icon {
            opacity: .5;
            transition: opacity .15s ease-out
        }

        .ui-check__control {
            position: absolute;
            left: 0;
            z-index: -1;
            outline: none;
            opacity: 0
        }

        .ui-check__label {
            order: 1;
            padding-left: .5em
        }

        .ui-check__icon {
            display: inline-flex;
            align-items: center;
            order: -1;
            margin-right: .375em
        }
    </style>
    <style type="text/css">
        .ui-icon-add-to-cart {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-add-to-cart {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M16 10.4h-5.6V16h-.8v-5.6H4v-.8h5.6V4h.8v5.6H16v.8z' fill='%23fff'/%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-add-to-wishlist-dialog {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 32px
        }

        .mando-add-to-wishlist-dialog__header {
            display: inline-flex;
            align-items: center;
            width: 100%
        }

        .mando-add-to-wishlist-dialog__title {
            font-weight: 400;
            font-size: 22px;
            font-family: "akzidenz-extended", sans-serif;
            line-height: 30px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            margin-left: auto;
            color: #fff
        }

        .mando-add-to-wishlist-dialog__close-button {
            margin-left: auto;
            opacity: .7
        }

        .mando-add-to-wishlist-dialog__search-input-wrapper {
            width: 100%;
            margin-top: 17px
        }

        .mando-add-to-wishlist-dialog__content {
            width: 100%;
            margin-top: 33px
        }

        .mando-add-to-wishlist-dialog__collection-wrapper {
            width: inherit;
            max-height: 240px;
            overflow-y: auto
        }

        .mando-add-to-wishlist-dialog__inner {
            display: inline-flex;
            align-items: center;
            width: 100%
        }

        .mando-add-to-wishlist-dialog__item-text {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            margin-left: 12px;
            color: #9d9390
        }

        .mando-add-to-wishlist-dialog__separator {
            width: 100%;
            margin: 21px 0
        }

        .mando-add-to-wishlist-dialog__add-button {
            margin-top: 32px
        }
    </style>
    <style type="text/css">
        .ui-icon-warning-accent {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-warning-accent {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Ccircle fill='%23F37021' cx='10' cy='10' r='10'/%3E%3Cpath d='M10.43 12.58l.4-4.69V4.58H9.31v3.31l.4 4.69h.72zm.53 3.42v-1.78H9.18V16h1.78z' fill='%23FFF' fill-rule='nonzero'/%3E%3C/g%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        .ui-icon-asterisk-accent {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-asterisk-accent {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23F37021' fill-rule='nonzero' d='M11.72 13.3l1.07-.8-1.72-2.37 2.83-.98-.52-1.25-2.78 1.04V6H9.22v2.94L6.47 7.9 6 9.15l2.76.98-1.7 2.37 1.18.8 1.69-2.49z'/%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        .ui-icon-close-alt {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-close-alt {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M17 16.13l-.88.87L10 10.87 3.87 17 3 16.12 9.13 10 3 3.87 3.88 3 10 9.13 16.13 3l.87.88L10.87 10z' fill='%233A3330' fill-rule='evenodd'/%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-create-new-wishlist-dialog * {
            box-sizing: border-box
        }

        .mando-create-new-wishlist-dialog__content {
            display: flex;
            flex-direction: column;
            gap: 32px;
            align-items: center;
            width: 100%;
            padding: 32px
        }

        .mando-create-new-wishlist-dialog__header {
            display: inline-flex;
            align-items: center;
            width: 100%
        }

        .mando-create-new-wishlist-dialog__title {
            font-weight: 400;
            font-size: 22px;
            font-family: "akzidenz-extended", sans-serif;
            line-height: 30px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            margin-left: auto;
            color: #fff
        }

        .mando-create-new-wishlist-dialog__close-button {
            margin-left: auto;
            opacity: .7
        }

        .mando-create-new-wishlist-dialog__inputs {
            display: flex;
            flex-direction: column;
            gap: 16px;
            width: 100%
        }

        .mando-create-new-wishlist-dialog__input-wrapper {
            display: flex;
            flex-direction: column;
            gap: 6px
        }

        .mando-create-new-wishlist-dialog__input-label {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, .5)
        }

        .mando-create-new-wishlist-dialog__footer {
            display: flex;
            align-self: center;
            justify-content: center;
            width: 100%;
            padding: 32px;
            background-color: #2e2826;
            border-radius: 0 0 12px 12px
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-tab-bar {
            position: fixed;
            height: 85px;
            width: 100%;
            background: var(--tab-bar-gradient);
            bottom: 0;
            z-index: 1000
        }

        .mando-tab-bar * {
            box-sizing: border-box
        }

        .mando-tab-bar__inner {
            margin: 0 auto;
            width: calc(100% - 24px);
            max-width: 456px;
            padding-bottom: 7px;
            background-image: var(--tab-bar-container);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            border-radius: 20px;
            -webkit-backdrop-filter: blur(18px);
            backdrop-filter: blur(18px)
        }

        .mando-tab-bar__bar {
            display: flex;
            justify-content: space-between;
            padding: 9px 16px
        }

        @media(max-width: 390px) {
            .mando-tab-bar__bar {
                padding-left: 12px;
                padding-right: 12px
            }
        }

        .mando-tab-bar__icon-wrapper {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 6px;
            width: 60px;
            height: 52px;
            -webkit-tap-highlight-color: transparent
        }

        @media(max-width: 359px) {
            .mando-tab-bar__icon-wrapper {
                width: 50px;
                height: 52px;
                gap: 4px
            }
        }

        .mando-tab-bar__icon {
            position: relative;
            -webkit-mask-size: 36px;
            mask-size: 36px;
            width: 36px;
            height: 36px;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat;
            -webkit-mask-position: center;
            mask-position: center;
            background-color: var(--header-icon-color);
            background-size: contain;
            display: inline-block;
            flex-shrink: 0
        }

        .mando-tab-bar__icon--active {
            background-color: #f37021
        }

        .mando-tab-bar__icon--main-page {
            margin-top: 2px;
            display: inline-block;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 2px solid var(--tab-bar-main-button-wrapper-color)
        }

        .mando-tab-bar__icon--main-page::before {
            position: absolute;
            content: "";
            background-color: var(--header-icon-color);
            -webkit-mask-size: 20px;
            mask-size: 20px;
            width: 48px;
            height: 48px;
            -webkit-mask-image: url("data:image/svg+xml,%3Csvg width='69' height='57' viewBox='0 0 69 57' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.29136 22.5136H7.8596C8.31191 22.5136 8.60689 22.2177 8.60689 21.7639V16.1604C8.60689 13.3191 11.3011 10.4779 13.9755 10.4779H54.093C56.7675 10.4779 59.4616 13.3191 59.4616 16.1604V21.7639C59.4616 22.2177 59.7566 22.5136 60.2089 22.5136H66.7771C67.2294 22.5136 67.5244 22.2177 67.5244 21.7639V15.2528C67.5244 7.99188 61.7035 2.36865 54.3289 2.36865H13.7592C6.36503 2.36865 0.563741 8.05107 0.563741 15.3119V21.7441C0.563741 22.1979 0.858716 22.4939 1.31102 22.4939' fill='%232E2826'/%3E%3Cpath d='M0.544075 35.2201V41.9483C0.544075 49.1302 6.44369 54.8916 13.7396 54.8916H54.3093C61.7035 54.8916 67.5048 49.1302 67.5048 41.9483V35.2201C67.5048 34.7663 67.2098 34.4704 66.7575 34.4704H60.1892C59.7369 34.4704 59.442 34.7663 59.442 35.2201V41.1393C59.442 43.9805 56.7478 46.8218 54.0733 46.8218H13.9559C11.2617 46.8218 8.58722 43.9805 8.58722 41.1393V35.2201C8.58722 34.7663 8.29224 34.4704 7.83994 34.4704H1.2717C0.819395 34.4704 0.524414 34.7663 0.524414 35.2201' fill='%232E2826'/%3E%3C/svg%3E%0A");
            mask-image: url("data:image/svg+xml,%3Csvg width='69' height='57' viewBox='0 0 69 57' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.29136 22.5136H7.8596C8.31191 22.5136 8.60689 22.2177 8.60689 21.7639V16.1604C8.60689 13.3191 11.3011 10.4779 13.9755 10.4779H54.093C56.7675 10.4779 59.4616 13.3191 59.4616 16.1604V21.7639C59.4616 22.2177 59.7566 22.5136 60.2089 22.5136H66.7771C67.2294 22.5136 67.5244 22.2177 67.5244 21.7639V15.2528C67.5244 7.99188 61.7035 2.36865 54.3289 2.36865H13.7592C6.36503 2.36865 0.563741 8.05107 0.563741 15.3119V21.7441C0.563741 22.1979 0.858716 22.4939 1.31102 22.4939' fill='%232E2826'/%3E%3Cpath d='M0.544075 35.2201V41.9483C0.544075 49.1302 6.44369 54.8916 13.7396 54.8916H54.3093C61.7035 54.8916 67.5048 49.1302 67.5048 41.9483V35.2201C67.5048 34.7663 67.2098 34.4704 66.7575 34.4704H60.1892C59.7369 34.4704 59.442 34.7663 59.442 35.2201V41.1393C59.442 43.9805 56.7478 46.8218 54.0733 46.8218H13.9559C11.2617 46.8218 8.58722 43.9805 8.58722 41.1393V35.2201C8.58722 34.7663 8.29224 34.4704 7.83994 34.4704H1.2717C0.819395 34.4704 0.524414 34.7663 0.524414 35.2201' fill='%232E2826'/%3E%3C/svg%3E%0A");
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat;
            -webkit-mask-position: center;
            mask-position: center;
            left: -50%;
            right: -50%;
            top: -50%;
            bottom: -50%;
            margin: auto
        }

        .mando-tab-bar__icon--main-page.mando-tab-bar__icon--active {
            border: 2px solid #f37021;
            background-color: unset
        }

        .mando-tab-bar__title {
            font-weight: 400;
            font-size: 11px;
            font-family: "helvetica", sans-serif;
            line-height: 14px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased;
            color: var(--tab-bar-button-title-color);
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        @media(max-width: 360px) {
            .mando-tab-bar__title {
                font-weight: 550;
                font-size: 8px;
                font-family: "helvetica", sans-serif;
                line-height: 10px;
                letter-spacing: 1px;
                text-transform: uppercase;
                -webkit-font-smoothing: antialiased
            }
        }

        .mando-tab-bar__title--active {
            color: var(--tab-bar-button-title-active-color)
        }

        .mando-tab-bar__count-wrapper {
            position: absolute;
            width: 15px;
            height: 15px;
            top: 5px;
            right: 13px;
            background-color: #f37021;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1
        }

        .mando-tab-bar__count {
            font-weight: 400;
            font-size: 11px;
            font-family: "helvetica", sans-serif;
            line-height: 14px;
            letter-spacing: 1px;
            -webkit-font-smoothing: antialiased;
            margin-top: 2px;
            margin-left: 1px;
            color: #fff
        }

        .mando-tab-bar__count--double {
            font-weight: 550;
            font-size: 8px;
            font-family: "helvetica", sans-serif;
            line-height: 10px;
            letter-spacing: 1px;
            text-transform: uppercase;
            -webkit-font-smoothing: antialiased
        }
    </style>
    <style type="text/css">
        @-webkit-keyframes slide {
            0% {
                transform: translateY(85px)
            }

            100% {
                transform: translateY(0)
            }
        }

        @keyframes slide {
            0% {
                transform: translateY(85px)
            }

            100% {
                transform: translateY(0)
            }
        }

        .slide-enter-active {
            -webkit-animation: slide .3s both cubic-bezier(0.64, 0.04, 0.35, 0.7);
            animation: slide .3s both cubic-bezier(0.64, 0.04, 0.35, 0.7)
        }

        .slide-leave-active {
            animation: slide .3s reverse cubic-bezier(0.64, 0.04, 0.35, 0.7)
        }
    </style>
    <style type="text/css">
        .ui-icon-close-light-theme {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-close-light-theme {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M15.28 16.03L10 10.75l-5.28 5.28-.75-.75L9.25 10 3.97 4.72l.75-.75L10 9.25l5.28-5.28.75.75L10.75 10l5.28 5.28z' fill='%23382F2C' fill-rule='evenodd'/%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-product-call-popup[data-v-6f4d04db] {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .mando-product-call-popup__wrapper[data-v-6f4d04db] {
            width: 100%
        }

        .mando-product-call-popup__container[data-v-6f4d04db] {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
            min-height: 315px;
            padding: 16px 25px 26px;
            background: #2e2826;
            border-radius: 8px;
            opacity: 1
        }

        .mando-product-call-popup__state[data-v-6f4d04db] {
            display: flex;
            flex-grow: 1;
            flex-direction: column;
            width: 100%
        }

        .mando-product-call-popup__title[data-v-6f4d04db] {
            padding-bottom: 20px;
            color: #fff;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 16px;
            text-align: center
        }

        .mando-product-call-popup__close[data-v-6f4d04db] {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 3;
            width: 30px;
            height: 30px
        }

        .mando-product-call-popup__close[data-v-6f4d04db]::before {
            display: block;
            width: 13px;
            height: 13px;
            margin: 0 auto;
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGlkPSJMYXllcl8xMjMzMjEiIHZpZXdCb3g9IjAgMCAxNyAxNyI+PHN0eWxlPi5zdDB7ZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojOWQ5MzkwfTwvc3R5bGU+PHBhdGggY2xhc3M9InN0MCIgZD0iTS41IDEuNGwuOS0uOSAxNS4xIDE1LjEtLjkuOUwuNSAxLjR6Ii8+PHBhdGggY2xhc3M9InN0MCIgZD0iTS41IDE1LjZsLjkuOUwxNi41IDEuNGwtLjktLjlMLjUgMTUuNnoiLz48L3N2Zz4=");
            content: ""
        }

        .mando-product-call-popup__manager-wrapper[data-v-6f4d04db] {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-bottom: 24px;
            color: #fff
        }

        .mando-product-call-popup__manager-photo-wrapper[data-v-6f4d04db] {
            width: 152px;
            height: 152px;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            background-color: #fff;
            border-radius: 50%;
            margin-bottom: 12px;
            overflow: hidden
        }

        .mando-product-call-popup__manager-photo[data-v-6f4d04db] {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        .mando-product-call-popup__manager-name[data-v-6f4d04db] {
            font-weight: 400;
            font-size: 18px;
            font-family: "akzidenz-extended", sans-serif;
            line-height: 26px;
            letter-spacing: .4px;
            -webkit-font-smoothing: antialiased
        }

        .mando-product-call-popup__description[data-v-6f4d04db] {
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            max-width: 248px;
            font-size: 18px;
            line-height: 24px;
            margin: 4px auto 0;
            text-align: center
        }

        .mando-product-call-popup__options[data-v-6f4d04db] {
            display: inline-flex;
            align-items: center;
            justify-content: center
        }

        .mando-product-call-popup__option[data-v-6f4d04db] {
            display: flex;
            align-items: center
        }

        .mando-product-call-popup__option[data-v-6f4d04db]:not(:last-child) {
            margin-right: 18px
        }

        .mando-product-call-popup__option-icon[data-v-6f4d04db] {
            display: flex;
            align-items: center;
            height: 40px;
            width: 40px;
            background: center no-repeat
        }

        .mando-product-call-popup__option-icon--phone[data-v-6f4d04db] {
            background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='19.9999' cy='20' r='20' fill='white'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M13.4644 10.5C13.1333 10.5 12.8157 10.6309 12.5811 10.8641L11.0366 12.406C10.5822 12.856 10.4349 13.5136 10.5251 14.3287C10.6304 15.2804 11.0557 16.4333 11.7809 17.765C12.9855 19.9726 14.7578 22.1938 15.9841 23.4181L16.5986 24.0317C17.8249 25.256 20.0497 27.0167 22.2654 28.2194C23.812 29.0575 25.1169 29.4959 26.1116 29.5C26.7241 29.5 27.2398 29.3454 27.591 28.9539L29.1365 27.4109C29.3759 27.1641 29.5001 26.8411 29.5001 26.5211C29.5001 26.2094 29.3815 25.901 29.1423 25.6699L26.358 22.8945C26.1183 22.6458 25.8014 22.5276 25.4851 22.5276C25.167 22.5276 24.8472 22.647 24.6104 22.8896L23.684 23.8146C23.5427 23.9489 23.1936 24.0986 22.5183 23.8998C22.176 23.799 21.7402 23.6203 21.2613 23.3613C20.5434 22.973 19.7248 22.4027 18.9808 21.652L18.368 21.0403C17.6181 20.2915 16.9056 19.2929 16.4612 18.3593C16.2624 17.9469 16.1499 17.6149 16.0894 17.3613C15.9158 16.6336 16.1449 16.383 16.2046 16.3214L17.1313 13.6432L14.3469 10.8633C14.113 10.6308 13.7954 10.5 13.4644 10.5Z' fill='%23F37021' stroke='%23F37021' stroke-width='1.29167'/%3E%3C/svg%3E%0A")
        }

        .mando-product-call-popup__option-icon--whatsapp[data-v-6f4d04db] {
            background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 40c11.046 0 20-8.954 20-20S31.046 0 20 0 0 8.954 0 20s8.954 20 20 20z' fill='url(%23paint0_linear)'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M28.627 11.427c-2.29-2.32-5.333-3.6-8.576-3.601-6.682 0-12.12 5.509-12.123 12.28-.001 2.164.557 4.277 1.618 6.139l-1.72 6.363 6.427-1.707a11.993 11.993 0 005.793 1.495h.005c6.681 0 12.12-5.51 12.123-12.28a12.287 12.287 0 00-3.547-8.689zM20 30.435h-.004a9.826 9.826 0 01-5.09-1.424l-.365-.221-3.784 1.014 1.01-3.77-.238-.386A10.351 10.351 0 0110 20.213C10.002 14.58 14.488 10 20.004 10c2.671.001 5.182 1.065 7.07 2.995C28.962 14.925 30 17.492 30 20.221c-.002 5.632-4.488 10.214-10 10.214zm3.423-8.742c.274.104 1.747.856 2.046 1.012l.164.083c.209.105.35.176.41.28.075.13.075.753-.174 1.48-.25.727-1.447 1.39-2.022 1.48-.516.08-1.17.113-1.887-.124a16.82 16.82 0 01-1.707-.655c-2.808-1.26-4.705-4.086-5.064-4.62a3.94 3.94 0 00-.053-.078l-.002-.003c-.159-.22-1.22-1.692-1.22-3.215 0-1.434.677-2.185.989-2.53l.058-.066c.275-.311.6-.39.8-.39.199 0 .399.003.573.012h.067c.175 0 .392-.002.607.534.083.206.204.512.331.834.258.652.543 1.372.593 1.476.075.155.124.337.025.545-.015.03-.03.06-.042.088-.075.16-.13.276-.258.43l-.153.192c-.103.13-.207.261-.296.354-.15.155-.306.323-.132.635.175.311.776 1.33 1.667 2.155.957.887 1.789 1.262 2.21 1.452.083.037.15.067.198.092.3.156.475.13.65-.078.174-.207.748-.908.948-1.22.2-.31.4-.259.674-.155z' fill='%23fff'/%3E%3Cdefs%3E%3ClinearGradient id='paint0_linear' x1='0' y1='0' x2='0' y2='40' gradientUnits='userSpaceOnUse'%3E%3Cstop stop-color='%2361FD7D'/%3E%3Cstop offset='1' stop-color='%232BB826'/%3E%3C/linearGradient%3E%3C/defs%3E%3C/svg%3E")
        }

        .mando-product-call-popup__video[data-v-6f4d04db] {
            margin-top: 18px;
            padding-top: 18px;
            border-top: 1px dashed rgba(151, 151, 151, .4)
        }

        .mando-product-call-popup__video-title[data-v-6f4d04db] {
            padding-bottom: 16px;
            color: #fff;
            font-family: var(--akzidenz-Md);
            font-size: 18px;
            border-bottom: 1px dotted rgba(151, 151, 151, .4)
        }

        .mando-product-call-popup__video-link[data-v-6f4d04db] {
            display: flex;
            justify-content: center;
            align-items: center
        }

        .mando-product-call-popup__video-icon[data-v-6f4d04db] {
            width: 40px;
            height: 40px;
            margin-right: 12px;
            border-radius: 50%;
            -o-object-fit: cover;
            object-fit: cover
        }

        .mando-product-call-popup__video-info[data-v-6f4d04db] {
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            font-size: 16px;
            color: #fff;
            text-decoration: none
        }

        .mando-product-call-popup__video-wrapper>.mando-option[data-v-6f4d04db] {
            margin-bottom: 0
        }

        .mando-product-call-popup__video-wrapper>.mando-option-text[data-v-6f4d04db] {
            font-size: 18px;
            line-height: 21px
        }

        .mando-product-call-popup__form-video[data-v-6f4d04db] {
            padding-top: 20px
        }

        .mando-product-call-popup__input[data-v-6f4d04db] {
            margin-bottom: 15px
        }

        .mando-product-call-popup__success[data-v-6f4d04db] {
            display: flex;
            flex-grow: 1;
            flex-direction: column;
            justify-content: center;
            align-items: center
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-widget-whats-app[data-v-322bed06] {
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content
        }

        .mando-widget-whats-app__button[data-v-322bed06] {
            display: none
        }

        @media(max-width: 767px) {
            .mando-widget-whats-app__button[data-v-322bed06] {
                position: fixed;
                top: 32%;
                right: 0;
                z-index: 200;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 70px;
                height: 71px;
                border: 1px solid rgba(151, 151, 151, .2);
                border-right: none;
                border-top-left-radius: 35px;
                border-bottom-left-radius: 35px
            }
        }

        .mando-widget-whats-app__button-image-wrapper[data-v-322bed06] {
            overflow: hidden;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #fff
        }

        .mando-widget-whats-app__button-image[data-v-322bed06] {
            width: 100%;
            height: 100%;
            background-size: contain;
            -o-object-fit: cover;
            object-fit: cover
        }

        .mando-widget-whats-app__button-icon[data-v-322bed06] {
            position: absolute;
            right: 10px;
            bottom: 10px;
            z-index: 1;
            width: 15px;
            height: 15px;
            background-image: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNiAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjYxOTM5IDBDOS42NDA3MSAwLjAwMDgxMzE2NCAxMS41Mzc5IDAuNzk3OTY0IDEyLjk2NDQgMi4yNDQ3MUMxNC4zOTEgMy42OTE0NSAxNS4xNzYyIDUuNjE0NTIgMTUuMTc1NCA3LjY1OTY3QzE1LjE3MzggMTEuODc5OSAxMS43ODM4IDE1LjMxMzcgNy42MTk0OSAxNS4zMTM3SDcuNjE2MzhDNi4zNTE3NCAxNS4zMTMyIDUuMTA5MiAxNC45OTE4IDQuMDA1NTUgMTQuMzgyMUwwIDE1LjQ0NjRMMS4wNzE5NiAxMS40ODAxQzAuNDEwNzUxIDEwLjMxOTQgMC4wNjI4MjA1IDkuMDAyNTggMC4wNjMzNTU1IDcuNjUzNThDMC4wNjUwMjIyIDMuNDMzMzkgMy40NTQ2MyAwIDcuNjE5MzkgMFpNNy41ODUzIDE0LjA5MTZINy41ODc4NkMxMS4wMjMyIDE0LjA5MTYgMTMuODE5MiAxMS4yMzU5IDEzLjgyMDUgNy43MjU3QzEzLjgyMTEgNi4wMjQ3MyAxMy4xNzM0IDQuNDI1MjggMTEuOTk2NyAzLjIyMjA1QzEwLjgxOTkgMi4wMTg4MSA5LjI1NSAxLjM1NTc1IDcuNTkwMjcgMS4zNTUxMUM0LjE1MjMyIDEuMzU1MTEgMS4zNTYzMSA0LjIxMDY4IDEuMzU0OTcgNy43MjA1OUMxLjM1NDQ4IDguOTIzMzkgMS42ODM5OSAxMC4wOTQ5IDIuMzA3ODkgMTEuMTA4NEwyLjQ1NjEyIDExLjM0OTNMMS44MjY0NiAxMy42OTg0TDQuMTg1NDMgMTMuMDY2NEw0LjQxMzA0IDEzLjIwNDNDNS4zNjk5OCAxMy43ODQzIDYuNDY2OTEgMTQuMDkxMiA3LjU4NTMgMTQuMDkxNloiIGZpbGw9IiNFRjZGMkUiLz4KPHBhdGggZD0iTTcuNTg3ODQgMTQuMDkxOEg3LjU4NTI5QzYuNDY2OSAxNC4wOTEzIDUuMzY5OTcgMTMuNzg0NSA0LjQxMzAyIDEzLjIwNDRMNC4xODU0MSAxMy4wNjY1TDEuODI2NDUgMTMuNjk4NUwyLjQ1NjExIDExLjM0OTRMMi4zMDc4NyAxMS4xMDg2QzEuNjgzOTcgMTAuMDk1IDEuMzU0NDYgOC45MjM1MSAxLjM1NDk1IDcuNzIwN0MxLjM1NjMgNC4yMTA4IDQuMTUyMzEgMS4zNTUyMiA3LjU5MDI1IDEuMzU1MjJDOS4yNTQ5OCAxLjM1NTg3IDEwLjgxOTkgMi4wMTg5MiAxMS45OTY3IDMuMjIyMTZDMTMuMTczNCA0LjQyNTQgMTMuODIxMSA2LjAyNDg1IDEzLjgyMDUgNy43MjU4MkMxMy44MTkxIDExLjIzNiAxMS4wMjMxIDE0LjA5MTggNy41ODc4NCAxNC4wOTE4WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTEwLjk5NjYgOS4yNzM2M0MxMC44MDk5IDkuMTc2NTcgOS44OTIwNyA4LjcwNzQ0IDkuNzIwOTQgOC42NDI3M0M5LjU0OTgyIDguNTc4IDkuNDI1MzggOC41NDU2NSA5LjMwMDg4IDguNzM5ODFDOS4xNzY0NyA4LjkzMzkyIDguODE4NyA5LjM3MDcgOC43MDk3NiA5LjUwMDFDOC42MDA4NyA5LjYyOTUzIDguNDkxOTcgOS42NDU3MiA4LjMwNTMgOS41NDg2NEM4LjExODYgOS40NTE1OSA3LjUxNzA4IDkuMjQ2ODIgNi44MDQwMiA4LjU4NjJDNi4yNDkwNyA4LjA3MjA5IDUuODc0MzcgNy40MzcwMyA1Ljc2NTQ4IDcuMjQyODdDNS42NTY1OCA3LjA0ODc0IDUuNzUzOSA2Ljk0MzgyIDUuODQ3MzUgNi44NDcxMkM1LjkzMTMyIDYuNzYwMjYgNi4wMzQwMyA2LjYyMDY0IDYuMTI3MzggNi41MDc0MkM2LjIyMDcxIDYuMzk0MjEgNi4yNTE4NCA2LjMxMzI4IDYuMzE0MDYgNi4xODM4OEM2LjM3NjMgNi4wNTQ0NiA2LjM0NTE3IDUuOTQxMjEgNi4yOTg0OSA1Ljg0NDE1QzYuMjUxODQgNS43NDcxIDUuODc4NDYgNC43OTI2NSA1LjcyMjg5IDQuNDA0NEM1LjU3MTM3IDQuMDI2MjkgNS40MTc0MyA0LjA3NzQ0IDUuMzAyODQgNC4wNzE1QzUuMTk0MDcgNC4wNjU4OCA1LjA2OTQ5IDQuMDY0NyA0Ljk0NTA1IDQuMDY0N0M0LjgyMDYxIDQuMDY0NyA0LjYxODM1IDQuMTEzMjEgNC40NDcyNCA0LjMwNzM1QzQuMjc2MTIgNC41MDE0OCAzLjc5Mzg1IDQuOTcwNjEgMy43OTM4NSA1LjkyNTA0QzMuNzkzODUgNi44Nzk0NyA0LjQ2Mjc4IDcuODAxNTUgNC41NTYxMyA3LjkzMDk1QzQuNjQ5NDggOC4wNjAzNyA1Ljg3MjUyIDEwLjAxOSA3Ljc0NTI0IDEwLjg1ODlDOC4xOTA2NiAxMS4wNTg3IDguNTM4MzggMTEuMTc4IDguODA5NTIgMTEuMjY3NEM5LjI1NjczIDExLjQxNSA5LjY2MzcgMTEuMzk0MiA5Ljk4NTQgMTEuMzQ0M0MxMC4zNDQxIDExLjI4ODYgMTEuMDg5OSAxMC44NzUyIDExLjI0NTUgMTAuNDIyMkMxMS40MDExIDkuOTY5MjMgMTEuNDAxMSA5LjU4MTAxIDExLjM1NDQgOS41MDAxMkMxMS4zMDc3IDkuNDE5MjQgMTEuMTgzMyA5LjM3MDcgMTAuOTk2NiA5LjI3MzYzWiIgZmlsbD0iI0VGNkYyRSIvPgo8L3N2Zz4K")
        }
    </style>
    <style type="text/css">
        .ui-icon-app-store {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-app-store {
            width: 140px;
            height: 40px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='140' height='40' viewBox='0 0 140 40' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Cg clip-path='url(%23clip0_249_22492)'%3E %3Cpath d='M134.815 0.8C135.97 0.8 137.078 1.2425 137.895 2.03015C138.711 2.8178 139.17 3.88609 139.17 5V35C139.17 36.1139 138.711 37.1822 137.895 37.9698C137.078 38.7575 135.97 39.2 134.815 39.2H5.18519C4.03002 39.2 2.92217 38.7575 2.10534 37.9698C1.28852 37.1822 0.82963 36.1139 0.82963 35V5C0.82963 3.88609 1.28852 2.8178 2.10534 2.03015C2.92217 1.2425 4.03002 0.8 5.18519 0.8H134.815ZM134.815 0H5.18519C3.80999 0 2.49112 0.526784 1.51871 1.46447C0.546295 2.40215 0 3.67392 0 5V35C0 36.3261 0.546295 37.5979 1.51871 38.5355C2.49112 39.4732 3.80999 40 5.18519 40H134.815C136.19 40 137.509 39.4732 138.481 38.5355C139.454 37.5979 140 36.3261 140 35V5C140 3.67392 139.454 2.40215 138.481 1.46447C137.509 0.526784 136.19 0 134.815 0Z' fill='%239D9390'/%3E %3Cpath d='M51.9179 14.8103H50.8221V13.2225H46.4435V14.8103H45.3295L45.293 12.3265H45.8272C46.092 12.0781 46.3035 11.7174 46.4618 11.2443C46.6201 10.7683 46.7221 10.2301 46.7677 9.62986L46.9412 6.76465H51.1326V12.3265H51.9772L51.9179 14.8103ZM47.133 12.3265H49.982V7.66945H48.0416L47.932 9.48793C47.8498 10.7032 47.5835 11.6494 47.133 12.3265Z' fill='white'/%3E %3Cpath d='M52.9972 10.7786C52.9972 10.3085 53.0931 9.88563 53.2849 9.5101C53.4766 9.13163 53.746 8.84185 54.093 8.64078C54.44 8.43676 54.8388 8.33475 55.2892 8.33475C55.9558 8.33475 56.4961 8.54321 56.9101 8.96013C57.3271 9.37705 57.5523 9.92998 57.5858 10.6189L57.5904 10.8717C57.5904 11.3448 57.496 11.7677 57.3073 12.1402C57.1216 12.5128 56.8538 12.8011 56.5037 13.0051C56.1567 13.2092 55.755 13.3112 55.2984 13.3112C54.6013 13.3112 54.0428 13.0864 53.6227 12.637C53.2057 12.1846 52.9972 11.5829 52.9972 10.8318V10.7786ZM54.1067 10.8717C54.1067 11.3655 54.2117 11.7529 54.4217 12.0338C54.6318 12.3117 54.924 12.4507 55.2984 12.4507C55.6728 12.4507 55.9635 12.3088 56.1704 12.0249C56.3805 11.7411 56.4855 11.3256 56.4855 10.7786C56.4855 10.2937 56.3774 9.90928 56.1613 9.62542C55.9482 9.34156 55.6575 9.19963 55.2892 9.19963C54.927 9.19963 54.6394 9.34008 54.4263 9.62099C54.2132 9.89893 54.1067 10.3159 54.1067 10.8717Z' fill='white'/%3E %3Cpath d='M61.0257 12.4507C61.3027 12.4507 61.5325 12.3724 61.7151 12.2156C61.8977 12.0589 61.9951 11.8653 62.0073 11.6346H63.0529C63.0407 11.9333 62.9448 12.2127 62.7652 12.4729C62.5856 12.7301 62.3421 12.9342 62.0347 13.085C61.7273 13.2358 61.3955 13.3112 61.0394 13.3112C60.3484 13.3112 59.8005 13.0938 59.3957 12.6592C58.9909 12.2245 58.7884 11.6243 58.7884 10.8584V10.7476C58.7884 10.0172 58.9893 9.43323 59.3911 8.99561C59.7929 8.55503 60.3408 8.33475 61.0348 8.33475C61.6223 8.33475 62.1001 8.50181 62.4684 8.83594C62.8398 9.16711 63.0346 9.60325 63.0529 10.1444H62.0073C61.9951 9.86936 61.8977 9.64316 61.7151 9.46575C61.5355 9.28834 61.3057 9.19963 61.0257 9.19963C60.6665 9.19963 60.3895 9.32678 60.1947 9.58107C59.9999 9.8324 59.901 10.2153 59.8979 10.7298V10.9028C59.8979 11.4232 59.9938 11.812 60.1856 12.0693C60.3804 12.3236 60.6604 12.4507 61.0257 12.4507Z' fill='white'/%3E %3Cpath d='M68.246 9.27947H66.6434V13.2225H65.5339V9.27947H63.9496V8.42345H68.246V9.27947Z' fill='white'/%3E %3Cpath d='M71.2384 11.679L72.2428 8.42345H73.4254L71.4621 13.9498C71.1607 14.7571 70.6494 15.1607 69.928 15.1607C69.7667 15.1607 69.5886 15.1341 69.3938 15.0809V14.247L69.6038 14.2603C69.8839 14.2603 70.0939 14.2101 70.2339 14.1095C70.377 14.0119 70.4896 13.8464 70.5718 13.6128L70.7316 13.2003L68.9966 8.42345H70.1928L71.2384 11.679Z' fill='white'/%3E %3Cpath d='M78.7235 13.2225H77.614V9.29277H75.6872V13.2225H74.5778V8.42345H78.7235V13.2225Z' fill='white'/%3E %3Cpath d='M84.5558 13.2225H83.4463V11.2842H81.5241V13.2225H80.4146V8.42345H81.5241V10.4238H83.4463V8.42345H84.5558V13.2225Z' fill='white'/%3E %3Cpath d='M86.0004 10.7786C86.0004 10.3085 86.0963 9.88563 86.288 9.5101C86.4798 9.13163 86.7492 8.84185 87.0962 8.64078C87.4432 8.43676 87.8419 8.33475 88.2924 8.33475C88.959 8.33475 89.4993 8.54321 89.9132 8.96013C90.3302 9.37705 90.5555 9.92998 90.589 10.6189L90.5935 10.8717C90.5935 11.3448 90.4992 11.7677 90.3105 12.1402C90.1248 12.5128 89.8569 12.8011 89.5069 13.0051C89.1599 13.2092 88.7581 13.3112 88.3015 13.3112C87.6045 13.3112 87.0459 13.0864 86.6259 12.637C86.2089 12.1846 86.0004 11.5829 86.0004 10.8318V10.7786ZM87.1099 10.8717C87.1099 11.3655 87.2149 11.7529 87.4249 12.0338C87.6349 12.3117 87.9271 12.4507 88.3015 12.4507C88.6759 12.4507 88.9666 12.3088 89.1736 12.0249C89.3836 11.7411 89.4886 11.3256 89.4886 10.7786C89.4886 10.2937 89.3806 9.90928 89.1645 9.62542C88.9514 9.34156 88.6607 9.19963 88.2924 9.19963C87.9302 9.19963 87.6425 9.34008 87.4295 9.62099C87.2164 9.89893 87.1099 10.3159 87.1099 10.8717Z' fill='white'/%3E %3Cpath d='M94.8799 13.2225V8.42345H96.8842C97.56 8.42345 98.0744 8.53877 98.4275 8.76941C98.7805 8.99709 98.9571 9.3253 98.9571 9.75405C98.9571 9.97581 98.8856 10.1754 98.7425 10.3528C98.6025 10.5273 98.394 10.6618 98.117 10.7564C98.4396 10.8215 98.6953 10.9531 98.884 11.1512C99.0728 11.3493 99.1671 11.5829 99.1671 11.8519C99.1671 12.2984 98.9967 12.6385 98.6558 12.8721C98.3179 13.1057 97.8309 13.2225 97.1947 13.2225H94.8799ZM95.9893 11.1778V12.3709H97.2038C97.773 12.3709 98.0576 12.1728 98.0576 11.7765C98.0576 11.3774 97.7685 11.1778 97.1901 11.1778H95.9893ZM95.9893 10.406H96.9025C97.5326 10.406 97.8476 10.2257 97.8476 9.86493C97.8476 9.48645 97.5493 9.2913 96.9527 9.27947H95.9893V10.406Z' fill='white'/%3E %3Cpath d='M33.3016 19.3133C33.2729 16.2424 35.9092 14.7484 36.0297 14.6788C34.5367 12.5798 32.2226 12.293 31.4094 12.2701C29.4658 12.0729 27.5805 13.3916 26.5904 13.3916C25.5806 13.3916 24.056 12.2892 22.4128 12.3216C20.2983 12.353 18.3201 13.5335 17.2352 15.3667C14.9961 19.1046 16.666 24.5975 18.8112 27.6189C19.8842 29.0986 21.1381 30.7507 22.7794 30.6926C24.385 30.6288 24.9848 29.7055 26.9224 29.7055C28.8423 29.7055 29.4055 30.6926 31.0794 30.6555C32.8026 30.6288 33.8875 29.1691 34.9231 27.676C36.1631 25.98 36.6611 24.3098 36.6809 24.224C36.6404 24.2107 33.3342 22.9939 33.3016 19.3133Z' fill='white'/%3E %3Cpath d='M30.1394 10.2827C31.003 9.24133 31.5939 7.8245 31.4298 6.38672C30.1799 6.44008 28.6167 7.22042 27.7166 8.23897C26.9202 9.13652 26.2087 10.6076 26.3925 11.9911C27.7966 12.0921 29.2382 11.308 30.1394 10.2827Z' fill='white'/%3E %3Cpath d='M56.3942 30.4798H54.1503L52.9211 26.7552H48.6485L47.4776 30.4798H45.293L49.526 17.7998H52.1405L56.3942 30.4798ZM52.5505 25.1926L51.4389 21.8816C51.3213 21.5434 51.101 20.7468 50.7759 19.4929H50.7364C50.6069 20.0322 50.3985 20.8288 50.1119 21.8816L49.0201 25.1926H52.5505Z' fill='white'/%3E %3Cpath d='M67.2794 25.7962C67.2794 27.3512 66.8437 28.5804 65.9722 29.4827C65.1916 30.2859 64.2223 30.687 63.0652 30.687C61.8162 30.687 60.9191 30.2544 60.3726 29.3893H60.3331V34.2057H58.2265V24.347C58.2265 23.3695 58.1998 22.3661 58.1484 21.3371H60.0011L60.1187 22.7863H60.1582C60.8608 21.6944 61.9269 21.1494 63.3577 21.1494C64.4762 21.1494 65.4099 21.5753 66.1569 22.4281C66.9059 23.2818 67.2794 24.4042 67.2794 25.7962ZM65.1333 25.8706C65.1333 24.9806 64.9258 24.247 64.5088 23.6696C64.0533 23.0674 63.4417 22.7663 62.6749 22.7663C62.1552 22.7663 61.6829 22.934 61.2609 23.2646C60.838 23.5981 60.5614 24.0336 60.4319 24.5728C60.3667 24.8244 60.3341 25.0302 60.3341 25.1922V26.7167C60.3341 27.3817 60.5456 27.9429 60.9685 28.4012C61.3914 28.8595 61.9407 29.0882 62.6166 29.0882C63.41 29.0882 64.0276 28.7928 64.4693 28.204C64.9119 27.6142 65.1333 26.8367 65.1333 25.8706Z' fill='white'/%3E %3Cpath d='M78.1847 25.7962C78.1847 27.3512 77.7489 28.5804 76.8765 29.4827C76.0968 30.2859 75.1275 30.687 73.9705 30.687C72.7215 30.687 71.8243 30.2544 71.2789 29.3893H71.2394V34.2057H69.1327V24.347C69.1327 23.3695 69.1061 22.3661 69.0547 21.3371H70.9074L71.025 22.7863H71.0645C71.766 21.6944 72.8322 21.1494 74.2639 21.1494C75.3815 21.1494 76.3152 21.5753 77.0642 22.4281C77.8102 23.2818 78.1847 24.4042 78.1847 25.7962ZM76.0386 25.8706C76.0386 24.9806 75.8301 24.247 75.4131 23.6696C74.9576 23.0674 74.3479 22.7663 73.5802 22.7663C73.0594 22.7663 72.5881 22.934 72.1652 23.2646C71.7423 23.5981 71.4666 24.0336 71.3372 24.5728C71.273 24.8244 71.2394 25.0302 71.2394 25.1922V26.7167C71.2394 27.3817 71.4508 27.9429 71.8717 28.4012C72.2947 28.8586 72.844 29.0882 73.5219 29.0882C74.3153 29.0882 74.9329 28.7928 75.3746 28.204C75.8172 27.6142 76.0386 26.8367 76.0386 25.8706Z' fill='white'/%3E %3Cpath d='M90.3784 26.9241C90.3784 28.0027 89.9901 28.8802 89.2105 29.5577C88.3538 30.298 87.1612 30.6677 85.6287 30.6677C84.2137 30.6677 83.0794 30.4047 82.2207 29.8778L82.7088 28.1847C83.6337 28.724 84.6485 28.9946 85.7541 28.9946C86.5476 28.9946 87.1651 28.8212 87.6088 28.4762C88.0505 28.1313 88.2708 27.6683 88.2708 27.0909C88.2708 26.5764 88.089 26.1428 87.7244 25.7912C87.3618 25.4397 86.7561 25.1128 85.9103 24.8108C83.608 23.9828 82.4579 22.7699 82.4579 21.1749C82.4579 20.1325 82.861 19.2779 83.6683 18.6128C84.4726 17.9468 85.5456 17.6143 86.8875 17.6143C88.0841 17.6143 89.0781 17.8153 89.8715 18.2164L89.3449 19.8724C88.6038 19.4837 87.7659 19.2893 86.8282 19.2893C86.0871 19.2893 85.5081 19.4656 85.0931 19.8162C84.7423 20.1297 84.5664 20.5117 84.5664 20.9643C84.5664 21.4655 84.767 21.88 85.1702 22.2058C85.5209 22.5069 86.1583 22.8328 87.0831 23.1844C88.2145 23.6236 89.0455 24.1372 89.58 24.726C90.1126 25.3129 90.3784 26.0475 90.3784 26.9241Z' fill='white'/%3E %3Cpath d='M97.3447 22.8612H95.0227V27.3004C95.0227 28.4294 95.4318 28.9935 96.2519 28.9935C96.6284 28.9935 96.9406 28.9621 97.1876 28.8992L97.2459 30.4418C96.8309 30.5914 96.2845 30.6666 95.6077 30.6666C94.7757 30.6666 94.1255 30.4218 93.6562 29.933C93.1888 29.4432 92.9536 28.6219 92.9536 27.4681V22.8593H91.5703V21.3348H92.9536V19.6608L95.0227 19.0586V21.3348H97.3447V22.8612Z' fill='white'/%3E %3Cpath d='M107.82 25.8334C107.82 27.2388 107.403 28.3927 106.571 29.295C105.699 30.224 104.541 30.687 103.097 30.687C101.706 30.687 100.598 30.2421 99.7723 29.3521C98.9462 28.4622 98.5332 27.3389 98.5332 25.9849C98.5332 24.5681 98.9581 23.4076 99.8108 22.5053C100.662 21.602 101.81 21.1504 103.253 21.1504C104.645 21.1504 105.764 21.5954 106.609 22.4862C107.417 23.3504 107.82 24.4662 107.82 25.8334ZM105.635 25.8992C105.635 25.0559 105.448 24.3328 105.069 23.7296C104.628 22.9998 103.996 22.6358 103.178 22.6358C102.331 22.6358 101.688 23.0007 101.247 23.7296C100.868 24.3337 100.681 25.0683 100.681 25.9373C100.681 26.7805 100.868 27.5037 101.247 28.1059C101.702 28.8357 102.338 29.1997 103.159 29.1997C103.964 29.1997 104.595 28.8281 105.051 28.0868C105.439 27.4723 105.635 26.7415 105.635 25.8992Z' fill='white'/%3E %3Cpath d='M114.669 23.1236C114.46 23.0865 114.238 23.0674 114.005 23.0674C113.264 23.0674 112.69 23.3371 112.287 23.8773C111.936 24.3537 111.761 24.9559 111.761 25.6829V30.4802H109.655L109.675 24.2165C109.675 23.1627 109.648 22.2032 109.596 21.3381H111.431L111.508 23.0874H111.566C111.788 22.4862 112.139 22.0022 112.619 21.6392C113.089 21.3123 113.596 21.1494 114.142 21.1494C114.337 21.1494 114.512 21.1628 114.669 21.1866V23.1236Z' fill='white'/%3E %3Cpath d='M124.089 25.4757C124.089 25.8397 124.064 26.1465 124.012 26.397H117.692C117.716 27.3003 118.022 27.9911 118.609 28.4675C119.141 28.8934 119.83 29.1068 120.676 29.1068C121.611 29.1068 122.465 28.963 123.233 28.6743L123.563 30.0844C122.666 30.4617 121.607 30.6494 120.384 30.6494C118.914 30.6494 117.76 30.2321 116.92 29.3984C116.082 28.5647 115.662 27.4451 115.662 26.0407C115.662 24.662 116.052 23.5139 116.834 22.5982C117.652 21.6206 118.758 21.1318 120.149 21.1318C121.516 21.1318 122.55 21.6206 123.253 22.5982C123.809 23.3747 124.089 24.3352 124.089 25.4757ZM122.08 24.9488C122.094 24.3466 121.956 23.8264 121.671 23.3871C121.306 22.8221 120.746 22.5401 119.992 22.5401C119.303 22.5401 118.743 22.8154 118.315 23.3681C117.964 23.8073 117.756 24.3342 117.692 24.9478H122.08V24.9488Z' fill='white'/%3E %3C/g%3E %3Cdefs%3E %3CclipPath id='clip0_249_22492'%3E %3Crect width='140' height='40' fill='white'/%3E %3C/clipPath%3E %3C/defs%3E %3C/svg%3E")
        }
    </style>
    <style type="text/css">
        .ui-icon-app-store-alt {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-app-store-alt {
            width: 140px;
            height: 40px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='175' height='50' viewBox='0 0 175 50' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Cg clip-path='url(%23clip0_27_15564)'%3E %3Cpath d='M168.519 1C169.962 1 171.347 1.55312 172.368 2.53769C173.389 3.52226 173.963 4.85761 173.963 6.25V43.75C173.963 45.1424 173.389 46.4777 172.368 47.4623C171.347 48.4469 169.962 49 168.519 49H6.48148C5.03753 49 3.65271 48.4469 2.63168 47.4623C1.61065 46.4777 1.03704 45.1424 1.03704 43.75V6.25C1.03704 4.85761 1.61065 3.52226 2.63168 2.53769C3.65271 1.55312 5.03753 1 6.48148 1H168.519ZM168.519 0H6.48148C4.76249 0 3.1139 0.65848 1.89838 1.83058C0.682868 3.00268 0 4.5924 0 6.25V43.75C0 45.4076 0.682868 46.9973 1.89838 48.1694C3.1139 49.3415 4.76249 50 6.48148 50H168.519C170.238 50 171.886 49.3415 173.102 48.1694C174.317 46.9973 175 45.4076 175 43.75V6.25C175 4.5924 174.317 3.00268 173.102 1.83058C171.886 0.65848 170.238 0 168.519 0Z' fill='%239D9390'/%3E %3Cpath d='M64.8983 18.5121H63.5286V16.5273H58.0554V18.5121H56.6628L56.6172 15.4074H57.2849C57.6159 15.097 57.8804 14.646 58.0782 14.0547C58.2761 13.4596 58.4035 12.7869 58.4606 12.0366L58.6775 8.45508H63.9167V15.4074H64.9725L64.8983 18.5121ZM58.9172 15.4074H62.4785V9.58608H60.0529L59.9159 11.8592C59.8132 13.3783 59.4803 14.561 58.9172 15.4074Z' fill='%232E2826'/%3E %3Cpath d='M66.2475 13.4725C66.2475 12.8848 66.3674 12.3563 66.6071 11.8869C66.8468 11.4138 67.1835 11.0516 67.6172 10.8002C68.051 10.5452 68.5494 10.4177 69.1125 10.4177C69.9458 10.4177 70.6211 10.6783 71.1386 11.1994C71.6598 11.7206 71.9414 12.4117 71.9833 13.2729L71.989 13.5889C71.989 14.1803 71.871 14.7089 71.6351 15.1746C71.403 15.6403 71.0682 16.0006 70.6306 16.2557C70.1969 16.5107 69.6947 16.6382 69.1239 16.6382C68.2526 16.6382 67.5545 16.3573 67.0294 15.7955C66.5081 15.23 66.2475 14.4779 66.2475 13.5391V13.4725ZM67.6344 13.5889C67.6344 14.2062 67.7656 14.6904 68.0282 15.0415C68.2907 15.3889 68.656 15.5627 69.1239 15.5627C69.5919 15.5627 69.9553 15.3852 70.214 15.0304C70.4766 14.6756 70.6078 14.1563 70.6078 13.4725C70.6078 12.8664 70.4727 12.3859 70.2026 12.031C69.9363 11.6762 69.5729 11.4988 69.1125 11.4988C68.6598 11.4988 68.3002 11.6744 68.0339 12.0255C67.7675 12.3729 67.6344 12.8941 67.6344 13.5889Z' fill='%232E2826'/%3E %3Cpath d='M76.2831 15.5627C76.6293 15.5627 76.9166 15.4647 77.1448 15.2688C77.3731 15.0729 77.4949 14.8308 77.5101 14.5425H78.8171C78.8018 14.9158 78.682 15.2651 78.4575 15.5904C78.233 15.9119 77.9286 16.167 77.5443 16.3555C77.1601 16.544 76.7453 16.6382 76.3002 16.6382C75.4365 16.6382 74.7516 16.3666 74.2456 15.8232C73.7395 15.2799 73.4865 14.5296 73.4865 13.5723V13.4337C73.4865 12.5208 73.7376 11.7908 74.2399 11.2438C74.7421 10.6931 75.427 10.4177 76.2945 10.4177C77.0288 10.4177 77.6262 10.6265 78.0865 11.0442C78.5507 11.4582 78.7942 12.0033 78.8171 12.6797H77.5101C77.4949 12.336 77.3731 12.0532 77.1448 11.8315C76.9204 11.6097 76.6331 11.4988 76.2831 11.4988C75.8341 11.4988 75.4879 11.6577 75.2443 11.9756C75.0008 12.2898 74.8772 12.7684 74.8734 13.4115V13.6278C74.8734 14.2783 74.9932 14.7643 75.2329 15.0859C75.4764 15.4037 75.8265 15.5627 76.2831 15.5627Z' fill='%232E2826'/%3E %3Cpath d='M85.3084 11.5986H83.3052V16.5273H81.9183V11.5986H79.938V10.5286H85.3084V11.5986Z' fill='%232E2826'/%3E %3Cpath d='M89.0489 14.598L90.3045 10.5286H91.7827L89.3286 17.4366C88.9519 18.4456 88.3127 18.9501 87.411 18.9501C87.2093 18.9501 86.9867 18.9169 86.7432 18.8503V17.808L87.0057 17.8247C87.3558 17.8247 87.6183 17.7618 87.7933 17.6362C87.9722 17.5142 88.1129 17.3072 88.2157 17.0152L88.4154 16.4996L86.2467 10.5286H87.742L89.0489 14.598Z' fill='%232E2826'/%3E %3Cpath d='M98.4053 16.5273H97.0185V11.6152H94.61V16.5273H93.2232V10.5286H98.4053V16.5273Z' fill='%232E2826'/%3E %3Cpath d='M105.696 16.5273H104.309V14.1046H101.906V16.5273H100.519V10.5286H101.906V13.029H104.309V10.5286H105.696V16.5273Z' fill='%232E2826'/%3E %3Cpath d='M107.501 13.4725C107.501 12.8848 107.621 12.3563 107.861 11.8869C108.101 11.4138 108.437 11.0516 108.871 10.8002C109.305 10.5452 109.803 10.4177 110.366 10.4177C111.2 10.4177 111.875 10.6783 112.393 11.1994C112.914 11.7206 113.195 12.4117 113.237 13.2729L113.243 13.5889C113.243 14.1803 113.125 14.7089 112.889 15.1746C112.657 15.6403 112.322 16.0006 111.885 16.2557C111.451 16.5107 110.949 16.6382 110.378 16.6382C109.507 16.6382 108.808 16.3573 108.283 15.7955C107.762 15.23 107.501 14.4779 107.501 13.5391V13.4725ZM108.888 13.5889C108.888 14.2062 109.02 14.6904 109.282 15.0415C109.545 15.3889 109.91 15.5627 110.378 15.5627C110.846 15.5627 111.209 15.3852 111.468 15.0304C111.73 14.6756 111.862 14.1563 111.862 13.4725C111.862 12.8664 111.727 12.3859 111.457 12.031C111.19 11.6762 110.827 11.4988 110.366 11.4988C109.914 11.4988 109.554 11.6744 109.288 12.0255C109.021 12.3729 108.888 12.8941 108.888 13.5889Z' fill='%232E2826'/%3E %3Cpath d='M118.601 16.5273V10.5286H121.106C121.951 10.5286 122.594 10.6727 123.035 10.961C123.477 11.2456 123.697 11.6559 123.697 12.1918C123.697 12.469 123.608 12.7185 123.429 12.9403C123.254 13.1584 122.993 13.3265 122.647 13.4448C123.051 13.5261 123.37 13.6906 123.606 13.9382C123.842 14.1859 123.96 14.4779 123.96 14.8142C123.96 15.3723 123.747 15.7974 123.321 16.0894C122.898 16.3813 122.29 16.5273 121.494 16.5273H118.601ZM119.988 13.9715V15.4629H121.506C122.217 15.4629 122.573 15.2152 122.573 14.72C122.573 14.221 122.212 13.9715 121.489 13.9715H119.988ZM119.988 13.0068H121.129C121.917 13.0068 122.31 12.7814 122.31 12.3304C122.31 11.8573 121.938 11.6134 121.192 11.5986H119.988V13.0068Z' fill='%232E2826'/%3E %3Cpath d='M41.628 24.1406C41.5921 20.302 44.8874 18.4345 45.0381 18.3475C43.1719 15.7237 40.2792 15.3652 39.2627 15.3367C36.8332 15.0901 34.4766 16.7385 33.239 16.7385C31.9767 16.7385 30.071 15.3605 28.017 15.401C25.3738 15.4403 22.9011 16.9159 21.5449 19.2074C18.7461 23.8798 20.8335 30.7459 23.5149 34.5226C24.8563 36.3722 26.4236 38.4375 28.4752 38.3648C30.4822 38.285 31.232 37.1309 33.654 37.1309C36.0539 37.1309 36.7579 38.3648 38.8502 38.3184C41.0042 38.285 42.3604 36.4604 43.6548 34.5941C45.2049 32.4741 45.8274 30.3862 45.8521 30.279C45.8014 30.2624 41.6687 28.7415 41.628 24.1406Z' fill='%232E2826'/%3E %3Cpath d='M37.6752 12.8525C38.7547 11.5507 39.4933 9.77965 39.2883 7.98242C37.7258 8.04912 35.7719 9.02455 34.6467 10.2977C33.6512 11.4197 32.7619 13.2586 32.9916 14.9879C34.7467 15.1142 36.5488 14.134 37.6752 12.8525Z' fill='%232E2826'/%3E %3Cpath d='M70.4937 38.0999H67.6888L66.1523 33.4443H60.8117L59.348 38.0999H56.6172L61.9084 22.25H65.1766L70.4937 38.0999ZM65.6891 31.491L64.2996 27.3523C64.1526 26.9295 63.8772 25.9338 63.4709 24.3664H63.4215C63.2597 25.0405 62.999 26.0362 62.6409 27.3523L61.2761 31.491H65.6891Z' fill='%232E2826'/%3E %3Cpath d='M84.1003 32.2451C84.1003 34.1888 83.5556 35.7252 82.4662 36.8531C81.4905 37.8571 80.2788 38.3585 78.8325 38.3585C77.2713 38.3585 76.1498 37.8178 75.4668 36.7364H75.4174V42.7569H72.7841V30.4335C72.7841 29.2116 72.7507 27.9574 72.6865 26.6712H75.0024L75.1494 28.4827H75.1988C76.0769 27.1178 77.4096 26.4365 79.1981 26.4365C80.5962 26.4365 81.7634 26.9689 82.6972 28.0349C83.6334 29.102 84.1003 30.505 84.1003 32.2451ZM81.4176 32.338C81.4176 31.2256 81.1582 30.3085 80.637 29.5867C80.0676 28.834 79.3031 28.4577 78.3446 28.4577C77.6949 28.4577 77.1045 28.6673 76.5771 29.0806C76.0485 29.4974 75.7027 30.0417 75.5409 30.7158C75.4594 31.0302 75.4186 31.2875 75.4186 31.49V33.3956C75.4186 34.2269 75.6829 34.9284 76.2116 35.5013C76.7402 36.0742 77.4269 36.36 78.2717 36.36C79.2635 36.36 80.0355 35.9908 80.5876 35.2547C81.1409 34.5175 81.4176 33.5457 81.4176 32.338Z' fill='%232E2826'/%3E %3Cpath d='M97.7328 32.2451C97.7328 34.1888 97.1881 35.7252 96.0975 36.8531C95.123 37.8571 93.9114 38.3585 92.465 38.3585C90.9038 38.3585 89.7824 37.8178 89.1006 36.7364H89.0512V42.7569H86.4179V30.4335C86.4179 29.2116 86.3845 27.9574 86.3203 26.6712H88.6362L88.7831 28.4827H88.8325C89.7095 27.1178 91.0422 26.4365 92.8319 26.4365C94.2288 26.4365 95.396 26.9689 96.3322 28.0349C97.2647 29.102 97.7328 30.505 97.7328 32.2451ZM95.0501 32.338C95.0501 31.2256 94.7895 30.3085 94.2683 29.5867C93.6989 28.834 92.9369 28.4577 91.9772 28.4577C91.3263 28.4577 90.7371 28.6673 90.2085 29.0806C89.6798 29.4974 89.3352 30.0417 89.1734 30.7158C89.0932 31.0302 89.0512 31.2875 89.0512 31.49V33.3956C89.0512 34.2269 89.3155 34.9284 89.8416 35.5013C90.3703 36.073 91.057 36.36 91.9043 36.36C92.8961 36.36 93.668 35.9908 94.2201 35.2547C94.7735 34.5175 95.0501 33.5457 95.0501 32.338Z' fill='%232E2826'/%3E %3Cpath d='M112.974 33.6549C112.974 35.0031 112.489 36.1001 111.515 36.9469C110.444 37.8723 108.953 38.3344 107.037 38.3344C105.269 38.3344 103.851 38.0057 102.777 37.347L103.387 35.2306C104.544 35.9047 105.812 36.243 107.194 36.243C108.186 36.243 108.958 36.0262 109.512 35.5951C110.065 35.1639 110.34 34.5851 110.34 33.8633C110.34 33.2202 110.113 32.6783 109.657 32.2388C109.204 31.7993 108.447 31.3908 107.389 31.0133C104.511 29.9783 103.074 28.4621 103.074 26.4684C103.074 25.1654 103.578 24.0971 104.587 23.2658C105.592 22.4332 106.934 22.0176 108.611 22.0176C110.107 22.0176 111.349 22.2689 112.341 22.7703L111.683 24.8403C110.756 24.3543 109.709 24.1114 108.537 24.1114C107.61 24.1114 106.887 24.3317 106.368 24.77C105.929 25.1618 105.71 25.6394 105.71 26.2052C105.71 26.8316 105.96 27.3497 106.464 27.757C106.903 28.1334 107.699 28.5407 108.855 28.9802C110.27 29.5293 111.308 30.1712 111.977 30.9073C112.642 31.6409 112.974 32.5592 112.974 33.6549Z' fill='%232E2826'/%3E %3Cpath d='M121.681 28.5766H118.778V34.1255C118.778 35.5368 119.29 36.2419 120.315 36.2419C120.785 36.2419 121.176 36.2026 121.485 36.124L121.557 38.0522C121.039 38.2392 120.356 38.3333 119.51 38.3333C118.47 38.3333 117.657 38.0272 117.07 37.4162C116.486 36.804 116.192 35.7774 116.192 34.3351V28.5742H114.463V26.6686H116.192V24.576L118.778 23.8232V26.6686H121.681V28.5766Z' fill='%232E2826'/%3E %3Cpath d='M134.777 32.2913C134.777 34.048 134.256 35.4904 133.216 36.6182C132.125 37.7795 130.677 38.3583 128.873 38.3583C127.134 38.3583 125.749 37.8021 124.717 36.6897C123.684 35.5773 123.168 34.1731 123.168 32.4807C123.168 30.7096 123.699 29.259 124.765 28.1311C125.828 27.002 127.264 26.4375 129.068 26.4375C130.807 26.4375 132.207 26.9937 133.263 28.1073C134.273 29.1875 134.777 30.5822 134.777 32.2913ZM132.045 32.3735C132.045 31.3194 131.811 30.4155 131.338 29.6616C130.786 28.7492 129.997 28.2943 128.974 28.2943C127.916 28.2943 127.112 28.7504 126.56 29.6616C126.087 30.4167 125.853 31.3349 125.853 32.4211C125.853 33.4752 126.087 34.3791 126.56 35.1319C127.129 36.0442 127.924 36.4991 128.951 36.4991C129.956 36.4991 130.745 36.0346 131.315 35.108C131.8 34.3398 132.045 33.4263 132.045 32.3735Z' fill='%232E2826'/%3E %3Cpath d='M143.336 28.9043C143.076 28.8578 142.798 28.834 142.506 28.834C141.58 28.834 140.864 29.1711 140.36 29.8464C139.921 30.4419 139.701 31.1946 139.701 32.1033V38.1001H137.069L137.094 30.2704C137.094 28.9531 137.061 27.7538 136.995 26.6723H139.289L139.385 28.859H139.458C139.736 28.1075 140.174 27.5025 140.775 27.0487C141.361 26.6402 141.995 26.4365 142.678 26.4365C142.921 26.4365 143.141 26.4532 143.336 26.483V28.9043Z' fill='%232E2826'/%3E %3Cpath d='M155.113 31.8448C155.113 32.2998 155.082 32.6833 155.017 32.9965H147.117C147.148 34.1256 147.53 34.9891 148.263 35.5846C148.929 36.117 149.79 36.3838 150.847 36.3838C152.017 36.3838 153.084 36.2039 154.044 35.8431L154.456 37.6058C153.335 38.0774 152.011 38.312 150.483 38.312C148.645 38.312 147.202 37.7904 146.152 36.7482C145.105 35.7061 144.58 34.3067 144.58 32.5511C144.58 30.8277 145.068 29.3926 146.045 28.248C147.068 27.026 148.45 26.415 150.189 26.415C151.897 26.415 153.19 27.026 154.068 28.248C154.764 29.2187 155.113 30.4192 155.113 31.8448ZM152.602 31.1862C152.619 30.4335 152.448 29.7832 152.091 29.2342C151.635 28.5279 150.935 28.1753 149.992 28.1753C149.132 28.1753 148.431 28.5196 147.896 29.2103C147.458 29.7594 147.197 30.418 147.117 31.185H152.602V31.1862Z' fill='%232E2826'/%3E %3C/g%3E %3Cdefs%3E %3CclipPath id='clip0_27_15564'%3E %3Crect width='175' height='50' fill='white'/%3E %3C/clipPath%3E %3C/defs%3E %3C/svg%3E")
        }
    </style>
    <style type="text/css">
        .ui-icon-google-play {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-google-play {
            width: 140px;
            height: 40px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='140' height='40' viewBox='0 0 140 40' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Cg clip-path='url(%23clip0_249_22493)'%3E %3Cpath d='M134.815 0.8C135.97 0.8 137.078 1.2425 137.895 2.03015C138.711 2.8178 139.17 3.88609 139.17 5V35C139.17 36.1139 138.711 37.1822 137.895 37.9698C137.078 38.7575 135.97 39.2 134.815 39.2H5.18518C4.03002 39.2 2.92217 38.7575 2.10534 37.9698C1.28852 37.1822 0.82963 36.1139 0.82963 35V5C0.82963 3.88609 1.28852 2.8178 2.10534 2.03015C2.92217 1.2425 4.03002 0.8 5.18518 0.8H134.815ZM134.815 0H5.18518C3.80999 0 2.49112 0.526784 1.51871 1.46447C0.546295 2.40215 0 3.67392 0 5V35C0 36.3261 0.546295 37.5979 1.51871 38.5355C2.49112 39.4732 3.80999 40 5.18518 40H134.815C136.19 40 137.509 39.4732 138.481 38.5355C139.454 37.5979 140 36.3261 140 35V5C140 3.67392 139.454 2.40215 138.481 1.46447C137.509 0.526784 136.19 0 134.815 0Z' fill='%239D9390'/%3E %3Cpath d='M70.6637 21.7501C69.7929 21.7541 68.9428 22.0067 68.2207 22.4761C67.4987 22.9455 66.937 23.6106 66.6066 24.3875C66.2762 25.1644 66.1918 26.0183 66.3642 26.8414C66.5366 27.6645 66.958 28.4199 67.5752 29.0123C68.1924 29.6047 68.9778 30.0075 69.8322 30.1699C70.6865 30.3322 71.5717 30.2469 72.3758 29.9247C73.1799 29.6024 73.8671 29.0577 74.3505 28.3592C74.8338 27.6607 75.0918 26.8398 75.0918 26.0001C75.1003 25.4381 74.9914 24.8801 74.7715 24.3595C74.5517 23.8388 74.2255 23.3662 73.8124 22.9696C73.3992 22.5731 72.9075 22.2608 72.3666 22.0512C71.8256 21.8417 71.2465 21.7393 70.6637 21.7501ZM70.6637 28.5801C70.1281 28.6162 69.5937 28.4962 69.1299 28.2355C68.666 27.9748 68.2942 27.5857 68.0628 27.1186C67.8314 26.6514 67.751 26.128 67.8322 25.6163C67.9134 25.1045 68.1523 24.6282 68.518 24.2492C68.8837 23.8701 69.3591 23.6059 69.8825 23.4909C70.406 23.3759 70.9532 23.4154 71.453 23.6042C71.9529 23.7931 72.3823 24.1225 72.6854 24.5498C72.9885 24.9771 73.1512 25.4824 73.1526 26.0001C73.1693 26.3281 73.1177 26.6561 73.0009 26.9645C72.8841 27.273 72.7044 27.5558 72.4724 27.7963C72.2404 28.0368 71.9609 28.23 71.6502 28.3646C71.3396 28.4992 71.0041 28.5725 70.6637 28.5801ZM61.0089 21.7501C60.1376 21.7521 59.2865 22.003 58.5631 22.4712C57.8396 22.9394 57.2763 23.6039 56.9443 24.3806C56.6123 25.1574 56.5265 26.0116 56.6978 26.8354C56.869 27.6591 57.2896 28.4155 57.9064 29.0088C58.5232 29.6022 59.3085 30.006 60.1632 30.1692C61.0178 30.3324 61.9035 30.2476 62.7082 29.9256C63.513 29.6037 64.2007 29.0589 64.6846 28.3602C65.1684 27.6616 65.4266 26.8403 65.4266 26.0001C65.4351 25.4381 65.3262 24.8801 65.1064 24.3595C64.8866 23.8388 64.5604 23.3662 64.1472 22.9696C63.734 22.5731 63.2423 22.2608 62.7014 22.0512C62.1604 21.8417 61.5813 21.7393 60.9985 21.7501H61.0089ZM61.0089 28.5801C60.473 28.6183 59.9377 28.5 59.4726 28.2407C59.0075 27.9814 58.6341 27.593 58.4011 27.1262C58.168 26.6594 58.0861 26.1358 58.166 25.6234C58.2459 25.1111 58.4839 24.6339 58.849 24.2538C59.2141 23.8737 59.6895 23.6085 60.2131 23.4925C60.7367 23.3766 61.2844 23.4154 61.7849 23.6038C62.2854 23.7922 62.7154 24.1216 63.0191 24.549C63.3227 24.9764 63.4859 25.482 63.4874 26.0001C63.5041 26.3281 63.4525 26.6561 63.3357 26.9645C63.2189 27.273 63.0392 27.5558 62.8072 27.7963C62.5753 28.0368 62.2957 28.23 61.9851 28.3646C61.6744 28.4992 61.339 28.5725 60.9985 28.5801H61.0089ZM49.5081 23.0601V24.8601H53.9881C53.9179 25.7079 53.5524 26.5079 52.9511 27.1301C52.5029 27.5704 51.964 27.9152 51.3693 28.1426C50.7745 28.3699 50.137 28.4747 49.4977 28.4501C48.1775 28.4501 46.9114 27.9444 45.9779 27.0442C45.0444 26.1441 44.52 24.9232 44.52 23.6501C44.52 22.3771 45.0444 21.1562 45.9779 20.256C46.9114 19.3558 48.1775 18.8501 49.4977 18.8501C50.7606 18.8303 51.9802 19.2942 52.8888 20.1401L54.2059 18.8701C53.5925 18.2711 52.8606 17.797 52.0536 17.4758C51.2467 17.1546 50.3811 16.9928 49.5081 17.0001C48.5862 16.9655 47.6665 17.1107 46.8042 17.4271C45.9418 17.7434 45.1546 18.2244 44.4896 18.8411C43.8247 19.4579 43.2957 20.1977 42.9343 21.0163C42.573 21.8349 42.3867 22.7154 42.3867 23.6051C42.3867 24.4948 42.573 25.3753 42.9343 26.1939C43.2957 27.0125 43.8247 27.7524 44.4896 28.3691C45.1546 28.9859 45.9418 29.4668 46.8042 29.7832C47.6665 30.0995 48.5862 30.2447 49.5081 30.2101C50.3958 30.2488 51.2817 30.1037 52.1063 29.7846C52.931 29.4655 53.6752 28.9798 54.2888 28.3601C55.3753 27.209 55.9554 25.6959 55.9066 24.1401C55.91 23.7611 55.8752 23.3827 55.8029 23.0101L49.5081 23.0601ZM96.4963 24.4601C96.2258 23.6929 95.7201 23.0229 95.046 22.539C94.3719 22.055 93.5613 21.7799 92.7214 21.7501C92.1542 21.749 91.5927 21.8602 91.0718 22.0767C90.5508 22.2931 90.0814 22.6103 89.6927 23.0087C89.3039 23.407 89.0039 23.878 88.8114 24.3925C88.6189 24.907 88.5378 25.4542 88.5733 26.0001C88.5607 26.559 88.665 27.1147 88.8801 27.6338C89.0952 28.153 89.4166 28.625 89.8251 29.0217C90.2335 29.4184 90.7208 29.7316 91.2576 29.9427C91.7945 30.1538 92.3699 30.2583 92.9496 30.2501C93.675 30.2539 94.3901 30.0841 95.0307 29.756C95.6714 29.4279 96.2177 28.9518 96.6207 28.3701L95.117 27.3701C94.8926 27.7309 94.5748 28.0293 94.1949 28.2362C93.815 28.443 93.3859 28.5512 92.9496 28.5501C92.5004 28.5666 92.0564 28.4524 91.6754 28.2224C91.2944 27.9923 90.994 27.657 90.8133 27.2601L96.714 24.9101L96.4963 24.4601ZM90.4814 25.8801C90.4604 25.5708 90.5036 25.2606 90.6085 24.9676C90.7134 24.6746 90.8778 24.4047 91.0922 24.1737C91.3066 23.9428 91.5667 23.7554 91.8571 23.6225C92.1475 23.4897 92.4625 23.4141 92.7837 23.4001C93.1182 23.3789 93.4518 23.4528 93.7431 23.6128C94.0344 23.7728 94.2705 24.0118 94.4222 24.3001L90.4814 25.8801ZM85.6903 30.0001H87.6296V17.5001H85.6903V30.0001ZM82.517 22.7001H82.4444C82.1521 22.385 81.7941 22.133 81.3938 21.9607C80.9934 21.7884 80.5599 21.6996 80.1214 21.7001C78.9882 21.7531 77.9195 22.2245 77.1368 23.0167C76.3542 23.8089 75.9176 24.861 75.9176 25.9551C75.9176 27.0492 76.3542 28.1014 77.1368 28.8935C77.9195 29.6857 78.9882 30.1571 80.1214 30.2101C80.5609 30.2172 80.9966 30.1314 81.398 29.9586C81.7993 29.7859 82.1565 29.5304 82.4444 29.2101H82.5066V29.8201C82.5066 31.4501 81.6044 32.3201 80.1526 32.3201C79.669 32.3092 79.1998 32.1598 78.8045 31.8909C78.4093 31.622 78.1061 31.2458 77.9333 30.8101L76.2429 31.4901C76.5611 32.2365 77.1033 32.8742 77.7999 33.3214C78.4965 33.7686 79.3157 34.0049 80.1526 34.0001C82.4237 34.0001 84.3007 32.7101 84.3007 29.5701V22.0001H82.517V22.7001ZM80.2977 28.5801C79.6288 28.5233 79.0062 28.2269 78.5527 27.7493C78.0992 27.2717 77.8476 26.6477 77.8476 26.0001C77.8476 25.3526 78.0992 24.7285 78.5527 24.2509C79.0062 23.7734 79.6288 23.477 80.2977 23.4201C80.6294 23.4365 80.9543 23.5168 81.2533 23.6562C81.5523 23.7955 81.8194 23.9912 82.0388 24.2316C82.2581 24.472 82.4254 24.7524 82.5307 25.0561C82.636 25.3598 82.6772 25.6808 82.6518 26.0001C82.6801 26.3208 82.6407 26.6437 82.5358 26.9493C82.431 27.2548 82.263 27.5367 82.042 27.7779C81.821 28.0191 81.5515 28.2145 81.2499 28.3524C80.9483 28.4903 80.6209 28.5678 80.2874 28.5801H80.2977ZM105.581 17.5001H100.945V30.0001H102.884V25.2601H105.591C106.144 25.2984 106.699 25.2265 107.221 25.0488C107.744 24.8712 108.223 24.5916 108.629 24.2276C109.034 23.8636 109.358 23.4229 109.579 22.933C109.8 22.443 109.914 21.9144 109.914 21.3801C109.914 20.8458 109.8 20.3172 109.579 19.8273C109.358 19.3374 109.034 18.8967 108.629 18.5326C108.223 18.1686 107.744 17.889 107.221 17.7114C106.699 17.5337 106.144 17.4618 105.591 17.5001H105.581ZM105.581 23.5001H102.874V19.2401H105.622C106.212 19.2401 106.778 19.4661 107.195 19.8684C107.612 20.2706 107.847 20.8162 107.847 21.3851C107.847 21.954 107.612 22.4996 107.195 22.9019C106.778 23.3041 106.212 23.5301 105.622 23.5301L105.581 23.5001ZM117.538 21.7001C116.832 21.6594 116.129 21.8185 115.515 22.1578C114.902 22.4972 114.404 23.0019 114.084 23.6101L115.806 24.3001C115.976 23.9985 116.233 23.7509 116.546 23.5876C116.859 23.4242 117.214 23.3522 117.569 23.3801C117.815 23.3524 118.064 23.3722 118.303 23.4384C118.541 23.5047 118.763 23.616 118.956 23.7658C119.149 23.9157 119.309 24.1011 119.427 24.3113C119.545 24.5215 119.618 24.7523 119.643 24.9901V25.1201C119.02 24.8021 118.325 24.6372 117.621 24.6401C115.764 24.6401 113.887 25.6401 113.887 27.4501C113.906 27.8361 114.004 28.2145 114.177 28.5632C114.349 28.9118 114.593 29.2235 114.892 29.4799C115.192 29.7363 115.542 29.9321 115.922 30.0558C116.301 30.1795 116.703 30.2286 117.102 30.2001C117.591 30.2339 118.079 30.1404 118.517 29.9292C118.955 29.7181 119.326 29.3971 119.591 29.0001H119.653V30.0001H121.52V25.1901C121.52 23.0001 119.798 21.7301 117.59 21.7301L117.538 21.7001ZM117.299 28.5501C116.667 28.5501 115.785 28.2401 115.785 27.4901C115.785 26.4901 116.884 26.1601 117.859 26.1601C118.475 26.1455 119.084 26.2905 119.622 26.5801C119.557 27.1215 119.292 27.6221 118.874 27.9896C118.457 28.3571 117.916 28.5668 117.351 28.5801L117.299 28.5501ZM128.323 22.0001L126.104 27.4201H126.041L123.739 22.0001H121.665L125.118 29.5801L123.148 33.7901H125.17L130.48 22.0001H128.323ZM110.89 30.0001H112.83V17.5001H110.89V30.0001Z' fill='white'/%3E %3Cpath d='M43.6699 14.2699H42.9025V12.2699H43.5559C43.8538 11.9655 44.0787 11.6017 44.2149 11.2043C44.3511 10.8069 44.3952 10.3855 44.344 9.96987V6.99987H48.4922V12.2599H49.187V14.2599H48.4196V12.9999H43.6699V14.2699ZM45.1114 9.99987C45.1598 10.8065 44.9537 11.6084 44.5203 12.2999H47.6314V7.73987H45.1114V9.99987ZM55.3885 12.2199C54.7822 12.8012 53.962 13.1275 53.107 13.1275C52.252 13.1275 51.4317 12.8012 50.8255 12.2199C50.2362 11.6184 49.9079 10.8223 49.9079 9.99487C49.9079 9.16744 50.2362 8.37135 50.8255 7.76987C51.1243 7.47962 51.4797 7.24925 51.8713 7.09204C52.2629 6.93484 52.6828 6.85391 53.107 6.85391C53.5311 6.85391 53.9511 6.93484 54.3426 7.09204C54.7342 7.24925 55.0896 7.47962 55.3885 7.76987C55.9801 8.3702 56.3099 9.16672 56.3099 9.99487C56.3099 10.823 55.9801 11.6195 55.3885 12.2199ZM51.4166 11.7199C51.8656 12.151 52.4734 12.393 53.107 12.393C53.7406 12.393 54.3484 12.151 54.7973 11.7199C55.2404 11.2489 55.4858 10.6358 55.4858 9.99987C55.4858 9.36398 55.2404 8.75086 54.7973 8.27987C54.3484 7.84875 53.7406 7.6067 53.107 7.6067C52.4734 7.6067 51.8656 7.84875 51.4166 8.27987C50.9735 8.75086 50.7281 9.36398 50.7281 9.99987C50.7281 10.6358 50.9735 11.2489 51.4166 11.7199ZM60.3351 13.1299C59.907 13.1381 59.4816 13.0627 59.0845 12.9081C58.6874 12.7536 58.3269 12.5232 58.0246 12.2308C57.7223 11.9383 57.4845 11.5899 57.3255 11.2065C57.1666 10.8231 57.0897 10.4127 57.0996 9.99987C57.0897 9.58708 57.1666 9.17662 57.3255 8.79323C57.4845 8.40983 57.7223 8.06142 58.0246 7.76899C58.3269 7.47655 58.6874 7.24614 59.0845 7.09162C59.4816 6.9371 59.907 6.86167 60.3351 6.86987C60.769 6.85951 61.1998 6.94411 61.5949 7.11731C61.9901 7.29051 62.3394 7.54781 62.6166 7.86987L62.0566 8.38987C61.8518 8.13912 61.5877 7.93929 61.2864 7.80707C60.9851 7.67485 60.6554 7.61409 60.3248 7.62987C60.0064 7.6219 59.6897 7.67627 59.3939 7.78972C59.098 7.90316 58.829 8.07331 58.6033 8.28987C58.1536 8.76367 57.9043 9.38264 57.9043 10.0249C57.9043 10.6671 58.1536 11.2861 58.6033 11.7599C58.829 11.9764 59.098 12.1466 59.3939 12.26C59.6897 12.3735 60.0064 12.4279 60.3248 12.4199C60.6898 12.4167 61.0495 12.3352 61.3777 12.1813C61.706 12.0273 61.9946 11.8048 62.2225 11.5299L62.7825 12.0699C62.5003 12.4 62.1463 12.6663 61.7455 12.8499C61.3028 13.0432 60.821 13.1389 60.3351 13.1299ZM66.0388 12.9999H65.2403V7.73987H63.4981V6.99987H67.7707V7.73987H66.0388V12.9999ZM73.267 6.99987L70.9129 12.0599C70.8187 12.3592 70.6304 12.6229 70.374 12.8146C70.1177 13.0063 69.8059 13.1164 69.4818 13.1299C69.2674 13.1272 69.0558 13.083 68.8596 12.9999L69.067 12.2899C69.193 12.3606 69.336 12.3986 69.4818 12.3999C69.6342 12.4109 69.7864 12.376 69.9173 12.2999C70.0423 12.1979 70.1386 12.0672 70.1973 11.9199L70.4255 11.4399L68.3514 7.00987H69.2951L70.8299 10.4499L72.3233 6.99987H73.267ZM74.1692 12.9999V6.99987H78.6699V12.9999H77.8714V7.73987H74.9677V12.9999H74.1692ZM80.0907 12.9999V6.99987H80.8892V9.56987H84.0003V6.99987H84.7988V12.9999H84.0003V10.2899H80.8892V12.9999H80.0907ZM91.3218 12.2199C90.7155 12.8012 89.8953 13.1275 89.0403 13.1275C88.1853 13.1275 87.3651 12.8012 86.7588 12.2199C86.1696 11.6184 85.8412 10.8223 85.8412 9.99487C85.8412 9.16744 86.1696 8.37135 86.7588 7.76987C87.0577 7.47962 87.4131 7.24925 87.8046 7.09204C88.1962 6.93484 88.6162 6.85391 89.0403 6.85391C89.4645 6.85391 89.8844 6.93484 90.276 7.09204C90.6675 7.24925 91.023 7.47962 91.3218 7.76987C91.9134 8.3702 92.2433 9.16672 92.2433 9.99487C92.2433 10.823 91.9134 11.6195 91.3218 12.2199ZM87.3499 11.7199C87.7989 12.151 88.4067 12.393 89.0403 12.393C89.6739 12.393 90.2817 12.151 90.7307 11.7199C91.1737 11.2489 91.4192 10.6358 91.4192 9.99987C91.4192 9.36398 91.1737 8.75086 90.7307 8.27987C90.2817 7.84875 89.6739 7.6067 89.0403 7.6067C88.4067 7.6067 87.7989 7.84875 87.3499 8.27987C86.9069 8.75086 86.6614 9.36398 86.6614 9.99987C86.6614 10.6358 86.9069 11.2489 87.3499 11.7199ZM95.501 12.9999V6.99987H97.7514C98.2187 6.99136 98.6715 7.15601 99.0166 7.45987C99.1899 7.60489 99.328 7.78485 99.4212 7.98703C99.5144 8.18921 99.5604 8.40867 99.5559 8.62987C99.5607 8.89644 99.4811 9.15808 99.3277 9.37987C99.1754 9.5953 98.9634 9.7651 98.7159 9.86987C99.0167 9.9659 99.2805 10.1471 99.4729 10.3899C99.6723 10.6349 99.7785 10.9385 99.7736 11.2499C99.7789 11.4804 99.7315 11.7092 99.6347 11.9201C99.5379 12.1309 99.3942 12.3187 99.2136 12.4699C98.8525 12.7911 98.3774 12.9664 97.8862 12.9599L95.501 12.9999ZM96.2996 9.56987H97.7514C97.887 9.57533 98.0222 9.55221 98.1476 9.50213C98.2729 9.45204 98.3855 9.3762 98.4773 9.27987C98.5692 9.19959 98.6433 9.1023 98.6952 8.9938C98.7472 8.8853 98.776 8.76782 98.7799 8.64836C98.7837 8.52891 98.7626 8.40992 98.7178 8.29851C98.6729 8.18709 98.6053 8.08553 98.5188 7.99987C98.4322 7.90535 98.325 7.83037 98.2049 7.78025C98.0848 7.73013 97.9548 7.7061 97.824 7.70987H96.341L96.2996 9.56987ZM96.2996 12.2599H97.907C98.0474 12.2644 98.1872 12.239 98.3163 12.1854C98.4453 12.1318 98.5605 12.0514 98.6536 11.9499C98.8365 11.767 98.9403 11.5239 98.944 11.2699C98.944 11.0047 98.8347 10.7503 98.6403 10.5628C98.4458 10.3752 98.182 10.2699 97.907 10.2699H96.3307L96.2996 12.2599Z' fill='white'/%3E %3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M53.107 6.95391C52.6965 6.95391 52.2901 7.03223 51.9112 7.18436C51.5326 7.33634 51.189 7.55897 50.9 7.83945C50.3295 8.42225 50.0116 9.19339 50.0116 9.99487C50.0116 10.7963 50.3294 11.5673 50.8998 12.1501C51.4865 12.7121 52.2799 13.0275 53.107 13.0275C53.9341 13.0275 54.7276 12.7121 55.3143 12.15C55.8869 11.5683 56.2062 10.7969 56.2062 9.99487C56.2062 9.19272 55.8869 8.4212 55.3141 7.83955C55.025 7.55902 54.6814 7.33636 54.3028 7.18436C53.9238 7.03223 53.5174 6.95391 53.107 6.95391ZM51.8315 6.99973C52.2356 6.83745 52.6691 6.75391 53.107 6.75391C53.5448 6.75391 53.9783 6.83745 54.3825 6.99973C54.7867 7.162 55.1536 7.3998 55.4621 7.69942L55.4637 7.70097C56.0736 8.31989 56.4136 9.14108 56.4136 9.99487C56.4136 10.8487 56.0736 11.6698 55.4636 12.2888L55.4616 12.2908C54.8359 12.8908 53.9894 13.2275 53.107 13.2275C52.2246 13.2275 51.3781 12.8908 50.7524 12.2908L50.7501 12.2886C50.1426 11.6685 49.8042 10.8479 49.8042 9.99487C49.8042 9.1419 50.1427 8.32124 50.7501 7.7012L50.7519 7.6994C51.0603 7.39978 51.4273 7.162 51.8315 6.99973ZM89.0403 6.95391C88.6298 6.95391 88.2234 7.03223 87.8445 7.18436C87.466 7.33633 87.1224 7.55894 86.8334 7.8394C86.2628 8.42221 85.945 9.19337 85.945 9.99487C85.945 10.7963 86.2627 11.5673 86.8331 12.1501C87.4198 12.7121 88.2133 13.0275 89.0403 13.0275C89.8674 13.0275 90.6609 12.712 91.2477 12.1499C91.8203 11.5683 92.1396 10.7969 92.1396 9.99487C92.1396 9.19274 91.8202 8.42123 91.2474 7.83958C90.9584 7.55904 90.6147 7.33636 90.2361 7.18436C89.8572 7.03223 89.4508 6.95391 89.0403 6.95391ZM87.7648 6.99973C88.169 6.83745 88.6025 6.75391 89.0403 6.75391C89.4781 6.75391 89.9116 6.83745 90.3158 6.99973C90.72 7.162 91.0869 7.3998 91.3954 7.69942L91.397 7.70097C92.0069 8.3199 92.347 9.14108 92.347 9.99487C92.347 10.8487 92.0069 11.6698 91.397 12.2888L91.3949 12.2908C90.7693 12.8908 89.9227 13.2275 89.0403 13.2275C88.1579 13.2275 87.3114 12.8908 86.6857 12.2908L86.6834 12.2886C86.0759 11.6685 85.7376 10.8479 85.7376 9.99487C85.7376 9.1419 86.076 8.32124 86.6834 7.7012L86.6852 7.6994C86.9937 7.39978 87.3606 7.162 87.7648 6.99973ZM61.552 7.20835C61.1711 7.0414 60.756 6.95986 60.3377 6.96984L60.3331 6.96995C59.9189 6.96202 59.5074 7.03488 59.1233 7.18435C58.7392 7.33382 58.3905 7.55671 58.098 7.83958C57.8056 8.12246 57.5756 8.45948 57.4218 8.83035C57.268 9.20122 57.1937 9.59826 57.2032 9.99757L57.2034 10.0022C57.1938 10.4015 57.268 10.7985 57.4218 11.1694C57.5756 11.5403 57.8056 11.8773 58.098 12.1602C58.3905 12.443 58.7392 12.6659 59.1233 12.8154C59.5074 12.9649 59.9189 13.0378 60.3331 13.0299L60.3351 13.1299L60.3371 13.0299C60.8072 13.0386 61.2734 12.9461 61.7018 12.7592C62.0602 12.5949 62.3798 12.3621 62.6415 12.0753L62.2293 11.6778C62.0045 11.9252 61.7305 12.127 61.4231 12.2712C61.0812 12.4315 60.7067 12.5165 60.3266 12.5199C59.9945 12.5281 59.6642 12.4713 59.3555 12.353C59.0466 12.2345 58.7658 12.0569 58.5301 11.8308L58.5267 11.8275C58.0596 11.3352 57.8006 10.6921 57.8006 10.0249C57.8006 9.35764 58.0596 8.7146 58.5268 8.22237L58.5301 8.21891C58.7657 7.9928 59.0466 7.81523 59.3555 7.69679C59.6633 7.57881 59.9925 7.52202 60.3235 7.52981C60.6694 7.51391 61.0142 7.57775 61.3294 7.71605C61.611 7.83964 61.8616 8.01949 62.065 8.24324L62.4741 7.86339C62.2177 7.58572 61.9037 7.36248 61.552 7.20835ZM60.3352 13.2299C59.8937 13.2381 59.4551 13.1602 59.0457 13.0009C58.6356 12.8413 58.2633 12.6033 57.9511 12.3014C57.639 11.9994 57.3934 11.6396 57.2292 11.2436C57.0654 10.8484 56.986 10.4254 56.9958 9.99987C56.986 9.57436 57.0654 9.15131 57.2292 8.7561C57.3934 8.36018 57.639 8.00038 57.9511 7.69839C58.2633 7.3964 58.6356 7.15845 59.0457 6.99888C59.4551 6.83959 59.8935 6.76169 60.3349 6.76985C60.7837 6.75947 61.2291 6.84713 61.6378 7.02627C62.0472 7.20572 62.4092 7.47231 62.6964 7.80601L62.7579 7.87748L62.046 8.53853L61.9751 8.45175C61.7805 8.21354 61.5297 8.02369 61.2434 7.89809C60.9572 7.77248 60.644 7.71476 60.3299 7.72975L60.322 7.73012C60.0178 7.7225 59.715 7.7742 59.4322 7.88264C59.1501 7.9908 58.8936 8.15288 58.6781 8.35911C58.247 8.81425 58.008 9.40841 58.008 10.0249C58.008 10.6413 58.247 11.2355 58.6781 11.6906C58.8936 11.8969 59.1501 12.0589 59.4322 12.1671C59.715 12.2756 60.0178 12.3275 60.3221 12.3199L60.3238 12.3199C60.6734 12.3169 61.018 12.2388 61.3324 12.0914C61.6468 11.9439 61.9232 11.7308 62.1415 11.4674L62.2139 11.3801L62.9225 12.0634L62.8625 12.1335C62.5706 12.4749 62.2045 12.7503 61.79 12.9402L61.7883 12.941C61.3322 13.1402 60.8358 13.2389 60.3352 13.2299ZM98.9467 7.53372C98.6212 7.24712 98.1941 7.09183 97.7534 7.09986L97.7514 7.09987H95.6047V12.8981L97.8844 12.8599L97.8877 12.8599C98.3523 12.8661 98.8018 12.7002 99.1433 12.3964L99.1456 12.3943C99.3146 12.2528 99.4493 12.077 99.5399 11.8796C99.6305 11.6822 99.6749 11.4679 99.67 11.2521L99.6699 11.2484C99.6744 10.9599 99.5761 10.6786 99.3913 10.4516L99.3905 10.4506C99.2108 10.2238 98.9643 10.0545 98.6833 9.96481L98.4269 9.88297L98.6742 9.77831C98.9038 9.68115 99.1004 9.52374 99.2417 9.32404C99.3832 9.11925 99.4567 8.87771 99.4522 8.63163V8.62791C99.4564 8.42136 99.4134 8.21644 99.3264 8.02765C99.2394 7.83885 99.1104 7.67081 98.9486 7.5354L98.9467 7.53372ZM99.0856 7.38522C98.7213 7.06482 98.2435 6.89114 97.7505 6.89987H95.3973V13.1016L97.8848 13.0599L97.8864 13.0599C98.4031 13.0664 98.9028 12.8819 99.2828 12.5444C99.4743 12.3837 99.6268 12.1844 99.7295 11.9606C99.8322 11.7368 99.8827 11.4941 99.8774 11.2495L99.8773 11.2514L99.7736 11.2499L99.8773 11.2477L99.8774 11.2495C99.8821 10.9161 99.7683 10.5911 99.5549 10.3286C99.3963 10.1287 99.1922 9.96796 98.9596 9.85808C99.1387 9.74943 99.2934 9.60604 99.4134 9.43619L99.414 9.43536C99.5788 9.19715 99.6644 8.91622 99.6596 8.62995L99.6595 8.63183L99.5559 8.62987L99.6595 8.62811L99.6596 8.62995C99.6641 8.39473 99.6151 8.16141 99.516 7.94642C99.4168 7.73125 99.2699 7.53968 99.0856 7.38522ZM44.2403 6.89987H48.5959V12.1599H49.2907V14.3599H48.3159V13.0999H43.7736V14.3699H42.7988V12.1699H43.5107C43.7832 11.8826 43.9897 11.5429 44.1165 11.1729C44.2479 10.7894 44.2904 10.3828 44.241 9.98166L44.2403 9.97579V6.89987ZM44.4477 7.09987V9.96401C44.4995 10.3923 44.4537 10.8263 44.3134 11.2357C44.1725 11.647 43.9396 12.0235 43.6313 12.3385L43.6006 12.3699H43.0062V14.1699H43.5662V12.8999H48.5233V14.1599H49.0833V12.3599H48.3885V7.09987H44.4477ZM63.3944 6.89987H67.8744V7.83987H66.1425V13.0999H65.1366V7.83987H63.3944V6.89987ZM63.6018 7.09987V7.63987H65.344V12.8999H65.9351V7.63987H67.667V7.09987H63.6018ZM72.2542 6.89987H73.4272L71.0102 12.0951C70.9091 12.4117 70.7091 12.6906 70.4376 12.8936C70.1642 13.098 69.8318 13.2154 69.4862 13.2298L69.4805 13.23C69.2522 13.2272 69.0268 13.18 68.8178 13.0914L68.7353 13.0564L69.0035 12.1385L69.1192 12.2035C69.2296 12.2655 69.3549 12.2987 69.4828 12.2999L69.4896 12.2999C69.6178 12.3093 69.7459 12.2809 69.8567 12.2183C69.9653 12.1279 70.049 12.0131 70.1006 11.884L70.1029 11.8781L70.3116 11.4396L68.1908 6.90987H69.3634L70.8285 10.1936L72.2542 6.89987ZM72.3924 7.09987L70.8314 10.7061L69.2268 7.10987H68.512L70.5394 11.4402L70.2929 11.9588C70.2278 12.1206 70.1217 12.2641 69.9843 12.3762L69.978 12.3814L69.9709 12.3855C69.8225 12.4718 69.6502 12.5117 69.4774 12.4998C69.3589 12.4983 69.2421 12.4754 69.1331 12.4324L68.9846 12.9408C69.1432 12.9973 69.3108 13.0275 69.4802 13.0298C69.7818 13.0168 70.0718 12.914 70.3105 12.7356C70.5499 12.5566 70.7257 12.3103 70.8137 12.0308L70.8156 12.0247L73.1068 7.09987H72.3924ZM74.0655 6.89987H78.7736V13.0999H77.7677V7.83987H75.0714V13.0999H74.0655V6.89987ZM74.2729 7.09987V12.8999H74.864V7.63987H77.9751V12.8999H78.5662V7.09987H74.2729ZM79.987 6.89987H80.9929V9.46987H83.8966V6.89987H84.9025V13.0999H83.8966V10.3899H80.9929V13.0999H79.987V6.89987ZM80.1944 7.09987V12.8999H80.7855V10.1899H84.104V12.8999H84.6951V7.09987H84.104V9.66987H80.7855V7.09987H80.1944ZM51.3434 8.20902C51.8118 7.75923 52.4459 7.5067 53.107 7.5067C53.768 7.5067 54.4021 7.75923 54.8705 8.20902L54.8743 8.2126C55.3346 8.70198 55.5895 9.33914 55.5895 9.99987C55.5895 10.6606 55.3345 11.2977 54.8742 11.7871L54.8706 11.7908C54.4022 12.2406 53.768 12.493 53.107 12.493C52.4459 12.493 51.8118 12.2405 51.3434 11.7907L51.4166 11.7199L51.3398 11.7871C50.8794 11.2977 50.6244 10.6606 50.6244 9.99987C50.6244 9.33914 50.8794 8.70207 51.3398 8.21269L51.3434 8.20902ZM51.4916 11.6508C51.921 12.0621 52.5017 12.293 53.107 12.293C53.7123 12.293 54.293 12.0621 54.7223 11.6508C55.1469 11.1985 55.3821 10.6101 55.3821 9.99987C55.3821 9.38967 55.1469 8.80128 54.7223 8.34895C54.293 7.9376 53.7123 7.7067 53.107 7.7067C52.5017 7.7067 51.921 7.9376 51.4916 8.34895C51.067 8.80128 50.8318 9.38967 50.8318 9.99987C50.8318 10.6101 51.067 11.1985 51.4916 11.6508ZM87.2768 8.20902C87.7452 7.75923 88.3793 7.5067 89.0403 7.5067C89.7013 7.5067 90.3355 7.75923 90.8039 8.20902L90.8076 8.2126C91.268 8.70198 91.5229 9.33914 91.5229 9.99987C91.5229 10.6606 91.2679 11.2977 90.8075 11.7871L90.8039 11.7908C90.3355 12.2406 89.7013 12.493 89.0403 12.493C88.3793 12.493 87.7452 12.2405 87.2768 11.7907L87.3499 11.7199L87.2731 11.7871C86.8128 11.2977 86.5577 10.6606 86.5577 9.99987C86.5577 9.33914 86.8128 8.70207 87.2731 8.21269L87.2768 8.20902ZM87.425 11.6508C87.8543 12.0621 88.435 12.293 89.0403 12.293C89.6456 12.293 90.2263 12.0621 90.6556 11.6508C91.0803 11.1985 91.3155 10.6101 91.3155 9.99987C91.3155 9.38967 91.0803 8.80127 90.6556 8.34893C90.2263 7.9376 89.6456 7.7067 89.0403 7.7067C88.435 7.7067 87.8543 7.9376 87.425 8.34893C87.0003 8.80127 86.7652 9.38967 86.7652 9.99987C86.7652 10.6101 87.0003 11.1985 87.425 11.6508ZM97.8225 7.60987C97.968 7.60591 98.1126 7.63273 98.2461 7.68848C98.3794 7.74411 98.4985 7.8272 98.5949 7.9319C98.6902 8.02681 98.7649 8.13915 98.8144 8.26232C98.8643 8.38625 98.8878 8.51861 98.8835 8.65149C98.8792 8.78436 98.8472 8.91505 98.7894 9.03574C98.7322 9.15506 98.651 9.26219 98.5505 9.3509C98.449 9.45634 98.3251 9.53944 98.1873 9.59451C98.0486 9.64989 97.8992 9.6756 97.7493 9.66987H96.1936L96.2396 7.60987H97.8225ZM98.1637 7.87202C98.0576 7.82773 97.9427 7.8065 97.8271 7.80983L97.824 7.80987H96.4426L96.4055 9.46987H97.7557C97.8763 9.47473 97.9964 9.45426 98.1079 9.40974C98.2193 9.36522 98.3194 9.2978 98.401 9.21218L98.4042 9.20884L98.4077 9.2058C98.4892 9.13453 98.555 9.04817 98.6011 8.95186C98.6472 8.85556 98.6728 8.75128 98.6762 8.64524C98.6797 8.53921 98.6609 8.43359 98.6211 8.33469C98.5813 8.2358 98.5212 8.14564 98.4445 8.06961L98.441 8.06618C98.3645 7.98265 98.2698 7.91631 98.1637 7.87202ZM45.0077 7.63987H47.7351V12.3999H44.3365L44.4316 12.2481C44.8541 11.5739 45.0551 10.7921 45.0079 10.0056L45.0075 9.99987L45.0077 7.63987ZM45.2151 7.83987V9.997C45.2606 10.7645 45.0813 11.5276 44.6996 12.1999H47.5277V7.83987H45.2151ZM96.2285 10.1699H97.907C98.2095 10.1699 98.4997 10.2858 98.7136 10.4921C98.9275 10.6983 99.0477 10.9781 99.0477 11.2699L99.0477 11.2713C99.0436 11.55 98.93 11.8168 98.7298 12.0178C98.6268 12.1295 98.4997 12.2181 98.3573 12.2772C98.2147 12.3364 98.0604 12.3646 97.9053 12.3599H96.1943L96.2285 10.1699ZM96.4328 10.3699L96.4048 12.1599H97.9105C98.0356 12.1639 98.1602 12.1413 98.2753 12.0935C98.3903 12.0458 98.493 11.9741 98.576 11.8836L98.5789 11.8804C98.7433 11.716 98.8368 11.4975 98.8403 11.2691C98.8401 11.0307 98.7418 10.8021 98.5669 10.6335C98.3919 10.4647 98.1545 10.3699 97.907 10.3699H96.4328Z' fill='white'/%3E %3C/g%3E %3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M28.5511 23.9911L33.1851 21.4507C34.6369 20.6507 34.6369 19.3507 33.1851 18.5607L28.5433 16.0173L24.5603 20.0003L28.5511 23.9911ZM23.4997 21.061L11.7103 32.8504C11.7708 32.8584 11.8319 32.8634 11.8935 32.8651C12.2873 32.8761 12.6728 32.754 12.9832 32.52L27.181 24.7423L23.4997 21.061ZM22.439 20.0003L10.5006 31.9387C10.3835 31.6631 10.3306 31.3632 10.3494 31.0607V8.9407C10.3306 8.638 10.3835 8.33795 10.5008 8.06215L22.439 20.0003ZM23.4997 18.9397L27.1776 15.2618L12.9734 7.48054C12.663 7.24655 12.2776 7.12449 11.8837 7.13544C11.8251 7.13708 11.7668 7.14164 11.7091 7.14906L23.4997 18.9397Z' fill='white'/%3E %3Cdefs%3E %3CclipPath id='clip0_249_22493'%3E %3Crect width='140' height='40' fill='white'/%3E %3C/clipPath%3E %3C/defs%3E %3C/svg%3E")
        }
    </style>
    <style type="text/css">
        .ui-icon-google-play-alt {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-google-play-alt {
            width: 140px;
            height: 40px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='140' height='40' viewBox='0 0 140 40' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Cg clip-path='url(%23clip0_249_22493)'%3E %3Cpath d='M134.815 0.8C135.97 0.8 137.078 1.2425 137.895 2.03015C138.711 2.8178 139.17 3.88609 139.17 5V35C139.17 36.1139 138.711 37.1822 137.895 37.9698C137.078 38.7575 135.97 39.2 134.815 39.2H5.18518C4.03002 39.2 2.92217 38.7575 2.10534 37.9698C1.28852 37.1822 0.82963 36.1139 0.82963 35V5C0.82963 3.88609 1.28852 2.8178 2.10534 2.03015C2.92217 1.2425 4.03002 0.8 5.18518 0.8H134.815ZM134.815 0H5.18518C3.80999 0 2.49112 0.526784 1.51871 1.46447C0.546295 2.40215 0 3.67392 0 5V35C0 36.3261 0.546295 37.5979 1.51871 38.5355C2.49112 39.4732 3.80999 40 5.18518 40H134.815C136.19 40 137.509 39.4732 138.481 38.5355C139.454 37.5979 140 36.3261 140 35V5C140 3.67392 139.454 2.40215 138.481 1.46447C137.509 0.526784 136.19 0 134.815 0Z' fill='%239D9390'/%3E %3Cpath d='M70.6637 21.7501C69.7929 21.7541 68.9428 22.0067 68.2207 22.4761C67.4987 22.9455 66.937 23.6106 66.6066 24.3875C66.2762 25.1644 66.1918 26.0183 66.3642 26.8414C66.5366 27.6645 66.958 28.4199 67.5752 29.0123C68.1924 29.6047 68.9778 30.0075 69.8322 30.1699C70.6865 30.3322 71.5717 30.2469 72.3758 29.9247C73.1799 29.6024 73.8671 29.0577 74.3505 28.3592C74.8338 27.6607 75.0918 26.8398 75.0918 26.0001C75.1003 25.4381 74.9914 24.8801 74.7715 24.3595C74.5517 23.8388 74.2255 23.3662 73.8124 22.9696C73.3992 22.5731 72.9075 22.2608 72.3666 22.0512C71.8256 21.8417 71.2465 21.7393 70.6637 21.7501ZM70.6637 28.5801C70.1281 28.6162 69.5937 28.4962 69.1299 28.2355C68.666 27.9748 68.2942 27.5857 68.0628 27.1186C67.8314 26.6514 67.751 26.128 67.8322 25.6163C67.9134 25.1045 68.1523 24.6282 68.518 24.2492C68.8837 23.8701 69.3591 23.6059 69.8825 23.4909C70.406 23.3759 70.9532 23.4154 71.453 23.6042C71.9529 23.7931 72.3823 24.1225 72.6854 24.5498C72.9885 24.9771 73.1512 25.4824 73.1526 26.0001C73.1693 26.3281 73.1177 26.6561 73.0009 26.9645C72.8841 27.273 72.7044 27.5558 72.4724 27.7963C72.2404 28.0368 71.9609 28.23 71.6502 28.3646C71.3396 28.4992 71.0041 28.5725 70.6637 28.5801ZM61.0089 21.7501C60.1376 21.7521 59.2865 22.003 58.5631 22.4712C57.8396 22.9394 57.2763 23.6039 56.9443 24.3806C56.6123 25.1574 56.5265 26.0116 56.6978 26.8354C56.869 27.6591 57.2896 28.4155 57.9064 29.0088C58.5232 29.6022 59.3085 30.006 60.1632 30.1692C61.0178 30.3324 61.9035 30.2476 62.7082 29.9256C63.513 29.6037 64.2007 29.0589 64.6846 28.3602C65.1684 27.6616 65.4266 26.8403 65.4266 26.0001C65.4351 25.4381 65.3262 24.8801 65.1064 24.3595C64.8866 23.8388 64.5604 23.3662 64.1472 22.9696C63.734 22.5731 63.2423 22.2608 62.7014 22.0512C62.1604 21.8417 61.5813 21.7393 60.9985 21.7501H61.0089ZM61.0089 28.5801C60.473 28.6183 59.9377 28.5 59.4726 28.2407C59.0075 27.9814 58.6341 27.593 58.4011 27.1262C58.168 26.6594 58.0861 26.1358 58.166 25.6234C58.2459 25.1111 58.4839 24.6339 58.849 24.2538C59.2141 23.8737 59.6895 23.6085 60.2131 23.4925C60.7367 23.3766 61.2844 23.4154 61.7849 23.6038C62.2854 23.7922 62.7154 24.1216 63.0191 24.549C63.3227 24.9764 63.4859 25.482 63.4874 26.0001C63.5041 26.3281 63.4525 26.6561 63.3357 26.9645C63.2189 27.273 63.0392 27.5558 62.8072 27.7963C62.5753 28.0368 62.2957 28.23 61.9851 28.3646C61.6744 28.4992 61.339 28.5725 60.9985 28.5801H61.0089ZM49.5081 23.0601V24.8601H53.9881C53.9179 25.7079 53.5524 26.5079 52.9511 27.1301C52.5029 27.5704 51.964 27.9152 51.3693 28.1426C50.7745 28.3699 50.137 28.4747 49.4977 28.4501C48.1775 28.4501 46.9114 27.9444 45.9779 27.0442C45.0444 26.1441 44.52 24.9232 44.52 23.6501C44.52 22.3771 45.0444 21.1562 45.9779 20.256C46.9114 19.3558 48.1775 18.8501 49.4977 18.8501C50.7606 18.8303 51.9802 19.2942 52.8888 20.1401L54.2059 18.8701C53.5925 18.2711 52.8606 17.797 52.0536 17.4758C51.2467 17.1546 50.3811 16.9928 49.5081 17.0001C48.5862 16.9655 47.6665 17.1107 46.8042 17.4271C45.9418 17.7434 45.1546 18.2244 44.4896 18.8411C43.8247 19.4579 43.2957 20.1977 42.9343 21.0163C42.573 21.8349 42.3867 22.7154 42.3867 23.6051C42.3867 24.4948 42.573 25.3753 42.9343 26.1939C43.2957 27.0125 43.8247 27.7524 44.4896 28.3691C45.1546 28.9859 45.9418 29.4668 46.8042 29.7832C47.6665 30.0995 48.5862 30.2447 49.5081 30.2101C50.3958 30.2488 51.2817 30.1037 52.1063 29.7846C52.931 29.4655 53.6752 28.9798 54.2888 28.3601C55.3753 27.209 55.9554 25.6959 55.9066 24.1401C55.91 23.7611 55.8752 23.3827 55.8029 23.0101L49.5081 23.0601ZM96.4963 24.4601C96.2258 23.6929 95.7201 23.0229 95.046 22.539C94.3719 22.055 93.5613 21.7799 92.7214 21.7501C92.1542 21.749 91.5927 21.8602 91.0718 22.0767C90.5508 22.2931 90.0814 22.6103 89.6927 23.0087C89.3039 23.407 89.0039 23.878 88.8114 24.3925C88.6189 24.907 88.5378 25.4542 88.5733 26.0001C88.5607 26.559 88.665 27.1147 88.8801 27.6338C89.0952 28.153 89.4166 28.625 89.8251 29.0217C90.2335 29.4184 90.7208 29.7316 91.2576 29.9427C91.7945 30.1538 92.3699 30.2583 92.9496 30.2501C93.675 30.2539 94.3901 30.0841 95.0307 29.756C95.6714 29.4279 96.2177 28.9518 96.6207 28.3701L95.117 27.3701C94.8926 27.7309 94.5748 28.0293 94.1949 28.2362C93.815 28.443 93.3859 28.5512 92.9496 28.5501C92.5004 28.5666 92.0564 28.4524 91.6754 28.2224C91.2944 27.9923 90.994 27.657 90.8133 27.2601L96.714 24.9101L96.4963 24.4601ZM90.4814 25.8801C90.4604 25.5708 90.5036 25.2606 90.6085 24.9676C90.7134 24.6746 90.8778 24.4047 91.0922 24.1737C91.3066 23.9428 91.5667 23.7554 91.8571 23.6225C92.1475 23.4897 92.4625 23.4141 92.7837 23.4001C93.1182 23.3789 93.4518 23.4528 93.7431 23.6128C94.0344 23.7728 94.2705 24.0118 94.4222 24.3001L90.4814 25.8801ZM85.6903 30.0001H87.6296V17.5001H85.6903V30.0001ZM82.517 22.7001H82.4444C82.1521 22.385 81.7941 22.133 81.3938 21.9607C80.9934 21.7884 80.5599 21.6996 80.1214 21.7001C78.9882 21.7531 77.9195 22.2245 77.1368 23.0167C76.3542 23.8089 75.9176 24.861 75.9176 25.9551C75.9176 27.0492 76.3542 28.1014 77.1368 28.8935C77.9195 29.6857 78.9882 30.1571 80.1214 30.2101C80.5609 30.2172 80.9966 30.1314 81.398 29.9586C81.7993 29.7859 82.1565 29.5304 82.4444 29.2101H82.5066V29.8201C82.5066 31.4501 81.6044 32.3201 80.1526 32.3201C79.669 32.3092 79.1998 32.1598 78.8045 31.8909C78.4093 31.622 78.1061 31.2458 77.9333 30.8101L76.2429 31.4901C76.5611 32.2365 77.1033 32.8742 77.7999 33.3214C78.4965 33.7686 79.3157 34.0049 80.1526 34.0001C82.4237 34.0001 84.3007 32.7101 84.3007 29.5701V22.0001H82.517V22.7001ZM80.2977 28.5801C79.6288 28.5233 79.0062 28.2269 78.5527 27.7493C78.0992 27.2717 77.8476 26.6477 77.8476 26.0001C77.8476 25.3526 78.0992 24.7285 78.5527 24.2509C79.0062 23.7734 79.6288 23.477 80.2977 23.4201C80.6294 23.4365 80.9543 23.5168 81.2533 23.6562C81.5523 23.7955 81.8194 23.9912 82.0388 24.2316C82.2581 24.472 82.4254 24.7524 82.5307 25.0561C82.636 25.3598 82.6772 25.6808 82.6518 26.0001C82.6801 26.3208 82.6407 26.6437 82.5358 26.9493C82.431 27.2548 82.263 27.5367 82.042 27.7779C81.821 28.0191 81.5515 28.2145 81.2499 28.3524C80.9483 28.4903 80.6209 28.5678 80.2874 28.5801H80.2977ZM105.581 17.5001H100.945V30.0001H102.884V25.2601H105.591C106.144 25.2984 106.699 25.2265 107.221 25.0488C107.744 24.8712 108.223 24.5916 108.629 24.2276C109.034 23.8636 109.358 23.4229 109.579 22.933C109.8 22.443 109.914 21.9144 109.914 21.3801C109.914 20.8458 109.8 20.3172 109.579 19.8273C109.358 19.3374 109.034 18.8967 108.629 18.5326C108.223 18.1686 107.744 17.889 107.221 17.7114C106.699 17.5337 106.144 17.4618 105.591 17.5001H105.581ZM105.581 23.5001H102.874V19.2401H105.622C106.212 19.2401 106.778 19.4661 107.195 19.8684C107.612 20.2706 107.847 20.8162 107.847 21.3851C107.847 21.954 107.612 22.4996 107.195 22.9019C106.778 23.3041 106.212 23.5301 105.622 23.5301L105.581 23.5001ZM117.538 21.7001C116.832 21.6594 116.129 21.8185 115.515 22.1578C114.902 22.4972 114.404 23.0019 114.084 23.6101L115.806 24.3001C115.976 23.9985 116.233 23.7509 116.546 23.5876C116.859 23.4242 117.214 23.3522 117.569 23.3801C117.815 23.3524 118.064 23.3722 118.303 23.4384C118.541 23.5047 118.763 23.616 118.956 23.7658C119.149 23.9157 119.309 24.1011 119.427 24.3113C119.545 24.5215 119.618 24.7523 119.643 24.9901V25.1201C119.02 24.8021 118.325 24.6372 117.621 24.6401C115.764 24.6401 113.887 25.6401 113.887 27.4501C113.906 27.8361 114.004 28.2145 114.177 28.5632C114.349 28.9118 114.593 29.2235 114.892 29.4799C115.192 29.7363 115.542 29.9321 115.922 30.0558C116.301 30.1795 116.703 30.2286 117.102 30.2001C117.591 30.2339 118.079 30.1404 118.517 29.9292C118.955 29.7181 119.326 29.3971 119.591 29.0001H119.653V30.0001H121.52V25.1901C121.52 23.0001 119.798 21.7301 117.59 21.7301L117.538 21.7001ZM117.299 28.5501C116.667 28.5501 115.785 28.2401 115.785 27.4901C115.785 26.4901 116.884 26.1601 117.859 26.1601C118.475 26.1455 119.084 26.2905 119.622 26.5801C119.557 27.1215 119.292 27.6221 118.874 27.9896C118.457 28.3571 117.916 28.5668 117.351 28.5801L117.299 28.5501ZM128.323 22.0001L126.104 27.4201H126.041L123.739 22.0001H121.665L125.118 29.5801L123.148 33.7901H125.17L130.48 22.0001H128.323ZM110.89 30.0001H112.83V17.5001H110.89V30.0001Z' fill='black'/%3E %3Cpath d='M43.6699 14.2699H42.9025V12.2699H43.5559C43.8538 11.9655 44.0787 11.6017 44.2149 11.2043C44.3511 10.8069 44.3952 10.3855 44.344 9.96987V6.99987H48.4922V12.2599H49.187V14.2599H48.4196V12.9999H43.6699V14.2699ZM45.1114 9.99987C45.1598 10.8065 44.9537 11.6084 44.5203 12.2999H47.6314V7.73987H45.1114V9.99987ZM55.3885 12.2199C54.7822 12.8012 53.962 13.1275 53.107 13.1275C52.252 13.1275 51.4317 12.8012 50.8255 12.2199C50.2362 11.6184 49.9079 10.8223 49.9079 9.99487C49.9079 9.16744 50.2362 8.37135 50.8255 7.76987C51.1243 7.47962 51.4797 7.24925 51.8713 7.09204C52.2629 6.93484 52.6828 6.85391 53.107 6.85391C53.5311 6.85391 53.9511 6.93484 54.3426 7.09204C54.7342 7.24925 55.0896 7.47962 55.3885 7.76987C55.9801 8.3702 56.3099 9.16672 56.3099 9.99487C56.3099 10.823 55.9801 11.6195 55.3885 12.2199ZM51.4166 11.7199C51.8656 12.151 52.4734 12.393 53.107 12.393C53.7406 12.393 54.3484 12.151 54.7973 11.7199C55.2404 11.2489 55.4858 10.6358 55.4858 9.99987C55.4858 9.36398 55.2404 8.75086 54.7973 8.27987C54.3484 7.84875 53.7406 7.6067 53.107 7.6067C52.4734 7.6067 51.8656 7.84875 51.4166 8.27987C50.9735 8.75086 50.7281 9.36398 50.7281 9.99987C50.7281 10.6358 50.9735 11.2489 51.4166 11.7199ZM60.3351 13.1299C59.907 13.1381 59.4816 13.0627 59.0845 12.9081C58.6874 12.7536 58.3269 12.5232 58.0246 12.2308C57.7223 11.9383 57.4845 11.5899 57.3255 11.2065C57.1666 10.8231 57.0897 10.4127 57.0996 9.99987C57.0897 9.58708 57.1666 9.17662 57.3255 8.79323C57.4845 8.40983 57.7223 8.06142 58.0246 7.76899C58.3269 7.47655 58.6874 7.24614 59.0845 7.09162C59.4816 6.9371 59.907 6.86167 60.3351 6.86987C60.769 6.85951 61.1998 6.94411 61.5949 7.11731C61.9901 7.29051 62.3394 7.54781 62.6166 7.86987L62.0566 8.38987C61.8518 8.13912 61.5877 7.93929 61.2864 7.80707C60.9851 7.67485 60.6554 7.61409 60.3248 7.62987C60.0064 7.6219 59.6897 7.67627 59.3939 7.78972C59.098 7.90316 58.829 8.07331 58.6033 8.28987C58.1536 8.76367 57.9043 9.38264 57.9043 10.0249C57.9043 10.6671 58.1536 11.2861 58.6033 11.7599C58.829 11.9764 59.098 12.1466 59.3939 12.26C59.6897 12.3735 60.0064 12.4279 60.3248 12.4199C60.6898 12.4167 61.0495 12.3352 61.3777 12.1813C61.706 12.0273 61.9946 11.8048 62.2225 11.5299L62.7825 12.0699C62.5003 12.4 62.1463 12.6663 61.7455 12.8499C61.3028 13.0432 60.821 13.1389 60.3351 13.1299ZM66.0388 12.9999H65.2403V7.73987H63.4981V6.99987H67.7707V7.73987H66.0388V12.9999ZM73.267 6.99987L70.9129 12.0599C70.8187 12.3592 70.6304 12.6229 70.374 12.8146C70.1177 13.0063 69.8059 13.1164 69.4818 13.1299C69.2674 13.1272 69.0558 13.083 68.8596 12.9999L69.067 12.2899C69.193 12.3606 69.336 12.3986 69.4818 12.3999C69.6342 12.4109 69.7864 12.376 69.9173 12.2999C70.0423 12.1979 70.1386 12.0672 70.1973 11.9199L70.4255 11.4399L68.3514 7.00987H69.2951L70.8299 10.4499L72.3233 6.99987H73.267ZM74.1692 12.9999V6.99987H78.6699V12.9999H77.8714V7.73987H74.9677V12.9999H74.1692ZM80.0907 12.9999V6.99987H80.8892V9.56987H84.0003V6.99987H84.7988V12.9999H84.0003V10.2899H80.8892V12.9999H80.0907ZM91.3218 12.2199C90.7155 12.8012 89.8953 13.1275 89.0403 13.1275C88.1853 13.1275 87.3651 12.8012 86.7588 12.2199C86.1696 11.6184 85.8412 10.8223 85.8412 9.99487C85.8412 9.16744 86.1696 8.37135 86.7588 7.76987C87.0577 7.47962 87.4131 7.24925 87.8046 7.09204C88.1962 6.93484 88.6162 6.85391 89.0403 6.85391C89.4645 6.85391 89.8844 6.93484 90.276 7.09204C90.6675 7.24925 91.023 7.47962 91.3218 7.76987C91.9134 8.3702 92.2433 9.16672 92.2433 9.99487C92.2433 10.823 91.9134 11.6195 91.3218 12.2199ZM87.3499 11.7199C87.7989 12.151 88.4067 12.393 89.0403 12.393C89.6739 12.393 90.2817 12.151 90.7307 11.7199C91.1737 11.2489 91.4192 10.6358 91.4192 9.99987C91.4192 9.36398 91.1737 8.75086 90.7307 8.27987C90.2817 7.84875 89.6739 7.6067 89.0403 7.6067C88.4067 7.6067 87.7989 7.84875 87.3499 8.27987C86.9069 8.75086 86.6614 9.36398 86.6614 9.99987C86.6614 10.6358 86.9069 11.2489 87.3499 11.7199ZM95.501 12.9999V6.99987H97.7514C98.2187 6.99136 98.6715 7.15601 99.0166 7.45987C99.1899 7.60489 99.328 7.78485 99.4212 7.98703C99.5144 8.18921 99.5604 8.40867 99.5559 8.62987C99.5607 8.89644 99.4811 9.15808 99.3277 9.37987C99.1754 9.5953 98.9634 9.7651 98.7159 9.86987C99.0167 9.9659 99.2805 10.1471 99.4729 10.3899C99.6723 10.6349 99.7785 10.9385 99.7736 11.2499C99.7789 11.4804 99.7315 11.7092 99.6347 11.9201C99.5379 12.1309 99.3942 12.3187 99.2136 12.4699C98.8525 12.7911 98.3774 12.9664 97.8862 12.9599L95.501 12.9999ZM96.2996 9.56987H97.7514C97.887 9.57533 98.0222 9.55221 98.1476 9.50213C98.2729 9.45204 98.3855 9.3762 98.4773 9.27987C98.5692 9.19959 98.6433 9.1023 98.6952 8.9938C98.7472 8.8853 98.776 8.76782 98.7799 8.64836C98.7837 8.52891 98.7626 8.40992 98.7178 8.29851C98.6729 8.18709 98.6053 8.08553 98.5188 7.99987C98.4322 7.90535 98.325 7.83037 98.2049 7.78025C98.0848 7.73013 97.9548 7.7061 97.824 7.70987H96.341L96.2996 9.56987ZM96.2996 12.2599H97.907C98.0474 12.2644 98.1872 12.239 98.3163 12.1854C98.4453 12.1318 98.5605 12.0514 98.6536 11.9499C98.8365 11.767 98.9403 11.5239 98.944 11.2699C98.944 11.0047 98.8347 10.7503 98.6403 10.5628C98.4458 10.3752 98.182 10.2699 97.907 10.2699H96.3307L96.2996 12.2599Z' fill='black'/%3E %3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M53.107 6.95391C52.6965 6.95391 52.2901 7.03223 51.9112 7.18436C51.5326 7.33634 51.189 7.55897 50.9 7.83945C50.3295 8.42225 50.0116 9.19339 50.0116 9.99487C50.0116 10.7963 50.3294 11.5673 50.8998 12.1501C51.4865 12.7121 52.2799 13.0275 53.107 13.0275C53.9341 13.0275 54.7276 12.7121 55.3143 12.15C55.8869 11.5683 56.2062 10.7969 56.2062 9.99487C56.2062 9.19272 55.8869 8.4212 55.3141 7.83955C55.025 7.55902 54.6814 7.33636 54.3028 7.18436C53.9238 7.03223 53.5174 6.95391 53.107 6.95391ZM51.8315 6.99973C52.2356 6.83745 52.6691 6.75391 53.107 6.75391C53.5448 6.75391 53.9783 6.83745 54.3825 6.99973C54.7867 7.162 55.1536 7.3998 55.4621 7.69942L55.4637 7.70097C56.0736 8.31989 56.4136 9.14108 56.4136 9.99487C56.4136 10.8487 56.0736 11.6698 55.4636 12.2888L55.4616 12.2908C54.8359 12.8908 53.9894 13.2275 53.107 13.2275C52.2246 13.2275 51.3781 12.8908 50.7524 12.2908L50.7501 12.2886C50.1426 11.6685 49.8042 10.8479 49.8042 9.99487C49.8042 9.1419 50.1427 8.32124 50.7501 7.7012L50.7519 7.6994C51.0603 7.39978 51.4273 7.162 51.8315 6.99973ZM89.0403 6.95391C88.6298 6.95391 88.2234 7.03223 87.8445 7.18436C87.466 7.33633 87.1224 7.55894 86.8334 7.8394C86.2628 8.42221 85.945 9.19337 85.945 9.99487C85.945 10.7963 86.2627 11.5673 86.8331 12.1501C87.4198 12.7121 88.2133 13.0275 89.0403 13.0275C89.8674 13.0275 90.6609 12.712 91.2477 12.1499C91.8203 11.5683 92.1396 10.7969 92.1396 9.99487C92.1396 9.19274 91.8202 8.42123 91.2474 7.83958C90.9584 7.55904 90.6147 7.33636 90.2361 7.18436C89.8572 7.03223 89.4508 6.95391 89.0403 6.95391ZM87.7648 6.99973C88.169 6.83745 88.6025 6.75391 89.0403 6.75391C89.4781 6.75391 89.9116 6.83745 90.3158 6.99973C90.72 7.162 91.0869 7.3998 91.3954 7.69942L91.397 7.70097C92.0069 8.3199 92.347 9.14108 92.347 9.99487C92.347 10.8487 92.0069 11.6698 91.397 12.2888L91.3949 12.2908C90.7693 12.8908 89.9227 13.2275 89.0403 13.2275C88.1579 13.2275 87.3114 12.8908 86.6857 12.2908L86.6834 12.2886C86.0759 11.6685 85.7376 10.8479 85.7376 9.99487C85.7376 9.1419 86.076 8.32124 86.6834 7.7012L86.6852 7.6994C86.9937 7.39978 87.3606 7.162 87.7648 6.99973ZM61.552 7.20835C61.1711 7.0414 60.756 6.95986 60.3377 6.96984L60.3331 6.96995C59.9189 6.96202 59.5074 7.03488 59.1233 7.18435C58.7392 7.33382 58.3905 7.55671 58.098 7.83958C57.8056 8.12246 57.5756 8.45948 57.4218 8.83035C57.268 9.20122 57.1937 9.59826 57.2032 9.99757L57.2034 10.0022C57.1938 10.4015 57.268 10.7985 57.4218 11.1694C57.5756 11.5403 57.8056 11.8773 58.098 12.1602C58.3905 12.443 58.7392 12.6659 59.1233 12.8154C59.5074 12.9649 59.9189 13.0378 60.3331 13.0299L60.3351 13.1299L60.3371 13.0299C60.8072 13.0386 61.2734 12.9461 61.7018 12.7592C62.0602 12.5949 62.3798 12.3621 62.6415 12.0753L62.2293 11.6778C62.0045 11.9252 61.7305 12.127 61.4231 12.2712C61.0812 12.4315 60.7067 12.5165 60.3266 12.5199C59.9945 12.5281 59.6642 12.4713 59.3555 12.353C59.0466 12.2345 58.7658 12.0569 58.5301 11.8308L58.5267 11.8275C58.0596 11.3352 57.8006 10.6921 57.8006 10.0249C57.8006 9.35764 58.0596 8.7146 58.5268 8.22237L58.5301 8.21891C58.7657 7.9928 59.0466 7.81523 59.3555 7.69679C59.6633 7.57881 59.9925 7.52202 60.3235 7.52981C60.6694 7.51391 61.0142 7.57775 61.3294 7.71605C61.611 7.83964 61.8616 8.01949 62.065 8.24324L62.4741 7.86339C62.2177 7.58572 61.9037 7.36248 61.552 7.20835ZM60.3352 13.2299C59.8937 13.2381 59.4551 13.1602 59.0457 13.0009C58.6356 12.8413 58.2633 12.6033 57.9511 12.3014C57.639 11.9994 57.3934 11.6396 57.2292 11.2436C57.0654 10.8484 56.986 10.4254 56.9958 9.99987C56.986 9.57436 57.0654 9.15131 57.2292 8.7561C57.3934 8.36018 57.639 8.00038 57.9511 7.69839C58.2633 7.3964 58.6356 7.15845 59.0457 6.99888C59.4551 6.83959 59.8935 6.76169 60.3349 6.76985C60.7837 6.75947 61.2291 6.84713 61.6378 7.02627C62.0472 7.20572 62.4092 7.47231 62.6964 7.80601L62.7579 7.87748L62.046 8.53853L61.9751 8.45175C61.7805 8.21354 61.5297 8.02369 61.2434 7.89809C60.9572 7.77248 60.644 7.71476 60.3299 7.72975L60.322 7.73012C60.0178 7.7225 59.715 7.7742 59.4322 7.88264C59.1501 7.9908 58.8936 8.15288 58.6781 8.35911C58.247 8.81425 58.008 9.40841 58.008 10.0249C58.008 10.6413 58.247 11.2355 58.6781 11.6906C58.8936 11.8969 59.1501 12.0589 59.4322 12.1671C59.715 12.2756 60.0178 12.3275 60.3221 12.3199L60.3238 12.3199C60.6734 12.3169 61.018 12.2388 61.3324 12.0914C61.6468 11.9439 61.9232 11.7308 62.1415 11.4674L62.2139 11.3801L62.9225 12.0634L62.8625 12.1335C62.5706 12.4749 62.2045 12.7503 61.79 12.9402L61.7883 12.941C61.3322 13.1402 60.8358 13.2389 60.3352 13.2299ZM98.9467 7.53372C98.6212 7.24712 98.1941 7.09183 97.7534 7.09986L97.7514 7.09987H95.6047V12.8981L97.8844 12.8599L97.8877 12.8599C98.3523 12.8661 98.8018 12.7002 99.1433 12.3964L99.1456 12.3943C99.3146 12.2528 99.4493 12.077 99.5399 11.8796C99.6305 11.6822 99.6749 11.4679 99.67 11.2521L99.6699 11.2484C99.6744 10.9599 99.5761 10.6786 99.3913 10.4516L99.3905 10.4506C99.2108 10.2238 98.9643 10.0545 98.6833 9.96481L98.4269 9.88297L98.6742 9.77831C98.9038 9.68115 99.1004 9.52374 99.2417 9.32404C99.3832 9.11925 99.4567 8.87771 99.4522 8.63163V8.62791C99.4564 8.42136 99.4134 8.21644 99.3264 8.02765C99.2394 7.83885 99.1104 7.67081 98.9486 7.5354L98.9467 7.53372ZM99.0856 7.38522C98.7213 7.06482 98.2435 6.89114 97.7505 6.89987H95.3973V13.1016L97.8848 13.0599L97.8864 13.0599C98.4031 13.0664 98.9028 12.8819 99.2828 12.5444C99.4743 12.3837 99.6268 12.1844 99.7295 11.9606C99.8322 11.7368 99.8827 11.4941 99.8774 11.2495L99.8773 11.2514L99.7736 11.2499L99.8773 11.2477L99.8774 11.2495C99.8821 10.9161 99.7683 10.5911 99.5549 10.3286C99.3963 10.1287 99.1922 9.96796 98.9596 9.85808C99.1387 9.74943 99.2934 9.60604 99.4134 9.43619L99.414 9.43536C99.5788 9.19715 99.6644 8.91622 99.6596 8.62995L99.6595 8.63183L99.5559 8.62987L99.6595 8.62811L99.6596 8.62995C99.6641 8.39473 99.6151 8.16141 99.516 7.94642C99.4168 7.73125 99.2699 7.53968 99.0856 7.38522ZM44.2403 6.89987H48.5959V12.1599H49.2907V14.3599H48.3159V13.0999H43.7736V14.3699H42.7988V12.1699H43.5107C43.7832 11.8826 43.9897 11.5429 44.1165 11.1729C44.2479 10.7894 44.2904 10.3828 44.241 9.98166L44.2403 9.97579V6.89987ZM44.4477 7.09987V9.96401C44.4995 10.3923 44.4537 10.8263 44.3134 11.2357C44.1725 11.647 43.9396 12.0235 43.6313 12.3385L43.6006 12.3699H43.0062V14.1699H43.5662V12.8999H48.5233V14.1599H49.0833V12.3599H48.3885V7.09987H44.4477ZM63.3944 6.89987H67.8744V7.83987H66.1425V13.0999H65.1366V7.83987H63.3944V6.89987ZM63.6018 7.09987V7.63987H65.344V12.8999H65.9351V7.63987H67.667V7.09987H63.6018ZM72.2542 6.89987H73.4272L71.0102 12.0951C70.9091 12.4117 70.7091 12.6906 70.4376 12.8936C70.1642 13.098 69.8318 13.2154 69.4862 13.2298L69.4805 13.23C69.2522 13.2272 69.0268 13.18 68.8178 13.0914L68.7353 13.0564L69.0035 12.1385L69.1192 12.2035C69.2296 12.2655 69.3549 12.2987 69.4828 12.2999L69.4896 12.2999C69.6178 12.3093 69.7459 12.2809 69.8567 12.2183C69.9653 12.1279 70.049 12.0131 70.1006 11.884L70.1029 11.8781L70.3116 11.4396L68.1908 6.90987H69.3634L70.8285 10.1936L72.2542 6.89987ZM72.3924 7.09987L70.8314 10.7061L69.2268 7.10987H68.512L70.5394 11.4402L70.2929 11.9588C70.2278 12.1206 70.1217 12.2641 69.9843 12.3762L69.978 12.3814L69.9709 12.3855C69.8225 12.4718 69.6502 12.5117 69.4774 12.4998C69.3589 12.4983 69.2421 12.4754 69.1331 12.4324L68.9846 12.9408C69.1432 12.9973 69.3108 13.0275 69.4802 13.0298C69.7818 13.0168 70.0718 12.914 70.3105 12.7356C70.5499 12.5566 70.7257 12.3103 70.8137 12.0308L70.8156 12.0247L73.1068 7.09987H72.3924ZM74.0655 6.89987H78.7736V13.0999H77.7677V7.83987H75.0714V13.0999H74.0655V6.89987ZM74.2729 7.09987V12.8999H74.864V7.63987H77.9751V12.8999H78.5662V7.09987H74.2729ZM79.987 6.89987H80.9929V9.46987H83.8966V6.89987H84.9025V13.0999H83.8966V10.3899H80.9929V13.0999H79.987V6.89987ZM80.1944 7.09987V12.8999H80.7855V10.1899H84.104V12.8999H84.6951V7.09987H84.104V9.66987H80.7855V7.09987H80.1944ZM51.3434 8.20902C51.8118 7.75923 52.4459 7.5067 53.107 7.5067C53.768 7.5067 54.4021 7.75923 54.8705 8.20902L54.8743 8.2126C55.3346 8.70198 55.5895 9.33914 55.5895 9.99987C55.5895 10.6606 55.3345 11.2977 54.8742 11.7871L54.8706 11.7908C54.4022 12.2406 53.768 12.493 53.107 12.493C52.4459 12.493 51.8118 12.2405 51.3434 11.7907L51.4166 11.7199L51.3398 11.7871C50.8794 11.2977 50.6244 10.6606 50.6244 9.99987C50.6244 9.33914 50.8794 8.70207 51.3398 8.21269L51.3434 8.20902ZM51.4916 11.6508C51.921 12.0621 52.5017 12.293 53.107 12.293C53.7123 12.293 54.293 12.0621 54.7223 11.6508C55.1469 11.1985 55.3821 10.6101 55.3821 9.99987C55.3821 9.38967 55.1469 8.80128 54.7223 8.34895C54.293 7.9376 53.7123 7.7067 53.107 7.7067C52.5017 7.7067 51.921 7.9376 51.4916 8.34895C51.067 8.80128 50.8318 9.38967 50.8318 9.99987C50.8318 10.6101 51.067 11.1985 51.4916 11.6508ZM87.2768 8.20902C87.7452 7.75923 88.3793 7.5067 89.0403 7.5067C89.7013 7.5067 90.3355 7.75923 90.8039 8.20902L90.8076 8.2126C91.268 8.70198 91.5229 9.33914 91.5229 9.99987C91.5229 10.6606 91.2679 11.2977 90.8075 11.7871L90.8039 11.7908C90.3355 12.2406 89.7013 12.493 89.0403 12.493C88.3793 12.493 87.7452 12.2405 87.2768 11.7907L87.3499 11.7199L87.2731 11.7871C86.8128 11.2977 86.5577 10.6606 86.5577 9.99987C86.5577 9.33914 86.8128 8.70207 87.2731 8.21269L87.2768 8.20902ZM87.425 11.6508C87.8543 12.0621 88.435 12.293 89.0403 12.293C89.6456 12.293 90.2263 12.0621 90.6556 11.6508C91.0803 11.1985 91.3155 10.6101 91.3155 9.99987C91.3155 9.38967 91.0803 8.80127 90.6556 8.34893C90.2263 7.9376 89.6456 7.7067 89.0403 7.7067C88.435 7.7067 87.8543 7.9376 87.425 8.34893C87.0003 8.80127 86.7652 9.38967 86.7652 9.99987C86.7652 10.6101 87.0003 11.1985 87.425 11.6508ZM97.8225 7.60987C97.968 7.60591 98.1126 7.63273 98.2461 7.68848C98.3794 7.74411 98.4985 7.8272 98.5949 7.9319C98.6902 8.02681 98.7649 8.13915 98.8144 8.26232C98.8643 8.38625 98.8878 8.51861 98.8835 8.65149C98.8792 8.78436 98.8472 8.91505 98.7894 9.03574C98.7322 9.15506 98.651 9.26219 98.5505 9.3509C98.449 9.45634 98.3251 9.53944 98.1873 9.59451C98.0486 9.64989 97.8992 9.6756 97.7493 9.66987H96.1936L96.2396 7.60987H97.8225ZM98.1637 7.87202C98.0576 7.82773 97.9427 7.8065 97.8271 7.80983L97.824 7.80987H96.4426L96.4055 9.46987H97.7557C97.8763 9.47473 97.9964 9.45426 98.1079 9.40974C98.2193 9.36522 98.3194 9.2978 98.401 9.21218L98.4042 9.20884L98.4077 9.2058C98.4892 9.13453 98.555 9.04817 98.6011 8.95186C98.6472 8.85556 98.6728 8.75128 98.6762 8.64524C98.6797 8.53921 98.6609 8.43359 98.6211 8.33469C98.5813 8.2358 98.5212 8.14564 98.4445 8.06961L98.441 8.06618C98.3645 7.98265 98.2698 7.91631 98.1637 7.87202ZM45.0077 7.63987H47.7351V12.3999H44.3365L44.4316 12.2481C44.8541 11.5739 45.0551 10.7921 45.0079 10.0056L45.0075 9.99987L45.0077 7.63987ZM45.2151 7.83987V9.997C45.2606 10.7645 45.0813 11.5276 44.6996 12.1999H47.5277V7.83987H45.2151ZM96.2285 10.1699H97.907C98.2095 10.1699 98.4997 10.2858 98.7136 10.4921C98.9275 10.6983 99.0477 10.9781 99.0477 11.2699L99.0477 11.2713C99.0436 11.55 98.93 11.8168 98.7298 12.0178C98.6268 12.1295 98.4997 12.2181 98.3573 12.2772C98.2147 12.3364 98.0604 12.3646 97.9053 12.3599H96.1943L96.2285 10.1699ZM96.4328 10.3699L96.4048 12.1599H97.9105C98.0356 12.1639 98.1602 12.1413 98.2753 12.0935C98.3903 12.0458 98.493 11.9741 98.576 11.8836L98.5789 11.8804C98.7433 11.716 98.8368 11.4975 98.8403 11.2691C98.8401 11.0307 98.7418 10.8021 98.5669 10.6335C98.3919 10.4647 98.1545 10.3699 97.907 10.3699H96.4328Z' fill='black'/%3E %3C/g%3E %3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M28.5511 23.9911L33.1851 21.4507C34.6369 20.6507 34.6369 19.3507 33.1851 18.5607L28.5433 16.0173L24.5603 20.0003L28.5511 23.9911ZM23.4997 21.061L11.7103 32.8504C11.7708 32.8584 11.8319 32.8634 11.8935 32.8651C12.2873 32.8761 12.6728 32.754 12.9832 32.52L27.181 24.7423L23.4997 21.061ZM22.439 20.0003L10.5006 31.9387C10.3835 31.6631 10.3306 31.3632 10.3494 31.0607V8.9407C10.3306 8.638 10.3835 8.33795 10.5008 8.06215L22.439 20.0003ZM23.4997 18.9397L27.1776 15.2618L12.9734 7.48054C12.663 7.24655 12.2776 7.12449 11.8837 7.13544C11.8251 7.13708 11.7668 7.14164 11.7091 7.14906L23.4997 18.9397Z' fill='black'/%3E %3Cdefs%3E %3CclipPath id='clip0_249_22493'%3E %3Crect width='140' height='40' fill='black'/%3E %3C/clipPath%3E %3C/defs%3E %3C/svg%3E")
        }
    </style>
    <style type="text/css">
        .ui-qr {
            width: var(--width);
            height: var(--height)
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-app-qr {
            position: relative
        }

        .ui-app-qr__qr-canvas {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 8px;
            background-color: #fff;
            border-radius: 5px
        }

        .ui-app-qr--is-mobile .ui-app-qr__links {
            margin-left: 0
        }

        .ui-app-qr--is-mobile .ui-app-qr__description {
            display: flex;
            align-items: center;
            width: 167px;
            margin-left: 14px;
            padding-top: 3px;
            color: #fff;
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased
        }

        .ui-app-qr--is-mobile .ui-app-qr__description--light {
            color: #000
        }

        .ui-app-qr--view--default {
            position: relative
        }

        .ui-app-qr--view--default .ui-app-qr__wrapper {
            display: flex;
            align-items: stretch
        }

        .ui-app-qr--view--default .ui-app-qr__content {
            margin-right: 24px
        }

        .ui-app-qr--view--default .ui-app-qr__links {
            display: flex;
            flex-direction: column;
            gap: 18px;
            justify-content: space-between
        }

        .ui-app-qr--view--alt {
            position: relative
        }

        .ui-app-qr--view--alt .ui-app-qr__wrapper {
            display: inline-flex;
            flex-direction: column
        }

        .ui-app-qr--view--alt .ui-app-qr__content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%
        }

        .ui-app-qr--view--alt .ui-app-qr__title {
            font-weight: 400;
            font-size: 16px;
            font-family: "akzidenz-extended", sans-serif;
            line-height: 22px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            width: 130px;
            color: #fff
        }

        .ui-app-qr--view--alt .ui-app-qr__links {
            display: flex;
            flex-direction: row-reverse;
            margin-top: 24px
        }

        .ui-app-qr--view--alt .ui-app-qr__link:not(:last-child) {
            margin-left: 18px
        }

        .ui-app-qr__icon {
            width: 140px;
            height: 40px
        }
    </style>
    <style type="text/css">
        @-webkit-keyframes ui-ui-shake {

            from,
            to {
                transform: translate3d(0, 0, 0)
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                transform: translate3d(-10px, 0, 0)
            }

            20%,
            40%,
            60%,
            80% {
                transform: translate3d(10px, 0, 0)
            }
        }

        @keyframes ui-ui-shake {

            from,
            to {
                transform: translate3d(0, 0, 0)
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                transform: translate3d(-10px, 0, 0)
            }

            20%,
            40%,
            60%,
            80% {
                transform: translate3d(10px, 0, 0)
            }
        }

        .ui-code-input {
            display: inline-flex
        }

        .ui-code-input input::-webkit-outer-spin-button,
        .ui-code-input input::-webkit-inner-spin-button {
            margin: 0;
            -webkit-appearance: none
        }

        .ui-code-input input[type=number] {
            -moz-appearance: textfield
        }

        .ui-code-input--error {
            -webkit-animation-name: ui-ui-shake;
            animation-name: ui-ui-shake;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }

        .ui-code-input__item {
            width: 54px
        }

        .ui-code-input__item:not(:last-child) {
            margin-right: 12px
        }
    </style>
    <style type="text/css">
        .ui-icon-right-alt {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-right-alt {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.2 4.5l5.6 5.5-5.6 5.4' stroke='%23000' stroke-width='1.3'/%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        .mando-header-location-boutique {
            display: flex;
            width: 340px;
            color: #fff;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            cursor: pointer
        }

        .mando-header-location-boutique__img {
            display: block;
            width: 80px;
            height: 80px;
            border-radius: 15px
        }

        .mando-header-location-boutique__info {
            margin-left: 20px
        }

        .mando-header-location-boutique__desc {
            margin: 8px 0 15px 0;
            font-weight: lighter;
            line-height: 18px;
            opacity: .6
        }

        .mando-header-location-boutique__button {
            position: relative;
            padding-right: 20px;
            opacity: .8;
            transition: .3s ease
        }

        .mando-header-location-boutique__button:hover {
            opacity: 1
        }

        .mando-header-location-boutique__button:hover::after {
            margin-left: 10px
        }

        .mando-header-location-boutique__button::after {
            position: absolute;
            width: 15px;
            height: 20px;
            margin: 0 0 0 5px;
            background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDIwIDIwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHN0eWxlIHR5cGU9InRleHQvY3NzIj4uc3Qwe2ZpbGw6I0ZGRkZGRjt9LnN0MXtmaWxsLXJ1bGU6ZXZlbm9kZDtjbGlwLXJ1bGU6ZXZlbm9kZDtmaWxsOiNGRkZGRkY7fTwvc3R5bGU+PGc+PHBhdGggY2xhc3M9InN0MCIgZD0iTTEyLjUsNGwtMC45LDAuOWw0LjYsNC42bC00LjYsNC42bDAuOSwwLjlMMTgsOS41TDEyLjUsNEwxMi41LDQiLz48cGF0aCBjbGFzcz0ic3QxIiBkPSJNMyw5aDEzLjN2MUgzVjl6Ii8+PC9nPjwvc3ZnPg==);
            background-repeat: no-repeat;
            background-position: center;
            transition: .3s ease;
            content: ""
        }
    </style>
    <style type="text/css">
        .mando-header-location-foreign-country {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            color: #fff;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif
        }

        .mando-header-location-foreign-country__button {
            margin-top: 40px;
            padding: 3px 20px;
            color: #fff;
            font-weight: 400;
            font-size: 11px;
            line-height: 25px;
            letter-spacing: .1em;
            white-space: nowrap;
            text-align: center;
            text-transform: uppercase;
            text-decoration: none;
            border: 1px solid #ef6f2e;
            border-radius: 18px;
            cursor: pointer;
            transition: opacity .3s ease 0s, background-color .3s ease 0s
        }

        .mando-header-location-foreign-country__button:hover {
            background-color: #ef6f2e
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .hotline[data-v-4079f303] {
            width: 100%;
            text-align: center;
            background-color: transparent
        }

        .hotline__text[data-v-4079f303] {
            font-weight: 400;
            font-size: 16px;
            font-family: "akzidenz-extended", sans-serif;
            line-height: 22px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            padding: 41px 0 48px;
            position: relative
        }

        .hotline__text[data-v-4079f303]::before {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            height: 1px;
            background: var(--dividing-line-footer);
            content: ""
        }

        .hotline__number[data-v-4079f303] {
            color: var(--hotline-number-color);
            font-size: 21px;
            font-family: "Akzidenz-Ext", Helvetica, Arial, sans-serif;
            line-height: 1.43;
            letter-spacing: .2px
        }

        .hotline__number--simple[data-v-4079f303] {
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            font-size: 16px;
            color: inherit
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-product-availability-modal {
            display: flex
        }

        .mando-product-availability-modal__wrapper {
            padding: 24px 24px 0;
            border-radius: 12px 12px 0 0;
            background-color: var(--product-availability-modal-bg-body)
        }

        .mando-product-availability-modal__header {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 12px;
            border-bottom: 1px solid var(--product-availability-modal-divider)
        }

        .mando-product-availability-modal__preview {
            width: 128px;
            height: 128px
        }

        .mando-product-availability-modal__preview img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        .mando-product-availability-modal__title {
            font-weight: 400;
            font-size: 17px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            margin-top: 12px
        }

        .mando-product-availability-modal__body {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 24px 0;
            color: var(--product-availability-modal-secondary)
        }

        .mando-product-availability-modal__body--is-success {
            text-align: center;
            justify-content: center;
            min-height: 312px
        }

        .mando-product-availability-modal__form {
            display: grid;
            justify-items: center;
            text-align: center;
            grid-gap: 12px 0;
            max-width: 330px
        }

        .mando-product-availability-modal__form-submit-button {
            margin-top: 6px
        }

        .mando-product-availability-modal__policy-text {
            text-align: center;
            margin-top: 24px
        }

        .mando-product-availability-modal__policy-text a {
            color: #f37021
        }

        .mando-product-availability-modal__footer {
            display: flex;
            justify-content: center;
            padding: 24px;
            background-color: var(--product-availability-modal-bg-footer);
            border-radius: 0 0 12px 12px
        }

        .mando-product-availability-modal__success-title {
            font-weight: 400;
            font-size: 19px;
            font-family: "helvetica", sans-serif;
            line-height: 25px;
            letter-spacing: .1px;
            -webkit-font-smoothing: antialiased;
            color: var(--product-availability-modal-primary)
        }

        .mando-product-availability-modal__success-text {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            margin-top: 20px;
            max-width: 330px
        }

        .mando-product-availability-modal .ui-button--view--action {
            color: #fff
        }

        .mando-product-availability-modal .ui-button--view--action.ui-is-disabled {
            background-color: rgba(243, 112, 33, .3)
        }

        .mando-product-availability-modal .ui-button--view--action.ui-is-loading {
            color: transparent
        }

        .mando-product-availability-modal .ui-button--view--default {
            color: var(--product-availability-modal-primary)
        }

        .mando-product-availability-modal .ui-input__inner {
            background-color: var(--product-availability-modal-accent)
        }

        .mando-product-availability-modal .ui-input__inner input {
            color: var(--product-availability-modal-primary)
        }

        .mando-product-availability-modal .ui-input__inner input::-moz-placeholder {
            color: var(--product-availability-modal-secondary)
        }

        .mando-product-availability-modal .ui-input__inner input:-ms-input-placeholder {
            color: var(--product-availability-modal-secondary)
        }

        .mando-product-availability-modal .ui-input__inner input::placeholder {
            color: var(--product-availability-modal-secondary)
        }
    </style>
    <style type="text/css">
        .ui-icon-arrow-left {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-arrow-left {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M8.5 15l1-1-4.2-4H18V9H5.3l4-4-.8-1L3 9.5z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        .purchase-product-image {
            border-radius: 12px
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .purchase-product-dialog {
            position: relative
        }

        .purchase-product-dialog__close {
            position: absolute;
            top: 24px;
            right: 24px;
            opacity: .5
        }

        .purchase-product-dialog__header {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 24px 24px 12px
        }

        .purchase-product-dialog__img {
            max-width: 128px;
            max-height: 128px;
            margin-bottom: 12px
        }

        @media screen and (max-width: 768px) {
            .purchase-product-dialog__img {
                max-width: 94px;
                max-height: 94px
            }
        }

        .purchase-product-dialog__info {
            display: block;
            text-align: center
        }

        .purchase-product-dialog__title {
            font-weight: 400;
            font-size: 17px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            color: #fff
        }

        .purchase-product-dialog__title-alt {
            font-weight: 400;
            font-size: 22px;
            font-family: "akzidenz-extended", sans-serif;
            line-height: 30px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #fff
        }

        .purchase-product-dialog__subtitle {
            margin-top: 15px;
            color: #fff
        }

        .purchase-product-dialog__separator {
            width: calc(100% - 24px * 2);
            margin: auto
        }

        .purchase-product-dialog__body {
            transition: height .3s ease
        }

        .purchase-product-dialog__footer {
            padding: 20px 24px;
            background-color: rgba(0, 0, 0, .5);
            border-radius: 0 0 12px 12px
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .purchase-personal-data {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            display: flex;
            justify-content: center
        }

        .purchase-personal-data__inner {
            width: 520px;
            text-align: center
        }

        @media screen and (max-width: 768px) {
            .purchase-personal-data__inner {
                width: 303px
            }
        }

        .purchase-personal-data__description {
            display: inline;
            color: rgba(255, 255, 255, .3);
            text-align: center
        }

        .purchase-personal-data__link {
            display: inline;
            color: #f37021;
            text-align: center
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .purchase-success-message {
            display: inline-block;
            text-align: center
        }

        .purchase-success-message__title {
            font-weight: 400;
            font-size: 19px;
            font-family: "helvetica", sans-serif;
            line-height: 25px;
            letter-spacing: .1px;
            -webkit-font-smoothing: antialiased;
            position: relative;
            margin-bottom: 20px;
            color: #fff
        }

        .purchase-success-message__info {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            max-width: 330px;
            color: rgba(255, 255, 255, .3)
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-product-one-click-modal {
            position: relative
        }

        .mando-product-one-click-modal__body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 295px;
            padding: 24px 10px
        }

        @media screen and (max-width: 768px) {
            .mando-product-one-click-modal__body {
                min-height: 260px
            }
        }

        .mando-product-one-click-modal__field {
            margin: 0 0 12px
        }

        .mando-product-one-click-modal__description {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            max-width: 330px;
            margin-bottom: 12px;
            color: rgba(255, 255, 255, .3);
            text-align: center
        }

        .mando-product-one-click-modal__footer {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .mando-product-one-click-modal__button {
            position: relative
        }

        .mando-product-one-click-modal__button--kind--send {
            margin-bottom: 24px
        }

        .mando-product-one-click-modal__button--kind--back {
            margin: auto
        }
    </style>
    <style type="text/css">
        [class*=purchase-] {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased
        }

        @supports not selector(::-webkit-scrollbar) {
            [class*=purchase-] * {
                scrollbar-width: thin;
                scrollbar-color: #e0dcda #3a3330
            }
        }

        [class*=purchase-]::-webkit-scrollbar {
            width: 11px
        }

        [class*=purchase-]::-webkit-scrollbar-track {
            border-radius: 9999px
        }

        [class*=purchase-]::-webkit-scrollbar-thumb {
            background-color: #e0dcda;
            background-clip: padding-box;
            border: 4px solid rgba(0, 0, 0, 0);
            border-radius: 9999px
        }

        [class*=purchase-][v-cloak] {
            display: none
        }

        [class*=purchase-] .el-loading-mask {
            overflow: hidden;
            background-color: #3a3330 !important;
            border-radius: 12px;
            transition: none
        }

        [class*=purchase-] .el-loading-spinner {
            position: relative;
            margin-top: auto;
            opacity: 1;
            transition: opacity .3s
        }

        [class*=purchase-] .el-loading-spinner::before {
            position: absolute;
            top: -50%;
            right: -50%;
            bottom: -50%;
            left: -50%;
            z-index: 100;
            display: inline-block;
            width: 95px;
            height: 95px;
            margin: auto;
            background-image: url("//st.bork.ru/images/preloader/square2.svg");
            background-repeat: no-repeat;
            background-position: left center;
            background-size: auto 100%;
            animation: preloader-square 1s steps(11) infinite;
            content: ""
        }

        [class*=purchase-] .el-loading-spinner * {
            display: none
        }

        @keyframes preloader-square {
            100% {
                background-position-x: calc(95px * 11 * -1)
            }
        }

        [class*=purchase-] .el-loading-fade-leave-active {
            transition: opacity .3s
        }

        [class*=purchase-] .el-loading-fade-leave-active .el-loading-spinner {
            display: none
        }

        [class*=purchase-][class*=el-loading-parent]>:not(.el-loading-mask) {
            opacity: 0
        }
    </style>
    <style type="text/css">
        @supports(-webkit-appearance: -apple-pay-button) {
            .apple-pay-button {
                display: inline-block;
                box-sizing: border-box;
                width: 270px;
                height: 45px;
                padding: 0;
                background-repeat: no-repeat;
                background-position: 50% 50%;
                background-size: 100% 60%;
                border-radius: 5px;
                -webkit-appearance: -apple-pay-button;
                -apple-pay-button-type: buy;
                -apple-pay-button-style: #fff
            }

            .apple-pay-button--set-up {
                -apple-pay-button-type: set-up
            }

            .apple-pay-button-black {
                -apple-pay-button-style: #000;
                color: #fff;
                background-color: #000;
                background-image: -webkit-named-image(apple-pay-logo-white)
            }

            .apple-pay-button-white {
                -apple-pay-button-style: #fff;
                background-color: #fff;
                background-image: -webkit-named-image(apple-pay-logo-black)
            }

            .apple-pay-button-white-with-line {
                -apple-pay-button-style: white-outline
            }
        }

        @supports not (-webkit-appearance: -apple-pay-button) {
            .apple-pay-button {
                display: none !important
            }
        }
    </style>
    <style type="text/css">
        .el-fade-in-enter,
        .el-fade-in-leave-active,
        .el-fade-in-linear-enter,
        .el-fade-in-linear-leave,
        .el-fade-in-linear-leave-active,
        .fade-in-linear-enter,
        .fade-in-linear-leave,
        .fade-in-linear-leave-active {
            opacity: 0
        }

        .fade-in-linear-enter-active,
        .fade-in-linear-leave-active {
            -webkit-transition: opacity .2s linear;
            transition: opacity .2s linear
        }

        .el-fade-in-linear-enter-active,
        .el-fade-in-linear-leave-active {
            -webkit-transition: opacity .2s linear;
            transition: opacity .2s linear
        }

        .el-fade-in-enter-active,
        .el-fade-in-leave-active {
            -webkit-transition: all .3s cubic-bezier(.55, 0, .1, 1);
            transition: all .3s cubic-bezier(.55, 0, .1, 1)
        }

        .el-zoom-in-center-enter-active,
        .el-zoom-in-center-leave-active {
            -webkit-transition: all .3s cubic-bezier(.55, 0, .1, 1);
            transition: all .3s cubic-bezier(.55, 0, .1, 1)
        }

        .el-zoom-in-center-enter,
        .el-zoom-in-center-leave-active {
            opacity: 0;
            -webkit-transform: scaleX(0);
            transform: scaleX(0)
        }

        .el-zoom-in-top-enter-active,
        .el-zoom-in-top-leave-active {
            opacity: 1;
            -webkit-transform: scaleY(1);
            transform: scaleY(1);
            -webkit-transition: opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            transition: opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            transition: transform .3s cubic-bezier(.23, 1, .32, 1), opacity .3s cubic-bezier(.23, 1, .32, 1);
            transition: transform .3s cubic-bezier(.23, 1, .32, 1), opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            -webkit-transform-origin: center top;
            transform-origin: center top
        }

        .el-zoom-in-top-enter,
        .el-zoom-in-top-leave-active {
            opacity: 0;
            -webkit-transform: scaleY(0);
            transform: scaleY(0)
        }

        .el-zoom-in-bottom-enter-active,
        .el-zoom-in-bottom-leave-active {
            opacity: 1;
            -webkit-transform: scaleY(1);
            transform: scaleY(1);
            -webkit-transition: opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            transition: opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            transition: transform .3s cubic-bezier(.23, 1, .32, 1), opacity .3s cubic-bezier(.23, 1, .32, 1);
            transition: transform .3s cubic-bezier(.23, 1, .32, 1), opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom
        }

        .el-zoom-in-bottom-enter,
        .el-zoom-in-bottom-leave-active {
            opacity: 0;
            -webkit-transform: scaleY(0);
            transform: scaleY(0)
        }

        .el-zoom-in-left-enter-active,
        .el-zoom-in-left-leave-active {
            opacity: 1;
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            -webkit-transition: opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            transition: opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            transition: transform .3s cubic-bezier(.23, 1, .32, 1), opacity .3s cubic-bezier(.23, 1, .32, 1);
            transition: transform .3s cubic-bezier(.23, 1, .32, 1), opacity .3s cubic-bezier(.23, 1, .32, 1), -webkit-transform .3s cubic-bezier(.23, 1, .32, 1);
            -webkit-transform-origin: top left;
            transform-origin: top left
        }

        .el-zoom-in-left-enter,
        .el-zoom-in-left-leave-active {
            opacity: 0;
            -webkit-transform: scale(.45, .45);
            transform: scale(.45, .45)
        }

        .collapse-transition {
            -webkit-transition: .3s height ease-in-out, .3s padding-top ease-in-out, .3s padding-bottom ease-in-out;
            transition: .3s height ease-in-out, .3s padding-top ease-in-out, .3s padding-bottom ease-in-out
        }

        .horizontal-collapse-transition {
            -webkit-transition: .3s width ease-in-out, .3s padding-left ease-in-out, .3s padding-right ease-in-out;
            transition: .3s width ease-in-out, .3s padding-left ease-in-out, .3s padding-right ease-in-out
        }

        .el-list-enter-active,
        .el-list-leave-active {
            -webkit-transition: all 1s;
            transition: all 1s
        }

        .el-list-enter,
        .el-list-leave-active {
            opacity: 0;
            -webkit-transform: translateY(-30px);
            transform: translateY(-30px)
        }

        .el-opacity-transition {
            -webkit-transition: opacity .3s cubic-bezier(.55, 0, .1, 1);
            transition: opacity .3s cubic-bezier(.55, 0, .1, 1)
        }

        @font-face {
            font-family: element-icons;
            src: url(_nuxtfonts/313f7da.woff) format("woff"), url(_nuxtfonts/4520188.ttf) format("truetype");
            font-weight: 400;
            font-display: "auto";
            font-style: normal
        }

        [class*=" el-icon-"],
        [class^=el-icon-] {
            font-family: element-icons !important;
            speak: none;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            vertical-align: baseline;
            display: inline-block;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .el-icon-ice-cream-round:before {
            content: "\e6a0"
        }

        .el-icon-ice-cream-square:before {
            content: "\e6a3"
        }

        .el-icon-lollipop:before {
            content: "\e6a4"
        }

        .el-icon-potato-strips:before {
            content: "\e6a5"
        }

        .el-icon-milk-tea:before {
            content: "\e6a6"
        }

        .el-icon-ice-drink:before {
            content: "\e6a7"
        }

        .el-icon-ice-tea:before {
            content: "\e6a9"
        }

        .el-icon-coffee:before {
            content: "\e6aa"
        }

        .el-icon-orange:before {
            content: "\e6ab"
        }

        .el-icon-pear:before {
            content: "\e6ac"
        }

        .el-icon-apple:before {
            content: "\e6ad"
        }

        .el-icon-cherry:before {
            content: "\e6ae"
        }

        .el-icon-watermelon:before {
            content: "\e6af"
        }

        .el-icon-grape:before {
            content: "\e6b0"
        }

        .el-icon-refrigerator:before {
            content: "\e6b1"
        }

        .el-icon-goblet-square-full:before {
            content: "\e6b2"
        }

        .el-icon-goblet-square:before {
            content: "\e6b3"
        }

        .el-icon-goblet-full:before {
            content: "\e6b4"
        }

        .el-icon-goblet:before {
            content: "\e6b5"
        }

        .el-icon-cold-drink:before {
            content: "\e6b6"
        }

        .el-icon-coffee-cup:before {
            content: "\e6b8"
        }

        .el-icon-water-cup:before {
            content: "\e6b9"
        }

        .el-icon-hot-water:before {
            content: "\e6ba"
        }

        .el-icon-ice-cream:before {
            content: "\e6bb"
        }

        .el-icon-dessert:before {
            content: "\e6bc"
        }

        .el-icon-sugar:before {
            content: "\e6bd"
        }

        .el-icon-tableware:before {
            content: "\e6be"
        }

        .el-icon-burger:before {
            content: "\e6bf"
        }

        .el-icon-knife-fork:before {
            content: "\e6c1"
        }

        .el-icon-fork-spoon:before {
            content: "\e6c2"
        }

        .el-icon-chicken:before {
            content: "\e6c3"
        }

        .el-icon-food:before {
            content: "\e6c4"
        }

        .el-icon-dish-1:before {
            content: "\e6c5"
        }

        .el-icon-dish:before {
            content: "\e6c6"
        }

        .el-icon-moon-night:before {
            content: "\e6ee"
        }

        .el-icon-moon:before {
            content: "\e6f0"
        }

        .el-icon-cloudy-and-sunny:before {
            content: "\e6f1"
        }

        .el-icon-partly-cloudy:before {
            content: "\e6f2"
        }

        .el-icon-cloudy:before {
            content: "\e6f3"
        }

        .el-icon-sunny:before {
            content: "\e6f6"
        }

        .el-icon-sunset:before {
            content: "\e6f7"
        }

        .el-icon-sunrise-1:before {
            content: "\e6f8"
        }

        .el-icon-sunrise:before {
            content: "\e6f9"
        }

        .el-icon-heavy-rain:before {
            content: "\e6fa"
        }

        .el-icon-lightning:before {
            content: "\e6fb"
        }

        .el-icon-light-rain:before {
            content: "\e6fc"
        }

        .el-icon-wind-power:before {
            content: "\e6fd"
        }

        .el-icon-baseball:before {
            content: "\e712"
        }

        .el-icon-soccer:before {
            content: "\e713"
        }

        .el-icon-football:before {
            content: "\e715"
        }

        .el-icon-basketball:before {
            content: "\e716"
        }

        .el-icon-ship:before {
            content: "\e73f"
        }

        .el-icon-truck:before {
            content: "\e740"
        }

        .el-icon-bicycle:before {
            content: "\e741"
        }

        .el-icon-mobile-phone:before {
            content: "\e6d3"
        }

        .el-icon-service:before {
            content: "\e6d4"
        }

        .el-icon-key:before {
            content: "\e6e2"
        }

        .el-icon-unlock:before {
            content: "\e6e4"
        }

        .el-icon-lock:before {
            content: "\e6e5"
        }

        .el-icon-watch:before {
            content: "\e6fe"
        }

        .el-icon-watch-1:before {
            content: "\e6ff"
        }

        .el-icon-timer:before {
            content: "\e702"
        }

        .el-icon-alarm-clock:before {
            content: "\e703"
        }

        .el-icon-map-location:before {
            content: "\e704"
        }

        .el-icon-delete-location:before {
            content: "\e705"
        }

        .el-icon-add-location:before {
            content: "\e706"
        }

        .el-icon-location-information:before {
            content: "\e707"
        }

        .el-icon-location-outline:before {
            content: "\e708"
        }

        .el-icon-location:before {
            content: "\e79e"
        }

        .el-icon-place:before {
            content: "\e709"
        }

        .el-icon-discover:before {
            content: "\e70a"
        }

        .el-icon-first-aid-kit:before {
            content: "\e70b"
        }

        .el-icon-trophy-1:before {
            content: "\e70c"
        }

        .el-icon-trophy:before {
            content: "\e70d"
        }

        .el-icon-medal:before {
            content: "\e70e"
        }

        .el-icon-medal-1:before {
            content: "\e70f"
        }

        .el-icon-stopwatch:before {
            content: "\e710"
        }

        .el-icon-mic:before {
            content: "\e711"
        }

        .el-icon-copy-document:before {
            content: "\e718"
        }

        .el-icon-full-screen:before {
            content: "\e719"
        }

        .el-icon-switch-button:before {
            content: "\e71b"
        }

        .el-icon-aim:before {
            content: "\e71c"
        }

        .el-icon-crop:before {
            content: "\e71d"
        }

        .el-icon-odometer:before {
            content: "\e71e"
        }

        .el-icon-time:before {
            content: "\e71f"
        }

        .el-icon-bangzhu:before {
            content: "\e724"
        }

        .el-icon-close-notification:before {
            content: "\e726"
        }

        .el-icon-microphone:before {
            content: "\e727"
        }

        .el-icon-turn-off-microphone:before {
            content: "\e728"
        }

        .el-icon-position:before {
            content: "\e729"
        }

        .el-icon-postcard:before {
            content: "\e72a"
        }

        .el-icon-message:before {
            content: "\e72b"
        }

        .el-icon-chat-line-square:before {
            content: "\e72d"
        }

        .el-icon-chat-dot-square:before {
            content: "\e72e"
        }

        .el-icon-chat-dot-round:before {
            content: "\e72f"
        }

        .el-icon-chat-square:before {
            content: "\e730"
        }

        .el-icon-chat-line-round:before {
            content: "\e731"
        }

        .el-icon-chat-round:before {
            content: "\e732"
        }

        .el-icon-set-up:before {
            content: "\e733"
        }

        .el-icon-turn-off:before {
            content: "\e734"
        }

        .el-icon-open:before {
            content: "\e735"
        }

        .el-icon-connection:before {
            content: "\e736"
        }

        .el-icon-link:before {
            content: "\e737"
        }

        .el-icon-cpu:before {
            content: "\e738"
        }

        .el-icon-thumb:before {
            content: "\e739"
        }

        .el-icon-female:before {
            content: "\e73a"
        }

        .el-icon-male:before {
            content: "\e73b"
        }

        .el-icon-guide:before {
            content: "\e73c"
        }

        .el-icon-news:before {
            content: "\e73e"
        }

        .el-icon-price-tag:before {
            content: "\e744"
        }

        .el-icon-discount:before {
            content: "\e745"
        }

        .el-icon-wallet:before {
            content: "\e747"
        }

        .el-icon-coin:before {
            content: "\e748"
        }

        .el-icon-money:before {
            content: "\e749"
        }

        .el-icon-bank-card:before {
            content: "\e74a"
        }

        .el-icon-box:before {
            content: "\e74b"
        }

        .el-icon-present:before {
            content: "\e74c"
        }

        .el-icon-sell:before {
            content: "\e6d5"
        }

        .el-icon-sold-out:before {
            content: "\e6d6"
        }

        .el-icon-shopping-bag-2:before {
            content: "\e74d"
        }

        .el-icon-shopping-bag-1:before {
            content: "\e74e"
        }

        .el-icon-shopping-cart-2:before {
            content: "\e74f"
        }

        .el-icon-shopping-cart-1:before {
            content: "\e750"
        }

        .el-icon-shopping-cart-full:before {
            content: "\e751"
        }

        .el-icon-smoking:before {
            content: "\e752"
        }

        .el-icon-no-smoking:before {
            content: "\e753"
        }

        .el-icon-house:before {
            content: "\e754"
        }

        .el-icon-table-lamp:before {
            content: "\e755"
        }

        .el-icon-school:before {
            content: "\e756"
        }

        .el-icon-office-building:before {
            content: "\e757"
        }

        .el-icon-toilet-paper:before {
            content: "\e758"
        }

        .el-icon-notebook-2:before {
            content: "\e759"
        }

        .el-icon-notebook-1:before {
            content: "\e75a"
        }

        .el-icon-files:before {
            content: "\e75b"
        }

        .el-icon-collection:before {
            content: "\e75c"
        }

        .el-icon-receiving:before {
            content: "\e75d"
        }

        .el-icon-suitcase-1:before {
            content: "\e760"
        }

        .el-icon-suitcase:before {
            content: "\e761"
        }

        .el-icon-film:before {
            content: "\e763"
        }

        .el-icon-collection-tag:before {
            content: "\e765"
        }

        .el-icon-data-analysis:before {
            content: "\e766"
        }

        .el-icon-pie-chart:before {
            content: "\e767"
        }

        .el-icon-data-board:before {
            content: "\e768"
        }

        .el-icon-data-line:before {
            content: "\e76d"
        }

        .el-icon-reading:before {
            content: "\e769"
        }

        .el-icon-magic-stick:before {
            content: "\e76a"
        }

        .el-icon-coordinate:before {
            content: "\e76b"
        }

        .el-icon-mouse:before {
            content: "\e76c"
        }

        .el-icon-brush:before {
            content: "\e76e"
        }

        .el-icon-headset:before {
            content: "\e76f"
        }

        .el-icon-umbrella:before {
            content: "\e770"
        }

        .el-icon-scissors:before {
            content: "\e771"
        }

        .el-icon-mobile:before {
            content: "\e773"
        }

        .el-icon-attract:before {
            content: "\e774"
        }

        .el-icon-monitor:before {
            content: "\e775"
        }

        .el-icon-search:before {
            content: "\e778"
        }

        .el-icon-takeaway-box:before {
            content: "\e77a"
        }

        .el-icon-paperclip:before {
            content: "\e77d"
        }

        .el-icon-printer:before {
            content: "\e77e"
        }

        .el-icon-document-add:before {
            content: "\e782"
        }

        .el-icon-document:before {
            content: "\e785"
        }

        .el-icon-document-checked:before {
            content: "\e786"
        }

        .el-icon-document-copy:before {
            content: "\e787"
        }

        .el-icon-document-delete:before {
            content: "\e788"
        }

        .el-icon-document-remove:before {
            content: "\e789"
        }

        .el-icon-tickets:before {
            content: "\e78b"
        }

        .el-icon-folder-checked:before {
            content: "\e77f"
        }

        .el-icon-folder-delete:before {
            content: "\e780"
        }

        .el-icon-folder-remove:before {
            content: "\e781"
        }

        .el-icon-folder-add:before {
            content: "\e783"
        }

        .el-icon-folder-opened:before {
            content: "\e784"
        }

        .el-icon-folder:before {
            content: "\e78a"
        }

        .el-icon-edit-outline:before {
            content: "\e764"
        }

        .el-icon-edit:before {
            content: "\e78c"
        }

        .el-icon-date:before {
            content: "\e78e"
        }

        .el-icon-c-scale-to-original:before {
            content: "\e7c6"
        }

        .el-icon-view:before {
            content: "\e6ce"
        }

        .el-icon-loading:before {
            content: "\e6cf"
        }

        .el-icon-rank:before {
            content: "\e6d1"
        }

        .el-icon-sort-down:before {
            content: "\e7c4"
        }

        .el-icon-sort-up:before {
            content: "\e7c5"
        }

        .el-icon-sort:before {
            content: "\e6d2"
        }

        .el-icon-finished:before {
            content: "\e6cd"
        }

        .el-icon-refresh-left:before {
            content: "\e6c7"
        }

        .el-icon-refresh-right:before {
            content: "\e6c8"
        }

        .el-icon-refresh:before {
            content: "\e6d0"
        }

        .el-icon-video-play:before {
            content: "\e7c0"
        }

        .el-icon-video-pause:before {
            content: "\e7c1"
        }

        .el-icon-d-arrow-right:before {
            content: "\e6dc"
        }

        .el-icon-d-arrow-left:before {
            content: "\e6dd"
        }

        .el-icon-arrow-up:before {
            content: "\e6e1"
        }

        .el-icon-arrow-down:before {
            content: "\e6df"
        }

        .el-icon-arrow-right:before {
            content: "\e6e0"
        }

        .el-icon-arrow-left:before {
            content: "\e6de"
        }

        .el-icon-top-right:before {
            content: "\e6e7"
        }

        .el-icon-top-left:before {
            content: "\e6e8"
        }

        .el-icon-top:before {
            content: "\e6e6"
        }

        .el-icon-bottom:before {
            content: "\e6eb"
        }

        .el-icon-right:before {
            content: "\e6e9"
        }

        .el-icon-back:before {
            content: "\e6ea"
        }

        .el-icon-bottom-right:before {
            content: "\e6ec"
        }

        .el-icon-bottom-left:before {
            content: "\e6ed"
        }

        .el-icon-caret-top:before {
            content: "\e78f"
        }

        .el-icon-caret-bottom:before {
            content: "\e790"
        }

        .el-icon-caret-right:before {
            content: "\e791"
        }

        .el-icon-caret-left:before {
            content: "\e792"
        }

        .el-icon-d-caret:before {
            content: "\e79a"
        }

        .el-icon-share:before {
            content: "\e793"
        }

        .el-icon-menu:before {
            content: "\e798"
        }

        .el-icon-s-grid:before {
            content: "\e7a6"
        }

        .el-icon-s-check:before {
            content: "\e7a7"
        }

        .el-icon-s-data:before {
            content: "\e7a8"
        }

        .el-icon-s-opportunity:before {
            content: "\e7aa"
        }

        .el-icon-s-custom:before {
            content: "\e7ab"
        }

        .el-icon-s-claim:before {
            content: "\e7ad"
        }

        .el-icon-s-finance:before {
            content: "\e7ae"
        }

        .el-icon-s-comment:before {
            content: "\e7af"
        }

        .el-icon-s-flag:before {
            content: "\e7b0"
        }

        .el-icon-s-marketing:before {
            content: "\e7b1"
        }

        .el-icon-s-shop:before {
            content: "\e7b4"
        }

        .el-icon-s-open:before {
            content: "\e7b5"
        }

        .el-icon-s-management:before {
            content: "\e7b6"
        }

        .el-icon-s-ticket:before {
            content: "\e7b7"
        }

        .el-icon-s-release:before {
            content: "\e7b8"
        }

        .el-icon-s-home:before {
            content: "\e7b9"
        }

        .el-icon-s-promotion:before {
            content: "\e7ba"
        }

        .el-icon-s-operation:before {
            content: "\e7bb"
        }

        .el-icon-s-unfold:before {
            content: "\e7bc"
        }

        .el-icon-s-fold:before {
            content: "\e7a9"
        }

        .el-icon-s-platform:before {
            content: "\e7bd"
        }

        .el-icon-s-order:before {
            content: "\e7be"
        }

        .el-icon-s-cooperation:before {
            content: "\e7bf"
        }

        .el-icon-bell:before {
            content: "\e725"
        }

        .el-icon-message-solid:before {
            content: "\e799"
        }

        .el-icon-video-camera:before {
            content: "\e772"
        }

        .el-icon-video-camera-solid:before {
            content: "\e796"
        }

        .el-icon-camera:before {
            content: "\e779"
        }

        .el-icon-camera-solid:before {
            content: "\e79b"
        }

        .el-icon-download:before {
            content: "\e77c"
        }

        .el-icon-upload2:before {
            content: "\e77b"
        }

        .el-icon-upload:before {
            content: "\e7c3"
        }

        .el-icon-picture-outline-round:before {
            content: "\e75f"
        }

        .el-icon-picture-outline:before {
            content: "\e75e"
        }

        .el-icon-picture:before {
            content: "\e79f"
        }

        .el-icon-close:before {
            content: "\e6db"
        }

        .el-icon-check:before {
            content: "\e6da"
        }

        .el-icon-plus:before {
            content: "\e6d9"
        }

        .el-icon-minus:before {
            content: "\e6d8"
        }

        .el-icon-help:before {
            content: "\e73d"
        }

        .el-icon-s-help:before {
            content: "\e7b3"
        }

        .el-icon-circle-close:before {
            content: "\e78d"
        }

        .el-icon-circle-check:before {
            content: "\e720"
        }

        .el-icon-circle-plus-outline:before {
            content: "\e723"
        }

        .el-icon-remove-outline:before {
            content: "\e722"
        }

        .el-icon-zoom-out:before {
            content: "\e776"
        }

        .el-icon-zoom-in:before {
            content: "\e777"
        }

        .el-icon-error:before {
            content: "\e79d"
        }

        .el-icon-success:before {
            content: "\e79c"
        }

        .el-icon-circle-plus:before {
            content: "\e7a0"
        }

        .el-icon-remove:before {
            content: "\e7a2"
        }

        .el-icon-info:before {
            content: "\e7a1"
        }

        .el-icon-question:before {
            content: "\e7a4"
        }

        .el-icon-warning-outline:before {
            content: "\e6c9"
        }

        .el-icon-warning:before {
            content: "\e7a3"
        }

        .el-icon-goods:before {
            content: "\e7c2"
        }

        .el-icon-s-goods:before {
            content: "\e7b2"
        }

        .el-icon-star-off:before {
            content: "\e717"
        }

        .el-icon-star-on:before {
            content: "\e797"
        }

        .el-icon-more-outline:before {
            content: "\e6cc"
        }

        .el-icon-more:before {
            content: "\e794"
        }

        .el-icon-phone-outline:before {
            content: "\e6cb"
        }

        .el-icon-phone:before {
            content: "\e795"
        }

        .el-icon-user:before {
            content: "\e6e3"
        }

        .el-icon-user-solid:before {
            content: "\e7a5"
        }

        .el-icon-setting:before {
            content: "\e6ca"
        }

        .el-icon-s-tools:before {
            content: "\e7ac"
        }

        .el-icon-delete:before {
            content: "\e6d7"
        }

        .el-icon-delete-solid:before {
            content: "\e7c9"
        }

        .el-icon-eleme:before {
            content: "\e7c7"
        }

        .el-icon-platform-eleme:before {
            content: "\e7ca"
        }

        .el-icon-loading {
            -webkit-animation: rotating 2s linear infinite;
            animation: rotating 2s linear infinite
        }

        .el-icon--right {
            margin-left: 5px
        }

        .el-icon--left {
            margin-right: 5px
        }

        @-webkit-keyframes rotating {
            0% {
                -webkit-transform: rotateZ(0);
                transform: rotateZ(0)
            }

            100% {
                -webkit-transform: rotateZ(360deg);
                transform: rotateZ(360deg)
            }
        }

        @keyframes rotating {
            0% {
                -webkit-transform: rotateZ(0);
                transform: rotateZ(0)
            }

            100% {
                -webkit-transform: rotateZ(360deg);
                transform: rotateZ(360deg)
            }
        }
    </style>
    <style type="text/css">
        .el-loading-parent--relative {
            position: relative !important
        }

        .el-loading-parent--hidden {
            overflow: hidden !important
        }

        .el-loading-mask {
            position: absolute;
            z-index: 2000;
            background-color: rgba(255, 255, 255, .9);
            margin: 0;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            -webkit-transition: opacity .3s;
            transition: opacity .3s
        }

        .el-loading-mask.is-fullscreen {
            position: fixed
        }

        .el-loading-mask.is-fullscreen .el-loading-spinner {
            margin-top: -25px
        }

        .el-loading-mask.is-fullscreen .el-loading-spinner .circular {
            height: 50px;
            width: 50px
        }

        .el-loading-spinner {
            top: 50%;
            margin-top: -21px;
            width: 100%;
            text-align: center;
            position: absolute
        }

        .el-loading-spinner .el-loading-text {
            color: #409EFF;
            margin: 3px 0;
            font-size: 14px
        }

        .el-loading-spinner .circular {
            height: 42px;
            width: 42px;
            -webkit-animation: loading-rotate 2s linear infinite;
            animation: loading-rotate 2s linear infinite
        }

        .el-loading-spinner .path {
            -webkit-animation: loading-dash 1.5s ease-in-out infinite;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-dasharray: 90, 150;
            stroke-dashoffset: 0;
            stroke-width: 2;
            stroke: #409EFF;
            stroke-linecap: round
        }

        .el-loading-spinner i {
            color: #409EFF
        }

        .el-loading-fade-enter,
        .el-loading-fade-leave-active {
            opacity: 0
        }

        @-webkit-keyframes loading-rotate {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes loading-rotate {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @-webkit-keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0
            }

            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -40px
            }

            100% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -120px
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0
            }

            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -40px
            }

            100% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -120px
            }
        }
    </style>
    <style type="text/css"></style>
    <script src="https://smartcaptcha.yandexcloud.net/captcha.js?render=onload" async="" defer=""></script>
    <script charset="utf-8" src="_nuxtjs/3511c8b5c31e14621816.js"></script>
    <style type="text/css">
        .mando-app-subscribe {
            position: relative;
            margin-bottom: 40px;
            padding-right: 10px;
            padding-left: 10px;
            font-weight: 500;
            font-size: 18px;
            font-family: "Akzidenz-Ext", Helvetica, Arial, sans-serif;
            line-height: 1.25;
            letter-spacing: .4px;
            text-align: center
        }

        @media screen and (max-width: 480px) {
            .mando-app-subscribe {
                margin-bottom: 0;
                font-size: 14px
            }
        }

        .mando-app-subscribe__title {
            position: relative;
            margin-bottom: 20px;
            padding-right: 10px;
            padding-left: 10px;
            font-weight: 500;
            font-family: "Akzidenz-Ext", Helvetica, Arial, sans-serif;
            line-height: 1.25;
            letter-spacing: .4px;
            text-align: center
        }

        .mando-app-subscribe__form-inner {
            position: relative;
            display: inline-block;
            overflow: hidden;
            border-radius: 8px
        }

        @media screen and (max-width: 480px) {
            .mando-app-subscribe__form-inner {
                width: 230px;
                height: 40px;
                margin: auto
            }
        }

        .mando-app-subscribe__submit {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 52px;
            height: 52px;
            background-image: var(--icon-chevron-right);
            background-repeat: no-repeat;
            background-position: center;
            transition: opacity .3s ease;
            will-change: opacity
        }

        .mando-app-subscribe__submit--loading {
            pointer-events: none
        }

        .mando-app-subscribe__submit:hover {
            opacity: .8
        }

        @media screen and (max-width: 480px) {
            .mando-app-subscribe__submit {
                top: -40px;
                top: auto;
                right: 0;
                bottom: 0;
                width: 40px;
                height: 40px
            }
        }

        .mando-app-subscribe__input {
            display: inline-block;
            margin: 0 !important;
            padding: 17px 40px 17px 23px;
            color: var(--input-font-color);
            font-size: 14px;
            background-color: var(--input-bg);
            background-image: none !important;
            width: 100%;
            box-sizing: border-box
        }

        @media screen and (max-width: 480px) {
            .mando-app-subscribe__input {
                height: 40px
            }
        }

        .mando-app-subscribe__input::-moz-placeholder {
            color: #9d9390
        }

        .mando-app-subscribe__input:-ms-input-placeholder {
            color: #9d9390
        }

        .mando-app-subscribe__input::placeholder {
            color: #9d9390
        }

        .mando-app-subscribe__input:focus+span {
            width: 100%
        }

        .mando-app-subscribe__focus-line {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #f37021;
            transition: width .3s ease-out
        }

        .mando-app-subscribe__focus-line--invalid {
            width: 100%;
            background-color: #f33
        }

        .mando-app-subscribe__success {
            z-index: 1;
            width: 100%;
            margin: 0 auto;
            font-weight: 400;
            font-size: 16px;
            font-family: "Akzidenz", Helvetica, Arial, sans-serif;
            line-height: 20px;
            text-align: center;
            transition: opacity .3s ease-in;
            will-change: opacity
        }

        .mando-app-subscribe__success::before {
            display: inline-block;
            width: 15px;
            height: 15px;
            margin-right: 10px;
            background-image: var(--icon-valid);
            background-repeat: no-repeat;
            background-position: center;
            content: ""
        }
    </style>
    <style type="text/css">
        .mando-mando-app-qr {
            margin-right: 84px
        }

        @media screen and (max-width: 479px) {
            .mando-mando-app-qr {
                margin-right: 0;
                margin-bottom: 40px
            }
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .purchase-footer {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px 20px;
            text-align: center
        }

        @media screen and (max-width: 768px) {
            .purchase-footer {
                padding: 50px 20px 10px
            }
        }

        .purchase-footer--with-tab-bar {
            margin-bottom: 85px
        }

        .purchase-footer__links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 0 -16px 25px 0;
            color: #fff
        }

        @media screen and (max-width: 768px) {
            .purchase-footer__links {
                margin-bottom: 15px
            }
        }

        .purchase-footer__link {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            position: relative;
            display: inline-block;
            margin: 0 16px 5px 0;
            border-bottom: 1px dashed rgba(255, 255, 255, .5)
        }

        @media screen and (max-width: 768px) {
            .purchase-footer__link:not(:last-child) {
                padding-right: 0
            }
        }

        .purchase-footer__copyright {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            max-width: 800px;
            color: rgba(255, 255, 255, .8)
        }

        .purchase-footer__copyright>a {
            color: inherit
        }

        @media screen and (max-width: 768px) {
            .purchase-footer__copyright {
                margin-bottom: 25px
            }
        }
    </style>
    <style type="text/css">
        .ui-icon-info {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-info {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M.5 10C.5 4.8 4.8.5 10 .5s9.5 4.3 9.5 9.5-4.3 9.5-9.5 9.5A9.5 9.5 0 0 1 .5 10Z' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M10 14V9' stroke='%23fff' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M10 6h0' stroke='%23fff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        .ui-icon-location-accent {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-location-accent {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath clip-rule='evenodd' d='M2.56 8.214c0 2.04.875 4.079 2.1 5.497l5.338 5.409 5.337-5.409c1.225-1.418 2.1-3.458 2.1-5.497C17.435 3.958 14.11.5 9.997.5 5.884.5 2.56 3.958 2.56 8.214z' stroke='%23F37021'/%3E%3Cpath clip-rule='evenodd' d='M10.06 10.367c1.26 0 2.283-1.035 2.283-2.313 0-1.277-1.022-2.313-2.283-2.313-1.26 0-2.283 1.036-2.283 2.313 0 1.278 1.022 2.313 2.283 2.313z' stroke='%23F37021'/%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        .ui-actions-menu {
            background-color: #2e2826;
            border-radius: 12px;
            box-shadow: 0 8px 8px rgba(0, 0, 0, .16)
        }

        @-webkit-keyframes ui-fade-in {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes ui-fade-in {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes ui-fade-out {
            0% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        @keyframes ui-fade-out {
            0% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        @-webkit-keyframes ui-open {
            0% {
                transform: translateY(100%)
            }

            100% {
                transform: translateY(0)
            }
        }

        @keyframes ui-open {
            0% {
                transform: translateY(100%)
            }

            100% {
                transform: translateY(0)
            }
        }

        @-webkit-keyframes ui-close {
            0% {
                transform: translateY(0%)
            }

            100% {
                transform: translateY(100%)
            }
        }

        @keyframes ui-close {
            0% {
                transform: translateY(0%)
            }

            100% {
                transform: translateY(100%)
            }
        }

        .ui-actions-menu--mobile {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 10000;
            width: 100%;
            background-color: rgba(0, 0, 0, .5);
            border-radius: unset;
            box-shadow: none;
            transition: all .3s ease
        }

        .ui-actions-menu--corner-right {
            border-top-right-radius: 0
        }

        .ui-actions-menu--corner-left {
            border-top-left-radius: 0
        }

        .ui-actions-menu--opened {
            -webkit-animation: ui-fade-in .3s cubic-bezier(0.39, 0.575, 0.565, 1) both;
            animation: ui-fade-in .3s cubic-bezier(0.39, 0.575, 0.565, 1) both
        }

        .ui-actions-menu--closed {
            -webkit-animation: ui-fade-out .3s cubic-bezier(0.39, 0.575, 0.565, 1) both;
            animation: ui-fade-out .3s cubic-bezier(0.39, 0.575, 0.565, 1) both
        }

        .ui-actions-menu__content {
            box-sizing: border-box;
            padding: 16px
        }

        .ui-actions-menu__content--mobile {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 20px 16px 16px;
            background-color: #2e2826;
            border-radius: 12px 12px 0 0
        }

        .ui-actions-menu__content--opened {
            -webkit-animation: ui-open .3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
            animation: ui-open .3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both
        }

        .ui-actions-menu__content--closed {
            -webkit-animation: ui-close .3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
            animation: ui-close .3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both
        }
    </style>
    <style type="text/css">
        .mando-skeleton-line {
            background: linear-gradient(110deg, #494143 8%, #5f5457 25%, #494143 48%) #494143;
            background-size: 300% 200%;
            -webkit-animation: mando-shine 3s linear infinite;
            animation: mando-shine 3s linear infinite;
            border-radius: 20px;
            height: 1em
        }

        @-webkit-keyframes mando-shine {
            to {
                background-position-x: -300%
            }
        }

        @keyframes mando-shine {
            to {
                background-position-x: -300%
            }
        }
    </style>
    <style type="text/css">
        .mando-expand-animation>* {
            transform: translateZ(0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            perspective: 1000px;
            will-change: height
        }

        .mando-expand-animation__enter-active {
            overflow: hidden;
            transition: .5s ease-in-out;
            transition-property: height, opacity
        }

        .mando-expand-animation__leave-active {
            overflow: hidden;
            transition: .5s ease-in-out;
            transition-property: height, opacity
        }

        .mando-expand-animation__enter {
            height: 0;
            opacity: 0
        }

        .mando-expand-animation__leave-to {
            height: 0;
            opacity: 0
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-shipping-options {
            margin-bottom: 16px;
            position: relative
        }

        @media screen and (max-width: 768px) {
            .mando-shipping-options {
                margin-bottom: 0
            }
        }

        .mando-shipping-options__title {
            display: flex;
            align-items: center;
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            margin-bottom: 12px
        }

        .mando-shipping-options__title-icon {
            width: 16px;
            height: 16px;
            cursor: default
        }

        .mando-shipping-options__title-icon:last-child {
            margin-left: auto;
            opacity: .8
        }

        .mando-shipping-options__title-city {
            margin-left: 8px
        }

        .mando-shipping-options__item {
            display: flex;
            justify-content: space-between;
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased
        }

        .mando-shipping-options__item:not(:last-child) {
            margin-bottom: 8px
        }

        .mando-shipping-options__item-text {
            display: flex;
            align-items: center;
            height: 18px
        }

        .mando-shipping-options__label {
            color: #9d9390
        }

        .mando-shipping-options__value {
            cursor: pointer;
            color: #fff
        }

        .mando-shipping-options__value--is-accent {
            color: #f37021
        }

        .mando-shipping-options__popup-label {
            font-weight: 400;
            font-size: 18px;
            font-family: "akzidenz-extended", sans-serif;
            line-height: 26px;
            letter-spacing: .4px;
            -webkit-font-smoothing: antialiased
        }

        .mando-shipping-options__popup-title {
            display: flex;
            margin-bottom: 16px;
            justify-content: center;
            position: relative
        }

        .mando-shipping-options__popup-text {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            color: #e2dad8
        }

        @media screen and (max-width: 768px) {
            .mando-shipping-options__popup-text {
                color: #9d9390
            }
        }

        .mando-shipping-options__popup-wrapper-desktop {
            position: absolute;
            width: 100%;
            z-index: 1
        }

        .mando-shipping-options__popup-close {
            margin-left: auto;
            position: absolute;
            right: 0
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-dialog {
            position: relative
        }

        @media screen and (max-width: 767px) {
            .mando-dialog {
                display: flex;
                flex-direction: column
            }
        }

        .mando-dialog--has-footer .mando-dialog__body {
            border-radius: unset
        }

        @media screen and (max-width: 767px) {
            .mando-dialog--is-fullscreen {
                height: 100vh
            }
        }

        @media screen and (max-width: 767px) {
            .mando-dialog--is-fullscreen .mando-dialog__footer {
                border-radius: 0
            }
        }

        .mando-dialog__close {
            position: absolute;
            top: 24px;
            right: 24px;
            opacity: .5
        }

        .mando-dialog__header {
            display: flex;
            flex-direction: column;
            flex-grow: 0;
            align-items: center;
            justify-content: center;
            padding: 24px 24px 0
        }

        .mando-dialog__img {
            max-width: 128px;
            max-height: 128px;
            margin-bottom: 12px
        }

        @media screen and (max-width: 767px) {
            .mando-dialog__img {
                max-width: 94px;
                max-height: 94px
            }
        }

        .mando-dialog__info {
            display: block;
            text-align: center
        }

        .mando-dialog__title {
            font-weight: 400;
            font-size: 18px;
            font-family: "akzidenz-extended", sans-serif;
            line-height: 26px;
            letter-spacing: .4px;
            -webkit-font-smoothing: antialiased;
            color: #fff
        }

        .mando-dialog__subtitle {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            margin-top: 8px;
            color: #9d9390
        }

        .mando-dialog__body {
            flex: 1;
            overflow: hidden;
            border-radius: 0 0 20px 20px;
            transition: height .3s ease
        }

        @media screen and (max-width: 767px) {
            .mando-dialog__body {
                border-radius: 0
            }
        }

        .mando-dialog__footer {
            flex-grow: 0;
            overflow: hidden;
            background-color: rgba(0, 0, 0, .5);
            border-radius: 0 0 20px 20px
        }
    </style>
    <style type="text/css">
        .ui-icon-more {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-more {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='4' height='20' viewBox='0 0 4 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Ccircle cx='2' cy='2' r='2' fill='white'/%3E %3Ccircle cx='2' cy='10' r='2' fill='white'/%3E %3Ccircle cx='2' cy='18' r='2' fill='white'/%3E %3C/svg%3E")
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .purchase-gift-modal {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            padding: 50px 100px;
            color: #fff;
            background-color: #3a3330;
            border-radius: 20px
        }

        @media screen and (max-width: 768px) {
            .purchase-gift-modal {
                padding: 36px 16px 16px
            }
        }

        .purchase-gift-modal__title {
            font-weight: 400;
            font-size: 22px;
            font-family: "bork", sans-serif;
            line-height: 27px;
            letter-spacing: 1px;
            -webkit-font-smoothing: antialiased;
            margin-bottom: 32px;
            text-align: center
        }

        @media screen and (max-width: 768px) {
            .purchase-gift-modal__title {
                font-weight: 400;
                font-size: 18px;
                font-family: "bork", sans-serif;
                line-height: 23px;
                letter-spacing: 1px;
                -webkit-font-smoothing: antialiased;
                margin-bottom: 16px;
                text-align: left
            }
        }

        .purchase-gift-modal__wrapper:not(:last-child) {
            margin-bottom: 32px
        }

        @media screen and (max-width: 768px) {
            .purchase-gift-modal__wrapper:not(:last-child) {
                margin-bottom: 16px
            }
        }

        .purchase-gift-modal__info {
            margin-top: 16px;
            padding: 32px;
            background-color: #2e2826;
            border-radius: 8px
        }

        @media screen and (max-width: 768px) {
            .purchase-gift-modal__info {
                padding: 16px
            }
        }

        .purchase-gift-modal__info-inner:not(:last-child) {
            margin-bottom: 32px
        }

        .purchase-gift-modal__text {
            margin-top: 8px;
            color: #a0938d;
            overflow-wrap: anywhere
        }

        .purchase-gift-modal__close {
            position: absolute;
            top: 15px;
            right: 15px
        }

        .purchase-gift-modal__date {
            line-height: 26px
        }
    </style>
    <style type="text/css">
        .ui-icon-right {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-right {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.2 4.5l5.6 5.5-5.6 5.4' stroke='%23fff' stroke-width='1.3'/%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        .ui-icon-minus {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-minus {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Cpath d='M16 10L4 10' stroke='white'/%3E %3C/svg%3E")
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-quantity-modern {
            display: flex;
            align-items: center;
            background-color: transparent
        }

        .ui-quantity-modern__value {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            margin: 0 25px;
            color: #fff
        }

        .ui-quantity-modern__button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background-color: #5b5553;
            border-radius: 8px
        }

        .ui-quantity-modern__button--disabled {
            background-color: #3a3330;
            cursor: default
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-product-management-content {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            width: 100%;
            background: transparent
        }

        .mando-product-management-content__title {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            margin-right: auto;
            color: #9d9390
        }

        .mando-product-management-content__line {
            display: inline-flex;
            align-items: center;
            justify-content: flex-end;
            width: inherit
        }

        .mando-product-management-content__line+.mando-product-management-content__line {
            margin-top: 16px
        }

        @media screen and (max-width: 480px) {
            .mando-product-management-content__line {
                padding: 4px 0;
                height: 36px;
                margin-top: 0;
                justify-content: flex-start
            }
        }

        .mando-product-management-content__separator {
            margin: 8px 0;
            width: 100%
        }

        .mando-product-management-content__action {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            right: 0;
            bottom: 0;
            color: #fff
        }

        .mando-product-management-content__card-info-button {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            margin-left: auto;
            color: #fff
        }

        @media screen and (max-width: 480px) {
            .mando-product-management-content__card-info-button {
                width: 100%;
                color: #9d9390
            }
        }

        .mando-product-management-content__card-info-button-inner {
            display: flex;
            justify-content: space-between;
            width: 100%
        }

        .mando-product-management-content__card-info-button-icon-right {
            opacity: .5
        }

        @media screen and (min-width: 481px) {
            .mando-product-management-content__card-info-button-icon-right {
                display: none
            }
        }
    </style>
    <style type="text/css">
        .mando-product-management {
            width: 298px
        }

        .mando-product-management--mobile {
            width: 100%
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-product-list-item {
            position: relative;
            display: flex;
            flex-flow: column nowrap;
            padding: 24px 0
        }

        @media screen and (max-width: 768px) {
            .mando-product-list-item {
                padding: 20px 0
            }
        }

        .mando-product-list-item__item-wrapper {
            position: relative;
            display: flex;
            flex-flow: row nowrap
        }

        .mando-product-list-item__img {
            width: 80px;
            max-height: 100px
        }

        @media screen and (max-width: 768px) {
            .mando-product-list-item__img {
                width: 56px;
                height: 56px;
                margin-top: 2px
            }
        }

        .mando-product-list-item__skeleton-img {
            width: 80px;
            height: 80px;
            flex-shrink: 0
        }

        @media screen and (max-width: 768px) {
            .mando-product-list-item__skeleton-img {
                width: 56px;
                height: 56px;
                margin-top: 2px
            }
        }

        .mando-product-list-item__info {
            position: relative;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            align-items: flex-start;
            margin-left: 30px
        }

        @media screen and (max-width: 768px) {
            .mando-product-list-item__info {
                flex-direction: column;
                margin-left: 16px
            }
        }

        .mando-product-list-item__name {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            padding-right: 30px;
            overflow: hidden;
            color: #fff
        }

        .mando-product-list-item__additional {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-top: 16px
        }

        .mando-product-list-item__price {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #9d9390
        }

        .mando-product-list-item__management {
            position: absolute;
            top: 0;
            right: 0;
            opacity: .5
        }

        @media screen and (min-width: 769px) {
            .mando-product-list-item__management-popup {
                position: absolute;
                top: 35px;
                right: 8px;
                z-index: 1
            }
        }

        .mando-product-list-item__quantity {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #9d9390
        }

        .mando-product-list-item__not-available {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #f37021
        }

        .mando-product-list-item__remove {
            position: absolute;
            top: 0;
            right: 0;
            opacity: .5
        }

        .mando-product-list-item__compliment {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #9d9390
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-shared-basket__body {
            padding: 24px
        }

        @media screen and (max-width: 767px) {
            .mando-shared-basket__body {
                padding: 16px
            }
        }

        .mando-shared-basket__products {
            margin-top: 24px;
            padding: 0 24px;
            background-color: #3a3330;
            border-radius: 20px
        }

        @media screen and (max-width: 767px) {
            .mando-shared-basket__products {
                padding: 0 16px
            }
        }

        .mando-shared-basket__footer {
            display: flex;
            justify-content: center;
            padding: 20px
        }
    </style>
    <style type="text/css">
        .ui-icon-share {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-share {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg clip-path='url(%23a)' fill='%23fff'%3E%3Cpath d='M18 8.08v9.84c0 1.14-1.07 2.08-2.38 2.08H4.38C3.07 20 2 19.07 2 17.92V8.08C2 6.94 3.07 6 4.38 6h2.29c.26 0 .47.19.47.42 0 .23-.21.41-.47.41H4.38c-.79 0-1.43.56-1.43 1.25v9.84c0 .69.64 1.25 1.43 1.25h11.24c.79 0 1.43-.56 1.43-1.25V8.08c0-.69-.64-1.25-1.43-1.25h-2.29c-.26 0-.47-.18-.47-.41 0-.23.21-.42.47-.42h2.29C16.93 6 18 6.94 18 8.08Z'/%3E%3Cpath d='M10.42.42v12.5a.42.42 0 0 1-.84 0V.42a.42.42 0 0 1 .84 0Z'/%3E%3Cpath d='M13.75 3.75c0 .1-.04.21-.12.3a.42.42 0 0 1-.6 0L10 1 6.96 4.04a.42.42 0 0 1-.59-.58L9.71.12a.42.42 0 0 1 .58 0l3.34 3.34c.08.08.12.18.12.29Z'/%3E%3C/g%3E%3Cdefs%3E%3CclipPath id='a'%3E%3Cpath fill='%23fff' d='M0 20V0h20v20z'/%3E%3C/clipPath%3E%3C/defs%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-modern-basket-share {
            display: flex;
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            color: #fff;
            background-color: transparent;
            border: none;
            align-items: baseline
        }

        .mando-modern-basket-share__label {
            margin-left: 8px;
            position: relative;
            top: -2px
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-bouquets-dialog .mando-el-loading-mask {
            overflow: hidden;
            background-color: #3a3330 !important;
            border-radius: 12px;
            transition: none
        }

        .mando-bouquets-dialog .mando-el-loading-spinner {
            position: relative;
            margin-top: auto;
            opacity: 1;
            transition: opacity .3s
        }

        .mando-bouquets-dialog .mando-el-loading-spinner::before {
            position: absolute;
            top: -50%;
            right: -50%;
            bottom: -50%;
            left: -50%;
            z-index: 100;
            display: inline-block;
            width: 95px;
            height: 95px;
            margin: auto;
            background-image: url("//st.bork.ru/images/preloader/square2.svg");
            background-repeat: no-repeat;
            background-position: left center;
            background-size: auto 100%;
            animation: mando-preloader-square 1s steps(11) infinite;
            content: ""
        }

        .mando-bouquets-dialog .mando-el-loading-spinner * {
            display: none
        }

        @keyframes mando-preloader-square {
            100% {
                background-position-x: calc(95px * 11 * -1)
            }
        }

        .mando-bouquets-dialog .mando-el-loading-fade-leave-active {
            transition: opacity .3s
        }

        .mando-bouquets-dialog .mando-el-loading-fade-leave-active .mando-el-loading-spinner {
            display: none
        }

        .mando-bouquets-dialog[class*=el-loading-parent]>:not(.mando-el-loading-mask) {
            opacity: 0
        }

        .mando-bouquets-dialog__wrapper {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center
        }

        @media screen and (max-width: 480px) {
            .mando-bouquets-dialog__wrapper {
                height: 100vh
            }
        }

        .mando-bouquets-dialog__title {
            font-weight: 400;
            font-size: 18px;
            font-family: "akzidenz-extended", sans-serif;
            line-height: 26px;
            letter-spacing: .4px;
            -webkit-font-smoothing: antialiased;
            color: #fff;
            position: absolute;
            top: 32px
        }

        @media screen and (max-width: 480px) {
            .mando-bouquets-dialog__title {
                top: 12px
            }
        }

        .mando-bouquets-dialog__bouquet-image {
            width: 100%;
            height: 400px;
            -o-object-fit: cover;
            object-fit: cover;
            border-radius: 20px 20px 0 0;
            transition: .3s all ease-in-out
        }

        @media screen and (max-width: 480px) {
            .mando-bouquets-dialog__bouquet-image {
                border-radius: 0;
                height: auto;
                flex-grow: 1
            }
        }

        .mando-bouquets-dialog__content {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: -116px;
            overflow: hidden
        }

        @media screen and (max-width: 480px) {
            .mando-bouquets-dialog__content {
                margin-top: 0;
                padding: 0 16px
            }
        }

        .mando-bouquets-dialog__content--one-bouquet {
            margin-top: 0
        }

        .mando-bouquets-dialog__selector-wrapper {
            position: relative;
            display: flex;
            flex-direction: row;
            gap: 16px;
            align-items: center;
            justify-content: center;
            width: inherit;
            padding: 24px 0;
            height: 116px;
            box-sizing: border-box
        }

        @media screen and (max-width: 480px) {
            .mando-bouquets-dialog__selector-wrapper {
                padding-bottom: 20px
            }
        }

        .mando-bouquets-dialog__selector-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 12px 16px;
            color: #fff;
            border: 2px solid rgba(255, 255, 255, .3);
            border-radius: 8px;
            cursor: pointer;
            min-width: 141px
        }

        @media screen and (max-width: 480px) {
            .mando-bouquets-dialog__selector-item {
                flex-basis: 0;
                flex-grow: 1;
                min-width: auto
            }
        }

        .mando-bouquets-dialog__selector-item--active {
            border: 2px solid #f37021;
            transition: .3s all ease-in-out
        }

        .mando-bouquets-dialog__selector-title {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #fff;
            text-align: center
        }

        .mando-bouquets-dialog__selector-price {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            opacity: .5
        }

        .mando-bouquets-dialog__description-info-price {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #e2dad8
        }

        .mando-bouquets-dialog__description-info-title {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #e2dad8
        }

        .mando-bouquets-dialog__container {
            width: 456px;
            padding: 24px 0;
            background-color: #3a3330;
            transition: max-height .3s ease-out
        }

        @media screen and (max-width: 480px) {
            .mando-bouquets-dialog__container {
                padding: 0;
                width: auto
            }
        }

        @media screen and (max-width: 768px) {
            .mando-bouquets-dialog__container--one-bouquet {
                margin-top: 24px
            }
        }

        .mando-bouquets-dialog__info {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 9px
        }

        .mando-bouquets-dialog__close {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 20px;
            height: 20px;
            margin-left: 3px;
            opacity: .5
        }

        .mando-bouquets-dialog__button-wrapper {
            width: 100%;
            max-width: 220px
        }

        @media screen and (max-width: 480px) {
            .mando-bouquets-dialog__button-wrapper {
                max-width: none
            }
        }

        .mando-bouquets-dialog__separator {
            width: 100%;
            margin: 20px 0 16px
        }

        .mando-bouquets-dialog__footer {
            width: 100%;
            background-color: #2e2826;
            border-radius: 0 0 20px 20px
        }

        @media screen and (max-width: 480px) {
            .mando-bouquets-dialog__footer {
                background-color: transparent;
                border-radius: 0
            }
        }

        .mando-bouquets-dialog__footer-content {
            display: flex;
            gap: 16px;
            align-items: center;
            justify-content: center;
            width: inherit;
            padding: 20px 0;
            box-sizing: border-box
        }

        @media screen and (max-width: 480px) {
            .mando-bouquets-dialog__footer-content {
                margin: 16px 0 16px;
                padding: 0 16px
            }
        }

        .mando-bouquets-dialog__description-info {
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            width: 100%
        }

        .mando-bouquets-dialog__description {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            display: flex;
            justify-content: center;
            width: 100%;
            color: #e2dad8;
            background-color: #3a3330
        }

        .mando-bouquets-dialog__description-inner {
            max-width: 530px;
            text-align: center
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-show-dialog-button {
            display: flex;
            height: 89px;
            cursor: pointer
        }

        .mando-show-dialog-button__image-wrapper {
            display: flex;
            align-items: center;
            overflow: hidden;
            background-color: #3a3330;
            border-radius: 20px 0 0 20px
        }

        .mando-show-dialog-button__image {
            width: 100px;
            height: 100%
        }

        .mando-show-dialog-button__content {
            display: flex;
            flex: 1;
            align-items: center;
            justify-content: space-between;
            padding: 0 16px;
            background-color: #3a3330;
            background-image: radial-gradient(100% 440% at 100% 50%, transparent 0%, rgba(157, 147, 144, 0.26) 100%);
            border-radius: 0 20px 20px 0
        }

        .mando-show-dialog-button__info {
            display: flex;
            flex-direction: column
        }

        .mando-show-dialog-button__title {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #e2dad8;
            margin-bottom: 4px
        }

        .mando-show-dialog-button__subtitle {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #9d9390
        }

        .mando-show-dialog-button__subtitle--is-subtitle-highlighted {
            color: #f37021
        }

        .mando-show-dialog-button__accent-subtitle {
            font-weight: 400;
            font-size: 12px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 1px;
            -webkit-font-smoothing: antialiased;
            color: #f37021
        }

        .mando-show-dialog-button__arrow {
            position: relative
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-input-modern {
            position: relative;
            display: inline-block;
            width: 100%
        }

        .ui-input-modern * {
            box-sizing: border-box
        }

        .ui-input-modern--theme-default .ui-input-modern__inner {
            background-color: #2e2826
        }

        .ui-input-modern--theme-dark .ui-input-modern__inner {
            background-color: #282220
        }

        .ui-input-modern--theme-light .ui-input-modern__inner {
            background-color: #2e2826
        }

        .ui-input-modern--is-focused .ui-input-modern__inner {
            background-color: #fff
        }

        .ui-input-modern--is-focused .ui-input-modern__input {
            color: #3a3330
        }

        .ui-input-modern--is-error .ui-input-modern__inner::before {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            height: 4px;
            background-color: #f32e21;
            content: ""
        }

        .ui-input-modern--is-warning .ui-input-modern__inner::before {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            height: 4px;
            background-color: #f37021;
            content: ""
        }

        .ui-input-modern--is-disabled .ui-input-modern__input {
            color: #5b5553
        }

        .ui-input-modern__inner {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            height: 50px;
            overflow-y: hidden;
            background-color: #2e2826;
            border-radius: 8px
        }

        .ui-input-modern__label {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            position: absolute;
            top: 6px;
            left: 16px;
            color: #a0938d;
            line-height: 38px;
            transition: font-size .2s, line-height .2s;
            pointer-events: none
        }

        .ui-input-modern__label--is-active {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased
        }

        .ui-input-modern__input {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            width: 100%;
            padding: 22px 16px 6px;
            color: #fff;
            background: transparent;
            border: none;
            box-shadow: none
        }

        .ui-input-modern__input:focus {
            outline: none
        }

        .ui-input-modern__append {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding-right: 15px
        }

        .ui-input-modern__error-message {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            padding: 4px 0 0 16px;
            color: #f32e21
        }

        .ui-input-modern__warning-message {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            padding: 4px 0 0 16px;
            color: #f37021
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-add-card-form {
            width: 100%;
            max-width: 456px
        }

        .mando-add-card-form__expanded-view {
            padding: 32px 24px;
            background-color: #3a3330;
            border: 1px dashed #9d9390;
            border-radius: 20px
        }

        .mando-add-card-form__title {
            font-weight: 400;
            font-size: 18px;
            font-family: "helvetica", sans-serif;
            line-height: 23px;
            letter-spacing: 1px;
            -webkit-font-smoothing: antialiased;
            margin-bottom: 28px;
            color: #fff
        }

        .mando-add-card-form__inputs {
            display: grid;
            grid-column-gap: 8px;
            grid-template-columns: 2.9fr 1fr;
            margin-bottom: 32px
        }

        .mando-add-card-form__collapsed-view {
            display: flex;
            align-items: center;
            padding: 16px;
            background-color: #3a3330;
            border-radius: 20px;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .mando-add-card-form__collapsed-view::before {
            display: inline-block;
            width: 42px;
            height: 42px;
            margin-right: 16px;
            background-image: url("data:image/svg+xml,%3Csvg width='42' height='42' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='%239D9390' d='M21.5 9v24M33 21.5H9'/%3E%3Ccircle cx='21' cy='21' r='20.5' stroke='%239D9390'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            content: ""
        }

        .mando-add-card-form__subtitle {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #9d9390
        }

        @media screen and (max-width: 768px) {
            .mando-add-card-form__subtitle {
                font-weight: 400;
                font-size: 14px;
                font-family: "helvetica", sans-serif;
                line-height: 18px;
                letter-spacing: .2px;
                -webkit-font-smoothing: antialiased
            }
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-modern-check {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            position: relative;
            display: inline-flex;
            align-items: center;
            color: #fff;
            outline: none;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .ui-modern-check::before,
        .ui-modern-check::after {
            box-sizing: content-box
        }

        .ui-modern-check--disabled {
            cursor: default;
            opacity: .5
        }

        .ui-modern-check--view--switch::before {
            position: relative;
            display: flex;
            flex-shrink: 0;
            width: 2.6em;
            height: 1.4em;
            background: transparent;
            border: 1px solid #a0938d;
            border-radius: 1em;
            transition: background .15s ease-out, border .15s ease-out;
            content: ""
        }

        .ui-modern-check--view--switch::after {
            position: relative;
            display: flex;
            width: 1em;
            height: 1em;
            margin-right: -1em;
            background: #fff;
            border-radius: 50%;
            transform: translateX(calc(-2.7em + 0.33em));
            transition: transform .15s ease-out, background .15s ease-out;
            content: ""
        }

        .ui-modern-check--view--switch.ui-is-checked::before {
            border: 1px solid #e0dcda
        }

        .ui-modern-check--view--switch.ui-is-checked::after {
            background: #f37021;
            transform: translateX(calc(-1em - 0.3em))
        }

        .ui-modern-check--view--switch.ui-is-checked .ui-check__icon {
            opacity: 1
        }

        .ui-modern-check--view--switch .ui-check__icon {
            opacity: .5;
            transition: opacity .15s ease-out
        }

        .ui-modern-check__control {
            position: absolute;
            left: 0;
            z-index: -1;
            outline: none;
            opacity: 0
        }

        .ui-modern-check__label {
            order: 1;
            padding-left: .5em
        }

        .ui-modern-check__icon {
            display: inline-flex;
            align-items: center;
            order: -1;
            margin-right: .375em
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-card-modern {
            display: flex;
            align-items: center;
            max-width: 456px;
            padding: 30px 24px;
            background-color: #3a3330;
            background-image: radial-gradient(100% 440% at 100% 50%, transparent 0%, rgba(157, 147, 144, 0.26) 100%);
            border-radius: 20px
        }

        @media screen and (max-width: 768px) {
            .mando-card-modern {
                padding: 20px 24px
            }
        }

        .mando-card-modern__card-type-image {
            position: relative;
            width: 94px;
            height: 94px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            content: "";
            flex-shrink: 0
        }

        @media screen and (max-width: 768px) {
            .mando-card-modern__card-type-image {
                width: 78px;
                height: 78px
            }
        }

        .mando-card-modern--type--gift-card .mando-card-modern__card-type-image {
            background-image: url("//st.bork.ru/images/privileges/gift-card.png")
        }

        .mando-card-modern--type--e-gift-card .mando-card-modern__card-type-image {
            background-image: url("//st.bork.ru/images/privileges/e-gift-card.png")
        }

        .mando-card-modern--type--upgrade .mando-card-modern__card-type-image {
            background-image: url("//st.bork.ru/images/privileges/upgrade.png")
        }

        .mando-card-modern--is-disabled {
            opacity: .6;
            pointer-events: none
        }

        .mando-card-modern--is-disabled .mando-card-modern__price {
            color: #9d9390
        }

        .mando-card-modern--is-disabled .mando-card-modern__name {
            color: #9d9390
        }

        .mando-card-modern--is-disabled .mando-card-modern__date-wrapper {
            color: #9d9390
        }

        .mando-card-modern__content {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-left: 30px;
            flex-grow: 1
        }

        @media screen and (max-width: 768px) {
            .mando-card-modern__content {
                gap: 8px
            }
        }

        .mando-card-modern__price-wrapper {
            display: flex
        }

        .mando-card-modern__price {
            font-weight: 400;
            font-size: 19px;
            font-family: "helvetica", sans-serif;
            line-height: 25px;
            letter-spacing: .1px;
            -webkit-font-smoothing: antialiased;
            color: #fff
        }

        .mando-card-modern__check {
            margin-left: auto
        }

        .mando-card-modern__name {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #fff
        }

        @media screen and (max-width: 768px) {
            .mando-card-modern__name {
                font-weight: 400;
                font-size: 13px;
                font-family: "helvetica", sans-serif;
                line-height: 15px;
                letter-spacing: 0;
                -webkit-font-smoothing: antialiased
            }
        }

        .mando-card-modern__date-wrapper {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            display: flex;
            color: #9d9390
        }

        @media screen and (max-width: 768px) {
            .mando-card-modern__date-wrapper {
                font-weight: 400;
                font-size: 13px;
                font-family: "helvetica", sans-serif;
                line-height: 15px;
                letter-spacing: 0;
                -webkit-font-smoothing: antialiased;
                margin-top: 5px
            }
        }

        .mando-card-modern__date {
            margin-left: auto;
            text-align: right
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-modern-privileges {
            position: relative
        }

        .mando-modern-privileges__dialog-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 518px;
            margin-top: 24px;
            padding: 25px 16px 20px;
            overflow: auto;
            background-color: #2e2826
        }

        @supports not selector(::-webkit-scrollbar) {
            .mando-modern-privileges__dialog-body * {
                scrollbar-width: thin;
                scrollbar-color: #e0dcda #3a3330
            }
        }

        .mando-modern-privileges__dialog-body::-webkit-scrollbar {
            width: 11px
        }

        .mando-modern-privileges__dialog-body::-webkit-scrollbar-track {
            border-radius: 9999px
        }

        .mando-modern-privileges__dialog-body::-webkit-scrollbar-thumb {
            background-color: #e0dcda;
            background-clip: padding-box;
            border: 4px solid rgba(0, 0, 0, 0);
            border-radius: 9999px
        }

        @media screen and (max-width: 768px) {
            .mando-modern-privileges__dialog-body {
                padding-top: 0;
                height: calc(100% - 24px)
            }
        }

        .mando-modern-privileges__info {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            max-width: 350px;
            color: #9d9390;
            text-align: center;
            align-self: center;
            margin-bottom: 20px
        }

        @media screen and (min-width: 769px) {
            .mando-modern-privileges__info {
                margin-top: 18px
            }
        }

        .mando-modern-privileges__form-wrapper {
            display: flex;
            flex: 1;
            flex-direction: column;
            justify-content: stretch
        }

        .mando-modern-privileges__content {
            position: relative;
            width: 100%;
            align-items: center;
            display: flex;
            flex-direction: column
        }

        .mando-modern-privileges__content--has-upgrade {
            gap: 16px;
            max-width: 928px;
            flex-direction: row;
            align-items: flex-start
        }

        @media screen and (max-width: 768px) {
            .mando-modern-privileges__content--has-upgrade {
                flex-direction: column
            }
        }

        .mando-modern-privileges__content--is-not-authorized {
            flex-direction: column;
            align-items: center;
            gap: 20px
        }

        .mando-modern-privileges__content--is-not-authorized .mando-modern-privileges__info {
            margin: 0
        }

        .mando-modern-privileges__auth {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            max-width: 350px;
            margin-top: auto;
            padding-top: 77px
        }

        .mando-modern-privileges__auth-info {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            max-width: 350px;
            color: #9d9390;
            text-align: center;
            margin-bottom: 24px
        }

        .mando-modern-privileges__auth-button {
            width: 100%;
            max-width: 220px
        }

        .mando-modern-privileges__empty-info {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            max-width: 350px;
            color: #9d9390;
            text-align: center;
            margin-top: 56px
        }

        @media screen and (max-width: 768px) {
            .mando-modern-privileges__empty-info {
                margin-top: 32px
            }
        }

        .mando-modern-privileges__upgrade {
            margin-top: 16px
        }

        .mando-modern-privileges__upgrade-info {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            align-self: center;
            width: 100%;
            max-width: 390px;
            margin-top: 16px;
            color: #f37021;
            text-align: center
        }

        .mando-modern-privileges__gift-card {
            margin-top: 16px
        }

        .mando-modern-privileges__card-type-separator {
            margin-top: 16px
        }

        .mando-modern-privileges__info-wrapper {
            display: flex;
            flex: 1;
            flex-direction: column
        }

        .mando-modern-privileges__footer {
            display: flex;
            justify-content: center;
            padding: 20px 24px;
            background-color: #3a3330
        }

        .mando-modern-privileges__footer-inner {
            display: flex;
            justify-content: center;
            width: 100%
        }

        @media screen and (max-width: 768px) {
            .mando-modern-privileges__footer-inner {
                flex-direction: column;
                gap: 16px
            }
        }

        .mando-modern-privileges__footer-content {
            display: flex;
            flex-direction: column;
            gap: 8px;
            width: 100%;
            max-width: 456px
        }

        .mando-modern-privileges__footer-content-inner {
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .mando-modern-privileges__footer-info {
            display: flex;
            flex-direction: column;
            gap: 5px
        }

        .mando-modern-privileges__footer-title {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #e2dad8
        }

        .mando-modern-privileges__footer-subtitle {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #9d9390
        }

        .mando-modern-privileges__footer-price {
            font-weight: 400;
            font-size: 19px;
            font-family: "helvetica", sans-serif;
            line-height: 25px;
            letter-spacing: .1px;
            -webkit-font-smoothing: antialiased;
            color: #fff
        }

        .mando-modern-privileges__footer-warning {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            max-width: 340px;
            color: #f37021
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-floating-button {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 16px 16px 24px;
            background-color: rgba(0, 0, 0, .5);
            border-radius: 36px;
            -webkit-backdrop-filter: blur(8px);
            backdrop-filter: blur(8px)
        }

        .mando-floating-button__info {
            display: flex;
            flex-direction: column
        }

        .mando-floating-button__price {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            margin-bottom: 2px;
            color: #fff
        }

        .mando-floating-button__quantity {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #9d9390
        }

        .mando-floating-button__to-checkout {
            position: relative
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-modern-order {
            width: 338px;
            padding: 24px 16px 0 16px;
            color: #fff;
            background-color: #3a3330;
            border-radius: 20px
        }

        @media screen and (max-width: 768px) {
            .mando-modern-order {
                width: 100%;
                padding: 0 0 24px;
                background-color: transparent
            }
        }

        .mando-modern-order__inner {
            padding: 16px 0;
            display: flex;
            flex-direction: column
        }

        .mando-modern-order__inner:first-child {
            padding-top: 0
        }

        @media screen and (max-width: 768px) {
            .mando-modern-order__inner:first-child {
                padding-top: 16px
            }
        }

        @media screen and (max-width: 768px) {
            .mando-modern-order__inner {
                padding: 16px 0
            }
        }

        .mando-modern-order__title {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            margin-bottom: 16px;
            color: #fff
        }

        .mando-modern-order__item {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            display: flex;
            justify-content: space-between
        }

        .mando-modern-order__item:not(:last-child) {
            margin-bottom: 16px
        }

        .mando-modern-order__item-text {
            display: flex;
            align-items: center;
            height: 18px
        }

        .mando-modern-order__label {
            color: #9d9390
        }

        .mando-modern-order__value {
            flex-shrink: 0;
            color: #fff
        }

        .mando-modern-order__value--is-accent {
            color: #f37021
        }

        .mando-modern-order__total {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            margin-left: auto
        }

        .mando-modern-order__to-checkout {
            box-sizing: border-box
        }

        .mando-modern-order__shipping-options {
            margin-bottom: 16px
        }
    </style>
    <style type="text/css">
        .ui-icon-unfold {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-unfold {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M4.5 13.4L10 19l5.4-5.6M15.4 6.6L9.9 1 4.5 6.6' stroke='%23fff' stroke-width='1.3'/%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        .mando-fade-animation__enter-active {
            transition: opacity .25s ease-in-out
        }

        .mando-fade-animation__leave-active {
            transition: opacity .25s ease-in-out
        }

        .mando-fade-animation__enter {
            opacity: 0
        }

        .mando-fade-animation__leave-to {
            opacity: 0
        }
    </style>
    <style type="text/css">
        .mando-expand-animation>* {
            transform: translateZ(0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            perspective: 1000px;
            will-change: height
        }

        .mando-expand-animation__enter-active {
            overflow: hidden;
            transition: .5s ease-in-out;
            transition-property: height, opacity
        }

        .mando-expand-animation__leave-active {
            overflow: hidden;
            transition: .5s ease-in-out;
            transition-property: height, opacity
        }

        .mando-expand-animation__enter {
            height: 0;
            opacity: 0
        }

        .mando-expand-animation__leave-to {
            height: 0;
            opacity: 0
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-basket-collapse {
            display: flex;
            flex-direction: column;
            overflow: hidden;
            transition: all .5s ease
        }

        @media screen and (max-width: 768px) {
            .mando-basket-collapse.mando-is-expanded {
                padding-left: 0;
                padding-right: 0;
                transition: all .1s ease
            }
        }

        .mando-basket-collapse__handle {
            display: flex;
            align-items: center;
            padding: 0 24px;
            width: 100%;
            height: 108px;
            transition: height .25s ease-in-out
        }

        @media screen and (max-width: 768px) {
            .mando-basket-collapse__handle {
                height: auto;
                padding: 0
            }
        }

        .mando-basket-collapse__handle.mando-is-expanded {
            height: 70px
        }

        @media screen and (max-width: 768px) {
            .mando-basket-collapse__handle.mando-is-expanded {
                height: auto;
                padding-left: 16px
            }
        }

        .mando-basket-collapse__handle-content {
            position: relative;
            width: 100%;
            overflow: hidden
        }

        .mando-basket-collapse__title-group {
            display: flex;
            flex-direction: column
        }

        .mando-basket-collapse__title {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #fff;
            white-space: nowrap
        }

        @media screen and (min-width: 769px) {
            .mando-basket-collapse__title br {
                display: none
            }
        }

        @media screen and (max-width: 768px) {
            .mando-basket-collapse__title {
                font-weight: 400;
                font-size: 16px;
                font-family: "helvetica", sans-serif;
                line-height: 22px;
                letter-spacing: 0;
                -webkit-font-smoothing: antialiased
            }
        }

        .mando-basket-collapse__subtitle-wrapper {
            display: flex;
            align-items: center;
            height: 18px;
            transition: height .25s ease, margin-top .25s ease;
            margin-top: 3px
        }

        .mando-basket-collapse__subtitle-wrapper.mando-is-expanded {
            margin-top: 0;
            height: 0
        }

        @media screen and (max-width: 768px) {
            .mando-basket-collapse__subtitle-wrapper {
                margin-top: 0
            }
        }

        .mando-basket-collapse__subtitle {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, .5)
        }

        .mando-basket-collapse__handle-append {
            margin-left: auto;
            padding-left: 12px;
            cursor: pointer
        }

        .mando-basket-collapse__content {
            position: static
        }

        .mando-basket-collapse__separator {
            margin: auto;
            width: calc(100% - 48px)
        }

        @media screen and (max-width: 768px) {
            .mando-basket-collapse__separator {
                width: calc(100% - 32px)
            }
        }
    </style>
    <style type="text/css">
        .ui-icon-arrow-right {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-arrow-right {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M12 15.5l-1-1 4.2-4H2.5v-1h12.7l-4-4 .8-1 5.5 5.5-5.5 5.5z' fill='%23fff'/%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        .mando-carousel-nav {
            display: flex;
            gap: 16px
        }

        .mando-carousel-nav__button.mando-is-disabled {
            cursor: default;
            opacity: .3
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        @keyframes mando-inner-animation-expand {
            0% {
                transform: translateX(0)
            }

            100% {
                transform: translateX(-100px)
            }
        }

        @keyframes mando-inner-animation-collapse {
            0% {
                transform: translateX(-100px)
            }

            100% {
                transform: translateX(0)
            }
        }

        @keyframes mando-content-animation-expand {
            0% {
                background-image: radial-gradient(100% 440% at 100% 50%, transparent 0%, rgba(157, 147, 144, 0.26) 100%)
            }

            100% {
                background: rgba(157, 147, 144, 0);
                padding: 0
            }
        }

        @keyframes mando-content-animation-collapse {
            0% {
                background: rgba(157, 147, 144, 0);
                border-radius: 20px 0 0 20px;
                padding: 0
            }

            25% {
                background-image: radial-gradient(100% 440% at 100% 50%, transparent 0%, rgba(157, 147, 144, 0.1) 100%)
            }

            50% {
                background-image: radial-gradient(100% 440% at 100% 50%, transparent 0%, rgba(157, 147, 144, 0.1) 100%)
            }

            75% {
                background-image: radial-gradient(100% 440% at 100% 50%, transparent 0%, rgba(157, 147, 144, 0.15) 100%)
            }

            100% {
                background-image: radial-gradient(100% 440% at 100% 50%, transparent 0%, rgba(157, 147, 144, 0.26) 100%)
            }
        }

        @keyframes mando-image-wrapper-animation-expand {
            0% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        @keyframes mando-title-animation-expand {
            0% {
                transform: translateY(0)
            }

            100% {
                transform: translateY(4px)
            }
        }

        @keyframes mando-title-animation-collapse {
            0% {
                transform: translateY(4px)
            }

            100% {
                transform: translateY(0)
            }
        }

        @keyframes mando-subtitle-animation-expand {
            0% {
                opacity: 1
            }

            100% {
                opacity: 0;
                margin-bottom: -27px
            }
        }

        @keyframes mando-subtitle-animation-collapse {
            0% {
                opacity: 0;
                margin-bottom: -15px
            }

            100% {
                opacity: 1
            }
        }

        .mando-accessories-mobile-button {
            cursor: pointer;
            position: relative;
            overflow: hidden;
            border-radius: 20px
        }

        .mando-accessories-mobile-button__inner {
            display: flex;
            height: 89px;
            overflow: hidden
        }

        .mando-accessories-mobile-button__inner--expanded {
            -webkit-animation: mando-inner-animation-expand 300ms linear forwards;
            animation: mando-inner-animation-expand 300ms linear forwards
        }

        @media screen and (max-width: 480px) {
            .mando-accessories-mobile-button__inner--expanded {
                height: 62px
            }
        }

        .mando-accessories-mobile-button__inner--collapsed {
            -webkit-animation: mando-inner-animation-collapse 300ms linear forwards;
            animation: mando-inner-animation-collapse 300ms linear forwards
        }

        .mando-accessories-mobile-button__image-wrapper {
            display: flex;
            align-items: center;
            overflow: hidden;
            background-color: #3a3330
        }

        .mando-accessories-mobile-button__image-wrapper--expanded {
            -webkit-animation: mando-image-wrapper-animation-expand 300ms linear forwards;
            animation: mando-image-wrapper-animation-expand 300ms linear forwards
        }

        .mando-accessories-mobile-button__carousel-wrapper {
            width: 100px
        }

        .mando-accessories-mobile-button__carousel-image {
            width: 60px;
            height: 60px;
            -o-object-fit: contain;
            object-fit: contain
        }

        .mando-accessories-mobile-button__content {
            position: relative;
            display: flex;
            flex: 1;
            align-items: center;
            justify-content: space-between;
            padding: 0 16px;
            background-color: #3a3330;
            background-image: radial-gradient(100% 440% at 100% 50%, transparent 0%, rgba(157, 147, 144, 0.26) 100%)
        }

        .mando-accessories-mobile-button__content--expanded {
            -webkit-animation: mando-content-animation-expand 300ms linear forwards;
            animation: mando-content-animation-expand 300ms linear forwards
        }

        .mando-accessories-mobile-button__content--collapsed {
            -webkit-animation: mando-content-animation-collapse 300ms linear forwards;
            animation: mando-content-animation-collapse 300ms linear forwards
        }

        .mando-accessories-mobile-button__info {
            display: flex;
            flex-direction: column
        }

        .mando-accessories-mobile-button__title {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #e2dad8;
            margin-bottom: 4px;
            transition: transform .2s ease
        }

        .mando-accessories-mobile-button__title--expanded {
            margin-bottom: 0;
            transform: translateY(-2px)
        }

        .mando-accessories-mobile-button__subtitle {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #9d9390
        }

        .mando-accessories-mobile-button__subtitle--expanded {
            -webkit-animation: mando-subtitle-animation-expand 300ms linear forwards;
            animation: mando-subtitle-animation-expand 300ms linear forwards
        }

        .mando-accessories-mobile-button__subtitle--collapsed {
            -webkit-animation: mando-subtitle-animation-collapse 300ms linear forwards;
            animation: mando-subtitle-animation-collapse 300ms linear forwards
        }

        .mando-accessories-mobile-button__button {
            position: absolute;
            right: 16px;
            top: 0;
            height: 100%
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-accessories-product-carousel {
            position: relative;
            z-index: 1;
            display: flex;
            width: 100%;
            max-width: calc(300px * 3 + 24px * 2 + 70px * 2);
            overflow: hidden;
            height: 100%;
            flex-direction: column;
            justify-content: center
        }

        @media screen and (max-width: 768px) {
            .mando-accessories-product-carousel {
                max-width: 100%;
                width: calc(100% + 16px * 2)
            }
        }

        .mando-accessories-product-carousel__slider-wrapper {
            overflow: hidden;
            position: relative;
            box-sizing: border-box;
            width: 100%;
            max-width: calc(300px * 3 + 24px * 2 + 70px * 2)
        }

        @media screen and (max-width: 768px) {
            .mando-accessories-product-carousel__slider-wrapper {
                max-width: 100%;
                width: calc(100% + 16px * 2)
            }
        }

        .mando-accessories-product-carousel__slider {
            position: relative;
            width: 100%;
            max-width: calc(300px * 3 + 24px * 2);
            align-self: center
        }

        @media screen and (max-width: 768px) {
            .mando-accessories-product-carousel__slider {
                max-width: 100%;
                width: calc(100% + 16px * 2)
            }
        }

        .mando-accessories-product-carousel__slide {
            position: relative
        }

        .mando-accessories-product-carousel__nav-prev {
            position: absolute;
            top: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            width: 60px;
            cursor: pointer;
            left: 0;
            justify-content: flex-start
        }

        .mando-accessories-product-carousel__nav-next {
            position: absolute;
            top: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            width: 60px;
            cursor: pointer;
            right: 0;
            justify-content: flex-end
        }

        .mando-accessories-product-carousel__info {
            max-width: 300px;
            margin: 24px auto 0;
            text-align: center;
            flex-basis: 36px
        }

        @media screen and (max-width: 767px) {
            .mando-accessories-product-carousel__info {
                margin-top: 60px
            }
        }

        .mando-accessories-product-carousel__description {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            color: #9d9390
        }

        .mando-accessories-product-carousel__wrapper {
            display: flex;
            overflow: auto
        }

        .mando-accessories-product-carousel__products {
            display: flex
        }

        @supports not selector(::-webkit-scrollbar) {
            .mando-accessories-product-carousel__products * {
                scrollbar-width: thin;
                scrollbar-color: #e0dcda #3a3330
            }
        }

        .mando-accessories-product-carousel__products::-webkit-scrollbar {
            width: 11px
        }

        .mando-accessories-product-carousel__products::-webkit-scrollbar-track {
            border-radius: 9999px
        }

        .mando-accessories-product-carousel__products::-webkit-scrollbar-thumb {
            background-color: #e0dcda;
            background-clip: padding-box;
            border: 4px solid rgba(0, 0, 0, 0);
            border-radius: 9999px
        }

        .mando-accessories-product-carousel__product {
            position: relative;
            display: flex;
            flex-direction: column
        }

        .mando-accessories-product-carousel__product:first-child {
            margin-left: 24px
        }

        .mando-accessories-product-carousel__product:not(:last-child) {
            margin-right: 12px
        }

        @media screen and (max-width: 480px) {
            .mando-accessories-product-carousel__product:first-child {
                margin-left: 16px
            }

            .mando-accessories-product-carousel__product:last-child {
                margin-right: 16px
            }
        }

        .mando-accessories-product-carousel__tile {
            pointer-events: auto;
            position: relative
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-modern-basket-accessories {
            background-color: #3a3330;
            border-radius: 20px
        }

        @-webkit-keyframes mando-mobile-handle-content-expanded-title-anim {
            100% {
                margin-left: 0
            }
        }

        @keyframes mando-mobile-handle-content-expanded-title-anim {
            100% {
                margin-left: 0
            }
        }

        .mando-modern-basket-accessories__content {
            position: static
        }

        .mando-modern-basket-accessories__thumbnails {
            display: flex;
            margin-left: 72px;
            overflow: hidden
        }

        @media screen and (max-width: 768px) {
            .mando-modern-basket-accessories__thumbnails {
                margin-left: 28px
            }
        }

        .mando-modern-basket-accessories__thumbnails.mando-is-only-one-item {
            margin-left: 0
        }

        .mando-modern-basket-accessories__thumbnails.mando-is-only-one-item::after {
            display: none
        }

        .mando-modern-basket-accessories__thumbnail {
            flex-shrink: 0;
            width: 60px;
            height: 60px;
            margin-right: 12px
        }

        .mando-modern-basket-accessories__thumbnail:first-child {
            margin-left: auto
        }

        .mando-modern-basket-accessories__thumbnail:last-child {
            margin-right: 0
        }

        .mando-modern-basket-accessories__thumbnail-image {
            width: 100%;
            height: 100%;
            -o-object-fit: contain;
            object-fit: contain;
            -o-object-position: center;
            object-position: center
        }

        .mando-modern-basket-accessories__carousel {
            padding: 23px 0 24px
        }

        @media screen and (max-width: 480px) {
            .mando-modern-basket-accessories__carousel {
                padding: 16px 0
            }
        }

        .mando-modern-basket-accessories__carousel-nav {
            margin-left: 24px
        }

        @media screen and (max-width: 768px) {
            .mando-modern-basket-accessories__carousel-nav {
                margin-left: 20px
            }
        }

        .mando-modern-basket-accessories__mobile-handle-content-expanded-wrapper {
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: space-between;
            padding-right: 16px;
            padding-top: 24px;
            padding-bottom: 16px
        }

        .mando-modern-basket-accessories__mobile-handle-content-expanded-title {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #fff;
            margin-left: 116px
        }

        .mando-modern-basket-accessories__mobile-handle-content-expanded-title--expanded {
            -webkit-animation: linear forwards mando-mobile-handle-content-expanded-title-anim 300ms;
            animation: linear forwards mando-mobile-handle-content-expanded-title-anim 300ms
        }
    </style>
    <style type="text/css">
        .ui-icon-down {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-down {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='%23FFF' stroke-width='1.3' d='M4.7 7l5.5 5.6L15.6 7' fill='none' fill-rule='evenodd'/%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-quantity {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            position: relative;
            display: inline-block;
            min-width: 60px;
            outline: none
        }

        .ui-quantity * {
            box-sizing: border-box
        }

        .ui-quantity--activated {
            z-index: 2
        }

        .ui-quantity--disabled {
            cursor: default;
            opacity: .5
        }

        .ui-quantity__handle {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            height: 26px;
            margin: auto;
            padding: 0 6px;
            color: #fff;
            border-bottom: 1px dashed rgba(255, 255, 255, .5);
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .ui-quantity__handle--disabled {
            cursor: default
        }

        .ui-quantity__append {
            margin-left: auto;
            padding-left: 6px
        }

        .ui-quantity__append-icon {
            display: flex;
            align-items: center;
            transition: transform .3s ease
        }

        .ui-quantity__append-icon--activated {
            transform: rotate(180deg)
        }

        .ui-quantity__dropdown {
            color: #fff;
            background-color: rgba(0, 0, 0, .85);
            border-radius: 0 0 8px 8px;
            position: absolute;
            z-index: 0;
            width: 100%;
            max-height: 200px
        }

        .ui-quantity__dropdown-inner {
            position: relative;
            z-index: 1;
            max-height: 200px;
            overflow-y: auto
        }

        @supports not selector(::-webkit-scrollbar) {
            .ui-quantity__dropdown-inner * {
                scrollbar-width: thin;
                scrollbar-color: #e0dcda #000
            }
        }

        .ui-quantity__dropdown-inner::-webkit-scrollbar {
            width: 11px
        }

        .ui-quantity__dropdown-inner::-webkit-scrollbar-track {
            border-radius: 9999px
        }

        .ui-quantity__dropdown-inner::-webkit-scrollbar-thumb {
            background-color: #e0dcda;
            background-clip: padding-box;
            border: 4px solid rgba(0, 0, 0, 0);
            border-radius: 9999px
        }

        .ui-quantity__items {
            margin: 0;
            padding: 6px 0;
            list-style: none
        }

        .ui-quantity__item {
            display: flex;
            align-items: center;
            width: 100%;
            padding: 6px;
            background-color: transparent;
            cursor: pointer;
            transition: background-color .3s;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-single-product {
            position: relative;
            min-height: 480px;
            background: radial-gradient(100% 35% at 50% 110%, rgba(157, 147, 144, 0.4) 0%, #3a3330 100%);
            border-radius: 20px
        }

        @media screen and (max-width: 768px) {
            .mando-single-product {
                min-height: 270px
            }
        }

        .mando-single-product__inner {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 100px 20px 60px;
            border-radius: 20px
        }

        @media screen and (max-width: 768px) {
            .mando-single-product__inner {
                padding: 30px 20px 16px
            }
        }

        .mando-single-product__img {
            width: 212px;
            margin-bottom: 40px
        }

        @media screen and (max-width: 768px) {
            .mando-single-product__img {
                align-self: auto;
                width: 136px;
                height: auto;
                margin-bottom: 24px
            }
        }

        .mando-single-product__name {
            font-weight: 400;
            font-size: 19px;
            font-family: "helvetica", sans-serif;
            line-height: 25px;
            letter-spacing: .1px;
            -webkit-font-smoothing: antialiased;
            display: block;
            max-width: 400px;
            overflow: hidden;
            color: #fff;
            text-align: center
        }

        @media screen and (max-width: 768px) {
            .mando-single-product__name {
                font-weight: 400;
                font-size: 16px;
                font-family: "helvetica", sans-serif;
                line-height: 22px;
                letter-spacing: 0;
                -webkit-font-smoothing: antialiased;
                align-self: auto;
                text-align: center
            }
        }

        .mando-single-product__management {
            position: absolute;
            top: 32px;
            right: 32px;
            opacity: .5
        }

        @media screen and (max-width: 768px) {
            .mando-single-product__management {
                top: 18px;
                right: 18px
            }
        }

        @media screen and (min-width: 769px) {
            .mando-single-product__management-popup {
                position: absolute;
                top: 65px;
                right: 40px;
                z-index: 1
            }
        }

        .mando-single-product__additional {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 20px
        }

        @media screen and (max-width: 768px) {
            .mando-single-product__additional {
                margin-top: 8px
            }
        }

        .mando-single-product__quantity {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            margin-left: auto;
            color: #9d9390
        }

        .mando-single-product__price {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #9d9390
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-modern-products {
            position: relative
        }

        .mando-modern-products__single+.mando-modern-products__list {
            margin-top: 12px
        }

        .mando-modern-products__list {
            padding: 0 24px;
            background-color: #3a3330;
            border-radius: 20px
        }

        .mando-modern-products__list+.mando-modern-products__list {
            margin-top: 12px
        }

        @media screen and (max-width: 768px) {
            .mando-modern-products__list {
                padding: 0 16px
            }
        }

        .mando-modern-products__list--is-not-available {
            opacity: .6
        }

        .mando-modern-products__item {
            position: relative
        }

        .mando-modern-products__item-wrapper:not(:last-child) {
            border-bottom: 1px solid rgba(255, 255, 255, .1)
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-create-order-dialog {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 16px
        }

        .mando-create-order-dialog__title {
            font-weight: 400;
            font-size: 18px;
            font-family: "akzidenz-extended", sans-serif;
            line-height: 26px;
            letter-spacing: .4px;
            -webkit-font-smoothing: antialiased;
            color: #fff;
            background-color: #3a3330;
            font-size: 22px;
            text-align: center
        }

        @media screen and (max-width: 768px) {
            .mando-create-order-dialog__title {
                font-weight: 400;
                font-size: 18px;
                font-family: "akzidenz-extended", sans-serif;
                line-height: 26px;
                letter-spacing: .4px;
                -webkit-font-smoothing: antialiased
            }
        }

        .mando-create-order-dialog__separator {
            margin-top: 16px;
            margin-bottom: 16px
        }

        .mando-create-order-dialog__subtitle {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #a0938d;
            font-size: 16px;
            line-height: 22px
        }

        .mando-create-order-dialog__container {
            padding: 24px;
            background-color: #3a3330;
            border-radius: 20px
        }

        @media screen and (max-width: 768px) {
            .mando-create-order-dialog__container {
                padding: 16px
            }
        }

        .mando-create-order-dialog__body {
            display: flex;
            flex-direction: column;
            text-align: center;
            gap: 16px;
            margin-top: 24px;
            margin-bottom: 46px
        }

        @media screen and (max-width: 768px) {
            .mando-create-order-dialog__body {
                margin-top: 16px;
                margin-bottom: 16px
            }
        }

        .mando-create-order-dialog__footer {
            text-align: center;
            margin: -24px;
            padding: 24px;
            background-color: #2e2826;
            border-radius: 0 0 20px 20px
        }

        @media screen and (max-width: 768px) {
            .mando-create-order-dialog__footer {
                margin: -16px;
                padding: 16px;
                background-color: #3a3330
            }
        }

        .mando-create-order-dialog__disclaimer {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            text-align: center;
            margin-top: 12px;
            color: #a0938d
        }

        .mando-create-order-dialog__disclaimer a {
            color: #f37021
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-cybertrack-banner {
            position: relative;
            height: 124px;
            margin-bottom: 16px;
            overflow: hidden;
            border-radius: 12px
        }

        .mando-cybertrack-banner--is-mobile {
            height: 110px
        }

        .mando-cybertrack-banner__image {
            width: 100%
        }

        .mando-cybertrack-banner__content {
            position: absolute;
            top: 24px;
            left: 24px;
            width: 315px
        }

        @media screen and (max-width: 480px) {
            .mando-cybertrack-banner__content {
                width: 148px
            }
        }

        .mando-cybertrack-banner__title {
            margin-bottom: 3px;
            color: #fff;
            font-weight: 400;
            font-size: 19px;
            font-family: "helvetica", sans-serif;
            line-height: 25px;
            letter-spacing: .1px;
            -webkit-font-smoothing: antialiased
        }

        @media screen and (max-width: 480px) {
            .mando-cybertrack-banner__title {
                font-weight: 400;
                font-size: 16px;
                font-family: "helvetica", sans-serif;
                line-height: 22px;
                letter-spacing: 0;
                -webkit-font-smoothing: antialiased
            }
        }

        .mando-cybertrack-banner__subtitle {
            color: #fff;
            opacity: .5;
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased
        }
    </style>
    <style type="text/css">
        .ui-icon-left {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-left {
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12.8 4.5L7.2 10l5.6 5.4' stroke='%23fff' stroke-width='1.3'/%3E%3C/svg%3E")
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-modern-basket-back {
            display: flex;
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            color: #fff;
            background-color: transparent;
            border: none;
            align-items: center
        }

        .mando-modern-basket-back__label {
            position: relative
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-modern-basket {
            min-height: calc(100vh - 130px);
            overflow: auto;
            display: flex;
            flex-direction: column
        }

        .mando-modern-basket__inner {
            margin: 0 auto
        }

        @media screen and (max-width: 768px) {
            .mando-modern-basket__inner {
                width: 100%
            }
        }

        .mando-modern-basket__header {
            position: relative;
            display: flex;
            margin: 0 auto 40px;
            width: 928px
        }

        @media screen and (max-width: 768px) {
            .mando-modern-basket__header {
                margin-bottom: 23px;
                width: auto;
                padding: 0
            }
        }

        .mando-modern-basket__footer {
            margin-top: auto
        }

        .mando-modern-basket__title {
            font-weight: 400;
            font-size: 18px;
            font-family: "akzidenz-extended", sans-serif;
            line-height: 26px;
            letter-spacing: .4px;
            -webkit-font-smoothing: antialiased;
            position: relative;
            margin: 0 auto;
            color: #fff
        }

        @media screen and (max-width: 768px) {
            .mando-modern-basket__title {
                font-weight: 400;
                font-size: 16px;
                font-family: "akzidenz-extended", sans-serif;
                line-height: 22px;
                letter-spacing: .2px;
                -webkit-font-smoothing: antialiased
            }
        }

        .mando-modern-basket__share-button {
            position: absolute;
            right: 0
        }

        .mando-modern-basket__body {
            position: relative;
            display: flex;
            justify-content: center
        }

        @media screen and (max-width: 768px) {
            .mando-modern-basket__body {
                margin: 1rem;
                flex-direction: column;
            }
        }

        #medium-r-426113 {
            display: none
        }

        @media screen and (max-width: 768px) {
            .mando-modern-basket__shipping-options {
                order: 2;
                padding: 8px 0 16px;
                margin-top: 0;
                margin-bottom: 0;
                border-radius: 0;
                border: none;
                border-bottom: 1px solid #3a3330
            }
        }

        .mando-modern-basket__main {
            width: 100%;
            max-width: 575px;
            min-height: 200px
        }

        @media screen and (max-width: 768px) {
            .mando-modern-basket__main {
                max-width: none
            }
        }

        .mando-modern-basket__sidebar {
            display: flex;
            flex-direction: column;
            width: 338px;
            margin-left: 16px
        }

        @media screen and (max-width: 768px) {
            .mando-modern-basket__sidebar {
                width: 100%;
                margin: 16px 0 0
            }
        }

        @media screen and (max-width: 768px) {
            .mando-modern-basket__order {
                order: 3
            }
        }

        .mando-modern-basket__additional {
            margin-top: 12px
        }

        @media screen and (max-width: 768px) {
            .mando-modern-basket__additional {
                z-index: 0;
                order: 1;
                margin-top: 0;
                margin-bottom: 16px
            }
        }

        .mando-modern-basket__additional-item:not(:last-child) {
            margin-bottom: 12px
        }

        @media screen and (max-width: 768px) {
            .mando-modern-basket__additional-item:not(:last-child) {
                margin-bottom: 18px
            }
        }

        .mando-modern-basket__empty {
            min-width: 395px;
            max-width: 450px;
            margin: 160px auto 60px;
            text-align: center
        }

        @media screen and (max-width: 768px) {
            .mando-modern-basket__empty {
                min-width: calc(100vw - 24px);
                margin-top: 100px
            }
        }

        .mando-modern-basket__empty-title {
            font-weight: 400;
            font-size: 18px;
            font-family: "akzidenz-extended", sans-serif;
            line-height: 26px;
            letter-spacing: .4px;
            -webkit-font-smoothing: antialiased;
            margin-bottom: 8px;
            color: #fff
        }

        .mando-modern-basket__empty-subtitle {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            margin-bottom: 24px;
            color: #9d9390
        }

        .mando-modern-basket__floating-button {
            position: fixed;
            right: 16px;
            bottom: 16px;
            left: 16px;
            z-index: 1;
            opacity: 0;
            transition: opacity .3s, visibility .3s;
            visibility: hidden
        }

        .mando-modern-basket__floating-button--is-visible {
            visibility: visible;
            opacity: 1
        }

        .mando-modern-basket__floating-button--with-tab-bar {
            visibility: visible;
            bottom: 101px
        }

        .mando-modern-basket__empty-buttons-wrapper {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px
        }

        @media screen and (max-width: 480px) {
            .mando-modern-basket__empty-buttons-wrapper {
                flex-direction: column
            }
        }

        .mando-modern-basket__empty-buttons-wrapper--is-authorized {
            justify-content: center
        }

        .mando-modern-basket__empty-button {
            width: 50%
        }

        @media screen and (max-width: 480px) {
            .mando-modern-basket__empty-button {
                width: 100%
            }
        }

        .mando-modern-basket__desktop-accessories {
            margin-top: 12px
        }

        .mando-modern-basket__last-order {
            max-width: 960px;
            width: calc(100vw - 24px)
        }

        .mando-modern-basket__button-back {
            position: absolute;
            left: 0
        }
    </style>
    <script charset="utf-8" src="_nuxtjs/42371655b16e1c1cd170.js"></script>
    <style type="text/css">
        .el-textarea {
            position: relative;
            display: inline-block;
            width: 100%;
            vertical-align: bottom;
            font-size: 14px
        }

        .el-textarea__inner {
            display: block;
            resize: vertical;
            padding: 5px 15px;
            line-height: 1.5;
            box-sizing: border-box;
            width: 100%;
            font-size: inherit;
            color: #606266;
            background-color: #fff;
            background-image: none;
            border: 1px solid #dcdfe6;
            border-radius: 4px;
            transition: border-color .2s cubic-bezier(0.645, 0.045, 0.355, 1)
        }

        .el-textarea__inner::placeholder {
            color: #c0c4cc
        }

        .el-textarea__inner:hover {
            border-color: #c0c4cc
        }

        .el-textarea__inner:focus {
            outline: none;
            border-color: #409eff
        }

        .el-textarea .el-input__count {
            color: #909399;
            background: #fff;
            position: absolute;
            font-size: 12px;
            bottom: 5px;
            right: 10px
        }

        .el-textarea.is-disabled .el-textarea__inner {
            background-color: #f5f7fa;
            border-color: #e4e7ed;
            color: #c0c4cc;
            cursor: not-allowed
        }

        .el-textarea.is-disabled .el-textarea__inner::placeholder {
            color: #c0c4cc
        }

        .el-textarea.is-exceed .el-textarea__inner {
            border-color: #f56c6c
        }

        .el-textarea.is-exceed .el-input__count {
            color: #f56c6c
        }

        .el-input {
            position: relative;
            font-size: 14px;
            display: inline-block;
            width: 100%
        }

        .el-input::-webkit-scrollbar {
            z-index: 11;
            width: 6px
        }

        .el-input::-webkit-scrollbar:horizontal {
            height: 6px
        }

        .el-input::-webkit-scrollbar-thumb {
            border-radius: 5px;
            width: 6px;
            background: #b4bccc
        }

        .el-input::-webkit-scrollbar-corner {
            background: #fff
        }

        .el-input::-webkit-scrollbar-track {
            background: #fff
        }

        .el-input::-webkit-scrollbar-track-piece {
            background: #fff;
            width: 6px
        }

        .el-input .el-input__clear {
            color: #c0c4cc;
            font-size: 14px;
            cursor: pointer;
            transition: color .2s cubic-bezier(0.645, 0.045, 0.355, 1)
        }

        .el-input .el-input__clear:hover {
            color: #909399
        }

        .el-input .el-input__count {
            height: 100%;
            display: inline-flex;
            align-items: center;
            color: #909399;
            font-size: 12px
        }

        .el-input .el-input__count .el-input__count-inner {
            background: #fff;
            line-height: initial;
            display: inline-block;
            padding: 0 5px
        }

        .el-input__inner {
            -webkit-appearance: none;
            background-color: #fff;
            background-image: none;
            border-radius: 4px;
            border: 1px solid #dcdfe6;
            box-sizing: border-box;
            color: #606266;
            display: inline-block;
            font-size: inherit;
            height: 40px;
            line-height: 40px;
            outline: none;
            padding: 0 15px;
            transition: border-color .2s cubic-bezier(0.645, 0.045, 0.355, 1);
            width: 100%
        }

        .el-input__inner::placeholder {
            color: #c0c4cc
        }

        .el-input__inner:hover {
            border-color: #c0c4cc
        }

        .el-input__inner:focus {
            outline: none;
            border-color: #409eff
        }

        .el-input__suffix {
            position: absolute;
            height: 100%;
            right: 5px;
            top: 0;
            text-align: center;
            color: #c0c4cc;
            transition: all .3s;
            pointer-events: none
        }

        .el-input__suffix-inner {
            pointer-events: all
        }

        .el-input__prefix {
            position: absolute;
            height: 100%;
            left: 5px;
            top: 0;
            text-align: center;
            color: #c0c4cc;
            transition: all .3s
        }

        .el-input__icon {
            height: 100%;
            width: 25px;
            text-align: center;
            transition: all .3s;
            line-height: 40px
        }

        .el-input__icon:after {
            content: "";
            height: 100%;
            width: 0;
            display: inline-block;
            vertical-align: middle
        }

        .el-input__validateIcon {
            pointer-events: none
        }

        .el-input.is-active .el-input__inner {
            outline: none;
            border-color: #409eff
        }

        .el-input.is-disabled .el-input__inner {
            background-color: #f5f7fa;
            border-color: #e4e7ed;
            color: #c0c4cc;
            cursor: not-allowed
        }

        .el-input.is-disabled .el-input__inner::placeholder {
            color: #c0c4cc
        }

        .el-input.is-disabled .el-input__icon {
            cursor: not-allowed
        }

        .el-input.is-exceed .el-input__inner {
            border-color: #f56c6c
        }

        .el-input.is-exceed .el-input__suffix .el-input__count {
            color: #f56c6c
        }

        .el-input--suffix .el-input__inner {
            padding-right: 30px
        }

        .el-input--prefix .el-input__inner {
            padding-left: 30px
        }

        .el-input--medium {
            font-size: 14px
        }

        .el-input--medium .el-input__inner {
            height: 36px;
            line-height: 36px
        }

        .el-input--medium .el-input__icon {
            line-height: 36px
        }

        .el-input--small {
            font-size: 13px
        }

        .el-input--small .el-input__inner {
            height: 32px;
            line-height: 32px
        }

        .el-input--small .el-input__icon {
            line-height: 32px
        }

        .el-input--mini {
            font-size: 12px
        }

        .el-input--mini .el-input__inner {
            height: 28px;
            line-height: 28px
        }

        .el-input--mini .el-input__icon {
            line-height: 28px
        }

        .el-input-group {
            line-height: normal;
            display: inline-table;
            width: 100%;
            border-collapse: separate;
            border-spacing: 0
        }

        .el-input-group>.el-input__inner {
            vertical-align: middle;
            display: table-cell
        }

        .el-input-group__append,
        .el-input-group__prepend {
            background-color: #f5f7fa;
            color: #909399;
            vertical-align: middle;
            display: table-cell;
            position: relative;
            border: 1px solid #dcdfe6;
            border-radius: 4px;
            padding: 0 20px;
            width: 1px;
            white-space: nowrap
        }

        .el-input-group__append:focus,
        .el-input-group__prepend:focus {
            outline: none
        }

        .el-input-group__append .el-select,
        .el-input-group__append .el-button,
        .el-input-group__prepend .el-select,
        .el-input-group__prepend .el-button {
            display: inline-block;
            margin: -10px -20px
        }

        .el-input-group__append button.el-button,
        .el-input-group__append div.el-select .el-input__inner,
        .el-input-group__append div.el-select:hover .el-input__inner,
        .el-input-group__prepend button.el-button,
        .el-input-group__prepend div.el-select .el-input__inner,
        .el-input-group__prepend div.el-select:hover .el-input__inner {
            border-color: transparent;
            background-color: transparent;
            color: inherit;
            border-top: 0;
            border-bottom: 0
        }

        .el-input-group__append .el-button,
        .el-input-group__append .el-input,
        .el-input-group__prepend .el-button,
        .el-input-group__prepend .el-input {
            font-size: inherit
        }

        .el-input-group__prepend {
            border-right: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .el-input-group__append {
            border-left: 0;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .el-input-group--prepend .el-input__inner {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .el-input-group--prepend .el-select .el-input.is-focus .el-input__inner {
            border-color: transparent
        }

        .el-input-group--append .el-input__inner {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .el-input-group--append .el-select .el-input.is-focus .el-input__inner {
            border-color: transparent
        }

        .el-input__inner::-ms-clear {
            display: none;
            width: 0;
            height: 0
        }

        .el-input-number {
            position: relative;
            display: inline-block;
            width: 180px;
            line-height: 38px
        }

        .el-input-number .el-input {
            display: block
        }

        .el-input-number .el-input__inner {
            -webkit-appearance: none;
            padding-left: 50px;
            padding-right: 50px;
            text-align: center
        }

        .el-input-number__increase,
        .el-input-number__decrease {
            position: absolute;
            z-index: 1;
            top: 1px;
            width: 40px;
            height: auto;
            text-align: center;
            background: #f5f7fa;
            color: #606266;
            cursor: pointer;
            font-size: 13px
        }

        .el-input-number__increase:hover,
        .el-input-number__decrease:hover {
            color: #409eff
        }

        .el-input-number__increase:hover:not(.is-disabled)~.el-input .el-input__inner:not(.is-disabled),
        .el-input-number__decrease:hover:not(.is-disabled)~.el-input .el-input__inner:not(.is-disabled) {
            border-color: #409eff
        }

        .el-input-number__increase.is-disabled,
        .el-input-number__decrease.is-disabled {
            color: #c0c4cc;
            cursor: not-allowed
        }

        .el-input-number__increase {
            right: 1px;
            border-radius: 0 4px 4px 0;
            border-left: 1px solid #dcdfe6
        }

        .el-input-number__decrease {
            left: 1px;
            border-radius: 4px 0 0 4px;
            border-right: 1px solid #dcdfe6
        }

        .el-input-number.is-disabled .el-input-number__increase,
        .el-input-number.is-disabled .el-input-number__decrease {
            border-color: #e4e7ed;
            color: #e4e7ed
        }

        .el-input-number.is-disabled .el-input-number__increase:hover,
        .el-input-number.is-disabled .el-input-number__decrease:hover {
            color: #e4e7ed;
            cursor: not-allowed
        }

        .el-input-number--medium {
            width: 200px;
            line-height: 34px
        }

        .el-input-number--medium .el-input-number__increase,
        .el-input-number--medium .el-input-number__decrease {
            width: 36px;
            font-size: 14px
        }

        .el-input-number--medium .el-input__inner {
            padding-left: 43px;
            padding-right: 43px
        }

        .el-input-number--small {
            width: 130px;
            line-height: 30px
        }

        .el-input-number--small .el-input-number__increase,
        .el-input-number--small .el-input-number__decrease {
            width: 32px;
            font-size: 13px
        }

        .el-input-number--small .el-input-number__increase [class*=el-icon],
        .el-input-number--small .el-input-number__decrease [class*=el-icon] {
            transform: scale(0.9)
        }

        .el-input-number--small .el-input__inner {
            padding-left: 39px;
            padding-right: 39px
        }

        .el-input-number--mini {
            width: 130px;
            line-height: 26px
        }

        .el-input-number--mini .el-input-number__increase,
        .el-input-number--mini .el-input-number__decrease {
            width: 28px;
            font-size: 12px
        }

        .el-input-number--mini .el-input-number__increase [class*=el-icon],
        .el-input-number--mini .el-input-number__decrease [class*=el-icon] {
            transform: scale(0.8)
        }

        .el-input-number--mini .el-input__inner {
            padding-left: 35px;
            padding-right: 35px
        }

        .el-input-number.is-without-controls .el-input__inner {
            padding-left: 15px;
            padding-right: 15px
        }

        .el-input-number.is-controls-right .el-input__inner {
            padding-left: 15px;
            padding-right: 50px
        }

        .el-input-number.is-controls-right .el-input-number__increase,
        .el-input-number.is-controls-right .el-input-number__decrease {
            height: auto;
            line-height: 19px
        }

        .el-input-number.is-controls-right .el-input-number__increase [class*=el-icon],
        .el-input-number.is-controls-right .el-input-number__decrease [class*=el-icon] {
            transform: scale(0.8)
        }

        .el-input-number.is-controls-right .el-input-number__increase {
            border-radius: 0 4px 0 0;
            border-bottom: 1px solid #dcdfe6
        }

        .el-input-number.is-controls-right .el-input-number__decrease {
            right: 1px;
            bottom: 1px;
            top: auto;
            left: auto;
            border-right: none;
            border-left: 1px solid #dcdfe6;
            border-radius: 0 0 4px 0
        }

        .el-input-number.is-controls-right[class*=medium] [class*=increase],
        .el-input-number.is-controls-right[class*=medium] [class*=decrease] {
            line-height: 17px
        }

        .el-input-number.is-controls-right[class*=small] [class*=increase],
        .el-input-number.is-controls-right[class*=small] [class*=decrease] {
            line-height: 15px
        }

        .el-input-number.is-controls-right[class*=mini] [class*=increase],
        .el-input-number.is-controls-right[class*=mini] [class*=decrease] {
            line-height: 13px
        }

        .el-tooltip:focus:not(.focusing),
        .el-tooltip:focus:hover {
            outline-width: 0
        }

        .el-tooltip__popper {
            position: absolute;
            border-radius: 4px;
            padding: 10px;
            z-index: 2000;
            font-size: 12px;
            line-height: 1.2;
            min-width: 10px;
            word-wrap: break-word
        }

        .el-tooltip__popper .popper__arrow,
        .el-tooltip__popper .popper__arrow::after {
            position: absolute;
            display: block;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid
        }

        .el-tooltip__popper .popper__arrow {
            border-width: 6px
        }

        .el-tooltip__popper .popper__arrow::after {
            content: " ";
            border-width: 5px
        }

        .el-tooltip__popper[x-placement^=top] {
            margin-bottom: 12px
        }

        .el-tooltip__popper[x-placement^=top] .popper__arrow {
            bottom: -6px;
            border-top-color: #303133;
            border-bottom-width: 0
        }

        .el-tooltip__popper[x-placement^=top] .popper__arrow::after {
            bottom: 1px;
            margin-left: -5px;
            border-top-color: #303133;
            border-bottom-width: 0
        }

        .el-tooltip__popper[x-placement^=bottom] {
            margin-top: 12px
        }

        .el-tooltip__popper[x-placement^=bottom] .popper__arrow {
            top: -6px;
            border-top-width: 0;
            border-bottom-color: #303133
        }

        .el-tooltip__popper[x-placement^=bottom] .popper__arrow::after {
            top: 1px;
            margin-left: -5px;
            border-top-width: 0;
            border-bottom-color: #303133
        }

        .el-tooltip__popper[x-placement^=right] {
            margin-left: 12px
        }

        .el-tooltip__popper[x-placement^=right] .popper__arrow {
            left: -6px;
            border-right-color: #303133;
            border-left-width: 0
        }

        .el-tooltip__popper[x-placement^=right] .popper__arrow::after {
            bottom: -5px;
            left: 1px;
            border-right-color: #303133;
            border-left-width: 0
        }

        .el-tooltip__popper[x-placement^=left] {
            margin-right: 12px
        }

        .el-tooltip__popper[x-placement^=left] .popper__arrow {
            right: -6px;
            border-right-width: 0;
            border-left-color: #303133
        }

        .el-tooltip__popper[x-placement^=left] .popper__arrow::after {
            right: 1px;
            bottom: -5px;
            margin-left: -5px;
            border-right-width: 0;
            border-left-color: #303133
        }

        .el-tooltip__popper.is-dark {
            background: #303133;
            color: #fff
        }

        .el-tooltip__popper.is-light {
            background: #fff;
            border: 1px solid #303133
        }

        .el-tooltip__popper.is-light[x-placement^=top] .popper__arrow {
            border-top-color: #303133
        }

        .el-tooltip__popper.is-light[x-placement^=top] .popper__arrow::after {
            border-top-color: #fff
        }

        .el-tooltip__popper.is-light[x-placement^=bottom] .popper__arrow {
            border-bottom-color: #303133
        }

        .el-tooltip__popper.is-light[x-placement^=bottom] .popper__arrow::after {
            border-bottom-color: #fff
        }

        .el-tooltip__popper.is-light[x-placement^=left] .popper__arrow {
            border-left-color: #303133
        }

        .el-tooltip__popper.is-light[x-placement^=left] .popper__arrow::after {
            border-left-color: #fff
        }

        .el-tooltip__popper.is-light[x-placement^=right] .popper__arrow {
            border-right-color: #303133
        }

        .el-tooltip__popper.is-light[x-placement^=right] .popper__arrow::after {
            border-right-color: #fff
        }

        .el-slider::before,
        .el-slider::after {
            display: table;
            content: ""
        }

        .el-slider::after {
            clear: both
        }

        .el-slider__runway {
            width: 100%;
            height: 6px;
            margin: 16px 0;
            background-color: #e4e7ed;
            border-radius: 3px;
            position: relative;
            cursor: pointer;
            vertical-align: middle
        }

        .el-slider__runway.show-input {
            margin-right: 160px;
            width: auto
        }

        .el-slider__runway.disabled {
            cursor: default
        }

        .el-slider__runway.disabled .el-slider__bar {
            background-color: #c0c4cc
        }

        .el-slider__runway.disabled .el-slider__button {
            border-color: #c0c4cc
        }

        .el-slider__runway.disabled .el-slider__button-wrapper:hover,
        .el-slider__runway.disabled .el-slider__button-wrapper.hover {
            cursor: not-allowed
        }

        .el-slider__runway.disabled .el-slider__button-wrapper.dragging {
            cursor: not-allowed
        }

        .el-slider__runway.disabled .el-slider__button:hover,
        .el-slider__runway.disabled .el-slider__button.hover,
        .el-slider__runway.disabled .el-slider__button.dragging {
            transform: scale(1)
        }

        .el-slider__runway.disabled .el-slider__button:hover,
        .el-slider__runway.disabled .el-slider__button.hover {
            cursor: not-allowed
        }

        .el-slider__runway.disabled .el-slider__button.dragging {
            cursor: not-allowed
        }

        .el-slider__input {
            float: right;
            margin-top: 3px;
            width: 130px
        }

        .el-slider__input.el-input-number--mini {
            margin-top: 5px
        }

        .el-slider__input.el-input-number--medium {
            margin-top: 0
        }

        .el-slider__input.el-input-number--large {
            margin-top: -2px
        }

        .el-slider__bar {
            height: 6px;
            background-color: #409eff;
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
            position: absolute
        }

        .el-slider__button-wrapper {
            height: 36px;
            width: 36px;
            position: absolute;
            z-index: 1001;
            top: -15px;
            transform: translateX(-50%);
            background-color: transparent;
            text-align: center;
            user-select: none;
            line-height: normal
        }

        .el-slider__button-wrapper::after {
            display: inline-block;
            content: "";
            height: 100%;
            vertical-align: middle
        }

        .el-slider__button-wrapper .el-tooltip {
            vertical-align: middle;
            display: inline-block
        }

        .el-slider__button-wrapper:hover,
        .el-slider__button-wrapper.hover {
            cursor: grab
        }

        .el-slider__button-wrapper.dragging {
            cursor: grabbing
        }

        .el-slider__button {
            width: 16px;
            height: 16px;
            border: solid 2px #409eff;
            background-color: #fff;
            border-radius: 50%;
            transition: .2s;
            user-select: none
        }

        .el-slider__button:hover,
        .el-slider__button.hover,
        .el-slider__button.dragging {
            transform: scale(1.2)
        }

        .el-slider__button:hover,
        .el-slider__button.hover {
            cursor: grab
        }

        .el-slider__button.dragging {
            cursor: grabbing
        }

        .el-slider__stop {
            position: absolute;
            height: 6px;
            width: 6px;
            border-radius: 100%;
            background-color: #fff;
            transform: translateX(-50%)
        }

        .el-slider__marks {
            top: 0;
            left: 12px;
            width: 18px;
            height: 100%
        }

        .el-slider__marks-text {
            position: absolute;
            transform: translateX(-50%);
            font-size: 14px;
            color: #909399;
            margin-top: 15px
        }

        .el-slider.is-vertical {
            position: relative
        }

        .el-slider.is-vertical .el-slider__runway {
            width: 6px;
            height: 100%;
            margin: 0 16px
        }

        .el-slider.is-vertical .el-slider__bar {
            width: 6px;
            height: auto;
            border-radius: 0 0 3px 3px
        }

        .el-slider.is-vertical .el-slider__button-wrapper {
            top: auto;
            left: -15px;
            transform: translateY(50%)
        }

        .el-slider.is-vertical .el-slider__stop {
            transform: translateY(50%)
        }

        .el-slider.is-vertical.el-slider--with-input {
            padding-bottom: 58px
        }

        .el-slider.is-vertical.el-slider--with-input .el-slider__input {
            overflow: visible;
            float: none;
            position: absolute;
            bottom: 22px;
            width: 36px;
            margin-top: 15px
        }

        .el-slider.is-vertical.el-slider--with-input .el-slider__input .el-input__inner {
            text-align: center;
            padding-left: 5px;
            padding-right: 5px
        }

        .el-slider.is-vertical.el-slider--with-input .el-slider__input .el-input-number__decrease,
        .el-slider.is-vertical.el-slider--with-input .el-slider__input .el-input-number__increase {
            top: 32px;
            margin-top: -1px;
            border: 1px solid #dcdfe6;
            line-height: 20px;
            box-sizing: border-box;
            transition: border-color .2s cubic-bezier(0.645, 0.045, 0.355, 1)
        }

        .el-slider.is-vertical.el-slider--with-input .el-slider__input .el-input-number__decrease {
            width: 18px;
            right: 18px;
            border-bottom-left-radius: 4px
        }

        .el-slider.is-vertical.el-slider--with-input .el-slider__input .el-input-number__increase {
            width: 19px;
            border-bottom-right-radius: 4px
        }

        .el-slider.is-vertical.el-slider--with-input .el-slider__input .el-input-number__increase~.el-input .el-input__inner {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0
        }

        .el-slider.is-vertical.el-slider--with-input .el-slider__input:hover .el-input-number__decrease,
        .el-slider.is-vertical.el-slider--with-input .el-slider__input:hover .el-input-number__increase {
            border-color: #c0c4cc
        }

        .el-slider.is-vertical.el-slider--with-input .el-slider__input:active .el-input-number__decrease,
        .el-slider.is-vertical.el-slider--with-input .el-slider__input:active .el-input-number__increase {
            border-color: #409eff
        }

        .el-slider.is-vertical .el-slider__marks-text {
            margin-top: 0;
            left: 15px;
            transform: translateY(50%)
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-slider--view--wide {
            position: relative;
            padding-top: 15px
        }

        .ui-slider--view--wide .el-slider__runway {
            height: 20px;
            background-color: #2e2826;
            border: solid 1px #9d9390;
            border-radius: 10px
        }

        .ui-slider--view--wide .el-slider__bar {
            height: 18px;
            background-color: #9d9390;
            border-radius: 10px
        }

        .ui-slider--view--wide .el-slider__button {
            width: 20px;
            height: 20px;
            background-color: #f37021;
            border: 1px solid #fff;
            box-shadow: inset 0 0 0 4px #2e2826
        }

        .ui-slider--view--wide .el-slider__button-wrapper {
            top: -9px;
            width: 36px;
            height: 36px
        }

        .ui-slider--view--wide .el-slider__stop {
            display: none
        }

        .ui-slider--view--wide .el-slider__marks-text {
            top: -50px;
            color: #9d9390;
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased
        }

        .ui-slider--view--thin .el-input__inner:focus {
            border-color: unset
        }

        .ui-slider--view--thin .el-slider__bar {
            height: 6px;
            background-color: #f37021;
            border-radius: 0
        }

        .ui-slider--view--thin .el-slider__runway {
            height: 6px;
            background-color: #e0dcda;
            border-radius: 0
        }

        .ui-slider--view--thin .el-slider__button {
            border: 2px solid #9d9390
        }

        .ui-slider--view--thin .el-slider__button-wrapper {
            top: -15px
        }
    </style>
    <style type="text/css">
        .ui-poll-field-slider__group {
            width: 320px
        }

        @media screen and (max-width: 479px) {
            .ui-poll-field-slider__group {
                width: 100%
            }
        }
    </style>
    <style type="text/css">
        .ui-poll-field-input__control {
            position: relative
        }
    </style>
    <style type="text/css">
        .ui-poll-field-textarea {
            position: relative
        }
    </style>
    <style type="text/css">
        @media screen and (max-width: 479px) {
            .ui-poll-field-checkbox__control {
                align-items: flex-start
            }
        }

        .ui-poll-field-checkbox__control:not(:last-child) {
            margin-bottom: 20px
        }

        .ui-poll-field-checkbox__group {
            display: flex;
            flex-direction: column
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-radio {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            position: relative;
            display: inline-flex;
            align-items: center;
            color: #fff;
            outline: none;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .ui-radio::before {
            position: relative;
            display: flex;
            flex-shrink: 0;
            box-sizing: initial;
            width: 1.25em;
            height: 1.25em;
            border: 1px solid rgba(255, 255, 255, .4);
            border-radius: 50%;
            cursor: pointer;
            transition: background .15s ease-out;
            content: ""
        }

        .ui-radio::after {
            position: absolute;
            top: -50%;
            bottom: -50%;
            left: calc((1.25em - 0.75em) / 2 + 1px);
            display: flex;
            box-sizing: initial;
            width: .75em;
            height: .75em;
            margin: auto;
            background-color: #f37021;
            border-radius: 50%;
            transform: scale(0);
            transition: transform .15s ease-out;
            content: ""
        }

        .ui-radio.ui-is-checked::after {
            transform: scale(1)
        }

        .ui-radio__control {
            position: absolute;
            left: 0;
            z-index: -1;
            outline: none;
            opacity: 0
        }

        .ui-radio__label {
            padding-left: .5em
        }
    </style>
    <style type="text/css">
        .ui-poll-field-radio__radio-group {
            display: flex;
            flex-direction: column
        }

        .ui-poll-field-radio__radio {
            display: inline-flex;
            align-items: center
        }

        .ui-poll-field-radio__radio:not(:last-child) {
            margin-bottom: 20px
        }
    </style>
    <style type="text/css">
        .ui-poll-field-rate__group {
            display: flex;
            flex-direction: row
        }

        .ui-poll-field-rate__radio:not(:first-child) {
            margin-left: 29px
        }

        @media screen and (max-width: 479px) {
            .ui-poll-field-rate__radio:not(:first-child) {
                margin-left: 14px
            }
        }
    </style>
    <style type="text/css">
        .ui-poll-field-phone__control {
            position: relative;
            width: 100%
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-poll-field-email__control {
            position: relative;
            width: 100%
        }

        .ui-poll-field-email__group {
            position: relative
        }

        .ui-poll-field-email__message {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            position: absolute;
            bottom: -25px;
            left: 0;
            color: #fff
        }

        @media screen and (max-width: 479px) {
            .ui-poll-field-email__message {
                position: static;
                margin-top: 10px
            }
        }
    </style>
    <style type="text/css">
        .el-radio {
            color: #606266;
            font-weight: 500;
            line-height: 1;
            position: relative;
            cursor: pointer;
            display: inline-block;
            white-space: nowrap;
            outline: none;
            font-size: 14px;
            margin-right: 30px;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none
        }

        .el-radio.is-bordered {
            padding: 12px 20px 0 10px;
            border-radius: 4px;
            border: 1px solid #dcdfe6;
            box-sizing: border-box;
            height: 40px
        }

        .el-radio.is-bordered.is-checked {
            border-color: #409eff
        }

        .el-radio.is-bordered.is-disabled {
            cursor: not-allowed;
            border-color: #ebeef5
        }

        .el-radio.is-bordered+.el-radio.is-bordered {
            margin-left: 10px
        }

        .el-radio--medium.is-bordered {
            padding: 10px 20px 0 10px;
            border-radius: 4px;
            height: 36px
        }

        .el-radio--medium.is-bordered .el-radio__label {
            font-size: 14px
        }

        .el-radio--medium.is-bordered .el-radio__inner {
            height: 14px;
            width: 14px
        }

        .el-radio--small.is-bordered {
            padding: 8px 15px 0 10px;
            border-radius: 3px;
            height: 32px
        }

        .el-radio--small.is-bordered .el-radio__label {
            font-size: 12px
        }

        .el-radio--small.is-bordered .el-radio__inner {
            height: 12px;
            width: 12px
        }

        .el-radio--mini.is-bordered {
            padding: 6px 15px 0 10px;
            border-radius: 3px;
            height: 28px
        }

        .el-radio--mini.is-bordered .el-radio__label {
            font-size: 12px
        }

        .el-radio--mini.is-bordered .el-radio__inner {
            height: 12px;
            width: 12px
        }

        .el-radio:last-child {
            margin-right: 0
        }

        .el-radio__input {
            white-space: nowrap;
            cursor: pointer;
            outline: none;
            display: inline-block;
            line-height: 1;
            position: relative;
            vertical-align: middle
        }

        .el-radio__input.is-disabled .el-radio__inner {
            background-color: #f5f7fa;
            border-color: #e4e7ed;
            cursor: not-allowed
        }

        .el-radio__input.is-disabled .el-radio__inner::after {
            cursor: not-allowed;
            background-color: #f5f7fa
        }

        .el-radio__input.is-disabled .el-radio__inner+.el-radio__label {
            cursor: not-allowed
        }

        .el-radio__input.is-disabled.is-checked .el-radio__inner {
            background-color: #f5f7fa;
            border-color: #e4e7ed
        }

        .el-radio__input.is-disabled.is-checked .el-radio__inner::after {
            background-color: #c0c4cc
        }

        .el-radio__input.is-disabled+span.el-radio__label {
            color: #c0c4cc;
            cursor: not-allowed
        }

        .el-radio__input.is-checked .el-radio__inner {
            border-color: #fff;
            background: none
        }

        .el-radio__input.is-checked .el-radio__inner::after {
            transform: translate(-50%, -50%) scale(1)
        }

        .el-radio__input.is-checked+.el-radio__label {
            color: #fff
        }

        .el-radio__input.is-focus .el-radio__inner {
            border-color: transparent !important
        }

        .el-radio__inner {
            border: 1px solid #dcdfe6;
            border-radius: 100%;
            width: 20px;
            height: 20px;
            background-color: transparent;
            position: relative;
            cursor: pointer;
            display: inline-block;
            box-sizing: border-box
        }

        .el-radio__inner:hover {
            border-color: transparent !important
        }

        .el-radio__inner::after {
            width: 4px;
            height: 4px;
            border-radius: 100%;
            background-color: #fff;
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: transform .15s ease-in
        }

        .el-radio__original {
            opacity: 0;
            outline: none;
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: 0
        }

        .el-radio:focus:not(.is-focus):not(:active):not(.is-disabled) .el-radio__inner {
            box-shadow: 0 0 2px 2px transparent !important
        }

        .el-radio__label {
            font-size: 18px;
            padding-left: 10px
        }

        .v-radio-icon.el-radio {
            display: inline-flex;
            align-items: center;
            font-weight: 400;
            -webkit-tap-highlight-color: transparent
        }

        .v-radio-icon.el-radio:first-child {
            padding-bottom: 15px
        }

        .v-radio-icon.el-radio:first-child .el-radio__inner {
            width: 44px;
            height: 44px
        }

        .v-radio-icon.el-radio:first-child .el-radio__inner::after {
            background-color: transparent;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='24' height='18' viewBox='0 0 24 18' fill='%238f8480' xmlns='http://www.w3.org/2000/svg'%3E %3Cpath d='M23.0015 1.31908C22.5589 0.893639 21.8414 0.893639 21.3987 1.31908L7.82066 14.3703L2.60149 9.35369C2.15892 8.92824 1.44138 8.92829 0.998712 9.35369C0.556093 9.77909 0.556093 10.4688 0.998712 10.8942L7.01927 16.6811C7.46171 17.1065 8.17979 17.1062 8.62205 16.6811L23.0015 2.85966C23.4441 2.43426 23.444 1.74452 23.0015 1.31908Z' fill='white' stroke='%23F37021' stroke-width='0.4'/%3E %3C/svg%3E");
            transform: unset;
            opacity: .4
        }

        .v-radio-icon.el-radio:first-child .el-radio__input.is-checked .el-radio__inner {
            border-color: transparent
        }

        .v-radio-icon.el-radio:first-child .el-radio__input.is-checked .el-radio__inner::after {
            background-color: #f37021;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='24' height='18' viewBox='0 0 24 18' fill='white' xmlns='http://www.w3.org/2000/svg'%3E %3Cpath d='M23.0015 1.31908C22.5589 0.893639 21.8414 0.893639 21.3987 1.31908L7.82066 14.3703L2.60149 9.35369C2.15892 8.92824 1.44138 8.92829 0.998712 9.35369C0.556093 9.77909 0.556093 10.4688 0.998712 10.8942L7.01927 16.6811C7.46171 17.1065 8.17979 17.1062 8.62205 16.6811L23.0015 2.85966C23.4441 2.43426 23.444 1.74452 23.0015 1.31908Z' fill='white' stroke='%23F37021' stroke-width='0.4'/%3E %3C/svg%3E");
            opacity: 1
        }

        .v-radio-icon.el-radio:nth-of-type(2) .el-radio__inner {
            width: 44px;
            height: 44px
        }

        .v-radio-icon.el-radio:nth-of-type(2) .el-radio__inner::after {
            background-color: transparent;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='27' height='27' viewBox='0 0 27 27' fill='%238f8480' xmlns='http://www.w3.org/2000/svg'%3E %3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M20.8757 20.8755C20.598 21.1532 20.1478 21.1532 19.8701 20.8755L13.3333 14.3387L6.79644 20.8755C6.51874 21.1532 6.06849 21.1532 5.79078 20.8755C5.51307 20.5978 5.51307 20.1475 5.79078 19.8698L12.3276 13.333L5.79078 6.79618C5.51307 6.51848 5.51307 6.06823 5.79078 5.79052C6.06849 5.51281 6.51874 5.51281 6.79644 5.79052L13.3333 12.3273L19.8701 5.79052C20.1478 5.51281 20.598 5.51281 20.8757 5.79052C21.1534 6.06823 21.1534 6.51848 20.8757 6.79618L14.3389 13.333L20.8757 19.8698C21.1534 20.1475 21.1534 20.5978 20.8757 20.8755Z' fill='white'/%3E %3C/svg%3E");
            transform: unset;
            opacity: .4
        }

        .v-radio-icon.el-radio:nth-of-type(2) .el-radio__input.is-checked .el-radio__inner {
            border-color: transparent
        }

        .v-radio-icon.el-radio:nth-of-type(2) .el-radio__input.is-checked .el-radio__inner::after {
            background-color: #f37021;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='27' height='27' viewBox='0 0 27 27' fill='white' xmlns='http://www.w3.org/2000/svg'%3E %3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M20.8757 20.8755C20.598 21.1532 20.1478 21.1532 19.8701 20.8755L13.3333 14.3387L6.79644 20.8755C6.51874 21.1532 6.06849 21.1532 5.79078 20.8755C5.51307 20.5978 5.51307 20.1475 5.79078 19.8698L12.3276 13.333L5.79078 6.79618C5.51307 6.51848 5.51307 6.06823 5.79078 5.79052C6.06849 5.51281 6.51874 5.51281 6.79644 5.79052L13.3333 12.3273L19.8701 5.79052C20.1478 5.51281 20.598 5.51281 20.8757 5.79052C21.1534 6.06823 21.1534 6.51848 20.8757 6.79618L14.3389 13.333L20.8757 19.8698C21.1534 20.1475 21.1534 20.5978 20.8757 20.8755Z' fill='white'/%3E %3C/svg%3E");
            opacity: 1
        }

        .v-radio-icon .el-radio__input.is-checked .el-radio__inner::after {
            background-color: #f37021
        }

        .v-radio-icon .el-radio__input.is-checked .el-radio__inner:hover {
            border-color: #fff
        }

        .v-radio-icon .el-radio__inner {
            width: 44px;
            height: 44px;
            border-color: rgba(255, 255, 255, .2)
        }

        .v-radio-icon .el-radio__inner::after {
            top: 0;
            left: 0;
            z-index: 10;
            display: inline-block;
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            background-position: center
        }

        .v-radio-icon .el-radio__inner {
            -webkit-tap-highlight-color: transparent
        }

        .v-radio-icon .el-radio__inner:hover {
            border-color: #fff
        }

        .v-radio-icon .el-radio__input.is-checked .el-radio__inner .el-radio:focus:not(.is-focus):not(:active):not(.is-disabled) .el-radio__inner {
            box-shadow: transparent !important
        }
    </style>
    <style type="text/css">
        .ui-poll-field-radio-icon {
            position: relative
        }
    </style>
    <style type="text/css">
        .el-icon-star-off::before {
            opacity: .2;
            zoom: 220%
        }

        .el-icon-star-on::before {
            zoom: 220%
        }

        .el-rate {
            height: auto !important
        }

        .el-rate:focus {
            outline-style: none;
            outline-color: transparent
        }

        .el-rate__icon:hover {
            transform: none
        }

        .el-rate__item {
            -webkit-tap-highlight-color: transparent
        }

        .el-rate__item:not(:last-child) {
            margin-right: 5px
        }

        @media screen and (max-width: 374px) {
            .el-rate__item {
                margin-right: 0 !important
            }
        }
    </style>
    <style type="text/css">
        .ui-poll-field-rate-star {
            box-sizing: unset !important
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-poll-step {
            position: relative;
            width: 100%;
            margin-bottom: 15px;
            padding: 50px;
            background-color: rgba(0, 0, 0, .5);
            border-radius: 12px;
            opacity: .3;
            transition: opacity .7s ease-in-out
        }

        @media screen and (max-width: 479px) {
            .ui-poll-step {
                width: 90%;
                padding: 20px 15px;
                background-color: rgba(0, 0, 0, .5)
            }
        }

        .ui-poll-step[disabled] {
            pointer-events: none
        }

        .ui-poll-step input,
        .ui-poll-step textarea {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased
        }

        .ui-poll-step__label {
            position: absolute;
            top: 50px;
            right: 50px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
            background-color: #f37021;
            border-radius: 50%
        }

        .ui-poll-step__label::before {
            display: block;
            width: 12px;
            height: 10px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 15 12' xmlns='http://www.w3.org/2000/svg' fill='%23fff'%3E %3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M6.42837 11.5726C6.24124 11.8015 5.89744 11.8189 5.68813 11.6101L0.547522 6.48174C0.24713 6.18207 0.251992 5.69396 0.558294 5.40032C0.855558 5.11535 1.32617 5.12056 1.61705 5.41205L5.79394 9.59763C5.87763 9.68149 6.01546 9.67463 6.0904 9.58288L13.383 0.65503C13.6692 0.304713 14.1955 0.278926 14.5146 0.599596C14.7904 0.876809 14.8119 1.31767 14.5644 1.62041L6.42837 11.5726Z'/%3E %3C/svg%3E");
            content: ""
        }

        .ui-poll-step__label.ui-fade-enter-active,
        .ui-poll-step__label.ui-fade-leave-active {
            transition: opacity .5s
        }

        .ui-poll-step__label.ui-fade-enter,
        .ui-poll-step__label.ui-fade-leave-to {
            opacity: 0
        }

        @media screen and (max-width: 479px) {
            .ui-poll-step__label {
                top: 20px;
                right: 15px
            }
        }

        .ui-poll-step--active {
            opacity: 1
        }

        .ui-poll-step--answered {
            opacity: 1
        }

        .ui-poll-step--answered input,
        .ui-poll-step--answered textarea {
            color: #000;
            background-color: #fff
        }

        .ui-poll-step--answered .ui-input__content {
            padding: 0 16px;
            color: #000
        }

        .ui-poll-step--answered .ui-input__inner {
            padding: 0
        }

        .ui-poll-step__number {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            margin-bottom: 4px;
            color: #fff;
            opacity: .5
        }

        .ui-poll-step__question {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            margin: 0 0 25px;
            color: #fff
        }
    </style>
    <style type="text/css">
        .ui-icon-done {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain
        }

        .ui-icon-done {
            width: 40px;
            height: 40px;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='42' height='42' viewBox='0 0 42 42' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Crect opacity='0.5' x='1' y='1' width='40' height='40' rx='20' stroke='white'/%3E %3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M19.43 28.6623C19.2433 28.8839 18.9081 28.9009 18.6999 28.6994L11.759 21.9813C11.3517 21.5871 11.3583 20.932 11.7733 20.546C12.1593 20.187 12.7589 20.1936 13.1368 20.5611L18.7599 26.028C18.8432 26.109 18.9776 26.1023 19.0523 26.0135L28.8051 14.4295C29.1793 13.985 29.8529 13.9526 30.2689 14.3583C30.6441 14.7242 30.6738 15.3183 30.336 15.7191L19.43 28.6623Z' fill='white'/%3E %3C/svg%3E")
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-poll-thank-you {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 36px 50px;
            padding: 60px;
            color: #fff;
            background-color: rgba(0, 0, 0, .5);
            border-radius: 12px
        }

        @media screen and (max-width: 479px) {
            .ui-poll-thank-you {
                margin: 20px 30px;
                padding: 15px
            }
        }

        .ui-poll-thank-you__title {
            font-weight: 400;
            font-size: 18px;
            font-family: "helvetica", sans-serif;
            line-height: 23px;
            letter-spacing: 1px;
            -webkit-font-smoothing: antialiased;
            margin-bottom: 15px
        }

        .ui-poll-thank-you__description {
            font-weight: 400;
            font-size: 18px;
            font-family: "helvetica", sans-serif;
            line-height: 23px;
            letter-spacing: 1px;
            -webkit-font-smoothing: antialiased;
            opacity: .5
        }

        .ui-poll-thank-you__icon {
            width: 40px;
            height: 40px
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-poll-section {
            padding: 24px 50px;
            background-color: #3a3330
        }

        @media screen and (max-width: 479px) {
            .ui-poll-section {
                padding-right: 0;
                padding-left: 0;
                background-color: inherit
            }
        }

        .ui-poll-section__button {
            align-self: center;
            margin-top: 30px
        }

        .ui-poll-section__list {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 24px 50px
        }

        @media screen and (max-width: 479px) {
            .ui-poll-section__list {
                padding: 0
            }
        }

        .ui-poll-section__remark {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            display: block;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            color: #8f8480;
            text-align: center;
            opacity: .5
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-poll {
            padding: 10px 0;
            font-size: initial
        }

        @media screen and (max-width: 479px) {
            .ui-poll {
                background-color: #2e2826
            }
        }

        .ui-poll__container {
            display: flex;
            flex-direction: column;
            justify-content: center
        }

        @media screen and (min-width: 980px) {
            .ui-poll__container {
                width: 960px
            }
        }

        @media screen and (max-width: 479px) {
            .ui-poll__container {
                padding: 0 10px
            }
        }

        .ui-poll__header {
            color: #fff;
            text-align: center
        }

        .ui-poll__header-title {
            font-weight: 400;
            font-size: 22px;
            font-family: "bork", sans-serif;
            line-height: 27px;
            letter-spacing: 1px;
            -webkit-font-smoothing: antialiased;
            margin: 36px 0 16px
        }

        .ui-poll__header-description {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #fff;
            opacity: .5
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-poll-block-view {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 60px;
            color: #fff;
            background: rgba(0, 0, 0, .2)
        }

        @media screen and (max-width: 479px) {
            .ui-poll-block-view {
                padding: 40px 20px
            }
        }

        .ui-poll-block-view__content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            word-break: break-word
        }

        .ui-poll-block-view__title {
            font-weight: 400;
            font-size: 28px;
            font-family: "bork", sans-serif;
            line-height: 35px;
            letter-spacing: 1px;
            -webkit-font-smoothing: antialiased
        }

        @media screen and (max-width: 479px) {
            .ui-poll-block-view__title {
                font-weight: 400;
                font-size: 22px;
                font-family: "bork", sans-serif;
                line-height: 27px;
                letter-spacing: 1px;
                -webkit-font-smoothing: antialiased
            }
        }

        .ui-poll-block-view__description {
            font-weight: 400;
            font-size: 17px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            margin: 14px 0 24px;
            opacity: .5
        }

        @media screen and (max-width: 479px) {
            .ui-poll-block-view__description {
                font-weight: 400;
                font-size: 16px;
                font-family: "helvetica", sans-serif;
                line-height: 22px;
                letter-spacing: 0;
                -webkit-font-smoothing: antialiased
            }
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-poll-bar-view {
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 2000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            height: 74px;
            padding: 0 124px;
            background: rgba(0, 0, 0, .8);
            -webkit-backdrop-filter: blur(2px);
            backdrop-filter: blur(2px)
        }

        @media screen and (max-width: 479px) {
            .ui-poll-bar-view {
                padding: 8px 12px
            }
        }

        .ui-poll-bar-view__content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            color: #fff
        }

        .ui-poll-bar-view__buttons {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .ui-poll-bar-view__open {
            margin-right: 13px
        }

        @media screen and (max-width: 479px) {
            .ui-poll-bar-view__open {
                margin-right: 5px
            }
        }

        .ui-poll-bar-view__close {
            cursor: pointer
        }

        .ui-poll-bar-view__title {
            font-weight: 400;
            font-size: 18px;
            font-family: "helvetica", sans-serif;
            line-height: 23px;
            letter-spacing: 1px;
            -webkit-font-smoothing: antialiased;
            margin-bottom: 4px
        }

        @media screen and (max-width: 479px) {
            .ui-poll-bar-view__title {
                font-weight: 400;
                font-size: 13px;
                font-family: "helvetica", sans-serif;
                line-height: 15px;
                letter-spacing: 0;
                -webkit-font-smoothing: antialiased
            }
        }

        .ui-poll-bar-view__description {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            opacity: .5
        }

        @media screen and (max-width: 479px) {
            .ui-poll-bar-view__description {
                font-weight: 400;
                font-size: 13px;
                font-family: "helvetica", sans-serif;
                line-height: 15px;
                letter-spacing: 0;
                -webkit-font-smoothing: antialiased
            }
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .ui-poll-popup {
            position: fixed;
            top: 12px;
            right: 60px;
            z-index: 9999;
            width: 370px;
            padding: 24px;
            color: #fff;
            background-color: #3a3330;
            border-radius: 12px
        }

        @media screen and (max-width: 479px) {
            .ui-poll-popup {
                top: 6px;
                right: 47px;
                width: 280px
            }
        }

        .ui-poll-popup__wrapper {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start
        }

        .ui-poll-popup__wrapper::after {
            position: absolute;
            top: -10px;
            right: -30px;
            display: block;
            width: 15px;
            height: 15px;
            background-color: #3a3330;
            transform: rotate(45deg);
            content: ""
        }

        .ui-poll-popup__title {
            font-weight: 400;
            font-size: 18px;
            font-family: "helvetica", sans-serif;
            line-height: 23px;
            letter-spacing: 1px;
            -webkit-font-smoothing: antialiased
        }

        .ui-poll-popup__submit-button {
            cursor: pointer
        }

        .ui-poll-popup__close-wrapper {
            position: absolute;
            top: -15px;
            right: -15px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 25px;
            height: 25px;
            cursor: pointer
        }

        @media screen and (max-width: 479px) {
            .ui-poll-popup__close-wrapper {
                top: -15px;
                right: -10px
            }
        }

        .ui-poll-popup__answer {
            margin: 14px 0 24px
        }
    </style>
    <style type="text/css">
        .ui-poll-panel__bar {
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 2000;
            display: flex;
            flex-flow: row nowrap;
            align-items: center;
            justify-content: space-between;
            width: inherit;
            height: 60px;
            padding: 0 20px;
            color: #fff;
            background: #26211e;
            transform: translateY(-60px);
            transition: transform .6s ease-in-out
        }

        @e content {
            .ui-poll-panel__bar {
                flex-grow: 1;
                padding: 5px;
                text-align: center;
                border-radius: 2px
            }
        }

        .ui-poll-panel__popup {
            z-index: 2100
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-basket-last-order-card {
            background: #3a3330;
            border-radius: 20px;
            padding: 24px
        }

        @media screen and (max-width: 767px) {
            .mando-basket-last-order-card {
                padding: 24px 16px
            }
        }

        .mando-basket-last-order-card__date {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased
        }

        .mando-basket-last-order-card__row {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            display: flex;
            justify-content: space-between;
            margin-bottom: 4px
        }

        .mando-basket-last-order-card__number {
            color: #a0938d
        }

        .mando-basket-last-order-card__status {
            font-weight: 400;
            font-size: 14px;
            font-family: "helvetica", sans-serif;
            line-height: 18px;
            letter-spacing: .2px;
            -webkit-font-smoothing: antialiased;
            text-transform: uppercase
        }

        .mando-basket-last-order-card__payment-status {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            padding-right: 20px;
            background-repeat: no-repeat;
            background-position: right center
        }

        .mando-basket-last-order-card__payment-status--view--success {
            background-image: url("data:image/svg+xml,%3Csvg width='16' height='16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M8 14.667A6.667 6.667 0 1 1 8 1.334a6.667 6.667 0 0 1 0 13.333ZM6.605 10.5c.36.36.945.36 1.306 0l3.59-3.59a.667.667 0 1 0-.944-.942l-3.299 3.3-1.415-1.415a.667.667 0 1 0-.942.943L6.605 10.5Z' fill='%2348B400'/%3E%3C/svg%3E")
        }

        .mando-basket-last-order-card__payment-status--view--error {
            background-image: url("data:image/svg+xml,%3Csvg width='16' height='16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M8 14.667A6.667 6.667 0 1 1 8 1.334a6.667 6.667 0 0 1 0 13.333Zm0-7.61L6.586 5.643a.667.667 0 1 0-.943.943L7.058 8 5.643 9.414a.667.667 0 1 0 .943.943L8 8.943l1.414 1.414a.667.667 0 1 0 .943-.943L8.943 8l1.414-1.414a.667.667 0 1 0-.943-.943L8 7.057Z' fill='%23F37021'/%3E%3C/svg%3E")
        }

        .mando-basket-last-order-card__total {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            color: #a0938d
        }

        .mando-basket-last-order-card__bottom {
            display: grid;
            gap: 8px;
            align-items: flex-end;
            grid-template-columns: 1fr 110px;
            margin-top: 24px
        }

        @media screen and (max-width: 767px) {
            .mando-basket-last-order-card__bottom {
                grid-template-columns: 1fr 90px
            }
        }

        .mando-basket-last-order-card__total {
            margin-left: auto;
            flex-shrink: 0
        }

        .mando-basket-last-order-card__products-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fill, 56px);
            grid-auto-flow: column;
            gap: 16px;
            flex-shrink: 0;
            overflow: hidden;
            height: 56px;
            transition: .2s ease-in-out
        }

        .mando-basket-last-order-card__product {
            width: 56px;
            height: 56px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0
        }

        .mando-basket-last-order-card__product img {
            -o-object-fit: contain;
            object-fit: contain;
            width: 100%;
            height: 100%;
            position: absolute;
            inset: 0
        }

        .mando-basket-last-order-card__product--view-all {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            background: #2e2826;
            color: #a0938d;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            border-radius: 8px
        }

        .mando-basket-last-order-card__quantity {
            font-weight: 400;
            font-size: 13px;
            font-family: "helvetica", sans-serif;
            line-height: 15px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            border-radius: 4px;
            position: absolute;
            bottom: 0;
            right: 0;
            padding: 2px 4px;
            color: #a0938d;
            background: #2e2826
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "bork";
            src: url(_nuxtfonts/530e06d.woff2) format("woff2"), url(_nuxtfonts/09e768e.woff) format("woff")
        }

        @font-face {
            font-family: "akzidenz-extended";
            src: url(_nuxtfonts/0d8421e.woff2) format("woff2"), url(_nuxtfonts/5e4ee03.woff) format("woff")
        }

        @font-face {
            font-family: "Akzidenz-Grotesk Pro Medium Extended";
            src: url(_nuxtfonts/b0462af.woff2) format("woff2"), url(_nuxtfonts/eec6383.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica";
            src: url(_nuxtfonts/d59df5a.woff2) format("woff2"), url(_nuxtfonts/0247694.woff) format("woff")
        }

        @font-face {
            font-family: "helvetica-medium";
            src: url(_nuxtfonts/751c19b.woff2) format("woff2"), url(_nuxtfonts/1c5a4d4.woff) format("woff")
        }

        @font-face {
            font-family: "Roboto-Bork";
            src: url(_nuxtfonts/6cd35ed.woff2) format("woff2")
        }

        .mando-basket-last-order {
            border-radius: 32px;
            background: #26211e;
            padding: 16px;
            display: grid;
            align-items: center;
            justify-content: space-between;
            grid-template-columns: calc(50% - 8px) calc(50% - 16px);
            gap: 16px;
            overflow: hidden;
            width: 100%
        }

        @media screen and (max-width: 767px) {
            .mando-basket-last-order {
                gap: 24px;
                grid-template-columns: 100%
            }
        }

        .mando-basket-last-order--is-authorized {
            cursor: pointer
        }

        .mando-basket-last-order__information {
            text-align: center;
            max-width: 100%
        }

        .mando-basket-last-order__compound {
            max-width: 100%
        }

        .mando-basket-last-order__title {
            font-weight: 400;
            font-size: 18px;
            font-family: "akzidenz-extended", sans-serif;
            line-height: 26px;
            letter-spacing: .4px;
            -webkit-font-smoothing: antialiased;
            margin-bottom: 12px
        }

        @media screen and (max-width: 767px) {
            .mando-basket-last-order__title {
                margin-top: 8px
            }
        }

        .mando-basket-last-order__message {
            font-weight: 400;
            font-size: 16px;
            font-family: "helvetica", sans-serif;
            line-height: 22px;
            letter-spacing: 0;
            -webkit-font-smoothing: antialiased;
            text-wrap: balance;
            color: #9d9390
        }
    </style>
    <script type="text/javascript" async=""
        src="https://emd.hybrid.ai/plgt.js?fbpid=629624524d506e83c0402cc7&amp;foadh=&amp;gapl=&amp;cs=&amp;pcs=&amp;vcs="></script>
    <style>
        .SmartCaptcha-Overlay {
            position: fixed;
            z-index: 9999999;
            top: -10000px;
            left: -10000px;

            width: 100%;
            width: var(--smart-captcha-doc-width, 100%);
            height: 100%;
            height: var(--smart-captcha-doc-height, 100%);
            margin: 0;
            padding: 0;

            background: rgba(0, 0, 0, 0.4);
        }

        .SmartCaptcha-Overlay.SmartCaptcha-Overlay_visible {
            position: fixed;
            top: 0;
            left: 0;
        }

        .SmartCaptcha-Overlay.SmartCaptcha-Overlay_no_background {
            background: none;
        }

        .SmartCaptcha-Overlay .SmartCaptcha-Spin {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;

            margin: auto;

            transform: translateY(-50%);
        }
    </style>
    <style>
        .SmartCaptcha-Spin {
            display: none;
            visibility: hidden;

            box-sizing: border-box;

            border: 2px solid transparent;
            border-radius: 50%;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0));
        }

        .SmartCaptcha-Spin::after {
            visibility: hidden;

            content: '\00A0';
        }

        .SmartCaptcha-Overlay_visible.SmartCaptcha-Overlay_show_spinner .SmartCaptcha-Spin {
            display: inline-block;
            visibility: visible;

            width: 50px;
            height: 50px;

            border-top-color: #5282FF;
            border-left-color: #5282FF;

            animation: islands-spin 1s .21s infinite linear;

            backface-visibility: hidden;
        }

        .SmartCaptcha-Overlay_visible.SmartCaptcha-Overlay_show_spinner .SmartCaptcha-Spin {
            border-top-color: var(--spin-view-default-border-color, #5282FF);
            border-left-color: var(--spin-view-default-border-color, #5282FF);
        }

        @keyframes islands-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }
    </style>
    <style>
        .smart-captcha {
            min-width: 300px;
            height: 102px;
        }

        .smart-captcha_invisible {
            height: 0;
        }

        .mando-block-img-point_items {
            width: 20px;
            position: relative;
            filter: invert(1)
        }

        @media screen and (max-width: 1200px) {
            .mando-header-navbar_items>li:nth-child(1) {
                display: none;
            }

            .mando-header-navbar_items>li:nth-child(2) {
                display: block;
            }

            .mando-header-navbar_items>li:nth-child(3) {
                display: block;
            }

            .mando-header-navbar_items>li:nth-child(4) {
                display: none;
            }

            .mando-header-navbar-icon-list-slots>li:nth-child(2) {
                display: none;
            }
        }

        @media screen and (min-width: 1201px) {
            .mando-header-navbar_items>li:nth-child(1) {
                display: block;
            }

            .mando-header-navbar_items>li:nth-child(2) {
                display: none;
            }

            .mando-header-navbar_items>li:nth-child(3) {
                display: none;
            }

            .mando-header-navbar_items>li:nth-child(4) {
                display: block;
            }

            .mando-header-navbar-icon-list-slots>li:nth-child(2) {
                display: block;
            }
        }

        .pop {
            position: absolute;
            background-color: #2e2826;
            opacity: 1;
            border-radius: 15px;
            z-index: 9999;
            cursor: pointer;
            top: 5.8%;
            font-size: 70%;
            right: 10%;
            transition: all ease 1s;
            padding: .5rem 2rem;
        }

        .pop:hover {
            border: solid white 1px;
            transition: all ease 1s;
        }

        .none {
            display: none;
        }

        .flex {
            display: flex;
        }
    </style>
    <link rel="prefetch" as="script" href="https://smartcaptcha.yandexcloud.net/shield.a7a8aae3ab898b70eed0.chunk.js">
    <script
        type="text/javascript">(function () { window.MindboxScripts = window.MindboxScripts || {}; window.MindboxEndpointSettings = { "features": { "isNewWebPushDeliveryTrackingEnabled": false, "isNewWebPushClickTrackingEnabled": true, "isNewServiceWorkerRegistrationEnabled": true, "isNewWebPushCustomerActionEnabled": true, "useFirebaseJsSdkV10": true, "useWebpushErrorLogging": false, "useWebpushFirebaseInitializationLogging": true } }; window.MindboxActualEndpointId = "Bork"; })();


            (function () { window.__PRELOADED_PERSONALIZATION_CONFIG = { "forms": [], "templates": [], "button_templates": [], "integrations": [], "settings": { "hide_copyright": true, "premium": true }, "frequency": { "minimal_timeout": null, "session": null, "day": null, "week": null, "month": 1 }, "global_ab_tests": [], "ip": "1.1.1.1", "contacts": [], "geo": null }; })();</script>
</head>

<body class="">
    <script data-n-head="ssr" data-hid="nuxt-color-mode-script" data-pbody="true">!function () { "use strict"; var e = window, s = document, o = s.documentElement, a = ["dark", "light"], t = window.localStorage.getItem("nuxt-color-mode") || "system", c = "system" === t ? l() : t, i = s.body.getAttribute("data-color-mode-forced"); function r(e) { var s = "" + e + "-mode"; o.classList ? o.classList.add(s) : o.className += " " + s } function n(s) { return e.matchMedia("(prefers-color-scheme" + s + ")") } function l() { if (e.matchMedia && "not all" !== n("").media) for (var s of a) if (n(":" + s).matches) return s; return "light" } i && (c = i), r(c), e["__NUXT_COLOR_MODE__"] = { preference: t, value: c, getColorScheme: l, addClass: r, removeClass: function (e) { var s = "" + e + "-mode"; o.classList ? o.classList.remove(s) : o.className = o.className.replace(new RegExp(s, "g"), "") } } }();
    </script>
    <div id="__nuxt">
        <div id="__layout">
            <div data-fetch-key="monolith-layout:0" class="mando-monolith-layout">
                <!---->
                <div class="mando-monolith-layout__wrapper" style=""><noscript><iframe
                            src="https://www.googletagmanager.com/ns.html?id=GTM-WKX8ZL" height="0" width="0"
                            style="display:none;visibility:hidden"></iframe></noscript>
                    <!---->
                    <div center="true" append-to-body="true" top="0"
                        class="el-dialog__wrapper v-dialog is-fullscreen is-blurred mando-search__search-dialog"
                        style="display:none;">
                        <div role="dialog" aria-modal="true" aria-label="dialog"
                            class="el-dialog is-fullscreen el-dialog--center" style="max-width: none;">
                            <div class="el-dialog__header"><span class="el-dialog__title"></span>
                                <!---->
                            </div>
                            <!---->
                            <!---->
                        </div>
                    </div>
                    <!---->
                    <!---->
                    <div center="true" top="15vh"
                        class="el-dialog__wrapper v-dialog is-move-animate mando-refurbished-product"
                        style="display:none;">
                        <div role="dialog" aria-modal="true" aria-label="dialog" class="el-dialog el-dialog--center"
                            style="margin-top: 15vh; width: 100%; max-width: 362px;">
                            <div class="el-dialog__header"><span class="el-dialog__title"></span>
                                <!---->
                            </div>
                            <!---->
                            <!---->
                        </div>
                    </div>




                    <div class="mando-header-modern mando-header-modern--transparent">
                        <!---->
                        <div style="">
                            <div class="mando-header-modern__top">
                                <nav data-test="header-navbar" class="mando-header-navbar">
                                    <ul class="mando-header-navbar-icon-list mando-header-navbar_items">
                                        <li
                                            class="mando-header-navbar-icon-list__item mando-header-navbar-icon-list__item--margin--left">
                                            <a href="/support/pickup/"
                                                class="mando-header-navbar-icon-list__icon-wrap"><span
                                                    class="mando-header-navbar-icon-list__icon mando-header-navbar-icon-list__icon--view--boutique"></span></a>
                                        </li>
                                        <li
                                            class="mando-header-navbar-icon-list__item mando-header-navbar-icon-list__item--margin--right">
                                            <a href="slots_clean.php" data-test="header-navbar-basket"
                                                class="mando-header-navbar-basket"><span
                                                    class="mando-header-navbar-basket__icon mando-header-navbar-basket__icon--empty"></span></a>
                                        </li>
                                        <li
                                            class="mando-header-navbar-icon-list__item mando-header-navbar-icon-list__item--margin--left">
                                            <a href="tel:89161829272" data-test="header-navbar-phone"
                                                class="mando-header-navbar-phone"><span
                                                    class="mando-header-navbar-phone__icon"></span></a>
                                        </li>
                                        <li
                                            class="mando-header-navbar-icon-list__item bork-header-navbar-icon-list__item--margin--left">
                                            <a href="tel:89161829272" data-test="header-navbar-phone"
                                                class="bork-header-navbar-phone bork-header-navbar-phone--fullPhone">
                                                8 916 182-92-72
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="mando-header-navbar-logo mando-header-navbar__logo">
                                        <a href="#" data-test="header-navbar-logo"
                                            class="mando-header-navbar-logo__link mando-header-navbar-logo__link--disabled"><svg
                                                viewBox="0 0 100 18" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" class="mando-header-navbar-logo__icon">
                                                <path fill="currentColor"
                                                    d="M78.175 17.244h2.07c.142 0 .235-.093.235-.236v-6.505c0-.143.093-.236.235-.236h6.11c.26 0 .42.068.514.143l7.707 6.79s.069.05.118.05h3.197c.236 0 .236-.21-.186-.589l-8.928-7.707 8.222-7.69c.329-.328.329-.514.093-.514h-3.197a.172.172 0 0 0-.118.05l-7.262 6.79c-.068.093-.26.143-.514.143h-5.756c-.142 0-.235-.093-.235-.236V.985c0-.142-.093-.235-.236-.235h-2.07c-.142 0-.235.093-.235.235v16.03c0 .142.093.229.236.229ZM26.76 7.12h2.07c.142 0 .235-.093.235-.236v-1.81c0-.891.849-1.784 1.692-1.784h12.64c.848 0 1.69.893 1.69 1.785v1.81c0 .142.094.235.236.235h2.07c.142 0 .235-.093.235-.236v-2.07c0-2.28-1.834-4.064-4.163-4.064H30.682c-2.323 0-4.157 1.784-4.157 4.065v2.07c0 .142.093.235.235.235ZM26.525 11.116v2.07c0 2.255 1.859 4.064 4.157 4.064h12.783c2.33 0 4.157-1.81 4.157-4.065v-2.07c0-.142-.093-.235-.235-.235h-2.07c-.142 0-.235.093-.235.236v1.81c0 .891-.843 1.784-1.692 1.784H30.75c-.849 0-1.691-.893-1.691-1.785v-1.81c0-.142-.093-.235-.236-.235h-2.07c-.142 0-.228.093-.228.236ZM72.673 6.202V4.816c0-2.28-1.81-4.065-4.158-4.065h-15.39c-.143 0-.236.093-.236.235v16.03c0 .142.093.235.235.235h2.07c.142 0 .235-.093.235-.235v-6.513c0-.142.093-.235.236-.235h5.502c.26 0 .42.068.514.143l7.472 6.79s.068.05.118.05h3.123c.235 0 .47-.186.025-.589l-7.33-6.394h3.432c2.324 0 4.152-1.784 4.152-4.064ZM55.665 7.727c-.143 0-.236-.093-.236-.236V3.526c0-.143.093-.236.236-.236h12.782c.849 0 1.691.893 1.691 1.785v.867c0 .892-.848 1.785-1.691 1.785H55.665ZM21.704 6.27V4.816c0-2.28-1.81-4.065-4.157-4.065H2.156c-.143 0-.242.093-.242.235v16.03c0 .142.093.235.236.235h15.397c2.33 0 4.157-1.741 4.157-4.021v-1.506c0-1.363-1.27-2.726-2.54-2.726 1.27 0 2.54-1.363 2.54-2.726Zm-2.54 6.649c0 .892-.843 1.784-1.692 1.784H4.69c-.143 0-.236-.092-.236-.235v-3.972c0-.142.093-.235.236-.235h12.782c.85 0 1.692.892 1.692 1.784v.874Zm0-6.977c0 .892-.843 1.785-1.692 1.785H4.69c-.143 0-.236-.093-.236-.236V3.526c0-.143.093-.236.236-.236h12.782c.85 0 1.692.893 1.692 1.785v.867Z">
                                                </path>
                                            </svg> <span class="mando-header-navbar-logo__short-logo"></span></a>
                                    </div>
                                    <ul class="mando-header-navbar-icon-list mando-header-navbar-icon-list-slots">
                                        <li
                                            class="mando-header-navbar-icon-list__item mando-header-navbar-icon-list__item--margin--right">
                                            <a href="slots_clean.php" data-test="header-navbar-basket"
                                                class="mando-header-navbar-basket">

                                                <span class="text-point">
                                                    <?php
                                                if(empty($user['points'])){
                                                    echo "0";
                                                } else {
                                                    echo $user["points"];
                                                }?>
                                                </span>

                                                <img class="mando-block-img-point_items"
                                                    src="_nuxt/img/point.svg"></img></a>
                                        </li>
                                        <li
                                            class="mando-header-navbar-icon-list__item mando-header-navbar-icon-list__item--margin--right">
                                            <a href="slots_clean.php" data-test="header-navbar-basket"
                                                class="mando-header-navbar-basket"><span
                                                    class="mando-header-navbar-basket__icon mando-header-navbar-basket__icon--empty"></span></a>
                                        </li>
                                        <li
                                            class="mando-header-navbar-icon-list__item mando-header-navbar-icon-list__item--margin--right">
                                            <div data-test="header-navbar-personal-account"
                                                class="mando-header-navbar-personal-account">
                                                <a href="/profile.php"><span
                                                        class="mando-header-navbar-personal-account__icon"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                                <!---->
                            </div>
                            <!---->
                        </div>
                    </div>

                    <div id="global-app">
                        <div id="global-app-wrapper">
                            <header-bork></header-bork>
                            <div style="display: none;">
                                <section data-v-4079f303="" class="hotline">
                                    <div data-v-4079f303="" class="container"><a data-v-4079f303=""
                                            href="tel:88005008899" class="hotline__number  analytics-phone-click">8 916
                                            182-92-72</a></div>
                                </section>
                            </div>
                            <!---->
                        </div>
                    </div>





                    <div class="purchase-basket-page">
                        <div data-test="basket" class="mando-modern-basket">
                            <!---->
                            <div class="mando-modern-basket__inner">
                                <div class="mando-modern-basket__header"><button data-test="basket-back" target="_self"
                                        class="ui-button ui-button--size--by-content undefined mando-modern-basket-back mando-modern-basket__button-back"><span
                                            class="ui-button__icon-left"><span data-test="ui-icon ui-icon-left"
                                                class="ui-icon-left"></span></span>
                                        <a href="index.php"><span style="color: white"
                                                class="mando-modern-basket-back__label">
                                                К услугам
                                            </span>
                                        </a>
                                        <!---->
                                    </button>
                                    <div data-test="basket-title" class="mando-modern-basket__title">
                                        Корзина
                                    </div>
                                </div>
                                <!---->
                                <div class="mando-modern-basket__body">
                                    <!---->
                                    <div class="mando-modern-basket__main">
                                        <div data-test="basket-products" class="mando-modern-products">
                                            <div data-test="basket-products-single-product"
                                                class="mando-modern-products__single">
                                                <div data-test="single-product" class="mando-single-product">
                                                    <div class="mando-single-product__inner"><button
                                                            data-test="single-product-management-button" target="_self"
                                                            class="ui-button ui-button--size--by-content ui-button--view--simple mando-single-product__management">
                                                            <!----> <span id="add" data-test="ui-icon ui-icon-more"
                                                                class="ui-icon-more" style="cursor: pointer"></span>


                                                        </button>
                                                        <span class="pop none" id="pop"><div class="ya-share2" data-curtain data-size="s" data-shape="round" data-limit="3" data-services="vkontakte,telegram,twitter,viber,whatsapp,moimir"></div></span>


                                                        <!---->
                                                        <div data-test="single-product-picture" alt="Ручная чистка шубы"
                                                            class="ui-image purchase-product-image mando-single-product__img"
                                                            src="https://st.bork.ru/original/common/461588/1_461588.png?1728038818">
                                                            <!----> <img
                                                                src="https://st.bork.ru/original/common/461588/1_461588.png?1728038818"
                                                                class="ui-image__image" style="opacity: 1;">
                                                        </div> <a data-test="single-product-name" target="_blank"
                                                            href="/eShop/Multi-Cookers/u810/"
                                                            class="ui-button ui-button--size--by-content ui-button--view--simple mando-single-product__name">
                                                            <!---->
                                                            Ручная чистка шубы
                                                            <!---->
                                                        </a>
                                                        <div class="mando-single-product__additional"><span
                                                                data-test="single-product-price"
                                                                class="mando-single-product__price">19,990&nbsp;₽</span>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                            <!---->
                                        </div>
                                    </div>
                                    <div class="mando-modern-basket__sidebar">
                                        <!---->
                                        <!---->
                                        <div data-test="basket-order"
                                            class="mando-modern-order mando-modern-basket__order">
                                            <!---->
                                            <div class="mando-modern-order__inner">
                                                <div class="mando-modern-order__title">
                                                    Ваш заказ:
                                                </div>
                                                <div class="mando-modern-order__item">
                                                    <div class="mando-modern-order__item-text"><span
                                                            data-test="basket-order-products-quantity"
                                                            class="mando-modern-order__label">
                                                            #1 услуга
                                                        </span></div>
                                                    <div class=""><span data-test="basket-order-products-price"
                                                            class="mando-modern-order__value">19,990&nbsp;₽</span>
                                                    </div>
                                                </div>
                                                <!---->
                                                <!---->
                                            </div>
                                            <!---->

                                            <form class="form" method="post">
                                            <input name="slots" type="hidden" value="Ручная чистка шубы" style="position: absolute"/>
                                            <input style="position: absolute" type="hidden" name="act" value="order">
                                                <input value="Офомрить" type="submit" name="slots_servis"
                                                    data-test="basket-order-to-checkout" target="_self"
                                                    class="ui-button ui-button--size--m ui-button--view--action ui-button--is-expanded mando-modern-order__to-checkout"/>
                                            </form>

                                            
                                        </div>
                                        <div class="mando-modern-basket__additional">
                                            <!---->
                                            <div data-test="privileges"
                                                class="mando-modern-privileges mando-modern-basket__additional-item">
                                                <div data-test="show-dialog-button" class="mando-show-dialog-button">
                                                    <div class="mando-show-dialog-button__image-wrapper"><img
                                                            src="//st.bork.ru/images/basket/modern/privileges/show-dialog-button.png"
                                                            alt="" data-test="show-dialog-button-image"
                                                            class="mando-show-dialog-button__image"></div>
                                                    <div class="mando-show-dialog-button__content">
                                                        <div class="mando-show-dialog-button__info">
                                                            <div data-test="show-dialog-button-title"
                                                                class="mando-show-dialog-button__title">
                                                                К следующей услуге
                                                            </div>
                                                            <div data-test="show-dialog-button-subtitle"
                                                                class="mando-show-dialog-button__subtitle">Профилактика
                                                                обуви</div>
                                                        </div> <span data-test="ui-icon ui-icon-right"
                                                            class="ui-icon-right mando-show-dialog-button__arrow"></span>
                                                    </div>
                                                </div>
                                                <div class="el-dialog__wrapper ui-modern-dialog ui-modern-dialog--background--default"
                                                    data-test="ui-modern-dialog" center="true" top="90px"
                                                    append-to-body="true" background="default" style="display: none;">
                                                    <div role="dialog" aria-modal="true" aria-label="dialog"
                                                        class="el-dialog el-dialog--center"
                                                        style="margin-top: 90px; width: 100%; max-width: none;">
                                                        <div class="el-dialog__header"><span
                                                                class="el-dialog__title"></span>
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-test="bouquets" class="mando-modern-basket__additional-item">
                                                <div data-test="show-dialog-button" class="mando-show-dialog-button">
                                                    <div class="mando-show-dialog-button__image-wrapper"><img
                                                            src="//st.bork.ru/images/basket/modern/privileges/show-dialog-button.png"
                                                            alt="" data-test="show-dialog-button-image"
                                                            class="mando-show-dialog-button__image"></div>
                                                    <div class="mando-show-dialog-button__content">
                                                        <div class="mando-show-dialog-button__info">
                                                            <div data-test="show-dialog-button-title"
                                                                class="mando-show-dialog-button__title">
                                                                Посмотреть список
                                                            </div>
                                                            <div data-test="show-dialog-button-subtitle"
                                                                class="mando-show-dialog-button__subtitle">Полный
                                                                перечень услуг</div>
                                                        </div> <span data-test="ui-icon ui-icon-right"
                                                            class="ui-icon-right mando-show-dialog-button__arrow"></span>
                                                    </div>
                                                </div>
                                                <div class="el-dialog__wrapper ui-modern-dialog ui-modern-dialog--background--default"
                                                    data-test="bouquets-modal" append-to-body="true"
                                                    style="display: none;">
                                                    <div role="dialog" aria-modal="true" aria-label="dialog"
                                                        class="el-dialog"
                                                        style="margin-top: 15vh; width: 100%; max-width: 928px;">
                                                        <div class="el-dialog__header"><span
                                                                class="el-dialog__title"></span>
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div data-test="purchase-footer"
                                class="purchase-footer purchase-footer--with-tab-bar mando-modern-basket__footer">
                                <div class="purchase-footer__links"><a data-test="ui-button" target="_blank"
                                        href="/support/"
                                        class="ui-button ui-button--size--by-content ui-button--view--simple purchase-footer__link">Обратная
                                        связь</a>
                                    <a data-test="ui-button" target="_blank" href="/support/return_policy/"
                                        class="ui-button ui-button--size--by-content ui-button--view--simple purchase-footer__link">Получить
                                        консультацию</a>
                                    <a data-test="ui-button" target="_blank" href="/support/return_policy/"
                                        class="ui-button ui-button--size--by-content ui-button--view--simple purchase-footer__link">Instagram</a>
                                </div>
                                <div class="purchase-footer__copyright">&copy; 2022 - 2024&nbsp;MandoMemori&nbsp;—
                                    официальный
                                    сервис по чистке. Все права защищены. <a
                                        href="/support/contacts/#contactOfferButton" target="_blank"
                                        style="text-decoration: underline">Условия
                                        использования</a>
                                    и <a href="/support/privacy/" target="_blank"
                                        style="text-decoration: underline">политика конфиденциальности</a></div>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <!---->
                    <!---->
                    <div></div>
                    <div class="el-dialog__wrapper v-dialog is-move-animate" center="true" top="90px"
                        style="display: none;">
                        <div role="dialog" aria-modal="true" aria-label="dialog" class="el-dialog el-dialog--center"
                            style="margin-top: 90px; width: 100%; max-width: none;">
                            <div class="el-dialog__header"><span class="el-dialog__title"></span>
                                <!---->
                            </div>
                            <!---->
                            <!---->
                        </div>
                    </div>
                    <div class="el-dialog__wrapper ui-modern-dialog ui-modern-dialog--centered ui-modern-dialog--background--default mando-product-availability-modal"
                        data-test="ui-modern-dialog" style="display: none;">
                        <div role="dialog" aria-modal="true" aria-label="dialog" class="el-dialog"
                            style="margin-top: 15vh; width: 100%; max-width: 650px;">
                            <div class="el-dialog__header"><span class="el-dialog__title"></span>
                                <!---->
                            </div>
                            <!---->
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const pop = document.getElementById('pop');
        const pop_click = document.getElementById('add');

        pop_click.addEventListener('click', function () {
            if (pop.classList.contains("none")) {
                pop.classList.remove("none");
                pop.classList.add("flex");
            } else if (pop.classList.contains("flex")) {
                pop.classList.remove("flex");
                pop.classList.add("none");
            }
        });
    </script>

<script src="https://yastatic.net/share2/share.js"></script>

</body>

</html>