======================
Rule ``constant_case``
======================

The PHP constants ``true``, ``false``, and ``null`` MUST be written using the
correct casing.

Configuration
-------------

``case``
~~~~~~~~

Whether to use the ``upper`` or ``lower`` case syntax.

Allowed values: ``'lower'``, ``'upper'``

Default value: ``'lower'``

Examples
--------

Example #1
~~~~~~~~~~

*Default* configuration.

.. code-block:: diff

   --- Original
   +++ New
   @@ -1,4 +1,4 @@
    <?php
   -$a = FALSE;
   -$b = True;
   -$c = nuLL;
   +$a = false;
   +$b = true;
   +$c = null;

Example #2
~~~~~~~~~~

With configuration: ``['case' => 'upper']``.

.. code-block:: diff

   --- Original
   +++ New
   @@ -1,4 +1,4 @@
    <?php
    $a = FALSE;
   -$b = True;
   -$c = nuLL;
   +$b = TRUE;
   +$c = NULL;

Rule sets
---------

The rule is part of the following rule sets:

@PSR2
  Using the ``@PSR2`` rule set will enable the ``constant_case`` rule with the default config.

@Symfony
  Using the ``@Symfony`` rule set will enable the ``constant_case`` rule with the default config.

@PhpCsFixer
  Using the ``@PhpCsFixer`` rule set will enable the ``constant_case`` rule with the default config.
