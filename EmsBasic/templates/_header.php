<?php namespace ProcessWire; ?><!DOCTYPE html>
<html lang="de">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>KKP•LAW – <?php echo $page->title; ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/main.css" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $config->urls->templates?>images/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $config->urls->templates?>images/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $config->urls->templates?>images/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $config->urls->templates?>images/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $config->urls->templates?>images/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $config->urls->templates?>images/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $config->urls->templates?>images/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $config->urls->templates?>images/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $config->urls->templates?>images/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $config->urls->templates?>images/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $config->urls->templates?>images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $config->urls->templates?>images/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $config->urls->templates?>images/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $config->urls->templates?>images/manifest.json">
        <meta name="msapplication-TileColor" content="#20002B">
        <meta name="msapplication-TileImage" content="<?php echo $config->urls->templates?>images/ms-icon-144x144.png">
        <meta name="theme-color" content="#20002B">
	</head>
	<body id="<?php if ($page->id != 1) { echo $page->parent()->name; } else { echo $page->name; } ?>">
        <div class="point-cutout-container">
            <svg>
                <clipPath id="point-cutout" clipPathUnits="objectBoundingBox">
                    <path d="M0.528,0.999 c0.127,-0.009,0.299,-0.071,0.382,-0.151 c0.097,-0.093,0.095,-0.278,0.086,-0.416 c-0.008,-0.123,-0.031,-0.276,-0.121,-0.353 C0.779,-0.004,0.611,-0.006,0.469,0.005 c-0.113,0.008,-0.251,0.046,-0.331,0.111 C0.023,0.21,-0.008,0.355,0.002,0.506 c0.01,0.156,0.072,0.347,0.205,0.422 c0.085,0.048,0.214,0.079,0.321,0.071"></path>
                </clipPath>
            </svg>
        </div>
        <?php
        $header = $pages->get("template=head");

        $headercomponents = $header->children("template=".$module->allowedtemps("component"));
        $headermarkup = "";
        foreach($headercomponents as $component) {
            $headermarkup .= $component->render("",array("ppage" => $page));
        }

        echo $module->wrapper($header->wrapper,$headermarkup,$header->id,"header").'
        <main class="main">';
