window.onload = function () {
    var getAjax = $('#statemant-recipient');
    var profile = $('.profile');
    getAjax.on('input', function () {
        if (this.value !== '') {
            $.ajax({
                url: 'request',
                data: {
                    "r": this.value
                },
                success: function (data) {
                    var obj = JSON.parse(data);
                    profile.html(`<p>Профайл: ${obj.profile}</p>
                    <p>Имя: ${obj.name}</p>`);
                }
            });
        }

        if (this.value === '') {
            profile.html("");
        }
    });
};