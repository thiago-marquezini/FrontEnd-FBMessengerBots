<!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="../assets_dash/images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><? echo $SystemUser->first_name . ' ' .  $SystemUser->last_name; ?></p>
                  <div>
                    <small class="designation text-muted">BOT Designer</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>

              <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?
                    foreach ($UserBots as $UserBot)
                    {
                      if ($UserBot->id == 1) 
                      {
                        echo $UserBot->name;
                        break;
                      }
                    }
                  ?>
              </button>

              <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">

                <?
                    foreach ($UserBots as $UserBot)
                    {
                      echo '<a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>' . $UserBot->name . '</a>';
                    }
                  ?>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Criar Bot</a>
                <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Listar Bots</a>
              </div>

            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link">
              <div style="margin: 0 auto;">
                <button type="button" class="btn btn-outline-primary btn-fw"><i class="mdi mdi-file-document"></i>Criar Bot</button>
              </div>
            </a>
          </li>
          

          <li class="nav-item view" view="dashboard">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-laptop-chromebook"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-magnet-on"></i>
              <span class="menu-title">Essenciais</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item view" view="greetings">
                  <a class="nav-link">Boas Vindas</a>
                </li>
                <li class="nav-item view" view="interactmenu">
                  <a class="nav-link">Menu Interativo</a>
                </li>
                <li class="nav-item view" view="unhandled">
                  <a class="nav-link">Não Respondidas</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item view" view="autoreplies">
            <a class="nav-link">
              <i class="menu-icon mdi mdi-message-text-outline"></i>
              <span class="menu-title">Auto Respostas</span>
            </a>
          </li>

          <li class="nav-item view" view="conversations">
            <a class="nav-link">
              <i class="menu-icon mdi mdi-message-bulleted"></i>
              <span class="menu-title">Conversas</span>
            </a>
          </li>

          <li class="nav-item view" view="analytics">
            <a class="nav-link">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Estatísticas</span>
            </a>
          </li>

          <li class="nav-item view" view="webhook">
            <a class="nav-link">
              <i class="menu-icon mdi mdi-source-fork"></i>
              <span class="menu-title">WebHook</span>
            </a>
          </li>

          <li class="nav-item view" view="api">
            <a class="nav-link">
              <i class="menu-icon mdi mdi-weather-lightning"></i>
              <span class="menu-title">Bot API</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-book-open-variant"></i>
              <span class="menu-title">Manuais de Uso</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/blank-page.html"> Auto Respostas </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/login.html"> Tipos de Auto Respostas </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/register.html"> Menu Interativo </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-404.html"> Não Respondidas </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-500.html"> API & WebHook </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->