<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Laporan</title>
    <meta charset="UTF-8">
</head>

<body>

    <h2>Dashboard Laporan</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Laporan</th>
                <th>Tanggal</th>
                <th>Jenis Laporan</th>
                <th>Pemeriksa</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($laporans as $laporan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $laporan->nomor_laporan }}</td>
                    <td>{{ $laporan->tanggal_pemeriksaan }}</td>
                    <td>{{ $laporan->jenis_laporan }}</td>
                    <td>{{ $laporan->nama_pemeriksa ?? '-' }}</td>
                    <td>
                        <a href="/laporan/{{ $laporan->id }}/edit" target="_blank">Edit</a> |
                        <a href="/laporan/{{ $laporan->id }}/pdf" target="_blank">Download PDF</a> |

                        <form action="/laporan/{{ $laporan->id }}" method="POST" style="display:inline;"
                            onsubmit="return confirm('Yakin ingin menghapus laporan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="color:red;">
                                Hapus
                            </button>
                        </form>
                    </td>


                </tr>
            @empty
                <tr>
                    <td colspan="6" align="center">Belum ada laporan</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>

</html>
