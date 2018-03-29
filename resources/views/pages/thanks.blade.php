@extends('layout.layout')
@section('title', 'Спасибо')
@include('includes.menu')
@include('includes.footer')

@section('thanks')
    <h1>Спасибо, {{session()->get('userName', '')}}! Ваша заявка принята в работу</h1>
    @stop