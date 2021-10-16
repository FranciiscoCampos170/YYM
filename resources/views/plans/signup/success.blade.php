@extends('layouts.app')
@section('content')

    <main id="content" role="main" class="main" data-select2-id="content">
        <!-- Content -->
        <div class="content container-fluid" data-select2-id="268">
          
    
<!-- Message Body -->
<div id="successMessageContent" style="margin-top: 15px;">
<div class="text-center">
<img class="img-fluid mb-3" src="{{ asset('svg/illustrations/hi-five.svg') }}" alt="Image Description" style="max-width: 15rem;">

<div class="mb-4">
    <h2>Parabéns!</h2>
    <p>A sua conta foi criada com sucesso.</p>
</div>

<div class="d-flex justify-content-center">
    <a class="btn btn-white mr-3" href="{{ route('plans') }}">
        <i class="tio-chevron-left ml-1"></i> Voltar
    </a>
    <a class="btn btn-primary" href="users-add-user.html">
        <i class="tio-door mr-1"></i> Fazer login
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

@endsection
