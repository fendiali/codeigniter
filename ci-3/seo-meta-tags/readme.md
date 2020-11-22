# SEO Meta Tags - CodeIgniter 3
Adding meta tags in CodeIgniter

## Installation
1. Open autoload.php, then place the code into your autoload.php.
2. Add meta.php to the helpers folder.

## Customizations
- Open meta.php, you can add facebook open graph and twitter card.
- Open controller-example.php, For controller example.

## Usage
Call meta function in your header for individual view
~~~php
<html>
  <head>
<?php echo meta($page); ?>
~~~
