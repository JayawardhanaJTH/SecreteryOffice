let date = new Date()

let dateGenerate = function(){
    const year = new Date(date.getFullYear(),date.getMonth()).getFullYear();
    
    //past month last day
    const pmlastDay = new Date(date.getFullYear(),date.getMonth(),0).getDate();

    //current month first day index
    const cmfirstDayIndex = new Date(date.getFullYear(),date.getMonth(),1).getDay();
    //current month last day index
    const cmlastDayIndex = new Date(date.getFullYear(),date.getMonth()+1,0).getDay();
    //current month last day 
    const cmlastDay = new Date(date.getFullYear(),date.getMonth()+1,0).getDate();

    const today = date.getDate();

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

    const monthDays = document.querySelector('.day');

    document.querySelector('.days h1').innerHTML
    = months[date.getMonth()];

    document.querySelector('.days p').innerHTML
    = date.toDateString();

    let days = "";

    for(let i = cmfirstDayIndex-1 ; i >= 0; i-- ){
        let temp = pmlastDay - i;
        days += '<div class="text-info">'+ temp +'</div>';
    }

    for(let i = 1; i <= cmlastDay;i++){
        if(i === today){
            days += '<div class="today">'+i+'</div>';
        }
        else{
            days += '<div>'+i+'</div>';
        }
    }

    if((cmfirstDayIndex == 5 && cmlastDay == 31) || (cmfirstDayIndex == 6 && cmlastDay == 31)){

        for(let i = cmlastDayIndex+1 ; i <= 6; i++ ){
            let temp = i - cmlastDayIndex;
            days += '<div class="text-info">'+ temp +'</div>';
        }
    }
    else if(cmfirstDayIndex == 6 && cmlastDay == 30){

        for(let i = cmlastDayIndex+1 ; i <= 6; i++ ){
            let temp = i - cmlastDayIndex;
            days += '<div class="text-info">'+ temp +'</div>';
        }
    }
    else{
        for(let i = cmlastDayIndex+1 ; i <= 13; i++ ){
            let temp = i - cmlastDayIndex;
            days += '<div class="text-info">'+ temp +'</div>';
        }
    }

    monthDays.innerHTML = days;
}



$('.pre').click(function(){
    date.setMonth(date.getMonth()-1);
    dateGenerate();
});

$('.next').click(function(){
    date.setMonth(date.getMonth()+1);
    dateGenerate();
})

dateGenerate();