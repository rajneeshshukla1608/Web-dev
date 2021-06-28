console.log('lets prepare a magic notes website using javascript');


let addBtn = document.getElementById('create');
addBtn.addEventListener("click", function(e){

    let addText = document.getElementById("input1");
    let notes = localStorage.getItem("notes");
    if(notes == null) {
        notesobj = [];
    }
    else{
        notesobj = JSON.parse(notes);
    }
    notesobj.push(addText.Value);
    localStorage.setItem("notes", JSON.stringify(notesobj));
    addText.Value = "";
    console.log(notesobj);
    // showNotes();
})
// function showNotes() {
//     let notes = localStorage.getItem("notes");
//     if(notes == null) {
//         notesobj = [];
//     }
//     else{
//         notesobj = JSON.parse(notes);
//     }
//     let html = "";
//     notes.forEach(function(element,index){
//         html += `<div id="div2">
//         <h3>Notes1</h3>
//         <button href="#">Delete</button>
//     </div>`
        
//     });
// }





// let date = document.getElementById('date2');
// date.addEventListener('click', fun1);

// function fun1() {
//     date.innerHTML = Date();
//     console.log("thanks");
// }

// /*
// Further Features:
// 1. Add Title
// 2. Mark a note as Important
// 3. Separate notes by user
// 4. Sync and host to web server
// */