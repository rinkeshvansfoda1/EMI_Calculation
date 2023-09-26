$(document).ready(function () {
    $("#second").hide();
    $("#third").hide();
    $("#signupForm").validate({

        rules: {
            f_name: {
                required: true,
                minlength: 3
            },
            l_name: {
                required: true,
                minlength: 3
            },
            Email: {
                required: true,
                email: true
            },
            mobile: {
                required: true,
                minlength: 10,
                maxlength: 10
            },
            pan: {
                required: true,
            },
            aadhaar: {
                required: true,
                minlength: 12,
                maxlength:12
            }
        },
        messages: {
            f_name: {
                required: " Please enter a first name",
                minlength: " Atleast 3 characters needed!"
            },
            l_name: {
                required: " Please enter a last name",
                minlength: " Atleast 3 characters needed!"
            },
            mobile: {
                required: " Please enter a mobile number",
                minlength: " Mobile number must be consist of 10 digits",
                maxlength: " Mobile number must be consist of 10 digits"
            },
            pan: {
                required: " Please enter a pan"
            },
            aadhaar: {
                required: " Please enter a aadhaar",
                minlength: " Aadhar must be consist of 12 digits",
                maxlength: " Aadhar must be consist of 12 digits"
            }
        },
        submitHandler: function (form, event) {
            event.preventDefault();
            var firstName = $('#f_name').val();
            var lastName = $('#l_name').val();
            var email = $('#Email1').val();
            var mobile = $('#mobile').val();
            var pan = $('#pan').val();
            var aadhaar = $('#aadhaar').val();
            $("#first").hide();
            $("#third").hide();
            $("#second").show();
            $('#firstName').val(firstName);
            $('#lastName').val(lastName);
            $('#email').val(email);
            $('#mobile_no').val(mobile);
            $('#pan_no').val(pan);
            $('#aadhaar_no').val(aadhaar);

        }
    });

    $("#Form2").validate({

        rules: {
            amount: {
                required: true,
            },
            tenure: {
                required: true,
            },
            rate: {
                required: true,
            }
        },
        messages: {
            amount: {
                required: " Please enter a amount"
            },
            tenure: {
                required: " Please enter a tenure"
            },
            rate: {
                required: " Please enter a rate"
            }
        },
        submitHandler: function (form, event) {
            event.preventDefault();
            $("#first").hide();
            $("#second").hide();
            $("#third").show();
            var amount = document.getElementById("amount").value
            var tenure = document.getElementById("tenure").value
            var rate = document.getElementById("rate").value
            var result = document.getElementById('result')
            $('#amount1').val(amount);
            $('#tenure1').val(tenure);
            $('#rate1').val(rate);
            $.post("calculation.php", { amount: amount, tenure: tenure, rate: rate }, function (data) {
                // console.log(data)
                result.innerHTML = data
            })

        }
    });

    $("#calculate-btnbtn-btnbtn").click(function (event) {
        event.preventDefault()
        $("#first").hide();
        $("#second").hide();
        $("#third").show();
        $("#fourth").hide();
        var amount = document.getElementById("amount1").value
        var tenure = document.getElementById("tenure1").value
        var rate = document.getElementById("rate1").value
        var result = document.getElementById('result1')
        $.post("calculation.php", { amount: amount, tenure: tenure, rate: rate }, function (data) {
            console.log(data)
            result.innerHTML = data
        })
    })
})