@extends('layouts.default')
@extends('title',$user->name)

@extends()

{{ $user->name }}{{ $user->email }}

@stop