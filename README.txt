=== ZGM Plugin Boilerplate ===

A boilerplate for wordpress plugins.

== Setup ==

This plugin uses namespaces following format:
CompanyName\PluginName\Folder 

It starts with namespace ZGM\ZGMPB autoloading the lib folder;

Before composer install -> do a find and replace in all folders for ZGMPB.  Replace with your plugin name.

== Commands ==

To Bootstrap:

1. composer install
2. npm install
3. npm run watch


All Commands:

composer install
composer dump-autoload
npm install
npm run dev
npm run watch
npm run production
