<!DOCTYPE html>
<html>

<head>
    <title>Payment</title>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
</head>

<body>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            snap.pay("{{ $snapToken }}", {
                onSuccess: function(result) {
                    console.log(result);
                    window.location.href = "{{ route('checkout.success') }}"
                },
                onPending: function(result) {
                    console.log(result);
                    window.location.href = "/order/pending/{{ $order_id }}";
                },
                onError: function(result) {
                    console.log(result);
                    window.location.href = "/order/error/{{ $order_id }}";
                }
            });
        });
    </script>
</body>

</html>
