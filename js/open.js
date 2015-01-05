$(function () {
    var now = new Date();
    var today = now.getDay();
    var currentHoliday = isHoliday();

    if (currentHoliday == "Closed") {
        $("#sutter-time, #palladio-time, #midtown-time, #roseville-time").html("Closed For Holiday");
    } else {

        // Sutter Hours
        if (currentHoliday == "ChristmasEve") {
            if (today === 0 || today >=6) {
                $("#sutter").html("12:00 - 6:00 pm");
            } else {
                $("#sutter-time").html("Closed For Holiday");        
            }
        } else if (today === 0) {
            $("#sutter").html("12:00 - 9:00 pm");
        } else if (today <= 4) {
            $("#sutter").html("4:00 – 9:00 pm");
        } else if (today == 5) {
            $("#sutter").html("4:00 – 10:00 pm");
        } else {
            $("#sutter").html("12:00 - 10:00 pm");
        }

        // Palladio Hours
        if (currentHoliday == "ChristmasEve") {
            $("#palladio").html("11:30 - 6:00 pm");
        } else if (today <= 4) {
            $("#palladio").html("11:30 – 10:00 pm");
        } else {
            $("#palladio").html("11:30 – 11:00 pm");
        }

        // Midtown Hours
        if (currentHoliday == "ChristmasEve") {
            if (today === 0 || today >= 4) {
                $("#midtown").html("11:30 – 6:00 pm");
            } else {     
                $("#midtown-time").html("Closed For Holiday");
            }
        } else if (today === 0 || today == 4) {
            $("#midtown").html("11:30 – 10:00 pm");
        } else if (today <= 3) {     
            $("#midtown").html("4:00 – 10:00 pm");
        } else {
            $("#midtown").html("11:30 – 11:00 pm");
        }

        // Roseville Hours
        if (currentHoliday == "ChristmasEve") {
            $("#roseville").html("11:30 - 6:00 pm");
        } else if (today <= 4) {
            $("#roseville").html("11:30 – 9:00 pm");
        } else {
            $("#roseville").html("11:30 – 10:00 pm");
        }
    }

    function isHoliday() {
        var currentYear = now.getFullYear();
        var currentMonth = now.getMonth();
        var currentDate = now.getDate();

        if (currentMonth === 11) {
            if (currentDate === 24) {
                return "ChristmasEve";
            } else if (currentDate === 25) {
                return "Closed";
            } else {
                return false;
            }
        } else if (currentMonth === 10) {
            var nov1st = new Date(currentYear, 10, 1);
            var thanksGivingDay = 5 - nov1st.getDay();

            if (thanksGivingDay < 1) {
                thanksGivingDay += 7;
            }

            thanksGivingDay += 3 * 7;

            if (currentDate === thanksGivingDay && currentMonth === 10) {
                return "Closed";
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

});
