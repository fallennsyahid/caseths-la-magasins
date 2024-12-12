<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="" id="discount-form">
        <input type="text" name="code" id="code" placeholder="Masukkan Code Promo">
        <button type="button" onclick="applyDiscount()">Gunakan Code Promo</button>
    </form>

    <p id="discount-message"></p>
    <p>Total: <span id="total">{{ $total }}</span></p>
</body>

<script>
    function applyDiscount() {
        let code = document.querySelector('input[name="code"]').value;
        let total = {{ $total }}; // total awal yang didapat dari controller

        fetch('/apply-discount', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    code: code,
                    total: total
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('discount-message').textContent = `Diskon: -${data.discountAmount}`;
                    document.getElementById('total').textContent = data.newTotal;
                } else {
                    document.getElementById('discount-message').textContent = data.error;
                }
            });
    }
</script>

</html>
