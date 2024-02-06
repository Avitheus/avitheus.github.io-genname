document.addEventListener('DOMContentLoaded', function() {
    var generateBtn = document.getElementById('generateBtn');
    var usernameElement = document.getElementById('username');

    generateBtn.addEventListener('click', function() {
        generateUsername();
    });

    function generateUsername() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                usernameElement.innerText = this.responseText;
            }
        };
        xhttp.open("GET", "generate.php", true);
        xhttp.send();
    }
});
