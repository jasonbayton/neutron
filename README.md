# Neutron

A __static__, flat-file implementation of my current bulky, bloated wordpress installation using minimal templating and a little bit of PHP

The aim of this project is to: 

1. Improve site performance
2. Reduce server and backup overhead
3. Wave goodbye to any reliance on a database
4. Improve my own skills

## How it works

Create a new markdown file and upload it to the  `content` folder, the easiest method is to `cp template/home.md /content/chosen/location.md` and edit with your favourite text editor.

From there, assign the following variables:

* content type
* author
* date
* tags (optional)
* category
* featured image (optional/theme dependent)

The `content type` variable is explicitly linked to the themes directory, in which the content type must match the file name of a content type without the extension (ie for "wide", a template file named `wide.php` must exist in the theme directory.

There are two themes out of the box, one is a clone of [bayton.org](https://bayton.org) named `default` and the other is a [readthedocs.org](https://readthedocs.org) inspired theme for a documentation-focused site named `docs` and is enabled by default. The theme can be changed in the `config/config.php` file. 

## Requires
PHP mbstring  
PHP Composer  
mnapoli/frontyaml (see composer.json in root)

## Contributions
This is my first ever PHP project and there will therefore be issues, poor code quality and other less-than-ideal things to be found in the source. I welcome contributions that will rectify any of the above or anything else.
