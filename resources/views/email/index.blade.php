<html>
<head>
    <title>RSIA</title>
</head>
<body>
    <h3>No Antrian Anda: {{ $data['no'] }}</h3>
    <p>{{ $data['body'] }}</p><br/>
    <p>Nama Pasien: {{ $data['name'] }}</p>
    <p>No HP: {{ $data['phone'] }}</p>
    <p>Tanggal Lahir: {{ $data['birth'] }}</p>
    <p>Tanggal Periksa: {{ $data['treatment_date'] }}</p>
    <p>Dokter Tujuan : {{ $data['doctor_name'] }}</p>
    <p>Terima Kasih Telah Menggunakan Layanan Kami</p>
</body>
</html>
