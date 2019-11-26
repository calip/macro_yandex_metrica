<?php
/**
 * yandexmetrica
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
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php if ($yandex_id): ?>
   <script type="text/javascript" >
      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
      m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

      ym(<?= ___h($yandex_id) ?>, "init", {
         clickmap: <?= ___h($track_clickmap); ?>,
         trackLinks: <?= ___h($track_links); ?>,
         trackHash: <?= ___h($hash_tracking); ?>,
         accurateTrackBounce: <?= ___h($accurate_track_bounce); ?>,
         webvisor: <?= ___h($webvisor); ?>,
         defer: <?= ___h($defer); ?>,
         childIframe: <?= ___h($child_iframe); ?>,
         triggerEvent: <?= ___h($trigger_event); ?>,
         ecommerce: "<?= ___h($data_layer) ?>"
      });
   </script>
<noscript><div><img src="https://mc.yandex.ru/watch/<?= ___h($yandex_id) ?>" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<?php else: ?>
   <!-- NOTE - Yandex Metrica was not set up correctly - please add a Yandex ID -->
   <script>console.error("Yandex Metrica tracking ID has not been set from configuration");</script>
<?php endif ?>