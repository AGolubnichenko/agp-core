# AGP Wordpress Plugin Core

Collection of a base classes for Custom WordPress plugins

# Installation

1. Download the AGP Wordpress Plugin Core plugin
2. Upload ‘agp-core’ to the ‘/wp-content/plugins/’ directory
3. Activate the plugin through the ‘Plugins’ menu in WordPress

# Include ‘agp-core’ in a plugin / theme

1. Download a copy of the plugin
2. Copy the plugin to your theme / plugin
3. Include the main plugin file

    if (!class_exists('Agp_Autoloader')) {
        require_once __DIR__ . '/includes/agp-core/agp-core.php';    
    }

# Create new module

1. Initialize autoloader for ‘classes’ folder

    $autoloader = Agp_Autoloader::instance();
    $autoloader->setClassMap(array(
        __DIR__ => array('classes')
    ));

2. Create new file ‘classes/myModule.class.php’

    <?php
    class myModule extends Agp_Module 
    {
    }

3. Enjoy!



