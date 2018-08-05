<?php
/**
 *
 * Installer for File Manager Extplorer Module for Sentora 1.0.0
 * Version : 100
 * Author : Italo Cantalupo Lima - contato@lupohost.com
 * Contribution : TGates
 * Suggestion : Me.B
 *
 */
chmod ("/etc/sentora/panel/modules/filemanager/index.php", 0777);
chmod ("/etc/sentora/panel/modules/filemanager/install.php", 0777);
chmod ("/etc/sentora/panel/modules/filemanager/apps.zip", 0777);
chmod ("/etc/sentora/panel/modules/filemanager/auth.class1.php", 0777);
chmod ("/etc/sentora/panel/modules/filemanager/auth.class2.php", 0777);
unlink("/etc/sentora/panel/modules/filemanager/index.php");
unlink("/etc/sentora/panel/modules/filemanager/install.php");
unlink("/etc/sentora/panel/modules/filemanager/apps.zip");
unlink("/etc/sentora/panel/modules/filemanager/auth.class1.php");
unlink("/etc/sentora/panel/modules/filemanager/auth.class2.php");
rmdir("/etc/sentora/panel/etc/apps/filemanager/install");

/**
	 $Dir = "/etc/sentora/panel/etc/apps/filemanager/install";
    function ExcluiDir($Dir){
    
    if ($dd = opendir($Dir)) {
        while (false !== ($Arq = readdir($dd))) {
            if($Arq != "." && $Arq != ".."){
                $Path = "$Dir/$Arq";
                if(is_dir($Path)){
                    ExcluiDir($Path);
                }elseif(is_file($Path)){
                    unlink($Path);
                }
            }
        }
        closedir($dd);
    }
    rmdir($Dir);
}
*/
    echo "<meta HTTP-EQUIV='Refresh' CONTENT='3;URL=/'>";
?>