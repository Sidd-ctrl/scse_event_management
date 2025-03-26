function showEventForm() {
    document.getElementById('event-form-container').classList.toggle('hidden');
}

function showGuidelines() {
    let modal = document.getElementById('guidelines-modal');
    
    if (modal) {
        modal.classList.remove('hidden'); 
        modal.style.display = "flex";
    } else {
        console.error("Modal element not found!");
    }
}

function closeGuidelines() {
    let modal = document.getElementById('guidelines-modal');
    
    if (modal) {
        modal.classList.add('hidden');
    }
}

window.onclick = function(event) {
    let modal = document.getElementById('guidelines-modal');
    if (event.target === modal) {
        modal.style.display = "none";
    }
};