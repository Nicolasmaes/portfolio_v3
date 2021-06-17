document.getElementById('submit').addEventListener('click', (event)=>{
let password = document.getElementById('input_password').value;
let confirmation = document.getElementById('input_confirmation').value;
console.log(password);
console.log(confirmation);
if(password!=confirmation)/* Si password est différent de confirmation */{
document.getElementById('error').innerHTML='Passwords don\'t match';
document.getElementById('error').style.color ='red';
event.preventDefault();
}else{
}
});