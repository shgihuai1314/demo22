<?php
/**
 * The admin view file of owt module of XXB.
 *
 * @copyright   Copyright 2009-2020 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZOSL (https://zpl.pub/page/zoslv1.html)
 * @author      Wenrui LI <liwenrui@easycorp.ltd>
 * @package     owt
 * @version     $Id$
 * @link        https://xuanim.com
 */
?>
<?php
include '../../common/view/header.html.php';
?>
<div class='panel'>
  <div class='panel-heading'>
    <strong><?php echo $lang->owt->settings;?></strong>
  </div>
  <form method='post' id='owtAdminForm' class='form-ajax<?php if($enabled) echo ' owt-enabled';?>'>
    <table class='table table-form'>
      <tr>
        <th class="w-120px"><?php echo $lang->owt->enabled;?></th>
        <td class="w-400px">
          <?php if($type != 'edit'): ?>
          <div class="checkbox-primary disabled <?php if($enabled) echo 'checked';?>">
            <label><?php echo $lang->owt->enabledTip;?></label>
          </div>
          <?php else: ?>
          <div class="checkbox-primary">
            <input type="checkbox" name="enabled" id='enabled' value="true" <?php if($enabled) echo 'checked';?> <?php if($type != 'edit') echo 'disabled';?>>
            <label for='enabled'><?php echo $lang->owt->enabledTip;?></label>
          </div>
          <?php endif; ?>
        </td>
        <td></td>
      </tr>
      <?php if($type == 'edit' || $enabled): ?>
      <tr class='owt-row'>
        <th class="w-120px"><?php echo $lang->owt->serverAddr;?></th>
        <td class="w-400px code">
          <?php if($type == 'edit'){?>
            <?php echo html::input('serverAddr', $serverAddr, "class='form-control'");?>
          <?php } else { echo (empty($serverAddr) ? $lang->owt->notset : $serverAddr); }?>
        </td>
        <td></td>
      </tr>
      <tr class='owt-row'>
        <th class="w-120px"><?php echo $lang->owt->apiPort;?></th>
        <td class="w-400px code">
          <?php if($type == 'edit'){?>
            <input type="number" name="apiPort" id="apiPort" <?php echo empty($apiPort) ? '' : "value='$apiPort'";?> min="1" max="65535" class="form-control">
          <?php } else { echo (empty($apiPort) ? $lang->owt->notset : $apiPort); }?>
        </td>
        <td></td>
      </tr>
      <tr class='owt-row'>
        <th class="w-120px"><?php echo $lang->owt->mgmtPort;?></th>
        <td class="w-400px code">
          <?php if($type == 'edit'){?>
            <input type="number" name="mgmtPort" id="mgmtPort" <?php echo empty($mgmtPort) ? '' : "value='$mgmtPort'";?> min="1" max="65535" class="form-control">
          <?php } else { echo (empty($mgmtPort) ? $lang->owt->notset : $mgmtPort); }?>
        </td>
        <td></td>
      </tr>
      <tr class='owt-row'>
        <th class="w-120px"><?php echo $lang->owt->serviceId;?></th>
        <td class="w-400px code">
          <?php if($type == 'edit'){?>
            <?php echo html::input('serviceId', $serviceId, "class='form-control'");?>
          <?php } else { echo (empty($serviceId) ? $lang->owt->notset : $serviceId); }?>
        </td>
        <td></td>
      </tr>
      <tr class='owt-row'>
        <th class="w-120px vtop"><?php echo $lang->owt->serviceKey;?></th>
        <td class="w-400px code warpped">
          <?php if($type == 'edit'){?>
            <?php echo html::textarea('serviceKey', $serviceKey, "class='form-control' style='height:100px;'");?>
          <?php } else { echo (empty($serviceKey) ? $lang->owt->notset : $serviceKey); }?>
        </td>
        <td></td>
      </tr>
      <?php endif; ?>
      <tr>
        <th></th>
        <td colspan='2'>
          <?php echo $type == 'edit'? html::submitButton() : html::linkButton($lang->edit, helper::createLink('owt', 'admin', 'type=edit'), 'btn btn-primary');?>
        </td>
      </tr>
    </table>
  </form>
</div>
<style>
.owt-row {display: none}
#owtAdminForm.owt-enabled .owt-row {display: table-row}
</style>
<script>
$(function()
{
    $.setAjaxForm('#owtAdminForm');
    $('#enabled').on('change', function()
    {
        $('#owtAdminForm').toggleClass('owt-enabled', $('#enabled').is(':checked'));
    });
});
</script>
<?php include '../../common/view/footer.html.php';?>
