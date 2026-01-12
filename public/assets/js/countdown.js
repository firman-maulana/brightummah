(function ($) {
	"use strict";

    // countdown js here
    function it_date_date() {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        const countdownElement = $('.it-date-countdown');
        const targetDate = countdownElement.data('date');
        const countDownDate = new Date(targetDate).getTime();

        function updateCountdown() {
            const now = new Date().getTime(),
                distance = countDownDate - now;

            // Calculate values
            let days = Math.floor(distance / day);
            let hours = Math.floor((distance % day) / hour);
            let minutes = Math.floor((distance % hour) / minute);
            let seconds = Math.floor((distance % minute) / second);

            // Format with leading zeros (e.g. 01, 02)
            days = String(days).padStart(2, '0');
            hours = String(hours).padStart(2, '0');
            minutes = String(minutes).padStart(2, '0');
            seconds = String(seconds).padStart(2, '0');

            // Update HTML
            $('#days').text(days);
            $('#hours').text(hours);
            $('#minutes').text(minutes);
            $('#seconds').text(seconds);

            if (distance < 0) {
                clearInterval(interval);
                $('#countdown').html("<span class='alert'>Event Expired</span>");
            }
        }
        updateCountdown();
        const interval = setInterval(updateCountdown, 1000);
    }

    it_date_date();


})(jQuery);
