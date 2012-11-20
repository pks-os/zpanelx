<?php

/**
 * Generic template place holder class.
 * @package zpanelx
 * @subpackage dryden -> ui -> tpl
 * @version 1.0.0
 * @author Bobby Allen (ballen@zpanelcp.com)
 * @copyright ZPanel Project (http://www.zpanelcp.com/)
 * @link http://www.zpanelcp.com/
 * @license GPL (http://www.gnu.org/licenses/gpl.html)
 */
class ui_tpl_totalparkeddomains {

    public static function Template() {
        global $controller;
        $currentuser = ctrl_users::GetUserDetail();
        $parkeddomainsquota = $currentuser['parkeddomainquota'];
        if ($parkeddomainsquota <> 0) {
            return (string) $parkeddomainsquota;
        }
        return (string) 0;
    }

}

?>
