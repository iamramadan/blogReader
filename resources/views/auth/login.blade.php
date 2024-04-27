@extends('layout.auth')
@section('form')
    @push('auth-title')
    Login
    @endpush
      <x-form.form action=''>
        <x-form.input label="email" type="email" placeholder="your email e.g example@gmail.com" name="email"/>
        <x-form.input label="password" type="password" placeholder="password" name="password" />
        <x-form.remember/>
        <x-form.alternative auth="signup"/>
        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
      </x-form.form>
@stop