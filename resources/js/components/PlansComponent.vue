<template>
    <div class="main-content">
        <!-- Navbar -->
        <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="">
                    <img src="#" style="width: 100px; height:100px; !important">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                        aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="#">
                                    <img src="#" style="width: 100px; height:100px; !important">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse"
                                        data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <hr class="d-lg-none" />
                    <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="https://www.facebook.com/ynzoyamimeetings"
                               target="_blank" data-toggle="tooltip" data-original-title="Siga-nos no Facebook">
                                <i class="fab fa-facebook-square"></i>
                                <span class="nav-link-inner--text d-lg-none">Facebook</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="https://www.instagram.com/ynzoyamimeetings/"
                               target="_blank" data-toggle="tooltip" data-original-title="Siga-nos no Instagram">
                                <i class="fab fa-instagram"></i>
                                <span class="nav-link-inner--text d-lg-none">Instagram</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon"
                               href="https://www.youtube.com/channel/UC35dd6jD7KITFiliPCVb8jA" target="_blank"
                               data-toggle="tooltip" data-original-title="Siga-nos no Youtube">
                                <i class="fab fa-youtube-square"></i>
                                <span class="nav-link-inner--text d-lg-none">Youtube</span>
                            </a>
                        </li>
                        <li class="nav-item d-none d-lg-block ml-lg-4">
                            <a href="" class="btn btn-neutral btn-icon">
                        <span class="btn-inner--icon">
                                <i class="fas fa-door-open mr-2"></i>
                            </span>
                                <span class="nav-link-inner--text">Entrar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Planos</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                     xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="card bg-secondary border-0 mb-0">

                    <div class="card-body px-lg-5 py-lg-5">
                        <h5 class="card-title text-muted text-uppercase text-center">Gratuito</h5>
                        <h6 class="card-price text-center" style="font-size: 22pt;">0 kz<span class="period">/mês</span></h6>
                        <div class="text-center text-muted mb-4">
                            <small>(*Sem custos | Para reuniões rápidas)</small>
                        </div>
                        <div>
                            <hr>
                            <ul class="fa-ul" style="font-size: 11pt; !important">
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-check"></i></span>15 Participantes</li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-check"></i></span>Duração de 45 minutos</li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-check"></i></span>1 Sala de Reunião</li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-check"></i></span>Transmição para Redes Sociais</li>
                                <li class="text-muted pb-3" ><span class="fa-li"><i class="fas fa-times"></i></span><del>Gravações</del></li>
                                <li class="text-muted pb-3" ><span class="fa-li"><i class="fas fa-times"></i></span><del>+ 90 Participantes por
                                    Reunião</del></li>
                                <li class="text-muted pb-3" ><span class="fa-li"><i class="fas fa-times"></i></span><del>Convite e Agendamento</del></li>
                                <li class="text-muted pb-3" ><span class="fa-li"><i class="fas fa-times"></i></span><del>Gestão de Arquivos</del>
                                </li>
                                <li class="text-muted pb-3" ><span class="fa-li"><i class="fas fa-times"></i></span><del>Adicionar Colaboradores</del>
                                </li>
                                <li class="text-muted" ><span class="fa-li"><i class="fas fa-times"></i></span><del>Integração com Ambiente de
                                    Aprendizagem</del></li>
                            </ul>
                            <a href="{{route('')}}" class="btn btn-block btn-primary text-uppercase">Testar grátis</a>
                        </div>

                    </div>
                </div>
                <br>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="card bg-secondary border-0 mb-0">

                    <div class="card-body px-lg-5 py-lg-5">
                        <h5 class="card-title text-muted text-uppercase text-center">Premium</h5>
                        <h6 class="card-price text-center" style="font-size: 22pt;">7000 kz<span class="period">/mês</span></h6>
                        <div class="text-center text-muted mb-4">
                            <small>(*84.000 AOA/Ano | Para empresas)</small>
                        </div>
                        <div>
                            <hr>
                            <ul class="fa-ul" style="font-size: 11pt; !important">
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-check"></i></span>Painel do Utilizador</li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-check"></i></span>Duração Ilimitada</li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-check"></i></span>+ 1 Sala de Reunião</li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-check"></i></span>Transmição para Redes Sociais</li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-times"></i></span>Gravações</del></li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-times"></i></span>+ 90 Participantes por
                                    Reunião</li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-times"></i></span>Convite e Agendamento</li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-times"></i></span>Gestão de Arquivos
                                </li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-times"></i></span>Adicionar Colaboradores
                                </li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span><del>Integração com Ambiente de
                                    Aprendizagem</del></li>
                            </ul>
                            <a href="" class="btn btn-block btn-primary text-uppercase">Contratar</a>
                        </div>

                    </div>
                </div>
                <br>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                <div class="card bg-secondary border-0 mb-0">

                    <div class="card-body px-lg-5 py-lg-5">
                        <h5 class="card-title text-muted text-uppercase text-center">Escolar</h5>
                        <h6 class="card-price text-center" style="font-size: 22pt;">5400 kz<span class="period">/mês</span></h6>
                        <div class="text-center text-muted mb-4">
                            <small>(*64.800 AOA/Ano | Para o ensino)</small>
                        </div>
                        <div>
                            <hr>
                            <ul class="fa-ul" style="font-size: 11pt; !important">
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-check"></i></span>Painel do Utilizador</li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-check"></i></span>Duração Ilimitada</li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-check"></i></span>+ 1 Sala de Reunião</li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-check"></i></span>Transmição para Redes Sociais</li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-times"></i></span>Gravações</li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-times"></i></span>+ 90 Participantes por
                                    Reunião</del></li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-times"></i></span>Convite e Agendamento</li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-times"></i></span>Gestão de Arquivos
                                </li>
                                <li class="pb-3"><span class="fa-li"><i class="fas fa-times"></i></span>Adicionar Colaboradores
                                </li>
                                <li><span class="fa-li"><i class="fas fa-times"></i></span>Integração com Ambiente de
                                    Aprendizagem</li>
                            </ul>
                            <a href="" class="btn btn-block btn-primary text-uppercase">Contratar</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
