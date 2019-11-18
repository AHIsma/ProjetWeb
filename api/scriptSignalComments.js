function flagComment() {
    $.ajax({
        url: 'http://localhost:3000/flag',
        type: 'PATCH',
        data: {
            id: $("#id_comnt"),
            type: 1
        },
        dataType: "json"
    });
    alert("Le commentaire a été signalé");
}