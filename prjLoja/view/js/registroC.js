document.getElementById('registroForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita o envio do formulário padrão

    // Obter os valores dos campos de entrada
    var name = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var endereco = document.getElementById('endereco').value;
    var cidade = document.getElementById('cidade').value;
    var senha = document.getElementById('senha').value;

    window.location.href = 'confirmacao_registro.html';
});
