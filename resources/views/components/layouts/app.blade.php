@extends('layouts.app')
@section('title', $title ?? 'Unimap')
@section('content')
{{$slot}}
@endSection()