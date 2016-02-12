<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Meu Cronograma';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!--<?= $this->Html->css('base.css') ?>-->
    <!--<?= $this->Html->css('cake.css') ?>-->

	<!-- cronograma css -->
	<?= $this->Html->css('materialize/materialize.min.css')?>
	<?= $this->Html->css('style.css')?>
  <?= $this->Html->css('icons.css')?>
  <?= $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons')?>

	<!-- end cronograma css -->
	<!-- cronograma js -->
	<?= $this->Html->script('jquery/dist/jquery.min.js')?>
	<?= $this->Html->script('materialize.min.js')?>
	<!-- end cronograma js -->

  <?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
	<?= $this->fetch('img')?>
	<?= $this->fetch('script') ?>
</head>
    <!--
		<?php #$this->Flash->render() ?>
    <h1><a href=""><?php # $this->fetch('title') ?></a></h1>
    <?php #$this->fetch('content') ?>
    -->
    <body class="">
    <!-- HEADER -->
    <header class="navbar-fixed">
      <nav class="green accent-3">
        <div class="nav-wrapper">
          <a href="#" data-target="mob" class="sidenav-trigger "> <i class="material-icons"> menu</i></a>
          <a href="#" class="brand-logo">Logo</a>
          <!-- HEADER/NAV LINKS -->
          <ul class="right hide-on-med-and-down">
            <li><a href="#"><i class="mdi-social-notifications-none"></i></a></li>
            <li><a href="#"><i class="mdi-navigation-more-vert"></i></a></li>
          </ul>
          <!-- END HEADER/NAV LINKS -->
        </div>
      </nav>
    </header>
    <!-- HEADER/NAV MOBILE -->
    <ul class="sidenav my-link-header" id="mob">
        <li>
          <div class="user-view" >
              <div class="background">
                  <img src="img/office.jpg" alt="Image Backgroud">
              </div>
              <a href="#user">
                <img src="img/goku.jpg" alt="Image Profile" class="circle ">
              </a>
              <a href="#name">
                <span class="white-text name">Tiago Bandeira </span>
              </a>
              <a href="#name">
                  <span class="white-text email">tiagobandeirabarros@gmail.com</span>
              </a>
          </div>
        </li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header">Quarto<i class="mdi-action-dashboard"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#primeiro">Primeiro <i class="mdi-device-add-alarm"></i></a></li>
                  <li><a href="#primeiro">Evento<i class="mdi-device-battery-alert"></i></a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li><a href="componentes.html">Componentes<i class="material-icons">language</i></a></li>
        <li><a href="#segundo">Segundo<i class="material-icons">event</i></a></li>
        <li><a href="#terceiro">Terceiro<i class="material-icons">create_new_folder</i></a></li>
    </ul>
    <!-- END HEADER/NAV MOBILE -->
    <!-- HEADER/NAV PC -->
    <div id="nav"  >
      <aside  class="my-nav left grey lighten-5 z-depth-1 hide-on-med-and-down">
        <ul id="slide-out" class="sidenav sidenav-fixed  my-link-header">
          <li class="profile">
            <div class="user-view" >
                <div class="background">
                    <!-- <img src="img/office.jpg" alt="Image Backgroud"> -->
                    <?= $this->Html->image('office.jpg');?>
                </div>
                <a href="#user">
                  <!--<img src="img/goku.jpg" alt="Image Profile" class="circle ">-->
                  <?= $this->Html->image('goku.jpg', ['class' => 'circle']);?>
                </a>
                <a href="#name">
                  <span class="white-text name">Tiago Bandeira </span>
                </a>
                <a href="#name">
                    <span class="white-text email">tiagobandeirabarros@gmail.com</span>
                </a>
            </div>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header">Quarto<i class="mdi-action-dashboard"></i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="#primeiro">Primeiro <i class="mdi-device-add-alarm"></i></a></li>
                    <li><a href="#primeiro">Evento<i class="mdi-device-battery-alert"></i></a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <li>
            <a href="componentes.html" >Componentes<i class="mdi-action-language"></i></a>
          </li>
          <li><a href="tables.html">Tables<i class="mdi-action-list"></i></a></li>
          <li class="no-padding"><a href="#" class="collapsible-header">Quarto<i class="mdi-action-dashboard"></i></a></li>
        </ul>
      </aside>
    </div>
    <!-- END HEADER/NAV PC -->
    <!-- END HEADER -->

    <!-- MAIN -->
    <main >
        <!--
        <div class="content1  hide-on-med-and-down red">
        </div>-->
        <!-- MAIN CONTENT -->
        <div class="my-content">
          <div class="row">
            <div class="col col s12 m12 l12">
            <h3 class="green-text"><a href="" class="green-text"><?= $this->fetch('title') ?></a></h3>
            <div class="divider"></div>
            </div>
            <div class="col col s12 m12 l10 offset-l1">
                <!--  PAINEL  -->
                <div class="row">
                  <div class="col col s12 m12 l12">
                    <div class="card-panel teal">
                      <span class="white-text">Este é um simples exemplo de template adiministrativivo criado por Tiago Bandeira
                        para gerenciar um sistema de Plano de Estudos. Este exemplo ainda está na faze de desenvolvimento
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END  PAINEL -->
            </div>
            <div class="col col s12 m12 l10 offset-l1">
                <?= $this->Flash->render() ?>
                <h4  class="green-text">Estudar</h4>
                <?= $this->fetch('content') ?>
            </div>
          </div>
        </div>
        <!-- END MAIN CONTENT -->
    </main>
    <!-- END MAIN -->
    <!-- FOOTER -->
    <footer class="page-footer   green accent-3">
      <div class="footer-copyright">
        <div class="container">
          <center>
            © 2018 Tiago Bandeira 
          </center>
        </div>
      </div>
    </footer>
    <!-- FOOTER -->

    <!--JavaScript at end of body for optimized loading
    <script type="text/javascript" src="js/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    -->
    <script>
        //M.AutoInit(); INICIAR TODOS OS COMPONENTES
        $('.sidenav').sidenav();
        $('.collapsible').collapsible();
    </script>
  </body>
<script>
    $('.sidenav').sidenav();
</script>
</html>
