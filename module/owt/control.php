<?php
/**
 * The control file of owt module of XXB.
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
class owt extends control
{
    /**
     * View and set owt configuration.
     *
     * @param  string $type type could be 'edit'
     * @access public
     * @return void
     */
    public function admin($type = '')
    {
        if(!empty($_POST))
        {
            $result = $this->owt->setConfiguration($_POST);
            $this->send($result);
        }

        $owt = $this->owt->getConfiguration();

        $this->view->type       = $type;
        $this->view->enabled    = $owt->enabled == 'true';
        $this->view->serviceId  = $owt->serviceId;
        $this->view->serviceKey = $owt->serviceKey;
        $this->view->serverAddr = $owt->serverAddr;
        $this->view->apiPort    = $owt->apiPort;
        $this->view->mgmtPort   = $owt->mgmtPort;
        $this->display();
    }
}
