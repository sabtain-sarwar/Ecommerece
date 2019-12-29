<?php
    // DS is our backSlash or forwardSlash depending on what system we are
    defined ("DS") ? null : define ("DS" , DIRECTORY_SEPARATOR);
    defined ("TEMPLATE_FRONT") ? null : define ("TEMPLATE_FRONT" , __DIR__ . DS . "templates" . DS . "front");
    defined ("TEMPLATE_BACK") ? null : define ("TEMPLATE_BACK" , __DIR__ . DS . "templates" . DS . "back");
