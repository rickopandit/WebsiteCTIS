<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CTIS | Covid-19 Testing Information System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #ffff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <b>Covid-19 Testing Information System</b>
                </div>
            </div>
            <div class="parbody">
                <h3><b> What is Covid-19?</b> </h3>
                <p> Coronavirus disease <b>(COVID-19)</b> is an infectious disease caused by a newly discovered coronavirus. <br>Most people infected with the <b>COVID-19</b> virus will experience mild to moderate -<br>respiratory illness and recover without requiring special treatment. Older people, and -<br>those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness. </p>
                <h3><b> How to Avoid Infection?</b> </h3>
                <p> 1. Clean your hands often. Use soap and water, or an alcohol-based hand rub.</p>
                <p> 2. Maintain a safe distance from anyone who is coughing or sneezing.</p>
                <p> 3. Wear a mask when physical distancing is not possible.</p>
                <p> 4. Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</p>
                <p> 5. Stay home if you feel unwell. </p>
                <p> 6. f you have a fever, cough and difficulty breathing, seek medical attention.</p>
            </div>
    </body>
</html>
