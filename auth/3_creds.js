let API_AUTH = JSON.parse(localStorage.getItem(localStorageName));
if (!API_AUTH) {
    window.location.replace('./index.php');
}