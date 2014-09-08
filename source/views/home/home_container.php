<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$js_ts="20140728";   // RESET THIS TO UPDATE JS AND CSS

$this->output->set_header("Content-Type: text/html; charset=utf-8");

$username_uuid = $this->session->userdata('username_uuid');
$username = $this->session->userdata('username');
$ip_address = $this->session->userdata('ip_address');

$system_title = ( @($system_title)?$system_title:$this->lang->line('system_title') );
$intro = ( @($intro)?$intro:$this->lang->line('description') );
$keywords = ( @($keywords)?$keywords:$this->lang->line('keywords') );
$company = ( @($company)?$company:$this->lang->line('company') );
$base_url = ( @($base_url)?$base_url:SERVER_URL );
$thumbnail = ( @($thumbnail) ? $thumbnail : $this->config->item('MANOBO_URL') . $this->config->item('CDN_IMAGES')."/mbtcph-logo-400x400.jpg" );


?><!DOCTYPE html>
<html lang="en" >
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="<?= $intro ?>" />
  <meta name="keywords" content="<?= $keywords ?>" />
  <meta name="author" content="<?= $company ?>" />

  <meta property="fb:admins" content="macoy.mejia"/>
  <meta property="fb:app_id" content="1456247544616721"/>

  <meta property="og:type" content="website"/>
  <meta property="og:site_name" content="<?= $system_title ?>"/>
  <meta property="og:url" content="<?= $base_url ?>"/>
  <meta property="og:title" content="<?= $system_title ?>"/>
  <meta property="og:description" content="<?= $intro ?>" />
  <meta property="og:image" content="<?= $thumbnail ?>" />


  <meta itemprop="name" content="<?= $system_title ?>" />
  <meta itemprop="description" content="<?= $intro ?>" />
  <meta itemprop="image" content="<?= $thumbnail ?>" />


  <link rel="image_src" type="image/png" href="<?= $thumbnail ?>">
  <link rel="icon" type="image/png" href="<?=  $this->config->item('CDN_ICONS') ?>/bitcoin_favicon.ico">
  <link rel="shortcut icon" href="<?=  $this->config->item('CDN_ICONS') ?>/bitcoin_favicon.ico">

  <meta charset=utf-8>

  <title><?= $system_title ?> - <?= $intro ?></title>

  <link rel="stylesheet" href="<?= $this->config->item('CDN_JQUERYUI_CSS') ?>?ver=<?= $js_ts ?>">
  <link rel="stylesheet" href="<?= $this->config->item('CDN_CSS') ?>/style.css?ver=<?= $js_ts ?>">
  <link rel="stylesheet" href="<?= $this->config->item('CDN_CSS') ?>/style.portable.css?ver=<?= $js_ts ?>">
  <link rel="stylesheet" href="<?= $this->config->item('CDN_CSS') ?>/style.medium.css?ver=<?= $js_ts ?>">

</head>

<body id="manobo_body_<?= $this->security->get_csrf_hash() ?>" >

<div class="manobo_loader_bar" id="manobo_loader_bar"></div>
<div id="manobo_top_bar_<?= $this->security->get_csrf_hash() ?>" class="manobo_top_bar">
  <div class="panel">

    <div style="display:table;width:100%;height:100%;">
      <div style="display:table-row;">
        <div  style="display:table-cell;white-space:nowrap;vertical-align:middle;"><div class="item" OnClick="manobo_load_page('<?= $this->config->item('base_url') ?>');" ><span class='label' style="font-weight:bold;font-size:12pt;">indigenousPH</span><span class='symbol'>Home</span></div></div>
        <div  style="display:table-cell;width:100%;">&nbsp;</div>
<?php
if($this->session->userdata('username')) {
?>
        <div  style="display:table-cell;white-space:nowrap;vertical-align:middle;"><div class="item">[1]</div></div>
        <div  style="display:table-cell;white-space:nowrap;vertical-align:middle;"><div class="item">Profile</div></div>
<?php
} else {

?>
        <div  style="display:table-cell;white-space:nowrap;vertical-align:middle;"><div class="item" OnClick="manobo_load_page('<?= $this->config->item('base_url') ?>/register');" >Register</div></div>
        <div  style="display:table-cell;white-space:nowrap;vertical-align:middle;"><div class="item" OnClick="manobo_load_page('<?= $this->config->item('base_url') ?>/login');" >Log-in</div></div>
<?php

}
?>
      </div>
    </div>
  </div>

</div>

<div style="margin-top:40px;"></div>

<div class='manobo_notification_message_bar' id="manobo_notification_message_bar">
  <div style="width:100%;max-width:1024px;margin:auto;">
    <div style="float:right;position:relative;top:10px;right:10px;background:#fff;color:#4AA4D5;font-size:8pt;font-weight:bold;padding-left:10px;padding-right:10px;padding-top:2px;padding-bottom:2px;cursor:pointer;" OnClick="$('#manobo_notification_message_bar').slideUp();">Hide</div>
    <div style="display:table;width:100%;height:60px;">
      <div style="display:table-row;">
        <div style="display:table-cell;width:100%;height:100%;vertical-align:middle;text-align:left;">
          <div id="manobo_notification_message" style="width:95%;margin:auto;font-weight:bold;font-size:8pt;">test</div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="manobo_wrapper">

  <div id="manobo_container_<?= $this->security->get_csrf_hash() ?>" class="manobo_container"><?= @($content) ?></div>


</div>

<div class="manobo_footer">
  <div style="display:table;width:100%;max-width:1024px;height:100%;margin:auto;">
    <div style="display:table-row;">
      <div style="display:table-cell;width:200px;vertical-align:top;">
        <ul>
          <li><a OnClick="manobo_load_page('<?= base_url() ?>page/about_us');">Who are we?</a></li>
          <li><a OnClick="manobo_load_page('<?= base_url() ?>page/contact_us');">Contact us</a></li>
          <li><a OnClick="manobo_load_page('<?= base_url() ?>page/terms_and_condition');">Terms and Condition</a></li>
        </ul>
      </div>
      <div style="display:table-cell;width:auto;"></div>
      <div style="display:table-cell;width:200px;"></div>
    </div>
  </div>
</div>
<div id="fb-root"></div>
<script type='text/javascript'>
var manobo_base_url = '<?= SERVER_URL ?>';
var manobo_webroot_path = '<?= WEBROOT_PATH ?>';
var manobo_csrf_token = '<?= $this->security->get_csrf_token_name() ?>';
var manobo_csrf_hash = '<?= $this->security->get_csrf_hash() ?>';
var manobo_username = '<?= $username ?>';
var manobo_username_uuid = '<?= $username_uuid ?>';
var manobo_loader = '';
</script>
<script src="<?=  $this->config->item('CDN_JQUERY') ?>?ver=<?= $js_ts ?>" type='text/javascript'></script>
<script src="<?=  $this->config->item('CDN_JQUERYUI_JS') ?>?ver=<?= $js_ts ?>" type='text/javascript'></script>
<script src="<?=  $this->config->item('CDN_JS') ?>/jquery.crypt.js?ver=<?= $js_ts ?>" type='text/javascript'></script>
<script src="<?=  $this->config->item('CDN_JS') ?>/jquery.timeago/jquery.timeago.js?ver=<?= $js_ts ?>" type='text/javascript'></script>
<script src="<?=  $this->config->item('CDN_JS') ?>/manobo.common.js?ver=<?= $js_ts ?>" type='text/javascript'></script>
<script src="<?=  $this->config->item('CDN_JS') ?>/manobo.static.js?ver=<?= $js_ts ?>" type='text/javascript'></script>
<!-- <script src="<?=  $this->config->item('CDN_JS') ?>/manobo.facebook.js?ver=<?= $js_ts ?>" type='text/javascript'></script>  -->
<script type='text/javascript'>
$(function() {



});
</script>
</body>
</html>
