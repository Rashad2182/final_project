@extends('front.layouts.main')

@section('title')
    @lang('messages.about')
@endsection

@section('css')
    <style>
        .about-section {
            max-width: 900px;
            margin: 30px auto;
            background: #111; /* qaralı fon */
            padding: 25px;
            border-radius: 12px;
            border-left: 4px solid red;
            border-right: 4px solid red;
            color: goldenrod;
            line-height: 1.7;
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.3);
        }

        .about-section h3 {
            color: red;
            font-weight: bold;
            text-align: center;
            margin-bottom: 15px;
        }

        .about-section h5 {
            color: goldenrod;
            font-size: 15px;
            font-weight: 400;
            text-align: justify;
        }

        @media(max-width: 768px) {
            .about-section {
                padding: 18px;
                margin: 15px;
            }
            .about-section h5 {
                font-size: 14px;
            }
        }
    </style>
@endsection

@section('content')
    <center>
        <div class="about-section">
            <h3><i class="fa-solid fa-circle-info"></i> Haqqımızda – Bizim Hekayəmiz</h3>

            <h5>
                Hər şey sadə bir masa və bir laptopla başladı. 2020-ci ilin əvvəlində bir ideya var idi –
                bizneslərin internetdə daha yaxşı görünməsi üçün keyfiyyətli, etibarlı və müasir saytlar hazırlamaq.

                <br><br>

                İlk layihəmiz kiçik bir yerli mağaza üçün hazırlanmış sadə bir sayt idi. Müştəridən
                aldığımız ilk sözlər belə oldu: <b>“Sizin sayənizdə satışlarımız artdı.”</b> O gün biz anladıq ki,
                biz sadəcə sayt hazırlamırıq – insanlara işlərini böyütmək üçün yeni imkanlar yaradırıq.

                <br><br>

                İllər boyunca 1000+ müştəri ilə işlədik. Kiçik startaplardan böyük şirkətlərə qədər hər
                kəs üçün fərqli layihələr yaratdıq. Hər yeni layihə bizim üçün bir addım irəli demək idi.

                <br><br>

                Bu gün biz PHP, Java, Dart, JavaScript, Python, React JS, C#, Laravel və digər
                texnologiyalarla müasir, sürətli və effektiv web həllər təqdim edirik.

                <br><br>

                Bizim üçün “Haqqımızda” sadəcə bir mətn deyil – bu, illərlə topladığımız təcrübənin,
                əzmin və müştəri etibarının hekayəsidir.

                <br><br>

                Əgər siz də biznesinizi internetdə güclü şəkildə təqdim etmək istəyirsinizsə –
                <b>biz buradayıq. Çünki biz sadəcə sayt qurmuruq, biz hekayənizi rəqəmsal dünyaya daşıyırıq.</b>
            </h5>
        </div>
    </center>
@endsection

@section('js')
@endsection


