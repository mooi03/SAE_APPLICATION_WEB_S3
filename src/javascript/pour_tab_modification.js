document.querySelectorAll('.num_ticket').forEach(function(button) {
    button.addEventListener('click', function() {
        var ticketId = this.value;
        var libelle = getLibelle(ticketId);
        this.className = "num_ticket_S"
        document.getElementById('libelle').value = libelle;
        document.getElementById('popup').style.display = 'block';
    });
});
document.querySelectorAll('.urgence').forEach(function(button) {
    button.addEventListener('click', function() {
        this.className = "urgence_S"
        document.getElementById('popup_urgence').style.display = 'block';
    });
});






document.querySelector('.form').addEventListener('submit', function(e) {
    e.preventDefault();
    var libelle = document.getElementById('libelle').value;
    var ticketId = document.querySelector('.num_ticket_S').value;
    modLibelle(ticketId, libelle);
    fermerPopup();
});
document.querySelector('.form_urgence').addEventListener('submit', function(e) {
    e.preventDefault();
    var ticketId = document.querySelector('.urgence_S').value;
    var selectedUrgence = getSelectedUrgence();
    modUrgence(ticketId, selectedUrgence);
    fermerPopup();
});






function fermerPopup() {
    document.getElementById('popup').style.display = 'none';
    document.getElementById('popup_urgence').style.display = 'none';
}
function getLibelle(ticketId) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "../php/get_libelle.php?id=" + ticketId, false);
    xhr.send();
    return xhr.responseText;
}
function modLibelle(ticketId, libelle) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/modification_libelle.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("id=" + ticketId + "&libelle=" + libelle);
}
function modUrgence(ticketId, urgence) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/modifier_urgence.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("id=" + ticketId + "&urgence=" + urgence);
}
function getSelectedUrgence() {
    var radios = document.getElementsByName('radio');
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            return radios[i].value;
        }
    }
    return null;
}