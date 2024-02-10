let ficcao_a = [];
let poema_a = [];
let biografia_a = [];


document.getElementById("gerenciador").addEventListener("submit", function(event) {
    event.preventDefault(); 

    

    let quantidade = parseInt(document.getElementById("quanti").value); 
    let categoria = document.querySelector('input[name="categoria"]:checked').value;
   
    switch (categoria) {
        case 'F':
            ficcao_a.push(quantidade);
            break;
        case 'P':
            poema_a.push(quantidade);
            break;
        case 'B':
            biografia_a.push(quantidade);
            break;
    }
    

    updateSaida();
    
    let radioFiccao = document.getElementById("ficcao");
    let radioPoema = document.getElementById('poema');
    let radioBiografia = document.getElementById('biografia');


    function updateSaida() {
        let output = "<h3>Estoque Atual:</h3>";
        output += "<p>Ficção (F): " + ficcao_a.reduce((a, b) => a + b, 0) +  "</p>";
        output += "<p>Poema (P): " + poema_a.reduce((a, b) => a + b, 0) + "</p>";
        output += "<p>Biografia (B): " + biografia_a.reduce((a, b) => a + b, 0) + "</p>";
        document.getElementById("saida").innerHTML = output;
    }

});





    
   
