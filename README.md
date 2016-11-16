# How To Videos for CraftCMS
How to videos for CraftCMS CP

# Installation
Copy howtovideos folder into Craft's plugins directory

# Configuration
Create a config file in Craft's config directory called howtovideos.php and add this content:

```
<?php

return [
    'wistiaApiKey'    => 'HTV_WISTIA_API_KEY',
    'wistiaProjectId' => 'HTV_WISTIA_PROJECT_ID',
];
```

Or copy and paste code from plugin's config.php.

Then update the config file with correct Wistia api key and Wistia Project ID.
