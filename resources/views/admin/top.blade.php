@extends('admin.layout')

{{-- メインコンテンツ --}}
@section('contets')
<menu label="リンク">
        <a href="/admin/top">管理画面Top</a><br>
        <table border="1">
        <a href="/admin/user/list">ユーザー一覧</a><br>
        <table border="1">
        <a href="/admin/logout">ログアウト</a><br>
        <table border="1">
</menu>
        <h1>管理画面</h1>
@endsection