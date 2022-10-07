<?php namespace ProcessWire;
$module = $modules->get('EmsBasic');



include("./_header.php");

$components = $page->children("template=".$module->allowedtemps("component"));
foreach($components as $component) {
    echo $component->render();
}
include("./_footer.php");