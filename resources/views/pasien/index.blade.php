<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @if (@session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a class="btn btn-primary" href="{{ route('pasien.create') }}" role="button">Create Pasien</a>

    <div class="table-responsive mt-3">
        <table class="table table-striped table-hover table-bordered align-middle text-center text-middle">
            <thead class="table-primary align-middle text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">No Rekam Medis</th>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Golongan Darah</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($pasiens as $pasien)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $pasien->no_rekam_medis }}</td>
                        <td>{{ $pasien->nama_pasien }}</td>
                        <td>{{ $pasien->jenis_kelamin }}</td>
                        <td>{{ \Carbon\Carbon::parse($pasien->tanggal_lahir)->format('d-m-Y') }}</td>
                        <td>{{ $pasien->alamat }}</td>
                        <td>{{ $pasien->no_telepon }}</td>
                        <td>{{ $pasien->golongan_darah }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('pasien.edit', $pasien) }}"
                                role="button">Edit</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

</x-app>
