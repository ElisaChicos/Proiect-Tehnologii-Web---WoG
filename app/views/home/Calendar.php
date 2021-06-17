<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/Calendar.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />

    <title>Calendar</title>
</head>
<body>
<script src="/app/wiews/home/JavaScriptFiles/calendar.js"></script>
  <div class="start-calendar">
  <ul class="menu">
    <li><img class="logo"src="/../public/images/LOGO.png" alt="LOGO"> </li>
    <li><a href="/app/views/home/Profil.php">Your profile</a></li>
    <li><a href="/app/views/home/Generator.php">Start workout</a></li>
    <li><a href="/app/views/home/Informations.php">Informations</a></li>
    <li><a href="/app/views/home/Statistics.php">Statistics</a></li>
    <li><a href="/app/views/home/Calendar.php">Calendar</a></li>
    <li class="signoutBtn" >
    <form method= "POST" action = "../phpFiles/logOut.php">
       <button type="submit" id="btnSignOut" name="logout">LogOut</button>
    </form>
    </li>
    </ul>

<div class="container">
  <div class="calendar">
    <div class="month">
    <i class="fas fa-angle-left prev"></i>
      <div class="date">
      <h1>June</h1>
      <p>Fri June 11,2021</p>
      </div>
      <i class="fas fa-angle-right next"></i>
    </div>
    <div class="weekdays">
   
    <div>Mon</div>
    <div>Tue</div>
    <div>Wed</div>
    <div>Thu</div>
    <div>Fri</div>
    <div>Sat</div>
    <div>Sun</div>
    </div>
    <div class="days">
    <div class="prev-date">30</div>
    <div class="prev-date">31</div>
    <div>1</div>
    <div>2</div>
    <div>3</div>
    <div>4</div>
    <div>5</div>
    <div>6</div>
    <div>7</div>
    <div>8</div>
    <div>9</div>
    <div>10</div>
    <div class="today">11 </div>
    <div>12</div>
    <div>13</div>
    <div>14</div>
    <div>15</div>
    <div>16</div>
    <div>17</div>
    <div>18</div>
    <div>19</div>
    <div>20</div>
    <div>21</div>
    <div>22</div>
    <div>23</div>
    <div>24</div>
    <div>25</div>
    <div >26</div>
    <div>27</div>
    <div>28</div>
    <div>29</div>
    <div>30</div>
    <div>31</div>
    <div class="next-day">1</div>
    <div class="next-day">2</div>
    </div>
  </div>
</div>
<div id="demo-add-delete-event"></div>

<div id="demo-add-popup">
    <div class="mbsc-form-group">
        <label>
            Title
            <input mbsc-input id="event-title">
        </label>
        <label>
            Description
            <textarea mbsc-textarea id="event-desc"></textarea>
        </label>
    </div>
    <div class="mbsc-form-group">
        <label for="event-all-day">
            All-day
            <input mbsc-switch id="event-all-day" type="checkbox" />
        </label>
        <label for="start-input">
            Starts
            <input mbsc-input id="start-input" />
        </label>
        <label for="end-input">
            Ends
            <input mbsc-input id="end-input" />
        </label>
        <div id="event-date"></div>
        <label>
            Show as busy
            <input id="event-status-busy" mbsc-segmented type="radio" name="event-status" value="busy">
        </label>
        <label>
            Show as free
            <input id="event-status-free" mbsc-segmented type="radio" name="event-status" value="free">
        </label>
        <div class="mbsc-button-group">
            <button class="mbsc-button-block" id="event-delete" mbsc-button data-color="danger" data-variant="outline">Delete event</button>
        </div>
    </div>
</div>





</body>
</html>
<script>
  const date = new Date();

const renderCalendar = () => {
  date.setDate(1);

  const monthDays = document.querySelector(".days");

  const lastDay = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDate();

  const prevLastDay = new Date(
    date.getFullYear(),
    date.getMonth(),
    0
  ).getDate();

  const firstDayIndex = date.getDay();

  const lastDayIndex = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDay();

  const nextDays = 7 - lastDayIndex - 1;

  const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];

  document.querySelector(".date h1").innerHTML = months[date.getMonth()];

  document.querySelector(".date p").innerHTML = new Date().toDateString();

  let days = "";

  for (let x = firstDayIndex; x > 0; x--) {
    days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
  }

  for (let i = 1; i <= lastDay; i++) {
    if (
      i === new Date().getDate() &&
      date.getMonth() === new Date().getMonth()
    ) {
      days += `<div class="today">${i}</div>`;
    } else {
      days += `<div>${i}</div>`;
    }
  }

  for (let j = 1; j <= nextDays; j++) {
    days += `<div class="next-date">${j}</div>`;
    monthDays.innerHTML = days;
  }
};

document.querySelector(".prev").addEventListener("click", () => {
  date.setMonth(date.getMonth() - 1);
  renderCalendar();
});

document.querySelector(".next").addEventListener("click", () => {
  date.setMonth(date.getMonth() + 1);
  renderCalendar();
});

renderCalendar();




mobiscroll.setOptions({
    theme: 'ios',
    themeVariant: 'light'
});

var oldEvent,
    tempEvent = {},
    deleteEvent,
    restoreEvent,
    titleInput = document.getElementById('event-title'),
    descriptionTextarea = document.getElementById('event-desc'),
    allDaySwitch = document.getElementById('event-all-day'),
    freeSegmented = document.getElementById('event-status-free'),
    busySegmented = document.getElementById('event-status-busy'),
    deleteButton = document.getElementById('event-delete'),
    datePickerResponsive = {
        medium: {
            controls: ['calendar'],
            touchUi: false
        }
    },
    datetimePickerResponsive = {
        medium: {
            controls: ['calendar', 'time'],
            touchUi: false
        }
    },
    now = new Date(),
    myData = [{
        id: 1,
        start: new Date(now.getFullYear(), now.getMonth(), 8, 13),
        end: new Date(now.getFullYear(), now.getMonth(), 8, 13, 30),
        title: 'Lunch @ Butcher\'s',
        color: '#26c57d'
    }, {
        id: 2,
        start: new Date(now.getFullYear(), now.getMonth(), now.getDate(), 15),
        end: new Date(now.getFullYear(), now.getMonth(), now.getDate(), 16),
        title: 'General orientation',
        color: '#fd966a'
    }, {
        id: 3,
        start: new Date(now.getFullYear(), now.getMonth(), now.getDate() - 1, 18),
        end: new Date(now.getFullYear(), now.getMonth(), now.getDate() - 1, 22),
        title: 'Dexter BD',
        color: '#37bbe4'
    }, {
        id: 4,
        start: new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1, 10, 30),
        end: new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1, 11, 30),
        title: 'Stakeholder mtg.',
        color: '#d00f0f'
    }];

function createAddPopup(elm) {
    // hide delete button inside add popup
    deleteButton.style.display = 'none';

    deleteEvent = true;
    restoreEvent = false;

    // set popup header text and buttons for adding
    popup.setOptions({
        headerText: 'New event',
        buttons: ['cancel', {
            text: 'Add',
            keyCode: 'enter',
            handler: function () {
                calendar.updateEvent({
                    id: tempEvent.id,
                    title: tempEvent.title,
                    description: tempEvent.description,
                    allDay: tempEvent.allDay,
                    start: tempEvent.start,
                    end: tempEvent.end,
                    color: tempEvent.color,
                });

                // navigate the calendar to the correct view
                calendar.navigate(tempEvent.start);

                deleteEvent = false;
                popup.close();
            },
            cssClass: 'mbsc-popup-button-primary'
        }]
    });

    // fill popup with a new event data
    mobiscroll.getInst(titleInput).value = tempEvent.title;
    mobiscroll.getInst(descriptionTextarea).value = '';
    mobiscroll.getInst(allDaySwitch).checked = true;
    range.setVal([tempEvent.start, tempEvent.end]);
    mobiscroll.getInst(busySegmented).checked = true;
    range.setOptions({ controls: ['date'], responsive: datePickerResponsive });

    // set anchor for the popup
    popup.setOptions({ anchor: elm });

    popup.open();
}

function createEditPopup(args) {
    var ev = args.event;

    // show delete button inside edit popup
    deleteButton.style.display = 'block';

    deleteEvent = false;
    restoreEvent = true;

    // set popup header text and buttons for editing
    popup.setOptions({
        headerText: 'Edit event',
        buttons: ['cancel', {
            text: 'Save',
            keyCode: 'enter',
            handler: function () {
                var date = range.getVal();
                // update event with the new properties on save button click
                calendar.updateEvent({
                    id: ev.id,
                    title: titleInput.value,
                    description: descriptionTextarea.value,
                    allDay: mobiscroll.getInst(allDaySwitch).checked,
                    start: date[0],
                    end: date[1],
                    free: mobiscroll.getInst(freeSegmented).checked,
                    color: ev.color,
                });

                // navigate the calendar to the correct view
                calendar.navigate(date[0]);;

                restoreEvent = false;
                popup.close();
            },
            cssClass: 'mbsc-popup-button-primary'
        }]
    });

    // fill popup with the selected event data
    mobiscroll.getInst(titleInput).value = ev.title || '';
    mobiscroll.getInst(descriptionTextarea).value = ev.description || '';
    mobiscroll.getInst(allDaySwitch).checked = ev.allDay || false;
    range.setVal([ev.start, ev.end]);

    if (ev.free) {
        mobiscroll.getInst(freeSegmented).checked = true;
    } else {
        mobiscroll.getInst(busySegmented).checked = true;
    }

    // change range settings based on the allDay
    range.setOptions({
        controls: ev.allDay ? ['date'] : ['datetime'],
        responsive: ev.allDay ? datePickerResponsive : datetimePickerResponsive
    });

    // set anchor for the popup
    popup.setOptions({ anchor: args.domEvent.currentTarget });
    popup.open();
}

var calendar = mobiscroll.eventcalendar('#demo-add-delete-event', {
    clickToCreate: 'double',
    dragToCreate: true,
    dragToMove: true,
    dragToResize: true,
    view: {
        calendar: { labels: true }
    },
    data: myData,
    onEventClick: function (args) {
        oldEvent = { ...args.event };
        tempEvent = args.event;

        if (!popup.isVisible()) {
            createEditPopup(args);
        }
    },
    onEventCreated: function (args) {
        popup.close();
        // store temporary event
        tempEvent = args.event;
        createAddPopup(args.target);
    },
    onEventDeleted: function () {
        mobiscroll.snackbar({            button: {
                action: function () {
                    calendar.addEvent(args.event);
                },
                text: 'Undo'
            },
            message: 'Event deleted'
        });
    }
});

var popup = mobiscroll.popup('#demo-add-popup', {
    display: 'bottom',
    contentPadding: false,
    fullScreen: true,
    onClose: function () {
        if (deleteEvent) {
            calendar.removeEvent(tempEvent);
        } else if (restoreEvent) {
            calendar.updateEvent(oldEvent);
        }
    },
    responsive: {
        medium: {
            display: 'anchored',
            width: 400,
            fullScreen: false,
            touchUi: false
        }
    }
});

titleInput.addEventListener('input', function (ev) {
    // update current event's title
    tempEvent.title = ev.target.value;
});

descriptionTextarea.addEventListener('change', function (ev) {
    // update current event's title
    tempEvent.description = ev.target.value;
});

allDaySwitch.addEventListener('change', function () {
    var checked = this.checked
    // change range settings based on the allDay
    range.setOptions({
        controls: checked ? ['date'] : ['datetime'],
        responsive: checked ? datePickerResponsive : datetimePickerResponsive
    });

    // update current event's allDay property
    tempEvent.allDay = checked;
});

var range = mobiscroll.datepicker('#event-date', {
    controls: ['date'],
    select: 'range',
    startInput: '#start-input',
    endInput: '#end-input',
    showRangeLabels: false,
    touchUi: true,
    responsive: datePickerResponsive,
    onChange: function (args) {
        var date = args.value;
        // update event's start date
        tempEvent.start = date[0];
        tempEvent.end = date[1];
    }
});

document.querySelectorAll('input[name=event-status]').forEach(function (elm) {
    elm.addEventListener('change', function () {
        // update current event's free property
        tempEvent.free = mobiscroll.getInst(freeSegmented).checked;
    });
});

deleteButton.addEventListener('click', function () {
    // delete current event on button click
    calendar.removeEvent(oldEvent);
    popup.close();

    // save a local reference to the deleted event
    var deletedEvent = tempEvent;

    mobiscroll.snackbar({        button: {
            action: function () {
                calendar.addEvent(deletedEvent);
            },
            text: 'Undo'
        },
        message: 'Event deleted'
    });
});

</script>