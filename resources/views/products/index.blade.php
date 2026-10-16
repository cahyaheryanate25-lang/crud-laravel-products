@extends('layout')

@section('content')
<!-- Ringkasan Statistik -->
<div class="row mb-4">
    <div class="col-md-6 mb-3 mb-md-0">
        <div class="card border-0 shadow-sm bg-white">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="bg-primary bg-opacity-10 text-primary p-3 rounded-circle">
                    <i class="bi bi-box-seam fs-3"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1">Total Jenis Produk</h6>
                    <h3 class="fw-bold mb-0">{{ count($products) }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card border-0 shadow-sm bg-white">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="bg-success bg-opacity-10 text-success p-3 rounded-circle">
                    <i class="bi bi-stack fs-3"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1">Total Unit Stok</h6>
                    <h3 class="fw-bold mb-0">{{ $products->sum('stok') }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tabel Data Produk -->
<div class="card border-0 shadow-sm">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fw-bold text-secondary">
            <i class="bi bi-list-ul me-2"></i>Daftar Produk
        </h5>
        <a href="{{ route('products.create') }}" class="btn btn-primary px-3 shadow-sm">
            <i class="bi bi-plus-lg me-1"></i> Tambah Produk
        </a>
    </div>
    <div class="card-body p-0">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4" width="80">No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th class="text-end pe-4" width="200">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $key => $item)
                    <tr>
                        <td class="ps-4 fw-semibold text-secondary">{{ $key + 1 }}</td>
                        <td class="fw-bold text-dark">{{ $item->nama_produk }}</td>
                        <td><span class="badge bg-light text-dark fs-6 border fw-normal">Rp {{ number_format($item->harga, 0, ',', '.') }}</span></td>
                        <td>
                            @if($item->stok < 5)
                                <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-2 py-1">
                                    <i class="bi bi-exclamation-triangle-fill me-1"></i>{{ $item->stok }} Unit
                                </span>
                            @else
                                <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">
                                    {{ $item->stok }} Unit
                                </span>
                            @endif
                        </td>
                        <td class="text-end pe-4">
                            <form action="{{ route('products.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                                <a href="{{ route('products.edit', $item->id) }}" class="btn btn-outline-warning btn-sm me-1">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-5 text-muted">
                            <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                            Belum ada data produk tersimpan.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection