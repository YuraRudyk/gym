.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _bugs_jquery:


jQuery
======

jQuery must included before the content element slick: on top of the page.


Sample
------

Sample for the introduction packge

.. code:: php

  // remove jQuery from the bottom of the page
  page.includeJSFooterlibs.jquery >
  // insert jQuery on the top of the page
  page.includeJSLibs.jquery = EXT:bootstrap_package/Resources/Public/JavaScript/Libs/jquery.min.js