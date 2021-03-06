@extends('layout.masterdashboard')
@section('content')
    @if($statusprogress >= 1)
        <script>window.location = "/siswa/dashboard";</script>
    @else

        <!DOCTYPE html>
        <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <script src="{{asset("theme/unpkgjquery.js")}}"></script>
            <script src="{{asset("theme/surveyjquery.js")}}"></script>
            <link rel="stylesheet" type="text/css" href="{{asset("theme/style.css")}}">

            <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/pbkdf2.js"></script>

        </head>
        <body>
        <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
            <div id="surveyElement"></div>
            <div id="surveyResult"></div>

            @if($statuspretest == 1)
                <script type="text/javascript" src="{{asset("theme/quiz.js")}}"></script>
            @elseif($statuspretest == 2)
                <script type="text/javascript" src="{{asset("theme/quiz2.js")}}"></script>
            @elseif($statuspretest == 3)
                <script type="text/javascript" src="{{asset("theme/quiz3.js")}}"></script>
            @elseif($statuspretest == 4)
                <script type="text/javascript" src="{{asset("theme/quiz4.js")}}"></script>
            @elseif($statuspretest == 5)
                <script type="text/javascript" src="{{asset("theme/quiz5.js")}}"></script>
            @elseif($statuspretest == 6)
                <script type="text/javascript" src="{{asset("theme/quiz6.js")}}"></script>
            @elseif($statuspretest == 7)
                <script type="text/javascript" src="{{asset("theme/quiz7.js")}}"></script>
            @elseif($statuspretest == 8)
                <script type="text/javascript" src="{{asset("theme/quiz8.js")}}"></script>
            @endif
            <input type="hidden" name="uid" id="uid" value="{{$uid}}">
            <input type="hidden" name="statuspretest" id="statuspretest" value="{{$statuspretest}}">
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <form id="form" action='/submitpretest' method='post' style="display: none">
                    @csrf
                    <input id="scorepretest" type="hidden" name="scorepretest" value="">
                    <input id="uidnew" type="hidden" name="uid" value="">
                    <input id="unitID" type="hidden" name="unitID" value="">
                    @if($statuspretest >= 8)
                        <input type="hidden" id="progress" name="progress" value="1">
                    @endif
                    <input type='submit' class='btn btn-primary pull-right' name='submit' value='Submit' >
                </form>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
        </div>
        </body>
        </html>

    @endif
@endsection
