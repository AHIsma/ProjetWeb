function flagEvent(id_event) {

    console.log(id_event) ;
    $.ajax({
        url: 'http://localhost:3000/flag',
        type: 'PATCH',
        data: {
            id: id_event,
            type: 1
        },
        dataType: "json"
    });
    alert("L'événement a été signalé");
}