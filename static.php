<?php 

/**
 * 
 */
class ContohStatic 
{
    public static $angka = 1;

    public static function halo() {
        return "Hola " . self::$angka++ . " kali";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();
?>
