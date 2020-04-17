<?php
return array(
'flow1' => array (
  'id' => '1',
  'active' => '1',
  'name' => 'flow1',
  'description' => NULL,
  'triggerType' => 'RecordTagAddTrigger',
  'modelClass' => 'Accounts',
  'flow' => '{"version":"5.2","idCounter":2,"trigger":{"id":1,"type":"RecordTagAddTrigger","options":{"modelClass":{"value":"Accounts"},"tags":{"value":"#successful"}},"modelClass":"Accounts"},"items":[{"id":2,"type":"X2FlowCreateNotif","options":{"user":{"value":"admin"},"text":{"value":"test"}}}]}',
  'createDate' => '11',
  'lastUpdated' => '11',
),
'flow2' => array (
  'id' => '2',
  'active' => '1',
  'name' => 'flow2',
  'description' => NULL,
  'triggerType' => 'RecordTagAddTrigger',
  'modelClass' => 'Accounts',
  'flow' => '{"version":"5.2","idCounter":2,"trigger":{"id":1,"type":"RecordTagAddTrigger","options":{"modelClass":{"value":"Accounts"},"tags":{"value":"#successful"}},"modelClass":"Accounts","conditions":[{"type":"attribute","name":"name","operator":"=","value":"account1"}]},"items":[{"id":2,"type":"X2FlowCreateNotif","options":{"user":{"value":"admin"},"text":{"value":"test"}}}]}',
  'createDate' => '11',
  'lastUpdated' => '11',
),
'flow3' => array (
  'id' => '3',
  'active' => '1',
  'name' => 'flow3',
  'description' => NULL,
  'triggerType' => 'WebleadTrigger',
  'modelClass' => 'Contacts',
  'flow' => '{"version":"5.2","idCounter":2,"trigger":{"id":1,"type":"WebleadTrigger","options":{"tags":{"value":"","operator":"="}},"modelClass":"Contacts","conditions":[{"type":"attribute","name":"leadSource","operator":"=","value":"Google"}]},"items":[{"id":2,"type":"X2FlowCreateNotif","options":{"user":{"value":"admin"},"text":{"value":"test"}}}]}',
  'createDate' => '11',
  'lastUpdated' => '11',
),
'flow4' => array (
  'id' => '4',
  'active' => '1',
  'name' => 'flow4',
  'description' => NULL,
  'triggerType' => 'WebleadTrigger',
  'modelClass' => 'Contacts',
  'flow' => '{"version":"5.2","idCounter":2,"trigger":{"id":1,"type":"WebleadTrigger","options":{"tags":{"value":"#successful","operator":"="}},"modelClass":"Contacts","conditions":[{"type":"attribute","name":"leadSource","operator":"=","value":"Google"}]},"items":[{"id":2,"type":"X2FlowCreateNotif","options":{"user":{"value":"admin"},"text":{"value":"test"}}}]}',
  'createDate' => '11',
  'lastUpdated' => '11',
),
'flow5' => array (
  'id' => '5',
  'active' => '1',
  'name' => 'flow5',
  'description' => NULL,
  'triggerType' => 'NewsletterEmailClickTrigger',
  'modelClass' => NULL,
  'flow' => '{"version":"5.2","idCounter":2,"trigger":{"id":1,"type":"NewsletterEmailClickTrigger","options":{"campaign":{"value":""},"url":{"value":"","operator":"contains"}}},"items":[{"id":2,"type":"X2FlowCreateNotif","options":{"user":{"value":"{assignedTo}"},"text":{"value":"test"}}}],"flowName":"test"}',
  'createDate' => '11',
  'lastUpdated' => '11',
),
'flow6' => array (
  'id' => '6',
  'active' => '1',
  'name' => 'flow6',
  'description' => NULL,
  'triggerType' => 'CampaignEmailClickTrigger',
  'modelClass' => 'Contacts',
  'flow' => '{"version":"5.2","idCounter":2,"trigger":{"id":1,"type":"CampaignEmailClickTrigger","options":{"campaign":{"value":"Test Email Campaign_5"},"url":{"value":"test url","operator":"="}},"modelClass":"Contacts","conditions":[{"type":"attribute","name":"firstName","operator":"=","value":"Test1"}]},"items":[{"id":2,"type":"X2FlowCreateNotif","options":{"user":{"value":"{assignedTo}"},"text":{"value":"test"}}}],"flowName":"test"}',
  'createDate' => '11',
  'lastUpdated' => '11',
),
'flow7' => array (
  'id' => '7',
  'active' => '1',
  'name' => 'flow7',
  'description' => NULL,
  'triggerType' => 'CampaignEmailClickTrigger',
  'modelClass' => 'Contacts',
  'flow' => '{"version":"5.2","idCounter":2,"trigger":{"id":1,"type":"CampaignEmailClickTrigger","options":{"campaign":{"value":""},"url":{"value":"","operator":"="}},"modelClass":"Contacts"},"items":[{"id":2,"type":"X2FlowCreateNotif","options":{"user":{"value":"{assignedTo}"},"text":{"value":"test"}}}],"flowName":"test"}',
  'createDate' => '11',
  'lastUpdated' => '11',
),
'flow8' => array (
  'id' => '8',
  'active' => '1',
  'name' => 'flow8',
  'description' => NULL,
  'triggerType' => 'RecordViewTrigger',
  'modelClass' => 'Contacts',
  'flow' => '{"version":"5.2","idCounter":2,"trigger":{"id":1,"type":"RecordViewTrigger","options":{"modelClass":{"value":"Contacts"}},"modelClass":"Contacts","conditions":[{"type":"attribute","name":"company","operator":"=","value":"Aperture Science_3"}]},"items":[{"id":2,"type":"X2FlowCreateNotif","options":{"user":{"value":"{assignedTo}"},"text":{"value":""}}}],"flowName":"test"}',
  'createDate' => '11',
  'lastUpdated' => '11',
),
'flow9' => array (
  'id' => '9',
  'active' => '1',
  'name' => 'flow9',
  'description' => NULL,
  'triggerType' => 'CampaignEmailOpenTrigger',
  'modelClass' => 'Contacts',
  'flow' => '{"version":"5.2","idCounter":2,"trigger":{"id":1,"type":"CampaignEmailOpenTrigger","options":{"campaign":{"value":"Test Email Campaign"}},"modelClass":"Contacts"},"items":[{"id":2,"type":"X2FlowCreateNotif","options":{"user":{"value":"{assignedTo}"},"text":{"value":""}}}],"flowName":"test"}',
  'createDate' => '11',
  'lastUpdated' => '11',
),
'flow10' => array (
  'id' => '10',
  'active' => '1',
  'name' => 'flow10',
  'description' => NULL,
  'triggerType' => 'CampaignUnsubscribeTrigger',
  'modelClass' => 'Contacts',
  'flow' => '{"version":"5.2","idCounter":2,"trigger":{"id":1,"type":"CampaignUnsubscribeTrigger","options":{"campaign":{"value":"Test Email Campaign"}},"modelClass":"Contacts"},"items":[{"id":2,"type":"X2FlowCreateNotif","options":{"user":{"value":"{assignedTo}"},"text":{"value":""}}}],"flowName":"test"}',
  'createDate' => '11',
  'lastUpdated' => '11',
),
);
?>