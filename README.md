Craft-TwigBetterSort
====================

This plugin adds a method-parameter to the twig sort-filter in Craft-CMS.

**Methods:**

 - asort (Default)
 - arsort
 - krsort
 - ksort
 - natsort
 - rsort
 

**Example:**
```twig
{% for entry in craft.entries.section('news').find()|sort('natsort') %}....{% endfor %}
```


**Install:**

Copy the *twigbettersort* folder to craft/plugins/


**Roadmap:**

Add more methods:

 - natcasesort()
 - uasort()
 - uksort()
 - usort()
