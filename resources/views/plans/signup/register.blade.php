@extends('layouts.app')

@section('content')
    <main id="content" role="main" class="main" data-select2-id="content">
        <!-- Content -->
        <div class="content container-fluid" data-select2-id="268">
            <!-- Step Form -->
            <form class="js-step-form py-md-5" data-hs-step-form-options='{
                "progressSelector": "#addUserStepFormProgress",
            "stepsSelector": "#addUserStepFormContent",
            "endSelector": "#addUserFinishBtn",
            "isValidate": false
            }' data-select2-id="267">
                <div class="row justify-content-lg-center" data-select2-id="266">
                    <div class="col-lg-8" data-select2-id="265">
                        <!-- Step -->
                        <ul id="addUserStepFormProgress" class="js-step-progress step step-sm step-icon-sm step step-inline step-item-between mb-3 mb-md-5">
                            <li class="step-item active focus">
                                <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{"targetSelector": "#addUserStepProfile"
                                }'>
                                    <span class="step-icon step-icon-soft-dark">1</span>
                                    <div class="step-content">
                                        <span class="step-title" >Dados pessoais ou institucional</span>
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
                            <div id="addUserStepProfile" class="card card-lg active" style="" data-select2-id="addUserStepProfile">
                                <!-- Body -->
                                <div class="card-body" data-select2-id="280">


                                    <!-- Form Group -->
                                    <div class="row form-group">
                                        <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Nome completo <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Displayed on public forums, such as Front."></i></label>
                                        <div class="col-sm-9">
                                            <div class="input-group input-group-sm-down-break">
                                                <input type="text" class="form-control" name="firstName" id="firstNameInput" placeholder="Primeiro nome" aria-label="Primeiro nome" onblur="setConfirmationValue()">
                                                <input type="text" class="form-control" name="lastName" id="lastNameInput" placeholder="Ultimo nome" aria-label="Ultimo nome" onblur="setConfirmationValue()">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="row form-group">
                                        <label for="emailLabel" class="col-sm-3 col-form-label input-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="email" id="emailInput" placeholder="clarice@example.com" aria-label="clarice@example.com" onblur="setConfirmationValue()">
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="row form-group">
                                        <label for="organizationLabel" class="col-sm-3 col-form-label input-label">Palavra-passe</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="organization" id="organizationLabel" placeholder="" aria-label="Htmlstream">
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="row form-group">
                                        <label for="departmentLabel" class="col-sm-3 col-form-label input-label">Confirmar palavra-passe</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="department" id="departmentLabel" placeholder="" aria-label="Human resources">
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

                            <div id="addUserStepBillingAddress" class="card card-lg" style="display: none;" data-select2-id="addUserStepBillingAddress">
                                <!-- Body -->
                                <div class="card-body" data-select2-id="264">
                                    <!-- Form Group -->
                                    <div class="row form-group" data-select2-id="263">
                                        <label for="locationLabel" class="col-sm-3 col-form-label input-label">Plano selecionado</label>

                                        <div class="col-sm-9" data-select2-id="262">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="selected_plan" id="selectedPlanInput" placeholder="City" aria-label="City" value="{{strtoupper($planInfo->name)}}" readonly onblur="setConfirmationValue()">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="row form-group">
                                        <label for="addressLine1Label" class="col-sm-3 col-form-label input-label">Valor (kz)</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="price" id="priceInput" placeholder="Your address" aria-label="Your address"
                                            value="{{number_format($planInfo->price,2,'.',',')}}" readonly>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="row form-group">
                                        <label for="addressLine1Label" class="col-sm-3 col-form-label input-label">Periodo de pagamento</label>

                                        <div class="col-sm-9">
                                            <select class="js-select2-custom custom-select select2-hidden-accessible" size="1" style="opacity: 0;"  data-select2-id="locationLabel" tabindex="-1" aria-hidden="true" id="plano" onchange="setNewPrice({{ $planInfo->price }})">
                                                <option value=""></option>
                                                <option value="3">Trimestral</option>
                                                <option value="6">Semestral</option>
                                                <option value="12">Anual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="row form-group">
                                        <label for="addressLine1Label" class="col-sm-3 col-form-label input-label">Quantidade de salas</label>

                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="addressLine1" aria-label="Your address" value="" min="1" max="100" id="room_number"
                                                   onchange="setNewPrice({{ $planInfo->price }})">
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="row form-group">
                                        <label for="addressLine1Label" class="col-sm-3 col-form-label input-label">Total a pagar (kz)</label>

                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="addressLine1" aria-label="Your address" id="valor-pagar" readonly>
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
                        <input type="radio" class="custom-control-input" name="userAccountTypeRadio" id="userAccountTypeRadio1">
                        <label class="custom-control-label" for="userAccountTypeRadio1">Multicaixa express</label>
                    </div>
                </div>
                <!-- End Custom Radio -->

                <!-- Custom Radio -->
                <div class="form-control">
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="userAccountTypeRadio" id="userAccountTypeRadio2">
                        <label class="custom-control-label" for="userAccountTypeRadio2">Paypal</label>
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
    <button type="button" class="btn btn-block btn-white col-4" data-hs-step-form-prev-options="{
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
    <dl class="row">
        <dt class="col-sm-4 text-sm-left">Nome completo:</dt>
        <dd class="col-sm-8">
            <span id="nomecompleto_confirmacao"></span>
        </dd>

        <dt class="col-sm-4 text-sm-left">E-mail:</dt>
        <dd class="col-sm-8">
            <span id="email_confirmation"></span>
        </dd>

        <dt class="col-sm-4 text-sm-left">Plano selecionado:</dt>
        <dd class="col-sm-8">
            <span id="selectedPlan_confirmation"></span>
        </dd>

        <dt class="col-sm-4 text-sm-left">Valor (kz):</dt>
        <dd class="col-sm-8">
            <span id="price_confirmation"></span>
        </dd>

        <dt class="col-sm-4 text-sm-left">Periodo de pagamento:</dt>
        <dd class="col-sm-8">
            <span id="paymentPeriod_confirmation"></span>
        </dd>

        <dt class="col-sm-4 text-sm-left">Quantidade de salas:</dt>
        <dd class="col-sm-8">
            <span id="qtdRoom_confirmation"></span>
        </dd>

        <dt class="col-sm-4 text-sm-left">Total a pagar (kz):</dt>
        <dd class="col-sm-8">
            <span id="totalPay_confirmation"></span>
        </dd>

        <dt class="col-sm-4 text-sm-left">Forma de pagamento:</dt>
        <dd class="col-sm-8">---</dd>
    </dl>
    <!-- End Row -->
</div>
<!-- End Body -->

<!-- Footer -->
<div class="card-footer d-sm-flex align-items-sm-center">
    <button type="button" class="btn btn-block btn-white col-4" data-hs-step-form-prev-options="{
&quot;targetSelector&quot;: &quot;#addUserStepBillingAddress&quot;
}">
        <i class="tio-chevron-left"></i> Passo anterior
    </button>

    <div class="ml-auto">
        <button id="addUserFinishBtn" type="button" class="btn btn-outline-success">Descarregar comprovativo de subscrição</button>
        <button id="addUserFinishBtn" type="button" class="btn btn-primary">Confirmar subscrição</button>
    </div>
</div>
<!-- End Footer -->
</div>
</div>
<!-- End Content Step Form -->

<!-- Message Body -->
<div id="successMessageContent" style="display:none;">
<div class="text-center">
<img class="img-fluid mb-3" src="./assets/svg/illustrations/hi-five.svg" alt="Image Description" style="max-width: 15rem;">

<div class="mb-4">
    <h2>Successful!</h2>
    <p>New <span class="font-weight-bold text-dark">Ella Lauda</span> user has been successfully created.</p>
</div>

<div class="d-flex justify-content-center">
    <a class="btn btn-white mr-3" href="users.html">
        <i class="tio-chevron-left ml-1"></i> Back to users
    </a>
    <a class="btn btn-primary" href="users-add-user.html">
        <i class="tio-user-add mr-1"></i> Add new user
    </a>
</div>
</div>
</div>
<!-- End Message Body -->
</div>
</div>
<!-- End Row -->
</form>
<!-- End Step Form -->
</div>
<!-- End Content -->
</main>
<script>
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

    let c_selectedPlan = document.getElementById('selectedPlanInput').value;
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

    let c_paymentForm = document.getElementById('paymentFormInput').value;
    // document.getElementById('paymentForm_confirmation').textContent = c_paymentForm;

}

</script>
@endsection
