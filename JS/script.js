document.getElementById('avaliacaoForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch('avaliar.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('resultado').innerText = data;
    })
    .catch(error => console.error('Erro:', error));
});
