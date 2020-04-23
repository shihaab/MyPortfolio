<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shihaab Rouine</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.typekit.net/ove6yqz.css">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"/>
    </head>
    <body>
        <div class="head-outcome" id="development">
            <h1>development</h1>
        </div>

        <div class="scrolling-wrapper">
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <h2 class="commentary-text">Proofs of concepts</h2>
                        <div style="background-image: url({{ asset('assets/img/IMG_2203.JPG') }});" class="commentary-firstimage"></div>
                        <div style="background-image: url({{ asset('assets/img/IMG_0581.JPG') }});" class="commentary-secondimage"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="commentary">
                    <div class="commentary-inner">
                        <div class="commentary-codepen">
                            <iframe style="width: 100%; height: 100%;" scrolling="no" title="Portfolio POC: inverted text" src="https://codepen.io/shihaab/embed/gOaaezg?height=521&theme-id=39076&default-tab=css,result" frameborder="no" allowtransparency="true" allowfullscreen="true" loading="lazy">
                            See the Pen <a href='https://codepen.io/shihaab/pen/gOaaezg'>Portfolio POC: inverted text</a> by Shihaab Rouinw
                            (<a href='https://codepen.io/shihaab'>@shihaab</a>) on <a href='https://codepen.io'>CodePen</a>.
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="commentary-wrapper">
            <div class="commentary">
            <h2>Github version control</h2>
                <div class="commentary-inner">
                    <div style="background-image: url({{ asset('assets/img/old_commits.png') }}); background-size: contain; background-repeat: no-repeat" class="commentary-singleimage"></div>
                    <!-- <h2 class="commentary-singelimage-text">Last commits</h2> -->
                </div>
            </div>
        </div>
    </body>
</html>
