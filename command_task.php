<?php
// пример выполнения команды
global $USER;
$arCurrentUserGroups = $USER->GetUserGroupArray();
$sWorkFlowId = '';
$sWorkFlowEvent = 'event_name'; // activity code
$arWorkFlowEventParams = [];
$arWorkFlowEventErrors = [
    "Groups" => $arCurrentUserGroups, "User" => $USER->GetID()
];
CBPDocument::SendExternalEvent(
    $sWorkFlowId,
    $sWorkFlowEvent,
    $arWorkFlowEventParams,
    $arWorkFlowEventErrors
);
