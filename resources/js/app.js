import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

// // Edit format date for the input in the view event create
// const dateControl = document.getElementById('start');
// const formCreateEvent = document.querySelector('.form-create-event');

// formCreateEvent.addEventListener('submit', (e)=>{
    
//     e.preventDefault()

//     const valueDateControl = dateControl.value;

//     // Create object Date
//     let date = new Date(valueDateControl);

//     // Parts of date
//     let year = date.getFullYear();
//     let month = (date.getMonth() + 1).toString().padStart(2, '0');
//     let day = date.getDate().toString().padStart(2, '0');
//     let hours = date.getHours().toString().padStart(2, '0');
//     let minutes = date.getMinutes().toString().padStart(2, '0');
//     let seconds = date.getSeconds().toString().padStart(2, '0');

//     // Format the date as desired
//     let dateFormatted = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;

//     document.getElementById('start').value = dateFormatted
//     dateControl.value = dateFormatted;
//     console.log(dateControl.value);
//     console.log(dateFormatted)
    
//     if(dateControl.value === dateFormatted){

//         formCreateEvent.submit();
//     }
// });


