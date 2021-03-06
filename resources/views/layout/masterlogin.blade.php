@if(Auth::user())
    @if(Auth::user()->roles[0]['name'] == "siswa")
        <script>window.location = "/siswa/dashboard";</script>
    @elseif(Auth::user()->roles[0]['name'] == "pengajar")
        <script>window.location = "/pengajar/dashboard";</script>
    @endif
@endif

<!DOCTYPE html>
<html>
<head>
    @include('include.head')
</head>
</head>
<body>
<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
    <div class="login-box bg-white box-shadow pd-30 border-radius-5">
        <a href="/"><img src="{{asset('theme/vendors/images/logo.png')}}" alt="login" class="login-img"></a>
        <a href="/"><h4 class="text-center mb-30">@yield('title')</h4></a>
        @yield('content')
    </div>
</div>
@include('include.script')
@if(Session::has('messageLogin'))
    <script type="text/javascript"> sweetAlert("Failed", "{{ Session::get('messageLogin') }}", "error"); </script>
@endif
@if(Session::has('messageSendMailSuccess'))
    <script type="text/javascript"> sweetAlert("Verified", "{{ Session::get('messageSendMailSuccess') }}", "success"); </script>
@endif
@if(Session::has('messageSendMailFailed'))
    <script type="text/javascript"> sweetAlert("Failed", "{{ Session::get('messageSendMailFailed') }}", "error"); </script>
@endif
@if(Session::has('messageResetSuccess'))
    <script type="text/javascript"> sweetAlert("Succeed", "{{ Session::get('messageResetSuccess') }}", "success"); </script>
@endif
@if(Session::has('messageResetFailed'))
    <script type="text/javascript"> sweetAlert("Failed", "{{ Session::get('messageResetFailed') }}", "error"); </script>
@endif

</body>
</html>
