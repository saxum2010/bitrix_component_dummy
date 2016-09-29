<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (array_intersect(array(1), CUser::GetUserGroup($USER->GetID()))) {
   $arResult['MESSAGE'] = GetMessage("HELLO_ADMIN");
} else {
   $arResult['MESSAGE'] = GetMessage("HELLO_USER");
}
    $this->IncludeComponentTemplate();

?>
