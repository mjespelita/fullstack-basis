$(document).ready(function () {
    $('._logout-btn').click(function (res) {
        $.ajax({
            url: API_ENDPOINT + '/api/logout',
            method: 'POST',
            headers: {
                'Authorization': 'Bearer ' + API_AUTH.token
            }, success: function(res) {
                localStorage.removeItem(localStorageName);
                window.location.reload();
            }, error: function (err) {
                console.log(err);
            }
        })
    })
})