<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>
<style>
.splash_screen {

  min-height:800px;
  height:100%;

  background:#000000;

  background: url(<?= $this->config->item('CDN_IMAGES')  ?>/06070147-3.jpg) no-repeat top center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

  min-height: 100%;
  min-width: 1024px;

  /* Set up proportionate scaling */
  width: 100%;
  height: auto;

  /* Set up positioning */
  position: fixed;
  top: 0;
  left: 0;

  z-index:10000;

  display:none;
}

.banner_medium {
  font-size:20pt;
  font-weight:bold;
}

.banner_large {
  font-size:35pt;
  font-weight:bold;
}

.tw {
  color:#F0F0F0;
  text-shadow:0px 0px 10px #000000;
}
</style>
<div class="splash_screen">
  <div style="margin-top:60px;"></div>
  <div style="width:100%;height:100%;">
    <div style="display:table;width:100%;max-width:1024px;margin:auto;">
      <div style="display:table-row;">
        <div style="display:table-cell;height:300px;vertical-align:middle;">
          &nbsp;
        </div>
      </div>
      <div style="display:table-row;">
        <div style="display:table-cell;height:100px;vertical-align:middle;text-align:right;">

          <div style="width:100%;max-width:500px;float:right;">
            <div class="banner_large tw">indigenous.ph</div>
            <div class="banner_medium tw">Crowdsourcing for a Cause</div>
          </div>

        </div>
      </div>
      <div style="display:table-row;">
        <div style="display:table-cell;height:100px;vertical-align:middle;text-align:right;">

          <div style="width:100%;max-width:300px;float:right;">
            <div style="background:#FFFFFF;padding:10px;cursor:pointer;" OnClick="$('.splash_screen').hide();">
              <div style="width:100%;height:100%;text-align:center;font-weight:bold;font-size:20pt;">Click to Enter</div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- BANNER SECTION START -->
<div style="width:100%;background:#DFDFDF;">
  <div style="width:100%;max-width:1024px;margin:auto;background:#FFFFFF;">
    <div style="width:100%;min-height:350px;max-height:400px; background: url(<?= $this->config->item('CDN_IMAGES')  ?>/06070164.jpg) no-repeat center center scroll;-webkit-background-size:100%;-moz-background-size:100%;background-size:100%;"></div>
  </div>
</div>
<!-- BANNER SECTION END -->
<!-- PAGE SECTION START -->
<div style="width:100%;">
  <div style="width:100%;max-width:1024px;margin:auto;">


    <div style="width:100%;height:80px;background:#CCCCCC;display:table;">
      <div style="display:table-cell;text-align:center;vertical-align:middle;width:33%;">
        <div style="font-size:20pt;font-weight:bold;color:#d6513b;text-shadow:0px 0px 5px #99A;">12,000</div>
        <div style="font-size:10pt;font-weight:bold;color:#EFEFEF;">Volunteers</div>
      </div>
      <div style="display:table-cell;text-align:center;vertical-align:middle;width:33%;">
        <div style="font-size:20pt;font-weight:bold;color:#d6513b;text-shadow:0px 0px 5px #99A;">230</div>
        <div style="font-size:10pt;font-weight:bold;color:#EFEFEF;">Causes</div>
      </div>
      <div style="display:table-cell;text-align:center;vertical-align:middle;width:33%;">
        <div style="font-size:20pt;font-weight:bold;color:#d6513b;text-shadow:0px 0px 5px #99A;">30</div>
        <div style="font-size:10pt;font-weight:bold;color:#EFEFEF;">Groups</div>
      </div>
    </div>


  </div>
</div>
<!-- FEATURE SECTION END -->
<div style="width:100%;">
  <div style="width:100%;max-width:1024px;margin:auto;">
    <div style="width:100%;min-height:500px;display:table;">
      <div style="display:table-cell;vertical-align:top;width:50%;">


        <div style="width:100%;margin:auto;padding-top:40px;">

          <div style="display:table;width:100%;background:#dfdfdf;">

            <div style="display:table-row;">
              <div style="display:table-cell;width:150px;vertical-align:middle;text-align:center;border-bottom:1px solid #efefef;">
                <div style="padding:5px;">
                  <div style="font-size:25pt;font-weight:bold;color:#444444;">100</div>
                  <div style="font-size:9pt;font-weight:bold;color:#FFFFFF;">Trees</div>
                </div>
              </div>
              <div style="display:table-cell;vertical-align:middle;border-bottom:1px solid #efefef;">
                <div style="padding:5px;">
                  <div><b>Project para sa kalikasan</b></div>
                  <div>Tree planting in San Mateo Rizal</div>
                </div>
              </div>
            </div>

            <div style="display:table-row;">
              <div style="display:table-cell;width:150px;vertical-align:middle;text-align:center;border-bottom:1px solid #efefef;">
                <div style="padding:5px;">
                  <div style="font-size:25pt;font-weight:bold;color:#444444;">500</div>
                  <div style="font-size:9pt;font-weight:bold;color:#FFFFFF;">Kids</div>
                </div>
              </div>
              <div style="display:table-cell;vertical-align:middle;border-bottom:1px solid #efefef;">
                <div style="padding:5px;">
                  <div><b>Project School Supplies in Baco</b></div>
                  <div>School Supplies and Toys in Baco, Mindoro</div>
                </div>
              </div>
            </div>

            <div style="display:table-row;">
              <div style="display:table-cell;width:150px;vertical-align:middle;text-align:center;border-bottom:1px solid #efefef;">
                <div style="padding:5px;">
                  <div style="font-size:25pt;font-weight:bold;color:#444444;">250</div>
                  <div style="font-size:9pt;font-weight:bold;color:#FFFFFF;">Kids</div>
                </div>
              </div>
              <div style="display:table-cell;vertical-align:middle;border-bottom:1px solid #efefef;">
                <div style="padding:5px;">
                  <div><b>Project School Supplies in Sta Cruz</b></div>
                  <div>School Supplies for Bulacan Elementary School </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
      <div style="display:table-cell;vertical-align:top;width:50%;">

      </div>
    </div>
  </div>
</div>
<!-- FEATURE SECTION END -->
