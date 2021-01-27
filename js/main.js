var query = location.search.slice(1);
var partes = query.split('&');
var data = {};
partes.forEach(function (parte) {
    var chaveValor = parte.split('=');
    var chave = chaveValor[0];
    var valor = chaveValor[1];
    data[chave] = valor;
});

if((data['nome'] !== "") && (data["nome"] !== undefined)) {
    alert("Obrigado por se inscrever " + decodeURI(data['nome'].toString()) + "!");	
}