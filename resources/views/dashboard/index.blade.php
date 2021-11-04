@extends('layouts.dashboard')
@section('content')
 
@include('layouts.header')

<!-- ========== MAIN CONTENT ========== -->
@include('layouts.sidebar')

<main id="content" role="main" class="main pointer-event">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Dashboard</h1>
                </div>
                <div class="col-sm-auto">
                    <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#inviteUserModal">
                        <i class="tio-user-add mr-1"></i> Convidar participantes
                    </a>
                </div>
                
            </div>
        </div>
        <!-- End Page Header -->

        <!-- Stats -->
        <div class="row gx-2 gx-lg-3">
            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="{{ route('rooms.index') }}">
                    <div class="card-body">
                        <h6 class="card-subtitle">Todas Salas criadas</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <span class="card-title h2">{{$user->rooms->count()}} / {{ $user->account->total_of_rooms }}</span>
                            </div>

                            <div class="col-6">
                                <!-- Chart -->
                                <div class="chartjs-custom" style="height: 3rem;">
                                    <canvas class="js-chart" data-hs-chartjs-options='{
                                "type": "line",
                                "data": {
                                   "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                   "datasets": [{
                                    "data": [21,20,24,20,18,17,15,17,18,30,31,30,30,35,25,35,35,40,60,90,90,90,85,70,75,70,30,30,30,50,72],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": "k",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                                    </canvas>
                                </div>
                                <!-- End Chart -->
                            </div>
                        </div>
                        <!-- End Row -->
                        <button class="btn btn-sm btn-outline-primary">
                            Ver todas salas
                        </button>

                        
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="#">
                    <div class="card-body">
                        <h6 class="card-subtitle">Todas Gravações</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <span class="card-title h2">8</span>
                            </div>

                            <div class="col-6">
                                <!-- Chart -->
                                <div class="chartjs-custom" style="height: 3rem;">
                                    <canvas class="js-chart" data-hs-chartjs-options='{
                                "type": "line",
                                "data": {
                                   "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                   "datasets": [{
                                    "data": [21,20,24,20,18,17,15,17,30,30,35,25,18,30,31,35,35,90,90,90,85,100,120,120,120,100,90,75,75,75,90],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": "%",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                                    </canvas>
                                </div>
                                <!-- End Chart -->
                            </div>
                        </div>
                        <!-- End Row -->

                        <button class="btn btn-sm btn-outline-primary">
                            Ver gravações
                        </button>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="#">
                    <div class="card-body">
                        <h6 class="card-subtitle">{{$user->account->plan_id == 1 ? "PLANO-PREMIUM" : "PLANO ESCOLAR"}}</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                             
                                <span class="card-title h2">{{$percentage}}%</span>
                            </div>

                            <div class="col-6">
                                <!-- Chart -->
                                <div class="chartjs-custom" style="height: 3rem;">
                                    <canvas class="js-chart" data-hs-chartjs-options='{
                                "type": "line",
                                "data": {
                                   "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                   "datasets": [{
                                    "data": [25,18,30,31,35,35,60,60,60,75,21,20,24,20,18,17,15,17,30,120,120,120,100,90,75,90,90,90,75,70,60],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": "%",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                                    </canvas>
                                </div>
                                <!-- End Chart -->
                            </div>
                        </div>
                        <!-- End Row -->

                        <button class="btn btn-sm btn-outline-primary">
                            Renovar subscrição
                        </button>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="#">
                    <div class="card-body">
                        <h6 class="card-subtitle">Reuniões agendadas</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <span class="card-title h2">13</span>
                            </div>

                            <div class="col-6">
                                <!-- Chart -->
                                <div class="chartjs-custom" style="height: 3rem;">
                                    <canvas class="js-chart" data-hs-chartjs-options='{
                                "type": "line",
                                "data": {
                                   "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                   "datasets": [{
                                    "data": [21,20,24,15,17,30,30,35,35,35,40,60,12,90,90,85,70,75,43,75,90,22,120,120,90,85,100,92,92,92,92],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": "k",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                                    </canvas>
                                </div>
                                <!-- End Chart -->
                            </div>
                        </div>
                        <!-- End Row -->

                        <button class="btn btn-sm btn-outline-primary">
                            Ver agendamentos
                        </button>
                    </div>
                </a>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Stats -->

        
            <!-- End Body -->

            
        
        </form>
    </div>
</div>
<!-- Create a new user Modal -->
<div class="modal fade" id="inviteUserModal" tabindex="-1" role="dialog" aria-labelledby="inviteUserModalTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 id="inviteUserModalTitle" class="modal-title">Convidar participantes</h4>

        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
          <i class="tio-clear tio-lg"></i>
        </button>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="modal-body">
        <!-- Form Group -->
        <div class="form-group">
          <div class="input-group input-group-merge mb-2 mb-sm-0">
            <div class="input-group-prepend" id="fullName">
              <span class="input-group-text">
                <i class="tio-search"></i>
              </span>
            </div>

            <input type="text" class="form-control" name="fullName" placeholder="Adicionar e-mail"
              aria-label="Search name or emails" aria-describedby="fullName">

            <div class="input-group-append input-group-append-last-sm-down-none">
              

              <a class="btn btn-primary d-none d-sm-block" href="javascript:;">Adicionar</a>
            </div>
          </div>

          <a class="btn btn-block btn-primary d-sm-none" href="javascript:;">Adicionar</a>
        
        <label for="room" class="mt-3">Selecione a sala:</label>
          <select name="room" id="room" class="form-control" aria-placeholder="ola" placehoder="ola!">
            <option value=""></option>
            <option value="">Reuniao 1</option>
          </select>
        </div>
        <!-- End Form Group -->

        <div class="form-row">
          <h5 class="col modal-title">Convidados</h5>
        </div>

        <hr class="mt-2">

        <ul class="list-unstyled list-unstyled-py-4">
          <!-- List Group Item -->
          <li>
            <div class="media">
              <div class="avatar avatar-sm avatar-circle mr-3">
                <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
              </div>

              <div class="media-body">
                <div class="row align-items-center">
                  <div class="col-sm">
                    <h5 class="text-body mb-0">Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip"
                        data-placement="top" title="Top endorsed"></i></h5>
                    <span class="d-block font-size-sm">amanda@example.com</span>
                  </div>

                  <div class="col-sm">
                    <!-- Select -->
                    <div id="inviteUserSelect1"
                      class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                      <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;"
                        data-hs-select2-options='{
                                    "dropdownParent": "#inviteUserSelect1",
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                        <option value="guest" selected>Guest</option>
                        <option value="can edit">Can edit</option>
                        <option value="can comment">Can comment</option>
                        <option value="full access">Full access</option>
                        <option value="remove" data-option-template='<span class="text-danger">Remove</span>'>Remove
                        </option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                </div>
                <!-- End Row -->
              </div>
            </div>
          </li>
          <!-- End List Group Item -->

                  </ul>
      </div>
      <!-- End Body -->

      <!-- Footer -->
      <div class="modal-footer justify-content-start">
        <div class="row align-items-center flex-grow-1 mx-n2">
          <div class="col-sm-9 mb-2 mb-sm-0">
            <input type="hidden" id="inviteUserPublicClipboard"
              value="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/">

            <p class="modal-footer-text">The public share <a href="#">link settings</a>
              <i class="tio-help-outlined" data-toggle="tooltip" data-placement="top"
                title="The public share link allows people to view the project without giving access to full collaboration features."></i>
            </p>
          </div>

          <div class="col-sm-3 text-sm-right">
            <a class="js-clipboard btn btn-sm btn-white text-nowrap" href="javascript:;" data-toggle="tooltip"
              data-placement="top" title="Copy to clipboard!" data-hs-clipboard-options='{
                    "type": "tooltip",
                    "successText": "Copied!",
                    "contentTarget": "#inviteUserPublicClipboard",
                    "container": "#inviteUserModal"
                   }'>
              <i class="tio-link mr-1"></i> Copy link</a>
          </div>
        </div>
      </div>
      <!-- End Footer -->
    </form>
  </div>
</div>
<!-- End Create a new user Modal -->
<!-- End Create a new user Modal -->
<!-- ========== END SECONDARY CONTENTS ========== -->
@endsection