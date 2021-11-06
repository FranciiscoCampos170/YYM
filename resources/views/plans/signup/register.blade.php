@extends('layouts.app')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<main id="content" role="main" class="main" data-select2-id="content">
    <!-- Content -->
    <div class="content container-fluid" data-select2-id="268">
        <!-- Step Form -->
        <form class="js-step-form py-md-5" data-hs-step-form-options='{
                "progressSelector": "#addUserStepFormProgress",
                "stepsSelector": "#addUserStepFormContent",
                "endSelector": "#addUserFinishBtn",
                "isValidate": false
                }' data-select2-id="267" action="{{ route('signup.store') }}" method="POST"
            enctype="multipart/form-data" id="submitItem">
            @csrf
            <div class="row justify-content-lg-center" data-select2-id="266">
                <div class="col-lg-8" data-select2-id="265">
                    <!-- Step -->
                    <ul id="addUserStepFormProgress"
                        class="js-step-progress step step-sm step-icon-sm step step-inline step-item-between mb-3 mb-md-5">
                        <li class="step-item active focus">
                            <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{"targetSelector": "#addUserStepProfile"
                                }'>
                                <span class="step-icon step-icon-soft-dark">1</span>
                                <div class="step-content">
                                    <span class="step-title">Dados pessoais ou institucional</span>
                                </div>
                            </a>
                        </li>

                        <li class="step-item">
                            <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options="{
                      &quot;targetSelector&quot;: &quot;#addUserStepBillingAddress&quot;
                    }">
                                <span class="step-icon step-icon-soft-dark">2</span>
                                <div class="step-content">
                                    <span class="step-title">Informações de pagamento</span>
                                </div>
                            </a>
                        </li>

                        <li class="step-item">
                            <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options="{
                      &quot;targetSelector&quot;: &quot;#addUserStepConfirmation&quot;
                    }">
                                <span class="step-icon step-icon-soft-dark">3</span>
                                <div class="step-content">
                                    <span class="step-title">Confirmação</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- End Step -->

                    <!-- Content Step Form -->
                    <div id="addUserStepFormContent" data-select2-id="addUserStepFormContent">
                        <!-- Card -->
                        <div id="addUserStepProfile" class="card card-lg active" style=""
                            data-select2-id="addUserStepProfile">
                            <!-- Body -->
                            <div class="card-body" data-select2-id="280">


                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Nome
                                        completo <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip"
                                            data-placement="top" title=""
                                            data-original-title="Displayed on public forums, such as Front."></i></label>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-sm-down-break">
                                            <input type="text" class="form-control" name="firstName" id="firstNameInput"
                                                placeholder="Primeiro nome" aria-label="Primeiro nome"
                                                onblur="setConfirmationValue()">
                                            <input type="text" class="form-control" name="lastName" id="lastNameInput"
                                                placeholder="Ultimo nome" aria-label="Ultimo nome"
                                                onblur="setConfirmationValue()">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="emailLabel" class="col-sm-3 col-form-label input-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" id="emailInput"
                                            placeholder="clarice@example.com" aria-label="clarice@example.com"
                                            onblur="setConfirmationValue()">
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="organizationLabel"
                                        class="col-sm-3 col-form-label input-label">Palavra-passe</label>

                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="password" id="passwordInput"
                                            placeholder="" aria-label="Htmlstream">
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="departmentLabel" class="col-sm-3 col-form-label input-label">Confirmar
                                        palavra-passe</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="password_confirmation"
                                            id="password_confirmationInput" placeholder="" aria-label="Human resources">
                                    </div>
                                </div>
                                <!-- End Form Group -->

                            </div>
                            <!-- End Body -->

                            <!-- Footer -->
                            <div class="card-footer d-flex justify-content-end align-items-center">
                                <button type="button" class="btn btn-primary" data-hs-step-form-next-options="{
                              &quot;targetSelector&quot;: &quot;#addUserStepBillingAddress&quot;
                            }">
                                    Seguinte <i class="tio-chevron-right"></i>
                                </button>
                            </div>
                            <!-- End Footer -->
                        </div>
                        <!-- End Card -->

                        <div id="addUserStepBillingAddress" class="card card-lg" style="display: none;"
                            data-select2-id="addUserStepBillingAddress">
                            <!-- Body -->
                            <div class="card-body" data-select2-id="264">
                                <!-- Form Group -->
                                <div class="row form-group" data-select2-id="263">
                                    <label for="locationLabel" class="col-sm-3 col-form-label input-label">Plano
                                        selecionado</label>

                                    <div class="col-sm-9" data-select2-id="262">
                                        <div class="mb-3" hidden>
                                            <input type="text" class="form-control" name="selected_plan"
                                                id="selectedPlanInput" placeholder="City" aria-label="City"
                                                value="{{ $planInfo->id }}" readonly onblur="setConfirmationValue()">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="City" aria-label="City"
                                                value="{{ strtoupper($planInfo->name) }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="addressLine1Label" class="col-sm-3 col-form-label input-label">Valor
                                        (kz)</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="price" id="priceInput"
                                            placeholder="Your address" aria-label="Your address"
                                            value="{{number_format($planInfo->price,2,'.',',')}}" readonly>
                                    </div>
                                </div>
                                <!-- End Form Group -->



                                <!-- Form Group -->
                                <div class="row form-group">

                                    <label for="addressLine1Label" class="col-sm-3 col-form-label input-label">Periodo
                                        de pagamento</label>

                                    <div class="col-sm-9">
                                        <!-- Select -->
                                        <select class="custom-select" name="payment_period" id="plano"
                                            onchange="setNewPrice({{ $planInfo->price }})">
                                            <option value=""></option>
                                            <option value="3">Trimestral</option>
                                            <option value="6">Semestral</option>
                                            <option value="12">Anual</option>
                                        </select>
                                        <!-- End Select -->

                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="addressLine1Label"
                                        class="col-sm-3 col-form-label input-label">Quantidade de salas</label>

                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="total_of_rooms"
                                            aria-label="Your address" min="1" max="100" id="room_number"
                                            onchange="setNewPrice({{ $planInfo->price }})">
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="addressLine1Label" class="col-sm-3 col-form-label input-label">Total a
                                        pagar (kz)</label>

                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="total_to_pay"
                                            aria-label="Your address" id="valor-pagar" readonly>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="row">
                                    <label class="col-sm-3 col-form-label input-label">Forma de pagamento</label>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-sm-down-break">
                                            <!-- Custom Radio -->
                                            <div class="form-control">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input"
                                                        name="userAccountTypeRadio" id="userAccountTypeRadio1" value="1"
                                                        onchange="setConfirmationByRadioButton(1)">
                                                    <label class="custom-control-label"
                                                        for="userAccountTypeRadio1">Multicaixa express</label>
                                                </div>
                                            </div>
                                            <!-- End Custom Radio -->



                                            <!-- Custom Radio -->
                                            <div class="form-control">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input"
                                                        name="userAccountTypeRadio" id="userAccountTypeRadio3"
                                                        onchange="launchIbanModal(); setConfirmationByRadioButton(2)"
                                                        value="2">
                                                    <label class="custom-control-label"
                                                        for="userAccountTypeRadio3">Transferência bancária</label>
                                                </div>
                                            </div>
                                            <!-- End Custom Radio -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->
                            </div>
                            <!-- End Body -->

                            <!-- Footer -->
                            <div class="card-footer d-flex align-items-center">
                                <button type="button" class="btn btn-block btn-white col-4"
                                    data-hs-step-form-prev-options="{
&quot;targetSelector&quot;: &quot;#addUserStepProfile&quot;
}">
                                    <i class="tio-chevron-left"></i> Passo anterior
                                </button>

                                <div class="ml-auto">
                                    <button type="button" class="btn btn-primary" data-hs-step-form-next-options="{
&quot;targetSelector&quot;: &quot;#addUserStepConfirmation&quot;
}">
                                        Seguinte <i class="tio-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- End Footer -->
                        </div>

                        <div id="addUserStepConfirmation" class="card card-lg" style="display: none;">
                            <!-- Body -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td style="width: 250px; !important"><b>Nome completo:</b></td>
                                            <td>
                                                <span id="nomecompleto_confirmacao"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>E-mail:</b></td>
                                            <td><span id="email_confirmation"></span></td>
                                        </tr>
                                        <tr>
                                            <td><b>Plano selecionado:</b></td>
                                            <td><span id="selectedPlan_confirmation"></span></td>
                                        </tr>
                                        <tr>
                                            <td><b>Valor (kz):</b></td>
                                            <td><span id="price_confirmation"></span></td>
                                        </tr>
                                        <tr>
                                            <td><b>Periodo de pagamento:</b></td>
                                            <td><span id="paymentPeriod_confirmation"></span></td>
                                        </tr>
                                        <tr>
                                            <td><b>Quantidade de salas:</b></td>
                                            <td><span id="qtdRoom_confirmation"></span></td>
                                        </tr>
                                        <tr>
                                            <td><b>Total a pagar (kz):</b></td>
                                            <td><span id="totalPay_confirmation"></span></td>
                                        </tr>
                                        <tr>
                                            <td><b>Forma de pagamento:</b></td>
                                            <td><span id="paymentForm_confirmation"></span></td>
                                        </tr>

                                    </tbody>
                                </table>
                              
                                <!-- End Body -->

                                <!-- Footer -->
                                <div class="card-footer d-sm-flex align-items-sm-center">
                                    <button type="button" class="btn btn-block btn-white col-4"
                                        data-hs-step-form-prev-options="{
&quot;targetSelector&quot;: &quot;#addUserStepBillingAddress&quot;
}">
                                        <i class="tio-chevron-left"></i> Passo anterior
                                    </button>

                                    <div class="ml-auto">
                                        {{--<button id="downloadReceipt" type="submit"
                                            class="btn btn-outline-success">Descarregar comprovativo de
                                            subscrição</button>--}}
                                        <button id="addUserFinishBtn" type="submit" class="btn btn-primary">Confirmar
                                            subscrição</button>
                                    </div>
                                </div>
                                <!-- End Footer -->
                            </div>
                        </div>
                        <!-- End Content Step Form -->

                        
                    </div>
                </div>
                <!-- End Row -->


                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Informações de conta</h5>
                                <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary"
                                    data-dismiss="modal" aria-label="Close">
                                    <i class="tio-clear tio-lg"></i>
                                </button>
                            </div>
                            <div class="modal-body table-responsive">
                                <p>
                                    <span>Banco: </span>SOL
                                </p>
                                <p><span>BENEFICIÁRIO: </span>LUIOZI EXPRESS, LDA</p>
                                <p><span>Nº Conta: </span>118423712.10.002</p>
                                <p><span>IBAN: </span>AO06.0044.0000.1842.3712.1028.2</p>
                                <hr>
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label>Carregar comprovativo de pagamento</label>
                                    <div class="custom-file">
                                        <input type="file" id="customFileEg1" class="custom-file-input"
                                            onchange="getFileName()" name="file">
                                        <label class="custom-file-label" id="custom-file-label"
                                            for="customFileEg1">Escolher comprovativo de transferência</label>
                                    </div>
                                </div>
                                <!-- End Form Group -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
        </form>
        <!-- End Step Form -->
    </div>
    <!-- End Content -->
</main>

<script src="https://code.jquery.com/jquery-3.6.0.js">
  
</script>
<script>
    $(function() {
        $("#downloadReceipt").on('submit',function(e){
            //alert("ol");
           
               e.preventDefault();
               $.ajax({
                      type:'POST',
                      url: '{{route("download.receipt")}}',
                      headers: {
                           'X-CSRF-Token': '{{ csrf_token() }}',
                       },
                       xhrFields: {
                           responseType: 'blob'
                        },data: $("#submitItem").serialize(),
                      success:function(data) {
                       
                          var blob = new Blob([data]);
                           var link = document.createElement('a');
                           link.href= window.URL.createObjectURL(blob);
                           link.download = "ex.pdf";
                           link.click();
                          //alert(data);
                         //$("#msg").html(data.msg);
                      }
                   });
           });
               
        
    })
    
    function getFileName()
{
    fileName = document.getElementById("customFileEg1").value;
    document.getElementById("custom-file-label").textContent = fileName;
}
function launchIbanModal()
{
    $("#staticBackdrop").modal();
    //setConfirmationValue();
}
function setNewPrice(price)
{
let month = document.getElementById("plano").value;
let room_number = document.getElementById("room_number").value;
let newPrice = price * month * room_number;
document.getElementById('valor-pagar').value = newPrice;
setConfirmationValue();
}

function setConfirmationValue()
{
    let c_fullName = document.getElementById('firstNameInput').value + " " + document.getElementById('lastNameInput').value;
    document.getElementById('nomecompleto_confirmacao').textContent = c_fullName;

    let  c_email = document.getElementById('emailInput').value;
    document.getElementById('email_confirmation').textContent = c_email;

    let c_selectedPlan = document.getElementById('selectedPlanInput').value == 2 ? "PLANO-PREMIUM" : "PLANO-ESCOLAR";
    document.getElementById('selectedPlan_confirmation').textContent = c_selectedPlan;

    let c_price = document.getElementById('priceInput').value;
    document.getElementById('price_confirmation').textContent = c_price;
    let c_paymentPeriod;
    if (document.getElementById('plano').value == 3)
        {
            c_paymentPeriod = "Trimestral"
        }else if(document.getElementById('plano').value == 6)
    {
         c_paymentPeriod = "Semestral"
    }else if(document.getElementById('plano').value == 12){
         c_paymentPeriod = "Anual"
    }
    document.getElementById('paymentPeriod_confirmation').textContent = c_paymentPeriod;

    let c_qtdRoom = document.getElementById('room_number').value;
    document.getElementById('qtdRoom_confirmation').textContent = c_qtdRoom;

    let c_totalPay = document.getElementById('valor-pagar').value;
    document.getElementById('totalPay_confirmation').textContent = c_totalPay;
    //setConfirmationByRadioButton();
}

function setConfirmationByRadioButton(value)
{
    let c_paymentForm;
    if (value == 1) {
    c_paymentForm = "Multicaixa express";
    }else{
    c_paymentForm = "Transferência bancária";
    }
    document.getElementById('paymentForm_confirmation').textContent = c_paymentForm;
}



</script>
@endsection