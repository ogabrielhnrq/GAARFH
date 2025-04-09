document.getElementById('purchaseForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita o envio do formulário padrão

    // Aqui você pode adicionar a lógica para processar a compra
    // Vou apenas redirecionar para uma página de confirmação neste exemplo
    window.location.href = 'confirmacao_compra.html';
});
