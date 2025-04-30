@extends('layouts.app')

@section('title', 'HOME')

@section('content')
    @php
        $topBackImg = asset($topBack->file_path . $topBack->file_name);
        $philosophyBackImg = asset($philosophyBack->file_path . $philosophyBack->file_name);

    @endphp
    <style>
        .top-area {
            background-image: url({{$topBackImg}});
            background-size: cover;
            background-position: center;
            /* 中央に配置 */
            background-repeat: no-repeat;
            height: auto;
            min-height: 100vh;
            /* 最小高さを設定 */
        }

        .philosophy-area {
            background-image: url({{$philosophyBackImg}});
            background-size: cover;
            /* contain から cover に変更 */
            background-position: center;
            /* 中央に配置 */
            background-repeat: no-repeat;
            height: auto;
            /* 自動高さに変更 */
            min-height: 800px;
            /* 最小高さを設定 */
        }

        /* 文字の読みやすさを向上させるためのスタイル */
        @media (max-width: 768px) {
            .philosophy-area {
                background-size: cover;
                background-position: center;
            }

            .philosophy-content {
                background-color: rgba(125, 122, 137, 0.7);
                /* 背景に半透明レイヤーを追加 */
                padding: 2rem 1rem;
                border-radius: 10px;
            }
        }
    </style>
    <header>
        <div class="menu-list">
            <a class="menu" href="#top">
                <img class="logo-top" src="{{ asset($logo->file_path . $logo->file_name) }}" alt="logo">
            </a>
            <a class="menu" href="#about">
                <img class="menu-tab" src="{{ asset($menuAbout->file_path . $menuAbout->file_name) }}" alt="menu">
            </a>
            <a class="menu" href="#message">
                <img class="menu-tab" src="{{ asset($menuMessage->file_path . $menuMessage->file_name) }}" alt="menu">
            </a>
            <a class="menu" href="#philosophy">
                <img class="menu-tab" src="{{ asset($menuPhilosophy->file_path . $menuPhilosophy->file_name) }}" alt="menu">
            </a>
            <a class="menu" href="#company">
                <img class="menu-tab" src="{{ asset($menuCompany->file_path . $menuCompany->file_name) }}" alt="menu">
            </a>
            <a class="menu" href="#contact-id">
                <img class="contact2" src="{{ asset($contactBtn2->file_path . $contactBtn2->file_name) }}" alt="contact">
            </a>

            <!-- ハンバーガーメニュー -->
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- モバイルメニュー -->
        <div class="mobile-menu">
            <div class="mobile-menu-list">
                <a class="mobile-menu-item" href="#about">
                    <img class="mobile-menu-tab" src="{{ asset($menuAbout->file_path . $menuAbout->file_name) }}"
                        alt="menu">
                </a>
                <a class="mobile-menu-item" href="#message">
                    <img class="mobile-menu-tab" src="{{ asset($menuMessage->file_path . $menuMessage->file_name) }}"
                        alt="menu">
                </a>
                <a class="mobile-menu-item" href="#philosophy">
                    <img class="mobile-menu-tab" src="{{ asset($menuPhilosophy->file_path . $menuPhilosophy->file_name) }}"
                        alt="menu">
                </a>
                <a class="mobile-menu-item" href="#company">
                    <img class="mobile-menu-tab" src="{{ asset($menuCompany->file_path . $menuCompany->file_name) }}"
                        alt="menu">
                </a>
            </div>
        </div>
    </header>

    <div id="top" class="top-area">
        <div class="top-content">
            {!! nl2br($TopText->content) !!}
        </div>
        <a href="#contact-id">
            <img class="contact1" src="{{ asset($contactBtn1->file_path . $contactBtn1->file_name) }}" alt="contact">
        </a>
    </div>

    <div id="about" class="about-area">
        <img class="about-logo" src="{{ asset($aboutLogo->file_path . $aboutLogo->file_name) }}" alt="">
        <div class="about-contents">
            <div class="about-content-area">
                <div class="about-title">
                    {!! nl2br($AboutTITLE->content) !!}
                </div>
                <div class="about-content">
                    {!! nl2br($AboutCONTENT->content) !!}
                </div>
            </div>
            <div class="about-icon-area">
                <div class="about-icon">
                    <div class="about-icon-title">
                        {!! nl2br($AboutTitle1->content) !!}
                    </div>
                    <div class="about-icon-content">
                        {!! nl2br($AboutContent1->content) !!}
                    </div>
                    <img class="about-icon-img" src="{{ asset($aboutIcon1->file_path . $aboutIcon1->file_name) }}"
                        alt="icon">
                </div>
                <div class="about-icon">
                    <div class="about-icon-title">
                        {!! nl2br($AboutTitle2->content) !!}
                    </div>
                    <div class="about-icon-content">
                        {!! nl2br($AboutContent2->content) !!}
                    </div>
                    <img class="about-icon-img" src="{{ asset($aboutIcon2->file_path . $aboutIcon2->file_name) }}"
                        alt="icon">
                </div>
                <div class="about-icon">
                    <div class="about-icon-title">
                        {!! nl2br($AboutTitle3->content) !!}
                    </div>
                    <div class="about-icon-content">
                        {!! nl2br($AboutContent3->content) !!}
                    </div>
                    <img class="about-icon-img" src="{{ asset($aboutIcon3->file_path . $aboutIcon3->file_name) }}"
                        alt="icon">
                </div>
            </div>
            <div class="about-house">
                <img src="{{ asset($aboutHouse->file_path . $aboutHouse->file_name) }}" alt="house">
            </div>
        </div>
    </div>

    <div id="message" class="message-area">
        <div class="message-contents">
            <div class="message-icon">
                <img src="{{ asset($messageIcon->file_path . $messageIcon->file_name) }}" alt="house">
            </div>
            <div class="message-content">
                <p>Message</p>
                {!! nl2br($MessageText->content) !!}
            </div>
        </div>
    </div>

    <div id="philosophy" class="philosophy-area">
        <div class="philosophy-contents">
            <div class="philosophy-content">
                <div class="philosophy-t">
                    ・　Philosophy　・
                </div>
                <div class="philosophy-text">
                    <div class="p-title">t</div>
                    <div class="p-title2">・try</div>
                    <div class="p-content">常識にとらわれず、住まい選びのその先を見据えた一歩を</div>
                </div>
                <hr class="line">
                <div class="philosophy-text">
                    <div class="p-title">i</div>
                    <div class="p-title2">・idea</div>
                    <div class="p-content">安定と感性を兼ね備えた、暮らしを彩る知恵を</div>
                </div>
                <hr class="line">
                <div class="philosophy-text">
                    <div class="p-title">p</div>
                    <div class="p-title2">・planning</div>
                    <div class="p-content">未来の安心と誇りを紡ぐ、資産形成の道筋を</div>
                </div>
                <hr class="line">
                <div class="philosophy-text">
                    <div class="p-title">s</div>
                    <div class="p-title2">・strategy</div>
                    <div class="p-content">資産価値とライフスタイル、両方を叶える不動産戦略を</div>
                </div>
                <hr class="line">
            </div>
        </div>
    </div>

    <div class="company-yane"></div>

    <div id="company" class="company-area">
        <img class="company-logo" src="{{ asset($companyLogo->file_path . $companyLogo->file_name) }}" alt="">
        <div class="company-contents">
            <p>会社情報 <span class="company-text">- Company -</span></p>
            <table class="table company">
                @foreach ($textCompany as $company)
                            <tr>
                                <th>
                                    {{$company["view_name"]}}
                                </th>
                                <td>
                                    @if ($company["type"] == "date")
                                        {{ date('Y年n月j日', strtotime($company["value"])) }}
                                    @elseif($company["type"] == "textarea")
                                        {!! nl2br($company["value"]) !!}
                                    @else
                                        {!! nl2br($company["value"]) !!}
                                    @endif
                                </td>
                    </div>
                    </tr>
                @endforeach
        </table>
    </div>
    <div class="company-tree1">
        <img src="{{ asset($companyTree1->file_path . $companyTree1->file_name) }}" alt="tree">
    </div>
    <div class="company-tree2">
        <img src="{{ asset($companyTree2->file_path . $companyTree2->file_name) }}" alt="tree">
    </div>
    </div>

    <footer>
        <div class="footer">
            <div class="footer-left">
                <img class="footer-logo" src="{{ asset($logo->file_path . $logo->file_name) }}" alt="logo">
                <img class="allright" src="{{ asset($allright->file_path . $allright->file_name) }}" alt="allright">
            </div>
            <div class="footer-menu-list">
                <a class="footer-menu" href="#about">
                    <img class="footer-menu-tab" src="{{ asset($menuAbout->file_path . $menuAbout->file_name) }}"
                        alt="footer-menu">
                </a>
                <a class="footer-menu" href="#message">
                    <img class="footer-menu-tab" src="{{ asset($menuMessage->file_path . $menuMessage->file_name) }}"
                        alt="footer-menu">
                </a>
                <a class="footer-menu" href="#philosophy">
                    <img class="footer-menu-tab" src="{{ asset($menuPhilosophy->file_path . $menuPhilosophy->file_name) }}"
                        alt="footer-menu">
                </a>
                <a class="footer-menu" href="#company">
                    <img class="footer-menu-tab" src="{{ asset($menuCompany->file_path . $menuCompany->file_name) }}"
                        alt="footer-menu">
                </a>
            </div>
            <div id="contact-id" class="footer-right">
                <a class="btn" href="mailto:info@tip-s.com">
                    <img class="footer-img" src="{{ asset($mailBtn->file_path . $mailBtn->file_name) }}" alt="メール">
                </a>
                <a class="btn" href="tel:03-6840-1621">
                    <img class="footer-img" src="{{ asset($telBtn->file_path . $telBtn->file_name) }}" alt="電話番号">
                </a>
                <img class="footer-img" src="{{ asset($businessHour->file_path . $businessHour->file_name) }}" alt="営業時間">
            </div>
        </div>
    </footer>

    <!-- JavaScriptを追加 -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const hamburger = document.querySelector('.hamburger');
            const mobileMenu = document.querySelector('.mobile-menu');

            hamburger.addEventListener('click', function () {
                hamburger.classList.toggle('active');
                mobileMenu.classList.toggle('active');
            });

            // モバイルメニュー内のリンクをクリックしたらメニューを閉じる
            const mobileMenuItems = document.querySelectorAll('.mobile-menu-item');
            mobileMenuItems.forEach(item => {
                item.addEventListener('click', function () {
                    hamburger.classList.remove('active');
                    mobileMenu.classList.remove('active');
                });
            });
        });
    </script>
@endsection