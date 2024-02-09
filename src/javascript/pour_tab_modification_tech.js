document.querySelectorAll('.tech').forEach(function(button) {
    button.addEventListener('click', function() {
        this.className = "tech_S"
        document.getElementById('popup_tech').style.display = 'block';
    });
});
document.querySelector('.form_tech').addEventListener('submit', function(e) {
    e.preventDefault();
    var ticketId = document.querySelector('.tech_S').value;
    var selectedUrgence = getSelectedtech('technicien_select');
    modtech(ticketId, selectedUrgence);
    fermerPopup_tech();
});
function fermerPopup_tech() {
    document.getElementById('popup_tech').style.display = 'none';
}
function modtech(ticketId, urgence) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "modifier_tech.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("id=" + ticketId + "&tech=" + urgence);
}
function getSelectedtech(selectId) {
    var selectElement = document.getElementById(selectId);
    var selectedValue = selectElement.value;
    return selectedValue;
}