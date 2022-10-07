<?php namespace ProcessWire; ?>
    </main>
    <?php
        $footer = $pages->get("template=foot");

        $footercomponents = $footer->children("template=".$module->allowedtemps("component"));
        $footermarkup = "";
        foreach($footercomponents as $component) {
            $footermarkup .= $component->render("",array("ppage" => $page));
        }

        echo $module->wrapper($footer->wrapper,$footermarkup,$footer->id,"footer");
    ?>
</body>
</html>