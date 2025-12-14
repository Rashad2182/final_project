@extends('back.layouts.master')

@section('title')
    RH-project haqqında
@endsection

@section('css')
    <style>
        :root {
            --black: #0b0b0b;
            --dark: #111;
            --red: #e10600;
            --gray: #b5b5b5;
            --white: #ffffff;
        }

        body {
            background-color: var(--black);
            color: var(--gray);
            font-family: 'Inter', sans-serif;
        }

        .about-rh {
            max-width: 1100px;
            margin: 80px auto;
            padding: 60px;
            background: linear-gradient(180deg, #0b0b0b, #111);
            border-radius: 16px;
            box-shadow: 0 0 60px rgba(225, 6, 0, 0.08);
        }

        .about-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .about-title h1 {
            color: var(--white);
            font-size: 48px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .about-title h1 span {
            color: var(--red);
        }

        .about-title p {
            margin-top: 15px;
            color: var(--gray);
            font-size: 18px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .about-section {
            margin-bottom: 50px;
            position: relative;
            padding-left: 30px;
            border-left: 3px solid var(--red);
        }

        .about-section h3 {
            color: var(--white);
            font-size: 26px;
            margin-bottom: 15px;
        }

        .about-section h3 i {
            color: var(--red);
            margin-right: 10px;
        }

        .about-section p {
            font-size: 17px;
            line-height: 1.9;
        }

        .highlight {
            color: var(--white);
            font-weight: 600;
        }

        .quote {
            margin: 40px 0;
            padding: 25px 30px;
            background: rgba(225, 6, 0, 0.08);
            border-left: 4px solid var(--red);
            font-size: 18px;
            color: var(--white);
            font-style: italic;
        }

        .mission {
            text-align: center;
            margin-top: 60px;
        }

        .mission h2 {
            color: var(--white);
            font-size: 32px;
            margin-bottom: 20px;
        }

        .mission h2 span {
            color: var(--red);
        }

        .mission p {
            max-width: 800px;
            margin: auto;
            font-size: 18px;
            line-height: 1.8;
        }

        @media (max-width: 768px) {
            .about-rh {
                padding: 30px;
            }

            .about-title h1 {
                font-size: 36px;
            }
        }
    </style>
@endsection

@section('content')
    <section class="about-rh">

        <div class="about-title">
            <h1>RH<span>-PROJECT</span></h1>
            <p>
                Bir ideyadan başlayıb, əziyyətlə böyüyən və bu gün rəqəmsal dünyada iz buraxan bir hekayə.
            </p>
        </div>

        <div class="about-section">
            <h3><i class="fa-solid fa-circle-info"></i> Necə Başladı?</h3>
            <p>
                RH-Project-in hekayəsi böyük ofislərdə deyil,
                <span class="highlight">kiçik bir otaqda, gecə yarıları işləyən bir laptopla</span> başladı.
                İlk günlərdə nə böyük komanda vardı, nə investor, nə də hazır müştəri bazası.
                Yalnız öyrənmək istəyi, bitməyən əzm və gecələr yazılan kodlar vardı.
            </p>
        </div>

        <div class="about-section">
            <h3><i class="fa-solid fa-triangle-exclamation"></i> Çətinliklər</h3>
            <p>
                Texniki problemlər, uğursuz testlər, silinən kodlar və son anda dəyişən müştəri tələbləri...
                Bəzən saatlarla görülən iş sıfırdan yenidən yazılırdı.
                Amma RH-Project üçün geri çəkilmək heç vaxt seçim olmadı.
            </p>
        </div>

        <div class="quote">
            “Hər çətinlik bizi zəiflətmədi — daha güclü etdi.”
        </div>

        <div class="about-section">
            <h3><i class="fa-solid fa-chart-line"></i> İlk Uğur</h3>
            <p>
                İlk real uğur bir müştərinin bu sözləri ilə gəldi:
                <span class="highlight">“Hazırladığınız sistem işimizi sürətləndirdi və satışlarımız artdı.”</span>
                O an RH-Project üçün hər şey dəyişdi.
                Məqsəd artıq sadəcə sayt hazırlamaq yox, bizneslər üçün real nəticə yaradan sistemlər qurmaq idi.
            </p>
        </div>

        <div class="about-section">
            <h3><i class="fa-solid fa-code"></i> İnkişaf</h3>
            <p>
                Zamanla RH-Project PHP, Laravel, JavaScript, React, Python, Flutter və digər müasir
                texnologiyalarla böyüdü. Hər yeni layihə yeni məsuliyyət, hər müştəri yeni təcrübə demək idi.
            </p>
        </div>

        <div class="mission">
            <h2>Bizim <span>Missiyamız</span></h2>
            <p>
                RH-Project sadəcə kod yazmır.
                Biz problemləri analiz edir, biznesləri anlayır və
                <span class="highlight">rəqəmsal həllərlə real nəticə yaradırıq.</span>
                Çünki biz inanırıq ki, uğur bir günün işi deyil —
                uğur hər gün eyni əzmlə irəliləməkdir.
            </p>
        </div>

    </section>
@endsection

@section('js')
@endsection


