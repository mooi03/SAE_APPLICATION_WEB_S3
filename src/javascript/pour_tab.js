document.querySelectorAll('.num_ticket').forEach(function(button) {
    button.addEventListener('click', function() {
        var ticketId = this.value;
        afficherPopup(ticketId);
    });
});

function afficherPopup(ticketId) {
    // Utilisez AJAX pour récupérer le libellé associé à l'ID
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var libelle = xhr.responseText;
            document.getElementById('libelle').innerText = libelle;
            document.getElementById('popup').style.display = 'block';
        }
    };
    xhr.open("GET", "../php/get_libelle.php?id=" + ticketId, true);
    xhr.send();
}

function fermerPopup() {
    document.getElementById('popup').style.display = 'none';
}