<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');




?>

<div style="width:100%;">
  <div style="min-height:600px;max-width:1024px;margin:auto;border-left:1px solid #dfdfdf;border-right:1px solid #dfdfdf;">

    <div style="display:table;background: #ffffff;">
      <div style="display:table-row;">
        <div style="display:table-cell;width:auto;width:100%;vertical-align:top;">

          <div style="padding:50px;">
            <div style="padding-top:5px;padding-bottom:15px;border-bottom:1px solid #ccc;">
              <div class="page_headline"><?= @($page_title) ?></div>
            </div>
            <div style="padding-top:5px;padding-bottom:5px;">
              <div><span class="page_date"><?= @($page_date) ?></span> | <span class="page_author"><?= @($page_author) ?></span> | <span class="page_views"><?= @($page_views) ?></span></div>
            </div>
            <div style="padding-top:10px;padding-bottom:10px;">
              <div class="page_teaser"><?= @($page_teaser) ?></div>
            </div>
            <div style="padding-top:10px;padding-bottom:60px;min-height:400px;">
              <div class="page_paragraph"><?= @($page_body) ?></div>
            </div>

          </div>

        </div>
        <div style="display:table-cell;width:300px;vertical-align:top;">
          <div style="width:100%;min-height:400px;background:#fff;">
            &nbsp;
          </div>
        </div>
      </div>
    </div>


  </div>
</div>
