console.log("Convert your currencies")

function getInputvalue() {
        // Selecting the input element and get its value 
         let inputVal = document.getElementById("input1").value;
         var result = document.getElementById('input2');
         result.innerHTML = inputVal * 75;
         var result = document.getElementById('input3');
         result.innerHTML = inputVal * 45;
         var result = document.getElementById('input4');
         result.innerHTML = inputVal * 23;
        }
        let reset = document.getElementById('button1')
        reset.addEventListener('click',function(){
     
     var div = document.getElementById('input2')
     var div = document.getElementById('input3')
     var div = document.getElementById('input4')
     div.innervalue = " ";
        })     

    let inputVal = document.getElementById("input1").value = " ";
    $('#button2').click( function(){
        confirm("Enter the value first")
    }) 