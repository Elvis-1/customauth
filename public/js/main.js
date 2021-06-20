let checkbox = document.getElementsByName('my-checkbox');

for(let element of checkbox) {
    element.addEventListener('click', function(event) {

        let obj = event.target.parentElement.classList;
      
       if (Object.values(obj).includes('active')) {
           obj.remove('active');
           
       }
        

    else
    {
     obj.add('active');

    }

    });
}

