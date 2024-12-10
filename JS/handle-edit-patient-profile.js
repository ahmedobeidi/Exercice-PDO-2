const showDiv = document.getElementById('showDiv');
const editDiv = document.getElementById('editDiv');
const editButton = document.getElementById('editButton');

editButton.addEventListener('click', handleEditDiv);

function handleEditDiv() {
    if (showDiv.style.display !== "none") {
        showDiv.style.display = "none"; 
        editDiv.style.display = "block";
    }
    else {
        showDiv.style.display = "block"; 
        editDiv.style.display = "none";
    }
}
