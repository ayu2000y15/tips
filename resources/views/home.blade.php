@extends('layouts.app')

@section('title', 'HOME')

@section('content')
    <img class="top" src="{{ asset($hp->file_path . $hp->file_name) }}" alt="TOP画像">
    {{-- <a class="menu" href="">
        About us
    </a>
    <a class="menu" href="">
        Message
    </a>
    <a class="menu" href="">
        Philosophy
    </a>
    <a class="menu" href="">
        Company
    </a> --}}
    <a class="btn" href="mailto:info@tip-s.com">
        <img class="btn contact1" src="{{ asset($contactBtn1->file_path . $contactBtn1->file_name) }}" alt="contact">
    </a>
    <a class="btn" href="mailto:info@tip-s.com">
        <img class="contact2" src="{{ asset($contactBtn2->file_path . $contactBtn2->file_name) }}" alt="contact">
    </a>
    <a class="btn" href="mailto:info@tip-s.com">
        <img class="mail" src="{{ asset($mailBtn->file_path . $mailBtn->file_name) }}" alt="メール">
    </a>
    <a class="btn" href="tel:03-6840-1621">
        <img class="tel" src="{{ asset($telBtn->file_path . $telBtn->file_name) }}" alt="電話番号">
    </a>
@endsection