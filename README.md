# bayton-v5

A __static__, flat-file implementation of my current bulky, bloated wordpress installation using minimal templating and a little bit of PHP

The aim of this project is to: 

1. Improve site performance
2. Reduce server and backup overhead
3. Wave goodbye to any reliance on a database
4. Improve my own skills

## How it works

Create a new PHP content file, the easiest method is to `cp template/content-type.php /content/chosen/location.php` and open with your favourite text editor.

From there, assign the following variables:

* theme
* content type
* author (if post)
* comments yes/no

The `theme` and `content type` variables are explicitly linked to the themes directory, in which the theme name must match the theme folder name and content type must match the file name of a content type if different from what has been set in the config.php file.

# Requires
PHP mbstring
PHP Composer
mnapoli/frontyaml (see composer.json in root)
