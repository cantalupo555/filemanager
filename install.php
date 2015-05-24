<?php
/**
 *
 * Installer for File Manager Extplorer Module for Sentora 1.0.0
 * Version : 100
 * Author : Italo Cantalupo Lima - italo@lupoinfo.com.br
 * Contribution : TGates
 * Suggestion : Me.B
 *
 */
function UnZip(){
    global $controller;
    $zip = new ZipArchive;
    $res = $zip->open(getcwd()."/apps.zip");
    if ($res === TRUE) {
        $zip->extractTo("/etc/sentora/panel/etc/apps");
        $zip->close();
        chmod ("/etc/sentora/panel/etc/apps/filemanager", 0777);
        chmod ("/etc/sentora/panel/modules/filemanager", 0777);
        chmod ("/etc/sentora/panel/modules/filemanager/module.xml", 0777);
        chmod ("/etc/sentora/panel/modules/filemanager/module.zpm", 0777);
        chmod ("/etc/sentora/panel/modules/filemanager/end.php", 0777);
        chmod ("/etc/sentora/panel/modules/filemanager/code", 0777);
        chmod ("/etc/sentora/panel/modules/filemanager/code/controller.ext.php", 0777);
        chmod ("/etc/sentora/panel/modules/filemanager/assets", 0777);
        chmod ("/etc/sentora/panel/modules/filemanager/assets/icon.png", 0777);
        copy("/etc/sentora/panel/modules/filemanager/auth.class1.php" , "/etc/sentora/panel/dryden/ctrl/auth.class1.php");
        unlink("/etc/sentora/panel/dryden/ctrl/auth.class.php");
        copy("/etc/sentora/panel/modules/filemanager/auth.class2.php" , "/etc/sentora/panel/dryden/ctrl/auth.class.php");
        chmod ("/etc/sentora/panel/dryden/ctrl/auth.class.php", 0777);
        chmod ("/etc/sentora/panel/dryden/ctrl/auth.class1.php", 0777);
        return true;
     } else {
         return false;
    }
}
if (UnZip() == 'true'){
    echo "Completed installation.";
    echo "<meta HTTP-EQUIV='Refresh' CONTENT='3;URL=/modules/filemanager/end.php'>";
    } else {
    echo "Installation not finished.";
    echo "<meta HTTP-EQUIV='Refresh' CONTENT='3;URL=/'>";
}
?>