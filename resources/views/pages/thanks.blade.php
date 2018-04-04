@extends('layout.layout')
@section('title', 'Спасибо')
@include('includes.sub-menu')
@include('includes.footer')
@yield('sub-menu')
@section('thanks')
    <h1>Спасибо, {{session()->get('userName', '')}}! Ваша заявка принята в работу</h1>
    @stop