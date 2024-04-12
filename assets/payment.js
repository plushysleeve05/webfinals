var paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener('submit', payWithPaystack, false);

function payWithPaystack(e) {
    e.preventDefault();
    var handler = PaystackPop.setup({
        key: 'pk_test_69b9e72f8bcb87b9f86c8bfd0bbdcdbe6f2b76e1', // Replace with your public key
        email: document.getElementById('email').value,
        amount: document.getElementById('total').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
        // Use an online api to convert the currence to Ghana cedis

        currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars
        ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        // label: "Optional string that replaces customer email"
        callback: function (response) {
            //this happens after the payment is completed successfully
            // Make an AJAX call to your server with the reference to verify the transaction
            $.ajax({
                type: 'GET',
                url: 'actions/paystack_payment.php?reference=' + response.reference,
                success: function (data) {
                    // submit the form
                    paymentForm.submit();


                }
            });
        },
        onClose: function () {
            alert('Transaction was not completed, window closed.');
        },
    });
    handler.openIframe();
}