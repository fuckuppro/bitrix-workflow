<?php
/** @var CBPSequentialWorkflowActivity $rootActivity */
$rootActivity = $this->GetRootActivity();
$arStringsUsers = (array)$rootActivity->getVariable("arTest");
$sStringUsers = implode('<br>', $arStringsUsers);
$rootActivity->setVariable('sTest', $sStringUsers);
