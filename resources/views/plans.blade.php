@extends('layouts.plans')
@section('content')
<!-- ========== MAIN CONTENT ========== -->

    <div class="position-fixed top-0 right-0 left-0 bg-img-hero" style="height: 32rem; background-image: url({{asset('svg/components/abstract-bg-4.svg')}});">
        <!-- SVG Bottom Shape -->
        <figure class="position-absolute right-0 bottom-0 left-0">
            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
                <polygon fill="#fff" points="0,273 1921,273 1921,0 "/>
            </svg>
        
        </figure>
        <!-- End SVG Bottom Shape -->
        
    </div>
    <!-- Content -->
    <div class="container py-5 py-sm-7">
        
        <a class="d-flex justify-content-center mb-5" href="index.html">
            <img class="z-index-2" src="{{asset('img/YNZO-08.png')}}" alt="Image Description" style="width: 17rem;">
        </a>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div class="row justify-content-center">
                    
                        <!-- Card -->
                        <div class="card card-lg mb-5">
                            <div class="card-body">
                                    <div class="text-center">
                                        <div class="mb-5">
                                            <h5 class="card-title text-muted text-uppercase text-center">
                                                GRATUITO
                                            </h5>
                                            <h6 class="p-2 text-center" style="font-size: 22pt;">
                                                0 kz/mês
                                            </h6>
                                            <div class="text-center text-muted mb-4">
                                                <small>(*Sem custos | Para reuniões rápidas)</small>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul class="fa-ul" style="font-size: 11pt; !important">
                                            <li class="pb-3"  style="text-align: left; !important" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-check"></i></span>15 Participantes</li>
                                            <li class="pb-3" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-check"></i></span>Duração de 45 minutos</li>
                                            <li class="pb-3" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-check"></i></span>1 Sala de Reunião</li>
                                            <li class="pb-3" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-check"></i></span>Transmição para Redes Sociais</li>
                                            <li class="text-muted pb-3" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-times"></i></span><del>Gravações</del></li>
                                            <li class="text-muted pb-3" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-times"></i></span><del>+ 90 Participantes por
                                                    Reunião</del></li>
                                            <li class="text-muted pb-3" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-times"></i></span><del>Convite e Agendamento</del>
                                            </li>
                                            <li class="text-muted pb-3" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-times"></i></span><del>Gestão de Arquivos</del>
                                            </li>
                                            <li class="text-muted pb-3" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-times"></i></span><del>Adicionar
                                                    Colaboradores</del>
                                            </li>
                                            <li class="text-muted" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-times"></i></span><del>Integração com Ambiente de
                                                    Aprendizagem</del></li>
                                        </ul>
                                    </div>
                                    <a href="{{route('create.free_plan')}}" class="btn btn-lg btn-block btn-primary text-uppercase">Testar grátis</a>
                            </div>
                        </div>
                        <!-- End Card -->
                    
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div class="row justify-content-center">
                    
                        <!-- Card -->
                        <div class="card card-lg mb-5">
                            
                            <div class="card-body">
                                    <div class="text-center">
                                        <div class="mb-5">
                                            <h5 class="card-title text-muted text-uppercase text-center">
                                                Premium
                                            </h5>
                                            <h6 class="p-2 text-center" style="font-size: 22pt;">
                                                7000 kz/mês
                                            </h6>
                                            <div class="text-center text-muted mb-4">
                                                <small>(*84.000 AOA/Ano | Para empresas)</small>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul class="fa-ul" style="font-size: 11pt; !important">
                                            <li class="pb-3" style="text-align: left; !important" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-check"></i></span>Painel do Utilizador</li>
                                            <li class="pb-3" style="text-align: left; !important" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-check"></i></span>Duração Ilimitada</li>
                                            <li class="pb-3" style="text-align: left; !important" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-check"></i></span>+ 1 Sala de Reunião</li>
                                            <li class="pb-3" style="text-align: left; !important" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-check"></i></span>Transmição para Redes Sociais</li>
                                            <li class="pb-3" style="text-align: left; !important" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-times"></i></span>Gravações</li>
                                            <li class="pb-3" style="text-align: left; !important" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-times"></i></span>+ 90 Participantes por
                                                Reunião</li>
                                            <li class="pb-3" style="text-align: left; !important" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-times"></i></span>Convite e Agendamento</li>
                                            <li class="pb-3" style="text-align: left; !important" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-times"></i></span>Gestão de Arquivos
                                            </li>
                                            <li class="pb-3" style="text-align: left; !important" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-times"></i></span>Adicionar Colaboradores
                                            </li>
                                            <li class="text-muted" style="text-align: left; !important" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-times"></i></span><del>Integração com Ambiente de
                                                    Aprendizagem</del></li>
                                        </ul>
                                    </div>
                                    <a href="{{route('signup', 2)}}" class="btn btn-lg btn-block btn-primary text-uppercase">Contratar</a>
                                    <div class="text-center pt-3">
                                        <span class="">
                                            Já tenho uma conta <a href="#">Entrar</a>
                                        </span>
                                    </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div class="row justify-content-center">
                    
                        <!-- Card -->
                        <div class="card card-lg mb-5">
                            <div class="card-body">
                                <!-- Form -->
                                    <div class="text-center">
                                        <div class="mb-5">
                                            <h5 class="card-title text-muted text-uppercase text-center">
                                                Escolar
                                            </h5>
                                            <h6 class="p-2 text-center" style="font-size: 22pt;">
                                                5400 kz/mês
                                            </h6>
                                            <div class="text-center text-muted mb-4">
                                                <small>(*64.800 AOA/Ano | Para o ensino)</small>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul class="fa-ul" style="font-size: 11pt; !important">
                                            <li class="pb-3" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-check"></i></span>Painel do Utilizador</li>
                                            <li class="pb-3" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-check"></i></span>Duração Ilimitada</li>
                                            <li class="pb-3" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-check"></i></span>+ 1 Sala de Reunião</li>
                                            <li class="pb-3" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-check"></i></span>Transmição para Redes Sociais</li>
                                            <li class="pb-3" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-times"></i></span>Gravações</li>
                                            <li class="pb-3" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-times"></i></span>+ 90 Participantes por
                                                Reunião</li>
                                            <li class="pb-3" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-times"></i></span>Convite e Agendamento</li>
                                            <li class="pb-3" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-times"></i></span>Gestão de Arquivos
                                            </li>
                                            <li class="pb-3" style="text-align: left; !important"><span class="fa-li"><i class="fas fa-times"></i></span>Adicionar Colaboradores
                                            </li>
                                            <li><span class="fa-li" style="text-align: left; !important"><i class="fas fa-times"></i></span>Integração com Ambiente de
                                                Aprendizagem</li>
                                        </ul>
                                    </div>
                                    <a href="{{route('signup', 3)}}" class="btn btn-lg btn-block btn-primary text-uppercase">Contratar</a>
                                    <div class="text-center pt-3">
                                        <span class="">
                                            Já tenho uma conta <a href="#">Entrar</a>
                                        </span>
                                    </div>

                            </div>
                        </div>
                        <!-- End Card -->
                    
                </div>
            </div>
        </div>

    </div>
    <!-- End Content -->
@endsection

