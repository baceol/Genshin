@extends('layout.app')

@section('content')
    <div class="py-5 text-center">
        <h2>Insert Character</h2>
    </div>

    <div class="row g-3 justify-content-center">
        <div class="col-md-7 col-lg-8">
            <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                <div class="row g-3">

                    <div class="col-12">
                        <label for="name" class="form-label">Character Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <div class="invalid-feedback">
                            Character Name Needed.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="element" class="form-label">Element</label>
                        <select class="form-select mb-3" aria-label=".form-select-lg example" id="element" name="element" required>
                            <option selected value="">All Element</option>
                            @foreach($elements as $data)
                                <option value = "{{$data->id}}">{{$data->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="weapon" class="form-label">Weapons</label>
                        <select class="form-select mb-3" aria-label=".form-select-lg example" id="weapon" name="weapon" required>
                            <option selected value="">All Element</option>
                            @foreach($weapons as $data)
                                <option value = "{{$data->id}}">{{$data->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="nationality" class="form-label">Nationality</label>
                        <input type="text" class="form-control" id="nationality" name="nationality" required>
                        <div class="invalid-feedback">
                            Character Nationality Needed.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="picture" class="form-label">Picture</label>
                        <input type="file" class="form-control" id="picture" name="picture" required>
                        <div class="invalid-feedback">
                            Character Picture Needed.
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" value="true" type="submit" name="btnSubmit">Simpan</button>
            </form>
        </div>
    </div>
@stop
