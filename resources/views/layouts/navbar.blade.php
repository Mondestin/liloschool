
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="#" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('assets/images/logo2.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="22">
            </span>
        </a>
        <a href="#" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('assets/images/logo2.png')}}" alt="" height="52">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

<div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ routeActive('home') }}" href="/home"  role="button">
                        <i class="ph-gauge"></i> <span data-key="t-dashboards">Tableau de bord</span>
                    </a>

                </li>
                <!-- ELEVES -->

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed {{ routeMenuActive('students') }}" href="#Elèves" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                    <i class="ph-graduation-cap"></i> <span data-key="t-layouts">Elèves</span>
                    </a>
                    <div class="collapse menu-dropdown {{ openSubMenu('primary/students') }}" id="Elèves">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/primary/students"  class="nav-link {{ routeActive('primary/students') }}">Primaire</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"  class="nav-link">Collège</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"  class="nav-link">Lycée</a>
                            </li>
                        </ul>
                    </div>
                </li>
              
                <!-- ENSEIGNANTS -->

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#Enseignants" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                         <i class="ph-users-three"></i> <span data-key="t-layouts">Enseignants</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Enseignants">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#"  class="nav-link">Primaire</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"  class="nav-link">Collège</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"  class="nav-link">Lycée</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- PARENTS -->

               <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#Parents" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ph-users"></i> <span data-key="t-layouts">Parents</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Parents">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#"  class="nav-link">Primaire</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"  class="nav-link">Collège</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"  class="nav-link">Lycée</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- MATIERES -->
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#Matières" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ph-books"></i> <span data-key="t-layouts">Matières</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Matières">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#"  class="nav-link">Primaire</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"  class="nav-link" >Collège</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"  class="nav-link">Lycée</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- EMPLOIS DU TEMPS -->
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#Emplois" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ph-calendar"></i> <span data-key="t-layouts">Emplois du Temps</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Emplois">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#"  class="nav-link">Primaire</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"  class="nav-link" >Collège</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"  class="nav-link">Lycée</a>
                            </li>
                        </ul>
                    </div>
                </li>
            <!-- DEVOIRS-->
            <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#Devoirs" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-file-list-3-line"></i> <span data-key="t-layouts">Devoirs</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Devoirs">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#"  class="nav-link" data-key="t-horizontal">Primaire</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"  class="nav-link" data-key="t-detached">Collège</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"  class="nav-link" data-key="t-detached">Lycée</a>
                            </li>
                        </ul>
                    </div>
            </li>

            <!-- EXAMENS -->

            <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#Examens" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ph-folders"></i> <span data-key="t-layouts">Examens</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Examens">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#"  class="nav-link" data-key="t-horizontal">Primaire</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"  class="nav-link" data-key="t-detached">Collège</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"  class="nav-link" data-key="t-detached">Lycée</a>
                            </li>
                        </ul>
                    </div>
            </li>
            
            <!-- NOTES ET BULLETINS -->
            <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#Notes" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ph-files"></i> <span data-key="t-layouts">Notes et Bulletins</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Notes">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"> 
                                <a href="#stNotes" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="stNotes" data-key="t-stNotes">Notes</a>
                                    <div class="menu-dropdown collapse" id="stNotes" style="">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Primaire</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Collège</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Lycée</a>
                                            </li>
                                        </ul>
                                    </div>
                            </li>
                            <li class="nav-item"> 
                                <a href="#stBulletins" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="stBulletins" data-key="t-stBulletins">Bulletins</a>
                                    <div class="menu-dropdown collapse" id="stBulletins" style="">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Primaire</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Collège</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Lycée</a>
                                            </li>
                                        </ul>
                                    </div>
                            </li>
                        </ul>
                 </div>
               </li>

                <!-- PAIEMENTS ET CAISSES-->

              <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#Paiements" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ph-credit-card"></i> <span data-key="t-layouts">Paiements et Caisse</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Paiements">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#"  class="nav-link">Paiements</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"  class="nav-link">Caisse</a>
                            </li>
                        </ul>
                    </div>
              </li>
              <!-- UTILISATEURS-->
              <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#Utilisateurs" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ph-user-gear"></i> <span data-key="t-layouts">Utilisateurs</span>
                    </a>
                    
              </li>
                  <!-- PARAMETRES-->
              <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#Paramètres" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ph-gear"></i> <span data-key="t-layouts">Paramètres</span>
                    </a>
              </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>