# SEO Meta Tags - CodeIgniter 3
Adding meta tags in CodeIgniter

## Installation
1. Open autoload.php, then place the code into your autoload.php.
2. Add meta_helper.php to the helpers folder.

## Customizations
- Edit meta_helper.php, you can add facebook open graph and twitter card.
- Open controllers/example.php, For controller example.

## Usage
Call meta function in your header for individual view
~~~php
<html>
  <head>
<?php echo meta($page); ?>
~~~

If fatal error [undefined function base_url()], simply.. add 
~~~
$autoload['helper'] = array('url');
~~~
 in the autoload.php
