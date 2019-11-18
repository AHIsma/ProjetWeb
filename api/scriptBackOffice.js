//on récupère les données des formulaires et on les envoie à l'API node.js
function sendFormAddEvent() {
    $.post("http://localhost:3000/events", {
        name: $("#nameAE").val(),
        description: $("#descAE").val(),
        date: $("#dateAE").val(),
        price: $("#priceAE").val()
    }, function (data) {
        console.log(data);
    }, 'json');

    alert("L'événement a été ajouté");
}

function sendFormDeleteEvent() {
    $.ajax({
        url: 'http://localhost:3000/events',
        type: 'DELETE',
        data: {
            id: $("#idDE").val()
        },
        dataType: 'json'
    });

    alert("L'événement a été supprimé");
}

function sendFormEditEvent() {
    $.ajax({
        url: 'http://localhost:3000/events',
        type: 'PATCH',
        data: {
            name: $("#nameEE").val(),
            description: $("#descEE").val(),
            date: $("#dateEE").val(),
            price: $("#priceEE").val(),
            id: $("#idEE").val()
        },
        dataType: 'json'
    });

    alert("L'événement a été modifié");
}

function sendFormAddProduct() {
    $.ajax({
        url: 'http://localhost:3000/products',
        type: 'POST',
        data: {
            name: $("#nameAP").val(),
            description: $("#descAP").val(),
            price: $("#priceAP").val()
        },
        dataType: "json"
    });

    alert("Le produit a été ajouté");
}

function sendFormDeleteProduct() {
    $.ajax({
        url: 'http://localhost:3000/products',
        type: 'DELETE',
        data: {
            id: $("#idDP").val()
        },
        dataType: "json"
    });

    alert("Le produit a été supprimé");
}

function sendFormEditProduct() {
    $.ajax({
        url: 'http://localhost:3000/products',
        type: 'PATCH',
        data: {
            name: $("#nameEP").val(),
            description: $("#descEP").val(),
            price: $("#priceEP").val(),
            id: $("#idEP").val()
        },
        dataType: "json"
    });

    alert("Le produit a été modifié");
}

function sendFormFlagEvent() {
    let typeFP;
    if ($("#typeFP").val() == "Signaler")
    {
        typeFP = 1;
    }
    else if ($("#typeFP").val() == "Enlever le signalement")
    {
        typeFP = 0;
    }
    else
    {
        return;
    }
    $.ajax({
        url: 'http://localhost:3000/flag',
        type: 'PATCH',
        data: {
            id: $("#idFP").val(),
            //type: $("#typeFP").val()
            type: typeFP
        },
        dataType: "json"
    });
    if (typeFP)
    {
        alert("L'événement a été signalé");
    }
    else
    {
        alert("Le signalement a été supprimé");
    }
}

function sendFormAddArticle() {
    $.ajax({
        url: 'http://localhost:3000/articles',
        type: 'POST',
        data: {
            name: $("#nameAA").val(),
            content: $("#contentAA").val()
        },
        dataType: "json"
    });

    alert("L'article a été ajouté");
}

function sendFormDeleteArticle() {
    $.ajax({
        url: 'http://localhost:3000/articles',
        type: 'DELETE',
        data: {
            id: $("#idDA").val()
        },
        dataType: "json"
    });

    alert("L'article a été supprimé");
}

function sendFormEditArticle() {
    $.ajax({
        url: 'http://localhost:3000/articles',
        type: 'PATCH',
        data: {
            id: $("#idEA").val(),
            name: $("#nameEA").val(),
            content: $("#contentEA").val()
        },
        dataType: "json"
    });

    alert("L'article a été modifié");
}

function sendFormFlagEvent() {
    let typeFC;
    if ($("#typeFC").val() == "Signaler")
    {
        typeFC = 1;
    }
    else if ($("#typeFC").val() == "Enlever le signalement")
    {
        typeFP = 0;
    }
    else
    {
        return;
    }
    $.ajax({
        url: 'http://localhost:3000/comments',
        type: 'PATCH',
        data: {
            id: $("#idFC").val(),
            //type: $("#typeFC").val()
            type: typeFC
        },
        dataType: "json"
    });
    if (typeFC)
    {
        alert("Le commentaire a été signalé");
    }
    else
    {
        alert("Le signalement a été supprimé");
    }
}