let heading2 = document.querySelector('h2');


let promise = new Promise(function(resolve, reject) {
  
  setTimeout(
    function() {
        resolve("En 2018 la France sera championne du monde !")
        
        //reject("En 2018 la France perdra contre l'Allemagne.")
    }, 5000);
});


promise
    .then(
        function(result) {

            heading2.textContent = result;
        })
    .catch(
        function(error) {
          
            heading2.textContent = "Ah bah non finalement : " + error;
        });


