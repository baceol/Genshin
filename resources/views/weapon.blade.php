@extends('layout.app')

@section('content')
    <div class="row g-3 justify-content-center">
        <div class="col-md-7 col-lg-8">
            <form method="post">
                <div class="row g-3">
                    <div class="col-4">
                        <label class="form-label">Weapon Type</label>
                        <select class="form-select mb-3" aria-label=".form-select-lg example" id="WeaponType" name="WeaponType" onchange="search()">
                            <option selected value="">All Element</option>
                            @foreach($WeaponType as $data)
                                <option value = "{{$data->id}}">{{$data->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="bd-example">
        <table class="table table-striped text-center align-middle">
            <thead>
                <tr>
                    <th scope="col">名前</th>
                    <th scope="col">写真</th>
                    <th scope="col">武器の種類</th>
                    <th scope="col">持ってる</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@stop

@section('script')
    <script>
        $(document).ready(function () {
            fetch();

            $(document).on('change', '#WeaponType', function () {
                let WeaponType = $(this).val();
                fetch(WeaponType);
            })
        });

        function fetch(WeaponType = '') {
            $.ajax({
                url: "{{route('WeaponSearch', app()->getLocale())}}",
                method: "GET",
                data: {WeaponType: WeaponType},
                dataType: "json",
                success:function (data) {
                    $('tbody').html(data.tableData);
                }
            });
        }
    </script>
@stop
