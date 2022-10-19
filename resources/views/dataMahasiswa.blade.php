@extends('mainLayouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Data Mahasiswa / Alternatif </h3>
        </div>
        <form class="forms-sample">
            <div class="form-group row">
                <label for="" class="col-sm-1 col-form-label">Kode Alternatif</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="" placeholder="Kode Alternatif">
                </div>
                <label for="" class="col-sm-1 col-form-label">Nama Alternatif</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="" placeholder="Nama Alternatif">
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="ms-3 btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Mahasiswa / Alternatif</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Kode Alternatif </th>
                                    <th> Nama Alternatif </th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
