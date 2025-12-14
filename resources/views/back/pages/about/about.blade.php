@extends('back.layouts.master')

@section('title')
    it-project | səhifə haqqında
@endsection

@section('css')
    <style>
        .about-section {
            background-color: #0d0d0d;
            padding: 80px 0;
        }

        .about-title {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .about-subtitle {
            font-size: 1.2rem;
            letter-spacing: 1px;
        }

        .about-section p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #d1d1d1;
        }
    </style>


@endsection

@section('content')
    <section class="about-section text-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">

                    <h2 class="about-title mb-4">
                        <i class="fa-solid fa-circle-info text-danger"></i>
                        Haqqımızda
                    </h2>

                    <p class="about-subtitle text-danger mb-5">
                        Biz sadəcə kod yazmırıq — biz ideyaları canlı layihələrə çeviririk
                    </p>

                    <p>
                        Hər şey sadə bir masa, bir laptop və böyük bir arzuyla başladı.
                        2020-ci ilin əvvəllərində məqsədimiz tək idi:
                        <span class="text-danger fw-bold">
                        bizneslərin internetdə daha güclü, daha etibarlı və daha peşəkar görünməsini təmin etmək.
                    </span>
                    </p>

                    <p>
                        İlk layihəmiz kiçik bir yerli biznes üçün hazırlanmış sadə bir veb sayt idi.
                        Texniki baxımdan böyük deyildi, amma nəticəsi bizim üçün dönüş nöqtəsi oldu.
                        Müştəridən eşitdiyimiz bu cümlə hər şeyi dəyişdi:
                    </p>

                    <p class="fst-italic text-danger">
                        “Sizin hazırladığınız sayt sayəsində müştərilərimiz artdı.”
                    </p>

                    <p>
                        O an anladıq ki, biz sadəcə sayt hazırlamırıq.
                        Biz insanların işini böyütməsinə, brendini tanıtmasına və gəlirini artırmasına kömək edirik.
                    </p>

                    <hr class="my-5 border-danger">

                    <h3 class="text-danger mb-3">İllərin Təcrübəsi</h3>

                    <p>
                        Zaman keçdikcə komandamız böyüdü, biliklərimiz dərinləşdi və layihələrimiz daha mürəkkəb oldu.
                        Bu günə qədər
                        <span class="fw-bold text-danger">1000-dən çox müştəri</span>
                        ilə əməkdaşlıq etmişik.
                    </p>

                    <p>
                        Kiçik startaplardan böyük korporativ şirkətlərə qədər
                        hər ölçüdə biznes üçün fərqli və unikal həllər yaratmışıq.
                        Hər layihəyə eyni ciddilik və məsuliyyətlə yanaşırıq —
                        çünki hər bir müştəri bizim üçün uzunmüddətli tərəfdaşdır.
                    </p>

                    <hr class="my-5 border-danger">

                    <h3 class="text-danger mb-3">Texnologiyalar və Yanaşmamız</h3>

                    <p>
                        Biz daim inkişaf edən texnologiya dünyasını yaxından izləyir və
                        layihələrimizdə yalnız effektiv və sınaqdan keçmiş texnologiyalardan istifadə edirik.
                    </p>

                    <p>
                        PHP, Laravel, Java, Dart, JavaScript, Python, React JS, C#, Flutter və digər müasir texnologiyalar
                        ilə
                        sürətli, təhlükəsiz və optimallaşdırılmış veb həllər təqdim edirik.
                    </p>

                    <p>
                        Bizim üçün kodun gözəl yazılması kifayət deyil —
                        <span class="text-danger fw-bold">
                        kod işlək, təhlükəsiz və gələcəyə hazır olmalıdır.
                    </span>
                    </p>

                    <hr class="my-5 border-danger">

                    <h3 class="text-danger mb-3">Niyə Biz?</h3>

                    <p>
                        Çünki biz hər layihəyə sadəcə bir iş kimi baxmırıq.
                        Biz müştərinin məqsədini anlayır, bazarını analiz edir və
                        ona uyğun rəqəmsal strategiya qururuq.
                    </p>

                    <p>
                        Şəffaflıq, dürüstlük və davamlı dəstək bizim üçün əsas dəyərlərdir.
                        Layihə bitdikdən sonra da müştərilərimizi tək buraxmırıq.
                    </p>

                    <p class="fw-bold text-danger mt-4">
                        Biz sadəcə sayt qurmuruq —
                        biz sizin hekayənizi rəqəmsal dünyada danışırıq.
                    </p>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
@endsection


