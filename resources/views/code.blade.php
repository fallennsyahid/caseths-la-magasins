<!-- resources/views/code.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon Checkout</title>
</head>

<body>
    <h2>Masukkan Kode Diskon</h2>

    <!-- Form untuk kode diskon -->
    <form action="{{ route('applyDiscount') }}" method="POST">
        @csrf
        <label for="code">Kode Diskon:</label>
        <input type="text" id="code" name="code" required>
        <button type="submit">Terapkan</button>
    </form>

    <!-- Area untuk menampilkan hasil -->
    @if (session('discount_message'))
        <div>
            <p>{{ session('discount_message') }}</p>
            @if (session('final_price'))
                <p>Diskon: {{ session('discount') }}%</p>
                <p>Jumlah Diskon: Rp {{ number_format(session('discount_amount')) }}</p>
                <p>Total Harga Setelah Diskon: Rp {{ number_format(session('final_price')) }}</p>
            @endif
        </div>
    @endif
</body>

</html>
