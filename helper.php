<?php


use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('myDump')) {
    /**
     * @author Nicolas Grekas <p@tchwork.com>
     */
    function myDump($var)
    {
        foreach (func_get_args() as $var) {
            VarDumper::dump($var);
        }

        if (1 < func_num_args()) {
            return func_get_args();
        }

        return $var;
    }
}

if (! function_exists('dd')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @param  mixed
     * @return void
     */
    function dd(...$args)
    {
        foreach ($args as $x) {
            myDump($x);
        }
        die(1);
    }
}
