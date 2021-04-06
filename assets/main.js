$(window).load(function()
{
    $.ajax({
        url: 'http://test.tld/test.php',
        type: 'POST',
        success: function (data){

            var r = JSON.parse(data);
            var N = 5;
            // console.log(r);

            var newData = [];
            console.log(r);
            let la = [];
            for(var i = 0; i < r.length; i++){
                let year = r[i]['date'].substr(0, 4);
                let month = Number(r[i]['date'].substr(5, 2));
                let day = Number(r[i]['date'].substr(8, 2));

                if (r[i]['count'] < N){
                    r[i]['count'] = 1;

                }
                if (r[i]['count'] >= N){
                    r[i]['count'] = 0;
                    la.push({ date: new Date(year, --month, day) });
                }

            }

            $('input').glDatePicker(
                {
                    showAlways: true,
                    allowMonthSelect: false,
                    allowYearSelect: false,
                    prevArrow: '<',
                    nextArrow: '>',
                    selectedDate: new Date(2021, 3, 6),
                    selectableDateRange: [
                        { from: new Date(2021, 3, 6),
                            to: new Date(2022, 3, 6) },
                    ],
                    // selectableDates: la,
                    specialDates: la
                }
            );

        }
    })
});