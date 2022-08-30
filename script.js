const searchbtn = document.getElementById("search");
const selectoptions = document.getElementById("fruitname");
const grams = document.getElementById("grams");

const div=document.createElement("div");
div.setAttribute("class","nutrition");
const div2=document.createElement("div");
div2.innerHTML = '';
const ul=document.createElement("ul");
const li1=document.createElement("li");
const li2=document.createElement("li");
const li3=document.createElement("li");
const li4=document.createElement("li");
const li5=document.createElement("li");

//To create the options to select the fruit name
function createSelectOptions(data){
  data.forEach((fruit)=>{
    const fruitname=fruit.name;
    selectoptions.innerHTML+=`<option value=${fruitname}>${fruitname}</option>`;
  })
}

//To get the data from Fruityvice API
async function getData(type){
  let data;
    var url = {
        urlToGet: `https://fruityvice.com/api/fruit/${type}`
    }
    try {
        const response = await fetch("https://course-search-proxy.herokuapp.com", { 
          method : "POST",
          body: JSON.stringify(url),
          headers : {
            'Content-Type': 'application/json'
        }
        });
        data = await response.json();
      } catch (error) {
        console.log(error);
      }
      if(type!=='all')
      {
          return data;
      }
      else{
        createSelectOptions(data);
      }
}

getData("all");

//To calculate and display the nutrition values
function calculateNutritions(data,gram){
  const carbohydrates=((data.nutritions.carbohydrates*gram)/100).toFixed(3);
  const protein=((data.nutritions.protein*gram)/100).toFixed(3);
  const fat=((data.nutritions.fat*gram)/100).toFixed(3);
  const calories=((data.nutritions.calories*gram)/100).toFixed(3);
  const sugar=((data.nutritions.sugar*gram)/100).toFixed(3);
  console.log(carbohydrates,protein,fat,calories,sugar)
  
  
  div2.innerHTML = `By eating ${gram}g of ${data.name} you have consumed,`;
  li1.innerHTML = `${carbohydrates}g of Carbohydrates`;
  li2.innerHTML = `${protein}g of Protein`;
  li3.innerHTML = `${fat}g of Fat`;
  li4.innerHTML = `${calories}Cal of Calories`;
  li5.innerHTML = `${sugar}g of Sugar`;
  
  div.appendChild(div2);
  ul.appendChild(li1);
  ul.appendChild(li2);
  ul.appendChild(li3);
  ul.appendChild(li4);
  ul.appendChild(li5);
  div.appendChild(ul);
  document.body.appendChild(div);
}

//To get the nutritions for the selected fruit
async function getNutritions(){
 const fname=selectoptions.value;
 const gram=parseInt(grams.value);
 console.log(gram,typeof(gram));
 if(fname==='--select--'){
   alert("Please select the fruit")
   div.innerHTML = '';
 }
 else if( typeof(gram) !== 'number' || isNaN(gram)){
   alert(`Please enter the valid input for 'Fruit consumed'`)
   div.innerHTML = '';
 }
 else{
    try {
      const data = await getData(fname);
      calculateNutritions(data,gram);
    } catch (error) {
      console.log(error);
    }
 }
}

searchbtn.addEventListener('click',getNutritions);