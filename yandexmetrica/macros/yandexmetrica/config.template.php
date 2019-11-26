<?php
/**
 * yandexmetrica - Configuration
 * 
 * Send any amount of data to Yandex.Metrica and handle it the way you want: adjust the sampling rate to get reports faster, or use unsampled data for maximum accuracy
 *
 * @copyright 2019 Schlix
 *
 * @license MIT
 *
 * @package yandexmetrica
 * @version 1.0
 * @author  Alip <alip.putra@schlix.com>
 * @link    https://www.schlix.com/
 */
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>

<p><?= ___('Yandex Metrica') ?></p>

<schlix-config:textbox config-key='str_yandex_id' label='<?= ___('Tracking ID') ?>' required='required' class='form-control' /> 

<h4><?=___('Select Tracking Options')?></h4>
<schlix-config:checkbox config-key='bool_webvisor' checked="checked" label='<?= ___('Webvisor (session replay)') ?>' />
<schlix-config:checkbox config-key='bool_track_clickmap' checked="checked" label='<?= ___('Track Clickmap') ?>' />
<schlix-config:checkbox config-key='bool_track_links' checked="checked" label='<?= ___('Track Links, social sharing, file requests...') ?>' />
<schlix-config:checkbox config-key='bool_accurate_track_bounce' label='<?= ___('Accurate Track Bounce') ?>' />
<schlix-config:checkbox config-key='bool_hash_tracking' label='<?= ___('Hash tracking in the browsers address bar') ?>' />
<schlix-config:checkbox config-key='bool_use_new_counter_code' checked="checked" label='<?= ___('Use new counter code') ?>' />
<schlix-config:checkbox config-key='bool_defer' label='<?= ___('Disable automatically sending data during tag initialization') ?>' />
<schlix-config:checkbox config-key='bool_child_iframe' label='<?= ___('Record iframe contents without a tag in a child window') ?>' />
<schlix-config:checkbox config-key='bool_trigger_event' label='<?= ___('Check if the tag is ready') ?>' />
<schlix-config:checkbox config-key='bool_dispatch_ecommerce_data' label='<?= ___('Dispatch ecommerce data to Yandex Metrica') ?>' />