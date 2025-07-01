function toggleImages(id , button)
{
    const container  = document.getElementById(id);
    
    if(window.getComputedStyle(container).display == "none")
    {
        container.style.display="block";
        button.textContent="View Less";
    }
    else{
        container.style.display="none";
        button.textContent="View More";
    }
}


function initMap()
{
    const stallLocation = {lat:13.0827 , lng:80.2707};
    const map = new google.maps.Map(document.getElementById("map"),{
        zoom:16,
        center : stallLocation,
    });
    new google.maps.Marker({
        position:stallLocation,
        map : map,
        title:"Night stall Location",
    });


}


function placeOrder()
{
    const checkboxes = document.querySelectorAll('input[name="item"]:checked');
    let orderdetails = " <h4> 🛒 Your Order:</h4><ul> ";
    let totalprice=0;
    checkboxes.forEach((checkbox)=>{
        console.log("value:" , checkbox.value);
        const [item , price] = checkbox.value.split("-");
        console.log("item: ",item,"price: ",price);
        totalprice+=parseInt(price);
        orderdetails+= `<li> ${item} - ₹${price}</li>`;
    });
orderdetails+= `   </ul> <strong>Total Price : ₹${totalprice} </strong> `
document.getElementById("ordersummary").innerHTML=orderdetails;

document.getElementById("map").style.display="block";
initMap()

alert("✅ Order placed successfully!");
}

const signUpForm = document.getElementById("register");
const signInForm = document.getElementById("login");
const gotoSignup = document.getElementById("goto-signup");
const gotoLogin = document.getElementById("goto-login");

gotoSignup.addEventListener('click' , function(e){
    e.preventDefault();
    signInForm.style.display="none";
    signUpForm.style.display="block";
    
})

gotoLogin.addEventListener('click' , function(e){
    e.preventDefault();
    signInForm.style.display="block";
    signUpForm.style.display="none";
})



