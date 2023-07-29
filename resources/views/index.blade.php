<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>R17 TEST RAFLI DWI F</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap, Fontawesome, Google Font -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/e4a753eb05.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


</head>

<body style="font-family: Poppins;">
    {{-- Navbar Aja --}}
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                R17 CANDIDATE TEST_RAFLI
            </a>
        </div>
    </nav>


    <div class="container pt-3">
        @if (session('delete'))
            <div class="alert alert-warning" role="alert">
                {{ session('delete') }}
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        @endif
        @if (session('add'))
            <div class="alert alert-success" role="alert">
                {{ session('add') }}
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
        @endif
        @if (session('edit'))
        <div class="alert alert-success" role="alert">
            {{ session('edit') }}
            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
    @endif
        <div class="row">
            {{-- <div class="col-md-12"> --}}
            <div class="card">
                <div class="card-header mt-3 mb-2 bg-warning text-dark "><span
                        style="font-size: 25px; margin-bottom:10px">{{ __('Data Pegawai PT. R17 Group') }}</span>
                    <div class="row align-items-end justify-content-between">
                        <div class="col-4 mt-3">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Tambah Data Pegawai <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                        <div class="col-4 mt-3">
                            <form action="{{ url('/search') }}" method="GET">
                                <div class="input-group">
                                    <div class="form-outline">
                                        <input id="search-input" type="search" id="form" name="form"
                                            class="form-control" />
                                    </div>
                                    <button id="search-button" type="button" class="btn btn-primary"><i
                                            class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span><i
                                            class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="input-group">
                                <form id="urlForm">
                                    <label for="urlInput">Masukkan URL JSON:</label>
                                    <div class="input-group">
                                        <input type="text" id="urlInput" class="form-control" name="url" placeholder="https://www.example.com/data.json"
                                            required>
                                        <button type="submit" class="btn btn-success">ya</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title text-white" id="exampleModalLabel">Formulir Tambah Data
                                    Pegawai</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('/') }}" method="POST">
                                    @csrf
                                    <div class="group pt-2">
                                        <label for="nama">Nama Pegawai</label>
                                        <input type="text" name="nama_pegawai" id="nama_pegawai" class="form-control"
                                            placeholder="Nama Pegawai" required>
                                    </div>
                                    <div class="group pt-3">
                                        <label for="jabatan">Jabatan</label>
                                        <select name="jabatan_id" id="jabatan_id" class="form-control" required>
                                            <option value="">Silahkan Pilih Jabatan Pegawai</option>
                                            @foreach ($jabatan as $j)
                                                <option value="{{ $j->id }}">{{ $j->nama_jabatan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="group pt-3">
                                        <label for="jabatan">Jenis Kelamin</label>
                                        <select name="jk_id" id="jk_id" class="form-control" required>
                                            <option value="">Silahkan Pilih Jenis Kelamin</option>
                                            @foreach ($jenis as $jk)
                                                <option value="{{ $jk->id }}">{{ $jk->jenis_kelamin }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="group pt-3">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" name="alamat" id="alamat" class="form-control"
                                            placeholder="alamat" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-success" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="tableHTML">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Pegawai</th>
                                <th scope="col">ID</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($employee as $e)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $e->nama_pegawai }}</td>
                                    <td>{{ $e->id }}</td>
                                    <td>{{ $e->jabatan->nama_jabatan }}</td>
                                    <td>{{ $e->jk->jenis_kelamin }}</td>
                                    <td>{{ $e->alamat }}</td>
                                    <td>
                                        <a type="button" class="btn btn-warning"
                                            data-bs-target="#EditModal{{ $e->id }}" data-bs-toggle="modal">
                                            <i class="fa-solid fa-pen-to-square"></i></a>
                                        <!-- Button trigger modal -->
                                        <a type="button" class="btn editbtn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop{{ $e->id }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>

                                <!-- Modal Hapus Data -->
                                <div class="modal fade modal-centered" id="staticBackdrop{{ $e->id }}"
                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">
                                                    Konfirmasi Penghapusan Data</h5>
                                                <button type="button" class="btn-close btn-light"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus data pegawai ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <a href="{{ route('employee.hapus', $e->id) }}"
                                                    class="btn btn-danger">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="EditModal{{ $e->id }}"
                                    aria-labelledby="EditModlLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h5 class="modal-title text-white" id="EditModalLabel">
                                                    Formulir Edit Data Pegawai</h5>
                                                <button type="button" class="btn-close btn-light"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('employee.update', $e->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="group pt-2">
                                                        <label for="nama">Nama Pegawai</label>
                                                        <input type="text" name="nama_pegawai" id="nama_pegawai"
                                                            class="form-control"
                                                            value="{{ $e->nama_pegawai }}">
                                                    </div>
                                                    <div class="group pt-3">
                                                        <label for="jabatan">Jabatan</label>
                                                        <select name="jabatan_id" id="jabatan_id"
                                                            class="form-control">
                                                            <option value="">Silahkan Pilih Jabatan
                                                                Pegawai</option>
                                                            @foreach ($jabatan as $j)
                                                                <option value="{{ $j->id }}"
                                                                    @if ($j->id == $e->jabatan_id) selected @endif>
                                                                    {{ $j->nama_jabatan }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="group pt-3">
                                                        <label for="jabatan">Jenis Kelamin</label>
                                                        <select name="jk_id" id="jk_id" class="form-control">
                                                            <option value="">Silahkan Pilih Jenis
                                                                Kelamin</option>
                                                            @foreach ($jenis as $jk)
                                                                <option value="{{ $jk->id }}"
                                                                    @if ($jk->id == $e->jk_id) selected @endif>
                                                                    {{ $jk->jenis_kelamin }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="group pt-3">
                                                        <label for="alamat">Alamat</label>
                                                        <input type="text" name="alamat" id="alamat"
                                                            class="form-control" value="{{ $e->alamat }}">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button class="btn btn-success" type="submit"
                                                            name="submit{{ $e->id }}">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col">
                        {{ $employee->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<script>
    document.getElementById("urlForm").addEventListener("submit", function(event) {
        event.preventDefault();

        const url = document.getElementById("urlInput").value;
        fetchJSONData(url);
    });

    function fetchJSONData(url) {
        fetch(url)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                const tableResultDiv = document.getElementById("tableResult");
                tableResultDiv.innerHTML = "<h2>Tabel HTML:</h2>" + jsonToTableHTML(data);
            })
            .catch(error => {
                const tableResultDiv = document.getElementById("tableResult");
                tableResultDiv.innerHTML = "<h2>Terjadi kesalahan:</h2><p>" + error.message + "</p>";
            });
    }

    function jsonToTableHTML(jsonData) {
        let tableHTML = "<table><tr>";

            
        // Mengambil kolom dari kunci objek pertama dalam data JSON
        for (const key in jsonData[0]) {
            tableHTML += "<th>" + key + "</th>";
        }

        tableHTML += "</tr>";

        // Membuat baris untuk setiap objek dalam data JSON
        for (const obj of jsonData) {
            tableHTML += "<tr>";

            for (const key in obj) {
                tableHTML += "<td>" + obj[key] + "</td>";
            }

            <td></td>

            tableHTML += "</tr>";
        }

        tableHTML += "</table>";
        return tableHTML;
    }
</script>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- Modal Edit Data Pegawai --}}
{{-- @foreach ($employee as $e) --}}


{{-- @endforeach --}}
