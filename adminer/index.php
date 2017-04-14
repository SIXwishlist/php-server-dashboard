<?php
function adminer_object() {
    // required to run any plugin
    include_once "./plugins/plugin.php";
    
    // autoloader
    foreach (glob("plugins/*.php") as $filename) {
        include_once "./$filename";
    }
    
    $plugins = array(
        // specify enabled plugins here
	new AdminerTableHeaderScroll,
	new AdminerDumpAlter,
        new AdminerDumpXml,
	new AdminerDumpZip,
	new AdminerDumpDate,
	new AdminerEditCalendar,
	new AdminerJsonColumn,
	new AdminerEnumTypes,
	new AdminerFileUpload("data/"),
	new AdminerDumpBz2,
	new AdminerEditTextarea,
	new AdminerEnumOption,
	new AdminerEditForeign,
	new AdminerDumpJson,
    );
    
    /* It is possible to combine customization and plugins:
    class AdminerCustomization extends AdminerPlugin {
    }
    return new AdminerCustomization($plugins);
    */
    
    return new AdminerPlugin($plugins);
}

// include original Adminer or Adminer Editor
include "./adminer.php";

