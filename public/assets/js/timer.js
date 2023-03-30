let section = document.querySelector("section"),
    icons = document.querySelector(".icons");


// creating a function and calling it in every seconds
setInterval(() => {

    let date = new Date(),
        hour = date.getHours(),
        min = date.getMinutes(),
        sec = date.getSeconds();

    // alert(date)

    let d;
    d = hour < 12 ? "AM" : "PM"; //if hour is smaller than 12, than its value will be AM else its value will be pm
    hour = hour > 12 ? hour - 12 : hour; //if hour value is greater than 12 than 12 will subtracted ( by doing this we will get value till 12 not 13,14 or 24 )
    hour = hour == 0 ? hour = 12 : hour; // if hour value is  0 than it value will be 12

    // adding 0 to the front of all the value if they will less than 10
    hour = hour < 10 ? "0" + hour : hour;
    min = min < 10 ? "0" + min : min;
    sec = sec < 10 ? "0" + sec : sec;

    document.querySelector(".hour_num").innerText = hour;
    document.querySelector(".min_num").innerText = min;
    document.querySelector(".sec_num").innerText = sec;

}, 1000); // 1000 milliseconds = 1s

updateStatusForm.addEventListener("submit", (e) => {
    e.preventDefault();
    let newStatus       = document.getElementById("newStatus");
    let idIncident      = document.getElementById("idIncident");
    let CSRF            = document.getElementById("CSRF");
    let activarAlerta   = document.getElementById("alertt");


    $.ajax({
        url: '/incidents/updateIncidentStatus',
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': CSRF.value
        },
        data: {
            "_token": CSRF.value,
            "updateStatus": newStatus.value,
            "idIncident": idIncident.value,
        },
        dataType: 'JSON',
        success: function (response) {
            activarAlerta.innerHTML = "<div class=\"alert bg-teal alert-dismissible\" role=\"alert\"><button type=\"button\" className=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>"+response.msg+"</div>";
            document.getElementById("closeModal").click();
            document.querySelector(".statusPrincipal").innerText = newStatus.value
        },
        error: function (response) {
            activarAlerta.innerHTML = "<div class=\"alert bg-pink alert-dismissible\" role=\"alert\"><button type=\"button\" className=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>"+response.msg+"</div>";
        }
    });

});
