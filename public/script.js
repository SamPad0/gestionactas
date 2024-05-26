document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('createActaForm')?.addEventListener('submit', handleFormSubmit);
    document.getElementById('createAsistenteForm')?.addEventListener('submit', handleFormSubmit);
    document.getElementById('createCompromisoForm')?.addEventListener('submit', handleFormSubmit);
    document.getElementById('createUserForm')?.addEventListener('submit', handleFormSubmit);
    document.getElementById('loginForm')?.addEventListener('submit', handleFormSubmit);
});

function handleFormSubmit(event) {
    event.preventDefault();

    const form = event.target;
    const formData = new FormData(form);
    const data = Object.fromEntries(formData.entries());
    const action = form.getAttribute('id').replace('Form', '');

    fetch('/index.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ action, ...data })
    })
    .then(response => response.json())
    .then(result => {
        if (result.status === 'success') {
            alert(result.message);
            form.reset();
        } else {
            alert(`Error: ${result.message}`);
        }
    })
    .catch(error => console.error('Error:', error));
}
