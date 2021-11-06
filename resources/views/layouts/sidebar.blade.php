<!-- Navbar Vertical -->

<aside
    class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
    <div class="navbar-vertical-container">
        <div class="navbar-vertical-footer-offset">
            <div class="navbar-brand-wrapper justify-content-between">
                <!-- Logo -->


                <a class="navbar-brand" href="{{ route('dashboard.index') }}" aria-label="Front">
                    <img class="navbar-brand-logo" src="" alt="" >
                    <img class="navbar-brand-logo-mini" src="" alt="">
                </a>

                <!-- End Logo -->

                <!-- Navbar Vertical Toggle -->
                <button type="button"
                    class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
                    <i class="tio-clear tio-lg"></i>
                </button>
                <!-- End Navbar Vertical Toggle -->
            </div>

            <!-- Content -->
            <div class="navbar-vertical-content">
                <ul class="navbar-nav navbar-nav-lg nav-tabs">
                    <!-- Dashboards -->
                    <li class="nav-item">
                        <a class="js-nav-tooltip-link nav-link"
                            href="{{ route('dashboard.index') }}" title="Dashboards">
                            <i class="tio-home-vs-1-outlined nav-icon"></i>
                            <span
                                class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                            Painel de controle
                             </span>
                        </a>

                        
                    </li>
                    <li class="nav-item">
                        <a class="js-nav-tooltip-link nav-link"
                            href="{{ route('rooms.index') }}" title="Salas">
                            <i class="tio-dashboard-vs-outlined nav-icon"></i>
                            <span
                                class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                            Salas
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="js-nav-tooltip-link nav-link"
                            href="{{ route('rooms.index') }}" title="Salas">
                            <i class="tio-calendar nav-icon"></i>
                            <span
                                class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                            Agendamentos
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="js-nav-tooltip-link nav-link"
                            href="{{ route('rooms.index') }}" title="Salas">
                            <i class="tio-play nav-icon"></i>
                            <span
                                class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                            Gravações
                            </span>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="js-nav-tooltip-link nav-link"
                            href="{{ route('rooms.index') }}" title="Salas">
                            <i class="tio-clock nav-icon"></i>
                            <span
                                class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                            Agendar reunião
                            </span>
                        </a>
                    </li>
                    <!-- End Dashboards -->

                      
                        <li class="nav-item">
                            <small class="nav-subtitle" title="Pages">DOCUMENTOS</small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li>
                        <li class="nav-item">
                            <a class="js-nav-tooltip-link nav-link"
                                href="{{ route('rooms.index') }}" title="Salas">
                                <i class="tio-book nav-icon"></i>
                                <span
                                class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                Termos de contrato
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="js-nav-tooltip-link nav-link"
                                href="{{ route('rooms.index') }}" title="Salas">
                                <i class="tio-book-opened nav-icon nav-icon"></i>
                                <span
                                class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                Manual do usuario
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="js-nav-tooltip-link nav-link"
                                href="{{ route('rooms.index') }}" title="Salas">
                                <i class="tio-pdf-icon nav-icon"></i>
                                <span
                                class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                Fatura da licença
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="js-nav-tooltip-link nav-link"
                                href="{{ route('rooms.index') }}" title="Salas">
                                <i class="tio-room nav-icon"></i>
                                <span
                                class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                Suporte técnico
                                </span>
                            </a>
                        </li>
                        
                </ul>
            </div>
            <!-- End Content -->

            
        </div>
    </div>
</aside>



<!-- End Navbar Vertical -->