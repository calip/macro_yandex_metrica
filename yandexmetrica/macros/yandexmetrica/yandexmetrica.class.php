<?php
namespace Macro;
/**
 * yandexmetrica - macro class
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

class yandexmetrica extends \SCHLIX\cmsMacro {
    /*
     * Run the macro
     * @global \SCHLIX\cmsHTMLPageHeader $HTMLHeader
     * @param array|string $data
     * @param object $caller_object
     * @param string $caller_function
     * @param array $extra_info
     * @return bool
     */
    public function Run(&$data, $caller_object, $caller_function, $extra_info = NULL) {
        global $HTMLHeader;
        global $__yandex_metrica_loaded;
 
        if (!$__yandex_metrica_loaded)
        {
            $yandex_id = $this->config['str_yandex_id'];
            $webvisor = ((bool)$this->config['bool_webvisor']) ? "true" : "false";
            $track_clickmap = ((bool)$this->config['bool_track_clickmap']) ? "true" : "false";
            $track_links = ((bool)$this->config['bool_track_links']) ? "true" : "false";
            $accurate_track_bounce = ((bool)$this->config['bool_accurate_track_bounce']) ? "true" : "false";
            $hash_tracking = ((bool)$this->config['bool_hash_tracking']) ? "true" : "false";
            $use_new_counter_code = ((bool)$this->config['bool_use_new_counter_code']) ? "true" : "false";
            $defer = ((bool)$this->config['bool_defer']) ? "true" : "false";
            $child_iframe = ((bool)$this->config['bool_child_iframe']) ? "true" : "false";
            $trigger_event = ((bool)$this->config['bool_trigger_event']) ? "true" : "false";
            $dispatch_ecommerce_data = $this->config['bool_dispatch_ecommerce_data'];

            if ($dispatch_ecommerce_data) {
                $data_layer = "dataLayer";
            }
            $__yandex_metrica_loaded = true;

            $local_variables = compact(array_keys(get_defined_vars()));
            $this->loadTemplateFile('view.macro', $local_variables);                
        }
        return true;
    }
}