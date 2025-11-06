<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pesan Kontak Baru</title>
</head>
<body style="font-family: Arial, sans-serif; line-height:1.6;">
    <h2>Ada pesan baru dari website Inaklug</h2>

    <p><strong>Nama:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Pesan:</strong></p>
    <p>{{ $messageText }}</p>

    <hr>
    <p style="font-size: 12px; color: #555;">Pesan ini dikirim melalui form kontak website Inaklug.</p>
</body>
</html>
