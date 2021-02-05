const date = new Date();

const monthDays = document.querySelector('.day');

    //past month last day
const lastDay = new Date(date.getFullYear(),date.getMonth(),0).getDate();
console.log(lastDay);
//current month first day index
const firstDayIndex = new Date(date.getFullYear(),date.getMonth());

console.log(firstDayIndex);

const today = date.getDate();

const curr_mon_first_day_index = new Date(date.getFullYear(),date.getMonth(),1).getDay();
const curr_mon_last_day_index = date.getDay();
console.log(curr_mon_first_day_index);

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
    "December"
];

document.querySelector('.days h1').innerHTML
= months[date.getMonth()];

document.querySelector('.days p').innerHTML
= date.toDateString();

let days = "";

for(let i = 1; i <= lastDay;i++){
    if(i === today){
        days += '<div class="today">'+i+'</div>';
    }
    else{
        days += '<div>'+i+'</div>';
    }
}

monthDays.innerHTML = days;