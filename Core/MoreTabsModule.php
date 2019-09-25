<?php
namespace SeemannIT\MoreTabsModule\Core;

class MoreTabsModule extends \OxidEsales\Eshop\Core\Module\Module {
    public static function onActivate() {
        $oDb = \OxidEsales\Eshop\Core\DatabaseProvider::getDb();
        $handle = fopen(dirname(__FILE__)."/../sql/install.sql", "r");
        $cmd = "";
        while(($line = fgets($handle)) !== false) {
            $cmd .= $line." ";
        }
        $oDb->execute($cmd);
        fclose($handle);
    }
}
