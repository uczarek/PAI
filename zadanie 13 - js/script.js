        let button = document.getElementById("btn");

        function replaceText(){
            let h1 = document.getElementById("hello").textContent = "Udalo ci sie!";
        }

        function send(){
            let price = document.getElementById("price").value;
            let amount = document.getElementById("amount").value;

            document.getElementById("result").textContent = `Cena to: ${price*amount}zl`;
        }

        function calculate(){
            let length = document.getElementById("length").value;
            let width = document.getElementById("width").value;
            let surface = document.getElementById("surface").value;
            
            document.getElementById("result2").textContent = `Ilosc plytek: ${Math.ceil((length*width)/surface)}`
        }