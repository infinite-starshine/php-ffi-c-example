<?php

error_reporting(-1);
ini_set('display_errors', 1);

$ffi = \FFI::cdef(
    file_get_contents('/hellothere/hellothere.h'),
    "/usr/lib/libhellothere.so"
);

$value = $ffi->year_in_seconds();
$value_php = \FFI::string($value);
echo $value_php;
$ffi->free_that_stringy($value);
