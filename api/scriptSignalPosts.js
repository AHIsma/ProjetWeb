function flagPost(id_post) {
    $.ajax({
        url: 'http://localhost:3000/posts',
        type: 'PATCH',
        data: {
            id: id_post,
            type: 1
        },
        dataType: "json"
    });
    alert("Le post a été signalé");
}