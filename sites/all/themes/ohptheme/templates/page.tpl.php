    <div class="custom-cabecera">
      <div class="container">
        <header>
          <a class="brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
        </header>
        <nav>
          <ul class="nav">
            <li class="user">
              <a href="#" data-toggle="dropdown">
	              <img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/img/ico-clinician-m.png" alt="${sessionScope.userFullName}">
	              <strong><?php if (isset($_SESSION['user_full_name'])): print $_SESSION['user_full_name']; endif; ?></strong>
	              <span><?php if (isset($_SESSION['user_center'])): print $_SESSION['user_center']; endif; ?></span>
              </a>
              <div class="dropdown-menu">
                <ul>
                  <li><?php print l(t('Tancar sessió'), 'user/logout'); ?></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- Cabecera (final)-->
    <!-- Menú principal-->

    <nav data-spy="affix" data-offset-top="106" class="custom-menuprincipal">
      <div class="container">
        <ul class="nav">
          <li><a href="#" data-toggle="dropdown" class="users">
              <strong><?php print t('Usuaris'); ?></strong><span><?php print t('Pacients, ...'); ?></span></a>
            <div class="dropdown-menu">

              <?php if (isset($_SESSION['case_bean'])): ?>
              <div class="user_data">
                <div><strong><?php print t('Pacient actual'); ?></strong></div>
                <div class="user"><?php print $_SESSION['case_bean']->fullname; ?></div>
                <ul>
                  <li><a href="<?php echo url('ohp/ohp_case_main'); ?>?id_case=<?php if (isset($_SESSION['case_bean']->id_case)): print $_SESSION['case_bean']->id_case; endif; ?>&id_admission=<?php if (isset($_SESSION['admission_bean']->id_admission)): print $_SESSION['admission_bean']->id_admission; endif; ?>"><?php print t('Fitxa del pacient'); ?></a></li>
                </ul>
                </div>
              <div class="newpacient"><a class="brand" href="<?php echo url('ohp/ohp_case_unselect'); ?>"><?php print t('Seleccionar un <br>altre pacient'); ?></a></div>
              <?php endif; ?>
              <?php if (!isset($_SESSION['case_bean'])): ?>
              <div class="newpacient"><a class="brand" href="<?php echo url('ohp/ohp_case'); ?>"><?php print t('Seleccionar <br>pacient'); ?></a></div>
              <?php endif; ?>
            </div>
          </li>
          <li><a href="#" data-toggle="dropdown" class="tasks">
              <strong><?php print t('Avaluacions'); ?></strong><span><?php print t('Pendents, finalitzades, ...'); ?></span></a>
            <div class="dropdown-menu">

              <div class="task_links">
                <ul>
                <li><a href="<?php echo url('ohp/ohp_task_assigned_active'); ?>"><?php print t('Pendents'); ?></a></li>
                <li><a href="<?php echo url('ohp/ohp_task_assigned_done'); ?>"><?php print t('Finalitzades'); ?></a></li>
                </ul>
              </div>
            </div>
          </li>
          <li><a href="#" data-toggle="dropdown" class="report">
              <strong><?php print t('Informes'); ?></strong><span><?php print t('Tots els qüestionaris'); ?></span></a>
            <div class="dropdown-menu">

              <div class="links">
                <ul>
                  <li><a href="<?php echo url('ohp/ohp_case_report'); ?>"><?php print t('Tots els qüestionaris'); ?></a></li>
                </ul>
              </div>
            </div>
          </li>
          <li><a href="#" data-toggle="dropdown" class="community">
              <!-- botón--><strong><?php print t('Community'); ?></strong><span><?php print t('Forum, news, ranking'); ?></span></a>
            <div class="dropdown-menu">
              <!-- dropdown menu-->
              <div class="links">
                <ul>
                  <li><a href="#"><?php print t('Link'); ?> 1</a></li>
                  <li><a href="#"><?php print t('Link'); ?> 2</a></li>
                  <li><a href="#"><?php print t('Link'); ?> 3</a></li>
                  <li><a href="#"><?php print t('Link'); ?> 4</a></li>
                  <li><a href="#"><?php print t('Link'); ?> 5</a></li>
                  <li><a href="#"><?php print t('Link'); ?> 6</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li><a href="#" data-toggle="dropdown" class="more">
              <strong><?php print t('Altres'); ?></strong><span><?php print t('Item1, Item2'); ?></span></a>
            <div class="dropdown-menu">

              <div class="links">
                <ul>
                  <li><a href="#"><?php print t('Link'); ?> 1</a></li>
                  <li><a href="#"><?php print t('Link'); ?> 2</a></li>
                  <li><a href="#"><?php print t('Link'); ?> 3</a></li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="modal hide" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false"><div class="modal-header"><h1><?php print t('Processant'); ?>...</h1></div><div class="modal-body"><div class="progress progress-striped active"><div class="bar" style="width: 100%;"></div></div></div></div>
    <?php if ($messages): ?>
      <div id="messages" class="gris1">
        <div class="container">
          <?php print $messages; ?>
        </div>
      </div>
    <?php endif; ?>
    <?php print render($page['content']); ?>
    <div class="footer">
      <div class="container"><?php print t('© BDigital & Linkcare 2014'); ?></div>
    </div>