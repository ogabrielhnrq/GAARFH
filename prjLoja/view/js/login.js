document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita o envio do formulário padrão

    // Obter os valores dos campos de entrada
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // Aqui você pode adicionar a lógica para validar o email e a senha
    // Vou simular uma verificação simples para este exemplo
    if (email === 'usuario@exemplo.com' && password === 'senha123') {
        // Login bem-sucedido, redirecionar para a página inicial
        window.location.href = 'home.html';
    } else {
        // Exibir mensagem de erro
        document.getElementById('errorMessage').style.display = 'block';
    }
});
