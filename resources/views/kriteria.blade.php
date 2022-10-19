@extends('mainLayouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Kriteria </h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="col-md-10">
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="">Kode Kriteria</label>
                            <input type="text" class="form-control" id="" placeholder="Kode Kriteria">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Kriteria</label>
                            <input type="text" class="form-control" id="" placeholder="Nama Kriteria">
                        </div>
                        <div class="form-group">
                            <label for="">Bobot</label>
                            <input type="text" class="form-control" id="" placeholder="Bobot">
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">List Kriteria</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Kode Kriteria </th>
                                    <th> Nama Kriteria </th>
                                    <th> Bobot </th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Done</td>
                                    <td>Done</td>
                                    <td>Done</td>
                                    <td><a href="/subkriteria">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
