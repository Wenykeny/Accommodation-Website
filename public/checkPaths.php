<?php

defined("DS") ? NULL : define("DS", DIRECTORY_SEPARATOR);
defined("BASEPATH") ? NULL : define("BASEPATH", dirname(__DIR__).DS);

//defined("ADMIN") ? NULL : define("ADMIN", BASEPATH."resource/");
defined("PUBLIC_FOLDER") ? NULL : define("PUBLIC_FOLDER", BASEPATH."public/");
defined("RESOURCE") ? NULL : define("RESOURCE", BASEPATH."resource/");

defined("TEMPLATE_FRONT") ? NULL : define("TEMPLATE_FRONT", RESOURCE. "templates/front/");
defined("TEMPLATE_BACK") ? NULL : define("TEMPLATE_BACK", RESOURCE. "templates/back/");

defined("IMAGE") ? NULL : define("IMAGE", PUBLIC_FOLDER. "image/");


defined("USER_SCRIPTS") ? NULL : define("USER_SCRIPTS", RESOURCE. "userscripts/");

defined("DB_HOST") ? NULL : define("DB_HOST", "localhost");
defined("DB_USER") ? NULL : define("DB_USER", "root");
defined("DB_PASS") ? NULL : define("DB_PASS", "");
defined("DB_NAME") ? NULL : define("DB_NAME", "accommodation");


echo BASEPATH;
echo '<br>';
echo IMAGE."web/Deluxe.jpg";

?>

<img src="IMAGE/gallery/park.jpg" alt="Park" style="max-width: 50%;">