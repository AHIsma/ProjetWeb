function flagComment(id_com) {
    $.ajax({
        url: 'http://localhost:3000/comments',
        type: 'PATCH',
        data: {
            id: id_com,
            type: 1
        },
        dataType: "json"
    });
    alert("Le commentaire a été signalé");
}