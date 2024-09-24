$(document).ready(function () {

    // Retrieve the authentication data from local storage or set to an empty object if null
    let API_AUTH = JSON.parse(localStorage.getItem(localStorageName)) || {};

    // Handle login button click event
    $('._login-btn').click(function () {
        // Get the input values for email and password
        const email = $('._email').val();
        const password = $('._password').val();

        // Send a POST request to the login API
        $.post(API_ENDPOINT + '/api/login', { email, password })
            .done(function (res) {
                // Store the API response in local storage
                localStorage.setItem(localStorageName, JSON.stringify(res));
                // Redirect to the dashboard page
                window.location.replace('./dashboard.php')
            })
            .fail(function (err) {
                // Log error to console if request fails
                console.log(err);
            });
    });

    // Handle register button click event
    $('._register-btn').click(function () {
        // Get the input values for name, email, and password
        const name = $('._name').val();
        const email = $('._email').val();
        const password = $('._password').val();

        // Send a POST request to the register API
        $.post(API_ENDPOINT + '/api/register', { name, email, password })
            .done(function (res) {
                // Store the API response in local storage
                localStorage.setItem(localStorageName, JSON.stringify(res));
                // Redirect to the dashboard page
                window.location.replace('./dashboard.php')
            })
            .fail(function (err) {
                // Log error to console if request fails
                console.log(err);
            });
    });
});
