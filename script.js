$( function() {
    $( "#datepicker" ).datepicker();
});

window.onload = function() {
    $.ajax({
        url: 'ajax/ajax.php',
        method: 'POST',
        dataType: 'json',
        data: {"lots": 3},
        success: function(data) {
            for (index = 0; index < data.length; index++) {
                console.log(data[index]);
                $(".item2-shop").append('<div class="items card1">\n' +
                    '                    <div class="card">\n' +
                    '                        <div class="card-description">\n' +
                    '                            <span>' + data[index][index]['title'] + '</span>\n' +
                    '                            <p>' + data[index][index]['description'] + '</p>\n' +
                    '                        </div>\n' +
                    '\n' +
                    '                        <div class="card-description-right">\n' +
                    '                            <span>Открытый аукцион</span>\n' +
                    '                            <span>Окончание приёма заявок:</span>\n' +
                    '                            <span class="date">' + data[index][index]['date_end'] + '</span>\n' +
                    '                            <a href="">' + data[index][index]['cost'] + ' ₽ </a>\n' +
                    '                        </div>\n' +
                    '                    </div>\n' +
                    '                </div>');
            }
        }
    });

}

