---
title: Home 
contenttype: featuredimage
author: Jason Bayton
date: 23/08/2016
featuredimage: /sysimg/home/home.jpg
category: System
tags: home, welcome, hello, frontpage
---

# Welcome to your new Neutron site!

<div class="bs-callout bs-callout-danger">
<h4>This is a system page</h4>
<p>To overwrite this page, create a new file named <code>home.md</code> in <code>/content/</code> with your desired content.</p>
</div>

This is a static site generated from __flat files__ that live within the `content` folder.

## Get started
Each page is made up of two files: 

* page.md
* image

To create a new page, copy the `home.md` file from the `templates` folder into the `contents` folder and give it a name that corresponds with the URL. For example:

`my-new-page.md` will be viewable at `http://domain.com/my-new-page`

To define the title, author, date, featured image and other information for the page, edit these within the YAML section at the top of the `.md` file. It looks like this: 

```
  title: Home
  contenttype: default
  author: Jason Bayton
  date: 19/08/2016
  featuredimage: /path/to/image.jpg
  category: Welcome
```

_Content type_ is a theme feature that allows a page to be displayed differently. Normally pages will use the `default` or `page` option which corresponds directly to the `default.php` or `page.php` file in the theme `base` directory. To change the content type, simply provide the name of the relevant theme php file without `.php` on the end. Try it out with this file - change `featuredimage` to `page` in `home.md` and see how it looks!

The built-in theme is fully responsive, images and embedded media automatically _just fit_, the design is minimal yet beautiful and the readability for both mobile and desktop visitors is perfect.

Thanks for stopping by!

