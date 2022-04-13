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
        <h1>ユーザ一覧</h1>
        <table border="1">
        <tr>
            <th>ユーザID
            <th>ユーザ名
            <th>購入した「買うもの」の数
@foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}
            <td>{{ $user->name }}
            <td>{{ $user->shopping_list_num }}
@endforeach
        </table>
@endsection