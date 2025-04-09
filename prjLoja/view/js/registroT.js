document.getElementById('registroForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita o envio do formulário padrão

    // Obter os valores dos campos de entrada
    var name = document.getElementById('nome').value;
    var preco = document.getElementById('preco').value;

    window.location.href = 'confirmacao_registro.html';
});
