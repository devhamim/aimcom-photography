<!DOCTYPE html>


<html lang="en-US" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <style>
        span.menu-text {
            font-family: 'Montserrat';
            font-size: 16px;
        }
    </style>

    @if ($setting->first()->title != null)
        <title>{{ $setting->first()->title }}</title>
    @endif
    @if ($setting->first()->favicon != null)
        <link rel="shortcut icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
    @endif
    <style id="rocket-critical-css">
        a,
        body,
        div,
        h1,
        h2,
        h3,
        html,
        li,
        p,
        span,
        strong,
        ul {
            border: 0;
            font-size: 100%;
            font-style: inherit;
            font-weight: inherit;
            margin: 0;
            outline: 0;
            padding: 0;
            vertical-align: baseline
        }

        html {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        figure,
        header,
        nav,
        section {
            display: block
        }

        a {
            background-color: transparent
        }

        a,
        a:visited {
            text-decoration: none
        }

        strong {
            font-weight: 700
        }

        img {
            border: 0
        }

        svg:not(:root) {
            overflow: hidden
        }

        figure {
            margin: 0
        }

        button {
            color: inherit;
            font: inherit;
            margin: 0
        }

        button {
            overflow: visible
        }

        button {
            text-transform: none
        }

        button {
            -webkit-appearance: button
        }

        button::-moz-focus-inner {
            border: 0;
            padding: 0
        }

        @media (min-width:544px) {
            .ast-container {
                max-width: 100%
            }
        }

        @media (min-width:768px) {
            .ast-container {
                max-width: 100%
            }
        }

        @media (min-width:992px) {
            .ast-container {
                max-width: 100%
            }
        }

        @media (min-width:1200px) {
            .ast-container {
                max-width: 100%
            }
        }

        .ast-container {
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px
        }

        .ast-container::after {
            content: "";
            display: table;
            clear: both
        }

        h1,
        h2,
        h3 {
            clear: both
        }

        h1 {
            color: #808285;
            font-size: 2em;
            line-height: 1.2
        }

        h2 {
            color: #808285;
            font-size: 1.7em;
            line-height: 1.3
        }

        h3 {
            color: #808285;
            font-size: 1.5em;
            line-height: 1.4
        }

        html {
            box-sizing: border-box
        }

        *,
        :after,
        :before {
            box-sizing: inherit
        }

        body {
            color: #808285;
            background: #fff;
            font-style: normal
        }

        ul {
            margin: 0 0 1.5em 3em
        }

        ul {
            list-style: disc
        }

        li>ul {
            margin-bottom: 0;
            margin-left: 1.5em
        }

        strong {
            font-weight: 700
        }

        img {
            height: auto;
            max-width: 100%
        }

        .ast-button,
        button {
            color: #808285;
            font-weight: 400;
            font-size: 100%;
            margin: 0;
            vertical-align: baseline
        }

        button {
            line-height: normal
        }

        .ast-button,
        button {
            border: 1px solid;
            border-color: var(--ast-border-color);
            border-radius: 2px;
            background: #e6e6e6;
            padding: .6em 1em .4em;
            color: #fff
        }

        a {
            color: #4169e1
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal !important
        }

        .ast-container:after,
        .ast-container:before,
        .site-content:after,
        .site-content:before,
        .site-header:after,
        .site-header:before {
            content: "";
            display: table
        }

        .ast-container:after,
        .site-content:after,
        .site-header:after {
            clear: both
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        body:not(.logged-in) {
            position: relative
        }

        #page {
            position: relative
        }

        a {
            text-decoration: none
        }

        img {
            vertical-align: middle
        }

        p {
            margin-bottom: 1.75em
        }

        .ast-button {
            border-radius: 0;
            padding: 18px 30px;
            border: 0;
            box-shadow: none;
            text-shadow: none
        }

        .site .skip-link {
            background-color: #f1f1f1;
            box-shadow: 0 0 1px 1px rgba(0, 0, 0, .2);
            color: #21759b;
            display: block;
            font-family: Montserrat, "Helvetica Neue", sans-serif;
            font-size: 14px;
            font-weight: 700;
            left: -9999em;
            outline: 0;
            padding: 15px 23px 14px;
            text-decoration: none;
            text-transform: none;
            top: -9999em
        }

        .ast-button,
        body,
        button {
            line-height: 1.85714285714286
        }

        body {
            background-color: #fff
        }

        #page {
            display: block
        }

        .ast-page-builder-template .site-content>.ast-container {
            max-width: 100%;
            padding: 0
        }

        .main-navigation {
            height: 100%;
            -js-display: inline-flex;
            display: inline-flex
        }

        .main-navigation ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
            position: relative
        }

        .main-header-menu .menu-link {
            text-decoration: none;
            padding: 0 1em;
            display: inline-block
        }

        .main-header-menu .menu-item {
            position: relative
        }

        .main-header-menu .sub-menu {
            width: 240px;
            background: #fff;
            left: -999em;
            position: absolute;
            top: 100%;
            z-index: 99999;
            visibility: hidden
        }

        .main-header-menu .sub-menu .menu-link {
            padding: .9em 1em;
            display: block;
            word-wrap: break-word
        }

        .main-header-menu .sub-menu .menu-item:not(.menu-item-has-children) .menu-link .icon-arrow:first-of-type {
            display: none
        }

        .submenu-with-border .sub-menu {
            border-width: 1px;
            border-style: solid
        }

        .submenu-with-border .sub-menu .menu-link {
            border-width: 0 0 1px;
            border-style: solid
        }

        .ast-desktop .submenu-with-border .sub-menu>.menu-item:last-child>.menu-link {
            border-bottom-style: none
        }

        .ast-mobile-menu-buttons {
            display: none
        }

        .ast-button-wrap {
            display: inline-block
        }

        .ast-button-wrap button {
            box-shadow: none;
            border: none
        }

        .ast-button-wrap .menu-toggle {
            padding: 0;
            width: 2.2em;
            height: 2.1em;
            font-size: 1.5em;
            font-weight: 400;
            border-radius: 2px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            border-radius: 2px;
            vertical-align: middle;
            line-height: 1.85714285714286
        }

        .ast-button-wrap .menu-toggle.main-header-menu-toggle {
            padding: 0 .5em;
            width: auto;
            text-align: center
        }

        .ast-button-wrap .menu-toggle .menu-toggle-icon {
            font-style: normal;
            display: inline-block;
            vertical-align: middle;
            line-height: 2.05
        }

        .ast-button-wrap .menu-toggle .menu-toggle-icon:before {
            content: "\e5d2";
            font-family: Astra;
            text-decoration: inherit
        }

        .site-navigation {
            height: 100%
        }

        .main-header-bar {
            z-index: 1
        }

        .header-main-layout-1 .main-header-bar-navigation {
            text-align: right
        }

        .header-main-layout-1 .main-header-bar-navigation .sub-menu {
            text-align: left
        }

        .header-main-layout-1 .main-navigation {
            padding-left: 15px;
            vertical-align: top
        }

        .header-main-layout-1 .main-header-container {
            align-items: stretch
        }

        .ast-logo-title-inline .ast-site-identity {
            -js-display: inline-flex;
            display: inline-flex;
            vertical-align: middle;
            align-items: center
        }

        .ast-logo-title-inline .site-logo-img {
            padding-right: 1em
        }

        .site-header {
            z-index: 99;
            position: relative
        }

        .main-header-container {
            position: relative
        }

        .main-header-bar-wrap {
            position: relative
        }

        .main-header-bar {
            background-color: #fff;
            border-bottom-color: var(--ast-border-color);
            border-bottom-style: solid
        }

        .main-header-bar {
            margin-left: auto;
            margin-right: auto
        }

        .ast-desktop .main-header-menu.ast-menu-shadow .sub-menu {
            box-shadow: 0 4px 10px -2px rgba(0, 0, 0, .1)
        }

        .ast-header-custom-item-inside .button-custom-menu-item .menu-link {
            display: none
        }

        .site-branding {
            line-height: 1;
            align-self: center
        }

        .ast-menu-toggle {
            display: none;
            background: 0 0;
            color: inherit;
            border-style: dotted;
            border-color: transparent
        }

        .main-header-bar {
            z-index: 4;
            position: relative;
            line-height: 4
        }

        .main-header-bar .main-header-bar-navigation {
            height: 100%
        }

        .main-header-bar .main-header-bar-navigation .sub-menu {
            line-height: 1.45
        }

        .main-header-bar .main-header-bar-navigation .menu-item-has-children>.menu-link:after {
            line-height: normal
        }

        li.ast-masthead-custom-menu-items {
            padding: 0 1em
        }

        li.ast-masthead-custom-menu-items a {
            padding-left: 0;
            padding-right: 0;
            vertical-align: middle
        }

        li.ast-masthead-custom-menu-items a {
            background: 0 0
        }

        .ast-masthead-custom-menu-items {
            padding: 0 1em
        }

        .ast-site-identity {
            padding: 1em 0
        }

        body {
            overflow-x: hidden
        }

        .ast-flex {
            -js-display: flex;
            display: flex;
            flex-wrap: wrap
        }

        .ast-inline-flex {
            -js-display: inline-flex;
            display: inline-flex;
            align-items: center;
            flex-wrap: wrap;
            align-content: center
        }

        .ast-justify-content-flex-end {
            justify-content: flex-end
        }

        .ast-flex-grow-1 {
            flex-grow: 1
        }

        .ahfb-svg-iconset {
            -js-display: inline-flex;
            display: inline-flex;
            align-self: center
        }

        .ahfb-svg-iconset svg {
            width: 17px;
            height: 17px
        }

        :root {
            --ast-post-nav-space: 0;
            --ast-container-default-xlg-padding: 6.67em;
            --ast-container-default-lg-padding: 5.67em;
            --ast-container-default-slg-padding: 4.34em;
            --ast-container-default-md-padding: 3.34em;
            --ast-container-default-sm-padding: 6.67em;
            --ast-container-default-xs-padding: 2.4em;
            --ast-container-default-xxs-padding: 1.4em;
            --ast-code-block-background: #EEEEEE;
            --ast-comment-inputs-background: #FAFAFA;
            --ast-normal-container-width: 1200px;
            --ast-narrow-container-width: 750px;
            --ast-blog-title-font-weight: normal;
            --ast-blog-meta-weight: inherit
        }

        html {
            font-size: 106.25%
        }

        a {
            color: #2389a2
        }

        body,
        button,
        .ast-button {
            font-family: Helvetica, Verdana, Arial, sans-serif;
            font-weight: 400;
            font-size: 17px;
            font-size: 1rem;
            line-height: var(--ast-body-line-height, 1.65em)
        }

        h1,
        h2,
        h3 {
            font-family: 'Montserrat', sans-serif
        }

        h1 {
            font-size: 40px;
            font-size: 2.3529411764706rem;
            font-family: 'Montserrat', sans-serif;
            line-height: 1.4em
        }

        h2 {
            font-size: 32px;
            font-size: 1.8823529411765rem;
            font-family: 'Montserrat', sans-serif;
            line-height: 1.3em
        }

        h3 {
            font-size: 26px;
            font-size: 1.5294117647059rem;
            font-family: 'Montserrat', sans-serif;
            line-height: 1.3em
        }

        body,
        h1,
        h2,
        h3 {
            color: var(--ast-global-color-3)
        }

        .main-header-menu .menu-link {
            color: var(--ast-global-color-3)
        }

        .ast-logo-title-inline .site-logo-img {
            padding-right: 1em
        }

        .ast-page-builder-template .site-content>.ast-container {
            max-width: 100%;
            padding: 0
        }

        .elementor-button-wrapper .elementor-button {
            border-style: solid;
            text-decoration: none;
            border-top-width: 0.1px;
            border-right-width: 0.1px;
            border-left-width: 0.1px;
            border-bottom-width: 0.1px
        }

        body .elementor-button.elementor-size-lg,
        body .elementor-button {
            border-top-left-radius: 1px;
            border-top-right-radius: 1px;
            border-bottom-right-radius: 1px;
            border-bottom-left-radius: 1px;
            padding-top: 10px;
            padding-right: 20px;
            padding-bottom: 10px;
            padding-left: 20px
        }

        .elementor-button-wrapper .elementor-button {
            border-color: #000000;
            background-color: #f5c730
        }

        .elementor-button-wrapper .elementor-button,
        .elementor-button-wrapper .elementor-button:visited {
            color: #000000
        }

        .elementor-button-wrapper .elementor-button {
            font-weight: 500;
            font-size: 13px;
            font-size: 0.76470588235294rem;
            line-height: 1em;
            text-transform: capitalize;
            letter-spacing: 1px;
            text-decoration: initial
        }

        body .elementor-button.elementor-size-lg,
        body .elementor-button {
            font-size: 13px;
            font-size: 0.76470588235294rem
        }

        .elementor-widget-heading h1.elementor-heading-title {
            line-height: 1.4em
        }

        .elementor-widget-heading h2.elementor-heading-title {
            line-height: 1.3em
        }

        .elementor-widget-heading h3.elementor-heading-title {
            line-height: 1.3em
        }

        .menu-toggle,
        button,
        .ast-button {
            border-style: solid;
            border-top-width: 0.1px;
            border-right-width: 0.1px;
            border-left-width: 0.1px;
            border-bottom-width: 0.1px;
            color: #000000;
            border-color: #000000;
            background-color: #f5c730;
            padding-top: 10px;
            padding-right: 20px;
            padding-bottom: 10px;
            padding-left: 20px;
            font-family: inherit;
            font-weight: 500;
            font-size: 13px;
            font-size: 0.76470588235294rem;
            line-height: 1em;
            text-transform: capitalize;
            text-decoration: initial;
            letter-spacing: 1px;
            border-top-left-radius: 1px;
            border-top-right-radius: 1px;
            border-bottom-right-radius: 1px;
            border-bottom-left-radius: 1px
        }

        @media (min-width:544px) {
            .ast-container {
                max-width: 100%
            }
        }

        @media (max-width:544px) {

            .site-branding img,
            .site-header .site-logo-img .custom-logo-link img {
                max-width: 100%
            }
        }

        @media (max-width:921px) {

            body,
            button,
            .ast-button {
                font-size: 18px;
                font-size: 1.0588235294118rem
            }

            h1 {
                font-size: 30px
            }

            h2 {
                font-size: 25px
            }

            h3 {
                font-size: 20px
            }
        }

        @media (max-width:544px) {

            body,
            button,
            .ast-button {
                font-size: 17px;
                font-size: 1rem
            }

            h1 {
                font-size: 30px
            }

            h2 {
                font-size: 25px
            }

            h3 {
                font-size: 20px
            }

        }

        @media (max-width:544px) {
            html {
                font-size: 106.25%
            }
        }

        @media (min-width:922px) {
            .ast-container {
                max-width: 1240px
            }
        }

        @font-face {
            font-family: "Astra";
            src: url(wp-content/themes/astra/assets/fonts/astra.woff) format("woff"), url(https://www.prophotostudio.net/wp-content/themes/astra/assets/fonts/astra.ttf) format("truetype"), url(https://www.prophotostudio.net/wp-content/themes/astra/assets/fonts/astra.svg#astra) format("svg");
            font-weight: normal;
            font-style: normal;
            font-display: swap
        }

        @media (max-width:786px) {
            .main-header-bar .main-header-bar-navigation {
                display: none
            }
        }

        .ast-desktop .main-header-menu.submenu-with-border .sub-menu {
            border-color: rgba(10, 10, 10, 0)
        }

        .ast-desktop .main-header-menu.submenu-with-border .sub-menu {
            border-top-width: 3px;
            border-right-width: 3px;
            border-left-width: 3px;
            border-bottom-width: 3px;
            border-style: solid
        }

        .ast-desktop .main-header-menu.submenu-with-border .sub-menu .menu-link {
            border-bottom-width: 1px;
            border-style: solid;
            border-color: var(--ast-global-color-6)
        }

        .ast-header-custom-item-inside .button-custom-menu-item .menu-link {
            display: none
        }

        :root {
            --ast-global-color-0: #ffd700;
            --ast-global-color-1: #3a3a3a;
            --ast-global-color-2: #3a3a3a;
            --ast-global-color-3: #4b4f58;
            --ast-global-color-4: #F5F5F5;
            --ast-global-color-5: #FFFFFF;
            --ast-global-color-6: #F2F5F7;
            --ast-global-color-7: #424242;
            --ast-global-color-8: #000000
        }

        :root {
            --ast-border-color: #dddddd
        }

        #masthead .ast-container {
            max-width: 100%;
            padding-left: 35px;
            padding-right: 35px
        }

        @media (max-width:786px) {
            #masthead .ast-container {
                padding-left: 20px;
                padding-right: 20px
            }
        }

        .ast-header-custom-item-inside .button-custom-menu-item .menu-link {
            display: none
        }

        :root {
            --ast-global-color-0: #ffd700;
            --ast-global-color-1: #3a3a3a;
            --ast-global-color-2: #3a3a3a;
            --ast-global-color-3: #4b4f58;
            --ast-global-color-4: #F5F5F5;
            --ast-global-color-5: #FFFFFF;
            --ast-global-color-6: #F2F5F7;
            --ast-global-color-7: #424242;
            --ast-global-color-8: #000000
        }

        :root {
            --ast-border-color: #dddddd
        }

        #masthead .ast-container {
            max-width: 100%;
            padding-left: 35px;
            padding-right: 35px
        }

        @media (max-width:786px) {
            #masthead .ast-container {
                padding-left: 20px;
                padding-right: 20px
            }
        }

        h1,
        h2,
        h3 {
            color: var(--ast-global-color-2)
        }

        .elementor-widget-heading .elementor-heading-title {
            margin: 0
        }

        .elementor-page .ast-menu-toggle {
            color: unset !important;
            background: unset !important
        }

        .ast-right-sidebar .elementor-section.elementor-section-stretched {
            max-width: 100%;
            left: 0 !important
        }

        .elementor-template-full-width .ast-container {
            display: block
        }

        .elementor-screen-only,
        .screen-reader-text {
            top: 0 !important
        }

        @media (min-width:922px) {
            .main-header-bar {
                border-bottom-width: 0px;
                border-bottom-color: rgba(255, 255, 255, 0.58)
            }
        }

        .main-header-menu .menu-item,
        .main-header-bar .ast-masthead-custom-menu-items {
            -js-display: flex;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .main-header-menu>.menu-item>.menu-link {
            height: 100%;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -js-display: flex;
            display: flex
        }

        .main-header-bar .main-header-bar-navigation .menu-item-has-children>a:after {
            content: "\e900";
            display: inline-block;
            font-family: Astra;
            font-size: .6rem;
            font-weight: bold;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            margin-left: 10px;
            line-height: normal
        }

        #ast-scroll-top {
            display: none;
            position: fixed;
            text-align: center;
            z-index: 99;
            width: 2.1em;
            height: 2.1em;
            line-height: 2.1;
            color: #ffffff;
            border-radius: 2px;
            content: "";
            outline: inherit
        }

        @media (min-width:769px) {
            #ast-scroll-top {
                content: "769"
            }
        }

        .ast-scroll-to-top-right {
            right: 30px;
            bottom: 30px
        }

        #ast-scroll-top {
            color: #ffffff;
            background-color: #d4af37;
            font-size: 18px;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px
        }

        .ast-scroll-top-icon::before {
            content: "\e900";
            font-family: Astra;
            text-decoration: inherit
        }

        .ast-scroll-top-icon {
            transform: rotate(180deg)
        }

        :root {
            --e-global-color-astglobalcolor0: #ffd700;
            --e-global-color-astglobalcolor1: #3a3a3a;
            --e-global-color-astglobalcolor2: #3a3a3a;
            --e-global-color-astglobalcolor3: #4b4f58;
            --e-global-color-astglobalcolor4: #F5F5F5;
            --e-global-color-astglobalcolor5: #FFFFFF;
            --e-global-color-astglobalcolor6: #F2F5F7;
            --e-global-color-astglobalcolor7: #424242;
            --e-global-color-astglobalcolor8: #000000
        }

        .ast-desktop .astra-menu-animation-slide-down>.menu-item>.sub-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(-.5em)
        }

        @media all and (max-width:768px) {
            #content:before {
                content: ""
            }
        }

        .ast-above-header-menu .menu-link {
            text-decoration: none;
            padding: 0 1em;
            display: inline-block
        }

        .ast-above-header-menu .menu-item {
            position: relative
        }

        .ast-above-header-navigation ul {
            list-style: none;
            margin: 0;
            padding-left: 0
        }

        .above-header-nav-padding-support .ast-justify-content-flex-end .ast-above-header-menu>.menu-item:last-child .menu-link {
            padding-right: 0
        }

        .ast-above-header {
            z-index: 5
        }

        .ast-above-header-wrap {
            position: relative
        }

        .ast-above-header-wrap .ast-button-wrap {
            display: none
        }

        .ast-above-header-section {
            flex: auto;
            align-items: center
        }

        .ast-above-header {
            background: #fff;
            border-bottom: 1px solid var(--ast-border-color);
            margin-left: auto;
            margin-right: auto;
            position: relative
        }

        @media (max-width:544px) {
            .ast-above-header {
                padding-top: .5em
            }
        }

        #ast-fixed-header {
            position: fixed;
            visibility: hidden;
            top: 0;
            left: 0;
            width: 100%
        }

        #ast-fixed-header .main-header-bar {
            box-shadow: 0 1px 2px rgba(0, 0, 0, .2)
        }

        .astra-mm-highlight-label {
            font-size: .7em;
            margin-left: 5px;
            line-height: normal;
            padding: 3px 6px;
            border-radius: 2px
        }

        .ast-desktop .ast-mega-menu-enabled.main-header-menu>.menu-item-has-children>.menu-link::after {
            content: '';
            margin: 0
        }

        #content:before {
            content: "921";
            position: absolute;
            overflow: hidden;
            opacity: 0;
            visibility: hidden
        }

        .main-header-bar {
            background-color: var(--ast-global-color-8);
            background-image: none
        }

        .main-header-menu,
        .main-header-menu .menu-link,
        .ast-masthead-custom-menu-items,
        .ast-masthead-custom-menu-items a {
            color: #ffffff
        }

        .main-header-menu .sub-menu,
        .main-header-menu .sub-menu .menu-link {
            color: #0a0a0a
        }

        .main-navigation .sub-menu {
            background-color: var(--ast-global-color-5)
        }

        @media (max-width:544px) {
            .main-header-menu {
                background-color: var(--ast-global-color-8);
                background-image: none
            }

            .main-navigation .sub-menu {
                background-color: var(--ast-global-color-8)
            }
        }

        @media (max-width:786px) {
            .ast-above-header-navigation-wrap {
                display: none
            }
        }

        .ast-above-header {
            border-bottom-width: 0px;
            border-bottom-color: #0a0a0a;
            line-height: 30px
        }

        .ast-above-header-section-wrap {
            min-height: 30px
        }

        .ast-above-header {
            background-color: #e2e2e2;
            background-image: none
        }

        .ast-above-header-navigation a {
            color: #ffffff
        }

        @media (max-width:786px) {

            .ast-above-header-navigation,
            .ast-above-header-hide-on-mobile .ast-above-header-wrap {
                display: none
            }
        }

        .ast-desktop .ast-mega-menu-enabled.main-header-menu>.menu-item-has-children>.menu-link .sub-arrow:after {
            content: "\e900";
            display: inline-block;
            font-family: Astra;
            font-size: .6rem;
            font-weight: bold;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            margin-left: 10px;
            line-height: normal
        }

        #ast-fixed-header .ast-container {
            max-width: 100%;
            padding-left: 35px;
            padding-right: 35px
        }

        @media (max-width:786px) {
            #ast-fixed-header .ast-container {
                padding-left: 20px;
                padding-right: 20px
            }
        }

        #ast-fixed-header .main-header-menu,
        #ast-fixed-header .main-header-menu .menu-link,
        #ast-fixed-header li.ast-masthead-custom-menu-items,
        #ast-fixed-header li.ast-masthead-custom-menu-items a {
            color: #0a0a0a
        }

        #ast-fixed-header .main-header-bar {
            background: #0a0a0a;
            backdrop-filter: unset;
            -webkit-backdrop-filter: unset
        }

        .elementor-screen-only,
        .screen-reader-text {
            position: absolute;
            top: -10000em;
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }

        .elementor *,
        .elementor :after,
        .elementor :before {
            box-sizing: border-box
        }

        .elementor a {
            box-shadow: none;
            text-decoration: none
        }

        .elementor img {
            height: auto;
            max-width: 100%;
            border: none;
            border-radius: 0;
            box-shadow: none
        }

        .elementor .elementor-widget:not(.elementor-widget-text-editor):not(.elementor-widget-theme-post-content) figure {
            margin: 0
        }

        .elementor .elementor-background-overlay {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute
        }

        .elementor-element {
            --flex-direction: initial;
            --flex-wrap: initial;
            --justify-content: initial;
            --align-items: initial;
            --align-content: initial;
            --gap: initial;
            --flex-basis: initial;
            --flex-grow: initial;
            --flex-shrink: initial;
            --order: initial;
            --align-self: initial;
            flex-basis: var(--flex-basis);
            flex-grow: var(--flex-grow);
            flex-shrink: var(--flex-shrink);
            order: var(--order);
            align-self: var(--align-self)
        }

        .elementor-align-center {
            text-align: center
        }

        .elementor-align-center .elementor-button {
            width: auto
        }

        @media (max-width:767px) {
            .elementor-mobile-align-justify .elementor-button {
                width: 100%
            }
        }

        :root {
            --page-title-display: block
        }

        .elementor-section {
            position: relative
        }

        .elementor-section .elementor-container {
            display: flex;
            margin-right: auto;
            margin-left: auto;
            position: relative
        }

        @media (max-width:1024px) {
            .elementor-section .elementor-container {
                flex-wrap: wrap
            }
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1140px
        }

        .elementor-section.elementor-section-stretched {
            position: relative;
            width: 100%
        }

        .elementor-widget-wrap {
            position: relative;
            width: 100%;
            flex-wrap: wrap;
            align-content: flex-start
        }

        .elementor:not(.elementor-bc-flex-widget) .elementor-widget-wrap {
            display: flex
        }

        .elementor-widget-wrap>.elementor-element {
            width: 100%
        }

        .elementor-widget {
            position: relative
        }

        .elementor-widget:not(:last-child) {
            margin-bottom: 20px
        }

        .elementor-column {
            position: relative;
            min-height: 1px;
            display: flex
        }

        .elementor-column-gap-default>.elementor-column>.elementor-element-populated {
            padding: 10px
        }

        @media (min-width:768px) {
            .elementor-column.elementor-col-33 {
                width: 33.333%
            }

            .elementor-column.elementor-col-50 {
                width: 50%
            }

            .elementor-column.elementor-col-100 {
                width: 100%
            }
        }

        @media (max-width:767px) {
            .elementor-column {
                width: 100%
            }
        }

        @media (min-width:1025px) {
            #elementor-device-mode:after {
                content: "desktop"
            }
        }

        @media (min-width:-1) {
            #elementor-device-mode:after {
                content: "widescreen"
            }
        }

        @media (max-width:-1) {
            #elementor-device-mode:after {
                content: "laptop";
                content: "tablet_extra"
            }
        }

        @media (max-width:1024px) {
            #elementor-device-mode:after {
                content: "tablet"
            }
        }

        @media (max-width:-1) {
            #elementor-device-mode:after {
                content: "mobile_extra"
            }
        }

        @media (max-width:767px) {
            #elementor-device-mode:after {
                content: "mobile"
            }
        }

        @media (prefers-reduced-motion:no-preference) {
            html {
                scroll-behavior: smooth
            }
        }

        .elementor-heading-title {
            padding: 0;
            margin: 0;
            line-height: 1
        }

        .elementor-button {
            display: inline-block;
            line-height: 1;
            background-color: #69727d;
            font-size: 15px;
            padding: 12px 24px;
            border-radius: 3px;
            color: #fff;
            fill: #fff;
            text-align: center
        }

        .elementor-button:visited {
            color: #fff
        }

        .elementor-button-content-wrapper {
            display: flex;
            justify-content: center;
            flex-direction: row;
            gap: 5px
        }

        .elementor-button-text {
            display: inline-block
        }

        .elementor-button.elementor-size-lg {
            font-size: 18px;
            padding: 20px 40px;
            border-radius: 5px
        }

        .elementor-button span {
            text-decoration: inherit
        }

        @media (max-width:767px) {
            .elementor .elementor-hidden-mobile {
                display: none
            }
        }

        @media (min-width:768px) and (max-width:1024px) {
            .elementor .elementor-hidden-tablet {
                display: none
            }
        }

        @media (min-width:1025px) and (max-width:99999px) {
            .elementor .elementor-hidden-desktop {
                display: none
            }
        }

        .elementor-widget-image {
            text-align: center
        }

        .elementor-widget-image a {
            display: inline-block
        }

        .elementor-widget-image img {
            vertical-align: middle;
            display: inline-block
        }

        .elementor-widget-divider {
            --divider-border-style: none;
            --divider-border-width: 1px;
            --divider-color: #0c0d0e;
            --divider-icon-size: 20px;
            --divider-element-spacing: 10px;
            --divider-pattern-height: 24px;
            --divider-pattern-size: 20px;
            --divider-pattern-url: none;
            --divider-pattern-repeat: repeat-x
        }

        .elementor-widget-divider .elementor-divider {
            display: flex
        }

        .elementor-widget-divider .elementor-divider-separator {
            display: flex;
            margin: 0;
            direction: ltr
        }

        .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
            border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
        }

        :root {
            --swiper-theme-color: #007aff
        }

        :root {
            --swiper-navigation-size: 44px
        }

        .elementor-element {
            --swiper-theme-color: #000;
            --swiper-navigation-size: 44px;
            --swiper-pagination-bullet-size: 6px;
            --swiper-pagination-bullet-horizontal-gap: 6px
        }

        .elementor-kit-16735 {
            --e-global-color-primary: #D4AF37;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-accent: #FFD700;
            --e-global-color-c138360: #F2F2F2;
            --e-global-color-8d655b9: #C9C9C9;
            --e-global-color-b1a0783: #002764;
            --e-global-color-1a936e9: #FFD70036;
            --e-global-color-1903117: #FE9A00;
            --e-global-typography-primary-font-family: "Montserrat";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Helvetica";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Roboto";
            --e-global-typography-text-font-size: 17px;
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500
        }

        .elementor-kit-16735 a {
            color: #000000;
            font-weight: 500
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1080px
        }

        .elementor-widget:not(:last-child) {
            margin-block-end: 15px
        }

        .elementor-element {
            --widgets-spacing: 15px 15px
        }

        @media (max-width:1024px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1024px
            }
        }

        @media (max-width:767px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 767px
            }
        }

        .elementor-column .elementor-spacer-inner {
            height: var(--spacer-size)
        }

        .elementor-image-gallery .gallery-item {
            display: inline-block;
            text-align: center;
            vertical-align: top;
            width: 100%;
            max-width: 100%;
            margin: 0 auto
        }

        .elementor-image-gallery .gallery-item img {
            margin: 0 auto
        }

        .elementor-image-gallery figure img {
            display: block
        }

        .gallery-spacing-custom .elementor-image-gallery .gallery-icon {
            padding: 0
        }

        .elementor-27174 .elementor-element.elementor-element-309be83e:not(.elementor-motion-effects-element-type-background) {
            background-color: #000000;
            background-image: url("https://www.prophotostudio.net/wp-content/uploads/2024/11/knife-Photography-scaled-1-2048x1206-1-1024x603-1.webp");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover
        }

        .elementor-27174 .elementor-element.elementor-element-309be83e>.elementor-container {
            max-width: 1600px
        }

        .elementor-27174 .elementor-element.elementor-element-309be83e>.elementor-background-overlay {
            opacity: 0.85
        }

        .elementor-27174 .elementor-element.elementor-element-309be83e {
            padding: 80px 0px 220px 0px
        }

        .elementor-27174 .elementor-element.elementor-element-b24a816 {
            text-align: center
        }

        .elementor-27174 .elementor-element.elementor-element-b24a816 .elementor-heading-title {
            color: #B3B3B3;
            font-family: "Helvetica", Sans-serif;
            font-size: 19px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 7px
        }

        .elementor-27174 .elementor-element.elementor-element-1d5f265f>.elementor-widget-container {
            margin: -10px 0px 0px 0px
        }

        .elementor-27174 .elementor-element.elementor-element-1d5f265f {
            text-align: center
        }

        .elementor-27174 .elementor-element.elementor-element-1d5f265f .elementor-heading-title {
            color: #ffffff;
            font-family: "Montserrat", Sans-serif;
            font-size: 32px;
            font-weight: 500;
            font-style: normal;
            line-height: 1.2em;
            letter-spacing: 1.8px
        }

        .elementor-27174 .elementor-element.elementor-element-35b9342e>.elementor-widget-container {
            padding: 0% 5% 0% 5%
        }

        .elementor-27174 .elementor-element.elementor-element-35b9342e {
            text-align: center;
            color: #ffffff;
            font-family: "Helvetica", Sans-serif;
            font-size: 16px
        }

        .elementor-27174 .elementor-element.elementor-element-f369553 .elementor-button {
            background-color: #FFFFFFFA;
            font-size: 19px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            fill: #000000;
            color: #000000;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #F4F4F4;
            border-radius: 1px 1px 1px 1px;
            padding: 11px 45px 11px 45px
        }

        .elementor-27174 .elementor-element.elementor-element-f369553>.elementor-widget-container {
            background-color: #00000082;
            margin: 0px 0px 0px 00px;
            padding: 0px 0px 0px 0px;
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-color: var(--e-global-color-c138360);
            border-radius: 4px 4px 4px 4px
        }

        .elementor-27174 .elementor-element.elementor-element-30b73684 {
            --spacer-size: 60px
        }

        .elementor-27174 .elementor-element.elementor-element-18726384>.elementor-container>.elementor-column>.elementor-widget-wrap {
            align-content: center;
            align-items: center
        }

        .elementor-27174 .elementor-element.elementor-element-18726384 {
            padding: 100px 0px 100px 0px
        }

        .elementor-27174 .elementor-element.elementor-element-3698e1a0>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 35px 0px 0px 0px
        }

        .elementor-27174 .elementor-element.elementor-element-3698e1a0 .gallery-item {
            padding: 0 5px 5px 0
        }

        .elementor-27174 .elementor-element.elementor-element-3698e1a0 .gallery {
            margin: 0 -5px -5px 0
        }

        .elementor-27174 .elementor-element.elementor-element-3698e1a0 .gallery-item img {
            border-radius: 0px 0px 0px 0px
        }

        .elementor-27174 .elementor-element.elementor-element-2b5c7e5>.elementor-container {
            max-width: 2000px
        }

        .elementor-27174 .elementor-element.elementor-element-2b5c7e5 {
            margin-top: 20px;
            margin-bottom: 5px
        }

        .elementor-27174 .elementor-element.elementor-element-4ebcbe61>.elementor-widget-container {
            background-color: #FFFFFF
        }

        .elementor-27174 .elementor-element.elementor-element-4ebcbe61 {
            text-align: center
        }

        .elementor-27174 .elementor-element.elementor-element-4ebcbe61 .elementor-heading-title {
            color: #000000;
            font-weight: 700;
            letter-spacing: 3.2px
        }

        .elementor-27174 .elementor-element.elementor-element-924fc4a .elementor-button {
            background-color: #000000FA;
            font-size: 19px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            fill: var(--e-global-color-astglobalcolor6);
            color: var(--e-global-color-astglobalcolor6);
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #000000;
            border-radius: 1px 1px 1px 1px;
            padding: 11px 45px 11px 45px
        }

        .elementor-27174 .elementor-element.elementor-element-924fc4a>.elementor-widget-container {
            background-color: #00000082;
            margin: 0px 0px 0px 00px;
            padding: 0px 0px 0px 0px;
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-color: var(--e-global-color-c138360);
            border-radius: 4px 4px 4px 4px
        }

        .elementor-27174 .elementor-element.elementor-element-404910c5:not(.elementor-motion-effects-element-type-background) {
            background-color: #FFFFFF
        }

        .elementor-27174 .elementor-element.elementor-element-404910c5 {
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 0px 0px 0px 0px
        }

        body.elementor-page-27174:not(.elementor-motion-effects-element-type-background) {
            background-color: #FFFFFF
        }

        :root {
            --page-title-display: none
        }

        @media (max-width:1024px) {
            .elementor-27174 .elementor-element.elementor-element-309be83e:not(.elementor-motion-effects-element-type-background) {
                background-image: url("https://www.prophotostudio.net/wp-content/uploads/2024/11/knife-Photography-scaled-1-2048x1206-1-1024x603-1.webp")
            }

            .elementor-27174 .elementor-element.elementor-element-309be83e {
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 0px 0px 0px 0px
            }

            .elementor-27174 .elementor-element.elementor-element-b24a816 .elementor-heading-title {
                font-size: 20px;
                line-height: 1.3em
            }

            .elementor-27174 .elementor-element.elementor-element-1d5f265f .elementor-heading-title {
                font-size: 20px
            }

            .elementor-27174 .elementor-element.elementor-element-f369553>.elementor-widget-container {
                margin: 100px 150px 0px 150px;
                padding: 0px 0px 0px 0px
            }

            .elementor-27174 .elementor-element.elementor-element-18726384 {
                padding: 0px 25px 10px 25px
            }

            .elementor-27174 .elementor-element.elementor-element-3698e1a0>.elementor-widget-container {
                padding: 15px 0px 0px 0px
            }

            .elementor-27174 .elementor-element.elementor-element-924fc4a>.elementor-widget-container {
                margin: 100px 150px 0px 150px;
                padding: 0px 0px 0px 0px
            }
        }

        @media (max-width:767px) {
            .elementor-27174 .elementor-element.elementor-element-309be83e:not(.elementor-motion-effects-element-type-background) {
                background-image: url("https://www.prophotostudio.net/wp-content/uploads/2024/11/knife-Photography-scaled-1-2048x1206-1-1024x603-1.webp");
                background-position: top center;
                background-repeat: no-repeat;
                background-size: 484px auto
            }

            .elementor-27174 .elementor-element.elementor-element-309be83e {
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 0px 0px 40px 0px
            }

            .elementor-27174 .elementor-element.elementor-element-b24a816 {
                text-align: center
            }

            .elementor-27174 .elementor-element.elementor-element-b24a816 .elementor-heading-title {
                font-size: 17px;
                line-height: 1.3em;
                letter-spacing: 3.4px
            }

            .elementor-27174 .elementor-element.elementor-element-1d5f265f .elementor-heading-title {
                font-size: 24px
            }

            .elementor-27174 .elementor-element.elementor-element-35b9342e>.elementor-widget-container {
                margin: 70px 0px 0px 0px;
                padding: 0px 0px 0px 0px
            }

            .elementor-27174 .elementor-element.elementor-element-35b9342e {
                font-size: 17px
            }

            .elementor-27174 .elementor-element.elementor-element-f369553>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
                padding: 0px 20px 0px 20px
            }

            .elementor-27174 .elementor-element.elementor-element-18726384 {
                padding: 50px 0px 50px 0px
            }

            .elementor-27174 .elementor-element.elementor-element-74446e09 {
                width: 100%
            }

            .elementor-27174 .elementor-element.elementor-element-3698e1a0 {
                width: 100%;
                max-width: 100%
            }

            .elementor-27174 .elementor-element.elementor-element-3698e1a0>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
                padding: 0px 0px 0px 0px
            }

            .elementor-27174 .elementor-element.elementor-element-a21ee51>.elementor-element-populated {
                margin: 5px 5px 5px 5px;
                --e-column-margin-right: 5px;
                --e-column-margin-left: 5px;
                padding: 0px 0px 0px 0px
            }

            .elementor-27174 .elementor-element.elementor-element-49ce8b1>.elementor-element-populated {
                margin: 5px 5px 5px 5px;
                --e-column-margin-right: 5px;
                --e-column-margin-left: 5px;
                padding: 0px 0px 0px 0px
            }

            .elementor-27174 .elementor-element.elementor-element-1b54ec8>.elementor-element-populated {
                margin: 5px 5px 5px 5px;
                --e-column-margin-right: 5px;
                --e-column-margin-left: 5px;
                padding: 0px 0px 0px 0px
            }

            .elementor-27174 .elementor-element.elementor-element-4ebcbe61>.elementor-widget-container {
                padding: 15px 15px 15px 15px
            }

            .elementor-27174 .elementor-element.elementor-element-4ebcbe61 .elementor-heading-title {
                font-size: 20px
            }

            .elementor-27174 .elementor-element.elementor-element-43014c9 {
                margin-top: 30px;
                margin-bottom: 30px;
                padding: 0px 0px 0px 0px
            }

            .elementor-27174 .elementor-element.elementor-element-924fc4a>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
                padding: 0px 0px 0px 0px
            }

            .elementor-27174 .elementor-element.elementor-element-924fc4a .elementor-button {
                border-width: 1px 1px 1px 1px;
                border-radius: 1px 1px 1px 1px;
                padding: 11px 44px 11px 44px
            }

            .elementor-27174 .elementor-element.elementor-element-404910c5 {
                margin-top: 10px;
                margin-bottom: 10px;
                padding: 17px 0px 0px 0px
            }

            .elementor-27174 .elementor-element.elementor-element-7d4f32c2>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
                padding: 0px 0px 0px 0px
            }
        }

        .elementor-27385 .elementor-element.elementor-element-6acf625b:not(.elementor-motion-effects-element-type-background) {
            background-color: #000000
        }

        .elementor-27385 .elementor-element.elementor-element-6acf625b {
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 0px 0px 080px 0px
        }

        .elementor-27385 .elementor-element.elementor-element-38ac225d>.elementor-element-populated {
            margin: 50px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px
        }

        .elementor-27385 .elementor-element.elementor-element-1c4e4298>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px
        }

        .elementor-27385 .elementor-element.elementor-element-1c4e4298 {
            text-align: left
        }

        .elementor-27385 .elementor-element.elementor-element-1c4e4298 img {
            width: 41%
        }

        .elementor-27385 .elementor-element.elementor-element-795a94a5 {
            margin-top: 0px;
            margin-bottom: 0px
        }

        .elementor-27385 .elementor-element.elementor-element-48f11485>.elementor-element-populated {
            margin: 50px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px
        }

        .elementor-27385 .elementor-element.elementor-element-773e59e9 .elementor-heading-title {
            color: #FFFFFF;
            font-family: "Helvetica", Sans-serif;
            font-size: 15px
        }

        .elementor-27385 .elementor-element.elementor-element-540df591>.elementor-element-populated {
            margin: 120px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px
        }

        .elementor-27385 .elementor-element.elementor-element-4ceacc04 .elementor-heading-title {
            color: #FFFFFF;
            font-family: "Helvetica", Sans-serif;
            font-size: 15px
        }

        .elementor-27385 .elementor-element.elementor-element-478166b7 {
            color: #FFFFFF8C;
            font-family: "Helvetica", Sans-serif;
            font-size: 15px
        }

        .elementor-27385 .elementor-element.elementor-element-460541bf {
            color: #FFFFFF8C;
            font-family: "Helvetica", Sans-serif;
            font-size: 15px
        }

        .elementor-27385 .elementor-element.elementor-element-31d351a6 .elementor-heading-title {
            color: #FFFFFF;
            font-family: "Helvetica", Sans-serif;
            font-size: 15px
        }

        .elementor-27385 .elementor-element.elementor-element-4f1f80b2 {
            color: #FFFFFF8C;
            font-family: "Helvetica", Sans-serif;
            font-size: 15px
        }

        .elementor-27385 .elementor-element.elementor-element-3638b64c {
            color: #FFFFFF8C;
            font-family: "Helvetica", Sans-serif;
            font-size: 15px
        }

        .elementor-27385 .elementor-element.elementor-element-761b04b>.elementor-element-populated {
            margin: 120px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px
        }

        .elementor-27385 .elementor-element.elementor-element-1d8cc8c3 .elementor-heading-title {
            color: #FFFFFF;
            font-family: "Helvetica", Sans-serif;
            font-size: 15px
        }

        .elementor-27385 .elementor-element.elementor-element-770f2b9e {
            color: #FFFFFF8C;
            font-family: "Helvetica", Sans-serif;
            font-size: 15px
        }

        .elementor-27385 .elementor-element.elementor-element-791b548 {
            color: #FFFFFF8C;
            font-family: "Helvetica", Sans-serif;
            font-size: 15px
        }

        .elementor-27385 .elementor-element.elementor-element-388b4a6d {
            --divider-border-style: solid;
            --divider-color: #FFFFFF8C;
            --divider-border-width: 1px
        }

        .elementor-27385 .elementor-element.elementor-element-388b4a6d .elementor-divider-separator {
            width: 100%
        }

        .elementor-27385 .elementor-element.elementor-element-388b4a6d .elementor-divider {
            padding-block-start: 2px;
            padding-block-end: 2px
        }

        @media (min-width:768px) {
            .elementor-27385 .elementor-element.elementor-element-57e8dbc {
                width: 51.448%
            }

            .elementor-27385 .elementor-element.elementor-element-44b8afb1 {
                width: 48.373%
            }
        }

        @media (max-width:1024px) {
            .elementor-27385 .elementor-element.elementor-element-48f11485>.elementor-element-populated {
                margin: 75px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px
            }
        }

        @media (max-width:767px) {
            .elementor-27385 .elementor-element.elementor-element-6acf625b {
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 0px 0px 0px 010px
            }

            .elementor-27385 .elementor-element.elementor-element-38ac225d>.elementor-element-populated {
                margin: 50px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 0px 0px 0px
            }

            .elementor-27385 .elementor-element.elementor-element-1c4e4298 {
                text-align: left
            }

            .elementor-27385 .elementor-element.elementor-element-1c4e4298 img {
                width: 20%
            }

            .elementor-27385 .elementor-element.elementor-element-795a94a5 {
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 0px 0px 0px 0px
            }

            .elementor-27385 .elementor-element.elementor-element-48f11485>.elementor-element-populated {
                margin: 10px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 0px 0px 0px
            }

            .elementor-27385 .elementor-element.elementor-element-773e59e9>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
                padding: 0px 0px 0px 0px
            }

            .elementor-27385 .elementor-element.elementor-element-773e59e9 {
                text-align: left
            }

            .elementor-27385 .elementor-element.elementor-element-773e59e9 .elementor-heading-title {
                font-size: 17px
            }

            .elementor-27385 .elementor-element.elementor-element-540df591>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 0px 0px 0px
            }

            .elementor-27385 .elementor-element.elementor-element-4ceacc04 {
                text-align: center
            }

            .elementor-27385 .elementor-element.elementor-element-4ceacc04 .elementor-heading-title {
                font-size: 17px
            }

            .elementor-27385 .elementor-element.elementor-element-1b3d13eb {
                width: 50%
            }

            .elementor-27385 .elementor-element.elementor-element-478166b7 {
                text-align: left
            }

            .elementor-27385 .elementor-element.elementor-element-e3fcc81 {
                width: 50%
            }

            .elementor-27385 .elementor-element.elementor-element-460541bf {
                text-align: left
            }

            .elementor-27385 .elementor-element.elementor-element-31d351a6>.elementor-widget-container {
                margin: 0px 0px 0px 10px
            }

            .elementor-27385 .elementor-element.elementor-element-31d351a6 {
                text-align: left
            }

            .elementor-27385 .elementor-element.elementor-element-31d351a6 .elementor-heading-title {
                font-size: 17px
            }

            .elementor-27385 .elementor-element.elementor-element-3cd1f79b {
                width: 50%
            }

            .elementor-27385 .elementor-element.elementor-element-4f1f80b2 {
                text-align: left
            }

            .elementor-27385 .elementor-element.elementor-element-4e937204 {
                width: 50%
            }

            .elementor-27385 .elementor-element.elementor-element-3638b64c {
                text-align: left
            }

            .elementor-27385 .elementor-element.elementor-element-761b04b>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 0px 0px 0px
            }

            .elementor-27385 .elementor-element.elementor-element-1d8cc8c3>.elementor-widget-container {
                margin: 0px 0px 0px 010px
            }

            .elementor-27385 .elementor-element.elementor-element-1d8cc8c3 {
                text-align: left
            }

            .elementor-27385 .elementor-element.elementor-element-1d8cc8c3 .elementor-heading-title {
                font-size: 17px
            }

            .elementor-27385 .elementor-element.elementor-element-57e8dbc {
                width: 50%
            }

            .elementor-27385 .elementor-element.elementor-element-770f2b9e {
                text-align: left
            }

            .elementor-27385 .elementor-element.elementor-element-44b8afb1 {
                width: 50%
            }

            .elementor-27385 .elementor-element.elementor-element-791b548 {
                text-align: left
            }
        }

        .gallery-item {
            display: inline-block;
            text-align: center;
            vertical-align: top;
            width: 100%
        }

        .gallery-icon {
            border-bottom: 0;
            border-radius: 2px 2px 0 0;
            border: 1px solid var(--ast-border-color);
            overflow: hidden
        }

        .gallery-item {
            margin: 0;
            padding: 10px;
            border-radius: 2px
        }

        .gallery-item:last-child {
            margin-bottom: 2em
        }

        .elementor-image-gallery .gallery-icon {
            border: none
        }
    </style>
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Montserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap"
        media="print" onload="this.media='all'" /><noscript>
        <link rel="preload"
            href="https://fonts.googleapis.com/css?family=Montserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap"
            data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    </noscript>
    
    <style>
        .cp-popup-container .cpro-overlay,
        .cp-popup-container .cp-popup-wrapper {
            opacity: 0;
            visibility: hidden;
            display: none
        }
    </style>
    <link rel='preload' href='{{ asset('wp-content') }}/themes/astra/assets/css/minified/style.mine506.css?ver=4.8.12'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link data-minify="1" rel='preload' href='{{ asset('wp-content') }}/cache/min/1/wp-content/uploads/astra/astra-theme-dynamic-css-post-271744951.css?ver=1739783240' media='all' />
    <link rel='preload'
        href='{{ asset('wp-content') }}/plugins/premium-addons-for-elementor/assets/frontend/min-css/premium-addons.min9617.css?ver=4.10.85'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload' href='{{ asset('wp-includes') }}/js/mediaelement/mediaelementplayer-legacy.min1f61.css?ver=4.2.17'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload' href='{{ asset('wp-includes') }}/js/mediaelement/wp-mediaelement.mind1c0.css?ver=6.7.2'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link data-minify="1" rel='preload'
        href='{{ asset('wp-content') }}/cache/min/1/wp-content/plugins/toolset-blocks/public/css/views-frontend0a8f.css?ver=1739782441'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <style id='view_editor_gutenberg_frontend_assets-inline-css'>
        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default>span.wpv-sort-list,
        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default .wpv-sort-list-item {
            border-color: #cdcdcd;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default .wpv-sort-list-item a {
            color: #444;
            background-color: #fff;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default a:hover,
        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default a:focus {
            color: #000;
            background-color: #eee;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default .wpv-sort-list-item.wpv-sort-list-current a {
            color: #000;
            background-color: #eee;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default>span.wpv-sort-list,
        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default .wpv-sort-list-item {
            border-color: #cdcdcd;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default .wpv-sort-list-item a {
            color: #444;
            background-color: #fff;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default a:hover,
        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default a:focus {
            color: #000;
            background-color: #eee;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default .wpv-sort-list-item.wpv-sort-list-current a {
            color: #000;
            background-color: #eee;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-grey>span.wpv-sort-list,
        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-grey .wpv-sort-list-item {
            border-color: #cdcdcd;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-grey .wpv-sort-list-item a {
            color: #444;
            background-color: #eeeeee;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-grey a:hover,
        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-grey a:focus {
            color: #000;
            background-color: #e5e5e5;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-grey .wpv-sort-list-item.wpv-sort-list-current a {
            color: #000;
            background-color: #e5e5e5;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default>span.wpv-sort-list,
        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default .wpv-sort-list-item {
            border-color: #cdcdcd;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default .wpv-sort-list-item a {
            color: #444;
            background-color: #fff;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default a:hover,
        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default a:focus {
            color: #000;
            background-color: #eee;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-default .wpv-sort-list-item.wpv-sort-list-current a {
            color: #000;
            background-color: #eee;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-grey>span.wpv-sort-list,
        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-grey .wpv-sort-list-item {
            border-color: #cdcdcd;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-grey .wpv-sort-list-item a {
            color: #444;
            background-color: #eeeeee;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-grey a:hover,
        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-grey a:focus {
            color: #000;
            background-color: #e5e5e5;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-grey .wpv-sort-list-item.wpv-sort-list-current a {
            color: #000;
            background-color: #e5e5e5;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-blue>span.wpv-sort-list,
        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-blue .wpv-sort-list-item {
            border-color: #0099cc;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-blue .wpv-sort-list-item a {
            color: #444;
            background-color: #cbddeb;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-blue a:hover,
        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-blue a:focus {
            color: #000;
            background-color: #95bedd;
        }

        .wpv-sort-list-dropdown.wpv-sort-list-dropdown-style-blue .wpv-sort-list-item.wpv-sort-list-current a {
            color: #000;
            background-color: #95bedd;
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
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--ast-global-color-0: var(--ast-global-color-0);
            --wp--preset--color--ast-global-color-1: var(--ast-global-color-1);
            --wp--preset--color--ast-global-color-2: var(--ast-global-color-2);
            --wp--preset--color--ast-global-color-3: var(--ast-global-color-3);
            --wp--preset--color--ast-global-color-4: var(--ast-global-color-4);
            --wp--preset--color--ast-global-color-5: var(--ast-global-color-5);
            --wp--preset--color--ast-global-color-6: var(--ast-global-color-6);
            --wp--preset--color--ast-global-color-7: var(--ast-global-color-7);
            --wp--preset--color--ast-global-color-8: var(--ast-global-color-8);
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
            --wp--style--global--content-size: var(--wp--custom--ast-content-width-size);
            --wp--style--global--wide-size: var(--wp--custom--ast-wide-width-size);
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
            text-decoration: none;
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

        .has-ast-global-color-0-color {
            color: var(--wp--preset--color--ast-global-color-0) !important;
        }

        .has-ast-global-color-1-color {
            color: var(--wp--preset--color--ast-global-color-1) !important;
        }

        .has-ast-global-color-2-color {
            color: var(--wp--preset--color--ast-global-color-2) !important;
        }

        .has-ast-global-color-3-color {
            color: var(--wp--preset--color--ast-global-color-3) !important;
        }

        .has-ast-global-color-4-color {
            color: var(--wp--preset--color--ast-global-color-4) !important;
        }

        .has-ast-global-color-5-color {
            color: var(--wp--preset--color--ast-global-color-5) !important;
        }

        .has-ast-global-color-6-color {
            color: var(--wp--preset--color--ast-global-color-6) !important;
        }

        .has-ast-global-color-7-color {
            color: var(--wp--preset--color--ast-global-color-7) !important;
        }

        .has-ast-global-color-8-color {
            color: var(--wp--preset--color--ast-global-color-8) !important;
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

        .has-ast-global-color-0-background-color {
            background-color: var(--wp--preset--color--ast-global-color-0) !important;
        }

        .has-ast-global-color-1-background-color {
            background-color: var(--wp--preset--color--ast-global-color-1) !important;
        }

        .has-ast-global-color-2-background-color {
            background-color: var(--wp--preset--color--ast-global-color-2) !important;
        }

        .has-ast-global-color-3-background-color {
            background-color: var(--wp--preset--color--ast-global-color-3) !important;
        }

        .has-ast-global-color-4-background-color {
            background-color: var(--wp--preset--color--ast-global-color-4) !important;
        }

        .has-ast-global-color-5-background-color {
            background-color: var(--wp--preset--color--ast-global-color-5) !important;
        }

        .has-ast-global-color-6-background-color {
            background-color: var(--wp--preset--color--ast-global-color-6) !important;
        }

        .has-ast-global-color-7-background-color {
            background-color: var(--wp--preset--color--ast-global-color-7) !important;
        }

        .has-ast-global-color-8-background-color {
            background-color: var(--wp--preset--color--ast-global-color-8) !important;
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

        .has-ast-global-color-0-border-color {
            border-color: var(--wp--preset--color--ast-global-color-0) !important;
        }

        .has-ast-global-color-1-border-color {
            border-color: var(--wp--preset--color--ast-global-color-1) !important;
        }

        .has-ast-global-color-2-border-color {
            border-color: var(--wp--preset--color--ast-global-color-2) !important;
        }

        .has-ast-global-color-3-border-color {
            border-color: var(--wp--preset--color--ast-global-color-3) !important;
        }

        .has-ast-global-color-4-border-color {
            border-color: var(--wp--preset--color--ast-global-color-4) !important;
        }

        .has-ast-global-color-5-border-color {
            border-color: var(--wp--preset--color--ast-global-color-5) !important;
        }

        .has-ast-global-color-6-border-color {
            border-color: var(--wp--preset--color--ast-global-color-6) !important;
        }

        .has-ast-global-color-7-border-color {
            border-color: var(--wp--preset--color--ast-global-color-7) !important;
        }

        .has-ast-global-color-8-border-color {
            border-color: var(--wp--preset--color--ast-global-color-8) !important;
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

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
 
    <link data-minify="1" rel='preload'
        href='{{ asset('wp-content') }}/cache/min/1/wp-content/uploads/astra-addon/astra-addon-67ae7a903cfd58-791424360a8f.css?ver=1739782441'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link data-minify="1" rel='preload'
        href='{{ asset('wp-content') }}/cache/min/1/wp-content/uploads/astra-addon/astra-addon-dynamic-css-post-271749ddb.css?ver=1739783241'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload' href='{{ asset('wp-content') }}/plugins/elementor/assets/css/frontend.min3dd9.css?ver=3.27.6'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload' href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-image.min3dd9.css?ver=3.27.6'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload' href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-heading.min3dd9.css?ver=3.27.6'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload' href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-text-editor.min3dd9.css?ver=3.27.6'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload' href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-divider.min3dd9.css?ver=3.27.6'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload' href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-social-icons.min3dd9.css?ver=3.27.6'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload'
        href='{{ asset('wp-content') }}/plugins/elementor/assets/css/conditionals/apple-webkit.min3dd9.css?ver=3.27.6'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link data-minify="1" rel='preload'
        href='{{ asset('wp-content') }}/cache/min/1/wp-content/uploads/elementor/css/post-167350a8f.css?ver=1739782441'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload'
        href='{{ asset('wp-content') }}/plugins/powerpack-elements/assets/css/min/extensions.mina7d6.css?ver=2.11.11'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload' href='{{ asset('wp-content') }}/plugins/powerpack-elements/assets/css/min/tooltip.mina7d6.css?ver=2.11.11'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload' href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-spacer.min3dd9.css?ver=3.27.6'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload' href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-image-gallery.min3dd9.css?ver=3.27.6'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link data-minify="1" rel='preload'
        href='{{ asset('wp-content') }}/cache/min/1/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min9ddb.css?ver=1739783241'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload' href='{{ asset('wp-content') }}/plugins/elementor/assets/css/conditionals/e-swiper.min3dd9.css?ver=3.27.6'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload' href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-image-carousel.min3dd9.css?ver=3.27.6'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload' href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-video.min3dd9.css?ver=3.27.6'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload' href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-rating.min3dd9.css?ver=3.27.6'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link rel='preload' href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-icon-box.min3dd9.css?ver=3.27.6'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link data-minify="1" rel='preload'
        href='{{ asset('wp-content') }}/cache/min/1/wp-content/uploads/elementor/css/post-271749ddb.css?ver=1739783241'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link data-minify="1" rel='preload'
        href='{{ asset('wp-content') }}/cache/min/1/wp-content/uploads/elementor/css/post-273850a8f.css?ver=1739782441'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <link data-minify="1" rel='preload'
        href='{{ asset('wp-content') }}/cache/min/1/wp-content/plugins/toolset-blocks/vendor/toolset/toolset-theme-settings/res/css/themes/astra-overrides0a8f.css?ver=1739782441'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='screen' />
    <link rel='preload'
        href='{{ asset('wp-content') }}/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min1b46.css?ver=6.1.4'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media='all' />
    <style id='rocket-lazyload-inline-css'>
        .rll-youtube-player {
            position: relative;
            padding-bottom: 56.23%;
            height: 0;
            overflow: hidden;
            max-width: 100%;
        }

        .rll-youtube-player iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 100;
            background: 0 0
        }

        .rll-youtube-player img {
            bottom: 0;
            display: block;
            left: 0;
            margin: auto;
            max-width: 100%;
            width: 100%;
            position: absolute;
            right: 0;
            top: 0;
            border: none;
            height: auto;
            cursor: pointer;
            -webkit-transition: .4s all;
            -moz-transition: .4s all;
            transition: .4s all
        }

        .rll-youtube-player img:hover {
            -webkit-filter: brightness(75%)
        }

        .rll-youtube-player .play {
            height: 72px;
            width: 72px;
            left: 50%;
            top: 50%;
            margin-left: -36px;
            margin-top: -36px;
            position: absolute;
            background: url(wp-content/plugins/wp-rocket/assets/img/youtube.png) no-repeat;
            cursor: pointer
        }
    </style>

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="rocketlazyloadscript" data-minify="1" src="{{ asset('wp-content') }}/cache/min/1/wp-content/plugins/toolset-blocks/vendor/toolset/common-es/public/toolset-common-es-frontend3e02.js?ver=1739487892" id="toolset-common-es-frontend-js" defer></script>
    
    <script type="rocketlazyloadscript" src="https://www.googletagmanager.com/gtag/js?id=G-59EZ45T8ND" id="google_gtagjs-js" async></script>
    
    <noscript>
        <link data-minify="1" rel="preload"
            href="{{ asset('wp-content') }}/cache/min/1/wp-content/plugins/toolset-blocks/vendor/toolset/blocks/public/css/style0a8f.css?ver=1739782441"
            data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'">
    </noscript>
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>

    <link rel="apple-touch-icon" href="{{ asset('wp-content') }}/uploads/2020/12/cropped-pro-photo-small-header-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://www.prophotostudio.net/wp-content/uploads/2020/12/cropped-pro-photo-small-header-270x270.png" />

    <style id="wp-custom-css">
        .woocommerce-product-gallery__trigger {
            display: none !important;
        }

        .woocommerce-product-gallery__image {
            pointer-events: none;
        }

        .ast-flex.main-header-container {
            justify-content: space-between;
        }

        .tc-totals-form.tc-show {
            display: none !important;
        }

        .product-category-template-default .container2 {
            padding-top: 28px;
            width: 100% !important;
            margin: 0 auto;
            max-width: 1080px;
            padding-bottom: 28px;
        }

        .product-category-template-default .p-1 {
            float: left;
            width: 50%;
            padding: 20px 0;
        }

        .product-category-template-default .p-2 {
            float: left;
            width: 50%;
            border-left: 2px solid #000;
            padding-left: 20px;
            margin-top: 20px;
        }

        .product-category-template-default .gallery-columns-6 .gallery-item {
            max-width: 14%;
        }

        .product-category-template-default .site-content {
            padding-top: 28px;
            width: 100% !important;
            margin: 0 auto;
            max-width: 1080px;
            padding-bottom: 28px
        }

        .product-category-template-default .ast-container {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .product-category-template-default .site-content #primary {
            order: 2 !important;
            width: 100% !important;
        }

        .product-category-template-default .site-content #secondary {
            order: 1 !important;
            width: 100% !important;
        }

        .product-category-template-default .entry-title {
            display: none !important;
        }

        .product-category-template-default #primary {
            border-right: none !important;
        }

        .product-category-template-default #secondary {
            border-left: none !important;
            padding-left: 0 !important;
        }

        .product-category-template-default .secondary .widget-title {
            font-size: 25px !important;
            font-weight: 400 !important;
            border-bottom: 4px solid rgba(69, 149, 247, 1) !important;
            margin-bottom: 10px !important;
        }

        .product-category-template-default #secondary {
            position: sticky;
            top: 93px;
            z-index: 9999;
            background: #fff !important;

        }

        #custom-post-type-recent-posts-2 ul {
            -webkit-column-count: 6;
            -moz-column-count: 6;
            -o-column-count: 6;
            column-count: 6;
            list-style: inside !important;
        }

        #custom-post-type-recent-posts-2 li a {
            font-size: 14px;
            color: #666;
        }

        .product-category-template-default.single-product-category .cstm-pricing-link2 {
            font-size: 13px;
            background-color: rgb(234, 234, 234);
            margin-top: 10px;
            display: inline-block;
            color: rgb(0, 0, 0) !important;
            border-width: 1px;
            border-style: solid;
            border-color: rgb(168, 168, 168);
            border-image: initial;
            border-radius: 2px;
            padding: 9px 18px;
        }

        .product-category-template-default.single-product-category .cstm-pricing-link2:hover {
            border-width: 1px;
            border-style: solid;
            border-color: rgb(44, 44, 43);
            border-image: initial;
        }

        .site-footer {
            background-color: #000;
        }

        .site-footer .custom-html-widget p,
        .site-footer .custom-html-widget a {
            color: #565656;
        }

        .site-footer .custom-html-widget a:hover {
            color: #ffffff;
        }

        .site-footer .widget_custom_html .widget-title {
            font-size: 13px;
        }

        .site-footer .custom-html-widget li {
            margin-bottom: 18px;
        }

        .footer-sml-layout-2 {

            padding-left: 200px;
            padding-right: 200px;
        }

        .footer-sml-layout-2 .ast-footer-overlay {
            border-top: 1px solid #444 !important;
        }

        .ast-small-footer .ast-small-footer-section,
        .ast-small-footer .ast-small-footer-section a {
            color: #666;
        }

        .footer-adv-overlay #custom_html-3 a {
            white-space: nowrap !important;
        }

        @media only screen and (max-width:767px) {
            .product-category-template-default.single-product-category #secondary {
                position: static;
                padding-right: 0px;
                max-width: 84%;
                margin: auto;
            }

            .product-category-template-default.single-product-category #et-main-area .content-area .p-1 {
                display: none;
            }

            .product-category-template-default.single-product-category #et-main-area .content-area .p-2 {
                width: 100%;
                border: 0;
                padding-left: 0px;
            }

            .product-category-template-default.single-product-category #et-main-area .container2 {
                max-width: 84%;
            }

            .product-category-template-default.single-product-category #custom-post-type-recent-posts-2 ul {
                -webkit-column-count: 2 !important;
                -moz-column-count: 2 !important;
                -o-column-count: 2 !important;
                column-count: 2 !important;
            }

            .product-category-template-default.single-product-category #et-main-area .content-area .p-2 .cat-desc h1 {
                margin-bottom: 25px;
            }

            .product-category-template-default.single-product-category #et-main-area .content-area .p-2 .cat-desc p {
                font-size: 15px;
                color: #666666;
                margin-bottom: 15px;
            }

            .product-category-template-default.single-product-category {}

            .footer-sml-layout-2 {
                margin: auto;
                max-width: 80%;
                padding-right: 0px;
                padding-left: 0px;
            }

            .footer-adv .ast-container {
                margin: auto;
                max-width: 80%;
                padding-right: 0px;
                padding-left: 0px;
            }

            .footer-adv-layout-5 .ast-row {
                display: flex;
                flex-wrap: wrap;
            }

            .footer-adv-layout-5 .ast-row .ast-col-sm-12 {
                width: 50% !important;
            }

            .footer-adv-overlay #custom_html-3 a {
                white-space: normal !important;
            }
        }

        @media (min-width:787px) {
            #primary-menu #menu-item-24622 a {
                background: #fff !important;
                margin-left: 20px !important;
                border-radius: 2px !important;
                text-transform: none !important;
                padding: 8px 20px !important;
                color: #000 !important;
                height: 33px;
                font-weight: bold;
            }
        }

        .wpcpro-wrapper .wpcp-carousel-section .wpcp-single-item:focus {
            outline: 0 !important;
        }

        .sub-menu-columns ul.sub-menu li {
            clear: initial;
            display: inline-block;
            float: left;
            width: 49%;
        }

        .sub-menu-columns ul.sub-menu {
            width: 500px;
        }

        .sub-menu-columns ul.sub-menu li:nth-child(odd) {
            float: left;
            /*margin-right: 300px;*/
        }

        .sub-menu-columns ul.sub-menu li:nth-child(even) {
            float: right;
        }

        #ast-fixed-header.ast-sticky-active #primary-menu>li>.menu-link {
            color: #f4f4f4 !important;
        }

        @media (max-width:787px) {
            .ast-main-header-bar-alignment {
                max-width: 170px;
                position: relative;
            }

            .main-header-bar-navigation.toggle-on {
                position: fixed;
                top: 0px;
                background-color: #0f0f0f;
                width: 70%;
                right: 0px;
                padding-top: 85px !important;
                z-index: -2;
                opacity: 0.93;
            }

            .ast-mobile-menu-buttons {
                order: 5;
            }

            .ast-flex.main-header-container {
                display: flex;
                flex-flow: nowrap;
            }

            .main-header-bar {
                padding: 0 !important;
            }

            .site-header {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 1000;
            }

            .hfeed.site {
                padding-top: 60px;
            }

            .menu-toggle:focus,
            .menu-toggle:active,
            {
            outline: none;
            box-shadow: none;
        }

        .ast-site-identity {
            padding: 0;
        }

        .ast-header-break-point .main-header-bar .main-header-bar-navigation .main-header-menu {
            border-left-width: 0px;
        }

        .ast-header-break-point .main-header-menu {
            background-color: #0f0f0f;
        }

        .ast-header-break-point .main-header-bar .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle {
            right: 20px;
        }

        .ast-header-break-point .main-header-menu .sub-menu .menu-link {
            color: #ffffff;
        }

        .ast-header-break-point .main-header-menu .sub-menu {
            background-color: #0f0f0f;
        }

        #site-navigation {
            background-color: #0f0f0f;
            overflow-y: auto;
        }

        .sub-menu-columns ul.sub-menu li {
            width: 100%;
        }

        .ast-header-break-point .main-navigation ul.sub-menu .menu-item .menu-link {
            border-width: 0px;
            padding-left: 5px;
            font-size: 11px;
        }

        .ast-header-break-point .main-navigation ul.sub-menu .menu-item .menu-link:before {
            content: '';
        }

        body.logged-in .main-header-bar-navigation.toggle-on {
            padding-top: 135px !important;
        }

        .main-navigation ul .menu-item .menu-link,
        .ast-header-break-point .main-navigation ul .menu-item .menu-link {
            padding-left: 20px !important;
        }

        #ast-scroll-top {
            bottom: 77px !important;
        }

        .tm-extra-product-options .tc-row,
        .tc-row {
            overflow-x: hidden;
        }

        .elementor-container.elementor-column-gap-default {
            overflow: hidden;
        }
        }

        #ptsTxt_96077 {
            color: #fff !important;
        }

        .p-p-t1 p strong {
            color: #4d4d4d !important;
            font-size: 27pt !important;
        }

        .p-p-t1 p {
            color: #4c4c4c !important;
            font-size: 12pt !important;
        }

        .tc-extra-product-options .tmcp-field-wrap .price.tc-price .amount {
            font-size: 22px !important;
        }

        .amount:after {
            content: " /image";
        }

        @media (max-width:787px) {
            .elementor-element.elementor-element-d1941c6 {
                display: flex;
                flex-direction: column !important;
            }

            .elementor-element-a939187 {
                order: 1 !important;
            }

            .elementor-element-41a74bb {
                order: 2 !important;
            }
        }

        @media (min-width: 769px) {

            .footer-adv-layout-5 .ast-col-lg-2,
            .footer-adv-layout-5 .ast-col-md-2 {
                width: 20% !important;
            }
        }

        @media (min-width: 769px) {
            #menu-item-24622 .menu-text {
                position: relative;
                top: -2px;
            }
        }

        @media (max-width: 769px) {
            .elementor-16736 .elementor-element.elementor-element-52b353a {
                margin-left: -48px !important
            }

        }
    </style>
    
</head>

<body class="home page-template page-template-elementor_header_footer page page-id-27174 wp-custom-logo cp_aff_false ast-desktop ast-page-builder-template ast-right-sidebar astra-4.8.12 ast-header-custom-item-inside ast-full-width-primary-header group-blog ast-single-post ast-inherit-site-logo-transparent ast-above-mobile-menu-align-inline ast-default-menu-enable ast-flyout-above-menu-enable ast-flyout-above-left-side ast-default-below-menu-enable above-header-nav-padding-support ast-above-header-hide-on-mobile ast-fluid-width-layout ast-full-width-header ast-sticky-main-shrink ast-sticky-header-shrink ast-inherit-site-logo-sticky ast-primary-sticky-enabled ast-normal-title-enabled elementor-default elementor-template-full-width elementor-kit-16735 elementor-page elementor-page-27174 astra-addon-4.8.13">
    <div class="hfeed site" id="page">
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <header class="site-header ast-primary-submenu-animation-slide-down header-main-layout-1 ast-primary-menu-enabled ast-logo-title-inline ast-menu-toggle-icon ast-mobile-header-inline ast-above-header-enabled ast-above-header-section-separated ast-above-header-mobile-inline ast-below-header-mobile-stack"
            id="masthead" itemtype="https://schema.org/WPHeader" itemscope="itemscope" itemid="#masthead">


            <div class="main-header-bar-wrap">
                <div class="main-header-bar">
                    <div class="ast-container">

                        <div class="ast-flex main-header-container">

                            <div class="site-branding">
                                <div class="ast-site-identity" itemtype="https://schema.org/Organization"
                                    itemscope="itemscope">
                                    <span class="site-logo-img"><a href="{{ url('/') }}" class="custom-logo-link"
                                            rel="home" aria-current="page">
                                            <img width="120px" src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}"
                                                class="custom-logo"
                                                alt="Aimcom Studio | Product Photography | Miami Product Photography | Product Photography | Jewelry Photography"
                                                decoding="async" /></a></span>
                                </div>
                            </div>

                            <!-- .site-branding -->
                            <div class="ast-mobile-menu-buttons">


                                <div class="ast-button-wrap">
                                    <button type="button"
                                        class="menu-toggle main-header-menu-toggle  ast-mobile-menu-buttons-minimal "
                                        aria-controls='primary-menu' aria-expanded='false'>
                                        <span class="screen-reader-text">Main Menu</span>
                                        <span class="ast-icon icon-menu-bars"><span
                                                class="menu-toggle-icon"></span></span> </button>
                                </div>


                            </div>
                            <div class="ast-main-header-bar-alignment"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 0 0" width="0" height="0" focusable="false"
                                    role="none"
                                    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
                                    <defs>
                                        <filter id="ast-mm-item41938-color-filter">
                                            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                                                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                                            <feComponentTransfer color-interpolation-filters="sRGB">
                                                <feFuncR type="table" tableValues="0 0" />
                                                <feFuncG type="table"
                                                    tableValues="0.56470588235294 0.56470588235294" />
                                                <feFuncB type="table"
                                                    tableValues="0.76078431372549 0.76078431372549" />
                                                <feFuncA type="table" tableValues="1 1" />
                                            </feComponentTransfer>
                                            <feComposite in2="SourceGraphic" operator="in" />
                                        </filter>
                                    </defs>
                                </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0"
                                    height="0" focusable="false" role="none"
                                    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
                                    <defs>
                                        <filter id="ast-mm-item24616-color-filter">
                                            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                                                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                                            <feComponentTransfer color-interpolation-filters="sRGB">
                                                <feFuncR type="table" tableValues="1 1" />
                                                <feFuncG type="table"
                                                    tableValues="0.84313725490196 0.84313725490196" />
                                                <feFuncB type="table" tableValues="0 0" />
                                                <feFuncA type="table" tableValues="1 1" />
                                            </feComponentTransfer>
                                            <feComposite in2="SourceGraphic" operator="in" />
                                        </filter>
                                    </defs>
                                </svg>
                                <div class="main-header-bar-navigation">
                                    <nav class="site-navigation ast-flex-grow-1 navigation-accessibility"
                                        id="primary-site-navigation" aria-label="Site Navigation"
                                        itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
                                        <div class="main-navigation">
                                            <ul id="primary-menu"
                                                class="main-header-menu ast-menu-shadow ast-nav-menu ast-flex ast-justify-content-flex-end  submenu-with-border astra-menu-animation-slide-down  ast-mega-menu-enabled">
                                                <li id="menu-item-24614"
                                                    class="sub-menu-columns menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-24614">
                                                    <a href="{{ url('/') }}" class="menu-link">
                                                        <span class="ast-icon icon-arrow"></span>
                                                        <span class="menu-text">Home</span>
                                                    </a>
                                                </li>
                                               
                                                <style>
                                                    /* Show submenu on hover */
                                                    .menu-item.menu-item-has-children:hover .sub-menu {
                                                        display: block;
                                                        opacity: 1;
                                                        visibility: visible;
                                                    }

                                                    /* Hide submenu by default */
                                                    .sub-menu {
                                                        display: none;
                                                        opacity: 0;
                                                        visibility: hidden;
                                                        position: absolute;
                                                        background-color: #fff; /* Change background color as needed */
                                                        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                                                        padding: 10px 0;
                                                        min-width: 200px; /* Adjust width if needed */
                                                        z-index: 1000;
                                                    }

                                                    /* Ensure submenu is positioned correctly */
                                                    .menu-item.menu-item-has-children {
                                                        position: relative;
                                                    }

                                                    .sub-menu .menu-item {
                                                        padding: 8px 15px;
                                                        white-space: nowrap;
                                                    }

                                                    .sub-menu .menu-item a {
                                                        color: #333; /* Adjust text color */
                                                        text-decoration: none;
                                                        display: block;
                                                        padding: 5px 15px;
                                                    }

                                                    .sub-menu .menu-item a:hover {
                                                        background-color: #f4f4f4; /* Adjust hover color */
                                                    }

                                                    .arrow {
                                                        font-size: 10px !important;
                                                        margin: 0px 3px !important;
                                                        padding-top: 3px !important;
                                                    }
                                                </style>
                                                <li id="menu-item-24602"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-24602"
                                                    aria-haspopup="true">
                                                    <a aria-expanded="false" href="#"class="menu-link">
                                                        <span class="ast-icon icon-arrow"></span>
                                                        <span class="menu-text">Services</span>
                                                        <span class="arrow">▼</span>
                                                    </a>
                                                    <button class="ast-menu-toggle" aria-expanded="false">
                                                        <span class="screen-reader-text">Menu Toggle</span>
                                                        <span class="ast-icon icon-arrow"></span>
                                                    </button>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-24618"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24618">
                                                            <a href="{{ route('product.photography') }}"
                                                                class="menu-link"><span
                                                                    class="ast-icon icon-arrow"></span><span
                                                                    style="font-size: 13px" class="menu-text">Product Photography</span></a>
                                                        </li>
                                                        <li id="menu-item-32312"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32312">
                                                            <a href="{{ route('realestate.photography') }}"
                                                                class="menu-link"><span
                                                                    class="ast-icon icon-arrow"></span><span
                                                                    style="font-size: 13px"  class="menu-text">Real Estate
                                                                    Photography</span></a>
                                                        </li>
                                                        <li id="menu-item-24619"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24619">
                                                            <a href="{{ route('fashion.photography') }}"
                                                                class="menu-link"><span
                                                                    class="ast-icon icon-arrow"></span><span
                                                                    style="font-size: 13px"  class="menu-text">Fashion Photography</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <script>
                                                    jQuery(document).ready(function($) {
                                                        $(".menu-item-has-children").hover(
                                                            function () {
                                                                $(this).find(".sub-menu").stop(true, true).fadeIn(200);
                                                            },
                                                            function () {
                                                                $(this).find(".sub-menu").stop(true, true).fadeOut(200);
                                                            }
                                                        );
                                                    });

                                                </script>
                                                <li id="menu-item-24614"
                                                    class="sub-menu-columns menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-24614">
                                                    <a aria-expanded="false" href="{{ route('pricing') }}"
                                                        class="menu-link">
                                                        <span class="menu-text">Pricing</span>
                                                    </a>
                                                </li>
                                                <li class="ast-masthead-custom-menu-items button-custom-menu-item">
                                                    <a class="ast-custom-button-link" href="{{ route('contect') }}"
                                                        target="_self">
                                                        <div style="background: #ed1c24;" class=ast-button>Book your
                                                            shoot</div>
                                                    </a><a class="menu-link" href="{{ route('contect') }}"
                                                        target="_self">Book
                                                        your shoot</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div><!-- Main Header Container -->
                    </div><!-- ast-row -->
                </div> <!-- Main Header Bar -->
            </div> <!-- Main Header Bar Wrap -->
            <header id="ast-fixed-header"
                class="site-header ast-primary-submenu-animation-slide-down header-main-layout-1 ast-primary-menu-enabled ast-logo-title-inline ast-menu-toggle-icon ast-mobile-header-inline ast-above-header-enabled ast-above-header-section-separated ast-above-header-mobile-inline ast-below-header-mobile-stack"
                style="visibility: hidden;" data-type="fixed-header">

                <div class="ast-above-header-wrap ast-above-header-1">
                    <div class="ast-above-header">
                        <div class="ast-container">
                            <div class="ast-flex ast-above-header-section-wrap">

                                <div
                                    class="ast-above-header-section ast-above-header-section-2 ast-flex ast-justify-content-flex-end menu-above-header">
                                    <div class="ast-button-wrap">
                                        <button
                                            class="menu-toggle menu-above-header-toggle ast-above-mobile-menu-buttons-outline">
                                            <span class="screen-reader-text">Above Header</span>
                                            <span class="ast-icon icon-menu-bars"><span
                                                    class="menu-toggle-icon"></span></span> </button>
                                    </div>
                                    <div class="ast-above-header-navigation-wrap">
                                        <div id="ast-above-header-navigation-section-2"
                                            class="ast-above-header-navigation navigation-accessibility">
                                            <ul id="menu-top-menu-1"
                                                class="ast-above-header-menu ast-nav-menu ast-flex ast-mega-menu-enabled ast-justify-content-flex-end submenu-with-border">
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30990">
                                                    <a href="https://www.instagram.com/prophotosofficial/"
                                                        class="menu-link"><span
                                                            class="ast-icon icon-arrow"></span><span
                                                            class="menu-text">BTS</span><span
                                                            class="sub-arrow"></span></a></li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37068">
                                                    <a href="faq/index.html" class="menu-link"><span
                                                            class="ast-icon icon-arrow"></span><span
                                                            class="menu-text">FAQs</span><span
                                                            class="sub-arrow"></span></a></li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41083">
                                                    <a href="media-news/index.html" class="menu-link"><span
                                                            class="ast-icon icon-arrow"></span><span
                                                            class="menu-text">Blog</span><span
                                                            class="sub-arrow"></span></a></li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39363">
                                                    <a href="gear/index.html" class="menu-link"><span
                                                            class="ast-icon icon-arrow"></span><span
                                                            class="menu-text">Gear</span><span
                                                            class="sub-arrow"></span></a></li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17027">
                                                    <a href="https://clients.prophotostudio.net/"
                                                        class="menu-link"><span
                                                            class="ast-icon icon-arrow"></span><span
                                                            class="menu-text">Client login</span><span
                                                            class="sub-arrow"></span></a></li>
                                            </ul>
                                        </div>
                                    </div><!-- .ast-above-header-navigation-wrap -->
                                </div>
                            </div>
                        </div><!-- .ast-container -->
                    </div><!-- .ast-above-header -->
                </div><!-- .ast-above-header-wrap -->

                <div class="main-header-bar-wrap">
                    <div class="main-header-bar">
                        <div class="ast-container">

                            <div class="ast-flex main-header-container">

                                <div class="site-branding">
                                    <div class="ast-site-identity" itemtype="https://schema.org/Organization"
                                        itemscope="itemscope">
                                        <span class="site-logo-img"><a href="index.html" class="custom-logo-link"
                                                rel="home" aria-current="page"><img width="47"
                                                    height="47"
                                                    src="{{ asset('wp-content') }}/uploads/2020/12/cropped-pro-photo-studio-logo-300x300-1-47x47.png"
                                                    class="custom-logo"
                                                    alt="Product Photography"
                                                    decoding="async"
                                                    srcset="https://www.prophotostudio.net/wp-content/uploads/2020/12/cropped-pro-photo-studio-logo-300x300-1-47x47.png 47w, https://www.prophotostudio.net/wp-content/uploads/2020/12/cropped-pro-photo-studio-logo-300x300-1-150x150.png 150w, https://www.prophotostudio.net/wp-content/uploads/2020/12/cropped-pro-photo-studio-logo-300x300-1.png 300w"
                                                    sizes="(max-width: 47px) 100vw, 47px" /></a></span>
                                    </div>
                                </div>

                                <!-- .site-branding -->
                                <div class="ast-mobile-menu-buttons">


                                    <div class="ast-button-wrap">
                                        <button type="button"
                                            class="menu-toggle main-header-menu-toggle  ast-mobile-menu-buttons-minimal "
                                            aria-controls='primary-menu' aria-expanded='false'>
                                            <span class="screen-reader-text">Main Menu</span>
                                            <span class="ast-icon icon-menu-bars"><span
                                                    class="menu-toggle-icon"></span></span> </button>
                                    </div>


                                </div>
                                <div class="ast-main-header-bar-alignment"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 0 0" width="0" height="0" focusable="false"
                                        role="none"
                                        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
                                        <defs>
                                            <filter id="ast-mm-item41938-color-filter">
                                                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                                                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                                                <feComponentTransfer color-interpolation-filters="sRGB">
                                                    <feFuncR type="table" tableValues="0 0" />
                                                    <feFuncG type="table"
                                                        tableValues="0.56470588235294 0.56470588235294" />
                                                    <feFuncB type="table"
                                                        tableValues="0.76078431372549 0.76078431372549" />
                                                    <feFuncA type="table" tableValues="1 1" />
                                                </feComponentTransfer>
                                                <feComposite in2="SourceGraphic" operator="in" />
                                            </filter>
                                        </defs>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0"
                                        height="0" focusable="false" role="none"
                                        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
                                        <defs>
                                            <filter id="ast-mm-item24616-color-filter">
                                                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                                                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                                                <feComponentTransfer color-interpolation-filters="sRGB">
                                                    <feFuncR type="table" tableValues="1 1" />
                                                    <feFuncG type="table"
                                                        tableValues="0.84313725490196 0.84313725490196" />
                                                    <feFuncB type="table" tableValues="0 0" />
                                                    <feFuncA type="table" tableValues="1 1" />
                                                </feComponentTransfer>
                                                <feComposite in2="SourceGraphic" operator="in" />
                                            </filter>
                                        </defs>
                                    </svg>
                                    <div class="main-header-bar-navigation">
                                        <nav class="site-navigation ast-flex-grow-1 navigation-accessibility"
                                            id="primary-site-navigation" aria-label="Site Navigation"
                                            itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
                                            <div class="main-navigation">
                                                <ul id="primary-menu"
                                                    class="main-header-menu ast-menu-shadow ast-nav-menu ast-flex ast-justify-content-flex-end  submenu-with-border astra-menu-animation-slide-down  ast-mega-menu-enabled">
                                                    <li
                                                        class="sub-menu-columns menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-24614">
                                                        <a aria-expanded="false" href="services.html"
                                                            class="menu-link"><span
                                                                class="ast-icon icon-arrow"></span><span
                                                                class="menu-text">All services</span><span
                                                                class="sub-arrow"></span></a><button
                                                            class="ast-menu-toggle" aria-expanded="false"><span
                                                                class="screen-reader-text">Menu Toggle</span><span
                                                                class="ast-icon icon-arrow"></span></button>
                                                        <ul class="sub-menu">
                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24606">
                                                                <a href="beauty-skincare/index.html"
                                                                    class="menu-link"><span
                                                                        class="ast-icon icon-arrow"></span><span
                                                                        class="menu-text">Beauty</span></a></li>
                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24607">
                                                                <a href="jewelry-photography-studio/index.html"
                                                                    class="menu-link"><span
                                                                        class="ast-icon icon-arrow"></span><span
                                                                        class="menu-text">Jewelry</span></a></li>
                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24608">
                                                                <a href="products-watches/index.html"
                                                                    class="menu-link"><span
                                                                        class="ast-icon icon-arrow"></span><span
                                                                        class="menu-text">Watches</span></a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38820">
                                                                <a href="amazon-product-photography/index.html"
                                                                    class="menu-link"><span
                                                                        class="ast-icon icon-arrow"></span><span
                                                                        class="menu-text">Amazon</span></a></li>
                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41938">
                                                                <a href="amazon-3d-content-scanning-services/index.html"
                                                                    class="menu-link"><span
                                                                        class="ast-icon icon-arrow"></span><span
                                                                        class="menu-text">Amazon 3D
                                                                        Scanning</span><span
                                                                        class="astra-mm-highlight-label">New</span></a>
                                                            </li>
                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24605">
                                                                <a href="apparel-and-accessories/index.html"
                                                                    class="menu-link"><span
                                                                        class="ast-icon icon-arrow"></span><span
                                                                        class="menu-text">Apparel</span></a></li>
                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24612">
                                                                <a href="hero-shots/index.html"
                                                                    class="menu-link"><span
                                                                        class="ast-icon icon-arrow"></span><span
                                                                        class="menu-text">Hero shots</span></a></li>
                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24613">
                                                                <a href="360-product-photography/index.html"
                                                                    class="menu-link"><span
                                                                        class="ast-icon icon-arrow"></span><span
                                                                        class="menu-text">360 Product
                                                                        Photography</span></a></li>
                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24611">
                                                                <a href="lifestyle-photography/index.html"
                                                                    class="menu-link"><span
                                                                        class="ast-icon icon-arrow"></span><span
                                                                        class="menu-text">Lifestyle</span></a></li>
                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24609">
                                                                <a href="video/index.html" class="menu-link"><span
                                                                        class="ast-icon icon-arrow"></span><span
                                                                        class="menu-text">Video Service</span></a></li>
                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24615">
                                                                <a href="360-videos/index.html"
                                                                    class="menu-link"><span
                                                                        class="ast-icon icon-arrow"></span><span
                                                                        class="menu-text">360 Spin Videos</span></a>
                                                            </li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24616">
                                                                <a href="https://clients.prophotostudio.net/"
                                                                    class="menu-link"><span
                                                                        class="ast-icon icon-arrow"></span><span
                                                                        class="astra-mm-icon-label icon-item-24616"><span
                                                                            aria-hidden="true"
                                                                            class="ahfb-svg-iconset ast-inline-flex"><svg
                                                                                xmlns='http://www.w3.org/2000/svg'
                                                                                viewBox='0 0 448 512'>
                                                                                <path
                                                                                    d='M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z'>
                                                                                </path>
                                                                            </svg></span></span><span
                                                                        class="menu-text">New Order</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24621">
                                                        <a href="product-photography-quotes/index.html"
                                                            class="menu-link"><span
                                                                class="ast-icon icon-arrow"></span><span
                                                                class="menu-text">Quotes</span><span
                                                                class="sub-arrow"></span></a></li>
                                                    <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-24602">
                                                        <a aria-expanded="false"
                                                            href="about-pro-photo-studio/index.html"
                                                            class="menu-link"><span
                                                                class="ast-icon icon-arrow"></span><span
                                                                class="menu-text">Company</span><span
                                                                class="sub-arrow"></span></a><button
                                                            class="ast-menu-toggle" aria-expanded="false"><span
                                                                class="screen-reader-text">Menu Toggle</span><span
                                                                class="ast-icon icon-arrow"></span></button>
                                                        <ul class="sub-menu">
                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24618">
                                                                <a href="about-pro-photo-studio/index.html"
                                                                    class="menu-link"><span
                                                                        class="ast-icon icon-arrow"></span><span
                                                                        class="menu-text">About us</span></a></li>
                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32312">
                                                                <a href="the-founder/index.html"
                                                                    class="menu-link"><span
                                                                        class="ast-icon icon-arrow"></span><span
                                                                        class="menu-text">Our Founder</span></a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24619">
                                                                <a href="success-stories/how-amazon-supplements-store-owners-increased-sales-by-150-with-product-images/index.html"
                                                                    class="menu-link"><span
                                                                        class="ast-icon icon-arrow"></span><span
                                                                        class="menu-text">Success stories</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24603">
                                                        <a href="product-category/cosmetics-photography/index.html"
                                                            class="menu-link"><span
                                                                class="ast-icon icon-arrow"></span><span
                                                                class="menu-text">Portfolio</span><span
                                                                class="sub-arrow"></span></a></li>
                                                    <li class="ast-masthead-custom-menu-items button-custom-menu-item">
                                                        <a class="ast-custom-button-link"
                                                            href="" target="_self">
                                                            <div class=ast-button>Book your shoot</div>
                                                        </a><a class="menu-link"
                                                            href=""
                                                            target="_self">Book your shoot</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div><!-- Main Header Container -->
                        </div><!-- ast-row -->
                    </div> <!-- Main Header Bar -->
                </div> <!-- Main Header Bar Wrap -->
            </header><!-- #astra-fixed-header -->
        </header><!-- #masthead -->


        <div id="content" class="site-content">

            <div class="ast-container">

                <div data-elementor-type="wp-page" data-elementor-id="27174" class="elementor elementor-27174"
                    data-elementor-post-type="page">
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-309be83e elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="309be83e" data-element_type="section"
                        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-92e023"
                                data-id="92e023" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-b24a816 elementor-widget elementor-widget-heading"
                                        data-id="b24a816" data-element_type="widget"
                                        data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;}"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">AIMCOM STUDIO
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-1d5f265f elementor-widget elementor-widget-heading"
                                        data-id="1d5f265f" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h1 class="elementor-heading-title elementor-size-default">REAL ESTATE
                                                PHOTOGRAPHY</h1>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-35b9342e elementor-widget elementor-widget-text-editor"
                                        data-id="35b9342e" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Capturing Excellence, Crafting Stories</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-f369553 elementor-align-center elementor-widget elementor-widget-button"
                                        data-id="f369553" data-element_type="widget"
                                        data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-lg"
                                                    href="{{ route('contect') }}">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Get a quote</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-30b73684 elementor-hidden-phone elementor-widget elementor-widget-spacer"
                                        data-id="30b73684" data-element_type="widget"
                                        data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-18726384 elementor-section-content-middle elementor-section-full_width elementor-hidden-desktop elementor-hidden-mobile elementor-section-height-default elementor-section-height-default"
                        data-id="18726384" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-74446e09"
                                data-id="74446e09" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-3698e1a0 gallery-spacing-custom elementor-widget-mobile__width-inherit elementor-widget elementor-widget-image-gallery"
                                        data-id="3698e1a0" data-element_type="widget"
                                        data-widget_type="image-gallery.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image-gallery">
                                                <div id='gallery-1'
                                                    class='gallery galleryid-27174 gallery-columns-1 gallery-size-full'>
                                                    <figure class='gallery-item'>
                                                        <div class='gallery-icon landscape'>
                                                            <img fetchpriority="high" decoding="async" width="2500"
                                                                height="1400"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202500%201400'%3E%3C/svg%3E"
                                                                class="attachment-full size-full"
                                                                alt="sunglasses_photography"
                                                                data-lazy-srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/Sunglasses_photography.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Sunglasses_photography-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Sunglasses_photography-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Sunglasses_photography-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Sunglasses_photography-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Sunglasses_photography-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Sunglasses_photography-600x336.webp 600w"
                                                                data-lazy-sizes="(max-width: 2500px) 100vw, 2500px"
                                                                title="Product Photography 1"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2022/04/Sunglasses_photography.webp"><noscript><img
                                                                    fetchpriority="high" decoding="async"
                                                                    width="2500" height="1400"
                                                                    src="{{ asset('wp-content') }}/uploads/2022/04/Sunglasses_photography.webp"
                                                                    class="attachment-full size-full"
                                                                    alt="sunglasses_photography"
                                                                    srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/Sunglasses_photography.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Sunglasses_photography-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Sunglasses_photography-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Sunglasses_photography-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Sunglasses_photography-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Sunglasses_photography-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Sunglasses_photography-600x336.webp 600w"
                                                                    sizes="(max-width: 2500px) 100vw, 2500px"
                                                                    title="Product Photography 1"></noscript>
                                                        </div>
                                                    </figure>
                                                    <figure class='gallery-item'>
                                                        <div class='gallery-icon landscape'>
                                                            <img decoding="async" width="2500" height="1400"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202500%201400'%3E%3C/svg%3E"
                                                                class="attachment-full size-full"
                                                                alt="advertising_photography"
                                                                data-lazy-srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/Skincare_photography.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Skincare_photography-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Skincare_photography-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Skincare_photography-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Skincare_photography-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Skincare_photography-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Skincare_photography-600x336.webp 600w"
                                                                data-lazy-sizes="(max-width: 2500px) 100vw, 2500px"
                                                                title="Product Photography 2"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2022/04/Skincare_photography.webp"><noscript><img
                                                                    decoding="async" width="2500" height="1400"
                                                                    src="{{ asset('wp-content') }}/uploads/2022/04/Skincare_photography.webp"
                                                                    class="attachment-full size-full"
                                                                    alt="advertising_photography"
                                                                    srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/Skincare_photography.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Skincare_photography-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Skincare_photography-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Skincare_photography-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Skincare_photography-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Skincare_photography-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Skincare_photography-600x336.webp 600w"
                                                                    sizes="(max-width: 2500px) 100vw, 2500px"
                                                                    title="Product Photography 2"></noscript>
                                                        </div>
                                                    </figure>
                                                    <figure class='gallery-item'>
                                                        <div class='gallery-icon landscape'>
                                                            <img decoding="async" width="2500" height="1400"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202500%201400'%3E%3C/svg%3E"
                                                                class="attachment-full size-full"
                                                                alt="watch_advertising_photography"
                                                                data-lazy-srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/Watch_advertising_photography.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Watch_advertising_photography-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Watch_advertising_photography-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Watch_advertising_photography-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Watch_advertising_photography-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Watch_advertising_photography-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Watch_advertising_photography-600x336.webp 600w"
                                                                data-lazy-sizes="(max-width: 2500px) 100vw, 2500px"
                                                                title="Product Photography 3"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2022/04/Watch_advertising_photography.webp"><noscript><img
                                                                    decoding="async" width="2500" height="1400"
                                                                    src="{{ asset('wp-content') }}/uploads/2022/04/Watch_advertising_photography.webp"
                                                                    class="attachment-full size-full"
                                                                    alt="watch_advertising_photography"
                                                                    srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/Watch_advertising_photography.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Watch_advertising_photography-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Watch_advertising_photography-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Watch_advertising_photography-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Watch_advertising_photography-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Watch_advertising_photography-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Watch_advertising_photography-600x336.webp 600w"
                                                                    sizes="(max-width: 2500px) 100vw, 2500px"
                                                                    title="Product Photography 3"></noscript>
                                                        </div>
                                                    </figure>
                                                    <figure class='gallery-item'>
                                                        <div class='gallery-icon landscape'>
                                                            <img decoding="async" width="2500" height="1400"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202500%201400'%3E%3C/svg%3E"
                                                                class="attachment-full size-full"
                                                                alt="jewelry_bracelet_photography"
                                                                data-lazy-srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/jewelry_bracelet_photography.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/jewelry_bracelet_photography-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/jewelry_bracelet_photography-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/jewelry_bracelet_photography-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/jewelry_bracelet_photography-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/jewelry_bracelet_photography-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/jewelry_bracelet_photography-600x336.webp 600w"
                                                                data-lazy-sizes="(max-width: 2500px) 100vw, 2500px"
                                                                title="Product Photography 4"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2022/04/jewelry_bracelet_photography.webp"><noscript><img
                                                                    decoding="async" width="2500" height="1400"
                                                                    src="{{ asset('wp-content') }}/uploads/2022/04/jewelry_bracelet_photography.webp"
                                                                    class="attachment-full size-full"
                                                                    alt="jewelry_bracelet_photography"
                                                                    srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/jewelry_bracelet_photography.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/jewelry_bracelet_photography-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/jewelry_bracelet_photography-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/jewelry_bracelet_photography-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/jewelry_bracelet_photography-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/jewelry_bracelet_photography-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/jewelry_bracelet_photography-600x336.webp 600w"
                                                                    sizes="(max-width: 2500px) 100vw, 2500px"
                                                                    title="Product Photography 4"></noscript>
                                                        </div>
                                                    </figure>
                                                    <figure class='gallery-item'>
                                                        <div class='gallery-icon landscape'>
                                                            <img decoding="async" width="2500" height="1400"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202500%201400'%3E%3C/svg%3E"
                                                                class="attachment-full size-full"
                                                                alt="creative_skincare_photo"
                                                                data-lazy-srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/creative_skincare_photo.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/creative_skincare_photo-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/creative_skincare_photo-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/creative_skincare_photo-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/creative_skincare_photo-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/creative_skincare_photo-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/creative_skincare_photo-600x336.webp 600w"
                                                                data-lazy-sizes="(max-width: 2500px) 100vw, 2500px"
                                                                title="Product Photography 5"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2022/04/creative_skincare_photo.webp"><noscript><img
                                                                    decoding="async" width="2500" height="1400"
                                                                    src="{{ asset('wp-content') }}/uploads/2022/04/creative_skincare_photo.webp"
                                                                    class="attachment-full size-full"
                                                                    alt="creative_skincare_photo"
                                                                    srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/creative_skincare_photo.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/creative_skincare_photo-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/creative_skincare_photo-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/creative_skincare_photo-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/creative_skincare_photo-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/creative_skincare_photo-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/creative_skincare_photo-600x336.webp 600w"
                                                                    sizes="(max-width: 2500px) 100vw, 2500px"
                                                                    title="Product Photography 5"></noscript>
                                                        </div>
                                                    </figure>
                                                    <figure class='gallery-item'>
                                                        <div class='gallery-icon landscape'>
                                                            <img decoding="async" width="2500" height="1400"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202500%201400'%3E%3C/svg%3E"
                                                                class="attachment-full size-full"
                                                                alt="perfume_photography"
                                                                data-lazy-srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photography-1.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photography-1-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photography-1-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photography-1-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photography-1-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photography-1-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photography-1-600x336.webp 600w"
                                                                data-lazy-sizes="(max-width: 2500px) 100vw, 2500px"
                                                                title="Product Photography 6"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2022/04/Perfume_Photography-1.webp"><noscript><img
                                                                    decoding="async" width="2500" height="1400"
                                                                    src="{{ asset('wp-content') }}/uploads/2022/04/Perfume_Photography-1.webp"
                                                                    class="attachment-full size-full"
                                                                    alt="perfume_photography"
                                                                    srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photography-1.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photography-1-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photography-1-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photography-1-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photography-1-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photography-1-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photography-1-600x336.webp 600w"
                                                                    sizes="(max-width: 2500px) 100vw, 2500px"
                                                                    title="Product Photography 6"></noscript>
                                                        </div>
                                                    </figure>
                                                    <figure class='gallery-item'>
                                                        <div class='gallery-icon landscape'>
                                                            <img decoding="async" width="2500" height="1400"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202500%201400'%3E%3C/svg%3E"
                                                                class="attachment-full size-full"
                                                                alt="product_photography_company"
                                                                data-lazy-srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/Product_Photography_company.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product_Photography_company-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product_Photography_company-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product_Photography_company-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product_Photography_company-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product_Photography_company-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product_Photography_company-600x336.webp 600w"
                                                                data-lazy-sizes="(max-width: 2500px) 100vw, 2500px"
                                                                title="Product Photography 7"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2022/04/Product_Photography_company.webp"><noscript><img
                                                                    decoding="async" width="2500" height="1400"
                                                                    src="{{ asset('wp-content') }}/uploads/2022/04/Product_Photography_company.webp"
                                                                    class="attachment-full size-full"
                                                                    alt="product_photography_company"
                                                                    srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/Product_Photography_company.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product_Photography_company-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product_Photography_company-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product_Photography_company-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product_Photography_company-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product_Photography_company-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product_Photography_company-600x336.webp 600w"
                                                                    sizes="(max-width: 2500px) 100vw, 2500px"
                                                                    title="Product Photography 7"></noscript>
                                                        </div>
                                                    </figure>
                                                    <figure class='gallery-item'>
                                                        <div class='gallery-icon landscape'>
                                                            <img decoding="async" width="2500" height="1400"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202500%201400'%3E%3C/svg%3E"
                                                                class="attachment-full size-full"
                                                                alt="watch_product_photography"
                                                                data-lazy-srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/watch_product_photography.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/watch_product_photography-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/watch_product_photography-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/watch_product_photography-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/watch_product_photography-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/watch_product_photography-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/watch_product_photography-600x336.webp 600w"
                                                                data-lazy-sizes="(max-width: 2500px) 100vw, 2500px"
                                                                title="Product Photography 8"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2022/04/watch_product_photography.webp"><noscript><img
                                                                    decoding="async" width="2500" height="1400"
                                                                    src="{{ asset('wp-content') }}/uploads/2022/04/watch_product_photography.webp"
                                                                    class="attachment-full size-full"
                                                                    alt="watch_product_photography"
                                                                    srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/watch_product_photography.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/watch_product_photography-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/watch_product_photography-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/watch_product_photography-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/watch_product_photography-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/watch_product_photography-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/watch_product_photography-600x336.webp 600w"
                                                                    sizes="(max-width: 2500px) 100vw, 2500px"
                                                                    title="Product Photography 8"></noscript>
                                                        </div>
                                                    </figure>
                                                    <figure class='gallery-item'>
                                                        <div class='gallery-icon landscape'>
                                                            <img decoding="async" width="2500" height="1400"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202500%201400'%3E%3C/svg%3E"
                                                                class="attachment-full size-full"
                                                                alt="perfume_photographer"
                                                                data-lazy-srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photographer.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photographer-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photographer-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photographer-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photographer-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photographer-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photographer-600x336.webp 600w"
                                                                data-lazy-sizes="(max-width: 2500px) 100vw, 2500px"
                                                                title="Product Photography 9"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2022/04/Perfume_Photographer.webp"><noscript><img
                                                                    decoding="async" width="2500" height="1400"
                                                                    src="{{ asset('wp-content') }}/uploads/2022/04/Perfume_Photographer.webp"
                                                                    class="attachment-full size-full"
                                                                    alt="perfume_photographer"
                                                                    srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photographer.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photographer-300x168.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photographer-1024x573.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photographer-768x430.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photographer-1536x860.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photographer-2048x1147.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Perfume_Photographer-600x336.webp 600w"
                                                                    sizes="(max-width: 2500px) 100vw, 2500px"
                                                                    title="Product Photography 9"></noscript>
                                                        </div>
                                                    </figure>
                                                    <figure class='gallery-item'>
                                                        <div class='gallery-icon landscape'>
                                                            <img decoding="async" width="2500" height="1406"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202500%201406'%3E%3C/svg%3E"
                                                                class="attachment-full size-full"
                                                                alt="model_fashion_photography"
                                                                data-lazy-srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/Model_Fashion_Photography.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Model_Fashion_Photography-300x169.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Model_Fashion_Photography-1024x576.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Model_Fashion_Photography-768x432.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Model_Fashion_Photography-1536x864.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Model_Fashion_Photography-2048x1152.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Model_Fashion_Photography-600x337.webp 600w"
                                                                data-lazy-sizes="(max-width: 2500px) 100vw, 2500px"
                                                                title="Product Photography 10"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2022/04/Model_Fashion_Photography.webp"><noscript><img
                                                                    decoding="async" width="2500" height="1406"
                                                                    src="{{ asset('wp-content') }}/uploads/2022/04/Model_Fashion_Photography.webp"
                                                                    class="attachment-full size-full"
                                                                    alt="model_fashion_photography"
                                                                    srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/Model_Fashion_Photography.webp 2500w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Model_Fashion_Photography-300x169.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Model_Fashion_Photography-1024x576.webp 1024w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Model_Fashion_Photography-768x432.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Model_Fashion_Photography-1536x864.webp 1536w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Model_Fashion_Photography-2048x1152.webp 2048w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Model_Fashion_Photography-600x337.webp 600w"
                                                                    sizes="(max-width: 2500px) 100vw, 2500px"
                                                                    title="Product Photography 10"></noscript>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-19a6d6a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="19a6d6a" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-77fe1ab"
                                data-id="77fe1ab" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-81b68de elementor-widget elementor-widget-text-editor"
                                        data-id="81b68de" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p style="text-align: center;"><span
                                                    style="color: #000000;"><strong>Trusted by LUXURY
                                                        BRANDS</strong></span></p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-86c01d3 elementor-widget-mobile__width-inherit elementor-widget elementor-widget-image-carousel"
                                        data-id="86c01d3" data-element_type="widget"
                                        data-settings="{&quot;slides_to_show&quot;:&quot;4&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:11,&quot;sizes&quot;:[]},&quot;slides_to_show_tablet&quot;:&quot;3&quot;,&quot;slides_to_show_mobile&quot;:&quot;2&quot;,&quot;slides_to_scroll_mobile&quot;:&quot;2&quot;,&quot;pause_on_interaction&quot;:&quot;no&quot;,&quot;speed&quot;:8000,&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;autoplay&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                        data-widget_type="image-carousel.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image-carousel-wrapper swiper" role="region"
                                                aria-roledescription="carousel" aria-label="Image Carousel"
                                                dir="ltr">
                                                <div class="elementor-image-carousel swiper-wrapper swiper-image-stretch"
                                                    aria-live="off">
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="1 of 9">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="adidas product photographer"
                                                                title="Product Photography 11"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2024/12/Adidas-Product-Photographer-1.webp"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2024/12/Adidas-Product-Photographer-1.webp"
                                                                    alt="adidas product photographer"
                                                                    title="Product Photography 11"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="2 of 9">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="versace product photographer"
                                                                title="Product Photography 12"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2024/12/Versace-Product-Photographer-1.webp"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2024/12/Versace-Product-Photographer-1.webp"
                                                                    alt="versace product photographer"
                                                                    title="Product Photography 12"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="3 of 9">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="invictia product photographer"
                                                                title="Product Photography 13"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2024/12/Invictia-Product-Photographer-1.webp"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2024/12/Invictia-Product-Photographer-1.webp"
                                                                    alt="invictia product photographer"
                                                                    title="Product Photography 13"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="4 of 9">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="starbucks product photographer"
                                                                title="Product Photography 14"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2024/12/Starbucks-Product-Photographer-1.webp"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2024/12/Starbucks-Product-Photographer-1.webp"
                                                                    alt="starbucks product photographer"
                                                                    title="Product Photography 14"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="5 of 9">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="gucci product photographer"
                                                                title="Product Photography 15"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2024/12/Gucci-Product-Photographer-1.webp"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2024/12/Gucci-Product-Photographer-1.webp"
                                                                    alt="gucci product photographer"
                                                                    title="Product Photography 15"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="6 of 9">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="target product photographer"
                                                                title="Product Photography 16"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2024/12/Target-Product-Photographer-1.webp"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2024/12/Target-Product-Photographer-1.webp"
                                                                    alt="target product photographer"
                                                                    title="Product Photography 16"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="7 of 9">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="shiseido product photographer"
                                                                title="Product Photography 17"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2024/12/Shiseido-Product-Photographer-1.webp"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2024/12/Shiseido-Product-Photographer-1.webp"
                                                                    alt="shiseido product photographer"
                                                                    title="Product Photography 17"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="8 of 9">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="costco product photographer"
                                                                title="Product Photography 18"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2024/12/Costco-Product-Photographer-1.webp"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2024/12/Costco-Product-Photographer-1.webp"
                                                                    alt="costco product photographer"
                                                                    title="Product Photography 18"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="9 of 9">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="himalaya product photographer"
                                                                title="Product Photography 19"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2024/12/Himalaya-Product-Photographer-2.webp"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2024/12/Himalaya-Product-Photographer-2.webp"
                                                                    alt="himalaya product photographer"
                                                                    title="Product Photography 19"></noscript>
                                                        </figure>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-2b5c7e5 elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="2b5c7e5" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-49ce8b1"
                                data-id="49ce8b1" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-2d0c1e4 elementor-widget elementor-widget-image"
                                        data-id="2d0c1e4" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="900" height="900" src="{{ asset('frontend/otherimg/1.jpg') }}" class="attachment-1536x1536 size-1536x1536 wp-image-39680" alt="photography">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1b54ec8"
                                data-id="1b54ec8" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-26acf55 elementor-widget elementor-widget-image"
                                        data-id="26acf55" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="900" height="900" src="{{ asset('frontend/otherimg/14.jpg') }}" class="attachment-1536x1536 size-1536x1536 wp-image-39680" alt="photography">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a21ee51"
                                data-id="a21ee51" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-a2695d2 elementor-widget elementor-widget-image"
                                        data-id="a2695d2" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="900" height="900" src="{{ asset('frontend/otherimg/3.jpg') }}" class="attachment-1536x1536 size-1536x1536 wp-image-39680" alt="photography">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-223c248c elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="223c248c" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-49d785b7"
                                data-id="49d785b7" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-280394d elementor-widget elementor-widget-image"
                                        data-id="280394d" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="900" height="900" src="{{ asset('frontend/otherimg/4.jpg') }}" class="attachment-1536x1536 size-1536x1536 wp-image-39680" alt="photography">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-585b776e elementor-hidden-mobile"
                                data-id="585b776e" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-21627d2f elementor-widget elementor-widget-image"
                                        data-id="21627d2f" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="900" height="900" src="{{ asset('frontend/otherimg/5.jpg') }}" class="attachment-1536x1536 size-1536x1536 wp-image-39680" alt="photography">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-55068ed"
                                data-id="55068ed" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-2fac7ef5 elementor-widget elementor-widget-image"
                                        data-id="2fac7ef5" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="900" height="900" src="{{ asset('frontend/otherimg/6.jpg') }}" class="attachment-1536x1536 size-1536x1536 wp-image-39680" alt="photography">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-6f803299 elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="6f803299" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5efe454f"
                                data-id="5efe454f" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-169179a1 elementor-widget elementor-widget-image"
                                        data-id="169179a1" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="900" height="900" src="{{ asset('frontend/otherimg/7.jpg') }}" class="attachment-1536x1536 size-1536x1536 wp-image-39680" alt="photography">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5e636f4a"
                                data-id="5e636f4a" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-716b5ecc elementor-widget elementor-widget-image"
                                        data-id="716b5ecc" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="900" height="900" src="{{ asset('frontend/otherimg/8.jpg') }}" class="attachment-1536x1536 size-1536x1536 wp-image-39680" alt="photography">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-69b9938a"
                                data-id="69b9938a" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-744528bc elementor-widget elementor-widget-image"
                                        data-id="744528bc" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="900" height="900" src="{{ asset('frontend/otherimg/9.jpg') }}" class="attachment-1536x1536 size-1536x1536 wp-image-39680" alt="photography">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-589f320d elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="589f320d" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-457b213"
                                data-id="457b213" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-3b25c30d elementor-widget elementor-widget-image"
                                        data-id="3b25c30d" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="900" height="900" src="{{ asset('frontend/otherimg/10.jpg') }}" class="attachment-1536x1536 size-1536x1536 wp-image-39680" alt="photography">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-78770f4a"
                                data-id="78770f4a" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-36fe5881 elementor-widget elementor-widget-image"
                                        data-id="36fe5881" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="900" height="900" src="{{ asset('frontend/otherimg/11.jpg') }}" class="attachment-1536x1536 size-1536x1536 wp-image-39680" alt="photography">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5815b256"
                                data-id="5815b256" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-1ac39910 elementor-widget elementor-widget-image"
                                        data-id="1ac39910" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="900" height="900" src="{{ asset('frontend/otherimg/12.jpg') }}" class="attachment-1536x1536 size-1536x1536 wp-image-39680" alt="photography">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-94a9568 elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="94a9568" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6edb4787"
                                data-id="6edb4787" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-1b1550e3 elementor-widget elementor-widget-image"
                                        data-id="1b1550e3" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="900" height="900" src="{{ asset('frontend/otherimg/13.jpg') }}" class="attachment-1536x1536 size-1536x1536 wp-image-39680" alt="photography">
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-4ebcbe61 elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-heading"
                                        data-id="4ebcbe61" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Real Estate Photography
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4dc60639"
                                data-id="4dc60639" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-41e81c5 elementor-widget elementor-widget-image"
                                        data-id="41e81c5" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="900" height="900" src="{{ asset('frontend/otherimg/2.jpg') }}" class="attachment-1536x1536 size-1536x1536 wp-image-39680" alt="photography">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7672f983 elementor-hidden-mobile"
                                data-id="7672f983" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-23d68518 elementor-widget elementor-widget-image"
                                        data-id="23d68518" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="900" height="900" src="{{ asset('frontend/otherimg/15.jpg') }}" class="attachment-1536x1536 size-1536x1536 wp-image-39680" alt="photography">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-14bf4d17 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="14bf4d17" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-18aa447"
                                data-id="18aa447" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-7d48faae elementor-widget-mobile__width-inherit elementor-widget elementor-widget-video"
                                        data-id="7d48faae" data-element_type="widget"
                                        data-settings="{&quot;video_type&quot;:&quot;vimeo&quot;,&quot;show_image_overlay&quot;:&quot;yes&quot;,&quot;image_overlay&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;autoplay&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;mute&quot;:&quot;yes&quot;}"
                                        data-widget_type="video.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-wrapper elementor-open-inline">
                                                <iframe loading="lazy" class="elementor-video-iframe"
                                                    allowfullscreen allow="autoplay" title="vimeo Video Player"
                                                    src="about:blank" data-rocket-lazyload="fitvidscompatible"
                                                    data-lazy-src="https://player.vimeo.com/video/739423549?autoplay=1&amp;color&amp;autopause=0&amp;loop=1&amp;muted=1&amp;title=0&amp;portrait=0&amp;byline=0#t="></iframe><noscript><iframe
                                                        class="elementor-video-iframe" allowfullscreen
                                                        allow="autoplay" title="vimeo Video Player"
                                                        src="https://player.vimeo.com/video/739423549?autoplay=1&amp;color&amp;autopause=0&amp;loop=1&amp;muted=1&amp;title=0&amp;portrait=0&amp;byline=0#t="></iframe></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7610e7d7"
                                data-id="7610e7d7" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-21c49ba0 elementor-hidden-mobile elementor-widget elementor-widget-heading"
                                        data-id="21c49ba0" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Real Estate Photography
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-144c24ab"
                                data-id="144c24ab" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-217ef492 elementor-widget elementor-widget-video"
                                        data-id="217ef492" data-element_type="widget"
                                        data-settings="{&quot;video_type&quot;:&quot;vimeo&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;mute&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;}"
                                        data-widget_type="video.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-wrapper elementor-open-inline">
                                                <iframe loading="lazy" class="elementor-video-iframe"
                                                    allowfullscreen allow="autoplay" title="vimeo Video Player"
                                                    src="about:blank" data-rocket-lazyload="fitvidscompatible"
                                                    data-lazy-src="https://player.vimeo.com/video/862608252?autoplay=1&amp;color&amp;autopause=0&amp;loop=1&amp;muted=1&amp;title=0&amp;portrait=0&amp;byline=0#t="></iframe><noscript><iframe
                                                        class="elementor-video-iframe" allowfullscreen
                                                        allow="autoplay" title="vimeo Video Player"
                                                        src="https://player.vimeo.com/video/862608252?autoplay=1&amp;color&amp;autopause=0&amp;loop=1&amp;muted=1&amp;title=0&amp;portrait=0&amp;byline=0#t="></iframe></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-43014c9 elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="43014c9" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9b64099"
                                data-id="9b64099" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-924fc4a elementor-align-center elementor-mobile-align-justify elementor-widget elementor-widget-button"
                                        data-id="924fc4a" data-element_type="widget"
                                        data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-lg"
                                                    href="product-photography-quotes/index.html">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Get a quote</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-6365084d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="6365084d" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-62edef76"
                                data-id="62edef76" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-3dbdf42e elementor-widget elementor-widget-text-editor"
                                        data-id="3dbdf42e" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <h2 style="text-align: center;">E-COMMERCE PRODUCT PHOTOGRAPHY PROCESS
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-699ba0ce elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="699ba0ce" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6cb79a1"
                                data-id="6cb79a1" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-7d19fdda elementor-widget elementor-widget-spacer"
                                        data-id="7d19fdda" data-element_type="widget"
                                        data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-796a47b elementor-view-default elementor-widget elementor-widget-icon"
                                        data-id="796a47b" data-element_type="widget"
                                        data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <div class="elementor-icon">
                                                    <svg aria-hidden="true"
                                                        class="e-font-icon-svg e-fas-comment-dollar"
                                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M256 32C114.62 32 0 125.12 0 240c0 49.56 21.41 95.01 57.02 130.74C44.46 421.05 2.7 465.97 2.2 466.5A7.995 7.995 0 0 0 8 480c66.26 0 115.99-31.75 140.6-51.38C181.29 440.93 217.59 448 256 448c141.38 0 256-93.12 256-208S397.38 32 256 32zm24 302.44V352c0 8.84-7.16 16-16 16h-16c-8.84 0-16-7.16-16-16v-17.73c-11.42-1.35-22.28-5.19-31.78-11.46-6.22-4.11-6.82-13.11-1.55-18.38l17.52-17.52c3.74-3.74 9.31-4.24 14.11-2.03 3.18 1.46 6.66 2.22 10.26 2.22h32.78c4.66 0 8.44-3.78 8.44-8.42 0-3.75-2.52-7.08-6.12-8.11l-50.07-14.3c-22.25-6.35-40.01-24.71-42.91-47.67-4.05-32.07 19.03-59.43 49.32-63.05V128c0-8.84 7.16-16 16-16h16c8.84 0 16 7.16 16 16v17.73c11.42 1.35 22.28 5.19 31.78 11.46 6.22 4.11 6.82 13.11 1.55 18.38l-17.52 17.52c-3.74 3.74-9.31 4.24-14.11 2.03a24.516 24.516 0 0 0-10.26-2.22h-32.78c-4.66 0-8.44 3.78-8.44 8.42 0 3.75 2.52 7.08 6.12 8.11l50.07 14.3c22.25 6.36 40.01 24.71 42.91 47.67 4.05 32.06-19.03 59.42-49.32 63.04z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3bed6e14 elementor-widget elementor-widget-heading"
                                        data-id="3bed6e14" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">GET A QUOTE
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7a3bae7f elementor-widget__width-auto elementor-widget elementor-widget-text-editor"
                                        data-id="7a3bae7f" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p style="text-align: center;"><strong>Submit your inquiry through our
                                                    online quote form for a quick response from our expert
                                                    team.</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-539595b0"
                                data-id="539595b0" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-12e5d1a3 elementor-widget elementor-widget-spacer"
                                        data-id="12e5d1a3" data-element_type="widget"
                                        data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-2a0edcfd elementor-view-default elementor-widget elementor-widget-icon"
                                        data-id="2a0edcfd" data-element_type="widget"
                                        data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <div class="elementor-icon">
                                                    <svg aria-hidden="true"
                                                        class="e-font-icon-svg e-fas-shipping-fast"
                                                        viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-2ecc5bab elementor-widget elementor-widget-heading"
                                        data-id="2ecc5bab" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">SHIP YOUR
                                                PRODUCTS</h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7972357e elementor-widget__width-auto elementor-widget elementor-widget-text-editor"
                                        data-id="7972357e" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p style="text-align: center;"><strong>Ship or deliver your products
                                                    directly to our studio for professional photoshoot.</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6392ad9e"
                                data-id="6392ad9e" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-4504e3e0 elementor-widget elementor-widget-spacer"
                                        data-id="4504e3e0" data-element_type="widget"
                                        data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-89c6dab elementor-view-default elementor-widget elementor-widget-icon"
                                        data-id="89c6dab" data-element_type="widget"
                                        data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <div class="elementor-icon">
                                                    <svg aria-hidden="true"
                                                        class="e-font-icon-svg e-fas-cloud-download-alt"
                                                        viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M537.6 226.6c4.1-10.7 6.4-22.4 6.4-34.6 0-53-43-96-96-96-19.7 0-38.1 6-53.3 16.2C367 64.2 315.3 32 256 32c-88.4 0-160 71.6-160 160 0 2.7.1 5.4.2 8.1C40.2 219.8 0 273.2 0 336c0 79.5 64.5 144 144 144h368c70.7 0 128-57.3 128-128 0-61.9-44-113.6-102.4-125.4zm-132.9 88.7L299.3 420.7c-6.2 6.2-16.4 6.2-22.6 0L171.3 315.3c-10.1-10.1-2.9-27.3 11.3-27.3H248V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v112h65.4c14.2 0 21.4 17.2 11.3 27.3z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-5bdd95c9 elementor-widget elementor-widget-heading"
                                        data-id="5bdd95c9" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">DOWNLOAD IMAGES
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-64cc7e39 elementor-widget__width-auto elementor-widget elementor-widget-text-editor"
                                        data-id="64cc7e39" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p style="text-align: center;"><strong>High-end cameras delivers Large
                                                    stills, perfect for versatile, sharp imagery in both digital and
                                                    print formats</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-103752bc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="103752bc" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-185c3a0d"
                                data-id="185c3a0d" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-48ab4e96 elementor-widget elementor-widget-text-editor"
                                        data-id="48ab4e96" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <h2 style="text-align: center;">Reviews </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-56685538 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="56685538" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f935583"
                                data-id="f935583" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-4981c1d5 elementor-widget elementor-widget-rating"
                                        data-id="4981c1d5" data-element_type="widget"
                                        data-widget_type="rating.default">
                                        <div class="elementor-widget-container">
                                            <div class="e-rating" itemtype="https://schema.org/Rating"
                                                itemscope="" itemprop="reviewRating">
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="bestRating" content="5">
                                                <div class="e-rating-wrapper" itemprop="ratingValue"
                                                    content="5" role="img" aria-label="Rated 5 out of 5">
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-14ce46ec elementor-widget elementor-widget-spacer"
                                        data-id="14ce46ec" data-element_type="widget"
                                        data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-332bb9be elementor-widget elementor-widget-text-editor"
                                        data-id="332bb9be" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p style="text-align: center;"><strong>&#8220;Outstanding service for our
                                                    book series product shots. High-quality, well-priced, and prompt.
                                                    Attentive and collaborative to meet our needs.&#8221;</strong></p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-286f2bb0 elementor-widget elementor-widget-heading"
                                        data-id="286f2bb0" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default"><a
                                                    href="https://g.co/kgs/WsZmb7" target="_blank">William Davidson
                                                    J.</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7821a4ce"
                                data-id="7821a4ce" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-77f6aeb7 elementor-widget elementor-widget-rating"
                                        data-id="77f6aeb7" data-element_type="widget"
                                        data-widget_type="rating.default">
                                        <div class="elementor-widget-container">
                                            <div class="e-rating" itemtype="https://schema.org/Rating"
                                                itemscope="" itemprop="reviewRating">
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="bestRating" content="5">
                                                <div class="e-rating-wrapper" itemprop="ratingValue"
                                                    content="5" role="img" aria-label="Rated 5 out of 5">
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7aa38138 elementor-widget elementor-widget-spacer"
                                        data-id="7aa38138" data-element_type="widget"
                                        data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-5e96c582 elementor-widget elementor-widget-text-editor"
                                        data-id="5e96c582" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p style="text-align: center;"><strong>&#8220;Top-quality photography and
                                                    style, all while being a pleasure to work with. Here is glimpse of
                                                    the creative work done for the Invicta Fragrance
                                                    collection.&#8221;</strong></p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-f4e79ed elementor-widget elementor-widget-heading"
                                        data-id="f4e79ed" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default"><a
                                                    href="https://g.co/kgs/MtXWN2" target="_blank">Shana Cohen.</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-68b8423d"
                                data-id="68b8423d" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-73bacdc0 elementor-widget elementor-widget-rating"
                                        data-id="73bacdc0" data-element_type="widget"
                                        data-widget_type="rating.default">
                                        <div class="elementor-widget-container">
                                            <div class="e-rating" itemtype="https://schema.org/Rating"
                                                itemscope="" itemprop="reviewRating">
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="bestRating" content="5">
                                                <div class="e-rating-wrapper" itemprop="ratingValue"
                                                    content="5" role="img" aria-label="Rated 5 out of 5">
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="e-icon">
                                                        <div class="e-icon-wrapper e-icon-marked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="e-icon-wrapper e-icon-unmarked">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-eicon-star"
                                                                viewBox="0 0 1000 1000"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-406d3d94 elementor-widget elementor-widget-spacer"
                                        data-id="406d3d94" data-element_type="widget"
                                        data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-a90ae39 elementor-widget elementor-widget-text-editor"
                                        data-id="a90ae39" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p style="text-align: center;"><strong>&#8220;Exceptional product
                                                    photography; captured our skincare line perfectly for Amazon. Quick,
                                                    communicative, elevated our content. Highly recommend for
                                                    professionalism!&#8221;</strong></p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3d2e035 elementor-widget elementor-widget-heading"
                                        data-id="3d2e035" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default"><a
                                                    href="https://g.co/kgs/WFJe67" target="_blank">Kimberly
                                                    Rubey.</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-45c92a90 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                        data-id="45c92a90" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2f8a484c"
                                data-id="2f8a484c" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-fe04413 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="fe04413" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-66 elementor-inner-column elementor-element elementor-element-5303c93b"
                                                data-id="5303c93b" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-4325e803 elementor-widget elementor-widget-image"
                                                        data-id="4325e803" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img decoding="async" width="900" height="900"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20900%20900'%3E%3C/svg%3E"
                                                                class="attachment-full size-full wp-image-30758"
                                                                alt="product-photo"
                                                                data-lazy-srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/Product-photo.webp 900w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product-photo-300x300.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product-photo-150x150.webp 150w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product-photo-768x768.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product-photo-600x600.webp 600w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product-photo-100x100.webp 100w"
                                                                data-lazy-sizes="(max-width: 900px) 100vw, 900px"
                                                                title="Product Photography 35"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2022/04/Product-photo.webp"><noscript><img
                                                                    decoding="async" width="900" height="900"
                                                                    src="{{ asset('wp-content') }}/uploads/2022/04/Product-photo.webp"
                                                                    class="attachment-full size-full wp-image-30758"
                                                                    alt="product-photo"
                                                                    srcset="https://www.prophotostudio.net/wp-content/uploads/2022/04/Product-photo.webp 900w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product-photo-300x300.webp 300w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product-photo-150x150.webp 150w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product-photo-768x768.webp 768w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product-photo-600x600.webp 600w, https://www.prophotostudio.net/wp-content/uploads/2022/04/Product-photo-100x100.webp 100w"
                                                                    sizes="(max-width: 900px) 100vw, 900px"
                                                                    title="Product Photography 35"></noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4742262"
                                                data-id="4742262" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-89ccf7f elementor-widget elementor-widget-heading"
                                                        data-id="89ccf7f" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2
                                                                class="elementor-heading-title elementor-size-default">
                                                                Dynamic images​</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-360fa586 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                        data-id="360fa586" data-element_type="widget"
                                                        data-widget_type="divider.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-divider">
                                                                <span class="elementor-divider-separator">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-7414f81b elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                        data-id="7414f81b" data-element_type="widget"
                                                        data-widget_type="icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-box-wrapper">


                                                                <div class="elementor-icon-box-content">

                                                                    <h3 class="elementor-icon-box-title">
                                                                        <span>
                                                                            Styled </span>
                                                                    </h3>

                                                                    <p class="elementor-icon-box-description">
                                                                        Beautiful product images styled to your needs
                                                                    </p>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-384d0140 elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                        data-id="384d0140" data-element_type="widget"
                                                        data-widget_type="icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-box-wrapper">


                                                                <div class="elementor-icon-box-content">

                                                                    <h3 class="elementor-icon-box-title">
                                                                        <span>
                                                                            High-end </span>
                                                                    </h3>

                                                                    <p class="elementor-icon-box-description">
                                                                        Capturing dynamic, eye-catching high-end
                                                                        lifestyle Photography </p>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-26240a47 elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                        data-id="26240a47" data-element_type="widget"
                                                        data-widget_type="icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-box-wrapper">


                                                                <div class="elementor-icon-box-content">

                                                                    <h3 class="elementor-icon-box-title">
                                                                        <span>
                                                                            Any platform </span>
                                                                    </h3>

                                                                    <p class="elementor-icon-box-description">
                                                                        Lifestyle photos - perfect for website banners,
                                                                        social media advertising. </p>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-5b7e5a8 elementor-align-center elementor-mobile-align-justify elementor-widget elementor-widget-button"
                                                        data-id="5b7e5a8" data-element_type="widget"
                                                        data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a class="elementor-button elementor-button-link elementor-size-lg"
                                                                    href="{{ route('contect') }}">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-text">Get a
                                                                            quote</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-174b7e0 elementor-section-content-middle elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="174b7e0" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4019e63c"
                                                data-id="4019e63c" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-c48c1f2 elementor-widget elementor-widget-heading"
                                                        data-id="c48c1f2" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2
                                                                class="elementor-heading-title elementor-size-default">
                                                                On white photos</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-5aa85ecb elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                        data-id="5aa85ecb" data-element_type="widget"
                                                        data-widget_type="divider.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-divider">
                                                                <span class="elementor-divider-separator">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-73f565e7 elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                        data-id="73f565e7" data-element_type="widget"
                                                        data-widget_type="icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-box-wrapper">


                                                                <div class="elementor-icon-box-content">

                                                                    <h3 class="elementor-icon-box-title">
                                                                        <span>
                                                                            Web perfect </span>
                                                                    </h3>

                                                                    <p class="elementor-icon-box-description">
                                                                        shooting your product crisp and clean white
                                                                        background images for your online store </p>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-69639f56 elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                        data-id="69639f56" data-element_type="widget"
                                                        data-widget_type="icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-box-wrapper">


                                                                <div class="elementor-icon-box-content">

                                                                    <h3 class="elementor-icon-box-title">
                                                                        <span>
                                                                            Any platform </span>
                                                                    </h3>

                                                                    <p class="elementor-icon-box-description">
                                                                        Perfect fit for your online store, Shopify,
                                                                        Amazon, or any e-comm. </p>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-5131c9fd elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                        data-id="5131c9fd" data-element_type="widget"
                                                        data-widget_type="icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-box-wrapper">


                                                                <div class="elementor-icon-box-content">

                                                                    <h3 class="elementor-icon-box-title">
                                                                        <span>
                                                                            True heros </span>
                                                                    </h3>

                                                                    <p class="elementor-icon-box-description">
                                                                        Our best work is born from diligence &
                                                                        craftsmanship </p>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-11ffa95 elementor-align-center elementor-mobile-align-justify elementor-widget elementor-widget-button"
                                                        data-id="11ffa95" data-element_type="widget"
                                                        data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a class="elementor-button elementor-button-link elementor-size-lg"
                                                                    href="{{ route('contect') }}">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-text">Get a
                                                                            quote</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-66 elementor-inner-column elementor-element elementor-element-68eab631"
                                                data-id="68eab631" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-56614ff7 elementor-widget elementor-widget-image"
                                                        data-id="56614ff7" data-element_type="widget"
                                                        data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img decoding="async" width="900" height="900"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20900%20900'%3E%3C/svg%3E"
                                                                class="attachment-2048x2048 size-2048x2048 wp-image-43"
                                                                alt="a_picture_of_skincare-jar_made_by_shiseido"
                                                                data-lazy-srcset="https://www.prophotostudio.net/wp-content/uploads/2020/12/divisionoF02839.jpg 900w, https://www.prophotostudio.net/wp-content/uploads/2020/12/divisionoF02839-300x300.jpg 300w, https://www.prophotostudio.net/wp-content/uploads/2020/12/divisionoF02839-150x150.jpg 150w, https://www.prophotostudio.net/wp-content/uploads/2020/12/divisionoF02839-768x768.jpg 768w, https://www.prophotostudio.net/wp-content/uploads/2020/12/divisionoF02839-480x480.jpg 480w"
                                                                data-lazy-sizes="(max-width: 900px) 100vw, 900px"
                                                                title="Product Photography 36"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2020/12/divisionoF02839.jpg"><noscript><img
                                                                    decoding="async" width="900" height="900"
                                                                    src="{{ asset('wp-content') }}/uploads/2020/12/divisionoF02839.jpg"
                                                                    class="attachment-2048x2048 size-2048x2048 wp-image-43"
                                                                    alt="a_picture_of_skincare-jar_made_by_shiseido"
                                                                    srcset="https://www.prophotostudio.net/wp-content/uploads/2020/12/divisionoF02839.jpg 900w, https://www.prophotostudio.net/wp-content/uploads/2020/12/divisionoF02839-300x300.jpg 300w, https://www.prophotostudio.net/wp-content/uploads/2020/12/divisionoF02839-150x150.jpg 150w, https://www.prophotostudio.net/wp-content/uploads/2020/12/divisionoF02839-768x768.jpg 768w, https://www.prophotostudio.net/wp-content/uploads/2020/12/divisionoF02839-480x480.jpg 480w"
                                                                    sizes="(max-width: 900px) 100vw, 900px"
                                                                    title="Product Photography 36"></noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-3fde1268 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="3fde1268" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1a545fa1"
                                data-id="1a545fa1" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-738b4936 elementor-widget elementor-widget-heading"
                                        data-id="738b4936" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Why choose us
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6e7c3a00 elementor-widget-tablet__width-inherit elementor-widget elementor-widget-image"
                                        data-id="6e7c3a00" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <a href="https://uk.trustpilot.com/review/www.prophotostudio.net"
                                                target="_blank">
                                                <img decoding="async" width="300" height="34"
                                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%2034'%3E%3C/svg%3E"
                                                    class="attachment-full size-full wp-image-30"
                                                    alt="trustpilot-review-score" title="Product Photography 37"
                                                    data-lazy-src="{{ asset('wp-content') }}/uploads/2020/12/trustpilot-review-score.png"><noscript><img
                                                        decoding="async" width="300" height="34"
                                                        src="{{ asset('wp-content') }}/uploads/2020/12/trustpilot-review-score.png"
                                                        class="attachment-full size-full wp-image-30"
                                                        alt="trustpilot-review-score"
                                                        title="Product Photography 37"></noscript> </a>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-77c32254 elementor-widget elementor-widget-text-editor"
                                        data-id="77c32254" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Since we started in 2012 <a href="our-team/index.html">our team</a>
                                                worked with thousands of customers worldwide ranging from Small
                                                businesses to Fortune 500 companies. We’ve established amazing
                                                relationships with our customers, many of we’ve been working on a
                                                regular basis for over 5 years. </p>
                                            <h3><b>Trusted by luxury brands.</b></h3>
                                            <div><b> </b></div>
                                            <p>Our <a href="photography-prices-by-service/index.html">product
                                                    photography service</a> caters to a wide spectrum of clientele, from
                                                established corporations to nascent ventures, by imbuing their products
                                                with a vivid and dynamic visual appeal. We offer a comprehensive range
                                                of style choices, meticulously tailored to the unique characteristics of
                                                each individual product, enabling them to truly stand out in the
                                                marketplace..</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-49777abd elementor-widget-mobile__width-inherit elementor-widget elementor-widget-image-carousel"
                                        data-id="49777abd" data-element_type="widget"
                                        data-settings="{&quot;slides_to_show&quot;:&quot;5&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:11,&quot;sizes&quot;:[]},&quot;slides_to_show_tablet&quot;:&quot;3&quot;,&quot;slides_to_show_mobile&quot;:&quot;2&quot;,&quot;slides_to_scroll_mobile&quot;:&quot;2&quot;,&quot;pause_on_interaction&quot;:&quot;no&quot;,&quot;autoplay_speed&quot;:0,&quot;speed&quot;:8000,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                        data-widget_type="image-carousel.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image-carousel-wrapper swiper" role="region"
                                                aria-roledescription="carousel" aria-label="Image Carousel"
                                                dir="ltr">
                                                <div class="elementor-image-carousel swiper-wrapper"
                                                    aria-live="off">
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="1 of 10">
                                                        <figure class="swiper-slide-inner"><img width="200"
                                                                height="150" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%20150'%3E%3C/svg%3E"
                                                                alt="gucci_logo" title="Product Photography 38"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2021/01/gucci_logo.png"><noscript><img
                                                                    width="200" height="150" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2021/01/gucci_logo.png"
                                                                    alt="gucci_logo"
                                                                    title="Product Photography 38"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="2 of 10">
                                                        <figure class="swiper-slide-inner"><img width="200"
                                                                height="150" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%20150'%3E%3C/svg%3E"
                                                                alt="shiseido_logo" title="Product Photography 39"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2021/01/shiseido_logo.png"><noscript><img
                                                                    width="200" height="150" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2021/01/shiseido_logo.png"
                                                                    alt="shiseido_logo"
                                                                    title="Product Photography 39"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="3 of 10">
                                                        <figure class="swiper-slide-inner"><img width="200"
                                                                height="150" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%20150'%3E%3C/svg%3E"
                                                                alt="logo_of_versace" title="Product Photography 40"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2021/01/logo-of-versace-copy-1.png"><noscript><img
                                                                    width="200" height="150" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2021/01/logo-of-versace-copy-1.png"
                                                                    alt="logo_of_versace"
                                                                    title="Product Photography 40"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="4 of 10">
                                                        <figure class="swiper-slide-inner"><img width="200"
                                                                height="150" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%20150'%3E%3C/svg%3E"
                                                                alt="a_logo_of_starbucks"
                                                                title="Product Photography 41"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2021/01/a_logo_of_starbucks.png"><noscript><img
                                                                    width="200" height="150" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2021/01/a_logo_of_starbucks.png"
                                                                    alt="a_logo_of_starbucks"
                                                                    title="Product Photography 41"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="5 of 10">
                                                        <figure class="swiper-slide-inner"><img width="200"
                                                                height="150" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%20150'%3E%3C/svg%3E"
                                                                alt="logo_of_macys" title="Product Photography 42"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2021/01/logo_of_macys.png"><noscript><img
                                                                    width="200" height="150" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2021/01/logo_of_macys.png"
                                                                    alt="logo_of_macys"
                                                                    title="Product Photography 42"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="6 of 10">
                                                        <figure class="swiper-slide-inner"><img width="200"
                                                                height="150" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%20150'%3E%3C/svg%3E"
                                                                alt="logo_of_target" title="Product Photography 43"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2021/01/logo_of_target.png"><noscript><img
                                                                    width="200" height="150" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2021/01/logo_of_target.png"
                                                                    alt="logo_of_target"
                                                                    title="Product Photography 43"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="7 of 10">
                                                        <figure class="swiper-slide-inner"><img width="200"
                                                                height="150" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%20150'%3E%3C/svg%3E"
                                                                alt="logo_of_adidas" title="Product Photography 44"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2021/01/logo_of_adidaspng.png"><noscript><img
                                                                    width="200" height="150" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2021/01/logo_of_adidaspng.png"
                                                                    alt="logo_of_adidas"
                                                                    title="Product Photography 44"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="8 of 10">
                                                        <figure class="swiper-slide-inner"><img width="200"
                                                                height="150" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%20150'%3E%3C/svg%3E"
                                                                alt="logo_of_invicta_watches"
                                                                title="Product Photography 45"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2021/01/logo_of_invicta_watches.png"><noscript><img
                                                                    width="200" height="150" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2021/01/logo_of_invicta_watches.png"
                                                                    alt="logo_of_invicta_watches"
                                                                    title="Product Photography 45"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="9 of 10">
                                                        <figure class="swiper-slide-inner"><img width="200"
                                                                height="150" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%20150'%3E%3C/svg%3E"
                                                                alt="logo_of_costco-wholesale"
                                                                title="Product Photography 46"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2021/01/logo_of_costco-wholesale.png"><noscript><img
                                                                    width="200" height="150" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2021/01/logo_of_costco-wholesale.png"
                                                                    alt="logo_of_costco-wholesale"
                                                                    title="Product Photography 46"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="10 of 10">
                                                        <figure class="swiper-slide-inner"><img width="200"
                                                                height="150" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%20150'%3E%3C/svg%3E"
                                                                alt="logo_of_hymalaya"
                                                                title="Product Photography 47"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2021/01/logo_of_hymalaya.png"><noscript><img
                                                                    width="200" height="150" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/2021/01/logo_of_hymalaya.png"
                                                                    alt="logo_of_hymalaya"
                                                                    title="Product Photography 47"></noscript>
                                                        </figure>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-220cfe84 elementor-widget elementor-widget-text-editor"
                                        data-id="220cfe84" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p><strong>Expertise</strong> Not only do we get an understanding of your
                                                needs, desires, and the product itself, we provide our feedback and
                                                expertise from working with thousands of products. Expectation We work
                                                with you to achieve your desired results with product images that will
                                                exceed your expectations. </p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-28116a16 elementor-widget elementor-widget-text-editor"
                                        data-id="28116a16" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <h4 style="text-align: left;">Featured in <a
                                                    href="https://www.forbes.com/sites/nadjasayej/2021/05/25/buying-with-your-eyes-tsour-lee-adato-on-the-art-of-product-photography/"
                                                    target="_blank" rel="noopener"><img decoding="async"
                                                        class="alignnone wp-image-27524" title="Forbes Logo"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2074%2029'%3E%3C/svg%3E"
                                                        alt="forbes logo" width="74" height="29"
                                                        data-lazy-src="{{ asset('wp-content') }}/uploads/2021/05/forbes-logo.svg"><noscript><img
                                                            decoding="async" class="alignnone wp-image-27524"
                                                            title="Forbes Logo"
                                                            src="{{ asset('wp-content') }}/uploads/2021/05/forbes-logo.svg"
                                                            alt="forbes logo" width="74"
                                                            height="29"></noscript></a></h4>
                                            <h4 style="text-align: left;"> </h4>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-18fdb906 elementor-widget elementor-widget-text-editor"
                                        data-id="18fdb906" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p><strong>Equipment</strong> Utilizing our top-of-the-line photography, our
                                                top product photographers, and video equipment in our professional
                                                studio, our team is virtually unlimited in the images we can create.
                                            </p>
                                            <p><strong>Quality </strong>We will work with you to provide you with the
                                                eCommerce photography you desire and ensure its highest quality.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-51c3594 elementor-align-justify shiny-button elementor-widget elementor-widget-button"
                                        data-id="51c3594" data-element_type="widget"
                                        data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-lg"
                                                    href="product-photography-quotes/index.html">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Get a quote</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1595d5a0"
                                data-id="1595d5a0" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-b40a7a2 elementor-widget elementor-widget-heading"
                                        data-id="b40a7a2" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">150% INCREASE
                                                IN SALES!</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3e02eda8 elementor-widget elementor-widget-spacer"
                                        data-id="3e02eda8" data-element_type="widget"
                                        data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-160317af elementor-widget elementor-widget-image"
                                        data-id="160317af" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img decoding="async" width="663" height="663"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20663%20663'%3E%3C/svg%3E"
                                                class="attachment-large size-large wp-image-17771"
                                                alt="product photography"
                                                data-lazy-srcset="https://www.prophotostudio.net/wp-content/uploads/2021/01/DROPSUPPLAMENT.jpg 663w, https://www.prophotostudio.net/wp-content/uploads/2021/01/DROPSUPPLAMENT-300x300.jpg 300w, https://www.prophotostudio.net/wp-content/uploads/2021/01/DROPSUPPLAMENT-100x100.jpg 100w, https://www.prophotostudio.net/wp-content/uploads/2021/01/DROPSUPPLAMENT-600x600.jpg 600w, https://www.prophotostudio.net/wp-content/uploads/2021/01/DROPSUPPLAMENT-150x150.jpg 150w"
                                                data-lazy-sizes="(max-width: 663px) 100vw, 663px"
                                                title="Product Photography 48"
                                                data-lazy-src="{{ asset('wp-content') }}/uploads/2021/01/DROPSUPPLAMENT.jpg"><noscript><img
                                                    decoding="async" width="663" height="663"
                                                    src="{{ asset('wp-content') }}/uploads/2021/01/DROPSUPPLAMENT.jpg"
                                                    class="attachment-large size-large wp-image-17771"
                                                    alt="product photography"
                                                    srcset="https://www.prophotostudio.net/wp-content/uploads/2021/01/DROPSUPPLAMENT.jpg 663w, https://www.prophotostudio.net/wp-content/uploads/2021/01/DROPSUPPLAMENT-300x300.jpg 300w, https://www.prophotostudio.net/wp-content/uploads/2021/01/DROPSUPPLAMENT-100x100.jpg 100w, https://www.prophotostudio.net/wp-content/uploads/2021/01/DROPSUPPLAMENT-600x600.jpg 600w, https://www.prophotostudio.net/wp-content/uploads/2021/01/DROPSUPPLAMENT-150x150.jpg 150w"
                                                    sizes="(max-width: 663px) 100vw, 663px"
                                                    title="Product Photography 48"></noscript>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7c849914 elementor-widget elementor-widget-spacer"
                                        data-id="7c849914" data-element_type="widget"
                                        data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-2976389f elementor-widget elementor-widget-text-editor"
                                        data-id="2976389f" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <h2 style="text-align: left;"><span style="color: #000000;">Success
                                                    stories – Drop Supplements.</span></h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-53e36a75 elementor-widget elementor-widget-text-editor"
                                        data-id="53e36a75" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p style="text-align: left;">Having high-quality images gives customers
                                                trust in your brand and Pro Photo Studio team has provided us with that.
                                                <span style="text-decoration: underline;"><a
                                                        href="2020/05/13/how-amazon-supplements-store-owners-increased-sales-by-150-with-product-images/index.html"
                                                        target="_blank" rel="noopener noreferrer">Read full
                                                        story</a></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-404910c5 elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="404910c5" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-523de648"
                                data-id="523de648" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-7d4f32c2 elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-text-editor"
                                        data-id="7d4f32c2" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <h3 style="text-align: center;"><strong>Featured on</strong> <a
                                                    href="https://www.forbes.com/sites/nadjasayej/2021/05/25/buying-with-your-eyes-tsour-lee-adato-on-the-art-of-product-photography/?sh=2b10e34467e2"
                                                    target="_blank" rel="noopener"><img decoding="async"
                                                        class="wp-image-27524 alignnone"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2075%2029'%3E%3C/svg%3E"
                                                        alt="forbes logo" width="75" height="29"
                                                        title="Product Photography 49"
                                                        data-lazy-src="{{ asset('wp-content') }}/uploads/2021/05/forbes-logo.svg"><noscript><img
                                                            decoding="async" class="wp-image-27524 alignnone"
                                                            src="{{ asset('wp-content') }}/uploads/2021/05/forbes-logo.svg"
                                                            alt="forbes logo" width="75" height="29"
                                                            title="Product Photography 49"></noscript></a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-37c1d2 elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="37c1d2" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cd1e93"
                                data-id="cd1e93" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-24b15727 elementor-widget elementor-widget-text-editor"
                                        data-id="24b15727" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-element elementor-element-f04b4d4 elementor-widget elementor-widget-heading"
                                                data-id="f04b4d4" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Product
                                                        Photography Studio With Expert Product Photographers!</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-eac5d41 elementor-widget elementor-widget-text-editor"
                                                data-id="eac5d41" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Beautiful product photos and videos is like a good sales agent
                                                        that works 24/7, helping you sell more at a higher price. Get a
                                                        tailored solution for your brand based on your marketing
                                                        objective – and watch your sales and ROI increase.</p>
                                                </div>
                                            </div>
                                            <p>Pro Photo Studio is an innovative <a class="wpil_keyword_link"
                                                    title="product photography"
                                                    href="blog/how-to-became-a-professional-product-photographer-by-tsour-lee-adato/index.html"
                                                    data-wpil-keyword-link="linked">product photography</a> company,
                                                offering services to make your products shine. At Pro Photo Studio, we
                                                believe that good photography should be bold and inspiring.</p>
                                            <p>We understand how important it is to capture the true beauty of your
                                                product in order to make an impact on potential customers. That&#8217;s
                                                why we use cutting-edge technology paired with our expertise to provide
                                                superior quality images that speak for themselves.</p>
                                            <p>As a result, you will have high-quality visuals that showcase your
                                                product in its best form and set you apart from the competition. Our
                                                professional team provides comprehensive services including Product
                                                Photography, <a href="jewelry-photography-studio/index.html">Jewelry
                                                    Photography</a>, <a
                                                    href="apparel-and-accessories/index.html">Clothing
                                                    Photography</a>, <a href="beauty-skincare/index.html">Beauty &amp;
                                                    Skincare Photography</a>, <a href="video/index.html">Product
                                                    Videos</a>, <a href="360-videos/index.html">360 Spin</a>, <a
                                                    href="amazon-product-photography/index.html">Amazon
                                                    Photography</a>, and more.</p>
                                            <p>We can create powerful visuals that tell your brand story and help you
                                                stand out from the competition. With Pro Photo Studio at your side, you
                                                can take your product to the next level! <span
                                                    style="text-decoration: underline;"><strong><a
                                                            href="services/index.html">Discover our
                                                            services</a></strong></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                        class="elementor-section elementor-top-section elementor-element elementor-element-9f1362f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="9f1362f" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5f6cbbbb"
                                data-id="5f6cbbbb" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-6e55ba77 elementor-hidden-desktop elementor-widget elementor-widget-text-editor"
                                        data-id="6e55ba77" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <h3 style="text-align: center;"><strong>Featured on</strong> <a
                                                    href="https://www.forbes.com/sites/nadjasayej/2021/05/25/buying-with-your-eyes-tsour-lee-adato-on-the-art-of-product-photography/?sh=2b10e34467e2"
                                                    target="_blank" rel="noopener"><img decoding="async"
                                                        class="wp-image-27524 alignnone"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2096%2037'%3E%3C/svg%3E"
                                                        alt="forbes logo" width="96" height="37"
                                                        title="Product Photography 50"
                                                        data-lazy-src="{{ asset('wp-content') }}/uploads/2021/05/forbes-logo.svg"><noscript><img
                                                            decoding="async" class="wp-image-27524 alignnone"
                                                            src="{{ asset('wp-content') }}/uploads/2021/05/forbes-logo.svg"
                                                            alt="forbes logo" width="96" height="37"
                                                            title="Product Photography 50"></noscript></a></h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-706755e5 elementor-widget elementor-widget-image-carousel"
                                        data-id="706755e5" data-element_type="widget"
                                        data-settings="{&quot;slides_to_show&quot;:&quot;3&quot;,&quot;slides_to_show_mobile&quot;:&quot;2&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;autoplay_speed&quot;:0,&quot;speed&quot;:8000,&quot;pause_on_hover&quot;:&quot;no&quot;,&quot;pause_on_interaction&quot;:&quot;no&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;autoplay&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                        data-widget_type="image-carousel.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image-carousel-wrapper swiper" role="region"
                                                aria-roledescription="carousel" aria-label="Image Carousel"
                                                dir="ltr">
                                                <div class="elementor-image-carousel swiper-wrapper"
                                                    aria-live="off">
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="1 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="lifestyle-prop-product-photo"
                                                                title="Product Photography 51"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/Nxt-Bar1974-copia-copy-800x800-1-p0uwntgxgrdqn16sxektx6buirxskaklsdmxfykya0.jpg"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/Nxt-Bar1974-copia-copy-800x800-1-p0uwntgxgrdqn16sxektx6buirxskaklsdmxfykya0.jpg"
                                                                    alt="lifestyle-prop-product-photo"
                                                                    title="Product Photography 51"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="2 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="beer-beverage-photography"
                                                                title="Product Photography 52"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/Beer-bevergae-photography-600x-600-Copy-p5tdrn2sz2vkpthc29664ymmfmu7t7ppg07bao3k3s.jpg"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/Beer-bevergae-photography-600x-600-Copy-p5tdrn2sz2vkpthc29664ymmfmu7t7ppg07bao3k3s.jpg"
                                                                    alt="beer-beverage-photography"
                                                                    title="Product Photography 52"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="3 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="lifestyle-beauty-photography"
                                                                title="Product Photography 53"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/Lifestyle-photography-600x600-Copy-p5tdrk9aekrpqzlfipyafhc8nh8464eifm8uuu7qmg.jpg"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/Lifestyle-photography-600x600-Copy-p5tdrk9aekrpqzlfipyafhc8nh8464eifm8uuu7qmg.jpg"
                                                                    alt="lifestyle-beauty-photography"
                                                                    title="Product Photography 53"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="4 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="a_creative_picture_of_a_lipstic"
                                                                title="Product Photography 54"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/Beauty-product-photography-600-600-Copy-p5tdrl74let02lk2d8cwzz3p8v3hdti8rqwcc46cg8.jpg"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/Beauty-product-photography-600-600-Copy-p5tdrl74let02lk2d8cwzz3p8v3hdti8rqwcc46cg8.jpg"
                                                                    alt="a_creative_picture_of_a_lipstic"
                                                                    title="Product Photography 54"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="5 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="a_picture_of_round_glasses_product_photo_on_yellow_background"
                                                                title="Product Photography 55"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/glass-1-p0uxhthhleg76zm0qvf603sh2i2j8io6wv7tuw3loo.png"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/glass-1-p0uxhthhleg76zm0qvf603sh2i2j8io6wv7tuw3loo.png"
                                                                    alt="a_picture_of_round_glasses_product_photo_on_yellow_background"
                                                                    title="Product Photography 55"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="6 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="scotch-beverage-photography"
                                                                title="Product Photography 56"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/scotch-bevergae-photography-600x-600-Copy-p5tdrm4ys8uae7ip7qrjkgv5u8yulilz3vjtte4ya0.jpg"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/scotch-bevergae-photography-600x-600-Copy-p5tdrm4ys8uae7ip7qrjkgv5u8yulilz3vjtte4ya0.jpg"
                                                                    alt="scotch-beverage-photography"
                                                                    title="Product Photography 56"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="7 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="watch-black-dial-black-belt-photography"
                                                                title="Product Photography 57"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/watch-black-dial-black-belt-Photography-p0uwo2vbd3qlv4t5ein3m3yggmngp9lx5o5s8q70js.jpg"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/watch-black-dial-black-belt-Photography-p0uwo2vbd3qlv4t5ein3m3yggmngp9lx5o5s8q70js.jpg"
                                                                    alt="watch-black-dial-black-belt-photography"
                                                                    title="Product Photography 57"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="8 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="amazon-photography-style-of-a-bar-snack"
                                                                title="Product Photography 58"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/Nxt-Bar1973-copia-copy-p3s9ya7qttmiruedejwg24f55cn9107o60yj31zfyg.jpg"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/Nxt-Bar1973-copia-copy-p3s9ya7qttmiruedejwg24f55cn9107o60yj31zfyg.jpg"
                                                                    alt="amazon-photography-style-of-a-bar-snack"
                                                                    title="Product Photography 58"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="9 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="model-photography"
                                                                title="Product Photography 59"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/model-photography-600x600-Copy-p5tdrm4ys8uae7ip7qrjkgv5u8yulilz3vjtte4ya0.jpg"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/model-photography-600x600-Copy-p5tdrm4ys8uae7ip7qrjkgv5u8yulilz3vjtte4ya0.jpg"
                                                                    alt="model-photography"
                                                                    title="Product Photography 59"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="10 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="infographics-amazon-800x800"
                                                                title="Product Photography 60"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/infographics-amazon-800x800-1-p0uv81iz0ai54aea9ivn2qosjp4xki0vo3z2s9cn0o.jpg"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/infographics-amazon-800x800-1-p0uv81iz0ai54aea9ivn2qosjp4xki0vo3z2s9cn0o.jpg"
                                                                    alt="infographics-amazon-800x800"
                                                                    title="Product Photography 60"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="11 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="lifestyle_photo_of_a_bar_snack_with_orange_background"
                                                                title="Product Photography 61"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/shirt-p0ux8pftc7z4n2uiyfmdbwklr0zfm5hvbrjddbm008.png"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/shirt-p0ux8pftc7z4n2uiyfmdbwklr0zfm5hvbrjddbm008.png"
                                                                    alt="lifestyle_photo_of_a_bar_snack_with_orange_background"
                                                                    title="Product Photography 61"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="12 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="lipstick product image"
                                                                title="Product Photography 62"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/lipstick-p1zrkunric3b3rycen7p2nufbh6fv2fy5k3e8clbbc.jpg"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/lipstick-p1zrkunric3b3rycen7p2nufbh6fv2fy5k3e8clbbc.jpg"
                                                                    alt="lipstick product image"
                                                                    title="Product Photography 62"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="13 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="perfume_product_photography"
                                                                title="Product Photography 63"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/perfume-p0uxgtrmdp3axt1wjfzcdcsyhuyl40qe3yfdmdkk94.png"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/perfume-p0uxgtrmdp3axt1wjfzcdcsyhuyl40qe3yfdmdkk94.png"
                                                                    alt="perfume_product_photography"
                                                                    title="Product Photography 63"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="14 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="a_picture_of_mighty_patch_brand_box_hero_photo"
                                                                title="Product Photography 64"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/purple-group-copy.jpg-p0yf8gp26v32ngeobjfpptlnzmtbu54ylof6m8ecug.png"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/purple-group-copy.jpg-p0yf8gp26v32ngeobjfpptlnzmtbu54ylof6m8ecug.png"
                                                                    alt="a_picture_of_mighty_patch_brand_box_hero_photo"
                                                                    title="Product Photography 64"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="15 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="ferragamo-hand-watch-photography-800x800"
                                                                title="Product Photography 65"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/ferragamo-hand-watch-photography-800x800-1-p1zrkvllp64lfdwz95mbn5lvwv1t2rjohoqvpmjx54.jpg"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/ferragamo-hand-watch-photography-800x800-1-p1zrkvllp64lfdwz95mbn5lvwv1t2rjohoqvpmjx54.jpg"
                                                                    alt="ferragamo-hand-watch-photography-800x800"
                                                                    title="Product Photography 65"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="16 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="picture-of-a-gun-clip-on-a-gray-background"
                                                                title="Product Photography 66"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/picture-of-a-gun-clip-on-a-gray-background-p0uwnwag19hllv2pgxspmnm8axjw7dvssrldvsgrrc.jpg"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/picture-of-a-gun-clip-on-a-gray-background-p0uwnwag19hllv2pgxspmnm8axjw7dvssrldvsgrrc.jpg"
                                                                    alt="picture-of-a-gun-clip-on-a-gray-background"
                                                                    title="Product Photography 66"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="17 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="red-perfume-photography-copy"
                                                                title="Product Photography 67"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/red-perfume-Photography-copy-p0uwo0zmzfo17wvvphtuh4fj9uwq9vegheuta69sw8.jpg"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/red-perfume-Photography-copy-p0uwo0zmzfo17wvvphtuh4fj9uwq9vegheuta69sw8.jpg"
                                                                    alt="red-perfume-photography-copy"
                                                                    title="Product Photography 67"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="18 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="cosmetics-lipstick-group-photography"
                                                                title="Product Photography 68"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/cosmetics-p0uwn5yypwhkks4xqmf5ou9bo55m7uzbd5bsg1jslk.png"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/cosmetics-p0uwn5yypwhkks4xqmf5ou9bo55m7uzbd5bsg1jslk.png"
                                                                    alt="cosmetics-lipstick-group-photography"
                                                                    title="Product Photography 68"></noscript>
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide" role="group"
                                                        aria-roledescription="slide" aria-label="19 of 19">
                                                        <figure class="swiper-slide-inner"><img width="500"
                                                                height="500" decoding="async"
                                                                class="swiper-slide-image"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E"
                                                                alt="picture-of-a-baby-bracelets"
                                                                title="Product Photography 69"
                                                                data-lazy-src="{{ asset('wp-content') }}/uploads/elementor/thumbs/picture-of-a-baby-bracelets-p1zrktpxbi20s5zpk4t2i62yq3b2ndc7tffwr2mphk.jpg"><noscript><img
                                                                    width="500" height="500" decoding="async"
                                                                    class="swiper-slide-image"
                                                                    src="{{ asset('wp-content') }}/uploads/elementor/thumbs/picture-of-a-baby-bracelets-p1zrktpxbi20s5zpk4t2i62yq3b2ndc7tffwr2mphk.jpg"
                                                                    alt="picture-of-a-baby-bracelets"
                                                                    title="Product Photography 69"></noscript>
                                                        </figure>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div> <!-- ast-container -->
        </div><!-- #content -->
        <div data-elementor-type="footer" data-elementor-id="27385"
            class="elementor elementor-27385 elementor-location-footer"
            data-elementor-post-type="elementor_library">
            <section data-particle_enable="false" data-particle-mobile-disabled="false"
                class="elementor-section elementor-top-section elementor-element elementor-element-6acf625b elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="6acf625b" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-38ac225d"
                        data-id="38ac225d" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-1c4e4298 elementor-widget elementor-widget-image"
                                data-id="1c4e4298" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <a href="index.html">
                                        <img width="300" height="300"
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20300'%3E%3C/svg%3E"
                                            class="attachment-full size-full wp-image-17096" alt=""
                                            data-lazy-srcset="https://www.prophotostudio.net/wp-content/uploads/2020/12/cropped-pro-photo-studio-logo-300x300-1.png 300w, https://www.prophotostudio.net/wp-content/uploads/2020/12/cropped-pro-photo-studio-logo-300x300-1-150x150.png 150w, https://www.prophotostudio.net/wp-content/uploads/2020/12/cropped-pro-photo-studio-logo-300x300-1-47x47.png 47w"
                                            data-lazy-sizes="(max-width: 300px) 100vw, 300px"
                                            data-lazy-src="{{ asset('wp-content') }}/uploads/2020/12/cropped-pro-photo-studio-logo-300x300-1-47x47.png" /><noscript><img
                                                width="300" height="300"
                                                src="{{ asset('wp-content') }}/uploads/2020/12/cropped-pro-photo-studio-logo-300x300-1-47x47.png"
                                                class="attachment-full size-full wp-image-17096" alt=""
                                                srcset="https://www.prophotostudio.net/wp-content/uploads/2020/12/cropped-pro-photo-studio-logo-300x300-1.png 300w, https://www.prophotostudio.net/wp-content/uploads/2020/12/cropped-pro-photo-studio-logo-300x300-1-150x150.png 150w, https://www.prophotostudio.net/wp-content/uploads/2020/12/cropped-pro-photo-studio-logo-300x300-1-47x47.png 47w"
                                                sizes="(max-width: 300px) 100vw, 300px" /></noscript> </a>
                                </div>
                            </div>
                            <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                class="elementor-section elementor-inner-section elementor-element elementor-element-795a94a5 elementor-hidden-desktop elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="795a94a5" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-48f11485"
                                        data-id="48f11485" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-773e59e9 elementor-widget elementor-widget-heading"
                                                data-id="773e59e9" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Company
                                                        &amp; Services</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-540df591"
                        data-id="540df591" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-4ceacc04 elementor-hidden-mobile elementor-widget elementor-widget-heading"
                                data-id="4ceacc04" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Company &amp; Services
                                    </h2>
                                </div>
                            </div>
                            <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                class="elementor-section elementor-inner-section elementor-element elementor-element-34d97dd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="34d97dd" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1b3d13eb"
                                        data-id="1b3d13eb" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-478166b7 elementor-widget elementor-widget-text-editor"
                                                data-id="478166b7" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><span style="color: #999999;"><a
                                                                style="text-decoration: underline; color: #999999;"
                                                                href="about-pro-photo-studio/index.html">About
                                                                Us</a></span><br /><span style="color: #999999;"><a
                                                                style="text-decoration: underline; color: #999999;"
                                                                href="success-stories/how-amazon-supplements-store-owners-increased-sales-by-150-with-product-images/index.html">Success
                                                                stories</a></span><br /><span
                                                            style="color: #999999;"><a
                                                                style="text-decoration: underline; color: #999999;"
                                                                href="near-me/index.html">Locations</a></span><br /><span
                                                            style="color: #999999;"><a
                                                                style="text-decoration: underline; color: #999999;"
                                                                href="media-news/index.html">Media</a></span><br /><span
                                                            style="color: #999999;"><a
                                                                style="text-decoration: underline; color: #999999;"
                                                                href="toolkit.html">Toolkit</a></span><br /><span
                                                            style="text-decoration: underline;"><span
                                                                style="color: #999999;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="https://join.com/companies/prophotostudio"
                                                                    target="_blank"
                                                                    rel="nofollow noopener">Hiring</a></span></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e3fcc81"
                                        data-id="e3fcc81" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-460541bf elementor-widget elementor-widget-text-editor"
                                                data-id="460541bf" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><span style="text-decoration: underline;"><span
                                                                style="color: #999999; text-decoration: underline;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="basic-on-white/index.html">Product on
                                                                    white</a></span></span><br /><span
                                                            style="text-decoration: underline;"><span
                                                                style="color: #999999; text-decoration: underline;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="lifestyle-photography/index.html">Lifestyle
                                                                    Photography</a></span></span><br /><span
                                                            style="text-decoration: underline;"><span
                                                                style="color: #999999; text-decoration: underline;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="hero-shots/index.html">Hero
                                                                    shots</a></span></span><br /><span
                                                            style="text-decoration: underline;"><span
                                                                style="color: #999999; text-decoration: underline;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="amazon-infographics/index.html">Infographics</a></span></span><br /><span
                                                            style="text-decoration: underline;"><span
                                                                style="color: #999999; text-decoration: underline;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="amazon-product-photography/index.html">Amazon</a></span></span><br /><span
                                                            style="text-decoration: underline;"><span
                                                                style="color: #999999; text-decoration: underline;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="video/index.html">Product
                                                                    videos</a></span></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="elementor-element elementor-element-31d351a6 elementor-widget elementor-widget-heading"
                                data-id="31d351a6" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Solutions</h2>
                                </div>
                            </div>
                            <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                class="elementor-section elementor-inner-section elementor-element elementor-element-49430606 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="49430606" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3cd1f79b"
                                        data-id="3cd1f79b" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-4f1f80b2 elementor-widget elementor-widget-text-editor"
                                                data-id="4f1f80b2" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><span style="text-decoration: underline;"><span
                                                                style="color: #999999; text-decoration: underline;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="jewelry-photography-studio/index.html">Jewelry</a></span></span><br /><span
                                                            style="text-decoration: underline;"><span
                                                                style="color: #999999; text-decoration: underline;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="apparel-and-accessories/index.html">Clothing</a></span></span><br /><span
                                                            style="text-decoration: underline;"><span
                                                                style="color: #999999; text-decoration: underline;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="beauty-skincare/index.html">Skin
                                                                    Care</a></span></span><br /><span
                                                            style="text-decoration: underline;"><span
                                                                style="color: #999999; text-decoration: underline;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="products-watches/index.html">Watches</a></span></span><br /><span
                                                            style="text-decoration: underline;"><span
                                                                style="color: #999999; text-decoration: underline;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="product-category/white-on-white/index.html">On
                                                                    White</a></span></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4e937204"
                                        data-id="4e937204" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-3638b64c elementor-widget elementor-widget-text-editor"
                                                data-id="3638b64c" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><span style="text-decoration: underline;"><span
                                                                style="color: #999999; text-decoration: underline;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="product-category/medical-product-photography/index.html">Medical</a></span></span><br /><span
                                                            style="text-decoration: underline;"><span
                                                                style="color: #999999; text-decoration: underline;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="product-category/electronics-photography/index.html">Electronics</a></span></span><br /><span
                                                            style="text-decoration: underline;"><span
                                                                style="color: #999999; text-decoration: underline;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="product-category/nutrition-photography/index.html">Nutrition</a></span></span><br /><span
                                                            style="text-decoration: underline;"><span
                                                                style="color: #999999; text-decoration: underline;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="product-category/eyewear-product-photography/index.html">Eyewear</a></span></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-761b04b"
                        data-id="761b04b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-1d8cc8c3 elementor-widget elementor-widget-heading"
                                data-id="1d8cc8c3" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Support</h2>
                                </div>
                            </div>
                            <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                class="elementor-section elementor-inner-section elementor-element elementor-element-352e792f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="352e792f" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-57e8dbc"
                                        data-id="57e8dbc" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-770f2b9e elementor-widget elementor-widget-text-editor"
                                                data-id="770f2b9e" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><span style="color: #999999;"><a style="color: #999999;"
                                                                href="mailto:info@prophotostudio.net">Email</a></span><br /><span
                                                            style="color: #808080;"><a style="color: #808080;"
                                                                href="premier/index.html">Premier
                                                                programs</a></span><br /><span
                                                            style="color: #999999;"><a style="color: #999999;"
                                                                href="faq/index.html">FAQ</a></span><br /><span
                                                            style="color: #999999;"><a style="color: #999999;"
                                                                href="photography-glossary/index.html">Glossary</a></span><br /><span
                                                            style="color: #999999;"><a style="color: #999999;"
                                                                href="amazon-3d-content-scanning-instructions/index.html"
                                                                target="_blank" rel="noopener">Amazon 3D Scan
                                                                Support</a></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-44b8afb1"
                                        data-id="44b8afb1" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-791b548 elementor-widget elementor-widget-text-editor"
                                                data-id="791b548" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><span style="text-decoration: underline;"><span
                                                                style="color: #999999; text-decoration: underline;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="contact/index.html">Contact
                                                                    us</a></span></span><br /><span
                                                            style="text-decoration: underline;"><span
                                                                style="color: #999999; text-decoration: underline;"><a
                                                                    style="color: #999999; text-decoration: underline;"
                                                                    href="https://clients.prophotostudio.net/">My
                                                                    account</a></span></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="elementor-element elementor-element-388b4a6d elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                data-id="388b4a6d" data-element_type="widget" data-widget_type="divider.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-divider">
                                        <span class="elementor-divider-separator">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section style="background: #000;" class="text-center elementor-section elementor-top-section elementor-element elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default">
                <div class="elementor-container elementor-column-gap-default" style="justify-content: center;">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2972266"
                        data-id="2972266" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div style="text-align: center;" class="elementor-element elementor-element-3ac2a19 elementor-widget elementor-widget-image">
                                <div class="elementor-widget-container">
                                    <a href="{{ url('/') }}">
                                        <img width="120" src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" class="attachment-medium size-medium wp-image-17096" alt="" data-lazy-srcset="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-particle_enable="false" data-particle-mobile-disabled="false"
                class="elementor-section elementor-top-section elementor-element elementor-element-bc0f4bf elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="bc0f4bf" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a60f38f"
                        data-id="a60f38f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-bd6c294 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                data-id="bd6c294" data-element_type="widget" data-widget_type="divider.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-divider">
                                        <span class="elementor-divider-separator">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-particle_enable="false" data-particle-mobile-disabled="false"
                class="elementor-section elementor-top-section elementor-element elementor-element-94fbe73 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="94fbe73" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-254baa0"
                        data-id="254baa0" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                class="elementor-section elementor-inner-section elementor-element elementor-element-05840f6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="05840f6" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-bd68713"
                                        data-id="bd68713" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-e65827c elementor-widget elementor-widget-text-editor"
                                                data-id="e65827c" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>{{ $setting->first()->footer }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    {{-- <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2be842e"
                        data-id="2be842e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                class="elementor-section elementor-inner-section elementor-element elementor-element-c9a2ea0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="c9a2ea0" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d7826a6"
                                        data-id="d7826a6" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-e1e22fb elementor-widget elementor-widget-text-editor"
                                                data-id="e1e22fb" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><a style="color: #ffffff8c;"
                                                            href="terms-conditions/index.html">Terms</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e203d5c"
                                        data-id="e203d5c" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-e3c88aa elementor-widget elementor-widget-text-editor"
                                                data-id="e3c88aa" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <a style="color: #ffffff8c;"
                                                        href="">Policy</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div> --}}
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-388be18"
                        data-id="388be18" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                class="elementor-section elementor-inner-section elementor-element elementor-element-8316c68 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="8316c68" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-513e305"
                                        data-id="513e305" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-cc82da3 elementor-widget elementor-widget-text-editor"
                                                data-id="cc82da3" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>@aimcommedia</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-22542d7"
                                        data-id="22542d7" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-55343a2 elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                                                data-id="55343a2" data-element_type="widget"
                                                data-widget_type="social-icons.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-square elementor-repeater-item-0b9aacb"
                                                                href="{{ $setting->first()->fb_link }}"
                                                                target="_blank">
                                                                <span
                                                                    class="elementor-screen-only">Facebook</span>
                                                                <svg class="e-font-icon-svg e-fab-facebook-square"
                                                                    viewBox="0 0 448 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z">
                                                                    </path>
                                                                </svg> </a>
                                                        </span>
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-a60ef9f"
                                                                href="{{ $setting->first()->tweeter_link }}"
                                                                target="_blank">
                                                                <span class="elementor-screen-only">Twitter</span>
                                                                <svg class="e-font-icon-svg e-fab-twitter"
                                                                    viewBox="0 0 512 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                                    </path>
                                                                </svg> </a>
                                                        </span>
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-5228249"
                                                                href="{{ $setting->first()->linkind_link }}"
                                                                target="_blank">
                                                                <span class="elementor-screen-only">Linkedin</span>
                                                                <svg class="e-font-icon-svg e-fab-linkedin"
                                                                    viewBox="0 0 448 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                                                                    </path>
                                                                </svg> </a>
                                                        </span>
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-7bdd8a5"
                                                                href="{{ $setting->first()->insta_link }}"
                                                                target="_blank">
                                                                <span class="elementor-screen-only">Instagram</span>
                                                                <svg class="e-font-icon-svg e-fab-instagram"
                                                                    viewBox="0 0 448 512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                                                    </path>
                                                                </svg> </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div><!-- #page -->

    <div id="ast-scroll-top" tabindex="0" class="ast-scroll-top-icon ast-scroll-to-top-right"
        data-on-devices="both">
        <span class="screen-reader-text">Scroll to Top</span>
    </div>
    
    <link rel='preload' href='{{ asset('wp-content') }}/themes/astra/assets/css/minified/galleries.mine506.css?ver=4.8.12'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'"
        media='all' />
    <link rel='preload'
        href='{{ asset('wp-content') }}/plugins/astra-addon-2/addons/nav-menu/assets/css/minified/magamenu-frontend.minbf11.css?ver=4.8.13'
        data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'"
        media='all' />
    <style id='astra-addon-megamenu-dynamic-inline-css'>
        .ast-desktop .menu-item-30990 .astra-mm-icon-label.icon-item-30990,
        .ast-header-break-point .menu-item-30990 .astra-mm-icon-label.icon-item-30990 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-30990 .astra-mm-icon-label.icon-item-30990 svg,
        .ast-header-break-point .menu-item-30990 .astra-mm-icon-label.icon-item-30990 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-37068 .astra-mm-icon-label.icon-item-37068,
        .ast-header-break-point .menu-item-37068 .astra-mm-icon-label.icon-item-37068 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-37068 .astra-mm-icon-label.icon-item-37068 svg,
        .ast-header-break-point .menu-item-37068 .astra-mm-icon-label.icon-item-37068 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-41083 .astra-mm-icon-label.icon-item-41083,
        .ast-header-break-point .menu-item-41083 .astra-mm-icon-label.icon-item-41083 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-41083 .astra-mm-icon-label.icon-item-41083 svg,
        .ast-header-break-point .menu-item-41083 .astra-mm-icon-label.icon-item-41083 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-39363 .astra-mm-icon-label.icon-item-39363,
        .ast-header-break-point .menu-item-39363 .astra-mm-icon-label.icon-item-39363 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-39363 .astra-mm-icon-label.icon-item-39363 svg,
        .ast-header-break-point .menu-item-39363 .astra-mm-icon-label.icon-item-39363 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-17027 .astra-mm-icon-label.icon-item-17027,
        .ast-header-break-point .menu-item-17027 .astra-mm-icon-label.icon-item-17027 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-17027 .astra-mm-icon-label.icon-item-17027 svg,
        .ast-header-break-point .menu-item-17027 .astra-mm-icon-label.icon-item-17027 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24614 .astra-mm-icon-label.icon-item-24614,
        .ast-header-break-point .menu-item-24614 .astra-mm-icon-label.icon-item-24614 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24614 .astra-mm-icon-label.icon-item-24614 svg,
        .ast-header-break-point .menu-item-24614 .astra-mm-icon-label.icon-item-24614 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24606 .astra-mm-icon-label.icon-item-24606,
        .ast-header-break-point .menu-item-24606 .astra-mm-icon-label.icon-item-24606 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24606 .astra-mm-icon-label.icon-item-24606 svg,
        .ast-header-break-point .menu-item-24606 .astra-mm-icon-label.icon-item-24606 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24607 .astra-mm-icon-label.icon-item-24607,
        .ast-header-break-point .menu-item-24607 .astra-mm-icon-label.icon-item-24607 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24607 .astra-mm-icon-label.icon-item-24607 svg,
        .ast-header-break-point .menu-item-24607 .astra-mm-icon-label.icon-item-24607 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24608 .astra-mm-icon-label.icon-item-24608,
        .ast-header-break-point .menu-item-24608 .astra-mm-icon-label.icon-item-24608 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24608 .astra-mm-icon-label.icon-item-24608 svg,
        .ast-header-break-point .menu-item-24608 .astra-mm-icon-label.icon-item-24608 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-38820 .astra-mm-icon-label.icon-item-38820,
        .ast-header-break-point .menu-item-38820 .astra-mm-icon-label.icon-item-38820 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-38820 .astra-mm-icon-label.icon-item-38820 svg,
        .ast-header-break-point .menu-item-38820 .astra-mm-icon-label.icon-item-38820 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-41938 .astra-mm-highlight-label,
        .ast-header-break-point .menu-item-41938 .astra-mm-highlight-label {
            color: #1a8900;
        }

        .ast-desktop .menu-item-41938 .astra-mm-icon-label.icon-item-41938,
        .ast-header-break-point .menu-item-41938 .astra-mm-icon-label.icon-item-41938 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            background-color: var(--ast-global-color-0);
            margin: 5px;
            padding: 5px;
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .ast-desktop .menu-item-41938 .astra-mm-icon-label.icon-item-41938 svg,
        .ast-header-break-point .menu-item-41938 .astra-mm-icon-label.icon-item-41938 svg {
            width: 20px;
            height: 20px;
            color: #0090c2;
            fill: #0090c2;
        }

        .ast-desktop .menu-item-41938 .astra-mm-icon-label.icon-item-41938>img,
        .ast-header-break-point .menu-item-41938 .astra-mm-icon-label.icon-item-41938>img {
            filter: url(#ast-mm-item41938-color-filter);
        }

        .ast-desktop .menu-item-24605 .astra-mm-icon-label.icon-item-24605,
        .ast-header-break-point .menu-item-24605 .astra-mm-icon-label.icon-item-24605 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24605 .astra-mm-icon-label.icon-item-24605 svg,
        .ast-header-break-point .menu-item-24605 .astra-mm-icon-label.icon-item-24605 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24612 .astra-mm-icon-label.icon-item-24612,
        .ast-header-break-point .menu-item-24612 .astra-mm-icon-label.icon-item-24612 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24612 .astra-mm-icon-label.icon-item-24612 svg,
        .ast-header-break-point .menu-item-24612 .astra-mm-icon-label.icon-item-24612 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24613 .astra-mm-icon-label.icon-item-24613,
        .ast-header-break-point .menu-item-24613 .astra-mm-icon-label.icon-item-24613 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24613 .astra-mm-icon-label.icon-item-24613 svg,
        .ast-header-break-point .menu-item-24613 .astra-mm-icon-label.icon-item-24613 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24611 .astra-mm-icon-label.icon-item-24611,
        .ast-header-break-point .menu-item-24611 .astra-mm-icon-label.icon-item-24611 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24611 .astra-mm-icon-label.icon-item-24611 svg,
        .ast-header-break-point .menu-item-24611 .astra-mm-icon-label.icon-item-24611 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24609 .astra-mm-icon-label.icon-item-24609,
        .ast-header-break-point .menu-item-24609 .astra-mm-icon-label.icon-item-24609 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24609 .astra-mm-icon-label.icon-item-24609 svg,
        .ast-header-break-point .menu-item-24609 .astra-mm-icon-label.icon-item-24609 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24615 .astra-mm-icon-label.icon-item-24615,
        .ast-header-break-point .menu-item-24615 .astra-mm-icon-label.icon-item-24615 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24615 .astra-mm-icon-label.icon-item-24615 svg,
        .ast-header-break-point .menu-item-24615 .astra-mm-icon-label.icon-item-24615 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24616 .astra-mm-icon-label.icon-item-24616,
        .ast-header-break-point .menu-item-24616 .astra-mm-icon-label.icon-item-24616 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24616 .astra-mm-icon-label.icon-item-24616 svg,
        .ast-header-break-point .menu-item-24616 .astra-mm-icon-label.icon-item-24616 svg {
            width: 20px;
            height: 20px;
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
        }

        .ast-desktop .menu-item-24616 .astra-mm-icon-label.icon-item-24616>img,
        .ast-header-break-point .menu-item-24616 .astra-mm-icon-label.icon-item-24616>img {
            filter: url(#ast-mm-item24616-color-filter);
        }

        .ast-desktop .menu-item-24621 .astra-mm-icon-label.icon-item-24621,
        .ast-header-break-point .menu-item-24621 .astra-mm-icon-label.icon-item-24621 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24621 .astra-mm-icon-label.icon-item-24621 svg,
        .ast-header-break-point .menu-item-24621 .astra-mm-icon-label.icon-item-24621 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24602 .astra-mm-icon-label.icon-item-24602,
        .ast-header-break-point .menu-item-24602 .astra-mm-icon-label.icon-item-24602 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24602 .astra-mm-icon-label.icon-item-24602 svg,
        .ast-header-break-point .menu-item-24602 .astra-mm-icon-label.icon-item-24602 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24618 .astra-mm-icon-label.icon-item-24618,
        .ast-header-break-point .menu-item-24618 .astra-mm-icon-label.icon-item-24618 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24618 .astra-mm-icon-label.icon-item-24618 svg,
        .ast-header-break-point .menu-item-24618 .astra-mm-icon-label.icon-item-24618 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-32312 .astra-mm-icon-label.icon-item-32312,
        .ast-header-break-point .menu-item-32312 .astra-mm-icon-label.icon-item-32312 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-32312 .astra-mm-icon-label.icon-item-32312 svg,
        .ast-header-break-point .menu-item-32312 .astra-mm-icon-label.icon-item-32312 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24619 .astra-mm-icon-label.icon-item-24619,
        .ast-header-break-point .menu-item-24619 .astra-mm-icon-label.icon-item-24619 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24619 .astra-mm-icon-label.icon-item-24619 svg,
        .ast-header-break-point .menu-item-24619 .astra-mm-icon-label.icon-item-24619 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24603 .astra-mm-icon-label.icon-item-24603,
        .ast-header-break-point .menu-item-24603 .astra-mm-icon-label.icon-item-24603 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24603 .astra-mm-icon-label.icon-item-24603 svg,
        .ast-header-break-point .menu-item-24603 .astra-mm-icon-label.icon-item-24603 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-30990 .astra-mm-icon-label.icon-item-30990,
        .ast-header-break-point .menu-item-30990 .astra-mm-icon-label.icon-item-30990 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-30990 .astra-mm-icon-label.icon-item-30990 svg,
        .ast-header-break-point .menu-item-30990 .astra-mm-icon-label.icon-item-30990 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-37068 .astra-mm-icon-label.icon-item-37068,
        .ast-header-break-point .menu-item-37068 .astra-mm-icon-label.icon-item-37068 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-37068 .astra-mm-icon-label.icon-item-37068 svg,
        .ast-header-break-point .menu-item-37068 .astra-mm-icon-label.icon-item-37068 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-41083 .astra-mm-icon-label.icon-item-41083,
        .ast-header-break-point .menu-item-41083 .astra-mm-icon-label.icon-item-41083 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-41083 .astra-mm-icon-label.icon-item-41083 svg,
        .ast-header-break-point .menu-item-41083 .astra-mm-icon-label.icon-item-41083 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-39363 .astra-mm-icon-label.icon-item-39363,
        .ast-header-break-point .menu-item-39363 .astra-mm-icon-label.icon-item-39363 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-39363 .astra-mm-icon-label.icon-item-39363 svg,
        .ast-header-break-point .menu-item-39363 .astra-mm-icon-label.icon-item-39363 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-17027 .astra-mm-icon-label.icon-item-17027,
        .ast-header-break-point .menu-item-17027 .astra-mm-icon-label.icon-item-17027 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-17027 .astra-mm-icon-label.icon-item-17027 svg,
        .ast-header-break-point .menu-item-17027 .astra-mm-icon-label.icon-item-17027 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24614 .astra-mm-icon-label.icon-item-24614,
        .ast-header-break-point .menu-item-24614 .astra-mm-icon-label.icon-item-24614 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24614 .astra-mm-icon-label.icon-item-24614 svg,
        .ast-header-break-point .menu-item-24614 .astra-mm-icon-label.icon-item-24614 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24606 .astra-mm-icon-label.icon-item-24606,
        .ast-header-break-point .menu-item-24606 .astra-mm-icon-label.icon-item-24606 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24606 .astra-mm-icon-label.icon-item-24606 svg,
        .ast-header-break-point .menu-item-24606 .astra-mm-icon-label.icon-item-24606 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24607 .astra-mm-icon-label.icon-item-24607,
        .ast-header-break-point .menu-item-24607 .astra-mm-icon-label.icon-item-24607 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24607 .astra-mm-icon-label.icon-item-24607 svg,
        .ast-header-break-point .menu-item-24607 .astra-mm-icon-label.icon-item-24607 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24608 .astra-mm-icon-label.icon-item-24608,
        .ast-header-break-point .menu-item-24608 .astra-mm-icon-label.icon-item-24608 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24608 .astra-mm-icon-label.icon-item-24608 svg,
        .ast-header-break-point .menu-item-24608 .astra-mm-icon-label.icon-item-24608 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-38820 .astra-mm-icon-label.icon-item-38820,
        .ast-header-break-point .menu-item-38820 .astra-mm-icon-label.icon-item-38820 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-38820 .astra-mm-icon-label.icon-item-38820 svg,
        .ast-header-break-point .menu-item-38820 .astra-mm-icon-label.icon-item-38820 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-41938 .astra-mm-highlight-label,
        .ast-header-break-point .menu-item-41938 .astra-mm-highlight-label {
            color: #1a8900;
        }

        .ast-desktop .menu-item-41938 .astra-mm-icon-label.icon-item-41938,
        .ast-header-break-point .menu-item-41938 .astra-mm-icon-label.icon-item-41938 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            background-color: var(--ast-global-color-0);
            margin: 5px;
            padding: 5px;
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .ast-desktop .menu-item-41938 .astra-mm-icon-label.icon-item-41938 svg,
        .ast-header-break-point .menu-item-41938 .astra-mm-icon-label.icon-item-41938 svg {
            width: 20px;
            height: 20px;
            color: #0090c2;
            fill: #0090c2;
        }

        .ast-desktop .menu-item-41938 .astra-mm-icon-label.icon-item-41938>img,
        .ast-header-break-point .menu-item-41938 .astra-mm-icon-label.icon-item-41938>img {
            filter: url(#ast-mm-item41938-color-filter);
        }

        .ast-desktop .menu-item-24605 .astra-mm-icon-label.icon-item-24605,
        .ast-header-break-point .menu-item-24605 .astra-mm-icon-label.icon-item-24605 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24605 .astra-mm-icon-label.icon-item-24605 svg,
        .ast-header-break-point .menu-item-24605 .astra-mm-icon-label.icon-item-24605 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24612 .astra-mm-icon-label.icon-item-24612,
        .ast-header-break-point .menu-item-24612 .astra-mm-icon-label.icon-item-24612 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24612 .astra-mm-icon-label.icon-item-24612 svg,
        .ast-header-break-point .menu-item-24612 .astra-mm-icon-label.icon-item-24612 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24613 .astra-mm-icon-label.icon-item-24613,
        .ast-header-break-point .menu-item-24613 .astra-mm-icon-label.icon-item-24613 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24613 .astra-mm-icon-label.icon-item-24613 svg,
        .ast-header-break-point .menu-item-24613 .astra-mm-icon-label.icon-item-24613 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24611 .astra-mm-icon-label.icon-item-24611,
        .ast-header-break-point .menu-item-24611 .astra-mm-icon-label.icon-item-24611 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24611 .astra-mm-icon-label.icon-item-24611 svg,
        .ast-header-break-point .menu-item-24611 .astra-mm-icon-label.icon-item-24611 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24609 .astra-mm-icon-label.icon-item-24609,
        .ast-header-break-point .menu-item-24609 .astra-mm-icon-label.icon-item-24609 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24609 .astra-mm-icon-label.icon-item-24609 svg,
        .ast-header-break-point .menu-item-24609 .astra-mm-icon-label.icon-item-24609 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24615 .astra-mm-icon-label.icon-item-24615,
        .ast-header-break-point .menu-item-24615 .astra-mm-icon-label.icon-item-24615 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24615 .astra-mm-icon-label.icon-item-24615 svg,
        .ast-header-break-point .menu-item-24615 .astra-mm-icon-label.icon-item-24615 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24616 .astra-mm-icon-label.icon-item-24616,
        .ast-header-break-point .menu-item-24616 .astra-mm-icon-label.icon-item-24616 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24616 .astra-mm-icon-label.icon-item-24616 svg,
        .ast-header-break-point .menu-item-24616 .astra-mm-icon-label.icon-item-24616 svg {
            width: 20px;
            height: 20px;
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
        }

        .ast-desktop .menu-item-24616 .astra-mm-icon-label.icon-item-24616>img,
        .ast-header-break-point .menu-item-24616 .astra-mm-icon-label.icon-item-24616>img {
            filter: url(#ast-mm-item24616-color-filter);
        }

        .ast-desktop .menu-item-24621 .astra-mm-icon-label.icon-item-24621,
        .ast-header-break-point .menu-item-24621 .astra-mm-icon-label.icon-item-24621 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24621 .astra-mm-icon-label.icon-item-24621 svg,
        .ast-header-break-point .menu-item-24621 .astra-mm-icon-label.icon-item-24621 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24602 .astra-mm-icon-label.icon-item-24602,
        .ast-header-break-point .menu-item-24602 .astra-mm-icon-label.icon-item-24602 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24602 .astra-mm-icon-label.icon-item-24602 svg,
        .ast-header-break-point .menu-item-24602 .astra-mm-icon-label.icon-item-24602 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24618 .astra-mm-icon-label.icon-item-24618,
        .ast-header-break-point .menu-item-24618 .astra-mm-icon-label.icon-item-24618 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24618 .astra-mm-icon-label.icon-item-24618 svg,
        .ast-header-break-point .menu-item-24618 .astra-mm-icon-label.icon-item-24618 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-32312 .astra-mm-icon-label.icon-item-32312,
        .ast-header-break-point .menu-item-32312 .astra-mm-icon-label.icon-item-32312 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-32312 .astra-mm-icon-label.icon-item-32312 svg,
        .ast-header-break-point .menu-item-32312 .astra-mm-icon-label.icon-item-32312 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24619 .astra-mm-icon-label.icon-item-24619,
        .ast-header-break-point .menu-item-24619 .astra-mm-icon-label.icon-item-24619 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24619 .astra-mm-icon-label.icon-item-24619 svg,
        .ast-header-break-point .menu-item-24619 .astra-mm-icon-label.icon-item-24619 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }

        .ast-desktop .menu-item-24603 .astra-mm-icon-label.icon-item-24603,
        .ast-header-break-point .menu-item-24603 .astra-mm-icon-label.icon-item-24603 {
            display: inline-block;
            vertical-align: middle;
            line-height: 0;
            margin: 5px;
        }

        .ast-desktop .menu-item-24603 .astra-mm-icon-label.icon-item-24603 svg,
        .ast-header-break-point .menu-item-24603 .astra-mm-icon-label.icon-item-24603 svg {
            color: var(--ast-global-color-0);
            fill: var(--ast-global-color-0);
            width: 20px;
            height: 20px;
        }
    </style>
    <script id="astra-theme-js-js-extra">
        var astra = {
            "break_point": "786",
            "isRtl": "",
            "is_scroll_to_id": "1",
            "is_scroll_to_top": "1",
            "is_header_footer_builder_active": "",
            "responsive_cart_click": "flyout",
            "revealEffectEnable": "",
            "edit_post_url": "https:\/\/www.prophotostudio.net\/wp-admin\/post.php?post=&action=edit",
            "ajax_url": "https:\/\/www.prophotostudio.net\/wp-admin\/admin-ajax.php",
            "infinite_count": "2",
            "infinite_total": "0",
            "pagination": "number",
            "infinite_scroll_event": "scroll",
            "no_more_post_message": "No more posts to show.",
            "grid_layout": {
                "desktop": 1,
                "tablet": 1,
                "mobile": 1
            },
            "site_url": "https:\/\/www.prophotostudio.net",
            "blogArchiveTitleLayout": "",
            "blogArchiveTitleOn": "",
            "show_comments": "Show Comments",
            "masonryEnabled": "",
            "blogMasonryBreakPoint": "0"
        };
    </script>
    <script type="rocketlazyloadscript" src="{{ asset('wp-content') }}/themes/astra/assets/js/minified/style.mine506.js?ver=4.8.12" id="astra-theme-js-js" defer></script>
    <script id="wpil-frontend-script-js-extra">
        var wpilFrontend = {
            "ajaxUrl": "\/wp-admin\/admin-ajax.php",
            "postId": "27174",
            "postType": "post",
            "openInternalInNewTab": "0",
            "openExternalInNewTab": "1",
            "disableClicks": "0",
            "openLinksWithJS": "0",
            "trackAllElementClicks": "0",
            "clicksI18n": {
                "imageNoText": "Image in link: No Text",
                "imageText": "Image Title: ",
                "noText": "No Anchor Text Found"
            }
        };
    </script>
    <script type="rocketlazyloadscript" src="{{ asset('wp-content') }}/plugins/link-whisper-premium/js/frontend.min62a9.js?ver=1737814403" id="wpil-frontend-script-js" defer></script>
    <script id="astra-addon-js-js-extra">
        var astraAddon = {
            "sticky_active": "1",
            "svgIconClose": "<span class=\"ast-icon icon-close\"><\/span>",
            "header_main_stick": "1",
            "header_above_stick": "0",
            "header_below_stick": "0",
            "stick_header_meta": "",
            "header_main_stick_meta": "",
            "header_above_stick_meta": "",
            "header_below_stick_meta": "",
            "sticky_header_on_devices": "desktop",
            "sticky_header_style": "slide",
            "sticky_hide_on_scroll": "0",
            "break_point": "786",
            "tablet_break_point": "921",
            "mobile_break_point": "544",
            "header_main_shrink": "1",
            "header_logo_width": "",
            "responsive_header_logo_width": {
                "desktop": "47",
                "tablet": "",
                "mobile": "45"
            },
            "stick_origin_position": "",
            "site_layout": "ast-fluid-width-layout",
            "site_content_width": "1240",
            "site_layout_padded_width": "1200",
            "site_layout_box_width": "1200",
            "header_builder_active": "",
            "component_limit": "10",
            "is_header_builder_active": ""
        };
    </script>
    <script type="rocketlazyloadscript" data-minify="1" src="{{ asset('wp-content') }}/cache/min/1/wp-content/uploads/astra-addon/astra-addon-67ae7a903d29e4-251258953e02.js?ver=1739487892" id="astra-addon-js-js" defer></script>
    <script type="rocketlazyloadscript" src="{{ asset('wp-content') }}/plugins/astra-addon-2/assets/js/minified/purify.minbf11.js?ver=4.8.13" id="astra-dom-purify-js" defer></script>
    <script type="rocketlazyloadscript" data-minify="1" src="{{ asset('wp-content') }}/cache/min/1/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-consent-mode-3d6495dceaebc28bcca33e02.js?ver=1739487892" id="googlesitekit-consent-mode-js" defer></script>
    <script type="rocketlazyloadscript" src="{{ asset('wp-content') }}/plugins/elementor/assets/lib/swiper/v8/swiper.min94a4.js?ver=8.4.5" id="swiper-js" defer></script>
    <script id="eael-general-js-extra">
        var localize = {
            "ajaxurl": "https:\/\/www.prophotostudio.net\/wp-admin\/admin-ajax.php",
            "nonce": "456883f49b",
            "i18n": {
                "added": "Added ",
                "compare": "Compare",
                "loading": "Loading..."
            },
            "eael_translate_text": {
                "required_text": "is a required field",
                "invalid_text": "Invalid",
                "billing_text": "Billing",
                "shipping_text": "Shipping",
                "fg_mfp_counter_text": "of"
            },
            "page_permalink": "https:\/\/www.prophotostudio.net\/",
            "cart_redirectition": "no",
            "cart_page_url": "",
            "el_breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            },
            "ParticleThemesData": {
                "default": "{\"particles\":{\"number\":{\"value\":160,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#ffffff\"},\"shape\":{\"type\":\"circle\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.5,\"random\":false,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":3,\"random\":true,\"anim\":{\"enable\":false,\"speed\":40,\"size_min\":0.1,\"sync\":false}},\"line_linked\":{\"enable\":true,\"distance\":150,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":1},\"move\":{\"enable\":true,\"speed\":6,\"direction\":\"none\",\"random\":false,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":true,\"mode\":\"repulse\"},\"onclick\":{\"enable\":true,\"mode\":\"push\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":400,\"size\":40,\"duration\":2,\"opacity\":8,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}",
                "nasa": "{\"particles\":{\"number\":{\"value\":250,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#ffffff\"},\"shape\":{\"type\":\"circle\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":1,\"random\":true,\"anim\":{\"enable\":true,\"speed\":1,\"opacity_min\":0,\"sync\":false}},\"size\":{\"value\":3,\"random\":true,\"anim\":{\"enable\":false,\"speed\":4,\"size_min\":0.3,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":150,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":1},\"move\":{\"enable\":true,\"speed\":1,\"direction\":\"none\",\"random\":true,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":600}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":true,\"mode\":\"bubble\"},\"onclick\":{\"enable\":true,\"mode\":\"repulse\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":250,\"size\":0,\"duration\":2,\"opacity\":0,\"speed\":3},\"repulse\":{\"distance\":400,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}",
                "bubble": "{\"particles\":{\"number\":{\"value\":15,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#1b1e34\"},\"shape\":{\"type\":\"polygon\",\"stroke\":{\"width\":0,\"color\":\"#000\"},\"polygon\":{\"nb_sides\":6},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.3,\"random\":true,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":50,\"random\":false,\"anim\":{\"enable\":true,\"speed\":10,\"size_min\":40,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":200,\"color\":\"#ffffff\",\"opacity\":1,\"width\":2},\"move\":{\"enable\":true,\"speed\":8,\"direction\":\"none\",\"random\":false,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":false,\"mode\":\"grab\"},\"onclick\":{\"enable\":false,\"mode\":\"push\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":400,\"size\":40,\"duration\":2,\"opacity\":8,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}",
                "snow": "{\"particles\":{\"number\":{\"value\":450,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#fff\"},\"shape\":{\"type\":\"circle\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.5,\"random\":true,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":5,\"random\":true,\"anim\":{\"enable\":false,\"speed\":40,\"size_min\":0.1,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":500,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":2},\"move\":{\"enable\":true,\"speed\":6,\"direction\":\"bottom\",\"random\":false,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":true,\"mode\":\"bubble\"},\"onclick\":{\"enable\":true,\"mode\":\"repulse\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":0.5}},\"bubble\":{\"distance\":400,\"size\":4,\"duration\":0.3,\"opacity\":1,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}",
                "nyan_cat": "{\"particles\":{\"number\":{\"value\":150,\"density\":{\"enable\":false,\"value_area\":800}},\"color\":{\"value\":\"#ffffff\"},\"shape\":{\"type\":\"star\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"http:\/\/wiki.lexisnexis.com\/academic\/images\/f\/fb\/Itunes_podcast_icon_300.jpg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.5,\"random\":false,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":4,\"random\":true,\"anim\":{\"enable\":false,\"speed\":40,\"size_min\":0.1,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":150,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":1},\"move\":{\"enable\":true,\"speed\":14,\"direction\":\"left\",\"random\":false,\"straight\":true,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":false,\"mode\":\"grab\"},\"onclick\":{\"enable\":true,\"mode\":\"repulse\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":200,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":400,\"size\":40,\"duration\":2,\"opacity\":8,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}"
            },
            "eael_login_nonce": "96a4c3af26",
            "eael_register_nonce": "6eb8bd03d3",
            "eael_lostpassword_nonce": "070bce7b3a",
            "eael_resetpassword_nonce": "c6b3270291"
        };
    </script>
    <script type="rocketlazyloadscript" src="{{ asset('wp-content') }}/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min1b46.js?ver=6.1.4" id="eael-general-js" defer></script>
    <script id="wp-consent-api-js-extra">
        var consent_api = {
            "consent_type": "",
            "waitfor_consent_hook": "",
            "cookie_expiration": "30",
            "cookie_prefix": "wp_consent"
        };
    </script>
    <script type="rocketlazyloadscript" src="{{ asset('wp-content') }}/plugins/wp-consent-api/assets/js/wp-consent-api.mince14.js?ver=1.0.8" id="wp-consent-api-js" defer></script>
    <script id="cp-popup-script-js-extra">
        var cp_ajax = {
            "url": "https:\/\/www.prophotostudio.net\/wp-admin\/admin-ajax.php",
            "ajax_nonce": "8f49dfeff7",
            "assets_url": "https:\/\/www.prophotostudio.net\/wp-content\/plugins\/convertpro\/assets\/",
            "not_connected_to_mailer": "This form is not connected with any mailer service! Please contact web administrator.",
            "timer_labels": "Years,Months,Weeks,Days,Hours,Minutes,Seconds",
            "timer_labels_singular": "Year,Month,Week,Day,Hour,Minute,Second",
            "image_on_ready": "",
            "cpro_mx_valid": "1",
            "invalid_email_id": "Invalid Email Address!"
        };
        var cp_pro = {
            "inactive_time": "60"
        };
        var cp_pro_url_cookie = {
            "days": "30"
        };
        var cp_ga_object = {
            "ga_auth_type": "manual",
            "ga_category_name": " Convert Pro",
            "ga_event_name": "CONVERTPRO",
            "ga_anonymous_ip": "checked"
        };
        var cp_v2_ab_tests = {
            "cp_v2_ab_tests_object": []
        };
    </script>
    <script type="rocketlazyloadscript" defer="defer" src="{{ asset('wp-content') }}/plugins/convertpro/assets/modules/js/cp-popup.minb34d.js?ver=1.7.4" id="cp-popup-script-js"></script>
    <script type="rocketlazyloadscript" src="{{ asset('wp-content') }}/plugins/elementor-pro/assets/js/webpack-pro.runtime.min3830.js?ver=3.27.4" id="elementor-pro-webpack-runtime-js" defer></script>
    <script type="rocketlazyloadscript" src="{{ asset('wp-content') }}/plugins/elementor/assets/js/webpack.runtime.min3dd9.js?ver=3.27.6" id="elementor-webpack-runtime-js" defer></script>
    <script type="rocketlazyloadscript" src="{{ asset('wp-content') }}/plugins/elementor/assets/js/frontend-modules.min3dd9.js?ver=3.27.6" id="elementor-frontend-modules-js" defer></script>
    <script type="rocketlazyloadscript" src="{{ asset('wp-includes') }}/js/dist/hooks.min4fdd.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
    <script type="rocketlazyloadscript" src="{{ asset('wp-includes') }}/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
    
    <script type="rocketlazyloadscript" src="{{ asset('wp-content') }}/plugins/elementor-pro/assets/js/frontend.min3830.js?ver=3.27.4" id="elementor-pro-frontend-js" defer></script>
    <script type="rocketlazyloadscript" src="wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3" id="jquery-ui-core-js" defer></script>
    
    <script type="rocketlazyloadscript" src="{{ asset('wp-content') }}/plugins/elementor/assets/js/frontend.min3dd9.js?ver=3.27.6" id="elementor-frontend-js" defer></script>
    <script type="rocketlazyloadscript" src="{{ asset('wp-content') }}plugins/elementor-pro/assets/js/elements-handlers.min3830.js?ver=3.27.4" id="pro-elements-handlers-js" defer></script>
    <script type="rocketlazyloadscript" src="{{ asset('wp-content') }}plugins/powerpack-elements/assets/lib/tooltipster/tooltipster.mina7d6.js?ver=2.11.11" id="pp-tooltipster-js" defer></script>
    <script type="rocketlazyloadscript" src="{{ asset('wp-content') }}plugins/powerpack-elements/assets/js/min/frontend-tooltip.mina7d6.js?ver=2.11.11" id="pp-elements-tooltip-js" defer></script>
  

    
    <script>
        window.lazyLoadOptions = {
            elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",
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
                        for (i = 0; i < mutation.addedNodes.length; i++) {
                            if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
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
    <script data-no-minify="1" async src="{{ asset('wp-content') }}/plugins/wp-rocket/assets/js/lazyload/16.1/lazyload.min.js"></script>
    <script>
        function lazyLoadThumb(e) {
            var t =
                '<img loading="lazy" data-lazy-src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"><noscript><img src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"></noscript>',
                a = '<div class="play"></div>';
            return t.replace("ID", e) + a
        }

        function lazyLoadYoutubeIframe() {
            var e = document.createElement("iframe"),
                t = "ID?autoplay=1";
            t += 0 === this.dataset.query.length ? '' : '&' + this.dataset.query;
            e.setAttribute("src", t.replace("ID", this.dataset.src)), e.setAttribute("frameborder", "0"), e.setAttribute(
                    "allowfullscreen", "1"), e.setAttribute("allow",
                    "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"), this.parentNode
                .replaceChild(e, this)
        }
        document.addEventListener("DOMContentLoaded", function() {
            var e, t, a = document.getElementsByClassName("rll-youtube-player");
            for (t = 0; t < a.length; t++) e = document.createElement("div"), e.setAttribute("data-id", a[t].dataset
                    .id), e.setAttribute("data-query", a[t].dataset.query), e.setAttribute("data-src", a[t].dataset
                    .src), e.innerHTML = lazyLoadThumb(a[t].dataset.id), e.onclick = lazyLoadYoutubeIframe, a[t]
                .appendChild(e)
        });
    </script>
    
    <script>
        class RocketElementorAnimation {
            constructor() {
                this.deviceMode = document.createElement("span"), this.deviceMode.id = "elementor-device-mode", this
                    .deviceMode.setAttribute("class", "elementor-screen-only"), document.body.appendChild(this
                        .deviceMode)
            }
            _detectAnimations() {
                let t = getComputedStyle(this.deviceMode, ":after").content.replace(/"/g, "");
                this.animationSettingKeys = this._listAnimationSettingsKeys(t), document.querySelectorAll(
                    ".elementor-invisible[data-settings]").forEach(t => {
                    const e = t.getBoundingClientRect();
                    if (e.bottom >= 0 && e.top <= window.innerHeight) try {
                        this._animateElement(t)
                    } catch (t) {}
                })
            }
            _animateElement(t) {
                const e = JSON.parse(t.dataset.settings),
                    i = e._animation_delay || e.animation_delay || 0,
                    n = e[this.animationSettingKeys.find(t => e[t])];
                if ("none" === n) return void t.classList.remove("elementor-invisible");
                t.classList.remove(n), this.currentAnimation && t.classList.remove(this.currentAnimation), this
                    .currentAnimation = n;
                let s = setTimeout(() => {
                    t.classList.remove("elementor-invisible"), t.classList.add("animated", n), this
                        ._removeAnimationSettings(t, e)
                }, i);
                window.addEventListener("rocket-startLoading", function() {
                    clearTimeout(s)
                })
            }
            _listAnimationSettingsKeys(t = "mobile") {
                const e = [""];
                switch (t) {
                    case "mobile":
                        e.unshift("_mobile");
                    case "tablet":
                        e.unshift("_tablet");
                    case "desktop":
                        e.unshift("_desktop")
                }
                const i = [];
                return ["animation", "_animation"].forEach(t => {
                    e.forEach(e => {
                        i.push(t + e)
                    })
                }), i
            }
            _removeAnimationSettings(t, e) {
                this._listAnimationSettingsKeys().forEach(t => delete e[t]), t.dataset.settings = JSON.stringify(e)
            }
            static run() {
                const t = new RocketElementorAnimation;
                requestAnimationFrame(t._detectAnimations.bind(t))
            }
        }
        document.addEventListener("DOMContentLoaded", RocketElementorAnimation.run);
    </script>
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Montserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap" />
        <link rel='stylesheet' id='astra-theme-css-css'
            href='{{ asset('wp-content') }}/themes/astra/assets/css/minified/style.mine506.css?ver=4.8.12' media='all' />
        <link data-minify="1" rel='stylesheet' id='astra-theme-dynamic-css'
            href='{{ asset('wp-content') }}/cache/min/1/wp-content/uploads/astra/astra-theme-dynamic-css-post-271744951.css?ver=1739783240'
            media='all' />
        <link rel='stylesheet' id='premium-addons-css'
            href='{{ asset('wp-content') }}/plugins/premium-addons-for-elementor/assets/frontend/min-css/premium-addons.min9617.css?ver=4.10.85'
            media='all' />
        <link rel='stylesheet' id='mediaelement-css'
            href='{{ asset('wp-includes') }}/js/mediaelement/mediaelementplayer-legacy.min1f61.css?ver=4.2.17' media='all' />
        <link rel='stylesheet' id='wp-mediaelement-css'
            href='{{ asset('wp-includes') }}/js/mediaelement/wp-mediaelement.mind1c0.css?ver=6.7.2' media='all' />
        <link data-minify="1" rel='stylesheet' id='view_editor_gutenberg_frontend_assets-css'
            href='{{ asset('wp-content') }}/cache/min/1/wp-content/plugins/toolset-blocks/public/css/views-frontend0a8f.css?ver=1739782441'
            media='all' />
        <link data-minify="1" rel='stylesheet' id='astra-addon-css-css'
            href='{{ asset('wp-content') }}/cache/min/1/wp-content/uploads/astra-addon/astra-addon-67ae7a903cfd58-791424360a8f.css?ver=1739782441'
            media='all' />
        <link data-minify="1" rel='stylesheet' id='astra-addon-dynamic-css'
            href='{{ asset('wp-content') }}/cache/min/1/wp-content/uploads/astra-addon/astra-addon-dynamic-css-post-271749ddb.css?ver=1739783241'
            media='all' />
        <link rel='stylesheet' id='elementor-frontend-css'
            href='{{ asset('wp-content') }}/plugins/elementor/assets/css/frontend.min3dd9.css?ver=3.27.6' media='all' />
        <link rel='stylesheet' id='widget-image-css'
            href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-image.min3dd9.css?ver=3.27.6' media='all' />
        <link rel='stylesheet' id='widget-heading-css'
            href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-heading.min3dd9.css?ver=3.27.6' media='all' />
        <link rel='stylesheet' id='widget-text-editor-css'
            href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-text-editor.min3dd9.css?ver=3.27.6'
            media='all' />
        <link rel='stylesheet' id='widget-divider-css'
            href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-divider.min3dd9.css?ver=3.27.6' media='all' />
        <link rel='stylesheet' id='widget-social-icons-css'
            href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-social-icons.min3dd9.css?ver=3.27.6'
            media='all' />
        <link rel='stylesheet' id='e-apple-webkit-css'
            href='{{ asset('wp-content') }}/plugins/elementor/assets/css/conditionals/apple-webkit.min3dd9.css?ver=3.27.6'
            media='all' />
        <link data-minify="1" rel='stylesheet' id='elementor-post-16735-css'
            href='{{ asset('wp-content') }}/cache/min/1/wp-content/uploads/elementor/css/post-167350a8f.css?ver=1739782441'
            media='all' />
        <link rel='stylesheet' id='pp-extensions-css'
            href='{{ asset('wp-content') }}/plugins/powerpack-elements/assets/css/min/extensions.mina7d6.css?ver=2.11.11'
            media='all' />
        <link rel='stylesheet' id='pp-tooltip-css'
            href='{{ asset('wp-content') }}/plugins/powerpack-elements/assets/css/min/tooltip.mina7d6.css?ver=2.11.11'
            media='all' />
        <link rel='stylesheet' id='widget-spacer-css'
            href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-spacer.min3dd9.css?ver=3.27.6' media='all' />
        <link rel='stylesheet' id='widget-image-gallery-css'
            href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-image-gallery.min3dd9.css?ver=3.27.6'
            media='all' />
        <link data-minify="1" rel='stylesheet' id='swiper-css'
            href='{{ asset('wp-content') }}/cache/min/1/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min9ddb.css?ver=1739783241'
            media='all' />
        <link rel='stylesheet' id='e-swiper-css'
            href='{{ asset('wp-content') }}/plugins/elementor/assets/css/conditionals/e-swiper.min3dd9.css?ver=3.27.6'
            media='all' />
        <link rel='stylesheet' id='widget-image-carousel-css'
            href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-image-carousel.min3dd9.css?ver=3.27.6'
            media='all' />
        <link rel='stylesheet' id='widget-video-css'
            href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-video.min3dd9.css?ver=3.27.6' media='all' />
        <link rel='stylesheet' id='widget-rating-css'
            href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-rating.min3dd9.css?ver=3.27.6' media='all' />
        <link rel='stylesheet' id='widget-icon-box-css'
            href='{{ asset('wp-content') }}/plugins/elementor/assets/css/widget-icon-box.min3dd9.css?ver=3.27.6' media='all' />
        <link data-minify="1" rel='stylesheet' id='elementor-post-27174-css'
            href='{{ asset('wp-content') }}/cache/min/1/wp-content/uploads/elementor/css/post-271749ddb.css?ver=1739783241'
            media='all' />
        {{-- <link data-minify="1" rel='stylesheet' id='elementor-post-27385-css'
            href='{{ asset('wp-content') }}/cache/min/1/wp-content/uploads/elementor/css/post-273850a8f.css?ver=1739782441'
            media='all' /> --}}
        <link data-minify="1" rel='stylesheet' id='astra-overrides-css-css'
            href='{{ asset('wp-content') }}/cache/min/1/wp-content/plugins/toolset-blocks/vendor/toolset/toolset-theme-settings/res/css/themes/astra-overrides0a8f.css?ver=1739782441'
            media='screen' />
        <link rel='stylesheet' id='eael-general-css'
            href='{{ asset('wp-content') }}/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min1b46.css?ver=6.1.4'
            media='all' />
        <link data-minify="1" rel="stylesheet"
            href="{{ asset('wp-content') }}/cache/min/1/wp-content/plugins/toolset-blocks/vendor/toolset/blocks/public/css/style0a8f.css?ver=1739782441">
        <link rel='stylesheet' id='astra-galleries-css-css'
            href='{{ asset('wp-content') }}/themes/astra/assets/css/minified/galleries.mine506.css?ver=4.8.12' media='all' />
        <link rel='stylesheet' id='astra-addon-megamenu-dynamic-css'
            href='{{ asset('wp-content') }}/plugins/astra-addon-2/addons/nav-menu/assets/css/minified/magamenu-frontend.minbf11.css?ver=4.8.13'
            media='all' />
    </noscript>
    
</body>

</html>
