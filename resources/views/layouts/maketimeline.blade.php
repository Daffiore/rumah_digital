<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kegiatan Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">Tambah Kegiatan Baru</h5>
                </div>
                <div class="card-body">
                    <form action="/timeline/savetimelines" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label fw-bold">Nama Kegiatan</label>
                            <input type="text" class="form-control" id="title" name="title" required placeholder="Contoh: Rapat Kerja Tahunan, Pelatihan IT...">
                        </div>


                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">Deskripsi Kegiatan</label>
                            <textarea class="form-control" id="description" name="description" rows="5" required placeholder="Tulis rincian atau tujuan kegiatan di sini..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label fw-bold">Status Pelaksanaan</label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="" disabled selected>-- Pilih Status --</option>
                                <option value="Akan Datang">Akan Datang</option>
                                <option value="Berjalan">Berjalan</option>
                                <option value="Selesai">Selesai</option>
                            </select>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="start_date" class="form-label fw-bold">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="start_date" name="start_date" required>
                            </div>
                            
                            <div class="col-md-6 mt-3 mt-md-0">
                                <label for="end_date" class="form-label fw-bold">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="finished_date" name="finished_date" required>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark btn-lg">Simpan Kegiatan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>