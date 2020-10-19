<?php
 die();
?>

10:44:30 Uncaught Error: Call to undefined function printSQL() in D:\phpStudy\PHPTutorial\WWW\zentaopms\module\block\model.php:144
Stack trace:
#0 D:\phpStudy\PHPTutorial\WWW\zentaopms\module\block\control.php(210): blockModel->getBlockList('project')
#1 D:\phpStudy\PHPTutorial\WWW\zentaopms\framework\base\control.class.php(840): block->dashboard('project')
#2 D:\phpStudy\PHPTutorial\WWW\zentaopms\module\project\view\index.html.php(18): baseControl->fetch('block', 'dashboard', Array)
#3 D:\phpStudy\PHPTutorial\WWW\zentaopms\framework\control.class.php(216): include('D:\\phpStudy\\PHP...')
#4 D:\phpStudy\PHPTutorial\WWW\zentaopms\framework\base\control.class.php(647): control->parseDefault('project', 'index')
#5 D:\phpStudy\PHPTutorial\WWW\zentaopms\framework\base\control.class.php(874): baseControl->parse('project', 'index')
#6 D:\phpStudy\PHPTutorial\WWW\zentaopms\module\project\control.php(53): baseControl->display()
#7 D:\phpStudy\PHPTutorial\WWW\zentaopms\framework\base\router.class.php(1712): project->index('no', in D:\phpStudy\PHPTutorial\WWW\zentaopms\module\block\model.php on line 144 when visiting /index.php?m=project&amp;f=index&amp;locate=no

10:45:33 Uncaught Error: Call to a member function printSQL() on array in D:\phpStudy\PHPTutorial\WWW\zentaopms\module\block\model.php:143
Stack trace:
#0 D:\phpStudy\PHPTutorial\WWW\zentaopms\module\block\control.php(210): blockModel->getBlockList('project')
#1 D:\phpStudy\PHPTutorial\WWW\zentaopms\framework\base\control.class.php(840): block->dashboard('project')
#2 D:\phpStudy\PHPTutorial\WWW\zentaopms\module\project\view\index.html.php(18): baseControl->fetch('block', 'dashboard', Array)
#3 D:\phpStudy\PHPTutorial\WWW\zentaopms\framework\control.class.php(216): include('D:\\phpStudy\\PHP...')
#4 D:\phpStudy\PHPTutorial\WWW\zentaopms\framework\base\control.class.php(647): control->parseDefault('project', 'index')
#5 D:\phpStudy\PHPTutorial\WWW\zentaopms\framework\base\control.class.php(874): baseControl->parse('project', 'index')
#6 D:\phpStudy\PHPTutorial\WWW\zentaopms\module\project\control.php(53): baseControl->display()
#7 D:\phpStudy\PHPTutorial\WWW\zentaopms\framework\base\router.class.php(1712): project->ind in D:\phpStudy\PHPTutorial\WWW\zentaopms\module\block\model.php on line 143 when visiting /index.php?m=project&amp;f=index&amp;locate=no
