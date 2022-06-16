<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Typing Test</title>
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- Import JS files -->
    <script defer type="text/javascript" src="{{asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/paragraphs.js') }}"></script>
    <!-- Import FontAwesome icons -->
    <script src="https://kit.fontawesome.com/2c9f15701e.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"></script>
</head>
    <body>
        <div class="app">
            <div class="container">
                @include('includes.header')
                @include('includes.test')
                @include('includes.footer')
            </div>
        </div>
    </body>
</html>

<script>
    $.ajaxSetup({
        headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    // function send_ajax() {
    //     $.post({
    //         url: "/save",
    //         data:{
    //             wpm: wpm,
    //             missed: missed,
    //             mistakes: mistakes,
    //         },
    //         success: function (data) {
    //             console.log(data);
    //             console.log('success post method');
    //         }
    //     });


        // let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        {{--if({{ Auth::user() != null }}) {--}}
        {{--    console.log('ajax sent');--}}

            {{--$.ajaxSetup({--}}
            {{--    headers:--}}
            {{--        { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }--}}
            {{--});--}}

            {{--$.post({--}}
            {{--    url: "/save",--}}
            {{--    data:{--}}
            {{--        user_id: <?php if(isset(Auth::user()->id)) {echo Auth::user()->id;} ?>,--}}
            {{--        wpm: wpm,--}}
            {{--        missed: missed,--}}
            {{--        mistakes: mistakes,--}}
            {{--        _token: '<?php echo csrf_token() ?>',--}}
            {{--    },--}}
            {{--});--}}
        // }
    // }
</script>
