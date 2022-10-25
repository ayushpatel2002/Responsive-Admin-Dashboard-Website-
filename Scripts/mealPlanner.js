// We start by making separate objects for lunch, dinner and breakfast   
const meal = {
    type: '',
    calories: '',
    meals: ''
}
// we have given id to the head in Healthy Habits page
function functionToExecute(p1) {
    meal.type = p1
    
    hidefunctionpage1()
    document.getElementById("p1").innerHTML = "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Please enter the number of calories intake per day and in how many meals you want to take...";
    hideorignal();

}
// This function is to get input from users for the number of meals and number of calories
function func1() {
    meal.calories = document.getElementById('input_calorie').value
    var a = document.getElementById("2").checked;
    var b = document.getElementById("3").checked;
    var c = document.getElementById("4").checked;
    var d = document.getElementById("5").checked;

    // If there is wrong input done by user while entering number of calories, this function will be called out  
    if(meal.calories=='' ||  isNaN(meal.calories)){
        showError()
        return;
    }
    // If there is no input done by user while entering number of meals, this function will be called out  
    if(a==false && b==false && c==false && d==false ){
        alert('Please check the number of meals')
        return;
    }
    // For the following code, the value selected in number of meals will be stored for further processing
    if (a == true) {
        meal.meals = document.getElementById('2').value
    }
    else if (b == true) {
        meal.meals = document.getElementById('3').value
    }
    else if (c == true) {
        meal.meals = document.getElementById('4').value
    }
    else if (d == true) {
        meal.meals = document.getElementById('5').value
    }
    hideorignal()



    document.getElementById('confirm').style.display='block'
    document.getElementById('p1').style.display='none'
    var x = document.getElementById('confirm');
    /* This part shows the final selections of the choices you have made for number of calories, 
    number of meals and meal type using innerHTML and if else statements */
    if (x.style.display==='block'){
        
        if (meal.type =='v'){
            document.getElementById('t').innerHTML='VEGETARIAN'
        }
        else if (meal.type =='nv'){
            document.getElementById('t').innerHTML='NON-VEGETARIAN'
        }
        else if (meal.type =='vg'){
            document.getElementById('t').innerHTML='VEGAN'
        }
        document.getElementById('c').innerHTML=meal.calories
        document.getElementById('m').innerHTML=meal.meals
    }
}
function showError(){
        document.getElementById("errorMsg").style.display = "block"                    
    }

    /* This part shows the final selections of the choices you have made for number of calories, 
    number of meals and meal type using innerHTML and if else statements */
function hidefunctionpage1() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }

}
// This function is to hide various divs in the meal planner one after other as we proceed in the process of meal planning.
// so as we proceed, we call this function so, it will hide previous steps and flash proceeding ones.
function hideorignal() {
    var x = document.getElementById('myDIV2');
    
    if (x.style.display === 'block') {
        
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

// This function is for reset button when you have selected type of meal, entered number of meals and calories
function reset_func(){
    
    const meal = {
        type: '',
        calories: '',
        meals: ''}
    document.getElementById('confirm').style.display='none';
    document.getElementById("p1").style.display='block';
    document.getElementById("myDIV").style.display='block';

}
// This function helps in  picking random food from respective meal types.
// to build this random picker function Stack overflow has helped a lot (https://stackoverflow.com/)
function pickRandomProperty(obj) {
    var result;
    var count = 0;
    for (var prop in obj)
        if (Math.random() < 1/++count)
        result = prop;
    return result;
}
// After filling all the attributes, this is for the done button and upon pressing on it, meal will be planned according to the needs
function done_func(){
    document.getElementById('confirm').style.display='none';
    document.getElementById('meal_showcase').style.display='block';
    // The following 4 objects represents 4 meals of Vegetarian diet
    // The food names and its calories
    const m1={'oats':200,'smoothie':125,'fruit dish':100, 'tandoori cottage_cheese':150, 'Poha':180}
    const m2={'banana pancakes':356, 'falafel':370,'Quorn Lunch Bowl':160}
    const m3={'paprika cheesey potato':170, 'pesto_salad':310, 'pineapple waffel':240}
    const m4={'veg noodles':175,'cheesy Nachos':387 , 'Veg steamed dim sums': 200, 'Veg Noodles': 350}
    const n={1:m1,2:m2,3:m3,4:m4}
    
        // The following 4 objects represents 4 meals of non-Vegetarian diet
    // The food names and its calories
    const nm1 = {"Pesto Chicken Bruschetta" : 202 , "Bacon Mushroom Sandwich": 130, "Lemon Chicken Sandwich": 210, "chicken mushroom pie": 190 }
    const nm2 = {"Fish curry": 215, "Tandoori Green Chicken": 240, "Coconut mushroom chicken": 103, "chicken with vegetable stew": 170 , "Fish with hot sauce": 140}
    const nm3 = {"chicken and rice soup with cream": 180, "Vegetable omelette": 167, "Cabbage sausage skillet": 171, "Keto shrimp Curry": 138, "Creamy warm chicken Salad": 160}
    const nm4 = {"steamed meat balls": 140, "kebabs": 120, "grilled fish cuts": 160, "oysters": 100}
    const nm={1:nm1,2:nm2,3:nm3,4:nm4}

        // The following 4 objects represents 4 meals of Vegan diet
    // The food names and its calories
    const vm1 = {"oats with almond milk": 180, "no bake flaxseed pancakes": 160, "carrot cake protein bar": 120, "chickpea burrito bowl": 260}
    const vm2 = {"vegan spaghetti squash Mac n cheese": 250, "chickpea sloppy joes": 190, "BBQ cauliflower with avocado bites": 175, "Vegan Italian pasta salad": 195, "Egan lentil chilli": 120 }
    const vm3 = {"Szechuan Tofu with Cauliflower": 271, "Summery Chickpea Salad": 145, "Tahini-Carrot Soup With Pistachios": 273, "Zesty Heirloom Gazpacho": 145}
    const vm4 = {"Fruit and Nut Butter": 125, "Guacamole and Crackers": 160, "Popcorn With Nutritional Yeast": 130}
    const nvm={1:vm1,2:vm2,3:vm3,4:vm4}
    
    // These are 4 arrays which would store calories of respective meals and its food after the user makes his choices
    const break_cal=[]
    const lunch_cal =[]
    const dinner_cal= []
    const snack_cal=[]
    // variable "a" is used for storing meal type
    var a =meal.type
    // first we initialize total calories as 0
    var tc=0
    // first we initialize number of meals as 1
    var mealNumber = 1

    
    const rec=[]
    const breakfast=[]
    const lunch= []
    const dinner= []
    const snack= []
    if (a=='v'){ 
            while(true){ 
                mealNumber=1
                if(tc>=meal.calories){
                    tc=tc-v
                    break;
                }
                for( const [key,value] of Object.entries(n)){
                    var randomProperty = pickRandomProperty(value)
                    /*console.log(randomProperty)*/
                    // 'v' is declared to pick out randomly value of calories of their respective food
                    v=value[randomProperty]
                    /* in this for loop after randomly picking calories of random food, 
                    until 'v' is less than 'tc' which means total calories, the loop will run */
                    tc=tc+v
                    if(tc>=meal.calories){
                      // break the loop if total calories becomes equal to inputted calories  
                    break;
                    }
                    
                    
                    
                    //console.log(tc)//
                    //console.log(meal.meals)//
                    // now we first push everything that is selected randomly into an array named rec 
                    rec.push(randomProperty)
                    if(meal.meals<mealNumber){
                        break;
                    }
                    // Now we sort the items according to the meal they are present in
                    if (value==m1){
                        breakfast.push(randomProperty)
                        break_cal.push(v)
                    }
                    if (value==m2){
                        lunch.push(randomProperty)
                        lunch_cal.push(v)
                    }
                    if (value==m3){
                        dinner.push(randomProperty)
                        dinner_cal.push(v)
                    }
                    if (value==m4){
                        snack.push(randomProperty)
                        snack_cal.push(v)
                    }
                    mealNumber=mealNumber+1
                    
                }
                
            }
        }
        // The above process was done for vegetarian, the same process is for non veg and vegan
    if (a=='nv'){ 
        while(true){
            mealNumber=1
            
            if(tc>=meal.calories){
                tc=tc-v
                break;
            }
            for( const [key,value] of Object.entries(nm)){
                var randomProperty = pickRandomProperty(value)
                /*console.log(randomProperty)*/
                v=value[randomProperty]
                
                tc=tc+v
                if(tc>=meal.calories){
                    
                break;
                }
                console.log(tc)
                /*console.log(meal.meals)*/
                rec.push(randomProperty)
                if(meal.meals<mealNumber){
                    break;
                }
                if (value==nm1){
                    breakfast.push(randomProperty)
                    break_cal.push(v)
                }
                if (value==nm2){
                    lunch.push(randomProperty)
                    lunch_cal.push(v)
                }
                if (value==nm3){
                    dinner.push(randomProperty)
                    dinner_cal.push(v)
                }
                if (value==nm4){
                    snack.push(randomProperty)
                    snack_cal.push(v)
                }
                mealNumber=mealNumber+1
                
            }
            
        }
        }
    if (a=='vg'){ 
        while(true){
            mealNumber=1
            if(tc>=meal.calories){
                tc=tc-v
                break;
            }
            for( const [key,value] of Object.entries(nvm)){
                var randomProperty = pickRandomProperty(value)
                /*console.log(randomProperty)*/
                v=value[randomProperty]
                
                tc=tc+v
                if(tc>=meal.calories){
                    break;
                }
                console.log(tc)
                /*console.log(meal.meals)*/
                rec.push(randomProperty)
                if(meal.meals<mealNumber){
                    break;
                }
                if (value==vm1){
                    breakfast.push(randomProperty)
                    break_cal.push(v)
                }
                if (value==vm2){
                    lunch.push(randomProperty)
                    lunch_cal.push(v)
                }
                if (value==vm3){
                    dinner.push(randomProperty)
                    dinner_cal.push(v)
                }
                if (value==vm4){
                    snack.push(randomProperty)
                    snack_cal.push(v)
                }
                mealNumber=mealNumber+1
                
            }
            
        }
    }
    /*console.log(rec)
    console.log('breakfast')
    console.log(breakfast)
    console.log('Lunch')
    console.log(lunch)
    console.log('Dinner')
    console.log(dinner)
    console.log('Snack')
    console.log(snack)*/
    
    // now we create array of objects for different meals
    k=[breakfast,lunch,dinner,snack]
    var breaky = {};
    breakfast.forEach(function(i) { breaky[i] = (breaky[i]||0) + 1;});
    var lunchy = {};
    lunch.forEach(function(i) { lunchy[i] = (lunchy[i]||0) + 1;});
    var din={}
    dinner.forEach(function(i) { din[i] = (din[i]||0) + 1;});
    var snacky= {}
    snack.forEach(function(i) { snacky[i] = (snacky[i]||0) + 1;});
    document.getElementById('meal_showcase').innerHTML+='<br>'+'   TOTAL CALORIE =  '+tc
    // This is for displaying calories for individual meal  
    var b_cal = 0
    var l_cal = 0
    var d_cal = 0
    var s_cal = 0
    // iterating over add and display calories
    for(i=0;i<break_cal.length;i++)
    {   
        b_cal=b_cal+break_cal[i]
        
    }
    for(i=0;i<lunch_cal.length;i++)
    {   
        l_cal=l_cal+lunch_cal[i]
        
    }
    for(i=0;i<dinner_cal.length;i++)
    {   
        d_cal=d_cal+dinner_cal[i]
        
    }
    for(i=0;i<snack_cal.length;i++)
    {   
        s_cal=s_cal+snack_cal[i]
    }

    // Now we display food items according to the meal type(lunch, dinner, breakfast or snacks)
    for(const [key,value] of Object.entries(breaky)){
        
        document.getElementById('break').innerHTML += key+" " + '( servings '+ " " + value + ')' + '<br>'
    }
    document.getElementById('break').innerHTML += '<br>' +  'Total Calories of this meal ' + ':  '+ b_cal +'<br>'
    for(const [key, value] of Object.entries(lunchy)){
        document.getElementById('lunch').innerHTML += key+" " + '( servings '+ " " + value + ')' + '<br>'
    }
    document.getElementById('lunch').innerHTML +='<br>' +'Total Calories of this meal '+ ':  ' + l_cal +'<br>'
    for(const [key, value] of Object.entries(din)){
        document.getElementById('dinner').innerHTML += key+" " + '( servings '+ " " + value + ')' + '<br>'
    }
    document.getElementById('dinner').innerHTML +='<br>' + 'Total Calories of this meal '+ ':  ' + d_cal +'<br>'
    for(const [key, value] of Object.entries(snacky)){
        document.getElementById('snack').innerHTML += key+" " + '( servings '+ " " + value + ')' + '<br>'
    }
    document.getElementById('snack').innerHTML +='Total Calories of this meal '+ ':  ' + s_cal +'<br>'
    }