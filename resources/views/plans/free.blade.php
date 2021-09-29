@extends('layouts.app')
@section('content')
{{--<div id="app">--}}
{{--    <free-plan-component></free-plan-component>--}}
{{--</div>--}}
<!-- ========== MAIN CONTENT ========== -->
<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="main pt-0">
    <!-- Content -->
    <div class="container-fluid px-3">
        <div class="row">
            <!-- Cover -->
            <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-light px-0">
                <!-- Logo & Language -->
                <div class="position-absolute top-0 left-0 right-0 mt-3 mx-3">
                    <div class="d-none d-lg-flex justify-content-between">
                        <a href="#">
                            <img class="w-100" :src="'/img/YNZO-08.png'" alt="Image Description" style="min-width: 7rem; max-width: 7rem;">
                        </a>

                        <!-- Select -->
                        <div id="languageSelect1" class="select2-custom select2-custom-right">
                            <select class="js-select2-custom"
                                    data-hs-select2-options='{
                            "dropdownParent": "#languageSelect1",
                            "minimumResultsForSearch": "Infinity",
                            "placeholder": "Select language",
                            "customClass": "custom-select custom-select-sm custom-select-borderless bg-transparent",
                            "dropdownAutoWidth": true,
                            "dropdownWidth": "12rem"
                          }'>
                                <option label="empty"></option>
                                <option value="language1" selected data-option-template='<span class="d-flex align-items-center">
                                        <img class="avatar avatar-xss avatar-circle mr-2" src="/flag-icon-css/flags/1x1/pt.svg" alt="Image description" width="16"/><span>Português (PT)</span></span>'>Português (PT)</option>
                                <option value="language2"  data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/><span>English (US)</span></span>'>English (US)</option>

                            </select>
                        </div>
                        <!-- End Select -->
                    </div>
                </div>
                <!-- End Logo & Language -->

                <div style="max-width: 23rem;">
                    <div class="text-center mb-5">
                        <img class="img-fluid" src="/svg/illustrations/chat.svg" alt="Image Description" style="width: 12rem;">
                    </div>

                    <div class="mb-5">
                        <h2 class="display-4">Build digital products with:</h2>
                    </div>

                    <!-- List Checked -->
                    <ul class="list-checked list-checked-lg list-checked-primary list-unstyled-py-4">
                        <li class="list-checked-item">
                            <span class="d-block font-weight-bold mb-1">Reunião com duração de 45 Minutos</span>
                        </li>

                        <li class="list-checked-item">
                            <span class="d-block font-weight-bold mb-1">Pode adicionar até 15 participantes</span>
                        </li>
                    </ul>
                    <!-- End List Checked -->

                    <div class="row justify-content-between mt-5 gx-2">
                        <div class="col">
                            <img class="img-fluid" src="/svg/brands/gitlab-gray.svg" alt="Image Description">
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="/svg/brands/fitbit-gray.svg" alt="Image Description">
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="/svg/brands/flow-xo-gray.svg" alt="Image Description">
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="/svg/brands/layar-gray.svg" alt="Image Description">
                        </div>
                    </div>
                    <!-- End Row -->
                </div>
            </div>
            <!-- End Cover -->

            <div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
                <div class="w-100 pt-10 pt-lg-7 pb-7" style="max-width: 25rem;">
                    <!-- Form -->
                    <form class="js-validate" method="POST" action="{{route('store.free_plan')}}">
                        @csrf
                        <div class="text-center mb-5">
                            <h1 class="display-4">Teste grátis o Ynzo</h1>
                        </div>

                        <!-- Form Group -->
                        <div class="js-form-message form-group">
                            <input type="text"
                                   class="form-control form-control-lg"
                                   name="title"
                                   id="" placeholder="Digite o titulo da reunião"
                                   aria-label="Digite o titulo da reunião" required
                                   data-msg="Porfavor digite um titulo valido">
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div class="js-form-message form-group">
                            <input type="name" class="form-control form-control-lg"
                                   name="name" id=""
                                   placeholder="Digite o seu nome e sobrenome"
                                   aria-label="Digite o seu nome e sobrenome"
                                   required data-msg="Porfavor digite um nome e sobrenome valido">
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div class="js-form-message form-group">
                            <input type="tel" class="form-control form-control-lg"
                                   name="phone" id="" placeholder="Telefone"
                                   aria-label="Telefone" required
                                   data-msg="Porfavor digite um Telefone">
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div class="js-form-message form-group">
                            <input type="email" class="form-control form-control-lg"
                                   name="email" id="" placeholder="Digite o seu melhor e-mail"
                                   aria-label="Email" required
                                   data-msg="Porfavor digite um Email valido">
                        </div>
                        <!-- End Form Group -->

                        <!-- Campo de texto sera exibido apenas quando mudar para resolucao movel-->
                        <!-- Form Group -->
                        <div class="js-form-message form-group" hidden>
                            <input type="text" class="form-control form-control-lg"
                                   name="limitParticipants" id="" value="{{$limitParticipants}}">
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div class="js-form-message form-group" hidden>
                            <input type="text" class="form-control form-control-lg"
                                   name="timeLimit" id="" value="{{$timeLimit}}">
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div class="js-form-message form-group" hidden>
                            <input type="text" class="form-control form-control-lg"
                                   name="attendePassword" id="" value="{{$attendePassword}}">
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div class="js-form-message form-group" hidden>
                            <input type="text" class="form-control form-control-lg"
                                   name="password" id="" value="{{$password}}">
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div class="js-form-message form-group" hidden>
                            <input type="text" class="form-control form-control-lg"
                                   name="meeting_id" id="" value="{{$meeting_id}}">
                        </div>

                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div class="js-form-message form-group">
                            <input type="text" class="form-control form-control-lg" name="link" id="link"
                                   value="{{$link}}" readonly>
                        </div>
                        <!-- End Form Group -->
                        <!-- Fim Campo de texto sera exibido apenas quando mudar para resolucao movel-->

                        <div class="row">
                            <div class="col-8">
                                <button type="button" class="btn btn-sm btn-block btn-outline-success" onclick="copyToClipboard()">
                                        <span class="icon">
                                          <i class="tio-copy"></i>
                                        </span>
                                    Copiar link da reunião
                                </button>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-sm btn-block btn-primary">
                                        <span class="icon">
                                          <i class="tio-play-circle"></i>
                                        </span>
                                </button>
                            </div>
                        </div>

                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Content -->
</main>
<!-- ========== END MAIN CONTENT ========== -->
<script>
    function copyToClipboard() {
        let text = document.getElementById("link");
        text.select();
        document.execCommand("copy");
    }
</script>
@endsection
