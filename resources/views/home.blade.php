@extends('layouts.app')

@section('title', 'HOME')

@section('content')
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
            <a class="menu" href="mailto:info@tip-s.com">
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

    <img id="top" class="content-img" src="{{ asset($top->file_path . $top->file_name) }}" alt="TOP画像">
    <img id="about" class="content-img" src="{{ asset($about->file_path . $about->file_name) }}" alt="About画像">
    <img id="message" class="content-img" src="{{ asset($message->file_path . $message->file_name) }}" alt="Message画像">
    <img id="philosophy" class="content-img" src="{{ asset($philosophy->file_path . $philosophy->file_name) }}"
        alt="philosophy画像">
    <img id="company" class="content-img" src="{{ asset($company->file_path . $company->file_name) }}" alt="company画像">

    {{-- <a class="btn" href="mailto:info@tip-s.com">
        <img class="btn contact1" src="{{ asset($contactBtn1->file_path . $contactBtn1->file_name) }}" alt="contact">
    </a> --}}

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
            <div class="footer-right">
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