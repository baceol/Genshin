@extends('layout.app')

@section('content')
    <div class="py-5 text-center">
        <h2>Auditor dan Auditee</h2>
    </div>

    <div class="row g-3 justify-content-center">
        <div class="col-md-7 col-lg-8">
            <form method="post">
                <div class="row g-3">

                    <hr/>

                    <div class="col-12">
                        <table class="table table-borderless text-center align-middle">
                            <tbody>
                            <tr>
                                <td>Auditor 1</td>
                                <td>
                                    <select class="form-select" aria-label=".form-select-lg example" name="auditor1" required>
                                        <option selected disabled value="">Pilih Auditor</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="initialAuditor1" placeholder="Inisial" required>
                                </td>
                                <td>
                                    <select class="form-select" aria-label=".form-select-lg example" name="jabatanAuditor1" required>
                                        <option selected disabled value="">Pilih Jabatan</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>Auditor 2</td>
                                <td>
                                    <select class="form-select" aria-label=".form-select-lg example" name="auditor2">
                                        <option selected disabled value="">Pilih Auditor</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="initialAuditor2" placeholder="Inisial">
                                </td>
                                <td>
                                    <select class="form-select" aria-label=".form-select-lg example" name="jabatanAuditor2">
                                        <option selected disabled value="">Pilih Jabatan</option>
                                    </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <hr/>

                    <div class="col-2">
                        <p>Auditee</p>
                    </div>

                    <div class="col-10">
                        <table class="table table-borderless text-center align-middle">
                            <tbody id="tbodyAuditee">
                            <tr>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td class="col-1">
                                    <button class="w-100 btn btn-secondary" type="submit" id="btnAdd">+</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div>
                        <div class="col-3 ms-auto">
                            <button class="w-100 btn btn-outline-success" type="submit" name="btnSave">Simpan</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
@stop

@section('script')
    <script>
        $(document).ready(function () {
            $(document).on('click', '#btnAdd', function () {
                $("#tbodyAuditee").append(
                    '<tr>\n' +
                    '    <td>\n' +
                    '        <input type="text" class="form-control" name="namaAuditee" placeholder="Nama Auditee">\n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '        <input type="text" class="form-control" name="initialAuditee" placeholder="Inisial">\n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '        <input type="text" class="form-control" name="jabatanAuditee" placeholder="Jabatan">\n' +
                    '    </td>\n' +
                    '    <td class="col-1">\n' +
                    '        <button class="w-100 btn btn-secondary" type="submit" name="btnRemove">-</button>\n' +
                    '    </td>\n' +
                    '</tr>'
                );
            });

            $("#tbodyAuditee").on("click", "button[name='btnRemove']", function(){
                $(this).closest('tr').remove();
            });
        });
    </script>
@stop

