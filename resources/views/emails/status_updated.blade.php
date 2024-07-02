<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pendaftaran Anda Telah Diupdate</title>
    <link href="{{ asset('web') }}/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f8f9fa;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #6c757d;
        }
        .table th, .table td {
            border-top: none;
        }
        .status-success {
            background-color: #d4edda;
            color: #155724;
        }
        .status-warning {
            background-color: #fff3cd;
            color: #856404;
        }
        .status-danger {
            background-color: #f8d7da;
            color: #721c24;
        }
        .user-photo {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .link-wrap {
            word-break: break-all;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="h4">Status Pendaftaran Anda Telah Diupdate</h1>
        </div>
        <div class="card">
            <div class="card-body text-center">
                <img src="{{ $pendaftaran->user->foto ? asset($pendaftaran->user->foto) : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png' }}" alt="User Photo" class="user-photo mb-3 rounded">
                <p>Halo <strong>{{ $pendaftaran->user->nama }}</strong>,</p>
                <p>Status pendaftaran Anda:</p>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Status</th>
                            <td class="@if($pendaftaran->status == 'Diterima') status-success @elseif($pendaftaran->status == 'Ditolak') status-danger @else status-warning @endif">
                                <strong>{{ $pendaftaran->status }}</strong>
                            </td>
                        </tr>
                        <tr>
                            <th>Dokumen Pendaftaran</th>
                            <td class="link-wrap">
                                <a href="{{ asset($pendaftaran->img_pendaftaran) }}" target="_blank">{{ asset($pendaftaran->img_pendaftaran) }}</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Dokumen Pernyataan/Perjanjian Santri</th>
                            <td class="link-wrap">
                                <a href="{{ asset($pendaftaran->img_pernyataanperjanjiansantri) }}" target="_blank">{{ asset($pendaftaran->img_pernyataanperjanjiansantri) }}</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Dokumen Pernyataan/Perjanjian Orang Tua</th>
                            <td class="link-wrap">
                                <a href="{{ asset($pendaftaran->img_pernyataanperjanjianorangtua) }}" target="_blank">{{ asset($pendaftaran->img_pernyataanperjanjianorangtua) }}</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                @if($pendaftaran->status == 'Diterima')
                    <div class="alert alert-success" role="alert">
                        Hai {{ $pendaftaran->user->nama }}, dokumen Anda sudah diverifikasi, antarkan persyaratan ke sekolah.
                    </div>
                @elseif($pendaftaran->status == 'Ditolak')
                    <div class="alert alert-danger" role="alert">
                        Anda belum diterima, tetap semangat!
                    </div>
                @else
                    <div class="alert alert-warning" role="alert">
                        Status pendaftaran Anda sedang diverifikasi.
                    </div>
                @endif
                <p>Terima kasih.</p>
            </div>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} al ma'arif. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
