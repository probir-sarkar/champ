var x = setInterval(function () {
    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById(
      id
    ).innerHTML = `<span class='big'>${days}</span><span class='small'>DAYS </span><span class='big'>${hours}</span><span class='small'>HOURS </span><span class='big'>${minutes}</span><span class='small'>MINUTES </span><span class='big'>${seconds}</span><span class='small'>SECONDS</span>`;

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById(id).innerHTML = "EXPIRED";
    }
}, 1000);
