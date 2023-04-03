<!DOCTYPE html>
<html>
        <head> 
                <meta charset="utf-8" />
                <title>@yield('title')</title>
        

                <link href="{{ asset('/public/print') }}/css/general.css" rel="stylesheet" media="print"/>
                <link href="{{ asset('/public/print') }}/css/general.css" rel="stylesheet" media="screen"/>

                <link rel="icon" type="image/x-icon" href="{{ asset('/public/app/') }}/app.ico">
                
        
                <style type="text/css">
                                 
                        .visually-hidden {
                                clip: rect(0 0 0 0);
                                clip-path: inset(100%);
                                height: 1px;
                                overflow: hidden;
                                position: absolute;
                                width: 1px;
                                white-space: nowrap;
                        }

                        .toc-list, .toc-list ol {
                                list-style-type: none;
                        }

                        .toc-list {
                                padding: 0;
                        }

                        .toc-list ol {
                                padding-inline-start: 2ch;
                        }

                        .toc-list > li > a { 
                                margin-block-start: 1em;
                                color: black;
                        }

                        .toc-list li > a {
                                text-decoration: none;
                                display: grid;
                                grid-template-columns: auto max-content;
                                align-items: end;
                        }

                        .toc-list li > a > .title {
                                position: relative;
                                overflow: hidden;
                        }

                        .toc-list li > a .leaders::after {
                                position: absolute;
                                padding-inline-start: .25ch;
                                content: " . . . . . . . . . . . . . . . . . . . "
                                        ". . . . . . . . . . . . . . . . . . . . . . . "
                                        ". . . . . . . . . . . . . . . . . . . . . . . "
                                        ". . . . . . . . . . . . . . . . . . . . . . . "
                                        ". . . . . . . . . . . . . . . . . . . . . . . "
                                        ". . . . . . . . . . . . . . . . . . . . . . . "
                                        ". . . . . . . . . . . . . . . . . . . . . . . ";
                                text-align: right;
                        }

                        .toc-list li > a > .page {
                                min-width: 2ch;
                                font-variant-numeric: tabular-nums;
                                text-align: right;
                        }
                </style>
        </head>
        <body class="A4x portraitx"> 
                @yield('content')  
        </body>
</html>
