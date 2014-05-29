<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php $aContent = array (
  1 => 
  array (
    'cron_id' => '1',
    'module_id' => 'log',
    'product_id' => 'phpfox',
    'next_run' => '1401334433',
    'last_run' => '1401330833',
    'type_id' => '2',
    'every' => '1',
    'is_active' => '1',
    'php_code' => 'Phpfox::getLib(\'phpfox.database\')->delete(Phpfox::getT(\'log_session\'), "last_activity < \'" . ((PHPFOX_TIME - (Phpfox::getParam(\'log.active_session\') * 60))) . "\'");
',
  ),
  2 => 
  array (
    'cron_id' => '2',
    'module_id' => 'mail',
    'product_id' => 'phpfox',
    'next_run' => '1403853422',
    'last_run' => '1401261422',
    'type_id' => '3',
    'every' => '30',
    'is_active' => '1',
    'php_code' => 'Phpfox::getService(\'mail.process\')->cronDeleteMessages();',
  ),
  3 => 
  array (
    'cron_id' => '3',
    'module_id' => 'shoutbox',
    'product_id' => 'phpfox',
    'next_run' => '1401347822',
    'last_run' => '1401261422',
    'type_id' => '3',
    'every' => '1',
    'is_active' => '1',
    'php_code' => 'Phpfox::getService(\'shoutbox.process\')->clear(Phpfox::getParam(\'shoutbox.shoutbox_total\'));
',
  ),
  4 => 
  array (
    'cron_id' => '4',
    'module_id' => 'subscribe',
    'product_id' => 'phpfox',
    'next_run' => '1401334433',
    'last_run' => '1401330833',
    'type_id' => '2',
    'every' => '1',
    'is_active' => '1',
    'php_code' => 'Phpfox::getService(\'subscribe.purchase.process\')->downgradeExpiredSubscribers();',
  ),
); ?>