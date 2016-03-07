function addFields() {
    var number = document.getElementById("booking-stay-bedroom-number").value;
    var container = document.getElementById("booking-stay-bedroom-type-container");
    while (container.hasChildNodes()) {
        container.removeChild(container.lastChild);
    }

    var array = ["Type de chambre", "Chambre simple","Chambre double","Chambre twin"];

    for (var i = 0; i < number; i++) {
        container.appendChild(document.createTextNode("Chambre " + (i+1)));
        container.appendChild(document.createElement("br"));
        var select = document.createElement("select");
        select.setAttribute("name", "booking-stay-bedroom-type");
        select.required = true;
        container.appendChild(select);
        for (var k = 0; k < array.length; k++) {
            var option = document.createElement("option");
            if (k == 0) {
                option.setAttribute("value", "");
                option.disabled = true;
                option.selected = true;
                option.text = array[k];
            } else {
                option.setAttribute("value", array[k]);
                option.text = array[k];
            }
            select.appendChild(option);
        }
        container.appendChild(document.createElement("br"));
    }
}
