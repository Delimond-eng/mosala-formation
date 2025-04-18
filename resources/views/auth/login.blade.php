@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
            <div class="rounded my-4 bg-white basic-page">
                <div class="basicpage-border"></div>
                <div class="basicpage-border1"></div>
                <form method="post" action="{{ route('login') }}" class="card-body p-5">
                    @csrf
                    <p class="h4 fw-semibold mb-2 text-center">Connxion</p>
                    <p class="mb-4 text-muted fw-normal text-center">Veuillez vous connecter pour continuer !</p>
                    <div class="row gy-3">
                        <div class="col-xl-12"> <label for="signin-username" class="form-label text-default">Email</label> <input type="email" name="email" class="form-control" id="signin-username" placeholder="Email..."> </div>
                        <div class="col-xl-12 mb-2"> <label for="signin-password" class="form-label text-default d-block">Password</label>
                            <div class="input-group"> <input type="password" name="password" class="form-control" id="signin-password" placeholder="password"> <a href="javascript:void(0);" class="input-group-text text-muted" onclick="createpassword('signin-password',this)"><i class="ri-eye-off-line align-middle"></i></a> </div>
                            <div class="mt-2">
                                <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="remember" {{ old('remember') ? 'checked' : '' }}> <label class="form-check-label text-muted fw-normal fs-12" for="defaultCheck1"> Garde ma session ? </label> </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid mt-4"> <button type="submit" class="btn btn-primary">Connecter</button> </div>
                </form>
            </div>
        </div>
    </div>
</div>
@if ($errors->has('email') || $errors->has('password'))
    {{ $errors }}
    <div id="solid-secondaryToast"
        class="toast colored-toast bg-danger text-fixed-white position-fixed top-0 end-0 m-4 fade"
        role="alert"
        aria-live="assertive"
        aria-atomic="true"
        data-bs-autohide="true"
        style="z-index: 1080;">
        <div class="toast-header bg-danger text-fixed-white">
            <i class="fa fa-info-circle"></i>
            <strong class="me-auto">Identifiants Erronés</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Mot de passe ou email non valide !
        </div>
    </div>
@endif
@endsection

@push("scripts")
<script>
    document.addEventListener("DOMContentLoaded", function() {
        if(document.getElementById("solid-secondaryToast")){
            const dangertoastExample = document.getElementById("solid-secondaryToast");
            const toast = new bootstrap.Toast(dangertoastExample);
            toast.show();
        }
        
    })
</script>
@endpush