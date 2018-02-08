<?php
/*
 * PIMPED APACHE-STATUS
 * 
 * view: ORIGINAL server-status
 */

// tabbed content
$aTC = array();
if (count($aSrvStatus) > 0) {
    foreach ($aSrvStatus as $sHost => $aData) {
        $aTC[] = array(
            'tab' => $sHost,
            'content' => '<h3>' . $sHost . '</h3><div class="console" style="font-family: \'lucida console\'; font-size: 80%;">' . utf8_encode($aData['orig']) . '</div>'
        );
    }
}

$content = $oDatarenderer->themeBox(
    $aCfg['icons']['original.php'] . ' ' . $aLangTxt['view_original.php_label']
    , $oDatarenderer->renderTabbedContent($aTC)
);
