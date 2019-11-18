function flagComment(id_event) {
    $.ajax({
        url: 'http://localhost:3000/flags',
        type: 'PATCH',
        data: {
            id: id_event,
            type: 1
        },
        dataType: "json"
    });
    alert("L'événement a été signalé");
}