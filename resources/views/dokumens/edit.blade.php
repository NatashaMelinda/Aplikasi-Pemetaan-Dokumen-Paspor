@extends('layouts.layout2')

@section('title', 'edit')

@section('content')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Forms</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="{{ url('/') }}">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/penyimpanan') }}">Penyimpanan</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/create') }}">Tambah Dokumen</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Tambah Dokumen Paspor</div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update', ['dokumen' => $dokumen->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nomor_permohonan" class="form-label">Nomor Permohonan</label>
                                    <input type="text" class="form-control" name="nomor_permohonan" id="nomor_permohonan" value="{{ $dokumen->nomor_permohonan }}" placeholder="Nomor Permohonan" required>
                                </div>
                                <div class="form-group">
                                    <label for="nomor_paspor" class="form-label">Nomor Paspor</label>
                                    <input type="text" class="form-control" id="nomor_paspor" name="nomor_paspor" value="{{ old('nomor_paspor') ?? $dokumen->nomor_paspor }}" placeholder="Nomor Paspor" required>
                                </div>
                                <div class="form-group">
                                    <label for="nomor_ktp" class="form-label">Nomor KTP</label>
                                    <input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp" value="{{ old('nomor_ktp') ?? $dokumen->nomor_ktp }}" placeholder="Nomor KTP" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') ?? $dokumen->nama }}" placeholder="Nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') ?? $dokumen->tempat_lahir }}" placeholder="Tempat Lahir" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') ?? $dokumen->tanggal_lahir }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="penyimpanan" class="form-label">Penyimpanan</label>
                                    <input type="text" class="form-control" id="penyimpanan" name="penyimpanan" value="{{ old('penyimpanan') ?? $dokumen->penyimpanan }}" placeholder="Penyimpanan">
                                </div>
                                <div class="form-group">
                                    <label>Retensi Arsip</label><br>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="retensi_arsip" id="aktif" value="aktif" {{ (old('retensi_arsip') ?? $dokumen->retensi_arsip) =='aktif' ? 'checked': '' }}>
                                        <span class="aktif">Dokumen Aktif</span>
                                    </label>
                                    <label class="form-radio-label ml-3">
                                        <input class="form-radio-input" type="radio" name="retensi_arsip" id="inaktif" value="inaktif" {{ (old('retensi_arsip') ?? $dokumen->retensi_arsip) =='inaktif' ? 'checked': '' }}>
                                        <span class="inaktif">Dokumen Inaktif</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_input" class="form-label">Tanggal Input</label>
                                    <input type="date" class="form-control" id="tanggal_input" name="tanggal_input" value="{{ old('tanggal_input') ?? $dokumen->tanggal_input  }}" required>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
