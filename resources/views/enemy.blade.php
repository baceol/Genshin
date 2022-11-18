@extends('layout.app')

@section('content')
    <div class="bd-example">
        <table id="tableId" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">名前</th>
                    <th scope="col">写真</th>
                    <th scope="col">元素</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>アビスの魔術師</td>
                    <td>Test</td>
                    <td>炎</td>
                </tr>
            </tbody>
        </table>
    </div>
@stop