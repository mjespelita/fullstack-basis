$(document).ready(function () {
    // Handle profile update button click event
    $('._update-profile').click(function (e) {
        e.preventDefault()
        // Get the input values for name, email, and password
        const name = $('._name').val();
        const email = $('._email').val();
        const password = $('._password').val();
        const confirmPassword = $('._confirm-password').val();

        if (password === confirmPassword) {
            // Send a POST request to the register API
            $.ajax({
                url: API_ENDPOINT + '/api/profile/update',
                method: "POST",
                headers: {
                    'Authorization': 'Bearer ' + API_AUTH.token
                },
                data: {
                    name: name,
                    email: email,
                    password: password,
                }, success: function (res) {
                    $('.notif').html(`<p class="text-success">${res.message}</p>`)

                    // Change the credentials on the local storage
                    API_AUTH.user = res.user;

                    localStorage.setItem(localStorageName, JSON.stringify(API_AUTH));
                    
                }, error: function (err) {
                    $('.notif').html(`<p class="text-danger">${err.responseJSON.message}</p>`)
                }
            })
        } else {
            $('.notif').html(`<p class="text-danger">Password doesn't match.</p>`)
        }
    });

    $('._name').val(API_AUTH.user.name)
    $('._email').val(API_AUTH.user.email)
})