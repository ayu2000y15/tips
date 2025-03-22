@extends('layouts.app')

@section('title', 'HOME')

@section('content')

    <div class="top">
        <img src="{{ asset($banner->file_path . $banner->file_name) }}" alt="TOP画像">
        <div class="text-top">
            <h2>{{ $textTop->content }}</h2>
        </div>
    </div>


    <div class="container">
        <div class="content about">
            <div class="title about">
                @if($titleAbout == null)
                    <div class="title-content">
                        <img src="{{ asset($logoImg1->file_path . $logoImg1->file_name) }}" alt="ロゴ">
                        <h1>About Us</h1>
                    </div>
                @else
                    <img src="{{ asset($titleAbout->file_path . $titleAbout->file_name) }}" alt="タイトル画像">
                @endif
            </div>
            <hr class="line">
            <div class="text about">
                {!! nl2br($textAbout->content) !!}
            </div>
        </div>

        <div class="content message">
            <div class="title message">
                @if($titleMessage == null)
                    <div class="title-content">
                        <img src="{{ asset($logoImg1->file_path . $logoImg1->file_name) }}" alt="ロゴ">
                        <h1>Message</h1>
                    </div>
                @else
                    <img src="{{ asset($titleMessage->file_path . $titleMessage->file_name) }}" alt="タイトル画像">
                @endif
            </div>
            <hr class="line">
            <div class="text message">
                {!! nl2br($textMessage->content) !!}
            </div>
        </div>

        <div class="content company">
            <div class="title company">
                @if($titleCompany == null)
                    <div class="title-content">
                        <img src="{{ asset($logoImg1->file_path . $logoImg1->file_name) }}" alt="ロゴ">
                        <h1>Company Info</h1>
                    </div>
                @else
                    <img src="{{ asset($titleCompany->file_path . $titleCompany->file_name) }}" alt="TOP画像">
                @endif
            </div>
            <hr class="line">
            <div class="text company">
                <table class="table company">
                    @foreach ($textCompany as $company)
                        <tr>
                            <th>
                                {{$company["view_name"]}}
                            </th>
                            <td>
                                {!! nl2br($company["value"]) !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <div class="content philosophy">
            <div class="title philosophy">
                @if($titlePhilosophy == null)
                    <div class="title-content">
                        <img src="{{ asset($logoImg1->file_path . $logoImg1->file_name) }}" alt="ロゴ">
                        <h1>Philosophy</h1>
                    </div>
                @else
                    <img src="{{ asset($titlePhilosophye->file_path . $titlePhilosophy->file_name) }}" alt="タイトル画像">
                @endif
            </div>
            <hr class="line">
            <div class="text philosophy">
                {!! nl2br($textPhilosophy->content) !!}
            </div>
        </div>

        <div class="content contact">
            <div class="title contact">
                @if($titleContact == null)
                    <div class="title-content">
                        <img src="{{ asset($logoImg1->file_path . $logoImg1->file_name) }}" alt="ロゴ">
                        <h1>Contact</h1>
                    </div>
                @else
                    <img src="{{ asset($titleContact->file_path . $titleContact->file_name) }}" alt="TOP画像">
                @endif
                <span class="business-hours">※平日12:00~19:00</span>
            </div>
            <hr class="line">
            <div class="text contact">
                <table class="table contact">
                    @foreach ($textContact as $contact)
                        <tr>
                            <th>
                                {{$contact["view_name"]}}
                            </th>
                            <td>
                                {!! nl2br($contact["value"]) !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <footer class="footer">
            <img src="{{ asset($logoImg2->file_path . $logoImg2->file_name) }}" alt="ロゴ">
        </footer>
    </div>
@endsection