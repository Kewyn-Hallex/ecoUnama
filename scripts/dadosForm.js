document.getElementById('deposit-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o envio padrão do formulário

    // Captura os dados do formulário
    const quantity = document.getElementById('quantity').value;
    const wasteType = document.getElementById('waste-type').value;

    // Exibe os dados em um alerta
    alert(`Quantidade de lixo entregue: ${quantity} kg\nTipo de lixo: ${wasteType}`);
});