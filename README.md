# Aterbonus\Sitemap

**WARNING**: This is a quick repo from [thepixeldeveloper/sitemap](https://github.com/ThePixelDeveloper/Sitemap) 
to make it work on PHP ^5.6. You should use the original repo if you have access to PHP 7. Don't expect updates.

* [Installation](#installation)
* [Basic Usage](#basic-usage)
* [Advanced Usage](#advanced-usage)
* [Extensions](#extensions)

## Installation

``` bash
composer require "Aterbonus/sitemap"
```

## Basic Usage

Generating a typical (\<urlset\>) sitemap.

``` php
<?php

use Aterbonus\Sitemap\Urlset;
use Aterbonus\Sitemap\Url;
use Aterbonus\Sitemap\Drivers\XmlWriterDriver;

$url = new Url($loc);
$url->setLastMod($lastMod);
$url->setChangeFreq($changeFreq);
$url->setPriority($priority);

$urlset = new Urlset();
$urlSet->add($url);

$driver = new XmlWriterDriver();
$urlset->accept($driver);

echo $driver->getOutput();
```

Generating a parent (\<sitemapindex\>) sitemap.

``` php
<?php

use Aterbonus\Sitemap\SitemapIndex;
use Aterbonus\Sitemap\Sitemap;
use Aterbonus\Sitemap\Drivers\XmlWriterDriver;

// Sitemap entry.
$url = new Sitemap($loc);
$url->setLastMod($lastMod);

// Add it to a collection.
$urlset = new SitemapIndex();
$urlSet->add($url);

$driver = new XmlWriterDriver();
$urlset->accept($driver);

echo $driver->output();
```

## Extensions

The following extensions are supported: [Image](tree/master/src/Extensions/Image.php), [Link](tree/master/src/Extensions/Link.php), [Mobile](tree/master/src/Extensions/Mobile.php), [News](tree/master/src/Extensions/News.php) and [Video](tree/master/src/Extensions/Video.php). They work in the
following way (taking image as an example):

``` php
<?php

use Aterbonus\Sitemap\Urlset;
use Aterbonus\Sitemap\Url;
use Aterbonus\Sitemap\Extensions\Image;

$url = new Url($loc);
$url->setLastMod($lastMod);
$url->setChangeFreq($changeFreq);
$url->setPriority($priority);

$image = new Image('https://image-location.com');

$url->addExtension($image);

...
```

## Advanced Usage

**Processing Instructions**

You can add processing instructions on the output as such.

```php
<?php

use Aterbonus\Sitemap\Drivers\XmlWriterDriver;

$driver = new XmlWriterDriver();
$driver->addProcessingInstructions('xml-stylesheet', 'type="text/xsl" href="/path/to/xslt/main-sitemap.xsl"');
```

Which will add before the document starts.

``` xml
<?xml-stylesheet type="text/xsl" href="/path/to/xslt/main-sitemap.xsl"?>
```


**Comments**

Comments are useful for information such as when the file was created.

```php
<?php

use Aterbonus\Sitemap\Drivers\XmlWriterDriver;

$date = date('Y-m-d H:i:s');

$driver = new XmlWriterDriver();
$driver->addComment('This XML file was written on ' . $date . '. Bye!');
```

Which will render out.

``` xml
<?xml version="1.0" encoding="UTF-8"?>
<!--This XML file was written on 2018-06-24 15:57:23. Bye!-->
```

