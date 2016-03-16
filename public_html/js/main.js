/**
 *
 */
$('.datepicker').datepicker({
    language: 'ru',
    format: 'dd.mm.yyyy',
    startDate: '-3d'
});

/**
 * График загрузки производства
 */
$(document).ready(function() {
    var state = $("#work_list").attr('data-list');

    if (typeof(state) === "undefined") {
        return;
    }

    $.ajax({
        url: '/task/get',
        dataType: "json",
        success: function(response){

            if (response.length < 1) {
                return;
            }

            $.each(response, function() {
                var order_id = this.o;
                var title = this.n;
                var id = this.i;

                $.each(this.l, function() {
                    var element = '.' + id + '_' + this;

                    var line = $('<p>').append(
                        $('<a>', {'href': '/order/view/' + order_id, 'target': '_blank'}).text(title)
                    );

                    $(element).append(line).addClass('success');
                });
            });
        }
    });
});