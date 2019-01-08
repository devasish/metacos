<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'METACOS');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $this->fetch('title'); ?>
        </title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('material-dashboard');
        echo $this->Html->css('/jquery-ui-1.12.1.custom/jquery-ui.min');
        echo $this->Html->css('/jquery-ui-1.12.1.custom/jquery-ui.theme.min');
        echo $this->Html->css('custom-style');
        echo $this->Html->css('datepicker3');
        echo $this->Html->css('styles');
        echo $this->Html->css('menu');
        echo $this->Html->css('jquery-ui.min');

        echo $this->Html->script('/js/core/jquery.min');
        echo $this->Html->script('/js/core/bootstrap-material-design.min');
        echo $this->Html->script('/js/core/popper.min');
        
        echo $this->Html->script('/jquery-ui-1.12.1.custom/jquery-ui.min');
        echo $this->Html->script('/js/plugins/bootstrap-notify');
        echo $this->Html->script('/js/plugins/chartist.min');
        echo $this->Html->script('/js/plugins/perfect-scrollbar.jquery.min');
        echo $this->Html->script('/js/material-dashboard');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <script type="text/javascript">
            var SITE_URL = '<?= SITE_URL ?>';
        </script>
        
    </head>
    <body>
        <div class="wrapper login-bg">
            <div class="content">
                <div class="container-fluid">
                    <?php echo $this->fetch('content'); ?>
                    <?php echo $this->Session->flash(); ?>
                </div>
            </div>
        </div><!-- end of wrapper -->
    </body>
</html>
