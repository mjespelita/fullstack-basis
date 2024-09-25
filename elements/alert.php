<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Alert with Checkmark and Error</title>
    <!-- Bootstrap CSS -->
    <link href="../assets/bootstrap/bootstrap5.3.0.min.css" rel="stylesheet">
    <style>
        .custom-alert {
            position: fixed;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1050;
            min-width: 300px;
            display: none;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .custom-alert h4 {
            margin: 0;
        }

        .custom-alert p {
            margin: 10px 0;
        }

        /* Success checkmark animation */
        .checkmark {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #28a745;
            display: inline-block;
            position: relative;
            animation: popIn 0.3s ease-out;
        }

        .checkmark::after {
            content: "";
            position: absolute;
            top: 18px;
            left: 15px;
            width: 22px;
            height: 12px;
            border: solid white;
            border-width: 0 0 6px 6px;
            transform: rotate(-45deg);
        }

        /* Error cross animation */
        .cross {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #dc3545;
            display: inline-block;
            position: relative;
            animation: popIn 0.3s ease-out;
        }

        .cross::before, .cross::after {
            content: '';
            position: absolute;
            top: 18px;
            left: 15px;
            width: 30px;
            height: 6px;
            background-color: white;
        }

        .cross::before {
            transform: rotate(45deg);
        }

        .cross::after {
            transform: rotate(-45deg);
        }

        /* Pop-in animation */
        @keyframes popIn {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Bootstrap Alert with Animation</h2>

        <!-- Buttons to trigger custom alerts -->
        <button class="btn btn-success" onclick="showCustomAlert('success')">Show Success Alert</button>
        <button class="btn btn-danger" onclick="showCustomAlert('error')">Show Error Alert</button>
    </div>

    <!-- Custom Alert -->
    <div class="alert custom-alert" role="alert" id="customAlert">
        <div id="alertIcon"></div>
        <h4 class="alert-heading" id="alertHeading"></h4>
        <p id="alertMessage"></p>
        <button class="btn btn-primary mt-2" onclick="closeCustomAlert()">OK</button>
    </div>

    <!-- Bootstrap JS -->
    <script src="../assets/bootstrap/bootstrap5.3.0.min.js"></script>

    <script>
        // Show the custom alert with type: success or error
        function showCustomAlert(type) {
            const alert = document.getElementById('customAlert');
            const alertIcon = document.getElementById('alertIcon');
            const alertHeading = document.getElementById('alertHeading');
            const alertMessage = document.getElementById('alertMessage');

            if (type === 'success') {
                alert.classList.add('alert-success');
                alert.classList.remove('alert-danger');
                alertHeading.textContent = 'Success!';
                alertMessage.textContent = 'Your action was successful.';
                alertIcon.innerHTML = '<div class="checkmark"></div>'; // Success checkmark
            } else {
                alert.classList.add('alert-danger');
                alert.classList.remove('alert-success');
                alertHeading.textContent = 'Error!';
                alertMessage.textContent = 'Something went wrong.';
                alertIcon.innerHTML = '<div class="cross"></div>'; // Error cross
            }

            alert.style.display = 'block';
            setTimeout(() => {
                alert.classList.add('show');
            }, 10); // Delay for smoother fade-in
        }

        // Close the custom alert
        function closeCustomAlert() {
            const alert = document.getElementById('customAlert');
            alert.classList.remove('show');
            setTimeout(() => {
                alert.style.display = 'none';
            }, 300); // Delay to match the fade-out transition
        }
    </script>
</body>
</html>
