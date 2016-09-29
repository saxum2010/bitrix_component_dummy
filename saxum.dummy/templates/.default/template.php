<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

global $APPLICATION;
$APPLICATION->SetAdditionalCSS('style.css');
$APPLICATION->AddHeadScript('scripts.js');

if(isset($arResult['MESSAGE'])){
    echo $arResult['MESSAGE'];
}
