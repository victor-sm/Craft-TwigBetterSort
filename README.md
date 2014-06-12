Craft-TwigBetterSort
====================

This plugin adds new sorting-methods to Twigs sort-filter in Craft-CMS.

##Methods:

 - [asort](https://www.php.net/manual/en/function.asort.php) (default)
 - [arsort](https://www.php.net/manual/en/function.arsort.php)
 - [krsort](https://www.php.net/manual/en/function.krsort.php)
 - [ksort](https://www.php.net/manual/en/function.ksort.php)
 - [natcasesort](https://www.php.net/manual/en/function.natcasesort.php)
 - [natsort](https://www.php.net/manual/en/function.natsort.php)
 - [rsort](https://www.php.net/manual/en/function.rsort.php)
 - [sort](https://www.php.net/manual/en/function.sort.php)
 

##Examples:

**Basics:**
```twig
|sort(method, sort-flag)
```

**Sort entries with natsort:**
```twig
{% for entry in craft.entries.section('news').find()|sort('natsort') %}....{% endfor %}
```

**Sort-flags:**

If the php-function supports sort-flags, you can pass them in a third parameter.

```twig
{% for entry in craft.entries.section('news').find()|sort('natsort', 'SORT_NUMERIC') %}....{% endfor %}
```


##Install:

1. Copy 'twigbettersort' to 'craft/plugins/'.
2. Go to the backend.
3. Go to Settings -> Plugins.
4. Activate 'Twig Better Sort Filter'.
