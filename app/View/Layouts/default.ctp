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
        echo $this->Html->script('print.js');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <script type="text/javascript">
            var SITE_URL = '<?= SITE_URL ?>';
        </script>
        
    </head>
    <body>
        <div class="wrapper ">
            <div class="sidebar" data-color="purple" data-background-color="white" data-image="img/sidebar-1.jpg">
                <!--
                  Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
          
                  Tip 2: you can also add an image using data-image tag
                -->
                <div class="logo">
                    <a href="#" class="simple-text logo-normal">
          <?php echo $this->Html->image("metacos.jpg", array("alt" => "Metacos", "width" => "20%"));?> METACOS
                    </a>
                </div>
                <div class="sidebar-wrapper">
                    <div class="user">
                        <div class="photo">
                            <?php echo $this->Html->image("faces/avatar.png", array("alt" => "user"));?>
                        </div>
                        <div class="user-info">
                            <a class="collapsed" data-toggle="collapse" href="#loginUserInfo" aria-expanded="false">
                                <span> <?php echo ucfirst($this->Session->read('Auth.User.username')); ?> <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="loginUserInfo" style="">
                                <ul class="nav">
                                    <li class="nav-item">
                                            <?php echo $this->Html->link('<span class="sidebar-normal">My Profile</span>', array('controller' => 'users', 'action' => 'profile', $this->Session->read('Auth.User.id')), array('escape' => FALSE, 'class' => 'nav-link')); ?>
                                    </li>
                                    <li class="nav-item">
                                            <?php echo $this->Html->link('<span class="sidebar-normal">Logout</span>', array('controller' => 'users', 'action' => 'logout'), array('escape' => FALSE, 'class' => 'nav-link')); ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav">
<!--                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="material-icons">dashboard</i>
                                <p>Dashboard </p>
                            </a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#jobSec" aria-expanded="false">              
                                <i class="material-icons">content_paste</i>
                                <p>Job Sheet <b class="caret"></b></p>
                            </a>
                            <div class="collapse" id="jobSec" style="">
                                <ul class="nav">
                                    <li class="nav-item">
                                         <?php echo $this->Html->link('<span class="sidebar-normal">Job List</span>', array('controller' => 'jobs', 'action' => 'index'), array('escape' => FALSE, 'class' => 'nav-link')); ?>
                                    </li>
                                    <li class="nav-item">
                                        <?php echo $this->Html->link('<span class="sidebar-normal">New Job</span>', array('controller' => 'jobs', 'action' => 'add'), array('escape' => FALSE, 'class' => 'nav-link')); ?>
                                    </li>
                                </ul>
                            </div>
                        </li>
<!--                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#workshopSec" aria-expanded="false">
                                <i class="material-icons">perm_data_setting</i>
                                <p>Workshop <b class="caret"></b></p>
                            </a>
                            <div class="collapse" id="workshopSec" style="">
                                <ul class="nav">
                                    <li class="nav-item"><a class="nav-link" href="#"><span class="sidebar-normal">Job List</span></a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"><span class="sidebar-normal">New Job</span></a></li>
                                </ul>
                            </div>-->
                        </li>
<!--                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#labSec" aria-expanded="false">
                                <i class="material-icons">bubble_chart</i>
                                <p>Lab <b class="caret"></b></p>
                            </a>
                            <div class="collapse" id="labSec" style="">
                                <ul class="nav">
                                    <li class="nav-item"><a class="nav-link" href="#"><span class="sidebar-normal">Job List</span></a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"><span class="sidebar-normal">New Job</span></a></li>
                                </ul>
                            </div>
                        </li>-->
<!--                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#userSec" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <p>Users <b class="caret"></b></p>
                            </a>
                            <div class="collapse" id="userSec" style="">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <?php echo $this->Html->link('<span class="sidebar-normal">Create User</span>', array('controller' => 'users', 'action' => 'add'), array('escape' => FALSE, 'class' => 'nav-link')); ?>
                                    </li>
                                    <li class="nav-item">
                                        <?php echo $this->Html->link('<span class="sidebar-normal">User List</span>', array('controller' => 'users', 'action' => 'index'), array('escape' => FALSE, 'class' => 'nav-link')); ?>
                                    </li>
                                </ul>
                            </div>
                        </li>-->
<!--                        <li class="nav-item ">
                          <a class="nav-link" href="#">
                            <i class="material-icons">settings</i>
                            <p>Control Panel</p>
                          </a>
                        </li>-->
                        <!-- <li class="nav-item ">
                           <a class="nav-link" href="./icons.html">
                             <i class="material-icons">bubble_chart</i>
                             <p>Icons</p>
                           </a>
                         </li>
                         <li class="nav-item ">
                           <a class="nav-link" href="./map.html">
                             <i class="material-icons">location_ons</i>
                             <p>Maps</p>
                           </a>
                         </li>
                         <li class="nav-item ">
                           <a class="nav-link" href="./notifications.html">
                             <i class="material-icons">notifications</i>
                             <p>Notifications</p>
                           </a>
                         </li>
                          <li class="nav-item active-pro ">
                               <a class="nav-link" href="./upgrade.html">
                                   <i class="material-icons">unarchive</i>
                                   <p>Upgrade to PRO</p>
                               </a>
                           </li> -->
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <div class="content">
                    <div class="container-fluid">
                            <?php echo $this->Session->flash(); ?>
                            <?php echo $this->fetch('content'); ?>
                    </div>
                </div>
                
                <footer class="footer">
                    <div class="container-fluid">
                        <nav class="float-left">
                            <ul>
                                <li>
                                    <a href="#">
                                        Link 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Sample Link 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Sample Link 2
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Sample Link 3
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright float-right">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                        </div>
                    </div>
                </footer>
            </div> <!-- end of main-panel -->
        </div><!-- end of wrapper -->
    </body>
</html>
