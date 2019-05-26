<!DOCTYPE html>
<html ⚡ lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <meta name="description" content="This is the AMP Boilerplate.">
    <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
    <link rel="preconnect dns-prefetch" href="https://fonts.gstatic.com/" crossorigin>
    <style amp-boilerplate>
      body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
    </style>
    <link href="https://bootswatch.com/4/flatly/bootstrap.min.css" rel="stylesheet">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
    <!-- Import other AMP Extensions here -->
    <style amp-custom>
    /* body { font-family: 'Montserrat', sans-serif } */
    :root {
      --color-primary: #005AF0;
      --space-1: .5rem;  /* 8px */
      --space-4: 2rem;   /* 32px */
    }

    /* Styles for the flex layout based tabs */
    amp-selector[role=tablist].tabs-with-flex {
        display: flex;
        flex-wrap: wrap;
    }
    amp-selector[role=tablist].tabs-with-flex [role=tab] {
        flex-grow: 1;
        /* custom styling, feel free to change */
        text-align: center;
        padding: var(--space-1);
    }
    amp-selector[role=tablist].tabs-with-flex [role=tab][selected] {
        outline: none;
        /* custom styling, feel free to change */
        border-bottom: 2px solid var(--color-primary);
    }
    amp-selector[role=tablist].tabs-with-flex [role=tabpanel] {
        display: none;
        width: 100%;
        order: 1; /* must be greater than the order of the tab buttons to flex to the next line */
        /* custom styling, feel free to change */
        padding: var(--space-4);
    }
    amp-selector[role=tablist].tabs-with-flex [role=tab][selected] + [role=tabpanel] {
        display: block;
    }

    /* Styles for the selector based tabs */
    amp-selector[role=tablist].tabs-with-selector {
        display: flex;
    }
    amp-selector[role=tablist].tabs-with-selector [role=tab][selected] {
        outline: none;
        /* custom styling, feel free to change */
        border-bottom: 2px solid var(--color-primary);
    }
    amp-selector[role=tablist].tabs-with-selector {
        display: flex;
    }
    amp-selector[role=tablist].tabs-with-selector [role=tab] {
      /* custom styling, feel free to change */
      width: 100%;
      text-align: center;
      padding: var(--space-1);
    }
    amp-selector.tabpanels [role=tabpanel] {
      display: none;
      /* custom styling, feel free to change */
      padding: var(--space-4);
    }
    amp-selector.tabpanels [role=tabpanel][selected] {
      outline: none;
      display: block;
    }
    </style>
    <noscript>
      <style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style>
    </noscript>
 
    <link rel="canonical" href=".">
    <link rel="shortcut icon" href="images/favicon.png" />
    <link rel="image_src" href="images/iktikaf-isma-shah-alam.jpg" />  
    <meta name="description" content="Iktikaf Perdana | ISMA Shah Alam"/>
    <meta property="og:locale" content="ms_my" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Iktikaf Perdana | ISMA Shah Alam" />
    <meta property="og:description" content="Sistem pengolahan surat jualan automatik" />
    <meta property="og:site_name" content="Iktikaf Perdana | ISMA Shah Alam" />
    <meta property="og:image" content="images/iktikaf-isma-shah-alam.jpg" />